$(document).ready(function() {
    $(document).on('click touchstart', '.btn-add-product', function() {
        let id = $(this).data('id');
        $.ajax({
            url: '/add_to_cart',
            data: { product_id: id },
            method: 'POST',
            dataType: 'json',
            success: function(response) {
                if (response.status == 200) {
                    $(".cart_count").text(response.count);
                } else {
                    window.location.reload();
                }
            },
            error: function(err) {
                console.log(err);
                window.location.reload();
            }
        });
    });





});