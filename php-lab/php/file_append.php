<?php
$filePath = 'hello.txt'; 

function insertContentAtLine($filePath, $newContent, $lineNumber) {
    $fileContent = file($filePath, FILE_IGNORE_NEW_LINES);

    array_splice($fileContent, $lineNumber - 1, 0, $newContent);

    file_put_contents($filePath, implode("\n", $fileContent));
}

$currentContent = file_exists($filePath) ? file_get_contents($filePath) : 'File does not exist.';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lineNumber = (int)$_POST['line_number'];
    $newContent = $_POST['new_content'];

    insertContentAtLine($filePath, $newContent, $lineNumber);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Content at Specific Line in File</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        textarea {
            width: 100%;
            height: 200px;
            font-family: monospace;
        }
        form {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Insert Content at a Specific Line in a File</h1>
    
    <h2>Current File Content:</h2>
    <textarea readonly><?php echo htmlspecialchars($currentContent); ?></textarea>

    <form method="post">
        <label for="line_number">Line Number to Insert At:</label>
        <input type="number" id="line_number" name="line_number" min="1" required>
        
        <br>
        <label for="new_content">New Content to Insert:</label>
        <textarea id="new_content" name="new_content" required></textarea>
        
        <button type="submit">Insert Content</button>
    </form>

</body>
</html>