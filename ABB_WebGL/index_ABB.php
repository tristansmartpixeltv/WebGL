<!DOCTYPE html>
<!-- saved from url=(0024)https://new.abb.com/grid -->
<html style="" class=" no-flash rgba csstransforms3d csstransitions no-touchevents"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
        
        
        @font-face{
            font-family:'ABBVoice';
                src:url('https://www07.abb.com/cdn/Fonts/abbvoice/ABBvoice_W_Rg.eot');
                src:url('https://www07.abb.com/cdn/Fonts/abbvoice/ABBvoice_W_Rg.eot?#iefix') format('embedded-opentype'),
                    url('https://www07.abb.com/cdn/Fonts/abbvoice/ABBvoice_W_Rg.woff2') format('woff2'),
                    url('https://www07.abb.com/cdn/Fonts/abbvoice/ABBvoice_W_Rg.woff') format('woff')
            }

         
    </style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,charset=utf-8,text/html"><script src="./Power Grids _ ABB_files/5198.js.download" async="" type="text/javascript"></script><script type="text/javascript" src="./Power Grids _ ABB_files/bacb928cda"></script><script type="text/javascript" async="" src="./Power Grids _ ABB_files/insight.min.js.download"></script><script type="text/javascript" async="" src="./Power Grids _ ABB_files/analytics.js.download"></script><script src="./Power Grids _ ABB_files/nr-1071.min.js.download"></script><script async="" src="./Power Grids _ ABB_files/gtm.js.download"></script><script type="text/javascript" async="" src="./Power Grids _ ABB_files/ga.js.download"></script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info = {"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"bacb928cda","applicationID":"831376","transactionName":"Zl0DZUZSX0ZRBkRaC18XIkRHR15YHwJCWgA=","queueTime":0,"applicationTime":106,"agent":"","atts":""}</script><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"XQEEV1ZAAAABV1ZU"};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof b&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(18)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(18)(r);n.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(18)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(18)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(18)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),f.on("xhr-load-added",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],n)}),f.on("removeEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],n)}),f.on("fn-start",function(t,n,e){n instanceof m&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,n){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(15),s=t(16),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now()])}},{}],13:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],16:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],17:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],18:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=h(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([g,e,r,a]),a}}function p(t,n){v[t]=h(t).concat(n)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||"feature",y[e]=n,n in u||(u[n]=[])})}var v={},y={},g={on:p,emit:e,get:m,listeners:h,context:n,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(15),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!x++){var t=b.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=l.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(15),u=t("ee"),d=window,l=d.document,p="addEventListener",h="attachEvent",m=d.XMLHttpRequest,w=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},g=m&&w&&w[p]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:v,features:{},xhrWrappable:g};t(12),l[p]?(l[p]("DOMContentLoaded",i,!1),d[p]("load",r,!1)):(l[h]("onreadystatechange",o),d[h]("onload",r)),c("mark",["firstbyte",s],null,"api");var x=0,E=t(17)},{}]},{},["loader",2,10,4,3]);</script><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"><title>
	Power Grids | ABB
</title>
        <link rel="stylesheet" type="text/css" href="./Power Grids _ ABB_files/min.css">
        <meta name="build" content="2018.0608.1208.1 - BN=local-build, BM=59486592">
        <meta name="timestamp" content="2018-06-14  18:54:47.7">
        <meta name="cidpath" content="">
    <link rel="icon" href="https://new.abb.com/cdn/img/favicon.ico" type="image/x-icon"><link rel="shortcut icon" href="https://new.abb.com/cdn/img/favicon.ico" type="image/x-icon"><link rel="icon" type="image/png" sizes="16x16" href="https://new.abb.com/cdn/img/favicon16-web.png"><link rel="icon" type="image/png" sizes="32x32" href="https://new.abb.com/cdn/img/favicon32-web.png"><link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://new.abb.com/cdn/img/favicon114_retina.png"><link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://new.abb.com/cdn/img/favicon72-ipad.png"><link rel="apple-touch-icon-precomposed" href="https://new.abb.com/cdn/img/favicon57-iphone.png">

    <script>
	
        window.onload = function () {
            var mtiTracking = document.createElement('link');
            mtiTracking.type = 'text/css';
            mtiTracking.rel = 'stylesheet';
            mtiTracking.href = ('https:' == document.location.protocol ? 'https:' : 'http:') + '//fast.fonts.com/t/1.css?apiType=css&projectid=02d6deb3-91a9-49fc-bf88-6134bb8f002b';
			
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(mtiTracking);

        var jsLibs = [];
        function isBackend() { return document.getElementsByTagName("body")[0].className.match(/sfPageEditor/) && (typeof requirejs !== 'undefined'); }
        function widgetInit(widget, callback) { if (isBackend()) { callback = callback || function () { }; require([widget], function() { callback(); }); } }
        function dragDropCallback(callback) { if (isBackend()) { callback(); } }
    </script>

     
    <script>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-134986-1']);
        _gaq.push(['_setDomainName', 'abb.com']);
        _gaq.push(['_setSiteSpeedSampleRate', 5]);
        
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    
        function TimeTracker(a, b, c) { return this.MAX_TIME = 6e5, this.category = a, this.variable = b, this.label = c ? c : void 0, this.startTime, this.elapsedTime, this.isDebug = !0, this } TimeTracker.prototype = { startTime: function () { return this.startTime = (new Date).getTime(), this }, endTime: function () { return this.elapsedTime = (new Date).getTime() - this.startTime, this }, debug: function (a) { return this.isDebug = void 0 == a ? !0 : a, this }, send: function (a, b) { if (a = a || this.variable, b = b || this.label, 0 < this.elapsedTime && this.elapsedTime < this.MAX_TIME) { var c = ["_trackTiming", this.category, a, this.elapsedTime, b]; this.isDebug && (c.push(100), window.console && window.console.log && console.log(c)), window._gaq.push(c) } return this } }, window.tt = new TimeTracker("Page", "General Timing"), window.tt.startTime();

        window.atctSettings = {"enableCart":true,"showCartCookieName":"showCart","host":"https://ace.abb.com","getCartOnInit":false,"previewCss":"https://www.abb.com/Sitefinity/WebsiteTemplates/AbbBranding/App_Scripts/requirejs-libs/cart/cartpreviews.css"};
        window.seoSettings = {"enableBreadcrumbSnippet":true};
    </script>
    
    <!--[if lt IE 9]>
        <script type="text/javascript" src="https://www07.abb.com/cdn/v9.12/scripts/min.html5shiv.js"></script>
    <![endif]-->
    
     <script type="text/javascript" data-pin="" src="./Power Grids _ ABB_files/min.head.js.download"></script>
	 <script type="text/javascript" src="./Scripts/PlayCanvasTool.js">


}</script>
     <meta name="robots" content="noindex"><meta property="og:title" content="Power Grids | ABB"><link href="./Power Grids _ ABB_files/Telerik.Web.UI.WebResource.axd" type="text/css" rel="stylesheet"><link href="./Power Grids _ ABB_files/empty.css" type="text/css" rel="stylesheet"><meta name="description" content="ABB is the world’s leading supplier of power and automation products, systems and service solutions across the power value chain."><meta name="keywords" content="power, grid, supplier, automation, products, systems, service, solutions, generation, transmission, distribution, utilities, industries, transportation, infrastructure, channel partners, renewable energies, microgrid, consulting"><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info = {"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"bacb928cda","applicationID":"831376","transactionName":"Zl0DZUZSX0ZRBkRaC18XIkRHR15YHwJCWgA=","queueTime":0,"applicationTime":0,"agent":"","atts":""}</script><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"XQEEV1ZAAAABV1ZU"};window.NREUM||(NREUM={}),__nr_require=function(t,n,e){function r(e){if(!n[e]){var o=n[e]={exports:{}};t[e][0].call(o.exports,function(n){var o=t[e][1][n];return r(o||n)},o,o.exports)}return n[e].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<e.length;o++)r(e[o]);return r}({1:[function(t,n,e){function r(t){try{s.console&&console.log(t)}catch(n){}}var o,i=t("ee"),a=t(15),s={};try{o=localStorage.getItem("__nr_flags").split(","),console&&"function"==typeof console.log&&(s.console=!0,o.indexOf("dev")!==-1&&(s.dev=!0),o.indexOf("nr_dev")!==-1&&(s.nrDev=!0))}catch(c){}s.nrDev&&i.on("internal-error",function(t){r(t.stack)}),s.dev&&i.on("fn-err",function(t,n,e){r(e.stack)}),s.dev&&(r("NR AGENT IN DEVELOPMENT MODE"),r("flags: "+a(s,function(t,n){return t}).join(", ")))},{}],2:[function(t,n,e){function r(t,n,e,r,s){try{p?p-=1:o(s||new UncaughtException(t,n,e),!0)}catch(f){try{i("ierr",[f,c.now(),!0])}catch(d){}}return"function"==typeof u&&u.apply(this,a(arguments))}function UncaughtException(t,n,e){this.message=t||"Uncaught error with no additional information",this.sourceURL=n,this.line=e}function o(t,n){var e=n?null:c.now();i("err",[t,e])}var i=t("handle"),a=t(16),s=t("ee"),c=t("loader"),f=t("gos"),u=window.onerror,d=!1,l="nr@seenError",p=0;c.features.err=!0,t(1),window.onerror=r;try{throw new Error}catch(h){"stack"in h&&(t(8),t(7),"addEventListener"in window&&t(5),c.xhrWrappable&&t(9),d=!0)}s.on("fn-start",function(t,n,e){d&&(p+=1)}),s.on("fn-err",function(t,n,e){d&&!e[l]&&(f(e,l,function(){return!0}),this.thrown=!0,o(e))}),s.on("fn-end",function(){d&&!this.thrown&&p>0&&(p-=1)}),s.on("internal-error",function(t){i("ierr",[t,c.now(),!0])})},{}],3:[function(t,n,e){t("loader").features.ins=!0},{}],4:[function(t,n,e){function r(t){}if(window.performance&&window.performance.timing&&window.performance.getEntriesByType){var o=t("ee"),i=t("handle"),a=t(8),s=t(7),c="learResourceTimings",f="addEventListener",u="resourcetimingbufferfull",d="bstResource",l="resource",p="-start",h="-end",m="fn"+p,w="fn"+h,v="bstTimer",y="pushState",g=t("loader");g.features.stn=!0,t(6);var b=NREUM.o.EV;o.on(m,function(t,n){var e=t[0];e instanceof b&&(this.bstStart=g.now())}),o.on(w,function(t,n){var e=t[0];e instanceof b&&i("bst",[e,n,this.bstStart,g.now()])}),a.on(m,function(t,n,e){this.bstStart=g.now(),this.bstType=e}),a.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),this.bstType])}),s.on(m,function(){this.bstStart=g.now()}),s.on(w,function(t,n){i(v,[n,this.bstStart,g.now(),"requestAnimationFrame"])}),o.on(y+p,function(t){this.time=g.now(),this.startPath=location.pathname+location.hash}),o.on(y+h,function(t){i("bstHist",[location.pathname+location.hash,this.startPath,this.time])}),f in window.performance&&(window.performance["c"+c]?window.performance[f](u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["c"+c]()},!1):window.performance[f]("webkit"+u,function(t){i(d,[window.performance.getEntriesByType(l)]),window.performance["webkitC"+c]()},!1)),document[f]("scroll",r,{passive:!0}),document[f]("keypress",r,!1),document[f]("click",r,!1)}},{}],5:[function(t,n,e){function r(t){for(var n=t;n&&!n.hasOwnProperty(u);)n=Object.getPrototypeOf(n);n&&o(n)}function o(t){s.inPlace(t,[u,d],"-",i)}function i(t,n){return t[1]}var a=t("ee").get("events"),s=t(18)(a,!0),c=t("gos"),f=XMLHttpRequest,u="addEventListener",d="removeEventListener";n.exports=a,"getPrototypeOf"in Object?(r(document),r(window),r(f.prototype)):f.prototype.hasOwnProperty(u)&&(o(window),o(f.prototype)),a.on(u+"-start",function(t,n){var e=t[1],r=c(e,"nr@wrapped",function(){function t(){if("function"==typeof e.handleEvent)return e.handleEvent.apply(e,arguments)}var n={object:t,"function":e}[typeof e];return n?s(n,"fn-",null,n.name||"anonymous"):e});this.wrapped=t[1]=r}),a.on(d+"-start",function(t){t[1]=this.wrapped||t[1]})},{}],6:[function(t,n,e){var r=t("ee").get("history"),o=t(18)(r);n.exports=r,o.inPlace(window.history,["pushState","replaceState"],"-")},{}],7:[function(t,n,e){var r=t("ee").get("raf"),o=t(18)(r),i="equestAnimationFrame";n.exports=r,o.inPlace(window,["r"+i,"mozR"+i,"webkitR"+i,"msR"+i],"raf-"),r.on("raf-start",function(t){t[0]=o(t[0],"fn-")})},{}],8:[function(t,n,e){function r(t,n,e){t[0]=a(t[0],"fn-",null,e)}function o(t,n,e){this.method=e,this.timerDuration=isNaN(t[1])?0:+t[1],t[0]=a(t[0],"fn-",this,e)}var i=t("ee").get("timer"),a=t(18)(i),s="setTimeout",c="setInterval",f="clearTimeout",u="-start",d="-";n.exports=i,a.inPlace(window,[s,"setImmediate"],s+d),a.inPlace(window,[c],c+d),a.inPlace(window,[f,"clearImmediate"],f+d),i.on(c+u,r),i.on(s+u,o)},{}],9:[function(t,n,e){function r(t,n){d.inPlace(n,["onreadystatechange"],"fn-",s)}function o(){var t=this,n=u.context(t);t.readyState>3&&!n.resolved&&(n.resolved=!0,u.emit("xhr-resolved",[],t)),d.inPlace(t,y,"fn-",s)}function i(t){g.push(t),h&&(x?x.then(a):w?w(a):(E=-E,O.data=E))}function a(){for(var t=0;t<g.length;t++)r([],g[t]);g.length&&(g=[])}function s(t,n){return n}function c(t,n){for(var e in t)n[e]=t[e];return n}t(5);var f=t("ee"),u=f.get("xhr"),d=t(18)(u),l=NREUM.o,p=l.XHR,h=l.MO,m=l.PR,w=l.SI,v="readystatechange",y=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"],g=[];n.exports=u;var b=window.XMLHttpRequest=function(t){var n=new p(t);try{u.emit("new-xhr",[n],n),n.addEventListener(v,o,!1)}catch(e){try{u.emit("internal-error",[e])}catch(r){}}return n};if(c(p,b),b.prototype=p.prototype,d.inPlace(b.prototype,["open","send"],"-xhr-",s),u.on("send-xhr-start",function(t,n){r(t,n),i(n)}),u.on("open-xhr-start",r),h){var x=m&&m.resolve();if(!w&&!m){var E=1,O=document.createTextNode(E);new h(a).observe(O,{characterData:!0})}}else f.on("fn-end",function(t){t[0]&&t[0].type===v||a()})},{}],10:[function(t,n,e){function r(t){var n=this.params,e=this.metrics;if(!this.ended){this.ended=!0;for(var r=0;r<d;r++)t.removeEventListener(u[r],this.listener,!1);if(!n.aborted){if(e.duration=a.now()-this.startTime,4===t.readyState){n.status=t.status;var i=o(t,this.lastSize);if(i&&(e.rxSize=i),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;e.cbTime=this.cbTime,f.emit("xhr-done",[t],t),s("xhr",[n,e,this.startTime])}}}function o(t,n){var e=t.responseType;if("json"===e&&null!==n)return n;var r="arraybuffer"===e||"blob"===e||"json"===e?t.response:t.responseText;return h(r)}function i(t,n){var e=c(n),r=t.params;r.host=e.hostname+":"+e.port,r.pathname=e.pathname,t.sameOrigin=e.sameOrigin}var a=t("loader");if(a.xhrWrappable){var s=t("handle"),c=t(11),f=t("ee"),u=["load","error","abort","timeout"],d=u.length,l=t("id"),p=t(14),h=t(13),m=window.XMLHttpRequest;a.features.xhr=!0,t(9),f.on("new-xhr",function(t){var n=this;n.totalCbs=0,n.called=0,n.cbTime=0,n.end=r,n.ended=!1,n.xhrGuids={},n.lastSize=null,p&&(p>34||p<10)||window.opera||t.addEventListener("progress",function(t){n.lastSize=t.loaded},!1)}),f.on("open-xhr-start",function(t){this.params={method:t[0]},i(this,t[1]),this.metrics={}}),f.on("open-xhr-end",function(t,n){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&n.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),f.on("send-xhr-start",function(t,n){var e=this.metrics,r=t[0],o=this;if(e&&r){var i=h(r);i&&(e.txSize=i)}this.startTime=a.now(),this.listener=function(t){try{"abort"===t.type&&(o.params.aborted=!0),("load"!==t.type||o.called===o.totalCbs&&(o.onloadCalled||"function"!=typeof n.onload))&&o.end(n)}catch(e){try{f.emit("internal-error",[e])}catch(r){}}};for(var s=0;s<d;s++)n.addEventListener(u[s],this.listener,!1)}),f.on("xhr-cb-time",function(t,n,e){this.cbTime+=t,n?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof e.onload||this.end(e)}),f.on("xhr-load-added",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&!this.xhrGuids[e]&&(this.xhrGuids[e]=!0,this.totalCbs+=1)}),f.on("xhr-load-removed",function(t,n){var e=""+l(t)+!!n;this.xhrGuids&&this.xhrGuids[e]&&(delete this.xhrGuids[e],this.totalCbs-=1)}),f.on("addEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-added",[t[1],t[2]],n)}),f.on("removeEventListener-end",function(t,n){n instanceof m&&"load"===t[0]&&f.emit("xhr-load-removed",[t[1],t[2]],n)}),f.on("fn-start",function(t,n,e){n instanceof m&&("onload"===e&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=a.now()))}),f.on("fn-end",function(t,n){this.xhrCbStart&&f.emit("xhr-cb-time",[a.now()-this.xhrCbStart,this.onload,n],n)})}},{}],11:[function(t,n,e){n.exports=function(t){var n=document.createElement("a"),e=window.location,r={};n.href=t,r.port=n.port;var o=n.href.split("://");!r.port&&o[1]&&(r.port=o[1].split("/")[0].split("@").pop().split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=n.hostname||e.hostname,r.pathname=n.pathname,r.protocol=o[0],"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname);var i=!n.protocol||":"===n.protocol||n.protocol===e.protocol,a=n.hostname===document.domain&&n.port===e.port;return r.sameOrigin=i&&(!n.hostname||a),r}},{}],12:[function(t,n,e){function r(){}function o(t,n,e){return function(){return i(t,[f.now()].concat(s(arguments)),n?null:this,e),n?void 0:this}}var i=t("handle"),a=t(15),s=t(16),c=t("ee").get("tracer"),f=t("loader"),u=NREUM;"undefined"==typeof window.newrelic&&(newrelic=u);var d=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],l="api-",p=l+"ixn-";a(d,function(t,n){u[n]=o(l+n,!0,"api")}),u.addPageAction=o(l+"addPageAction",!0),u.setCurrentRouteName=o(l+"routeName",!0),n.exports=newrelic,u.interaction=function(){return(new r).get()};var h=r.prototype={createTracer:function(t,n){var e={},r=this,o="function"==typeof n;return i(p+"tracer",[f.now(),t,e],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],e),o)try{return n.apply(this,arguments)}catch(t){throw c.emit("fn-err",[arguments,this,t],e),t}finally{c.emit("fn-end",[f.now()],e)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(t,n){h[n]=o(p+n)}),newrelic.noticeError=function(t){"string"==typeof t&&(t=new Error(t)),i("err",[t,f.now()])}},{}],13:[function(t,n,e){n.exports=function(t){if("string"==typeof t&&t.length)return t.length;if("object"==typeof t){if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if(!("undefined"!=typeof FormData&&t instanceof FormData))try{return JSON.stringify(t).length}catch(n){return}}}},{}],14:[function(t,n,e){var r=0,o=navigator.userAgent.match(/Firefox[\/\s](\d+\.\d+)/);o&&(r=+o[1]),n.exports=r},{}],15:[function(t,n,e){function r(t,n){var e=[],r="",i=0;for(r in t)o.call(t,r)&&(e[i]=n(r,t[r]),i+=1);return e}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],16:[function(t,n,e){function r(t,n,e){n||(n=0),"undefined"==typeof e&&(e=t?t.length:0);for(var r=-1,o=e-n||0,i=Array(o<0?0:o);++r<o;)i[r]=t[n+r];return i}n.exports=r},{}],17:[function(t,n,e){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],18:[function(t,n,e){function r(t){return!(t&&t instanceof Function&&t.apply&&!t[a])}var o=t("ee"),i=t(16),a="nr@original",s=Object.prototype.hasOwnProperty,c=!1;n.exports=function(t,n){function e(t,n,e,o){function nrWrapper(){var r,a,s,c;try{a=this,r=i(arguments),s="function"==typeof e?e(r,a):e||{}}catch(f){l([f,"",[r,a,o],s])}u(n+"start",[r,a,o],s);try{return c=t.apply(a,r)}catch(d){throw u(n+"err",[r,a,d],s),d}finally{u(n+"end",[r,a,c],s)}}return r(t)?t:(n||(n=""),nrWrapper[a]=t,d(t,nrWrapper),nrWrapper)}function f(t,n,o,i){o||(o="");var a,s,c,f="-"===o.charAt(0);for(c=0;c<n.length;c++)s=n[c],a=t[s],r(a)||(t[s]=e(a,f?s+o:o,i,s))}function u(e,r,o){if(!c||n){var i=c;c=!0;try{t.emit(e,r,o,n)}catch(a){l([a,e,r,o])}c=i}}function d(t,n){if(Object.defineProperty&&Object.keys)try{var e=Object.keys(t);return e.forEach(function(e){Object.defineProperty(n,e,{get:function(){return t[e]},set:function(n){return t[e]=n,n}})}),n}catch(r){l([r])}for(var o in t)s.call(t,o)&&(n[o]=t[o]);return n}function l(n){try{t.emit("internal-error",n)}catch(e){}}return t||(t=o),e.inPlace=f,e.flag=a,e}},{}],ee:[function(t,n,e){function r(){}function o(t){function n(t){return t&&t instanceof r?t:t?c(t,s,i):i()}function e(e,r,o,i){if(!l.aborted||i){t&&t(e,r,o);for(var a=n(o),s=h(e),c=s.length,f=0;f<c;f++)s[f].apply(a,r);var d=u[y[e]];return d&&d.push([g,e,r,a]),a}}function p(t,n){v[t]=h(t).concat(n)}function h(t){return v[t]||[]}function m(t){return d[t]=d[t]||o(e)}function w(t,n){f(t,function(t,e){n=n||"feature",y[e]=n,n in u||(u[n]=[])})}var v={},y={},g={on:p,emit:e,get:m,listeners:h,context:n,buffer:w,abort:a,aborted:!1};return g}function i(){return new r}function a(){(u.api||u.feature)&&(l.aborted=!0,u=l.backlog={})}var s="nr@context",c=t("gos"),f=t(15),u={},d={},l=n.exports=o();l.backlog=u},{}],gos:[function(t,n,e){function r(t,n,e){if(o.call(t,n))return t[n];var r=e();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return t[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(t,n,e){function r(t,n,e,r){o.buffer([t],r),o.emit(t,n,e)}var o=t("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(t,n,e){function r(t){var n=typeof t;return!t||"object"!==n&&"function"!==n?-1:t===window?0:a(t,i,function(){return o++})}var o=1,i="nr@id",a=t("gos");n.exports=r},{}],loader:[function(t,n,e){function r(){if(!x++){var t=b.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(u.abort,3e4),!(t&&t.licenseKey&&t.applicationID&&n))return u.abort();f(y,function(n,e){t[n]||(t[n]=e)}),c("mark",["onload",a()+b.offset],null,"api");var e=l.createElement("script");e.src="https://"+t.agent,n.parentNode.insertBefore(e,n)}}function o(){"complete"===l.readyState&&i()}function i(){c("mark",["domContent",a()+b.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(s=Math.max((new Date).getTime(),s))-b.offset}var s=(new Date).getTime(),c=t("handle"),f=t(15),u=t("ee"),d=window,l=d.document,p="addEventListener",h="attachEvent",m=d.XMLHttpRequest,w=m&&m.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:m,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},g=m&&w&&w[p]&&!/CriOS/.test(navigator.userAgent),b=n.exports={offset:s,now:a,origin:v,features:{},xhrWrappable:g};t(12),l[p]?(l[p]("DOMContentLoaded",i,!1),d[p]("load",r,!1)):(l[h]("onreadystatechange",o),d[h]("onload",r)),c("mark",["firstbyte",s],null,"api");var x=0,E=t(17)},{}]},{},["loader",2,10,4,3]);</script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="https://www07.abb.com/cdn/v9.12/scripts/main.js" src="./Power Grids _ ABB_files/main.js.download"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="layout8_4" src="./Power Grids _ ABB_files/jquery-layout8_4.js.download"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="imagegalleryinit" src="./Power Grids _ ABB_files/jquery-imagegallery-init.js.download"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="breadcrumbsnippetgeneration" src="./Power Grids _ ABB_files/BreadcrumbSnippetGeneration.js.download"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="imagesloaded" src="./Power Grids _ ABB_files/imagesloaded.pkgd.js.download"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="psutils" src="./Power Grids _ ABB_files/ps-utils.js.download"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="url" src="./Power Grids _ ABB_files/url.min.js.download"></script><script type="text/javascript" charset="utf-8" async="" data-requirecontext="_" data-requiremodule="dynamicbreadcrumblist" src="./Power Grids _ ABB_files/DynamicBreadcrumbList.js.download"></script><link type="text/css" rel="stylesheet" href="./Power Grids _ ABB_files/1.css">
	
	
	
	
	
	
	</head>

<body class="abbPage sWhite hasImageGallery"  onload="onloadPlayCanvas()">
    
        <input id="CurrentCultureName" type="hidden" value="en">
        <input id="CurrentSiteContext" type="hidden" value="grid">
        <input id="TemporaryCareers_CurrentCultureTwoLetterName" type="hidden" value="en">
        <input id="CID" type="hidden" value="">
    
    
    <form method="post" action="https://new.abb.com/grid" id="ctl02">
<div class="aspNetHidden">
<input type="hidden" name="ctl20_TSM" id="ctl20_TSM" value=";;System.Web.Extensions, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35:pl:59e0a739-153b-40bd-883f-4e212fc43305:ea597d4b:b25378d2;;Telerik.Sitefinity.Resources:en-US:d9b10a50-d5bb-49a0-90ea-e26117a8781f:b162b7a1:845dc525;Telerik.Web.UI, Version=2016.2.607.40, Culture=neutral, PublicKeyToken=121fae78165ba3d4:en-US:9011d63a-3dfe-4e5d-a6e8-76fd7593bed2:a1a4383a">
<input type="hidden" name="ctl21_TSSM" id="ctl21_TSSM" value=";Telerik.Sitefinity.Resources, Version=9.2.6253.0, Culture=neutral, PublicKeyToken=b28c218413bdf563:en:d9b10a50-d5bb-49a0-90ea-e26117a8781f:7a90d6a;Telerik.Web.UI, Version=2016.2.607.40, Culture=neutral, PublicKeyToken=121fae78165ba3d4:en:9011d63a-3dfe-4e5d-a6e8-76fd7593bed2:580b2269:eb8d8a8e">
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="">
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="">
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJMTQwMjgyNDc5ZBgBBR5fX0NvbnRyb2xzUmVxdWlyZVBvc3RCYWNrS2V5X18WAQUxY3RsMDAkdG9wTWVudSRUOTQzMTk1M0IwMDQkY3RsMDAkY3RsMDAkQnJlYWRjcnVtYvbIPLlYM4UCfB6AQaD+etAZhmoQQs9hdfL0UseRiR69">
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['ctl02'];
if (!theForm) {
    theForm = document.ctl02;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>


<script src="./Power Grids _ ABB_files/WebResource.axd" type="text/javascript"></script>


<script src="./Power Grids _ ABB_files/WebResource(1).axd" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
var __cultureInfo = {"name":"en","numberFormat":{"CurrencyDecimalDigits":2,"CurrencyDecimalSeparator":".","IsReadOnly":true,"CurrencyGroupSizes":[3],"NumberGroupSizes":[3],"PercentGroupSizes":[3],"CurrencyGroupSeparator":",","CurrencySymbol":"$","NaNSymbol":"NaN","CurrencyNegativePattern":0,"NumberNegativePattern":1,"PercentPositivePattern":0,"PercentNegativePattern":0,"NegativeInfinitySymbol":"-Infinity","NegativeSign":"-","NumberDecimalDigits":2,"NumberDecimalSeparator":".","NumberGroupSeparator":",","CurrencyPositivePattern":0,"PositiveInfinitySymbol":"Infinity","PositiveSign":"+","PercentDecimalDigits":2,"PercentDecimalSeparator":".","PercentGroupSeparator":",","PercentSymbol":"%","PerMilleSymbol":"‰","NativeDigits":["0","1","2","3","4","5","6","7","8","9"],"DigitSubstitution":1},"dateTimeFormat":{"AMDesignator":"AM","Calendar":{"MinSupportedDateTime":"\/Date(-62135596800000)\/","MaxSupportedDateTime":"\/Date(253402297199999)\/","AlgorithmType":1,"CalendarType":1,"Eras":[1],"TwoDigitYearMax":2029,"IsReadOnly":true},"DateSeparator":"/","FirstDayOfWeek":0,"CalendarWeekRule":0,"FullDateTimePattern":"dddd, MMMM d, yyyy h:mm:ss tt","LongDatePattern":"dddd, MMMM d, yyyy","LongTimePattern":"h:mm:ss tt","MonthDayPattern":"MMMM d","PMDesignator":"PM","RFC1123Pattern":"ddd, dd MMM yyyy HH\u0027:\u0027mm\u0027:\u0027ss \u0027GMT\u0027","ShortDatePattern":"M/d/yyyy","ShortTimePattern":"h:mm tt","SortableDateTimePattern":"yyyy\u0027-\u0027MM\u0027-\u0027dd\u0027T\u0027HH\u0027:\u0027mm\u0027:\u0027ss","TimeSeparator":":","UniversalSortableDateTimePattern":"yyyy\u0027-\u0027MM\u0027-\u0027dd HH\u0027:\u0027mm\u0027:\u0027ss\u0027Z\u0027","YearMonthPattern":"MMMM yyyy","AbbreviatedDayNames":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],"ShortestDayNames":["Su","Mo","Tu","We","Th","Fr","Sa"],"DayNames":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"AbbreviatedMonthNames":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec",""],"MonthNames":["January","February","March","April","May","June","July","August","September","October","November","December",""],"IsReadOnly":true,"NativeCalendarName":"Gregorian Calendar","AbbreviatedMonthGenitiveNames":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec",""],"MonthGenitiveNames":["January","February","March","April","May","June","July","August","September","October","November","December",""]},"eras":[1,"A.D.",null,0]};//]]>
</script>

