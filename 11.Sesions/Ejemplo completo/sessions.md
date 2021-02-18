
## Mantenimiento del estado. Cookies y Sesiones

El protocolo HTTP es el protocolo encargado de la transferencia de hipertexto, utilizado para la transferencia de los documentos  HTML  desde el servidor hasta el cliente. Puesto que se trata de un protocolo sin estado, la transferencia de cada documento se realiza de forma independiente, sin mantener ninguna relación con cualquier transferencia que se haga inmediatamente anterior o posteriormente. Por tanto, este protocolo es incapaz de saber si es el mismo cliente quién está solicitando una serie de documentos (páginas web) o se trata de clientes diferentes.

Es por eso que necesitaremos algún mecanismo si queremos ser capaces de mantener la sesión de un usuario o saber de alguna manera que éste ha realizado alguna visita previa a la actual. En este caso, mediante PHP como lenguaje de desarrollo del lado servidor, veremos cómo llevar a cabo este tipo de operaciones.

En el desarrollo web existen dos formas para mantener el estado:

-   Cookie: Es la información que un servidor web almacena en un cliente con el objetivo de mantener un estado o recordar algo sobre éste (para su uso en futuras visitas).
    
-   Sesión: También es información que se utiliza para mantener el estado pero en este caso ésta se almacena en el servidor
    

También existen algunas otras diferencias entre cookies y sesiones como por ejemplo el hecho de que las sesiones se eliminen al cerrar el navegador mientras que las cookies pueden permanecer durante mucho tiempo en el equipo del cliente (y a pesar de haber cerrado el navegador).

### Configuración de PHP

Antes de comenzar con el uso de sesiones en nuestros proyectos PHP tendremos que comprobar que éste está correctamente configurado para el uso de las mismas. Para eso, tendremos que echar un vistazo al fichero de configuración  `php.ini`  y comprobar que está fijado un valor para la variable  `session.save_path`  (que por defecto será  `/tmp`).


### Formulario y scripts para inicio de sesión en un sitio web

La forma más habitual de iniciar una sesión en un sitio web es hacerlo a través de un formulario que permita identificar al usuario que va a iniciarla. En nuestro ejemplo tenemos [form.php](form.php) donde un visitante necesita introducir su nombre de usuario y contraseña (previamente se habrá registrado) para comenzar la sesión en el sitio web.

Suponemos que una vez iniciada su sesión, tendrá acceso a una zona del sitio web que vendrá personalizada. En caso contrario no tendría sentido solicitar que se identificara.

El script que inicia la sesión tendrá que hacerlo utilizando el método  `session_start()`. En ese momento el servidor almacenará la información necesaria para mantenerla mientras el usuario no decida cerrarla (veremos como se hace más adelante).

Además podemos aprovechar para almacenar variables de sesión (se almacenan en  `$_SESSION`) de forma que podamos también  _recordar_  cierta información que pueda ser útil durante la misma. Una vez iniciada la sesión y recogida la información podemos redirigir al usuario a la página de inicio de nuevo o bien a una zona privada [login.php](login.php).


Hay que tener en cuenta que todas las páginas web del sitio que necesiten conocer el estado de la sesión deberán incluir la llamada a  `start_session`  para mantenerla y además habrá que comprobar que se tiene acceso al menos a la variable de sesión que utilizamos para identificar al usuario. En nuestro caso, en el script que procesa el formulario de login habíamos almacenado el nombre del usuario en la variable de sesión  `$_SESSION[“usuario”]`  por lo que comprobamos que ésta exista para poder asegurar que el visitante actual se encuentra identificado. En caso contrario lo redireccionaremos fuera de la zona privada.

Hay que tener en cuenta que almacenando el valor del usuario que tienen iniciada la sesión permite a su vez personalizar la información que se muestra o bien permitir hacer determinadas acciones en función de quién sea ese usuario o bien del rol que tenga en el sitio web (si lo hemos almacenado en otra variable de sesión o podemos ir a consultarlo a la Base de Datos a partir de conocer el nombre de usuario).
[index.php](index.php)

Cualquier otra página que necesite mantener el estado deberá iniciar de la misma forma, manteniendo la sesión con  `session_start`  y comprobando que el visitante la tiene iniciada.
[otra_pagina.php](otra_pagina.php)

Y finalmente, el script que procese (bien a través de un botón de un formulario o bien un simple enlace) la salida de la sesión tendrá que iniciarla para luego eliminar toda la información de la sesión (`session_unset`) y luego eliminar la propia sesión del servidor (`session_destroy`).

A partir de este momento, el servidor web dejará de recordar al visitante como un usuario con sesión a todos los efectos.
[logout.php](logout.php)

