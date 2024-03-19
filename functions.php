<?php
    // funzione per generare una password casuale
    function generaPassword($lunghezza, $usa_numeri = true, $usa_lettere_maiuscole = true, $usa_lettere_minuscole = true, $usa_simboli = false, $ripetizione_caratteri = false) {
        // possibili caratteri per la password in base ai parametri forniti
        $caratteri = '';
        if ($usa_numeri) {
            $caratteri .= '0123456789';
        }
        if ($usa_lettere_minuscole) {
            $caratteri .= 'abcdefghijklmnopqrstuvwxyz';
        }
        if ($usa_lettere_maiuscole) {
            $caratteri .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        }
        if ($usa_simboli) {
            $caratteri .= '!@#$%^&*()-_=+[]{}|;:,.<>?';
        }

        // lunghezza della stringa di caratteri
        $lunghezza_caratteri = strlen($caratteri);
        $password = '';

        // generazione della password utilizzando caratteri casuali
        for ($i = 0; $i < $lunghezza; $i++) {
            // se la ripetizione dei caratteri non è consentita tramite checkbox, non inseriamo lo stesso carattere 2 volte
            do {
                $carattere_scelto = $caratteri[rand(0, $lunghezza_caratteri - 1)];
            } while (!$ripetizione_caratteri && $i > 0 && $carattere_scelto === $password[$i - 1]);

            $password .= $carattere_scelto;
        }

        return $password;
    }
