<?php
// creating functionality for DELETE

// include the connection
$conn = mysqli_connect('localhost','root','','commition_projject');


 //now check if the method req is post
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn_delete'])){
  echo  $id = $_POST['btn_delete'];

 // if this true then let's Query
    $Query  = "DELETE FROM clients WHERE  ID = $id";

//    //execute the Query

  // check if the Query is Success or error
 if(mysqli_query($conn,$Query)){
     ?>
     <script>
         alert("Successfully Deleted")
         //then hehe punta kanalang sa index
         window.location.href = "../index.php"
     </script>
<?php
 }else{
     echo "something Wrong hayop ka";
 }
}

