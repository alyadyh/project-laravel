@extends('layouts.web')

@section('content')

        <!-- HOME -->
        <section id="home">
            <div class="container">
                <div class="row gy-5 align-items-center">
                    <div class="col-lg-6 order-lg-first order-last">
                        <h1 class="display-4">I'm <span>Alya Dhiya'</span></h1>
                        <div class="person-is">
                            <span>UI/UX Designer</span>
                            <span>/</span>
                            <span>Front End Developer</span>
                        </div>
                        <p class="mt-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. A laboriosam quas optio tempora voluptas dolor fuga error magni, expedita voluptates beatae corporis impedit minus, sint eveniet, rerum pariatur incidunt blanditiis!
                        </p>
                        <a href="#porto" class="btn btn-brand">Explore My Work</a>
                    </div>
                    <div class="col-lg-4 col-md-8 mx-lg-5 ms-auto">
                        <div class="person-img">
                            <img src="../resources/assets/img/foto1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="divider"></div>

        <!-- ABOUT -->
        {{-- <section id="about">
            <div class="container">
                <div class="intro row">
                    <h1>About <span>Me.</span></h1>
                    <div class="col-1">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Labore in fugit accusantium saepe voluptates rem commodi 
                            ipsam repellendus magnam. Deleniti nihil expedita alias 
                            fuga repudiandae doloribus quis adipisci molestiae suscipit.
                        </p>
                    </div>
                    <div class="col-2 col-md-12 col-lg-6 text-start text-lg-end ms-auto" data-aos="fade-up" data-aos-delay="100">
                        <div class="tab-titles">
                            <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                            <p class="tab-links" onclick="opentab('experience')">Experience</p>
                            <p class="tab-links" onclick="opentab('education')">Education</p>
                        </div> --}}

                        {{-- <div id="skills">
                            <div class="container">
                                <div class="accordion" id="skill">
                                    <div class="card">
                                            <div class="card-header" id="skillshead1">
                                                <a class="btn-header-link" type="button" data-bs-toggle="collapse" data-bs-target="#skills1" aria-expanded="true" aria-controls="skills1">
                                                    <i class="iconify skills-icon" data-icon="uil:swatchbook"></i>
                                                    <h3>UI/UX</h3>
                                                </a>
                                            </div>
                          
                                                  <div id="skills1" class="accordion-collapse collapse show" aria-labelledby="skillshead1" data-parent="#skill">
                                                      <div class="card-body">
                                                        <div class="skills-grid" id="skills-grid">
                                                            <div class="skills-data">
                                                                <h3>FIGMA</h3>
                                                                <p>90%</p>
                                                            </div>
                                                            <div class="skills-bar">
                                                                <span class="skills-percent skills-figma"></span>
                                                            </div>
                                                        </div>
                                                        <div class="skills-grid">
                                                            <div class="skills-data">
                                                                <h3>Sketch</h3>
                                                                <p>65%</p>
                                                            </div>
                                                            <div class="skills-bar">
                                                                <span class="skills-percent skills-sketch"></span>
                                                            </div>
                                                        </div>
                                                        <div class="skills-grid">
                                                            <div class="skills-data">
                                                                <h3>Photoshop</h3>
                                                                <p>70%</p>
                                                            </div>
                                                            <div class="skills-bar">
                                                                <span class="skills-percent skills-psd"></span>
                                                            </div>
                                                        </div>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="card">
                                                  <div class="card-header" id="skillshead2">
                                                      <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#skills2"
                                                      aria-expanded="true" aria-controls="skills2">Front-End Development</a>
                                                  </div>
                          
                                                  <div id="skills2" class="collapse" aria-labelledby="skillshead2" data-parent="#skill">
                                                      <div class="card-body">
                                                        <div class="skills-grid">
                                                            <div class="skills-data">
                                                                <h3>HTML</h3>
                                                                <p>90%</p>
                                                            </div>
                                                            <div class="skills-bar">
                                                                <span class="skills-percent skills-html"></span>
                                                            </div>
                                                        </div>
                                                        <div class="skills-grid">
                                                            <div class="skills-data">
                                                                <h3>CSS</h3>
                                                                <p>75%</p>
                                                            </div>
                                                            <div class="skills-bar">
                                                                <span class="skills-percent skills-css"></span>
                                                            </div>
                                                        </div>
                                                        <div class="skills-grid">
                                                            <div class="skills-data">
                                                                <h3>JavaScript</h3>
                                                                <p>70%</p>
                                                            </div>
                                                            <div class="skills-bar">
                                                                <span class="skills-percent skills-js"></span>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}


                        {{-- // Start here --}}
                        {{-- <div class="tab-contents" id="skills">
                            <!-- SKILLS 1 -->
                            <div class="skills-contents">
                                <div class="skills-header" id="uiux">
                                    <i class="iconify skills-icon" data-icon="uil:swatchbook"></i>
                                    <div>
                                        <h2>UI/UX</h2>
                                    </div>
                                    <i class="iconify skills-arrow" data-icon="uil:angle-down"></i>
                                </div>

                                <div class="skills-grid" id="skills-grid">
                                    <div class="skills-data">
                                        <h3>FIGMA</h3>
                                        <p>90%</p>
                                    </div>
                                    <div class="skills-bar">
                                        <span class="skills-percent skills-figma"></span>
                                    </div>
                                </div>
                                <div class="skills-grid">
                                    <div class="skills-data">
                                        <h3>Sketch</h3>
                                        <p>65%</p>
                                    </div>
                                    <div class="skills-bar">
                                        <span class="skills-percent skills-sketch"></span>
                                    </div>
                                </div>
                                <div class="skills-grid">
                                    <div class="skills-data">
                                        <h3>Photoshop</h3>
                                        <p>70%</p>
                                    </div>
                                    <div class="skills-bar">
                                        <span class="skills-percent skills-psd"></span>
                                    </div>
                                </div>
                            </div>
                                
                                <!-- SKILLS 2 -->
                            <div class="skills-contents skills-close">
                                <div class="skills-header">
                                    <i class="iconify skills-icon" data-icon="uil:brackets-curly"></i>
                                    <div>
                                        <h2>Frontend Development</h2>
                                    </div>
                                    <i class="iconify skills-arrow" data-icon="uil:angle-down"></i>
                                </div>

                                <div class="skills-grid">
                                    <div class="skills-data">
                                        <h3>HTML</h3>
                                        <p>90%</p>
                                    </div>
                                    <div class="skills-bar">
                                        <span class="skills-percent skills-html"></span>
                                    </div>
                                </div>
                                <div class="skills-grid">
                                    <div class="skills-data">
                                        <h3>CSS</h3>
                                        <p>75%</p>
                                    </div>
                                    <div class="skills-bar">
                                        <span class="skills-percent skills-css"></span>
                                    </div>
                                </div>
                                <div class="skills-grid">
                                    <div class="skills-data">
                                        <h3>JavaScript</h3>
                                        <p>70%</p>
                                    </div>
                                    <div class="skills-bar">
                                        <span class="skills-percent skills-js"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-contents" id="education">
                            <ul>
                                <li><span>2025</span><br>B.Comp.Sc from Bina Nusantara University</li>
                                <li><span>2021</span><br>SMA Muhammadiyah 2 Surabaya</li>
                            </ul>
                        </div> --}}

                            
                            <!-- <ul>
                                <li><span>UI/UX</span><br>Designing Web/App interfaces</li>
                                <li><span>Web Development</span><br>Web App Development</li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="experience">
                            <ul>
                                <li><span>2023 - Current</span><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                <li><span>2021 - 2022</span><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                            </ul>
                        </div>
                        <div class="tab-contents" id="education">
                            <ul>
                                <li><span>2025</span><br>B.Comp.Sc from Bina Nusantara University</li>
                                <li><span>2021</span><br>SMA Muhammadiyah 2 Surabaya</li>
                            </ul>
                        </div> -->
                    {{-- </div>
                </div>
                <div class="about-data row">
                    <div>
                        <span class="about-info-title"></span>
                        <span class="about-info-text"></span>
                    </div>
                </div> --}}
                <!-- <div class="about-button row">
                    <a download="" href="#assets/pdf/cv.pdf" class="button button--flex">
                        Download My CV <i class="uil uil-download-alt btn-outline-secondary"></i>
                    </a>
                </div> -->
            {{-- </div>
        </section> --}}
{{-- 
        <div class="divider"></div> --}}

        <!-- PORTFOLIO -->
        <section id="porto">
            <div class="container">
                <div class="intro row mb-5 align-items-center">
                <div class="col-md-12 col-lg-6 mb-4 mb-lg-0 intro" data-aos="fade-up">
                    <h1>My <span>Portfolio.</span></h1>
                </div>
                {{-- <div class="col-md-12 col-lg-6 text-start text-lg-end intro" data-aos="fade-up" data-aos-delay="100">
                  <div id="filters" class="filters">
                    <a href="#" data-filter="*" class="active">All</a>
                    <a href="#" data-filter=".web">Web</a>
                    <a href="#" data-filter=".design">Design</a>
                    <a href="#" data-filter=".branding">Branding</a>
                    <a href="#" data-filter=".photography">Photography</a>
                  </div>
                </div> --}}
              </div>
              <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
                <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Boxed Water</h3>
                      <span>Web</span>
                    </div>
                    <img class="img-fluid" src="../resources/assets/img/img_1.jpg">
                  </a>
                </div>
                <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Build Indoo</h3>
                      <span>Photography</span>
                    </div>
                    <img class="img-fluid" src="../resources/assets/img/img_2.jpg">
                  </a>
                </div>
                <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Cocooil</h3>
                      <span>Branding</span>
                    </div>
                    <img class="img-fluid" src="../resources/assets/img/img_3.jpg">
                  </a>
                </div>
                <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Nike Shoe</h3>
                      <span>Design</span>
                    </div>
                    <img class="img-fluid" src="../resources/assets/img/img_4.jpg">
                  </a>
                </div>
                <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Kitchen Sink</h3>
                      <span>Photography</span>
                    </div>
                    <img class="img-fluid" src="../resources/assets/img/img_5.jpg">
                  </a>
                </div>
                <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
                  <a href="#" class="item-wrap fancybox">
                    <div class="work-info">
                      <h3>Amazon</h3>
                      <span>brandingn</span>
                    </div>
                    <img class="img-fluid" src="../resources/assets/img/img_6.jpg">
                  </a>
                </div>
              </div>
            </div>
        </section>

        <div class="divider"></div>

        <!-- CONTACT -->
        <section id="contact">
            <div class="container">
                <div class="intro row">
                    <div class="col-12 intro">
                        <h1>Get in <span>touch.</span></h1>
                    </div>
                </div>
                <form method="POST" action="/contact" class="row g-3">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Enter message"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-brand">Send Message</button>
                    </div>
                </form>
            </div>
        </section>


@endsection