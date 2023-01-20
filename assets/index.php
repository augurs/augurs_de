<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url() ?>assets/images/favicon.png">        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" />
        <title>Dark&Day</title>
    </head>
    <body>
        <div class="d-flex justify-content-between background-bgs">
            <!-- //left sides  -->
            <aside class="d-flex flex-column">
                <ul class="slide-up">

                </ul>
            </aside>
            <!-- //Center Sections -->
            <section class="d-flex flex-column justify-content-between section-bg">
                <header class="d-flex justify-content-center">
                    <div class="col pl-2 left">
                        <div class="kindle-logo pt-2  mb-1">
                            <img src="<?= base_url() ?>assets/images/kindle-logo.png" class="img-fluid" />
                        </div>
                        <div class="owl-carousel">
                            <?php 
                                if(!empty($category_images)) {
                                    foreach ($category_images as $key => $value) {
                                        if($value['category'] == 1 && $value['status'] == 1) {
                                            $category = $value['category'] == '1' ? 'amazon' : 'audible';
                                            $category_images_show = explode(',', $value['category_images']);
                                            if(count($category_images_show)) {
                                                foreach ($category_images_show as $key => $category_image) {
                            ?>
                                <div><img src="<?= base_url('upload/'.$category.'/'.$category_image) ?>" /></div>
                            <?php } } } else { ?>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-1.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-5.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-6.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-7.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-13.jpeg" /></div>
                            <?php } } } else { ?>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-1.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-5.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-6.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-7.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-13.jpeg" /></div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col center justify-content-center">
                        <div class="text-center">
                            <img src="<?= base_url() ?>assets/images/logo.png" class="img-fluid logo" alt="">
                        </div>
                    </div>
                    <div class="col pr-2 right">
                        <div class="kindle-logo pt-2  mb-1">
                            <img src="<?= base_url() ?>assets/images/audiable.png" class="img-fluid" />
                        </div>
                        <div class="owl-carousel">
                            <?php 
                                if(!empty($category_images)) {
                                    foreach ($category_images as $key => $value) {
                                        if($value['category'] == 2 && $value['status'] == 1) {
                                            $category = $value['category'] == '1' ? 'amazon' : 'audible';
                                            $category_images_show = explode(',', $value['category_images']);
                                            if(count($category_images_show)) {
                                                foreach ($category_images_show as $key => $category_image) {
                            ?>
                                <div><img src="<?= base_url('upload/'.$category.'/'.$category_image) ?>" /></div>
                            <?php } } } else { ?>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-1.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-5.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-6.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-7.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-13.jpeg" /></div>
                            <?php } } } else { ?>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-1.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-5.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-6.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-7.jpeg" /></div>
                                <div><img src="<?= base_url() ?>assets/images/bgs/thumb-13.jpeg" /></div>
                            <?php } ?>
                        </div>
                    </div>
                </header>
                <div class="content d-flex">
                    <div class="row flex-fill">
                        <div class="col-xl-6 col-lg-6 col-md-6  position-relative charcter-img">
                            <img src="<?= base_url() ?>assets/images/character/char_14.png" class="img-fluid" />
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6  d-flex flex-column justify-content-center">
                            <div class="bg-white p-3 d-flex box">
                                <div class="col  mb-3">
                                    <div class="row mb-3">
                                        <div class="col text-center">
                                            <h1 class="text-uppercase  mb-1 ml-0 mt-2 title">Commander grail</h1>
                                            <h6 class="text-uppercase sub-title">HeadMaster of the window
                                                Military Academy
                                            </h6>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="text-uppercase heading">Insert Description Intro</h5>
                                            <p class="content-text">
                                                Dark & Day has been ever since I started dreaming about a planet split between night and a static
                                                orbiting sun oh so
                                                many years ago. I’m really happy with how the new covers turned out! It highlights the characters
                                                and the world in a
                                                way that looks clean and captivating. Hope you like them as much as I do.
                                            </p>
                                        </div>
                                        <div class="col content-char-img">
                                            <img src="<?= base_url() ?>assets/images/character/char_14.png" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center footer mt-3">
                                <a target="_blank" href="https://www.facebook.com/Dark-Day/" data-toggle="tooltip" data-placement="bottom" data-original-title="Facebook">
                                    <img src="<?= base_url() ?>assets/images/social-icons/facebook.png" class="facebook-logo" />
                                </a>
            
                                <a target="_blank" href="https://www.reddit.com/r/Dark-Day/" data-toggle="tooltip" data-placement="bottom" data-original-title="Reddit">
                                    <img src="<?= base_url() ?>assets/images/social-icons/reddit.png" class="reddit-logo" />
                                </a>
                                <a target="_blank" href="https://books.apple.com/us/audiobook/dark-day-1-unabridged/id1490310607" data-toggle="tooltip" data-placement="bottom" data-original-title="iTune">
                                    <img src="<?= base_url() ?>assets/images/social-icons/itune.svg" class="reddit-logo" />
                                </a>
                                
                                <a target="_blank" href="https://twitter.com/Dark-Day" data-toggle="tooltip" data-placement="bottom" data-original-title="Contact Us">
                                    <img src="<?= base_url() ?>assets/images/social-icons/twitter.png" class="reddit-logo" />
                                </a> 
                                <a href="<?= base_url('contact') ?>" data-toggle="tooltip" data-placement="bottom" data-original-title="Contact Us">
                                    <img src="<?= base_url() ?>assets/images/mail.svg" class="reddit-logo" />
                                </a> 
                                <a href="<?= base_url('about') ?>" data-toggle="tooltip" data-placement="bottom" data-original-title="About Us">
                                    <img src="<?= base_url() ?>assets/images/about.svg" class="reddit-logo" />
                                </a>     
                            </div> 

                            
                        </div> 
                    </div>
                </div>
            </section>
            <!-- //right sides  -->
            <aside class="d-flex flex-column">
                <ul class="slide-up">

                </ul>
            </aside>
        </div>
    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?= base_url() ?>assets/js/jquery-1.12.4.min.js"></script>
        <script src="<?= base_url() ?>assets/js/popper.min.js"></script>
        <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
        <script>
            var arrList = <?= $characters_list ?>;
            // console.log(arrList)
             var interval, charPath, backgroudPath,
             clickStatus = false,    
             timer = function() {
             
                if(clickStatus == false){
                    var index = (Math.floor(Math.random() * (arrList.length - 1));
                    // var index = Math.floor(Math.random() * arrList.length);
                    // var charPath,backgroudPath;
                    if(arrList[index].category == "1"){
                        charPath = "<?= base_url() ?>upload/Dark/characters/";
                        backgroudPath = "<?= base_url() ?>upload/Dark/wallpapers/";
                    } else{
                        charPath = "<?= base_url() ?>upload/Day/characters/";
                        backgroudPath = "<?= base_url() ?>upload/Day/wallpapers/";
                    }
                    $('.charcter-img > img').slideToggle(500, function() {
                        $('.charcter-img > img').attr("src", charPath+arrList[index].slider_image);
                    }).slideToggle(500);

                    $('.content-char-img > img').slideToggle(500, function() {
                        $('.content-char-img > img').attr("src",charPath+arrList[index].slider_image);
                    }).slideToggle(500);
                    var newArr = arrList[index].wallpapers.split(','),
                        bgIndex = Math.floor(Math.random() * newArr.length);
                    //console.log(backgroudPath)
                    $('.background-bgs').css('background-image', 'linear-gradient(to bottom, #fff, rgba(14, 14, 14, 0.45)), url('+backgroudPath+$.trim(newArr[bgIndex])+')');
                    $('.title').text(arrList[index].title);
                    $('.sub-title').text(arrList[index].sub_title);
                    $('.heading').text(arrList[index].heading);
                    $('.content-text').html(arrList[index].description);
                }
                interval = setInterval(function(){          
                    if(arrList.length){
                     
                        var index = (Math.floor(Math.random() * (arrList.length - 1));
                        // var index = Math.floor(Math.random() * arrList.length);
                        // console.log(arrList[count].slider_image , count ,arrList.length )
                        $('.charcter-img > img').slideToggle(500, function() {
                            $('.charcter-img > img').attr("src",charPath+arrList[index].slider_image);
                        }).slideToggle(500);

                         $('.content-char-img > img').slideToggle(500, function() {
                             $('.content-char-img > img').attr("src",charPath+arrList[index].slider_image);
                        }).slideToggle(500);
                        var newArr = arrList[index].wallpapers.split(','),
                            bgIndex = Math.floor(Math.random() * (newArr.length - 1));

                        $('.background-bgs').css('background-image', 'linear-gradient(to bottom, #fff, rgba(14, 14, 14, 0.45)), url('+backgroudPath+$.trim(newArr[bgIndex])+')');
                        $('.title').text(arrList[index].title);
                        $('.sub-title').text(arrList[index].sub_title);
                        $('.heading').text(arrList[index].heading);
                        $('.content-text').html(arrList[index].description);
         
                    } else {
                        
                        clearInterval(interval);
                        timer();
                    }

                    // count++;

                },10000);
            };
            
            function scrollItems(container, targetsHeight, increment, startPos, temps) {
                    var secs = temps * 10000;
                    container.animate({
                        'top': '-' + ((targetsHeight * 2) + increment) + 'px'
                    }, secs, 'linear', function () {
                        container.css('top', startPos);
                    });
            }
            var autoScrollUp = function(){
                var startTime = +new Date();
                // $('aside').css('overflow', 'hidden');             
                var slider = $('aside:nth-of-type(1) .slide-up'),
                    items = slider.find('li');
                var sliderHeight = slider.height(),
                    itemsNum = items.length,
                    itemHeight = items.height();

                slider.css('top', '-' + (sliderHeight + itemHeight) + 'px');

                var startPos = slider.css('top');

                items.first().before(items.clone());
                items.last().after(items.clone());

                scrollItems(slider,sliderHeight,itemHeight,startPos,4);
                var endTime = +new Date();
                var diff = endTime - startTime;
                // console.log(diff);
                setInterval(function(){ 
                    scrollItems(slider,sliderHeight,itemHeight,startPos,4);
                }, 4000);
            }

            var autoScrollDown = function(){
                var startTime = +new Date();
                // $('aside').css('overflow', 'hidden');             
                var slider = $('aside:nth-of-type(2) .slide-up'),
                    items = slider.find('li');
                var sliderHeight = slider.height(),
                    itemsNum = items.length,
                    itemHeight = items.height();

                slider.css('top', '-' + (sliderHeight + itemHeight) + 'px');

                var startPos = slider.css('top');

                items.first().before(items.clone());
                items.last().after(items.clone());

                scrollItems(slider,sliderHeight,itemHeight,startPos,4);
                var endTime = +new Date();
                var diff = endTime - startTime;
                setInterval(function(){ 
                    scrollItems(slider,sliderHeight,itemHeight,startPos,4);
                }, 4000);
            }
        
            var appendThumbnail = function() {
                var charPath,backgroudPath;             
                $.each(arrList, function(i, list){                 
                    if(list.category == "1"){
                    
                        charPath = "<?= base_url() ?>upload/Dark/characters/";
                        $('aside:nth-of-type(1) > .slide-up').append(
                            $('<li />', {
                                'class':'inner',
                                "data-value": JSON.stringify(list)
                            }).append(
                                $('<img />',{
                                        "class": 'img-fluid',
                                        "src": charPath+list.image_thumbnail,                                       
                                    }
                                )
                            )
                        )

                    } else{
                        charPath = "<?= base_url() ?>upload/Day/characters/";
                        $('aside:nth-of-type(2)  > .slide-up').append(
                            $('<li />',  {
                                    'class':'inner',
                                    "data-value": JSON.stringify(list)
                                }
                            ).append(
                                $('<img />',{
                                        "class": 'img-fluid',
                                        "src": charPath+list.image_thumbnail,
                                    }
                                )
                            )
                            
                        ) 
                    }
                })
            }


            // Ready State
            $(document).ready(function() {
               timer();
               appendThumbnail();
               autoScrollUp();
               autoScrollDown();

               $('[data-toggle="tooltip"]').tooltip();

               $('.owl-carousel').owlCarousel({
                   autoplay: true,
                   center: true,
                   loop: true,
                   nav: false,
                   dots: false
               });

              
                $('aside .slide-up li').on('click', function() {
                    var charPath,backgroudPath;
                    let data = JSON.parse($(this).attr('data-value'));

                    if(data.category == "1"){
                        charPath = "<?= base_url() ?>upload/Dark/characters/";
                        backgroudPath = "<?= base_url() ?>upload/Dark/wallpapers/";
                    } else{
                        charPath = "<?= base_url() ?>upload/Day/characters/";
                        backgroudPath = "<?= base_url() ?>upload/Day/wallpapers/";
                    }
              
                    $('.charcter-img > img').slideToggle(500, function() {
                       $('.charcter-img > img').attr("src",charPath+data.slider_image);
                    }).slideToggle(500);
                    $('.content-char-img > img').slideToggle(500, function() {
                        $('.content-char-img > img').attr("src",charPath+data.slider_image);
                    }).slideToggle(500);
                    var newArr = data.wallpapers.split(','),
                       bgIndex = Math.floor(Math.random() * (newArr.length - 1));
                    // console.log($.trim(newArr[bgIndex]), bgIndex)
                    $('.background-bgs').css('background-image', 'linear-gradient(to bottom, #fff, transparent), url('+backgroudPath+$.trim(newArr[bgIndex])+')');
                   
                    $('.title').text(data.title);
                    $('.sub-title').text(data.sub_title);
                    $('.heading').text(data.heading);
                    $('.content-text').html(data.description);

                    $(this).children('img').addClass('shake').delay(100).queue(function(){
                        $(this).removeClass('shake')
                    })
                  
                    clearInterval(interval);
                    // timer(count = 0,  clickStatus = true);
                    timer(clickStatus = true);
                })
           })
        </script>
    <script src="//code.tidio.co/ushigqopw0jzdtuodnzsyo7zxfqy5ij0.js" async></script>
</body>


</html>