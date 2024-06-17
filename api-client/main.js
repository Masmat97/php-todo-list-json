const { createApp } = Vue

createApp({
    data() {
        return {
            friends: [],
            newTask: ""
        }
    },
    methods: {
        addTask() {
            console.log("aggiungi", this.newTask);

            const newFriend = {
                name: this.newTask,
                last_name: "Cognome"
            };
            this.friends.push(newFriend)
        }
    },
    mounted() {
        axios.get("../server.php").then(results => {
            console.log("Risultati:", results);
            this.friends = results.data;
        });

    },
}).mount('#app')