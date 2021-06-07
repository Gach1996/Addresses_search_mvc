<?php
/* Smarty version 3.1.39, created on 2021-06-07 09:55:57
  from 'C:\xampp\htdocs\TasksMVC\views\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60bdd10d0bfda0_17194818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5b2e6316f7f0eefdf6acdf534e6a97c0069ce69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TasksMVC\\views\\templates\\header.tpl',
      1 => 1623052537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60bdd10d0bfda0_17194818 (Smarty_Internal_Template $_smarty_tpl) {
?><header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <?php if (empty($_smarty_tpl->tpl_vars['APP']->value)) {?>
            <a class="navbar-brand" href="/">Home</a>
        <?php } else { ?>
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
">Home</a>
        <?php }?>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        DB
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/import">Fill addresses table</a>
                        <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['APP']->value;?>
/remove">Remove addresses table</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header><?php }
}
