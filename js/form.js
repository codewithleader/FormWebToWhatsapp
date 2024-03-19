document.querySelector("#submit").addEventListener("click", e => {
  e.preventDefault();

  //INGRESE UN NUMERO DE WHATSAPP VALIDO AQUI:
  const telefono = "573136283643";

  const nombre = document.querySelector("#nombre").value;
  const razonsocial = document.querySelector("#razonsocial").value;
  const CUIT = document.querySelector("#CUIT").value;
  const nombrecomercio = document.querySelector("#nombrecomercio").value;
  const direccion = document.querySelector("#direccion").value;
  const localidad = document.querySelector("#localidad").value;
  const provincia = document.querySelector("#provincia").value;
  const tlf = document.querySelector("#telefono").value;
  const email = document.querySelector("#email").value;
  const local = document.querySelector("#local").value;

  const resp = document.querySelector("#respuesta");
  resp.classList.remove("fail");
  resp.classList.remove("send");

  const url = `https://api.whatsapp.com/send?phone=${telefono}&text=
   	*_MI NEGOCIO_*%0A
   	*Reservas*%0A%0A  
    *¿CAMBIA ESTO?*%0A
    ${nombre}%0A
    *¿CAMBIA ESTO?*%0A
    ${razonsocial}%0A
    *¿CAMBIA ESTO?*%0A
    ${CUIT}%0A
    *¿CAMBIA ESTO?*%0A
    ${nombrecomercio}%0A
    *¿CAMBIA ESTO?*%0A
    ${direccion}%0A
    *¿CAMBIA ESTO?*%0A
    ${localidad}%0A
    *¿CAMBIA ESTO?*%0A
    ${provincia}%0A
    *¿CAMBIA ESTO?*%0A
    ${tlf}%0A
    *¿CAMBIA ESTO?*%0A
    ${email}%0A
    *¿CAMBIA ESTO?*%0A
    ${local}`;

  if (
    !nombre ||
    !razonsocial ||
    !CUIT ||
    !nombrecomercio ||
    !direccion ||
    !localidad ||
    !provincia ||
    !tlf ||
    !email ||
    !local
  ) {
    resp.classList.add("fail");
    resp.textContent = `Faltan algunos datos, ${nombre || ''}`;
    return false;
  }
  resp.classList.remove("fail");
  resp.classList.add("send");
  resp.textContent = `Se ha enviado tu reserva, ${nombre || ''}`;

  window.open(url);
});
