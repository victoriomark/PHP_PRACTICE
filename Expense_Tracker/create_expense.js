const ExpenseCreate = () =>{
    const ExpenseCategoryName = document.querySelector("#categoryName");
    const Spent = document.getElementById("Spent")
    const Description = document.getElementById("Description")
    const ExpenseDate = document.getElementById("ExpenseDate")
    const Add_expense = document.getElementById("Add_expense");



    const Deletes = () =>{
        const deleteID = document.querySelectorAll("#delete");

        deleteID.forEach((item) =>{
            item.addEventListener("click",() =>{
                const id = item.value
                $.ajax({
                    url: "DeleteExpent.php",
                    type: "post",
                    data:{
                        DelId: id
                    },
                    success: function (data,status){
                        Swal.fire({
                            title: `Successfully Deleted`,
                            icon: "success",
                            color: "green"
                        });
                        // reload the page every 2 send when you add expense
                        setTimeout(() =>{
                            location.reload()
                        },2000)
                    }
                })
                DisplayData()
            })

        })
    }


    const DisplayData = () =>{
        const display = true
        $.ajax({
            url: "createExpenseDisplayData.php",
            type: "post",
            data: {
                display: display
            },
            success: function (data,status){
                const data_container = document.getElementById("expenseData");
                data_container.innerHTML = data;
                Deletes()
            }

        })

    }

    ExpenseCategoryName.addEventListener("change",(event) =>{
        const SelectValue = ExpenseCategoryName.value
    })

    Add_expense.addEventListener("click",() =>{
        const budget = ExpenseCategoryName.options[ExpenseCategoryName.selectedIndex].dataset.budget;

            // Now Create the Ajax Request
            $.ajax({
                url: "CreateExpense.php",
                type:"post",
                data:{
                    createExpenses: true,
                    Spent: Spent.value,
                    Description:Description.value,
                    ExpenseDate:ExpenseDate.value,
                    SelectValue:ExpenseCategoryName.value,
                    Budget: budget
                },
                success: function (data,status){

                    Swal.fire({
                        title: "Successfully Added New Expense",
                        icon: "success",
                        color: "green"
                    });
                    // reload the page every 2 send when you add expense
                    setTimeout(() =>{
                        location.reload()
                    },2000)
                }
            })
              // Clear the inputs After Clicking the button
              Description.value = ""
              ExpenseDate.value = ""
              ExpenseCategoryName.value = ""
              Spent.value = ""
        DisplayData()
        })
    DisplayData()
}
ExpenseCreate()




