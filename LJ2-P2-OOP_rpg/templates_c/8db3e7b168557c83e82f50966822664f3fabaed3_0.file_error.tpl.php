<?php
/* Smarty version 5.5.0, created on 2025-05-16 11:44:44
  from 'file:error.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6827252c901303_19324010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8db3e7b168557c83e82f50966822664f3fabaed3' => 
    array (
      0 => 'error.tpl',
      1 => 1747395188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6827252c901303_19324010 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_19779436986827252c8ee5b7_38148347', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_19779436986827252c8ee5b7_38148347 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="container my-5">
    <div class="alert alert-danger text-center" role="alert">
        <?php if ((true && ($_smarty_tpl->hasVariable('message') && null !== ($_smarty_tpl->getValue('message') ?? null)))) {?>
            <?php echo $_smarty_tpl->getValue('message');?>

        <?php } else { ?>
            Er is een fout opgetreden.
        <?php }?>
    </div>
</div>
<?php
}
}
/* {/block "content"} */
}
