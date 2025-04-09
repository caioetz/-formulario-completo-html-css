<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>php</title>
    <style>
    {
        align-items: center;
    }
</style>
</head>
<body>

    

    

    
<div style="align-items: center; margin-left: 40%; margin-top: 2%;  margin-right: 40%; padding: auto;  border-radius: 10px; background-color: rgb(218, 218, 218);">
<div style="margin-left: 7%;">
<h1>Dados Coletados</h1>
     <?php
    echo "Nome: ";
    echo $_GET['nome'];
    echo "<br>"; 
    
    echo "Idade: ";
    echo $_GET['idade'];
    echo "<br>";
    
    echo "Email: ";
    echo $_GET['email'];
    echo "<br>";
    
    echo "Data de Nascimento: ";
    echo $_GET['data_nascimento'];
    echo "<br>";
    
    echo "Senha: ";
    echo $_GET['senha'];
    echo "<br>";
    
    echo "Linguagem de progamação: ";
    echo implode(', ', $_GET['tecnologias']);
    echo "<br>";
    
    echo "Experiência em HTML: ";
    echo $_GET['nivel_html'];
    echo "<br>";
    
    echo "Sistema Operacional: ";
    echo $_GET['sistema'];
    echo "<br>";
    ?>
 
 <br>
 <a href="index.html">Voltar</a>
</div>
 </div>
</body>
</html>