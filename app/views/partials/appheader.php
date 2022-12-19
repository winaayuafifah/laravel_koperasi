<div id="topbar" class="navbar navbar-expand-md fixed-top navbar-dark bg-info">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php print_link(HOME_PAGE) ?>">
            <img class="img-responsive" src="<?php print_link(SITE_LOGO); ?>" /> <?php echo SITE_NAME ?>
            </a>
            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            </button>
            <button type="button" id="sidebarCollapse" class="btn btn-info">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <?php Html :: render_menu(Menu :: $navbartopleft  , 'navbar-nav mr-auto' ); ?>
            </div>
        </div>
    </div>
    <nav id="sidebar" class="navbar-dark bg-info">
        <?php Html :: render_menu(Menu :: $navbarsideleft  , 'nav navbar-nav w-100 flex-column align-self-start'  , "accordion"); ?>
    </nav>
