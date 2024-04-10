function closeNav() {
    var sidebar = document.getElementById("sidebar-wrapper");
    sidebar.style.transition = "width 222ms ease";
    sidebar.style.width = "8svw";
    sidebar.style.display = "block";

    var closebtn = document.getElementById("closebtn");
    closebtn.style.display = "none";
    // closebtn.style.transition = "all 222ms ease";
    closebtn.style.margin = "1rem 1rem 0.5rem auto";
    closebtn.style.fontSize = "2rem;";

    var openbtn = document.getElementById("openbtn");
    openbtn.style.display = "block";
    // openbtn.style.transition = "all 222ms ease";
    openbtn.style.margin = "2rem auto 1rem auto";
    openbtn.style.fontSize = "2rem;";

    var title = document.getElementById("title");
    document.getElementById("title").classList.add("title-toggle");

    var sidebarIcon = document.getElementById("sidebar-icon");
    document
        .getElementById("sidebar-icon")
        .classList.add("sidebar-icon-toggle");

    var title = document.getElementById("name");
    document.getElementById("name").classList.add("name-toggle");

    var links = document.getElementsByClassName("links");
    for (var i = 0; i < links.length; i++) {
        links[i].classList.add("link-toggle");
    }

    localStorage.setItem("sidebarState", "closed");
}

function openNav() {
    var sidebar = document.getElementById("sidebar-wrapper");
    sidebar.style.transition = "width 222ms ease";
    sidebar.style.display = "block";
    sidebar.style.maxWidth = "20svw";

    var dashboard = document.getElementById("dashboard");
    sidebar.style.width = "100%";

    var openbtn = document.getElementById("openbtn");
    openbtn.style.display = "none";
    // openbtn.style.transition = "all 222ms ease";
    openbtn.style.margin = "1rem 1rem 0.5rem auto";
    openbtn.style.fontSize = "2rem;";

    var closebtn = document.getElementById("closebtn");
    closebtn.style.display = "block";
    // closebtn.style.transition = "all 222ms ease";
    closebtn.style.margin = "1rem 1rem 0.5rem auto";
    closebtn.style.fontSize = "2rem;";

    var title = document.getElementById("title");
    document.getElementById("title").classList.remove("title-toggle");

    document
        .getElementById("sidebar-icon")
        .classList.remove("sidebar-icon-toggle");

    var title = document.getElementById("name");
    document.getElementById("name").classList.remove("name-toggle");

    var links = document.getElementsByClassName("links");
    for (var i = 0; i < links.length; i++) {
        links[i].classList.remove("link-toggle");
    }

    localStorage.setItem("sidebarState", "open");
}

function loadPage() {
    var sidebarState = localStorage.getItem("sidebarState");
    if (sidebarState === "open") {
        openNav();
        // document.getElementById("openbtn").style.display = "none";
    } else {
        closeNav();
    }
}
