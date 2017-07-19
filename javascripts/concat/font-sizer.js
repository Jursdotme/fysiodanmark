// Zoom fontsize
var defaultStart = 0;
if ($.cookie('font-size') !== '') {
   $('.scale-font-size').addClass($.cookie('font-size') );
   defaultStart = $.cookie('slider-value');
}


$(function() {
    var aFontsSizeArray = new Array('','font-size-1', 'font-size-2', 'font-size-3', 'font-size-4', 'font-size-5','font-size-6', 'font-size-7', 'font-size-8', 'font-size-9', 'font-size-10','font-size-11', 'font-size-12', 'font-size-13', 'font-size-14', 'font-size-15','font-size-16', 'font-size-17', 'font-size-18', 'font-size-19', 'font-size-20' );
    $('#slider').slider( {
        value: defaultStart,
        min: 0,
        max: 8,
        step: 1,
        slide: function(event, ui) {
            var sFontSizeArray = aFontsSizeArray[ui.value];
            $('#font_size').val(sFontSizeArray);
            for (index = 0; index < aFontsSizeArray.length; ++index) {
              $('.scale-font-size').removeClass( aFontsSizeArray[index] );
            }
            $('.scale-font-size').addClass(sFontSizeArray );
            $.cookie('font-size', sFontSizeArray, { expires: 7, path: '/' });
            $.cookie('slider-value', ui.value, { expires: 7, path: '/' });
            $.fn.matchHeight._update();
        }
    });
    $('#font_size').val((aFontsSizeArray[$('#slider').slider('value')]));
});
