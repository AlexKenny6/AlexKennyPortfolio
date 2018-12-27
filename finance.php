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
                <span class="heading-primary--main">Finance In & Out of School</span>
            </h1>
            <a href="#projects" class="btn btn--white btn--animated">Discover my projects!</a>
        </div>
    </header>

    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">How Finance has been Apart of my life</h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-center-text u-margin-bottom-small">Finance In School<hr></h3>
                    <p class="paragraph">
                    <b>Finance Major:</b> <br><br>
                    For my finance major, I am currently taking business ordinated classes plus pre-requisite classes. 
                    Some of the classes I have taken that have strengthened my knowledge in the finance field are: Economics 130, Economics 201, Economics 202, Accounting 251, and Accounting 252. 
                    Now that I am in my junior year, I will be taking higher level finance classes like finance 370 which focuses on investments.

                    <br><br>
                    <b>DECA in High School:</b> <br><br>
                    During my senior year of high school, I chose to be a part of the organization called DECA. 
                    I signed up to compete in two categories: Business Finance and the Stock Market Game (SMG). 
                    At the area or local competition, I finished in 5th place in the Business Finance category. 
                    From here, I competed at the State Competition in Bellevue, WA. 
                    I learned a vast amount of knowledge from business professionals who were at the event. 
                    </p>

                </div>
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-center-text u-margin-bottom-small">Finance Out of School<hr></h3>
                    <p class="paragraph">
                    <b>Investment Club at CWU:</b> <br><br>
                    As a Junior at Central Washington University, I actively participate in the Investment Club to learn more about stock analysis. 
                    I had the opportunity to become an elected officer three years in a row, serving the following positions: Vice President of Web Management (September 2018-Present), Treasurer (September 2017-June 2018), and Vice President of the club (September 2016-June 2017). 
                    <br><br>
                    <b>Programming and Finance:</b> <br><br>
                    I am teaching myself how to create a python script that will analyze stock market data from the NYSE that will create a graph that will be easy to see trends. 
                    My goal with learning and creating this script is that I can learn more about analyzing the data. 
                    With this I will be able to use the graph alongside a spreadsheet that uses similar numbers to predict the future market price.
                    </p>
                </div>
            </div>
            <center><a href="resume.php" class="btn-text">My Resume &rarr;</a></center>
        </section>
        <!-- end of moving pictures -->

        <section class="section-features">
            <div class="row">
                <div class="col-1-of-2">
                    <div class="feature-box">
                        <h3 class="heading-tertiary u-margin-bottom-small">Why Finance?</h3>
                        <p class="feature-box__text">
                            In my Junior year of high school, I began to enjoy working with stocks and became fascinated by it.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-2">
                    <div class="feature-box">
                        <h3 class="heading-tertiary u-margin-bottom-small">The Future of Finance</h3>
                        <p class="feature-box__text">
                            I am going to continue to trade stocks and evaluate stock prices to see which ones I should invest in by using graphs and my script.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of moving boxes -->
    </main>
    
<?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>