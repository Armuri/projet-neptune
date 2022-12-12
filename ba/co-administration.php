<?php

require "link-mysql.php";

if (isset ($_POST["id-admin"])){
    $id_admin = $_POST["id-admin"];
}else {
    $id_admin = "";
}

if (isset ($_POST["perm-key"])){
    $perm_key = $_POST["perm-key"];
}else {
    $perm_key = "";
}