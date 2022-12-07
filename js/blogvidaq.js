
function mysocialfb() {
  window.open("https://web.facebook.com/nalapchan");
}

function yYoutube() {
  window.open("https://www.youtube.com/channel/UCVMGe3T-F3ooH_3FE1vm0LQ");
}



$(document).ready(function () {
  $('.vid-item').each(function(index){
    $(this).on('click', function(){
      var current_index = index+1;
      $('.vid-item .thumb').removeClass('active');
      $('.vid-item:nth-child('+current_index+') .thumb').addClass('active');
    });
  });
});


function openpypal() {
  window.open("https://paypal.me/nalapyt?country.x=PH&locale.x=en_US");
}
