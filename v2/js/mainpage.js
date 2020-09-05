//-----------gallery big pics--------------------------------//
function loadGalleryMessage(msg){
    console.log('CALLED:'+msg);
    $('#gallery_line').animate({ 'opacity': 0}, 300, function() {
        $('#gallery_line').html(msg);
    }).animate({ 'opacity': 1}, 300);
}
$(document).ready(function() {
    var galleryMsg = {
        "disability" :   "<h5>30 million</h5> Indian children with disabilities require direction and support to pursue their dreams",
        "diseased" :   "<h5>1 million</h5> Indian children affected with cancer suffer from physical and mental distress",
        "schools"   :   "<h5>1 million</h5> children in the country drop out of government schools due to lack of proper guidance and motivation",
        "orphan" :   "<h5>12 million</h5> Indian orphans are in need of emotional and social enlightenment ",
        "slums" :   "In India, <h5>81 percent</h5> of the slum residents have inadequate access to sanitation and <h5>25%</h5> of slum children do not go to school",
        "streets" :   "<h5>7000 Indians</h5> die of hunger every day"
    };
    $('#Grid').mixItUp({
        load: {
            filter: '.disability'
        },
        targetSelector: '.mix',
        controls: {
            activeClass: 'on'
        },
        callbacks: {//details from https://mixitup.kunkalabs.com/docs/#prop-callbacks-onMixStart
            onMixStart: function(state, futureState){
                loadGalleryMessage(galleryMsg[futureState.activeFilter.replace(".","")]);
            },
            onMixLoad: function(state){
                loadGalleryMessage(galleryMsg[state.activeFilter.replace(".","")]);
            }
        }

    });

    $('#Grid > li').click(function(e){loadImageBig(e);});
    $('#gallery_overlay').click(function(e){closeImageBig(e);});
    $('#v5_form_tick1').click(function(){
        $('.flipper').transition({
            perspective: '1000px',
            rotateY: '180deg'
        });
//        $('#v5_form_tick1').animate({opacity:0},300, function(){


//            $('#v5_form_tick1').hide();
//            $('#v5_form_tick2').show();
//        });
//        $('#v5_form_1').animate({opacity:0},300,function(){
//            $('#v5_form_1').hide();
//            $('#v5_form_2').show();
//            $('#v5_form_2').animate({opacity:1},300);
//        });
//        $('#v5_form_text').animate({opacity:0},300,function(){
//            $('#v5_form_text').html("Just few last details and we are done");
//            $('#v5_form_text').animate({opacity:1},300);
//        });

    });
    $('#v5_form_tick2').click(function(){
        $('#form_contmain').animate({opacity:0},300, function () {
            $('#form_contmain').hide();
            $('#form_thanks').show();
            $('#form_thanks').animate({opacity:1},300);
            formSubmit();
        });

    });
//    $('#sampleForm').submit(function(e){
//        e.preventDefault();
////        formSubmit(this);
//    });
    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').click( function(e) {
        console.log("CLICKED");
        event.preventDefault();
        var top = $($(this).attr('href')).offset().top;
        //console.log($(e.target));
        //console.log("attr:"+$(this).attr('href'));
        //console.log($($(this)).attr('href'));
        //console.log("TOP"+$($(this)).offset().top);
        //console.log("TOP:"+$($anchor).top());
        $('html, body').stop().animate({
            scrollTop: top-50//offset to couteract overshoot
        }, 1500, 'easeInOutExpo');
        //console.log(""+$($anchor.attr('href')));

    });



});//document.ready
function formSubmit(){
    $('#form1_name').val();
    var data = [
        {"name":"name","value":$('#form1_name').val()},
        {"name":"email","value":$('#form2_email').val()},
        {"name":"number","value":$('#form2_number').val()},
        {"name":"interest","value":$('#form2_interest').val()}
    ]


    $.ajax({
//            url:'http://localhost:8888/wethechange/',
        url:'http://feedback.prashantmaurice.in/wethechange/',
        jsonp: "callback",
        contentType: "application/json;charset=utf-8",
        dataType: 'jsonp',
        crossDomain : true,
        data:{formdata:data},
        success:function(data){
            console.log("SICCESSFULLY SUBMITTED"+JSON.stringify(data));
        }
    });
}

function loadImageBig(e){
    $('#gallery_overlay').show();
    $('#gallery_backdrop').show();
    var src = $(e.currentTarget).data("big");
    $('#gallery_overlay_img').attr('src',"gallery/big"+src);
}
function closeImageBig(){
    $('#gallery_overlay').hide();
    $('#gallery_backdrop').hide();
}
function form1_change(val){
    if(val.length>0) $('#v5_form_tick1').animate({opacity:1},300);
    else $('#v5_form_tick1').animate({opacity:0},300);
}
function form2_change(){
    if(($('#form2_email').val().length>0)&($('#form2_number').val().length>0))
        $('#v5_form_tick2').animate({opacity:1},300);
    else $('#v5_form_tick2').animate({opacity:0},300);
}



//$( window ).resize(function() {
//    $('#reel').css({
//  	//	'background-position-x': '0'
//	});
//    //alert('asfag');
//});
//$(function()  {   //customers reel
// var cars = $('#reel');
//	 var i=0;
//	 var temp=0;
//	 var temp2=0;
//	var loop = function() {
//			widthx=$('#reel').width()/3;
//			temp=(widthx*i)+($('#reel').width()*temp2);
//			cars.delay(1000).animate({ 'background-position-x': temp}, 500, function() {
//				i++;
//				if(i>2){
//					   // $('#reel').css({'background-position-x': '0'	});
//					i=0;
//					temp2++;
//					}
//				loop();
//	  		});
//	};
//	loop();
//});
//$(function ()  {
//	     $("#test5").popover();  //enable popovers on myskills section
//});
$(function ()  {
    $("#pop1").popover();  //enable popovers on myskills section
    $("#pop2").popover();
    $("#pop3").popover();
    $("#pop4").popover();
});

