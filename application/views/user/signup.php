
    <!-- Content -->
    <div class="title-bar dark bg-black padded-vertical-60">
            <div class="bg-image bg-image-3"></div>
            <div class="overlay overlay-black editable-alpha" data-alpha="70" style="opacity: 0.7;"></div>
            <div class="container" style="position:relative;">
                <span class="sep sep-primary sep-no-top"></span>
                <h4 class="margin-bottom-0">
                    <strong>Create Profile Now</strong>
                </h4>
            </div>
        </div>
    <!-- Content End -->
    <div id="content">
        <div class="container">
            <div class="row padded-vertical-40">
                <div class="col-md-8">
                    <!-- Contact Form -->
                    <form id="contact-form-extended" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-bold" for="fullName">Full Name</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="Enter Full Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="text-bold" for="emailAdress">Email Address</label>
                                    <input type="email" class="form-control" id="emailAdress" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-bold" for="fullName">Phone</label>
                                    <input type="text" class="form-control" id="fullName" placeholder="Phone ">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="text-bold" for="qualification">Qualification</label>
                                    <select id="qualification" class="form-control co-work-form-input">
                                        <option>OND</option>
                                        <option>HND</option>
                                        <option>B/Sc</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="form-group">
                                    <label class="text-bold" for="skillset">Skillset</label>
                                    <select id="skillset" class="form-control co-work-form-input">
                                        <option>Web Development</option>
                                        <option>Mobile Development</option>
                                        <option>Digital Marketing</option>
                                    </select>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <span class="checkbox-group">
                                        <input id="computer" name="computer" type="checkbox">
                                        <label for="computer" class="checkbox-label">Use Computer?
                                        </label>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <span class="checkbox-group">
                                        <input id="web" name="web" type="checkbox">
                                        <label for="web" class="checkbox-label">Browse the Web?
                                        </label>
                                    </span>
                                </div>
                                <div class="form-group">
                                    <span class="checkbox-group">
                                        <input id="html" name="html" type="checkbox">
                                        <label for="html" class="checkbox-label">Understands HTML?
                                        </label>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group clearfix text-center">
                            <button type="submit" class="btn btn-primary btn-filled"><span class="btn-inner">Create Profile</span></button>
                            <p class="logiin">Already have a profile? <a href="<?php echo base_url('login')?>"><b>Log In</b></a></p>
                        
                    </form>
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </div>