<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spootify Vue</title>

    <link rel="stylesheet" href="./css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <div id="app">

        <header>
            <img src="./img//spooty.png" alt="logo spooty" />
        </header>

        <div class="macro-container">
            <div class="container">

                <div v-for="(disc, index) in discsList" :key="index" :disc="disc" class="discs-container" >
                
                    <div class="card">
                        <img :src="disc.poster" />
                        <h3>{{ disc.title }}</h3>
                        <div>
                            <p>{{ disc.author }}</p>
                            <p>{{ disc.year }}</p>
                        </div>
                    </div>
               
                </div>

            </div>
        </div>

    </div>


    <script>
        new Vue({
            el: "#app",
            data: {
                discsList: [],
            },
            mounted() {
                axios.get("http://localhost/46_php-ajax-dischi/php-ajax-dischi/api/discs.php").then(resp => {
                    this.discsList = resp.data;
                })
            }
        })
    </script>

</body>
</html>