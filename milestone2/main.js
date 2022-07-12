new Vue({

el : "#app",


data : {
    dischi : [],
},


mounted() {

axios
.get("./db.php")
.then((resp) =>{
    this.dischi = resp.data[0];

})


}

});