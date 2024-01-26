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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&family=Inter&family=Inter+Tight:wght@400;600&display=swap');
    </style>
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
        <div class="contact_form">
            <?php
                // define variables and set to empty values
                $nameErr = $emailErr  = "";
                $name = $email = $message = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["name"])) {
                        $nameErr = "Name is required";
                    } else {
                        $name = test_input($_POST["name"]);
                        // check if name only contains letters and whitespace
                        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                        $nameErr = "Only letters and white space allowed";
                        }
                    }
                    
                    if (empty($_POST["email"])) {
                        $emailErr = "Email is required";
                    } else {
                        $email = test_input($_POST["email"]);
                        // check if e-mail address is well-formed
                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                        }
                    }

                    if (empty($_POST["message"])) {
                        $message = "";
                    } else {
                        $message = test_input($_POST["message"]);
                    }
                }

                function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                }
            ?>
                <h3>
                    <a class="anchorlink toggle" href="#contactformdiv">
                        Contact me!
                    </a>
                </h3>
                <div class="toggle-content" id="contactformdiv">
                    <p><span class="error">* required field</span></p>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
                    Name: <input type="text" name="name" value="<?php echo $name;?>">
                    <span class="error">* <?php echo $nameErr;?></span>
                    <br><br>
                    E-mail: <input type="text" name="email" value="<?php echo $email;?>">
                    <span class="error">* <?php echo $emailErr;?></span>
                    <br><br>
                    Message: <textarea name="message" rows="5" cols="40"><?php echo $message;?></textarea>
                    <br><br>
                    <button type="submit" name="submit">Submit</button>
                    </form>
                </div>
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
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            getQuote();
        });

        var text = new Blotter.Text("Brylle Ace Nuñez", {
            family: "Hedvig Letters Serif",
            size: 80,
            fill: "#000",
            paddingLeft: 90,
            paddingRight: 90,
            paddingTop: 50,
            paddingBottom: 50
        })
        var material = new Blotter.LiquidDistortMaterial()
        material.uniforms.uSpeed.value = 0.67
        material.uniforms.uVolatility.value = 0.11
        material.uniforms.uSeed.value = 0.1

        var blotter = new Blotter(material, {
            texts: text
        })

        var scope = blotter.forText(text);

        <!-- scope.appendTo(document.querySelector(".name")) -->

        // <!-- https://jsfiddle.net/cferdinandi/qgpxvhhb/18/ -->
        // Show an element
        // Function application Javascript
        // Listen for click events
        document.addEventListener('click', function (event) {

            // Make sure clicked element is our toggle
            if (!event.target.classList.contains('toggle')) return;

            // Prevent default link behavior
            event.preventDefault();

            // Get the content
            var content = document.querySelector(event.target.hash);
            if (!content) return;

            // Toggle the content
            toggle(content);
            console.log("clicked.")
        }, false);

        // Generate Blobs
        const rnd = (min, max) => Math.floor(Math.random() * (max - min + 1) + min);
        // const colors = ["#FD8A8A", "#FFACAC", "#952323", "#BF3131", "#FF7D7D"];
        const colors = ["#1738EA", "#2A0DA0", "#CFF5FE", "#304BB9", "#2C0A90"];
        const rndBorderRadius = () =>
        [...Array(4).keys()].map((x) => rnd(30, 85) + "%").join(" ") +
        " / " +
        [...Array(4).keys()].map((x) => rnd(30, 85) + "%").join(" ");

        const createBlob = ({ id, x, y, color }) => {
        const card = document.querySelector(".card");
        const blob = document.createElement("div");
        blob.id = `blob-${id}`;
        blob.classList.add("blob");
        blob.style.top = `${y}%`;
        blob.style.left = `${x}%`;
        blob.style.backgroundColor = color;
        blob.style.scale = rnd(1.25, 2);
        blob.style.borderRadius = rndBorderRadius();
        card.appendChild(blob);
        animateBlob(id);
        };

        const animateBlob = (id) => {
        anime({
            targets: `#blob-${id}`,
            translateX: () => `+=${rnd(-25, 25)}`,
            translateY: () => `+=${rnd(-25, 25)}`,
            borderRadius: () => rndBorderRadius(),
            rotate: () => rnd(-25, 25),
            opacity: () => rnd(0.4, 0.8),
            delay: () => rnd(0, 1000),
            scale: () => rnd(1.25, 2),
            // direction: 'alternate',
            // loop: 1,
            duration: 2000,
            easing: "linear",
            complete: (anim) => animateBlob(id)
            // complete: anim => { anim.restart(); },
        }).play();
        };

        const genBlobs = () => {
        const card = document.querySelector(".card");
        card.innerHTML = "";
        [...Array(25).keys()].map((id) => {
            const x = rnd(25, 75);
            const y = rnd(25, 75);
            const color = colors[rnd(0, colors.length)];
            createBlob({ x, y, color, id });
        });
        };

        genBlobs();

        // theme toggle
        const body = document.body;
        const themeToggleBtn = document.getElementById('themeToggleBtn');
        themeToggleBtn.addEventListener('click', () => {
        const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
          if (body.classList.contains('dark-mode') || prefersDarkMode) {
            themeToggleBtn.innerHTML = '☀️';
            themeToggleBtn.style.backgroundColor = '#ffffff';
            body.classList.remove('dark-mode');
          } else {
            themeToggleBtn.innerHTML = '🌙';
            themeToggleBtn.style.backgroundColor = '#1a1a1a';
            body.classList.add('dark-mode');
          }
        });

        const facts = [
            "Le Carnaval des Animaux, R. 125: 13. Le Cygne is the GOAT!",
            "My favorite Ghibli movie is Kiki's Delivery Service.",
            "I love Sinigang (except for the fish variant).",
            "I main Kled in League of Legends.",
            "The highest rank I got in LoL Diamond 4.",
            "I like Christmas Songs!",
            "My favorite season is summer.",
            "My favorite weather is sunny and windy! (NOT cloudy.)",
            "My favorite number is 43.",
            "I am was a big fan of Facebook MMOs.",
            "I code in Python, Go, C, and JavaScript!",
            "I idolize Steve Jobs.",
            "My TOTGA is De La Salle University.",
            "I love racing games -- especially Need for Speed: Carbon! 🏎️",
            "My favorite color is green and gray.",
            "Pasilyo is currently my favorite Filipino song.",
            "I dream of traveling to Italy. 🇮🇹",
            "I am at 900+ day streak on Duolingo! 😎",
            "My favorite TV shows are Modern Family and Family Guy.",
            "I'm a huge Apple fanboy. 🍎",
            "The first ever game I ever played on Android (circa 2010) was Angry Birds.",
            "The image above is the Apple Macintosh! 🖥️",
            "I am a transcendentalist. 🌳",
            "I love helping helpful critters like spiders and lizards. 🕷️",
        ]

        const generateFactBtn = document.getElementById('generateFactBtn');
        const fact = document.getElementById('fact');
        generateFactBtn.addEventListener('click', () => {
            const randomFact = facts[Math.floor(Math.random() * facts.length)];
            fact.innerHTML = randomFact;
        });

        const year = document.getElementById('year');
        year.innerHTML = new Date().getFullYear();

        // get a random quote in this: https://api.api-ninjas.com/v1/quotes?category=inspirational using async fetch
        const quote = document.getElementById('quote');
        const author = document.getElementById('author');
        const getQuote = async () => {
             const response = await fetch('https://api.api-ninjas.com/v1/quotes?category=inspirational', {
                headers: {
                    "X-Api-Key": "Pk8fIIwIp3IJ/9TgLgU7Nw==wviJHTTkNKoaW4s4"
                }
             });
            const data = await response.json();
            const randomQuote = data[Math.floor(Math.random() * data.length)];
            quote.innerHTML = randomQuote.quote;
            author.innerHTML = `by ${randomQuote.author}`;
        }
    </script>
    <style>
        /* make a variable root color */
        :root {
            --color: #1738EA;
        }
        body {
            margin: 0;
            padding: 0;
            user-select: none;
            transition: background-color 0.2s, color 0.2s;
        }
        #parent_ {
            padding-top: 128px;
            padding-bottom: 1rem;
            margin: auto;
            font-family: 'Inter Tight';
            max-width: 50vw;
        }

        div {
            margin: auto;
            /* max-width: 50vw; */
        }

        ul {
            list-style-type: none;
        }

        h1 {
            font-weight: 600;
        }

        .name-text {
            font-size: 2.4rem;
        }

        em {
            font-family: 'Hedvig Letters Serif';
        }

        blockquote {
            font-size: 1.2em;
            line-height: 1.2em;
        }
        
        blockquote:before {
          content: open-quote;
        }
        
        blockquote:after {
          content: close-quote;
        }
        
        blockquote:before,
        blockquote:after {
          display: inline-block;
          vertical-align: bottom;
          color: rgb(223, 223, 223);
          font-size: 4em;
          top: .2em;
          position: relative;
        }

        .quote_ {
            box-sizing: border-box;
            background-color: rgb(243, 243, 243);
            padding: 30px;
            border-radius: 8px;
            /* center the children */
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .toggle-content {
            display: none;
            height: 0;
            overflow: hidden;
            transition: height 350ms ease-in-out;
        }

        .toggle-content div {
            display: flex;
            justify-content: space-evenly;
        }

        .toggle-content div img {
            border-radius: 8px;
            object-fit: cover;
        }
        
        .toggle-content.is-visible {
            display: block;
            height: auto;
        }

        .anchorlink {
            color:var(--color);
        }

        .card {
        width: 50vw;
        height: 100vh;
        /* box-shadow: 0 7px 30px -10px rgba(150, 170, 180, 0.5);
        border-radius: 10px; */
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        /* overflow: hidden; */
        top: -99%;
        left: 20%;
        z-index: -99;
          /* -webkit-filter: contrast(20);
            filter: contrast(20); */
        }

        .card > .blob {
        background: var(--color);
        height: 12%;
        width: 20%;
        border-radius: 100%;
        filter: blur(15px);
          /* mix-blend-mode: multiply;
          mix-blend-mode: color; */
        position: absolute;
        }

        @media (prefers-color-scheme: light), (prefers-color-scheme: no-preference) {
            body {
              background-color: #ffffff;
              color: #000000;
            }
            button#themeToggleBtn {
                background-color: #1a1a1a;
                color: #ffffff;
                border: 1px solid #ffffff;
                border-radius: 7px;
                padding: 5px;
                font-size: 0.8rem;
                cursor: pointer;
                transition: background-color 0.2s, color 0.2s;
            }
          }
      
        @media (prefers-color-scheme: dark) {
            body {
              background-color: #1a1a1a;
              color: #ffffff;
            }
            .quote_ {
                background-color: #1a1a1a;
                color: #ffffff;
            }
            button#themeToggleBtn {
                background-color: #ffffff;
                color: #000000;
                border: 1px solid #1a1a1a;
                border-radius: 7px;
                padding: 5px;
                font-size: 0.8rem;
                cursor: pointer;
                transition: background-color 0.2s, color 0.2s;
            }
          }

          .dark-mode {
            background-color: #1a1a1a;
            color: #ffffff;
          }

          .dark-mode .quote_ {
            background-color: #1a1a1a;
            color: #ffffff;
          }

          button#themeToggleBtn {
            background-color: #ffffff;
            color: #000000;
            border: 1px solid #1a1a1a;
            border-radius: 7px;
            padding: 5px;
            font-size: 0.8rem;
            cursor: pointer;
            transition: background-color 0.2s, color 0.2s;
          }

         button#themeToggleBtn:hover {
            background-color: #1a1a1a;
            color: #ffffff;
         }

         .lighting-theme {
            display: flex;
            justify-content: flex-end;
         }

         .parent_sec__ {
            display: flex;
            justify-content: space-evenly;
         }

         .parent_sec__ .sec1 {
            flex-grow: 1;
         }

         .img-div {
            max-width: 100%;
         }

         .img-div img {
            width: 100%;
            height: 100%;
            /* put the img behind the body's background image without positioning as absolute */
            position: relative;
            z-index: -1;

         }

         .misc_ {
            display: grid;
            grid-template-columns: 50% 50%;
            width: 100%;
        }

        .misc_item {
            width: 100%;
        }

        .card-generate-facts {
            border: 1px solid var(--color);
            border-radius: 0.45rem;
            padding: 20px;
            width: 70%;
        }

        .card-generate-facts #fact {
            height: 2rem;
        }

        button {
            font-family: inherit;
            background-color: var(--color);
            color: #ffffff;
            border: 1px solid var(--color);
            border-radius: 7px;
            padding: 8px;
            font-size: 0.9rem;
            cursor: pointer;
            transition: background-color 0.2s, color 0.2s;
        }

        button:hover {
            background-color: #304BB9;
        }

        .footer {
            font-family: inherit;
            font-size: 0.95rem;
            text-align: center;
        }

        body {
            background-image: url(data:image/png;base64,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);
        }

        .error {
            color: crimson;
        }
    </style>
</html>