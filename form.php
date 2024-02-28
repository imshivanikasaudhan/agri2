<section class="contact-two">
            <div class="contact-two__shape-1 float-bob-x">
                <img src="assets/images/shapes/contact-two-shape-1.png" alt="">
            </div>
            <div class="container">
                <div class="section-title text-center">
                    <span class="section-title__tagline">Write a Message</span>
                    <h2 class="section-title__title">Always here to help you</h2>
                 
                </div>
                <div class="contact-two__form-box">
                    <form action="save.php" method="post" id="myForm" class="contact-two__form contact-form-validated" >
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="First Name" name="first_name" id="first_name" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Last Name" name="last_name" id="last_name" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="email" placeholder="Email Address" name="email" id="email" required>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="contact-form__input-box">
                                    <input type="text" placeholder="Phone" maxlength= '10' minlength='10' name="phone" id="phone" required>
                                </div>
                            </div>
                        
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="contact-form__input-box text-message-box">
                                    <textarea name="message" placeholder="Write a Comment" id="message" required></textarea>
                                </div>
                                <div class="contact-form__btn-box">
                                    <button type="submit" class="thm-btn contact-two__btn" style="border: none;" >Send a Message<i
                                            class="icon-right-arrow"></i></button>
                                    <!-- <a  class="thm-btn contact-two__btn" type="submit">Send a Message<i
                                            class="icon-right-arrow"></i> </a> -->
                                </div>
     
                            </div>
                        </div>
                        <!-- Add this HTML code where you want the loader to appear -->


                    </form>
                    <!-- <div id="loader"></div> -->
                </div>
            </div>
        </section>