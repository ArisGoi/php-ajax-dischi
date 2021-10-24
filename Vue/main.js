const app = new Vue({
    el: "#root",
    data:{
        albums: null
    },
    created() {
        axios.get('./toJS.php')
        .then((response) => {
            this.albums = response.data;
            console.log(response.data)
        })
        .catch(function (error){
            console.log(error);
        })
    }
});