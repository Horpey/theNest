    <!-- Title Bar -->
    <div class="page-title">
        <div class="bordered-bottom">
            <div class="container">
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo base_url()?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('cowork')?>">Co-Work</a>
                    </li>
                    <li class="active">Executive Office</li>
                </ol>
            </div>
        </div>
        <div class="title-bar dark bg-black padded-vertical-60">
            <div class="bg-image bg-image-3"></div>
            <div class="overlay overlay-black editable-alpha" data-alpha="70"></div>
            <div class="container" style="position:relative;">
                <span class="sep sep-primary sep-no-top"></span>
                <h1 class="margin-bottom-0">
                    <strong>Executive Office</strong>
                </h1>
                <button type="button" class="btn btn-filled btn-sm btn-primary margin-top-10" data-toggle="modal" data-target="#bookForm"><span class="btn-inner">
                    <span class="btn-inner">Subscribe Now</span>
                </span></button>
                <!-- Modal -->
                <div class="modal fade" id="bookForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body text-black text-center">
                                <form role="form" class="text-left co-work-form">
                                    <span class="sep sep-primary no-margin"></span>
                                    <h6 class="co-head">Kindly fill in your Details</h6>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label class="text-bold" for="fullName">Full Name</label>
                                            <input type="text" class="form-control co-work-form-input" id="fullName" placeholder="Enter Full Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="text-bold" for="company">Company Name</label>
                                            <input type="text" class="form-control co-work-form-input" id="company" placeholder="Enter Company Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="text-bold" for="emailAddress">Email Address</label>
                                            <input type="email" class="form-control co-work-form-input" id="emailAddress" placeholder="Enter Email Address">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="text-bold" for="phone">Phone Number</label>
                                            <input type="text" class="form-control co-work-form-input" id="phone" placeholder="Enter Mobile Number">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-filled btn-primary submit-toggle"><span class="btn-inner">Submit</span></button>
                                        <button  type="button" data-dismiss="modal" aria-hidden="true" class="btn btn-filled btn-default"><span class="btn-inner">
                                                <span class="btn-inner">Cancel</span>
                                        </span></button>
                                    </div>

                                    

                                 </form>
                            </div>

                                <!-- Success -->
                                <div class="success-modal text-black text-center">
                                    <img src="<?php echo base_url('assets/images/enroll.svg'); ?>" alt="Checked" class="img-responsive checked-img">
                                    <span class="sep sep-primary"></span>
                                    <h6>Thanks for Subscribing for this Work Space</h6>
                                    <p>You would receive an Email to continue with the process.</p>
                                    <div class="text-center margin-bottom-20">
                                        <a href="<?php echo base_url('cowork')?>" class="btn btn-filled btn-primary"><span class="btn-inner">Explore Workspace</span></a>
                                        <a href="<?php echo base_url()?>" class="btn btn-filled btn-default"><span class="btn-inner">
                                                <span class="btn-inner">Go to Homepage</span>
                                        </span></a>
                                    </div>
                                </div>
                                <!-- Success -->

                            <div class="modal-footer">

                                
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
            <div class="row padded-top-40 padded-bottom-30">
                <div class="col-md-4">
                    <!-- Portfolio Item -->
                    <a href="<?php echo base_url('assets/images/training-img.jpg'); ?>" data-target="lightbox" class="gallery-item col-md-6 col-sm-6">
                        <div class="gallery-item-image">
                            <img src="<?php echo base_url('assets/images/training-img.jpg'); ?>" alt="" />
                            <div class="gallery-item-overlay overlay-black"></div>
                        </div>
                    </a>
                    <!-- Portfolio Item -->
                    <a href="<?php echo base_url('assets/images/training-img2.jpg'); ?>" data-target="lightbox" class="gallery-item col-md-6 col-sm-6">
                        <div class="gallery-item-image">
                            <img src="<?php echo base_url('assets/images/training-img2.jpg'); ?>" alt="" />
                            <div class="gallery-item-overlay overlay-black"></div>
                        </div>
                    </a>
                    <!-- Portfolio Item -->
                    <a href="<?php echo base_url('assets/images/training-img3.jpg'); ?>" data-target="lightbox" class="gallery-item col-md-6 col-sm-6">
                        <div class="gallery-item-image">
                            <img src="<?php echo base_url('assets/images/training-img3.jpg'); ?>" alt="" />
                            <div class="gallery-item-overlay overlay-black"></div>
                        </div>
                    </a>
                    <!-- Portfolio Item -->
                    <a href="<?php echo base_url('assets/images/training-img4.jpg'); ?>" data-target="lightbox" class="gallery-item col-md-6 col-sm-6">
                        <div class="gallery-item-image">
                            <img src="<?php echo base_url('assets/images/training-img4.jpg'); ?>" alt="" />
                            <div class="gallery-item-overlay overlay-black"></div>
                        </div>
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="bg-grey padded-30 margin-bottom-30">
                        <span class="sep sep-primary sep-no-top"></span>
                        <h5>N 40,000 per Seat (Monthly)</h5>
                        <ul class="what-learn">
                            <li>Fast, uninterrupted internet access</li>
                            <li>Use of office location as your company official business address</li>
                            <li>Free (but limited) Printing/Scanning/photocopy</li>
                            <li>Receipt of your personal correspondences in a personal mailbox by our front desk</li>
                            <li>Free coffee</li>
                            <li>Access to meeting room</li>
                            <li>Access to lounge area</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content End -->
