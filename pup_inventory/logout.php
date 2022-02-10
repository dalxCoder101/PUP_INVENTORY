<?php

session_start();

unset($_SESSION['status']);
echo '<script>window.location.href="index.php";</script>';