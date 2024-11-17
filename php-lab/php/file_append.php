<?php
$filePath = 'hello.txt'; 

function addContentToFile($filePath, $newContent, $linePosition) {
    $fileLines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    array_splice($fileLines, $linePosition - 1, 0, $newContent);

    file_put_contents($filePath, implode(PHP_EOL, $fileLines));
}

$currentContent = file_exists($filePath) ? file_get_contents($filePath) : 'File not found.';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $linePosition = (int)$_POST['line_number'];
    $newContent = $_POST['new_content'];

    addContentToFile($filePath, $newContent, $linePosition);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify File Content</title>
    <style>
        body {
            font-family: Verdana, Geneva, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
        }
        textarea {
            width: calc(100% - 20px);
            height: 180px;
            margin-bottom: 10px;
            padding: 10px;
            resize: none;
            font-size: 14px;
        }
        input, button {
            margin-top: 10px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #5a9;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #47a;
        }
        form label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Modify File Content at Specific Line</h1>
    
    <h2>Current File Content:</h2>
    <textarea readonly><?php echo htmlspecialchars($currentContent); ?></textarea>

    <form method="post">
        <label for="line_number">Enter Line Number:</label>
        <input type="number" id="line_number" name="line_number" min="1" required>
        
        <label for="new_content">Content to Insert:</label>
        <textarea id="new_content" name="new_content" required></textarea>
        
        <button type="submit">Submit</button>
    </form>

</body>
</html>