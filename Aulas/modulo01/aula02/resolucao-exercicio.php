<form action=""method="post">
 <input name="n1" type="text" placeholder="Numero 1">
 <input name="n2" type="text" placeholder="Numero 2"> 

 <button name="Soma">Somar</button>
 <button name="Subtracao">Subtrair</button>
 <button name="Multiplicacao">Multiplicar</button>
 <button name= "Divisão">Dividir</button>
</form>

<?php
if($_POST) {
 
 if (isset($_POST["Subtracao"])) {
 echo $_POST["n1"] - $_POST["n2"];

 }
 if(isset($_POST["Soma"])) {
  echo $_POST["n1"] + $_POST["n2"];
 }

 if(isset($_POST["Multiplicacao"])) {
  echo $_POST["n1"] * $_POST["n2"];
 }

 if(isset($_POST["Divisão"])) {
  echo $_POST["n1"] / $_POST["n2"];
 }
 var_dump($_POST);
}
?>