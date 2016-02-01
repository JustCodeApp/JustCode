$(document).ready(function(){
        $(function(){
        $('#formularioPrueba').submit(function(e){
            e.preventDefault();
            var form = $(this);
            var post_url = form.attr('action');
            //console.log(post_url);
            //post_url = 'p1.php';
            var post_data = form.serialize();
            $(form).html('Please wait...');

            $.ajax({
                type: 'POST',
                url: post_url,
                data: post_data,
                success: function(msg) {
                    $(form).fadeOut(800, function(){
                        form.html(msg).fadeIn().delay(2000);
                    });
                }
            });
        });
    });
});