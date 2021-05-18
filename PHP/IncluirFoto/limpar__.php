<center><?
echo "Função limpar o banco de dados!!!!<br><br>";
$limp = "";
if (!$abrir = fopen("db.dat","w")) {
echo "erro ao abrir o arquivo!";
}
fwrite($abrir , $limp) ;
echo "Banco de dados limpo com sucesso!<br> backup gerado como <b>db.backup</b><br>";
fclose($abrir);
if (!$abrir1 = fopen("contador.dat","w")) {
echo "erro ao abrir o arquivo!";
}
fwrite($abrir1 , $limp) ;
 fclose($abrir1);
echo "<a href='index.php'>Voltar ao Guest Book!";
?>
