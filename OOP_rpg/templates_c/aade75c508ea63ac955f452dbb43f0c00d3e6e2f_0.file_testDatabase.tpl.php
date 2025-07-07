<?php
/* Smarty version 5.5.0, created on 2025-05-19 14:33:27
  from 'file:testDatabase.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_682b4137316217_21014954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aade75c508ea63ac955f452dbb43f0c00d3e6e2f' => 
    array (
      0 => 'testDatabase.tpl',
      1 => 1747665205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_682b4137316217_21014954 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1432444791682b41372258e4_79358514', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_1432444791682b41372258e4_79358514 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="card my-5 mx-auto" style="max-width: 500px;">
    <?php if (mb_strtolower((string) $_smarty_tpl->getValue('message'), 'UTF-8')) {?>
        <div class="card-header bg-success text-white">
            Database test geslaagd
        </div>
        <div class="card-body">
            <p class="card-text">De verbinding met de database is succesvol gemaakt.</p>
        </div>
    <?php } else { ?>
        <div class="card-header bg-danger text-white">
            Database test mislukt
        </div>
        <div class="card-body">
            <p class="card-text">
                <?php if ((true && ($_smarty_tpl->hasVariable('error') && null !== ($_smarty_tpl->getValue('error') ?? null)))) {
echo $_smarty_tpl->getValue('error');
} else { ?>Er is een onbekende fout opgetreden.<?php }?>
            </p>
        </div>
    <?php }?>
    <div class="card-footer text-end">
        <a href="index.php" class="btn btn-secondary">Terug naar Home</a>
    </div>
</div>
<?php
}
}
/* {/block "content"} */
}
