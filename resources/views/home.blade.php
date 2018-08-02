@extends('layouts.mainlayout')

@section('content')
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background mbr-after-navbar" id="header1-73" style='background-image: url(assets/images/computer.jpg'>
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
        <div class="mbr-overlay" style='opacity: 0.6; background-color: rgb(215, 215, 215);'></div>
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
                <div class="row"><div class=" col-sm-6">
                    <div class="mbr-hero animated fadeInUp">
                        <h1 class="mbr-hero__text">PC Start - Serwis Komputerowy</h1>
                        <p class="mbr-hero__subtext">Twój laptop nie włącza się? Potrzebujesz laptopa pilnie do pracy? A może Twój laptop upadł lub został zalany? Skontaktuj się z nami! <br></p>
                    </div>
                    <div class="mbr-buttons btn-inverse mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-danger" href="#">Zadzwoń do nas!</a> <a class="mbr-buttons__btn btn btn-lg btn-default animated fadeInUp delay" href="#">Napisz do nas!</a></div>
                </div></div>
            </div></div>
        </div>
        <div class="mbr-arrow mbr-arrow--floating text-center">
            <div class="mbr-section__container container">
                <a class="mbr-arrow__link" href="#features1-75"><i class="glyphicon glyphicon-menu-down"></i></a>
            </div>
        </div>
    </div>
</section>

 <section class="content-2" id="features1-75" style="background-color: rgb(255, 255, 255);">

    <div class="container">
        <div class="row">
            <div class = "col-3">
                <div class="thumbnail">
                    <div class="image"><img src="assets/images/computer.png"></img></div>
                    <div class="caption">
                        <div>
                            <h3>Naprawa komputerów</h3>
                            <p>Sed egestas urna quam, sit amet euismod ligula commodo vitae. Cras hendrerit quam est, non dapibus turpis porta in. Fusce viverra, lectus vitae dignissim interdum, erat leo egestas velit, eu tincidunt tellus eros a mauris.&nbsp;</p>
                        </div>
                        <p class="group"><a href="#" class="btn btn-default">Dowiedz się więcej</a></p>
                    </div>
                </div>
            </div>
            <div class = "col-3">
                <div class="thumbnail">
                    <div class="image"><img src="assets/images/broom.png"></img></div>
                    <div class="caption">
                        <div>
                            <h3>Konserwacja</h3>
                            <p>Sed egestas urna quam, sit amet euismod ligula commodo vitae. Cras hendrerit quam est, non dapibus turpis porta in. Fusce viverra, lectus vitae dignissim interdum, erat leo egestas velit, eu tincidunt tellus eros a mauris. </p>
                        </div>
                        <p class="group"><a href="#" class="btn btn-default">Dowiedz się więcej</a></p>
                    </div>
                </div>
            </div>
            <div class = "col-3">
                <div class="thumbnail">
                    <div class="image"><img src="assets/images/motherboard.png"></img></div>
                    <div class="caption">
                        <div>
                            <h3>Naprawa płyt głównych</h3>
                            <p>Sed egestas urna quam, sit amet euismod ligula commodo vitae. Cras hendrerit quam est, non dapibus turpis porta in. Fusce viverra, lectus vitae dignissim interdum, erat leo egestas velit, eu tincidunt tellus eros a mauris. </p>
                        </div>
                        <p class="group"><a href="#" class="btn btn-default">Dowiedz się więcej</a></p>
                    </div>
                </div>
            </div>
            <div class = "col-3">
                <div class="thumbnail">
                    <div class="image"><img src="assets/images/analytics.png"></img></div>
                    <div class="caption">
                        <div>
                            <h3>Naprawa systemu</h3>
                            <p>Sed egestas urna quam, sit amet euismod ligula commodo vitae. Cras hendrerit quam est, non dapibus turpis porta in. Fusce viverra, lectus vitae dignissim interdum, erat leo egestas velit, eu tincidunt tellus eros a mauris. </p>
                        </div>
                        <p class="group"><a href="#" class="btn btn-default">Dowiedz się więcej</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>   
