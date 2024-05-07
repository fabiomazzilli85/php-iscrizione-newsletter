<?php
function checkEmail($email) {
    return $email === "" || !str_contains($email, "@") || !str_contains($email, ".");
    // Questa è la funzione di convalida dell'email: si  assicura che il campo non contenga una stringa vuota e che siano presenti la "@" e il "."
}