    <!-- Content -->
    <div class="title-bar dark bg-black padded-vertical-60">
            <div class="bg-image bg-image-3"></div>
            <div class="overlay overlay-black editable-alpha" data-alpha="70" style="opacity: 0.7;"></div>
            <div class="container" style="position:relative;">
                <span class="sep sep-primary sep-no-top"></span>
                <h4 class="margin-bottom-0">
                    <strong>Log In to Profile</strong>
                </h4>
            </div>
        </div>
    <!-- Content End -->
    <div id="content">
        <div class="container">
            <div class="row padded-vertical-40">
                <div class="col-md-6">
                    <!-- Contact Form -->
                    <form id="contact-form-extended" novalidate="novalidate">
                        <div class="form-group">
                            <label class="text-bold" for="emailAddress">Email Address</label>
                            <input type="email" class="form-control" id="emailAddress" placeholder="Enter Email Address">
                        </div>
                        <div class="form-group">
                            <label class="text-bold" for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password">
                        </div>
                        <div class="form-group clearfix text-center">
                            <button type="submit" class="btn btn-primary btn-filled"><span class="btn-inner">Log In</span></button>
                            <p class="logiin">Don't have a Profile yet? <a href="<?php echo base_url('signup')?>"><b>Create Now</b></a></p>
                        
                    </form>
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </div>