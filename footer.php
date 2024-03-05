<!-- Footer -->
<footer class="footer footer--dark">
      <div class="container">
            <div class="footer__widgets">
                  <div class="row">

                        <div class="col-lg-3 col-md-6">
                              <aside class="widget widget-logo">
                                    <a href="index.html">
                                          <img src="<?= get_template_directory_uri() ?>/img/logo_default_white.png" srcset="<?= get_template_directory_uri() ?>/img/logo_default_white.png 1x, img/logo_default_white@2x.png 2x" class="logo__img" alt="">
                                    </a>
                                    <p class="copyright">
                                          © 2018 Deus | Made by <a href="https://deothemes.com">DeoThemes</a>
                                    </p>
                                    <div class="socials socials--large socials--rounded mb-24">
                                          <a class="social social-facebook" href="https://www.facebook.com/insidetelecomnews" target="_blank" aria-label="facebook">
                                                <i class="ui-facebook"></i>
                                          </a>
                                          <a class="social social-twitter" href="https://twitter.com/insidetelecom_" target="_blank" aria-label="twitter">
                                                <i class="ui-twitter"></i>
                                          </a>

                                          <a class="social social-youtube" href="https://www.youtube.com/channel/UCAjXVGAApTJCllvep9CuJaA/" target="_blank" aria-label="youtube">
                                                <i class="ui-youtube"></i>
                                          </a>
                                          <a class="social social-instagram" href="https://www.instagram.com/insidetelecom.news/?hl=en" target="_blank" aria-label="instagram">
                                                <i class="ui-instagram"></i>
                                          </a>
                                          <a class="social social-linkedin" href="https://www.linkedin.com/company/inside-telecom/" target="_blank" aria-label="linkedin">
                                                <i class="ui-linkedin"></i>
                                          </a>
                                    </div>
                              </aside>
                        </div>

                        <div class="col-lg-2 col-md-6">
                              <aside class="widget widget_nav_menu">
                                    <h4 class="widget-title">Useful Links</h4>
                                    <ul>
                                          <li><a href="about.html">About</a></li>
                                          <li><a href="contact.html">News</a></li>
                                          <li><a href="categories.html">Advertise</a></li>
                                          <li><a href="shortcodes.html">Support</a></li>
                                          <li><a href="shortcodes.html">Features</a></li>
                                          <li><a href="shortcodes.html">Contact</a></li>
                                    </ul>
                              </aside>
                        </div>

                        <div class="col-lg-4 col-md-6">
                              <aside class="widget widget-popular-posts">
                                    <h4 class="widget-title">Popular Posts</h4>
                                    <ul class="post-list-small">
                                          <li class="post-list-small__item">
                                                <article class="post-list-small__entry clearfix">
                                                      <div class="post-list-small__img-holder">
                                                            <div class="thumb-container thumb-100">
                                                                  <a href="single-post.html">
                                                                        <img data-src="<?= get_template_directory_uri() ?>/img/content/post_small/post_small_1.jpg" src="<?= get_template_directory_uri() ?>/img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                                                  </a>
                                                            </div>
                                                      </div>
                                                      <div class="post-list-small__body">
                                                            <h3 class="post-list-small__entry-title">
                                                                  <a href="single-post.html">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                                                            </h3>
                                                            <ul class="entry__meta">
                                                                  <li class="entry__meta-author">
                                                                        <span>by</span>
                                                                        <a href="#">DeoThemes</a>
                                                                  </li>
                                                                  <li class="entry__meta-date">
                                                                        Jan 21, 2018
                                                                  </li>
                                                            </ul>
                                                      </div>
                                                </article>
                                          </li>
                                          <li class="post-list-small__item">
                                                <article class="post-list-small__entry clearfix">
                                                      <div class="post-list-small__img-holder">
                                                            <div class="thumb-container thumb-100">
                                                                  <a href="single-post.html">
                                                                        <img data-src="<?= get_template_directory_uri() ?>/img/content/post_small/post_small_2.jpg" src="<?= get_template_directory_uri() ?>/img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                                                                  </a>
                                                            </div>
                                                      </div>
                                                      <div class="post-list-small__body">
                                                            <h3 class="post-list-small__entry-title">
                                                                  <a href="single-post.html">Lose These 12 Bad Habits If You're Serious About Becoming a
                                                                        Millionaire</a>
                                                            </h3>
                                                            <ul class="entry__meta">
                                                                  <li class="entry__meta-author">
                                                                        <span>by</span>
                                                                        <a href="#">DeoThemes</a>
                                                                  </li>
                                                                  <li class="entry__meta-date">
                                                                        Jan 21, 2018
                                                                  </li>
                                                            </ul>
                                                      </div>
                                                </article>
                                          </li>
                                    </ul>
                              </aside>
                        </div>

                        <div class="col-lg-3 col-md-6">
                              <aside class="widget widget_mc4wp_form_widget">
                                    <h4 class="widget-title">Newsletter</h4>
                                    <p class="newsletter__text">
                                          <i class="ui-email newsletter__icon"></i>
                                          Subscribe for our daily news
                                    </p>
                                    <form class="mc4wp-form" method="post">
                                          <div class="mc4wp-form-fields">
                                                <div class="form-group">
                                                      <input type="email" name="EMAIL" placeholder="Your email" required="">
                                                </div>
                                                <div class="form-group">
                                                      <input type="submit" class="btn btn-lg btn-color" value="Sign Up">
                                                </div>
                                          </div>
                                    </form>
                              </aside>
                        </div>

                  </div>
            </div>
      </div> <!-- end container -->
</footer> <!-- end footer -->

<div id="back-to-top">
      <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
</div>

</main> <!-- end main-wrapper -->
<?php wp_footer(); ?>
</body>

</html>