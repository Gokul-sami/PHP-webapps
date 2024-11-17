<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Groom and Bride Matching</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://media2.giphy.com/media/dVqFySQnsezjSCFMzU/200.webp?cid=ecf05e47f9xjuzon3k9snjsw9yhx16hefstoqyt2b0jfy26m&ep=v1_gifs_search&rid=200.webp&ct=g');
            background-color: #f0f8ff;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            opacity: 0.9;
            max-width: 800px;
            width: 100%;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            padding: 20px;
            box-sizing: border-box;
        }
        h1, h2, h3 {
            text-align: center;
            color: #4CAF50;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .section {
            background: #f7f7fa;
            padding: 15px;
            border-radius: 5px;
        }
        label {
            font-weight: bold;
            color: #4CAF50;
        }
        select, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .results {
            margin-top: 20px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Groom and Bride Matching</h1>
    
    <?php
    // Function to calculate match score based on shared preferences
    function calculate_match_score($groom, $bride) {
        $score = 0;
        $preferences = ['food', 'music', 'travel', 'movies', 'social', 'pets', 'spending'];

        foreach ($preferences as $pref) {
            if ($groom[$pref] === $bride[$pref]) {
                $score += 10;
            }
        }
        return $score;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $grooms = $_POST['grooms'];
        $brides = $_POST['brides'];
        $matches = [];

        foreach ($grooms as $groom_key => $groom) {
            $best_match = null;
            $best_score = -1;

            foreach ($brides as $bride_key => $bride) {
                $score = calculate_match_score($groom, $bride);
                if ($score > $best_score) {
                    $best_match = $bride;
                    $best_score = $score;
                }
            }

            if ($best_match !== null) {
                $matches[] = [
                    'groom' => $groom['name'],
                    'bride' => $best_match['name'],
                    'score' => $best_score
                ];
                unset($brides[$bride_key]); // Remove matched bride to prevent duplicate matches
            }
        }
    ?>

    <div class="results">
        <h2>Matching Results</h2>
        <table>
            <tr>
                <th>Groom</th>
                <th>Bride</th>
                <th>Match Score</th>
            </tr>
            <?php if (!empty($matches)): ?>
                <?php foreach ($matches as $match): ?>
                    <tr>
                        <td><?= htmlspecialchars($match['groom']) ?></td>
                        <td><?= htmlspecialchars($match['bride']) ?></td>
                        <td><?= htmlspecialchars($match['score']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No matches found.</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>

    <?php } else { ?>

    <form action="" method="POST">
        <h2>Grooms:</h2>
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="section">
                <h3>Groom <?= $i ?></h3>
                <label>Name: <input type="text" name="grooms[<?= $i ?>][name]" required></label>

                <label>Food Preference:
                    <select name="grooms[<?= $i ?>][food]" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Spicy">Spicy</option>
                        <option value="Sweet">Sweet</option>
                        <option value="Street Food">Street Food</option>
                        <option value="Fine Dining">Fine Dining</option>
                    </select>
                </label>
                
                <label>Music Preference:
                    <select name="grooms[<?= $i ?>][music]" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Pop">Pop</option>
                        <option value="Rock">Rock</option>
                    </select>
                </label>

                <label>Travel Preference:
                    <select name="grooms[<?= $i ?>][travel]" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Adventure trips">Adventure trips</option>
                        <option value="Relaxed beach vacations">Relaxed beach vacations</option>
                    </select>
                </label>

                <label>Movies Preference:
                    <select name="grooms[<?= $i ?>][movies]" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Action">Action</option>
                        <option value="Romantic">Romantic</option>
                    </select>
                </label>

                <label>Social Preference:
                    <select name="grooms[<?= $i ?>][social]" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Big gatherings">Big gatherings</option>
                        <option value="Small hangouts">Small hangouts</option>
                    </select>
                </label>

                <label>Pets Preference:
                    <select name="grooms[<?= $i ?>][pets]" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Dogs">Dogs</option>
                        <option value="Cats">Cats</option>
                    </select>
                </label>

                <label>Spending Style:
                    <select name="grooms[<?= $i ?>][spending]" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Saver">Saver</option>
                        <option value="Spender">Spender</option>
                    </select>
                </label>
            </div>
        <?php endfor; ?>

        <h2>Brides:</h2>
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <div class="section">
                <h3>Bride <?= $i ?></h3>
                <label>Name: <input type="text" name="brides[<?= $i ?>][name]" required></label>

                <label>Food Preference:
                    <select name="brides[<?= $i ?>][food]" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Spicy">Spicy</option>
                        <option value="Sweet">Sweet</option>
                        <option value="Street Food">Street Food</option>
                        <option value="Fine Dining">Fine Dining</option>
                    </select>
                </label>

                <label>Music Preference:
                    <select name="brides[<?= $i ?>][music]" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Pop">Pop</option>
                        <option value="Rock">Rock</option>
                    </select>
                </label>

                <label>Travel Preference:
                    <select name="brides[<?= $i ?>][travel]" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Adventure trips">Adventure trips</option>
                        <option value="Relaxed beach vacations">Relaxed beach vacations</option>
                    </select>
                </label>

                <label>Movies Preference:
                    <select name="brides[<?= $i ?>][movies]" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Action">Action</option>
                        <option value="Romantic">Romantic</option>
                    </select>
                </label>

                <label>Social Preference:
                    <select name="brides[<?= $i ?>][social]" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Big gatherings">Big gatherings</option>
                        <option value="Small hangouts">Small hangouts</option>
                    </select>
                </label>

                <label>Pets Preference:
                    <select name="brides[<?= $i ?>][pets]" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Dogs">Dogs</option>
                        <option value="Cats">Cats</option>
                    </select>
                </label>

                <label>Spending Style:
                    <select name="brides[<?= $i ?>][spending]" required>
                        <option value="" disabled selected>Select an option</option>
                        <option value="Saver">Saver</option>
                        <option value="Spender">Spender</option>
                    </select>
                </label>
            </div>
        <?php endfor; ?>

        <input type="submit" value="Match Grooms and Brides">
    </form>

    <?php } ?>
</div>
</body>
</html>
