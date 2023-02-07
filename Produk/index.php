<?php
if ('/hello' === $_SERVER['REQUEST_URI']) {
    return require 'hello.php';
    }
    if (false !== strpos($_SERVER['REQUEST_URI'], '/greeting'))
    {
    return require 'greeeting.php';
    }
    