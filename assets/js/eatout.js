$(function(){
  $('#favorite').click(function() {
    var company = $("#favourite").val();
    $.post('../../eatout/process/favourite.php', { rid: company}, function(data){
        hscroll(data+' has been added to restaurants you like.');
    });
    
    $('#favorite').hide();
  });
  
    $('#been-here').click(function(){
      var company = $('#have-been-here').val();
      $.post('../../eatout/process/visited.php', { place_id: company}, function(data){
        hscroll(data+' has been added to restaurants you have been to.');
      });
      $('#been-here').hide();
    });
  
    $('#like').click(function(){
      var company = $('#ilike').val();
      $.post('../../eatout/process/like.php', { place_id: company}, function(data){
        hscroll(data+' has been added to restaurants you like.');
      });
    $('#like').hide();
  });
  
    $('#wish-list').click(function(){
      var company = $('#wishlist').val();
      $.post('../../eatout/process/wishlist.php', { place_id: company}, function(data){
        hscroll(data+' has been added to your wish list.');
      });
    $('#wish-list').hide();
  });

    $('#Addreview').click(function(){
      var company = $('#add-review').val();
      var review = $('#review').val();
      var rating = $().val('#rating');
      $.post('../../eatout/process/review.php', { place_id: company, body: review, rating: rating }, function(data){
        hscroll('Your review for '+data+'  has been saved.');
      });
    $('#reviewBtn').hide();
    
  });
  
  
  function hscroll(text, speed, delay){
    if(speed==undefined||delay==undefined){
      speed=500;
      delay=5000;
    }
    $('#message').html('<div class="message-text">'+text+'</div>');
    $('#message').slideToggle(speed).delay(delay).slideToggle(speed);
  }
  
});
