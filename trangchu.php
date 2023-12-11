<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello</title>

    <script src="https://kit.fontawesome.com/5eb2c51ffb.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style_Css.css" />
   
</head>

<body>
    <nav id="navbar" class="nav">
        <ul>
            <li>
                <a href="#welcome-section">About</a>
            </li>
            <li>
                <a href="#projects">Work</a>
            </li>
           
        </ul>
    </nav>


    <!-- Second Section-->

    <section id="welcome-section">
        <h1>Hey I'm Hoang Tuan Anh</h1>
        <p><i>A second-year student majoring in IT in the High-Quality Program.</i></p>
    </section>

    <section id="projects" class="project-section">
        <h2 class="projects-section-header">My Project's</h2>

        <div class="projects-grid">
            <a href="giaodien.php" target="_blank" class="project project-tile-personal">
                <img class="project-image"
                    src="./image/me.jpg" alt="project" />
                <p class="project-title">
                   
                Introduce yourself (Landing Page)

                </p>
            </a>

            <a href="" target="_blank" class="project project-tile">
                <img class="project-image"
                    src="./image/bac.png"
                    alt="project" />
                <p class="project-title">
                    Thanh Hoa tour web


                </p>
            </a>

            <a href="" target="_blank" class="project project-tile">
                <img class="project-image"
                    src="./image/pr3.png" alt="project" />
                <p class="project-title">

                    Landing Page

                </p>
            </a>

          

            <a href="login.html" target="_blank" class="project project-tile">
                <img class="project-image"
                    src="./image/pr4.png"
                    alt="project" />
                <p class="project-title">

                   Login web 

                </p>
            </a>

            <a href="" target="_blank" class="project project-tile">
                <img class="project-image"
                    src="./image/pr5.png"
                    alt="project" />
                <p class="project-title">

                    Skill Swap (developing)

                </p>
            </a>
            <a href="hello.php" target="_blank" class="project project-tile">
                <img class="project-image"
                    src="./image/pr6.png"
                    alt="project" />
                <p class="project-title">

                Let's be friends

                </p>
            </a>

        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Hoang Tuan Anh - Personal Landing Page. </p>
        </div>
    </footer>


</body>

</html>