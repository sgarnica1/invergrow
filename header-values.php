<?php

$rutaActual = $_SERVER['PHP_SELF'];
$nombreRuta = pathinfo($rutaActual, PATHINFO_FILENAME);
$ruta;

/**
 * Page title
 */
$inicio = 'Inveralia | Servicios Agrícolas + Geomembranas';
$contacto = 'Contacto - Inveralia | Servicios Agrícolas + Geomembranas';
// $agricultura = 'Insumos: Agricultura Protegida - Inveralia | Servicios Agrícolas';
$productos = 'Productos - Inveralia | Servicios Agrícolas + Geomembranas';
$campo = 'Insumos: Campo Abierto - Inveralia | Servicios Agrícolas + Geomembranas';
$montacargas = 'Venta y renta de montacargas - Inveralia | Servicios Agrícolas + Geomembranas';
$error404 = 'Error 404';
$politicas = 'Políticas de privacidad - Inveralia | Servicios Agrícolas + Geomembranas';

/**
 * Page description
 */
$description;
$des_inicio = 'Inveralia. Servicios agrícolas, soluciones de excelencia. Encuentra con nosotros todo lo que necesitas, desde insumos para invernadero y sistemas de riego y accesorios, hasta tractores y maquinaria agrícloca.';
$des_contacto = '¡Contáctanos! Queremos ayudarte. Encuentra todo lo que necesitas con nosotros, desde insumos para invernadero y artículos para el campo abierto hasta tractores y montacargas.';

$des_agricultura = 'Conoce todos nuestros insumos para agricultura protegida, desde clips para tutoreo, rafias y ganchos hasta mezclas profesionales de sustratos, tijeras y navajas.';

$des_campo = 'Conoce todos nuestros insumos para el campo, desde tractores de diferentes marcas como Kubota, Case in y New Holland, hasta implementos agrícolas y refacciones';

$des_montacargas = 'Encuentra con nosotors todo tipo de montacargas que necesites. Para venta o renta. ¡Pregúntanos!';


/**
 * Index or no index
*/
$should_index;

$index = 'index, follow';
$noindex = 'noindex, nofollow';

/**
 * Head
 */

if($nombreRuta == 'index') {
  $ruta = $inicio;
  $description = $des_inicio;
  $should_index = $index;
} elseif ($nombreRuta == 'contacto') {
  $ruta = $contacto;
  $description = $des_contacto;
  $should_index = $index;
} elseif ($nombreRuta == 'productos') {
  $ruta = $productos;
  $description = $des_agricultura;
  $should_index = $index;
} elseif ($nombreRuta == 'campo-abierto') {
  $ruta = $campo;
  $description = $des_campo;
  $should_index = $index;
} elseif ($nombreRuta == 'montacargas') {
  $ruta = $montacargas;
  $should_index = $index;
  $description = $des_montacargas;
} elseif ($nombreRuta == '404') {
  $ruta = $error404;
  $should_index = $noindex;
  $description = $des_inicio;
} elseif ($nombreRuta == 'politicas') {
  $ruta = $politicas;
  $description = $des_inicio;
  $should_index = $index;
}

?>