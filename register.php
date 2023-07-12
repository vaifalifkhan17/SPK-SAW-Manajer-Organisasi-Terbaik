<!DOCTYPE html>
<html>
<head>
  <title>Halaman Registrasi</title>
</head>
<body>
  <form method="POST" action="proses_register.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <input type="submit" value="Register">
  </form>
</body>
</html>
