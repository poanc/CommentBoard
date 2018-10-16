<?php
    require_once('connection.php');

    $page_sql = 'SELECT COUNT(id) FROM comments where parent_id=0'; 
    $page_result = $conn->query($page_sql);                      
    $page_row = $page_result->fetch_assoc();                    

    $pages = ceil( $page_row['COUNT(id)'] / 10 );   
    
    $arr = array('pages' => $pages);
    echo json_encode($arr);

    $conn->close();                         
?>  


