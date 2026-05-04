<?php include "config.php"; ?>

<?php
// Fetch selected donor data
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM blood_tb WHERE id='$id'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "<script>alert('Donor not found'); window.location='donorlist.php';</script>";
    }
}

// Update donor data
if (isset($_POST['update'])) {

    $id_new = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $bloodgrp = $_POST['bloodgrp'];
    $phno = $_POST['phno'];
    $address = $_POST['address'];
    $place = $_POST['place'];

    $sql = "UPDATE blood_tb SET 
                id='$id_new',
                name='$name',
                gender='$gender',
                age='$age',
                bloodgrp='$bloodgrp',
                phno='$phno',
                address='$address',
                place='$place'
            WHERE id='$id'";

    if ($conn->query($sql)) {
        echo "<script>alert('Donor Updated Successfully'); window.location='donorlist.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Donor</title>
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

        form {
            background: white;
            padding: 30px;
            width: 500px;
            margin: auto;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.25);
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #b30000;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 17px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #8e0000;
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<a href="home.php" class="back-btn">⬅ Back to Home</a>

<h2>Edit Donor Details</h2>

<form method="POST">

    <label>ID</label>
    <input type="number" name="id" value="<?php echo $row['id']; ?>" required>

    <label>Name</label>
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required>

    <label>Gender</label>
    <select name="gender" required>
        <option value="Male" <?php if($row['gender']=="Male") echo "selected"; ?>>Male</option>
        <option value="Female" <?php if($row['gender']=="Female") echo "selected"; ?>>Female</option>
        <option value="Other" <?php if($row['gender']=="Other") echo "selected"; ?>>Other</option>
    </select>

    <label>Age</label>
    <input type="number" name="age" value="<?php echo $row['age']; ?>" required>

    <label>Blood Group</label>
    <select name="bloodgrp" required>
        <option value="A+" <?php if($row['bloodgrp']=="A+") echo "selected"; ?>>A+</option>
        <option value="A-" <?php if($row['bloodgrp']=="A-") echo "selected"; ?>>A-</option>
        <option value="B+" <?php if($row['bloodgrp']=="B+") echo "selected"; ?>>B+</option>
        <option value="B-" <?php if($row['bloodgrp']=="B-") echo "selected"; ?>>B-</option>
        <option value="O+" <?php if($row['bloodgrp']=="O+") echo "selected"; ?>>O+</option>
        <option value="O-" <?php if($row['bloodgrp']=="O-") echo "selected"; ?>>O-</option>
        <option value="AB+" <?php if($row['bloodgrp']=="AB+") echo "selected"; ?>>AB+</option>
        <option value="AB-" <?php if($row['bloodgrp']=="AB-") echo "selected"; ?>>AB-</option>
    </select>

    <label>Phone</label>
    <input type="text" name="phno" value="<?php echo $row['phno']; ?>" required>

    <label>Address</label>
    <textarea name="address" required><?php echo $row['address']; ?></textarea>

    <label>Place</label>
    <input type="text" name="place" value="<?php echo $row['place']; ?>" required>

    <button type="submit" name="update">Update Donor</button>
</form>

</body>
</html>
