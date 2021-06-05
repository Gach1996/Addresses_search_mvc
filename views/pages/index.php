<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <link rel="stylesheet" type="text/css" href="http://localhost/TasksMVC/public/media/css/style.css">-->
<!--    <title>Task_2</title>-->
<!---->
<!---->
<!--    <script-->
<!--        src="https://code.jquery.com/jquery-2.2.4.min.js"-->
<!--        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="-->
<!--        crossorigin="anonymous"></script>-->
<!--<!--    <script src="../TasksMVC/public/media/js/script.js">-->-->
<!--<!---->-->
<!--<!--</script>-->-->
<!--                <script>-->
<!--                           function funcBefore() {-->
<!--                               $("#information .message").text("Ожидание данных...");-->
<!---->
<!--                           }-->
<!--                               function funcSuccess(data) {-->
<!--                                   $(".table").remove();-->
<!--                                   $(" .table-head").html('');-->
<!--                                   $(" .table-body").html('');-->
<!--                                   $(".table-head").append("<tr>" +-->
<!--                                       "<th>" + 'id' + "</th>" +-->
<!--                                       "<th>" + 'addresses_id' + "</th>" +-->
<!--                                       "<th>" + 'addresses_address' + "</th>" +-->
<!--                                       "<th>" + 'addresses_street' + "</th>" +-->
<!--                                       "<th>" + 'addresses_street_name' + "</th>" +-->
<!--                                       "<th>" + 'addresses_street_type' + "</th>" +-->
<!--                                       "<th>" + 'addresses_adm' + "</th>" +-->
<!--                                       "<th>" + 'addresses_adm1' + "</th>" +-->
<!--                                       "<th>" + 'addresses_adm2' + "</th>" +-->
<!--                                       "<th>" + 'addresses_cord_y' + "</th>" +-->
<!--                                       "<th>" + 'addresses_cord_x' + "</th>" +-->
<!--                                       "</tr>");-->
<!---->
<!--                                   if (data) {-->
<!--                                       $(data).each(function (key, item) {-->
<!--                                           $(".table-body").append("<tr class='address_row' data-id=" + item.id + ">" +-->
<!--                                               "<td>" + item.id + "</td>" +-->
<!--                                               "<td>" + item.addresses_id + "</td>" +-->
<!--                                               "<td>" + item.addresses_address + "</td>" +-->
<!--                                               "<td>" + item.addresses_street + "</td>" +-->
<!--                                               "<td>" + item.addresses_street_name + "</td>" +-->
<!--                                               "<td>" + item.addresses_street_type + "</td>" +-->
<!--                                               "<td>" + item.addresses_adm + "</td>" +-->
<!--                                               "<td>" + item.addresses_adm1 + "</td>" +-->
<!--                                               "<td>" + item.addresses_adm2 + "</td>" +-->
<!--                                               "<td>" + item.addresses_cord_y + "</td>" +-->
<!--                                               "<td>" + item.addresses_cord_x + "</td>" +-->
<!--                                               "</tr>");-->
<!--                                       });-->
<!--                                   }-->
<!--                                   $("#information .message").text("");-->
<!--                                   // $("#information").html(data);-->
<!--                               }-->
<!---->
<!--                               $(document).ready(function () {-->
<!--                                   $("#done").bind("click", function () {-->
<!--                                       $.ajax({-->
<!--                                           url: "/TasksMVC/search",-->
<!--                                           dataType: "json",-->
<!--                                           data: {name: $("#name").val()},-->
<!--                                           type: "get",-->
<!--                                           beforeSend: funcBefore,-->
<!--                                           success: funcSuccess-->
<!--                                       });-->
<!--                                   });-->
<!---->
<!--                                   $(document).on('click', '.address_row', function () {-->
<!--                                       var clickedId = $(this).attr('data-id');-->
<!--                                       $('#result_form').attr('action', '/TasksMVC/search/' + clickedId);-->
<!--                                       $('#result_form').submit();-->
<!--                                   });-->
<!--                               });-->
<!---->
<!--                </script>-->
<!---->
<!--</head>-->
<!--<body>-->
<!---->
<!--<input type="text" id="name" placeholder="Введите текст">-->
<!--<input type="button" id="done" value="Send">-->
<!--<div id="information">-->
<!--    <p class="message"></p>-->
<!--    <table class="tab">-->
<!--        <thead class="table-head"></thead>-->
<!--        <tbody class="table-body"></tbody>-->
<!--    </table>-->
<!--</div>-->
<!---->
<!--<form action="" method="get" id="result_form"></form>-->
<!--<!--{if(isset($_GET['id'])) }-->-->
<?php //if(isset($_GET['id'])):?>
<!--    <div class="col-lg-12 my-3 p-3 bg-white rounded shadow-sm ">-->
<!--        <table class="table table-striped table-dark" id="addresses">-->
<!--            <thead >-->
<!--            <tr>-->
<!--                <th scope="col">Distance < 5 Km</th>-->
<!--                <th scope="col">Distance From 5 Km to 30 Km</th>-->
<!--                <th scope="col">Distance more than 30 Km</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            --><?php //echo $tableAddresses ?? ''; ?>
<!--            </tbody>-->
<!--        </table>-->
<!--    </div>-->
<?php //endif;?>
<!---->
<!--</body>-->
<!--</html>-->
