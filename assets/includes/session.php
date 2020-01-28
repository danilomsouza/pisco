<?php
if(session_status() == PHP_SESSION_NONE){ //Verifica se a session já está iniciada
    session_start();
}
