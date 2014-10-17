$(function() {
  var a = $(window);
  var d = $("#open-standard");
  var q = $(".os-category-buttons");
  var b = q.find("button");
  var f = d.find("#os-category-select");
  var p = d.find(".os-container");
  var j = $("#masthead .container").width() < 941;
  var l;
  if (window.matchMedia) {
    l = matchMedia("(max-width: 1139px)")
  }

  function i(r) {
    if (r && r.length > 0 && !r.hasClass("selected")) {
      d.find(".os-container.selected").removeClass("selected");
      r.addClass("selected")
    }
  }

  function o(t) {
    t.preventDefault();
    var s = $(this);
    var u = s.attr("aria-controls");
    var r = $("#" + u);
    if (r && r.length > 0) {
      q.find(".selected").removeClass("selected");
      s.addClass("selected");
      i(r)
    }
  }

  function n(s) {
    s.preventDefault();
    var r = $("#" + s.target.value);
    i(r)
  }

  function m(u) {
    u.preventDefault();
    var s = $(this);
    var t = s.closest(".os-headlines");
    var v = s.attr("aria-controls");
    var r = $("#" + v);
    if (r.length > 0 && !r.hasClass("selected")) {
      t.find("li .selected").removeClass("selected").attr("aria-selected", false);
      s.addClass("selected").attr("aria-selected", true);
      r.siblings(".selected").removeClass("selected").attr("aria-hidden", true);
      r.addClass("selected").attr("aria-hidden", false)
    }
  }

  function c() {
    p.first().addClass("selected");
    b.first().addClass("selected");
    p.each(function() {
      var s = $(this);
      var r = s.find(".os-headlines");
      var u = r.find("a");
      var t = s.find(".os-article-container article");
      r.attr("role", "tablist");
      u.attr("role", "tab");
      u.first().addClass("selected").attr("aria-selected", true);
      u.siblings(":first").attr("aria-selected", false);
      t.attr("role", "tabpanel");
      t.first().addClass("selected").attr("aria-hidden", false);
      t.siblings(":first").attr("aria-hidden", true);
      u.on("click.os", m)
    })
  }

  function k() {
    p.each(function() {
      var s = $(this);
      var r = s.find(".os-headlines");
      var u = r.find("a");
      var t = s.find(".os-article-container article");
      s.removeClass("selected");
      r.removeAttr("role");
      u.removeAttr("role");
      u.removeAttr("aria-selected");
      u.removeClass("selected");
      t.removeAttr("role");
      t.removeAttr("aria-hidden");
      t.removeClass("selected");
      u.off("click.os", m)
    });
    q.find(".selected").removeClass("selected")
  }

  function e() {
    f[0].selectedIndex = 0;
    p.first().addClass("selected");
    b.first().addClass("selected");
    f.on("change.os", n)
  }

  function h() {
    p.each(function() {
      var s = $(this);
      var r = s.find(".os-headlines");
      var u = r.find("a");
      var t = s.find(".os-article-container article");
      s.removeClass("selected");
      u.removeClass("selected");
      t.removeClass("selected")
    })
  }

  function g() {
    if (window.matchMedia) {
      if (l.matches) {
        e()
      } else {
        c()
      }
      l.addListener(function(r) {
        if (r.matches) {
          k();
          e()
        } else {
          h();
          c()
        }
      })
    } else {
      if (j) {
        e()
      } else {
        c()
      }
    }
    f.on("change.os", n);
    b.on("click.os", o)
  }
  g()
});
