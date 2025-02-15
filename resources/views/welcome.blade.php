@extends('layout.app')
@section('content')

  <!-- ========== MAIN CONTENT ========== -->
  <!-- hero -->

   
  <!-- Hero -->
  <div class="position-relative overflow-hidden" style="background-image: url(assets/svg/components/card-11.svg);">
    <div class="container position-relative zi-2 content-space-t-3 content-space-t-lg-4 content-space-b-2 content-space-b-md-3">
      <div class="row align-items-lg-center mt-n3">
        <div class="col-lg-5 ">
       
          <div class="mb-4">
            <h1 class="display-6 text-dark">
              Revolutionizing 
              <span class="text-primary">
                <span class="js-typedjs text-primary" data-hs-typed-options="{
                        &quot;strings&quot;: [ &quot;Industries&quot;,  &quot;Power&quot;],
                        &quot;typeSpeed&quot;: 60,
                        &quot;loop&quot;: true,
                        &quot;backSpeed&quot;: 25,
                        &quot;backDelay&quot;: 1500
                      }"></span><span class="typed-cursor" aria-hidden="true">..</span>
              </span>
              <br>
              with Smart Software <br>Solutions
            </h1>

            <p class="p1 text-dark">Elevate Your Business with Intelligent Software Solutions</p>
            <a href="./product.html" id="#job">
              <button class=" btn   btn-outline-primary  btn-transition">Explore Solutions</button>
            </a>
            <a href="./about.html" id="#job">
              <button class=" btn   btn-outline-primary  btn-transition">Get Started</button>
            </a>
          </div>
         
        </div>

        <div class="col-md-6">
          <div class="position-relative">
            <img class="img-fluid rounded-2 shadow-md" src="./assets/img/Dataanalysis1.png" alt="Image Description">
            <div class="position-absolute top-0 end-0 w-100 bg-soft-primary rounded-2 zi-n1 mt-5 me-n5"></div>
          </div>
          <!-- second fig -->

          <!-- <figure class="device-browser" style="position: absolute; top: 70%; left: 110%; transform: translate(-50%, -50%); margin-bottom: 0;">
            <div class="device-browser-frame">
                <img class="device-browser-img img-float img-fluid object-fit-cover" src="./assets/img/infinite.png" alt="Second Image Description">
            </div>
        </figure> -->
        </div>
       
      </div>
      
    </div>

    <div class="shape shape-bottom zi-1">
      <svg width="3000" height="500" viewBox="0 0 3000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 500H3000V0L0 500Z" fill="#fff"></path>
      </svg>
    </div>
   
  </div>
