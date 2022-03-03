<html>
<head>
        <title> Lojinha de cosméticos </title>
        <link rel="stylesheet" type="text/css" href="tela3.css">
        <meta charset="utf-8">
    </head>
<body>
    <div id="corpo">
<?php

echo "<br>";
$arq =  fopen("msg.txt", "r");
echo "Produtos anteriores: <br><br>\n";
$registro = fgets($arq);
do{
    list($nomeProduto,$valor,$descricao) = array_pad(explode(";", $registro),4,null);
    echo $nomeProduto."<br><br>\n";
    echo $valor. "<br>";
    echo $descricao."<br><br>\n";
}
while(($registro = fgets($arq)) !== false);
echo "</br>\n";



$files = glob("imagens/*.*");
$colCnt=0;


for ($i=1; $i<count ($files); $i++) {
  $colCnt++;
  if ($colCnt==1)
  echo '<tr>';
  echo '<td width="25%" style="font-size:8.5px; font-family:arial">';

  $num = $files[$i];
  echo '<img src="'.$num.'" align="absmiddle"/>';
  print substr(substr($num,6,100),0,-4);

  echo '</td>';

  if ($colCnt==4)
    {
    echo '';
    $colCnt=0;
    }
  }

echo '';


?>
        </div>
    </body>
</html>