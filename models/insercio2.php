<html>
<head>
    <title> Alta </title>
</head>
<body>
    <?php
        $mysql=new mysqli("localhost","root","","tododb");
        if ($mysql->connect_error)
            die('Error a la connexió de base de dades');
        
        $mysql->query("insert into tasks(id, name, description, startDate, endDate, users_id, status_id) values (null,'$_REQUEST[name]','$_REQUEST[description]','$_REQUEST[startDate]','$_REQUEST[endDate]','$_REQUEST[users_id]','$_REQUEST[status_id]')") or die($mysql->error);
        $mysql->close();

        echo 'Nova tasca donada alta';
    
    ?>
    <br>
</body>
</html>