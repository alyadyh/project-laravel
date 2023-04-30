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
                            {{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. A laboriosam quas optio tempora voluptas dolor fuga error magni, expedita voluptates beatae corporis impedit minus, sint eveniet, rerum pariatur incidunt blanditiis! --}}
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
        </section>

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

                <!----CONNECT FROM DATABASE (BELUM BISA JALAN)---->
                {{-- @foreach ($data as $post)
                <div class="item web col-sm-6 col-md-4 col-lg-4 mb-4">
                <a href="/portfolios={{ $post->image_file_url }}" target="_blank" class="{{ $post->title }}">
                    <div class="work-info">
                    <h3>{{ $post->title }}</h3>
                    <span>{{ $post->description }}</span>
                    </div>
                    <img class="img-fluid" src="https://source.unsplash.com/500x400?{{ $post->image_file_url }}">
                </a>
                </div>
                @endforeach --}}

                <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
                    <a href="https://github.com/alyadyh/lonelyscape" target="_blank" class="item-wrap fancybox">
                        <div class="work-info">
                        <h3>LonelyScape</h3>
                        <span>iOS based AR using XCode</span>
                        </div>
                        <img class="img-fluid" src="../resources/assets/img/img_1.png">
                    </a>
                    </div>
                <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
                    <a href="https://github.com/alyadyh/kulinaria-website" target="_blank" class="item-wrap fancybox">
                        <div class="work-info">
                        <h3>Kulinaria</h3>
                        <span>UI Design</span>
                        </div>
                        <img class="img-fluid" src="../resources/assets/img/img_2.png">
                    </a>
                </div>
                {{-- <div class="item design col-sm-6 col-md-4 col-lg-4 mb-4">
                    <a href="https://www.figma.com/proto/AIecJGvdmhpmlq9GlT1Eye/Automated-Attendance-System?node-id=162-3828&starting-point-node-id=162%3A3828&scaling=contain" target="_blank" class="item-wrap fancybox">
                        <div class="work-info">
                        <h3>Auto-attendance System</h3>
                        <span>UI Design</span>
                        </div>
                        <img class="img-fluid" src="../resources/assets/img/img_4.png">
                    </a>
                </div> --}}
                <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
                    <a href="https://www.figma.com/file/RtWprEd8kMAHfrFVkQKF3Y/Redesign-Gramedia-Mobile-App?node-id=53%3A161&t=RJE9miTnQaPrsdSk-1" target="_blank" class="item-wrap fancybox">
                        <div class="work-info">
                        <h3>Redesign Gramedia Mobile</h3>
                        <span>UI Design</span>
                        </div>
                        <img class="img-fluid" src="../resources/assets/img/img_7.png">
                    </a>
                </div>
                {{-- <div class="item photography col-sm-6 col-md-4 col-lg-4 mb-4">
                    <a href="#" target="_blank" class="item-wrap fancybox">
                        <div class="work-info">
                        <h3>Kitchen Sink</h3>
                        <span>Photography</span>
                        </div>
                        <img class="img-fluid" src="../resources/assets/img/img_5.jpg">
                    </a>
                </div>
                <div class="item branding col-sm-6 col-md-4 col-lg-4 mb-4">
                    <a href="#" target="_blank" class="item-wrap fancybox">
                        <div class="work-info">
                        <h3>Amazon</h3>
                        <span>brandingn</span>
                        </div>
                        <img class="img-fluid" src="../resources/assets/img/img_6.jpg">
                    </a>
                </div> --}}
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
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Company</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                            <input type="text" id="basic-icon-default-company" class="form-control" placeholder="Amazon Inc." aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" />
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                            <input type="email" name="email" value="{{ old('email') }}" id="basic-icon-default-email" class="form-control" placeholder="john.doe@gmail.com" aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                            {{-- <span id="basic-icon-default-email2" class="input-group-text">@gmail.com</span> --}}
                          </div>
                          <div class="form-text" style="color:rgba(255, 255, 255, 0.545)"> *Note: You can use letters, numbers & periods </div>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-message">Message</label>
                        <div class="col-sm-10">
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                            <textarea name="message" id="basic-icon-default-message" cols="30" rows="6" class="form-control" placeholder="Hi, Do you have a moment to talk, Alya?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2"></textarea>
                          </div>
                        </div>
                      </div>

                    {{-- <div class="form-group">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="10" class="form-control" placeholder="Enter message"></textarea>
                    </div> --}}
                    <div>
                        <button class="btn btn-brand">Send Message</button>
                    </div>
                </form>
            </div>
        </section>

@endsection