<?phpinclude "Connect.php";global $conn;// Displaying The Students List$Query = "SELECT * FROM collageenroll LIMIT 10";$result = mysqli_query($conn,$Query);$TR = "";//check if the StudentDatabase is not empty or the table is greater than 0if(mysqli_num_rows($result) > 0){//    if true then Display the data    while ($row = mysqli_fetch_assoc($result)){        $Id_Student = $row['ID'];        $FirstName = $row['FisrtName'];        $LastName = $row['LastName'];        $Address = $row['Address'];        $Birthday =$row['Birthday'];        $Course = $row['Course'];        $Year = $row['Year'];        $Gender = $row['gender'];        $TR .= "<tr>";        $TR .= "<td>$Id_Student</td>";        $TR .= "<td>$FirstName</td>";        $TR .= "<td>$LastName</td>";        $TR .= "<td>$Address</td>";        $TR .= "<td>$Birthday</td>";        $TR .= "<td>$Course</td>";        $TR .= "<td>$Year</td>";        $TR .= "<td>$Gender</td>";        $TR .= "<td class='d-flex gap-2'>               <button id='view' value='$Id_Student' class='btn btn-success'>View</button>               <button  id='update' value='$Id_Student' class='btn btn-warning'>Update</button>               </td>";        $TR .= "</tr>";    }    echo $TR;}