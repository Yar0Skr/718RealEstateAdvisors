$('#navClose').on('click',function () {
    $('.myNav-toggle').click();
})

$('.videoDiv').on('click',function (e) {
    $(this).html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/Pq8lUumT-mE?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
})