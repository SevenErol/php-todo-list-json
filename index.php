<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list app</title>

    <style>
        .ms_container {
            width: 50%;
            margin: auto;
            display: flex;
            flex-direction: column;
            align-items: stretch;
            background-color: cornflowerblue;
        }

        .box {
            background-color: #ededed;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid black;
        }

        .ms_input {
            align-self: center;
        }

        #my_btn {
            height: 36px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <!-- link bootstrap  -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>

    <!-- link fontawesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

</head>

<body>

    <div id="app">

        <div class="container p-5">

            <div class="ms_container">

                <h1 class="text-white text-center p-3">Manage you to-do list </h1>

                <div class="boxes p-3" v-if="tasks.length">

                    <div class="box" v-for="(task,index) in tasks">
                        <p class="p-2 col-10 d-flex align-items-center m-0">{{ task }}</p>
                        <button type="button" class="btn btn-danger col-2" id="my_btn" @click="deleteTask(index)">
                            <i class="fa-solid fa-trash text-white"></i>
                        </button>
                    </div>

                </div>

                <div v-else>
                    <h5 class="text-white text-center p-3">Non ci sono tasks </h5>
                </div>


                <div class="mb-3 d-flex mt-2 ms_input">

                    <input type="text" name="task" id="task" placeholder="Add a new task" v-model='task' @keyup.enter="saveTasks">

                    <button type="submit" class="btn btn-primary" @click="saveTasks">
                        Submit
                    </button>

                </div>

            </div>


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