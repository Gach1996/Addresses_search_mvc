<?php
/* Smarty version 3.1.39, created on 2021-06-05 01:00:16
  from 'C:\xampp\htdocs\TasksMVC\views\pages\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bab08074df77_17015924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac77dddc4cd9092a7feca31b5608db535117809' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasksMVC\\views\\pages\\index.tpl',
      1 => 1622847460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bab08074df77_17015924 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="http://localhost/TasksMVC/public/media/css/style.css">
    <title>Search Address</title>

    <?php echo '<script'; ?>

            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous">
    <?php echo '</script'; ?>
>
</head>
<body>

<input type="text" id="name" placeholder="Введите текст">
<input type="button" id="done" value="Готово">
<div id="information">
    <p class="message"></p>
    <table class="tab">
        <thead class="table-head"></thead>
        <tbody class="table-body"></tbody>
    </table>
</div>

<form action="" method="get" id="result_form"></form>
<?php if ((isset($_smarty_tpl->tpl_vars['_GET']->value['id']))) {?>
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
        <?php echo $_smarty_tpl->tpl_vars['tableAddressesHtml']->value;?>

        <?php if ((isset($_smarty_tpl->tpl_vars['tableAddresses']->value))) {?>
            <?php echo $_smarty_tpl->tpl_vars['tableAddresses']->value;?>

        <?php } else { ?>

        <?php }?>

        </tbody>
    </table>
</div>
<?php }
echo '<script'; ?>
 src="http://localhost/TasksMVC/public/media/js/script.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
