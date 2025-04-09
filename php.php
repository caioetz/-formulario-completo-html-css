<div id="a">
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
    
    echo "SO: ";
    echo $_GET['sistema'];
    echo "<br>";
    ?>
 
 <br>
 <a href="index.html">Voltar</a>
</div>
 