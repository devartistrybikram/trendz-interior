<?php

/**
 * The template for displaying Home Page
 *
 * @link https://codex.wordpress.org/themes/templates
 *
 * @package Trendz_Interior
 */
/* Template Name: Home */
?>
<?php get_header(); ?>

		<section class="banner-area container-fluid p-0" id="bannerArea">
			<!-- <div class="container">
				<h3 class="text-uppercase section-sub-title">Lorem ipsum dolor sit amet.</h3>
				<h1 class="text-capitalize section-title mb-2 mb-md-3">banner area <span></span></h1>
			</div> -->
			<div class="owl-carousel owl-theme owl-banner">
				<div class="item">
					<div class="container position-relative">
						<div class="container position-absolute top-100 start-0 translate-middle-y">
							<div class="text rounded-2 p-3 p-md-4 p-lg-5 shadow">
								<h1 class="text-dark fs-4 fw-bold lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
								<p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi veniam obcaecati, commodi nemo assumenda cum! Commodi, perspiciatis numquam, provident minus maxime laboriosam ratione ea repudiandae tempora ullam harum explicabo? Nulla. </p>
								<button type="button" class="btn btn-primary px-5" data-bs-toggle="modal" data-bs-target="#EnquireModal"><span>Enquiry Now</span></button>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="container position-relative">
						<div class="container position-absolute top-100 start-0 translate-middle-y">
							<div class="text rounded-2 p-3 p-md-4 p-lg-5 shadow">
								<h1 class="text-dark fs-4 fw-bold lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
								<p class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi veniam obcaecati, commodi nemo assumenda cum! Commodi, perspiciatis numquam, provident minus maxime laboriosam ratione ea repudiandae tempora ullam harum explicabo? Nulla. </p>
								<button type="button" class="btn btn-primary px-5" data-bs-toggle="modal" data-bs-target="#OfferModal"><span>Enquiry Now</span></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="offer-area container-fluid py-3 py-md-4 py-lg-5 bg-danger" id="offerArea">
			<div class="container">
				<div class="row row-gap-3 align-items-center">
					<div class="col-12 col-md-4 col-lg-3 text-center">
						<h1 class="fs-1 fw-bold">Happy New Year Offer</h1>
					</div>
					<button type="button" class="col-12 col-md-8 col-lg-9">
						<div class="scroller" data-direction="left" data-speed="slow" data-animation-pause="false">
							<a href="#" class="scroller__inner tag-list d-flex align-items-center">
								<li class="fs-2"><img src="https://placehold.co/300x100" alt=""></li>
								<li class="fs-3 lh-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt itaque nulla iusto, corrupti eligendi tenetur!<br />Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt itaque nulla iusto, corrupti eligendi tenetur!</li>
							</a>
						</div>
					</button>
				</div>
			</div>
		</section>

		<section class="about-area container-fluid py-3 py-md-4 py-lg-5" id="aboutArea">
			<div class="container mb-5 py-4">
				<div class="row row-gap-3 align-items-center">
					<div class="col-12 col-lg-6 pb-3">
						<div class="position-relative text-center text-lg-start backFace">
							<img src="https://placehold.co/380x500" alt="" class="shadow z-2 position-relative">
							<img src="https://placehold.co/240x280" al class="shadow z-2 position-absolute top-50 mt-3 translate-middle-x d-none d-xl-inline">
						</div>
					</div>
					<div class="col-12 col-lg-6 ps-lg-4">
						<h3 class="text-uppercase section-sub-title">Lorem ipsum dolor sit amet.</h3>
						<h1 class="text-capitalize section-title md-2 mb-lg-4">about area <span></span></h1>
						<h4>Lorem ipsum dolor sit.</h4>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro iste libero quod veniam, ducimus blanditiis omnis explicabo voluptates aspernatur, nobis quia cupiditate provident nihil ad consequuntur mollitia. Maxime, a quae?</p>
						<h4>Lorem ipsum dolor sit.</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iste eligendi nihil, amet adipisci iusto non nulla quo, nam voluptatem ullam quod natus totam sit accusamus ipsa. Excepturi repellendus soluta itaque autem esse rerum animi.</p>
						<a href="#" class="btn btn-primary link px-5"><span>About Us</span></a>
						<div class="d-flex mt-4 align-items-center gap-3">
                            <button class="btn play px-5 rounded-circle shadow" data-bs-toggle="modal" data-bs-target="#videoModal"><i class="fa-solid fa-play"></i></button>
                            <span class="text-capitalize">Watch intro video<br />about us</span>
                        </div>
					</div>
				</div>
			</div>
		</section>

		<section class="choose-area container-fluid py-3 py-md-4 py-lg-5 bg-body-secondary" id="chooseArea">
			<div class="container py-4">
				<h3 class="text-uppercase section-sub-title">Lorem ipsum dolor sit amet.</h3>
				<h1 class="text-capitalize section-title mb-2 mb-md-3">choose area <span></span></h1>
				<div class="row mt-3">
					<div class="col-12 col-md-6 col-lg-4 bg-transparent d-flex align-items-center">
						<div class="card border-0 p-3 p-md-4 text-center h-100 d-flex align-items-center" style="background: transparent url(https://placehold.co/500x700) no-repeat center center / cover;">
							<div class="h-auto my-auto">
								<h5 class="fw-bold">Lorem ipsum dolor</h5>
								<p>Don't let it be an ordinary journey. Shake hands with our best interior decorators in Kolkata and discover how we can give shape to your best dreams</p>
								<a href="#" class="btn btn-primary link px-5"><span>Know More</span></a>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-8 mt-3 mt-md-0">
						<div class="owl-carousel owl-theme owl-choose">
							<div class="item">
								<div class="card border-0 p-3 p-md-4 py-5 text-center">
									<img src="https://placehold.co/200x200" alt="" class="mb-3 mx-auto">
									<h5 class="fw-bold">Lorem ipsum dolor</h5>
									<p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates non velit eos atque perspiciatis enim.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="process-area container-fluid py-3 py-md-4 py-lg-5" id="processArea">
			<div class="container py-4">
				<h3 class="text-uppercase section-sub-title">Lorem ipsum dolor sit amet.</h3>
				<h1 class="text-capitalize section-title mb-2 mb-md-3">process area <span></span></h1>
				<div class="d-flex gap-3 align-items-center w-100 overflow-x-scroll process">
					<div class="box position-relative">
						<div class="boxItem text-center">
							<img src="https://placehold.co/100" alt="" class="rounded-circle">
							<div class="text-center mt-3"><span class="border border-2 rounded-circle d-grid mx-auto">02</span>
								<p class="mt-1 mb-0">Lorem ipsum dolor sit amet adipisicing.</p>
							</div>
						</div>
					</div>
					<div class="box position-relative">
						<div class="boxItem text-center">
							<img src="https://placehold.co/100" alt="" class="rounded-circle">
							<div class="text-center mt-3"><span class="border border-2 rounded-circle d-grid mx-auto">02</span>
								<p class="mt-1 mb-0">Lorem ipsum dolor sit amet adipisicing.</p>
							</div>
						</div>
					</div>
					<div class="box position-relative">
						<div class="boxItem text-center">
							<img src="https://placehold.co/100" alt="" class="rounded-circle">
							<div class="text-center mt-3"><span class="border border-2 rounded-circle d-grid mx-auto">02</span>
								<p class="mt-1 mb-0">Lorem ipsum dolor sit amet adipisicing.</p>
							</div>
						</div>
					</div>
					<div class="box position-relative">
						<div class="boxItem text-center">
							<img src="https://placehold.co/100" alt="" class="rounded-circle">
							<div class="text-center mt-3"><span class="border border-2 rounded-circle d-grid mx-auto">02</span>
								<p class="mt-1 mb-0">Lorem ipsum dolor sit amet adipisicing.</p>
							</div>
						</div>
					</div>
					<div class="box position-relative">
						<div class="boxItem text-center">
							<img src="https://placehold.co/100" alt="" class="rounded-circle">
							<div class="text-center mt-3"><span class="border border-2 rounded-circle d-grid mx-auto">02</span>
								<p class="mt-1 mb-0">Lorem ipsum dolor sit amet adipisicing.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="offercard-area container-fluid py-3 py-md-4 py-lg-5 bg-warning" id="offercardArea">
			<div class="container py-4">
				<button type="button" class="" data-bs-toggle="modal" data-bs-target="#OfferModal">
					<img src="https://placehold.co/1280x480" alt="">
				</button>
			</div>
		</section>

		<section class="design-area container-fluid py-3 py-md-4 py-lg-5 bg-body-secondary" id="designArea">
			<div class="container py-4">
				<h3 class="text-uppercase section-sub-title">Lorem ipsum dolor sit amet.</h3>
				<h1 class="text-capitalize section-title mb-2 mb-md-3">design area <span></span></h1>
				<div class="position-relative">
					<button type="button" class="position-absolute top-50 start-0 rounded-circle z-2 translate-middle d-grid floatBtn d-none d-lg-block"><i class="fa-solid fa-chevron-left"></i></button>
					<button type="button" class="position-absolute top-50 start-100 rounded-circle z-2 translate-middle d-grid floatBtn d-none d-lg-block"><i class="fa-solid fa-chevron-right"></i></button>
					<div class="owl-carousel owl-theme owl-design">
						<div class="item card">
							<img src="https://placehold.co/300x200" alt="">
							<div class="textBox text-center position-relative">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 80" class="position-absolute start-0 translate-middle-y h-auto w-100 z-1">
									<path d="M -120 50 Q -60 50 0 25 Q 120 -25 240 25 Q 300 50 360 50 Q 420 50 480 25 Q 600 -25 720 25 Q 780 50 840 50 L 480 80 L 0 80 Z" fill="#fff"></path>
								</svg>
								<div class="mt-3 px-2 position-relative z-2">
									<h4 class="fs-5 fw-bold">Lorem ipsum dolor amet.</h4>
									<p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, veritatis.</p>
									<a href="#" class="mb-3 p-1 d-flex gap-2 align-items-center justify-content-center">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="gallery-area container-fluid py-3 py-md-4 py-lg-5" id="galleryArea">
			<div class="container-fluid py-4">
				<!-- <div class="container">
					<h3 class="text-uppercase section-sub-title">Lorem ipsum dolor sit amet.</h3>
					<h1 class="text-capitalize section-title mb-2 mb-md-3">gallery area <span></span></h1>
				</div> -->
				<div class="scroller" data-direction="left" data-speed="slow" data-animation-pause="false">
					<div class="scroller__inner tag-list d-flex align-items-center">
						<li class="fs-2"><img src="https://placehold.co/400x300" alt=""></li>
						<li class="fs-2"><img src="https://placehold.co/380x300" alt=""></li>
						<li class="fs-2"><img src="https://placehold.co/420x300" alt=""></li>
						<li class="fs-2"><img src="https://placehold.co/600x300" alt=""></li>
						<li class="fs-2"><img src="https://placehold.co/300x300" alt=""></li>
						<li class="fs-2"><img src="https://placehold.co/500x300" alt=""></li>
						<li class="fs-2"><img src="https://placehold.co/350x300" alt=""></li>
					</div>
				</div>
				<hr class="my-2 opacity-0">
				<div class="scroller" data-direction="right" data-speed="slow" data-animation-pause="false">
					<div class="scroller__inner tag-list d-flex align-items-center">
						<li class="fs-2"><img src="https://placehold.co/400x300" alt=""></li>
						<li class="fs-2"><img src="https://placehold.co/380x300" alt=""></li>
						<li class="fs-2"><img src="https://placehold.co/420x300" alt=""></li>
						<li class="fs-2"><img src="https://placehold.co/600x300" alt=""></li>
						<li class="fs-2"><img src="https://placehold.co/300x300" alt=""></li>
						<li class="fs-2"><img src="https://placehold.co/500x300" alt=""></li>
						<li class="fs-2"><img src="https://placehold.co/350x300" alt=""></li>
					</div>
				</div>
			</div>
		</section>

		<section class="contact-area container-fluid py-3 py-md-4 py-lg-5" id="contactArea">
			<div class="container py-4 d-flex align-items-center">
				<div class="row row-gap-2 align-items-center">
					<div class="col-12 col-lg-6">
						<h3 class="text-uppercase section-sub-title">Lorem ipsum dolor sit amet.</h3>
						<h1 class="text-capitalize section-title mb-2 mb=lg-2">contact area <span></span></h1>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolore deleniti error consectetur, officia reiciendis neque modi sit laudantium, laborum ipsam enim? Aspernatur provident voluptate libero explicabo veniam id. Est accusamus quaerat perspiciatis aliquam cumque iste sapiente debitis officia nobis!</p>
						<h4 class="">Lorem ipsum dolor sit.</h4>
						<p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum autem at nam illum quaerat dolor, ex aut vero totam itaque ratione neque laboriosam! Amet iste doloremque perspiciatis culpa aut delectus.</p>
					</div>
					<div class="col-12 col-lg-6">
						<form action="" class="position-relative z-2" onsubmit="return false;">
							<span class="position-absolute start-0 top-0 translate-middle d-none d-lg-block boxes"></span>
							<span class="position-absolute start-100 top-100 translate-middle d-none d-lg-block boxes"></span>
							<div class="p-3 p-md-4 shadow bg-light">
								<div class="row row-gap-2">
									<div class="col-12"><input type="text" name="" id="" placeholder="Name" class="border border-dark p-2 lh-base rounded-1"></div>
									<div class="col-12">
										<div class="row row-gap-2">
											<div class="col-5 col-md-5 pe-0"><input type="text" name="" id="" placeholder="Mobile" class="border border-dark p-2 lh-base rounded-1"></div>
											<div class="col-7 col-md-7"><input type="text" name="" id="" placeholder="Email" class="border border-dark p-2 lh-base rounded-1"></div>
										</div>
									</div>
									<div class="col-12"><input type="text" name="" id="" placeholder="Address" class="border border-dark p-2 lh-base rounded-1"></div>
									<div class="col-12">
										<div class="row row-gap-2">
											<div class="col-6 col-md-7"><input type="text" name="" id="" placeholder="City" class="border border-dark p-2 lh-base rounded-1"></div>
											<div class="col-6 col-md-5 ps-0"><input type="text" name="" id="" placeholder="Pincode" class="border border-dark p-2 lh-base rounded-1"></div>
										</div>
									</div>
									<div class="col-12">
										<select name="" id="" class="border border-dark p-2 lh-base rounded-1" required>
											<option value="" disabled selected hidden>Select Service</option>
											<option value=""></option>
											<option value=""></option>
											<option value=""></option>
											<option value=""></option>
											<option value=""></option>
											<option value=""></option>
										</select>
									</div>
									<div class="col-12 mb-0"><textarea name="" id="" placeholder="Message" class="border border-dark p-2 lh-base rounded-1" rows="3"></textarea></div>
									<div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input border border-dark rounded-1" type="checkbox" value="" id="flexCheckChecked">
                                            <label class="form-check-label" for="flexCheckChecked">I authorize your company representatives to contact me via call, SMS, email, or WhatsApp regarding your services.</label>
                                        </div>
                                    </div>
									<div class="col-12 text-end"><button type="button" class="btn btn-primary px-5"><span>Submit Now</span></button></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

		<section class="review-area container-fluid py-3 py-md-4 py-lg-5" id="reviewArea">
			<div class="container py-4">
				<h3 class="text-uppercase section-sub-title">Lorem ipsum dolor sit amet.</h3>
				<h1 class="text-capitalize section-title mb-2 mb-md-3">review area <span></span></h1>
				<div class="owl-carousel owl-theme owl-review">
					<div class="item text-center p-3 p-md-4 mb-4 rounded">
						<img src="https://placehold.co/100x100" alt="" class="img-thumbnail rounded-circle mb-1">
						<h4 class="fs-4 fw-bold mb-1">Lorem ipsum</h4>
						<p class="fw-bold mb-2">Lorem ipsum dolor sit amet</p>
						<p class="d-flex align-items-center justify-content-center gap-2 mb-2">
							<i class="fa-solid fa-star fa-full"></i>
							<i class="fa-solid fa-star fa-full"></i>
							<i class="fa-solid fa-star fa-full"></i>
							<i class="fa-solid fa-star"></i>
							<i class="fa-solid fa-star"></i>
						</p>
						<p class="mb-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit, ullam nemo unde libero totam repudiandae, aliquid exercitationem ducimus, commodi ipsam perspiciatis consequatur obcaecati tempora nam eum. Numquam porro possimus error officiis eveniet et perferendis quidem.</p>
					</div>
				</div>
			</div>
		</section>

		<section class="blog-area container-fluid py-3 py-md-4 py-lg-5 bg-info-subtle" id="blogArea">
			<div class="container py-4">
				<h3 class="text-uppercase section-sub-title">Lorem ipsum dolor sit amet.</h3>
				<h1 class="text-capitalize section-title mb-2 mb-md-3">blog area <span></span></h1>
				<div class="row align-items-center justify-content-center row-gap-3 row-gap-md-4">
					<div class="col-12 col-md-6 col-lg-4">
						<div class="card blog-card shadow rounded-3">
							<div class="card-body p-0">
								<img src="https://placehold.co/450x300" alt="">
								<div class="text-start p-4">
									<div class="d-flex gap-3 align-items-center my-2">
										<div class="d-flex align-items-center gap-2"><i class="fa-solid fa-comments"></i><span>lower</span></div>
										<div class="d-flex align-items-center gap-2"><i class="fa-solid fa-comments"></i><span>lower</span></div>
									</div>
									<h4 class="fs-4 fw-bold">Lorem ipsum dolor</h4>
									<p class="mb-1">Lorem ipsum dolor amet consectetur, adipisicing elit. Mollitia ab voluptate, animi cumque sit dolorum?</p>
									<a href="#" class="d-flex align-items-center gap-2">Read Blogs</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<div class="card blog-card shadow rounded-3">
							<div class="card-body p-0">
								<img src="https://placehold.co/450x300" alt="">
								<div class="text-start p-4">
									<div class="d-flex gap-3 align-items-center my-2">
										<div class="d-flex align-items-center gap-2"><i class="fa-solid fa-comments"></i><span>lower</span></div>
										<div class="d-flex align-items-center gap-2"><i class="fa-solid fa-comments"></i><span>lower</span></div>
									</div>
									<h4 class="fs-4 fw-bold">Lorem ipsum dolor</h4>
									<p class="mb-1">Lorem ipsum dolor amet consectetur, adipisicing elit. Mollitia ab voluptate, animi cumque sit dolorum?</p>
									<a href="#" class="d-flex align-items-center gap-2">Read more</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4">
						<div class="card blog-card shadow rounded-3">
							<div class="card-body p-0">
								<img src="https://placehold.co/450x300" alt="">
								<div class="text-start p-4">
									<div class="d-flex gap-3 align-items-center my-2">
										<div class="d-flex align-items-center gap-2"><i class="fa-solid fa-comments"></i><span>lower</span></div>
										<div class="d-flex align-items-center gap-2"><i class="fa-solid fa-comments"></i><span>lower</span></div>
									</div>
									<h4 class="fs-4 fw-bold">Lorem ipsum dolor</h4>
									<p class="mb-1">Lorem ipsum dolor amet consectetur, adipisicing elit. Mollitia ab voluptate, animi cumque sit dolorum?</p>
									<a href="#" class="d-flex align-items-center gap-2">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<a href="#" class="d-flex align-items-center justify-content-center gap-2 border shadow mx-auto mt-3 mt-md-4 btn btn-primary link"><span class="px-3">Read Blogs</span></a>
			</div>
		</section>

		<section class="faqs-area container-fluid py-3 py-md-4 py-lg-5" id="faqsArea">
			<div class="container py-4">
				<h3 class="text-uppercase section-sub-title">Lorem ipsum dolor sit amet.</h3>
				<h1 class="text-capitalize section-title mb-2 mb-md-3">faqs area <span></span></h1>
				<div class="row align-items-sta align-items-center">
					<div class="col-12 col-md-5 col-xl-4 d-none d-xl-block">
						<img src="https://placehold.co/400x625" alt="">
					</div>
					<div class="col-12 col-md-12 col-xl-8">
						<div class="accordion border-0 z-1" id="faqAccordion">
							<div class="accordion-item border-0 border-bottom rounded-0">
								<h2 class="accordion-header">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1One" aria-expanded="true" aria-controls="collapse1One">Accordion Item #1</button>
								</h2>
								<div id="collapse1One" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
									<div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, soluta. Blanditiis, officia, autem, soluta beatae tenetur minus molestias ullam aspernatur sapiente a qui. Molestias, ipsa facere cupiditate soluta aut excepturi iusto reiciendis nam et? Blanditiis earum, eaque in quos magnam deleniti ullam quaerattalk</div>
								</div>
							</div>
							<div class="accordion-item border-0 border-bottom rounded-0">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1Two" aria-expanded="false" aria-controls="collapse1Two">Accordion Item #2</button>
								</h2>
								<div id="collapse1Two" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
									<div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, soluta. Blanditiis, officia, autem, soluta beatae tenetur minus molestias ullam aspernatur sapiente a qui. Molestias, ipsa facere cupiditate soluta aut excepturi iusto reiciendis nam et? Blanditiis earum, eaque in quos magnam deleniti ullam quaerattalk</div>
								</div>
							</div>
							<div class="accordion-item border-0 border-bottom rounded-0">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1Three" aria-expanded="false" aria-controls="collapse1Three">Accordion Item #3</button>
								</h2>
								<div id="collapse1Three" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
									<div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, soluta. Blanditiis, officia, autem, soluta beatae tenetur minus molestias ullam aspernatur sapiente a qui. Molestias, ipsa facere cupiditate soluta aut excepturi iusto reiciendis nam et? Blanditiis earum, eaque in quos magnam deleniti ullam quaerattalk</div>
								</div>
							</div>
							<div class="accordion-item border-0 border-bottom rounded-0">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1Four" aria-expanded="false" aria-controls="collapse1Four">Accordion Item #4</button>
								</h2>
								<div id="collapse1Four" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
									<div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, soluta. Blanditiis, officia, autem, soluta beatae tenetur minus molestias ullam aspernatur sapiente a qui. Molestias, ipsa facere cupiditate soluta aut excepturi iusto reiciendis nam et? Blanditiis earum, eaque in quos magnam deleniti ullam quaerattalk</div>
								</div>
							</div>
							<div class="accordion-item border-0 border-bottom rounded-0">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1Five" aria-expanded="false" aria-controls="collapse1Five">Accordion Item #5</button>
								</h2>
								<div id="collapse1Five" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
									<div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, soluta. Blanditiis, officia, autem, soluta beatae tenetur minus molestias ullam aspernatur sapiente a qui. Molestias, ipsa facere cupiditate soluta aut excepturi iusto reiciendis nam et? Blanditiis earum, eaque in quos magnam deleniti ullam quaerattalk</div>
								</div>
							</div>
							<div class="accordion-item border-0 border-bottom rounded-0">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1Six" aria-expanded="false" aria-controls="collapse1Six">Accordion Item #6</button>
								</h2>
								<div id="collapse1Six" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
									<div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, soluta. Blanditiis, officia, autem, soluta beatae tenetur minus molestias ullam aspernatur sapiente a qui. Molestias, ipsa facere cupiditate soluta aut excepturi iusto reiciendis nam et? Blanditiis earum, eaque in quos magnam deleniti ullam quaerattalk</div>
								</div>
							</div>
							<div class="accordion-item border-0 border-bottom rounded-0">
								<h2 class="accordion-header">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1Seven" aria-expanded="false" aria-controls="collapse1Seven">Accordion Item #7</button>
								</h2>
								<div id="collapse1Seven" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
									<div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, soluta. Blanditiis, officia, autem, soluta beatae tenetur minus molestias ullam aspernatur sapiente a qui. Molestias, ipsa facere cupiditate soluta aut excepturi iusto reiciendis nam et? Blanditiis earum, eaque in quos magnam deleniti ullam quaerattalk</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php get_footer(); ?>