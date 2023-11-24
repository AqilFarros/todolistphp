<?php

include "config.php";
$ID = $_POST["id"];
$list = $_POST["list"];
mysqli_query($con, "UPDATE `tabeltodo` SET `List`='$list' WHERE `tabeltodo`. `Id` = '$ID'");

header("location: index.php");

?>