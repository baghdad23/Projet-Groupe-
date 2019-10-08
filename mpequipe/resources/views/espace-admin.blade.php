<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL projet</title>
</head>
<body>
    <div id="app">
        <header>
            <h1>PROJET MARKETPLACE</h1>
            <nav>
                <ul>
                    <li><a href="<?php echo url("/") ?>">accueil</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h3>ESPACE ADMIN</h3>
            <h3>@{{message}}</h3>
        </main>
        <footer>
        </footer>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>  
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                message: 'hello Vue'
            }
        })
    </script>
</body>
</html>