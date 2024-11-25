<?php
// Get the genre from the query parameter
$genre = isset($_GET['genre']) ? $_GET['genre'] : 'Unknown Genre';

// Display the genre name on the page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $genre; ?> - Groovy</title>
    <link rel="stylesheet" href="ex6_home.css">
</head>
<body>
    <div class="main">
        <div class="d2">
            <div class="d3">
                <div class="library-title"><?php echo $genre; ?> Music</div>
                <!-- Display content based on the genre -->
                <div class="genre-content">
                    <!-- Example: you can display specific songs or information for this genre -->
                    <p>Displaying content for the genre: <?php echo $genre; ?></p>
                    <!-- You can add more specific content here for each genre -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>
