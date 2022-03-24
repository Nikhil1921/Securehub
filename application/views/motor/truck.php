<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section id="car_section">
  <div class="container">
    <div class="row car_main">
      <div id="car_sec_right_" class="col-lg-12 car_right">
        <div>
          <h2 class="head_clr"><span class="head_name_color">GCV (Goods Carrying Vehicle)</span> Insurance</h2>
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
                  <p class="btn_down_p"><a class="btn_a_down" href="i_have_a_new_gcv.php">I HAVE NEW GCV</a></p>
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
                  <p class="btn_down_p"><a class="btn_a_down" href="i_have_a_new_gcv.php">I HAVE NEW GCV</a></p>
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
          <h2 class="head_clr"><span class="head_name_color">What is Goods Carrying</span> Vehicle Insurance?</h2>
        </div>
        <div class="col-lg-6 car_ins_cont">
          <div class="car_insu_content_">
            <?= img("assets/front/img/truck/1.jpg") ?>
          </div>
        </div>
        <div class="col-lg-6 car_ins_cont">
          <div class="car_insu_content_">
            <p><span><i class="far fa-hand-point-right"></i>  The name of the policy itself suggests that it is an insurance policy that is designed to protect the commercial vehicle carrying goods from one place to another. Considering the higher risk involved with the commercial vehicle as compared to personal vehicles, this insurance policy is designed to cover the damages and losses incurred in an accident, natural calamity, fire incidents, theft, etc.</span></p>
            <p><span><i class="far fa-hand-point-right"></i>  Commercial vehicles running time is usually higher than the personal vehicle running time. The conditions of the roads in India are not very good and the commercial vehicles tend to break down during long journeys. The commercial vehicle insurance takes care of these problems as well.</span></p>
          </div>
        </div>
        <div class="col-12">
          <div class="car_insu_content_">
            <p><span><i class="far fa-hand-point-right"></i>  However, there are different types of goods carrying vehicles that require different type of coverage. They are as follows:</span></p>
            <ul class="gmc_ins_ul">
              <li><strong class="stng_fnt_sz">Truck - </strong>There are different shapes and sizes of trucks. Depending on the size and weightage of the goods they businessman utilize the vehicle. Smalls trucks are used for daily purposes within the same cities and large trucks are used to carry big size and heavy goods as well as intercity travels. Be it any type of truck, the commercial vehicle insurance covers all of them.</li>
              <li><strong class="stng_fnt_sz">Three-wheeler Tempos - </strong>Three-wheeler tempos, autos and cargos are often used to transport goods in short distances. They are small in size and less prone to accidents than trucks but still you can chose to purchase goods carrying insurance policy to protect them.</li>
              <li><strong class="stng_fnt_sz">Four-wheeler Tempos - </strong>Four-wheeler tempos are smaller than trucks and bigger than three-wheeler tempos. These tempos are usually used for carrying furniture and electrical appliances transportation. The insurance policy covers this type of vehicle as well.</li>
              <li><strong class="stng_fnt_sz">Tipper Vehicles - </strong>These vehicles come under the heavy vehicle category and they are used to carry the construction goods. They usually have to travel from one city to another which makes them prone to break downs and accidents. This vehicle can be covered under the insurance policy.</li>
              <li><strong class="stng_fnt_sz">Trailers - </strong>Trailers are bigger than trucks and they are used to transport the goods from one country to another that makes them much more prone to accidents and breakdowns during transportation. The commercial insurance can be purchased to protect trailers.</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row car_ins_main_">
        <div class="car_insu_head_">
          <h2 class="head_clr"><span class="head_name_color">Importance Of Goods</span> Carrying Vehicle Insurance</h2>
        </div>
        <div class="col-lg-12 car_ins_cont">
          <div class="car_insu_content_">
            <p><span><i class="far fa-hand-point-right"></i>  Goods carrying vehicle are the soul of a transportation business. Hence it becomes a responsibility of the business owner to protect the vehicles with an insurance policy. The insurance policy takes off a huge burden of unforeseen damages and losses off of the policyholder’s shoulders.</span></p>
            <p><span><i class="far fa-hand-point-right"></i>  With the goods carrying vehicle insurance policy the business owner can run the business smoothly. Every type of commercial, goods carrying vehicles are covered under this policy. However, it depends on the business owner to either purchase the third-party liability insurance policy or a comprehensive insurance policy.</span></p>
            <p><span><i class="far fa-hand-point-right"></i>  A third-party policy will protect the liabilities arising out of third-party but a comprehensive insurance policy will provide an overall protection to the policyholder. So, let us now tell you what is covered and what is not covered under this policy?</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="why_choose_car_section">
    <div class="container">
      <div class="why_choose_car_head">
        <h2 class="head_clr"><span class="head_name_color">Why Choose Goods Carrying Vehicle Insurance</span> by SecureHub Consultants Private Limited?</h2>
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
        <h2 class="head_clr"><span class="head_name_color"> What's Covered in</span> a Goods Carrying Vehicle Insurance?</h2>
      </div>
      <div class="row covered_car_insurence_main">
        <div class="col-lg-4 covered_car_insurence_content">
          <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
            <?= img(['id' => "truck_accident", 'src' => "assets/front/img/truck/truck_accident.png"]) ?>
            <div class="card-body crd_bdy_ins">
              <h5 class="card-title crd_tit_cover">Accidents</h5>
              <p class="crd_p_covered">Damages caused to your Goods Carrying Vehicle in case of an accident.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 covered_car_insurence_content">
          <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
            <?= img(['id' => "truck_theft", 'src' => "assets/front/img/truck/truck_theft.png"]) ?>
            <div class="card-body crd_bdy_ins">
              <h5 class="card-title crd_tit_cover">Theft</h5>
              <p class="crd_p_covered">Loss or damage of your Goods Carrying Vehicle due to theft.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 covered_car_insurence_content">
          <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
            <?= img(['id' => "truck_fire", 'src' => "assets/front/img/truck/truck_fire.png"]) ?>
            <div class="card-body crd_bdy_ins">
              <h5 class="card-title crd_tit_cover">Fire</h5>
              <p class="crd_p_covered">Damages caused to your Goods Carrying Vehicle due to a fire.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 covered_car_insurence_content">
          <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
            <?= img(['id' => "truck_natural", 'src' => "assets/front/img/truck/truck_natural.png"]) ?>
            <div class="card-body crd_bdy_ins">
              <h5 class="card-title crd_tit_cover">Natural Disasters</h5>
              <p class="crd_p_covered">Damages caused to your Goods Carrying Vehicle due to any natural calamity.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 covered_car_insurence_content">
          <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
            <?= img(['id' => "truck_pa", 'src' => "assets/front/img/truck/pa.png"]) ?>
            <div class="card-body crd_bdy_ins">
              <h5 class="card-title crd_tit_cover">Personal Accident</h5>
              <p class="crd_p_covered">If your Goods Carrying Vehicle meets with an accident, leading to an injury or death of you or the driver using it.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 covered_car_insurence_content">
          <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
            <?= img(['id' => "truck_third_party", 'src' => "assets/front/img/truck/truck_third_party.png"]) ?>
            <div class="card-body crd_bdy_ins">
              <h5 class="card-title crd_tit_cover">Third Party Losses</h5>
              <p class="crd_p_covered">Any damages caused by your Goods Carrying Vehicle to a third party or its passengers.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 covered_car_insurence_content">
          <div class="card crd_why_choose crd_ins_co_color" style="width: 100%;">
            <?= img(['id' => "truck_tdv", 'src' => "assets/front/img/truck/truck Towing Disabled Vehicles.png"]) ?>
            <div class="card-body crd_bdy_ins">
              <h5 class="card-title crd_tit_cover">Towing Disabled Vehicles</h5>
              <p class="crd_p_covered">Any damages caused to your Goods Carrying Vehicle in cases where it's being towed.</p>
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
        <p>It is equally important to know what’s not covered in your Goods Carrying Vehicle insurance policy so that there are no surprises when you make a claim. Here are some such situations:</p>
      </div>
      <div class="row not_covered_main">
        <div class="col-lg-6 not_covered_content">
          <div class="card crd_why_choose crd_not_covered" style="width: 100%;">
            <img class="not_covered_img", 'src' => "assets/front/img/icon/drunk.png" alt="Card image c]ap">
            <div class="card-body crd_bdy_ins">
              <h5 class="crd_h5_not_covered">Own Damages for Third-Party Policy holder</h5>
              <p class="crd_p_not_covered">In the case of a Third-Party Liability Only Policy, damages to own vehicle won’t be covered.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 not_covered_content">
          <div class="card crd_why_choose crd_not_covered" style="width: 100%;">
            <img class="not_covered_img", 'src' => "assets/front/img/icon/drunk.png" alt="Card image c]ap">
            <div class="card-body crd_bdy_ins">
              <h5 class="crd_h5_not_covered">Drunk Riding or without a Licence</h5>
              <p class="crd_p_not_covered">If the owner-driver of the insured Goods Carrying Vehicle is drunk or driving without a valid license</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 not_covered_content">
          <div class="card crd_why_choose crd_not_covered" style="width: 100%;">
            <img class="not_covered_img", 'src' => "assets/front/img/icon/drunk.png" alt="Card image c]ap">
            <div class="card-body crd_bdy_ins">
              <h5 class="crd_h5_not_covered">Contributory Negligences</h5>
              <p class="crd_p_not_covered">Any damage caused due to a contributory negligence of the owner-driver (such as driving when there’s an existing flood)</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 not_covered_content">
          <div class="card crd_why_choose crd_not_covered" style="width: 100%;">
            <img class="not_covered_img", 'src' => "assets/front/img/icon/drunk.png" alt="Card image c]ap">
            <div class="card-body crd_bdy_ins">
              <h5 class="crd_h5_not_covered">Consequential Damages</h5>
              <p class="crd_p_not_covered">Any damage that is not a direct result of the accident/natural calamity etc.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>