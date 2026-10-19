<?php
// Database configuration (adjust as needed)
$db_host = 'localhost';
$db_user = 'username';
$db_pass = '';
$db_name = 'nama_nipd';

// Start session
session_start();



// Database connection
$conn = new mysqli("localhost", "root", "", "nama_nipd");
$sql = "SELECT `Nama` FROM `nama_nipd`.`nama`;";
$sql = "SELECT * FROM `nama`  \n"
    . "ORDER BY `nama`.`NIPD` ASC;";
$result = $conn->query($sql);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Login logic
$login_error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $NIPD = $_POST['NIPD'];
    $stmt = $conn->prepare("SELECT * FROM nama WHERE Nama = ? AND NIPD = ?");
    $stmt->bind_param("ss", $username, $NIPD); 
    $stmt->execute();
    $result = $stmt->get_result(); 
    if ($result->num_rows == 1) {
        // Successful login
        $user = $result->fetch_assoc();
        $_SESSION['NIPD'] = $user['NIPD'];
        $_SESSION['Nama'] = $user['Nama'];
        header("Location:/TA 2025 NEW/Dashboard/upload.php");
        exit();
    } else {
        // Invalid credentials
        $login_error = 'Invalid username or NIPD.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR IPM SMAMSATU GRESIK - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-size: cover;
            background-position: center;
            background: url("https://raw.githubusercontent.com/Rivandi22/IMAGE/refs/heads/main/Background.jpg");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;

        }

        .container{
            text-align: center;
            background-color: rgba(180, 166, 166, 0.3);
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            width: 400px;
            height: 550px;
            gap:10px;
            justify-content: center;
        }
        .container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap:12px
        }
        .cardcontainer {
            border-radius: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            height: 600px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url("https://raw.githubusercontent.com/Rivandi22/IMAGE/refs/heads/main/Logo-Ikatan-Pelajar-Muhammadiyah-Resmi.png") no-repeat center ;
            background-size: 40% 60%;

        }
     

        .navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: #ffe600ff; /* warna background */
        padding: 10px 20px;
        margin-top: 10px;
        }

        .navbar h2 {
        margin-top: 10px;
        text-align: center;
        justify-items: center;
        }

        .header1 {
            margin-top: 10px;
            color: #ffffff;
        }
        .login-form {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 0.9;
            z-index: 0;
            margin-top: 20px;
        }
        .login-form input {
            margin-top: 50px;
            padding: 10px;
            border: 2px solid #000000ff;
            border-radius: 10px;
            font-size: 16px;
            font-weight: bold;
            align-items: center;
            justify-content: center;
            background-color: #a2ca8fff;
            outline: none;
            border-color: #0f7a1e;
        }

        .login-form input:focus + label {
            border-color: #53b658ff;
            box-shadow: 0 0 5px rgba(24, 150, 101, 0.5);
        }
        .login-form button {
            padding: 15px;
            background-color: #001e80ff;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 100px;
            opacity: 1;
        }
        .login-form button:hover {
            background-color: #032699ff;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header1">
            <h1>PR IPM SMAMSATU GRESIK</h1>
        </div>
    
        <?php if (!empty($login_error)): ?>
            <div class="error"><?php echo $login_error; ?></div>
        <?php endif; ?>
        <div class="cardcontainer">
        <form class="login-form" method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="NIPD" placeholder="NIPD" required>
            <button type="submit">LOGIN</button>
        </form>
    </div>
</body>
</html>