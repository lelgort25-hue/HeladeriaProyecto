<?php
// ---------------------------
// VARIABLES (modifícalas aquí)
// ---------------------------
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$nombreHeladeria = "Heladería Santiago";
$administrador = "Santiago Concha";
$ciudad = "Pasto";

/* Reto 2: edad definida aquí */
$edad = 17;

/* Reto 3: día definido aquí (ej: "martes", "lunes") */
$dia = "martes";

/* Reto 4: disponibilidad booleana de un sabor (ejemplo: Vainilla) */
$saborVainillaDisponible = true;

/* Sabores (sin arreglos ni ciclos) */
$sabor1_nombre = "Vainilla";
$sabor1_precio = 1500;
$sabor1_imagen = "img/vainilla.jpg";

$sabor2_nombre = "Chocolate";
$sabor2_precio = 1700;
$sabor2_imagen = "img/chocolate.jpg";

$sabor3_nombre = "Fresa";
$sabor3_precio = 1600;
$sabor3_imagen = "img/fresa.jpg";

$sabor4_nombre = "Oreo";
$sabor4_precio = 1800;
$sabor4_imagen = "img/oreo.jpg";

/* Función para mostrar imagen con fallback */
function mostrarImagen($ruta, $alt, $placeholder = "img/placeholder.jpg") {
    $rutaReal = __DIR__ . "/" . $ruta;
    $placeholderReal = __DIR__ . "/" . $placeholder;

    if (file_exists($rutaReal)) {
        echo '<img src="' . htmlspecialchars($ruta) . '" alt="' . htmlspecialchars($alt) . '">';
    } else {
        if (file_exists($placeholderReal)) {
            echo '<img src="' . htmlspecialchars($placeholder) . '" alt="Imagen no disponible">';
        } else {
            echo '<img src="https://via.placeholder.com/500x350?text=Helado" alt="Imagen no disponible">';
        }
    }
}
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?php echo htmlspecialchars($nombreHeladeria); ?></title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="site-header">
    <div class="logo">
      <div class="logo-badge">🍦</div>
      <div class="logo-text">
        <h1><?php echo $nombreHeladeria; ?></h1>
        <p class="tagline">Sabores que derriten sonrisas</p>
      </div>
    </div>

    <div class="business-info">
      <p><strong>Administrador:</strong> <?php echo $administrador; ?></p>
      <p><strong>Ciudad:</strong> <?php echo $ciudad; ?></p>
    </div>
  </header>

  <main class="container">
    <section class="descripcion">
      <p>
        En <strong><?php echo $nombreHeladeria; ?></strong> preparamos helados artesanales con ingredientes frescos,
        sabores irresistibles y una atención cálida para toda la familia. Descubre tus favoritos y disfruta
        de la mejor experiencia helada en <?php echo $ciudad; ?>.
      </p>
    </section>

    <section class="welcome">
      <div>
        <h2>¡Bienvenid@ a <?php echo $nombreHeladeria; ?>!</h2>
        <p class="welcome-message">
          <?php
          if ($edad >= 18) {
              echo "¡Bienvenido! Conoce nuestras promociones especiales.";
          } else {
              echo "¡Bienvenido! Descubre nuestros deliciosos sabores.";
          }
          ?>
        </p>
      </div>

      <div class="promo-message">
        <?php
        if (strtolower(trim($dia)) === "martes") {
            echo "<span class='highlight'>🎉 ¡Hoy tenemos 2x1 en conos!</span>";
        } else {
            echo "🍦 Hoy puedes disfrutar de nuestros sabores habituales.";
        }
        ?>
      </div>
    </section>

    <section class="productos">
      <h2>Nuestros sabores</h2>
      <div class="cards">

        <article class="card">
          <?php mostrarImagen($sabor1_imagen, $sabor1_nombre); ?>
          <div class="card-body">
            <h3><?php echo $sabor1_nombre; ?></h3>
            <p class="price">$ <?php echo number_format($sabor1_precio, 0, ',', '.'); ?></p>
          </div>
        </article>

        <article class="card">
          <?php mostrarImagen($sabor2_imagen, $sabor2_nombre); ?>
          <div class="card-body">
            <h3><?php echo $sabor2_nombre; ?></h3>
            <p class="price">$ <?php echo number_format($sabor2_precio, 0, ',', '.'); ?></p>
          </div>
        </article>

        <article class="card">
          <?php mostrarImagen($sabor3_imagen, $sabor3_nombre); ?>
          <div class="card-body">
            <h3><?php echo $sabor3_nombre; ?></h3>
            <p class="price">$ <?php echo number_format($sabor3_precio, 0, ',', '.'); ?></p>
          </div>
        </article>

        <article class="card">
          <?php mostrarImagen($sabor4_imagen, $sabor4_nombre); ?>
          <div class="card-body">
            <h3><?php echo $sabor4_nombre; ?></h3>
            <p class="price">$ <?php echo number_format($sabor4_precio, 0, ',', '.'); ?></p>
          </div>
        </article>

      </div>
    </section>

    <section class="promociones">
      <h2>Promociones</h2>
      <div class="promo-cards">
        <div class="promo">
          <h3>Conos 2x1</h3>
          <p>Martes: ¡El día perfecto para compartir!</p>
        </div>
        <div class="promo special">
          <h3>Helado del mes</h3>
          <p>Prueba el sabor recomendado por nuestro maestro heladero.</p>
        </div>
      </div>

      <div class="disponibilidad">
        <?php
        if ($saborVainillaDisponible === true) {
            echo "<p class='available'>✅ ¡Este sabor está disponible!</p>";
        } else {
            echo "<p class='unavailable'>❌ Lo sentimos, este sabor está agotado.</p>";
        }
        ?>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="contacto">
      <p><strong>Contacto:</strong> lelgort25@gmail.com</p>
      <p><strong>Teléfono:</strong> +57 3053609621</p>
      <p><strong>Dirección:</strong> Calle 12, <?php echo $ciudad; ?></p>
    </div>
    <p class="copyright">© <?php echo date("Y"); ?> <?php echo $nombreHeladeria; ?>. Proyecto de demostración.</p>
  </footer>
</body>
</html>