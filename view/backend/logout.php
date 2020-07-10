<?php
session_start();
unset($_SESSION['connect']);
header('Location: index.php?action=homeView');