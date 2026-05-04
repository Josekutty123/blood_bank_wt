<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Donor Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #ffcccc, #ffe6e6);
            padding: 40px;
            margin: 0;
        }

        h2 {
            text-align: center;
            color: #b30000;
            font-size: 32px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
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

        form {
            background: white;
            padding: 30px;
            width: 500px;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0,0,0,0.2);
            border-top: 6px solid #b30000;
        }

        label {
            font-weight: bold;
            color: #b30000;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #b30000;
            border-radius: 6px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #b30000;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #8e0000;
            transform: scale(1.03);
        }
    </style>
</head>
<body>

<a href="home.php" class="back-btn">⬅ Back to Home</a>

<h2>Donor Registration Form</h2>

<form method="POST">

    <label>ID</label>
    <input type="number" name="id" required>

    <label>Name</label>
    <input type="text" name="name" required>

    <label>Gender</label>
    <select name="gender" required>
        <option value="">-- Select Gender --</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select>

    <label>Age</label>
    <input type="number" name="age" required>

    <label>Blood Group</label>
    <select name="bloodgrp" required>
        <option value="">-- Select Blood Group --</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
    </select>

    <label>Phone Number</label>
    <input type="text" name="phno" required>

    <label>Address</label>
    <textarea name="address" rows="3" required></textarea>

    <label>Place</label>
    <input type="text" name="place" required>

    <button type="submit" name="submit">Register Donor</button>
</form>


<?php
if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $bloodgrp = $_POST['bloodgrp'];
    $phno = $_POST['phno'];
    $address = $_POST['address'];
    $place = $_POST['place'];

    $sql = "INSERT INTO blood_tb (id, name, gender, age, bloodgrp, phno, address, place)
            VALUES ('$id', '$name', '$gender', '$age', '$bloodgrp', '$phno', '$address', '$place')";

    if ($conn->query($sql)) {
        echo "<script>alert('Donor Registered Successfully'); window.location='donorlist.php';</script>";
    } else {
        echo 'Error: ' . $conn->error;
    }
}
?>

</body>
</html>
