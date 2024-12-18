
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="get" action="/php3.php">
        <input type="number" name="num">
        <button type="submit">summit</button>
    </form>
    <?php
        if(isset($_GET['num'])){
            $num = $_GET['num'];
            $sum = 0;
            for($i = 1; $i <= 12; $i++){
                echo $num . " x " . $i . " = " . $num * $i . "<br>";    
            }
        }
    ?>

</body>
</html>