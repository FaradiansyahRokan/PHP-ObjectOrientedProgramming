<?php

class connect{
    public
        function login($username, $IP = "192.10.10.1"){
            echo "Selamat Anda Berhasil Login Dengan userName {$username}, dan IP anda Adalah {$IP}";
        }
    }
    $account = new connect;
    $account->login("rokan","123");