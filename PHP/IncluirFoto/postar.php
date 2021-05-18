<!--Criado por Paulo Junior | grupowebdesign.com-->
<!-- Para mudar a pasta de destino da imagem, autere "up/"-->
<!-- Este Script é simples, e só aceita JPG pois não fiz condição que teste image/pjpg image/gif etc... -->
<!-- Se você fizer uma versão melhorada disto, favor envie para divino_rf@hotmail.com -->

<!-- Catálogo de Produtos PHP SDB (Sem Banco de dados) V 0.9 Estável mas nem tanto, maio/2006 copyleft -->



<!--Por favor, não retire estas Linhas ACIMA-->
<?
		$pedacos = explode("/",$form_url);
		$num_pedacos = count($pedacos)-3;
		for ($i=0;$i<$num_pedacos;$i++) {
			$endereco = "$endereco$pedacos[$i]/";
		}
		copy($form_imagem,"up/".date("YmdHis").".jpg");
		echo "<script>opener.txtFileName.value='".$endereco."up/".date("YmdHis").".jpg';</script>";
	
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$msg1 = str_replace("\n" , "<br>" , htmlspecialchars($_POST["msg"]));
		$msg = str_replace("[negrito]", "<b>" , $msg1);
		$msg = str_replace("[/negrito]", "</b>" , $msg);
		

		$data = getdate();
		$newdata = "$data[mday]/$data[mon]/$data[year]";
		
		$conteudo = "<p>&nbsp;</p>
		<table width='99%'  border='0' cellpadding='3' cellspacing='3' class='tabela'>
  		<tr>
  		  <td width='15%' height='156' valign='top'><div align='center'><img src='".$endereco."up/".date("YmdHis").".jpg' alt='$nome' width='130' height='142'></div></td>
   		 <td width='85%' valign='top'><table width='100%'  border='0' cellspacing='0' cellpadding='0'>
    		  <tr>
    		    <td height='136' valign='top' class='msg'><p><span class='tit'>$nome</span></p>
    		      <p>$msg</p></td>
    		  </tr>
 		   </table></td>
 		 </tr>
		</table>
		<p>\r\n </p>";

		if (file_exists("db.dat")) {
$abrir1 = fopen("db.dat","r");
$antigos = fread($abrir1, filesize("db.dat"));
fclose($abrir1);
$abrir1 = fopen("db.dat","w");
fwrite($abrir1 ,"$conteudo $antigos");
fclose($abrir1);
}
else {
$abrir = fopen("db.dat","w");
fwrite($abrir , $conteudo);
fclose($abrir);
}
		
echo "<h1>Postado com sucesso! ...</h1> <br>" ;
						
?>
