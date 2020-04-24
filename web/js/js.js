
function showModel(modal) {
    $('#myModal .modal-body').html(modal);
    $('#myModal').modal();
}
function hideModel(modal) {
  $('#myModal').modal('hide');
};


$(document).ready(function(){
  $('.js-pscroll').each(function(){
    var ps = new PerfectScrollbar(this);
    $(window).on('resize', function(){
      ps.update();
    })
  });

  $(function () {
      $('#datetimepicker2').datepicker({
          //locale: 'ru'
          todayBtn: "linked",
          language: "ru",
          autoclose: true,
          todayHighlight: true
      }).datepicker("setDate", new Date());
  });

  $('.wrapper button').on('click',function(e){
    e.preventDefault();
    var maket=$( "#maket option:selected" ).text();
    var actionName = 'plan/send_'.concat(maket.trim().toLowerCase());
    //var description=$( "#region option:selected" ).text();
        $.ajax({
          url: 'plan/show_tables',
          data: {maket:maket},
          type: 'post',
          success: function (res) {
            if(!res) res = 'Информация о изображении отсутствует';
            $('#select').fadeIn().html(res);
            $('.js-pscroll').each(function(){
              var ps = new PerfectScrollbar(this);
              $(window).on('resize', function(){
                ps.update();
              })
            });
            //showModel(res);
            $( "#btn_show" ).click(function() {
              $( "#new" ).show();
              var ps = new PerfectScrollbar("#add");
              $( "#btn_show" ).hide();
            });


            $('#new').on('submit', function(e){
              //alert($(this).serialize());
              e.preventDefault();
              $.ajax({
                url: actionName,
                type: 'post',
                data: $(this).serialize(),
                success:function(res){
                  document.getElementById('new').reset();
                  alert("Данные сохранены!");
                  /*setTimeout(function(){// wait for 5 secs(2)
                    location.reload(); // then reload the page.(3)
                  }, 300);*/

              },
                error: function (request, status, error) {
                  alert('FAIL');
                  alert(request.responseText);
                }
              });
            });


            $('#get').scroll(function() {
              $('#add').scrollLeft($(this).scrollLeft());
            });
            $('#add').scroll(function() {
              $('#get').scrollLeft($(this).scrollLeft());
            });



          },
          error: function (request, status, error) {
            alert('FAIL');
            alert(request.responseText);
          }
        });
      });
    });
