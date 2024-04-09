document.addEventListener("click",(event) =>{    switch (event.target.id){        case "students":            window.location = "StudentList.php"            break        case "AttendanceRecord":            window.location = "DisplayRecordData.php"            break    }})// for displaying dataconst DisplayStudent = () =>{// ajax Request    $.ajax({        url: "DisplayStudent.php",        type: "post",        data: {            Display: true        },        success: function (data,status){            console.log(status)            const T_body = document.getElementById("T_body");            T_body.innerHTML = data;        }    })} DisplayStudent()const Update = () =>{    document.addEventListener("click", (event) =>{        if(event.target.id === "update"){            const Id = event.target.value            $.ajax({                url: "Update.php",                type: "post",                data:{                    Id: Id                },                success: function (data,status){                    const UpdateContainer = document.getElementById("UpdateContainer");                    UpdateContainer.innerHTML = data;                    $('#UpdateModal').modal('show');                }            })        }    })}Update()const UpdateSave = () =>{    let yearSave;    let courseSave;    let GenderValueSave;    document.addEventListener("click",        (event) => {            const genderSave = document.getElementById("genderSave");            const YearSelectSave = document.getElementById("YearSave");            const CourseSelectSave = document.getElementById("CourseSave");            if(genderSave !== null && YearSelectSave !== null && CourseSelectSave !== null){                genderSave.addEventListener("change", (event) => {                    GenderValueSave = event.target.value;                });                YearSelectSave.addEventListener("change", (event) => {                    yearSave = event.target.value;                });                CourseSelectSave.addEventListener("change", (event) => {                    courseSave = event.target.value;                });            }            if (event.target.id === "SaveUpdate") {                const Id = event.target.value                const FirstNameSave = document.getElementById("FirstNameSave")                const LastNameSave = document.getElementById("LastNameSave")                const BirthdaySave = document.getElementById("BirthdaySave")                const AddressSave = document.getElementById("AddressSave")                $.ajax({                    url: "EndPoints/UpdateSave.php",                    type: "post",                    data:{                        yearSave: yearSave,                        courseSave: courseSave,                        GenderValueSave: GenderValueSave,                        FirstNameSave: FirstNameSave.value,                        LastNameSave: LastNameSave.value,                        BirthdaySave: BirthdaySave.value,                        AddressSave: AddressSave.value,                        ID: Id,                    },                    success: function (data,status){                        $('#UpdateModal').modal('hide');                        DisplayStudent();                    }                })            }        })}UpdateSave()const ViewStudent = () =>{    let IdView;    document.addEventListener("click", (event) =>{        if (event.target.id === "view"){          IdView = event.target.value            // ajax Request For view student             $.ajax({                 url: "StudentView.php",                 type: "post",                 data:{                     IdView: IdView                 },                 success: function (data,status){                     const ViewContainer = document.getElementById("ViewContainer");                     ViewContainer.innerHTML = data                   $("#StudentView").modal('show')                 }             })        }    })}ViewStudent()