<?php
include 'connection.php';
 
// Escape user inputs for security
$term = $mysqli->real_escape_string($_REQUEST['term']);
 
if(isset($term)){
    // Attempt select query execution
    $sql = "SELECT * FROM algo WHERE firm LIKE '%" . $term . "%' or builder LIKE '%". $term . "%'";
    if($result = $mysqli->query($sql)){
        if($result->num_rows > 0){            
            while($row = $result->fetch_array()){
                echo "<a href='http://www.bing.com/'>" . $row['builder'] . "</a>";
            }
            // Free result set
            $result->free();
        } else{
            echo "<p>No matches found</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}
 
// Close connection
$mysqli->close();
?>