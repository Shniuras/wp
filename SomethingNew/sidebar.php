<section class="panel b-red" id="3">
    <article class="panel__wrapper">
        <div class="panel__content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="projects-content">
                            <div class="heading">
                                <h4>Recent Projects</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="owl-carousel owl-theme projects-container">
                                            <?php if ( ! dynamic_sidebar('sidebar-1') ) : ?>
                                            <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
    <section class="panel b-green" id="4">
    <article class="panel__wrapper">
        <div class="panel__content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="contact-content">
                            <div class="heading">
                                <h4>Contact us</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="contat-form">
                                        <form id="contact" action="" method="post">
                                            <fieldset>
                                                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                                            </fieldset>
                                            <fieldset>
                                                <input name="email" type="email" class="form-control" id="email" placeholder="Email" required="">
                                            </fieldset>
                                            <fieldset>
                                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                            </fieldset>
                                            <fieldset>
                                                <button type="submit" id="form-submit" class="btn">Send Message</button>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="more-info">
                                        <p>Lorem ipsum dolor , consectetur adipiscing elit. Nunc purus ligula, ullamcorper id velit id, vestibulum auc sapien. Sed quis mauris eget sem imperdiet rhoncus.<br><br>
                                            <em>3344 Etiam mauris erat,
                                                <br>Vestibulum eu augue nec, 10550</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="footer">
                            <p>Copyright &copy; 2017 Your Company
                                | Designed by <a href="http://www.templatemo.com" target="_parent">templatemo</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>