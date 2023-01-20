
$(document).on('click',function(e){
    if(!$(e.target).closest('nav').length)
    $(".wsmenu-list >li").removeClass('active');
    if(!$(e.target).closest('.service-items-outer').length)
        $('.services-wrapper .service-items-outer').removeClass('active');

}).on('click',".wsmenu-list >li >a",function(e){
    e.stopPropagation();
    if($(this).closest('li').hasClass('has-sumenu'))
    e.preventDefault();
    $(".wsmenu-list >li").removeClass('active');
    $(this).parent('li').addClass('active');

}).on('click',".wsmenu-list .wsmegamenu a",function(e){  
    e.stopPropagation();  
    $(".wsmenu-list >li").removeClass('active');
    
}).on('click',".subscribing_form.active button",function(e){
    e.preventDefault();
    $(this).closest('.subscribing_form').removeClass('active');

}).on('click',".subscribing_form:not(.active) button",function(e){ 

var newVal=$(this).closest('.subscribing_form').find('input').val(); 
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,8})$/;  
    if(!newVal){
        e.preventDefault();
    }
    else if(!reg.test(newVal)){
        e.preventDefault();
    }
    else{
        ///go
    }
}).on('click','form[name="dQuotation"] button',function(){
    if(validateFrom($(this).closest('form')))
    {
        console.log('submited!!')
    }
})
.on('click','form[name="cQuotation"] button',function(){
    if(validateFrom($(this).closest('form')))
    {
        console.log('submited!!')
    }
})
.on('focus','form[name="dQuotation"] .form-control,form[name="cQuotation"] .form-control',function(){
    $(this).closest('form').find('.errorMsg').html('');
})
.on('click','a[data-target="#dQuotation"]',function(){
    $('form[name="dQuotation"] input[name="product"]').val($(this).attr('data-project'))
})

$(window).on('load', function(){

    var count = 0;
    $('body #wsnavtoggle.wsanimated-arrow').on('click', function(e){
        count++;
        e.stopPropagation();
        $('body').toggleClass('wsactive');
        if(count == 1){
            $('body .wsmenu li.has-sumenu').prepend(
               $('<span />', {'class': 'wsmenu-click'}).append(
                    $('<i />', {'class': 'wsmenu-arrow'})
               )
            );
            $('body .wsmenu .has-sumenu').on('click', function(e){
                e.stopPropagation();
                $(this).children('.wsmegamenu').slideToggle();
            })
            var $listAnchor = $('body .wsmenu .has-sumenu .wsmegamenu .link-list li a');
            $listAnchor.on('click', function(e){
                
                if($(this).attr('data-toggle') == "modal"){
                    e.stopPropagation();
                    let href= $(this).attr('href');
                    // console.log($(href));
                    $(href).modal('show');
                }
            })
         
        }
        // jQuery(_0xf488[5])[_0xf488[10]](_0xf488[9]);
    });
    
})



