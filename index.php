<?php
require_once (__DIR__ . "/utility.php");

session_start(); // Inizializzo sessione.
$email = ""; // Inizializzo variabile.


if (isset($_POST["email"])) {
    $email = $_POST["email"];
    // Mi accerto che il tag di input con attributo "email" e metodo "post" funzioni correttamente. 

    if (checkEmail($email)) {
        // checkEmail è la funzione in utility.php
        $_SESSION['status'] = false;
        $_SESSION["message"] = "L'email inserita non è valida.";
    } else {
        $_SESSION['status'] = true;
        $_SESSION["message"] = "Email valida: $email";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Newsletter</title>
</head>

<body style="background-color: #4793AF">
    <div class="container">
        <header style="background-color: #FFC470; margin-top: 50px; padding: 50px; border-radius: 4px">
            <form action="" method="POST">
                <input type="email" name="email" placeholder="Inserisci la tua email">
                <button type="submit" class="btn btn-success">Invia</button>
            </form>

            <?php if (isset($_SESSION["status"]) && isset($_SESSION['message'])): ?>
                <?php
                $status = $_SESSION['status'];
                $message = $_SESSION['message'];
                ?>
                <p class="alert text-<?= $status === true ? "success" : "danger" ?>">
                    <?= $message ?>
                </p>
            <?php endif; ?>
        </header>

        <main>
        </main>

        <footer>
        </footer>
    </div>
</body>
</html>