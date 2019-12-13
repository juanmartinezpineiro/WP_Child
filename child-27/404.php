<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

  		<h3>FORMULARIO 404, PONTE EN CONTACTO CON EL ADMINISTRADOR</h3>
  		<form action="ejemplo.php" method="get">
  		<p>Nombre: <input type="text" name="nombre" size="40"></p>
  		<p>Año de nacimiento: <input type="number" name="nacido" min="1900"></p>
  		<p>Sexo:
    	<input type="radio" name="hm" value="h"> Hombre
    	<input type="radio" name="hm" value="m"> Mujer
  </p>
  <p>
    <input type="submit" value="Enviar">
    <input type="reset" value="Borrar">
  </p>
</form>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
