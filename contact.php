<?php
/**
 * Template Name: Contact
*/

get_header();

/>
<div class="contact">
<div class="section-header">
<h2 class="section-title">Frequently Asked Questions</h2>
<p class="section-subtitle">Any question or remarks? Just write us a message!</p>
</div>
<div class="contact-wrap d-md-flex">
<div class="contact-info">
<div class="contact-info-header">
    <h3 class="contact-info-title">Contact Information</h3>
    <p class="contact-info-subtitle">Say something to start a live chat!</p>
</div>
<div class="contact-info-wrap">
<ul>
<li>
<a href="#">
<span class="icon"></span>+1012 3456 789
</a>
</li>
<li>
<a href="#">
<span class="icon"></span>demo@gmail.com
</a>
</li>
<li>
<span class="icon"></span>132 Dartmouth Street Boston, Massachusetts 02156 United States

</li>
</ul>
</div>
</div>
</div>
</div>
<form class="contact__form custom-form">
            <div class="contact__form-row">
                <div class="form-group-wrap">
                    <div class="form-group">
                        <label for="first-name" class="form-label">First Name*</label>
                        <input type="text" id="first-name" class="form-control" placeholder="First name" required />
                    </div>

                    <div class="form-group">
                        <label for="last-name" class="form-label">Last Name*</label>
                        <input type="text" id="last-name" class="form-control" placeholder="Last name" required />
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email Address*</label>
                        <input type="email" id="email" class="form-control" placeholder="Email address" required />
                    </div>

                    <div class="form-group">
                        <label for="company-name" class="form-label">Company Name</label>
                        <input type="text" id="company-name" class="form-control" placeholder="Company name" />
                    </div>
                </div>
                <div class="form-group-wrap">
                    <div class="form-group">
                        <label for="reason" class="form-label">Reason for Contacting*</label>
                        <select id="reason" class="form-control" required>
                            <option value="" disabled selected>Select one...</option>
                            <option value="inquiry">Inquiry</option>
                            <option value="feedback">Feedback</option>
                            <option value="support">Support</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message" class="form-label">Message*</label>
                        <textarea id="message" class="form-control" placeholder="Message" required></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group form-group--submit">
                <button type="submit" class="btn btn-black btn-icon">
                    Submit
                    <span class="arrow-icon">
                        <i class="icon-right-arrow" aria-hidden="true"></i>
                    </span>
                </button>
            </div>
            <div class="contact-form__privacy custom-checkbox">
                <label>
                    <input type="checkbox" class="footer__checkbox">
                    <span class="fake-input"></span>
                    <span class="checkbox-label">Read PrivacyNotice</span>
                </label>
            </div>
        </form>
        <div class="faq">
        <div class="container">
        <h2 class="section-title">Frequently Asked Questions</h2>
        <div class="faq-wrap">
        <div class="faq-accordion">
        <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        What is a Payment Gateway?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Do I need to pay to Instapay even when there is no transaction going on in my business?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        What platforms does ACME payment gateway support?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
        Does ACME provide international payments support?
      </button>
    </h2>
    <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the four item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Is there any setup fee or annual maintainance fee that I need to pay regularly?
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the five item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</div>
<div class="faq-card">
    <h3 class=""faq-card-title>Do I need to pay to Instapay even when there is no transaction going on in my business?</h3>
    <div class="faq-card-text">
        <p>
        No, you do not need to pay Instapay where there is no transaction happening. With one of the lowest transaction charges in the industry, pay only when you get paid!
        </p>
    </div>
</div>
    </div>

<?php
get_footer();
/>
