<!DOCTYPE html>
<html>
<head>
    <title>Blood Bank Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #ffcccc, #ffe6e6);
            text-align: center;
            padding-top: 60px;
        }

        h1 {
            color: #b30000;
            margin-bottom: 30px;
            font-size: 34px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
            padding: 20px;
        }

        .card {
            background: white;
            width: 260px;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            transition: 0.3s;
            cursor: pointer;
            text-decoration: none;
            color: #333;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.3);
        }

        .icon {
            font-size: 50px;
            color: #b30000;
            margin-bottom: 15px;
        }

        h3 {
            color: #b30000;
            margin-bottom: 10px;
        }

        p {
            color: #555;
            font-size: 14px;
        }
    </style>
</head>

<body>

    <h1>Blood Bank Management Dashboard</h1>

    <div class="container">

        <!-- Register Donor -->
        <a href="registration.php" class="card">
            <div class="icon">🩸</div>
            <h3>Register Donor</h3>
            <p>Add a new donor to the blood bank</p>
        </a>

        <!-- Donor List -->
        <a href="donorlist.php" class="card">
            <div class="icon">📋</div>
            <h3>Donor List</h3>
            <p>View all registered donors</p>
        </a>

        <!-- Edit Donor -->
        <a href="doneredit.php" class="card">
            <div class="icon">✏️</div>
            <h3>Edit Donor</h3>
            <p>Modify or update donor details</p>
        </a>

        <!-- Delete Donor -->
        <a href="donordelete.php" class="card">
            <div class="icon">🗑️</div>
            <h3>Delete Donor</h3>
            <p>Remove donor completely from system</p>
        </a>

    </div>

</body>
</html>
