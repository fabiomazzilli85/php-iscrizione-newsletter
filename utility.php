<?php
function checkEmail($email) {
    return $email === "" || !str_contains($email, "@") || !str_contains($email, ".");
    // Questa è la funzione di convalida dell'email: controlla se la stringa dell'email è vuota, quindi se non viene inserito nulla, restituirà "true" e si assicura che siano presenti la "@" e il "."
}