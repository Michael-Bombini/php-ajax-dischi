new Vue({

el : "#app",


data : {
    dischi : [],
    genreSearched : "",
},

methods : {
fetchGenre(e){
    e.preventDefault();
    axios
.get(`./db.php?genre=${this.genreSearched}`)
.then((resp) =>{
    this.dischi = resp.data[0];

})
}
},

mounted() {

axios
.get("./db.php")
.then((resp) =>{
    this.dischi = resp.data[0];
    this.genreSearched = resp.data[1];

})


}

});