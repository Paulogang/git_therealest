
(function($){
   $(document).ready(function() {
      $('#burger-menu-icon').click(function() {
         $('#nav-bar-mobile').toggleClass("mobile");
    });
    
    $('#seo-text-btn').click(function() {
       console.log('lol');
       $(this).toggleClass("open");
       $("#long-definition").toggleClass("open");
    
       if (document.querySelector('button#seo-text-btn').innerHTML == 'more'){
          document.querySelector('button#seo-text-btn').innerHTML = 'less';
       }else{
         document.querySelector('button#seo-text-btn').innerHTML = 'more';
       }
    });

    /*Choose Size*/
    $('#size-btn-group a').click(function() {
      var sizeclicked = $(this).data('size');
      $('#size-btn-group a').removeClass('selected');
      $(this).addClass('selected');
      $('.snipcart-add-item').attr('data-item-custom2-value', sizeclicked) ;
   });

    /*Choose Color*/
    $('#color-buttons button').click(function() {
      var colorclicked = $(this).data('color');
      $('.color-selected').html(colorclicked);
      $('#color-buttons button').removeClass('selected');
      $(this).addClass('selected');
      $('.snipcart-add-item').attr('data-item-custom3-value', colorclicked) ;
   });

    
   });
}(jQuery));
