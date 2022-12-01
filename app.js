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
    },
    mounted() {
        this.readToDoList(this.API_URL)
    }
}).mount('#app')