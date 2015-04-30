//Reference http://www.jssor.com/development/slider-with-caption-jquery.html
//Reference http://www.jssor.com/development/reference-ui-definition.html#captiondefinition
//Reference http://www.jssor.com/development/tool-caption-transition-viewer.html

jQuery(document).ready(function ($) {
    var _CaptionTransitions = [];
    _CaptionTransitions["L"] = { $Duration: 800, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
    _CaptionTransitions["R"] = { $Duration: 800, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };

    var options = {
        $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
        $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
            $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
            $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
            $AutoCenter: 0,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
            $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
        }
    };

    var jssor_slider1 = new $JssorSlider$("slider1_container", options);

    function ScaleSlider() {

        //reserve blank width for margin+padding: margin+padding-left (10) + margin+padding-right (10)
        var paddingWidth = 20;

        //minimum width should reserve for text
        var minReserveWidth = 150;

        var parentElement = jssor_slider1.$Elmt.parentNode;

        //evaluate parent container width
        var parentWidth = parentElement.clientWidth;

        if (parentWidth) {

            //exclude blank width
            var availableWidth = parentWidth - paddingWidth;

            //calculate slider width as 70% of available width
            var sliderWidth = availableWidth * 0.7;

            //slider width is maximum 600
            sliderWidth = Math.min(sliderWidth, 600);

            //slider width is minimum 200
            sliderWidth = Math.max(sliderWidth, 200);

            //evaluate free width for text, if the width is less than minReserveWidth then fill parent container
            if (availableWidth - sliderWidth < minReserveWidth) {

                //set slider width to available width
                sliderWidth = availableWidth;

                //slider width is minimum 200
                sliderWidth = Math.max(sliderWidth, 200);
            }

            jssor_slider1.$ScaleWidth(sliderWidth);
        }
        else
            window.setTimeout(ScaleSlider, 30);
    }
    ScaleSlider();

    $(window).bind("load", ScaleSlider);
    $(window).bind("resize", ScaleSlider);
    $(window).bind("orientationchange", ScaleSlider);
    //responsive code end
});