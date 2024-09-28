<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["NOME"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["NOME"]);
  }
  
  if (empty($_POST["E-mail"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["E-mail"]);
  }
    
  if (empty($_POST["Apelido"])) {
    $website = "";
  } else {
    $website = test_input($_POST["Apelido"]);
  }

  if (empty($_POST["CPF (Cadastro de Pessoa Fisica"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["CPF (Cadastro de Pessoa Fisica"]);
  }

  if (empty($_POST["Gênero"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["Gênero"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Só mais uma coisa pra terminar o seu cadastro!</h2>
<p><span class="error">* Campo obrigatorio</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  NOME: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Apelido: <input type="text" name="apelido">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  CPF: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  
  RG: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><vr>
  
    Gênero:
  <input type="radio" name="gênero" value="feminino">Feminino
  <input type="radio" name="gênero" value="masculino">Masculino
  <input type="radio" name="gênero" value="Outro">Outro
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Cadastro confirmado:</h2>";
echo $NOME;
echo "<br>";
echo $email;
echo "<br>";
echo $Apelido;
echo "<br>";
echo $CPF;
echo "<br>";
echo $RG;
echo "<br>";
echo $Gênero;
?>

</body>
</html>