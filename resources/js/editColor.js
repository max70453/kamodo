$(function() {

    let links = $(".btnSubmit");

    links.each(function(i, link){

        $(link).on('click', function(){

            // $(window).on('shown.bs.modal', function () {
            //      console.log('modal');
            //  })
            //  console.log($('#editColorModal'));

            let url = $(link).val();
            // event.preventDefault();
            $.ajax({
                url: url,      /* Куда пойдет запрос */
                method: 'get',             /* Метод передачи (post или get) */
                dataType: 'json',          /* Тип данных в ответе (xml, json, script, html). */
                success: function(data){   /* функция которая будет выполнена после успешного запроса.  */
                    let colorName = $('.color');
                    let colorCode = $('.code');
                    let colorAction = $('.editColor');
                    colorName.val(data.name);
                    colorCode.val(data.color);
                    colorAction.attr('action', 'update-colors/' + data.id);
                },
                error: function(errorThrown){
                    console.log(errorThrown);
                }
            });
        })
    });

});



