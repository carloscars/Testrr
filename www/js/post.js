


$(document).ready(function(){
    $("#btn").click(function(){
         var A = 'carlos';
        var B = 'carrillo';
        var z = { "email" : $("#email").val(), 
                  "comment" : $("#comment").val() 
                };
        
        $.ajax({
            type: "POST",
            url: 'http://localhost//test//save.php',
            data: z,
            cache: false,
            success: function(result){
            alert(result);
            }
        });
    return false;
    });
});