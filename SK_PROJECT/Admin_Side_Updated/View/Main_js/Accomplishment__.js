const create_accomplishment = () =>{    let img;    document.addEventListener('click',(event) =>{        const upload_img = document.getElementById('upload_Accomplishment');        upload_img.addEventListener('change',(e) =>{            img = e.target.files[0]        })        if(event.target.id === 'create_'){            const Message = document.getElementById('Message_Accomplishment')            const Title = document.getElementById('Title_Accomplishment')            if(!Message.value || !Title.value || !img){                alert("please fill all the inputs")            }else {                const formData = new  FormData()                formData.append('Title',Title.value)                formData.append('img',img)                formData.append('Message',Message.value)                //ajax re                $.ajax({                    url: '../Model/Add_Accomplishment.php',                    type: 'post',                    data: formData,                    processData: false,                    contentType: false,                    success: function (data,status){                        $('#Accomplishment').modal('hide');                        location.reload()                    }                })            }        }    })}create_accomplishment()const viewUpdate_Accomplishment = () =>{    document.addEventListener('click',(event) =>{        if(event.target.id === 'update_Accomplishment'){            //ajax            $.ajax({                url: '../Model/ViewUpdate_accomplishment.php',                type: 'post',                data:{                    Id: event.target.value                },                success: function (data,status){                    const container_modal = document.getElementById('container_modal')                    container_modal.innerHTML = data                    $('#View_Accomplishment_').modal('show');                }            })        }    })}viewUpdate_Accomplishment()const SaveUpdated_Accomplishment = () => {    document.addEventListener('click', (event) => {        if (event.target.id === 'Save__Accomplishment') {            const Message = document.getElementById('Message_save_Accomplishment');            const Title = document.getElementById('Title_save_Accomplishment');            const formData = new FormData();            formData.append('Title', Title.value);            formData.append('Message', Message.value);            formData.append('id', event.target.value);            formData.append('SaveImg', document.getElementById('upload_img_save_Accomplishment').files[0]);            if(!Message.value || !Title.value){                alert("please fill all the inputs")            }else {                // AJAX request                $.ajax({                    url: '../Model/Save_Accomplishment.php',                    type: 'POST',                    data: formData,                    processData: false,                    contentType: false,                    success: function (data, status) {                        console.log(data);                        alert(data)                        $('#View_Accomplishment_').modal('hide')                        location.reload()                    },                    error: function (xhr, status, error) {                        console.error('Error:', error);                        // Handle error message or any further actions                    }                });            }        }    });};SaveUpdated_Accomplishment();const Delete_Accomplishment = () =>{    document.addEventListener('click',(event) =>{        if(event.target.id  === 'DEL_Accomplishment'){            const Confirm = document.getElementById('Confirm');            $('#Confirm_del').modal('show');            console.log(event.target.value)            Confirm.addEventListener('click',() =>{                // AJAX request                $.ajax({                    url: '../Model/Delete_accomplishment.php',                    type: 'POST',                    data: {                        id: event.target.value                    },                    success: function (data, status) {                        $('#Confirm_del').modal('hide');                        location.reload()                    }                });            })        }    })}Delete_Accomplishment()const View_eve = () =>{    document.addEventListener('click',(event) =>{        if(event.target.id === 'view_Accomplishment_'){            // AJAX request            $.ajax({                url: '../Model/View_Accomplishment.php',                type: 'POST',                data: {                    id: event.target.value                },                success: function (data, status) {                    const modal_container = document.getElementById('container_modal')                    modal_container.innerHTML = data                    $('#View_Accomplishment_modal').modal('show');                }            });        }    })}View_eve()