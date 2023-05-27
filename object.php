<?php 
$id = $_REQUEST['id'];

$object = array (
    'title' => '',
    'question' => '',
    'description' => '',
    'code' => '', 
    'date' => '',
);

// db connection credentials 
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

// create connection
$connection = new mysqli($servername, $username, $password);

// check for error
if ($connection->connect_error) {
    echo 'Connection failed: ' . $connection->connect_error;
    exit; // stops all code execution
}

// if no error
echo 'congrats!';

// connect to 'fitl' database
$connection->select_db('fitl');

// query to select the object (or db-row)
$sql = 'SELECT * FROM bands WHERE id = ' . $id;

// execute the query
$result = $connection->query($sql);

// check for and retrieve the object
if ($result->num_rows > 0) {
    $object = $result->fetch_assoc(); 
    // fetch_assoc() returns the object that was retrieved from the db in form of an array
    echo '<pre>';
    print_r($object); // print_r prints the content of an array
    echo '</pre>';
}



if ($id == 1) {
    $object = array (
        'title' => 'Question 1',
        'question' => 'Can you explain loops to me?',
        'description' => 'It just won\'t stop looping!
                        It just won\'t stop looping! It just won\'t stop                looping!',
        'code' => 'loop', 
        'date' => '11. Aug. 2022',
    );
} elseif ($id == 2) {
    $object = array(
        'title' => 'Question 2',
        'question' => 'how do u list in HTML?',
        'description' => 'What\'s wrong with this list?',
        'code' => '<ul>
                <li>item1</li>
                <li>item2</li>
                <li>item3</li>
                  </ul>', 
        'date' => '12. Sept. 2023',
    );
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $object['title'] ?></title>
</head>
<body>
    <h1><?php echo $object['title'] ?></h1>
    <h3><?php echo $object['question'] ?></h3>
    <p><?php echo $object['description'] ?></p>
    <code><?php echo $object['code'] ?></code>
    <footer><p><?php echo $object['date'] ?></p></footer>
</body>
</html>