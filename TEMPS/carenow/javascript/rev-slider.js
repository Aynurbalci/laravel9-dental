var RevSlider=function(){"use strict";return{init:function(){var e;(e=jQuery)(document).ready(function(){null==e("#rev-slider1").revolution?revslider_showDoubleJqueryError("#rev-slider1"):e("#rev-slider1").show().revolution({jsFileLocation:"includes/rev-slider/js/",sliderType:"standard",sliderLayout:"auto",fullWidth:"on",dottedOverlay:"none",delay:6e3,navigation:{keyboardNavigation:"on",keyboard_direction:"horizontal",mouseScrollNavigation:"off",onHoverStop:"off",touch:{touchenabled:"on",swipe_threshold:75,swipe_min_touches:1,drag_block_vertical:!1,swipe_direction:"horizontal"},arrows:{style:"custom",enable:!1,hide_onmobile:!0,hide_under:768,hide_onleave:!0,tmp:"",left:{h_align:"left",v_align:"center",h_offset:0,v_offset:0},right:{h_align:"right",v_align:"center",h_offset:0,v_offset:0}},bullets:{enable:!0,hide_onmobile:!0,style:"custom",hide_onleave:!0,direction:"horizontal",h_align:"center",v_align:"bottom",h_offset:0,v_offset:30,space:8,tmp:""}},viewPort:{enable:!0,outof:"pause",visible_area:"80%"},responsiveLevels:[2220,1183,975,750],gridwidth:[1170,970,760,320],gridheight:[730,600,500,500],lazyType:"smart",parallax:{type:"scroll",origo:"enterpoint",speed:400,levels:[5,10,15,20,25,30,35,40,45,50]},shadow:0,spinner:"off",stopLoop:"off",stopAfterLoops:-1,stopAtSlide:-1,shuffle:"off",autoHeight:"off",fullScreenOffsetContainer:".rev-slider-offset",hideThumbsOnMobile:"off",hideSliderAtLimit:0,hideCaptionAtLimit:0,hideAllCaptionAtLilmit:0,debugMode:!1,fallbacks:{simplifyAll:"off",nextSlideOnWindowFocus:"off",disableFocusListener:!1}})}),function(){var e=jQuery;e(document).ready(function(){null==e("#rev-slider1").revolution?revslider_showDoubleJqueryError("#rev-slider2"):e("#rev-slider2").show().revolution({jsFileLocation:"includes/rev-slider/js/",sliderType:"standard",sliderLayout:"auto",fullWidth:"on",dottedOverlay:"none",delay:6e3,navigation:{keyboardNavigation:"on",keyboard_direction:"horizontal",mouseScrollNavigation:"off",onHoverStop:"off",touch:{touchenabled:"on",swipe_threshold:75,swipe_min_touches:1,drag_block_vertical:!1,swipe_direction:"horizontal"},arrows:{style:"custom",enable:!0,hide_onmobile:!0,hide_under:768,hide_onleave:!0,tmp:"",left:{h_align:"left",v_align:"center",h_offset:120,v_offset:0},right:{h_align:"right",v_align:"center",h_offset:120,v_offset:0}},bullets:{enable:!0,hide_onmobile:!0,style:"custom",hide_onleave:!0,direction:"horizontal",h_align:"center",v_align:"bottom",h_offset:0,v_offset:30,space:8,tmp:""}},viewPort:{enable:!0,outof:"pause",visible_area:"80%"},responsiveLevels:[2220,1183,975,750],gridwidth:[1170,970,760,320],gridheight:[730,600,500,500],lazyType:"smart",parallax:{type:"scroll",origo:"enterpoint",speed:400,levels:[5,10,15,20,25,30,35,40,45,50]},shadow:0,spinner:"off",stopLoop:"off",stopAfterLoops:-1,stopAtSlide:-1,shuffle:"off",autoHeight:"off",fullScreenOffsetContainer:".rev-slider-offset",hideThumbsOnMobile:"off",hideSliderAtLimit:0,hideCaptionAtLimit:0,hideAllCaptionAtLilmit:0,debugMode:!1,fallbacks:{simplifyAll:"off",nextSlideOnWindowFocus:"off",disableFocusListener:!1}})})}()}}}();$(document).ready(function(){RevSlider.init()});