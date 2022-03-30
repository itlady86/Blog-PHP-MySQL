<?php
/* Smarty version 4.1.0, created on 2022-03-30 10:28:20
  from 'V:\xampp\htdocs\VOS\Blog2\_tpl\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624414a4da55e0_60456470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35140c02aadd8711e94f68f94a0cb1b313c2fa4c' => 
    array (
      0 => 'V:\\xampp\\htdocs\\VOS\\Blog2\\_tpl\\view.tpl',
      1 => 1648628891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624414a4da55e0_60456470 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
">
</head>
    
<body>
        <h1 class="text-center mb-5 py-5 alert alert-primary" role="alert"> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </h1>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['query']->value, 'q');
$_smarty_tpl->tpl_vars['q']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['q']->value) {
$_smarty_tpl->tpl_vars['q']->do_else = false;
?>
            <section class="d-flex flex-column align-items-sm-center">
                <div class="col-sm-8 col-lg-6 my-3 rounded bg-text">
                    <h2 class="p-3 bg-success rounded"><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['q']->value['nazev'];?>
</a></h2>
                    <div class="px-5">
                        <div class="py-3"><?php echo $_smarty_tpl->tpl_vars['q']->value['text'];?>
</div>
                        <div class="py-2 my-1"> Vloženo: <?php echo $_smarty_tpl->tpl_vars['q']->value['datum'];?>
</div>
                        <div class="py-2 mb-3"> Autor: <?php echo $_smarty_tpl->tpl_vars['q']->value['autor'];?>
</div>
                    </div>
                </div>
                <div class="d-flex flex-row mb-5">
                    <a href="index.php" class="btn mybtn1 bg-success mx-3" role="button">Zpět</a>
                    <a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
" name="id" value="<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
" class="btn mybtn1 bg-warning mx-3" role="button">Upravit článek</a>
                </div>
            </section>    
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </body>
</html><?php }
}
