$(document).ready(function(){
  $('p').click(function(){
    console.log($(this).text());
    $(this).text('Hello<BR>World');
  });
  $('.dashboard').mouseenter(function(){
    console.log('this works!');
  });
  $(document).scroll(function(){
    $('.login').css("border","1px solid blue");
  });
});
