new Vue({
    el:"#app",
    data:{
    discList: []
    },

    mounted(){
        axios.get('http://localhost/php-ajax-dischi/PHP/API/discList.php').then((responseOBJ) =>{
            this.discList.push(responseOBJ);
        })    
    }
})