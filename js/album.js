// modal

var fullimagesbox = document.getElementById("fullimagesbox");
var fullpic = document.getElementById("fullpic");


function openfullimages(pic) {

    fullimagesbox.style.display="flex";
    fullpic.src = pic;
}

function closefullimages(){

    fullimagesbox.style.display="none";


}
