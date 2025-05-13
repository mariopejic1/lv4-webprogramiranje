<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prijava</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST" action="login.php">
    <label for="username">Korisničko ime:</label><br>
    <input type="text" name="username" required><br><br>
    
    <label for="password">Lozinka:</label><br>
    <input type="password" name="password" required><br><br>
    
    <input type="submit" name="login" value="Prijavi se">
</form>

<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM korisnici WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['uloga'] = $user['uloga'];
            header('Location: home.php');
        } else {
            echo "<p>Neispravna lozinka.</p>";
        }
    } else {
        echo "<p>Korisnik ne postoji.</p>";
    }
}
?>

</body>
</html>
