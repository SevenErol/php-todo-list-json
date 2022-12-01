<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list app</title>

    <!-- link bootstrap  -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
</head>

<body>

    <div id="app">

        <ul>

            <li v-for="task in tasks">{{ task }}</li>

        </ul>


        <div class="mb-3 d-flex mt-2">

            <input type="text" name="task" id="task" placeholder="Add a new task" v-model='task' @keyup.enter="saveTasks">

            <button type="submit" class="btn btn-primary" @click="saveTasks">
                Submit
            </button>

        </div>


    </div>

    <!-- axios CDN -->
    <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>

    <!-- CDN for Vue.js -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>

    <!-- my script link -->
    <script src="./app.js"></script>

    <!-- script bootstrap -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
</body>

</html>