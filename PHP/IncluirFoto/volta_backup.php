<center><?
echo "Função Recuperar o banco de dados!!!!<br><br>";
$abrir1 = fopen("db.backup","r");
$conteudo = fread($abrir1 , filesize("db.backup"));
fclose($abrir1);

$backps = fopen("db.dat","w");
fwrite($backps , $conteudo);
fclose($backps);

$limp = "";
if (!$abrir = fopen("db.backup","w")) {
echo "erro ao abrir o arquivo!";
}
fwrite($abrir , $limp) ;
echo "Banco de dados recuperado com sucesso!<br><br>";
fclose($abrir);
echo "<a href='index.php'>Voltar ao Guest Book!";
?>
