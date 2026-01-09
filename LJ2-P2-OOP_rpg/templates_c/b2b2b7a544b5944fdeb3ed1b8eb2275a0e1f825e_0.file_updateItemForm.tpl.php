<?php
/* Smarty version 5.5.0, created on 2025-07-11 08:38:03
  from 'file:updateItemForm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6870cd6b082d29_67489451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2b2b7a544b5944fdeb3ed1b8eb2275a0e1f825e' => 
    array (
      0 => 'updateItemForm.tpl',
      1 => 1752223052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6870cd6b082d29_67489451 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_10704772586870cd6b0747c9_69312670', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_10704772586870cd6b0747c9_69312670 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Update Item
        </div>
        <div class="card-body">
            <form action="index.php?page=saveUpdatedItem" method="POST">
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->getValue('item')->getId();?>
">

                <div class="mb-3">
                    <label for="name" class="form-label">Naam</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item')->getName(), ENT_QUOTES, 'UTF-8', true);?>
" required>
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-select" id="type" name="type" required>
                        <option value="weapon" <?php if ($_smarty_tpl->getValue('item')->getType() == 'weapon') {?>selected<?php }?>>Weapon</option>
                        <option value="armor" <?php if ($_smarty_tpl->getValue('item')->getType() == 'armor') {?>selected<?php }?>>Armor</option>
                        <option value="consumable" <?php if ($_smarty_tpl->getValue('item')->getType() == 'consumable') {?>selected<?php }?>>Consumable</option>
                        <option value="misc" <?php if ($_smarty_tpl->getValue('item')->getType() == 'misc') {?>selected<?php }?>>Misc</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="value" class="form-label">Waarde</label>
                    <input type="number" class="form-control" id="value" name="value" value="<?php echo $_smarty_tpl->getValue('item')->getValue();?>
" step="0.01" min="0" required>
                </div>

                <button type="submit" class="btn btn-primary">Update Item</button>
                <a href="index.php?page=listItems" class="btn btn-secondary ms-2">Cancel</a>
            </form>
        </div>
    </div>
</div>
<?php
}
}
/* {/block "content"} */
}
