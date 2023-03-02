<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>El'Vania: Bakery. Pastry. Chef</title>
    <link rel="stylesheet" href="{{ secure_asset('/css/app.css') }}" />
</head>

<body>
    <div class="app-bar">
        <div>
            <h1 id="title">Elvania</h1>
            <picture>
                <img />
            </picture>
        </div>
        <x-nav.navbar />
    </div>
    <div class="container">
        <div class="about_me_container">
            <h2>About Me</h2>
            <x-content.about_me />
        </div>
        <div class="products_container">
        </div>
    </div>
</body>

</html>
