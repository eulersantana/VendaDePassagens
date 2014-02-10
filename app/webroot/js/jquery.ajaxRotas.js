// $(window).load(function() {
  

        
    // $('#rotas').live('change', function() {
    //     if($(this).val().length != 0) {
    //         $.getJSON("home/listar_cidades_json",{
    //             estadoId: $(this).val()
    //         }, function(cidades) {
    //             if(cidades != null)
    //                 popularListaDeCidades(cidades);
    //         });
    //     } else 
    //         popularListaDeCidades(null);
    // });
// });
  
function valores(){
    if($('#rotas').val().length != 0) {
         $.getJSON("lista_rotas_json",function(data){ 
            for(var i = 0; i < data.length; i++){ 
                if(data[i]['Rota']['id'] == $('#rotas').val()){
                    $("#valor").attr("value",data[i]['Rota']['valor']);
                    $("#parcelas").attr("value",data[i]['Rota']['valor']);
                }
            }
            
        });
        
    }
}

  
function pontos(){
    var newURL = window.location.host + window.location.pathname;
    if(newURL.length == 27){
        $.getJSON("users/lista_user",function(data){ 
            for(var i = 0; i < data.length; i++){ 
                if(data[i]['User']['nome'] == $('#nome').html()){
                    $("#pontos").html(data[i]['User']['pontos']);
                }
            }
        });
    }else{
        if(newURL.length == 40){
            $.getJSON("../users/lista_user",function(data){ 
            for(var i = 0; i < data.length; i++){ 
                if(data[i]['User']['nome'] == $('#nome').html()){
                    $("#pontos").html(data[i]['User']['pontos']);
                }
            }
        });
        }else{
            $.getJSON("../../users/lista_user",function(data){ 
            for(var i = 0; i < data.length; i++){ 
                if(data[i]['User']['nome'] == $('#nome').html()){
                    $("#pontos").html(data[i]['User']['pontos']);
                }
            }
        });
        }
    }
        
    
}

function subTotal(){
 
        var sub_total = $('#valor').val();
        $("#parcelas").attr("value",parseInt(sub_total) / (parseInt($('#part').val()) + 1) );
    
}

function tipoPar(){
    if($('#rotas').val().length != 0){ 
        if($("#tipo").val() == '1'){
            $("#part").attr('value', '0');
            $("#parcelas").attr("value",$("#valor").val());
        }
    }
}

function setValor(id, valor) {
   alert($(id).val());
}



