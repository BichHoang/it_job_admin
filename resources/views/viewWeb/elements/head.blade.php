<head>
    <meta content='en' http-equiv='content-language'>
    <link href='/manifest.json' rel='manifest'>
    <meta charset='utf-8'>
    <script>
        window.NREUM || (NREUM = {});
        NREUM.info = {
            "beacon": "bam.nr-data.net",
            "errorBeacon": "bam.nr-data.net",
            "licenseKey": "a2159222e4",
            "applicationID": "3826099",
            "transactionName": "dQoIRERZCVVWQBhfC1QWSVlYUgBB",
            "queueTime": 0,
            "applicationTime": 83,
            "agent": ""
        }
    </script>
    <script>
        window.NREUM || (NREUM = {}), __nr_require = function(e, n, t) {
            function r(t) {
                if (!n[t]) {
                    var o = n[t] = {
                        exports: {}
                    };
                    e[t][0].call(o.exports, function(n) {
                        var o = e[t][1][n];
                        return r(o || n)
                    }, o, o.exports)
                }
                return n[t].exports
            }
            if ("function" == typeof __nr_require) return __nr_require;
            for (var o = 0; o < t.length; o++) r(t[o]);
            return r
        }({
            1: [function(e, n, t) {
                function r() {}

                function o(e, n, t) {
                    return function() {
                        return i(e, [c.now()].concat(u(arguments)), n ? null : this, t), n ? void 0 : this
                    }
                }
                var i = e("handle"),
                    a = e(3),
                    u = e(4),
                    f = e("ee").get("tracer"),
                    c = e("loader"),
                    s = NREUM;
                "undefined" == typeof window.newrelic && (newrelic = s);
                var p = ["setPageViewName", "setCustomAttribute", "setErrorHandler", "finished", "addToTrace", "inlineHit", "addRelease"],
                    d = "api-",
                    l = d + "ixn-";
                a(p, function(e, n) {
                    s[n] = o(d + n, !0, "api")
                }), s.addPageAction = o(d + "addPageAction", !0), s.setCurrentRouteName = o(d + "routeName", !0), n.exports = newrelic, s.interaction = function() {
                    return (new r).get()
                };
                var m = r.prototype = {
                    createTracer: function(e, n) {
                        var t = {},
                            r = this,
                            o = "function" == typeof n;
                        return i(l + "tracer", [c.now(), e, t], r),
                            function() {
                                if (f.emit((o ? "" : "no-") + "fn-start", [c.now(), r, o], t), o) try {
                                    return n.apply(this, arguments)
                                } catch (e) {
                                    throw f.emit("fn-err", [arguments, this, e], t), e
                                } finally {
                                    f.emit("fn-end", [c.now()], t)
                                }
                            }
                    }
                };
                a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","), function(e, n) {
                    m[n] = o(l + n)
                }), newrelic.noticeError = function(e) {
                    "string" == typeof e && (e = new Error(e)), i("err", [e, c.now()])
                }
            }, {}],
            2: [function(e, n, t) {
                function r(e, n) {
                    if (!o) return !1;
                    if (e !== o) return !1;
                    if (!n) return !0;
                    if (!i) return !1;
                    for (var t = i.split("."), r = n.split("."), a = 0; a < r.length; a++)
                        if (r[a] !== t[a]) return !1;
                    return !0
                }
                var o = null,
                    i = null,
                    a = /Version\/(\S+)\s+Safari/;
                if (navigator.userAgent) {
                    var u = navigator.userAgent,
                        f = u.match(a);
                    f && u.indexOf("Chrome") === -1 && u.indexOf("Chromium") === -1 && (o = "Safari", i = f[1])
                }
                n.exports = {
                    agent: o,
                    version: i,
                    match: r
                }
            }, {}],
            3: [function(e, n, t) {
                function r(e, n) {
                    var t = [],
                        r = "",
                        i = 0;
                    for (r in e) o.call(e, r) && (t[i] = n(r, e[r]), i += 1);
                    return t
                }
                var o = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}],
            4: [function(e, n, t) {
                function r(e, n, t) {
                    n || (n = 0), "undefined" == typeof t && (t = e ? e.length : 0);
                    for (var r = -1, o = t - n || 0, i = Array(o < 0 ? 0 : o); ++r < o;) i[r] = e[n + r];
                    return i
                }
                n.exports = r
            }, {}],
            5: [function(e, n, t) {
                n.exports = {
                    exists: "undefined" != typeof window.performance && window.performance.timing && "undefined" != typeof window.performance.timing.navigationStart
                }
            }, {}],
            ee: [function(e, n, t) {
                function r() {}

                function o(e) {
                    function n(e) {
                        return e && e instanceof r ? e : e ? f(e, u, i) : i()
                    }

                    function t(t, r, o, i) {
                        if (!d.aborted || i) {
                            e && e(t, r, o);
                            for (var a = n(o), u = v(t), f = u.length, c = 0; c < f; c++) u[c].apply(a, r);
                            var p = s[y[t]];
                            return p && p.push([b, t, r, a]), a
                        }
                    }

                    function l(e, n) {
                        h[e] = v(e).concat(n)
                    }

                    function m(e, n) {
                        var t = h[e];
                        if (t)
                            for (var r = 0; r < t.length; r++) t[r] === n && t.splice(r, 1)
                    }

                    function v(e) {
                        return h[e] || []
                    }

                    function g(e) {
                        return p[e] = p[e] || o(t)
                    }

                    function w(e, n) {
                        c(e, function(e, t) {
                            n = n || "feature", y[t] = n, n in s || (s[n] = [])
                        })
                    }
                    var h = {},
                        y = {},
                        b = {
                            on: l,
                            addEventListener: l,
                            removeEventListener: m,
                            emit: t,
                            get: g,
                            listeners: v,
                            context: n,
                            buffer: w,
                            abort: a,
                            aborted: !1
                        };
                    return b
                }

                function i() {
                    return new r
                }

                function a() {
                    (s.api || s.feature) && (d.aborted = !0, s = d.backlog = {})
                }
                var u = "nr@context",
                    f = e("gos"),
                    c = e(3),
                    s = {},
                    p = {},
                    d = n.exports = o();
                d.backlog = s
            }, {}],
            gos: [function(e, n, t) {
                function r(e, n, t) {
                    if (o.call(e, n)) return e[n];
                    var r = t();
                    if (Object.defineProperty && Object.keys) try {
                        return Object.defineProperty(e, n, {
                            value: r,
                            writable: !0,
                            enumerable: !1
                        }), r
                    } catch (i) {}
                    return e[n] = r, r
                }
                var o = Object.prototype.hasOwnProperty;
                n.exports = r
            }, {}],
            handle: [function(e, n, t) {
                function r(e, n, t, r) {
                    o.buffer([e], r), o.emit(e, n, t)
                }
                var o = e("ee").get("handle");
                n.exports = r, r.ee = o
            }, {}],
            id: [function(e, n, t) {
                function r(e) {
                    var n = typeof e;
                    return !e || "object" !== n && "function" !== n ? -1 : e === window ? 0 : a(e, i, function() {
                        return o++
                    })
                }
                var o = 1,
                    i = "nr@id",
                    a = e("gos");
                n.exports = r
            }, {}],
            loader: [function(e, n, t) {
                function r() {
                    if (!E++) {
                        var e = x.info = NREUM.info,
                            n = l.getElementsByTagName("script")[0];
                        if (setTimeout(s.abort, 3e4), !(e && e.licenseKey && e.applicationID && n)) return s.abort();
                        c(y, function(n, t) {
                            e[n] || (e[n] = t)
                        }), f("mark", ["onload", a() + x.offset], null, "api");
                        var t = l.createElement("script");
                        t.src = "https://" + e.agent, n.parentNode.insertBefore(t, n)
                    }
                }

                function o() {
                    "complete" === l.readyState && i()
                }

                function i() {
                    f("mark", ["domContent", a() + x.offset], null, "api")
                }

                function a() {
                    return O.exists && performance.now ? Math.round(performance.now()) : (u = Math.max((new Date).getTime(), u)) - x.offset
                }
                var u = (new Date).getTime(),
                    f = e("handle"),
                    c = e(3),
                    s = e("ee"),
                    p = e(2),
                    d = window,
                    l = d.document,
                    m = "addEventListener",
                    v = "attachEvent",
                    g = d.XMLHttpRequest,
                    w = g && g.prototype;
                NREUM.o = {
                    ST: setTimeout,
                    SI: d.setImmediate,
                    CT: clearTimeout,
                    XHR: g,
                    REQ: d.Request,
                    EV: d.Event,
                    PR: d.Promise,
                    MO: d.MutationObserver
                };
                var h = "" + location,
                    y = {
                        beacon: "bam.nr-data.net",
                        errorBeacon: "bam.nr-data.net",
                        agent: "js-agent.newrelic.com/nr-1099.min.js"
                    },
                    b = g && w && w[m] && !/CriOS/.test(navigator.userAgent),
                    x = n.exports = {
                        offset: u,
                        now: a,
                        origin: h,
                        features: {},
                        xhrWrappable: b,
                        userAgent: p
                    };
                e(1), l[m] ? (l[m]("DOMContentLoaded", i, !1), d[m]("load", r, !1)) : (l[v]("onreadystatechange", o), d[v]("onload", r)), f("mark", ["firstbyte", u], null, "api");
                var E = 0,
                    O = e(5)
            }, {}]
        }, {}, ["loader"]);
    </script>
    <!-- TODO: cleanup when all page is responsive -->
    <meta content='width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta content='The best IT and software developer jobs in Vietnam – high salary and top companies. Get your new job today on ITviec.com.' name='description'>
    <title>ITviec | Top IT Jobs for You</title>
    <meta content='The best IT and software developer jobs in Vietnam – high salary and top companies. Get your new job today on ITviec.com.' property='og:description'>
    <meta content='ITviec | Top IT Jobs for You' property='og:title'>
    <meta content='itjob, it jobs, itviec, it job' name='keywords'>
    <meta content='/itviec-black-square-facebook.png' property='og:image'>

    <meta content='/' property='og:url'>
    <link href='https://itviec.com' rel='canonical'>
    <link href='/' hreflang='en' rel='alternate'>
    <link href='/vi' hreflang='vi-VN' rel='alternate'>

    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400|Roboto:400,500&amp;subset=vietnamese,greek' rel='stylesheet' type='text/css'>

    <link href='/apple-touch-icon-152x152.png' rel='apple-touch-icon' sizes='152x152'>
    <link href='/apple-touch-icon-57x57.png' rel='apple-touch-icon' sizes='57x57'>
    <link href='/apple-touch-icon-114x114.png' rel='apple-touch-icon' sizes='114x114'>
    <link href='/apple-touch-icon-72x72.png' rel='apple-touch-icon' sizes='72x72'>
    <link href='/apple-touch-icon-144x144.png' rel='apple-touch-icon' sizes='144x144'>
    <link href='/apple-touch-icon-60x60.png' rel='apple-touch-icon' sizes='60x60'>
    <link href='/apple-touch-icon-120x120.png' rel='apple-touch-icon' sizes='120x120'>
    <link href='/apple-touch-icon-76x76.png' rel='apple-touch-icon' sizes='76x76'>
    <link href='/apple-touch-icon-152x152.png' rel='apple-touch-icon' sizes='152x152'>
    <link href='/favicon-196x196.png' rel='icon' sizes='196x196' type='image/png'>
    <link href='/favicon-160x160.png' rel='icon' sizes='160x160' type='image/png'>
    <link href='/favicon-96x96.png' rel='icon' sizes='96x96' type='image/png'>
    <link href='/favicon-16x16.png' rel='icon' sizes='16x16' type='image/png'>
    <link href='/favicon-32x32.png' rel='icon' sizes='32x32' type='image/png'>
    <meta content='#000000' name='msapplication-TileColor'>
    <meta content='/mstile-144x144.png' name='msapplication-TileImage'>

    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token" content="CZ5SEYdIfZuYJQPuKPeauqfWFAhaOzfh31dEBxEGSArzNYPHOv0p73/jfvNOzGGLL9gmFKZ6LwANbafK5f6FAg==" />
    <meta name="tracking-token" content="a98379174c1ebbc46a85b41c3123f91d04e285e8693b3eb5a7eba7ce111ef64993cafbb931d66f86c45333b76a798d39472ccf964015e9f447e1c97d9afad601" />
    <meta name="tracking-url" content="https://tracking.itviec.com" />
    <link rel="stylesheet" media="all" href="assets/home-18b336fc312e9a42ebd93b56fcb2747f295b05b57af005a21dccb93b96b55d2c.css" />

    <style>
        .preload_image {
            display: none;
        }
    </style>
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-42033311-1', 'auto');
        ga('send', 'pageview');
    </script>

    <script>
        var _prum = [
            ['id', '56790d9babe53d8f34be63f8'],
            ['mark', 'firstbyte', (new Date()).getTime()]
        ];
        (function() {
            var s = document.getElementsByTagName('script')[0],
                p = document.createElement('script');
            p.async = 'async';
            p.src = '/rum-static.pingdom.net/prum.min.js';
            s.parentNode.insertBefore(p, s);
        })();
    </script>

</head>