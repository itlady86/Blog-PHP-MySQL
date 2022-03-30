<?php
/* Smarty version 4.1.0, created on 2022-03-30 10:29:19
  from 'V:\xampp\htdocs\VOS\Blog2\_tpl\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624414df409559_15263378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5ce94a17d686027ea109bd0d620b62e3e5e5efb' => 
    array (
      0 => 'V:\\xampp\\htdocs\\VOS\\Blog2\\_tpl\\index.tpl',
      1 => 1648628925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624414df409559_15263378 (Smarty_Internal_Template $_smarty_tpl) {
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
        <main class="container-sm pb-5">
            <section class="d-flex flex-column col-sm-10 mx-5">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['query']->value, 'q');
$_smarty_tpl->tpl_vars['q']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['q']->value) {
$_smarty_tpl->tpl_vars['q']->do_else = false;
?>
                    <div class="d-flex flex-row align-items-center">
                        <h2 class="article col-12 mb-3 p-4 bg-success rounded"><a href="view.php?id=<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['q']->value['nazev'];?>
</a></h2>
                        <form method="post" class="delBtn col-1">
                            <input hidden name="nid" value="<?php echo $_smarty_tpl->tpl_vars['q']->value['id'];?>
">
                            <input name="nsmazat" class="cross" type="submit" value="&times;" title="Smazat článek">
                        </form>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
                <a href="add.php" class="my-3 py-3 btn mybtn2 bg-warning" role="button"><?php echo $_smarty_tpl->tpl_vars['new']->value;?>
</a>
            </section>    
      
        </main>
    </body>
</html>
    


    
<?php }
}
