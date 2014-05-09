$( document ).ready(function() {
    $('#Upload').click(function(){
        var formData = new FormData();
        var url = 'uploadFile.php';
        var file = $("#file");
        var xhr = new XMLHttpRequest();
        formData.append('File',file[0].files[0]);
        formData.append('Path','Course/Math');
        xhr.addEventListener('progress', function (e) {
            var done = e.position || e.loaded, total = e.totalSize || e.total;
            var percent = (Math.floor(done / total * 1000) / 10) + '%';
            $('#uploadprogress').css('width', percent+'%');
        }, false);
        
        if (xhr.upload) {
            xhr.upload.onprogress = function (e) {
                var done = e.position || e.loaded, total = e.totalSize || e.total;
                var percent = (Math.floor(done / total * 1000) / 10) + '%';
                $('#uploadprogress').css('width', percent + '%');
            };
        }
        
        xhr.onreadystatechange = function (e) {
            if (4 == this.readyState) {
                $('#message').text(e.currentTarget.responseText);
                $('#uploadprogress').css('width', '0%');
                $('#file').val('');
            }
        };
        
        xhr.open('post', url, true);
        xhr.send(formData);
    });
});		