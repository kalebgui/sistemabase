<?php
if (!isset($_SESSION["login"])) {
    echo "<script>";
    echo "window.location.href = '../index.php';";
    echo "</script> ";
}
?>
