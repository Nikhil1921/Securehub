<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="car_section">
    <div class="container">
        <div class="row car_main">
            <div class="col-lg-5 car_left">
                <h2 class="head_clr"><span class="head_name_color">Misc D</span> Insurance</h2>
            </div>
            <div class="col-lg-7 car_right">
                <div class="car_insurence_form">
                    <form class="inquiryForm">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ig">
                                <label>Name</label>
                                <input type="text" name="name" required="" data-error="Please enter your name" placeholder="Name">
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
                                <input type="email" name="email" data-error="Please enter your Email Id" required="" placeholder="Email Id">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ig">
                                <label>Location</label>
                                <input type="text" name="name" data-error="Please enter your Location" required="" data-error="Please enter your name" placeholder="Location">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ig">
                                <label>Vehicle Registration Number</label>
                                <input tabindex="2" value="" data-error="Please enter your Vehicle Registration Number" placeholder="GJ 05 JH 1505" type="text" name="vehicleNumber" required="">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ig">
                                <label>Your Message</label>
                                <textarea name="message" id="text_ins" cols="70" rows="6" required="" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ig">
                                <button  class="btn_car_submit" tabindex="3" type="submit" name="inquirySubmit"><a href="motor_ins_submit_inquery.php">Submit Inquiry</a></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="taxi_section_">
    <div class="container">
        <div class="row taxi_main">
          <div class="col-12 taxi_content">
            <h5>Please create a new CMS Page with name: Misc D Insurance</h5>
          </div>
        </div>
    </div>
</section>