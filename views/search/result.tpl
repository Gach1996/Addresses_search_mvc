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
        crossorigin="anonymous">
    </script>
</head>
<body>
{if isset($tableAddresses) }
    <div class="col-lg-12 my-3 p-3 bg-white rounded shadow-sm ">
         <h3>Clicked address: {$clickedAddress['addresses_street']}</h3>
        <table class="table table-striped table-dark" id="addresses">
            <thead >
            <tr>
                <th scope="col">Distance < 5 Km</th>
                <th scope="col">Distance From 5 Km to 30 Km</th>
                <th scope="col">Distance more than 30 Km</th>
            </tr>
            </thead>
            <tbody>
        {$tableAddresses}
            </tbody>
        </table>
    </div>
{/if}
<script>
    $(function () {
        $('table')
            .on('click', 'th', function () {
                 var index = $(this).index(),
                     rows = [],
                     thClass = $(this).hasClass('asc') ? 'desc' : 'asc';

                    $('#addresses th').removeClass('asc desc');
                    $(this).addClass(thClass);

                    $('#addresses tbody tr').each(function (index, row) {
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

            });
    });
</script>
<style >
    #addresses th,
    #addresses td {
        padding: 10px;
    }

    #addresses th:hover {
        cursor: pointer;
    }

    #addresses th.asc:after {
        display: inline;
        content: '↓';
    }

    #addresses th.desc:after {
        display: inline;
        content: '↑';
    }

    #addresses th {
        background: #ccc;
    }
</style>
</body>
</html>
