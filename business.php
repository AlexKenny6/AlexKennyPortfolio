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
                <span class="heading-primary--main">My Business</span>
            </h1>
            <a href="#projects" class="btn btn--white btn--animated">Discover my projects!</a>
        </div>
    </header>

    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">Pacwest Software Development LLC</h2>
            </div>

            <div class="row">
                <div class="col-1-of-2 business-a">
                    <h3 class="heading-tertiary u-margin-bottom-small">A Software company I started in 2017</h3>
                    <p class="paragraph">On December 4th, 2017, I built and began a software developing company that focuses on building websites and iOS applications. 
                        I decided I wanted to start a business that is centered around an activity that I enjoy doing. 
                        So, I launched the company Pacwest Software Development LLC and it became an LLC in the State of Washington on April 26th, 2018.
                        If you would like to check out my company website, click <a href="https://www.pacwestsoftware.com/index.php">here!</a>
                        <br><br>
                        After looking for clients, I gained my first client on April 16th, 2018 and I built a full stack website for them that uses php for the e-commerce side.
                        I gained my second client over the 2018 Summer and I am continuing to work with them.
                    </p>

                </div>
                <div class="col-1-of-2">
                    <div class="composition">
                        <center><img src="img/pacwest1.png" alt="Photo 1" class="composition__photo composition__photo--p1"></center>
                    </div>
                </div>
            </div>
            <center><a href="resume.php" class="btn-text">My Resume &rarr;</a></center>
        </section>
        <!-- end of moving pictures -->

        <section class="section-features">
            <div class="row">
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <h3 class="heading-tertiary u-margin-bottom-small">Web Development</h3>
                        <p class="feature-box__text">
                            Building and Designing websites!
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <h3 class="heading-tertiary u-margin-bottom-small">iOS Development</h3>
                        <p class="feature-box__text">
                            Building and Designing iOS Apps
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <h3 class="heading-tertiary u-margin-bottom-small">Hosting and Domain</h3>
                        <p class="feature-box__text">
                            Taking care of any hosting/domain concerns
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <h3 class="heading-tertiary u-margin-bottom-small">SEO and Google Analytics</h3>
                        <p class="feature-box__text">
                            Using Google products to increase search traffic
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of moving boxes -->
    </main>
    
<?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>