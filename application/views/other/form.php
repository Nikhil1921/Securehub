<section id="car_section">
    <div class="container">
        <div class="row car_main">
        <div id="car_sec_right_" class="col-lg-12 car_right">
            <div>
            <h2 class="head_clr"><span class="head_name_color"><?= $show ?></h2>
            </div>
            <form method="post" action="" id="inquiry_form" class="inquiryForm" style="border: none;">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    <div class="col-lg-6">
                    <div class="ig">
                        <label>Full Name</label>
                        <input type="text" name="name" data-error="Please enter your name" placeholder="Name">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="ig">
                        <label>Mobile Number</label>
                        <input tabindex="1" value="" data-error="Please enter your name Mobile Number" placeholder="10 Digit Mobile Number" type="text" name="mobile" required="">
                    </div>
                    </div>
                    
                    <div class="col-lg-6">
                    <div class="ig">
                        <label>Email Id</label>
                        <input type="email" name="email" data-error="Please enter your Email Id" required="" placeholder="abc@gmail.com">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="ig">
                        <label>Location</label>
                        <input type="text" name="name" data-error="Please enter your name" placeholder="Location">
                    </div>
                    </div>
                    <div class="col-12">
                    <div class="ig">
                        <label>Your Message</label>
                        <textarea name="message" id="text_ins" cols="70" rows="6" required="" placeholder="Your Message"></textarea>
                    </div>
                    </div>
                    <div class="col-12 mt-4">
                    <p class="privacy_p">By clicking on "SUBMIT", You Agree to our <a id="term_policy" href="privacy_policy.php">Privacy Policy</a> &amp; <a id="term_policy" href="terms_of_use.php">Terms of Use</a></p>
                    </div>
                    <div class="col-lg-12">
                    <div class="ig">
                        <button class="btn_car_submit" tabindex="3" type="submit" name="inquirySubmit"><a href="#">Submit</a></button>
                    </div>
                    </div>
                    <div class="col-12 mt-2">
                    <p class="btn_down_p">Need Help? Call Us at<a class="btn_a_down_last" href="tel:+91 9512137878"> +919512137878</a></p>
                    </div>
                </div>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
</section>