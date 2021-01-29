ransferencia de datos vía $_POST
Mientras que los datos que se transfieren mediante el método GET se entregan como parámetros URL, la transferencia de datos vía $_POST se realiza en el cuerpo de una petición HTTP. Esto permite a los desarrolladores transferir grandes cantidades de datos de un script a otro.

Un campo de aplicación esencial del método HTTP-POST es la transmisión de datos de formulariosHTML.

En la creación de formularios entra en juego el elemento HTML <form>. Este incluye en la etiqueta de inicio dos atributos: method y action. Con el primero se pueden definir los métodos de transmisión, en este caso el método POST de HTTP. En el atributo action se deposita el URL de un script que recibe todos los datos registrados a través de los siguientes campos de entrada. El ejemplo muestra un formulario HTML con treselementos de entrada (input type="text") y un botón de envío (input type="submit"). Como receptor de los datos, se define el archivo page2.php.