$(document).ready(function(){
    // Declare variables outside the event handlers
    let id ,name, email, address, phone, shipping, card;

    // City dropdown change event handler
    $("#cityselect").on('change', function(){
        let city = $(this).val();

        // Assign other values when the city changes
        id = $("#user_id").val();
        name = $("#bname").val();
        email = $("#bemail").val();
        address = $("#baddress").val();
        phone = $('#bphone').val();
        shipping = $("#bshipping").val();
        card = $("#bcard").val();

        // console.log("City changed: " + city);
    });

    // Checkout button click event handler
    $('#checkout').on('click', function(e){
        e.preventDefault();

        // Prepare data to send
        let dataToSend = {
            id : id,
            name: name,
            email: email,
            address: address,
            phone: phone,
            city: $("#cityselect").val(),
            shipping: shipping,
            card: card,
        };

        console.log(dataToSend);

        $.ajax({
            url: 'checkdata.php',  // Replace with the actual server-side script URL
            type: 'POST',  // You can change this to 'GET' if appropriate
            data: dataToSend,
            success: function(response) {
                // Handle success (if any)
                console.log(response);
                alert(response)
                window.location.href = "cart.php"
               
                // $('#msg').html(response)
            },
            
            
        })
    });

    ////ajax //////

  ;
});
