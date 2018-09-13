    <!-- Home -->
    <section id="home" class="home-default home-viewport dark">

        <div class="owl-carousel home-full-carousel" data-single-item="true" data-auto-play="4500">
            <!-- Slide slide -->
            <div class="photo-slide">
                <div class="bg-image bg-image-1"></div>
                <div class="overlay overlay-black editable-alpha" data-alpha="70"></div>
                <div class="container vertical-center">
                    <div class="slide-txt text-center">
                        <span class="sep sep-primary"></span>
                        <h4 class="text-uppercase">The bird a
                            <strong>nest</strong>, the spider a
                            <strong>web</strong>, man friendship.</h4>
                        <a href="<?php echo base_url('signup')?>" class="btn btn-primary">Create Profile</a>
                        <a href="<?php echo base_url('about')?>" class="btn btn-default">
                            <span class="btn-inner">Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Slide slide -->
            <div class="photo-slide">
                <div class="bg-image bg-image-2"></div>
                <div class="overlay overlay-black editable-alpha" data-alpha="70"></div>
                <div class="container vertical-center">
                    <div class="slide-txt text-center">
                        <span class="sep sep-primary"></span>
                        <h4 class="text-uppercase">Our nest
                            <strong>eggs</strong>, no matter how small, are
                            <strong>safe</strong>.</h4>
                        <a href="<?php echo base_url('signup')?>" class="btn btn-primary">Create Profile</a>
                        <a href="<?php echo base_url('about')?>" class="btn btn-default">
                            <span class="btn-inner">Read More</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Home / End -->


    <!-- Services -->
    <div id="content">
        <!-- Section -->
        <section class="section padded-vertical-70 container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="section-title text-center margin-bottom-40">
                        <h4 class="text-uppercase margin-bottom-0">
                            <strong>What’s</strong> The Nest About?</h4>
                        <span class="sep sep-primary sep-animated"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Icon Box -->
                <div class="col-md-3 col-sm-6 text-center">
                    <span class="icon icon-lg icon-primary  margin-bottom-20 animated" data-animation="bounceIn" data-animation-delay="400">
                        <img class="serve-icon margin-bottom-20" src="<?php echo base_url('assets/images/img/icons/presentation.png'); ?>" alt="" />
                    </span>
                    <h5 class="margin-bottom-0">
                        <strong>Trainings</strong>
                    </h5>
                    <p class="text-muted">Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                    <a href="<?php echo base_url('training')?>" class="underline-link text-uppercase text-primary">Read more</a>
                </div>
                <!-- Icon Box -->
                <div class="col-md-3 col-sm-6 text-center">
                    <span class="icon icon-lg icon-primary  margin-bottom-20 animated" data-animation="bounceIn" data-animation-delay="600">
                        <img class="serve-icon margin-bottom-20" src="<?php echo base_url('assets/images/img/icons/desk.png'); ?>" alt="" />
                    </span>
                    <h5 class="margin-bottom-0">
                        <strong>Co-work Space</strong>
                    </h5>
                    <p class="text-muted">Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                    <a href="<?php echo base_url('cowork')?>" class="underline-link text-uppercase text-primary">Read more</a>
                </div>
                <!-- Icon Box -->
                <div class="col-md-3 col-sm-6 text-center">
                    <span class="icon icon-lg icon-primary  margin-bottom-20 animated" data-animation="bounceIn" data-animation-delay="800">
                        <img class="serve-icon margin-bottom-20" src="<?php echo base_url('assets/images/img/icons/workplace.png'); ?>" alt="" />
                    </span>
                    <h5 class="margin-bottom-0">
                        <strong>Incubation</strong>
                    </h5>
                    <p class="text-muted">Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                    <a href="<?php echo base_url('incubation')?>" class="underline-link text-uppercase text-primary">Read more</a>
                </div>
                <!-- Icon Box -->
                <div class="col-md-3 col-sm-6 text-center">
                    <span class="icon icon-lg icon-primary  margin-bottom-20 animated" data-animation="bounceIn" data-animation-delay="1000">
                        <img class="serve-icon margin-bottom-20" src="<?php echo base_url('assets/images/img/icons/living-room.png'); ?>" alt="" />
                    </span>
                    <h5 class="margin-bottom-0">
                        <strong>Lounge</strong>
                    </h5>
                    <p class="text-muted">Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                    <a href="<?php echo base_url('lounge')?>" class="underline-link text-uppercase text-primary">Read more</a>
                </div>
            </div>
        </section>
    </div>
    <!-- Services -->

    <!-- Section -->
    <section id="signIn" class="section padded-vertical-70 dark">
        <div class="bg-image bg-image-1"></div>
        <div class="overlay overlay-black editable-alpha" data-alpha="60"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 text-center">
                    <span class="con icon-lg margin-bottom-20 animated" data-animation="bounceIn" data-animation-delay="400">
                        <i class="fa fa-download text-primary"></i>
                    </span>
                    <div class="margin-bottom-20">
                        <h4 class="text-uppercase margin-bottom-0">
                            <strong>Get Access</strong> to our Packages!</h4>
                        <p class="lead text-muted font-alt">Sign up to be the first to get all of out best offers for free to your inbox.</p>
                    </div>
                    <form id="sign-in-form">
                        <div class="form-group form-group-lg">
                            <input type="text" id="emailSigned" name="emailSigned" class="form-control bg-white margin-bottom-5" placeholder="Tap here your e-mail address...">
                        </div>
                        <span class="checkbox-group margin-bottom-10">
                            <input id="acceptRules" name="acceptRules" type="checkbox" checked/>
                            <label for="acceptRules" class="checkbox-label">I accept all the
                                <a href="#" data-toggle="modal" data-target="#rulesModal">rules</a>
                            </label>
                        </span>
                        <button type="submit" class="btn btn-primary btn-filled btn-lg">
                            <i class="icon-before fa fa-plus"></i>Sign In!</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Section / End -->
