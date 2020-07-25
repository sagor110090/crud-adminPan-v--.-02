$(function () {
    "use strict";

    $(".preloader").fadeOut();
    // ============================================================== 
    // Theme options
    // ==============================================================     
    // ============================================================== 
    // sidebar-hover
    // ==============================================================

    $(".left-sidebar").hover(
        function () {
            $(".navbar-header").addClass("expand-logo");
        },
        function () {
            $(".navbar-header").removeClass("expand-logo");
        }
    );
    // this is for close icon when navigation open in mobile view
    $(".nav-toggler").on('click', function () {
        $("#main-wrapper").toggleClass("show-sidebar");
        $(".nav-toggler i").toggleClass("ti-menu");
    });
    $(".nav-lock").on('click', function () {
        $("body").toggleClass("lock-nav");
        $(".nav-lock i").toggleClass("mdi-toggle-switch-off");
        $("body, .page-wrapper").trigger("resize");
    });
    $(".search-box a, .search-box .app-search .srh-btn").on('click', function () {
        $(".app-search").toggle(200);
        $(".app-search input").focus();
    });

    // ============================================================== 
    // Right sidebar options
    // ==============================================================
    $(function () {
        $(".service-panel-toggle").on('click', function () {
            $(".customizer").toggleClass('show-service-panel');

        });
        $('.page-wrapper').on('click', function () {
            $(".customizer").removeClass('show-service-panel');
        });
    });
    // ============================================================== 
    // This is for the floating labels
    // ============================================================== 
    $('.floating-labels .form-control').on('focus blur', function (e) {
        $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
    }).trigger('blur');

    // ============================================================== 
    //tooltip
    // ============================================================== 
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    // ============================================================== 
    //Popover
    // ============================================================== 
    $(function () {
        $('[data-toggle="popover"]').popover()
    })

    // ============================================================== 
    // Perfact scrollbar
    // ============================================================== 
    $('.message-center, .customizer-body, .scrollable').perfectScrollbar({
        wheelPropagation: !0
    });



    // ============================================================== 
    // Resize all elements
    // ============================================================== 
    $("body, .page-wrapper").trigger("resize");
    $(".page-wrapper").delay(20).show();
    // ============================================================== 
    // To do list
    // ============================================================== 
    $(".list-task li label").click(function () {
        $(this).toggleClass("task-done");
    });

    //****************************
    /* This is for the mini-sidebar if width is less then 1170*/
    //**************************** 
    var setsidebartype = function () {
        var width = (window.innerWidth > 0) ? window.innerWidth : this.screen.width;
        if (width < 1170) {
            $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
        } else {
            $("#main-wrapper").attr("data-sidebartype", "full");
        }
    };
    $(window).ready(setsidebartype);
    $(window).on("resize", setsidebartype);
    //****************************
    /* This is for sidebartoggler*/
    //****************************
    $('.sidebartoggler').on("click", function () {
        $("#main-wrapper").toggleClass("mini-sidebar");
        if ($("#main-wrapper").hasClass("mini-sidebar")) {
            $(".sidebartoggler").prop("checked", !0);
            $("#main-wrapper").attr("data-sidebartype", "mini-sidebar");
        } else {
            $(".sidebartoggler").prop("checked", !1);
            $("#main-wrapper").attr("data-sidebartype", "full");
        }
    });


    $(".select").select2({
        theme: "classic",
        placeholder: "---Select---",
        allowClear: true
    });
    $('.select-multiple').select2({
        theme: "classic"

    });



});

$(document).ready(function () {
    $('#datatable').DataTable();
});
//delete sweet alert
function sweetalertDelete(id) {
    event.preventDefault();
    swal({
        title: "Are you sure?",
        text: "To continue this action!",
        icon: "warning",
        buttons: true,
        dangerMode: true
    }).then(willDelete => {
        if (willDelete) {
            swal("Your action has beed done! :)", {
                icon: "success",
                buttons: false,
                timer: 1000
            });
            $("#deleteButton" + id).submit();
        }
    });
}
// multiple click privent
$(".oneTimeSubmit").click(function () {
    var count1 = 0;
    var count2 = -1;

    const inputs = document.querySelectorAll("#oneTimeSubmit input");
    const requiredFields = Array.from(inputs).filter(input => input.required);
    for (let index = 0; index < requiredFields.length; index++) {
        count1 = index;

        if (requiredFields[index].value) {
            count2++;
        }
    }
    if (count1 == count2) {
        $(".oneTimeSubmit").addClass("btn-progress");
    }
});

// image upload js start

function showMyImage(fileInput, imagePreview) {
    var files = fileInput.files;
    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var imageType = /image.*/;
        if (!file.type.match(imageType)) {
            continue;
        }
        var img = document.getElementById(imagePreview);
        img.file = file;
        var reader = new FileReader();
        reader.onload = (function (aImg) {
            return function (e) {
                aImg.src = e.target.result;
            };
        })(img);
        reader.readAsDataURL(file);
    }
    files = "";
    img = "";
}
