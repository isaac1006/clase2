<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // OBTENER DATOS DEL FORMULARIO //

    $nombre = $_POST["nombre"];
    $nota1 = $_POST["notas1"];
    $nota2 = $_POST["notas2"];
    $nota3 = $_POST["notas3"];
    $nota4 = $_POST["notas4"];
    $nota5 = $_POST["notas5"];

    // calcular nota final //
    $notafinal = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;

    // imprimir el nombre, las cinco notas y la nota final //
    echo "<p><strong>NOMBRE:</strong> $nombre</p>";
    echo "<p><strong>Nota1:</strong> $nota1</p>";
    echo "<p><strong>Nota2:</strong> $nota2</p>";
    echo "<p><strong>Nota3:</strong> $nota3</p>";
    echo "<p><strong>Nota4:</strong> $nota4</p>";
    echo "<p><strong>Nota5:</strong> $nota5</p>";
    echo "<p><strong>NOTA FINAL:</strong> $notafinal</p>";
}
?>