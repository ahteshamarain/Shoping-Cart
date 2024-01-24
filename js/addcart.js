$(document).ready(function(){
    // let addcart = $('#addcart');
    
    
    $('#addcart').on('click', function(e){
        e.preventDefault();
        
        let userid = $("#user_id").val();
        let proid = $("#pro_id").val();
        let pname = $("#pname").text();
        var quantity = $('#pquantity').val();
        let pprice = $("#pprice").html();

        // Prepare data to send
        let dataToSend = {
            user_id: userid,
            pro_id: proid,
            pname: pname,
            pquantity: quantity,
            pprice: pprice
        };
        console.log(dataToSend);

        // AJAX request
        function insert(){
        $.ajax({
            url: 'adddata.php',  // Replace with the actual server-side script URL
            type: 'POST',  // You can change this to 'GET' if appropriate
            data: dataToSend,
            success: function(response) {
                // Handle success (if any)
                console.log(response);
                alert(response)
                window.location.href = "cart.php"
                display();
                // $('#msg').html(response)
            },
            
            
        });
    }
    insert();
    });
    function display() {
        $.ajax({
            url: 'cfetch.php', // Update the URL to the PHP script that fetches user data
            method: 'POST',
            success: function (data) {
             console.log(data)
                $('#ctab').html(data); // Set the HTML content of utab
            },
        });
    }
  
    display();

    $('tbody').on('click','.delete',function(){
        let userid= $(this).attr('data-id');
    console.log(userid);
        $.ajax({
         url : 'delete.php',
         method : 'POST',
         data : {
             userid : userid
     
         },
         success: function(data){
       
       
             console.log(data)
             
             
             
             display();
            //  alert(data);
         }
        })
        
        
    })
});
