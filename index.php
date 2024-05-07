<?php
$email_error = "";
session_start();

if (empty($_POST["email"])) {
    $_SESSION["email_error"] = "L'email è richiesta";
} else {
    $email = $_POST["email"];

    if (!str_contains($email, "@") || !str_contains($email, ".")) {
        $_SESSION["email_error"] = "L'email deve contenere sia '@' che '.'";
    } else {
        // La tua email è corretta.
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Newsletter</title>
</head>
<body>
    <div class="container">
        <header>
            <form action="" method="POST">
                <input type="email" name="email" placeholder="Inserisci la tua email">
                <button type="submit">Invia</button>
            </form>

            <?php if (!empty($email_error)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $email_error; ?>
                </div>
            <?php } 
                else { ?>
                <div class="alert alert-success" role="alert">Accesso consentito</div>
            <?php } ?>
        </header>

        <main>
        </main>

        <footer>
        </footer>
    </div>
</body>
</html>