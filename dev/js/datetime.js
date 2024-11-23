function Reloj(){
	//--> Variables para ir agregando su respectivos valores
	var date = new Date();
	var hour = date.getHours();
	var minutos = date.getMinutes();
	var segundos = date.getSeconds();
	var diaSemana = date.getDay();
	var day = date.getDate();
	var mes = date.getMonth();
	var year = date.getFullYear();

	// Accedemos a los elementos del DOM para agregar mas adelante sus correspondientes valores
	var time = document.getElementById('time');
	var date = document.getElementById('date');
	
	var dayWeek = '';
	var month = '';

	// Obtenemos el dia se la semana y lo mostramos
	var semana = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
	dayWeek = semana[diaSemana];
	
	// Obtenemos el Mes
	var meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
	month = meses[mes];

	// Para mostrar un cero antes de las horas
	if (hour < 10){
		hour = '0' + hour;
	}
	
	// Minutos y Segundos
	if (minutos < 10){ 
		minutos = "0" + minutos; 
	}
	
	if (segundos < 10){ 
		segundos = "0" + segundos; 
	}

	time.textContent = hour + ':' + minutos + ':' + segundos;
	date.textContent = dayWeek + ' ' + day + ' de ' + month + ' del ' + year;

}
var intervalo = setInterval(Reloj, 1000);