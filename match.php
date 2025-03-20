<?php

$status = 200;

$message = match($status) {
    200, 300 => "Success",
    401, 404 => "Fail",
    default => "Unknown status"
};

echo "$message \n";
