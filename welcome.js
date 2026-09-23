// ================================
// ELEMENT DOM
// ================================

const exploreButton = document.getElementById("exploreButton");

const welcomePage = document.querySelector(".welcome-page");

const loadingScreen = document.getElementById("loadingScreen");

const loadingProgress = document.getElementById("loadingProgress");


// ================================
// EXPLORE BUTTON
// ================================

exploreButton.addEventListener("click", function () {

    // Welcome Page menghilang
    welcomePage.classList.add("exit");

    // Loading muncul
    loadingScreen.classList.add("show");

    let progress = 0;


    // Loading progress
    const loading = setInterval(function () {

        progress += 2;

        loadingProgress.style.width = progress + "%";


        // Kalau sudah selesai
        if (progress >= 100) {

            clearInterval(loading);

            setTimeout(function () {

                // Masuk ke portfolio
                window.location.href = "welcome.html";

            }, 300);

        }

    }, 25);

});