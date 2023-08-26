$(document).ready(function(){
    $('#buyModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Кнопка, вызвавшая модальное окно
        var productName = button.data('product-name'); 
        var discountPrice = button.data('discount-price');
        var totalPrice = button.data('total-price');
        var tokValue = button.data('tok');
        var image = button.data('product-img');
        var productId = button.data('product-id'); // Если нужно

        // Заполняем модальное окно данными
        var modal = $(this);
        modal.find('.modal-name').text(productName);
        modal.find('.modal-amper').text(tokValue+"A");
        modal.find('.modal-price').text(discountPrice+" тг");
        modal.find('#battery').val(productName);
        modal.find('#battery').val(productName);
        modal.find(".battery-image").attr("src", "batteries/"+image);

        $('#oldBatteryDiscount').on('change', function(){
            if ($(this).val() === 'Да') {
                modal.find('.modal-price').text(discountPrice+" тг");
            } else {
                modal.find('.modal-price').text(totalPrice+" тг");
            }
        });

        // Добавьте любые другие поля, которые вы хотите обновить, например:
        // modal.find('.product-price-field').text(productPrice);
    });

    $('.card-button').on('click', function() {
        $('#orderForm')[0].reset();
    });
    $('#submitButton').on('click', function() {
        $('#orderForm').submit();
    });
});