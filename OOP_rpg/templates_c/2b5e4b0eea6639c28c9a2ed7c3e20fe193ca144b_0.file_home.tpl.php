<?php
/* Smarty version 5.5.0, created on 2025-05-16 11:42:14
  from 'file:home.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_68272496ed7b02_96718308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b5e4b0eea6639c28c9a2ed7c3e20fe193ca144b' => 
    array (
      0 => 'home.tpl',
      1 => 1747393381,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68272496ed7b02_96718308 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_87303110068272496ed1607_94732328', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_87303110068272496ed1607_94732328 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="container my-5">
    <div class="text-center">
        <h1 class="mb-4">Welkom bij de RPG Game!</h1>
        <p class="lead">
            Ontdek een wereld vol avontuur, helden en gevaren.<br>
            Maak je eigen karakter aan, bekijk de lijst met helden en ga op pad in jouw eigen RPG-avontuur.<br>
            Veel plezier en succes!
        </p>
    </div>
</div>
<?php
}
}
/* {/block "content"} */
}