<script src="./Power Grids _ ABB_files/Telerik.Web.UI.WebResource(1).axd" type="text/javascript"></script>
<script src="./Power Grids _ ABB_files/ScriptResource.axd" type="text/javascript"></script>
<script src="./Power Grids _ ABB_files/Telerik.Web.UI.WebResource(2).axd" type="text/javascript"></script>
<div class="aspNetHidden">

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="7E87A1E8">
</div><script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ctl20', 'ctl02', [], [], [], 90, 'ctl00');
//]]>
</script>
<input type="hidden" name="ctl00$ctl20" id="ctl20">
<script type="text/javascript">
//<![CDATA[
Sys.Application.setServerId("ctl20", "ctl00$ctl20");
Sys.Application._enableHistoryInScriptManager();
//]]>
</script>

        <div class="backendWrapper">
            



            <header class="floating-header" style="height: 90px; width: 1205px;">
                <div class="headerWrapperInner">
                
                    
<div id="topMenu_T9431953B004">
	

<div class="breadcrumb" style="">
    <span id="topMenu_T9431953B004_ctl00_ctl00_BreadcrumbLabel" style="display:none; " ></span>
    <div id="ctl00_topMenu_T9431953B004_ctl00_ctl00_Breadcrumb" class="RadSiteMap RadSiteMap_Default">
	<!-- 2016.2.607.40 --><ul class="rsmFlow rsmLevel rsmOneLevel">
		<li class="rsmItem sfNoBreadcrumbNavigation" style="left : 10"><a class="rsmLink" href="javascript: void(0)" title="ABB is the world’s leading supplier of power and automation products, systems and service solutions across the power value chain.">POWER GRIDS</a></li>
	</ul><input id="ctl00_topMenu_T9431953B004_ctl00_ctl00_Breadcrumb_ClientState" name="ctl00_topMenu_T9431953B004_ctl00_ctl00_Breadcrumb_ClientState" type="hidden">
