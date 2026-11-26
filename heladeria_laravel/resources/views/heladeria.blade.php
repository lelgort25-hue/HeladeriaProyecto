<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heladería Dulce Sabor</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header class="encabezado">
        <h1>Heladería Dulce Sabor</h1>
        <p>Administrador: Santiago Concha</p>
    </header>

    <main>
        <section class="informacion">
            <h2>Información</h2>
            <p><strong>Ciudad:</strong> Pasto</p>
            <p><strong>Edad:</strong> 17 años</p>
            <p><strong>Visita:</strong> martes</p>
        </section>

        <section class="sabores">
            <h2>Nuestros sabores</h2>

            <div class="productos">
                <article class="producto">
                    <img src="{{ asset('img/vainilla.jpg') }}" alt="Helado de vainilla">
                    <h3>Vainilla</h3>
                    <p>$1.500</p>
                </article>

                <article class="producto">
                    <img src="{{ asset('img/chocolate.jpg') }}" alt="Helado de chocolate">
                    <h3>Chocolate</h3>
                    <p>$1.700</p>
