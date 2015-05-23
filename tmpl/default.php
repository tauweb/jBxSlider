<?php 
// No direct access
defined('_JEXEC') or die; ?>

<?php
//bxSlider CSS file
JFactory::getDocument()->addStyleSheet( 'modules/mod_jbxslider/tmpl/css/jquery.bxslider.css');
// jQuery library (served from Google)
JFactory::getDocument()->addScript( '//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');
// bxSlider Javascript file
JFactory::getDocument()->addScript( 'modules/mod_jbxslider/tmpl/js/jquery.bxslider.min.js');
?>

<ul class="jbxslider">
<?php for ($i=0; $i < count($files); $i++) { 
  echo '<li><img title="'. $params->get('slide'.$i.'_tittle').'" 
        src="' . $folder.'/'.$files[$i] . '" /></li>';
}?>
</ul>

<script>
window.addEventListener('load', function(){
  $('.jbxslider').bxSlider({
    // Options======================================================================================
    // General--------------------------------------------------------------------------------------
    mode: <?php echo '\''.$params->get('mode').'\'';?>,
    speed: <?php echo $params->get('speed');?>,
    slideMargin: <?php echo $params->get('slideMargin');?>,
    startSlide: <?php echo $params->get('startSlide')-1;?>,
    randomStart: <?php echo $params->get('randomStart') ? 'true' : 'false';?>,
    slideSelector: <?php echo '\''.$params->get('slideSelector').'\'';?>,
    infiniteLoop: <?php echo $params->get('infiniteLoop') ? 'true' : 'false';?>,
    hideControlOnEnd: <?php echo $params->get('hideControlOnEnd') ? 'true' : 'false';?>,
    easing: <?php echo $params->get('easing') ?  '\''. $params->get('easing') .'\'' : 'null';?>,
    captions: <?php echo $params->get('captions') ? 'true' : 'false';?>,
    ticker: <?php echo $params->get('ticker') ? 'true' : 'false';?>,
    tickerHover: <?php echo $params->get('tickerHover') ? 'true' : 'false';?>,
    adaptiveHeight: <?php echo $params->get('adaptiveHeight') ? 'true' : 'false';?>,
    adaptiveHeightSpeed: <?php echo $params->get('adaptiveHeightSpeed');?>,
    video: <?php echo $params->get('video') ? 'true' : 'false';?>,
    responsive: <?php echo $params->get('responsive') ? 'true' : 'false';?>,
    useCSS: <?php echo $params->get('useCSS') ? 'true' : 'false';?>,
    preloadImages: <?php echo '\''.$params->get('preloadImages').'\'';?>,
    touchEnabled: <?php echo $params->get('touchEnabled') ? 'true' : 'false';?>,
    swipeThreshold: <?php echo $params->get('swipeThreshold');?>,
    oneToOneTouch: <?php echo $params->get('oneToOneTouch') ? 'true' : 'false';?>,
    preventDefaultSwipeX: <?php echo $params->get('preventDefaultSwipeX') ? 'true' : 'false';?>,
    preventDefaultSwipeY: <?php echo $params->get('preventDefaultSwipeY') ? 'true' : 'false';?>,

    // Pager settings------------------------------------------------------------------------------- 
    pager: <?php echo $params->get('pager') ? 'true' : 'false'; ?>,
    pagerType: <?php echo '\'' . $params->get('pagerType') .'\'' ; ?>,
    pagerShortSeparator: <?php echo '\'' . $params->get('pagerShortSeparator') .'\''; ?>,
    pagerSelector: <?php echo '\'' . $params->get('pagerSelector') .'\''; ?>,
    pagerCustom: <?php echo $params->get('pagerCustom') ?  '\''. $params->get('pagerCustom') .'\'' : 'null'; ?>,
    buildPager: <?php echo $params->get('buildPager') ?  '\''. $params->get('buildPager') .'\'' : 'null'; ?>,

    // minimal--------------------------------------------------------------------------------------
    // auto: true,
    // controls: true,
    // pager: true,
    // speed: 800,
    // pause: 8000,
    
    onSlideBefore: function($slideElement, oldIndex, newIndex){
     $(".bx-caption").animate({opacity:0},300, function() {
       $(".bx-caption").css({top:"600px"});
     });
    },
    onSlideAfter: function($slideElement, oldIndex, newIndex){
      $slideElement.find(".bx-caption").css({"opacity":"1"}).animate({top:"60px"},500);
    }
  });
});
</script>