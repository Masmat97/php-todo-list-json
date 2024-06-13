const { createApp } = Vue

createApp({
    data() {
        return {
            friends: []
        }
    },
    methods: {

    },
    mounted() {
        axios.get("../server.php").then(results => {
            console.log("Risultati:" , results);
            this.friends = results.data;
        });

    },
}).mount('#app')