<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="form1-89" style="background-color: rgb(239, 239, 239);">

    <div class="mbr-section__container mbr-section__container--std-padding container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">Zgłoś usterkę - skontaktujemy się z tobą!</h2>
                        </div>
                        <div data-form-alert="true"></div>
                        <form action="{{ route('custRepair') }}" method="post" data-form-title="CONTACT FORM">
                            {{ csrf_field() }}
                            <input type="hidden" value="" data-form-email="true">
                            <div class="form-group">
                                <input type="text" class="form-control" name="customerFirstName" required="" placeholder="imię*" data-form-field="customerFirstName">
                            </div>
                                  <div class="form-group">
                                <input type="text" class="form-control" name="customerLastName" required="" placeholder="nazwisko*" data-form-field="customerLastName">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="customerEmail" required="" placeholder="email*" data-form-field="customerEmailEmail">
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control" name="customerPhoneNumber" placeholder="numer telefonu" data-form-field="customerPhoneNumber">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="computerModel" placeholder="model komputera" data-form-field="computerModel">
                            </div>
                            <div class="form-group">
                                       <textarea class="form-control" name="descriptionOfTheFault" placeholder="opis usterki" rows="7" data-form-field="descriptionOfTheFault"></textarea>
                            </div>  <div class="row">
                                <div class = "col-10 caption" style="color: gray;">
                                    <p>
                                        Pola z * są obowiązkowe, aby wysłać formularz.
                                    </p>
                                </div>
                            <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-danger">Wyślij</button></div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection




