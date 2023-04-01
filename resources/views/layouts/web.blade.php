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
                            <a class="nav-link scrollto px-lg-4" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scrollto px-lg-4" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scrollto px-lg-4" href="#porto">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scrollto px-lg-4" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

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

        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/typed.js/typed.min.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/app.js"></script>
    </body>
</html>