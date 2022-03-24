<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="car_section">
  <div class="container">
    <div class="row car_main">
      <div id="car_sec_right_" class="col-lg-12 car_right">
        <div>
          <h2 class="head_clr"><span class="head_name_color">PCV (Passenger Carrying Vehicle)</span> Insurance</h2>
        </div>
        <form method="post" action="" id="inquiry_form" class="inquiryForm" style="border: none;">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active clr_pill" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">T.P Only</a>
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
                  <p class="btn_down_p"><a class="btn_a_down" href="i_have_a_new_taxi.php">I HAVE NEW PCV</a></p>
                  <p class="btn_down_p">Need Help? Call Us at<a class="btn_a_down_last" href="tel:+91 9512137878"> +919512137878</a></p>
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
                  <p class="btn_down_p"><a class="btn_a_down" href="i_have_a_new_taxi.php">I HAVE NEW PCV</a></p>
                  <p class="btn_down_p">Need Help? Call Us at<a class="btn_a_down_last" href="tel:+91 9512137878"> +919512137878</a></p>
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
                  <p class="btn_down_p"><a class="btn_a_down" href="i_have_a_new_taxi.php">I HAVE NEW PCV</a></p>
                  <p class="btn_down_p">Need Help? Call Us at<a class="btn_a_down_last" href="tel:+91 9512137878"> +919512137878</a></p>
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
          <h2 class="head_clr"><span class="head_name_color">What is a Passenger</span> Carrying Vehicle Insurance?</h2>
        </div>
        <div class="col-lg-6 car_ins_cont">
          <div class="car_insu_content_">
            <?= img("assets/front/img/car/City driver-pana.png") ?>
          </div>
        </div>
        <div class="col-lg-6 car_ins_cont">
          <div class="car_insu_content_">
            <p><span><i class="far fa-hand-point-right"></i>  A passenger carrying vehicle insurance is a type of commercial vehicle insurance policy, designed to protect any commercial vehicles used for the purpose of transporting passengers from one place to another.</span></p>
            <p><span><i class="far fa-hand-point-right"></i>  This passenger carrying vehicle insurance protects the vehicle from damages and losses that could arise in case of an accident, natural calamity or fire, amongst other unforeseen events.</span></p>
            <p><span><i class="far fa-hand-point-right"></i>  The most common types of passenger carrying vehicle insurance policies include a bus insurance, van insurance, taxi/cab insurance and auto rickshaw insurance, among others.</span></p>
          </div>
        </div>
      </div>
      <div class="row car_ins_main_ padd_tp_">
        <div class="car_insu_head_">
          <h2 class="head_clr"><span class="head_name_color">Types of Passenger</span> Carrying Vehicles Covered</h2>
        </div>
        <div class="col-lg-12 car_ins_cont">
          <div class="car_insu_content_">
            <p><span><i class="far fa-hand-point-right"></i>  <strong class="stng_fnt_sz">Buses :</strong> Buses such as school buses, private tour buses and others used for the purpose of transporting passengers from one place to another are covered under a passenger carrying vehicle insurance policy.</span></p>
            <p><span><i class="far fa-hand-point-right"></i>  <strong class="stng_fnt_sz">Auto Rickshaws :</strong> All auto rickshaws used for commercial purposes; transporting people from one place to another too can be covered under this policy.</span></p>
            <p><span><i class="far fa-hand-point-right"></i>  <strong class="stng_fnt_sz">Taxis, Cabs and Commercial Cars :</strong> Cabs and commercial cars such as your daily uber, ola and other private cars used for commercial, public transportation can be covered under a passenger carrying vehicle insurance.</span></p>
            <p><span><i class="far fa-hand-point-right"></i>  <strong class="stng_fnt_sz">Vans :</strong> Vans such as school vans and private tour minibuses used for commercial purposes too are covered under this policy.</span></p>
          </div>
        </div>
      </div>
      <div class="row car_ins_main fire_rw">
        <div class="car_insu_head_">
          <h2 class="head_clr"><span class="head_name_color">​​​Why should I buy a Passenger </span>Carrying Vehicle Insurance?</h2>
        </div>
        
        <div class="col-lg-12 car_ins_cont">
          <div class="car_insu_content_">
            <p><span><i class="far fa-hand-point-right"></i>  <strong class="stng_fnt_sz">Protection from Unforeseen Losses :</strong> Whether it is due to a natural calamity, accident, collision or even a fire; a passenger carrying vehicle insurance helps compensate for these uncertain losses, and thereby protects your business from being liable to them.</span></p>
            <p><span><i class="far fa-hand-point-right"></i>  <strong class="stng_fnt_sz">Comply with the Law :</strong> As per the Motor Vehicle Act, it is compulsory for all vehicles including ones used for commercial purposes to be insured with at least a basic, third-party motor insurance to help protect one from losses and damages caused to any third-party; such as a person, property or vehicle.</span></p>
            <p><span><i class="far fa-hand-point-right"></i>  <strong class="stng_fnt_sz">Covers for Owner-Driver :</strong> Insuring your commercial vehicle with a passenger carrying vehicle insurance does not only protect the vehicle but, also covers for the owner-driver.</span></p>
            <p><span><i class="far fa-hand-point-right"></i>  <strong class="stng_fnt_sz">Passenger Protection :</strong> While buying a passenger vehicle, one can also opt to cover for their passengers; thus, being a responsible business that cares for not only oneself but for all its stakeholders involved.</span></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="why_choose_car_section">
    <div class="container">
      <div class="why_choose_car_head">
        <h2 class="head_clr"><span class="head_name_color">Why Choose Passenger Carrying Vehicle Insurance</span> by SecureHub Consultants Private Limited?</h2>
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
        <h2 class="head_clr"><span class="head_name_color"> What's Covered in</span> a Passenger Carrying Vehicle Insurance?</h2>
      </div>
      <div class="row covered_car_insurence_main">
        <div class="col-lg-4 covered_car_insurence_content">
          <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
            <?= img("assets/front/img/taxi/taxi_accident.png", '', 'id="taxi_accident"') ?>
            <div class="card-body crd_bdy_ins">
              <h5 class="card-title crd_tit_cover">Accidents</h5>
              <p class="crd_p_covered">Damages caused to your Passenger Carrying Vehicle in case of an accident.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 covered_car_insurence_content">
          <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
            <?= img("assets/front/img/taxi/taxi theft1.jpg") ?>
            <div class="card-body crd_bdy_ins">
              <h5 class="card-title crd_tit_cover">Theft</h5>
              <p class="crd_p_covered">Loss or damage of your Passenger Carrying Vehicle due to theft.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 covered_car_insurence_content">
          <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
            <?= img("assets/front/img/fire.png") ?>
            <div class="card-body crd_bdy_ins">
              <h5 class="card-title crd_tit_cover">Fire</h5>
              <p class="crd_p_covered">Damages caused to your Passenger Carrying Vehicle due to a fire.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 covered_car_insurence_content">
          <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
            <?= img("assets/front/img/taxi/natural.png", '', 'id="natural_taxi"') ?>
            <div class="card-body crd_bdy_ins">
              <h5 class="card-title crd_tit_cover">Natural Disasters</h5>
              <p class="crd_p_covered">Damages caused to your Passenger Carrying Vehicle due to any natural calamity.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 covered_car_insurence_content">
          <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
            <?= img("assets/front/img/taxi/pa.png", '', 'id="pa_taxi"') ?>
            <div class="card-body crd_bdy_ins">
              <h5 class="card-title crd_tit_cover">Personal Accident</h5>
              <p class="crd_p_covered">If your Passenger Carrying Vehicle meets with an accident, leading to an injury or death of you or the driver using it.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 covered_car_insurence_content">
          <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
            <?= img("assets/front/img/taxi/third party.png", '', 'id="third_party_taxi"') ?>
            <div class="card-body crd_bdy_ins">
              <h5 class="card-title crd_tit_cover">Third Party Losses</h5>
              <p class="crd_p_covered">Any damages caused by your Passenger Carrying Vehicle to a third party or its passengers.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 covered_car_insurence_content">
          <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
            <?= img("assets/front/img/taxi/Towing Disabled Vehicles.png") ?>
            <div class="card-body crd_bdy_ins">
              <h5 class="card-title crd_tit_cover">Towing Disabled Vehicles</h5>
              <p class="crd_p_covered">Any damages caused to your Passenger Carrying Vehicle in cases where it's being towed.</p>
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
        <p>It is equally important to know what’s not covered in your Passenger Carrying Vehicle insurance policy so that there are no surprises when you make a claim. Here are some such situations:</p>
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
              <p class="crd_p_not_covered">If the owner-driver of the insured Passenger Carrying Vehicle is drunk or driving without a valid license</p>
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