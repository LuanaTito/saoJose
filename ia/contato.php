<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>São José Peças para Empilhadeiras - Contato</title>
    <meta name="description" content="Entre em contato com a São José Peças para Empilhadeiras. Telefone, WhatsApp, e-mail ou formulário." />
    <meta name="keywords" content="São José, peças, empilhadeiras, São Bernardo, São Paulo, Still, toyota, clark, contato, orçamento" />
    <link rel="shortcut icon" type="image/png" href="images/logosj.png" />
   
    <!--Buscando o css externo-->
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body>
    <header id="topo">
        <div>
            <h1>
                <a href="index.html"><img src="images/logotipo_saojose_novo.png" alt="Logotipo São José Peças"></a>
            </h1>
            <span id="iconMenu" class="material-symbols-outlined" onclick="clickMenu()">
                menu
            </span>
            <nav id="itens">
                <a href="index.html" tabindex="1">Home</a>
                <a href="sobre.html" tabindex="2">Sobre</a>
               <!-- <a href="#" tabindex="3">Peças</a>
                <a href="#" tabindex="4">Empilhadeiras</a>-->
                <a href="contato.html" tabindex="5">Contato</a>
            </nav>
        </div>
    </header>

    <main id="conteudo">
        <div class="conteudo-info" id="conteudo-contato">
            <article class="cont-contato">
                <div class="formulario">
                    <h2 class="titulo">Contato</h2>

                    <?php
          if( isset( $_POST['enviar']) ){
              //Verificando se os campos indicados foram preenchidos 
              if( !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['telefone']) && !empty($_POST['mensagem']) ){
                  
                  //pegar os valores preenchidos nos campos do formulario
                  $nome = $_POST['nome'];
                  $email = $_POST['email'];
                  $telefone = $_POST['telefone'];
                  $mensagem = $_POST['mensagem'];
                  
                  
                  /*Rotinas para utilizacao de banco de dados*/
                  include "conecta.php";
                  
                  //Obter a data (no formato do banco)
                  $data = date("Y-m-d H:i:s");
                  
                  // montar a consulta SQL
                  $sql = "INSERT INTO contatos (nome, email, telefone, mensagem, data)";
                  $sql .= "VALUES( '{$nome}', '{$email}', '{$telefone}', '{$mensagem}', '{$data}')";
                  //echo $sql
                  
                  // executar a consulta montada 
                  
                  mysqli_query( $conexao, $sql) or die(mysqli_error($conexao));
                  
                 ?> 
                  <p>Seus dados foram enviados com suacesso!</p>
                  <p>Em breve responderemos sua mensagem.</p>
                  
                  <?php
              }else{
                  ?>
                  <p>Você deve preencher os campos obrigatórios</p>
                  <p><a href="contato.php"><b>Voltar para o formulário</b></a></p>
                                 
              <?php 
              }
              
          } else {
                
            ?>
            
            



                    <p>Entre em contato conosco, escolha a melhor forma. Telefone, WhatsApp, e-mail ou nosso formulário:</p>
                    <form action="" id="form-contato" method="post" name="contato">
                        <p>
                            <label for="nome">Nome:</label>
                            <input tabindex="5" required type="text" id="nome" name="nome">
                        </p>
                        <p>
                            <label for="email">E-mail:</label>
                            <input tabindex="6" required type="email" id="email" name="email">
                        </p>
                        <p>
                            <label for="telefone">Telefone:</label>
                            <input tabindex="7" required type="tel" id="telefone" name="telefone" placeholder="(11) 99999-9999">
                        </p>
                        <p>
                            <label for="mensagem">Mensagem:</label>
                            <textarea tabindex="9" required name="mensagem" id="mensagem" cols="30" rows="6" placeholder="Como podemos ajudar?"></textarea>
                        </p>
                        <p>
                            <button type="submit" tabindex="11" id="enviar" name="enviar">Enviar</button>
                        </p>
                    </form>
                    <?php
            } //fim do botao enviar 
            ?>
                </div>
            </article>
            <article class="cont-contato" id="localizacao-end">
                <div class="localizacao">
                    <p><img src="images/blog-consultor-vendas.png" alt="Consultor de vendas"></p>
                    <div class="consultor">
                        <p>SE PREFERIR, FALE PELO WHATSAPP COM 
                            UM DOS NOSSOS CONSULTORES PARA UM 
                            <strong>ATENDIMENTO PERSONALIZADO!</strong></p>
                        <div class="btnorcamento"><a href="https://wa.me/5511940289794?text=Olá,%20gostaria%20de%20fazer%20um%20orçamento" target="_blank">FALAR COM UM CONSULTOR</a></div>
                    </div>
                </div>
            </article>
        </div>
    </main>

    <footer class="rodape">
        <div class="rodape-conteudo">
            <div class="menu-rodape">
                <h3 class="titulo-rodape">ATENDIMENTO</h3>
                <p>(11) 94028-9794<br>
                    (11) 2598-8811<br>
                    fachini.emp@gmail.com</p>
                <p>Horários de Funcionamento<br>
                    Segunda a Sexta-Feira - 8h às 18h</p>
                <p>Rua Candido Portinari, 85<br>
                    São Bernardo do Campo</p>
            </div>
            <div class="menu-rodape">
                <h3 class="titulo-rodape">INSTITUCIONAL</h3>
                <ul>
                    <li><a href="sobre.html">Sobre nós</a></li>
                    <li><a href="#">Atuação</a></li>
                    <li><a href="#">Peças</a></li>
                    <li><a href="#">Empilhadeiras</a></li>
                    <li><a href="contato.html">Orçamento</a></li>
                    <li><a href="contato.html">Contato</a></li>
                </ul>
            </div>
            <div class="redes">
                <aside>
                    <a href="#"><img src="images/facebook.png" alt="Logo do Facebook"></a>
                    <a href="#"><img src="images/insta.png" alt="Logo do Instagram"></a>
                    <a href="#"><img src="images/whatsapp.png" alt="Logo do WhatsApp"></a>
                </aside>
            </div>
        </div>
        <div class="assinatura">
            <p>Desenvolvido por <a href="http://www.utiinternet.com.br" target="_blank">utiinternet</a> |
                Todos os direitos reservados |
                2024</p>
        </div>
    </footer>
    <script src="js/interacoes.js"></script>
</body>
</html>