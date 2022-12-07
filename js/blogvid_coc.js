

$(".popupcoc").click(function () {
    var $this = $(this);
    var $iframe = $("<iframe>")
      .attr("src", $this.data("link"))
      .css({ width: 700, height: 300 });
    var $title = $("<h3>").text($this.data("title"));
    $("#video-view").html($title).append($iframe);
    $iframe.wrap("<div class='class-video'>");
  });


  function mysocialfb() {
    window.open("https://web.facebook.com/nalapchan");
  }
  
  function yYoutube() {
    window.open("https://www.youtube.com/channel/UCVMGe3T-F3ooH_3FE1vm0LQ");
  }
  
  function openpypal() {
    window.open("https://paypal.me/nalapyt?country.x=PH&locale.x=en_US");
  }