document.querySelector("#submit").addEventListener("click", e => {
  e.preventDefault();

  //INGRESE UN NUMERO DE WHATSAPP VALIDO AQUI:
  let telefono = "573136283643";

  let cliente = document.querySelector("#cliente").value;
  let direccion = document.querySelector("#direccion").value;
  let color = document.querySelector("input[name='colors']:checked").value;
  let piezas = document.querySelector("#piezas").value;
  let tel_cliente = document.querySelector("#telefono_cliente").value;
  let resp = document.querySelector("#respuesta");

  resp.classList.remove("fail");
  resp.classList.remove("send");

  let url = `https://api.whatsapp.com/send?phone=${telefono}&text=
		*_MI NEGOCIO_*%0A
		*Reservas*%0A%0A
		*¿Cuál es tu nombre?*%0A
		${cliente}%0A
		*¿Cuál es tu dirección?*%0A
		${direccion}%0A
		*Indica la variante del producto:*%0A
		${color}%0A
		*Cantidad o Número de piezas:*%0A
		${piezas}%0A
		*Teléfono de contacto:*%0A
		${tel_cliente}`;

  if (cliente === "" || direccion === "" || color === "" || piezas === "" || tel_cliente === "") {
    resp.classList.add("fail");
    resp.innerHTML = `Faltan algunos datos, ${cliente}`;
    return false;
  }
  resp.classList.remove("fail");
  resp.classList.add("send");
  resp.innerHTML = `Se ha enviado tu reserva, ${cliente}`;

  window.open(url);
});
