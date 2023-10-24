/*!
 * jQuery Vertical News Ticker Plugin
 *
 * http://www.jugbit.com/jquery-vticker-vertical-news-ticker/
 * http://github.com/kasp3r/vTicker
 *
 * Copyright 2013 Tadas Juozapaitis
 * Released under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 */(function (s) { s.fn.vTicker = function (n) { var a = { speed: 700, pause: 4e3, showItems: 3, animation: "", mousePause: !0, isPaused: !1, direction: "up", height: 0 }, n = s.extend(a, n); return moveUp = function (h, t, e) { if (!e.isPaused) { var i = h.children("ul"), r = i.children("li:first").clone(!0); e.height > 0 && (t = i.children("li:first").height()), i.animate({ top: "-=" + t + "px" }, e.speed, function () { s(this).children("li:first").remove(), s(this).css("top", "0px") }), e.animation == "fade" && (i.children("li:first").fadeOut(e.speed), e.height == 0 && i.children("li:eq(" + e.showItems + ")").hide().fadeIn(e.speed).show()), r.appendTo(i) } }, moveDown = function (h, t, e) { if (!e.isPaused) { var i = h.children("ul"), r = i.children("li:last").clone(!0); e.height > 0 && (t = i.children("li:first").height()), i.css("top", "-" + t + "px").prepend(r), i.animate({ top: 0 }, e.speed, function () { s(this).children("li:last").remove() }), e.animation == "fade" && (e.height == 0 && i.children("li:eq(" + e.showItems + ")").fadeOut(e.speed), i.children("li:first").hide().fadeIn(e.speed).show()) } }, this.each(function () { var h = s(this), t = 0; h.css({ overflow: "hidden", position: "relative" }).children("ul").css({ position: "absolute", margin: 0, padding: 0 }).children("li").css({ margin: 0, padding: 0 }), n.height == 0 ? (h.children("ul").children("li").each(function () { s(this).height() > t && (t = s(this).height()) }), h.children("ul").children("li").each(function () { s(this).height(t) }), h.height(t * n.showItems)) : h.height(n.height); var e = setInterval(function () { n.direction == "up" ? moveUp(h, t, n) : moveDown(h, t, n) }, n.pause); n.mousePause && h.bind("mouseenter", function () { n.isPaused = !0 }).bind("mouseleave", function () { n.isPaused = !1 }) }) } })(jQuery);
//# sourceMappingURL=/s/files/1/0641/3431/6288/t/2/assets/jquery.vticker-min.js.map?v=58518563573794868711650619287