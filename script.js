
const projectDropdown = document.getElementById("projectDropdown");
const animateClasses = "col-md-6 side_area d-flex flex-column align-items-center" +
                        "justify-content-center pr-3 fade-text animate__animated animate__fadeInDown";

const option = {
    game: {
        id: "game-option",
        paragraph: document.getElementById("gameParagraph"),
        div: document.getElementById("gameApps")
    },
    mobile: {
        id: "mobile-option",
        paragraph: document.getElementById("mobileParagraph"),
        div: document.getElementById("mobileApps")
    }
};

function slideUpAnimation(elementId) {
    
}




function toggleHeaderDiv(toggle) {
    document.getElementById("header_block").style.display = String(toggle);
    document.getElementById("header_div").style.display = String(toggle);
}

function toggleElements(element, toggle) {
    element.div.style.display = String(toggle);
    element.paragraph.style.display = String(toggle);
}


function showGameApps() {
    toggleElements(option.mobile, "none");
    toggleElements(option.game, "block");
    toggleHeaderDiv("none");
    slideUpAnimation(option.game);
}

function showMobileApps() {
    toggleElements(option.mobile, "block");
    toggleElements(option.game, "none");
    toggleHeaderDiv("none");
    slideUpAnimation(option.mobile);
}


function toggleAllElements(option, toggle) {
    option.forEach(element => {
        toggleElements(element, toggle);
    });
}

toggleHeaderDiv("block");
toggleAllElements(Object.values(option), "none");

document.getElementById("about-me").addEventListener("click", function() {
    toggleHeaderDiv("block");
    toggleAllElements(Object.values(option), "none");
});

projectDropdown.addEventListener("change", function() {
    const selectedOption = projectDropdown.options[projectDropdown.selectedIndex];

    if (selectedOption.id === String(option.game.id)) {
        console.log("game");
        showGameApps();
    } else if (selectedOption.id == String(option.mobile.id)) {
        console.log("mobile");
        showMobileApps();
    } else {

    }
});
