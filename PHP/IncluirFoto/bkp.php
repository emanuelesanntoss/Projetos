<center><?
echo "Função Gerar Backup do banco de dados!!!!<br><br>";
$abrir1 = fopen("db.dat","r");
$conteudo = fread($abrir1 , filesize("db.dat"));
fclose($abrir1);

$backps = fopen("db.backup","w");
fwrite($backps , $conteudo);
fclose($backps);

echo "<a href='index.php'>Voltar ao Guest Book!";
?>
