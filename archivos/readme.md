


> Written with [StackEdit](https://stackedit.io/).
> ### Lectura de archivos

Para leer el contenido de un archivo, PHP ofrece diferentes funciones, de las cuales  **_file()_**y  **_file_get_contents()_** son las más apropiadas para nuestros objetivos. Mientras que la función  _file_get_contents()_ sirve para leer la totalidad del contenido de un archivo en un string, la función  _file()_ guarda el contenido en forma de array. Cada elemento del array se corresponde con una línea del archivo. Mediante  _file()_ es más sencillo emitir cada línea por separado.

Puedes utilizar la función _nl2br()_ paraindicar a PHP que los saltos de línea (_new lines)_ deben transformarse automáticamente en saltos de línea en HTML (_breaks_)_._Si se emplea el constructor del lenguaje _echo_ en combinación con _nl2br()_, PHP inserta un salto de línea en HTML antes de cada línea.

### Escritura de archivos

Con PHP no solo se pueden leer archivos, sino que el lenguaje de programación también da la posibilidad de crearlos y de describirlos con contenidos.

Para ello, se utiliza la función de PHP  _**file_put_contents()**__, que espera  **dos parámetros:**  el nombre del archivo que se tiene que crear o actualizar y los datos en forma de string o array.
Si la carpeta de destino ya contiene un archivo con el mismo nombre, este se sobrescribirá, lo que se evita determinando el parámetro_ _FILE___APPEND
