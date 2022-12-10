<?php

require "link-mysql.php";

if (isset ($_POST["id-admin"])){
    $id-admin = $_POST["id-admin"];
}else {
    $id-admin = "";
}

if (isset ($_POST["perm-key"])){
    $perm-key = $_POST["perm-key"];
}else {
    $perm-key = "";
}