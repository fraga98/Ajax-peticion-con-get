
console.log('Estatus ok');


$(document).ready(function(){

     $('.pregunta').click(function(){

     	var id = $('.pregunta').attr("data-id");

     	var pregunta = confirm("¿Esta seguro que desea eliminar?");
        
        if( pregunta == true )
        {
        	console.log("true");
          // return true;

             $.ajax({   

                    url: 'elimininarUsuario.php', //action  
                    type: 'get',
                    datatype: 'json',
                    data:{ 
                        id: id,
                    }

                 }).done( 

                    function(respuesta){
                        console.log('Ok');
                        $("#fila"+id).remove();
                    }
                 )

                .fail(function (jqXHR, textStatus, errorThrown) { 

                        alert("" + jqXHR + textStatus +errorThrown);
                       
                 });

        }else
        {
            return false;
        }
        
     });
    

});

  
 