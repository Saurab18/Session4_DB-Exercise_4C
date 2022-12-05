<?php

$conn = mysqli_connect("localhost", "root", "", "luna");

if (!$conn) {
    echo "Connection Failed";
}