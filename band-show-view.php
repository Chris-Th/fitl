
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $object['bandname'] ?></title>
</head>
<body>
    <h1><?php echo $object['bandname'] ?></h1>
    
    <p><?php echo $object['description'] ?></p>
    
    <footer><p>created at <?php echo $object['created_at'] ?></p></footer>
</body>
</html>