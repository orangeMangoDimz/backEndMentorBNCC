<?php
require 'connection.php';

if (isset($_POST['submit'])){
    createNewProduct($_POST, $_FILES);
    header("Location: ../View/index.php");
}