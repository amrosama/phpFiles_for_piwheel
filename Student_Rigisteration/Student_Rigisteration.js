$( document ).ready(function() {
    $('#Submit').click(function(){
        var myObject = {
            email: $('#Email').val(),
            password: $('#Password').val(),
            fullName: $('#FullName').val(),
            Gendar: $('#Gender').val(),
            BirthDate: $('#BirthDate').val()
        }

        $.ajax({
            xhr: function () {
                var xhr = new XMLHttpRequest();
                xhr.addEventListener('progress', function (e) {
                    $('#message').text("Pending");
                }, false);
                return xhr;
            },
            url: 'Student_Rigisteration.php',  
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