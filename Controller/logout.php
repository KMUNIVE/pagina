<?php
session_start();
unset($_SESSION['user_id']);
session_destroy();
header("Location: https://tdiw-j4.deic-docencia.uab.cat/index.php");
exit;
?>