<?php 
    require 'config.php';
?>
<form action="adicionar_action.php" method="POST">
    <label>
        Nome: <br>
        <input type="text" name="name"> 
    </label>
    <br><br>
    <label>
        Email: <br>
        <input type="email" name="email">
    </label>
    <br><br>
    <input type="submit" value="Enviar">

</form>