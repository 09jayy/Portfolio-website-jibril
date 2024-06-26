<?php

session_start();

include ("php/connection.php");
include ("php/loginButton.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JIBRIL - Education</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/education.css">
    <link rel="stylesheet" href="css/mobile/mobile-education.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kode+Mono:wght@400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header>
        <h1 id="logo">J I B R I L</h1>
        <nav>
            <ul>
                <li><a href="index.php">About</a></li>
                <li><a href="skills.php">Skills</a></li>
                <li><a href="experience.php">Experience</a></li>
                <li><a href="education.php">Education</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="viewBlog.php">Blog</a></li>
            </ul>
        </nav>
        <a href="<?php echo $login['link'] ?>" id="login">
            <?php echo $login['status']; ?>
        </a>
    </header>

    <div id="container">
        <div id="page-header">
            <figure>
                <img src="images/coding-background-use.jpg">
                <figcaption>EDUCATION</figcaption>
            </figure>
        </div>

        <section>
            <article class="school">
                <div class="visuals">
                    <div class="circle"></div>
                    <div class="dashed-line"></div>
                </div>
                <div class="info">
                    <div class="card-header">
                        <h1>Queen Mary University of London</h1>
                        <h2>BSc - Computer Science</h2>
                        <h3>September 2023 - Present</h3>
                    </div>
                    <div class="content">
                        <p>
                            Grades: Pending
                        </p>
                    </div>
                </div>
            </article>

            <article class="school">
                <div class="visuals">
                    <div class="circle"></div>
                    <div class="dashed-line"></div>
                </div>
                <div class="info">
                    <div class="card-header">
                        <h1>Beal Sixth Form</h1>
                        <h2>A-level - Mathematics, Computer Science, Psychology</h2>
                        <h3>September 2021 - July 2023</h3>
                    </div>
                    <div class="content">
                        <p>
                            Grades: A A A
                        </p>
                    </div>
                </div>
            </article>

            <article class="school">
                <div class="visuals">
                    <div class="circle"></div>
                    <div class="dashed-line"></div>
                </div>
                <div class="info">
                    <div class="card-header">
                        <h1>Beal High School</h1>
                        <h2>GCSEs</h2>
                        <h3>September 2019 - July 2021</h3>
                    </div>
                    <div class="content">
                        <p>
                            Grades: A 8 8 8 8 8 8 8 6 6 6
                        </p>
                    </div>
                </div>
            </article>
        </section>

        <footer>
            <div id="footer-links">
                <article id="socials">
                    <h1>Socials</h1>
                    <ul>
                        <li><img src="images/github.png"><a href="https://github.com/jibril0912" target="_blank">
                                <p>Github</p>
                            </a></li>
                        <li><img src="images/linkedin.png"><a
                                href="https://www.linkedin.com/in/jibril-hairulzihan-89b91a294/" target="_blank">
                                <p>Linkedin</p>
                            </a></li>
                    </ul>
                </article>
                <article id="contact">
                    <h1>Contact</h1>
                    <ul>
                        <li><img src="images/email.png">
                            <p>jibril.hairulzihan@outlook.com</p>
                        </li>
                        <li><img src="images/phone.png">
                            <p>+44 7456 029915</p>
                        </li>
                    </ul>
                </article>
            </div>
            <article id="license">
                &copy Jibril Hairulzihan 2024
            </article>
        </footer>
    </div>
</body>

</html>