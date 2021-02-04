


> Written with [StackEdit](https://stackedit.io/).
## Las superglobals $_GET y $_POST

Una vez has conocido los fundamentos de PHP y ya te sabes manejar con las variables, puedes concatenarlas y realizar cálculos. En este apartado te contamos por qué las variables son un factor esencial a la hora de programar scripts.

Una función importante de los lenguajes de programación es que estos ofrecen la posibilidad de analizar las entradas de los usuarios y de transferir los valores a otros scripts. Para ello, PHP se basa en las  **superglobals****_$_GET_ y _$_POST,_ variables de sistema**  predefinidas que están disponibles en todos los ámbitos de validez. Como arrays asociativos (campos de datos),  _$_GET_ y _$_POST_ almacenan un conjunto de variables en forma de strings en una variable.

Los  **arrays** pueden imaginarsecomo si fueran un armario con varios cajones, cada uno de los cuales ofrece la posibilidad de archivar datos. Para poder saber posteriormente lo que alberga cada uno de dichos cajones, estos reciben un nombre de variable, que, en función del tipo de array, se puede tratar de un  **index**  o de una  **key (llave)**. Mientras que en el caso de los  **arrays indexados**  se le otorga a cada cajón un índice en forma de número, a los cajones de un  **array asociativo**  se les asigna una key en forma de string (secuencia de caracteres).

Las superglobals  _$_GET_ y _$_POST_  contienen una serie de variables en forma de llaves que permiten llegar a los valores vinculados a dichas llaves. Hablaremos en detalle de este tema cuando nos centremos en las superglobals  _$_GET_ y _$_POST._

### Transferencia de datos vía $_GET

La  **superglobal  _$_GET_**  representa un array de variables que se transfiere a un script PHP con ayuda de un URL.

Si visitas  **weblogs**,  **tiendas online**  o  **foros de Internet**, es posible que te hayan llamado la atención los peculiares URL que aparecen en ellos. Suelen generarse siguiendo el esquema siguiente:

_[nombredeequipo/carpeta/nombredearchivo.php](http://nombredeequipo/carpeta/nombredearchivo.php?nombredevariable=valorde)_variable

En un weblog, el esquema puede tener la siguiente apariencia:

_[www.ejemplo-blog.es/index.php](http://www.ejemplo-blog.es/index.php?id=1)_

Un URL de este tipo puede desglosarse de manera muy sencilla: en un servidor web con el dominio  _ejemplo-blog.es_ existe un archivo con el nombre  _index.php,_ quesirve para crear una página web dinámica. Por lo general, este contiene código HTML y PHP, así como enlaces a archivos de plantillas y a hojas de estilo externas, es decir, todo lo necesario para representar una página web. El indicador que delata que se trata de una página web dinámica es el código que sigue al signo de interrogación (_?_): _id=1._ Este recibe la denominación de  **HTTP query string**  o cadena de consulta de HTTP y está formando por una variable (_id)_ y un valor(_1_), ambos unidos por el signo igual. Los parámetros URL de este tipo se utilizan, por ejemplo, para generar páginas web dinámicas, para cargar contenidos de las bases de datos o para solicitar la plantilla adecuada.

Las páginas web dinámicas permiten la  **separación entre contenido y presentación**. El elemento  _index.php_ contieneprácticamentetoda la información sobre la estructura de la página web, pero no alberga los contenidos. Estos se depositan normalmente en una  **base de datos**  y se puede acceder a ellos a través de los parámetros en el HTTP query string. En nuestro ejemplo, el URL entrega al  _index.php_ el parámetro _id=1,_ el cual determina qué contenidos de la base de datos se tienen que leer y cargarse en el  _index.php._ En el caso de los weblogs se trata, generalmente, del identificador de un artículo determinado. En los foros esto permite visitar una entrada o, en las tiendas online, ver un producto determinado.

Si un URL contiene más de un parámetro, estos se unen entre sí con el  **símbolo et (&)**.
