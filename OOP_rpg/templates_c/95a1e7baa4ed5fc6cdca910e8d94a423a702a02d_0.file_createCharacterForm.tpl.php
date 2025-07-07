<?php
/* Smarty version 5.5.0, created on 2025-07-02 20:25:11
  from 'file:createCharacterForm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_686595a7831647_46260661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95a1e7baa4ed5fc6cdca910e8d94a423a702a02d' => 
    array (
      0 => 'createCharacterForm.tpl',
      1 => 1751487879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_686595a7831647_46260661 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1858162327686595a782f720_32936594', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, 'layout.tpl', $_smarty_current_dir);
}
/* {block "content"} */
class Block_1858162327686595a782f720_32936594 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Herhaling-LJ1\\OOP_rpg\\templates';
?>

<div class="card my-4 mx-auto" style="max-width: 500px;">
    <div class="card-header">
        <h2 class="mb-0">Create Character</h2>
    </div>
    <div class="card-body">
        <form action="index.php?page=saveCharacter" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role<span class="text-danger">*</span></label>
                <select class="form-select" id="role" name="role" required>
                    <option value="" disabled selected>Select a role</option>
                    <option value="Warrior">Warrior</option>
                    <option value="Mage">Mage</option>
                    <option value="Rogue">Rogue</option>
                    <option value="Healer">Healer</option>
                    <option value="Tank">Tank</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="health" class="form-label">Health</label>
                <input type="number" class="form-control" id="health" name="health" min="50" max="200" value="100" required>
            </div>
            <div class="mb-3">
                <label for="attack" class="form-label">Attack</label>
                <input type="number" class="form-control" id="attack" name="attack" min="10" max="50" value="20" required>
            </div>
            <div class="mb-3">
                <label for="defense" class="form-label">Defense</label>
                <input type="number" class="form-control" id="defense" name="defense" min="5" max="30" value="10" required>
            </div>
            <div class="mb-3">
                <label for="range" class="form-label">Range</label>
                <input type="number" class="form-control" id="range" name="range" min="1" max="10" value="1" required>
            </div>
            
            <div class="mb-3" id="rageField" style="display: none;">
                <label for="rage" class="form-label">Rage</label>
                <input type="number" class="form-control" id="rage" name="rage" min="0" max="100" value="100">
            </div>
            
            <div class="mb-3" id="manaField" style="display: none;">
                <label for="mana" class="form-label">Mana</label>
                <input type="number" class="form-control" id="mana" name="mana" min="0" max="150" value="150">
            </div>
            <div class="mb-3" id="energyField" style="display: none;">
                <label for="energy" class="form-label">Energy</label>
                <input type="number" class="form-control" id="energy" name="energy" min="0" max="100" value="100">
            </div> 
            <div class="mb-3" id="spirit" style="display: none;">
                <label for="spirit" class="form-label">spirit   </label>
                <input type="number" class="form-control" id="spirit" name="spirit" min="0" max="200" value="200">
            </div>                
            
            <button type="submit" class="btn btn-primary w-100">Create Character</button>
        </form>
    </div>
</div>

<?php echo '<script'; ?>
>
    function toggleFields() {
        var role = document.getElementById('role').value;
        document.getElementById('rageField').style.display = (role === 'Warrior') ? 'block' : 'none';
        document.getElementById('manaField').style.display = (role === 'Mage') ? 'block' : 'none';
        document.getElementById('energyField').style.display = (role === 'Rogue' ) ? 'block' : 'none';
        document.getElementById('spirit').style.display = (role === 'Healer') ? 'block' : 'none';
    }

    document.getElementById('role').addEventListener('change', toggleFields);

    // Call the function on page load to set the initial state
    toggleFields();
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
