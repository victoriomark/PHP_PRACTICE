<?php
$conn = mysqli_connect('localhost','root','','notepad');

if(!$conn){
    die("Connection Problem");
}else{

    $Query = " SELECT * FROM note_db";

  $resul =  mysqli_query($conn,$Query);
if($resul){
    while ($row = mysqli_fetch_array($resul)){
        ?>
        <h1> <?php echo $row['ID'];  ?></h1>
        <script>
            alert("Hello ")
        </script>
  <?php


        echo $row['Note'];
        echo $row['created_at'];
    }
}else{
    echo "No Data!";
}

}