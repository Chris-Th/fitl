<?php 
$page = $_REQUEST['page'];

include 'db-connection.php';


// connect to 'fitl' database
$connection->select_db('fitl');

// determine what page to show
if($page == 'show') {
    $id = $_REQUEST['id'];
    show($id);
}
elseif ($page == 'create') {
    create();
}

// load the show-page
function show($id) {
     global $connection;
  
    $object = array(
        'bandname' => '',
        'main_img' => '',
        'description' => '',
        'created_at' => '',
    );
    
    
    // query to select the object (or db-row)
    $sql = 'SELECT * FROM bands WHERE id = ' . $id;
    
    // execute the query
    $result = $connection->query($sql);
    
    // check for and retrieve the object
    if ($result->num_rows > 0) {
        $object = $result->fetch_assoc(); 
        // fetch_assoc() returns the object that was retrieved from the db in form of an array
        // for test and debuging:
            // echo '<pre>';
            // print_r($object); // print_r prints the content of an array
            // echo '</pre>';
    }
    
    // include the view-file
    include 'band-show-view.php';
}

// Load the create page
function create() {
    include 'band-create-view.php';
}

?>