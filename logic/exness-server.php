<?php
// ======================================================
// 🟢 Core PHP HTTPS Proxy Server (Exness API Proxy)
// ======================================================

// --- Configuration ---
$HTTPS_PORT = 3000;
$EXNESS_BASE_URL = 'https://www.exness.com/api/quotes/prev/';
$allowedOrigins = [
    'https://chart.zedcapital.com:3000',
];

// --- Handle CORS ---
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';

header("Access-Control-Allow-Origin: $origin");
header("Access-Control-Allow-Methods: GET");

// --- Handle API Request ---
if (isset($_GET['instrument']) && isset($_GET['duration'])) {
    $instrument = urlencode($_GET['instrument']);
    $duration = urlencode($_GET['duration']);

    $exnessUrl = "{$EXNESS_BASE_URL}?instruments={$instrument}&intervals={$duration}";

    // Logging for debug
    error_log("[Proxy] Fetching data from: " . $exnessUrl);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $exnessUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);

    // Optional: You can point these to your actual PEM files
    // Uncomment and adjust these lines if needed for secure proxy SSL client auth
    // curl_setopt($ch, CURLOPT_CAINFO, '/path/to/chart.zedcapital.com-chain.pem');
    // curl_setopt($ch, CURLOPT_SSLCERT, '/path/to/chart.zedcapital.com-crt.pem');
    // curl_setopt($ch, CURLOPT_SSLKEY, '/path/to/chart.zedcapital.com-key.pem');

    $response = curl_exec($ch);
    $httpStatus = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if (curl_errno($ch)) {
        http_response_code(500);
        echo json_encode([
            'error' => 'Internal server error',
            'details' => curl_error($ch)
        ]);
        curl_close($ch);
        exit;
    }

    curl_close($ch);

    // --- Process Response ---
    if ($httpStatus >= 200 && $httpStatus < 300) {
        header('Content-Type: application/json');
        echo $response;
    } else {
        // Handle Exness errors
        $errorDetails = json_decode($response, true) ?? $response;
        http_response_code($httpStatus);
        echo json_encode([
            'error' => 'Failed to fetch data from Exness API',
            'status' => $httpStatus,
            'exness_response_details' => $errorDetails
        ]);
    }
} else {
    http_response_code(400);
    echo json_encode([
        'error' => 'Missing parameters',
        'message' => 'Please provide both "instrument" and "duration".'
    ]);
}
?>