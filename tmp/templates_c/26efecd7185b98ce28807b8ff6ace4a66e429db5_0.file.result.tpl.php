<?php
/* Smarty version 3.1.39, created on 2021-06-05 15:53:09
  from 'C:\xampp\htdocs\TasksMVC\views\search\result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bb81c5042bd5_77257703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26efecd7185b98ce28807b8ff6ace4a66e429db5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasksMVC\\views\\search\\result.tpl',
      1 => 1622901185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bb81c5042bd5_77257703 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="http://localhost/TasksMVC/public/media/css/style.css">
    <title>Task_2</title>
    <?php echo '<script'; ?>

        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous">
    <?php echo '</script'; ?>
>
</head>
<body>
<?php if ((isset($_smarty_tpl->tpl_vars['tableAddresses']->value))) {?>
    <div class="col-lg-12 my-3 p-3 bg-white rounded shadow-sm ">
         <h3>Clicked address: <?php echo $_smarty_tpl->tpl_vars['clickedAddress']->value['addresses_street'];?>
</h3>
        <table class="table table-striped table-dark" id="addresses">
            <thead >
            <tr>
                <th scope="col">Distance < 5 Km</th>
                <th scope="col">Distance From 5 Km to 30 Km</th>
                <th scope="col">Distance more than 30 Km</th>
            </tr>
            </thead>
            <tbody>
        <?php echo $_smarty_tpl->tpl_vars['tableAddresses']->value;?>

            </tbody>
        </table>
    </div>
<?php }
echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>
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
<?php }
}
