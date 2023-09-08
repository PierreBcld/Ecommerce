function toggleNav() {
    let nav = document.querySelector('#myTopnav');
    if (nav.classname === "topnav") {
        nav.classList += " responsive";
    } else {
        nav.classList = "topnav";
    }
}