$(document).ready(function() {
    $(".btn-add-product").click(function() {
        let id = $(this).data('id');
        $.ajax({
            url: '/add_to_cart',
            data: { product_id: id },
            method: 'POST',
            dataType: 'json',
            success: function(response) {
                if (response.status == 200) {
                    $("#cart_count").text(response.count);
                }
            }
        });
    });





});
