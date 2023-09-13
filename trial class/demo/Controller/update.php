<?php

require 'connection.php';

if (isset($_POST["submit"])){
    updateProduct($_POST, $_FILES);
    header("Location: ../View/index.php");
}