</div>
</div>
</div><div id="globalCountrySelector">

    <input type="hidden" value="http://new.abb.com/grid">
    <a class="globalCountrySelectorButton"><span>Global site</span></a>
    
</div>
                    <div id="LogoPanel">
	
                        <div id="logo" style="background-image: url(&quot;/ResourcePackages/Fifa/assets/components/frame/images/abb-logo-33px.svg&quot;); height: 33px; width: 88px; background-size: 88px 33px;">
                            <a href="https://new.abb.com/grid"></a>
                        </div>
                    
</div>
                </div>
            </header>

            <div id="PublicWrapper" class="loPublicWrapper" style="position: relative; min-height: 150px;"><div class="globalCountrySelectorContent schemeWhite" style="top: -610px;">
        <div class="globalCountrySelectorClose"></div>
        <span class="header1">Choose region / language</span>
        <div class="quickSelector">Global site - <a href="https://new.abb.com/">English</a></div>
        <div class="globalCountrySelectorTabs ui-tabs ui-widget ui-widget-content ui-corner-all">

            <div class="globalCountrySelectorTabsNav">
                <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
<li class="ui-tab ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="europe" aria-labelledby="ui-id-1" aria-selected="true"><a href="https://new.abb.com/grid#europe" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">Europe</a></li>
<li class="ui-tab ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="americas" aria-labelledby="ui-id-2" aria-selected="false"><a href="https://new.abb.com/grid#americas" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">Americas</a></li>
<li class="ui-tab ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="middle-east-and-africa" aria-labelledby="ui-id-3" aria-selected="false"><a href="https://new.abb.com/grid#middle-east-and-africa" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3">Middle East and Africa</a></li>
<li class="ui-tab ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="asia-and-oceania" aria-labelledby="ui-id-4" aria-selected="false"><a href="https://new.abb.com/grid#asia-and-oceania" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-4">Asia and Oceania</a></li>
                </ul>
            </div>

                <div id="europe" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false">
                        <div>
                                <div class="country">
                                    <span>Austria - </span>
                                        <a href="http://new.abb.com/at">German</a>
                                </div>
                                <div class="country">
                                    <span>Belarus - </span>
                                        <a href="http://new.abb.com/by">Russian</a>
                                </div>
                                <div class="country">
                                    <span>Belgium - </span>
                                        <a href="http://new.abb.com/benelux">Dutch</a>
                                        <a href="http://new.abb.com/benelux/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Bulgaria - </span>
                                        <a href="http://new.abb.com/bg">Bulgarian</a>
                                        <a href="http://new.abb.com/bg/en">English</a>
                                </div>
                                <div class="country">
                                    <span>Croatia - </span>
                                        <a href="http://new.abb.com/hr">Croatian</a>
                                </div>
                                <div class="country">
                                    <span>Czech Republic - </span>
                                        <a href="http://new.abb.com/cz">Czech</a>
                                </div>
                                <div class="country">
                                    <span>Denmark - </span>
                                        <a href="http://new.abb.com/dk">Danish</a>
                                </div>
                                <div class="country">
                                    <span>Estonia - </span>
                                        <a href="http://new.abb.com/ee">Estonian</a>
                                </div>
                                <div class="country">
                                    <span>Finland - </span>
                                        <a href="http://new.abb.com/fi">Finnish</a>
                                </div>
                                <div class="country">
                                    <span>France - </span>
                                        <a href="http://new.abb.com/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Germany - </span>
                                        <a href="http://new.abb.com/de">German</a>
                                </div>
                        </div>
                        <div>
                                <div class="country">
                                    <span>Greece - </span>
                                        <a href="http://new.abb.com/gr">Greek</a>
                                </div>
                                <div class="country">
                                    <span>Hungary - </span>
                                        <a href="http://new.abb.com/hu">Hungarian</a>
                                </div>
                                <div class="country">
                                    <span>Ireland - </span>
                                        <a href="http://new.abb.com/ie/en">English</a>
                                </div>
                                <div class="country">
                                    <span>Italy - </span>
                                        <a href="http://new.abb.com/it">Italian</a>
                                </div>
                                <div class="country">
                                    <span>Latvia - </span>
                                        <a href="http://new.abb.com/lv">Latvian</a>
                                </div>
                                <div class="country">
                                    <span>Lithuania - </span>
                                        <a href="http://new.abb.com/lt">Lithuanian</a>
                                </div>
                                <div class="country">
                                    <span>Luxembourg - </span>
                                        <a href="http://new.abb.com/benelux/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Netherlands - </span>
                                        <a href="http://new.abb.com/benelux">Dutch</a>
                                </div>
                                <div class="country">
                                    <span>Norway - </span>
                                        <a href="http://new.abb.com/no">Norwegian</a>
                                </div>
                                <div class="country">
                                    <span>Poland - </span>
                                        <a href="http://new.abb.com/pl">Polish</a>
                                </div>
                                <div class="country">
                                    <span>Portugal - </span>
                                        <a href="http://new.abb.com/pt">Portuguese</a>
                                </div>
                        </div>
                        <div>
                                <div class="country">
                                    <span>Romania - </span>
                                        <a href="http://new.abb.com/ro">Romanian</a>
                                </div>
                                <div class="country">
                                    <span>Russia - </span>
                                        <a href="http://new.abb.com/ru">Russian</a>
                                </div>
                                <div class="country">
                                    <span>Serbia - </span>
                                        <a href="http://new.abb.com/rs">Serbian</a>
                                </div>
                                <div class="country">
                                    <span>Slovakia - </span>
                                        <a href="http://new.abb.com/sk">Slovakian</a>
                                </div>
                                <div class="country">
                                    <span>Slovenia - </span>
                                        <a href="http://new.abb.com/si">Slovenian</a>
                                </div>
                                <div class="country">
                                    <span>Spain - </span>
                                        <a href="http://new.abb.com/es">Spanish</a>
                                </div>
                                <div class="country">
                                    <span>Sweden - </span>
                                        <a href="http://new.abb.com/se">Swedish</a>
                                </div>
                                <div class="country">
                                    <span>Switzerland - </span>
                                        <a href="http://new.abb.com/ch/fr">French</a>
                                        <a href="http://new.abb.com/ch">German</a>
                                        <a href="http://new.abb.com/ch/it">Italian</a>
                                </div>
                                <div class="country">
                                    <span>Turkey - </span>
                                        <a href="http://new.abb.com/tr/en">English</a>
                                        <a href="http://new.abb.com/tr">Turkish</a>
                                </div>
                                <div class="country">
                                    <span>Ukraine - </span>
                                        <a href="http://new.abb.com/ua">Ukrainian</a>
                                </div>
                                <div class="country">
                                    <span>United Kingdom - </span>
                                        <a href="http://new.abb.com/uk">English</a>
                                </div>
                        </div>
                </div>
                <div id="americas" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
                        <div>
                                <div class="country">
                                    <span>Argentina - </span>
                                        <a href="http://new.abb.com/south-america">Spanish</a>
                                </div>
                                <div class="country">
                                    <span>Aruba - </span>
                                        <a href="http://new.abb.com/central-america-caribbean">Spanish</a>
                                </div>
                                <div class="country">
                                    <span>Bolivia - </span>
                                        <a href="http://new.abb.com/south-america">Spanish</a>
                                </div>
                                <div class="country">
                                    <span>Brazil - </span>
                                        <a href="http://new.abb.com/br">Portuguese</a>
                                </div>
                                <div class="country">
                                    <span>Canada - </span>
                                        <a href="http://new.abb.com/ca">English</a>
                                        <a href="http://new.abb.com/ca/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Chile - </span>
                                        <a href="http://new.abb.com/south-america">Spanish</a>
                                </div>
                                <div class="country">
                                    <span>Colombia - </span>
                                        <a href="http://new.abb.com/south-america">Spanish</a>
                                </div>
                        </div>
                        <div>
                                <div class="country">
                                    <span>Costa Rica - </span>
                                        <a href="http://new.abb.com/central-america-caribbean">Spanish</a>
                                </div>
                                <div class="country">
                                    <span>Dominican Republic - </span>
                                        <a href="http://new.abb.com/central-america-caribbean">Spanish</a>
                                </div>
                                <div class="country">
                                    <span>Ecuador - </span>
                                        <a href="http://new.abb.com/south-america">Spanish</a>
                                </div>
                                <div class="country">
                                    <span>El Salvador - </span>
                                        <a href="http://new.abb.com/central-america-caribbean">Spanish</a>
                                </div>
                                <div class="country">
                                    <span>Guatemala - </span>
                                        <a href="http://new.abb.com/central-america-caribbean">Spanish</a>
                                </div>
                                <div class="country">
                                    <span>Honduras - </span>
                                        <a href="http://new.abb.com/central-america-caribbean">Spanish</a>
                                </div>
                                <div class="country">
                                    <span>Mexico - </span>
                                        <a href="http://new.abb.com/mx">Spanish</a>
                                </div>
                        </div>
                        <div>
                                <div class="country">
                                    <span>Panama - </span>
                                        <a href="http://new.abb.com/central-america-caribbean">Spanish</a>
                                </div>
                                <div class="country">
                                    <span>Peru - </span>
                                        <a href="http://new.abb.com/south-america">Spanish</a>
                                </div>
                                <div class="country">
                                    <span>Puerto Rico - </span>
                                        <a href="http://new.abb.com/central-america-caribbean">Spanish</a>
                                </div>
                                <div class="country">
                                    <span>United States of America - </span>
                                        <a href="http://new.abb.com/us">English</a>
                                </div>
                                <div class="country">
                                    <span>Uruguay - </span>
                                        <a href="http://new.abb.com/south-america">Spanish</a>
                                </div>
                        </div>
                </div>
                <div id="middle-east-and-africa" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
                        <div>
                                <div class="country">
                                    <span>Algeria - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Angola - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Bahrain - </span>
                                        <a href="http://new.abb.com/middle-east">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Botswana - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Cameroon - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Côte d'Ivoire - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Egypt - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Ghana - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Israel - </span>
                                        <a href="http://new.abb.com/il">Hebrew</a>
                                </div>
                                <div class="country">
                                    <span>Jordan - </span>
                                        <a href="http://new.abb.com/middle-east">English</a>
                                </div>
                                <div class="country">
                                    <span>Kenya - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                        </div>
                        <div>
                                <div class="country">
                                    <span>Kuwait - </span>
                                        <a href="http://new.abb.com/middle-east">English</a>
                                </div>
                                <div class="country">
                                    <span>Lebanon - </span>
                                        <a href="http://new.abb.com/middle-east">English</a>
                                </div>
                                <div class="country">
                                    <span>Madagascar - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Mali - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Mauritius - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Morocco - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Namibia - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Nigeria - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Oman - </span>
                                        <a href="http://new.abb.com/middle-east">English</a>
                                </div>
                                <div class="country">
                                    <span>Pakistan - </span>
                                        <a href="http://new.abb.com/middle-east">English</a>
                                </div>
                                <div class="country">
                                    <span>Palestine - </span>
                                        <a href="http://new.abb.com/middle-east">English</a>
                                </div>
                        </div>
                        <div>
                                <div class="country">
                                    <span>Qatar - </span>
                                        <a href="http://new.abb.com/middle-east">English</a>
                                </div>
                                <div class="country">
                                    <span>Saudi Arabia - </span>
                                        <a href="http://new.abb.com/middle-east">English</a>
                                </div>
                                <div class="country">
                                    <span>Senegal - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>South Africa - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                </div>
                                <div class="country">
                                    <span>Tanzania - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Tunisia - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Uganda - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>United Arab Emirates - </span>
                                        <a href="http://new.abb.com/middle-east">English</a>
                                </div>
                                <div class="country">
                                    <span>Zambia - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                                <div class="country">
                                    <span>Zimbabwe - </span>
                                        <a href="http://new.abb.com/africa">English</a>
                                        <a href="http://new.abb.com/africa/fr">French</a>
                                </div>
                        </div>
                </div>
                <div id="asia-and-oceania" aria-labelledby="ui-id-4" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
                        <div>
                                <div class="country">
                                    <span>Australia - </span>
                                        <a href="http://new.abb.com/au">English</a>
                                </div>
                                <div class="country">
                                    <span>Bangladesh - </span>
                                        <a href="http://new.abb.com/bd">English</a>
                                </div>
                                <div class="country">
                                    <span>China - </span>
                                        <a href="http://new.abb.com/cn">Chinese</a>
                                        <a href="http://new.abb.com/cn/en">English</a>
                                </div>
                                <div class="country">
                                    <span>India - </span>
                                        <a href="http://new.abb.com/indian-subcontinent">English</a>
                                </div>
                                <div class="country">
                                    <span>Indonesia - </span>
                                        <a href="http://new.abb.com/id">English</a>
                                </div>
                                <div class="country">
                                    <span>Japan - </span>
                                        <a href="http://new.abb.com/jp">Japanese</a>
                                </div>
                        </div>
                        <div>
                                <div class="country">
                                    <span>Kazakhstan - </span>
                                        <a href="http://new.abb.com/kz">Russian</a>
                                </div>
                                <div class="country">
                                    <span>Malaysia - </span>
                                        <a href="http://new.abb.com/my">English</a>
                                </div>
                                <div class="country">
                                    <span>Mongolia - </span>
                                        <a href="http://new.abb.com/mn">Mongolian</a>
                                        <a href="http://new.abb.com/mn/en">English</a>
                                </div>
                                <div class="country">
                                    <span>Myanmar - </span>
                                        <a href="http://new.abb.com/mm">English</a>
                                </div>
                                <div class="country">
                                    <span>New Zealand - </span>
                                        <a href="http://new.abb.com/nz">English</a>
                                </div>
                                <div class="country">
                                    <span>Philippines - </span>
                                        <a href="http://new.abb.com/ph">English</a>
                                </div>
                        </div>
                        <div>
                                <div class="country">
                                    <span>Singapore - </span>
                                        <a href="http://new.abb.com/sg">English</a>
                                </div>
                                <div class="country">
                                    <span>South Korea - </span>
                                        <a href="http://new.abb.com/kr">Korean</a>
                                </div>
                                <div class="country">
                                    <span>Sri Lanka - </span>
                                        <a href="http://new.abb.com/indian-subcontinent">English</a>
                                </div>
                                <div class="country">
                                    <span>Taiwan - </span>
                                        <a href="http://new.abb.com/tw">Chinese - Traditional</a>
                                </div>
                                <div class="country">
                                    <span>Thailand - </span>
                                        <a href="http://new.abb.com/th">English</a>
                                </div>
                                <div class="country">
                                    <span>Vietnam - </span>
                                        <a href="http://new.abb.com/vn">English</a>
                                </div>
                        </div>
                </div>
        </div>
    </div>
                <div id="cookieConsent" class="schemeWhite" style="bottom: 29px;">
                    <div class="ccWrapper" style="width: 1205px;">
                        <table>
                            <tbody><tr>
                                <td>
                                    <p>
                                        <span>
                                            ABB's website uses cookies. By staying here you are agreeing to our use of cookies.
                                        </span>
                                        <span class="asLink">
                                            <i></i>
                                            <a href="https://new.abb.com/privacy-policy" id="learnMore">Learn more</a>
                                        </span>
                                    </p>
                                </td>
                                <td>
                                    <button id="CookieConsentBtn" class="button neutral">I agree</button>
                                </td>
                            </tr>
                        </tbody></table>
                        <div class="clear"></div>
                    </div>
                </div>
                <div id="flyout-menu" class="leftMenuWrapper" style="top: 90px;"><div class="tip" style="display: none; top: 152px; left: 352.5px;"><div class="tipMid">Search</div><div class="tipBtm"></div></div>
                    
