<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 30px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #0b5ed7;
            color: white;
        }
        caption {
            font-size: 20px;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
// Array of Indian Cricket Players
$players = array(
    "Sachin Tendulkar",
    "Virat Kohli",
    "MS Dhoni",
    "Rohit Sharma",
    "Rahul Dravid",
    "Sourav Ganguly",
    "Kapil Dev",
    "Jasprit Bumrah"
);
?>

<table>
    <caption>Indian Cricket Players</caption>
    <tr>
        <th>Sl No</th>
        <th>Player Name</th>
    </tr>

    <?php
    $sl = 1;
    foreach ($players as $player) {
        echo "<tr>";
        echo "<td>$sl</td>";
        echo "<td>$player</td>";
        echo "</tr>";
        $sl++;
    }
    ?>
</table>

</body>
</html>
