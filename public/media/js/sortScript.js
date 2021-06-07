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

                    var aValue = +$(a).find('td').eq(index).attr('data-distance'),
                        bValue = +$(b).find('td').eq(index).attr('data-distance');

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