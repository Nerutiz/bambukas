 
<html lang="en" dir="ltr"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
<meta name="description" content="7+ GB of storage, less spam, and mobile access. Gmail is email that's intuitive, efficient, and useful. And maybe even fun."> 
<style type=text/css> 
<!--
body,td,div,p,a,font,span {font-family: arial,sans-serif}
body {margin-top:2}
 
.c {width: 4; height: 0}
 
.bubble {background-color:#C3D9FF}
 
.tl {padding: 0; width: 4; text-align: left; vertical-align: top}
.tr {padding: 0; width: 4; text-align: right; vertical-align: top}
.bl {padding: 0; width: 4; text-align: left; vertical-align: bottom}
.br {padding: 0; width: 4; text-align: right; vertical-align: bottom}
 
.caption {color:#000000; white-space:nowrap; background:#E8EEFA; text-align:center}
 
.form-noindent {background-color: #ffffff; border: #C3D9FF 1px solid}
 
.feature-image {padding: 15 0 0 0; vertical-align: top; text-align: right; }
.feature-description {padding: 15 0 0 10; vertical-align: top; text-align: left; }
 
.signup_btn {cursor: pointer; margin: 10px 0 -20px 0; text-align: center; }
.signup_btn_link {color: #000; text-align: center; text-align: center; text-decoration: none; padding: 0 7px; font-weight: bold; font-size: 14px; white-space: nowrap; }
 
.SPRITE_signup_button_grey_l { background:no-repeat url(https://mail.google.com/mail/help/images/greybtn.png) 0 0; width: 14px; height: 45px }
.SPRITE_signup_button_grey_m { background:no-repeat url(https://mail.google.com/mail/help/images/greybtn.png) -14px 0; height: 45px }
.SPRITE_signup_button_grey_r { background:no-repeat url(https://mail.google.com/mail/help/images/greybtn.png) -365px 0; width: 15px; height: 45px }
 
 
.SPRITE_cell {background: no-repeat url(https://mail.google.com/mail/help/images/login_features_sprite.png) 0 -142px; width: 42px; height: 42px; float: right }
.SPRITE_search_new {background:no-repeat url(https://mail.google.com/mail/help/images/login_features_sprite.png) 0 -100px; width: 42px; height: 42px; float: right }
.SPRITE_spam_new {background:no-repeat url(https://mail.google.com/mail/help/images/login_features_sprite.png) 0 -58px; width: 42px; height: 42px; float: right }
.SPRITE_storage {background:no-repeat url(https://mail.google.com/mail/help/images/login_features_sprite.png) 0 0; width: 42px; height: 42px; float: right }
.SPRITE_feed_icon {background: no-repeat url(https://mail.google.com/mail/help/images/login_features_sprite.png) 0 -42px; width: 16px; height: 16px }
 
.SPRITE_corner_bl {background:no-repeat url(https://mail.google.com/mail/help/images/login_corners_sprite.png) 0 0; width: 4px; height: 4px; font-size:2px }
.SPRITE_corner_br {background:no-repeat url(https://mail.google.com/mail/help/images/login_corners_sprite.png) -4px 0; width: 4px; height: 4px; font-size:2px }
.SPRITE_corner_tl {background:no-repeat url(https://mail.google.com/mail/help/images/login_corners_sprite.png) 0 -4px; width: 4px; height: 4px; font-size:2x }
.SPRITE_corner_tr {background:no-repeat url(https://mail.google.com/mail/help/images/login_corners_sprite.png) -4px -4px; width: 4px; height: 4px; font-size:2px }
 
 
// -->
</style> 
  <style type=text/css> 
<!--
.time{color:#999; margin:0; padding:0;}
.post{padding:0px; padding-top:2px; padding-right:10px}
.snippet{margin-bottom:5px;}
//-->
</style> 
<script type="text/javascript"> 
blogFeedUrl = 'https://ajax.googleapis.com/ajax/services/feed/load?v=1.0&q=' +
  'http://www.blogger.com/feeds/6781693/posts/default&num=1&callback=loadBlogFeed';
function loadBlogFeed(r){
  var container = document.getElementById('feed');
  if (r.responseStatus == '200' && r.responseData.feed.entries.length > 0) {
  var post = r.responseData.feed.entries[0];
  var title = unescapePureXMLEntities(post.title);
  var entry = unescapePureXMLEntities(cleanPostContent(post.content));
  var link = post.link;
  var date = post.publishedDate;
  date = new Date(date).toDateString();
  renderPost(title, entry, link, date);
  } else {
  renderNoPost();
  }
}
function cleanPostContent(entry) {
  entry = entry.replace(/<span>[^<]*<\/span>/, '');
  entry = entry.replace(/<[^>]*>/g, '');
  var snippet = entry.split(' ', 20);
  snippet.pop();
  return snippet.join(' ') + ' ...';
}
function unescapePureXMLEntities(str) {
  return str.replace(/&([^;]+);/g, function(s, entity) {
  switch (entity) {
  case 'amp':
  return '&';
  case 'lt':
  return '<';
      case 'gt':
        return '>';
  case 'quot':
  return '"';
  default:
  if (entity.charAt(0) == '#') {
  var n = Number('0' + entity.substr(1));
  if (!isNaN(n)){
  return String.fromCharCode(n);
  }
  }
  // For invalid entities we just return the entity
  return s;
  }
  });
}
function renderPost(title, entry, link, date) {
  var linkNode = document.createElement('a');
  linkNode.href = link;
  linkNode.appendChild(document.createTextNode(title));
  var snippetDiv = document.createElement('div');
  snippetDiv.className = 'snippet';
  snippetDiv.appendChild(document.createTextNode(entry));
  var dateDiv = document.createElement('div');
  dateDiv.className = 'time';
  dateDiv.appendChild(document.createTextNode(date));
  var moreLink = document.createElement('a');
  moreLink.href = 'http://gmailblog.blogspot.com';
  moreLink.innerHTML = 'More posts &raquo;';
  var container = document.getElementById('feed');
  container.appendChild(linkNode);
  container.appendChild(dateDiv);
  container.appendChild(snippetDiv);
  container.appendChild(moreLink);
}
function renderNoPost(){
  var container = document.getElementById('feed');
  container.innerHTML = '<a href="http://gmailblog.blogspot.com">' +
  'The Official Gmail Blog</a>';
}
function importBlogJS() {
  var scriptNode = document.createElement('script');
  scriptNode.setAttribute('src', blogFeedUrl);
  document.getElementsByTagName('head')[0].appendChild(scriptNode);
}
</script> 
<title> 
  Gmail: Email from Google
</title> 
</head> 
<body bgcolor=#ffffff link=#0000FF vlink=#0000FF onload="OnLoad(); importBlogJS();"> 
<script type="text/javascript"> 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-992684-1']);
  _gaq.push(['_setDomainName', 'google.com']);
  _gaq.push(['_addIgnoredRef', '.google.com']);
  _gaq.push(['_setCookiePath', '/accounts/']);
  _gaq.push(['_trackPageview', '/mail/gaia/homepage']);
  _gaq.push(['_cookiePathCopy', '/mail/help/']);
  (function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
  })();
</script> 
<table width=94% align=center cellpadding=5 cellspacing=1> 
  <tr> 
  <td valign=top style="text-align:left"> 
   <br /> 
  <div id="highlight"> 

</div> 
  </td> 
  <td valign=top> 
  <!-- login box --> 
  <div id=login> 
<script><!--
 
function gaia_onLoginSubmit() {
  
  if (window.gaiacb_onLoginSubmit) {
    return gaiacb_onLoginSubmit();
  } else {
    return true;
  }
}
 
--></script> 
<style type="text/css"><!--
  div.errormsg { color: red; font-size: smaller; font-family:arial,sans-serif; }
  font.errormsg { color: red; font-size: smaller; font-family:arial,sans-serif; }  
--></style> 
<style type="text/css"><!--
.gaia.le.lbl { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.fpwd { font-family: Arial, Helvetica, sans-serif; font-size: 70%; }
.gaia.le.chusr { font-family: Arial, Helvetica, sans-serif; font-size: 70%; }
.gaia.le.val { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.button { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
.gaia.le.rem { font-family: Arial, Helvetica, sans-serif; font-size: smaller; }
 
.gaia.captchahtml.desc { font-family: arial, sans-serif; font-size: smaller; } 
.gaia.captchahtml.cmt { font-family: arial, sans-serif; font-size: smaller; font-style: italic; }
  
--></style> 
<form id="gaia_loginform"
      
        action="https://www.google.com/accounts/ServiceLoginAuth" method="post"
      
      onsubmit=
                 "return(gaia_onLoginSubmit());"
                > 
<div id="gaia_loginbox"> 
<table class="form-noindent" cellspacing="3" cellpadding="5" width="100%" border="0"> 
  <tr> 
  <td valign="top" style="text-align:center" nowrap="nowrap"
        bgcolor="#e8eefa"> 
  <input type="hidden" name="ltmpl"
             value="default"> 
  <input type="hidden" name="ltmplcache"
             value="2"> 
  <div class="loginBox"> 
  <table id="gaia_table" align="center" border="0" cellpadding="1" cellspacing="0"> 
  <tr> 
<td colspan="2" align="center"> 
  <font size="-1"> 
  Sign in with your
  </font> 
  <table> 
  <tr> 
  <td valign="top"> 
  <img src="https://www.google.com/accounts/google_transparent.gif"
           alt="Google"> 
  </img> 
  </td> 
  <td valign="middle"> 
  <font size="+0"><b>Account</b></font> 
  </td> 
  </tr> 
</table> 
</td> 
</tr> 
<tr> 
  <td colspan="2" align="center"> 
  </td> 
</tr> 
<tr id="email-row"> 
  <td nowrap="nowrap"> 
  <div align="right"> 
  <span class="gaia le lbl"> 
  Username:
  </span> 
  </div> 
  </td> 
  <td> 
  <input type="hidden" name="continue" id="continue"
           value="https://mail.google.com/mail/?ui=html&amp;zy=l" /> 
  <input type="hidden" name="service" id="service"
           value="mail" /> 
  <input type="hidden" name="rm" id="rm"
           value="false" /> 
  <input type="hidden" name="dsh" id="dsh"
           value="3522342837796454816" /> 
  <input type="hidden" name="ltmpl" id="ltmpl"
           value="default" /> 
  <input type="hidden" name="hl" id="hl"
           value="en" /> 
  <input type="hidden" name="ltmpl" id="ltmpl"
           value="default" /> 
  <input type="hidden" name="scc" id="scc"
           value="1" /> 
  <input type="hidden" name="ss" id="ss"
           value="1" /> 
  <input type="hidden" name="timeStmp" id="timeStmp"
       value=''/> 
<input type="hidden" name="secTok" id="secTok"
       value=''/> 
  <input type="hidden"
             name="GALX"
             value="GrUmm_q8xW4" /> 
  <input type="text" name="Email"  id="Email"
  size="18" value=""
  
  
    class='gaia le val'
  
  /> 
  </td> 
</tr> 
<tr> 
  <td></td> 
  <td align="left"> 
  <div style="color: #666666; font-size: 75%;"> 
  ex: pat@example.com
  </div> 
  </td> 
</tr> 
<tr id="password-row" class="enabled"> 
  <td align="right" nowrap="nowrap"> 
  <span class="gaia le lbl"> 
  Password:
  </span> 
  </td> 
  <td> 
  <input type="password"
   name="Passwd" id="Passwd"
  size="18" 
  
  
 
  
    class="gaia le val" 
  
  /> 
  </td> 
</tr> 
<tr> 
  <td> </td> 
  <td align="left"> 
  </td> 
</tr> 
  <tr id="rememberme-row" class="enabled"> 
  <td align="right" valign="top"> 
  <input type="checkbox" name="PersistentCookie" id="PersistentCookie"
    value="yes"
  
    
  
  /> 
  <input type="hidden" name='rmShown' value="1" /> 
  </td> 
  <td> 
  <label for="PersistentCookie" id="PersistentCookieLabel" class="gaia le rem"> 
  Stay signed in
  </label> 
  </td> 
</tr> 
<tr> 
  <td> 
  </td> 
  <td align="left"> 
  <input type="submit" class="gaia le button" name="signIn" id="signIn"
           value="Sign in"
                  /> 
  </td> 
</tr> 
<tr id="ga-fprow"> 
  <td colspan="2" height="33.0" class="gaia le fpwd"
    align="center" valign="bottom"> 
  <a href="https://www.google.com/accounts/recovery?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%3Fui%3Dhtml%26zy%3Dl&amp;hl=en&amp;service=mail&amp;ss=1&amp;ltmpl=default"
       target=_top> 
  Can&#39;t access your account?
  </a> 
  </td> 
</tr> 
  </table> 
  </div> 
  </td> 
  </tr> 
</table> 
</div> 
<input type="hidden" name="asts"
       id="asts"
       value=""> 
</form> 
<script><!--
var gaia_loginForm;
if (document.getElementById) {
  gaia_loginForm = document.getElementById("gaia_loginform");
} else if (window.gaia_loginform) {
  gaia_loginForm = window.gaia_loginform;
}
 
var gaia_emailHasKeypress = false;
if (gaia_loginForm && gaia_loginForm.Email) {
  gaia_loginForm.Email.onkeypress = function() {
    gaia_emailHasKeypress = true;
  }
}
 
function gaia_setFocus() {
  if (gaia_loginForm) {
    if (gaia_loginForm.Email && !gaia_loginForm.Email.value) {
      gaia_loginForm.Email.focus();
    } else if (gaia_loginForm.Passwd && !gaia_emailHasKeypress) {
      gaia_loginForm.Passwd.focus();
    }
    
  }
}
 
gaia_setFocus();
--></script> 
<form id="gaia_universallogin"
      action="https://www.google.com/accounts/ServiceLoginAuth" method="post"
      onsubmit="return(gaia_onLoginSubmit());"> 
  <input type="hidden" name="continue" id="continue"
           value="https://mail.google.com/mail/?ui=html&amp;zy=l" /> 
  <input type="hidden" name="service" id="service"
           value="mail" /> 
  <input type="hidden" name="rm" id="rm"
           value="false" /> 
  <input type="hidden" name="dsh" id="dsh"
           value="3522342837796454816" /> 
  <input type="hidden" name="ltmpl" id="ltmpl"
           value="default" /> 
  <input type="hidden" name="hl" id="hl"
           value="en" /> 
  <input type="hidden" name="ltmpl" id="ltmpl"
           value="default" /> 
  <input type="hidden" name="scc" id="scc"
           value="1" /> 
  <input type="hidden" name="ss" id="ss"
           value="1" /> 
  <input type="hidden" name="ltmpl" id="ltmpl"
           value="default" /> 
  <input type="hidden" name="ltmplcache" id="ltmplcache"
           value="2" /> 
</form> 
  </div> 
  <!-- end login box --> 
  <br> 
  <!-- links box (below login box) --> 

  <!-- end links box (below login box) --> 
</table> 
<br> 

  <script type="text/javascript"> 
var BrowserSupport_={IsBrowserSupported:function(){var agt=navigator.userAgent.toLowerCase();var is_op=agt.indexOf("opera")!=-1;var is_ie=agt.indexOf("msie")!=-1&&document.all&&!is_op;var is_ie5=agt.indexOf("msie 5")!=-1&&document.all&&!is_op;var is_mac=agt.indexOf("mac")!=-1;var is_gk=agt.indexOf("gecko")!=-1;var is_sf=agt.indexOf("safari")!=-1;if(is_ie&&!is_op&&!is_mac){if(agt.indexOf("palmsource")!=
-1||agt.indexOf("regking")!=-1||agt.indexOf("windows ce")!=-1||agt.indexOf("j2me")!=-1||agt.indexOf("avantgo")!=-1||agt.indexOf(" stb")!=-1)return false;var v=BrowserSupport_.GetFollowingFloat(agt,"msie ");if(v!=null)return v>=5.5}if(is_gk&&!is_sf){var v=BrowserSupport_.GetFollowingFloat(agt,"rv:");if(v!=null)return v>=1.4;else{v=BrowserSupport_.GetFollowingFloat(agt,"galeon/");if(v!=null)return v>=
1.3}}if(is_sf){if(agt.indexOf("rv:3.14.15.92.65")!=-1)return false;var v=BrowserSupport_.GetFollowingFloat(agt,"applewebkit/");if(v!=null)return v>=312}if(is_op){if(agt.indexOf("sony/com1")!=-1)return false;var v=BrowserSupport_.GetFollowingFloat(agt,"opera ");if(v==null)v=BrowserSupport_.GetFollowingFloat(agt,"opera/");if(v!=null)return v>=8}if(agt.indexOf("pda; sony/com2")!=-1)return true;return false},
GetFollowingFloat:function(str,pfx){var i=str.indexOf(pfx);if(i!=-1){var v=parseFloat(str.substring(i+pfx.length));if(!isNaN(v))return v}return null},tz_path:";path=/"};if(window.location.href.toLowerCase().indexOf("google.com")>0)BrowserSupport_.tz_path+=";domain=.google.com";document.cookie="TZ="+(new Date).getTimezoneOffset()+BrowserSupport_.tz_path;var is_browser_supported=BrowserSupport_.IsBrowserSupported()
  </script> 
<script type=text/javascript> 
<!--
 
var start_time = (new Date()).getTime();
 
if (top.location != self.location) {
 top.location = self.location.href;
}
 
function SetGmailCookie(name, value) {
  document.cookie = name + "=" + value + ";path=/;domain=.google.com";
}
 
function lg() {
  var now = (new Date()).getTime();
 
  var cookie = "T" + start_time + "/" + start_time + "/" + now;
  SetGmailCookie("GMAIL_LOGIN", cookie);
}
 
function gaiacb_onLoginSubmit() {
  lg();
  if (!fixed) {
    FixForm();
  }
  return true;
}
 
function StripParam(url, param) {
  var start = url.indexOf(param);
  if (start == -1) return url;
  var end = start + param.length;
 
  var charBefore = url.charAt(start-1);
  if (charBefore != '?' && charBefore != '&') return url;
 
  var charAfter = (url.length >= end+1) ? url.charAt(end) : '';
  if (charAfter != '' && charAfter != '&' && charAfter != '#') return url;
  if (charBefore == '&') {
  --start;
  } else if (charAfter == '&') {
  ++end;
  }
  return url.substring(0, start) + url.substring(end);
}
var fixed = 0;
function FixForm() {
  if (is_browser_supported) {
  var form = el("gaia_loginform");
  if (form && form["continue"]) {
  var url = form["continue"].value;
  url = StripParam(url, "ui=html");
  url = StripParam(url, "zy=l");
  form["continue"].value = url;
  }
  }
  fixed = 1;
}
function el(id) {
  if (document.getElementById) {
  return document.getElementById(id);
  } else if (window[id]) {
  return window[id];
  }
  return null;
}
// Estimates of nanite storage generation over time.
var CP = [
 [ 1199433600000, 6283 ],
 [ 1224486000000, 7254 ],
 [ 2144908800000, 10996 ],
 [ 2147328000000, 43008 ],
 [ 46893711600000, Number.MAX_VALUE ]
];
var quota_elem;
var ONE_PX = "https://mail.google.com/mail/images/c.gif?t=" +
  (new Date()).getTime();
function LogRoundtripTime() {
  var img = new Image();
  var start = (new Date()).getTime();
  img.onload = GetRoundtripTimeFunction(start);
  img.src = ONE_PX;
}
function GetRoundtripTimeFunction(start) {
  return function() {
  var end = (new Date()).getTime();
  SetGmailCookie("GMAIL_RTT", (end - start));
  }
}
function MaybePingUser() {
  var f = el("gaia_loginform");
  if (f.Email.value) {
  new Image().src = 'https://mail.google.com/mail?gxlu=' +
  encodeURIComponent(f.Email.value) +
  '&zx=' + (new Date().getTime());
  }
}
function OnLoad() {
  gaia_setFocus();
  MaybePingUser();
  el("gaia_loginform").Passwd.onfocus = MaybePingUser;
  LogRoundtripTime();
  if (!quota_elem) {
  quota_elem = el("quota");
  updateQuota();
  }
  LoadConversionScript();
}
function updateQuota() {
  if (!quota_elem) {
  return;
  }
  var now = (new Date()).getTime();
  var i;
  for (i = 0; i < CP.length; i++) {
    if (now < CP[i][0]) {
      break;
    }
  }
  if (i == 0) {
    setTimeout(updateQuota, 1000); 
  } else if (i == CP.length) {
    quota_elem.innerHTML = CP[i - 1][1];
  } else {
    var ts = CP[i - 1][0];
    var bs = CP[i - 1][1];
    quota_elem.innerHTML = format(((now-ts) / (CP[i][0]-ts) * (CP[i][1]-bs)) + bs); 
    setTimeout(updateQuota, 1000); 
  } 
} 
 
var PAD = '.000000'; 
 
function format(num) { 
  var str = String(num); 
  var dot = str.indexOf('.'); 
  if (dot < 0) { 
     return str + PAD; 
  } if (PAD.length > (str.length - dot)) {
  return str + PAD.substring(str.length - dot);
  } else {
  return str.substring(0, dot + PAD.length);
  }
}
var google_conversion_type = 'landing';
var google_conversion_id = 1069902127;
var google_conversion_language = "en_US";
var google_conversion_format = "1";
var google_conversion_color = "FFFFFF";
function LoadConversionScript() {
  var script = document.createElement("script");
  script.type = "text/javascript";
  script.src = "https://www.googleadservices.com/pagead/conversion.js";
}
// -->
</script> 
<script type="text/javascript"> 
<!--
FixForm();
// -->
</script> 
</body> 
</html> 