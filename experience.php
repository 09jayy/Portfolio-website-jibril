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

    <title>JIBRIL - Experience</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/experience.css">
    <link rel="stylesheet" href="css/mobile/mobile-experience.css">


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
                <li><a href=" experience.php">Experience</a></li>
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
                <figcaption>EXPERIENCE</figcaption>
            </figure>
        </div>

        <section>
            <article class="experience-card">
                <h1>Microsoft EMBRACE Hackathon: Azure Challenge</h1>
                <div class="header-card">
                    <h2>Microsoft</h2>
                    <h3>March 2024</h3>
                </div>
                <p>
                    Participated in developing an AI Sign Language model while also utilising Microsofts Azure OpenAI
                    API for text to sign language translation working on the text-to-sigML branch.
                </p>
            </article>

            <article class="experience-card">
                <h1>Waiter / Front of House</h1>
                <div class="header-card">
                    <h2>KPOP Restaurant London</h2>
                    <h3>July 2022 - September 2023</h3>
                </div>
                <p>
                    Decision-making and adaptability were imperative working in a restaurant and takeaway due to the
                    great quantity of customers, this required tracking new orders while considering previous ones to
                    ensure consistent workflow but also prioritising customer satisfaction. Techniques such as a mental
                    priority list were imperative to remain composed during the busy hours. Patience and optimism were
                    essential when tackling difficulties to not escalate the situations further. It was imperative to
                    sustain effective communication consistent synchrony. Effective cash handling and payment
                    processing.
                </p>
            </article>

            <article class="experience-card">
                <h1>IT Technician Assistant</h1>
                <div class="header-card">
                    <h2>One World Rental</h2>
                    <h3>May 2022 - July 2022</h3>
                </div>
                <p>
                    Responsible for simultaneously configuring numerous amounts of electronic devices (iPads, laptops)
                    for events. Learned to organise the deliveries using strategic sorting and tracking methods. Lead
                    teams to efficiently complete large-scale tasks by distributing workload based on the strengths of
                    my peers. Required constant brainstorming to accelerate completion time for better time management,
                    achieved by finding quicker alternative techniques without sacrificing quality.
                </p>
            </article>

            <article class="experience-card">
                <h1>Tech Support <span class="subtitle">@ Kornit Fashion Show</span></h1>
                <div class="header-card">
                    <h2>One World Rental</h2>
                    <h3>May 2022</h3>
                </div>
                <p>
                    Successfully managed a team to configure hundreds of Virtual Reality headsets in preparation for the
                    fashion show event party. Troubleshooting using testing various methods required patience and
                    resilience until a solution was found. During the show, I educated my co-workers and attendees on
                    the equipment and initiating the headsets for customers.
                </p>
            </article>

            <article class="experience-card">
                <h1>UK Space Design Competition</h1>
                <div class="header-card">
                    <h2>UK - Space Design Competition</h2>
                    <h3>October 2022</h3>
                </div>
                <p>
                    Lead the automations team to design a space station to be situationed on a fictional planet.
                    Distrubted tasks among my team focusing on the automated aspects of the space station such as
                    ventilation, artifical gravity, repair, transport etc. Finally, presented out design along with all
                    the calculations and estimated cost also justifying design choices.
                </p>
            </article>

            <article class="experience-card">
                <h1>Charity Shop Volunteer</h1>
                <div class="header-card">
                    <h2>Haven House Charity Shop</h2>
                    <h3>March 2022 - May 2022</h3>
                </div>
                <p>
                    Maintaining knowledgeable about the retail space and principles were significant while volunteering
                    to ensure quality of clothing and service. Swiftly learned the criteria for a profitable item to
                    decide whether it can be sold. Ensured the shop floor was tidy so that clothing was sorted by
                    colour, fit, age etc. Speed and efficiency were key, so I practised my folding, cash machine and
                    packaging skills to remain efficient and not waste time in front of customers. Was also responsible
                    for security to stop shoplifters and thieves.
                </p>
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