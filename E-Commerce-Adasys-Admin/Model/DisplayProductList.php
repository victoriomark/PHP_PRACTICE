<?phpinclude './Connect.php';global $conn;if($_SERVER['REQUEST_METHOD'] === 'POST'){    $Query = "SELECT * FROM products LIMIT 10";    $result = mysqli_query($conn,$Query);    if(mysqli_num_rows($result) > 0){        while ($row = mysqli_fetch_assoc($result)){            ?><!-- HTML CODE-->            <tr>                <th scope="row"> <?php echo $row['ID'] ?> </th>                <td>                    <img id="Product_image" src="../Model/Product_Images/<?php echo $row['Product_image'] ?>" alt="Product">                </td>                <td> <?php echo $row['ProductName'] ?></td>                <td> <?php echo $row['Category'] ?></td>                <td> <?php echo $row['Price'] ?></td>                <td>                    <button id="btn_view_updateProduct_LIST" style="background-color: #142D55" class="btn text-light">                        <i class="fa-solid fa-pen-to-square text-light"></i>                    </button>                    <button style="background-color: #dc3545" class="btn text-light">                        <i class="fa-solid fa-trash-can"></i>                    </button>                    <button style="background-color: #142D55" class="btn text-light">                        <i class="fa-solid fa-eye"></i>                    </button>                </td>            </tr><?php        }    }}