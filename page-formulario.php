<?php ?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Reservas MI NEGOCIO</title>
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      margin: 0;
      font-family: sans-serif;
      background: #fafafa;
    }
    .formulario {
      width: 500px;
      max-width: 100%;
      margin: auto;
      margin-top: 30px;
      margin-bottom: 30px;
      padding: 20px;
      box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.3);
      position: relative;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.97);
    }

    .imgLogo {
      width: 100px;
      height: 100px;
      border-radius: 150px;
      display: block;
      margin: auto;
      margin-top: 1em;
      margin-bottom: 1em;
      /*border: 1px solid rgba(109, 86, 10, 0.7);*/
    }

    .formulario__titulo,
    .formulario__subtitulo,
    .formulario__parrafo {
      text-align: center;
      margin-top: 0;
    }
    .formulario__titulo,
    .formulario__subtitulo {
      color: rgba(0, 0, 0, 0.7);
    }
    .formulario__parrafo {
      color: rgba(0, 0, 0, 0.5);
    }
    .formulario__input,
    .formulario__label {
      display: block;
      width: 100%;
      font-size: 1, 3em;
    }
    .formulario__input {
      padding: 10px;
      background: transparent;
      /* puedo colocar otro color pero con transparencia asi: background: rgba(0,0,0,0.1) porque sino no se ven las label, aunque ya no es necesario porque ya no estan sobre los input y ademas le quite el z-index*/
      border: 1px solid rgba(0, 0, 0, 0.3);
      margin-bottom: 15px;
      border-radius: 10px;
    }
    .formulario__input:focus {
      /*outline: 1px solid rgba(0,0,0,0.7);*/
      outline: none;
      box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.7);
    }
    /*.formulario__input:focus + .formulario__label{
        margin-top: -120px;
    }*/
    .formulario__label {
      padding-left: 15px;
      /*position: absolute;*/
      /*margin-top: -78px;*/
      /*z-index: -20;*/
      color: rgba(0, 0, 0, 0.7);
      /*transition: all 0.2s;*/
      margin: 2px;
    }
    .formulario__submit {
      background: rgba(0, 0, 0, 0.7);
      color: white;
      padding: 10px 20px;
      cursor: pointer;
      border: none;
      border-radius: 20px;
      display: block;
      width: 50%;
      font-size: 1, 3em;
    }

    /*Centrar los campos del formulario (Los input y el boton de Enviar al WhatsApp, que tambien es un input)*/

    .formulario__input,
    .formulario__submit {
      margin-left: auto;
      margin-right: auto;
    }

    /*.fijar {
        margin-top: -120px;
    } */

    /* respuesta del formulario */
    #respuesta {
      width: 100%;
      height: 50px;
      margin: 5px;
      padding: 5px;
    }
    #respuesta.fail {
      color: red;
    }
    #respuesta.send {
      color: green;
    }
  </style>
</head>

<body>
  <form action="#" method="GET" class="formulario">
    <?php the_post_thumbnail('full', array(
      'class' => 'imgLogo',
    )); ?>

    <h1 class="formulario__titulo">Gracias por su interés en nuestros productos.</h1>
    <h3 class="formulario__subtitulo">&nbsp;</h3>
    <h3 data-fontsize="15" align="center" data-lineheight="27">Por favor para poder atender a su solicitud le
      solicitamos llenar este formulario.</h3>
    <p class="formulario__parrafo">&nbsp;</p>

    <label for="nombre" class="formulario__label">Nombre y apellido</label>
    <input id="nombre" type="text" class="formulario__input" placeholder="nombre" />

    <label for="razonsocial" class="formulario__label">Razón Social</label>
    <input id="razonsocial" type="text" class="formulario__input" placeholder="razonsocial" />

    <label for="CUIT" class="formulario__label">CUIT</label>
    <input id="CUIT" type="text" class="formulario__input" placeholder="CUIT" />

    <label for="nombrecomercio" class="formulario__label">Nombre de fantasía del comercio</label>
    <input id="nombrecomercio" type="text" class="formulario__input" placeholder="nombrecomercio" />

    <label for="direccion" class="formulario__label">Dirección del comercio</label>
    <input id="direccion" type="text" class="formulario__input" placeholder="direccion" />

    <label for="localidad" class="formulario__label">Localidad</label>
    <input id="localidad" type="text" class="formulario__input" placeholder="localidad" />

    <label for="provincia" class="formulario__label">Provincia</label>
    <input id="provincia" type="text" class="formulario__input" placeholder="provincia" />

    <label for="telefono" class="formulario__label">Teléfono</label>
    <input id="telefono" type="text" class="formulario__input" placeholder="telefono" />

    <label for="email" class="formulario__label">Email</label>
    <input id="email" type="text" class="formulario__input" placeholder="email" />

    <label for="local" class="formulario__label">Por favor marque lo que corresponda</label>
    <select id="local" name="local" class="formulario__input">
      <option>Taller</option>
      <option>Distribuidor</option>
      <option>Negocio</option>
      <option>Otro</option>
    </select>

    <div id="respuesta"></div>

    <button id="submit" class="formulario__submit">Enviar a WhatsApp</button>
  </form>
  <script>
    document.querySelector("#submit").addEventListener("click", e => {
      e.preventDefault();

      //INGRESE UN NUMERO DE WHATSAPP VALIDO AQUI:
      const telefono = "5491162783335";

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
        resp.textContent = `Faltan algunos datos${nombre ? `, ${nombre}` : ''}`;
        return false;
      }
      resp.classList.remove("fail");
      resp.classList.add("send");
      resp.textContent = `Se ha enviado tu reserva${nombre ? `, ${nombre}` : ''}`;

      window.open(url);
    });

  </script>
</body>

</html>