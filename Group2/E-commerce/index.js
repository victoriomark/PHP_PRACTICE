const Oder_Form = () =>{    const Add_cart = document.querySelectorAll('#Add_cart');    Add_cart.forEach( (event) =>{       event.addEventListener('click',           (e) => {               console.log(e.target.value)               $.ajax({                   url: './Model/Order_form.php',                   type: 'post',                   data:{                       Id: e.target.value                   },                   success: function (data,status){                       const container_form = document.getElementById('container_form');                       container_form.innerHTML = data;                       $('#CartForm_modal').modal('show');                   }               })           })    })}Oder_Form()const AddingCart = () => {    let Payment;    document.addEventListener('click', (event) => {        function shuffleArray(array) {            for (let i = array.length - 1; i > 0; i--) {                const j = Math.floor(Math.random() * (i + 1));                [array[i], array[j]] = [array[j], array[i]];            }            return array;        }        const alphabet = Array.from({ length: 26 }, (_, i) => String.fromCharCode('A'.charCodeAt(0) + i));        const shuffledAlphabet = shuffleArray(alphabet);        let TrackingCode = shuffledAlphabet.join('');        // event for Payment Method        const paymentMethod = document.getElementById('paymentMethod');        if(paymentMethod !== null){            paymentMethod.addEventListener('change',(event) =>{                Payment = event.target.value;            })        }        if (event.target.id === 'AddCarts') {            const Full_Name = document.getElementById('Full_Name');            const PhoneNumber = document.getElementById('PhoneNumber');            const Email = document.getElementById('Email');            const Address = document.getElementById('Address');            const Quantity = document.getElementById('Quantity');            const Price = document.getElementById('Price');            const Order = document.getElementById('Order');            // validate            if(!Full_Name.value || !PhoneNumber.value || !Email.value || !Address.value || !Payment || !Quantity.value){               alert('Please fill inputs')                return            }            $.ajax({                url: "./Model/AddOrders.php",                type: 'post',                data:{                    Full_Name: Full_Name.value,                    PhoneNumber: PhoneNumber.value,                    Email: Email.value,                    Address: Address.value,                    Payment: Payment,                    TrackingCode: TrackingCode,                    Quantity: Quantity.value,                    Price: Price.value,                    Order: Order.value                },                success: function (data,status){                    if(status === 'success'){                        const view_tracking_code = document.getElementById('view_tracking_code');                        view_tracking_code.innerText = TrackingCode;                        Swal.fire({                            title: "Successfully Submitted Your Order! ",                            icon: "success",                            confirmButtonColor: '#142D55'                        });                        $('#CartForm_modal').modal('hide');                        $('#modal_for_view_code').modal('show');                    }                }            })        }    });}AddingCart();const TrackingOrder = () =>{    document.getElementById('btn_track').addEventListener('click',() =>{        const tracking_order = document.getElementById('tracking_order');        // check if the input is not containing the Tracking code        if(!tracking_order.value){            Swal.fire({                title: "Please Enter Your Tracking Code! ",                icon: "warning",                confirmButtonColor: '#142D55'            });            // or else Get ajax REQUEST        }else {            $.ajax({                url: './Model/TrackOrders.php',                type: 'post',                data:{                    tracking_order: tracking_order.value                },                success: function (data,status){                    const container_form = document.getElementById('container_form');                    container_form.innerHTML = data;                    $('#ViewOrderStatus_modal').modal('show')                    $('#errorHandling').modal('show');                }            })        }    })}TrackingOrder();const CancelOrders = () =>{ document.addEventListener('click',(event) =>{     if(event.target.id === 'Cancel_btn'){       const CancelBTn = event.target;       CancelBTn.textContent = 'Canceled';       $.ajax({           url: './Model/CancelingOrders.php',           type: 'post',           data:{               OrderId: event.target.value           },           success: function (data,status){               CancelBTn.disabled = true;           }       })     } })}CancelOrders()