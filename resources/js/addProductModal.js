const addProduct = document.getElementById('addProductModal')

if (addProduct) {
    addProduct.addEventListener('show.bs.modal', event => {
        $.ajax({
            url: '/add-products',      /* Куда пойдет запрос */
            method: 'get',             /* Метод передачи (post или get) */
            dataType: 'json',          /* Тип данных в ответе (xml, json, script, html). */
            success: function(data){   /* функция которая будет выполнена после успешного запроса.  */
                $('.form-select').empty();
                // $('.form-select').append('<option>'+ 'Выберите категорию' +'</option>');
                data.category.forEach(element => {
                    $( ".form-select" ).append('<option value="'+ element.id +'">'+ element.name +'</option>');
                });
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });
    });
}




