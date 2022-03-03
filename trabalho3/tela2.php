<html>
<head>
        <title> Lojinha de cosméticos </title>
        <link rel="stylesheet" type="text/css" href="tela2.css">
        <meta charset="utf-8">
    </head>
<body>
    <div id="corpo">
    <?php

if (isset($_POST)){
    echo "<br>nome do produto: ".$_POST["nomeProduto"]."<br>";
    $msg = fopen("msg.txt","a");
    fputs($msg, $_POST['nomeProduto'].";");

    echo "valor do produto: ".$_POST["valor"]."<br>";
    fputs($msg, $_POST['valor'].";");

    echo "descrição: ".$_POST["descricao"]."<br>";
    fputs($msg, $_POST['descricao'].";");
}
    $arquivo = $_FILES['nomeImagem'];
    $extensao = strtolower(substr($arquivo['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "imagens/".$novo_nome;

    $arq=$_FILES['nomeImagem'];
    if(move_uploaded_file($arquivo['tmp_name'], $diretorio)){
    echo "upload realizado com sucesso!";
    echo "<img src = 'imagens/$novo_nome' id='imagens'>";
    fputs($msg,$novo_nome."\n");
    fclose($msg);
    }
    ?>
    <a href="tela3.php"><button>continuar</button></a>
</div>
    </body>
</html>