

//var base_url = 'http://localhost/panelgkii/index.php/welcome/';
var base_url = 'http://panelgkii.jn-code.xyz/index.php/welcome/';

var paramEmail = "";
var paramPassword = "";

$(document).ready(function(){



    $("#btnAuth").click(function(){

            console.log("clekkkk");
            paramEmail = $("#inputEmail").val();
            paramPassword = $("#inputPassword").val();
    
            if (paramPassword=="" && paramEmail==""){
                webToast("error", "Isian data authentikasi belum diisi");             
            }

            else{

                $.ajax({
                    type: 'POST',
                    url: base_url+"auth",
                    data: { myUser: paramEmail , myPass: paramPassword},
                    cache:false,
                    success: function (data) {

                                console.log(data);
                                obj = JSON.parse(data);                                

                                if(obj.status=="ok"){

                                        webToast("success", obj.message)
                                        location.reload(true);

                                }
                                else{

                                        webToast("error", obj.message)

                                }

                                //location.reload();


                    } 
                
                });
            }

    });


    



}); // end close of document ready function


function webToast(typeMessage, message){

    Swal.fire({
        title: message,
        type: typeMessage,
        confirmButtonText: 'OK'

      },
      function(isConfirmed){

        if(isConfirmed){
           
            
                location.reload(); // then reload the page.(3)
          

        }
        
      });
 
 }

 


 