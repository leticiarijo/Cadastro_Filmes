<html>
<body>
<h1>Cadastrar filme</h1>
    <form action="filme-cadastrado.php" method="POST">
        <?php echo "Digite os campos abaixo"; ?> <br><br><br>
        Titulo: <input type="text" name="titulo" required> <br><br>
        Categoria: <input type="text" name="categoria" required ><br><br>
        Classificação: <input type="text" name="classificacao" required ><br><br>
        Resumo: <input type="text" name="resumo" required><br><br>
        <input type="submit" name="cadastro" class="button" value="Cadastrar">
    </form>

<br><br><br><a href="index.php"> Voltar ao inicio </a> <br><br>
<a href="consulta.php"> Consultar Filmes </a>
</body>
</html>
    





