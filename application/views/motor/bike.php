<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="car_section">
    <div class="container">
    <div class="row car_main">
        <div id="car_sec_right_" class="col-lg-12 car_right">
        <div>
            <h2 class="head_clr"><span class="head_name_color">Bike Insurance/</span> Two Wheeler Insurance</h2>
        </div>
        <form method="post" action="" id="inquiry_form" class="inquiryForm" style="border: none;">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active clr_pill" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">T.P Only</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">O.D Only</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Comprehensive Plan</a>
            </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">  
                <div class="col-lg-6">
                    <div class="ig">
                    <label>Vehicle Registration Number</label>
                    <input tabindex="1" value="" data-error="Please enter your name Mobile Number" placeholder="Registration Number" type="text" name="mobile" required="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ig">
                    <label>Vehicle Make Model</label>
                    <input type="text" name="name" required="" data-error="Please enter your name" placeholder="Make & Model">
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
                <div class="col-12">
                    <label for="yes_no_radio">Do you have existing policy?</label>
                    <div class="toggle_btn">
                    <button id="yes_no_btn_1">Yes</button>
                    <button id="yes_no_btn_">No</button>
                    </div>
                    <div id="div1" style="display: none;">
                    <div class="top_yes_no pt-2">
                        <label for="yes_no_radio">Policy Expiry Date</label>
                        <input type="date" name="date" id="date" placeholder="Date">
                    </div>
                    <div class="pt-3">
                        <div id="wrapper">
                        <label for="yes_no_radio">Do you have any claim?</label>
                        <p class="yes_no_p">
                            <input id="ratio_id" type="radio" name="yes_no" checked>Yes
                        </p>
                        <p class="yes_no_p">
                            <input id="ratio_id" type="radio" name="yes_no">No
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ig">
                    <label>Name</label>
                    <input type="text" name="name" data-error="Please enter your name" placeholder="Name">
                    </div>
                </div>
                
                
                <div class="col-12">
                    <div class="ig">
                    <label>Your Message</label>
                    <textarea name="message" id="text_ins" cols="70" rows="6" required="" placeholder="Your Message"></textarea>
                    </div>
                    <div class="mt-2">
                    <label class="mr-4">Upload Your Vehicle RC :</label>
                    <input id="uplod_rc" type="file" name="file" style="border: none;padding: 0;outline: none;">
                    </div>
                    <div class="mt-2 mb-2">
                    <label class="mr-4 ">Upload Your Existing Policy Copy :</label>
                    <input id="uplod_rc" type="file" name="file" style="border: none;padding: 0;outline: none;">
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
                    <p class="btn_down_p"><a class="btn_a_down" href="i_have_a_new_bike.php">I HAVE NEW BIKE</a></p>
                    <p class="btn_down_p">Need Help? Call Us at<a class="btn_a_down_last" href="tel:+91 9512137878">+919512137878</a></p>
                </div>
                </div>
            </div>


            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">  
                <div class="col-lg-6">
                    <div class="ig">
                    <label>Vehicle Registration Number</label>
                    <input tabindex="1" value="" data-error="Please enter your name Mobile Number" placeholder="Registration Number" type="text" name="mobile" required="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ig">
                    <label>Vehicle Make & Model</label>
                    <input type="text" name="name" required="" data-error="Please enter your name" placeholder="Make & Model">
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
                <div class="col-12">
                    <label for="yes_no_radio">Do you have existing policy?</label>
                    <div class="toggle_btn">
                    <button id="yes_no_btn_2">Yes</button>
                    <button id="yes_no_btn_">No</button>
                    </div>
                    <div id="div2" style="display: none;">
                    <div class="top_yes_no pt-2">
                        <label for="yes_no_radio">Policy Expiry Date</label>
                        <input type="date" name="date" id="date" placeholder="Date">
                    </div>
                    <div class="pt-3">
                        <div id="wrapper">
                        <label for="yes_no_radio">Do you have any claim?</label>
                        <p class="yes_no_p">
                            <input id="ratio_id" type="radio" name="yes_no" checked>Yes
                        </p>
                        <p class="yes_no_p">
                            <input id="ratio_id" type="radio" name="yes_no">No
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ig">
                    <label>Name</label>
                    <input type="text" name="name" data-error="Please enter your name" placeholder="Name">
                    </div>
                </div>
                
                
                <div class="col-12">
                    <div class="ig">
                    <label>Your Message</label>
                    <textarea name="message" id="text_ins" cols="70" rows="6" required="" placeholder="Your Message"></textarea>
                    </div>
                    <div class="mt-2">
                    <label class="mr-4">Upload Your Vehicle RC :</label>
                    <input id="uplod_rc" type="file" name="file" style="border: none;padding: 0;outline: none;">
                    </div>
                    <div class="mt-2 mb-2">
                    <label class="mr-4 ">Upload Your Existing Policy Copy :</label>
                    <input id="uplod_rc" type="file" name="file" style="border: none;padding: 0;outline: none;">
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
                    <p class="btn_down_p"><a class="btn_a_down" href="i_have_a_new_bike.php">I HAVE NEW BIKE</a></p>
                    <p class="btn_down_p">Need Help? Call Us at<a class="btn_a_down_last" href="tel:+91 9512137878">+919512137878</a></p>
                </div>
            </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row">  
                <div class="col-lg-6">
                    <div class="ig">
                    <label>Vehicle Registration Number</label>
                    <input tabindex="1" value="" data-error="Please enter your name Mobile Number" placeholder="Registration Number" type="text" name="mobile" required="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ig">
                    <label>Vehicle Make & Model</label>
                    <input type="text" name="name" required="" data-error="Please enter your name" placeholder="Make & Model">
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
                <div class="col-12">
                    <label for="yes_no_radio">Do you have existing policy?</label>
                    <div class="toggle_btn">
                    <button id="yes_no_btn_3">Yes</button>
                    <button id="yes_no_btn_">No</button>
                    </div>
                    <div id="div3" style="display: none;">
                    <div class="top_yes_no pt-2">
                        <label for="yes_no_radio">Policy Expiry Date</label>
                        <input type="date" name="date" id="date" placeholder="Date">
                    </div>
                    <div class="pt-3">
                        <div id="wrapper">
                        <label for="yes_no_radio">Do you have any claim?</label>
                        <p class="yes_no_p">
                            <input id="ratio_id" type="radio" name="yes_no" checked>Yes
                        </p>
                        <p class="yes_no_p">
                            <input id="ratio_id" type="radio" name="yes_no">No
                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ig">
                    <label>Name</label>
                    <input type="text" name="name" data-error="Please enter your name" placeholder="Name">
                    </div>
                </div>
                
                
                <div class="col-12">
                    <div class="ig">
                    <label>Your Message</label>
                    <textarea name="message" id="text_ins" cols="70" rows="6" required="" placeholder="Your Message"></textarea>
                    </div>
                    <div class="mt-2">
                    <label class="mr-4">Upload Your Vehicle RC :</label>
                    <input id="uplod_rc" type="file" name="file" style="border: none;padding: 0;outline: none;">
                    </div>
                    <div class="mt-2 mb-2">
                    <label class="mr-4 ">Upload Your Existing Policy Copy :</label>
                    <input id="uplod_rc" type="file" name="file" style="border: none;padding: 0;outline: none;">
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
                    <p class="btn_down_p"><a class="btn_a_down" href="i_have_a_new_bike.php">I HAVE NEW BIKE</a></p>
                    <p class="btn_down_p">Need Help? Call Us at<a class="btn_a_down_last" href="tel:+91 9512137878">+919512137878</a></p>
                </div>
                </div>
            </div>
        </form>
        </div>
    </div>
    </div>
