const AddSenior = () =>{    let Profile_name;    let Gender;    //GETTING THE ELEMENT AND ID    const firstName = document.getElementById("firs_name_Senior");    const lastName = document.getElementById("last_name");    const middleName = document.getElementById("middle_name");    const Address = document.getElementById("Address");    const Age = document.getElementById("Age");    const Birthday = document.getElementById("Birthday");    const activeNumber = document.getElementById("activeNumber");    const Add_senior = document.getElementById("Add_senior");    const profile = document.getElementById("ProfileSenior");    profile.addEventListener("change", (event) =>{        Profile_name = event.target.files[0];    })    const gender = document.getElementById("gender");    gender.addEventListener("change", (event) =>{        Gender = event.target.value;    })    Add_senior.addEventListener("click", () =>{        //Validate the inputs        if(firstName.value !== "" && lastName.value !== "" && middleName.value !== "" && Address.value !== "" && Age.value !== "" && Birthday.value !== "" && activeNumber.value !== "" && Profile_name !== "" && Gender !== ''){            const formData = new FormData()            formData.append('Profile_name',Profile_name);            formData.append('Gender',Gender);            formData.append('firstName',firstName.value);            formData.append('lastName',lastName.value);            formData.append('middleName',middleName.value);            formData.append('Address',Address.value);            formData.append('Age',Age.value);            formData.append('Birthday',Birthday.value);            formData.append('activeNumber',activeNumber.value);            $.ajax({                url: "../Model/addSenior.php",                type: "post",                data: formData,                processData: false,                contentType: false,                success: function (data,status){                    if(status === "success"){                        Swal.fire({                            icon: "success",                            title: "Successfully Added New Senior Citizen",                            showConfirmButton: false,                            timer: 1500                        });                    }                }            })        }else{            Swal.fire({                icon: "error",                title: "Input your information",                showConfirmButton: false,                timer: 1500            });        }        //clearing the inputs        Gender = ""        firstName.value = ""        lastName.value = ""        Age.value = ""        Birthday.value = ""        Profile_name = ""        Address.value  = ""        activeNumber.value = ""    })}const AddNewBlotter = () =>{      const dataBlotter = document.getElementById('date_blotter');      const what_happened = document.getElementById('what_happened');      const who_ = document.getElementById('who_');      const where = document.getElementById('where');      const when = document.getElementById('when');      const Why = document.getElementById('Why');      const RecordedBy = document.getElementById("RecordedBy");      const ReportedBy = document.getElementById("ReportedBy");     const floatingTextarea2 = document.getElementById("floatingTextarea2")    document.getElementById("Add_blotter").addEventListener("click",() =>{        // validation        if(dataBlotter.value !== "" && what_happened.value !== "" && who_.value !== "" && where.value !== "" && when.value !== '' && Why.value !== '' && RecordedBy.value !== '' && ReportedBy.value !== ""){            $.ajax({                url: '../Model/AddBlotter.php',                type: "post",                data:{                    dataBlotter: dataBlotter.value,                    what_happened: what_happened.value,                    who_: who_.value,                    where: where.value,                    Why: Why.value,                    when: when.value,                    RecordedBy: RecordedBy.value,                    ReportedBy: ReportedBy.value,                    floatingTextarea2: floatingTextarea2.value                },                success: function (data,status){                   if(status === 'success'){                       Swal.fire({                           icon: "success",                           title: "Successfully Added New Blotter!",                           showConfirmButton: false,                           timer: 1500                       });                   }                }            })        }else{            Swal.fire({                icon: "error",                title: "Please Input Information",                showConfirmButton: false,                timer: 1500            });        }        //clear the inputs        dataBlotter.value = ''        what_happened.value = ''        who_.value = ''        where.value = ''        Why.value = ''        when.value = ''        floatingTextarea2.value = ''        ReportedBy.value = ''        RecordedBy.value = ''    })}const AddNewHouseHold = () =>{    let Profile;    let Gender;    const firstName = document.getElementById("firsName");    const lastName = document.getElementById("lastName");    const middleName = document.getElementById("middleName");    const Address = document.getElementById("Address");    const houseHoldAge = document.getElementById("houseHoldAge");    const BirthdayHouse = document.getElementById("BirthdayHouse");    const HouseContactNumber = document.getElementById("HouseContactNumber");    const Address_household = document.getElementById('Address_household');    const HouseNumber = document.getElementById('HouseNumber');    const gender_= document.getElementById('gender_');    gender_.addEventListener('change',(event) =>{       Gender = event.target.value    })    const Profile_household = document.getElementById('Profile_household');    Profile_household.addEventListener('change',(event) =>{        Profile = event.target.files[0];    })    document.getElementById('AddHouseHold').addEventListener('click',() =>{        if(firstName.value !== "" && lastName.value !== "" && middleName.value !== "" && Address.value !== "" && houseHoldAge.value !== '' && BirthdayHouse.value !== '' && HouseContactNumber.value !== '' && Gender.value !== "" && Profile !== ''){            const forData = new FormData();            forData.append('firstName',firstName.value);            forData.append('lastName',lastName.value);            forData.append('middleName',middleName.value);            forData.append('Address',Address.value);            forData.append('houseHoldAge',houseHoldAge.value);            forData.append('BirthdayHouse',BirthdayHouse.value);            forData.append('HouseContactNumber',HouseContactNumber.value);            forData.append('Address_household',Address_household.value);            forData.append('HouseNumber',HouseNumber.value);            forData.append('Profile',Profile);            forData.append('Gender',Gender);            $.ajax({                url: "../Model/AddHouseHold.php",                type: 'post',                data: forData,                processData: false,                contentType: false,                success: function (data,status){                    if(status === 'success'){                        Swal.fire({                            icon: "success",                            title: "Successfully Added New HouseHold",                            showConfirmButton: false,                            timer: 1500                        });                    }                }            })        }else{            Swal.fire({                icon: "error",                title: "Please Input Valid Information!",                showConfirmButton: false,                timer: 1500            });        }        // Clearing the Inputs        Gender = ''        Profile = ''        HouseNumber.value = ''        Address_household.value = ''        HouseContactNumber.value = ''        BirthdayHouse.value = ''        houseHoldAge.value = ''        Address.value = ''        middleName.value = ''        lastName.value = ''        firstName.value = ''    })}// calling the FunctionsAddSenior();AddNewBlotter()AddSenior();