document.addEventListener("livewire:navigated", () => {
    $("#nav-toggle").length &&
        $("#nav-toggle").on("click", function (e) {
            e.preventDefault(), $("#main-wrapper").toggleClass("toggled");
        });

    const toggleSwitch = document.querySelector(
        'body .theme-switch input[type="checkbox"]'
    );
    const currentTheme = localStorage.getItem("theme");

    function switchTheme(e) {
        e.target.checked
            ? (document.documentElement.setAttribute("data-theme", "dark"),
              localStorage.setItem("theme", "dark"))
            : (document.documentElement.setAttribute("data-theme", "light"),
              localStorage.setItem("theme", "light"));
    }
    currentTheme &&
        (document.documentElement.setAttribute("data-theme", currentTheme),
        "dark" === currentTheme && (toggleSwitch.checked = !0)),
        toggleSwitch.addEventListener("change", switchTheme, !1);
});