<ul class="leftMenu">
    <li class="navigate">
        <a href="https://new.abb.com/grid#fm-navigate" class="tTip" title="">Navigate</a>
    </li>
    <li class="search">
        <a href="https://new.abb.com/grid#fm-search" class="tTip" title="">Search</a>
    </li>
    <li class="login">
        <a href="https://myportal.abb.com/?autologin" class="tTip" title="">Login</a>
    </li>
    <li class="cart" id="FlyoutCartIcon">
        <a href="https://new.abb.com/grid#fm-cart" class="tTip" title="">layouts-flyoutmenu-cart<div id="CartIconCounter"></div>
        </a>
    </li>
</ul>
<div class="submenus-wrapper">
    <div class="fm-submenu" id="fm-navigate">
        <div class="sf_cols">
            <div class="sf_colsOut sf_1col_1_100">
                <div id="flyoutMenu_T97430D44006_Col00" class="sf_colsIn sf_1col_1in_100"></div>
            </div>
        </div>

        <a href="https://new.abb.com/" class="link-level-back"><span class="ico triangle-left"></span>Home</a>
        <h3 class="fmHeadline link empty"><a href="https://new.abb.com/grid#"><span class="ico arrow-right"></span><span class="text"></span></a></h3>
        <nav class="page-structure">
            <ul class="level-first"></ul>
        </nav>
    </div>
    <!-- fm navigate -->
    <div class="fm-submenu main-search-container" id="fm-search">
        <div class="sf_cols">
            <div class="sf_colsOut sf_1col_1_100">
                <div id="flyoutMenu_T97430D44006_Col01" class="sf_colsIn sf_1col_1in_100">
<div class="flyoutMenuSearch">

    <h3 class="fmHeadline">
        <span class="text">Search</span>
    </h3>

    <p>
        <input type="search" id="main-search" class="input-text" placeholder="Enter Keyword" abb_search_query_textfield="">
    </p>

    <p>
        <button type="button" id="main-search-button" class="button neutral" abb_search_submit_button="">
            <span class="ico search"></span>Search now
        </button>
    </p>
</div>


<script type="text/javascript" language="javascript">
    ; (function (window, document) {
        var redirect = function (searchRedirectUrl, searchTextFieldValue) {
            if (searchTextFieldValue.trim() !== '') {
                window.location.href = searchRedirectUrl + '#query=' + encodeURI(searchTextFieldValue);
            }
            return false;
        };
        var onload = function () {
            var searchTextField = document.querySelector('[abb_search_query_textfield]');
            var searchSubmitButton = document.querySelector('[abb_search_submit_button]');
            var searchRedirectUrl = '/search/results';
            if (searchSubmitButton) {
                searchSubmitButton.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopImmediatePropagation();
                    if (searchTextField) {
                        redirect(searchRedirectUrl, searchTextField.value);
                    }
                });
            }
            if (searchTextField) {
                searchTextField.addEventListener('keypress', function (e) {
                    var event = e || window.event;
                    var charCode = event.which || event.keyCode;
                    if (charCode === 13) {
                        redirect(searchRedirectUrl, searchTextField.value);
                    }
                });
            }
        };
        document.addEventListener("DOMContentLoaded", onload);
    })(window, document);
</script></div>
            </div>
        </div>
    </div>
    <!-- / fm search -->
    <div class="fm-submenu select-language" id="fm-world">
        <div class="sf_cols">
            <div class="sf_colsOut sf_1col_1_100">
                <div id="flyoutMenu_T97430D44006_Col02" class="sf_colsIn sf_1col_1in_100"></div>
            </div>
        </div>
    </div>
    <!-- / fm world -->
    <div class="fm-submenu" id="fm-share">
        <div class="sf_cols">
            <div class="sf_colsOut sf_1col_1_100">
                <div id="flyoutMenu_T97430D44006_Col03" class="sf_colsIn sf_1col_1in_100">


