<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
echo strlen(hash('sha256','helloworld'));


var_dump($_SESSION);

?>