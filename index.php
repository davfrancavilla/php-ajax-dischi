<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <div class="container">
            <ul>
                <li>Bon Jovi</li>
                <li>Queen</li>
                <li>Sting</li>
                <li>Steve Gadd Band</li>
                <li>Iron Maiden</li>
                <li>Eric Clapton</li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="discs container"></div>
    </main>

    <script id="entry-template" type="text/x-handlebars-template">
        <div class="disc">
            <img src="{{poster}}" alt="{{title}}-poster">
            <div class="title">{{title}}</div>
            <div class="artist">{{author}}</div>
            <div class="year">{{year}}</div>
        </div>
    </script>

    <script src="src/app.js"></script>
</body>
</html>