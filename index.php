<!DOCTYPE html>

<head>
  <meta charset="UTF-8" />
  <title>PedidosChat</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styleLog.css">
</head>

<body>

  <div class="content">

    <div id="login">


      <form method="post" action="bot/Chat.php">

        <h1>Maluko do açaí<br>
          <img src="css/Logo.png"> <br>
          Cadastre seu endereço para pedir</h1>

        <p>
          <label for="end">Seu endereço</label>
          <input id="end" name="end" type="text" placeholder="R. rua, numero" />
        </p>

        <p>
          <input type="submit" value="Pedir" />
        </p>
      </form>
    </div>
  </div>


  <div class="rodape1">
    <img src="css/Rodape.png" />
  </div>


</body>

</html>