<!--inclusao de dados da pagina inclusao.php-->
<?php
    include_once("inclusao.php");
    include_once("cabecalho.php");
    include_once("menu.php");

?>
<!--------------------------------------------------------------------------------------->


<body>

<div class="container-fluid">
        <h2 class="text-primary"style="margin-left:20px">Pedidos</h2>
        <hr>
            <div class="row">
                <div class="col-sm-12">
                    <form style="margin-left: 20px" action="enviarped.php" method="POST">
                        <lavel for="nome">Nome:</label></br>
                        <input type="tex" name="nome" id="nome"></br>

                        <lavel for="endereco">Endereço:</label></br>
                        <input type="tex" name="endereco" id="endereco"></br>

                        <lavel for="telefone">Telefone:</label></br>
                        <input type="tex" name="telefone" id="telefone"></br>

                        <lavel for="nome_produto">Nome do Produto:</label></br>
                        <input type="tex" name="nome_produto" id="nome_produto"></br>

                        <lavel for="vUnit">Valor Unitario:</label></br>
                        <input type="tex" name="vUnit" id="vUnit"></br>

                        <lavel for="qtd">Quantidade:</label></br>
                        <input type="tex" name="qtd" id="qtd"></br>

                        <lavel for="vTot">Valor Total:</label></br>
                        <input type="tex" name="vTot" id="vTot"></br>

                        <button type="submit" name="cadastrar">Cadastrar</button>
                    </form>
                </div>
                <div class="footer col-sm-12">
                    <?php
                        include_once("rodape.php")
                    ?>
                </div>
            </div>
</div>
</body>

