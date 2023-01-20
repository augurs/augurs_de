$(document).ready(function () {
    // $('.logo-container').addClass('show-logo');
    $('html,body').animate({
        scrollTop: 0
    }, 600);


    
    $('[data-toggle="tooltip"]').tooltip();

    let headerAnimate = false;

    headerAnimation(headerAnimate);

    $('.product-content').fadeOut();

    $('.mouse-down > button').on('click', function(){
        $('html,body').animate({
                scrollTop: $('.product').outerHeight()
        }, 600);
        intialClipState();
        $(document).find('body').off("mousemove");

    })

    $(window).on('scroll', function(){
        if($(this).scrollTop() == 0){
            $('.product-title, .services-title').removeClass('position-absolute');

        } else{
            
            $('.product-title, .services-title').addClass('position-absolute');
        }
    })

    $('.drag-signature').on('mouseover', function () {
        $('.reset-btn').removeClass('show');
        $(this).addClass('mouse-over');
        setTimeout(() => {
            headerAnimate = true;
            headerAnimation(headerAnimate);
            $('.drag-signature').removeClass('mouse-over');
            // $('.drag-signature').empty();
        }, 1000);

    })

    var proServices = $(document).find('.product, .services')
    proServices.on('click', function (e) {
        clickEffect(e);
        var card = $('.product');
        $('.product-title, .services-title').addClass('d-none').removeClass('position-absolute');
        if (e.pageX > 700) {
            var clipPath = "clip-path: polygon(0 0,100% 0, 100% 100%,0 100%)";
            $('.product h1, .product h2').addClass("animate-reveal");
            $('.services h1, .services h2').removeClass("animate-reveal")
            setTimeout(function(){
                $('html,body').animate({
                    scrollTop: $('.product').outerHeight()
                }, 600);
                $('.product-content').fadeIn('slow', function(){
                    var lists = $('.product-content .card');	
                    var delay = 0;
                    for(let list of lists){
                        $(list).addClass('scale-up');
                        list.style.animationDelay = delay + 's';
                        delay += 0.3;
                    }
                });
            },1000);
            
        } else {
            $('.product-content').slideUp('slow')
            clipPath = "clip-path: polygon(0 0, 0% 0, 0% 0, 0 0%)";
            $('.product h1, .product h2').removeClass("animate-reveal");
            $('.services h1, .services h2').addClass("animate-reveal");
        }

        card.attr(
            "style",
            "transition: all linear 1s;"+            
            clipPath,
        );
       
        $(document).find('body').off("mousemove");
        $('.drag-signature').removeClass('mouse-over').hide();
        $('.reset-btn').addClass('show');
       
        $('.logo-container').addClass('show-logo');
        $('.mouse-down').fadeOut(100);



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
    })
    $('.product-box').on('click', function(e){
        clickEffect(e);
    })
})




//functions //
function headerAnimation(headerAnimate) {
    if (headerAnimate) {
        let card = $('header'),
            cardTitle = card.find('h1, h2');

        $(document).find('body').on("mousemove", function (e) {
            let ax = e.pageX + 'px';
            ay = e.pageY + 'px',
                tX = $(window).innerWidth() - (e.pageX) + 'px',
                tY = $(window).innerWidth() - (e.pageX) + 'px';
            // console.log(e.pageX, e.pageY)  
            card.attr(
                "style",
                "clip-path: polygon(0 0,100% 0," + ax + " " + ay + ",0 100%)"
            );

            // cardTitle.attr(
            // 	"style",
            // 	// "transform: translate("+$(window).innerWidth()/2+ 'px'+", "+$(window).innerWidth() / 2+ 'px'+")"
            // 	// "transform: translate("+$(window).innerWidth()/2+ 'px'+", "+$(window).innerWidth() / 2+ 'px'+")"
            // )
            $('.drag-signature').removeClass('mouse-over');

        });
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

