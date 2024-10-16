<?php
include 'estado_funciones.php';
$recomendacionMusica = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['estado']) && !empty($_POST['estado'])) {
        $estado = htmlspecialchars($_POST['estado']);
        $recomendacionMusica = recomendarMusica($estado, $estadoMusica, $discoMusica);
    } else {
        $recomendacionMusica = "Por favor, selecciona un estado de ánimo";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recomendación de Música</title>
    <script src="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.min.js"></script>
    <link rel="stylesheet" href="estilo.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kay+Pho+Du:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="estado-form">
    <div class="form-group">
        <label for="estado"><h1 id="h11">Estado de Ánimo:</h1></label>
        <div class="select-submit-container">
            <select name="estado" required data-parsley-required-message="Por favor, selecciona un estado de ánimo.">
                <option value="">Selecciona uno</option>
                <option value="Feliz">Feliz</option>
                <option value="Triste">Triste</option>
                <option value="Energético">Energético</option>
                <option value="Relajado">Relajado</option>
                <option value="Inspirado">Inspirado</option>
                <option value="Estresado">Estresado</option>
            </select>
            <input type="submit" value="Confirmar">
        </div>
    </div>
    <p><?php echo $recomendacionMusica; ?></p>
</form>


<script src="script.js"></script>
</body>
</html>
