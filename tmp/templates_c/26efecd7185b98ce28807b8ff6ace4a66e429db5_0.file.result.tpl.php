<?php
/* Smarty version 3.1.39, created on 2021-06-07 09:56:02
  from 'C:\xampp\htdocs\TasksMVC\views\search\result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bdd1120f0332_06455768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26efecd7185b98ce28807b8ff6ace4a66e429db5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasksMVC\\views\\search\\result.tpl',
      1 => 1623052560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bdd1120f0332_06455768 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="APP" content="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/public/media/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/public/media/css/resStyle.css">
    <title>Result</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

        src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous">
    <?php echo '</script'; ?>
>
</head>
<body>





<main role="main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php if ((isset($_smarty_tpl->tpl_vars['tableAddresses']->value))) {?>
                    <div class="col-lg-12 my-3 p-3 bg-white rounded shadow-sm ">
                        <h3>Clicked address: <?php echo $_smarty_tpl->tpl_vars['clickedAddress']->value['addresses_street'];?>
</h3>
                        <table class="table" id="addresses">
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
                <?php }?>
            </div>
        </div>
    </div>

</main>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/public/media/js/sortScript.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
