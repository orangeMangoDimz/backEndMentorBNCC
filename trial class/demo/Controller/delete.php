<?php

require 'connection.php';
deleteproductById($_GET['id']);
header("Location: ../View/index.php");