<!-- End Hero -->

  <!-- !-- why choose us --> 
  <div id="about">
      
      <div class="container content-space-1 mt-n4 ">
      <div class="row justify-content-lg-between">

        <div class="col-lg-5 d-none d-lg-block">
          <div class="row">
            <div class="col-sm-12">
              <!-- Article -->
              <a class="aos-init aos-animate " href="#" data-aos="fade-left" data-aos-delay="100">
                <img class="img-fluid rounded-2 img-float mt-n8 object-fit-cover " src="./assets/img/herocomabtpink.png" alt="Image Description">
              </a>
              <!-- End Article -->
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Image Column -->
   
        <!-- Content Column -->
        <div class="col-lg-7 mb-9 mb-lg-0 mt-n5">
          <!-- Heading -->
          <div class="mb-5">
            <p class="text-secondary lead">About Company</p>
            <h2 class="text-sm text-md-lg" style="color: rgba(0, 31, 63, 0.7) !important;">Harnessing the power of international insights with tailoring solutions to meet your unique needs</h2>
            
            <p class="p1 text-dark">
              <span class="text-primary">DevLoops International</span> is a dynamic and forward-thinking company at the intersection of technology and creativity. Established with a passion for innovation, we are dedicated to delivering bespoke solutions that empower businesses and individuals to thrive in the ever-evolving digital landscape.
            </p>
          </div>
          <!-- End Heading -->
        </div>

        
      </div>
      <!-- End Row -->
    </div>

 
  </div>
  <!-- why choose us end -->

     <!-- Browser Device -->

     <section class="mt-n12" >
      <div class="position-relative" style="background-image: url(assets/svg/components/wave-pattern-light.svg);">
          <div class="container content-space-2 content-space-lg-3 position-relative zi-2">
              <div class="row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <!-- Card -->
                      <div class="card-body card card-transition text-center gradient-animation">
                          <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                  <span class="svg-icon svg-icon-lg text-primary feature icon-to-change"
                                      onmouseover="changeIconColor(this)"
                                      onmouseout="resetIconColor(this)">
                                      
                                      <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M17 6H3C2.4 6 2 6.4 2 7V21C2 21.6 2.4 22 3 22H17C17.6 22 18 21.6 18 21V7C18 6.4 17.6 6 17 6Z" fill="#035A4B"></path>
                                        <path d="M17.8 4.79999L9.3 13.3C8.9 13.7 8.9 14.3 9.3 14.7C9.5 14.9 9.80001 15 10 15C10.2 15 10.5 14.9 10.7 14.7L19.2 6.20001L17.8 4.79999Z" fill="#035A4B"></path>
                                        <path opacity="0.3" d="M22 9.09998V3C22 2.4 21.6 2 21 2H14.9L22 9.09998Z" fill="#035A4B"></path>
                                      </svg>
                                  </span>
                              </div>
                              <div class="flex-grow-1 ms-3">
                                <h6 class="display-6 " >
                                   
                                    <span class="  mb-3 text-to-change "  onmouseover="changeTextColor(this)" onmouseout="resetTextColor(this)" > Our Mission</span>
                                </h6>
                                <div class="border-top border-10 my-3" style="max-width: 25rem;"></div>
                                <!-- <span class="blockquote-footer-source">Happy customer</span> -->
                            </div>
                            
                          </div>
                          <!-- Blockquote -->
                          <figure>
                              <p class="text-dark text-to-change" onmouseover="changeTextColor(this)" onmouseout="resetTextColor(this)" > 
                                At DevLoops International, our mission is to be at the forefront of
                                  transformative software development, pioneering innovative solutions that empower
                                  businesses to thrive in the digital era. We are committed to delivering excellence in
                                  every line of code we write, ensuring that our clients receive cutting-edge products
                                  tailored to their unique needs.</p>
                          </figure>
                          <!-- End Blockquote -->
                          <div class="border-top border-10 my-3" style="max-width: 30rem;"></div>
                      </div>
                      <!-- End Card -->
                  </div>
  
                  <div class="col-sm-6 mb-3 mb-sm-0">
                      <!-- Card -->
                      <div class="card-body card card-transition text-center gradient-animation">
                          <div class="d-flex align-items-center">
                              <div class="flex-shrink-0">
                                  <span class="svg-icon svg-icon-lg text-primary feature icon-to-change"
                                      onmouseover="changeIconColor(this)"
                                      onmouseout="resetIconColor(this)">
                                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M5 15L3 21.5L9.5 19.5L5 15Z" fill="#035A4B"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5 21C18.7467 21 23 16.7467 23 11.5C23 6.2533 18.7467 2 13.5 2C8.2533 2 4 6.2533 4 11.5C4 16.7467 8.2533 21 13.5 21ZM13.5 14.0061L11.5463 15.0332C11.3124 15.1562 11.0232 15.0663 10.9003 14.8324C10.8513 14.7393 10.8344 14.6326 10.8522 14.5289L11.2254 12.3533L9.6447 10.8126C9.4555 10.6282 9.45165 10.3254 9.63605 10.1362C9.7095 10.0609 9.8057 10.0118 9.9098 9.9967L12.0942 9.67925L13.0711 7.69985C13.1881 7.46295 13.4749 7.3657 13.7118 7.4826C13.8061 7.52915 13.8825 7.60555 13.9291 7.69985L14.9059 9.67925L17.0903 9.9967C17.3517 10.0347 17.5329 10.2774 17.4949 10.5388C17.4798 10.6429 17.4307 10.7392 17.3554 10.8126L15.7748 12.3533L16.1479 14.5289C16.1926 14.7893 16.0177 15.0366 15.7573 15.0813C15.6537 15.0991 15.5469 15.0822 15.4538 15.0332L13.5 14.0061Z" fill="#035A4B"></path>
                                    </svg>
                                  </span>
                              </div>
                              <div class="flex-grow-1 ms-3">
                                  <h6 class="display-6 text-navy-blue "><span
                                          class=" mb-3 text-to-change" onmouseover="changeTextColor(this)"
                                          onmouseout="resetTextColor(this)"> Our Vision</span></h6>
                                  <div class="border-top border-10 my-3" style="max-width: 25rem;"></div>
                                  <!-- <span class="blockquote-footer-source">Happy customer</span> -->
                              </div>
                          </div>
                          <!-- Blockquote -->
                          <figure>
                              <p class="text-dark text-to-change" onmouseover="changeTextColor(this)"
                              onmouseout="resetTextColor(this)">Our vision is to be a global p1er in software development, recognized for
                                  our unwavering commitment to quality, innovation, and client satisfaction. We aim to
                                  push the boundaries of what is possible in the digital landscape, creating solutions
                                  that not only meet current needs but also anticipate future challenges.</p>
                          </figure>
                          <!-- End Blockquote -->
                          <div class="border-top border-10 my-3" style="max-width: 30rem;"></div>
                      </div>
                      <!-- End Card -->
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  <!-- End Browser Device -->

  <!-- Features start -->

  <div class="container  mt-n7">
    <!-- Heading -->
    <div class="w-md-75 w-md-40 text-center mx-md-auto mb-5 mb-md-9">
      <p class="text-secondary lead mt-5">Our  Process</p>
      <h2 class="h2"><span class="text-primary">Guiding Your Digital Success with Precision and Expertise</span></h2>
  </div>
  
    <!-- End Heading -->

    <div class="row mb-5 mb-md-9">
      <div class="col-sm-6 col-md-4 mb-3 mb-sm-7 feature">
        <!-- Icon Block -->
        <div class="d-flex align-items-center mb-2">
          <div class="flex-shrink-0">
            <span class="svg-icon svg-icon-sm text-primary feature">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list-check" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0m0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
              </svg>

            </span>
          </div>

          <div class="flex-grow-1 ms-3">
            <h3 class="mb-0">Requirement Analysis</h3>
          </div>
        </div>
        <!-- End Icon Block -->

        <p class="   p1 text-dark">Thoroughly assess and document project requirements to establish a foundation.</p>
      </div>
      <!-- End Col -->

      <div class="col-sm-6 col-md-4 mb-3 mb-sm-7 feature">
        <!-- Icon Block -->
        <div class="d-flex align-items-center mb-2">
          <div class="flex-shrink-0">
            <span class="svg-icon svg-icon-sm text-primary feature">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
              </svg>

            </span>
          </div>

          <div class="flex-grow-1 ms-3">
            <h3 class="mb-0">Design and Prototyping</h3>
          </div>
        </div>
        <!-- End Icon Block -->

        <p class="   p1 text-dark">Craft a visually appealing and functional design, incorporating prototypes for user.</p>
      </div>
      <!-- End Col -->

      <div class="col-sm-6 col-md-4 mb-3 mb-sm-7 mb-md-0 feature">
        <!-- Icon Block -->
        <div class="d-flex align-items-center mb-2">
          <div class="flex-shrink-0">
            <span class="svg-icon svg-icon-sm text-primary feature">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-code-slash" viewBox="0 0 16 16">
                <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
              </svg>

            </span>
          </div>

          <div class="flex-grow-1 ms-3">
            <h3 class="mb-0">Coding and Implementation</h3>
          </div>
        </div>
        <!-- End Icon Block -->

        <p class="   p1 text-dark">Utilize industry best practices in coding, ensuring clean, efficient Solutions.</p>
      </div>
      <!-- End Col -->

      <div class="col-sm-6 col-md-4 mb-3 mb-sm-7 mb-md-0 feature">
        <!-- Icon Block -->
        <div class="d-flex align-items-center mb-2">
          <div class="flex-shrink-0">
            <span class="svg-icon svg-icon-sm text-primary feature">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z"/>
              </svg>

            </span>
          </div>

          <div class="flex-grow-1 ms-3">
            <h3 class="mb-0">Testing and Quality Assurance</h3>
          </div>
        </div>
        <!-- End Icon Block -->

        <p class="   p1 text-dark">Rigorously test the software to identify and rectify bugs and reliable end product.</p>
      </div>
      <!-- End Col -->

      <div class="col-sm-6 col-md-4 mb-3 mb-sm-7 mb-md-0 feature">
        <!-- Icon Block -->
        <div class="d-flex align-items-center mb-2">
          <div class="flex-shrink-0">
            <span class="svg-icon svg-icon-sm text-primary feature">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
              </svg>

            </span>
          </div>

          <div class="flex-grow-1 ms-3">
            <h3 class="mb-0">Deployment and Release</h3>
          </div>
        </div>
        <!-- End Icon Block -->

        <p class="   p1 text-dark">Safely deploy the software to make the product accessible to users seamlessly.</p>
      </div>
      <!-- End Col -->

      <div class="col-sm-6 col-md-4 feature">
        <!-- Icon Block -->
        <div class="d-flex align-items-center mb-2">
          <div class="flex-shrink-0">
            <span class="svg-icon svg-icon-sm text-primary feature">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
                <path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
                <path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z"/>
              </svg>

            </span>
          </div>

          <div class="flex-grow-1 ms-3">
            <h3 class="mb-0">Maintenance and Continuous Improvement</h3>
          </div>
        </div>
        <!-- End Icon Block -->

        <p class="   p1 text-dark">Implement ongoing maintenance and ensuring sustained performance .</p>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->

    
  </div>

  <!-- Features end -->

  <!-- ==service start -->


  <div id="service ">
    <!-- Card Grid -->
    <section style="background-color:  rgba(114, 143, 206, 0.3) !important;">
    <div class="container content-space-2 content-space-lg-2 mt-n2 mt-10 ">
      <div class="row ">
        <div class="col-lg-12  w-md-80">
          <!-- Heading -->
          <div class="mb-5 ">
            <!-- <p class="text-dark p1">Our Services</p>
            <h2 class="bg-navy">Innovative Software Solutions for Your Success</h2> -->
            <div class="w-md-75 w-md-40 text-center mx-md-auto mb-5 mb-md-9">
              <p class="text-secondary lead mt-5">Our Services</p>
              <h2 class="h2"><span class="text-pr">Innovative Software Solutions for Your Success</span></h2>
          </div>
            <!-- <p class="  p1 text-dark">At our software company, we pride ourselves on delivering cutting-edge solutions designed to meet the diverse needs of our clients. From custom software development and system integration to cloud solutions and beyond, our services are crafted with innovation at their core.</p> -->
            <p class=" p1 text-dark w-md-40"> We collaborate closely with businesses of all sizes, employing a strategic approach to address challenges and capitalize on opportunities. Whether you seek streamlined processes, enhanced productivity, or a digital transformation, our team is dedicated to providing you with the technological foundation to achieve your goals. </p>
          </div>
          <!-- End Heading -->
