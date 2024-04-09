
const Register = () =>{
    document.getElementById("btn_register").addEventListener("click", () =>{
      const Username = document.getElementById("UserName");
      const Password =document.getElementById("Password");

      if(Username.value !== "" && Password.value !==""){
          $.ajax({
              url: "Reg.php",
              type: "post",
              data:{
                  Reg: true,
                  Username: Username.value,
                  Password: Password.value
              },
              success: function (data,status){
                 if(status === "success"){
                     Swal.fire({
                         title: "Successfully Registered!",
                         color: "#339CA4",
                         icon: "success",
                         confirmButtonColor: "#339CA4"
                     });
                     //if success redirect to sign in
                     setTimeout(() =>{
                         location.href ="Sign_In.php";
                     },2000)

                 }

              }
          })
      }else{
          Swal.fire({
              title: "Please Enter your UserName and Password",
              color: "#339CA4",
              icon: "warning",
              confirmButtonColor: "#339CA4"
          });
      }
         // clear the input
         Password.value = ""
         Username.value = ""
    })

}

Register()