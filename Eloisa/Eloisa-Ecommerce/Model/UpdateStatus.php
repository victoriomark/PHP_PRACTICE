<?phpinclude './Connect.php';global $conn;if($_SERVER['REQUEST_METHOD'] === 'POST'){ $Id = $_POST['OrderID']; $Query = "SELECT OrderStatus FROM orders WHERE OrderId = $Id"; $Result = mysqli_query($conn,$Query); if(mysqli_num_rows($Result) > 0){     while ($row = mysqli_fetch_assoc($Result)){         ?><!-- MODAL-->         <div class="modal fade" id="UpdateStatus_" tabindex="-1" >             <div class="modal-dialog modal-dialog-centered">                 <div class="modal-content">                     <div style="background-color: #142D55" class="modal-header">                         <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Update Status</h1>                     </div>                     <div class="modal-body">                         <select id="SelectStatus" class="form-select" aria-label="Default select example">                             <option selected><?php echo $row['OrderStatus'] ?></option>                             <option value="Processing">Processing</option>                             <option value="Arriving">Arriving</option>                             <option value="Canceled">Canceled</option>                             <option value="Received">Received</option>                         </select>                     </div>                     <div class="modal-footer">                         <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>                         <button id="btn_save" value="<?php echo $Id ?>" type="button" class="btn fw-bold text-light">Save</button>                     </div>                 </div>             </div>         </div><?php     } }}