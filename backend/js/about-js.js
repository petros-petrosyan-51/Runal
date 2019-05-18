$("#text-btn").click(function (e) {
    e.preventDefault();
    if ($("#insert-title").val() === "") {
        alert("заполните все поля");
    } else if ($("#insert-title-1").val() === "") {
        alert("заполните все поля");
    } else if ($("#insert-title-2").val() === "") {
        alert("заполните все поля");
    } else if ($("#insert-title-3").val() === "") {
        alert("заполните все поля");
    } else if ($("#insert-title-4").val() === "") {
        alert("заполните все поля");
    } else if ($("#insert-title-5").val() === "") {
        alert("заполните все поля");
    } else if ($("#insert-title-6").val() === "") {
        alert("заполните все поля");
    } else if ($("#insert-title-7").val() === "") {
        alert("заполните все поля");
    } else if ($("#insert-title-8").val() === "") {
        alert("заполните все поля");
    } else if ($("#insert-title-9").val() === "") {
        alert("заполните все поля");
    } else {
        alert("сделано");
        $.ajax({
            type: "post",
            url: "about_data.php",
            data: $('#form-send,#form-send-2,#form-send-3,#form-send-4,#form-send-5,#form-send-6,#form-send-7,#form-send-8,#form-send-9,#form-send-10').serialize() + '&action=login',
            dataType: "json",
            success: function () {

            }

        });
    }
});
$(document).ready(function () {

    $.ajax({
        type: "post",
        url: "about_data.php",
        data: '&action=select',
        dataType: "JSON",
        success: function (data) {
            $("#insert-title").text(data['header_content']);
            $("#insert-title-1").text(data['about_content']);
            $("#insert-title-2").text(data['min_1']);
            $("#insert-title-3").text(data['min_2']);
            $("#insert-title-4").text(data['min_3']);
            $("#insert-title-5").text(data['min_4']);
            $("#insert-title-6").text(data['min_5']);
            $("#insert-title-7").text(data['min_6']);
            $("#insert-title-8").text(data['min_7']);
            $("#insert-title-9").text(data['min_8']);
        }

    });

});


