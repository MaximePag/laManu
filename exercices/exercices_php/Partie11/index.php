<?php
if (isset($_POST['addition'])){
  $result = ($_POST['chiffre1'] + $_POST['chiffre2']);
}
elseif (isset($_POST['soustraction'])){
  $result = ($_POST['chiffre1'] - $_POST['chiffre2']);
}
elseif (isset($_POST['multiplication'])){
  $result = ($_POST['chiffre1'] * $_POST['chiffre2']);
}
elseif (isset($_POST['division'])){
  $result = ($_POST['chiffre1'] / $_POST['chiffre2']);
}
elseif (isset($_POST['division'])){
  $result = ($_POST['chiffre1'] / $_POST['chiffre2']);
}
elseif (isset($_POST['reset'])){
  $result = 0;
  $_POST['chiffre1'] = 0;
  $_POST['chiffre2'] = 0;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculatrice - Partie11</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Une calculatrice en PHP</h1>
    <table>
    <form action="index.php" method="post">
      <tr>
        <td colspan="2" >Calculatrice</td>
      </tr>
      <tr>
        <th><input type="text" class="champ" name="chiffre1" value="<?php if (!empty($_POST['chiffre1'])){ echo $_POST['chiffre1']; } ?>" /></th>
        <th><input type="text" class="champ" name="chiffre2" value="<?php if (!empty($_POST['chiffre2'])){ echo $_POST['chiffre2']; } ?>" /></th>
      </tr>
      <tr>
        <td><input type="submit" name="addition" value="+"/></td>
        <td><input type="submit" name="soustraction" value="-"/></td>
      </tr>
      <tr>
        <td><input type="submit" name="multiplication" value="*"/></td>
        <td><input type="submit" name="division" value="/"/></td>
      </tr>
      <tr>
        <td colspan="2" ><input type="submit" name="reset" id="reset" value="C"/></td>
      </tr>
      <tr>
        <td colspan="2" ><p><b>Résultat : </b><?= $result ?></p></td>
      </tr>
    </form>
    </table>
  </body>
</html>
