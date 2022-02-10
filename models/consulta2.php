<html>
<head>
    <title> Consulta </title>
</head>
<body>
    <?php
        $mysql=new mysqli("localhost","root","","tododb");
        if ($mysql->connect_error)
            die('Error a la connexió de base de dades');
        
        $registre=$mysql->query("select description from tasks where id=$_REQUEST[codi]") or die($mysql->error);
        
        if ($reg=$registre->fetch_array())
            echo 'La descripció del codi consultat es: '.$reg['description'];
        else
            echo 'No existeix el codi sol.licitat';

        $mysql->close(); 
    
    ?>
</body>
</html>