$(document).ready(function () {
   setTimeout(function(){
    $('.animate-first,.animate-second').removeClass('d-none');
   },2000);
    $('iframe').ready(function(){
        // alert('ifram')
        if($(window).width() <= 1024){
            $('header.fixed-header').removeClass('d-none');
        }   
    });

    $(window).on('resize', function(){
        setTimeout(function(){
            if($(window).width() <= 1024){
                $('header.fixed-header').removeClass('d-none');
            }
        },100)
    })
    // setTimeout(function(){
    //     $('#comp-container').removeClass('load');
    //     $('.loader-section').fadeOut();
       
       
    // }, 3000);

    $('#mainNav a').on('click', function(e) {
        e.preventDefault(); // prevent hard jump, the default behavior
        
        var target = $(this).attr("href"); // Set the target as variable
        $(this).siblings().removeClass("active");
            $(this).addClass('active');
        
        // perform animated scrolling by getting top-position of target-element and set it as scroll target
        $('html, body').stop().animate({
        scrollTop: $(target).offset().top - 50
        }, 600);
        return false;
    });
    $('.scroll-link').on('click', function(e) {
        e.preventDefault(); // prevent hard jump, the default behavior
        
        var target = $(this).attr("href"); // Set the target as variable
        $(this).siblings().removeClass("active");
            $(this).addClass('active');
        
        // perform animated scrolling by getting top-position of target-element and set it as scroll target
        $('html, body').stop().animate({
        scrollTop: $(target).offset().top
        }, 600, function() {
        
        location.hash = target; //attach the hash (#jumptarget) to the pageurl
        });
        return false;
    });


    $(window).scroll(function () {
        if ($(window).scrollTop() >= 100) {
            $(".fixed-header").addClass("fixed");
            $(".tabs-section").addClass("fixed-two")
        }
        else {
            $(".fixed-header").removeClass("fixed");
            $(".tabs-section").removeClass("fixed-two");
        }
    });
        
    
    $('[data-toggle="tooltip"]').tooltip();


    let headerAnimate = false;

    headerAnimation(headerAnimate);

    $('.product-content').fadeOut();
    
    $('.product-content .col-md-4').on('mouseenter', function(){
        $(this).siblings().addClass('blur');
    })
    $('.product-content .col-md-4').on('mouseleave', function(){
        $(this).siblings().removeClass('blur');
    })


    $('#services').fadeOut(); 

    $('.mouse-down > button').on('click', function(){
        $('html,body').animate({
                scrollTop: $('.product').outerHeight()
        }, 600);
        intialClipState();
        $(document).find('body').off("mousemove");

    })

    // $(window).on('scroll', function(){
    //     if($(this).scrollTop() == 0){
    //         $('.product-title, .services-title').removeClass('position-absolute');
    //     } else{
    //         $('.product-title, .services-title').addClass('position-absolute');
    //     }
    // })

    $('.drag-signature').on('mouseover', function () {
        $('.reset-btn').removeClass('show');
        $(this).addClass('mouse-over active');
        setTimeout(() => {
            headerAnimate = true;
            headerAnimation(headerAnimate);
            $('.drag-signature').removeClass('mouse-over');
            // $('.drag-signature').empty();
        }, 1000);

    })

    var proServices = $(document).find('.product, .services')
    proServices.on('click', function (e) {
        // console.log($(e.target).closest('.product').length , $(e.target).closest('.services').length)
        // console.log(e.pageX)
        // alert(e.pageX)
        // alert(e.pageY)
        // console.log($(e.target).attr('class'),'errrorrr')
        $(document).find('body').off("mousemove");
        clickEffect(e);
        var clipPath;
        var card = $('.product');
        $('.product-title, .services-title').addClass('d-none').removeClass('position-absolute');
        if($('.drag-signature').is('.active')){
            // alert('active')
            // alert(e.pageX > 500)
            if($('.product').attr('style').split('polygon')[1].split(',')[2].split(' ')[0].split('px')[0] <= 650 && 
            $('.product').attr('style').split('polygon')[1].split(',')[2].split(' ')[1].split('px')[0] <= 305
            ){ 
                // alert('product');
                clipPath = productClick();
                $(this).addClass('view');   
                $('.product').removeClass('view');
            } else{
                // alert('servicess');
                 clipPath = servicesClick();
                 $(this).addClass('view'); 
                 $('.services').removeClass('view');   
            }

        } else{
            if($(e.target).attr('class') == "services") {
                clipPath = productClick();
                $(this).addClass('view');   
                $('.product').removeClass('view');
            } else if($(e.target).attr('class') == "product") {   
                clipPath = servicesClick();
                $(this).addClass('view'); 
                $('.services').removeClass('view');     
            } 
        }
        

        card.attr(
            "style",
            "transition: all linear 1s;"+            
            clipPath,
        ).removeClass('mouse-over');
       
        $(document).find('body').off("mousemove");
        $('.drag-signature').removeClass('mouse-over active').hide();
        $('.reset-btn').addClass('show');
       
        $('.mouse-down').fadeOut(100);
      
        // $('.img-comp-container').removeClass('show-logo');


    });

    $('.reset-btn').on('click', function () {
        let card = $('.product');
        intialClipState();
        card.find('h1, h2').show().removeClass("animate-center");
        $('.services h1,.services h2').removeClass("animate-reveal");
        $(this).removeClass('show');
        $('.product-title, .services-title').removeClass('d-none');
        $('.services h1, .services h2').removeClass("animate-reveal");
        $('.product h1, .product h2').removeClass("animate-reveal");
        $('.drag-signature').show().removeClass('mouse-over');
        $('[data-toggle="tooltip"]').tooltip('hide');
        $('.logo-container').removeClass('show-logo');
        $('.mouse-down').slideToggle();
        $('.product-content').fadeOut();
        $('#services').fadeOut();
        $('.services, .product').removeClass('view');
        // $('.services, .product').removeClass('mobile-view');
             
        // $('.img-comp-container').addClass('show-logo');
        // $('.img-comp-container').slideToggle();
    })
    $('.product-box').on('click', function(e){
        clickEffect(e);
    })
})

