<?php
session_start();
// destroy the session
session_destroy();
echo "sesion cerrada";
header("Location:". "../view/HTML/IndexNuevo.html");
?>