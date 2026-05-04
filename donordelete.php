<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Blood Donor List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #ffcccc, #ffe6e6);
            padding: 30px;
            margin: 0;
        }

        h2 {
            text-align: center;
            color: #b30000;
            font-size: 32px;
            text-transform: uppercase;
            margin-bottom: 25px;
            letter-spacing: 1px;
        }

        .back-btn {
            display: inline-block;
            margin-bottom: 20px;
            background: #b30000;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .back-btn:hover {
            background: #8e0000;
            transform: scale(1.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border: 2px solid #b30000;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        th {
            background: #b30000;
            color: white;
            padding: 14px;
            border-right: 1px solid #ffffff;
        }

        td {
            padding: 12px;
            border-right: 1px solid #ccc;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #ffe6e6;
            transition: 0.3s;
        }

        .delete-btn {
            padding: 8px 14px;
            background: #cc0000;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .delete-btn:hover {
            background: #990000;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<a href="home.php" class="back-btn">⬅ Back to Home</a>

<h2>Blood Donor List</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Blood Group</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Place</th>
        <th>Action</th>
    </tr>

    <?php
    $query = "SELECT * FROM blood_tb";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['gender']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['bloodgrp']}</td>
                    <td>{$row['phno']}</td>
                    <td>{$row['address']}</td>
                    <td>{$row['place']}</td>
                    <td>
                        <a class='delete-btn' 
                           onclick=\"return confirm('Are you sure to delete this donor?');\" 
                           href='delete.php?id={$row['id']}'>Delete</a>
                    </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='9' style='text-align:center;'>No Donors Found</td></tr>";
    }
    ?>
</table>

</body>
</html>
