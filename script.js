toggleGameElements("none");
toggleMobileElements("none");

const projectDropdown = document.getElementById("projectDropdown");
const animateClasses = "col-md-6 side_area d-flex flex-column align-items-center" +
                        "justify-content-center pr-3 fade-text animate__animated animate__fadeInDown";

const option = {
    game: "game-option",
    mobile: "mobile-option"
};

function slideUpAnimation(elementId) {

}



function toggleMobileElements(toggle) {
    var mobileDiv = document.getElementById("mobileApps");
    var mobileParagraph = document.getElementById("mobileParagraph");


    mobileDiv.style.display = String(toggle);
    mobileParagraph.style.display = String(toggle);
}

function toggleGameElements(toggle) {
    var gameDiv = document.getElementById("gameApps");
    var gameParagraph = document.getElementById("gameParagraph");

    gameDiv.style.display = String(toggle);
    gameParagraph.style.display = String(toggle);
}

function showGameApps() {
    toggleMobileElements("none");
    toggleGameElements("block");
    slideUpAnimation(option.game);
}

function showMobileApps() {
    toggleMobileElements("block");
    toggleGameElements("none");
    slideUpAnimation(option.mobile);
}

projectDropdown.addEventListener("change", function() {
    const selectedOption = projectDropdown.options[projectDropdown.selectedIndex];

    if (selectedOption.id === String(option.game)) {
        console.log("game");
        showGameApps();
    } else if (selectedOption.id == String(option.mobile)) {
        console.log("mobile");
        showMobileApps();
    } else {

    }
});
