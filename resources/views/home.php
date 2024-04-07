<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hola mundo </h1>
    <ul>
        <?php for ($i=0; $i <count($users) ; $i++) { 
            echo "<li>".$users[$i][1]."</li>";
        } ?> 
    </ul>
    
    

    
</body>
</html>