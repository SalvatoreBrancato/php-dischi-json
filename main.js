const { createApp } = Vue

createApp({
    data() {
        return {
        api : 'server.php',
        data : ''
        }
    },
    methods: {
        chiamataApi(){
            axios.get( this.api )
                 .then( (res) => {
                    this.data = res.data;
                 } );
        }
        
    },
    mounted(){
        this.chiamataApi()
    }
}).mount('#app')