<?php
/* Smarty version 5.5.0, created on 2025-07-17 10:33:45
  from 'file:itemDeleted.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6878d18954b466_81374230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5953f5e763b3c4f4fd86a13cdfe28991098023b' => 
    array (
      0 => 'itemDeleted.tpl',
      1 => 1752224279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6878d18954b466_81374230 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Persoonlijk-Repo\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12836242826878d189544e53_16933953', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_12836242826878d189544e53_16933953 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Persoonlijk-Repo\\OOP_rpg\\templates';
?>

<div class="container mt-5">
    <div class="alert alert-success" role="alert">
        Item has been successfully deleted!
    </div>
    <div class="card mb-4">
        <div class="card-header">
            Deleted Item Details
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>ID:</strong> <?php echo $_smarty_tpl->getValue('item')->getId();?>
</li>
                <li class="list-group-item"><strong>Name:</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item')->getName(), ENT_QUOTES, 'UTF-8', true);?>
</li>
                <li class="list-group-item"><strong>Type:</strong> <?php echo htmlspecialchars((string)$_smarty_tpl->getValue('item')->getType(), ENT_QUOTES, 'UTF-8', true);?>
</li>
                <li class="list-group-item"><strong>Value:</strong> <?php echo $_smarty_tpl->getValue('item')->getValue();?>
 gold</li>
            </ul>
        </div>
    </div>
    <a href="index.php?page=listItems" class="btn btn-primary">Back to Item List</a>
    <a href="index.php?page=createItem" class="btn btn-success ms-2">Create New Item</a>
</div>
<?php
}
}
/* {/block "content"} */
}
