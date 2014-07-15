$( document ).ready(function() {
    $('#Submit').click(function(){
        var myObject = {
            Name: $('#C_Name').val(),
            Tags: $('#C_Tags').val(),
            Duration: $('#C_Period').val(),
            Level: $('#C_Level').val(),
            Image: $('#C_Image').val()
        }

        $.ajax({
            xhr: function () {
                var xhr = new XMLHttpRequest();
                xhr.addEventListener('progress', function (e) {
                    $('#message').text("Pending");
                }, false);
                return xhr;
            },
            url: 'add_course.php',  
            type: 'POST',
            success: completeHandler,
            data: myObject
        });
    });
    var completeHandler = function(data){
        $('#message').text(data);
        $(':input').val("");
    };
    
});	