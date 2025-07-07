{extends file='layout.tpl'} {block name="content"}
<div class="container my-5">
  <h2 class="mb-4 text-center">Battle Result</h2>
  <div class="row justify-content-center mb-4">
    <div class="col-md-5">
      <div class="card mb-3">
        <div class="card-header bg-primary text-white">
          {$battle->getFighter1()->getName()}
          ({$battle->getFighter1()->getRole()})
        </div>
        <div class="card-body">
          <p>
            <strong>Health:</strong>
            {$battle->getFighter1()->getHealth()}
            <span class="text-muted"
              >(origineel: {$battle->getFighter1OriginalHealth()})</span
            >
          </p>
          <p><strong>Attack:</strong> {$battle->getFighter1()->getAttack()}</p>
          <p>
            <strong>Defense:</strong> {$battle->getFighter1()->getDefense()}
          </p>
          <p><strong>Range:</strong> {$battle->getFighter1()->getRange()}</p>

{if $battle->getFighter1()->getRole() == 'Warrior' && !is_array($battle->getFighter1()->getRage())}
            <p><strong>Rage:</strong> {$battle->getFighter1()->getRage()}</p>
{/if}
{if $battle->getFighter1()->getRole() == 'Mage' && !is_array($battle->getFighter1()->getMana())}
            <p><strong>Mana:</strong> {$battle->getFighter1()->getMana()}</p>
{/if}
{if $battle->getFighter1()->getRole() == 'Rogue' && !is_array($battle->getFighter1()->getEnergy())}
            <p><strong>Energy:</strong> {$battle->getFighter1()->getEnergy()}</p>
{/if}
{if $battle->getFighter1()->getRole() == 'Healer' && !is_array($battle->getFighter1()->getSpirit())}
            <p><strong>Spirit:</strong> {$battle->getFighter1()->getSpirit()}</p>
{/if}
        </div>
      </div>
    </div>
    <div class="col-md-2 d-flex align-items-center justify-content-center">
      <span class="display-6">VS</span>
    </div>
    <div class="col-md-5">
      <div class="card mb-3">
        <div class="card-header bg-success text-white">
          {$battle->getFighter2()->getName()}
          ({$battle->getFighter2()->getRole()})
        </div>
        <div class="card-body">
          <p>
            <strong>Health:</strong>
            {$battle->getFighter2()->getHealth()}
            <span class="text-muted"
              >(origineel: {$battle->getFighter2OriginalHealth()})</span
            >
          </p>
          <p><strong>Attack:</strong> {$battle->getFighter2()->getAttack()}</p>
          <p>
            <strong>Defense:</strong> {$battle->getFighter2()->getDefense()}
          </p>
          <p><strong>Range:</strong> {$battle->getFighter2()->getRange()}</p>


{if $battle->getFighter2()->getRole() == 'Warrior' && !is_array($battle->getFighter2()->getRage())}
            <p><strong>Rage:</strong> {$battle->getFighter2()->getRage()}</p>
{/if}
{if $battle->getFighter2()->getRole() == 'Mage' && !is_array($battle->getFighter2()->getMana())}
            <p><strong>Mana:</strong> {$battle->getFighter2()->getMana()}</p>
{/if}
{if $battle->getFighter2()->getRole() == 'Rogue' && !is_array($battle->getFighter2()->getEnergy())}
            <p><strong>Energy:</strong> {$battle->getFighter2()->getEnergy()}</p>
{/if}
{if $battle->getFighter2()->getRole() == 'Healer' && !is_array($battle->getFighter2()->getSpirit())}
            <p><strong>Spirit:</strong> {$battle->getFighter2()->getSpirit()}</p>
{/if}
        </div>
      </div>
    </div>
  </div>

  <div class="alert alert-info text-center mb-4">
    {if $winner == 'draw'}
    <strong>Het gevecht is geëindigd in een gelijkspel!</strong>
    {else}
    <strong>Winnaar: {$winner}</strong>
    {/if}
  </div>

  <!-- Battle bediening -->
  <div class="text-center my-4">
    {if $battle->getFighter1()->getHealth() > 0 &&
    $battle->getFighter2()->getHealth() > 0}
    <form
      action="index.php?page=battleRound"
      method="post"
      style="display: inline"
    >
      <input
        type="hidden"
        name="fighter1"
        value="{$battle->getFighter1()->getName()}"
      />
      <input
        type="hidden"
        name="fighter2"
        value="{$battle->getFighter2()->getName()}"
      />
      <button type="submit" class="btn btn-warning btn-lg">Attack</button>
    </form>
    {else}
    <form
      action="index.php?page=resetHealth"
      method="post"
      style="display: inline"
    >
      <input
        type="hidden"
        name="fighter1"
        value="{$battle->getFighter1()->getName()}"
      />
      <input
        type="hidden"
        name="fighter2"
        value="{$battle->getFighter2()->getName()}"
      />
      <button type="submit" class="btn btn-success btn-lg">Reset Health</button>
    </form>
    {/if}
  </div>

  <!-- Battle log sectie -->
  <div class="card mb-4">
    <div class="card-header">Gevechtsverslag</div>
    <div class="card-body">
      <ul class="mb-0">
        {foreach $battle->getBattleLog() as $regel}
        <li>{$regel nofilter}</li>
        {/foreach}
      </ul>
    </div>
  </div>

  <!-- Navigatieknoppen -->
  <div class="text-center mt-4">
    <a href="index.php?page=battleForm" class="btn btn-secondary me-2"
      >Nieuwe Battle</a
    >
    <a href="index.php?page=listCharacters" class="btn btn-outline-primary"
      >Terug naar Character List</a
    >
  </div>
</div>
{/block}
