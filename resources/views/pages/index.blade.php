@extends('templates.modele')


@section('content')
<!-- Banner -->
<section class="banner-2 bg-grey py-7" id="banner-2">
    <div class="container">
        <div class="row align-items-center">
             <div class="col-lg-6">
                <div class="banner-img">
                    <img src="{{ asset('assets/images/about/p4.png') }}" alt="" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="main-banner">
                    <p class="font-weight-bold"><span class="text-color">50% discount</span> on early purchase</p>
                    <h1 class="mb-2">
                       The Man in the <br>Glass House
                    </h1>

                    <p class="lead">A great landing page to sell your eBook!</p>

                    <p class="mb-3 mt-4">We work with our partners to streamline project plans that don’t just deliver on product perfection, but also delivers on time.</p>

                    <a href="#achat" class="btn btn-main-2 mt-2">
                        Pre-ORDER YOUR COPY <i class="ti-check mr-2 ml-2"></i> $14.99
                    </a>
                    <p class="mt-4">* eBook includes iBooks, PDF & ePub versions</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Book preview -->
<section class="" id="book">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-6">
				<div class="section-heading book-info mt-5 mt-lg-0 pl-4">
					<h2 class="text-lg mb-4">About The Book</h2>
					<p class="lead">This lovely, well-written book is concerned with creating typography and is essential for professionals who regularly work for clients.</p>

					<div class="about-features mt-5">
						<div class="about-item mb-40">
							<h5>More than 10+ award achieved</h5>
							<p>Fugit ratione, repellendus, dignissimos, ducimus voluptatem, quos. Consequatur non eum facilis, ex repellendus, vitae debitis.</p>
						</div>
						<div class="about-item mb-40">
							<h5>Read On Any Device</h5>
							<p>Debitis ab ipsum a autem sit ducimus voluptatem, quos. Consequatur non eum facilis, ex repellendus, vitae debitis.</p>
						</div>
						<div class="about-item">
							<h5>Very high resolution</h5>
							<p>Possimus debitis ab ipsum a autem sit ducimus voluptatem, quos. Consequatur non eum facilis, ex repellendus, vitae debitis.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-5">
				<div class="book-preview">
					<img src="{{ asset('assets/images/about/kindle.png') }}" class="background-device img-fluid" alt="">
					<div class="owl-book owl-carousel owl-theme" style="opacity: 1; display: block;">
						<div class="book-item">
							<img src="{{ asset('assets/images/about/o.png') }}" alt="" class="img-fluid">
							<div class="overlay">
								<a href="{{ asset('assets/images/about/o.png') }}" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
							</div>
						</div>

						<div class="book-item">
							<img src="{{ asset('assets/images/about/4.png') }}" alt="" class="img-fluid">
							<div class="overlay">
								<a href="{{ asset('assets/images/about/4.png') }}" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
							</div>
						</div>

						<div class="book-item">
							<img src="{{ asset('assets/images/about/5.png') }}" alt="" class="img-fluid">
							<div class="overlay">
								<a href="{{ asset('assets/images/about/5.png') }}" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
							</div>
						</div>
						<div class="book-item">
							<img src="{{ asset('assets/images/about/d2.png') }}" alt="" class="img-fluid">
							<div class="overlay">
								<a href="{{ asset('assets/images/about/d2.png') }}" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
							</div>
						</div>
						<div class="book-item">
							<img src="{{ asset('assets/images/about/d3.png') }}" alt="" class="img-fluid">
							<div class="overlay">
								<a href="{{ asset('assets/images/about/d3.png') }}" class="popup-gallery img-fluid" data-title="Image Caption"><i class="ti-fullscreen"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Chapter -->
<section class="section chapter" id="chapter">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-heading text-center">
                    <h2 class="text-lg">What's inside the book</h2>
                    <p>Libero atque veniam molestiae ipsa aliquid quam facilis dolore.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="chapter-inner">
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Design principles</h4>
                            <p>Tips on scouting the city and making the most out of your three-month tourist visa.</p>
                        </div>
                    </div>
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Visual hierarchy</h4>
                            <p>A full chapter the city and making the most out of your three-month tourist visa.</p>
                        </div>
                    </div>
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>White space</h4>
                           <p>A full chapter the city and making the most out of your three-month tourist visa.</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="chapter-inner">
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Typography</h4>
                            <p> A full chapter just about visas. Overview of work visa options, tips on finding recommendations.</p>
                        </div>
                    </div>
                    <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>UI design</h4>
                            <p> Making use of events, networking as a designer/developer How to meet the right people.</p>
                        </div>
                    </div>
                     <div class="chapter-item d-flex">
                        <i class="ti-check"></i>
                        <div class="content pl-4">
                            <h4>Color theory</h4>
                            <p>Understanding how the city works. Best practices for eating out and grocery shopping. </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



