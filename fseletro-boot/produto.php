<!--inclusao de dados da pagina inclusao.php-->
<?php
    include_once("inclusao.php");
    include_once("cabecalho.php");
    include_once("menu.php");
?>


    <body>
        <header class="container-fluid" style="margin-left: 30px">
            <h2 class="text-primary">Produtos</h2>
            <hr>
            
                <div class="row">
                    <div class="col-sm-3">
                        <aside class="categorias">
                            <h3>Categorias</h3><br>
                                <ul>
                                    <li onclick="exibir_todos()">Todos(12)</li><br>
                                    <li onclick="exibir_categoria('geladeira')">Geladeiras(3)</li><br>
                                    <li onclick="exibir_categoria('fogao')">Fogões(2)</li><br>
                                    <li onclick="exibir_categoria('microondas')">Microondas(3)</li><br>
                                    <li onclick="exibir_categoria('lavaroupas')">Lavadoura de Roupas(2)</li><br>
                                    <li onclick="exibir_categoria('lavaloucas')">Lava-Louças(2)</li>
                                </ul>
                            </aside>
                    </div>
                    <div class="col-sm-9">
                        <section class="produtos">
                
                            <?php
                            $sql = "select * from produtos";
                            $result = $conn ->query($sql);
                    
                            if($result->num_rows > 0){
                                while($rows = $result->fetch_assoc()){
                                    
                            ?>
                                <div class="box_produto" id="<?php echo $rows["categoria"];?>" style="display: inline-block;">
                                    <img src="<?php echo $rows["imagem"];?>" alt="Geladeira" style="width: 120px;" onclick="destaque(this)">
                                    <p class="descrição"><?php echo $rows["descricao"];?></p>
                                    <hr>
                                    <p class="descrição">De: <strike>R$ <?php echo $rows["preco"];?></strike></p>
                                    <p class="preço">Por: R$ <?php echo $rows["preco_final"];?></p><br>
                                </div>
                            <?php
                                }
                            }else {
                                echo "Nenhum produto cadastrado!";
                            }
                            ?>
                        </section>
                    </div>
                    <div class="footer col-sm-12">

                        <?php
                            include_once("rodape.php")
                        ?>
                    </div>
            </div>
        </header>
    </body>
