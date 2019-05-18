$(document).ready(function () {

    $.ajax({
        type: "post",
        url: "../backend/about_data.php",
        data: '&action=select',
        dataType: "JSON",
        success: function (data) {
            $("#header_paragraph").text(data['header_content']);
            $("#about_paragraph").text(data['about_content']);
            $("#min_1").text(data['min_1']);
            $("#min_2").text(data['min_2']);
            $("#min_3").text(data['min_3']);
            $("#min_4").text(data['min_4']);
            $("#min_5").text(data['min_5']);
            $("#min_6").text(data['min_6']);
            $("#min_7").text(data['min_7']);
            $("#min_8").text(data['min_8']);
        }

    });

});
