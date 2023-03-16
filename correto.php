<!DOCTYPE html>
<html>
<head>
  <style>
    h1{
     text-align: center;
    }
    p{
     text-align: center;
    }
  </style>
  <title>Login</title>
</head>
<body>
  <div class="nav"> 
  </div>
  <div class="content">
    <div class="bloco1"> 
  <?php if (isset($_GET['papel'])): ?>
    <h1>PARABÉNS! <?php echo $_GET['papel']; ?>!</h1>
    <p>DADOS CORRETOS</p>
  <?php else: ?>
    <p>Erro na autenticação.</p>
  <?php endif; ?>
</div>
  </div>
</body>
</html>