<?php require_once 'inc/html_head.php'; ?>

<div class="blog-masthead navbar-fixed-top">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item active" href="#">Home</a>
            <a class="blog-nav-item" href="#">Projects</a>
            <a class="blog-nav-item" href="#">Experiments</a>
            <a class="blog-nav-item" href="#">Notes</a>
            <a class="blog-nav-item" href="#">About</a>
        </nav>
    </div>
</div>

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title">Noel's Homepage</h1>

        <p class="lead blog-description">Where I share all my failures and heartaches from CSCI-3236 Internet
            Programming.</p>
    </div>

    <!--    <h4>Archives</h4>-->
    <!--    <div class="row">-->
    <!--        <div class="col-sm-3">-->
    <!--            <div class="sidebar-nav">-->
    <!--                <div class="navbar navbar-default" role="navigation">-->
    <!--                    <div class="navbar-header">-->
    <!--                        <button type="button" class="navbar-toggle" data-toggle="collapse"-->
    <!--                                data-target=".sidebar-navbar-collapse">-->
    <!--                            <span class="sr-only">Toggle navigation</span>-->
    <!--                            <span class="icon-bar"></span>-->
    <!--                            <span class="icon-bar"></span>-->
    <!--                            <span class="icon-bar"></span>-->
    <!--                        </button>-->
    <!--                        <span class="visible-xs navbar-brand">Sidebar menu</span>-->
    <!--                    </div>-->
    <!--                    <div class="navbar-collapse collapse sidebar-navbar-collapse">-->
    <!--                        <ul class="nav navbar-nav">-->
    <!--                            <li class="active"><a href="#">Menu Item 1</a></li>-->
    <!--                            <li><a href="#">Menu Item 2</a></li>-->
    <!--                            <li class="dropdown">-->
    <!--                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b-->
    <!--                                        class="caret"></b></a>-->
    <!--                                <ul class="dropdown-menu">-->
    <!--                                    <li><a href="#">Action</a></li>-->
    <!--                                    <li><a href="#">Another action</a></li>-->
    <!--                                    <li><a href="#">Something else here</a></li>-->
    <!--                                    <li class="divider"></li>-->
    <!--                                    <li class="dropdown-header">Nav header</li>-->
    <!--                                    <li><a href="#">Separated link</a></li>-->
    <!--                                    <li><a href="#">One more separated link</a></li>-->
    <!--                                </ul>-->
    <!--                            </li>-->
    <!--                            <li><a href="#">Menu Item 4</a></li>-->
    <!--                            <li><a href="#">Reviews <span class="badge">1,118</span></a></li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                    <!--/.nav-collapse -->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <div class="col-sm-9">
        <?php get_page_content(); ?>
    </div>
</div>
</div><!-- End container -->
<?php require_once 'inc/footer.php'; ?>
