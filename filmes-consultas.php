
<?php
    
    include 'conexao.php';


    $consulta = isset($_GET ['consulta'])? $_GET['consulta']: "";

    $sql = "select * from filmes where titulo like '%$consulta%' order by titulo";
    $consultas = mysqli_query($mysqli, $sql);
    $registros = mysqli_num_rows($consultas);

?>
<html>
<body>

<h1>Consultar Filmes</h1>


<?php

    echo "Resultado com a palavra $consulta. <br><br>";
    echo "$registros filmes cadastrados.<br><br><br>";
    

    while($exibirRegistrio = mysqli_fetch_array($consultas)){
        $titulo = $exibirRegistrio[1];
        $categoria = $exibirRegistrio[2];
        $classificacao = $exibirRegistrio[3];
        $resumo = $exibirRegistrio[4];


        echo "<br> Titulo: $titulo <br>
        <br> Categoria: $categoria <br>
        <br> Classificação $classificacao <br>
        <br> Resumo: $resumo <br><br><br>";
 

    }


    mysqli_close($mysqli);
?>
    
    
    
<br><br> <a href="index.php">Voltar ao inicio</a> <br><br>
<a href="formulario.php">Cadastrar Filmes </a>
</body>
</html>