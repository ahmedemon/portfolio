// $(document).ready(function(){
//   $(".owl-carousel").owlCarousel();
// });

$('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    })
    // $('.owl-carousel').owlCarousel({
    //     items:1,
    //     margin:10,
    //     autoHeight:true
    // });


$(function() {
    // $(window).on("scroll", function() {
    //     if ($(window).scrollTop() > 200) {
    //         $(".navbar").addClass("active1");
    //     } else {
    //         //remove the background property so it comes transparent again (defined in your css)
    //         $(".navbar").removeClass("active1");
    //     }
    // });

    // $(window).on("scroll", function() {
    //     if ($(window).scrollTop() > 200) {
    //         $(".nav_menu a").addClass("active2");
    //     } else {
    //         $(".nav_menu a").removeClass("active2");
    //     }
    // });

    // $(window).on("scroll", function() {
    //     if ($(window).scrollTop() > 200) {
    //         $(".site_name").addClass("name1");
    //     } else {
    //         $(".site_name").removeClass("name1");
    //     }
    // });

    // $(window).on("scroll", function() {
    //     if ($(window).scrollTop() > 200) {
    //         $(".lni-menu").addClass("lnimenu2");
    //     } else {
    //         $(".lni-menu").removeClass("lnimenu2");
    //     }
    // });

    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 200) {
            $(".navbar-toggler").addClass("navbar-toggler2");
        } else {
            $(".navbar-toggler").removeClass("navbar-toggler2");
        }
    });
});

// -----------------------------------------------------------------------------
// color changer


// success and dark
$(document).ready(function() {
    $(".successB").click(function() {
        $(".link_animated").addClass("success");
        $(".sidebar").addClass("success");
        $(".card-footer").addClass("success");
    });
    $(".darkB").click(function() {
        $(".link_animated").removeClass("success");
        $(".sidebar").removeClass("success");
        $(".card-footer").removeClass("success");
    });
});
// success and dark


// white and success
$(document).ready(function() {
    $(".successB").click(function() {
        $(".link_animated").addClass("success");
        $(".sidebar").addClass("success");
        $(".card-footer").addClass("success");
    });
    $(".whiteB").click(function() {
        $(".link_animated").removeClass("success");
        $(".sidebar").removeClass("success");
        $(".card-footer").removeClass("success");
    });
});
// white and success

// danger
$(document).ready(function() {
    $(".dangerB").click(function() {
        $(".link_animated").addClass("danger");
        $(".sidebar").addClass("danger");
        $(".card-footer").addClass("danger");
    });
    $(".darkB").click(function() {
        $(".link_animated").removeClass("danger");
        $(".sidebar").removeClass("danger");
        $(".card-footer").removeClass("danger");
    });
    $(".warningB").click(function() {
        $(".link_animated").removeClass("danger");
        $(".sidebar").removeClass("danger");
        $(".card-footer").removeClass("danger");
    });
    $(".successB").click(function() {
        $(".link_animated").removeClass("danger");
        $(".sidebar").removeClass("danger");
        $(".card-footer").removeClass("danger");
    });
    $(".whiteB").click(function() {
        $(".link_animated").removeClass("danger");
        $(".sidebar").removeClass("danger");
        $(".card-footer").removeClass("danger");
    });
});
// danger


// tomato and dark
$(document).ready(function() {
    $(".tomatoB").click(function() {
        $(".link_animated").addClass("tomato");
        $(".sidebar").addClass("tomato");
        $(".card-footer").addClass("tomato");
    });
    $(".darkB").click(function() {
        $(".link_animated").removeClass("tomato");
        $(".sidebar").removeClass("tomato");
        $(".card-footer").removeClass("tomato");
    });
    $(".warningB").click(function() {
        $(".link_animated").removeClass("tomato");
        $(".sidebar").removeClass("tomato");
        $(".card-footer").removeClass("tomato");
    });
    $(".successB").click(function() {
        $(".link_animated").removeClass("tomato");
        $(".sidebar").removeClass("tomato");
        $(".card-footer").removeClass("tomato");
    });
    $(".whiteB").click(function() {
        $(".link_animated").removeClass("tomato");
        $(".sidebar").removeClass("tomato");
        $(".card-footer").removeClass("tomato");
    });
    $(".dangerB").click(function() {
        $(".link_animated").removeClass("tomato");
        $(".sidebar").removeClass("tomato");
        $(".card-footer").removeClass("tomato");
    });
});

// tomato and dark

