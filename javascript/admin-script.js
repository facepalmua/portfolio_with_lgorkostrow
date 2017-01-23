function check_messages() {
    var str;
    $.ajax({
        url: "/lib/messages.php?action=check",
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

    var files;

    $('#upload').change(function(){
        files = this.files;

        var data = new FormData();
        $.each( files, function( key, value ){
            data.append( key, value );
        });

        $.ajax({
            url: '/lib/site.php?action=uploadfiles',
            data: data, //+ "&action=" + "add" + "&img=" + img + "&site=" + site + "&cat=" + cat,
            type: 'post',
            processData: false,
            contentType: false,
            dataType: 'html',
            success: function(html) {
                sweetAlert("", "Картинка загружена", "success");
                //location.reload();

            }

        });

    });

    // $("#add_site").click(function() {
        // var img = $("#upload").val();
        // var site = $("#site").val();
        // var cat = $("#cat").val();
    $('#add_site').click(function( event ){
        var img = $("#fileformlabel").text();
        var site = $("#site").val();
        var cat = $("#cat").val();

        $.ajax({
            url: '/lib/site.php?action=add',
            data: {
                img:$("#fileformlabel").text(),
                site:$("#site").val(),
                cat:$("#cat").val()
            },
            type: 'post',
            dataType: 'html',
            success: function(html) {
                location.reload();
            }

        });
    });

    check_messages();
    setInterval('check_messages()', 10000);

    $('.delete_site').click(function() {
        delete_id = $(this).attr("id");
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
                    url: "/lib/site.php?action=delete",
                    data: {
                        id:delete_id
                    },
                    dataType: "html",
                    cache: false,
                    success: function(html) {
                        location.reload();
                    }
                });
            });
    });

    $('.edit_site').click(function() {
        edit_id = $(this).attr("id");
        swal({
                title: "Вы уверены?",
                text: "Редактировать cайт!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Да!"
            },
            function() {
                $.ajax({
                    type: "POST",
                    url: "/lib/site.php?action=edit",
                    data: {
                        id:edit_id,
                        img:$("#fileformlabel").text(),
                        site:$("#site").val(),
                        cat:$("#cat").val()
                    },
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
            url: '/lib/messages.php?action=read',
            data: "id=" + id,
            type: 'post',
            success: function(html) {

                location.reload();

            }

        });
    });

});
