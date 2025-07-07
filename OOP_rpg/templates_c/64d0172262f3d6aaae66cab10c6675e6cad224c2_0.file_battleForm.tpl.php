<?php
/* Smarty version 5.5.0, created on 2025-07-04 07:50:19
  from 'file:battleForm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_686787bb78ecd4_03377891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64d0172262f3d6aaae66cab10c6675e6cad224c2' => 
    array (
      0 => 'battleForm.tpl',
      1 => 1751615406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_686787bb78ecd4_03377891 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1134160226686787bb773815_82543607', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_1134160226686787bb773815_82543607 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="card my-4 mx-auto" style="max-width: 500px;">
    <div class="card-header">
        <h2 class="mb-0">Battle Arena</h2>
    </div>
    <div class="card-body">
        <form action="index.php?page=startBattle" method="POST">
            <div class="mb-3">
                <label for="character1" class="form-label">Kies Character 1</label>
                <select class="form-select" id="character1" name="character1" required>
                    <option value="" disabled selected>Selecteer een character</option>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('characters'), 'character');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('character')->value) {
$foreach0DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('character')->getName();?>
"><?php echo $_smarty_tpl->getValue('character')->getName();?>
 (<?php echo $_smarty_tpl->getValue('character')->getRole();?>
)</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <div class="mb-3">
                <label for="character2" class="form-label">Kies Character 2</label>
                <select class="form-select" id="character2" name="character2" required>
                    <option value="" disabled selected>Selecteer een character</option>
                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('characters'), 'character');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('character')->value) {
$foreach1DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('character')->getName();?>
"><?php echo $_smarty_tpl->getValue('character')->getName();?>
 (<?php echo $_smarty_tpl->getValue('character')->getRole();?>
)</option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </select>
            </div>
            <button type="submit" class="btn btn-danger w-100">Start Battle</button>
        </form>
    </div>
</div>
<?php
}
}
/* {/block "content"} */
}
