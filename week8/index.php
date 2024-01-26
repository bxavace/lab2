<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brylle Ace</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Blotter/0.1.0/blotter.min.js" integrity="sha512-Na4qwz8+Hb6JAVf8zFKtPri3XX/Z9/drSpFQuA9hUDnSYLFuu+GU0sfyDYw0SIUkvo/gSw//hCW/CjFJmIIc4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Blotter/0.1.0/materials/liquidDistortMaterial.min.js" integrity="sha512-GrkvJ9sGocxZwnbbhWFPlMxIeFz6pJFZ3I3CFUpn7o7v8hROUyXxfgyB6bLYM8Z8W5J1e5Z91Y/PbNBpjhufCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.2/anime.min.js" integrity="sha512-aNMyYYxdIxIaot0Y1/PLuEu3eipGCmsEUBrUq+7aVyPGMFH8z0eTP0tkqAvv34fzN6z+201d3T8HPb1svWSKHQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="bg-noise"></div>
    <div id="parent_">
        <div class="nav">
        </div>
        <div class="lighting-theme">
            <button id="themeToggleBtn">
                ☀️
            </button>
        </div>
        <div class="parent_sec__">
            <div class="sec1">
                <div>
                    <div class="name"></div>
                    <!-- An application of PHP concepts (1 commit): variables, conditionals, operations, date, echo. -->
                    <?php 
                        // get current hour
                        date_default_timezone_set('Asia/Hong_Kong');
                        $date = date("H");
                        if ($date < "12") {
                            echo "<p class='about-text'>Buon giorno! 🌞</p>";
                        } else
                        if ($date >= "12" && $date < "17") {
                            echo "<p class='about-text'>Buon pomeriggio! 🌤️</p>";
                        } else
                        if ($date >= "17" && $date < "19") {
                            echo "<p class='about-text'>Buona sera! 🌇</p>";
                        } else
                        if ($date >= "19") {
                            echo "<p class='about-text'>Buona notte! 🌙</p>";
                        }
                    ?>
                    <h1 class="name-text">Brylle Ace Nuñez</h1>
                    <p class="about-text-name">is a <em>back-end developer</em>, <em>researcher</em>, and <em>computer science student</em>.<img src="img/flag.gif" alt="ph" width="35px" style="display: inline;"/></p>
                </div>
                <div>
                    <p>Computer Science '26 @ Asia Pacific College 🐏</p>
                    <h3>Interests</h3>
                    <ul>
                        <li>Back-end Development</li>
                        <li>Research</li>
                        <li>Machine Learning</li>
                        <li>Distributed Computing</li>
                        <li>Physics!</li>
                    </ul>
                </div>
            </div>
            <div class="sec2">
                <div class="img-div">
                    <!-- <img src="img/pngtree-statue-of-marcus-aurelius-vintage-illustration-statue-sitting-illu-vector-picture-image_10154516.png" alt="statue" style="position: absolute; width: 20%; opacity: 0.4; right: 30%; top: 10%;"> -->
                    <!-- <img src="img/1200px-Michelangelo's_Pieta_5450_cut_out.png" alt="Pieta"> -->
                    <img src="img/giphy.gif" alt="I'm an apple fanboy.">
                </div>
            </div>
        </div>
        <hr>
        <div>
            <h3>Why computer science?</h3>
            <p>
                Playing with various gaming devices and computers filled my childhood.
                <br>
                Limited by an old Pentium with 4GB of RAM, I learned to optimize my PC, mastering the art of squeezing modern games onto its shoulders. 
                <br>
                This early struggle sparked my passion for computer science, where I continue to seek creative solutions to complex problems.
            </p>
            <h3>Why digital forensics?</h3>
            <p>
                Job prospects of cyber security seems very promising, so I decided to major in cyber
security.
                <br>
                <a href="https://xkcd.com/2176/" class="anchorlink"><em>Hacking</em></a> has always been a fascinating topic for me, and I want to learn more about it. Ever come across the <a class="anchorlink" href="https://www.youtube.com/watch?v=12d2zHtrhHU&pp=ygUVY2hlYXQgZW5naW5lIGZhY2Vib29r">cheat engine</a> era?
                <br>
                Besides, working with back-end systems is a lot of <em>fun</em>. And back-end involves a lot of security!
            </p>
            <div class="misc_">
                <div class="misc_item">
                    <h3>Miscellaneous</h3>
                    <p>
                        I like to listen to tranquil classical music while working. I onced played guitar, and now I'm interested in playing the piano and violin! I play <em>League of Legends</em> in my free time. I also like to read non-fiction and fiction books. I also hit the gym (hmu please.)!
                    </p>
                </div>
                <div class="misc_item">
                    <div class="card-generate-facts">
                        <h3>Fun Facts</h3>
                        <p id="fact">Wanna know more about me?</p>
                        <button id="generateFactBtn">Generate</button>
                    </div>
                </div>
            </div>
            <div>
                <h3>Now playing...</h3>
                <!-- <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/3CtnuBSfdpoxHglOGGPgmU?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe> -->
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2LlOeW5rVcvl3QcPNPcDus?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                <!-- <span>Not loading? <a class="anchorlink" href="https://open.spotify.com/track/3CtnuBSfdpoxHglOGGPgmU?si=8e9e9e9e9e9e9e9e" target="_blank">Yasashisa ni Tsutsumareta Nara is the outro song in Kiki's Delivery Service composed and performed by Yumi Arai.</a></span> -->
                <span>Not loading? <a class="anchorlink" href="https://open.spotify.com/track/2LlOeW5rVcvl3QcPNPcDus?si=0855f44ebddf4507">Play it in spotify!</a></span>
            </div>
            <!-- <h3>Favorite Paolo Coelho Quote</h3>
            <div class="quote_">
                <blockquote>
                    <em>People never learn anything by being told, they have to find out for themselves.</em>
                </blockquote>
            </div> -->

            <h3>Random Quote</h3>
            <div class="quote_">
                <div>
                    <blockquote>
                        <em id="quote"></em>
                    </blockquote>
                </div>
                <div id="author"></div>
            </div>
        <h3>
            <a class="anchorlink toggle" href="#dogs">Click me, if you dare!</a>
        </h3>
        <div class="toggle-content" id="dogs">
            <div>
                <figure>
                    <img src="img/dalden.jpg" alt="Dalden" width="300px" height="500px">
                    <figcaption><em>Dalden</em> said hi!</figcaption>
                </figure>
                <figure>
                    <img src="img/temtem.jpg" alt="Temtem" width="300px" height="500px">
                    <figcaption><em>Temtem</em> said hi!</figcaption>
                </figure>
            </div>
        </div>
        <div class="gifcities">
            <!-- array lesson - php -->
            <?php 
                $gifs = array("img/macintoshwks.gif","img/Site-07_microsoft.gif", "img/BestViewedOnMacintosh_ani.gif", "img/msce.gif", "img/sonic.gif", "img/Killer_Virus.gif", "img/I_Google.gif", "img/googleeye.gif", "img/software_programmer.gif");
                foreach ($gifs as $gif) {
                    echo "<img src='$gif' alt='gif'>";
                }
            ?>
        </div>
        <div class="footer">
            made with <span style="color: var(--color);">❤️</span> by <a class="anchorlink" href="https://github.com/bxavace" target="_blank">Brylle Ace Nuñez</a> &copy; <span id="year"></span>
        </div>
    </div>
    <div class="card">
        <!-- <div class="blob"></div> -->
    </div>
    </body>
    <script src="slide.js"></script>
    <script src="script.js"></script>
</html>