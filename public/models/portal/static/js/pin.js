!
function(e, t, i) {
    function o(e, t) {
        function i() {
            c.height(0);
            for (var e = 0; e < c.children().length; e++) c.height(c.children().eq(e).height() + 12 + c.height())
        }
        $(e + " img").attr("draggable", "false"),
        $(e + " img").css("-moz-user-select", "none");
        var o, r, s, n, l, a, c, p, h, d, g, u;
        o = $(e).children(".pike"),
        l = $(e).children(".pike_prev"),
        a = $(e).children(".pike_next"),
        c = $(e).children(".pike_spot"),
        o.width(),
        o.height(),
        r = o.children();
        var f = t.arrowBackgroundType = 1 === t.arrowBackgroundType ? 2 : 2 === t.arrowBackgroundType ? 50 : 2;
        if (h = 1 === t.arrowBackground ? "255,255,255": 2 === t.arrowBackground ? "1,1,1": h, t.arrowList) {
            var w, v;
            t.arrowList.width && !t.arrowList.height ? (w = '<img width="' + t.arrowList.width + '" src="' + t.arrowList.left + '" draggable="false"></img>', v = '<img width="' + t.arrowList.width + '" src="' + t.arrowList.right + '" draggable="false"></img>') : t.arrowList.height && !t.arrowList.width ? (w = '<img height="' + t.arrowList.height + '" src="' + t.arrowList.left + '" draggable="false"></img>', v = '<img height="' + t.arrowList.height + '" src="' + t.arrowList.right + '" draggable="false"></img>') : t.arrowList.width && t.arrowList.height ? (w = '<img width="' + t.arrowList.width + '" height="' + t.arrowList.height + '" src="' + t.arrowList.left + '"draggable="false"></img>', v = '<img width="' + t.arrowList.width + '" height="' + t.arrowList.height + '" src="' + t.arrowList.right + '"draggable="false"></img>') : (w = '<img src="' + t.arrowList.left + '"draggable="false"></img>', v = '<img src="' + t.arrowList.right + '"draggable="false"></img>'),
            l.append(w),
            a.append(v),
            l.children("img").addClass("pike_img"),
            a.children("img").addClass("pike_img")
        } else l.append("<"),
        a.append(">"),
        l.width("70px"),
        l.height("70px"),
        a.width("70px"),
        a.height("70px"),
        l.css({
            color: t.arrowColor,
            background: "rgba(" + h + "," + (t.arrowTransparent || .5) + ")",
            borderRadius: f
        }),
        a.css({
            color: t.arrowColor,
            background: "rgba(" + h + "," + (t.arrowTransparent || .5) + ")",
            borderRadius: f
        });
        if (p = "", t.spotList) {
            for (var m = 0; m < r.length; m++) p += '<li class="spot"></li>';
            var b, x;
            b = t.spotList.backgroundImg ? "url(" + t.spotList.backgroundImg + ") no-repeat": t.spotList.color,
            x = t.spotList.select.backgroundImg ? "url(" + t.spotList.select.backgroundImg + ") no-repeat": t.spotList.select.color,
            c.append(p),
            c.children().css({
                width: t.spotList.width + "px",
                margin: "6px 6px",
                cursor: "pointer",
                height: t.spotList.height + "px",
                "border-radius": t.spotList.borderRadius + "%",
                opacity: t.spotList.opacity,
                background: b,
                "background-size": "100% 100%"
            }),
            c.children().eq(0).css({
                width: t.spotList.select.width + "px",
                margin: "6px 6px",
                cursor: "pointer",
                height: t.spotList.select.height + "px",
                "border-radius": t.spotList.select.borderRadius + "%",
                opacity: t.spotList.select.opacity,
                background: x,
                "background-size": "100% 100%"
            })
        } else {
            for (var m = 0; m < r.length; m++) p += '<li class="spot"></li>';
            c.append(p),
            c.children().eq(0).css("background", t.spotSelectColor || "green"),
            c.children(".spot").css("opacity", t.spotTransparent || 1)
        }
        t.spotDirection ? "bottom" == t.spotDirection ? (c.css("display", "flex"), c.children().css({
            "align-self": "center"
        }), c.css({
            "margin-left": "-" + c.width() / 2 + "px",
            bottom: "10px",
            left: "50%"
        })) : "top" == t.spotDirection ? (c.css("display", "flex"), c.children().css({
            "align-self": "center"
        }), c.css({
            "margin-left": "-" + c.width() / 2 + "px",
            top: "10px",
            left: "50%"
        })) : "left" == t.spotDirection ? (i(), c.css({
            display: "flex",
            "flex-direction": "column"
        }), c.children().css({
            "align-self": "center"
        }), c.css({
            "margin-top": "-" + c.height() / 2 + "px",
            left: "20px",
            top: "50%"
        }), c.children().css({
            clear: "both",
            margin: "6px 6px"
        })) : "right" == t.spotDirection && (i(), c.css({
            display: "flex",
            "flex-direction": "column"
        }), c.children().css({
            "align-self": "center"
        }), c.css({
            "margin-top": "-" + c.height() / 2 + "px",
            right: "20px",
            top: "50%"
        }), c.children().css({
            clear: "both",
            margin: "6px 6px"
        })) : (c.css("display", "flex"), c.children().css({
            "align-self": "center"
        }), c.css({
            "margin-left": "-" + c.width() / 2 + "px",
            bottom: "20px",
            left: "50%"
        })),
        d = !0,
        $(e).css({
            overflow: "hidden",
            position: "relative"
        });
        var L = function() {
            d = !1,
            setTimeout(function() {
                d = !0
            },
            500)
        },
        k = function(e) {
            t.spotList ? c.children().eq(e).css({
                width: t.spotList.select.width + "px",
                margin: "6px 6px",
                cursor: "pointer",
                height: t.spotList.select.height + "px",
                "border-radius": t.spotList.select.borderRadius + "%",
                opacity: t.spotList.select.opacity,
                background: x,
                "background-size": "100% 100%"
            }).siblings().css({
                width: t.spotList.width + "px",
                margin: "6px 6px",
                cursor: "pointer",
                height: t.spotList.height + "px",
                "border-radius": t.spotList.borderRadius + "%",
                opacity: t.spotList.opacity,
                background: b,
                "background-size": "100% 100%"
            }) : c.children().eq(e).css("background", t.spotSelectColor || "green").siblings().css("background", "")
        },
        y = function() {
            function i() {
                I && (2 == t.type ? (t.loop && (s == o.children().length - 1 && v - m > 0 && (o.css("left", 0), s = 0), 0 == s && v - m < 0 && (o.css("left", ( - o.children().length - 1) * r.eq(0).width() - v - -m + "px"), s = o.children().length - 1)), o.css("left", -s * r.eq(0).width() - v - -m + "px")) : 3 == t.type && (t.loop && (s == o.children().length - 1 && q - y > 0 && (o.css("top", 0), s = 0), 0 == s && q - y < 0 && (o.css("top", ( - o.children().length - 1) * r.eq(0).height() - q - -y + "px"), s = o.children().length - 1)), o.css("top", -s * r.eq(0).height() - q - -y + "px")))
            }
            function p() {
                2 == t.type ? $(e).width() / 2 <= v - m ? (event.preventDefault ? event.preventDefault() : window.event.returnValue, clearInterval(n), t.loop ? (s++, f()) : (s++, w()), L()) : $(e).width() / 2 <= m - v ? (event.preventDefault ? event.preventDefault() : window.event.returnValue, clearInterval(n), t.loop ? (s--, f()) : (s--, w()), L()) : o.stop().animate({
                    left: -s * r.eq(0).width()
                },
                t.slide || 800) : 3 == t.type && ($(e).height() / 2 <= q - y ? (event.preventDefault(), clearInterval(n), t.loop ? (s++, f()) : (s++, w()), L()) : $(e).height() / 2 <= y - q ? (event.preventDefault(), clearInterval(n), t.loop ? (s--, f()) : (s--, w()), L()) : o.stop().animate({
                    top: -s * r.eq(0).height()
                },
                t.slide || 800))
            }
            if (s = 0, t.loop && (g = r.first().clone(), o.append(g)), u = o.children().length, 2 === t.type) {
                o.css("width", r.width() * r.length),
                o.css("width", r.width() * u);
                for (var h = 0; h < r.length; h++) r.eq(h).css({
                    width: $(e).width(),
                    float: "left"
                })
            } else if (3 === t.type) {
                for (var h = 0; h < r.length; h++) r.eq(h).css({
                    height: $(e).height()
                });
                o.css("height", r.height() * r.length),
                o.css("height", r.height() * u)
            }
            var f = function() {
                s == u && (2 === t.type ? o.css({
                    left: 0
                }) : 3 === t.type && o.css({
                    top: 0
                }), s = 1),
                -1 == s && (2 === t.type ? o.css({
                    left: -(u - 1) * r.eq(0).width()
                }) : 3 === t.type && o.css({
                    top: -(u - 1) * r.eq(0).height()
                }), s = u - 2),
                2 === t.type ? o.stop().animate({
                    left: -s * r.eq(0).width()
                },
                t.slide || 800) : 3 === t.type && o.stop().animate({
                    top: -s * r.eq(0).height()
                },
                t.slide || 800),
                s == u - 1 ? t.spotList ? c.children().eq(0).css({
                    width: t.spotList.select.width + "px",
                    margin: "6px 6px",
                    cursor: "pointer",
                    height: t.spotList.select.height + "px",
                    "border-radius": t.spotList.select.borderRadius + "%",
                    opacity: t.spotList.select.opacity,
                    background: x,
                    "background-size": "100% 100%"
                }).siblings().css({
                    width: t.spotList.width + "px",
                    margin: "6px 6px",
                    cursor: "pointer",
                    height: t.spotList.height + "px",
                    "border-radius": t.spotList.borderRadius + "%",
                    opacity: t.spotList.opacity,
                    background: b,
                    "background-size": "100% 100%"
                }) : c.children().eq(0).css("background", t.spotSelectColor || "green").siblings().css("background", "") : k(s)
            },
            w = function() {
                s == u ? s = u - 1 : -1 == s && (s = 0),
                2 == t.type ? o.stop().animate({
                    left: -s * r.eq(0).width()
                },
                t.slide || 800) : 3 == t.type && o.stop().animate({
                    top: -s * r.eq(0).height()
                },
                t.slide || 800),
                t.spotList ? c.children().eq(s).css({
                    width: t.spotList.select.width + "px",
                    margin: "6px 6px",
                    cursor: "pointer",
                    height: t.spotList.select.height + "px",
                    "border-radius": t.spotList.select.borderRadius + "%",
                    opacity: t.spotList.select.opacity,
                    background: x,
                    "background-size": "100% 100%"
                }).siblings().css({
                    width: t.spotList.width + "px",
                    margin: "6px 6px",
                    cursor: "pointer",
                    height: t.spotList.height + "px",
                    "border-radius": t.spotList.borderRadius + "%",
                    opacity: t.spotList.opacity,
                    background: b,
                    "background-size": "100% 100%"
                }) : c.children().eq(s).css("background", t.spotSelectColor || "green").siblings().css("background", "")
            };
            if (t.automatic && (n = setInterval(function() {
                t.loop ? (s++, f()) : (s++, w())
            },
            t.autoplay || 3e3)), a.click(function() {
                clearInterval(n),
                d && (t.loop ? (s++, f()) : (s++, w()), L())
            }), l.click(function() {
                clearInterval(n),
                d && (t.loop ? (s--, f()) : (s--, w()), L())
            }), t.hover && $(e).hover(function() {
                clearInterval(n)
            },
            function() {
                t.automatic && (n = setInterval(function() {
                    t.loop ? (s++, f()) : (s++, w())
                },
                t.autoplay || 3e3))
            }), c.children().click(function() {
                s = c.children().index(this),
                2 === t.type ? o.stop().animate({
                    left: -s * r.eq(0).width()
                },
                500) : 3 === t.type && o.stop().animate({
                    top: -s * r.eq(0).height()
                },
                500),
                k(s),
                L()
            }), t.mousewheel && $(e).on("mousewheel DOMMouseScroll",
            function(e) {
                var i = e.originalEvent.wheelDelta && (e.originalEvent.wheelDelta > 0 ? 1 : -1) || e.originalEvent.detail && (e.originalEvent.detail > 0 ? -1 : 1);
                i > 0 ? (e.preventDefault ? e.preventDefault() : window.event.returnValue, clearInterval(n), d && (t.loop ? (s--, f()) : (s--, w()), L())) : i < 0 && (e.preventDefault ? e.preventDefault() : window.event.returnValue, clearInterval(n), d && (t.loop ? (s++, f()) : (s++, w()), L()))
            }), s = 0, !1 !== t.drag) {
                var v, m, y, q, I = !1;
                $(e).on("mousedown",
                function(e) {
                    e = e || window.event,
                    I = !0,
                    v = e.clientX,
                    q = e.clientY
                }),
                $(e).on("mousemove",
                function(e) {
                    e = e || window.event,
                    m = e.clientX,
                    y = e.clientY,
                    i()
                }),
                $(e).on("mouseup",
                function(e) {
                    I = !1,
                    p()
                }),
                document.querySelector(e).ontouchstart = function(e) {
                    e = e || window.event,
                    I = !0,
                    v = e.touches[0].clientX,
                    q = e.touches[0].clientY
                },
                document.querySelector(e).ontouchmove = function(e) {
                    e = e || window.event,
                    m = e.touches[0].clientX,
                    y = e.touches[0].clientY,
                    i()
                },
                document.querySelector(e).ontouchend = function(e) {
                    I = !1,
                    p()
                }
            }
        };
        switch (t.type) {
        case 1:
            !
            function() {
                for (var i = 0; i < r.length; i++) r.eq(i).css({
                    position: "absolute",
                    top: "0",
                    left: "0",
                    display: "none"
                });
                r.eq(0).show(),
                s = 0;
                var o = function() {
                    s = s == r.length ? 0 : s,
                    r.eq(s).fadeIn(500).siblings().fadeOut(500),
                    k(s)
                },
                p = function() {
                    s < 0 ? s = 0 : s == r.length && (s = r.length - 1),
                    r.eq(s).fadeIn(500).siblings().fadeOut(500),
                    k(s)
                },
                h = function() {
                    n = setInterval(function() {
                        t.loop ? (s++, o()) : (s++, p())
                    },
                    t.autoplay || 3e3)
                };
                t.automatic && h(),
                t.hover && $(e).hover(function() {
                    clearInterval(n)
                },
                function() {
                    t.automatic && h()
                }),
                l.click(function() {
                    clearInterval(n),
                    t.loop ? (s--, s = s < 0 ? r.length - 1 : s, o()) : (s--, p()),
                    L()
                }),
                a.click(function() {
                    clearInterval(n),
                    t.loop ? (s++, o()) : (s++, p()),
                    L()
                });
                var g = c.children(".spot");
                if (g.click(function() {
                    clearInterval(n),
                    d && (s = g.index(this), o(), L())
                }), t.mousewheel && $(e).on("mousewheel DOMMouseScroll",
                function(e) {
                    var i = e.originalEvent.wheelDelta && (e.originalEvent.wheelDelta > 0 ? 1 : -1) || e.originalEvent.detail && (e.originalEvent.detail > 0 ? -1 : 1);
                    i > 0 ? (event.preventDefault(), clearInterval(n), d && (t.loop ? (s--, s = s < 0 ? r.length - 1 : s, o()) : (s--, o()), L())) : i < 0 && (event.preventDefault(), clearInterval(n), d && (t.loop ? (s++, o()) : (s++, p()), L()))
                }), s = 0, !1 !== t.drag) {
                    var u, f, w, v, m = !1;
                    $(e).mousedown(function(e) {
                        e = e || window.event,
                        m = !0,
                        u = e.clientX,
                        v = e.clientY
                    }),
                    $(e).mousemove(function(e) {
                        e = e || window.event,
                        f = e.clientX,
                        w = e.clientY
                    }),
                    $(e).mouseup(function() {
                        m = !1,
                        $(e).width() / 2 <= u - f + $(e).width() / 3 ? (event.preventDefault(), clearInterval(n), t.loop ? (s++, o()) : (s++, p()), L()) : $(e).width() / 2 <= f - u + +$(e).width() / 3 && (event.preventDefault(), clearInterval(n), t.loop ? (s--, s = s < 0 ? r.length - 1 : s, o()) : (s--, p()), L())
                    })
                }
            } ();
            break;
        case 2:
        case 3:
            y()
        }
    }
    document.ondragstart = function() {
        return ! 1
    },
    document.oncontextmenu = function(e) {
        return  1
    };
    var r = ".pike_img{display: table-cell;vertical-align: middle;}ul,li{list-style:none}.pike_prev{left:10px}.pike_next{right:10px}.pike{width:100%;left:0;right:0;margin:auto;height:500px;overflow:hidden;position:relative}.pike_prev,.pike_next{line-height:70px;text-align:center;position:absolute;top:50%;margin-top:-35px;border-radius:2px;color:green;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;-khtml-user-select:none;-o-user-select:none;user-select:none;cursor:pointer;font-family:NSimSun;font-size:50px}.pike_spot{position:absolute;}.pike_spot>.spot{width:14px;height:14px;background:white;float:left;margin:0 6px;border-radius:50%;cursor:pointer}";
    if ($("style").length > 0) $("style").append(r);
    else {
        var s = $("<style>" + r + "</style>");
        $("head").append(s)
    }
    o.prototype = {
        constructor: o
    },
    e.Pike = o
} (window, document);