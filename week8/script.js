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