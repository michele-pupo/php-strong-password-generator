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

    // controllo sulla richiesta GET per la lunghezza della password
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['lunghezza'])) {
        $lunghezza = $_GET['lunghezza'];

        // visualizziamo la password casuale dopo averla generata
        $password_generata = generaPassword($lunghezza);
        echo "<h2>Password Casuale Generata:</h2>";
        echo "<p>$password_generata</p>";
    }
?>

<!DOCTYPE html>
<html lang="it IT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>PHP Strong Password Generator</h1>

        <form action="index.php" method="get">
            <label for="lunghezza">Lunghezza della Password:</label>
            <input type="number" id="lunghezza" name="lunghezza" min="8" required>
            <button type="submit">Genera Password</button>
        </form>
    </div>
    
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>