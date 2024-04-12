


const AddNewStudent = () =>{
    const bnt_add = document.getElementById("add_student");
    const first_name = document.getElementById("FistName")
    const student_id = document.getElementById("Student_ID")
    const course = document.querySelectorAll("#course");
    const last_name = document.getElementById("LastName");
    let CourseValue = "";

    //even for select for course
    course.forEach((item)=>{
        item.addEventListener("change", (event) =>{
          CourseValue = event.target.value
        })
    })

    // event for btn add
    bnt_add.addEventListener("click", () =>{
          // check if the inputs is not empty
        console.log(last_name.value)
        if (first_name.value !== "" && last_name.value !== "" && student_id.value !== "" && CourseValue !== ""){
            // Ajax Request
            $.ajax({
                url: "AddStudent.php",
                type: "post",
                data:{
                    first_name: first_name.value,
                    last_name: last_name.value,
                    CourseValue: CourseValue,
                    student_id: student_id.value
                },
                success: function (data,status){
                    Swal.fire({
                        title: "New Student Successfully Added!",
                        color: "#339CA4",
                        icon: "success",
                        confirmButtonColor: "#339CA4"
                    });
                    setTimeout(() =>{
                        location.reload();
                    },2000)
                }
            })

        }else {
            Swal.fire({
                title: "Please Enter Student Info",
                color: "red",
                icon: "warning",
                confirmButtonColor: "#339CA4"
            });
        }

        //clear the inputs after adding
        first_name.value = ""
        last_name.value = ""
        student_id.value = ""
        CourseValue = ""
        //Display the date every click the add student
        //Display the date every click the add student
        Display()
    })

}

AddNewStudent();



//for Displaying the Data

const Display = () =>{
    const Tb_body = document.getElementById("Tb_body");
    const Data = true
    $.ajax({
        url: "Display.php",
        type: "post",
        data: {
            Data: Data
        },
        success: function (data,status){
            Tb_body.innerHTML = data;
        }
    })

}
Display()



const DeleteFunction = () => {
    let DeleteValue;
    document.addEventListener("click", (event) =>{
        if(event.target.id === "btn_delete"){
           DeleteValue = event.target.value;


        }
    })

};

DeleteFunction()