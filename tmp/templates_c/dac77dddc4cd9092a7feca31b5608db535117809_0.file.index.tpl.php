<?php
/* Smarty version 3.1.39, created on 2021-06-07 09:56:36
  from 'C:\xampp\htdocs\TasksMVC\views\pages\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bdd134c61659_84350868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac77dddc4cd9092a7feca31b5608db535117809' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasksMVC\\views\\pages\\index.tpl',
      1 => 1623052595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../templates/header.tpl' => 1,
  ),
),false)) {
function content_60bdd134c61659_84350868 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Address</title>
    <meta name="APP" content="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/public/media/css/style.css">
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
<?php $_smarty_tpl->_subTemplateRender('file:../templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main role="main">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Search address</h1>

            <div class="col-md-12">
                <form class="form-row row justify-content-md-center" action="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/search" method="GET" id="search">
                    <div class="col-lg-6">
                        <input type="text" id="name" placeholder="Search" class="form-control mr-sm-2">
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-outline-success w-100" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
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
                            <table class="table table-striped table-dark custom-table" id="addresses">
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
                    <?php }?>
                </div>
            </div>
    </div>

</main>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/public/media/js/script.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
