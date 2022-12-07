pageSize = 12;
incremSlide = 5;
startPage = 0;
numberPage = 0;

var pageCount =  $(".chge-img").length / pageSize;
var totalSlidepPage = Math.floor(pageCount / incremSlide);
    
for(var i = 0 ; i < pageCount; i++){
    $("#pagin").append('<span class="pagess"><a href="#">'+(i+1)+'</a></span> ');
    if(i>pageSize){
       $("#pagin span").eq(i).hide();
    }
  }


showPage = function(page) {
	  $(".chge-img").hide();
	  $(".chge-img").each(function(n) {
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



var fullimagesboxaq = document.getElementById("fullimagesboxaq");
var fullpicaq = document.getElementById("fullpicaq");


function openfullimagesaq(picaq) {

    fullimagesboxaq.style.display="flex";
    fullpicaq.src = picaq;
}

function closefullimagesaq(){

    fullimagesboxaq.style.display="none";

}


function mysocialfb() {
  window.open("https://web.facebook.com/nalapchan");
}

function yYoutube() {
  window.open("https://www.youtube.com/channel/UCVMGe3T-F3ooH_3FE1vm0LQ");
}

function openpypal() {
  window.open("https://paypal.me/nalapyt?country.x=PH&locale.x=en_US");
}



function refresh(){

  window.location.href = 'albumaq.php';

}

function back(){

  window.location.href = 'aq.php';

}