<?php
// for log out
session_start();

session_destroy();

header("Location: ../index.php");