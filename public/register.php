<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="POST" action="register.php">
    <label for="name">Ime:</label><br>
    <input type="text" name="name" required><br><br>
    
    <label for="email">E-mail:</label><br>
    <input type="email" name="email" required><br><br>
    
    <label for="username">Korisničko ime:</label><br>
    <input type="text" name="username" required><br><br>
    
    <label for="password">Lozinka:</label><br>
    <input type="password" name="password" required><br><br>
    
    <input type="submit" name="register" value="Registriraj se">
</form>

<?php
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO korisnici (name, email, username, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $username, $password);
    $stmt->execute();
    echo "<p>Registracija uspješna!</p>";
}
?>

</body>
</html>
