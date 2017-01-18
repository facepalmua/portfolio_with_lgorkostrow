function check_messages() {
    var str;
    $.ajax({
        url: "lib/check-messages.php",
        type: 'post',
        success: function(html) {
            //alert("1"); 
            if (html > 0) {
                $(".active-message").show();
                $("#quantity").html(html);
            } else {
                $(".active-message").hide();
            }
        }
    });
}

$(document).ready(function() {

    // $("#upload").change(function (){
    //    var fileName = $(this).val();
    //    $(this).text(fileName);
    // });
    $("#add_site").click(function() {
        var img = $("#upload").val();
        var site = $("#site").val();
        alert(img);
        $.ajax({
            url: 'lib/add-site.php',
            data: "img=" + img + "&site=" + site,
            type: 'post',
            success: function(html) {

                location.reload();

            }

        });
    });

    check_messages();
    setInterval('check_messages()', 10000);

    $('.delete_site').click(function() {
        delete_id = $(this).attr("id");
        //alert("1");
        swal({
                title: "Вы уверены?",
                text: "Удалить cайт!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Да, удалить!"
            },
            function() {
                $.ajax({
                    type: "POST",
                    url: "lib/delete-site.php",
                    data: "id=" + delete_id,
                    dataType: "html",
                    cache: false,
                    success: function(html) {
                        location.reload();
                    }
                });
            });
    });

    $(".box").click(function() {
        id = $(this).attr("id");

        $.ajax({
            url: 'lib/read-message.php',
            data: "id=" + id,
            type: 'post',
            success: function(html) {

                location.reload();

            }

        });
    });

});
