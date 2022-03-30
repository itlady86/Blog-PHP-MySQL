<?php
/* Smarty version 4.1.0, created on 2022-03-30 10:40:29
  from 'V:\xampp\htdocs\VOS\Blog2\_tpl\add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6244177d51f699_16239675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '420896266b3647af12d0f14e763068aa345903f8' => 
    array (
      0 => 'V:\\xampp\\htdocs\\VOS\\Blog2\\_tpl\\add.tpl',
      1 => 1648629623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6244177d51f699_16239675 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="d-flex flex-column align-items-sm-center mx-5 p-5 bg-dark rounded-3">
            <form method="post" class="d-flex flex-column col-sm-10 col-lg-6 mt-3">
                <input name="nnazev" placeholder="Nadpis článku" class="rounded py-2">
                <textarea name="ntext" cols="30" rows="10" placeholder="Text článku" class="my-2"></textarea>
                <input name="nautor" placeholder="Autor článku" class="rounded py-2">
                <div class="d-flex flex-row justify-content-around">
                    <a href="index.php"><input type="button" class="py-2 px-5 mt-4 bg-warning rounded" value="Zrušit"></a>
                    <input type="submit" name="nnovy" class="py-2 px-5 mt-4 bg-info rounded" value="Uložit">
                </div>
            </form>
        </div>
    </main>
</body>
</html>

<?php }
}