<!-- 
          <div class="container">
            <div class="row mb-4">
                <div class="col-4">
                   
                    <ul class="list-checked list-checked-success mb-0">
                        <li class=" text-dark p1">
                            <button class="btn btn-outline-primary btn-transition open-modal" data-target="#myModal1">ERP</button>
                        </li>
                    </ul>
                   
                </div>
                
        
                <div class="col-4">
                   
                    <ul class="list-checked list-checked-success mb-0">
                        <li class=" text-dark p1">
                            <button class="btn btn-outline-primary btn-transition open-modal" data-target="#myModal2">CRM</button>
                        </li>
                    </ul>
                   
                </div>
        
                <div class="col-4">
                   
                    <ul class="list-checked list-checked-success mb-0">
                        <li class=" text-dark p1">
                            <button class="btn btn-outline-primary btn-transition open-modal" data-target="#myModal3">CSM</button>
                        </li>
                    </ul>
                   
                </div>
              
            </div>
        </div> -->
          


        </div>
        <!-- End Col -->

        <div class="col-lg-12">
          <!-- Card -->
          <div class="card bg-dark" style="min-height: 27rem;">
            <div class="card-body">
              <!-- Nav Scroller -->
              <div class="js-nav-scroller hs-nav-scroller-horizontal hs-nav-scroller-light">
                <span class="hs-nav-scroller-arrow-prev" style="display: none;">
                  <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                    <i class="bi-chevron-left"></i>
                  </a>
                </span>

                <span class="hs-nav-scroller-arrow-next" style="display: none;">
                  <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                    <i class="bi-chevron-right"></i>
                  </a>
                </span>
                <div class="text-center">
                  <!-- Nav Pills -->
                  <ul class="nav nav-sm nav-pills nav-light nav-justified mb-5 " id="featuresCodingTab" role="tablist">
                    <li class="nav-item " role="presentation">
                      <a class="nav-link active text-white  d-none d-lg-block d-sm-block" href="#featuresCodingOne" id="featuresCodingOne-tab" data-bs-toggle="tab" data-bs-target="#featuresCodingOne" role="tab" aria-controls="featuresCodingOne" aria-selected="true">Product  Development</a>
                    </li>

                    <li class="nav-item" role="presentation">
                      <a class="nav-link text-white d-none d-lg-block d-sm-block" href="#featuresCodingTwo" id="featuresCodingTwo-tab" data-bs-toggle="tab" data-bs-target="#featuresCodingTwo" role="tab" aria-controls="featuresCodingTwo" aria-selected="false">Web Application</a>
                    </li>

                    <li class="nav-item" role="presentation">
                      <a class="nav-link text-white d-none d-lg-block d-sm-block" href="#featuresCodingThree" id="featuresCodingThree-tab" data-bs-toggle="tab" data-bs-target="#featuresCodingThree" role="tab" aria-controls="featuresCodingThree" aria-selected="false">Internet Of  Things</a>
                    </li>

                  </ul>
                  <!-- End Nav Pills -->
                </div>

                <div class="text-center">
                  
                  <ul class="nav nav-sm nav-pills nav-light nav-justified mb-5 " id="featuresCodingTab" role="tablist">
                    <li class="nav-item " role="presentation">
                      <a class="nav-link active text-white   d-md-none d-sm-block" href="#featuresCodingOne" id="featuresCodingOne-tab" data-bs-toggle="tab" data-bs-target="#featuresCodingOne" role="tab" aria-controls="featuresCodingOne" aria-selected="true">Product <br> Development</a>
                    </li>

                    <li class="nav-item" role="presentation">
                      <a class="nav-link text-white  d-md-none d-sm-block" href="#featuresCodingTwo" id="featuresCodingTwo-tab" data-bs-toggle="tab" data-bs-target="#featuresCodingTwo" role="tab" aria-controls="featuresCodingTwo" aria-selected="false">Web<br> Application</a>
                    </li>

                    <li class="nav-item" role="presentation">
                      <a class="nav-link text-white  d-md-none d-sm-block" href="#featuresCodingThree" id="featuresCodingThree-tab" data-bs-toggle="tab" data-bs-target="#featuresCodingThree" role="tab" aria-controls="featuresCodingThree" aria-selected="false">Internet Of <br> Things</a>
                    </li>

                  </ul>
                 
                </div>
              </div>
              <!-- End Nav Scroller -->

              <!-- Tab Content -->
              <div class="tab-content" id="featuresCodingTabContent">
                <div class="tab-pane fade show active" id="featuresCodingOne" role="tabpanel" aria-labelledby="featuresCodingOne-tab">
                  <!-- Code -->
                        <!-- Image Container -->
                        <div class="text-center text-primary">
                          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-rocket-takeoff-fill" viewBox="0 0 16 16">
                            <path d="M12.17 9.53c2.307-2.592 3.278-4.684 3.641-6.218.21-.887.214-1.58.16-2.065a3.578 3.578 0 0 0-.108-.563 2.22 2.22 0 0 0-.078-.23V.453c-.073-.164-.168-.234-.352-.295a2.35 2.35 0 0 0-.16-.045 3.797 3.797 0 0 0-.57-.093c-.49-.044-1.19-.03-2.08.188-1.536.374-3.618 1.343-6.161 3.604l-2.4.238h-.006a2.552 2.552 0 0 0-1.524.734L.15 7.17a.512.512 0 0 0 .433.868l1.896-.271c.28-.04.592.013.955.132.232.076.437.16.655.248l.203.083c.196.816.66 1.58 1.275 2.195.613.614 1.376 1.08 2.191 1.277l.082.202c.089.218.173.424.249.657.118.363.172.676.132.956l-.271 1.9a.512.512 0 0 0 .867.433l2.382-2.386c.41-.41.668-.949.732-1.526l.24-2.408Zm.11-3.699c-.797.8-1.93.961-2.528.362-.598-.6-.436-1.733.361-2.532.798-.799 1.93-.96 2.528-.361.599.599.437 1.732-.36 2.531Z"/>
                            <path d="M5.205 10.787a7.632 7.632 0 0 0 1.804 1.352c-1.118 1.007-4.929 2.028-5.054 1.903-.126-.127.737-4.189 1.839-5.18.346.69.837 1.35 1.411 1.925Z"/>
                          </svg>
                        </div>
                        <!-- End Image Container -->
                    
                        <!-- Image Description -->
                        <p class="text-left mt-4 text-white ">It encompasses a range of activities, from idea generation and market research <b>to prototyping, testing, and eventual production</b>. It involves collaboration across various departments, including design, engineering, marketing, and quality assurance, to ensure the final product meets both customer expectations and business objectives.The goal is to create innovative solutions that meet customer needs, differentiate the product in the market, and contribute to the overall growth and success of the business. </p>
                       
                        
                        <!-- End Image Description -->
                  <!-- End Code -->
                </div>

                <div class="tab-pane fade" id="featuresCodingTwo" role="tabpanel" aria-labelledby="featuresCodingTwo-tab">
                              <!-- Image Container -->
                              <div class="text-center text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-file-earmark-code-fill" viewBox="0 0 16 16">
                                  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M6.646 7.646a.5.5 0 1 1 .708.708L5.707 10l1.647 1.646a.5.5 0 0 1-.708.708l-2-2a.5.5 0 0 1 0-.708l2-2zm2.708 0 2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 10 8.646 8.354a.5.5 0 1 1 .708-.708z"/>
                                </svg>
                              </div>
                              <!-- End Image Container -->
                          
                              <!-- Image Description -->
                              <p class="text-left mt-4 text-white ">Unlike traditional desktop applications, web apps do not require installation on a user's device and can be accessed from various platforms. Web apps leverage technologies such as frontend, backend  to provide dynamic and interactive user experiences and give security also. They are versatile and can serve a wide range of purposes, from content delivery and collaboration to complex data processing. Web apps play a pivotal role in the modern digital landscape, offering accessibility and scalability for businesses and users alike. </p>
                             
                </div>

                <div class="tab-pane fade" id="featuresCodingThree" role="tabpanel" aria-labelledby="featuresCodingThree-tab">
                  
                  <div class="text-center text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-cloud-upload-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M8 0a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 4.095 0 5.555 0 7.318 0 9.366 1.708 11 3.781 11H7.5V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11h4.188C14.502 11 16 9.57 16 7.773c0-1.636-1.242-2.969-2.834-3.194C12.923 1.999 10.69 0 8 0m-.5 14.5V11h1v3.5a.5.5 0 0 1-1 0"/>
                    </svg>
                  </div>
                  <!-- End Image Container -->
              
                  <!-- Image Description -->
                  <p class="text-left mt-4 text-white ">These devices, equipped with sensors, actuators, and connectivity, can collect and exchange information to enable intelligent decision-making and automation. IoT applications span various industries, including healthcare, agriculture, smart cities, and industrial automation. The transformative power of IoT lies in its ability to create a seamless and interconnected ecosystem, enhancing efficiency, reducing costs, and unlocking new possibilities for innovation and improved quality of life.  </p>
                 
                </div>

              </div>
              <!-- End Tab Content -->
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
  </section>


    <!-- End Card Grid -->

  </div>

  <!-- contact small -->

 <!-- Team -->
 <div class="container content-space-2 content-space-lg-3">
  <!-- Heading -->
  <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
    <p class="text-secondary lead"> Our Team</p>
    <h2><span style="color: rgba(0, 31, 63, 0.7) !important;">Creative minds</span></h2>
   
  </div>
  <!-- End Heading -->

  <div class="row gx-3 mb-5">
    <div class="col-sm-6 col-lg-3 mb-3">
      <!-- Card -->
      <div class="card card-transition h-100" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">
        <div class="card-body">
            <div class="avatar avatar-lg avatar-circle mb-4">
                <img class="avatar-img" src="./assets/img/riya1n.jpeg" alt="Riya Vaidya Image">
            </div>
    
            <span class="card-subtitle text-navy-blue">Backend Developer</span>
            <h4 class="card-title text-primary">Riya Vaidya</h4>
            <p class="text-dark p2">Responsible for server-side web application logic and integration of the work <span class="text-muted">Read  More..</span></p>
        </div>
    
        <div class="card-footer pt-0">
          <!-- Socials -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                <i class="bi-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                <i class="bi-google"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                <i class="bi-twitter"></i>
              </a>
            </li>
          </ul>
          <!-- End Socials -->
        </div>
    </div>
    
    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <!-- <h5 class="modal-title" id="exampleModalScrollableTitle">Riya Vaidya</h5> -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
              <!-- Avatar Image with Title -->
              <div class="row justify-content-center mb-4">
                <div class="col-auto">
                  <div class="avatar avatar-lg avatar-circle text-center">
                    <img class="avatar-img" src="./assets/img/riya1n.jpeg" alt="Riya Vaidya Image">
                    <!-- Title/Name -->
                    <!-- <h5 class="text-dark mt-3 mb-0">Riya Vaidya</h5> -->
                  </div>
                </div>
                <div class="col">
                  <!-- Designation or Additional Text -->
                  <h3 class="text-left  mb-0 mt-1  text-primary">Riya Vaidya</h3>
                  <h5 class="text-left text-dark mb-0 mt-2 p2">BackendEnd Developer</h5>
                  <!-- End Designation -->
                </div>
              </div>
              <!-- End Avatar Image with Title -->
            
              <!-- Content specific to Riya Vaidya -->
              <p class="p2 text-dark">
                Maintain the mechanisms that process data and perform actions on websites. Unlike front-end developers, who control everything you can see on a website, back-end developers are involved in data storage, security, and other server-side functions that you cannot see.
              </p>
              <!-- End Content -->
            </div>
            
          </div>
      </div>
  </div>
  
    
    </div>
    
    <!-- End Col -->

    <div id="Richa" class="col-sm-6 col-lg-3 mb-3">
      <!-- Card -->
      <div class="card card-transition h-100" data-bs-toggle="modal" data-bs-target="#RichaModal">
        <div class="card-body">
            <div class="avatar avatar-lg avatar-circle mb-4">
                <img class="avatar-img" src="./assets/img/richa.JPG" alt="Richa Kharwa Image">
            </div>
    
            <span class="card-subtitle p2">FrontEnd Developer</span>
            <h4 class="card-title  text-primary">Richa Kharwa</h4>
            <p class="text-dark p2">I've worked on a variety of projects for clients in the retail, travel, and healthcare  <span class="text-muted">Read  More..</span></p>
        </div>
    
        <div class="card-footer pt-0">
          <!-- Socials -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                <i class="bi-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                <i class="bi-google"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                <i class="bi-twitter"></i>
              </a>
            </li>
          </ul>
          <!-- End Socials -->
        </div>
    </div>
    
    <div class="modal fade" id="RichaModal" tabindex="-1" role="dialog" aria-labelledby="RichaModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header text-center">
                <!-- <h5 class="modal-title" id="RichaModalTitle">Richa Kharwa</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              
              <div class="modal-body">
                <!-- Avatar Image with Title -->
                <div class="row justify-content-center mb-4">
                  <div class="col-auto">
                    <div class="avatar avatar-lg avatar-circle text-center">
                      <img class="avatar-img" src="./assets/img/richa.JPG" alt="Richa Kharwa Image">
                      <!-- Title/Name -->
                      <!-- <h5 class="text-dark mt-3 mb-0">Richa Kharwa</h5> -->
                    </div>
                  </div>
                  <div class="col">
                    <!-- Designation or Additional Text -->
                    <h3 class="text-left  text-primary mb-0 mt-1">Richa Vaidya</h3>
                    <h5 class="text-left text-dark mb-0 mt-2 p2">FrontEnd Developer</h5>
                    <!-- End Designation -->
                  </div>
                </div>
                <!-- End Avatar Image with Title -->
              
                <!-- Content specific to Richa Kharwa -->
                <p class="p2 text-dark">
                  I'm passionate about creating great user experiences and have a strong understanding of usability and accessibility standards.
                  I believe that design is not just about how things look but also about how they work. By combining creativity with technical expertise, I strive to create web interfaces that not only captivate users visually but also provide an intuitive and enjoyable journey.
                </p>
                <!-- End Content -->
              </div>
              
              
            </div>
        </div>
    </div>
    
      <!-- End Modal -->
    </div>
    
    
    <!-- End Col -->
    <div id="Emily" class="col-sm-6 col-lg-3 mb-3">
      <!-- Card -->
      <div class="card card-transition h-100" data-bs-toggle="modal" data-bs-target="#emilyModal">
        <div class="card-body">
            <div class="avatar avatar-lg avatar-circle mb-4">
                <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Emily Johnson Image">
            </div>
    
            <span class="card-subtitle p1">Lead  Designer</span>
            <h4 class="card-title  text-primary">Emily Johnson</h4>
            <p class="p2 text-dark"> Meticulously crafting user-centric experiences that seamlessly blend aesthetics <span class="text-muted">Read  More..</span></p>
        </div>
    
        <div class="card-footer pt-0">
          <!-- Socials -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                <i class="bi-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                <i class="bi-google"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                <i class="bi-twitter"></i>
              </a>
            </li>
          </ul>
          <!-- End Socials -->
        </div>
    </div>
    
    <div class="modal fade" id="emilyModal" tabindex="-1" role="dialog" aria-labelledby="emilyModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <!-- <h5 class="modal-title" id="emilyModalTitle">Emily Johnson's Modal</h5> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <!-- Avatar Image with Title -->
                <div class="row justify-content-center mb-4">
                  <div class="col-auto">
                    <div class="avatar avatar-lg avatar-circle text-center">
                      <img class="avatar-img" src="./assets/img//160x160/img9.jpg" alt="Emily Johnson Image">
                      <!-- Title/Name -->
                     
                    </div>
                  </div>
                  <div class="col">
                    <!-- Designation or Additional Text -->
                    <h3 class="text-left  text-primary mb-0 mt-1">Emily Johnson</h3>
                    <h5 class="text-left text-dark mb-0 mt-2 p2">Lead Designer</h5>
                    <!-- End Designation -->
                  </div>
                </div>
                <!-- End Avatar Image with Title -->
              
                <!-- Content specific to Emily Johnson -->
                <p class="p2 text-dark">
                  Designer p1s the design team in translating complex ideas into visually compelling interfaces. I play a pivotal role in shaping the overall product aesthetic, ensuring a harmonious and intuitive user journey. Through collaboration with cross-functional teams, the p1 Designer brings forth innovative design solutions, transforming concepts into captivating and user-friendly software interfaces.
                </p>
                <!-- End Content -->
              </div>
              
                
            </div>
        </div>
    </div>
    
      <!-- End Modal -->
    </div>
    
    <!-- End Col -->

    <div id="Michael" class="col-sm-6 col-lg-3 mb-3">
      <!-- Card -->
      <div class="card card-transition h-100" data-bs-toggle="modal" data-bs-target="#michaelModal">
          <div class="card-body">
              <div class="avatar avatar-lg avatar-circle mb-4">
                  <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Michael Smith Image">
              </div>
  
              <span class="card-subtitle p1">Lead Developer</span>
              <h4 class="card-title  text-primary">Michael Smith</h4>
              <p class="p2 text-dark"> With a wealth of experience and a deep understanding of  technologies <span class="text-muted">Read  More..</span></p>
          </div>
  
          <div class="card-footer pt-0">
            <!-- Socials -->
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                  <i class="bi-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                  <i class="bi-google"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                  <i class="bi-twitter"></i>
                </a>
              </li>
            </ul>
            <!-- End Socials -->
          </div>
      </div>
      <!-- End Card -->
  
      <!-- Modal -->
      <div class="modal fade" id="michaelModal" tabindex="-1" role="dialog" aria-labelledby="michaelModalTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <!-- <h5 class="modal-title" id="michaelModalTitle">Michael Smith's Modal</h5> -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Avatar Image with Title -->
                  <div class="row justify-content-center mb-4">
                    <div class="col-auto">
                      <div class="avatar avatar-lg avatar-circle text-center">
                        <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Michael Smith Image">
                        <!-- Title/Name -->
                
                      </div>
                    </div>
                    <div class="col">
                      <!-- Designation or Additional Text -->
                      <h3 class="text-left  text-primary mb-0 mt-1">Michael Smith</h3>
                      <h5 class="text-left text-dark mb-0 mt-2 p2">Lead Developer</h5>
                      <!-- End Designation -->
                    </div>
                  </div>
                  <!-- End Avatar Image with Title -->
                
                  <!-- Content specific to Michael Smith -->
                  <p class="p2 text-dark">
                  Our expertise extends beyond coding, encompassing strategic thinking and a commitment to delivering high-quality, maintainable code. p1ing by example, the p1 Developer fosters a culture of continuous learning and innovation within the development team, ensuring that our software products not only meet but exceed industry standards. 
                  </p>
                  <!-- End Content -->
                </div>
                
                 
              </div>
          </div>
      </div>
      <!-- End Modal -->
  </div>
    <!-- End Col -->

  </div>
  <!-- End Row -->

  
