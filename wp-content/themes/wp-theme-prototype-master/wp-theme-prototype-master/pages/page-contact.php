<?php 
/**  
*Template Name: contact
*/ 
?>


<?php get_header() ?>

<div class="contact-wrap">
    <section class="contact-header">
        <!-- header -->
        <div class="container">
            <h1>CONTACT US</h1>
            <p>Hi, welcome to workshop. <br/>
                What can we do for you?
            </p>
        </div>
    </section>

    <!-- content -->
    <section class="contact-content">

    <article class="page-content">
        <div class="container">
            <p>We love hearing from our customers, all questions, comments and feedback are always welcome. On workshop experience you have is the best it can be.</p>
            
            <h3>Customer Care</h3>
            <p>You can call us at +66 0000 0000 from 9.00 a.m. – 6.00 p.m. Monday to Sunday. Alternatively, you can send us an email to customer@coffeecoffee.co.th, and we’ll do our best to reply as quickly as possible.</p>
        
            <h3>Demo workshop</h3>
            <p>You can call us at +66 0808 0000 from 9.00 a.m. – 6.00 p.m. Monday to Sunday. Alternatively, you can send us an email to customer@coffee-hq.th, and we’ll do our best to reply as quickly as possible.</p>
        </div>
    </article>

    </section>

    <!-- contact fourm-->
    <section class="contact-form">
        <div class="container">
            <h3>Contact Form</h3>
            <p>We will get back to you as soon as possible</p>
     
            <form action="" class="form" id="contact-form">
                <div class="row">
                    <!-- Your name -->
                    <div class="col-lg-4">
                       <div class="form-group">
                            <label for="" class="control-label">
                                Your name <span>*</span>
                            </label>
                            <input type="text" class="form-control">
                       </div>
                    </div>

                    <!-- Email -->
                    <div class="col-lg-4">
                       <div class="form-group">
                            <label for="" class="control-label">
                                Email<span>*</span>
                            </label>
                            <input type="text" class="form-control">
                       </div>
                    </div>

                    <!-- Phone number -->
                    <div class="col-lg-4">
                       <div class="form-group">
                            <label for="" class="control-label">
                                Phone number <span>&nbsp;</span>
                            </label>
                            <input type="text" class="form-control">
                       </div>
                    </div>

                    <!-- Message -->
                    <div class="col-lg-12">
                        <div class="form-group">
                           <label for="" class="control-label">
                            Message <span>*</span>
                           </label>
                           <textarea name="" id="" cols="30" rows="10" class="form-control">

                           </textarea>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="col-lg-12">
                        <div class="form-group">

                            <button class="btn btn-primary" type="button">
                                Submit 
                            </button>

                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>
</div>


<?php get_footer() ?>