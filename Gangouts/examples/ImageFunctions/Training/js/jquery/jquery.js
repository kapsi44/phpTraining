

$(document).ready(function() {

$(".buton").on("click", function() {
var va=$(this).attr('data-panelid');
 
$('#'+ va).fadeToggle(1000);

})});

/*$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});

$(document).ready(function() {
   $('#red').mouseenter(function() {
       $(this).animate({
           height: '+=10px'
       });
   });
   $('#red').mouseleave(function() {
       $(this).animate({
           height: '-=10px'
       }); 
   });
   $('#red').click(function() {
       $(this).toggle(100);
   }); 
});*/




/*
		$(document).ready(function() {
		$('#b2').on("mouseenter", function() {
		$('#green').fadeToggle(1000);
		})});

		$(document).ready(function() {
		$('#b3').on("mouseover", function() {
		$('#violet').fadeToggle(1000);
		})});


/*$(document).ready(function() {
   $('div').mouseenter(function() {
       $(this).animate({
           height: '+=10px'
       });
   });
   $('div').mouseleave(function() {
       $(this).animate({
           height: '-=10px'
       }); 

/*$(document).ready(function(){
$('div').show(5000);
});*/

