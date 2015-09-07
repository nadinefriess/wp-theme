/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
    $("[rel='tooltip']").tooltip();
});

$(function() {
    var HasTooltip = $('.hastooltip');

    HasTooltip.on('click', function(e) {
        e.preventDefault();
        var isShowing = $(this).data('isShowing')
        HasTooltip.removeData('isShowing')

        if (isShowing !== 'true')
        {
            HasTooltip.not(this).tooltip('hide');
            $(this).data('isShowing', 'true')
            $(this).tooltip('show');
        }
        else
        {
            $(this).tooltip('hide');
        }

    }).tooltip({
        animation: true,
        trigger: 'manual'
    })
});

// Funktionen zum ein- und ausblenden der Suche, Kategorien und des Archives auf mobilen Geräten
s = "hidden";
$("#suchicon").click(function() {
    if (s === "hidden") {
        $(".iconline").fadeIn("slow", function() {
        });
        // Verschachtel, damit der Ein- und Ausbledeeffekt flüssig ist.
        $("#kategorien").fadeOut("fast", function() {
            k = "hidden";
            $("#archiv").fadeOut("fast", function() {
                a = "hidden";
                $("#suche").fadeIn(function() {
                    s = "show";
                });
            });
        });

    } else {
        $(".iconline").fadeOut("slow", function() {
        });
        $("#suche").fadeOut("slow", function() {
            s = "hidden";
        });

    }
});
k = "hidden";
$("#kategorienicon").click(function() {
    if (k === "hidden") {
        $(".iconline").fadeIn("slow", function() {
        });

        $("#suche").fadeOut("fast", function() {
            s = "hidden";
            $("#archiv").fadeOut("fast", function() {
                a = "hidden";
                $("#kategorien").fadeIn("slow", function() {
                    k = "show";
                });
            });
        });


    } else {
        $(".iconline").fadeOut("slow", function() {
        });
        $("#kategorien").fadeOut("slow", function() {
            k = "hidden";
        });


    }
});
a = "hidden";
$("#archivicon").click(function() {
    if (a === "hidden") {
        $(".iconline").fadeIn("fast", function() {
        });

        $("#suche").fadeOut(function() {
            s = "hidden";
            $("#kategorien").fadeOut("fast", function() {
                k = "hidden";
                $("#archiv").fadeIn("slow", function() {
                    a = "show";
                });
            });
        });
    } else {
        $(".iconline").fadeOut("slow", function() {
        });
        $("#archiv").fadeOut("slow", function() {
            a = "hidden";
        });
    }
});