</div>
<!-- 
   team end -->


 <!-- End Clients -->
 <!-- Clients -->
<div class="container ">
  <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">

    <h2><span style="color: rgba(0, 31, 63, 0.7) !important;">Our Clients companies</span></h2>
   
  </div>
  <div class="row">
    
    <div class="col text-center py-3">
      <img class="avatar avatar-lg avatar-4x3" src="./assets/logo/vriaumlogo.png" alt="Logo">
    </div>
    <!-- End Col -->

    <div class="col text-center py-3">
      <img class="avatar avatar-lg avatar-4x3" src="./assets/logo/vriaum2logo.png" alt="Logo">
    </div>
    <!-- End Col -->

    <div class="col text-center py-3 mt-n4">
      <img class="avatar avatar-lg avatar-4x3" src="./assets/logo/urjalogo2.jpeg" alt="Logo">
    </div>
    <!-- End Col -->

    <div class="col text-center py-3">
      <img class="avatar avatar-lg avatar-4x3" src="./assets/logo/neslogo.jpeg" alt="Logo">
    </div>
    <!-- End Col -->

    <div class="col text-center py-3">
      <img class="avatar avatar-lg avatar-4x3" src="./assets/logo/kumarlogo.png" alt="Logo">
    </div>
    <!-- End Col -->

   
    <!-- End Col -->
  </div>
  <!-- End Row -->
