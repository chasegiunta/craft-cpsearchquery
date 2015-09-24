function getParameterByName(search) {
  name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
  var regex = new RegExp("[\\?&]" + search + "=([^&#]*)"),
      results = regex.exec(location.search);
  return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

$(".search input").val(getParameterByName("search"));

$( document ).ready(function() {
  setTimeout(function(){
    var $search = $('.search input');
    if ($search.val().length != 0) {
      $(".search input").val($(".search input").val() + ' ').keypress();
    }
  }, 1000);
});
