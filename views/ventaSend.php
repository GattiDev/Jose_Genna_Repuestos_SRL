<div id="thingFromVentas">
    <h2 class="efecto">Ventas</h2>

    <form action="controllers/send_ventas.php" method='post' class='form_contact'>
        <div class='formulario'>
            <!--Nombre y Apellido-->
            <label for='nombre'>Nombre y Apellido <span>*</span></label><br/>
            <input class='nombre' type='text' name='nombre' required='required' pattern='[A-Za-z Á-É-Í-Ó-Úá-é-í-ó-ú]+'><br/>

            <!--Correo-->
            <label for='email'>Email <span>*</span></label><br/>
            <input class='email' type='text' name='email' required='required'><br/>

            <!--Localidad-->
            <label for='localidad'>Localidad <span>*</span></label><br/>
            <input class='localidad' type='text' name='localidad'><br/>

            <!--Telefono-->
            <label for='telefono'>Telefono <span>*</span></label><br/>
            <input class='telefono' type='text' name='telefono' required='required' pattern='[0-9- ]+'><br/>

            <!--Asunto-->
            <label for='asunto'>Asunto <span>*</span></label><br/>
            <input class='asunto' type='text' name='asunto' required='required' pattern='[A-Za-z Á-É-Í-Ó-Úá-é-í-ó-ú]+'><br/>

            <!--Mesaje-->                          
            <div class='textarea-msj'>                 
                <textarea class='mesaje' name='mesaje' required='required' placeholder='Deje tu consulta aquí. . .'></textarea><br/>
            </div>

            <div id='enviar'>
                <button type="submit" class="btn btn-outline-primary">Enviar</button>  
            </div>
        </div>
    </form>
</div>