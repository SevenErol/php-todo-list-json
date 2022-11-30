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
                task
            }
            axios
                .post(this.url, data, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                })
                .then(response => {
                    console.log(response);
                    this.tasks = response.data

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