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
        <section id="about">
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
                    <div class="col-2 ms-auto">
                        <div class="tab-titles">
                            <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                            <p class="tab-links" onclick="opentab('experience')">Experience</p>
                            <p class="tab-links" onclick="opentab('education')">Education</p>
                        </div>

                        <div class="tab-contents active-tab" id="skills">
                            <!-- SKILLS 1 -->
                            <div class="skills-contents skills-open">
                                <div class="skills-header">
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
                        </div>

                            
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
                    </div>
                </div>
                <div class="about-data row">
                    <div>
                        <span class="about-info-title"></span>
                        <span class="about-info-text"></span>
                    </div>
                </div>
                <!-- <div class="about-button row">
                    <a download="" href="#assets/pdf/cv.pdf" class="button button--flex">
                        Download My CV <i class="uil uil-download-alt btn-outline-secondary"></i>
                    </a>
                </div> -->
            </div>
        </section>

        <div class="divider"></div>

        <!-- PORTOFOLIO -->
        <section id="porto">
            <div class="container">
                <div class="intro row">
                    <div class="col-12 intro">
                        <h1>Check Out <span>My Portofolio.</span></h1>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-4">
                    <div class="work-box">
                        <a href="assets/img/work-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <div class="work-img">
                            <img src="../resources/assets/img/work-1.jpg" alt="" class="img-fluid">
                        </div>
                        </a>
                        <div class="work-content">
                        <div class="row">
                            <div class="col-sm-8">
                            <h2 class="w-title">Lorem impsum dolor</h2>
                            <div class="w-more">
                                <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                            </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="w-like">
                                <a href="porto.blade.php"> <span class="bi bi-plus-circle"></span></a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="work-box">
                        <a href="assets/img/work-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <div class="work-img">
                            <img src="../resources/assets/img/work-2.jpg" alt="" class="img-fluid">
                        </div>
                        </a>
                        <div class="work-content">
                        <div class="row">
                            <div class="col-sm-8">
                            <h2 class="w-title">Loreda Cuno Nere</h2>
                            <div class="w-more">
                                <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                            </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="w-like">
                                <a href="porto.blade.php"> <span class="bi bi-plus-circle"></span></a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="work-box">
                        <a href="assets/img/work-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <div class="work-img">
                            <img src="../resources/assets/img/work-3.jpg" alt="" class="img-fluid">
                        </div>
                        </a>
                        <div class="work-content">
                        <div class="row">
                            <div class="col-sm-8">
                            <h2 class="w-title">Mavrito Lana Dere</h2>
                            <div class="w-more">
                                <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                            </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="w-like">
                                <a href="porto.blade.php"> <span class="bi bi-plus-circle"></span></a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="work-box">
                        <a href="assets/img/work-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <div class="work-img">
                            <img src="../resources/assets/img/work-4.jpg" alt="" class="img-fluid">
                        </div>
                        </a>
                        <div class="work-content">
                        <div class="row">
                            <div class="col-sm-8">
                            <h2 class="w-title">Bindo Laro Cado</h2>
                            <div class="w-more">
                                <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                            </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="w-like">
                                <a href="porto.blade.php"> <span class="bi bi-plus-circle"></span></a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="work-box">
                        <a href="assets/img/work-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <div class="work-img">
                            <img src="../resources/assets/img/work-5.jpg" alt="" class="img-fluid">
                        </div>
                        </a>
                        <div class="work-content">
                        <div class="row">
                            <div class="col-sm-8">
                            <h2 class="w-title">Studio Lena Mado</h2>
                            <div class="w-more">
                                <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2018</span>
                            </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="w-like">
                                <a href="porto.blade.php"> <span class="bi bi-plus-circle"></span></a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="work-box">
                        <a href="assets/img/work-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox">
                        <div class="work-img">
                            <img src="../resources/assets/img/work-6.jpg" alt="" class="img-fluid">
                        </div>
                        </a>
                        <div class="work-content">
                        <div class="row">
                            <div class="col-sm-8">
                            <h2 class="w-title">Studio Big Bang</h2>
                            <div class="w-more">
                                <span class="w-ctegory">Web Design</span> / <span class="w-date">18 Sep. 2017</span>
                            </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="w-like">
                                <a href="porto.blade.php"> <span class="bi bi-plus-circle"></span></a>
                            </div>
                            </div>
                        </div>
                        </div>
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
                <form action="#" class="row g-3">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Enter message"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-brand">Send Message</button>
                    </div>
                </form>
            </div>
        </section>

@endsection