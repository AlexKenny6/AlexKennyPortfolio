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
                <span class="heading-primary--main">Alex Kenny</span>
                <span class="heading-primary--sub">The Ongoing Journey</span>
            </h1>
            <a href="#projects" class="btn btn--white btn--animated">Discover my projects!</a>
        </div>
    </header>

    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">Software Developer + Finance</h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small">I create software, both websites and apps</h3>
                    <p class="paragraph">I am a self-taught website developer and I use the following languages: html, css, sass, js, php, python, and swift.</p>
                    <p class="paragraph">Out of all of these languages, my favorites are php and python!</p>

                    <h3 class="heading-tertiary u-margin-bottom-small">I create financial spreadsheets on stocks</h3>
                    <p class="paragraph">
                        I have been involved in the CWU Financial Group by becoming an officer and creating presentations on stocks.
                    </p>

                </div>
                <div class="col-1-of-2">
                    <div class="composition">
                        <img src="img/nerdcore1.png" alt="Photo 1" class="composition__photo composition__photo--p1">
                        <img src="img/aimt.png" alt="Photo 2" class="composition__photo composition__photo--p2">
                        <img src="img/pacwest1.png" alt="Photo 3" class="composition__photo composition__photo--p3">
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
                        <h3 class="heading-tertiary u-margin-bottom-small">College Student</h3>
                        <p class="feature-box__text">
                            Current Junior at Central Washington University
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <h3 class="heading-tertiary u-margin-bottom-small">Software Developer</h3>
                        <p class="feature-box__text">
                            I love creating code!
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <h3 class="heading-tertiary u-margin-bottom-small">Hard Worker</h3>
                        <p class="feature-box__text">
                            I am always doing the little things to get better.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <h3 class="heading-tertiary u-margin-bottom-small">Lover of Sports</h3>
                        <p class="feature-box__text">
                            Football, Baseball, and Skiing are my top three favorite sports.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end of moving boxes -->

        

        <!-- Start of POPUP!!! -->
        <!--<div class="popup" id="popup">
            <div class="popup__content">
                <div class="popup__left">
                    <img src="img/nat-8.jpg" alt="Photo 1" class="popup__img">
                    <img src="img/nat-9.jpg" alt="Photo 2" class="popup__img">
                </div>
                <div class="popup__right">
                    <a href="#section-tours" class="popup__close">&times;</a>
                     change target after done 
                    <h2 class="heading-secondary .u-margin-bottom-medium">Start Now</h2>
                    <h3 class="heading-tertiary .u-margin-bottom-small">Important &ndash; Please read these terms</h3>
                    <p class="popup__text">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda cum deleniti nihil? Minus voluptatum, saepe, officia esse excepturi laborum sequi perferendis maiores quaerat nam quidem. In placeat adipisci tenetur quo?
                    </p>
                    <a href="#" class="btn btn--green">Book Now</a>
                </div>
            </div>
        </div>-->


        <!-- ********** end of moving tabs section *********** -->

        <!--
        <section class="section-stories">
            <div class="bg-video">
                <video class="bg-video__content" autoplay muted loop>
                    <source src="img/Aloha-Mundo.mp4" type="video/mp4">
                    <source src="img/Aloha-Mundo.webm" type="video/webm">
                    Your browser is not supported!
                </video>
            </div>
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">We make people happy</h2>
            </div>

            
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="img/nat-8.jpg" alt="text text text" class="story__img">
                        <figcaption class="story__caption">First Last</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            Was amazing
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consequuntur inventore ut reprehenderit sequi, ab exercitationem optio adipisci qui, eaque cupiditate totam doloribus accusantium at corrupti quam deserunt earum illo.
                        </p>
                    </div>
                </div>
            </div>
            end of testimony 1 
            
            
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="img/nat-9.jpg" alt="text text text" class="story__img">
                        <figcaption class="story__caption">First Last</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">
                            Was terrible
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consequuntur inventore ut reprehenderit sequi, ab exercitationem optio adipisci qui, eaque cupiditate totam doloribus accusantium at corrupti quam deserunt earum illo.
                        </p>
                    </div>
                </div>
            </div>
            end of testimony 2 
            <div class="u-center-text u-margin-bottom-big">
                <a href="#" class="btn-text">Discover all tours &rarr;</a>
            </div>
        </section>
         end of testimony section -->


         <!--
        <section class="section-book">
            <div class="row">
                <div class="book">
                    <div class="book__form">
                        <form action="mail.php" method="POST" class="form">
                            <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">Start Your Project Now!</h2>
                            </div>
                        
                            <div class="form_group">
                                <input type="text" name="name" class="form__input" placeholder="Full Name" id="name" required name="name">
                                <label for="name" class="form__label">Full Name</label>
                            </div>

                            <div class="form_group">
                                <input type="text" name="email" class="form__input" placeholder="Email Address" id="name" required name="name">
                                <label for="email" class="form__label">Email Address</label>
                            </div>
                            <br>
                            <div class="form__group">
                                <button type="submit" class="btn btn--green" id="submit" name="submit">Lets Get in Contact! &rarr;</button>
                            </div>
                        </form>

                       
                        <form action="contact" class="form" method="post">
                            <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">Start Your Project Now!</h2>
                            </div>

                            <div class="form_group">
                                <input type="text" class="form__input" placeholder="Full Name" id="name" required name="name">
                                <label for="name" class="form__label">Full Name</label>
                            </div>

                            <div class="form_group">
                                <input type="email" class="form__input" placeholder="Email Address" id="email" required name="email">
                                <label for="email" class="form__label">Email Address</label>
                            </div>

                            <div class="form__group .u-margin-bottom-medium">
                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="small" name="size">
                                    <label for="small" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        You Have an Idea
                                    </label>
                                </div>
                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="large" name="size">
                                    <label for="large" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Let's Both Create The Idea
                                    </label>
                                </div>
                            </div>
                            <div class="form__group">
                                <button class="btn btn--green" id="submit" name="submit" type="submit">Lets Get in Contact! &rarr;</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
        end of contact form -->
    </main>
    
<?php include(TEMPLATE_FRONT . DS . "footer.php");  ?>