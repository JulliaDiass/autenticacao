<!DOCTYPE html>
<html>
<head>
<style>

th{
 border: 10px solid grey;
}
td{
 border: 10px solid grey;
}
.formulario{
  border: 8px solid greenyellow;
  display: flex;
  flex-direction: column;
  align-items: center;
  
;
}
button{
  margin-top: 15px;
  margin-left: 2px;
}


</style>
  <title>login</title>
</head>
<body>
  <section class="content">
    <div>
      <div class="dados">
        <?php
          $json = file_get_contents('senhas.txt');
          $usuarios = json_decode($json);
        ?>
      </div>
    </div>
    <form class="formulario" action="consulta.php" method="post">
      <h1> FAÇA SEU LOGIN</h1>
      <div>
        <label for="login">EMAIL:</label>
        <input type="text" id="login" name="login">
      </div>
      <div>
        <label for="senha">SENHA:</label>
        <input type="password" id="senha" name="senha">
      </div>
      <div>
        <button type="submit">ACESSAR</button>
      </div>
    </form>
  </section>
  <script src="script.js"></script>
</body>
</html>