</div>
<!-- End Clients -->

<!-- Testimonials -->
<!-- Card Grid -->
<div style="background-color:  rgba(114, 143, 206, 0.3) !important;">
  <div class="container content-space-2 content-space-t-lg-3 mt-11">
    <!-- Heading -->
    <div class="w-lg-40 mb-5 mb-md-9 text-center">
      <p class="text-dark lead">Testimonials</p>
      <h2 style="color: rgba(0, 31, 63, 0.7) !important;">Loved by business and individuals across the globe.</h2>
  </div>
  
    <!-- End Heading -->

    <div class="row">
      <div class="col-sm-6 col-lg-4 feature">
        <!-- Card -->
        <div class="card shadow-none"> 
          <div class="card-body ">
            <!-- Rating -->
            <!-- <div class="d-flex gap-1 mb-2">
              <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
              <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
              <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
              <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
              <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
            </div> -->
            <!-- End Rating -->

            <div class="mb-auto">
              <p class="p2 text-dark"> We've been with DevLoops from the beginning. Their consistent delivery of top-notch technology solutions has been instrumental in our growth and competitiveness.</p>
            </div>
          </div>

          <div class="card-footer pt-0 ">
            <!-- Media -->
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img class="avatar avatar-circle" src="./assets/img/160x160/img8.jpg" alt="Image Description">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="card-title mb-0">Calvin Carlo</h5>
                <p class="card-text small">Business Manager</p>
              </div>
            </div>
            <!-- End Media -->
          </div>
        </div>
        <!-- End Card -->
      </div>
      <!-- End Col -->

      <div class="col-sm-6 col-lg-4 feature">
        <!-- Card -->
        <div class="card bg-pink1">
          <div class="card-body">
            <!-- Rating -->
            <!-- <div class="d-flex gap-1 mb-2">
              <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
              <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
              <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
              <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
              <img src="./assets/svg/illustrations/star-half.svg" alt="Review rating" width="16">
            </div> -->
            <!-- End Rating -->

            <div class="mb-auto">
              <p class=" p2 text-white">DevLoops' transparency and integrity are truly commendable. They've helped us navigate complex digital transformations with unwavering support and expertise.</p>
            </div>
          </div>

          <div class="card-footer pt-0">
            <!-- Media -->
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img class="avatar avatar-circle" src="./assets/img/160x160/img9.jpg" alt="Image Description">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="card-title text-white mb-0">Jemina CLone</h5>
                <p class="card-text small text-white-70">CEO </p>
              </div>
            </div>
            <!-- End Media -->
          </div>
        </div>
        <!-- End Card -->
      </div>
      <!-- End Col -->

      <div class="col-sm-6 col-lg-4 feature">
        <!-- Card -->
        <div class="card shadow-none">
          <div class="card-body">
           
            <!-- End Rating -->

            <div class="mb-auto">
              <p class="p2 text-dark">We partnered with DevLoops for product development, and it was a game-changer. Their team's creativity and commitment turned our ideas into a reality that exceeded our expectations.</p>
            </div>
          </div>

          <div class="card-footer pt-0">
            <!-- Media -->
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img class="avatar avatar-circle" src="./assets/img/160x160/img3.jpg" alt="Image Description">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="card-title mb-0">Cristino Murfi</h5>
                <p class="card-text small">Front Pay user</p>
              </div>
            </div>
            <!-- End Media -->
          </div>
        </div>
        <!-- End Card -->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->
  </div>
