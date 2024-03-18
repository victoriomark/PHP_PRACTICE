// Now for Displaying data using ajax



const AddingExpense = () =>{
    const ExpenseName = document.getElementById("ExpenseName").value;
    const ExpenseAmount = document.getElementById("ExpenseAmount").value;
   // check if the inputs is not empty
    if(ExpenseName !== "" && ExpenseAmount !== "" ){
        $.ajax({
            url: "./Server/category.php",
            type: "POST",
            data:{
                add_category: true,
                ExpenseName: ExpenseName,
                ExpenseAmount: ExpenseAmount
            },
            success: function (data,status){
                Swal.fire({
                    title: "Successfully Added",
                    icon: "success"
                });
            }
        })
    }else {
        Swal.fire({
            title: "Please Enter Your Expenses",
            icon: "warning",
            color: "red"

        });
    }

 Display() // if run this function automatic display the data after click the add BtN
}

const btN_Add = document.getElementById("add_category")
btN_Add.addEventListener("click",() =>{
    const ExpenseName = document.getElementById("ExpenseName")
    const ExpenseAmount = document.getElementById("ExpenseAmount")
    AddingExpense()
    Display(); //calling the Display function every click of the BTN_add
    ExpenseName.value = ""
    ExpenseAmount.value = ""
})


const Display = () =>{
    const expense = true
    $.ajax({
        url: "./Display.php",
        type: "post",
        data: {
            Expense: expense
        },
        success: function (data,status){
            // if success grab the container or tha table data
            const data_table = document.getElementById("data_table");
            data_table.innerHTML = data
            update() // it is important to add the update function here don't forget
            SaveUpdate() // it is important to add the SaveUpdate function here don't forget
            DeleteFunction();// it is important to add the Delete function here don't forget
        }
    })
}
Display()



const update = () =>{
    const btn_update = document.querySelectorAll("#btn_update");
    btn_update.forEach( (event) =>{
        event.addEventListener("click",() =>{
            const Id = event.value;


            // performing ajax request
            $.ajax({
                url: "../Server/update.php",
                type: "post",
                data:{
                    ID: Id
                },
                success: function (data,status){
                    console.log(status)
                    const up_container = document.querySelector("#up_container");
                    up_container.innerHTML = data;
                    // show the for when i click the edit
                    $('#update_modal').modal('show');

                }
            })
        })
    })

}



const SaveUpdate = () =>{
    document.addEventListener("click",(event) =>{
         // check if the clicked element merong id na save_category
        const expenseName = document.getElementById("ExpenseUpdate")
        const updateAmount = document.getElementById("updateAmount")
        if (event.target.id === "save_category"){
          const update_id = event.target.value

            // creating ajax request for update
          $.ajax({
              url: "SaveUpdate.php",
              type: "post",
              data:{
                  // grab the data from input and btn with id
                  saveId: update_id,
                  expenseName: expenseName.value,
                  updateAmount: updateAmount.value
              },
              success: function (data,status){
                  console.log(status)
                  Swal.fire({
                      title: "Successfully Updated",
                      icon: "success",
                      color: "green"

                  });

                  Display()
              }
          })

        }

    })
    // hide the modal when run after lick the save button
    $('#update_modal').modal('hide');
}

//
// // Performing Delete functionality
const DeleteFunction = () => {
    const btn_delete = document.querySelectorAll("#btn_delete");
     btn_delete.forEach((delete_btn) =>{

         delete_btn.addEventListener(("click"),() =>{
           const Delete_Id =  delete_btn.value
             // ajax request for deleting items
              $.ajax({
                  url: "Delete.php",
                  type: "post",
                  data: {
                      Id_Delete: Delete_Id
                  },
                  success: function (data,status){
                      console.log(status)
                      Swal.fire({
                   title: "Successfully Deleted",
                   icon: "success",
                   color: "green"
                });

                  }
              })

             Display()
         })

     })

};



