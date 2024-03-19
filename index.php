<!DOCTYPE html>
<html lang="it IT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
    <div class="container">
        <h1 class="d-flex justify-content-center display-1 fw-bold py-4">Generatore di password</h1>
        
        <form action="index.php" method="get">
        <div class="d-flex justify-content-center gap-4 py-3">
            <label for="lunghezza">Lunghezza della Password:</label>

            <!-- indica la lunghezza minima della password -->
            <input type="number" id="lunghezza" name="lunghezza" min="8">
        </div>
            <!-- indica l'uso di numeri nella password -->
            <div class="form-check d-flex justify-content-center gap-2 py-2">
                <input class="form-check-input" type="checkbox" id="usa_numeri" name="usa_numeri" checked>
                <label class="form-check-label" for="usa_numeri">Usa numeri</label>
            </div>
            <!-- indica l'uso di lettere maiuscole nella password -->
            <div class="form-check d-flex justify-content-center gap-2 py-2">
                <input class="form-check-input" type="checkbox" id="usa_lettere_maiuscole" name="usa_lettere_maiuscole" checked>
                <label class="form-check-label" for="usa_lettere_maiuscole">Usa lettere maiuscole</label>
            </div>

            <!-- indica l'uso di lettere minuscole nella password -->
            <div class="form-check d-flex justify-content-center gap-2 py-2">
                <input class="form-check-input" type="checkbox" id="usa_lettere_minuscole" name="usa_lettere_minuscole" checked>
                <label class="form-check-label" for="usa_lettere_minuscole">Usa lettere minuscole</label>
            </div>

            <!-- indica l'uso di simboli nella password -->
            <div class="form-check d-flex justify-content-center gap-2 py-2">
                <input class="form-check-input" type="checkbox" id="usa_simboli" name="usa_simboli">
                <label class="form-check-label" for="usa_simboli">Usa simboli</label>
            </div>

            <!-- indica il poter ripetere caratteri già usati nella password-->
            <div class="form-check d-flex justify-content-center gap-2 py-2">
                <input class="form-check-input" type="checkbox" id="ripetizione_caratteri" name="ripetizione_caratteri">
                <label class="form-check-label" for="ripetizione_caratteri">Permetti ripetizione di caratteri uguali</label>
            </div>
            <div class="d-flex justify-content-center py-4">
                <button class="p-3 rounded-4 bg-primary" type="submit">Genera Password</button>
            </div>
        </form>
    </div>

    <div class="container">
        <?php 

            // includiamo il file functions
            include 'functions.php';
            
            // controllo sulla richiesta GET per la lunghezza della password
            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['lunghezza'])) {
                $lunghezza = $_GET['lunghezza'];
                $usa_numeri = isset($_GET['usa_numeri']);
                $usa_lettere_maiuscole = isset($_GET['usa_lettere_maiuscole']);
                $usa_lettere_minuscole = isset($_GET['usa_lettere_minuscole']);
                $usa_simboli = isset($_GET['usa_simboli']);
                $ripetizione_caratteri = isset($_GET['ripetizione_caratteri']);

                // visualizziamo la password casuale dopo averla generata
                $password_generata = generaPassword($lunghezza, $usa_numeri, $usa_lettere_maiuscole, $usa_lettere_minuscole, $usa_simboli, $ripetizione_caratteri);
                echo "<h2>Password Casuale Generata:</h2>";
                echo "<p>$password_generata</p>";
            }

        ?>
    </div>
    
    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>