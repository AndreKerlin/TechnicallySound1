<?php
/* Smarty version 3.1.33, created on 2018-11-19 19:02:52
  from 'C:\MAMP\htdocs\Smarty_Example_2\public_html\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bf34f2ccdf949_66679502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daf96780ddb24e1f2fcf45e3a0b5bf8ca188518b' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\Smarty_Example_2\\public_html\\templates\\home.tpl',
      1 => 1542669671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:form.tpl' => 1,
    'file:results.tpl' => 1,
  ),
),false)) {
function content_5bf34f2ccdf949_66679502 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
          crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>Welcome to <?php echo $_smarty_tpl->tpl_vars['variable_name']->value;?>
</h1>
            <p>This is an example of how a basic html page can be turned into a template
                and populated by smarty.
            </p>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['control']->value == 'form') {?>
        <?php $_smarty_tpl->_subTemplateRender('file:form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender('file:results.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

</div>
</body>
</html><?php }
}