$(document).ready(function() {
    $(".blueB").click(function() {
        $(".link_animated").addClass("blue");
        $(".sidebar").addClass("blue");
        $(".card-footer").addClass("blue");
    });
    $(".darkB").click(function() {
        $(".link_animated").removeClass("blue");
        $(".sidebar").removeClass("blue");
        $(".card-footer").removeClass("blue");
    });
    $(".warningB").click(function() {
        $(".link_animated").removeClass("blue");
        $(".sidebar").removeClass("blue");
        $(".card-footer").removeClass("blue");
    });
    $(".successB").click(function() {
        $(".link_animated").removeClass("blue");
        $(".sidebar").removeClass("blue");
        $(".card-footer").removeClass("blue");
    });
    $(".whiteB").click(function() {
        $(".link_animated").removeClass("blue");
        $(".sidebar").removeClass("blue");
        $(".card-footer").removeClass("blue");
    });
    $(".dangerB").click(function() {
        $(".link_animated").removeClass("blue");
        $(".sidebar").removeClass("blue");
        $(".card-footer").removeClass("blue");
    });
    $(".tomatoB").click(function() {
        $(".link_animated").removeClass("blue");
        $(".sidebar").removeClass("blue");
        $(".card-footer").removeClass("blue");
    });
});

// color changer

// -----------------------------------------------------------------------------

// work search
$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable div").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
// work search

// -----------------------------------------------------------------------------

// layout changer
$(document).ready(function() {
    // zoomout start
    $("#cng").click(function() {
        document.getElementById("main").removeAttribute("class", "container-fluid");
        document.getElementById("side_con").removeAttribute("class", "pr-0");
        // document.getElementById("topNav").removeAttribute("class", "");

        document.getElementById("main").setAttribute("class", "container px-0");
        document.getElementById("side_con").setAttribute("class", "col-md-12 px-0 text-center");
        // document.getElementById("topNav").setAttribute("class", "navbar navbarbg navbar-expand-lg navbar-light bg-dark text-light fixed-top text-uppercase");
        $("#zoom-out").hide();
        $("#zoom-in").show();
    });
    $("#zoom-in").hide();
    // zoomin start
    $("#rst").click(function() {
        document.getElementById("main").removeAttribute("class", "container border-0");
        document.getElementById("side_con").removeAttribute("class", "px-0");
        // document.getElementById("topNav").removeAttribute("class", "container");

        document.getElementById("main").setAttribute("class", "container-fluid px-0");
        document.getElementById("side_con").setAttribute("class", "col-md-12 pr-0 text-center");
        // document.getElementById("topNav").setAttribute("class", "navbar navbarbg navbar-expand-lg navbar-light bg-dark text-light fixed-top text-uppercase");
        $("#zoom-out").show();
        $("#zoom-in").hide();
    });
    // zoomin end

    // if ($("#cng").click(false)) {
    // 	$(document).ready(function() {
    // 	  $("#zoom").hide();
    // 	});
    // }

    // change layout start
    document.getElementById("sideNav").setAttribute("class", "col-md-1 px-0 bg-dark sidebar nav-hide");
    $("#layout-cng").click(function() {
        document.getElementById("topNav").removeAttribute("class", "");
        document.getElementById("sideNav").removeAttribute("class", "nav-hide");
        document.getElementById("topNav").setAttribute("class", "navbar navbarbg navbar-expand-lg navbar-light bg-dark text-light fixed-top text-uppercase nav-hide");
        document.getElementById("sideNav").setAttribute("class", "col-md-2 px-0 bg-dark sidebar nav-show");
        $("#layout-cng").hide();
        $("#layout-reset").show();
        $(".change-label").hide();
        $(".reset-label").show();
        $("#footer-content").show();
        $("#footer-main").hide();
    });
    // --------------------------------
    $(".reset-label").hide();
    $("#footer-content").hide();
    $("#footer-main").show();
    // --------------------------------
    $("#layout-reset").click(function() {
        document.getElementById("topNav").removeAttribute("class", "nav-hide");
        document.getElementById("sideNav").removeAttribute("class", "nav-show");
        document.getElementById("topNav").setAttribute("class", "navbar navbarbg navbar-expand-lg navbar-dark bg-dark text-dark fixed-top text-uppercase active1 name1 lnimenu2");
        document.getElementById("sideNav").setAttribute("class", "col-md-1 px-0 bg-dark sidebar nav-hide");
        $("#layout-reset").hide();
        $("#layout-cng").show();
        $(".change-label").show();
        $(".reset-label").hide();
        $("#footer-content").hide();
        $("#footer-main").show();
    });
    // change layout end


});