<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World 123</h1>
    <?php 
    echo "Another Line";
    ?>
    <ul>
        <?php 
            for ($i=1; $i <= 10; $i++) { 
                echo "<li>Item $i</li>";
            }
        ?>
    </ul>
</body>
</html>