<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
</head>
<body>

<form action="Zukowski.php" method="POST">
Imie <input type="text" name="imie"> <br />
Nazwisko <input type="text" name="nazwisko"> <br />
Adres <input type="text" name="adres"> <br />
<select name="produkt" >
<optgroup  label="grupa1"/>
<option>Produkt1</option>
<option>Produkt2</option>
<optgroup label="grupa2" />
<option>Produkt1</option>
<option>Produkt2</option>
</select>
<br />
Data wysyłki <input name="datawysylki" type="datetime-local" /> <br />
Kolor pudełka <input type="color" name="kolor" value="#00ff00"/>
<input type="submit" value="Wyślij" />

</form>

<br /><br /><br />

Imie: <?php echo $_POST["imie"]; ?> <br />
Nazwisko <?php echo $_POST["nazwisko"]; ?>  <br />
Adres <?php echo $_POST["adres"]; ?>  <br />
Produkt:  <?php echo $_POST["produkt"]; ?>  <br />
Data wysyłki: <?php echo $_POST["datawysylki"]; ?>  <br />
Kolor: <?php echo $_POST["kolor"]; ?>  <br />







</body>
</html>