    <!-- Title Bar -->
    <div class="page-title">
        <div class="bordered-bottom">
            <div class="container">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo base_url('')?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('training')?>">Training</a>
                    </li>
                    <li class="active">Backend Development</li>
                </ol>
            </div>
        </div>
        <div class="title-bar dark bg-black padded-vertical-60">
            <div class="bg-image bg-image-3"></div>
            <div class="overlay overlay-black editable-alpha" data-alpha="70"></div>
            <div class="container" style="position:relative;">
                <div class="row">
                    <div class="col-md-8">
                        <span class="sep sep-primary sep-no-top"></span>
                        <h3 class="margin-bottom-0">
                            <strong>Backend Web Development</strong>
                        </h3>

                        <div class="course-level padded-left-0">
                            <ul class="level-mark">
                                <li class="level-cir"></li>
                                <li class="level-cir"></li>
                                <li class="level-trans"></li>
                            </ul>
                            <p class="level-txt margin-bottom-0">
                                Intermediate</p>
                        </div>
                        <p>50 hrs | 2 Weeks</p>
                        <button type="button" class="btn btn-filled btn-lg btn-primary" data-toggle="modal" data-target="#enrolForm">
                            <span class="btn-inner">Enroll Now</span>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="enrolForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    </div>
                                    <div class="modal-body text-black text-center">
                                        <img src="<?php echo base_url('assets/images/enroll.svg'); ?>" alt="Checked" class="img-responsive checked-img">
                                        <span class="sep sep-primary"></span>
                                        <h6>Thanks for Enrolling for this Course</h6>
                                        <p>You would receive an Email to continue with the Enrolled Course.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="training.html" class="btn btn-filled btn-primary"><span class="btn-inner">
                                            <span class="btn-inner">Explore other Courses</span>
                                        </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar / End -->

    <!-- Content -->
    <div id="content">
        <div class="container">
            <div class="row padded-vertical-40">
                <div class="col-md-8">
                    <div class="bg-grey padded-30 margin-bottom-30">
                        <span class="sep sep-primary sep-no-top"></span>
                        <h5>What will I Learn?</h5>
                        <ul class="what-learn">
                            <li>Course Goal: Learn how to improve development productivity with task runners and preprocessors</li>
                            <li>Use Sockets for real-time client-server communication</li>
                            <li>Use CoffeeScript to improve writing JavaScript</li>
                            <li>Automate multiple tasks using Grunt</li>
                        </ul>
                    </div>
                    <div class="bg-grey padded-30 margin-bottom-30">
                        <span class="sep sep-primary sep-no-top"></span>
                        <h5>Requirements</h5>
                        <ul class="what-learn">
                            <li>Introduction to JavaScript Development</li>
                            <li>Intermediate JavaScript Development</li>
                            <li>Introduction to Node.js Development</li>
                            <li> Advanced JavaScript Development</li>
                            <li> Advanced Node.js Development</li>
                        </ul>
                    </div>
                    <div class="margin-bottom-30">
                        <span class="sep sep-primary sep-no-top"></span>
                        <h5>Description</h5>
                        <p>In this course we examine several technologies. The first is Grunt. Grunt is a task runner which
                            is a way for us to implement a build system to handle writing our code in different languages,
                            preprocessing, minifying our code, and doing unit testing -- all automated. We’ll also take a
                            look at Coffeescript, which is a preprocessor for Javascript. It follows a lot of similar structures
                            to Python and is very, very popular.</p>
                        <p>Finally, we’ll discuss Sockets. Sockets are a way for us to open a constant connection between the
                            server and the client. Normally when you make a request, the request goes up and then comes down
                            with the data. With a socket, that request goes up and stays open, allowing the server to send
                            data whenever it wants and the client to send data whenever it wants.</p>
                        <p>So, we can make real time applications using sockets and we’ll take a look at how to implement a
                            very simple system using socket IO.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="course-sing-info course-outline">
                        <div class="owl-carousel owl-pagination-center margin-bottom-20" data-single-item="true" data-auto-play="4000">
                            <img src="<?php echo base_url('assets/images/training-img.jpg'); ?>" alt="" />
                            <img src="<?php echo base_url('assets/images/training-img2.jpg'); ?>" alt="" />
                            <img src="<?php echo base_url('assets/images/training-img3.jpg'); ?>" alt="" />
                        </div>
                        <!-- <div class="course-grid course-outline" style="background:url(images/training-img.jpg);">
                            <div class="course-info">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content End -->