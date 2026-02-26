<?php
/* Smarty version 5.8.0, created on 2026-02-26 11:20:16
  from 'file:category.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.8.0',
  'unifunc' => 'content_69a02c70789919_90264567',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c3c6484f0f2918d2f519b494343292008ef2a61' => 
    array (
      0 => 'category.tpl',
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
function content_69a02c70789919_90264567 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\progects\\newssite\\templates';
$_smarty_tpl->renderSubTemplate("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="category__item">
    <div class="category__item-header">
        <div class="category__item-title"><?php echo $_smarty_tpl->getValue('category')['name'];?>
</div>
    </div>
    <div class="article__list">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('articles'), 'article');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('article')->value) {
$foreach0DoElse = false;
?>
            <div class="article__item current-category">
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
<div class="pagination">
    <ul>
        <li>
            <a href="?page=1">В начало</a>
        </li>
        <?php
$_smarty_tpl->assign('i', null);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->getValue('totalPages')+1 - (1) : 1-($_smarty_tpl->getValue('totalPages'))+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <li class="link
                <?php if ($_smarty_tpl->getValue('currenPage') == $_smarty_tpl->getValue('i')) {?>active<?php }?>
            ">
                <a href="?page=<?php echo $_smarty_tpl->getValue('i');?>
"><?php echo $_smarty_tpl->getValue('i');?>
</a>
            </li>
        <?php }
}
?>
        <li>
            <a href="?page=<?php echo $_smarty_tpl->getValue('totalPages');?>
">В конец</a>
        </li>

    </ul>
</div>
<?php $_smarty_tpl->renderSubTemplate("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
}
}
