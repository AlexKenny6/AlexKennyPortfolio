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
                <span class="heading-primary--main">About Me</span>
            </h1>
            <a href="#projects" class="btn btn--white btn--animated">Discover my projects!</a>
        </div>
    </header>

    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">The College Life</h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small">Current Junior at Central Washington State University</h3>
                    <p class="paragraph">
                        I am majoring in Finance and getting a minor in IT: Web Design. I am a self-taught web developer going on with 3 years of industry experience.
                    </p>

                    <h3 class="heading-tertiary u-margin-bottom-small">One of my favorite quotes of all time:</h3>
                    <p class="paragraph">
                        "It takes 20 years to build a reputation and five minutes to ruin it. If you think about that, you'll do things differently." -Warren Buffett
                    </p>
                </div>
                <div class="col-1-of-2">
                    <div class="composition">
                        <img src="img/AK-Main-Pic.jpg" alt="Photo 1" class="composition__photo composition__photo--p1">
                    </div>
                </div>
            </div>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <center><a href="resume.php" class="btn-text">My Resume &rarr;</a></center>
        </section>
        
        <!-- end of moving pictures -->
        <section class="section-features">
            <div class="row">
                <div class="col-1-of-3">
                    <div class="feature-box">
                        <h3 class="heading-tertiary u-margin-bottom-small">Hard Working</h3>
                        <p class="feature-box__text">
                            When I am assigned a task, I put my head down and get to work.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="feature-box">
                        <h3 class="heading-tertiary u-margin-bottom-small">Determined</h3>
                        <p class="feature-box__text">
                            I am determined to improve on and learn more things like different programming languages. 
                        </p>
                    </div>
                </div>

                <div class="col-1-of-3">
                    <div class="feature-box">
                        <h3 class="heading-tertiary u-margin-bottom-small">Kind Hearted</h3>
                        <p class="feature-box__text">
                            I care about the things that make me happy and those around me.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of moving boxes -->
    </main>
    
<?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>