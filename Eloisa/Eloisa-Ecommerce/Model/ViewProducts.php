<?phpinclude './Connect.php';global $conn;if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnID'])){    $btnID = $_POST['btnID'];    $Query =  "SELECT * FROM products WHERE ID = $btnID";    $result = mysqli_query($conn,$Query);    while ($row = mysqli_fetch_assoc($result)){        ?>        <div class="modal fade" tabindex="-1" id="modalViewProduct">            <div class="modal-dialog">                <div class="modal-content">                    <div class="modal-body">                        <div  style="background-color: #142D55" class="p-3 d-flex flex-column gap-2 rounded-4">                            <img class="img-thumbnail rounded-4" width="140" src="../Model/Product_Images/<?php echo $row['Product_image']?>" alt="burger">                            <div>                                <h5  class="fw-bold text-light"><?php echo $row['ProductName']?></h5>                                <p class="text-light">                                    <?php echo $row['Description']?>                                </p>                                <h6 class="text-light fw-bold">price: ₱ <?php echo $row['Price']?></h6>                            </div>                        </div>                    </div>                    <div class="modal-footer">                        <button type="button"  style="background-color: #142D55" class="btn text-light" data-bs-dismiss="modal">Close</button>                    </div>                </div>            </div>        </div><?php    }}