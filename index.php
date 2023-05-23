

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP Dischi JSON</title>
</head>
<body>

    <div id="app">
        <div class="vh-100 w-75 mx-auto bg-secondary d-flex justify-content-around align-items-center flex-wrap">
            <div v-for="(element, index) in data" :key="index" class="card col-3 m-1">
                <img :src="element.poster" class="card-img-top" alt="Immagine copertina">
                <div class="card-body d-flex flex-column">
                    <span class="card-title text-center fs-5 lh-1">{{element.title}}</span>
                    <span class="card-text text-center fs-5 lh-1">{{element.author}}</span>
                    <span class="card-text text-center fs-5 lh-1">{{element.year}}</span>   
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</body>
</html>