<div class="flyoutMenuShareThisPage ">
    <div class="page-structure-long ">
        <h3 class="fmHeadline"><span class="text">Share this page</span></h3>
        <div class="lo_2cols_1_50">
            <ul class="social-links-list ">
                    <li>
                        <a href="https://www.facebook.com/share.php?u=http%3a%2f%2fnew.abb.com%2fgrid" target="_blank"><span class="ico social facebook "></span>Facebook</a>
                    </li>
                                    <li>
                        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http%3a%2f%2fnew.abb.com%2fgrid&amp;title=Power%20Grids" target="_blank"><span class="ico social linkedin "></span>LinkedIn</a>
                    </li>
                                    <li>
                        <a href="http://v.t.sina.com.cn/share/share.php?title=Power%20Grids&amp;url=http%3a%2f%2fnew.abb.com%2fgrid" target="_blank"><span class="ico social weibo "></span>Weibo</a>
                    </li>
                                    <li>
                        <a href="https://twitter.com/share?text=Power%20Grids&amp;url=http%3a%2f%2fnew.abb.com%2fgrid" target="_blank"><span class="ico social twitter "></span>Twitter</a>
                    </li>
                            </ul>
        </div>
            <div class="lo_2cols_2_50">
                <ul class="social-links-list ">
                        <li>
                            <a href="https://new.abb.com/grid#" onclick=" javascript:window.print(); "><span class="ico social print"></span>Print</a>
                        </li>
                </ul>
            </div>

    </div>
</div>


</div>
            </div>
        </div>
    </div>
    <!-- / fm share -->
    <div class="fm-submenu" id="fm-login">
        <div class="sf_cols">
            <div class="sf_colsOut sf_1col_1_100">
                <div id="flyoutMenu_T97430D44006_Col04" class="sf_colsIn sf_1col_1in_100"><div class="flyoutMenuLogin">    
    <div class="page-structure-long">
    
        <section class="login-to-my-abb clearfix">
            <h3 class="fmHeadline"><span class="text">Login to myABB</span></h3>
            <p class="error validation-message"><span class="ico error"></span>There was a problem with your request. Please fill in required fields</p>
            <p class="input-row">
                <label for="loginemail">E-mail address<span class="required"> *</span></label>
                <input type="text" name="loginemail" class="input-text loginemail" onkeydown="javascript: Site.loginByEnter(event);">
            </p>
            <p class="input-row">
                <label for="loginpass">Password<span class="required"> *</span></label>
                <input type="password" class="input-text loginpass" onkeydown="javascript: Site.loginByEnter(event);">
            </p>
            <ul class="useful-links-list">
                <li><a href="https://www.abb.com/User/RequestForgotPassword.aspx?culture=en-US" class="asLink"><span class="ico arrow-right"></span><i></i>Forgot your password?</a></li>
            </ul>
            <p>
                <button type="button" id="Login" value="Login" class="button neutral" data-url="https://www.abb.com/User/Login.aspx?autologin=false&amp;showDirectLoginFailedMessage=false&amp;culture=en-US" onclick="javascript:Site.login(this); ">
                    Login
                </button>
            </p>
        </section>
        <section class="sign-up-for-my-abb clearfix">
            <h3 class="fmHeadline"><span class="text">Sign up for myABB</span></h3>
            <p>Sign up for a myABB account to access some of our online services</p>
            <ul class="useful-links-list">
                <li><a href="http://www.abb.com/cawp/abbzh252/7cfb4466d6fa5dd2c125758200498ba3.aspx"><span class="ico arrow-right"></span>More about myABB</a></li>
            </ul>
            <p><a class="button neutral" href="https://www.abb.com/User/RegistrationPage.aspx?culture=en-US"><span style="color: white">Sign up</span></a></p>
        </section>
        <section class="loggedin-to-my-abb clearfix">
            <h3 class="fmHeadline"><span class="text">Welcome</span></h3>
            <p>You are being logged in as:</p>
            <b><p class="name"></p></b>
            <ul class="useful-links-list">
                <li><a href="https://www.abb.com/MyABB/default.aspx?culture=en-US"><span class="ico arrow-right"></span>Go to myABB</a></li>
            </ul>  
            <p><a class="button neutral" href="https://www.abb.com/MyABB/logout.aspx?culture=en-US"><span style="color: white">Logout</span></a></p>
        </section>
    </div>
</div>
</div>
            </div>
        </div>
    </div>
    <!-- / fm login -->
    <div class="fm-submenu" id="fm-rate">
        <div class="sf_cols">
            <div class="sf_colsOut sf_1col_1_100">
                <div id="flyoutMenu_T97430D44006_Col05" class="sf_colsIn sf_1col_1in_100"><div class="sfContentBlock"><div class="sf_cols"> <div class="sf_colsOut sf_1col_1_100"> <div class="sf_colsIn sf_1col_1in_100"> <div class="sfFormsEditor sfTopLbls"> <div class="page-structure-long"> <div> <div class="sfFormRadiolist"> <h3 class="fmHeadline"><span class="text">Rate this page</span></h3> <div class="rate-this-page clearfix"> <div class="sfTxtLbl">General impression</div> <div class="rate-inputs clearfix"> <span> <input type="radio" name="rating_group" id="rb_positive" checked="true" value="Positive"> <label for="rb_positive">Positive</label> <input type="radio" id="rb_negative" name="rating_group" value="Negative"> <label for="rb_negative">Negative</label> </span> </div> </div> </div> <div class="sfFormSubmit button rate_neutral rate_submit sfSubmitBtnSmall"> <input type="submit" value="Submit" class="button rate_neutral rate_submit"> </div> </div> </div> </div> </div> </div> </div>


</div></div>
            </div>
        </div>

    </div>
    <!-- / fm rate -->
    <div class="fm-submenu" id="fm-cart">
        <div class="sf_cols">
            <div class="sf_colsOut sf_1col_1_100">
                <div id="flyoutMenu_T97430D44006_Col06" class="sf_colsIn sf_1col_1in_100">
                    <div id="fm-CartWrapper">
                        <div id="CartHeader">
                            <h3 class="fmHeadline"><span class="text">Your cart <span id="CartHeaderCounter"></span></span></h3>
                            <span id="CartAdditionalInfo"><a href="https://new.abb.com/privacy-policy"><i class="ico arrow-right"></i>Learn more about shopping on ABB.com</a></span>
                        </div>
                        <div id="ExternalCartComponents">
                            <iframe id="CartIframe" scrolling="no" seamless="seamless" src="./Power Grids _ ABB_files/saved_resource.html"></iframe>
                        </div>
                        <div id="CartFooter">
                            <a class="button neutral" id="CartCheckoutButton" href="https://new.abb.com/grid#checkout"><span>Checkout</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / fm cart -->
</div>
<script>





    $(function () {
        if (window.atctSettings.enableCart == true && $.cookie(window.atctSettings.showCartCookieName) != null) {
            jsLibs.push("carticonwidgetinitalization");
        }
    });

</script>

                </div>
                
<div class="lo_cols schemeWhite">
    <div class="lo_colsOut lo_1col_1_100">
        <div class="lo_colsIn lo_1col_1in_100">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_T9431953B005_Col00" class="sf_colsIn sf_1col_1in_100"><div class="colorBgWrapperInner">
    <div class="sf_cols">
        <div class="sf_colsOut sf_1col_1_100">
            <!-- BEGIN CONTENT-->
            <div id="Content_T9431953B006_Col00" class="sf_colsIn sf_1col_1in_100"><div class="lo_cols t">
    <div class="lo_colsOut lo_1col_1_100">
        <div class="lo_colsIn lo_1col_1in_100">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C112_Col00" class="sf_colsIn sf_1col_1in_100 layout12">

            <div class="textContainer headline headline-cursor" >
                <h1 class="tile-headline" >Power Grids</h1>
            </div>
			
			
			

			
		
<div style="margin-top:50px; padding-bottom:50px ">
<div id="slideshow_content" 
   style="position: relative;
padding-bottom: 30%;
padding-top: 30px;
height: 0;
   scrolling="no" 
   allowtransparency="true  -webkit-overflow-scrolling:touch; overflow:auto;">

   
   
  <iframe src="./index.html"
	id="transformer_iframe"
   width="100%"
   scrolling="no" 
   webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true"
   style=" position: absolute; top: 0; left: 0; right : 0; bottom : 0 width: 100%; height: 100%; margin: 0; padding: 0;border: 0;min-width:100% overflow:auto">
			
			
</iframe> 
</div>	
</div>
	
<div class="slider hoverBorder" style="height: 100%;">



   	<div class="nivoSlider slides" style="width: 1183px; height:503px ">
		
			
                 <!--<a href="https://new.abb.com/news/detail/5053/abb-commissions-historical-power-interconnector-in-canada" class="nivo-imageLink" style="display: none;">
                    <img class="clickable" src="./Power Grids _ ABB_files/maritime-link_1183x-350.jpg" alt="" title="#slide0caption" style="display: none;">
                </a>
               <a href="http://www.abb.com/cawp/seitp202/FECCFBBED4925EEAC125827800202966.aspx" class="nivo-imageLink" style="display: block;">
                    <img class="clickable" src="./Power Grids _ ABB_files/50-years-gis-landing-page.jpg" alt="" title="#slide1caption" style="width: 1183px; visibility: hidden;">
                </a>
                <a href="http://new.abb.com/grid/stronger-smarter-greener" class="nivo-imageLink" style="display: none;">
                    <img class="clickable" alt="" title="#slide2caption" style="display: none;" src="./Power Grids _ ABB_files/dubai-abb-power-grids-(1).jpg">-->
                </a>
				<img class="nivo-main-image clickable" src="./Power Grids _ ABB_files/50-years-gis-landing-page.jpg" style="display: block; height: auto; width: 1183px ;  "><div class="nivo-caption" style="display: block; height: 92px;">
                    <div class="caption gradientGrayscale clickable" data-href="http://www.abb.com/cawp/seitp202/FECCFBBED4925EEAC125827800202966.aspx" >
                <div class="textContainer">
                    <span class="label"></span>
                    <h1>ABB celebrates 50 years of pioneering gas insulated switchgear technology  </h1>
                            <!--<a href="http://www.abb.com/cawp/seitp202/FECCFBBED4925EEAC125827800202966.aspx" target="_blank"><i class="arrowLinkBig"></i>Read more and watch video</a>
                </div>
				
            </div>
			
            </div>
			</div>
			
		
			
		<!--<div class="nivo-controlNav"><a class="nivo-control" rel="0"></a><a class="nivo-control active" rel="1"></a><a class="nivo-control" rel="2"></a></div>
    <div class="captions">
            <div id="slide0caption">
                    <div class="caption gradientGrayscale clickable" data-href="https://new.abb.com/news/detail/5053/abb-commissions-historical-power-interconnector-in-canada">
                <div class="textContainer">
                    <span class="label"></span>
                    <h1>ABB commissions historical power interconnector in Canada </h1>
                            <a href="https://new.abb.com/news/detail/5053/abb-commissions-historical-power-interconnector-in-canada" target="_blank"><i class="arrowLinkBig"></i>Read more and watch video</a>
                </div>
            </div>
            </div>
            <div id="slide1caption">
                    <div class="caption gradientGrayscale clickable" data-href="http://www.abb.com/cawp/seitp202/FECCFBBED4925EEAC125827800202966.aspx">
                <div class="textContainer">
                    <span class="label"></span>
                    <h1>ABB celebrates 50 years of pioneering gas insulated switchgear technology  </h1>
                            <a href="http://www.abb.com/cawp/seitp202/FECCFBBED4925EEAC125827800202966.aspx" target="_blank"><i class="arrowLinkBig"></i>Read more and watch video</a>
                </div>
            </div>
            </div>
            <div id="slide2caption">
                    <div class="caption gradientGrayscale clickable" data-href="http://new.abb.com/grid/stronger-smarter-greener">
                <div class="textContainer">
                    <span class="label"></span>
                    <h1>Enabling a stronger, smarter and greener grid</h1>
                            <a href="http://new.abb.com/grid/stronger-smarter-greener" target="_blank"><i class="arrowLinkBig"></i>Read more</a>
                </div>
            </div>
			
            </div>
			
    </div>
	-->
	
	
	<!--
    <div class="sliderBorder"></div>

    <script>
        var sliderImages = [];
    </script>

        <script>
            sliderImages.push('https://edit.abb.com/images/librariesprovider157/power-grid-highlights-2018/maritime-link_1183x-350.jpg?sfvrsn=e8c62914_1');
        </script>
        <script>
            sliderImages.push('https://edit.abb.com/images/librariesprovider157/power-grid-highlights-2018/50-years-gis-landing-page.jpg?sfvrsn=a2394914_1');
        </script>
        <script>
            sliderImages.push('http://edit.abb.com/images/librariesprovider157/p-a-for-the-grid---highlights/dubai-abb-power-grids-(1).jpg?sfvrsn=7a92bd13_1');
        </script>
    <script>
        var rewriteregex = /^(https?:)?\/?\/?edit.abb.com/gi;
        for (var i = 0; i < sliderImages.length; i++) {
            sliderImages[i] = sliderImages[i].replace(rewriteregex, "//www07.abb.com");
        }
    </script>
-->


</div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
	
            <div class="textContainer headline" style="padding-top: 50px">
                <h3 class="tile-headline">Highlights</h3>
            </div>
<div class="lo_cols t">
    <div class="lo_colsOut lo_2cols_1_67">
        <div class="lo_colsIn lo_2cols_1in_67">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C115_Col00" class="sf_colsIn sf_1col_1in_100 layout8">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lo_colsOut lo_2cols_2_33">
        <div class="lo_colsIn lo_2cols_2in_33">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C115_Col01" class="sf_colsIn sf_1col_1in_100 layout4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    jsLibs.push("layout8_4");
