var fullimagesboxavakin = document.getElementById("fullimagesbox-avakin");
var fullpicavakin = document.getElementById("fullpic-avakin");


function openfullimagesavakin(pic) {

    fullimagesboxavakin.style.display="flex";
    fullpicavakin.src = pic;
}

function closefullimages(){

    fullimagesboxavakin.style.display="none";

}