<?php
/* Smarty version 5.5.0, created on 2025-07-11 08:38:07
  from 'file:itemUpdated.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6870cd6fa587e8_68940558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4627b043454c02145188e5fcbbbc0fb769ab266' => 
    array (
      0 => 'itemUpdated.tpl',
      1 => 1752177770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6870cd6fa587e8_68940558 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_15515751966870cd6fa4f524_78637166', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layout.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_15515751966870cd6fa4f524_78637166 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="container mt-5">
    <div class="alert alert-success" role="alert">
        Item has been successfully updated!
    </div>
    <div class="card">
        <div class="card-header">
            Updated Item Details
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
            <a href="index.php?page=listItems" class="btn btn-primary mt-3">Back to Item List</a>
        </div>
    </div>
</div>
<?php
}
}
/* {/block "content"} */
}
