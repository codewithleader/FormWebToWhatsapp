/* de momento este codigo no va, este codigo era para el efecto de transición del label.

var inputs = document.getElementsByClassName('formulario__input');
for (var i = 0; i < inputs.length; i++) {
    inputs[i].addEventListener('keyup', function(){
        if(this.value.length>=1) {
            this.nextElementSibling.classList.add('fijar');
        } else {
          this.nextElementSibling.classList.remove('fijar');
        }
    });
}*/

var $nombre = document.getElementsByid('nombre');
var $fecha = document.getElementById('fecha')

//que funcion agrego aquí? ...para que el boton de submit tenga el enlace con los datos de formulario
("https://api.whatsapp.com/send?phone=573105010573&text=*_Barberia%20Lider_*%20%0AReservas%0A%0A*%C2%BFCual%20es%20tu%20nombre?*%0A" + $nombre + "Indica la fecha de tu reserva" + $fecha)

// ver el estado:
// {JSON.stringify(this.state)}
