<?php
function createRecord($newRecord) {
    $dataFile = 'data.json';
    $existingData = file_exists($dataFile) ? json_decode(file_get_contents($dataFile), true) : [];

    $newRecord['id'] = time(); 
    $existingData[] = $newRecord;

    file_put_contents($dataFile, json_encode($existingData, JSON_PRETTY_PRINT));
    return $newRecord;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'create') {
    $record = [
        'name' => $_POST['name'],
        'email' => $_POST['email']
    ];
    createRecord($record);
    header('Location: index.php');
    exit;
}
?>