</div>
<!-- End Testimonials -->

 <!-- partners start -->

  
  <div class="container mt-10">
    <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
  
      <h2><span style="color: rgba(0, 31, 63, 0.7) !important;">Our Partners Companies</span></h2>
     
    </div>
    <div class="row">
    
      <div class="col text-center py-3">
        <img class="avatar avatar-lg avatar-4x3" src="./assets/logo/vriaumlogo.png" alt="Logo">
      </div>
      <!-- End Col -->
  
      <div class="col text-center py-3">
        <img class="avatar avatar-lg avatar-4x3" src="./assets/logo/vriaum2logo.png" alt="Logo">
      </div>
      <!-- End Col -->
  
      <div class="col text-center py-3 mt-n4">
        <img class="avatar avatar-lg avatar-4x3" src="./assets/logo/urjalogo2.jpeg" alt="Logo">
      </div>
      <!-- End Col -->
  
      <div class="col text-center py-3">
        <img class="avatar avatar-lg avatar-4x3" src="./assets/logo/neslogo.jpeg" alt="Logo">
      </div>
      <!-- End Col -->
  
      <div class="col text-center py-3">
        <img class="avatar avatar-lg avatar-4x3" src="./assets/logo/kumarlogo.png" alt="Logo">
      </div>
      <!-- End Col -->
      <div class="col text-center py-3">
        <img class="avatar avatar-lg avatar-4x3" src="./assets/logo/socialageslogo1.png" alt="Logo">
      </div>
     
      <!-- End Col -->
    </div>
  
    <!-- End Row -->
  </div>

  <!-- End Row -->


 <!-- partners end -->
  <!-- Contact Form -->
  <div id="contact">
    <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2 mb-9 mt-md-n10">
      <div class="row">
        <div class="col-lg-6 mb-9 mb-lg-0">
          <!-- Heading -->
          <div class="mb-5">
            <p class="text-secondary lead">Get in touch</p>
            <h1 style="color: rgba(0, 31, 63, 0.7) !important;">Get a project in mind let's contact us!!</h1>
          </div>
          <!-- End Heading -->

          <!-- Leaflet -->
          <div class="overflow-hidden">
            <div class="col-sm-9 mb-3 mb-sm-4">
              <img class="img-fluid img-float" src="./assets/img/contactloop.gif" alt="Image Description">
            </div>
          </div>
          <!-- End Leaflet -->

          
          <!-- End Row -->
        </div>
        <!-- End Col -->        

        <div class="col-lg-6">
          <div class="ps-lg-5">
            <!-- Card -->
            <div class="card">
              <div class="card-header border-bottom text-center">
                <h3 class="card-header-title">Contact form </h3>
              </div>

              <div class="card-body">
                <div class="alert alert-success d-none" role="alert" id="successAlert">
                  Your form has been successfully submitted!
                </div>
              
                <!-- Form -->
                <!-- Form -->
              <form action="https://formsubmit.co/24richavaidya@gmail.com" method="POST" >
                <div class="row gx-3">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-3">
                      <label for="name">First Name:</label>
                      <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
            
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-3">
                      <label for="surname">Last Name:</label>
                      <input type="text"  class="form-control form-control-lg"id="name" name="surname" placeholder="Your LastName" required>
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
                <div class="row gx-3">
                  <div class="col-sm-6">
                    <!-- Email Form -->
                    <div class="mb-3">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="xyz@gmail.com" required>
                    </div>
                    <!-- End Email Form -->
                  </div>
                  <!-- End Col -->
                
                  <div class="col-sm-6">
                    <!-- Phone Form -->
                    <div class="mb-3">
                      <label for="Phone">Phone <span class="form-label-secondary">(Optional)</span></label>
                      <input type="tel" class="form-control form-control-lg" name="Phone" id="Phone" placeholder="+x(xxx)xxx-xx-xx" required>
                    </div>
                    <!-- End Phone Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
                
                <!-- Details Form -->
                <div class="mb-3 d-grid">
                  <label for="message">Details</label>
                  <textarea class="form-control form-control-lg" name="message" id="message" placeholder="Tell us about your ..." rows="4" required></textarea>
                </div>
                <!-- End Details Form -->
                
                <div class="d-grid">
                  <button type="submit" class="btn btn-outline-primary btn-transition">Send</button>
                </div>
                
              </form>
                <!-- End Form -->
              </div>
            </div>
            <!-- End Card -->
          </div>
        </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
  </div>
  <!-- End Contact Form -->
  
@endsection