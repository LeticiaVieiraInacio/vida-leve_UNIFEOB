$(document).ready(function() {
    $('.add-question').click(function() {
      $('#anamnese-geral')[0].submit();
    })
  
    $('form').on('submit', function(event) {
      event.preventDefault();

      const seri = $(this).serializeArray();

      $.ajax({
        url: Uri + "api?dir=anamnese-geral&action=create",
        cache: false,
        success: function(html){
          $("#results").append(html);
        }
      });
    })
})