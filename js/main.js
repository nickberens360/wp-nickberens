//Make section heights = to viewport height
jQuery( document ).ready(function( $ ) {
	




//Wrap full list of articles to be hidden

$( ".article-roll li" ).slice( 4 ).wrapAll( "<div class='article-remainder' />");

$('#blog .more').click(function(){
    $('.article-remainder').slideToggle('fast');

});

$(function(){
   $(".more").click(function () {
      $(this).text(function(i, text){
          return text === "Less" ? "More" : "Less";
      })
   });
})



//$( '.menu-toggle' ).click(function() {
//	$(this).toggleClass('toggle-open');
//});







var size =  $(window).height(); 
$('.details').css('height', size);

$(window).resize(function() {
 var size =  $(window).height(); 
 $('.details').css('height', size);	
});



//Menu toggle
$('.menu-toggle').click(function(){
	$('.menu').slideToggle('fast');
	$(this).toggleClass('toggle-open');
});

$('.menu li a').click(function(){
	$('.menu').slideToggle('fast');
	$('.menu-toggle').removeClass('toggle-open');
});

//Smooth scroll
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 500);
            return false;
        }
    }
});



//Handles work example details overlay



var details = $('#details');
var cases = $('#cases');


/*$('.mylinks').click(function(e){
    e.preventDefault();	
		details.css('display','table');	
		cases.load($(this).prop("href")); 
		$('html, body').animate({scrollTop: details.offset().top}, .5); 
});*/

//Closes overlay
$('#details .clse').click(function(){
	details.slideToggle('fast');
	details.css('display','none');
	$('#first, #second, #third, #fourth, #fifth, #sixth').hide();
});





$.ajaxSetup({cache:false});
  $("a.mylinks").click(function(e){
      e.preventDefault(); 
      var post_url = $(this).attr("href");
      var post_id = $(this).attr("rel");
      $("#cases").html('<div class="loading">loading...</div>');
      $('#details').css('display','table'); 
      $("#cases").load(post_url);
      $('html, body').animate({scrollTop: details.offset().top}, .5); 
  return false;
});














});