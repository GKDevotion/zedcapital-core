<?php
header('Content-Type: application/json'); // ensure JSON response

    // Validate that required POST data exists
    if (!isset($_POST['high'], $_POST['low'], $_POST['close'])) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Missing required parameters: high, low, and close are required.'
        ]);
        exit;
    }

    // Sanitize and validate numeric values
    $high  = filter_var($_POST['high'], FILTER_VALIDATE_FLOAT);
    $low   = filter_var($_POST['low'], FILTER_VALIDATE_FLOAT);
    $close = filter_var($_POST['close'], FILTER_VALIDATE_FLOAT);

    // Check for invalid values
    if ($high === false || $low === false || $close === false) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid input: all values must be numeric.'
        ]);
        exit;
    }

    // Check logical consistency
    // if ($high < $low) {
    //     echo json_encode([
    //         'status' => 'error',
    //         'message' => 'Invalid input: High value cannot be less than Low value.'
    //     ]);
    //     exit;
    // }

    // Standard Pivot Points
    $pivotPoint = round(($high + $low + $close) / 3, 5);
    $standard = [
        'pivotPoint' => $pivotPoint,
        'r1' => round(2 * $pivotPoint - $low, 5),
        's1' => round(2 * $pivotPoint - $high, 5),
        'r2' => round($pivotPoint + ($high - $low), 5),
        's2' => round($pivotPoint - ($high - $low), 5),
        'r3' => round($high + 2 * ($pivotPoint - $low), 5),
        's3' => round($low - 2 * ($high - $pivotPoint), 5),
    ];

    // Fibonacci Pivot Points
    $fibResistanceLevels = [0.382, 0.618, 1];
    $fibonacci = [
        'pivotPoint' => $pivotPoint,
        'r1' => round($pivotPoint + $fibResistanceLevels[0] * ($high - $low), 5),
        's1' => round($pivotPoint - $fibResistanceLevels[0] * ($high - $low), 5),
        'r2' => round($pivotPoint + $fibResistanceLevels[1] * ($high - $low), 5),
        's2' => round($pivotPoint - $fibResistanceLevels[1] * ($high - $low), 5),
        'r3' => round($pivotPoint + $fibResistanceLevels[2] * ($high - $low), 5),
        's3' => round($pivotPoint - $fibResistanceLevels[2] * ($high - $low), 5),
    ];

    // Camarilla Pivot Points
    $camarillaMultipliers = [1.1 / 12, 1.1 / 6, 1.1 / 4];
    $camarilla = [
        'pivotPoint' => $pivotPoint,
        'r1' => round($close + $camarillaMultipliers[0] * ($high - $low), 5),
        's1' => round($close - $camarillaMultipliers[0] * ($high - $low), 5),
        'r2' => round($close + $camarillaMultipliers[1] * ($high - $low), 5),
        's2' => round($close - $camarillaMultipliers[1] * ($high - $low), 5),
        'r3' => round($close + $camarillaMultipliers[2] * ($high - $low), 5),
        's3' => round($close - $camarillaMultipliers[2] * ($high - $low), 5),
    ];

    // Return JSON response
    echo json_encode([
        'status' => 'success',
        'data' => [
            'standard' => $standard,
            'fibonacci' => $fibonacci,
            'camarilla' => $camarilla
        ]
    ]);
    exit;
?>