</section>



<section id="car_section_content">
    <div class="container">
    <div class="row car_ins_main">
        <div class="car_insu_head_">
        <h2 class="head_clr"><span class="head_name_color">What is a Bike /</span> Two Wheeler Insurance?</h2>
        </div>
        <div class="col-lg-6 car_ins_cont">
        <div class="car_insu_content_">
            <?= img("assets/front/img/bike/5755660.png") ?>
        </div>
        </div>
        <div class="col-lg-6 car_ins_cont">
        <div class="car_insu_content_">
            <p><span><i class="far fa-hand-point-right"></i>  As the name suggests, an Bike / Two Wheeler insurance is a type of commercial vehicle insurance policy designed to protect and suit the needs of a three-wheeler in India. It’s mandatory for all auto owners to at least have a third-party Bike / Two Wheeler insurance to financially protect them from third-party liabilities and even, better to have a comprehensive Bike / Two Wheeler policy to cover for own damages that can be caused due to accidents, collisions, natural calamities, fires and other such mishaps.</p>
            <p><span><i class="far fa-hand-point-right"></i>  SecureHub Consultants Private Limited provides auto owners with both such policies at, affordable and customized premium prices.</p>
        </div>
        </div>
    </div>
    <div class="row car_ins_main_">
        <div class="car_insu_head_">
        <h2 class="head_clr"><span class="head_name_color">Why should I buy Bike /</span> Two Wheeler Insurance?</h2>
        </div>
        <div class="col-lg-6 car_ins_cont">
        <div class="car_insu_content_">
            <p><span><i class="far fa-hand-point-right"></i>  If you or your organization owns Bike / Two Wheeler, it is mandatory by law to at least buy a Liability Only Policy in place. This will financially cover you and your business in case your rickshaw (s) causes damages and losses to third-party property, person or vehicle.</p>
            <p><span><i class="far fa-hand-point-right"></i>  If you use your Bike / Two Wheeler as a primary part of your business, it’s advised to purchase a standard or comprehensive package policy as it will protect your auto and the owner-driver from any losses caused due to natural calamities, accidents, terrorist activities, fires, thefts and malicious acts, among other unforeseen circumstances.</p>
            <p><span><i class="far fa-hand-point-right"></i>  An Bike / Two Wheeler that comes with a valid insurance also assures your customers/passengers that you’re a responsible business and are serious about your work.</p>
            <p><span><i class="far fa-hand-point-right"></i>  An insured Bike / Two Wheeler ensures your business doesn’t face any unplanned losses or downtime, which means you can instead spend your money and time towards other aspects of your business.</p>
        </div>
        </div>
        <div class="col-lg-6 car_ins_cont">
        <div class="car_insu_content_right">
            <?= img("assets/front/img/bike/10868.png") ?>
        </div>
        </div>
    </div>
    </div>
