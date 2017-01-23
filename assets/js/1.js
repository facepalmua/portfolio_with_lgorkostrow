$(document).ready(function() {

    var s = $(".stn-services").offset();
    var p = $(".stn-portfolio").offset();
    var c = $(".stn-contact").offset();
    $(window).scroll(function() {
        // 200px от верха
        if ($(window).scrollTop() < s.top) {
            $('#Home-top').addClass("active");
            $('#Services-top').removeClass("active");
        }
        if (($(window).scrollTop() >= s.top) && (($(window).scrollTop() < p.top))) {
            $('#Services-top').addClass("active");
            $('#Portfolio-top').removeClass("active");
            $('#Home-top').removeClass("active");
        }
        // 400px от верха
        if (($(window).scrollTop() >= p.top) && (($(window).scrollTop() < c.top))) {
            $('#Services-top').removeClass("active");
            $('#Portfolio-top').addClass("active");
            $('#Contact-top').removeClass("active");
        }
        // низ активного окна...
        if ($(window).scrollTop() >= c.top) {
            $('#Portfolio-top').removeClass("active");
            $('#Contact-top').addClass("active");
        }
    });

    $(".btn-submit").click(function () {
        event.preventDefault();
        var name = $("#name").val();
        var mail = $("#mail").val();
        var text = $("#Message").val();
        if (name!="" && mail!="" && text!=""){
            $.ajax({
                url:'/lib/messages.php?action=send',
                data : "name=" + name + "&mail=" + mail + "&text=" + text,
                type:'post',
                success:function (data) {
                    alert(data);
                    sweetAlert("", "Спасибо, с вами свяжутся в ближайшее время!", "success");
                }

            });
            $(".form-control").val("");
        }
        else {
            sweetAlert("", "Заполните все поля!", "error");
        }

    });

});
