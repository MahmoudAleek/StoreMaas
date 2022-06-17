$(document).ready(function() {


    // raiting star

    /* 1. Visualizing things on Hover - See next part for action on click */
    $('#stars li').on('mouseover', function() {
        var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

        // Now highlight all the stars that's not after the current hovered star
        $(this).parent().children('li.star').each(function(e) {
            if (e < onStar) {
                $(this).addClass('hover');
            } else {
                $(this).removeClass('hover');
            }
        });

    }).on('mouseout', function() {
        $(this).parent().children('li.star').each(function(e) {
            $(this).removeClass('hover');
        });
    });
    /* 2. Action to perform on click */
    $('#stars li').on('click', function() {
        var onStar = parseInt($(this).data('value'), 10); // The star currently selected
        var stars = $(this).parent().children('li.star');

        for (i = 0; i < stars.length; i++) {
            $(stars[i]).removeClass('selected');
        }

        for (i = 0; i < onStar; i++) {
            $(stars[i]).addClass('selected');
        }
    });

    // scroll to top 
    var scrollButtom = $("#scroolup");
    $(window).scroll(function() {

        if ($(this).scrollTop() >= 300) {
            scrollButtom.fadeIn(1000);
        } else if ($(this).scrollTop() <= 300) {
            scrollButtom.fadeOut(1000);
        }
    })
    scrollButtom.click(function() {
        $("html,body").animate({ scrollTop: 0 }, 1000);
    })

   
    // start looding page 
    $(".loading-overlay .loader").fadeOut(4000,function(){
        $(this).parent().fadeOut(1000,function(){

            $("body").css("overflow","auto")
            $(".loading-overlay").remove()

        })
    })
    

    //  Start NiceScroll       
    $("html").niceScroll({
        cursorcolor:"#00f",
        cursorwidth:"8px"
    });

});


var scrollButtom = $("#buttom-up");
$(window).scroll(function () {
    if ($(this).scrollTop() >= 300) {
        scrollButtom.fadeIn(1000);
    } else if ($(this).scrollTop() <= 300) {
        scrollButtom.fadeOut(1000);
    }
})
scrollButtom.click(function () {
    $("html,body").animate({
        scrollTop: 0
    }, 200);
})



///////////////////// suffil my project [Portfolio]
let portfolioList = document.querySelectorAll(".products ul li");
let itembox = document.querySelectorAll('.product');

for(let i = 0; i<=portfolioList.length;i++){

    portfolioList[i].addEventListener('click' , function(){

        for(let j = 0; j<portfolioList.length;j++){
            portfolioList[j].classList.remove('active');
        }
        this.classList.add('active');

        let datafillter = this.getAttribute('data-fillter');
  
        for(let n = 0;i<itembox.length;n++){
            itembox[n].classList.remove('active');
            itembox[n].classList.add('hide');
        
            if(itembox[n].getAttribute('data-item') == datafillter || datafillter == 'all'){
                itembox[n].classList.remove('hide');
                itembox[n].classList.add('active');
            }
        }
    })
}
