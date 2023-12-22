<?php
session_start();
session_destroy();
session_unset();
setcookie(session_name(), "", time()-1);
setcookie("email", "", time()-1);
header("Location: Login.php");