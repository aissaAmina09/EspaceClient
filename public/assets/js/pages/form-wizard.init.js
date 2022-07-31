document.querySelector("#profile-img-file-input") && document.querySelector("#profile-img-file-input").addEventListener("change", function() {
    var e = document.querySelector(".user-profile-image"),
        t = document.querySelector(".profile-img-file-input").files[0],
        o = new FileReader;
    o.addEventListener("load", function() {
        e.src = o.result
    }, !1), t && o.readAsDataURL(t)
}), document.querySelectorAll(".form-steps") && document.querySelectorAll(".form-steps").forEach(function(l) {
    l.querySelectorAll(".nexttab") && l.querySelectorAll(".nexttab").forEach(function(t) {
        l.querySelectorAll('button[data-bs-toggle="pill"]').forEach(function(e) {
            e.addEventListener("show.bs.tab", function(e) {
                e.target.classList.add("done")
            })
        }), t.addEventListener("click", function() {
            var e = t.getAttribute("data-nexttab");
            document.getElementById(e).click()
        })
    }), l.querySelectorAll(".previestab") && l.querySelectorAll(".previestab").forEach(function(r) {
        r.addEventListener("click", function() {
            for (var e = r.getAttribute("data-previous"), t = r.closest("form").querySelectorAll(".custom-nav .done").length, o = t - 1; o < t; o++) r.closest("form").querySelectorAll(".custom-nav .done")[o] && r.closest("form").querySelectorAll(".custom-nav .done")[o].classList.remove("done");
            document.getElementById(e).click()
        })
    });
    var n = l.querySelectorAll('button[data-bs-toggle="pill"]');
    n && n.forEach(function(o, r) {
        o.setAttribute("data-position", r), o.addEventListener("click", function() {
            var e;
            o.getAttribute("data-progressbar") && (e = document.getElementById("custom-progress-bar").querySelectorAll("li").length - 1, e = r / e * 100, document.getElementById("custom-progress-bar").querySelector(".progress-bar").style.width = e + "%"), 0 < l.querySelectorAll(".custom-nav .done").length && l.querySelectorAll(".custom-nav .done").forEach(function(e) {
                e.classList.remove("done")
            });
            for (var t = 0; t <= r; t++) n[t].classList.contains("active") ? n[t].classList.remove("done") : n[t].classList.add("done")
        })
    })
});