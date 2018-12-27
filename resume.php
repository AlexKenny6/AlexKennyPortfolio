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
        <!--<div class="header__logo-box">
            <img src="img/AK-Logo@1x.png" alt="Logo" class="header__logo">
        </div>-->

        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">My Resume</span>
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
                    <h3 class="heading-tertiary u-center-text u-margin-bottom-small">Web and iOS App Development:</h3>
                        <ul class="resume-ul">
                            <li>Developer of the websites: <a href="https://myohmymsblog.me">https://myohmymsblog.me</a>, <a href="https://www.pacwestsoftware.com/">https://www.pacwestsoftware.com</a>, and <a href="https://nerdcoretoys.com">https://nerdcoretoys.com</a></li>
                            <li>GitHub account at: <a href="https://github.com/AlexKenny6">https://github.com/AlexKenny6</a></li>
                            <li>Self-taught full-stack web developer</li>
                            <li>Current user of the MAMP stack: MacOS, Apache Web Server, MySQL, PHP/Python</li>
                            <li>Developing an app on iOS with Swift</li>
                            <li>Teaching myself Swift, XCode Development, and Python</li>
                            <li>Built a NYSE ticker graph script with Python</li>
                            <li>Built a PHP/Python SMS Texting SAAS platform</li>
                            <li>3 Years of Front-end Web Developer Experience</li>
                            <li>Built responsive websites with HTML, CSS, JS, and Bootstrap</li>
                            <li>Used MySQL to create a database(s)</li>
                            <li>Created dynamic websites with PHP 7</li>
                            <li>Used PHP to create an authentication form for logging in to a back-end of a website</li>
                            <li>Built an ecommerce store from scratch that used PayPal</li>
                            <li>Carried out routine site maintenance and updated web pages regularly</li>
                            <li>Knowledge of using WordPress and Squarespace to make website edits</li>
                            <li>Knowledge of Photoshop CC and XD CC</li>
                            <li>Knowledge of SEO, Google Analytics, and Google Webmaster</li>
                        </ul>
                        <br><br>
                        <h3 class="heading-tertiary u-center-text u-margin-bottom-small">Volunteer Work:</h3>
                    <ul>
                        <li>Food Bank Volunteer: September 2012-June 2016</li>
                        <li>Blessed Sacrament Catholic Church: Seattle, WA</li>
                    </ul>
                </div>
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-center-text u-margin-bottom-small">Education:</h3>
                    <ul>
                        <li>Central Washington University (AACSB Accredited): September 2016-June 2020</li>
                        <li>Expected Major(s)/Minors: BA in Finance and IT Minor</li>
                    </ul>
                    <br><br>
                    <h3 class="heading-tertiary u-center-text u-margin-bottom-small">Professional Experience:</h3>
                    <ul>
                        <li>Pacwest Software Development, LLC: December 2017-Present</li>
                        <li>Founder and CEO of a Web Dev and Design company</li>
                    </ul>
                    <br><br>
                    <h3 class="heading-tertiary u-center-text u-margin-bottom-small">Leadership Experience:</h3>
                    <ul>
                        <li><b>Investment Club - Central Washington University: September 2016-Present</b></li>
                        <li>Researched and created financial spreadsheets in excel about publicly traded companies</li>
                        <li>Served as VP of Web Management (September 2018-Present), Treasurer (September 2017-June 2018) and Vice President (September 2016-June 2017)</li>
                        <li>Organized a stock market game for the club through marketwatch.com</li>
                        <br><br>
                        <li><b>Residence Hall Leadership Council – Central Washington University: September 2016-June 2017</b></li>
                        <li>Planned events to build stronger relationships with other students in a dorm</li>
                        <li>Served as Vice President (September 2016-June 2017)</li>
                    </ul>
                </div>
            </div>
            <center><a href="resume.php" class="btn-text">Learn More &rarr;</a></center>
        </section>

    </main>
    
<?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>