const DisplayOrderList = () =>{  $.ajax({      url: '../Model/DisplayOrderList.php',      type: 'post',      data: {          DataDisplay: true      },      success: function (data,status){          const data_container = document.getElementById('data_container');          data_container.innerHTML = data;      }  })}DisplayOrderList();const UpdateViewStatus = () =>{    document.addEventListener('click',(event)=>{        if(event.target.id === 'btn_edit'){            // Ajax Request            $.ajax({                url: '../Model/UpdateStatus.php',                type: 'post',                data: {                    OrderID: event.target.value                },                success: function (data,status){                    const Modal_container = document.getElementById('Modal_container');                    Modal_container.innerHTML = data;                    $('#UpdateStatus_').modal('show');                }            })        }    })}UpdateViewStatus();const viewUpdatedRevenue = () =>{    const RevenueContainer = document.getElementById('RevenueContainer');    // ajax REQUEST    $.ajax({        url: '../Model/DisplayUpdatedRevenue.php',        type: 'post',        data:{Data: true},        success: function (data,status){            RevenueContainer.innerHTML = data;        }    })}const SaveUpdatedStatus = () =>{    let UpdatedStatus;    document.addEventListener('click',(event) =>{             const SelectStatus = document.getElementById('SelectStatus');             if(SelectStatus !== null){                 SelectStatus.addEventListener('change',(Event) =>{                     UpdatedStatus = Event.target.value;                 })             }        if (event.target.id === 'btn_save'){            if(UpdatedStatus){ // CHECK IF THE UpdatedStatus IS TRUE                $.ajax({                    url: '../Model/UpdateSaveStatus.php',                    type: 'post',                    data:{                        UpdatedStatus : UpdatedStatus,                        ID: event.target.value                    },                    success: function (data,status){                      if(status === 'success'){                          Swal.fire({                              title: "Successfully Updated!",                              icon: "success",                              confirmButtonColor: '#142D55 '                          });                          DisplayOrderList();  // TO DISPLAY AUTOMATIC after Updating                          $('#UpdateStatus_').modal('hide');                          viewUpdatedRevenue()                      }                    }                })            }        }    })}SaveUpdatedStatus()viewUpdatedRevenue()const DisplayResult = () =>{    const SearchOrder_btn = document.getElementById('SearchOrder_btn');    const SearchOrder = document.getElementById('SearchOrder');    SearchOrder_btn.addEventListener('click',() =>{        if(!SearchOrder.value){            Swal.fire({                title: "Please input your tracking code",                confirmButtonColor: '#142D55 '            });        }else {            $.ajax({                url: '../Model/DisplaySearch_Result.php',                type: 'post',                data:{                    SearchValue: SearchOrder.value,                },                success: function (data,status){                    const data_container = document.getElementById('data_container');                    data_container.innerHTML = data;                }            })        }    })}DisplayResult()const HandlingSideBar = () =>{    const MenuBar = document.getElementById('MenuBar')    const SideBar =document.getElementById('SideBar');    MenuBar.addEventListener('click',() =>{        SideBar.classList.toggle('SideBarHide');    })}HandlingSideBar()