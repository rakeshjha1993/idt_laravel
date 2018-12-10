
$(document).ready(function(){
  if($('#report_description').length > 0){
    CKEDITOR.replace( 'report_description' );
  }

  $('#report-list-item li').on('click', function(e){
    $('#report-list-item li').removeClass('active');
    $('.report-detail-box').removeClass('d-none');
    $(this).addClass('active');
    var pdf_url = '/storage/'+$(this).attr('data-url');
    $('a#report-detail-box-download').attr('href',pdf_url);
    var title = $(this).attr('data-title');
    var description = $(this).attr('data-description');
    $('#report-display-box').attr('src',pdf_url);
    $('h1#report-detail-box-title').html(title);
    $('p#report-detail-box-description ').html(description);

  });

  //ajax search submit
  $('#address-search-form').on('submit', function(e){
      $('div#ajax-search-response').addClass('d-none');
    e.preventDefault();
    var searchTerm = $('#searchterm_title').val();
    $.ajax({
                    /* the route pointing to the post function */
                    url: '/search/'+searchTerm,
                    type: 'GET',
                    dataType: 'JSON',
                    /* remind that 'data' is the response of the AjaxController */
                    success: function (data) {
                      console.log(data.long_name);
                        $('span#ajax-search-response').append(
                          data.long_name
                        );
                        $('div#ajax-search-response').removeClass('d-none');
                    }
                });
  });
})
