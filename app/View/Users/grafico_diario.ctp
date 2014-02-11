<div class="row">
	<h2>Gráfico de clientes cadastrados:</h2>
	<canvas id="canvas" height="450" width="600"></canvas>


	<script>
		
		$.getJSON('lista_user',function(data){

						
			var date = new Array(0,0,0,0,0,0,0,0,0,0,0,0);
			
			for (var j = 0; j < 12; j++){
				for (var i = 0; i < data.length; i++) {
						dateC = data[i]['users']['created'];
						mes = dateC[5]+dateC[6]
						
						if(((j + 1) == parseInt(mes)) && (data[i]['users']['tipo'] != "Funcionario")){
							date[j] = date[j] + 1; 
						}
								
							
					}
			}
			var barChartData = {		
		
				labels : ["jan", "fev", "mar", "abr", "mai", "jun", "jul", "ago", "sete", "outu", "nov", "dez"],
				datasets : [
					{
						fillColor : "rgba(151,187,205,0.5)",
						strokeColor : "rgba(151,187,205,1)",
						data : date
					}
				]
				
			}

			

		var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Bar(barChartData);
	});
	
	</script>
</div>