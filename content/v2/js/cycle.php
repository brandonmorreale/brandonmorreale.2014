<style type="text/css">
.slideshow { }
.slideshow img { }
</style>
<!-- include jQuery library -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<!-- include Cycle plugin -->
<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.2.74.js"></script>
<!--  initialize the slideshow when the DOM is ready -->
<script type="text/javascript">

$('.slideshow').cycle({
    fx: 'fade',
	speed:  'fast', 
    pager: '.thePager',
    timeout: 0,
    next: '#next2',
    prev: '#prev2',
    after: onAfter1
});



function onAfter1(curr, next, opts) {
    currentSlide = $(".thePager a.activeSlide").html();
    if (!currentSlide) currentSlide = "1";
    $('.slideCaption').html( '(' + currentSlide + ' of ' + opts.slideCount + ')');

}

</script>