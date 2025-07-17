<?php
/* Smarty version 5.5.0, created on 2025-07-17 10:33:39
  from 'file:createItemForm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6878d183c776d6_93069538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aead4243f9b6d3ac0d17b136f374bfc3d9a30d9' => 
    array (
      0 => 'createItemForm.tpl',
      1 => 1752147653,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6878d183c776d6_93069538 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Persoonlijk-Repo\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_13332297026878d183c75a68_48754971', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_13332297026878d183c75a68_48754971 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Persoonlijk-Repo\\OOP_rpg\\templates';
?>

<div class="row justify-content-center my-5">
  <div class="col-md-6">
    <div class="card shadow">
      <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Create Item</h4>
      </div>
      <div class="card-body">
        <form action="index.php?page=saveItem" method="POST">
          <div class="mb-3">
            <label for="itemName" class="form-label">Naam</label>
            <input type="text" class="form-control" id="itemName" name="name" required>
          </div>
          <div class="mb-3">
            <label for="itemType" class="form-label">Type</label>
            <select class="form-select" id="itemType" name="type" required>
              <option value="" disabled selected>Kies een type</option>
              <option value="weapon">Weapon</option>
              <option value="armor">Armor</option>
              <option value="consumable">Consumable</option>
              <option value="misc">Misc</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="itemValue" class="form-label">Waarde</label>
            <input type="number" class="form-control" id="itemValue" name="value" min="0" step="0.01" required>
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Create Item</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
}
}
/* {/block "content"} */
}
