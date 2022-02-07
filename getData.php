<?php 
// Database connection info 
$dbDetails = array( 
    'host' => 'localhost', 
    'user' => 'root', 
    'pass' => '', 
    'db'   => 'register' 
); 
 
// DB table to use 
$table = 'users'; 
 
// Table's primary key 
$primaryKey = 'id'; 
 
// Array of database columns which should be read and sent back to DataTables. 
// The `db` parameter represents the column name in the database.  
// The `dt` parameter represents the DataTables column identifier. 
$columns = array( 
    array( 'db' => 'username', 'dt' => 0 ), 
    array( 'db' => 'register',  'dt' => 1 ), 
    array( 'db' => 'id',      'dt' => 2 ), 
    //array( 'db' => 'register',     'dt' => 3 ), 
    // array( 'db' => 'country',    'dt' => 4 ), 
    // array( 
    //     'db'        => 'created', 
    //     'dt'        => 5, 
    //     'formatter' => function( $d, $row ) { 
    //         return date( 'jS M Y', strtotime($d)); 
    //     } 
    // ), 
    // array( 
    //     'db'        => 'status', 
    //     'dt'        => 6, 
    //     'formatter' => function( $d, $row ) { 
    //         return ($d == 1)?'Active':'Inactive'; 
    //     } 
    // ) 
); 
 
// Include SQL query processing class 
require 'ssp.class.php'; 
 
// Output data as json format 
echo json_encode( 
    SSP::simple( $_GET, $dbDetails, $table, $primaryKey, $columns ) 
);
?>