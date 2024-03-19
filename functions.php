<?php
    // funzione per generare una password casuale
    function generaPassword($lunghezza) {
        // caratteri possibili della password da generare
        $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_=+[]{}|;:,.<>?';
        $lunghezza_caratteri = strlen($caratteri);
        $password = '';

        // generiamo una password casuale utilizzando caratteri casuali
        for ($i = 0; $i < $lunghezza; $i++) {
            $password .= $caratteri[rand(0, $lunghezza_caratteri - 1)];
        }

        return $password;
    }
