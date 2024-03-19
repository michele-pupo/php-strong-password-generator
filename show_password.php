<?php
session_start();

if (isset($_SESSION['password_generata'])) {
    $password_generata = $_SESSION['password_generata'];
    unset($_SESSION['password_generata']);
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="it IT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
    <div class="container">
        <h1 class="py-4 display-4 fw-bold">Password Generata</h1>
        <div class="alert alert-success" role="alert">
            <strong>La tua password:</strong> <?php echo $password_generata; ?>
        </div>
        <p class="mb-4">Ti consigliamo di copiare la password e conservarla in un posto sicuro.</p>
        <a href="index.php" class="btn btn-primary p-3">Genera un'altra password</a>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>