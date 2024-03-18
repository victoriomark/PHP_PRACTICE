<!-- for displaying the data-->
const DisplayTodo = () =>{
    const todolist = true
    $.ajax({
        url: "Displaydata.php",
        type: "post",
        data: {
            Todo: todolist
        },
        success: function (data,status){
            const data_container = document.getElementById("data_container")
            data_container.innerHTML = data
            // Add function for deleting
            AddEventDelete();
            Update()
        }
    })
}
// calling the function to display the data
DisplayTodo();

const btn_add = document.getElementById("btn_add");
let inputTodo = document.querySelector('input');
btn_add.addEventListener("click",() =>{
    const todo = document.getElementById("todo").value;
    if(todo === ""){
        alert("please Enter todo")
    }
    $.ajax({
        url: "Add_todo.php",
        type: "post",
        data:{
            Data: todo
        },
        success: function (data,status){
            // function for displaying the data
            DisplayTodo();
        }
    })
    inputTodo.value = ""
})

// for delete
const AddEventDelete = () =>{
    const btn_delete = document.querySelectorAll("#btn_delete");
     btn_delete.forEach((btn) =>{
         btn.addEventListener("click",() =>{
            const TodoId = btn.dataset.id;
            //function to hold the id
            TodoDelete(TodoId);
         })
     })
}

const TodoDelete = (TodoId) =>{
    $.ajax({
        url: "Delete.php",
        type: "post",
        data:{
            Id: TodoId
        },
        success: function (data ,status){
            DisplayTodo();
        }
    })
}



// function fo edit or update
const Update = () =>{
   const btn_update = document.querySelectorAll("#btn_update");
    btn_update.forEach( (update) =>{
        update.addEventListener("click",()=>{
           const Up_Id = update.dataset.edit
          // calling the function
            console.log(Up_Id)


        })
    })
}

//creating the TodoUpdate to handle ajax call
const TodoUpdate = (up_Id) => {
    // handle the ajax
    $.ajax({
        url: "Up.php",
        type: "post",
        data:{
            UpdateId: up_Id

        },
        success: function (data,status){
            // if success the update now let's display the update todos
            const data_container = document.getElementById("data_container");
            data_container.innerHTML = JSON.stringify(data.todo_data)
            console.log(typeof data)

        }
    })

}