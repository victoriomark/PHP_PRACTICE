let course; // Declare course outside of the functionconst SelectValidation = () => {    let year;    let course;    let GenderValue;    let SelectedProfile;    const submit = document.getElementById("submit")    const FirstName = document.getElementById("FirstName")    const LastName = document.getElementById("LastName")    const Birthday = document.getElementById("Birthday")    const Address = document.getElementById("Address")    const gender = document.getElementById("gender");    gender.addEventListener("change", (event) =>{        GenderValue = event.target.value;    });    const YearSelect = document.getElementById("Year");    YearSelect.addEventListener("change", (event) =>{        year = event.target.value;    });    const CourseSelect = document.getElementById("Course");    CourseSelect.addEventListener("change", (event) =>{        course = event.target.value;    });    const Profile = document.getElementById("Profile");    Profile.addEventListener("change", (event) =>{      SelectedProfile =  event.target.files[0]    })    submit.addEventListener("click", () =>{        // check if the inputs iss not empty        if(GenderValue !== "" && course !== "" && year !== "" && FirstName.value !== "" && LastName.value !== "" && Birthday.value !== "" && Address.value !== ""){            const formData = new FormData();            formData.append('Enroll', true);            formData.append('FirstName', FirstName.value);            formData.append('Address', Address.value);            formData.append('Birthday', Birthday.value);            formData.append('LastName', LastName.value);            formData.append('Course', course);            formData.append('Year', year);            formData.append('GenderValue', GenderValue);            formData.append('SelectedProfile', SelectedProfile);            $.ajax({                url: "./EndPoints/EnrollStudent.php",                type: "post",                data: formData,                processData: false,                contentType: false,                success: function (data,status){                    if(status === "success"){                        Swal.fire({                            position: "top-center",                            icon: "success",                            title: "SuccessFully Added!",                            showConfirmButton: false,                            timer: 1500                        });                    }else{                        alert("Something Wrong!");                    }                }            })        }else {            Swal.fire({                icon: "error",                title: "Oops...",                text: "Please Input Student Information!",            });        }        // clear the inputs        year = ""        course = ""        Birthday.value = ""        Address.value = ""        LastName.value = ""        FirstName.value = ""    })};SelectValidation();