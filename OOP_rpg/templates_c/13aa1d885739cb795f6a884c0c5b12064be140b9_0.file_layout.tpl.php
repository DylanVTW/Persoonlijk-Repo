<?php
/* Smarty version 5.5.0, created on 2025-07-17 10:33:33
  from 'file:layout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.0',
  'unifunc' => 'content_6878d17dde9a87_17956140',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13aa1d885739cb795f6a884c0c5b12064be140b9' => 
    array (
      0 => 'layout.tpl',
      1 => 1752150858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6878d17dde9a87_17956140 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Persoonlijk-Repo\\OOP_rpg\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en" class="h-100" data-bs-theme="auto">
  <head>
    <?php echo '<script'; ?>
 src="./templates/js/color-modes.js"><?php echo '</script'; ?>
>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.122.0" />
    <title>Sticky Footer Navbar Template · Bootstrap v5.3</title>
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.3/examples/sticky-footer-navbar/"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@docsearch/css@3"
    />
    <link href="./templates/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Favicons -->
    <link
      rel="apple-touch-icon"
      href="/docs/5.3/assets/img/favicons/apple-touch-icon.png"
      sizes="180x180"
    />
    <link
      rel="icon"
      href="/docs/5.3/assets/img/favicons/favicon-32x32.png"
      sizes="32x32"
      type="image/png"
    />
    <link
      rel="icon"
      href="/docs/5.3/assets/img/favicons/favicon-16x16.png"
      sizes="16x16"
      type="image/png"
    />
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json" />
    <link
      rel="mask-icon"
      href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg"
      color="#712cf9"
    />
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico" />
    <meta name="theme-color" content="#712cf9" />
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, 0.1);
        border: solid rgba(0, 0, 0, 0.15);
        border-width: 1px 0;
        box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
          inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
      }
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="./templates/css/sticky-footer-navbar.css" rel="stylesheet" />
  </head>
  <body class="d-flex flex-column h-100">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path
          d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"
        />
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path
          d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"
        />
        <path
          d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"
        />
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path
          d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
        />
      </symbol>
    </svg>
    <div
      class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle"
    >
      <button
        class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
        id="bd-theme"
        type="button"
        aria-expanded="false"
        data-bs-toggle="dropdown"
        aria-label="Toggle theme (auto)"
      >
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
          <use href="#circle-half"></use>
        </svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul
        class="dropdown-menu dropdown-menu-end shadow"
        aria-labelledby="bd-theme-text"
      >
        <li>
          <button
            type="button"
            class="dropdown-item d-flex align-items-center"
            data-bs-theme-value="light"
            aria-pressed="false"
          >
            <svg class="bi me-2 opacity-50" width="1em" height="1em">
              <use href="#sun-fill"></use>
            </svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em">
              <use href="#check2"></use>
            </svg>
          </button>
        </li>
        <li>
          <button
            type="button"
            class="dropdown-item d-flex align-items-center"
            data-bs-theme-value="dark"
            aria-pressed="false"
          >
            <svg class="bi me-2 opacity-50" width="1em" height="1em">
              <use href="#moon-stars-fill"></use>
            </svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em">
              <use href="#check2"></use>
            </svg>
          </button>
        </li>
        <li>
          <button
            type="button"
            class="dropdown-item d-flex align-items-center active"
            data-bs-theme-value="auto"
            aria-pressed="true"
          >
            <svg class="bi me-2 opacity-50" width="1em" height="1em">
              <use href="#circle-half"></use>
            </svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em">
              <use href="#check2"></use>
            </svg>
          </button>
        </li>
      </ul>
    </div>
      <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-body-tertiary">
           <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?page=createCharacter"
                  >Create Character</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?page=listCharacters"
                  >Character List</a
                >
              </li>
                            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?page=testDatabase"
                  >Test Database</a
                >
              </li>
              <!-- Voeg deze <li> toe in je <ul class="navbar-nav ..."> in layout.tpl -->
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php?page=battleForm">Battle Arena</a>
              </li>
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php?page=characterStats">Character Statistics</a>
              </li>
               <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?page=createItem">
                  Create Item
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?page=listItems">
                  Item List
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>

            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- Begin page content -->
    <main class="flex-shrink-0">
      <div class="container"><?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_6312531856878d17dde89d4_01048583', "content");
?>
</div>
    </main>
    <footer class="footer mt-auto py-3 bg-body-tertiary">
      <div class="container">
        <span class="text-body-secondary"
          >Place sticky footer content here.</span
        >
      </div>
    </footer>
    <?php echo '<script'; ?>
 src="./templates/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
/* {block "content"} */
class Block_6312531856878d17dde89d4_01048583 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\wamp64\\www\\Persoonlijk-Repo\\OOP_rpg\\templates';
}
}
/* {/block "content"} */
}
