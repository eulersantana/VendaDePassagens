$(document).ready(function() {
   function passagem(){ 
        if($('#rotas').val().length != 0) {
            var json = $.getJSON("../passagens/lista_rotas_json");
            alerr($('#rotas').val());
            var obj = jQuery.parseJSON(json.responseText);


        }
    }
    passagem();  

});


