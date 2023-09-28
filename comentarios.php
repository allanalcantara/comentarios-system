<?php 
// conexão com mysql
$conexao = mysql_connect("localhost", "wwwalla_wwwalla", "123123123");
$banco = mysql_select_db("wwwalla_coments");
// Fim
?>
<form name="form" method="post" action="envia_comentarios.php">
Nome: <input type="text" name="nome">
<br />
E-mail: <input type="text" name="email">
<br />
<br />
Mensagem: <textarea name="mensagem" ></textarea>
<br />
<br />
<input type="submit" value="Enviar Recado">
</form>
<MARQUEE behavior=scroll width=250 height="90" direction="down" scrollamount="2"><p>
<?
echo "<h1>Mensagens Enviadas Pelos Usuarios!</h1>";
echo "<hr>";
// Lista dos Comentarios
$sql = "select * from comentarios order by id desc";
$executar = mysql_query($sql);
while ($exibir = mysql_fetch_array($executar)){;
echo "<strong>Nome: </strong>".$exibir['nome'];
echo "<br />";
echo "<strong>E-mail: </strong>".$exibir['email'];
echo "<br />";
echo "<strong>Data da Postagem: </strong>".$exibir['data'];
echo "<br />";
echo "<strong>Mensagem: </strong>".$exibir['mensagem'];
echo "<br />";
echo "<br />";
echo "<hr>";
echo "<br />";
}
?>
</p></MARQUEE>