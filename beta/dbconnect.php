<?php
/*
 * Copyright (c) 2024. All rights reserved by Woliul Hasan. Fork me on https://github.com/woliul
 */

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
if (!mysql_connect("localhost", "root", "root")) {
    die('oops connection problem ! --> ' . mysql_error());
}
if (!mysql_select_db("gypsy")) {
    die('oops database selection problem ! --> ' . mysql_error());
}

?>
