<?php
    header('Content-Type: application/json'); // Always respond in JSON format

    // --- Step 1: Check if all required POST inputs exist ---
    $requiredFields = ['instrument', 'deposit_currency', 'buy_sell', 'lots', 'open_price', 'close_price', 'pip_size'];
    $missing = [];

    foreach ($requiredFields as $field) {
        if (!isset($_POST[$field]) || $_POST[$field] === '') {
            $missing[] = $field;
        }
    }

    if (!empty($missing)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Missing required fields: ' . implode(', ', $missing)
        ]);
        exit;
    }

    // --- Step 2: Sanitize & validate numeric inputs ---
    $instrument = htmlspecialchars(trim($_POST['instrument']));
    $depositCurrency = htmlspecialchars(trim($_POST['deposit_currency']));
    $tradeType = strtolower(trim($_POST['buy_sell']));
    $lotSize = filter_var($_POST['lots'], FILTER_VALIDATE_FLOAT);
    $openPrice = filter_var($_POST['open_price'], FILTER_VALIDATE_FLOAT);
    $closePrice = filter_var($_POST['close_price'], FILTER_VALIDATE_FLOAT);
    $pipSize = filter_var($_POST['pip_size'], FILTER_VALIDATE_FLOAT);

    if ($lotSize === false || $openPrice === false || $closePrice === false || $pipSize === false) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid numeric input. Please check lots, open/close price and pip size.'
        ]);
        exit;
    }

    if (!in_array($tradeType, ['buy', 'sell'])) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid trade type. Use "buy" or "sell".'
        ]);
        exit;
    }

    if ($pipSize <= 0) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Pip size must be greater than zero.'
        ]);
        exit;
    }

    // --- Step 3: Calculate profit ---
    $profit = 0;
    if ($tradeType === 'buy') {
        $profit = ($closePrice - $openPrice) * $lotSize / $pipSize;
    } else {
        $profit = ($openPrice - $closePrice) * $lotSize / $pipSize;
    }

    // --- Step 4: Return JSON response ---
    echo json_encode([
        'status' => 'success',
        'message' => 'Calculation successful',
        'data' => [
            'instrument' => $instrument,
            'deposit_currency' => $depositCurrency,
            'trade_type' => ucfirst($tradeType),
            'lot_size' => $lotSize,
            'open_price' => $openPrice,
            'close_price' => $closePrice,
            'pip_size' => $pipSize,
            'profit' => number_format($profit, 2)
        ]
    ]);
    exit;
?>