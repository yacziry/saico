
$("#formCheckPassword").validate({
           rules: {
               dePassword: { 
                 required: true,
                    minlength: 8,
                    maxlength: 10,
                    alphanumeric: true,

               } , 

                   pass2: { 
                    equalTo: "#pass1",
                     minlength: 8,
                     maxlength: 10
               }
           },
     messages:{
         dePassword: { 
                 required:"Campo obligatorio",
                 minlength: "Password minimo 8 caracteres",
                 maxlength: "Password maximo 10 caracteres",
                 alphanumeric: "Debe contener numeros y letras",
               },
       pass2: { 
         equalTo: "Las Passwords no coinciden",
         minlength: "Password minimo 8 caracteres",
         maxlength: "Password maximo 10 caracteres"
       }
     }

});
