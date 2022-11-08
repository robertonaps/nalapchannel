

var fullimagesboxcoc = document.getElementById("fullimagesbox-coc");
var fullpiccoc = document.getElementById("fullpic-coc");


function openfullimagescoc(pic) {

    fullimagesboxcoc.style.display="flex";
    fullpiccoc.src = pic;
}

function closefullimages(){

    fullimagesboxcoc.style.display="none";

}