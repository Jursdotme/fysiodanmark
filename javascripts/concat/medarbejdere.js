$medarbejdere = $('.fire_modal');

$medarbejdere.each(function (index, value) {
  $(this).click(function(){
    $($(this).data('modal')).addClass('active');
    console.log($(this).data('modal'));
  });

});


$('.medarbejder-details').click(function(){
  $('.medarbejder-details.active').removeClass('active');
});

$('.medarbejder-details.active .close').click(function(){
  $('.medarbejder-details.active').removeClass('active');
});
