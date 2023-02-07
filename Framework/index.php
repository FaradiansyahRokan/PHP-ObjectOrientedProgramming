<?php
if ('/hello' === $_SERVER['REQUEST_URI']) {
    require 'hello.php';
    }
    if (false !== strpos($_SERVER['REQUEST_URI'], '/greeting'))
    {
    require 'greeeting.php';
    }