setTimeout(function(){
    if(document.getElementById('comp-container'))
    {document.getElementById('comp-container').classList.add('load');
        startLoop(2500);}
},10)
  


//functions //
// loader loop
function startLoop(setinterval){
    document.getElementById('comp-container').classList.add('infinite');
    setInterval(function(){
        document.getElementById('comp-container').classList.toggle('active');
    },setinterval)
}


function productClick(){
    $('.logo-container').addClass('show-logo').find('.logo').eq(0).show();
    $('.logo-container').addClass('show-logo').find('.logo').eq(1).hide();
    $('#services').show();
    $('.product-content').slideUp('slow');
    clipPath = "clip-path: polygon(0 0, 0% 0, 0% 0, 0 0%)";
    $('.product h1, .product h2').removeClass("animate-reveal");
    $('.services h1, .services h2').addClass("animate-reveal");
    setTimeout(function(){
        $('html,body').animate({
            scrollTop: $('.product').outerHeight()
        }, 600);
    },10000);
    return clipPath;

}

function servicesClick(e){

    clipPath = "clip-path: polygon(0 0,100% 0, 100% 100%,0 100%)";


    $('.logo-container').addClass('show-logo').find('.logo').eq(1).show();
    $('.logo-container').addClass('show-logo').find('.logo').eq(0).hide();
    $('.product h1, .product h2').addClass("animate-reveal");
    $('.services h1, .services h2').removeClass("animate-reveal");

    $('#services').hide();
    $('.product-content').fadeIn('slow', function(){
        var lists = $('.product-content .card');    
        var delay = 0;
        for(let list of lists){
            $(list).addClass('scale-up');
            list.style.animationDelay = delay + 's';
            delay += 0.3;
        }
    });


     setTimeout(function(){
        $('html,body').animate({
            scrollTop: $('.services').outerHeight()
        }, 600);
        
    },10000);

    return clipPath;
}

function headerAnimation(headerAnimate) {
    if (headerAnimate) {
        let card = $('header.product'),
            cardTitle = card.find('h1, h2');

        $(document).find('body').on("mousemove", function (e) {
            let ax = e.pageX + 'px';
                ay = e.pageY + 'px',
                    tX = $(window).innerWidth() - (e.pageX) + 'px',
                    tY = $(window).innerWidth() - (e.pageX) + 'px';
            
            // console.log(e.pageX, e.pageY);
            // console.log(ax, ay)
            card.attr(
                "style",
                "clip-path: polygon(0 0,100% 0," + ax + " " + ay + ",0 100%)"
            ).addClass('mouse-over');
        //    console.log(e.pageX, e.pageY)


            // $('.img-comp-container').removeClass('show-logo');
            // logoEffects(e.pageX, e.pageY);


            // cardTitle.attr(
            //  "style",
            //  // "transform: translate("+$(window).innerWidth()/2+ 'px'+", "+$(window).innerWidth() / 2+ 'px'+")"
            //  // "transform: translate("+$(window).innerWidth()/2+ 'px'+", "+$(window).innerWidth() / 2+ 'px'+")"
            // )
            $('.drag-signature').removeClass('mouse-over');

        });
    }
}

function logoEffects(x, y){
    console.log(x > 600)
    if(x  > 600){
        $('.img-comp-img.img-comp-overlay').animate({width: "350px" });
     } else{
        $('.img-comp-img.img-comp-overlay').animate({width: "0px" });
     }
}

