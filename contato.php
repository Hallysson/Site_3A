<!DOCTYPE html>

<html>

    <head>
        <title>3A - Soluções Empresariais</title>
        <link rel="stylesheet" href="template/estilo/estilo-contato.css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body><!--
        <iframe id="background-menu" src="template/cabecalho-menu.html"></iframe>
        <iframe id="menu" src="template/menu.html"></iframe>-->

        <article class="content">
            <section id="fale-conosco">
                <image class="imagem-fale-conosco" src="imagens/background5.png"/>

                <div id="cards">
                    <div class="card-principal">
                        <div class="card-imagem-principal">
                            <img src="imagens/grafismo3.png">
                        </div>
                        <div class="card-titulo-principal">Fale conosco</div>
                        <div class="card-texto-principal">
                            <p>
                                Deixe sua mensagem que entraremos em contato...
                            </p>
                        </div>
                    </div>
                    <?php
                        if(isset($_POST['nome']) && !empty($_POST['nome'])){
                            $nome = addslashes($_POST['nome']);
                            $email = addslashes($_POST['email']);
                            $mensagem = addslashes($_POST['mensagem']);

                            $para = "contato@3asolucoes.com.br";
                            $assunto = "Pergunta do Contato";
                            $corpo = "Nome: ".$nome." - E-mail: ".$email." - Mensagem: ".$mensagem;
                            $cabecalho = "From: contato@3asolucoes.com.br"."\r\n".
                            "Reply-To:".$email."\r\n".
                            "X-Mailer: PHP/".phpversion();

                            mail($para, $assunto, $corpo, $cabecalho);

                            echo "<h2>Mensagem enviada com sucesso</h2>";

                            exit;
                        }
                    ?>
                    <form id="contato" method="POST">
                        <input type="text" class="campo-form" required autofocus pattern="[A-Za-z]{3,}" name="nome" placeholder="Seu nome" /></br>
                        <input type="email" class="campo-form" required name="email" placeholder="Seu email" /></br>
                        <input type="text" class="campo-form" required name="assunto" placeholder="Assunto" /></br>
                        <textarea required name="mensagem" placeholder="Digire a sua mensagem aqui..."></textarea></br>
                        <input class="botao-enviar" type="submit" value="Enviar"/>
                    </form>
                </div>
                
            </section>
        </article>
        <footer class="rodape">
            <iframe class="rodape-int" frameborder="0" src="template/rodape.html"></iframe>
        </footer>
    </body>

</html>