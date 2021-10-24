const app = new Vue({
    el: "#root",
    data:{
        albums: null,
        selGen: "all",
        genList: [],
    },
    methods: {
    },
    created() {
        axios.get('./toJS.php')
        .then((response) => {
            this.albums = response.data;
        })
        .catch(function (error){
            console.log(error);
        })
    },
    updated() {
        this.albums.forEach(element => {
            if(this.genList.includes(element.genre) == false){
                this.genList.push(element.genre);
            }
        });
    }
});