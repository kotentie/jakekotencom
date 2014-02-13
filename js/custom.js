
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8550088-5']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_setSiteSpeedSampleRate', 100]);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  
  $(window).load(function() {
    var theHash = "#go-here";
    $("html, body").animate({scrollTop:$(theHash).offset().top}, 800);
});
    