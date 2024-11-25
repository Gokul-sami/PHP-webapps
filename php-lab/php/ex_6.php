<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song Listening App</title>
    <link rel="stylesheet" href="ex_6.css">
</head>
<body>
    <div class="container">
        <div class="left-section"></div>
        <div class="right-section">
            <form id="questionForm" action="ex6_process.php" method="POST">
                <!-- Question 1: Name -->
                <div class="question">
                    <label for="userName">What name would you like to be called?</label>
                    <div class="input-group">
                        <input type="text" id="userName" name="userName" placeholder="Enter your name" required>
                    </div>
                </div>
                
                <!-- Question 2: Email -->
                <div class="question">
                    <label for="userEmail">What is your email?</label>
                    <div class="input-group">
                        <input type="email" id="userEmail" name="userEmail" placeholder="Enter your email" required>
                    </div>
                </div>
                
                <!-- Question 3: Password -->
                <div class="question">
                    <label for="userPassword">Create a password</label>
                    <div class="input-group">
                        <input type="password" id="userPassword" name="userPassword" placeholder="Enter a password" required>
                    </div>
                </div>
                
                <!-- Question 4: Age -->
                <div class="question">
                    <label for="userAge">How old are you?</label>
                    <div class="input-group">
                        <input type="number" id="userAge" name="userAge" placeholder="Enter your age" min="0" max="120" required>
                    </div>
                </div>
                
                <!-- Question 5: Favorite Genre -->
                <div class="question">
                    <label for="musicGenre">What's your favorite genre?</label>
                    <div class="input-group">
                        <select id="musicGenre" name="musicGenre" required>
                            <option value="">Select a genre</option>
                            <option value="Pop">Pop</option>
                            <option value="Rock">Rock</option>
                            <option value="Jazz">Jazz</option>
                            <option value="Classical">Classical</option>
                            <option value="Hip-Hop">Hip-Hop</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="button" id="submitButton">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
