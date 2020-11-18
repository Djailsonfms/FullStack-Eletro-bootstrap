<!--inclusao de dados da pagina inclusao.php-->
<?php
include_once("inclusao.php");
 if(isset($_POST['nome']) && isset($_POST['msg'])){
            $nome = $_POST['nome']; 
            $msg = $_POST['msg'];
        
            $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
            $result = $conn-> query($sql); 

            header("Location: ./contato.php");
        }


        include_once("cabecalho.php");
        include_once("menu.php");
?>
<!--------------------------------------------------------------------------------------->


    <div class="container-fluid">
        <h2 class="text-primary"style="margin-left:20px">Fale Conosco</h2>
        <hr>
            <div class="row">
                <div class="col-sm-6">
                    <img src="./imagens/gmail.jpg" alt="email" width="20px" style="margin-left:20px">contato@fullstackeletro.com
    </br>
                    <form method="POST" action="" style="margin-left: 20px">
                        Nome:</br>
                    <input type="text" name="nome" style="width:500px"></br></br>
                        E-mail:</br>
                    <input type="email" name="email" style="width:500px"></br></br>
                        Mensagem:</br>
                    <textarea type="text" name="msg" style="width:500px"></textarea></br>
        
                    <input type="submit" name="submit" value="Enviar" ></a href="index.php"></br>
                    </form>
                </div>
                <div class="col-sm-6">
                    <img src="./imagens/ui.jpg" alt="whatsAp" width="40px">(11) 99999-9999
                </div>
                <div class="footer col-sm-12">
                    <?php
                        include_once("rodape.php")
                    ?>
                </div>
            </div>
    </div>
