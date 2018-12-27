<?php require_once("resources/config.php");  ?>

<?php include(TEMPLATE_FRONT . DS . "header.php");  ?>
        
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <?php include(TEMPLATE_FRONT . DS . "top_nav.php");  ?>
            </ul>
        </nav>
    </div>

    <header class="header">
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Contact</span>
            </h1>
            <a href="#projects" class="btn btn--white btn--animated">Discover my projects!</a>
        </div>
    </header>

    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary u-margin-bottom-medium">How to contact me</h2>
                <br>
                <br>
                <br>
                <br>
                <ul class="contact-us">
                    <li><a href="https://www.linkedin.com/in/alex-kenny-032543124/">My LinkedIn</a></li>
                    <li><a href="https://www.facebook.com/alex.kenny.507">My Facebook</a></li>
                    <li><a href="https://twitter.com/Im_Kenny_">My Twitter</a></li>
                    <li><a href="https://pacwestsoftware.com/index.php">Pacwest Software Development LLC Website</a></li>
                    <li><a href="https://www.instagram.com/pacwestsoftware/">Pacwest Software Development Instagram</a></li>
                </ul>
                <br>
                <br>
                <br>
                <br>
                <a href="resume.php" class="btn-text">My Resume &rarr;</a>
            </div>
        </section>
        <!-- end of moving pictures -->

        <section class="section-features">
            <div class="row">
                <div class="col-1-of-2">
                    &nbsp;
                </div>
                <div class="col-1-of-2">
                    &nbsp;
                </div>
            </div>
        </section>
        <!-- end of moving boxes -->
    </main>
    
<?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>