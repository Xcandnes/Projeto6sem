<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Loja Acai</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
<?php
$end  = $_POST['end'];
?>


<nav>
    <ul class="cab"  style="list-style: none;">
      <li class="brand"><img src="../css/Logo.png" style="width: 10%;"></li>
      <li><label style="color:rgb(97, 25, 111); font-size: 20px;">Seu endereço: </label></li>
      <li><a><input type="text" name="end" id="end" value="<?php echo$end; ?>"></a></li>
    </ul>
  </nav>

      
    <div class="container">
        <div class="chatbox">
            <div class="header">
                <h4>Faça seu pedido</h4>
                <br>
                <p>Mande-nos um oi para iniciar o atendimento</p>
            </div>
            <div class="body" id="chatbody">
                <div class="scroller"></div>
            </div>
            <form class="chat" method="post" autocomplete="off">
                <div>
                    <input type="text" name="chat" id="chat" placeholder="Mensagem...">
                </div>
                <div>
                    <input type="submit" value="Enviar" id="btn">

                    <input type="hidden" name="inicio" id="inicio">
                    <input type="hidden" name="nome" id="nome">
                    <input type="hidden" name="sequencia" id="sequencia">
                </div>
            </form>
        </div>
    </div>
    <script src="app.js"></script>

    <div class="rodape1">
        <img src="../css/Rodape.png" />
    </div>

</body>

</html>