<?php
/* Smarty version 5.8.0, created on 2026-02-26 11:20:05
  from 'file:index.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69a02c658fbfd8_64970185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd596e1a5ad8afde734b7c16d174afd41417fc095' => 
    array (
      0 => 'index.tpl',
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
function content_69a02c658fbfd8_64970185 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\progects\\newssite\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="category__list">
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('articles'), 'category');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('category')->value) {
$foreach0DoElse = false;
?>
        <div class="category__item">
            <div class="category__item-header">
                <div class="category__item-title"><?php echo $_smarty_tpl->getValue('category')['title'];?>
</div>
                <div class="link">
                    <a href="/category/<?php echo $_smarty_tpl->getValue('category')['id'];?>
">View all</a>
                </div>
            </div>
            <div class="article__list">
               <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('category')['articles'], 'article');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach1DoElse = false;
?>
                   <div class="article__item">
                       <div class="article__item-img">
                           <img src="<?php echo $_smarty_tpl->getValue('article')['img'];?>
" alt="">
                       </div>
                       <div class="article-title">
                           <a href="/article/<?php echo $_smarty_tpl->getValue('article')['id'];?>
"><?php echo $_smarty_tpl->getValue('article')['title'];?>
</a>
                       </div>
                       <div class="article-date">
                           <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('article')['created_at'],"%b %e %Y");?>

                       </div>
                       <div class="article-description">
                           <?php echo $_smarty_tpl->getValue('article')['description'];?>

                       </div>
                       <div class="link">
                           <a href="/article/<?php echo $_smarty_tpl->getValue('article')['id'];?>
">Continue reading</a>
                       </div>
                   </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
