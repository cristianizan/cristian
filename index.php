<!-- doctype significa que es html 5 
<etiqueta atributo="valor">contenido</etiqueta>
atributos mas utilizados
div=""
class=""
-->
<!DOCTYPE html>
<html>
<!-- en head contenido que ponemos e el titulo que aparece en la pestaña -->
<head>
	<title>Principal</title>
    <!-- meta charset se coloca para agregar la ñ o ´-->
	<meta charset="UTF-8">
    <!-- enlaza el index con el archivo css-->
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
  <!-- scrip enlaza un archivo java script 
  <script type="text/javascript"></script>
  -->
  <div id="contenido">
     <!-- en header es la cabecera de nuestra pagina-->
     <header>
            <div >
                <!-- con h1 hasta el h6 se coloca diferentes tipos de titulos
                h1 se coloca 1 vez, del h2 al h6 toda las veces que quiera uno
            	<h1>MOVIES</h1>
            </div>
     </header>
     <!-- barra de navegacion -->
     <nav>
     <!-- a es para realizar un enlace 
      si le agregamos target="_blank" nosva a mandar a otra pesataña cuando nos redireccione-->
     	<a href="index.php">Inicio </a>
     	<a target="_blank" href="pelicula.php">Peliculas </a>
     	<a href="serie.php">Series</a>
        <!-- br hace un salto -->
        <br>
     </nav>
     <section>
     <!-- b  y strong pone las letras en negritas o bolt la diferencia es que b es visual pero stron es visual y da ma enfasis para los navegadores al momento de buscar una palabra no abusarse con la etiqueta strong
     span no tiene cambio visual, se le pone con css los cambios visuales
     i pone la palabra en el estilo italica
     blockquote se hace referencia a una cita referido hacia un texto
     cite permite agregar el autor del texto
        -->
        <h2>captian america civil war</h2>
     	<p>
        Este viernes 29 de abril se estrena la primera película de la <b>Fase 3</b>> del Universo Cinematográfico de Marvel, <strong>Capitán América: Civil War</strong>. Esta será la primera vez en la que los espectadores podrán disfrutar del nuevo <span>Spider-Man</span>, un personaje que tras las sagas de Tobey Maguire y Andrew Garfield, estará interpretado por Tom Holland.<br/> Pese a que faltan pocos días para poder disfrutar de Peter Parker al completo, el último spot publicitario, del que se ha hecho eco Comic Book, muestra nuevas imágenes del Hombre Araña, en concreto, un enfrentamiento entre él Bucky
        </p>
        <!-- es otro tipo de enlace donde me enlaza con el correo -->
        <a href="mailto:cristian_izan@hotmial.com" title="enviar a cristian">enviar mail</a>
        <!-- agrega una linea separadora -->
        <hr/>
        <h3>subtitulo</h3>
        <p>
        <cite>by su escritor</cite><br>
        Este <i>viernes 29 de abril</i> se estrena la primera película de la Fase 3 del Universo Cinematográfico de Marvel, Capitán América: Civil War. Esta será la primera vez en la que los espectadores podrán disfrutar del nuevo Spider-Man, un personaje que tras las sagas de Tobey Maguire y Andrew Garfield, estará interpretado por Tom Holland. Pese a que faltan pocos días para poder disfrutar de Peter Parker al completo, <blockquote>el último spot publicitario, del que se ha hecho eco Comic Book, muestra nuevas imágenes del Hombre Araña, en concreto, un enfrentamiento entre él Bucky</blockquote>
        </p>
        <!-- listas desordenadas -->
        <ul>
            <li><a href="">Item 1</a></li>
            <li>Item 2</li>
            <li>Item 3</li>
                <ul>
                    <li>Item 1</li>
                    <li>Item 2</li>
                </ul>
            <li>Item 4</li>
            <li>Item 5</li>
        </ul>
        <!-- listas ordenadas -->
        <ol>
            <li><a href="">Item 1</a></li>
            <li>Item 2</li>
            <li>Item 3</li>
                <ul>
                    <li>Item 1</li>
                    <li>Item 2</li>
                </ul>
            <li>Item 4</li>
            <li>Item 5</li>
        </ol>
        <!-- img es para insertar imagenes width es el ancho y heigt es el alto
        alt cuando el navegador no encuentre la imagen muestra lo que le ponemos
        title cuando paso el mouse sobre la imagen me muestra lo que escribo-->
        <img src="imagenes/02.jpg" width="250" height="150"  alt="logotipo spiderman" title="hecho por cristian"></img>
        <br>
        <!-- table crea tablas
        tr crea las filas
        td crea las columnas-->
        <table>
            <tr>
                <td>Elemento 1</td>
                <td>Elemento 2</td>
                <td>Elemento 3</td>
            </tr>
            <tr>
                <td>Elemento 4</td>
                <td>Elemento 5</td>
                <td>Elemento 6</td>
            </tr>
            <tr>
                <td>Elemento 7</td>
                <td>Elemento 8</td>
                <td>Elemento 9</td>
            </tr>
        </table>
        <br>
        <!-- formulario -->
        <form>
            Ingrese Nombre
            <!-- value en este caso nombre nos figura dentro del textbox, el problema es que cuando vallamos a escribir, primero hay que borrar nombre y luego escribimos-->
            <input type="text" value="nombre"></input>
            <br>
            <br>
            <!-- placeholder aca nombre aparece mas clarito y cuando acercamos el mouse sobre el textbox ya podemos escribir
            maxlength permite un maximo de caracteres a ingresar
            name
            id
            class -->
            <input type="text" placeholder="nombre" maxlength="5"></input>
            <br>
            <br>
            <!-- label la diferencia es que label cuando hagamos click en Ingrese su nombre automaticamente nos va a mandar al input
            dentro de for nombre es el que tenemos en id-->
            <label for="nombre">Ingrese su nombre</label>
            <input type="text" placeholder="nombre" maxlength="5" id="nombre"></input>
            <br>
            <br>
            <!-- me agrega un input de password-->
            <input type="password"></input>
            <br>
            <br>
            <!-- me agrega un input de email no anda en todos los navegadores-->
            <input type="email" name="" id=""></input>
            <br>
            <br>
            <input type="checkbox">moto</input>
            <input type="checkbox">auto</input>
            <br>
            <br>
            <!-- radio me permite elegir uno u otro es diferente a checkbox que puedo seleccionar los dos-->
            <input type="radio">hombre</input>
            <input type="radio">mujer</input>
            <br>
            <br>
            <!-- button sirve para ser una accion con otro lenguaje o el mismo
            submit es un boton que cuando hacemos click envia datos-->
            <input type="button" value="Enviar"></input>
            <input type="submit" value="Enviar a"></input>
            <br>
            <br>
            <select>
                <option value="Argentina">Argentina</option>
                <option value="Estados Unidos">Estados Unidos</option>
            </select>
            <br>
            <br>
            <!-- estas ultimas no funcionan es todos los navegadores-->
            <input type="color"></input>
            <br>
            <br>
            <input type="range"></input>  
        </form>      
     </section>
     <aside>
     	
     </aside>
     <footer>
     	
     </footer>
  </div>   
</body>
</html>