$(function () {

    let url = 'http://api.openweathermap.org/data/2.5/weather?id=2963905&units=metric&APPID=';
    let key = 'e8368e8bc7f7b7aff54fd8cb7a184839';

    axios.get(url + key).then(res => {

        let tempature = res.data.main.temp;
        let description = res.data.weather[0].description;
        $("#weather").html(
            `${description}<br><small>${tempature}°C </small>`
        );
    })

    // Determine if an element is in the visible viewport
    $.fn.isInViewport = function () {
        // check if element exists
        if ($(this).length === 0) {
            return false;
        }

        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();

        var viewportTop = $(window).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        return elementBottom > viewportTop && elementTop < viewportBottom;
    };

    //menu_dropdown
    $("#sights_dropdown").on("click", function () {
        $(".menu_dropdown").toggleClass('show_menu');
    });

    $('#close_menu').on('click', function () {
        $(".menu_dropdown").toggleClass('show_menu');
        $("#sights_dropdown").removeClass('is-active');
    })

    var instafeedHasExecuted = false;
    var instagramSearch = document.querySelector('.instafeed').innerText;
    $(".instafeed").load("Instagram.php?name=" + instagramSearch);

    // Parallax
    var scrollLoop = function () {
        var xScroll = window.pageYOffset;

        // INSTAFEED
        if (xScroll > 2000 && !instafeedHasExecuted) {
            // console.log(instagramSearch);
            $(".instafeed").load("Instagram.php?name=" + instagramSearch);
            instafeedHasExecuted = true;
        }

        // Only for screens larger than 768px
        if ($(window).width() > 767) {
            if ($("#top-image").isInViewport()) {
                $("#top-image").css({
                    transform: "translateY(" + xScroll / 10 + "px)"
                });
            }

            // Brandon Hill
            if ($("#brandon").isInViewport()) {
                $("#brandon")
                    .find("div")
                    .css({
                        transform: "translateY(" + xScroll / 22 + "px)"
                    });
            }

            // Duiske Abbey
            if ($("#duiske").isInViewport()) {
                $("#duiske")
                    .find("div")
                    .css({
                        transform: "translateY(" + xScroll / 22 + "px)"
                    });
            }

            // Tinnahinch CAstle
            if ($("#tinnahinch-castle").isInViewport()) {
                $("#tinnahinch-castle")
                    .find("div")
                    .css({
                        transform: "translateY(" + xScroll / 22 + "px)"
                    });
            }

            // Tinnahinch CAstle
            if ($("#silairewood, #riverbarrow").isInViewport()) {
                $("#silairewood, #riverbarrow")
                    .find("div")
                    .css({
                        transform: "translateY(" + xScroll / 20 + "px)"
                    });
            }
        } else {
            $("#top-image").css({
                transform: "translateY(0px)"
            });
            $("#brandon, #duiske, #tinnahinch-castle, #riverbarrow, #silairewood")
                .find("div")
                .css({
                    transform: "translateY(0px)"
                });
        }

        requestAnimationFrame(scrollLoop);
    };
    scrollLoop();

    // Show and hide upload form
    $(".submit-photo").on("click", function () {
        $("body").addClass("stop-scrolling");
        $(".overlay, .upload-form").show();
    });
    $("#cancel").on("click", function () {
        $("body").removeClass("stop-scrolling");
        $(".upload-form, .lightbox, .overlay").hide();
    });
    $(".overlay").on("click", function (e) {
        // Check if just the overlay is clicked
        if (e.target !== this) return;

        $("body").removeClass("stop-scrolling");
        $(".upload-form, .lightbox, .overlay").hide();
    });
    // Show File Path
    $(".fileContainer input").on("change", function () {
        $(".fileContainer p").text($(this).val());
    });

    // Lightbox ################################
    function getIndex(node) {
        var childs = node.parentNode.children;
        for (i = 0; i < childs.length; i++) {
            if (node == childs[i]) break;
        }
        return i;
    }

    // Add Left/Right buttons to lightbox
    $(".lightbox").html(`
        <div class="show-full-size-image"></div>
        <a class="next-image">
            <span>
                <svg width="24" height="24" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z" fill="#fff" /></svg>
            </span>
        </a>
        <a class="prev-image">
            <span>
                <svg width="24" height="24" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z" fill="#fff" /></svg>
            </span>
        </a>`);

    function renderDisplay(possition) {
        var image = $(".image-gallery ul")
            .children()
            .eq(possition);
        var src = image.find("img").attr("src"); // Image sorce
        var info = image.find("img").attr("alt"); // Image description
        var user = image.find("img").attr("user"); // Image description

        // if Name is equal to "Admin"
        if (user == "Admin" || user == "") {
            $(".show-full-size-image").html(
                `<img src="${src}" alt="${info}"><p class="info">${info}</p>`
            );
        } else {
            $(".show-full-size-image").html(
                `<img src="${src}" alt="${info}"><p class="info">${info}<br><small>uploaded by ${user}</small></p>`
            );
        }

        $("body").addClass("stop-scrolling");
        $(".lightbox, .overlay").show();
    }

    $(".image-gallery ul li").on("click", function () {
        var imagePossition = getIndex(this);
        var galleryLength = this.parentNode.children.length - 1;

        // Check if to show arrow buttons or not
        function showHideArrowButtons() {
            $(".prev-image, .next-image").show();
            // Hide Left arrow at the start
            if (imagePossition == 0) {
                $(".prev-image").hide();
            }
            // Hide Right arrow at the end
            if (imagePossition == galleryLength) {
                $(".next-image").hide();
            }
        }

        showHideArrowButtons();

        // Previous Image
        $(".prev-image").on("click", () => {
            if (imagePossition == 0) {
                return;
            }
            imagePossition--;
            showHideArrowButtons();
            renderDisplay(imagePossition);
        });

        // Next Image
        $(".next-image").on("click", () => {
            if (imagePossition == galleryLength) {
                return;
            }
            imagePossition++;
            showHideArrowButtons();
            renderDisplay(imagePossition);
        });

        renderDisplay(imagePossition);
    });

    // Show tooltip
    $(".fa-info-circle")
        .mouseover(function () {
            $(".tooltip").css("opacity", "1");
        })
        .mouseleave(function () {
            $(".tooltip").css("opacity", "0");
        });

});

