// ===============================
// PUBLIC PORTFOLIO - DOM
// ===============================

const allProjectBtn = document.getElementById("allProjectBtn");
const hiddenProjects = document.querySelectorAll(".hidden-project");

let showingAll = false;

allProjectBtn.addEventListener("click", function () {

    if (showingAll === false) {

        hiddenProjects.forEach(function (project) {
            project.style.display = "flex";
        });

        allProjectBtn.textContent = "Show Less";
        showingAll = true;

    } else {

        hiddenProjects.forEach(function (project) {
            project.style.display = "none";
        });

        allProjectBtn.textContent = "View All";
        showingAll = false;
    }
});


// ===============================
// HALL OF CREATIONS BUTTON
// ===============================

const creationButton = document.querySelector(".creation-button");

creationButton.addEventListener("click", function (event) {

    event.preventDefault();

    alert("Hall of Creations akan segera dibuka ✨");
});


// ===============================
// SIMPLE PROFILE INTERACTION
// ===============================

const profilePhoto = document.querySelector(".profile-photo");

profilePhoto.addEventListener("click", function () {

    profilePhoto.style.transform = "scale(1.05)";

    setTimeout(function () {
        profilePhoto.style.transform = "scale(1)";
    }, 200);
});

// ===============================
// DARK / LIGHT MODE
// ===============================

const themeButton = document.getElementById("themeButton");

themeButton.addEventListener("click", function () {

    document.body.classList.toggle("dark-mode");


    // Cek apakah dark mode sedang aktif

    if (document.body.classList.contains("dark-mode")) {

        themeButton.textContent = "☀️";

    } else {

        themeButton.textContent = "🌙";

    }

});

// ===============================
// MUSIC BUTTON
// ===============================

const musicButton = document.getElementById("musicButton");

const backgroundMusic =
    document.getElementById("backgroundMusic");


musicButton.addEventListener("click", function () {

    if (backgroundMusic.paused) {

        backgroundMusic.play();

        musicButton.classList.add("playing");

        musicButton.textContent = "♫";

    } else {

        backgroundMusic.pause();

        musicButton.classList.remove("playing");

        musicButton.textContent = "♪";

    }

});

// ===============================
// FALLING FLOWERS
// ===============================

const flowerContainer =
    document.getElementById("flower-container");

const flowerSymbols = [
    "✿",
    "❀",
    "✾",
    "🌸"
];


function createFlower() {

    const flower = document.createElement("span");

    flower.classList.add("flower");

    // Pilih bunga secara random
    flower.textContent =
        flowerSymbols[
            Math.floor(
                Math.random() * flowerSymbols.length
            )
        ];


    // Posisi random
    flower.style.left =
        Math.random() * 100 + "vw";


    // Ukuran random
    const size =
        Math.random() * 10 + 10;

    flower.style.fontSize =
        size + "px";


    // Kecepatan random
    const duration =
        Math.random() * 5 + 5;

    flower.style.animationDuration =
        duration + "s";


    // Transparansi random
    flower.style.opacity =
        Math.random() * 0.4 + 0.3;


    flowerContainer.appendChild(flower);


    // Hapus bunga setelah selesai
    setTimeout(function () {

        flower.remove();

    }, duration * 1000);

}


// Membuat bunga setiap beberapa saat

setInterval(createFlower, 500);