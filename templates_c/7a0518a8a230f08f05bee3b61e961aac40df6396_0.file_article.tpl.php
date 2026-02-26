<?php
/* Smarty version 5.8.0, created on 2026-02-26 11:20:07
  from 'file:article.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69a02c67ca9ba4_35113881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a0518a8a230f08f05bee3b61e961aac40df6396' => 
    array (
      0 => 'article.tpl',
      1 => 1772008550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
))) {
function content_69a02c67ca9ba4_35113881 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\progects\\newssite\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="article__body">
    <h1 class="title">Article</h1>
    <div class="article-date"> <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('article')['created_at'],"%b %e %Y");?>
</div>
    <div class="article-img">
        <img src="<?php echo $_smarty_tpl->getValue('article')['img'];?>
" alt="">
    </div>
    <div class="article__contant">
        <?php echo $_smarty_tpl->getValue('article')['content'];?>

    </div>
</div>
<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
