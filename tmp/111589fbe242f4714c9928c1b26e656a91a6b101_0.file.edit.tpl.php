<?php
/* Smarty version 4.1.0, created on 2022-03-30 10:42:08
  from 'V:\xampp\htdocs\VOS\Blog2\_tpl\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624417e0a94ad2_35821871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '111589fbe242f4714c9928c1b26e656a91a6b101' => 
    array (
      0 => 'V:\\xampp\\htdocs\\VOS\\Blog2\\_tpl\\edit.tpl',
      1 => 1648629725,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624417e0a94ad2_35821871 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h1 class="text-center mb-5 py-5 alert alert-primary" role="alert"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
    <main class="container-sm">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['query']->value, 'q');
$_smarty_tpl->tpl_vars['q']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['q']->value) {
$_smarty_tpl->tpl_vars['q']->do_else = false;
?>
    <div class="d-flex flex-column align-items-sm-center mx-5 p-5 bg-dark rounded-3">
        <form method="post" class="d-flex flex-column col-sm-10 col-lg-6 mt-3">
            <input hidden name="nid" value="<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
">
            <input name="nnazev" class="rounded py-2" value="<?php echo $_smarty_tpl->tpl_vars['q']->value['nazev'];?>
">
            <textarea name="ntext" cols="30" rows="10" class="my-2"><?php echo $_smarty_tpl->tpl_vars['q']->value['text'];?>
</textarea>
            <input name="nautor" class="rounded py-2" value="<?php echo $_smarty_tpl->tpl_vars['q']->value['autor'];?>
">
            <div class="d-flex flex-row justify-content-around">
                <a href="index.php"><input type="button" class="py-2 px-5 mt-4 bg-warning rounded" value="Zrušit"></a>
                <input type="submit" name="nupdate" class="py-2 px-5 mt-4 bg-info rounded" value="Uložit">
            </div>
        </form>
    </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </main>
</body>
</html>
<?php }
}
