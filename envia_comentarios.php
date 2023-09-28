
<?php
// conexão com mysql
$conexao = mysql_connect("localhost", "wwwalla_wwwalla", "123123123");
$banco = mysql_select_db("wwwalla_coments");
// Fim
?>

<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data = date("dd-mm-YYYY");
if($nome == null){
echo "Ensira Seu Nome!";
exit();
}
if($email == null){
echo "Insira Seu E-mail Por favor!";
exit();
}
$inserir = mysqli_query($con,"insert into comentarios (nome, email, data, mensagem) value ('$nome', '$email', '$data', '$mensagem')");
if($inserir > 0){
echo "Comentario Enviado com Sucesso!";
}else{
echo "O Comentario nao foi Enviado!";
echo "<br />";
}
?>
<form name="back" method="post" action="comentarios.php">
	<input type="submit" value="Voltar">
</form>

























