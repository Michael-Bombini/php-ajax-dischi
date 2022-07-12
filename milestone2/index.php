<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

    <div id="app">
        <header class="p-3">
            <nav class="">
                <img src="../img/logo-small.svg" alt="" class="logo">
            </nav>
        </header>

        <main class="flex-grow-1">
            <div class="container">
                <div class="row row-cols-5 g-3">
                    <div class="col" v-for="disk in dischi">
                        <img :src="disk.poster" alt="">
                        <h1>{{disk.title}}</h1>
                        <h2>{{disk.author}}</h2>
                        <h3>{{disk.year}}</h3>
                    </div>

                </div>
                <form>

                    <input type="text" v-model="genreSearched" placeholder="Cerca genere">
                    <button @click="fetchGenre">Search genre</button>
                </form>


            </div>

        </main>
    </div>

    <script src="./main.js"></script>
</body>

</html>