
var fullimagesboxwom = document.getElementById("fullimagesbox-wom");
var fullpicwom = document.getElementById("fullpic-wom");


function openfullimageswom(pic) {

    fullimagesboxwom.style.display="flex";
    fullpicwom.src = pic;
}

function closefullimages(){

    fullimagesboxwom.style.display="none";

}