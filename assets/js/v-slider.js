var clearVSliderInterval="";function animmateText(){var sl__deals=document.querySelector('.sll__item.next-active .sl__deals')
var sl__title=document.querySelector('.sll__item.next-active .sl__title .letters')
var sl_para=document.querySelector('.sll__item.next-active .sl_para')
if(sl__deals)
sl__deals.innerHTML=sl__deals.textContent.replace(/\S/g,"<span class='letter'>$&</span>");if(sl__title)
sl__title.innerHTML=sl__title.textContent.replace(/\S/g,"<span class='letter'>$&</span>");if(sl_para)
sl_para.innerHTML=sl_para.textContent.replace(/\S/g,"<span class='letter'>$&</span>");anime.timeline({loop:false}).add({targets:'.sll__item.next-active .sl_para .letter',scale:[4,1],opacity:[0,1],translateZ:0,easing:"easeOutExpo",duration:750,delay:(el,i)=>20*i}).add({targets:'.sll__item.next-active .sl_para',opacity:1,duration:1000,easing:"easeOutExpo",delay:1000});anime.timeline({loop:false}).add({targets:'.sll__item.next-active .sl__deals .letter',scale:[4,1],opacity:[0,1],translateZ:0,easing:"easeOutExpo",duration:200,delay:(el,i)=>0}).add({targets:'.sll__item.next-active .sl__deals',opacity:1,duration:250,easing:"easeOutExpo",delay:250});anime.timeline({loop:false}).add({targets:'.sll__item.next-active .sl__title .letter',translateY:["1.1em",0],translateZ:0,duration:750,delay:(el,i)=>50*i}).add({targets:'.sll__item.next-active .sl__title',opacity:1,duration:1000,easing:"easeOutExpo",delay:1000});}
function counterAnimationsForBigNo($obj){$obj.find('span').each(function(){$(this).html(parseFloat($(this).attr('data-amount'))-1);})
setTimeout(function(){$obj.find('span').each(function(){$(this).html(parseFloat($(this).attr('data-amount')));})},500)};function counterAnimationsForVSlider($obj,duration){var start=0;var firstObj=$obj.find('.slr__item.active .sll_amount >span >span:first-child');var lastObj=$obj.find('.slr__item.active .sll_amount >span >span:last-child');var end=lastObj.attr('data-amount');console.log(end)
counterAnimationsForBigNo(firstObj);if(!end)end=0;let startTimestamp=null;const step=function(timestamp){if(!startTimestamp)startTimestamp=timestamp;const progress=Math.min((timestamp-startTimestamp)/duration,1);lastObj.html(Math.floor(progress*(end-start)+start));if(progress<1){window.requestAnimationFrame(step);}};window.requestAnimationFrame(step);}
function loopVSlider($this){var $lis1=$this.find('.sll__item');var $lis=$this.find('.slr__item');var ttlL=$lis.length;var currentActive1=$this.find('.sll__item.active');var currentActive=$this.find('.slr__item.active');var currentIndex=currentActive.index();if(!currentIndex)currentIndex=0;$lis.removeClass('active');if(ttlL==currentIndex+1)
{currentActive.addClass('prev-active');$lis.eq(0).addClass('next-active');}
else
{currentActive.addClass('prev-active');$lis.eq(currentIndex+1).addClass('next-active');}
if(currentActive1.hasClass('vs_product')&&$lis.eq(currentIndex+1).hasClass('vs_product')){}
else if(currentActive1.hasClass('vs_service')&&$lis.eq(currentIndex+1).hasClass('vs_service')){}
else
{$lis1.removeClass('active');currentActive1.addClass('prev-active');if(!currentActive1.index())
$lis1.eq(1).addClass('next-active');else
$lis1.eq(0).addClass('next-active');}
setTimeout(function(){$this.find('.sll_amount >span span[data-amount]').text(0);$this.find('.prev-active').removeClass('prev-active');$this.find('.next-active').addClass('active');$this.find('.next-active').removeClass('next-active');counterAnimationsForVSlider($this,1000);},1000)}
$(function(){$('.sliderSec').each(function(){loopVSlider($(this));})
setInterval(function(){$('.sliderSec').each(function(){loopVSlider($(this));})},6000)})