// Hamburgers
var forEach = function (t, o, r) {
    if ("[object Object]" === Object.prototype.toString.call(t))
        for (var c in t) Object.prototype.hasOwnProperty.call(t, c) && o.call(r, t[c], c, t);
    else
        for (var e = 0, l = t.length; l > e; e++) o.call(r, t[e], e, t)
};
var hamburgers = document.querySelectorAll(".hamburger");
if (hamburgers.length > 0) {
    forEach(hamburgers, function (hamburger) {
        hamburger.addEventListener("click", function () {
            this.classList.toggle("is-active");
        }, false);
        hamburger.addEventListener("mouseenter", function () {
            this.classList.add("is-active");
        }, false);
        hamburger.addEventListener("mouseleave", function () {
            this.classList.remove("is-active");
        }, false);
    });
}

// Check if webP is supported
async function supportsWebp() {
    if (!self.createImageBitmap) return false;

    const webpData = 'data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=';
    const blob = await fetch(webpData).then(r => r.blob());
    return createImageBitmap(blob).then(() => true, () => false);
}

// Lazy images
let lazyImages = document.querySelectorAll(".lazy");

lazyImages.forEach(image => {
    let bigImage = document.createElement("img");

    bigImage.onload = function () {
        image.src = this.src;
    };

    setTimeout(() => {
        bigImage.src = [image.src.slice(0, -4), "_x2", image.src.slice(-4)].join("");
        image.classList = "";
    }, 50);
});

// Lazy Background images
let lazyBackgroundImages = document.querySelectorAll(".lazyBackground");
lazyBackgroundImages.forEach(image => {
    setTimeout(() => {

        if (supportsWebp()) {
            var folder = image.style.backgroundImage.slice(0, 12);
            var imageName = image.style.backgroundImage.slice(12, -6);

            image.style.backgroundImage = [folder, 'webp/', imageName, '_x2', '.webp")'].join('') + ", " + image.style.backgroundImage;

        } else {
            image.style.backgroundImage = [image.style.backgroundImage.slice(0, -6), "_x2", image.style.backgroundImage.slice(-6)].join("") + ", " + image.style.backgroundImage;
        }

    }, 50);
})

