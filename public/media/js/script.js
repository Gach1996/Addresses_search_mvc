$(document).ready(function () {
    function funcBefore() {
        $("#information.message").text("Ожидание данных...");
    }

    function funcSuccess(data) {
        $(".table").remove();
        $(".table-head").html('');
        $(".table-body").html('');
        $(".table-head").append("<tr>" +
            "<th>" + 'Id' + "</th>" +
            "<th>" + 'Addresses id' + "</th>" +
            "<th>" + 'Addresses address' + "</th>" +
            "<th>" + 'Addresses street' + "</th>" +
            "<th>" + 'Addresses street name' + "</th>" +
            "<th>" + 'Addresses street type' + "</th>" +
            "<th>" + 'Addresses adm' + "</th>" +
            "<th>" + 'Addresses adm1' + "</th>" +
            "<th>" + 'Addresses adm2' + "</th>" +
            "<th>" + 'Addresses cord y' + "</th>" +
            "<th>" + 'Addresses cord x' + "</th>" +
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


    $("#done").on("click", function () {
        $.ajax({
            url: "/TasksMVC/search",
            dataType: "json",
            // contentType: "application/json",
            data: {name: $("#name").val()},
            type: "get",
            beforeSend: funcBefore,
            success: funcSuccess,
            error: function( jqXHR, textStatus, errorThrown ) {
                console.log( 'Could not get posts, server response: ' + textStatus + ': ' + errorThrown );
            }
        });
    });

    $(document).on('click', '.address_row', function () {
        var clickedId = $(this).attr('data-id');
        $('#result_form').attr('action', '/TasksMVC/search/' + clickedId);
        $('#result_form').submit();
    })
});
