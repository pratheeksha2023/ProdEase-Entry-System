$(document).ready(function() {
    $('#productForm').on('submit', function(event) {
        event.preventDefault(); 

      
        var productName = $('#productName').val();
        var productCategory = $('#productCategory').val();
        var productPrice = $('#productPrice').val();
        var productQuantity = $('#productQuantity').val();

        
        if (productName && productCategory && productPrice && productQuantity) {
           
            $.ajax({
                type:'POST',
                url:'submit.php',
                data: {
                    productName: productName,
                    productCategory: productCategory,
                    productPrice: productPrice,
                    productQuantity: productQuantity
                },
                success: function(response) {
                    
                    $('#successMessage').text('Product registered successfully!').removeClass('hidden');
                    $('#displayData').html(response).removeClass('hidden');
                    $('#productForm')[0].reset(); // Reset the form
                }
            });
        } else {
            alert('Please fill in all fields.');
        }
    });
});