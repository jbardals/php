


> Written with [StackEdit](https://stackedit.io/).
 **As cookies**

As cookies son un mecanismo que utilizan os servidores web para gardar información no ordenador do usuario e recuperala cada vez que o navegador lle pide unha páxina. A información gárdase no ordenador do usuario en formato de texto. Esta información utilízase para fines diversos como autentificación, selección de preferencias, ítems seleccionados nun carriño de comprar, etc. A intención desta información será sempre a de identificar ao usuario e personalizar as súas páxinas.

As cookies créanse cando o servidor llo pide ao navegador. Cando o servidor envía unha páxina ao navegador, pode incluír nas cabeceiras de resposta HTTP a petición de creación dunha ou varias cookies. O navegador crea a cookie, gardando o nome da cookie, o seu valor, e tamén o nome do servidor que creou a cookie.

En PHP, as cookies se crean mediante a función setcookie().
No caso que se desexe gardar unha cookie nun array, é necesario crear cada elemento do array nunha cookie distinta,

    <?php
    
    setcookie("datos[nombre]", "Xosé");
    
    setcookie("datos[apellidos]", "López Pérez");
    
    ?>

Cómpre ter en conta que a función setcookie() define unha cookie para ser enviada xunto có resto da cabeceiras de HTTP. As cookies deben ser enviadas antes de que o script xere ningunha saída (é unha restrición del protocolo). Isto implica que as chamadas a esta función se coloquen antes de que se xere calquera saída, incluíndo las etiquetas <html> y <head> ao igual que calquera espazo en branco.
