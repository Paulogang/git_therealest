

(function($){
   $(document).ready(function() {
      $('#burger-menu-icon').click(function() {
         $('#nav-bar-mobile').toggleClass("mobile");
    });
    
    $('#seo-text-btn').click(function() {
       $(this).toggleClass("open");
       $("#long-definition").toggleClass("open");
    
       if (document.querySelector('button#seo-text-btn').innerHTML == 'more'){
          document.querySelector('button#seo-text-btn').innerHTML = 'less';
       }else{
         document.querySelector('button#seo-text-btn').innerHTML = 'more';
       }
    });
    
   });
}(jQuery));
