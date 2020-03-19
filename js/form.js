document.querySelector('#submit').addEventListener('click',function(){
    var cliente = document.querySelector('#cliente').Value;
    var fecha = document.querySelector('#fecha').Value;
    var hora = document.querySelector('#hora').Value;
    var barbero = document.querySelector('#barbero').Value;
    var servicio = document.querySelector('#servicio').Value;

    var url = "https://api.whatsapp.com/send?phone=573105010573&text=*_Barberia Lider_*%0A*Reservas*%0A%0A*¿Cual es tu nombre?*%0A"+encodeURIComponent(cliente)+"%0A*Indica la fecha de tu reserva*%0A"+encodeURIComponent(fecha)+"%0A*Indica la hora de tu reserva*%0A"+encodeURIComponent(hora)+"%0A*Barbero de preferencia*%0A"+encodeURIComponent(barbero)+"%0A*¿Cual es el servicio que se desea realizar?*%0A"+encodeURIComponent(servicio)
    
    window.open(url);

});
