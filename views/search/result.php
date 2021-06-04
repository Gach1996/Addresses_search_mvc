<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="http://localhost/TasksMVC/public/media/css/style.css">
    <title>Task_2</title>

    <script
        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>


</head>
<body>

<?php if(isset($tableAddresses)):?>
    <div class="col-lg-12 my-3 p-3 bg-white rounded shadow-sm ">
        <table class="table table-striped table-dark" id="addresses">
            <thead >
            <tr>
                <th scope="col">Distance < 5 Km</th>
                <th scope="col">Distance From 5 Km to 30 Km</th>
                <th scope="col">Distance more than 30 Km</th>
            </tr>
            </thead>
            <tbody>
            <?php for($i = 0; $i < $c; $i++): ?>
            <tr>
                <?php if(isset(array_values($tableAddresses['5'])[$i])):?>
                    <td data-distance='<?=array_values($tableAddresses['5'])[$i]['distance']?>'><?=array_values($tableAddresses['5'])[$i]['name'] . '(' . array_values($tableAddresses['5'])[$i]['distance'] . ' km)'?></td>
                <?php else:?>
                    <td></td>
                <?php endif;?>

                <?php if(isset(array_values($tableAddresses['5_30'])[$i])):?>
                    <td><?=array_values($tableAddresses['5_30'])[$i]['name'] . '(' . array_values($tableAddresses['5_30'])[$i]['distance'] . ' km)'?></td>
                <?php else:?>
                    <td></td>
                <?php endif;?>

                <?php if(isset(array_values($tableAddresses['30'])[$i])):?>
                    <td><?=array_values($tableAddresses['30'])[$i]['name'] . '(' . array_values($tableAddresses['30'])[$i]['distance'] . ' km)'?></td>
                <?php else:?>
                    <td></td>
                <?php endif;?>

            </tr>
            <?php endfor; ?>

<!--           --><?//= $tableAddressesHtml;?>

            </tbody>
        </table>
    </div>
<?php endif;?>

<script>
    $(function () {
        $('table')
            .on('click', 'th', function () {

                // $('th').each(function( index) {
                  var index = $(this).index();
                    var rows = [],

                        // console.log(index);


                        thClass = $(this).hasClass('asc') ? 'desc' : 'asc'; //asc

                    $('#addresses th').removeClass('asc desc'); /// []
                    $(this).addClass(thClass);  // + asc

                    $('#addresses tbody tr').each(function (index, row) { //0
                        rows.push($(row).detach());
                    });

                    rows.sort(function (a, b) {

                        var aValue = $(a).find('td').eq(index).attr('data-distance'),
                            bValue = $(b).find('td').eq(index).attr('data-distance');


                        return aValue > bValue
                            ? 1
                            : aValue < bValue
                                ? -1
                                : 0;
                    });

                    if ($(this).hasClass('desc')) {
                        rows.reverse();
                    }

                    $.each(rows, function (index, row) {
                        $('#addresses tbody ').append(row);
                    });
                // });
            });
    });
</script>
<style>
    #ceo th,
    #ceo td {
        padding: 10px 30px;
    }

    #ceo th {
        background: #333;
        color: white;
    }

    #ceo th.asc:after {
        display: inline;
        content: '↓';
    }

    #ceo th.desc:after {
        display: inline;
        content: '↑';
    }

    #ceo td {
        background: #ccc;
    }
</style>
</body>
</html>
