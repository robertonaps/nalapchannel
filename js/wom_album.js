


pageSize = 12;
incremSlide = 5;
startPage = 0;
numberPage = 0;

var pageCount =  $(".handlewom").length / pageSize;
var totalSlidepPage = Math.floor(pageCount / incremSlide);
    
for(var i = 0 ; i<pageCount;i++){
    $("#pagin").append('<span><a href="#">'+(i+1)+'</a></span> ');
    if(i>pageSize){
       $("#pagin span").eq(i).hide();
    }
}


showPage = function(page) {
	  $(".handlewom").hide();
	  $(".handlewom").each(function(n) {
	      if (n >= pageSize * (page - 1) && n < pageSize * page)
	          $(this).show();
	  });        
}
    
showPage(1);
$("#pagin span a").eq(0).addClass("current");

$("#pagin span a").click(function() {
	 $("#pagin span a").removeClass("current");
	 $(this).addClass("current");
	 showPage(parseInt($(this).text()));
});



var fullimagesbox = document.getElementById("fullimagesbox");
var fullpic = document.getElementById("fullpic");


function openfullimages(pic) {

    fullimagesbox.style.display="flex";
    fullpic.src = pic;
}

function closefullimages(){

    fullimagesbox.style.display="none";

}

function openpypal() {
    window.open("https://paypal.me/nalapyt?country.x=PH&locale.x=en_US");
  }

function mysocialfb() {
	window.open("https://web.facebook.com/nalapchan");
  }
  
  function yYoutube() {
	window.open("https://www.youtube.com/channel/UCVMGe3T-F3ooH_3FE1vm0LQ");
  }
  

  function refresh(){

    window.location.href = 'album_wom.php';
  
  }
  
  function back(){
  
    window.location.href = 'wom.php';
  
  }