</script><div class="lo_cols t imageGalleryContainer">

                <div class="newsTiles ui-carousel ui-touchCarousel ui-touchCarousel-horizontal ui-touchCarousel-items-4 ui-touchCarousel-rows-1">
                    <div class="mask" style="height: 247px;"><div id="Content_C116_Col00" class="sf_colsIn sf_1col_1in_100 layout12 t ui-draggable" style="width: 3564px;"><div class="tile contentTile" style="width: 297px !important">
        <a class="gradientGrayscale1112 inner clickable" href="http://new.abb.com/news/detail/5025/abb-technology-keeps-electricity-flowing-for-top-cuban-tourist-resort" data-ga-params="Content;Content tiles clicked;ABB technology keeps electricity flowing for top Cuban tourist resort" style="height: 238px;">
            <div class="imageContainer" style="height: 147px;">
                 <img src="./Power Grids _ ABB_files/cuba_292x-146.jpg" class="stretch" alt="">
        </div>
            <div class="textContainer">
            
                <span class="header3">ABB technology keeps electricity flowing for top Cuban tourist resort</span>
    
                <br>

        </div>
            </a>
</div>

<script>
    dragDropCallback(function () {
        rememberContainingLayout();
    });
</script>

<div class="tile contentTile" style="width: 297px !important">
        <a class="gradientGrayscale1112 inner clickable" href="https://www.abb-conversations.com/2018/06/poor-power-quality/" data-ga-params="Content;Content tiles clicked;Poor power quality?" style="height: 238px;">
            <div class="imageContainer" style="height: 147px;">
                 <img src="./Power Grids _ ABB_files/power-quality-292.jpg" class="stretch" alt="">
        </div>
            <div class="textContainer">
            
                <span class="header3">Poor power quality?</span>
    
                <br>

        </div>
            </a>
</div>

<script>
    dragDropCallback(function () {
        rememberContainingLayout();
    });
</script>

<div class="tile contentTile" style="width: 297px !important">
        <a class="gradientGrayscale1112 inner clickable" href="http://new.abb.com/news/detail/4994/abb-to-install-multipurpose-microgrid-in-australia" data-ga-params="Content;Content tiles clicked;ABB to install multipurpose microgrid in Australia" style="height: 238px;">
            <div class="imageContainer" style="height: 147px;">
                 <img src="./Power Grids _ ABB_files/australia-microgrid-292.jpg" class="stretch" alt="">
        </div>
            <div class="textContainer">
            
                <span class="header3">ABB to install multipurpose microgrid in Australia</span>
    
                <br>

        </div>
            </a>
</div>

<script>
    dragDropCallback(function () {
        rememberContainingLayout();
    });
</script>

<div class="tile contentTile" style="width: 297px !important">
        <a class="gradientGrayscale1112 inner clickable" href="https://new.abb.com/news/detail/4958/switzerland-has-pioneered-more-than-just-chocolate-and-watches" data-ga-params="Content;Content tiles clicked;Switzerland has pioneered more than just chocolate and watches" style="height: 238px;">
            <div class="imageContainer" style="height: 147px;">
                 <img src="./Power Grids _ ABB_files/pioneering-switzerland_292.jpg" class="stretch" alt="">
        </div>
            <div class="textContainer">
            
                <span class="header3">Switzerland has pioneered more than just chocolate and watches</span>
    
                <br>

        </div>
            </a>
</div>

<script>
    dragDropCallback(function () {
        rememberContainingLayout();
    });
</script>

<div class="tile contentTile" style="width: 297px !important">
        <a class="gradientGrayscale1112 inner clickable" href="https://www.abb-conversations.com/2018/06/even-the-swiss-need-timekeepers/" data-ga-params="Content;Content tiles clicked;Even the Swiss need timekeepers" style="height: 238px;">
            <div class="imageContainer" style="height: 147px;">
                 <img src="./Power Grids _ ABB_files/rail-abb-switzerland_292.jpg" class="stretch" alt="">
        </div>
            <div class="textContainer">
            
                <span class="header3">Even the Swiss need timekeepers</span>
    
                <br>

        </div>
            </a>
</div>

<script>
    dragDropCallback(function () {
        rememberContainingLayout();
    });
</script>

<div class="tile contentTile" style="width: 297px !important">
        <a class="gradientGrayscale1112 inner clickable" href="https://new.abb.com/news/detail/4956/abb-technology-works-behind-the-scenes-in-scenic-switzerland" data-ga-params="Content;Content tiles clicked;ABB technology works behind the scenes in scenic Switzerland " style="height: 238px;">
            <div class="imageContainer" style="height: 147px;">
                 <img src="./Power Grids _ ABB_files/scenic-switzerland_292(1).jpg" class="stretch" alt="">
        </div>
            <div class="textContainer">
            
                <span class="header3">ABB technology works behind the scenes in scenic Switzerland </span>
    
                <br>

        </div>
            </a>
</div>

<script>
    dragDropCallback(function () {
        rememberContainingLayout();
    });
</script>

<div class="tile contentTile" style="width: 297px !important">
        <a class="gradientGrayscale1112 inner clickable" href="https://new.abb.com/news/detail/4917/abb-to-upgrade-landmark-substation-in-helsinki" data-ga-params="Content;Content tiles clicked;ABB to upgrade landmark substation in Helsinki " style="height: 238px;">
            <div class="imageContainer" style="height: 147px;">
                 <img src="./Power Grids _ ABB_files/fingrid_292x-146.jpg" class="stretch" alt="">
        </div>
            <div class="textContainer">
            
                <span class="header3">ABB to upgrade landmark substation in Helsinki </span>
    
                <br>

        </div>
            </a>
</div>

<script>
    dragDropCallback(function () {
        rememberContainingLayout();
    });
</script>

<div class="tile contentTile" style="width: 297px !important">
        <a class="gradientGrayscale1112 inner clickable" href="https://new.abb.com/news/detail/4876/abb-to-strengthen-power-infrastructure-in-iraq" data-ga-params="Content;Content tiles clicked;ABB to strengthen power infrastructure in Iraq" style="height: 238px;">
            <div class="imageContainer" style="height: 147px;">
                 <img src="./Power Grids _ ABB_files/air-insulated-substation_292.jpg" class="stretch" alt="">
        </div>
            <div class="textContainer">
            
                <span class="header3">ABB to strengthen power infrastructure in Iraq</span>
    
                <br>

        </div>
            </a>
</div>

<script>
    dragDropCallback(function () {
        rememberContainingLayout();
    });
</script>

<div class="tile contentTile" style="width: 297px !important">
        <a class="gradientGrayscale1112 inner clickable" href="http://www.abb.com/cawp/seitp202/D937520E7B7DFD054825828F00189138.aspx" data-ga-params="Content;Content tiles clicked;ABB switchgear to support reliable power in growing area of Berlin" style="height: 238px;">
            <div class="imageContainer" style="height: 147px;">
                 <img src="./Power Grids _ ABB_files/gis-292x-146.jpg" class="stretch" alt="">
        </div>
            <div class="textContainer">
            
                <span class="header3">ABB switchgear to support reliable power in growing area of Berlin</span>
    
                <br>

        </div>
            </a>
</div>

<script>
    dragDropCallback(function () {
        rememberContainingLayout();
    });
</script>

<div class="tile contentTile" style="width: 297px !important">
        <a class="gradientGrayscale1112 inner clickable" href="https://www.abb-conversations.com/2018/05/abb-helps-power-the-reichstag-in-berlin/" data-ga-params="Content;Content tiles clicked;ABB helps power the Reichstag in Berlin" style="height: 238px;">
            <div class="imageContainer" style="height: 147px;">
                 <img src="./Power Grids _ ABB_files/reichstag_292.jpg" class="stretch" alt="">
        </div>
            <div class="textContainer">
            
                <span class="header3">ABB helps power the Reichstag in Berlin</span>
    
                <br>

        </div>
            </a>
</div>

<script>
    dragDropCallback(function () {
        rememberContainingLayout();
    });
</script>

<div class="tile contentTile" style="width: 297px !important">
        <a class="gradientGrayscale1112 inner clickable" href="http://www.abb.com/cawp/seitp202/241F590DAD3769234825828F0019E247.aspx" data-ga-params="Content;Content tiles clicked;ABB technology revs up German grid" style="height: 238px;">
            <div class="imageContainer" style="height: 147px;">
                 <img src="./Power Grids _ ABB_files/energietechnik05-292x-146.jpg" class="stretch" alt="">
        </div>
            <div class="textContainer">
            
                <span class="header3">ABB technology revs up German grid</span>
    
                <br>

        </div>
            </a>
</div>

<script>
    dragDropCallback(function () {
        rememberContainingLayout();
    });
</script>

<div class="tile contentTile" style="width: 297px !important">
        <a class="gradientGrayscale1112 inner clickable" href="http://www.abb.com/cawp/seitp202/DDDFAB0406A779674825828F00197A7A.aspx" data-ga-params="Content;Content tiles clicked;Integrating renewables to support Germany’s energy transition" style="height: 238px;">
            <div class="imageContainer" style="height: 147px;">
                 <img src="./Power Grids _ ABB_files/dolwin2-292-x-146.jpg" class="stretch" alt="">
        </div>
            <div class="textContainer">
            
                <span class="header3">Integrating renewables to support Germany’s energy transition</span>
    
                <br>

        </div>
            </a>
</div>

<script>
    dragDropCallback(function () {
        rememberContainingLayout();
    });
</script>


                        
                    </div></div><div class="outerWrapper"><div class="wrapper"><a href="https://new.abb.com/grid#" class="prev disabled"></a><ol class="pagination-links"><li class="current"><a href="https://new.abb.com/grid#item-0">&nbsp;</a></li><li><a href="https://new.abb.com/grid#item-1">&nbsp;</a></li><li><a href="https://new.abb.com/grid#item-2">&nbsp;</a></li></ol><a href="https://new.abb.com/grid#" class="next"></a></div></div>
                </div>
            </div>
<script>
    jsLibs.push("imagegalleryinit");
    widgetInit("imagegalleryinit", function () {
        if ($('body').attr('class').indexOf('sfPageEditor') != -1) {
            $(".imageGalleryContainer").removeClass("preInitState abbLoaderDrop");
        }
    });
</script><div class="lo_cols t">
    <div class="lo_colsOut lo_3cols_1_33">
        <div class="lo_colsIn lo_3cols_1in_33">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C245_Col00" class="sf_colsIn sf_1col_1in_100 layout4">

            <div class="textContainer headline">
                <h3 class="tile-headline">Our offering</h3>
            </div>
<div class="tile contentTile" >
        <a  href="https://new.abb.com/grid/offering" data-ga-params="Content;Content tiles clicked;" style="height: 196px;">
            <div class="imageContainer" style="height: 196px;">
                 <img src="./Power Grids _ ABB_files/offering_light.jpg" class="stretch" alt="">
        </div>
                </a>
</div>

<script>
    dragDropCallback(function () {
        rememberContainingLayout();
    });
</script>

<div class="sfContentBlock" s >Explore&nbsp;power and automation products, systems and service solutions for the grid


</div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="lo_colsOut lo_3cols_2_34">
        <div class="lo_colsIn lo_3cols_2in_34">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C245_Col01" class="sf_colsIn sf_1col_1in_100 layout4">

            <div class="textContainer headline" style = "margin-left:30px">
                <h3 class="tile-headline">Technology and innovation</h3>
            </div>
<div class="tile contentTile" style = "margin-left:30px">
        <a href="https://new.abb.com/grid/technology" data-ga-params="Content;Content tiles clicked;" style="height: 196px;">
            <div class="imageContainer" style="height: 196px;">
                 <img src="./Power Grids _ ABB_files/technology-and-innovation.jpg"   class="stretch" alt="">
        </div>
                </a>
</div>

<script>
    dragDropCallback(function () {
        rememberContainingLayout();
    });
</script>

<div class="sfContentBlock"  style = "margin-left:30px">Discover why ABB is a technology pioneer and leader in innovation


</div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="lo_colsOut lo_3cols_3_33">
        <div class="lo_colsIn lo_3cols_3in_33">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C245_Col02" class="sf_colsIn sf_1col_1in_100 layout4">

            <div class="textContainer headline">
                <h3 class="tile-headline" style = "margin-left:30px">Resource center</h3>
            </div>
<div class="tile contentTile" style = "margin-left:30px">
        <a href="https://new.abb.com/grid/resources" data-ga-params="Content;Content tiles clicked;" style="height: 196px;">
            <div class="imageContainer" style="height: 196px;">
                 <img src="./Power Grids _ ABB_files/resourcescenter.jpg" class="stretch" alt="">
        </div>
                </a>
</div>

<script>
    dragDropCallback(function () {
        rememberContainingLayout();
    });
</script>

<div class="sfContentBlock"style = "margin-left:30px">Keep up to date with the latest news, insights, events and press material


</div></div>
                </div>
            </div>
        </div>
    </div>
