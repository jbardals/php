

## **As cookies**

As cookies son un mecanismo que utilizan os servidores web para gardar información no ordenador do usuario e recuperala cada vez que o navegador lle pide unha páxina. A información gárdase no ordenador do usuario en formato de texto. Esta información utilízase para fines diversos como autentificación, selección de preferencias, ítems seleccionados nun carriño de comprar, etc. A intención desta información será sempre a de identificar ao usuario e personalizar as súas páxinas.

As cookies créanse cando o servidor llo pide ao navegador. Cando o servidor envía unha páxina ao navegador, pode incluír nas cabeceiras de resposta HTTP a petición de creación dunha ou varias cookies. O navegador crea a cookie, gardando o nome da cookie, o seu valor, e tamén o nome do servidor que creou a cookie.

En PHP, as cookies se crean mediante a función setcookie().
No caso que se desexe gardar unha cookie nun array, é necesario crear cada elemento do array nunha cookie distinta,

    <?php
    
    setcookie("datos[nombre]", "Xosé");
    
    setcookie("datos[apellidos]", "López Pérez");
    
    ?>

Cómpre ter en conta que a función setcookie() define unha cookie para ser enviada xunto có resto da cabeceiras de HTTP. As cookies deben ser enviadas antes de que o script xere ningunha saída (é unha restrición del protocolo). Isto implica que as chamadas a esta función se coloquen antes de que se xere calquera saída, incluíndo las etiquetas < html> y < head> ao igual que calquera espazo en branco.

No seguinte exemplo, úsase un formulario *index.php* onde se introducen os datos dun automóbil. Unha vez os formulario é enviado tras superar o proceso de verificación e validación, a información se carda en diferentes cookies. Deste xeito, esa información poderá ser recuperada desde outras páxinas do sitio web. Cómpre observar que no código, as chamadas á función setcookie() realízanse antes de calquera outro envío de cabeceiras HTTP.

Cando o navegador solicita unha páxina PHP a un servidor que gardou previamente cookies nese ordenador, o navegador inclúe na cabeceira da petición HTTP todas as cookies creadas anteriormente por ese servidor. O programa PHP recibe os nomes e valores das cookies e se gardan automaticamente na matriz $_COOKIE, que é un array asociativo no que se accede a cada elemento indicando o nome da cookie.

No seguinte ficheiro *exemplo.php*, móstrase o acceso ás cookies que se gardaron sobre a información do automóbil.

É moi importante que os nomes das cookies non coincidan cos nomes dos controis dos formularios xa que PHP inclúe os valores das cookies no array $_REQUEST. Polo tanto, si o nome dunha cookie coincide co nome dun control, en $_REQUEST só se gardará o valor da cookie, e non do control.

A creación de cookies ten límites, e cada navegador ten un límite diferente. Polo xeral o límite é aproximadamente 20 cookies por dominio, borrando as antigas no caso de crear máis. E o límite do valor é normalmente 4096 bytes. 
