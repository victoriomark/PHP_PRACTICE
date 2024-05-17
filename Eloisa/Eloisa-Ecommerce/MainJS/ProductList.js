const DisplayProduct = () =>{    $.ajax({        url: '../Model/DisplayProductList.php',        type: 'post',        data: {            Display: true        },        success: function (data,status){            const Product_Container = document.getElementById('Product_Container');            Product_Container.innerHTML = data;        }    })}DisplayProduct();const AddingNewProduct = () =>{    let SelectedCategory;    let ImageProduct;    document.addEventListener('click',(event) =>{        const selectCategory = document.getElementById('selectCategory')        const ProductImage = document.getElementById('ProductImage')        if(selectCategory !== null || ProductImage !== null){            selectCategory.addEventListener('change',(category) =>{                SelectedCategory = category.target.value            })            ProductImage.addEventListener('change',(image) =>{                ImageProduct = image.target.files[0];            })        }        if(event.target.id === 'Add_btn'){            const ProductName = document.getElementById('ProductName');            const Description = document.getElementById('Description');            const ProductPrice = document.getElementById('ProductPrice');           const formData = new FormData();           formData.append('ProductName',ProductName.value);           formData.append('Description',Description.value);           formData.append('ProductPrice',ProductPrice.value);           formData.append('SelectedCategory',SelectedCategory);           formData.append('ImageProduct',ImageProduct);     if(!ProductName.value || !Description.value || !ProductPrice.value || !ImageProduct || !SelectedCategory){         Swal.fire({             title: "Please Provide Product Info",             icon: "warning"         });     }else {         // Ajax Request         $.ajax({             url: '../Model/AddNewProduct.php',             type: 'post',             data: formData,             processData: false,             contentType: false,             success: function (data,status){                 if(status === 'success'){                     Swal.fire({                         title: "Successfully Added New Product",                         icon: "success"                     });                     DisplayProduct();                     $('#AddProducts').modal('hide');                     setTimeout(() =>{                         location.reload()                     },2000)                 }                 //clear the inputs                 ProductPrice.value = ''                 ImageProduct = ''                 Description.vaue = ''                 SelectedCategory = ''             }         })     }        }    })}AddingNewProduct()const ViewUpdateProductList = () =>{    document.addEventListener('click',(btnUp) =>{        if(btnUp.target.id === 'btn_view_updateProduct_LIST'){            // ajax request            $.ajax({                url: '../Model/ViewUpdateProductList.php',                type: 'post',                data:{id: btnUp.target.value},                success: function (data,status){                  const Container_modals = document.getElementById('Container_modals')                    Container_modals.innerHTML = data;                  $('#ViewUpdateProducts').modal('show')                }            })        }    })}ViewUpdateProductList();const SaveProductUpdated = () =>{    let Updated_image;    document.addEventListener('click',(saveBtn) =>{        const UpdatedProductImage = document.getElementById('UpdatedProductImage');        if(UpdatedProductImage !== null){            UpdatedProductImage.addEventListener('change',(image) =>{                Updated_image = image.target.files[0];            })        }        if (saveBtn.target.id === 'SaveProductUpdated'){            const Description = document.getElementById('Description_');            const UpdatedProductName = document.getElementById('UpdatedProductName');            const UpdatedProductPrice = document.getElementById('UpdatedProductPrice');            const formData = new FormData();            formData.append('UpdatedProductName',UpdatedProductName.value);            formData.append('UpdatedProductPrice',UpdatedProductPrice.value);            formData.append('Description',Description.value);            formData.append('saveBtn',saveBtn.target.value);            formData.append('Updated_image',Updated_image);            // if the inputs not empty            if(!Updated_image || !Description.value|| !UpdatedProductName.value || !UpdatedProductPrice.value){                Swal.fire({                    title: "Please Provide Product Info",                    icon: "warning"                });            }else {                //Ajax Request                $.ajax({                    url: '../Model/SaveProductUpdated_.php',                    type: 'post',                    data: formData,                    contentType: false,                    processData: false,                    success: function (data,status){                        if (status === 'success'){                            Swal.fire({                                title: "Successfully Updated",                                icon: "success"                            });                        }                        DisplayProduct();                        $('#ViewUpdateProducts').modal('hide');                    }                })            }        }    })}SaveProductUpdated();const DeleteProduct = () =>{    document.addEventListener('click',(event_delete) =>{        const ConfirmDelete = document.getElementById('ConfirmDelete');        if(event_delete.target.id === 'Delete_product'){            $('#ModalConfirmDelete').modal('show')            ConfirmDelete.addEventListener('click',() =>{                // if click this btn confirm delete make a request Deleting product                  $.ajax({                      url: '../Model/DeleteProducts.php',                      type: 'post',                      data:{ID_delete: event_delete.target.value},                      success: function (data,status){                          $('#ModalConfirmDelete').modal('hide')                          DisplayProduct();                      }                  })            })        }    })}DeleteProduct();const ViewProduct = () =>{    document.addEventListener('click',(event)=>{        if(event.target.id === 'DisplayProduct_btn'){            // AJAX REQUEST FOR VIEWING PRODUCT            $.ajax({                url: '../Model/ViewProducts.php',                type: 'post',                data: {btnID: event.target.value},                success: function (data,status){                    const Container_modals = document.getElementById('Container_modals');                    Container_modals.innerHTML = data;                    $('#modalViewProduct').modal('show')                }            })        }    })}ViewProduct();