</div><div class="lo_cols t">
    <div class="lo_colsOut lo_2cols_1_67">
        <div class="lo_colsIn lo_2cols_1in_67">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C153_Col00" class="sf_colsIn sf_1col_1in_100 layout8">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lo_colsOut lo_2cols_2_33">
        <div class="lo_colsIn lo_2cols_2in_33">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C153_Col01" class="sf_colsIn sf_1col_1in_100 layout4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    jsLibs.push("layout8_4");
</script><div class="lo_cols t">
    <div class="lo_colsOut lo_2cols_1_50">
        <div class="lo_colsIn lo_2cols_1in_50">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C226_Col00" class="sf_colsIn sf_1col_1in_100 layout6">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lo_colsOut lo_2cols_2_50">
        <div class="lo_colsIn lo_2cols_2in_50">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C226_Col01" class="sf_colsIn sf_1col_1in_100 layout6">
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div><div class="lo_cols t">
    <div class="lo_colsOut lo_4cols_1_25">
        <div class="lo_colsIn lo_4cols_1in_25">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C223_Col00" class="sf_colsIn sf_1col_1in_100 layout3"></div>
                </div>
            </div>   
        </div>
    </div>
    <div class="lo_colsOut lo_4cols_2_25">
        <div class="lo_colsIn lo_4cols_2in_25">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C223_Col01" class="sf_colsIn sf_1col_1in_100 layout3"></div>
                </div>
            </div>   
        </div>
    </div>
    <div class="lo_colsOut lo_4cols_3_25">
        <div class="lo_colsIn lo_4cols_3in_25">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C223_Col02" class="sf_colsIn sf_1col_1in_100 layout3"></div>
                </div>
            </div>   
        </div>
    </div>
    <div class="lo_colsOut lo_4cols_4_25">
        <div class="lo_colsIn lo_4cols_4in_25">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C223_Col03" class="sf_colsIn sf_1col_1in_100 layout3"></div>
                </div>
            </div>   
        </div>            
    </div>
</div>
<div class="lo_cols t">
    <div class="lo_colsOut lo_2cols_1_67">
        <div class="lo_colsIn lo_2cols_1in_67">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C244_Col00" class="sf_colsIn sf_1col_1in_100 layout8">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lo_colsOut lo_2cols_2_33">
        <div class="lo_colsIn lo_2cols_2in_33">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C244_Col01" class="sf_colsIn sf_1col_1in_100 layout4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    jsLibs.push("layout8_4");
</script><div class="lo_cols t">
    <div class="lo_colsOut lo_2cols_1_33">
        <div class="lo_colsIn lo_2cols_1in_33">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C237_Col00" class="sf_colsIn sf_1col_1in_100 layout4"><div class="lo_cols t">
    <div class="lo_colsOut lo_1col_1_100">
        <div class="lo_colsIn lo_1col_1in_100">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C240_Col00" class="sf_colsIn sf_1col_1in_100 layout12"></div>
                </div>
            </div>
        </div>
    </div>
</div><div class="lo_cols t">
    <div class="lo_colsOut lo_2cols_1_50">
        <div class="lo_colsIn lo_2cols_1in_50">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C238_Col00" class="sf_colsIn sf_1col_1in_100 layout6">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lo_colsOut lo_2cols_2_50">
        <div class="lo_colsIn lo_2cols_2in_50">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C238_Col01" class="sf_colsIn sf_1col_1in_100 layout6">
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lo_colsOut lo_2cols_2_67">
        <div class="lo_colsIn lo_2cols_2in_67">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C237_Col01" class="sf_colsIn sf_1col_1in_100 layout8"><div class="lo_cols t">
    <div class="lo_colsOut lo_1col_1_100">
        <div class="lo_colsIn lo_1col_1in_100">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C241_Col00" class="sf_colsIn sf_1col_1in_100 layout12"><div class="lo_cols t">
    <div class="lo_colsOut lo_4cols_1_25">
        <div class="lo_colsIn lo_4cols_1in_25">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C239_Col00" class="sf_colsIn sf_1col_1in_100 layout3"></div>
                </div>
            </div>   
        </div>
    </div>
    <div class="lo_colsOut lo_4cols_2_25">
        <div class="lo_colsIn lo_4cols_2in_25">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C239_Col01" class="sf_colsIn sf_1col_1in_100 layout3"></div>
                </div>
            </div>   
        </div>
    </div>
    <div class="lo_colsOut lo_4cols_3_25">
        <div class="lo_colsIn lo_4cols_3in_25">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C239_Col02" class="sf_colsIn sf_1col_1in_100 layout3"></div>
                </div>
            </div>   
        </div>
    </div>
    <div class="lo_colsOut lo_4cols_4_25">
        <div class="lo_colsIn lo_4cols_4in_25">
            <div class="sf_cols">
                <div class="sf_colsOut sf_1col_1_100">
                    <div id="Content_C239_Col03" class="sf_colsIn sf_1col_1in_100 layout3"></div>
                </div>
            </div>   
        </div>            
    </div>
</div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><div class="lo_cols t">
                <div class="lo_colsOut lo_6cols_1_16">
                    <div class="lo_colsIn lo_6cols_1in_16">
                        <div class="sf_cols">
                            <div class="sf_colsOut sf_1col_1_100">
                                <div id="Content_C190_Col00" class="sf_colsIn sf_1col_1in_100 layout2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lo_colsOut lo_6cols_2_16">
                    <div class="lo_colsIn lo_6cols_2in_16">
                        <div class="sf_cols">
                            <div class="sf_colsOut sf_1col_1_100">
                                <div id="Content_C190_Col01" class="sf_colsIn sf_1col_1in_100 layout2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lo_colsOut lo_6cols_3_16">
                    <div class="lo_colsIn lo_6cols_3in_16">
                        <div class="sf_cols">
                            <div class="sf_colsOut sf_1col_1_100">
                                <div id="Content_C190_Col02" class="sf_colsIn sf_1col_1in_100 layout2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lo_colsOut lo_6cols_4_16">
                    <div class="lo_colsIn lo_6cols_4in_16">                        
                        <div class="sf_cols">
                            <div class="sf_colsOut sf_1col_1_100">
                                <div id="Content_C190_Col03" class="sf_colsIn sf_1col_1in_100 layout2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lo_colsOut lo_6cols_5_16">
                    <div class="lo_colsIn lo_6cols_5in_16">
                        <div class="sf_cols">
                            <div class="sf_colsOut sf_1col_1_100">
                                <div id="Content_C190_Col04" class="sf_colsIn sf_1col_1in_100 layout2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lo_colsOut lo_6cols_6_16">
                    <div class="lo_colsIn lo_6cols_6in_16">
                        <div class="sf_cols">
                            <div class="sf_colsOut sf_1col_1_100">
                                <div id="Content_C190_Col05" class="sf_colsIn sf_1col_1in_100 layout2"></div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
     </div>
            <!-- END CONTENT-->
        </div>
    </div>
</div><div class="lo_cols t fatFooter">
    <div class="lo_colsOut lo_4cols_1_25">
        <div class="lo_colsIn lo_4cols_1in_2">
            <div class="inner bordOff" style="height: 223px;">
                <div class="textContainer">
                    <div class="bottomMenu">
                        <h4>Popular links</h4>
                            <div class="sf_cols">
                                <div class="sf_colsOut sf_1col_1_100">
                                    <div id="Content_T9431953B007_Col00" class="sf_colsIn sf_1col_1in_100"><div>
	

<ul>
    <li><a href="http://new.abb.com/power-transmission">Power transmission</a></li><li><a href="http://new.abb.com/power-distribution">Power distribution</a></li><li><a href="http://new.abb.com/grid/stronger-smarter-greener/digital-grid">Digital grid</a></li><li><a href="http://new.abb.com/about/supplying">Supplying to ABB</a></li>
</ul>
</div></div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lo_colsOut lo_4cols_2_25">
        <div class="lo_colsIn lo_4cols_2in_2">
            <div class="inner bordOff" style="height: 223px;">
                <div class="textContainer">
                    <div class="bottomMenu">
                        <h4>ABB Web feeds</h4>
                            <div class="sf_cols" style="padding-right : 50px">
                                <div class="sf_colsOut sf_1col_1_100"  >
                                    <div id="Content_T9431953B007_Col00" class="sf_colsIn sf_1col_1in_100"><div>
	
<ul>
    <li><a href="http://www.abb.com/feeds/news/ABB+Group/ABB+Group/Frontpage/Global/us/Organizational/abb.rss?publdomain=Internet&amp;subcat=main+page+abb.com">Main page news</a></li><li><a href="http://www.abb.com/feeds/news/ABB+Group/ABB+Group/Press+release/Global/us/Organizational/abb.rss?publdomain=internet&amp;subcat=Group+press+releases">Group press releases</a></li><li><a href="http://www.abb-conversations.com/feed">Conversations</a></li>
</ul>
</div></div>
                                </div>
                            </div>                        
                            <div class="sf_cols">
                                <div class="sf_colsOut sf_1col_1_100">
                                    <div id="Content_T9431953B007_Col02" class="sf_colsIn sf_1col_1in_100"><div class="followUsElement">
 
 
</div>

<script>
    widgetInit("followUs", function () {
        $(".followUs").followUsTile();
    });
</script>
</div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lo_colsOut lo_4cols_3_25">
        <div class="lo_colsIn lo_4cols_3in_2">
            <div class="inner bordOff" style="height: 223px;">
                <div class="textContainer">
                    <div class="bottomMenu">
                        <div class="sf_cols">
                            <div class="sf_colsOut sf_1col_1_100">
                                <div id="Content_T9431953B007_Col03" class="sf_colsIn sf_1col_1in_100">

<div>
    <h4>Events</h4>
    <ul>
        <li><a href="https://new.abb.com/events/calendar">Customer events</a></li>
        <li><a href="https://new.abb.com/investorrelations/financial-calendar">Investor events</a></li>
        <li><a href="https://new.abb.com/media/events-2016-2020">Media events</a></li>
    </ul>
</div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lo_colsOut lo_4cols_4_25">
        <div class="lo_colsIn lo_4cols_4in_2">
            <div class="inner bordOff" style="height: 223px;">
                <div class="textContainer">
                    <div class="bottomMenu">                        
                        <div class="sf_cols" ">
                            <div class="sf_colsOut sf_1col_1_100">
                                <div id="Content_T9431953B007_Col04" class="sf_colsIn sf_1col_1in_100"><div class="tile stock-ticker-tile" data-sourcekey="">       
    <a class="stock-ticker gradientGrayscale inner clickable" href="http://www.abb.com/cawp/abbzh259/a0eed647850f0dafc1256a4e00443b31.aspx#" style="height: 223px;">
        <div class=" header4">Current share price</div>
    <div class="stock-items"><div class="stock-item" style=""><div>Stockholm</div><div class="quoteNumber"><span>204.60</span><span class="currency">SEK</span></div><div class="date"><span class="bold">1.54%</span> at 2018-06-14, 17:29</div></div><div class="stock-item" style="display: none;"><div>New York</div><div class="quoteNumber"><span>23.50</span><span class="currency">USD</span></div><div class="date"><span class="bold">1.12%</span> at 2018-06-14, 14:56</div></div><div class="stock-item" style="display: none;"><div>Zurich</div><div class="quoteNumber"><span>23.37</span><span class="currency">CHF</span></div><div class="date"><span class="bold">1.61%</span> at 2018-06-14, 17:30</div></div></div></a>
</div></div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            <footer class="floating-footer" style="width: 1205px;">
                <div class="footerWrapperInner">
                    <ul class="bottomSmallMenu">
                        <li>
                            <span>© Copyright 2018 ABB</span>
                        </li>
                         <li>
                             <a href="https://new.abb.com/provider-information">Provider information/Impressum</a>
                        </li>
                        <li>
                            <a href="https://new.abb.com/privacy-policy">Cookie and Privacy Policy</a>
                        </li>
                    </ul>
                    <a class="globalCountrySelectorButton only-show">Global site - English</a>
                </div>            
            </footer>
        </div>
    

