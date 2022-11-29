<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.scss">
    <title>Logowanie</title>
</head>

<body>

<?php
  require_once"config.php";
  $connection = new mysqli($host, $db_user, $db_password, $db_name);

  if($connection -> connect_errno == 0) 
  echo 'tak'
?>

  <form action="signInPage.php" method="post">
    <div class="Procedura">
      <h1>Rejestracja</h1>
      <h3>Uzupełnij poniższe dane żeby utworzyć konto</h3>
      <hr>

      <label for="nazwa"><b>Nazwa</b></label>
      <input type="text" placeholder="Podaj Nazwe Użytkownika" name="nazwa" id="nazwa" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Email" name="email" id="email" required>

      <label for="haslo"><b>Podaj Hasło</b></label>
      <input type="haslo" placeholder="Podaj Hasło" name="haslo" id="haslo" required>
      

      <label for="haslo"><b>Podaj Hasło Ponownie</b></label>
      <input type="haslo" placeholder="Podaj Hasło" name="haslo" id="haslo" required>
      <hr>

      <button type="submit" class="registerbtn" href="signPage.php"> Zarejestruj się</button>
    </div>

    <div class="container signin">
    </div>
  </form>

  </body>
</html>