$(document).ready(function() {
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

        console.log(seri);

        console.log(event);
    })
})