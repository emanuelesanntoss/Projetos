
<html>
<head>
<!-- Criado Por Paulo Junior | grupowebdesign.com -->
<title>Envia Produto</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
.style5 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; color: #345885; font-size: 11px; }
-->
</style>
<link href="css.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style6 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 20px;
	color: #345885;
}
.style7 {
	font-size: 14px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #FF3300;
}
.style8 {
	color: #333333;
	font-size: 12px;
}
-->
</style>
</head>

<body>
<p><span class="style6">Produtos |</span> <span class="style7">Telefones <br>
    <span class="style8">*Somente envie fotos no formato JPG, e no tamanho preferencial de 130x142 px</span> </span></p>
<hr align="left" width="80%" class="regua">
<form method="POST" action="../postar.php" enctype="multipart/form-data"><div align="left">
  <table width="95%"  border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="22%" bgcolor="#F5F5F5"><span class="style5">&nbsp;&nbsp;&nbsp; Nome:</span></td>
      <td width="78%"><input name="nome" type="text" class="formula" size="80"></td>
    </tr>
    <tr>
      <td bgcolor="#F5F5F5"><span class="style5">&nbsp;&nbsp; &nbsp;Foto</span></td>
      <td><input name="form_imagem" type="file" class="formula" id="form_imagem2" size="45"></td>
    </tr>
    <tr>
      <td bgcolor="#F5F5F5"><span class="style5">&nbsp;&nbsp;&nbsp;Descri&ccedil;&atilde;o</span></td>
      <td><textarea name=msg cols="80" rows="6" class=formula id="textarea2" tabindex=3></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="acao" type="hidden" id="acao2" value="enviar">
        <input name="form_url" type="hidden" id="form_url2" value="<? echo $url; ?>">
        <br>
        <input name="Submit" type="submit" class="bt" value="Enviar"></td>
    </tr>
	<!-- Criado Por Paulo Junior | grupowebdesign.com -->
  </table>
  </div>
</form>
</body>
<!-- Criado Por Paulo Junior | grupowebdesign.com -->
</html>