</section>
<section id="why_choose_car_section">
    <div class="container">
    <div class="why_choose_car_head">
        <h2 class="head_clr"><span class="head_name_color">Why Choose Bike /</span> Two Wheeler Insurance by SecureHub Consultants Private Limited?</h2>
        <p>We treat our customers like VIPs, know how…</p>
    </div>
    <div class="row why_choose_car_content">
        <div id="crd_why_choose" class="col-lg-3 col-md-12 col-sm-12 why_choose_car_con">
        <div class="card crd_why_choose" style="width: 100%;">
            <?= img("assets/front/img/icon/24-7.png", '', 'class="insr_img"') ?>
            <div class="card-body crd_bdy_ins">
            <h5 class="card-title crd_ins_h5">24*7 Support</h5>
            </div>
        </div>
        </div>
        <div id="crd_why_choose" class="col-lg-3 col-md-12 col-sm-12 why_choose_car_con">
        <div class="card crd_why_choose" style="width: 100%;">
            <?= img("assets/front/img/icon/claim.png", '', 'class="insr_img"') ?>
            <div class="card-body crd_bdy_ins">
            <h5 class="card-title crd_ins_h5">Premium Claim Support</h5>
            </div>
        </div>
        </div>
        <div id="crd_why_choose" class="col-lg-3 col-md-12 col-sm-12 why_choose_car_con">
        <div class="card crd_why_choose" style="width: 100%;">
            <?= img("assets/front/img/icon/paperless.png", '', 'class="insr_img"') ?>
            <div class="card-body crd_bdy_ins">
            <h5 class="card-title crd_ins_h5">Paperless Claims</h5>
            </div>
        </div>
        </div>
        <div id="crd_why_choose" class="col-lg-3 col-md-12 col-sm-12 why_choose_car_con">
        <div class="card crd_why_choose" style="width: 100%;">
            <?= img("assets/front/img/icon/paperless.png", '', 'class="insr_img"') ?>
            <div class="card-body crd_bdy_ins">
            <h5 class="card-title crd_ins_h5">Legal Liability Cover</h5>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<section id="covered_car_insurence_section">
    <div class="container">
    <div class="covered_car_insurence_head">
        <h2 class="head_clr"><span class="head_name_color"> What's Covered in a Bike /</span> Two Wheeler Insurance?</h2>
    </div>
    <div class="row covered_car_insurence_main">
        <div class="col-lg-4 covered_car_insurence_content">
            <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
                <?= img('assets/front/img/bike/bike_accident.png', '', 'id="bike_accident"') ?>
                <div class="card-body crd_bdy_ins">
                <h5 class="card-title crd_tit_cover">Accidents</h5>
                <p class="crd_p_covered">Damages caused to your Bike / Two Wheeler in case of an accident.</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 covered_car_insurence_content">
            <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
                <?= img('assets/front/img/bike/bike theft.png', '', 'id="bike_theft"') ?>
                <div class="card-body crd_bdy_ins">
                <h5 class="card-title crd_tit_cover">Theft</h5>
                <p class="crd_p_covered">Loss or damage of your Bike / Two Wheeler due to theft.</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 covered_car_insurence_content">
            <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
                <?= img('assets/front/img/bike/bike_fire.png', '', 'id="bike_fire"') ?>
                <div class="card-body crd_bdy_ins">
                <h5 class="card-title crd_tit_cover">Fire</h5>
                <p class="crd_p_covered">Damages caused to your Bike / Two Wheeler due to a fire.</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 covered_car_insurence_content">
            <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
                <?= img('assets/front/img/bike/Natural Disasters.png', '', 'id="Natural_Disasters"') ?>
                <div class="card-body crd_bdy_ins">
                <h5 class="card-title crd_tit_cover">Natural Disasters</h5>
                <p class="crd_p_covered">Damages caused to your Bike / Two Wheeler due to any natural calamity.</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 covered_car_insurence_content">
            <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
                <?= img('assets/front/img/bike/Personal Accident.png', '', 'id="Personal_Accident"') ?>
                <div class="card-body crd_bdy_ins">
                <h5 class="card-title crd_tit_cover">Personal Accident</h5>
                <p class="crd_p_covered">If your Bike / Two Wheeler meets with an accident, leading to an injury or death of you or the driver using it.</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 covered_car_insurence_content">
            <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
                <?= img('assets/front/img/bike/Third Party Losses.png', '', 'id="Third_Party_Losses"') ?>
                <div class="card-body crd_bdy_ins">
                <h5 class="card-title crd_tit_cover">Third Party Losses</h5>
                <p class="crd_p_covered">Any damages caused by your Bike / Two Wheeler to a third party or its passengers.</p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 covered_car_insurence_content">
            <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
                <?= img('assets/front/img/bike/Towing Disabled Vehicles.png', '', 'id="Towing_Disabled_Vehicles"') ?>
                <div class="card-body crd_bdy_ins">
                <h5 class="card-title crd_tit_cover">Towing Disabled Vehicles</h5>
                <p class="crd_p_covered">Any damages caused to your Bike / Two Wheeler in cases where it's being towed.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<section id="not_covered_section">
    <div class="container">
    <div class="not_covered_head">
        <h2 class="head_clr"><span class="head_name_color">What’s not</span> covered?</h2>
        <p>It is equally important to know what’s not covered in your Bike / Two Wheeler insurance policy so that there are no surprises when you make a claim. Here are some such situations:</p>
    </div>
    <div class="row not_covered_main">
        <div class="col-lg-6 not_covered_content">
        <div class="card crd_why_choose crd_not_covered" style="width: 100%;">
            <?= img("assets/front/img/icon/drunk.png", '', 'class="not_covered_img"') ?>
            <div class="card-body crd_bdy_ins">
            <h5 class="crd_h5_not_covered">Own Damages for Third-Party Policy holder</h5>
            <p class="crd_p_not_covered">In the case of a Third-Party Liability Only Policy, damages to own vehicle won’t be covered.</p>
            </div>
        </div>
        </div>
        <div class="col-lg-6 not_covered_content">
        <div class="card crd_why_choose crd_not_covered" style="width: 100%;">
            <?= img("assets/front/img/icon/drunk.png", '', 'class="not_covered_img"') ?>
            <div class="card-body crd_bdy_ins">
            <h5 class="crd_h5_not_covered">Drunk Riding or without a Licence</h5>
            <p class="crd_p_not_covered">If the owner-driver of the insured Bike / Two Wheeler is drunk or driving without a valid license</p>
            </div>
        </div>
        </div>
        <div class="col-lg-6 not_covered_content">
        <div class="card crd_why_choose crd_not_covered" style="width: 100%;">
            <?= img("assets/front/img/icon/drunk.png", '', 'class="not_covered_img"') ?>
            <div class="card-body crd_bdy_ins">
            <h5 class="crd_h5_not_covered">Contributory Negligences</h5>
            <p class="crd_p_not_covered">Any damage caused due to a contributory negligence of the owner-driver (such as driving when there’s an existing flood)</p>
            </div>
        </div>
        </div>
        <div class="col-lg-6 not_covered_content">
        <div class="card crd_why_choose crd_not_covered" style="width: 100%;">
            <?= img("assets/front/img/icon/drunk.png", '', 'class="not_covered_img"') ?>
            <div class="card-body crd_bdy_ins">
            <h5 class="crd_h5_not_covered">Consequential Damages</h5>
            <p class="crd_p_not_covered">Any damage that is not a direct result of the accident/natural calamity etc.</p>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>