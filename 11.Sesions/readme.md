

## **As sesións**

As sesións son un mecanismo que utilizan o servidor web para gardar información sobre o usuario e a súa actividade, para recuperala cada vez que o navegador lle pide unha páxina. Esta información estará dispoñible como moito ata que o usuario peche o navegador.

A diferenza con respecto ás cookies é que mediante as cookies a información se garda no ordenador do usuario e se envía en cada petición ao servidor, mentres que mediante as sesións, a información gárdase no servidor. De todos os xeitos, o uso de sesións implicará a creación dunha cookie. No uso das sesións distínguense as seguintes tarefas: creación ou apertura da sesión, utilización da sesión e destrución ou peche da sesión.

## Creación o apertura da sesión

Cando algunha páxina crea unha sesión, facendo uso da función correspondente, o servidor asocia ao navegador do usuario un identificador de usuario único. Este identificador de usuario único se garda en forma de cookie. Se o navegador non permite a creación de cookies, existe a posibilidade de que o identificador do usuario se inclúa na dirección da páxina, o cal pode supoñer un risco de seguridade.

A sesións se crean mediante a función **session_start().** Se a sesión no existe, esta función crea a sesión e lle asocia un identificador de sesión único. Se a sesión xa existía, esta función permite que a páxina teña acceso á información vinculada á sesión.
Como no caso das cookies, débese ter precaución ao utilizar a función session_start() antes de comezar a escribir o contido da páxina. O identificador da sesión utilízase nas cabeceiras de resposta HTTP, e estas cabeceiras deben enviarse antes que o texto da páxina. **Cando PHP atopa una instrución que escribe texto, pecha automaticamente a cabeceira, e si a continuación atopa unha chamada á función session_start(), dará un aviso porque xa se enviaran cabeceiras, e non crea a sesión.**

ás sesións se lle pode pñer nome:

    <?php
    
    session_name("AMiñaSesion");
    
    session_start();
    
    ?>

As sesións teñen como vantaxes que permiten almacenar grandes cantidades de datos facilmente, aforran ancho de banda ao pasar soamente o identificador do usuario, e os datos ao almacenarse no servidor fan que as sesións sexan máis seguras ao non poder ser vistas ou editadas polo cliente.

En PHP as sesións son ficheiros de texto gardados no disco do servidor. O directorio onde se crean estes ficheiros ven especificado no arquivo de configuración php.INI, na directiva session.save_path. Esta directiva se atopa á súa vez dentro da sección [Session] da configuración PHP. Este arquivos conteñen os valores dos diferentes elementos que se gardan na sesión.

## Utilización da sesión

Cando unha páxina creou unha sesión, ou accedeu a unha sesión xa existente, mediante session_start(), a páxina ten acceso ao vector $_SESSION que contén as variables desa sesión.

O vector $_SESSION é asociativo, de xeito que cada elemento será accesible mediante un nome, e terá o seu valor almacenado no array. SESSION é accesible desde páxinas diferentes do sitio web para as que se lles asociou a sesión mediante session_start().

## Destrución ou peche da sesión

As sesións duran ata que o cliente pecha o navegador, aínda que as sesións tamén poden ser destruídas desde o script PHP mediante o uso da función session_destroy().

Cando se destrúe unha sesión, o programa que a destruíu segue tendo acceso aos valores de $_SESSION creados antes da destrución da sesión, pero as páxinas seguintes non.

## Exemplo de manexo de sesións

Crearase un ficheiro **sesions.php** que conterá unha páxina web sinxela onde se amosa un formulario no que se encherán datos sobre un automóbil. No caso no que se verifique e valide o formulario, crearase unha sesión e asignaránselle como elementos ao array $_SESSION os datos introducidos no formulario. Cómpre destacar que cando se crea a función asígnaselle primeiro un nome mediante a función session_name() e a continuación se chama á función session_start(). Estas dúas funcións chámanse antes de enviar ningunha outra cabeceira HTTP.

No ficheiro **exemplosesions.php** accédese aos valores almacenados no array $_SESSION. Pasa isto é necesario abrir antes a sesión existente mediante a función session_start(), pero como neste caso é unha sesión nominada, cómpre chamar antes á función session_name() asignándolle o nome da sessión que se quere abrir.