<section class="section cta-home" id="achat">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				 <h2 class="text-lg">Procedez au paiement sécuriser et obtenez votre livre. </h2>
			</div>

			<div class="col-lg-6">


                 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick">

                        <div class="form-group">
                          <input type="hidden" name="on0" value="Quantity">
                          Quantity
                            <select name="os0" class="form-control" required>
                            <option value="1">1 </option>
                            <option value="2">2 </option>
                            <option value="5">5 </option>
                            <option value="10">10 </option>
                        </select>
                        </div>
                        <div class="form-group">
                <input type="hidden" class="form-control" name="on1" value="Votre nom">Votre nom
                <input type="text" class="form-control" name="os1" maxlength="200" required>
            </div>
                <div class="form-group">
                <input type="hidden" class="form-control" name="on2" value="Votre Email">Votre Email
                <input type="text" class="form-control" name="os2" maxlength="200" required>
            </div>
                <br>
                    <input type="hidden" name="encrypted" value="{{ env('PAYPAL') }}">

                    <input type="image" class=""
                    src="https://www.paypalobjects.com/fr_XC/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="">

                    <img alt="" border="0" src="https://www.paypalobjects.com/fr_XC/i/scr/pixel.gif" width="10" height="10">
                    </form>

			 	<p class="mt-3 mb-0">* Vous recevrez une notification par mail.</p>
			</div>
		</div>
	</div>
</section>

<!-- Cpntact -->
<section class="author section" id="author">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="about-img">
                    <img src="{{ asset('assets/images/about/ph.jpg') }}" alt="" class="img-fluid w-100">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="author-info pl-4 mt-5 mt-lg-0">
                    <span>Know More About Author</span>
                    <h2 class="text-lg">Yasin Arafat <span class="text-sm">- Technical Writer</span></h2>

                    <p class="mb-4 mt-3">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. et inventore dicta quos ducimus, consectetur culpa dolore quisquam ipsum facere, fugiat. Corporis eaque, sint.</p>
                    <img src="assets/images/about/2.png" alt="" class="img-fluid">


                    <div class="follow mt-5">
                        <ul class="list-inline">
                            <li class="list-inline-item"><span class="mb-3">Follow Me :</span></li>
                            <li class="list-inline-item">
                                <a href="#"><i class="ti-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="ti-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="ti-linkedin"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="ti-pinterest"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="ti-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section contact " id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6">
               <div class="section-heading">
                    <h2 class="mb-2 text-lg">Contact Author</h2>
                    <p>Whether you have questions or you would just like to say hello, contact us.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, atque!</p>
               </div>
            </div>
        </div> <!-- / .row -->

        <div class="row">
            <div class="col-lg-7 col-sm-12 pr-5 col-md-8">
                <form class="contact__form form-row contact-form " method="post" action="mail.php" id="contactForm">
                     <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Enter Your Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email Address">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea id="message" name="message" cols="30" rows="6" class="form-control" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="d-lg-flex justify-content-between mt-4">
                            <p>* Rest assured.We will not spam at your inbox.</p>
                            <input id="submit" name="submit" type="submit" class="btn btn-main btn-rounded" value="Send Message">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-4 col-sm-12 col-md-4">
                <div class="contact-info-block mb-4 mt-5 mt-lg-0 mt-md-0">
                    <h4 class="mb-2">Contact</h4>
                    <p>+ 301 324 9131 </p>
                </div>

                <div class="contact-info-block mb-4">
                    <h4 class="mb-2">Email</h4>
                    <p>startor@support.com</p>
                </div>

                <div class="contact-info-block mb-4">
                    <h4 class="mb-2">Location</h4>
                    <p>3125 Flanigan Oaks Drive
                    Capitol Heights, MD 20027</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
