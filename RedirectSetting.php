<?php
if ($_SERVER['REQUEST_URI'] !== strtolower($_SERVER['REQUEST_URI'])) {
    $redirectUrl = strtolower($_SERVER['REQUEST_URI']);
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: ' . $redirectUrl);
    exit();
}