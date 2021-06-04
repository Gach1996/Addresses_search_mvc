
function funcBefore() {
    $("#information .message").text("Ожидание данных...");

}

function funcSuccess(data) {

    $(".table").remove();
    $(" .table-head").html('');
    $(" .table-body").html('');
    $(".table-head").append("<tr>" +
        "<th>" + 'id' + "</th>" +
        "<th>" + 'addresses_id' + "</th>" +
        "<th>" + 'addresses_address' + "</th>" +
        "<th>" + 'addresses_street' + "</th>" +
        "<th>" + 'addresses_street_name' + "</th>" +
        "<th>" + 'addresses_street_type' + "</th>" +
        "<th>" + 'addresses_adm' + "</th>" +
        "<th>" + 'addresses_adm1' + "</th>" +
        "<th>" + 'addresses_adm2' + "</th>" +
        "<th>" + 'addresses_cord_y' + "</th>" +
        "<th>" + 'addresses_cord_x' + "</th>" +
        "</tr>");

    if (data) {
        $(data).each(function(key, item){
            $(".table-body").append("<tr class='address_row' data-id="+item.id+">" +
                "<td>" + item.id + "</td>" +
                "<td>" + item.addresses_id + "</td>" +
                "<td>" + item.addresses_address + "</td>" +
                "<td>" + item.addresses_street + "</td>" +
                "<td>" + item.addresses_street_name + "</td>" +
                "<td>" + item.addresses_street_type + "</td>" +
                "<td>" + item.addresses_adm + "</td>" +
                "<td>" + item.addresses_adm1 + "</td>" +
                "<td>" + item.addresses_adm2 + "</td>" +
                "<td>" + item.addresses_cord_y + "</td>" +
                "<td>" + item.addresses_cord_x + "</td>" +
                // '<td><form action="file_1.php" method="get"> <input type="hidden" value="'+item.id+'" name="id"> <button class="btn btn-secondary" type="submit">select </button> </form></td>' +
                "</tr>");
        });
    }
    $("#information .message").text("");
    // $("#information").html(data);
}

$(document).ready(function () {
    $("#done").bind("click", function () {
        $.ajax({
            url: "/ajax/www/Task_2/app/content.php",
            dataType: "json",
            data: {name: $("#name").val()},
            type: "get",
            beforeSend: funcBefore,
            success: funcSuccess
        });
    });

    $(document).on('click', '.address_row', function () {
        var clickedId = $(this).attr('data-id');
        $('#result_form_input').val(clickedId)
        $('#result_form').submit();
    })
});