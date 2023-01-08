<html>
<body>
<h1>Confirmação de filme cadastrado</h1>

 <?php
         
        include 'conexao.php';

        $titulo = $_POST["titulo"];
        $categoria = $_POST["categoria"];
        $classificacao = $_POST["classificacao"];
        $resumo = $_POST["resumo"];

        $sql = "insert into filmes (titulo,categoria,classificacao,resumo) values ('$titulo', '$categoria', ' $classificacao', '$resumo')";
        
        $salvar =  mysqli_query($mysqli,$sql);

        $linha =  mysqli_affected_rows($mysqli);


        if($salvar == 1){
            echo "O filme $titulo foi cadastrado com sucesso!";
        }else{
            echo "Não foi possivel realizar o cadastro. O $titulo já esátá cadastrado";
        }
    

        mysqli_close($mysqli);

?>



    <br><br><br><a href="index.php"> Voltar ao inicio </a> <br><br>
    <a href="formulario.php"> Cadastrar Filmes </a><br><br>
    <a href="consulta.php"> Consultar Filmes </a>

</body>
</html>