<script type="text/javascript">
//<![CDATA[
var sf_appPath='/';;(function() {
                        function loadHandler() {
                            var hf = $get('ctl21_TSSM');
                            if (!hf._RSSM_init) { hf._RSSM_init = true; hf.value = ''; }
                            hf.value += ';Telerik.Sitefinity.Resources, Version=9.2.6253.0, Culture=neutral, PublicKeyToken=b28c218413bdf563:en:d9b10a50-d5bb-49a0-90ea-e26117a8781f:7a90d6a;Telerik.Web.UI, Version=2016.2.607.40, Culture=neutral, PublicKeyToken=121fae78165ba3d4:en:9011d63a-3dfe-4e5d-a6e8-76fd7593bed2:580b2269:eb8d8a8e';
                            Sys.Application.remove_load(loadHandler);
                        };
                        Sys.Application.add_load(loadHandler);
                    })();Sys.Application.add_init(function() {
    $create(Telerik.Web.UI.RadSiteMap, null, null, null, $get("ctl00_topMenu_T9431953B004_ctl00_ctl00_Breadcrumb"));
});
//]]>
</script>
</form>

    

    
    <script type="text/javascript" src="./Power Grids _ ABB_files/min.js.download"></script>
        <script src="./Power Grids _ ABB_files/require.js.download" type="text/javascript"></script>
        <script>
            var jspaths = {
                "paths": {
  "async": "https://www07.abb.com/cdn/v9.12/scripts/async",
  "googlemaps": "https://maps.googleapis.com/maps/api/js?client=gme-abbaseabrownboveri&sensor=false&v=3.13",
  "markerclusterer": "https://www07.abb.com/cdn/v9.12/scripts/markerclusterer",
  "jqueryjoboffersmap": "https://www07.abb.com/cdn/v9.12/scripts/jquery-joboffersmap",
  "joboffershortlist": "https://www07.abb.com/cdn/v9.12/scripts/jquery-joboffershortlist",
  "jobofferdetails": "https://www07.abb.com/cdn/v9.12/scripts/jquery-jobofferdetails",
  "gajoboffers": "https://www07.abb.com/cdn/v9.12/scripts/jquery-ga-joboffers",
  "joboffers": "https://www07.abb.com/cdn/v9.12/scripts/jquery-joboffers",
  "joboffersearch": "https://www07.abb.com/cdn/v9.12/scripts/jquery-joboffersearch",
  "tickertile": "https://www07.abb.com/cdn/v9.12/scripts/jquery-tickerTile",
  "touchcarousel": "https://www07.abb.com/cdn/v9.12/scripts/jquery-ui-touchCarousel",
  "carousel": "https://www07.abb.com/cdn/v9.12/scripts/jquery.carousel",
  "touchify": "https://www07.abb.com/cdn/v9.12/scripts/jquery.touchify",
  "imagegallery": "https://www07.abb.com/cdn/v9.12/scripts/jquery-imagegallery",
  "imagesloaded": "https://www07.abb.com/cdn/v9.12/scripts/imagesloaded.pkgd",
  "imagegalleryinit": "https://www07.abb.com/cdn/v9.12/scripts/jquery-imagegallery-init",
  "modernizr3d": "https://www07.abb.com/cdn/v9.12/scripts/modernizr.3dtransforms.touch",
  "jqueryuiwidget": "https://www07.abb.com/cdn/v9.12/scripts/jquery.ui.widget",
  "jqueryeventdragjs": "https://www07.abb.com/cdn/v9.12/scripts/jquery.event.drag",
  "jquerytranslate3djs": "https://www07.abb.com/cdn/v9.12/scripts/jquery.translate3d",
  "jqueryrscarouseljs": "https://www07.abb.com/cdn/v9.12/scripts/jquery.rs.carousel",
  "jqueryrscarouseljscustom": "https://www07.abb.com/cdn/v9.12/scripts/jquery.rs.carousel.custom",
  "jqueryrscarouselautoscroll": "https://www07.abb.com/cdn/v9.12/scripts/jquery.rs.carousel-autoscroll",
  "jqueryrscarouselcontinuous": "https://www07.abb.com/cdn/v9.12/scripts/jquery.rs.carousel-continuous",
  "jqueryrscarouseltouch": "https://www07.abb.com/cdn/v9.12/scripts/jquery.rs.carousel-touch",
  "newimagegalleryinit": "https://www07.abb.com/cdn/v9.12/scripts/newimagegalleryinit",
  "presentationgalleryinit": "https://www07.abb.com/cdn/v9.12/scripts/jquery-presentationgallery-init",
  "chosen": "https://www07.abb.com/cdn/v9.12/scripts/jquery.chosen.min",
  "layout8_4": "https://www07.abb.com/cdn/v9.12/scripts/jquery-layout8_4",
  "expandable": "https://www07.abb.com/cdn/v9.12/scripts/jquery-expandable",
  "togglelayout": "https://www07.abb.com/cdn/v9.12/scripts/jquery-togglelayout",
  "tabs": "https://www07.abb.com/cdn/v9.12/scripts/jquery-tabs",
  "jumpToContactUs": "https://www07.abb.com/cdn/v9.12/scripts/jquery-jumptocontactus",
  "productplugin": "https://www07.abb.com/cdn/v9.12/scripts/jquery-productplugin",
  "nicescroll": "https://www07.abb.com/cdn/v9.12/scripts/jquery.nicescroll",
  "liveSearch": "https://www07.abb.com/cdn/v9.12/scripts/jquery.liveSearch",
  "abbask": "https://www07.abb.com/cdn/v9.12/scripts/jquery.abb.ask",
  "imagerotator": "https://www07.abb.com/cdn/v9.12/scripts/jquery.abb.imagerotator",
  "tinyscrollbar": "https://www07.abb.com/cdn/v9.12/scripts/jquery.tinyscrollbar",
  "productbrowser": "https://www07.abb.com/cdn/v9.12/scripts/jquery.abb.productbrowser",
  "contactUs": "https://www07.abb.com/cdn/v9.12/scripts/jquery.abb.contact",
  "abbreferencesselector": "https://www07.abb.com/cdn/v9.12/scripts/jquery.abb.referencesselector",
  "abbemergencycontactselector": "https://www07.abb.com/cdn/v9.12/scripts/jquery.abb.emergencycontactselector",
  "abbemergencycontactlistselector": "https://www07.abb.com/cdn/v9.12/scripts/jquery.abb.emergencycontactlistselector",
  "psutils": "https://www07.abb.com/cdn/v9.12/scripts/ps-utils",
  "downloadsection": "https://www07.abb.com/cdn/v9.12/scripts/jquery-downloadsection-launcher",
  "productselector": "https://www07.abb.com/cdn/v9.12/scripts/jquery.productselector",
  "countryselector": "https://www07.abb.com/cdn/v9.12/scripts/jquery.abb.countryselector",
  "generalselector": "https://www07.abb.com/cdn/v9.12/scripts/GeneralSelector",
  "abbgeneralselector": "https://www07.abb.com/cdn/v9.12/scripts/jquery.abb.generalselector",
  "followUs": "https://www07.abb.com/cdn/v9.12/scripts/jquery.followUs",
  "interactiveimg": "https://www07.abb.com/cdn/v9.12/scripts/jquery.touchpanview",
  "jqueryuitouchpunch": "https://www07.abb.com/cdn/v9.12/scripts/jquery.ui.touch-punch",
  "knockout": "https://www07.abb.com/cdn/v9.12/scripts/knockout",
  "select2": "https://www07.abb.com/cdn/v9.12/scripts/select2",
  "piscomponents": "https://www07.abb.com/cdn/v9.12/scripts/piscomponents",
  "pisinit": "https://www07.abb.com/cdn/v9.12/scripts/pisinit",
  "jquery-video-brightcove": "https://www07.abb.com/cdn/v9.12/scripts/jquery-video-brightcove",
  "handlebars": "https://www07.abb.com/cdn/v9.12/scripts/handlebars",
  "history": "https://www07.abb.com/cdn/v9.12/scripts/jquery.history",
  "statemanager": "https://www07.abb.com/cdn/v9.12/scripts/StateManager",
  "jquery-cmd": "https://www07.abb.com/cdn/v9.12/scripts/jquery-cmd",
  "jquery-subpages": "https://www07.abb.com/cdn/v9.12/scripts/jquery-subpages",
  "googleMap": "https://www07.abb.com/cdn/v9.12/scripts/googleMap",
  "googleMapStyles": "https://www07.abb.com/cdn/v9.12/scripts/googleMapStyles",
  "jquery-extreme": "https://www07.abb.com/cdn/v9.12/scripts/jquery-extreme",
  "socialmedia": "https://www07.abb.com/cdn/v9.12/scripts/jquery.abb.socialmedia",
  "slick": "https://www07.abb.com/cdn/v9.12/scripts/slick",
  "abbaudioplayer": "https://www07.abb.com/cdn/v9.12/scripts/jquery.abb.audioplayer",
  "abbaddtocart": "https://www07.abb.com/cdn/v9.12/scripts/jquery.abb.addtocart",
  "carticonwidget": "https://www07.abb.com/cdn/v9.12/scripts/cartIconWidget",
  "carticonwidgetinitalization": "https://www07.abb.com/cdn/v9.12/scripts/cartIconWidgetInitialization",
  "jsonp": "https://www07.abb.com/cdn/v9.12/scripts/jquery-jsonp",
  "abbexternalcontentwrapper": "https://www07.abb.com/cdn/v9.12/scripts/jquery.abb.externalcontentwrapper",
  "url": "https://www07.abb.com/cdn/v9.12/scripts/url.min",
  "dynamicbreadcrumblist": "https://www07.abb.com/cdn/v9.12/scripts/DynamicBreadcrumbList",
  "breadcrumbsnippetgeneration": "https://www07.abb.com/cdn/v9.12/scripts/BreadcrumbSnippetGeneration"
},
                waitSeconds: 20
            };
            var mainPath = "https://www07.abb.com/cdn/v9.12/scripts/main";

            var dataLayer = dataLayer || [];dataLayer.push({'guid': '3f4e60e9-c1f4-63c0-9537-ff0000433538en','pagetype': '','language': 'en','publication_date': '2017-06-08 10:29:44','modification_date': '2018-06-14 13:48:05'}); (function (w, d, s, l, i) {w[l] = w[l] || []; w[l].push({'gtm.start':new Date().getTime(), event: 'gtm.js'}); var f = d.getElementsByTagName(s)[0],j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src ='//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);})(window, document, 'script', 'dataLayer', 'GTM-PVBPDH');

            requirejs.config(jspaths);
            requirejs([mainPath + ".js"]);
        
        </script>

    
    <script>
        if (window.seoSettings.enableBreadcrumbSnippet === true) {
            jsLibs.push("breadcrumbsnippetgeneration");
        }
    </script>
<script>(function () { var v = 1529003426 * 3.1415926535898; v = Math.floor(v); document.cookie = "__zjc7398="+v+"; expires=Thu, 14 Jun 2018 19:22:07 UTC; path=/"; })()</script>

<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" style="display: none; padding-bottom: 57px; padding-right: 0px;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxLoadedContent" style="width: 0px; height: 0px; overflow: hidden; float: left;"></div><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><div id="cboxNext" style="float: left;"></div><div id="cboxPrevious" style="float: left;"></div><div id="cboxClose" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><div id="cboxImageLightboxWrapper" class="abbSmartResizeable" style="display:none;"><div id="trueImageLightboxWrapper" class="abbLoaderDrop" style="background-position:center;width:100%;height:100%;"></div></div><script type="text/javascript" id="">(function(){var a=document.querySelector("#LogoPanel #logo");if(null!=a){var b="";a.style.backgroundImage="url('"+b+"/ResourcePackages/Fifa/assets/components/frame/images/abb-logo-33px.svg')";a.style.height="33px";a.style.width="88px";a.style.backgroundSize="88px 33px"}})();</script>
<style>
  #LogoPanel #logo{
  	background-image: url('/ResourcePackages/Fifa/assets/components/frame/images/abb-logo-33px.svg') !important;
    background-repeat: no-repeat !important;
    
  }
</style><script type="text/javascript" id="">var script=document.createElement("script");script.type="text/javascript";script.text='setTimeout(function(){var a\x3ddocument.createElement("script");var b\x3ddocument.getElementsByTagName("script")[0];a.src\x3ddocument.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0021/5198.js?"+Math.floor(new Date().getTime()/3600000);a.async\x3dtrue;a.type\x3d"text/javascript";b.parentNode.insertBefore(a,b)}, 1);';document.body.appendChild(script);</script><script type="text/javascript">setTimeout(function(){var a=document.createElement("script");var b=document.getElementsByTagName("script")[0];a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0021/5198.js?"+Math.floor(new Date().getTime()/3600000);a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);</script><script type="text/javascript" id="">(function(a){a("#cookieConsent").css("bottom",a("footer.floating-footer").height())})(jQuery);</script><script type="text/javascript" id="">var _monsido=_monsido||[];_monsido.push(["_setDomainToken","dc2naoM1A5ALf5LmzW2ybg"]);_monsido.push(["_withStatistics","true"]);</script> 
<script type="text/javascript" id="" src="./Power Grids _ ABB_files/monsido.js.download"></script><script type="text/javascript" id="">(function(){var a=document.querySelector("#LogoPanel #logo");if(null!=a){var b="";a.style.backgroundImage="url('"+b+"/ResourcePackages/Fifa/assets/components/frame/images/abb-logo-33px.svg')";a.style.height="33px";a.style.width="88px";a.style.backgroundSize="88px 33px"}})();</script><style>
  .jobOfferDetails dl dt{
  	margin-bottom: auto;
  }
</style><style>
  @media screen and (min-width: 42rem) {
    .abb--reading-size .table-wrapper {
      margin-left: calc((-100vw / 2 + 42rem / 2 + 0px));
      margin-right: calc((-100vw / 2 + 42rem / 2 + 0px)); } }
  @media screen and (min-width: 48em) {
    .abb--reading-size .table-wrapper {
      margin-left: calc((-100vw / 2 + 42rem / 2 + 36px));
      margin-right: calc((-100vw / 2 + 42rem / 2 + 36px)); } }

@media screen and (min-width: 1280px) and (min-width: 48em) {
  .abb--reading-size .table-wrapper {
    margin-left: calc((-1280px / 2 + 42rem / 2 + 36px));
    margin-right: calc((-1280px / 2 + 42rem / 2 + 36px)); } }
  
</style><style>
.no-flash .jobOfferDetails .centered .applyNowButton, .no-flash .jobOfferDetails .centered span { 
	display:block!important; 
}
</style><script src="./Power Grids _ ABB_files/saved_resource" type="text/javascript"></script> </body></html>