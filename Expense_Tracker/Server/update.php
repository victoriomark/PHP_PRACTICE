<?php
include "../config.php";
global $conn;
if(isset($_POST['ID'])){
    $btn_id = $_POST['ID'];
    $Query = "SELECT * FROM expense_category WHERE ID = $btn_id ";

    $result = mysqli_query($conn,$Query);

    while ($row = mysqli_fetch_assoc($result)){
        ?>
<!-- MODAL FO UPDATE-->

        <form >
            <div  class="modal fade" id="update_modal"  data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="update_modal" aria-hidden="false">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="update_modal">Update Category</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <label for="ExpenseUpdate">Expense Name</label>
                            <input  name="expenseName" value="<?php echo $row['ExpenseName']?>" class="form-control" type="text" id="ExpenseUpdate">
                            <br>
                            <label for="updateAmount">Expense Amount</label>
                            <input name="expenseAmount" value="<?php echo $row['Expense_Amount']?>" class="form-control" type="number" id="updateAmount" >

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button  id="save_category" value="<?php echo $row['ID'] ?>"  type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
<?php
    }
}