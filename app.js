const { createApp } = Vue;

createApp({
    data() {
        return {
            API_URL: './server.php',
            tasks: [],
            task: ''
        }
    },
    methods: {
        readToDoList(url) {
            axios
                .get(url)
                .then(response => {
                    console.log(response);
                    this.tasks = response.data
                })
                .catch(err => {
                    console.error(err.message);
                })
        },
        saveTasks() {

            if (this.task.replace(/\s/g, '').length > 0) {
                const data = {
                    title: this.task
                }
                axios
                    .post('./add-task.php', data, {
                        headers: { 'Content-Type': 'multipart/form-data' }
                    })
                    .then(response => {
                        console.log(response);
                        this.tasks = response.data
                        this.task = ''

                    })
                    .catch(err => {
                        console.error(err.message);
                    })
            }

            this.task = ''

        },
        deleteTask(index) {
            const data = {
                task_index: index
            }
            axios
                .post('./delete-task.php', data, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                .then(response => {
                    console.log(response);
                    this.tasks = response.data
                    this.deletetask = ''

                })
                .catch(err => {
                    console.error(err.message);
                })
        }
    },
    mounted() {
        this.readToDoList(this.API_URL)
    }
}).mount('#app')