$('#navClose').on('click',function () {
    $('.myNav-toggle').click();
})

$('.videoDiv').on('click',function (e) {
    $(this).html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/Pq8lUumT-mE?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
})
$('.mm-prev-btn').hide();

$('input[type="radio"]').on('click',function(){
  $('.mm-next-btn').click();
});

var x;
var count;
var current;
var percent;
var z = [];

init();
getCurrentSlide();
goToNext();
getCount();
// checkStatus();
// buttonConfig();
buildStatus();
deliverStatus();
submitData();
goBack();

function init() {

    $('.mm-survey-container .mm-survey-page').each(function() {

        var item;
        var page;

        item = $(this);
        page = item.data('page');

        item.addClass('mm-page-'+page);
        //item.html(page);

    });

}

function getCount() {

    count = $('.mm-survey-page').length;
    return count;

}

function goToNext() {

    $('.mm-next-btn').on('click', function() {
        getCount();
        current = x+1;
        var g = current/count;
        buildProgress(g);
        var y = (count + 1);
        // getButtons();
        $('.mm-survey-page').removeClass('active');
        $('.mm-page-'+current).addClass('active');
        getCurrentSlide();
        checkStatus();
        if( $('.mm-page-'+count).hasClass('active') ){
            if( $('.mm-page-'+y).hasClass('pass') ) {
                $('.mm-finish-btn').addClass('active');
            }
            else {
                $('.mm-page-'+count+' .mm-survery-content .mm-survey-item').on('click', function() {
                    $('.mm-survey').css('display',"none");
                    $('.mm-finish-btn').addClass('active');
                    
                });
            }
        }
        else {
            $('.mm-finish-btn').removeClass('active');
            if( $('.mm-page-'+current).hasClass('pass') ) {
                $('.mm-survey-container').addClass('good');
                $('.mm-survey').addClass('okay');
            }
            else {
                $('.mm-survey-container').removeClass('good');
                $('.mm-survey').removeClass('okay');
            }
        }
     return;

    });
     return;
}

function buildProgress(g) {

    if(g > 1){
        g = g - 1;
    }
    else if (g === 0) {
        g = 1;
    }
    g = g * 100;
    $('.mm-survey-progress-bar').css({ 'width' : g+'%' });

}

function goToSlide(x) {
    return x;

}

function getCurrentSlide() {

    $('.mm-survey-page').each(function() {

        var item;

        item = $(this);

        if( $(item).hasClass('active') ) {
            x = item.data('page');
        }
        else {

        }

        return x;

    });

}

function getButtons() {

    if(current === 0) {
        current = y;
    }
    if(current === count) {
        $('.mm-next-btn').hide();
    }
    else if(current === 1) {
        $('.mm-prev-btn').hide();
    }
    else {
        $('.mm-next-btn').show();
        $('.mm-prev-btn').show();
    }

}

$('.mm-survey-q li input').each(function() {

    var item;
    item = $(this);

    $(item).on('click', function() {
        if( $('input:checked').length > 0 ) {
            // console.log(item.val());
            $('label').parent().removeClass('active');
            item.closest( 'li' ).addClass('active');
        }
        else {
            //
        }
    });

});

percent = (x/count) * 100;
$('.mm-survey-progress-bar').css({ 'width' : percent+'%' });

function checkStatus() {
    $('.mm-survery-content .mm-survey-item').on('click', function() {
        var item;
        item = $(this);
        item.closest('.mm-survey-page').addClass('pass');
    });
}

function buildStatus() {
    $('.mm-survey-item').on('click', function() {
        var item;
        item = $(this);
        item.addClass('bingo');
        item.closest('.mm-survey-page').addClass('pass');
        $('.mm-survey-container').addClass('good');
    });
}

function deliverStatus() {
    $('.mm-survey-item').on('click', function() {
        if( $('.mm-survey-container').hasClass('good') ){
            $('.mm-survey').addClass('okay');
        }
        else {
            $('.mm-survey').removeClass('okay');
        }
        buttonConfig();
    });
}

function lastPage() {
    if( $('.mm-next-btn').hasClass('cool') ) {
        alert('cool');
    }
}

function buttonConfig() {
    if( $('.mm-survey').hasClass('okay') ) {
        $('.mm-next-btn button').prop('disabled', false);
    }
    else {
        $('.mm-next-btn button').prop('disabled', true);
    }
}

function submitData() {
    $('.mm-finish-btn').on('click', function() {
        // window.location.replace("https://718realestateadvisors.com");
    });
}

function goBack() {
    $('.mm-back-btn').on('click', function() {
        $('.mm-survey-bottom').slideDown();
        $('.mm-survey-results').slideUp();
    });
}