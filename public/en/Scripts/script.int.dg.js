!window.jQuery && document.write(unescape('%3Cscript src="http://ajax.aspnetcdn.com/ajax/jquery/jquery-1.10.2.min.js"%3E%3C/script%3E')); 
!function(e,t,r){function n(){for(;d[0]&&"loaded"==d[0][f];)c=d.shift(),c[o]=!i.parentNode.insertBefore(c,i)}for(var s,a,c,d=[],i=e.scripts[0],o="onreadystatechange",f="readyState";s=r.shift();)a=e.createElement(t),"async"in i?(a.async=!1,e.body.appendChild(a)):i[f]?(d.push(a),a[o]=n):e.write("<"+t+' src="'+s+'" defer></'+t+">"),a.src=s}(document,"script",['Scripts/helpers.min.js'])

!function(e,t,r){function n(){for(;d[0]&&"loaded"==d[0][f];)c=d.shift(),c[o]=!i.parentNode.insertBefore(c,i)}for(var s,a,c,d=[],i=e.scripts[0],o="onreadystatechange",f="readyState";s=r.shift();)a=e.createElement(t),"async"in i?(a.async=!1,e.body.appendChild(a)):i[f]?(d.push(a),a[o]=n):e.write("<"+t+' src="'+s+'" defer></'+t+">"),a.src=s}(document,"script",['Scripts/animations.js'])

if(Page=='home'){
!function(e,t,r){function n(){for(;d[0]&&"loaded"==d[0][f];)c=d.shift(),c[o]=!i.parentNode.insertBefore(c,i)}for(var s,a,c,d=[],i=e.scripts[0],o="onreadystatechange",f="readyState";s=r.shift();)a=e.createElement(t),"async"in i?(a.async=!1,e.body.appendChild(a)):i[f]?(d.push(a),a[o]=n):e.write("<"+t+' src="'+s+'" defer></'+t+">"),a.src=s}(document,"script",['Scripts/fluid_dg.min.js'])
}
else{
}
$(window).load(function(e) {
$('.dd_next').click(function(){$(this).next().slideToggle('fast');$(this).toggleClass('dd_next_act');})
$('.dd_next2').click(function(){$(this).next().slideToggle('fast');$(this).toggleClass('dd_next_act2');})
$('.shownext').click(function(){$('.subdd').hide('fast'); $(this).next().slideToggle('fast');});
$(".scroll").click(function(event){event.preventDefault();$('html,body').animate({scrollTop:$(this.hash).offset().top-85}, 1000);});
$("#back-top").hide();$(function () {$(window).scroll(function () {if ($(this).scrollTop() > 100) {$('#back-top').fadeIn();} else {$('#back-top').fadeOut();}});$('#back-top a').click(function () {$('body,html').animate({scrollTop: 0}, 800);return false;});});
$(window).scroll(function(){if($(this).scrollTop()>0){$('.header_sec_rel').addClass('top2_fixer'); $('.top2_b').css({'display':'block'})}else{$('.header_sec_rel').removeClass('top2_fixer'); $('.top2_b').css({'display':'none'})}}) 
$("#owl-category").owlCarousel({autoplay:false,dots:true,nav:false,navText: [ '', '' ],items:1,responsive:{0:{items:1},479:{items:1},767:{items:1},991:{items:2},1200:{items:2}}});
$("#owl-testimonial").owlCarousel({autoplay:false,dots:true,nav:false,navText: [ '', '' ],items:1,responsive:{0:{items:1},479:{items:1},767:{items:1},991:{items:1},1200:{items:1}}});
$("#owl-port").owlCarousel({autoplay:true,dots:true,nav:false,navText: [ '', '' ],items:1,responsive:{0:{items:1},479:{items:2},767:{items:2},991:{items:3},1200:{items:3}}});
$("#owl-port1").owlCarousel({autoplay:true,dots:true,nav:false,navText: [ '', '' ],items:1,responsive:{0:{items:1},479:{items:2},767:{items:2},991:{items:3},1200:{items:3}}});
$("#feat").owlCarousel({autoplay:true,dots:false,nav:false,navText: [ '', '' ],items:1,responsive:{0:{items:1},479:{items:1},767:{items:1},991:{items:1},1200:{items:1}}});
$("#dtl").owlCarousel({autoplay:true,dots:true,nav:false,navText: [ '', '' ],items:1,responsive:{0:{items:1},479:{items:1},767:{items:1},991:{items:1},1200:{items:1}}});

$('.port_pop1').fancybox({iframe:{css:{width:'1000',height:'600'}}});

wow = new WOW({animateClass: 'animated', mobile: false, offset: 100 });wow.init();	
$(window).scroll(function(){if($(this).scrollTop()>0){$('header').addClass('top_fixer'); $('.top2_b').css({'display':'block'})}else{$('header').removeClass('top_fixer'); $('.top2_b').css({'display':'none'})}}) 
$('.opner').on('click',function(){var DG=$(this).data('navid');
$(DG).animate({'right':0},100)})
$('.closebtn').on('click',function(){var DG=$(this).data('navid');
$(DG).animate({'right':'-'+$(DG).innerWidth()},100)})
    
if(Page=='home'){
$(function(){$('#fluid_dg_wrap_1').fluid_dg({thumbnails: false,height:"40%",navigation:'false',minHeight:'120',fx:'simpleFade,scrollRight,scrollLeft',navigationHover:'false',playPause:'false',loader:'none',hover:'false',time:3000,onLoaded:function(){$('#Page_loader').fadeOut()}});})
}
});

$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

// jquery ready start
$(document).ready(function() {
	// jQuery code

	//////////////////////// Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });
    
	
}); //

function openNav(){
  document.getElementById("myNav").style.width = "60%";
}

function closeNav(){
  document.getElementById("myNav").style.width = "0";
}

//
$('.toggle').click(function() {
    $('#target').slideToggle('fast');
});


 $(document).mouseup(function (e) {
     var popup = $("#target");
     if (!$('.toggle').is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
         popup.hide(500);
     }
 });
 
 //
 $('.test').change(function(){
    if($(this).is(":checked")) {
        $('.del_address').addClass('del_address_act');
    } else {
        $('.del_address').removeClass('del_address_act');
    }
});


//register radio btn show hide dive
$("input:radio[name='toggler']").click(function() {
  $("#group1 .dn").hide().removeClass("shown");
  $("#" + $(this).val()).show();
  setTimeout(function() {
    $(".dn").addClass("shown");
  }, 0);
});


