"use strict";
!(function () {
    if (
        ($(".dropdown-menu a.dropdown-toggle").length &&
            $(".dropdown-menu a.dropdown-toggle").on("click", function (e) {
                return (
                    $(this).next().hasClass("show") ||
                        $(this)
                            .parents(".dropdown-menu")
                            .first()
                            .find(".show")
                            .removeClass("show"),
                    $(this).next(".dropdown-menu").toggleClass("show"),
                    $(this)
                        .parents("li.nav-item.dropdown.show")
                        .on("hidden.bs.dropdown", function (e) {
                            $(".dropdown-submenu .show").removeClass("show");
                        }),
                    !1
                );
            }),
        $("#nav-toggle").length &&
            $("#nav-toggle").on("click", function (e) {
                e.preventDefault(), $("#main-wrapper").toggleClass("toggled");
            }),
        $('[data-bs-toggle="tooltip"]').length)
    )
        [].slice
            .call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            .map(function (e) {
                return new bootstrap.Tooltip(e);
            });
    if ($('[data-bs-toggle="popover"]').length)
        [].slice
            .call(document.querySelectorAll('[data-bs-toggle="popover"]'))
            .map(function (e) {
                return new bootstrap.Popover(e);
            });
    if ($(".toast").length)
        [].slice.call(document.querySelectorAll(".toast")).map(function (e) {
            return new bootstrap.Toast(e);
        });
    if ($(".offcanvas").length)
        [].slice
            .call(document.querySelectorAll(".offcanvas"))
            .map(function (e) {
                return new bootstrap.Offcanvas(e);
            });
    if ($("#editor").length)
        new Quill("#editor", {
            modules: {
                toolbar: [
                    [{ header: [1, 2, !1] }],
                    [{ font: [] }],
                    ["bold", "italic", "underline", "strike"],
                    [{ size: ["small", !1, "large", "huge"] }],
                    [{ list: "ordered" }, { list: "bullet" }],
                    [{ color: [] }, { background: [] }, { align: [] }],
                    ["link", "image", "code-block", "video"],
                ],
            },
            theme: "snow",
        });
    if (
        ($(".flatpickr").length &&
            flatpickr(".flatpickr", { disableMobile: !0 }),
        $(".file-input").length &&
            $(".file-input").change(function () {
                var e = $(this).parent().parent().find(".image");
                console.log(e);
                var t = new FileReader();
                (t.onload = function (t) {
                    e.attr("src", t.target.result);
                }),
                    t.readAsDataURL(this.files[0]);
            }),
        $(".product").length)
    )
        tns({
            container: "#product",
            items: 1,
            startIndex: 1,
            navContainer: "#product-thumbnails",
            navAsThumbnails: !0,
            autoplay: !1,
            autoplayTimeout: 1e3,
            swipeAngle: !1,
            speed: 400,
            controls: !1,
        });
    if (
        ($("#checkAll").length &&
            $("#checkAll").on("click", function () {
                $("input:checkbox").not(this).prop("checked", this.checked);
            }),
        $("#do").length &&
            dragula([
                document.querySelector("#do"),
                document.querySelector("#progress"),
                document.querySelector("#review"),
                document.querySelector("#done"),
            ]),
        $("#invoice").length &&
            $("#invoice")
                .find(".print-link")
                .on("click", function () {
                    $.print("#invoice");
                }),
        $(".sidebar-nav-fixed a").length &&
            $(".sidebar-nav-fixed a").on("click", function (e) {
                if (
                    location.pathname.replace(/^\//, "") ==
                        this.pathname.replace(/^\//, "") &&
                    location.hostname == this.hostname
                ) {
                    var t = $(this.hash);
                    (t = t.length ? t : $("[name=" + this.hash.slice(1) + "]"))
                        .length &&
                        (e.preventDefault(),
                        $("html, body").animate(
                            { scrollTop: t.offset().top - 90 },
                            1e3,
                            function () {
                                var e = $(t);
                                if ((e.focus(), e.is(":focus"))) return !1;
                                e.attr("tabindex", "-1"), e.focus();
                            }
                        ));
                }
                $(".sidebar-nav-fixed a").each(function () {
                    $(this).removeClass("active");
                }),
                    $(this).addClass("active");
            }),
        $("#liveAlertPlaceholder").length)
    ) {
        var e = document.getElementById("liveAlertPlaceholder"),
            t = document.getElementById("liveAlertBtn");
        t &&
            t.addEventListener("click", function () {
                var t, n, o;
                (t = "Nice, you triggered this alert message!"),
                    (n = "success"),
                    ((o = document.createElement("div")).innerHTML =
                        '<div class="alert alert-' +
                        n +
                        ' alert-dismissible" role="alert">' +
                        t +
                        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'),
                    e.append(o);
            });
    }
    if ($("input[name=tags]").length) {
        var n = document.querySelector("input[name=tags]");
        new Tagify(n);
    }
})(),
    feather.replace();

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
