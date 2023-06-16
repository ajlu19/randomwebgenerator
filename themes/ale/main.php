<?php include 'header.php'; ?>

    <!-- Aqu� puedes colocar el contenido del cuerpo principal de tu p�gina -->
    <section>
        <?php
        // Funci�n para mostrar el t�tulo
        function mostrarTitulo($titulo) {
            echo "<h2>$titulo</h2>";
        }

        // Funci�n para mostrar el art�culo
        function mostrarArticulo($articulo) {
            echo "<article>$articulo</article>";
        }

        // Funci�n para mostrar la imagen
        function mostrarImagen($url, $descripcion) {
            echo "<img src='$url' alt='$descripcion'>";
        }

        // Llamar a las funciones
        mostrarTitulo("T�tulo del art�culo");
        mostrarArticulo("Contenido del art�culo");
        mostrarImagen("ruta/imagen.jpg", "Descripci�n de la imagen");
        ?>
    </section>

<?php include 'footer.php'; ?>
