<?php
$conn = mysqli_connect('localhost','root','','admin');

$Query = "select * from ajax";

if(isset($_POST['DisplaySend'])){
    $table = '
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">UserName</th>
                <th scope="col">Password</th>
            </tr>
        </thead>';

    $result = mysqli_query($conn,$Query);
    while ($row = mysqli_fetch_assoc($result)){
        $username = $row['User_Name'];
        $pass = $row['passwords'];
        $id =$row['ID'];

        $table .= '
            <tr>
                <td>'.$id.'</td>
                <td>'.$username.'</td>
                <td>'.$pass.'</td>
            </tr>';
    }
    $table .= '</table>';
    echo $table;
}
?>