<!--
<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header1-76" style="background-image: url(assets/images/iphone-926663-1920-1920x1280-94.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left">
        <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(215, 215, 215);"></div>
        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
                <div class="row"><div class=" col-sm-6">
                    <div class="mbr-hero animated fadeInUp">
                        <h1 class="mbr-hero__text">Multipurpose in anyway</h1>
                        <p class="mbr-hero__subtext">COMPUTER SERVICE can be easily transoformed into any kind of business such as online store, personal blog, etc.<br></p>
                    </div>
                    <div class="mbr-buttons btn-inverse mbr-buttons--left"><a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-danger" href="#">CHECKOUT</a> <a class="mbr-buttons__btn btn btn-lg btn-default animated fadeInUp delay" href="#">READ MORE</a></div>
                </div></div>
            </div></div>
        </div>
        <div class="mbr-arrow mbr-arrow--floating text-center">
            <div class="mbr-section__container container">
                <a class="mbr-arrow__link" href="#features1-77"><i class="glyphicon glyphicon-menu-down"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="content-2 col-4" id="features1-77" style="background-color: rgb(239, 239, 239);">

    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-truck fa-5x" style="color:#43c0ff;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>Delivery</h3>
                            <p>Duis sodales arcu eget gravida mollis. Sed condimentum nibh at dapibus semper. Etiam mattis leo at commodo eleifend. Integer mauris est, luctus vitae lobortis sed, tristique in eros. </p>
                        </div>
                        <p class="group"><a href="#" class="btn btn-danger">READ MORE</a></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-trophy fa-5x" style="color:#43c0ff;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>Trophies</h3>
                            <p>Duis sodales arcu eget gravida mollis. Sed condimentum nibh at dapibus semper. Etiam mattis leo at commodo eleifend. Integer mauris est, luctus vitae lobortis sed, tristique in eros.&nbsp;</p>
                        </div>
                        <p class="group"><a href="#" class="btn btn-danger">READ MORE</a></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-link fa-5x" style="color:#43c0ff;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>Outbound links</h3>
                            <p>Duis sodales arcu eget gravida mollis. Sed condimentum nibh at dapibus semper. Etiam mattis leo at commodo eleifend. Integer mauris est, luctus vitae lobortis sed, tristique in eros. </p>
                        </div>
                        <p class="group"><a href="#" class="btn btn-danger">READ MORE</a></p>
                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-phone fa-5x" style="color:#43c0ff;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>Phone support</h3>
                            <p>Duis sodales arcu eget gravida mollis. Sed condimentum nibh at dapibus semper. Etiam mattis leo at commodo eleifend. Integer mauris est, luctus vitae lobortis sed, tristique in eros. </p>
                        </div>
                        <p class="group"><a href="#" class="btn btn-danger">READ MORE</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-parallax-background" id="msg-box5-79" style="background-image: url(assets/images/iphone-6-458150-1920-1920x1285-73.jpg);">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(57, 82, 89);"></div>
    <div class="mbr-section__container mbr-section__container--isolated container">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-right mbr-section__left col-sm-6">
                    <figure class="mbr-figure mbr-figure--adapted mbr-figure--caption-inside-bottom mbr-figure--full-width"><img class="mbr-figure__img" src="assets/images/iphone-1032784-1920-1920x1440-16.jpg"></figure>
                </div>
                <div class="mbr-box__magnet mbr-class-mbr-box__magnet--center-left col-sm-6 mbr-section__right">
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">ABOUT COMPUTER SERVICE</h3>

                        </div>
                    </div>
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-article mbr-article--auto-align mbr-article--wysiwyg">
                            <p>
                                Cras facilisis nulla purus, sed laoreet sapien placerat euismod. Duis eu lectus gravida nisl finibus sodales. Suspendisse dapibus efficitur est fermentum tincidunt. Sed semper faucibus massa, id fermentum quam luctus placerat. Cras at tellus id odio euismod laoreet. Vivamus ac blandit justo.
                            </p>
                        </div>
                    </div>
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align btn-inverse"><a class="mbr-buttons__btn btn btn-lg btn-default" href="#">LEARN MORE</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="content-2 col-3" id="features1-80" style="background-color: rgb(239, 239, 239);">

    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-automobile fa-5x" style="color:#43c0ff;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>EASY TO USE</h3>
                            <p>Sed vel vulputate lacus. Nulla et fringilla turpis. Etiam non urna magna. Fusce rutrum nec eros id dapibus. In tincidunt mi eget molestie condimentum.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-headphones fa-5x" style="color:#43c0ff;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>24/7 Support</h3>
                            <p>Sed vel vulputate lacus. Nulla et fringilla turpis. Etiam non urna magna. Fusce rutrum nec eros id dapibus. In tincidunt mi eget molestie condimentum.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div>
                <div class="thumbnail">
                    <div class="image"><i class="fa fa-usd fa-5x" style="color:#43c0ff;"></i></div>
                    <div class="caption">
                        <div>
                            <h3>Extremely low price</h3>
                            <p>Sed vel vulputate lacus. Nulla et fringilla turpis. Etiam non urna magna. Fusce rutrum nec eros id dapibus. In tincidunt mi eget molestie condimentum.</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="msg-box3-81" style="background-color: rgb(255, 255, 255);">

    <div class="mbr-section__container container mbr-section__container--isolated">
        <div class="mbr-header mbr-header--wysiwyg row">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="mbr-header__text">OUR PORTFOLIO</h3>
            </div>
        </div>
    </div>


</section>

<section class="mbr-gallery mbr-section mbr-section--no-padding" id="gallery1-82" style="background-color: rgb(239, 239, 239);">
    <!-- Gallery 
    <div class=" mbr-gallery-layout-default">
        <div>
            <div class="row mbr-gallery-row no-gutter">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
                    <a href="#lb-gallery1-82" data-slide-to="0" data-toggle="modal">
                        <img alt="" src="assets/images/iphone-1067975-1920-1920x1439-11-1920x1439-53.jpg">
                        <span class="icon fa fa-search-plus"></span>
                    </a>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
                    <a href="#lb-gallery1-82" data-slide-to="1" data-toggle="modal">
                        <img alt="" src="assets/images/iphone-1067982-1920-1920x1439-68-1920x1439-47.jpg">
                        <span class="icon fa fa-search-plus"></span>
                    </a>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
                    <a href="#lb-gallery1-82" data-slide-to="2" data-toggle="modal">
                        <img alt="" src="assets/images/iphone-1067983-1920-1920x1440-44-1920x1440-62.jpg">
                        <span class="icon fa fa-search-plus"></span>
                    </a>
                </div><div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mbr-gallery-item">
                    <a href="#lb-gallery1-82" data-slide-to="3" data-toggle="modal">
                        <img alt="" src="assets/images/iphone-1067991-1920-1920x1440-57-1920x1440-37.jpg">
                        <span class="icon fa fa-search-plus"></span>
                    </a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

    <!-- Lightbox 
    <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery1-82">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <ol class="carousel-indicators">
                        <li data-app-prevent-settings="" data-target="#lb-gallery1-82" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-82" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-82" data-slide-to="2"></li><li data-app-prevent-settings="" data-target="#lb-gallery1-82" class=" active" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item">
                            <img alt="" src="assets/images/iphone-1067975-1920-1920x1439-11.jpg">
                        </div><div class="item">
                            <img alt="" src="assets/images/iphone-1067982-1920-1920x1439-68.jpg">
                        </div><div class="item">
                            <img alt="" src="assets/images/iphone-1067983-1920-1920x1440-44.jpg">
                        </div><div class="item active">
                            <img alt="" src="assets/images/iphone-1067991-1920-1920x1440-57.jpg">
                        </div>
                    </div>
                    <a class="left carousel-control" role="button" data-slide="prev" href="#lb-gallery1-82">
                        <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" role="button" data-slide="next" href="#lb-gallery1-82">
                        <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                    <a class="close" href="#" role="button" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons2-84" style="background-color: rgb(240, 240, 240);">


    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row">
            <div class="col-sm-4">
                <h3 class="mbr-header__text">SOCIAL NETWORKS</h3>
            </div>

        </div>
    </div>
</section>


<section class="pricing-table-1 col-4" id="pricing-table1-86" style="background-color: rgb(243, 243, 243);">


    <div class="container">
        <div class="row">
            <div>
                <div class="plan orange">
                    <h3>STANDARD</h3>
                    <p class="price">
                        <strong><sup>$</sup><span>10</span></strong>
                        <small>per month</small>
                    </p>
                    <div><ul><li><strong>32 GB</strong> Storage</li><li><strong>Unlimited</strong> Users</li><li><strong>15 GB</strong> Bandwidth</li></ul></div>
                    <p><a href="#" class="btn btn-danger">ORDER</a></p>
                </div>
            </div>
            <div>
                <div class="plan orange">
                    <h3>BUSINESS</h3>
                    <p class="price">
                        <strong><sup>$</sup><span>20</span></strong>
                        <small>per month</small>
                    </p>
                    <div><ul><li><strong>80 GB</strong> Storage</li><li><strong>Unlimited</strong> Users</li><li><strong>20 GB</strong> Bandwidth</li></ul></div>
                    <p><a href="#" class="btn btn-danger">ORDER</a></p>
                </div>
            </div>
            <div>
                <div class="plan orange">
                    <h3>PREMIUM</h3>
                    <p class="price">
                        <strong><sup>$</sup><span>30</span></strong>
                        <small>per month</small>
                    </p>
                    <div><ul><li><strong>100 GB</strong> Storage</li><li><strong>Unlimited</strong> Users</li><li><strong>50 GB</strong> Bandwidth</li></ul></div>
                    <p><a href="#" class="btn btn-danger">ORDER</a></p>
                </div>
            </div>
            <div>
                <div class="plan favorite">
                    <h3>ULTIMATE</h3>
                    <p class="price">
                        <strong><sup>$</sup><span>50</span></strong>
                        <small>per month</small>
                    </p>
                    <div><ul><li><strong>Unlimited</strong> Storage</li><li><strong>Unlimited</strong> Users</li><li><strong>1TB GB</strong> Bandwidth</li></ul></div>
                    <p><a href="#" class="btn btn-danger">ORDER</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons1-87" style="background-color: #43c0ff;">


    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row">
            <div class="col-sm-4">
                <h3 class="mbr-header__text">SHARE THIS PAGE!</h3>
            </div>
            <div class="mbr-social-icons col-sm-8">
                <div class="mbr-social-likes social-likes_style-1" data-counters="true">
                    <div class="mbr-social-icons__icon social-likes__icon facebook socicon-bg-facebook" title="Share link on Facebook">
                        <i class="socicon socicon-facebook"></i>

                    </div>
             
                    <div class="mbr-social-icons__icon social-likes__icon plusone socicon-bg-google" title="Share link on Google+">
                        <i class="socicon socicon-google"></i>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="testimonials1-88" style="background-color: rgb(255, 255, 255);">
    <div>

        <div class="mbr-section__container mbr-section__container--std-padding container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="mbr-section__header">TESTIMONIALS FROM OUR USERS</h2>
                    <ul class="mbr-reviews mbr-reviews--wysiwyg row">
                        <li class="mbr-reviews__item col-sm-6 col-md-4">
                            <div class="mbr-reviews__text"><p class="mbr-reviews__p">“Nullam cursus sed nibh nec commodo. Ut mattis mi at magna vestibulum, vel mattis dolor vulputate. Vestibulum egestas libero sit amet nisi feugiat, id molestie quam cursus. ”</p></div>
                            <div class="mbr-reviews__author mbr-reviews__author--short">
                                <div class="mbr-reviews__author-name">NANCY</div>
                                <div class="mbr-reviews__author-bio">User</div>
                            </div>
                        </li><li class="mbr-reviews__item col-sm-6 col-md-4">
                            <div class="mbr-reviews__text"><p class="mbr-reviews__p">“Curabitur dignissim tempus libero at aliquam. Sed arcu nisi, maximus sit amet nulla quis, faucibus sollicitudin lacus. Quisque sed nulla at leo cursus finibus sed hendrerit risus. Maecenas euismod faucibus ornare. Sed tellus elit, fringilla in malesuada nec, volutpat vel ligula.”</p></div>
                            <div class="mbr-reviews__author mbr-reviews__author--short">
                                <div class="mbr-reviews__author-name">JOHN</div>
                                <div class="mbr-reviews__author-bio">User</div>
                            </div>
                        </li><li class="mbr-reviews__item col-sm-6 col-md-4">
                            <div class="mbr-reviews__text"><p class="mbr-reviews__p">“In tempus arcu a urna maximus, at porta felis laoreet. Vestibulum dui ipsum, varius ac ante sed, volutpat faucibus mauris. Morbi viverra ipsum ut lacinia pretium. Vivamus sit amet quam sed lorem rhoncus gravida. ”</p></div>
                            <div class="mbr-reviews__author mbr-reviews__author--short">
                                <div class="mbr-reviews__author-name">MARK</div>
                                <div class="mbr-reviews__author-bio">User</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> -->