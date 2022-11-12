
$(document).ready(function () {
    $('#example').DataTable({       
       
        select:true,



        select:{
            items:'cell'  
        }
      
    });
});

function seleccionar(tr, value){
    $(function(){
        if($("#chk"+value).attr("checked") == "checked"){
            
        }
    })
}