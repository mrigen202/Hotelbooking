<?php


$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'hbwebsite';

$con = mysqli_connect($hname,$uname,$pass,$db);

if(!$con){
    die("Cannot Connect to Database".mysqli_connect_error());
}


function filteration($data) {
  foreach ($data as $key => $value) {
      // Trim whitespace
      $value = trim($value);
      
      // Remove slashes
      $value = stripslashes($value);
      
      // Remove HTML tags
      $value = strip_tags($value);
      
      // Convert special characters to HTML entities
      $value = htmlspecialchars($value);
      
      
      // Update the array with the filtered value
      $data[$key] = $value;
  }
  return $data;
}

function select($sql,$values,$datatypes)
{
 $con = $GLOBALS['con'];
 if($stmt = mysqli_prepare($con,$sql)){
 mysqli_stmt_bind_param($stmt,$datatypes,...$values); 
 if(mysqli_stmt_execute($stmt)){
   $res = mysqli_stmt_get_result($stmt);
   mysqli_stmt_close($stmt);
   
   return $res;
 }
 else{
       die("Query cannot be executed - Select");
 }  
          
 }
 else{
      die("Query cannot be prepared - Select");
 }
}

// function selectAll($table)
// {
//   $con = $GLOBALS['con'];
//   $res = mysqli_query($con,"SELECT * FROM $table");
//   return $res;
// }


function selectAll($table)
{
    $con = $GLOBALS['con'];
    // Check if the connection is valid
    if (!$con) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Execute the query
    $res = mysqli_query($con, "SELECT * FROM $table");

    // Check if the query was successful
    if (!$res) {
        die("Query failed: " . mysqli_error($con));
    }

    return $res;
}








function update($sql,$values,$datatypes)
{
 $con = $GLOBALS['con'];
 if($stmt = mysqli_prepare($con,$sql)){
 mysqli_stmt_bind_param($stmt,$datatypes,...$values); 
 if(mysqli_stmt_execute($stmt)){
   $res = mysqli_stmt_affected_rows($stmt);
   mysqli_stmt_close($stmt);
   
   return $res;
 }
 else{
       die("Query cannot be executed - Update");
 }  
          
 }
 else{
      die("Query cannot be prepared - Update");
 }
}


function insert($sql,$values,$datatypes)
{
 $con = $GLOBALS['con'];
 if($stmt = mysqli_prepare($con,$sql)){
 mysqli_stmt_bind_param($stmt,$datatypes,...$values); 
 if(mysqli_stmt_execute($stmt)){
   $res = mysqli_stmt_affected_rows($stmt);
   mysqli_stmt_close($stmt);
   
   return $res;
 }
 else{
       die("Query cannot be executed - Insert");
 }  
          
 }
 else{
      die("Query cannot be prepared - Insert");
 }
}


function delete($sql,$values,$datatypes)
{
 $con = $GLOBALS['con'];
 if($stmt = mysqli_prepare($con,$sql)){
 mysqli_stmt_bind_param($stmt,$datatypes,...$values); 
 if(mysqli_stmt_execute($stmt)){
   $res = mysqli_stmt_affected_rows($stmt);
   mysqli_stmt_close($stmt);
   
   return $res;
 }
 else{
       die("Query cannot be executed - Delete");
 }  
          
 }
 else{
      die("Query cannot be prepared - Delete");
 }
}




?>