function clickEffect(e){
    var targetEl = e.target;
        var inkEl = targetEl.querySelector('.ink');

        if (inkEl) {
            inkEl.classList.remove('animate');
        }
        else {
            inkEl = document.createElement('span');
            inkEl.classList.add('ink');
            inkEl.style.width = inkEl.style.height = Math.max(targetEl.offsetWidth, targetEl.offsetHeight) + 'px';
            targetEl.appendChild(inkEl);
        }
        inkEl.style.left = (e.offsetX - inkEl.offsetWidth / 2) + 'px';
        inkEl.style.top = (e.offsetY - inkEl.offsetHeight / 2) + 'px';
        inkEl.classList.add('animate');
}

function intialClipState(){
    let card = $('.product');
    card.attr(
        "style",
        "transition: all linear 1s;"+  
        "polygon(0 0,100% 0,100% calc(100% - 100vh),0 100%)"
    );
}

if($('.contact-form').length){
    // var position=[26.867840,80.996170];
    // var position=[26.863461,80.9943857];
    // var position=[26.8636374,80.994388];
    // var position=[26.863637,80.996577];
    // var position=[26.863477, 80.996558];
    // var position=[26.8634622,80.9960272];
    var position=[26.863464, 80.996574];
    google.maps.event.addDomListener(window, 'load', initialize);	
}

  
function initialize() {
    var myOptions= {
        zoom: 17, 
        scaleControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    // console.log(position)
    map=new google.maps.Map(document.getElementById('googlemaps'), myOptions);
    latLng=new google.maps.LatLng(position[0], position[1]);
    map.setCenter(latLng);
    // console.log(latLng)
    // console.log('steve latLng')
    marker=new google.maps.Marker({
        position: latLng,
        map: map, 
        draggable: false,
        animation: google.maps.Animation.DROP
    });
}	
function updateMenuLink(){
$('.wsmegamenu li').removeClass('active highlight');
var path = window.location.pathname.split("/").pop();
if ( path == '' ) {
path = 'index.html';
}
$('.wsmenu-list a').each(function(){
var target=$(this);
var newHref=$(this).attr('href');
if(newHref == path)
{
target.closest('li').addClass('active');
target.closest('.wsmegamenu').closest('li').addClass('highlight');
}
})        
}; 
function Filevalidation(id) { 
const fi = document.getElementById(id); 
// Check if any file is selected. 
if (fi.files.length > 0) { 
for (const i = 0; i <= fi.files.length - 1; i++) { 
const fsize = fi.files.item(i).size; 
const file = Math.round((fsize / 1024)); 
// The size of the file. 
if (file >= 5120) { 
    alert("File too Big, please select a file less than 5mb");
    fi.value='';
} 
} 
} 
} 
function validateFrom($form){
    var phoneTest = /^((\d){10,})$/;
    var emailTest = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,8})$/;
    $errorBlock=$form.find('.errorMsg')
    var error =true;
    $form.find('.required').each(function(){
        var newVal=$(this).val();
        // console.log(newVal)
        if(!newVal)
        {
            $errorBlock.html('<span>All fields are required!</span>');
            error= false;
            return false;
        }
        newVal=newVal.trim();
        if(!newVal)
        {
            $errorBlock.html('<span>All fields are required!</span>');
            error= false;
            return false;
        }
        var field=$(this).attr('name');
        if(field == 'name')
        {
            if(newVal.length < 2)
            {
                $errorBlock.html('<span>Please enter valid name!</span>');
                error= false;
                return false;
            }
        }
        if(field == 'email')
        {
            if(!emailTest.test(newVal))
            {
                $errorBlock.html('<span>Please enter valid email!</span>');
                error= false;
                return false;
            }
        }
        if(field == 'phone')
        {
            if(!phoneTest.test(newVal))
            {
                $errorBlock.html('<span>Please enter valid phone!</span>');
                error= false;
                return false;
            }
        }
        if(field == 'message')
        {
            if(newVal.length < 2)
            {
                $errorBlock.html('<span>Please enter valid message!</span>');
                error= false;
                return false;
            }
        }
        if(field == 'product')
        {
            if(newVal.length < 1)
            {
                $errorBlock.html('<span>Something went wrong!</span>');
                error= false;
                return false;
            }
        }
    })
    return error;
}
window.onload=function(){
  updateMenuLink();
}