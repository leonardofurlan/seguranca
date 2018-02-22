

<form method="post">
	
	<input type="text" name="busca">
	<button type="submit">Enviar</button>

</form>

<?php 

//evitando cross-site-script (xss)


if(isset($_POST['busca'])){

	echo strip_tags($_POST['busca'], "<strong><a>");
	// o que vem depois da vírcula são as exceções a não ser excluidas.

	//ou

	echo htmlentities($_POST['busca']);

}

 ?>