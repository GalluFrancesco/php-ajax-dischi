new Vue({
    el:"#app",
    data:{
    discList: []
    },

    mounted(){
        axios.get('/php-ajax-dischi/PHP/API/discList.php').then((responseOBJ) =>{
            this.discList=(responseOBJ.data);
            console.log(responseOBJ)
        })    
    }
})