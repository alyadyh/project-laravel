<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>alya's blog</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="../resources/css/app.css" >
    </head>
    <body data-bs-spy="scroll" data-bs-target=".navbar">

        <!-- NAVBAR -->
         <nav class="navbar fixed-top py-3 navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Alya Dhiya.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link px-lg-4" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-lg-4" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-lg-4" href="#porto">Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-lg-4" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

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

        <div class="container divider"></div>   

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

        <div class="container divider"></div>

        <!-- PORTOFOLIO -->
        <section id="porto">
            <div class="container">
                <div class="intro row">
                    <div class="col-12 intro">
                        <h1>Check Out <span>My Portofolio.</span></h1>
                    </div>                    
                </div>
            </div>
        </section>

        <div class="container divider"></div>

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

        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
        
        <!-- about tab-content -->
        <script>
            var tablinks = document.getElementsByClassName("tab-links");
            var tabcontents = document.getElementsByClassName("tab-contents");
            function opentab(tabname){
                for(tablink of tablinks){
                    tablink.classList.remove("active-link");
                }
                for(tabcontent of tabcontents){
                    tabcontent.classList.remove("active-tab");
                }
                event.currentTarget.classList.add("active-link");
                document.getElementById(tabname).classList.add("active-tab");
            }
        </script>
        
        <!-- about tab-arrow-accordion -->
        <script>
            const skillsContent = document.getElementsByClassName('skills-contents'),
                skillsHeader = document.querySelectorAll('.skills-header');

            function toggleSkills(){
                let itemClass = this.parentNode.ClassName;

                for(i = 0; i < skillsContent.length; i++){
                    skillsContent[i].className = 'skills-contents skills-close';
                }
                if(itemClass === 'skills-contents skills-close'){
                    this.parentNode.className = 'skills-contents skills-open';
                }
            }

            skillsHeader.forEach((el) => {
                el.addEventListener('click', toggleSkills());
            });
        </script>
    </body>
</html>