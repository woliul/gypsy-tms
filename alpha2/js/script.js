(function($) {
"use strict";
/*==============================
    Is mobile
==============================*/
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
}
$(document).ready(function () {
    

    var WindowWidth = $(window).width();
    
    Placeholder();

    BarsMenu();

    MenuResize();

    DropDown();

    SelectTag();

    FocusBlurInput();

    Calendar();

    OwlMagazine();

    PriceSlider();

    TimeSlider();

    DetailSlide();

    ScrollTable();

    CalendarChart();

    MemberReview();

    PostSlide();

    PageSlide();

    SelectTable();

    GoogleMapHotel();
    
    HotelLocationMap();

    GoogleMapContact();

    ajaxContactForm();

    PopupRoom();

    $(window).load(function (event) {
        $('#preloader').fadeOut(1000);
        MenuResponsive();
        HeaderScroll();
        BannerSlide();
        BannerVideoBackground();
        MenuArrow();
        SubMenuClick();
        parallaxInit();
    });

    $(window).resize(function (event) {
    	MenuResponsive();
        MenuResize();
    });

    $(window).scroll(function (event) {
        HeaderScroll();
        ScrollSiderBar();
    });

    $(window).on('load resize', function() {
        var windowHeight = $(window).height();
        $('.page-not-found, .page-comingsoon').css('min-height', windowHeight);


        var menuType = $('.navigation').data('menu-type'),
            windowWidth = window.innerWidth,
            windown_top = $(window).scrollTop();
        if (windowWidth < menuType && windown_top < 100) {
            $('.header')
                .css('background-color', 'transparent')
                .find('.logo')
                    .css({
                        'opacity': '0',
                        'visibility': 'hidden'
                    });
        }
    });

    /*===== Bars Click Menu =====*/
    function BarsMenu() {
        $('#bars').on('click', function () {
            if ($('.navigation').hasClass('nav-active')==false) {
                $('.navigation').addClass('nav-active');
            }
            $('body').css({
                'overflow': 'hidden'
            });
            return false;
        });

        $('#bars-close').on('click',function(){
            if ($('.navigation').hasClass('nav-active')) {
                $('.navigation').removeClass('nav-active');
            }
            $('body').css({
                'overflow': 'visible'
            });
            return false;
        });
        $('.nav-l')
            .closest('body')
            .find('.bars')
                .css({
                    'left': '15px',
                    'right': 'auto'
                });
        $('.nav-l')
            .closest('body')
            .find('#header .logo')
                .css('margin-left', '50px');  
    }

    /*===== Placeholder =====*/
    function Placeholder() {
        var $ph = $('input[type="search"], input[type="text"], input[type="url"], input[type="number"], input[type="email"], textarea');
        $ph.each(function() {
            var value = $(this).val();
            $(this).focus(function() {
                if ($(this).val() === value) {
                    $(this).val('');
                }
            });
            $(this).blur(function() {
                if ($(this).val() === '') {
                    $(this).val(value);
                }
            });
        });
    }
    
    /*===== Menu Arrow =====*/
    function MenuArrow(){

        $('#menu > li').each(function(){
            if($(this).find('> ul').length){

                $(this).append('<span><i class="fa fa-angle-down"></i></span>');

                $(this).find('li').each(function(){

                    if($(this).find('ul').length){

                        $(this).append('<span><i class="fa fa-angle-right"></i></span>');

                    }
                });
            }
        });

        $('.navigation ul li').each(function(){
            if($(this).find('ul').length){
                $(this).addClass('menu-parent');
            }
        });

    }

    function MenuResponsive() {
    	var menuType = $('.navigation').data('menu-type'),
            windowWidth = window.innerWidth,
            _Navigation = $('.navigation'),
            _Header = $('.header');
        if (windowWidth < menuType) {
            _Navigation
                .addClass('nav')
                .removeClass('nav-desktop')
                .closest('.header');
            _Header.next().css('margin-top', 0);
            $('.bars, .bars-close, .logo-banner').show();

            $('.navigation .sub-menu').each(function() {
                $(this)
                    .removeClass('left right');
            });
        } else {
            _Navigation
                .removeClass('nav')
                .addClass('nav-desktop')
                .closest('.header');
            _Header
                .css('background-color', '#fff')
                .find('.logo')
                    .css({
                        'opacity': '1',
                        'visibility': 'visible'
                    });
            _Header.next().css('margin-top', $('.header').height());
            $('.bars, .bars-close, .logo-banner').hide();

            $('.navigation .sub-menu').each(function() {
                var offsetLeft = $(this).offset().left,
                    width = $(this).width(),
                    offsetRight = (WindowWidth - (offsetLeft + width));
                if (offsetRight < 60) {
                    $(this)
                        .removeClass('left')
                        .addClass('right');
                } else {
                    $(this)
                        .removeClass('right');
                }
                if (offsetLeft < 60) {
                    $(this)
                        .removeClass('right')
                        .addClass('left');
                } else {
                    $(this)
                        .removeClass('left');
                }
            });
        }
    }
    
    /*===== ResizeMenu =====*/
    function MenuResize(){

        var $menu = $('#menu'),
            value = parseInt($menu.attr('data-responsive'), 10),
            resize_w = WindowWidth,
            $header = $('.header');

        if($menu.length) {

            if(value > 0 ) {

                if(value >= resize_w) {

                    if($header.length && $header.hasClass('header-responsive')==false ){
                        $header.addClass('header-responsive');
                    }

                } else {

                    if($header.length && $header.hasClass('header-responsive')==true){
                        $('.header').removeClass('header-responsive');
                    }

                    $('.menu-active').removeClass('menu-active');
                }
            }
            else{
                alert('false');
            }
        }
    }

    /*===== Sub Menu Click =====*/
    function SubMenuClick() {
        $('.navigation.nav .menu-parent').on('click',' > a',function() {
            var $this=$(this);
            if($this.parent().hasClass('active')==false) {
                $this.parent('li').addClass('active');
                $this.parent().find('>ul').slideDown();
            }
            else {
                $this.parent('li').removeClass('active');
                $this.parent('li').find('>ul').slideUp();
            }
            return false;
        });
    }

    /*===== DropDown =====*/
    function DropDown() {
    	var _dropdown = $('.dropdown-cn');
        _dropdown.each(function (index, value) {
            var $this = $(this);
            var text = $this.find('.current > a').text();
            $this.find('.dropdown-head').prepend(text);
        });

        _dropdown.on('click', function (event) {
            $(this).toggleClass('open');
            event.stopPropagation();
        });

        $(document).click(function () {
            _dropdown.removeClass('open');
        });
    }

    /*===== Tag Select =====*/
    function SelectTag() {
        $('.select select').change(function () {
            var $this = $(this),
                $span = $this.parent('.select').find('span'),
                textchange = $this.find('option:selected').text();

            $span.text(textchange);
        })

    }

    /*===== Focus and Blur Input Form Search =====*/
    function FocusBlurInput() {

        $('.form-field .field-input').on('keydown', function () {

            var $label=$(this).parent('.form-field').find('label');

            if($label.hasClass('forcus')==false){
                $label.addClass('focus');
            }

        }).on('keyup', function () {
            var $this=$(this);

            var $label=$this.parent('.form-field').find('label')

            if($this.val()!='') {

                if($label.hasClass('forcus')==false){
                    $label.addClass('focus');
                }
            }
            else{
                $label.removeClass('focus');
            }
        });

    }

    /*===== Calendar =====*/
    function Calendar() {
        $('.calendar-input,.caneldar').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wen', 'Thu', 'Fri', 'Sta']
        });
    }

    /*===== BANNER SLIDE =====*/
    function BannerSlide(){
        if($('#banner-slide').length>0){
            $('#banner-slide').owlCarousel({
                autoPlay: 3500,
                navigation: false,
                pagination: false,
                singleItem: true,
                mouseDrag : false,
                touchDrag : false,
                transitionStyle: 'fade',
                afterInit: function(el) {
                    var banner_h = el.closest('.banner').innerHeight();
                    el.find('.owl-item').each(function(index, el) {
                        var url = $(this).find('.banner-slide-item').data('src');
                        $(this).css({
                            'background-image': 'url('+url+')',
                            'height': banner_h
                        });
                    });
                },
                beforeUpdate: function(el) {
                    var banner_h = el.closest('.banner').innerHeight();
                    el.find('.owl-item').css('height', banner_h);
                }
            });
        }
    }

    /*===== BANNER VIDEO BACKGROUND =====*/
    function BannerVideoBackground() {
        if($("#banner-player").length) {
            $("#banner-player").YTPlayer({
                containment: '#banner-video',
                showControls: false,
                autoPlay:false, 
                mute:true, 
                startAt:0, 
                opacity:1
            });

            $('.icon-play').click(function(event) {
                if($(this).hasClass('fa-play')) {
                    $('#banner-player').YTPPlay();
                    $(this).removeClass('fa-play').addClass('fa-pause');
                } else {
                    $('#banner-player').YTPPause();
                    $(this).removeClass('fa-pause').addClass('fa-play');
                }
            });
        }
    }

    /*===== Owl Magazine=====*/
    function OwlMagazine() {
        if ($('#owl-magazine-ds').length) {
            $("#owl-magazine-ds").owlCarousel({
                autoPlay: false,
                slideSpeed: 500,
                navigation: false,
                pagination: false,
                mouseDrag: false,
                addClassActive: true,
                singleItem: true,
                afterAction:function(){
                    var $parent=$('#magazine-thum');
                    $parent.find('.active').removeClass('active');
                    $parent.find('.thumnail-item').eq(this.currentItem).addClass('active');
                }
            });

            var owl_magazine_data=$("#owl-magazine-ds").data('owlCarousel');

            $('#magazine-thum').on('click','.thumnail-item',function() {
                var $this=$(this);
                if($this.hasClass('active')==false){
                    var index=$(this).index();
                    $this.parent('#magazine-thum').find('.active').removeClass('active');
                    $this.addClass('active');
                    owl_magazine_data.goTo(index);
                }
            });
        }
    }

    /*===== Header Scroll =====*/
    function HeaderScroll(){
        var windown_top = $(window).scrollTop();
        if (windown_top > 100) {
            if ($('#header').hasClass('header-stick') == false) {
                $('#header').addClass('header-stick');
                $('.navigation.nav')
                    .closest('body')
                        .find('#header')
                            .find('.logo')
                                .css({
                                    'opacity': '1',
                                    'visibility': 'visible'
                                });
            }
        } else {
            $('#header').removeClass('header-stick');
            $('.navigation.nav')
                    .closest('body')
                        .find('#header')
                            .css('background-color', 'transparent')
                            .find('.logo')
                                .css({
                                    'opacity': '0',
                                    'visibility': 'hidden'
                                });
        }
        
    }

    /*=====  Price Slider =====*/
    function PriceSlider(){
        if($('.price-slider').length) {
            $(".price-slider").slider({
                min: 0,
                max: 1500,
                step: 1,
                range: true,
                create: function( event, ui ){

                    var $this=$(this),

                        values=$(this).find('.range').attr('value').split(',');

                    $this.slider("values", values );

                    $this.prepend("<label class='label-min'>$"+values[0]+"</label>");

                    $this.append("<label class='label-max'>$"+values[1]+"</label>");

                },
                slide: function( event, ui ) {

                    var $this=$(this),

                        values=ui.values;

                    $this.find('.label-min').text("$"+values[0]+"");

                    $this.find('.label-max').text("$"+values[1]+"");

                    $this.find('.range').attr('value',values);

                }
            });
        }
    }

    /*=====  Time Slider =====*/
    function TimeSlider(){
        if($('.time-slider').length) {

            $(".time-slider").slider({
            min: 0,
            max: 1440,
            step: 1,
            create:function(event,ui){
                var $this = $(this),

                    start = parseInt($this.attr('data-start'), 10),

                    end = parseInt($this.attr('data-end'), 10),

                    hours_start = Math.floor(start / 60);

                    if(isNaN(end)==false){

                        $this.slider("option","range", true);

                        $this.slider("values", [start,end]);

                        var hours_end=Math.floor(end / 60),

                            time_end=TimeSlide(hours_end,end - (hours_end*60),true),

                            time_start=TimeSlide(hours_start, start - (hours_start*60),true);

                        $this.prepend("<label class='label-min'>"+time_start+"</label>");

                        $this.append("<label class='label-max'>"+time_end+"</label>");

                        $this.find('.range').attr('value',time_start+','+time_end);

                    } else {
                        var time_start=TimeSlide(hours_start, start - (hours_start*60),false);

                        $this.slider("value",start);

                        $this.slider("option","range", "min");

                        $this.append("<label class='label-max'>"+time_start+"</label>");

                        $this.find('.range').attr('value',time_start);

                    }
                
                
            },
            slide: function(event, ui) {

                    var $this=$(this),

                    rager=$this.slider("option", "range"),

                    values, hours_start, hours_end, time_start, time_end;

                    if(rager==true) {

                        values=ui.values;

                        hours_start=Math.floor(values[0] / 60);

                        hours_end=Math.floor(values[1] / 60);

                        time_start=TimeSlide(hours_start, values[0] - (hours_start*60),true);

                        time_end=TimeSlide(hours_end,values[1] - (hours_end*60),true);

                        $this.find('.label-min').text(time_start);

                        $this.find('.label-max').text(time_end);

                        $this.find('.range').attr('value',time_start+','+time_end);

                    } else {

                        values=ui.value;

                        hours_start=Math.floor(values / 60);

                        time_start=TimeSlide(hours_start, values - (hours_start*60),false);

                        $this.find('.label-max').text(time_start);

                        $this.find('.range').attr('value',time_start);
                    }
                }
            });
        }
    }

    function TimeSlide(h,m,e){

        var hours=h,
            minutes=m,
            t='',
            time;
        if(e==true){
            if (hours.length == 1) 
                hours = '0' + hours;

            if (minutes< 10) 
                minutes = '0' + minutes;

            if (minutes == 0) 
                minutes = '00';

            if (hours >= 12) {
                if (hours == 12) {
                    hours = hours;
                    minutes = minutes;
                    t=' PM';
                } else {
                    hours = hours - 12;
                    minutes = minutes;
                    t=' PM';
                    if(hours==12 && minutes==0){
                        hours=11
                        minutes= 59;
                    }
                }
            } else {
                hours = hours;
                minutes = minutes;
                t=' AM';
            }
            if (hours == 0) {
                hours = 12;
                minutes = minutes;
                t=' AM';
            }
            time=hours + ":" + minutes + t;
        } else {

            if(hours==24)
            {
                if(minutes==0){
                    hours=23;
                    minutes='59';
                }
            }
            if (minutes<10) 
                minutes = '0' + minutes;

            t='m';

            time=hours+'h '+minutes +t;
        }

        return time;
    }

    /*===== Detail Slide =====*/
    function DetailSlide(){
        var slidelager = $("#slide-room-lg");
        var slidethumnail = $("#slide-room-sm");
         
          slidelager.owlCarousel({
            singleItem : true,
            autoPlay:false,
            navigation: false,
            pagination:false,
          });
         
          slidethumnail.owlCarousel({
            mouseDrag:false,
            navigation:true,
            navigationText:["<span class='prev-next-room prev-room'></span>","<span class='prev-next-room next-room'></span>"],
            itemsCustom: [[320, 3],[480, 5], [768, 6], [992, 7], [1200, 8]],
            pagination:false
          });
         
          $("#slide-room-sm").on("click", ".owl-item", function(e){
            e.preventDefault();
            if($(this).hasClass('synced')){
              return false;
            } else {
                $('.synced').removeClass('synced')
                $(this).addClass('synced')
              var number = $(this).data("owlItem");
              slidelager.data('owlCarousel').goTo(number);
            }
          });
    }

    /*===== Member Review =====*/
    function MemberReview(){
        $('.progress-rv').each(function (index,value){
            var datavalue=$(this).attr('data-value'),
                point=datavalue*10;
            $(this).append("<div style='width:"+point+"%'><span>"+datavalue+"</span></div>")
        })
    }

    /*===== Post Slide =====*/
    function PostSlide(){
        if($('.post-slide').length>0){
            $('.post-slide').owlCarousel({
                autoPlay: 8000,
                slideSpeed: 1000,
                navigation: true,
                pagination: false,
                singleItem: true,
                autoHeight: true,
                transitionStyle: 'fade',
                navigationText:["<i class='fa  fa-angle-left'></i>","<i class='fa  fa-angle-right'></i>"]
            });
        }
    }

    /*===== Page Slide =====*/
    function PageSlide(){
        if($('.page-slide').length>0){
            $('.page-slide').owlCarousel({
                autoPlay: 10000,
                slideSpeed: 1000,
                navigation: false,
                pagination: true,
                singleItem: true,
                autoHeight: true,
                navigationText:["<i class='fa  fa-angle-left'></i>","<i class='fa  fa-angle-right'></i>"]
            });
        }
    }
    
    function SelectTable(){
        $(".table-radio tbody tr").on('click',function() {
            var $this=$(this);
            if($this.hasClass('warning')==false){
                $this.parents('.table-radio').find('.warning').removeClass('warning');
                $this.addClass('warning')
                $this.find('.radio').prop('checked',true);
            }
        });
    }
    
    /*===== ScrollTable =====*/
    function ScrollTable(){
        
        if($('.scroll-table').length){
            if (isMobile.any()) {
            } else {
                $(".scroll-table").niceScroll({
                    touchbehavior:false,
                    background:"#e2e2e2",
                    cursoropacitymin:1,
                    cursorcolor:"#141414",
                    ursoropacitymax:0.6,
                    cursorwidth:5,
                    cursorborder:'0px solid #fff',
                    railalign:"right"
                });
            }
        }
    }

    /*===== Scroll SiderBar Fixed =====*/
    function ScrollSiderBar(){
        if(WindowWidth >=1200){
            var scroll=$(window).scrollTop(),
                top=$("#header").outerHeight();

            $('.detail-cn').each(function(index, value){

                var $this=$(this),

                    offset=$this.offset().top,

                    height=$this.outerHeight(),

                    $taget=$this.find('.scroll-heading'),

                    eheight=$taget.outerHeight(),

                    scroll_top=scroll-offset +top;

                    if(scroll_top>0){
                        if(height-scroll_top>=0 && (height- eheight) >scroll_top){
                            $taget.css({
                                'position': 'fixed',
                                'top': +top+'px'
                            });
                        }else{
                            $taget.css({'position':'static'});
                        }
                    }else{
                        $taget.css({'position':'static'});
                    }
            });

            $('.scroll-heading a').on('click',function(){
                var id=$(this).attr('href');
                $('html, body').stop().animate({
                    scrollTop: $(id).offset().top-70
                }, 1000);

                return false;
            });
        }
    }
   
    /* Calendar Chart*/
    function CalendarChart(){
        $('.bar-cl .fill').each(function(){
            var $this=$(this),
                price=$this.attr('data-price'),
                percent=(price/600)*100;
                $this.css({
                    'height':percent+'%'
                });
        });
        $('.ul-bar li').on('click','.bar-cl',function(){
            $(this).parents('.ul-bar').find('.active').removeClass('active');
            $(this).parents('li').addClass('active');
        })
    }
    
    /*===== Parallax=====*/
    function parallaxInit() {
        if(WindowWidth > 1199){
            if($('.bg-parallax').length) {
                $('.bg-parallax').each(function() {
                    $(this).parallax("50%", 0.1);
                });
            }
        }
    }

    /*===== Get Ajax =====*/
    function GetAjax(url,data){
        $.ajax({
          type: "GET",
          url: url,
          data: data,
          dataType: "html"
        })
        .done(function( msg ) {
            return msg;
        });
        return '';
    }

    /*===== Hotel Maps =====*/
    function GoogleMapHotel(){
        if($('#hotel-maps').length){
            var map;
            var bounds = new google.maps.LatLngBounds();

            var mapOptions = {
                zoom:16,
                scrollwheel:false,
                mapTypeId:google.maps.MapTypeId.ROADMAP
            };
                            
            // Display a map on the page
            map = new google.maps.Map(document.getElementById("hotel-maps"), mapOptions);
                
            // Multiple Markers
            var markers = [
                ['Bondi Beach', 41.0237, -73.701239],
                ['Coogee Beach',  41.005615, -73.69566551],
                ['Cronulla Beach', 40.9756737, -73.65614],
                ['Manly Beach', 40.973478, -73.8433],
                ['Maroubra Beach', 41.04579, -73.7464],
                ['Maroubra Beach', 41.0563, -73.75618],
                ['Maroubra Beach', 40.9442, -73.8554]
            ];
                                
            var infoWindowContent = [["\
                                        <div class='maps-item'>\
                                            <a href='#' class='maps-image'>\
                                                <img src='images/hotel/img-10.jpg' alt=''>\
                                            </a>\
                                            <div class='maps-text'>\
                                                <h2><a href='#'>The Cosmopolitan</a></h2>\
                                                <span>\
                                                    <i class='glyphicon glyphicon-star'></i>\
                                                    <i class='glyphicon glyphicon-star'></i>\
                                                    <i class='glyphicon glyphicon-star'></i>\
                                                    <i class='glyphicon glyphicon-star'></i>\
                                                    <i class='glyphicon glyphicon-star'></i>\
                                                </span>\
                                                <address>Great Cumberland Place, London W1H 7DL</address>\
                                                <p>My stay at cumberland hotel was amazing, loved the location, was close to all the major attraction.. <a href=''>view all 125 reviews</a>\
                                                </p>\
                                                <hr class='hr'>\
                                                <span class='price'>From-<ins>$345</ins>/night</span>\
                                            </div>\
                                        </div>\
                                    "]];

            var infoWindow= new google.maps.InfoWindow({maxWidth:600}),
                            marker, i, 
                            image = 'images/icon-maker.png';

            for( i = 0; i < markers.length; i++ ) {
                var beach = markers[i];
                var position = new google.maps.LatLng(beach[1], beach[2]);
                bounds.extend(position);
                marker = new google.maps.Marker({
                    position: position,
                    map: map,
                    icon: image,
                    title: beach[0]
                });
                
                // Allow each marker to have an info window    
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infoWindow.setContent(infoWindowContent[0][0]); 
                        infoWindow.open(map, marker);
                    }
                })(marker, i));

                // Automatically center the map fitting all markers on the screen
                map.fitBounds(bounds);
            }
        }
    }

    /*====== Google Maps Contact ======*/
    function GoogleMapContact() {

        if ($('#contact-maps').length) {
            var $map=$('#contact-maps'),
                mapZoom = $map.data('map-zoom'),
                lat = $map.data('map-latlng').split(',')[0],
                lng = $map.data('map-latlng').split(',')[1],
                mapContent = $map.data('map-content'),
                myCenter=new google.maps.LatLng(lat,lng);
            var mapProp = {
              center:myCenter,
              zoom:mapZoom,
              scrollwheel:false,
              mapTypeId:google.maps.MapTypeId.ROADMAP
              };

            var map=new google.maps.Map(document.getElementById("contact-maps"),mapProp);

            var marker=new google.maps.Marker({
              position:myCenter
            });

            marker.setMap(map);

            var infowindow = new google.maps.InfoWindow({
                content:mapContent,
                maxWidth: 200
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map,marker);
            });


        }
    }

    /*====== Hotel Location Map ======*/
    function HotelLocationMap() {

        if ($('#hotel-detail-map').length) {
            var $map=$('#hotel-detail-map'),
                lat = $map.data('latlng').split(',')[0],
                lng = $map.data('latlng').split(',')[1],
                myCenter=new google.maps.LatLng(lat,lng);
            var mapProp = {
              center:myCenter,
              zoom:15,
              scrollwheel:false,
              mapTypeId:google.maps.MapTypeId.ROADMAP
              };

            var map=new google.maps.Map(document.getElementById("hotel-detail-map"), mapProp);


        }
    }

    /*==============================
        Ajax contact form
    ==============================*/
    function ajaxContactForm() {
        if($("#contact-form").length > 0) {
          // Validate the contact form
          $('#contact-form').validate({
            // Add requirements to each of the fields
            rules: {
              name: {
                required: true,
                minlength: 2
              },
              email: {
                required: true,
                email: true
              },
              message: {
                required: true,
                minlength: 10
              }
            },

            // Specify what error messages to display
            // when the user does something horrid
            messages: {
              name: {
                required: "Please enter your first name.",
                minlength: $.format("At least {0} characters required.")
              },
              email: {
                required: "Please enter your email.",
                email: "Please enter a valid email."
              },
              message: {
                required: "Please enter a message.",
                minlength: $.format("At least {0} characters required.")
              }
            },

            // Use Ajax to send everything to processForm.php
            submitHandler: function(form) {
              $("#submit-contact").html("Sending...");
              $(form).ajaxSubmit({
                success: function(responseText, statusText, xhr, $form) {
                  $("#contact-content").slideUp(600, function() {
                    $("#contact-content").html(responseText).slideDown(600);
                    $(".submit-contact").html("Submit");
                  });
                }
              });
              return false;
            }
          });
        }
    }

    /*===== Popup Room =====*/
    function PopupRoom() {

        if($('.a-popup-room').length) {
            $('.a-popup-room').magnificPopup({
              type: 'ajax',
              mainClass: 'mfp-fade'
            });
        }
    }

});

})(jQuery);