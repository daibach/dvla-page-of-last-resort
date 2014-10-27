<?php
$protocol = $_SERVER["SERVER_PROTOCOL"];
if ( 'HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol )
        $protocol = 'HTTP/1.0';
header( "$protocol 503 Service Unavailable", true, 503 );
?>
<!DOCTYPE html>
<!--[if lt IE 9]><html class="lte-ie8" lang="en"><![endif]--><!--[if gt IE 8]><!--><html lang="en">
<!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<?php if(isset($title)) : ?>
<title>Service Unavailable - <?php echo $title; ?> - GOV.UK</title>
<?php else : ?>
<title>Service Unavailable - DVLA</title>
<?php endif; ?>
<script type="text/javascript">
      (function(){if(navigator.userAgent.match(/IEMobile\/10\.0/)){var d=document,c="appendChild",a=d.createElement("style");a[c](d.createTextNode("@-ms-viewport{width:auto!important}"));d.getElementsByTagName("head")[0][c](a);}})();
    </script><!--[if gt IE 8]><!--><link href="/static/govuk-template-2954d8cb00a2698f94a497816945f0a9.css" media="screen" rel="stylesheet" type="text/css">
<!--<![endif]--><!--[if IE 6]><link href="/static/govuk-template-ie6-3b142f30175850cc2ed7f3dea6ee5b5a.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 7]><link href="/static/govuk-template-ie7-b946cd9afd6e55b82b839554a2bb7295.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 8]><link href="/static/govuk-template-ie8-67316322f332c1b92c457ccafff3c8d9.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><link href="/static/govuk-template-print-e8347470022aae909a6076606e53d420.css" media="print" rel="stylesheet" type="text/css">
<!--[if IE 8]>
    <script type="text/javascript">
      (function(){if(window.opera){return;}
       setTimeout(function(){var a=document,g,b={families:(g=
       ["nta"]),urls:["/static/fonts-ie8-1e4512e11cb3ee77b91f723129629e95.css"]},
       c="/static/vendor/goog/webfont-debug-96870cf9f159ed811fd43c39bdf4656b.js",d="script",
       e=a.createElement(d),f=a.getElementsByTagName(d)[0],h=g.length;WebFontConfig
       ={custom:b},e.src=c,f.parentNode.insertBefore(e,f);for(;h=h-1;a.documentElement
       .className+=' wf-'+g[h].replace(/\s/g,'').toLowerCase()+'-n4-loading');},0)
      })()
    </script>
    <![endif]--><!--[if gte IE 9]><!--><link href="/static/fonts-83e596ae63d072e22b7f34d2b5482bde.css" media="all" rel="stylesheet" type="text/css">
<!--<![endif]--><!--[if lt IE 9]>
      <script src="/static/ie-fc5bd25c5f46587b9bff917417ab2b7f.js" type="text/javascript"></script>
    <![endif]--><link rel="shortcut icon" href="/static/favicon-447e4ac1ab790342660eacfe3dcce264.ico" type="image/x-icon">
<!-- Size for iPad and iPad mini (high resolution) --><link rel="apple-touch-icon-precomposed" sizes="152x152" href="/static/apple-touch-icon-152x152-58591dcff066ba321b89a9e208ccedab.png">
<!-- Size for iPhone and iPod touch (high resolution) --><link rel="apple-touch-icon-precomposed" sizes="120x120" href="/static/apple-touch-icon-120x120-d1f0cf778f0a02951421ca0998899bb7.png">
<!-- Size for iPad 2 and iPad mini (standard resolution) --><link rel="apple-touch-icon-precomposed" sizes="76x76" href="/static/apple-touch-icon-76x76-17dd3f1e168561f9099ba92e3292e607.png">
<!-- Default non-defined size, also used for Android 2.1+ devices --><link rel="apple-touch-icon-precomposed" href="/static/apple-touch-icon-60x60-a4e4417d04bb289d7efc9a79e7b0adac.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:image" content="/static/opengraph-image-85fc698c83c77d8d8cb5467a44cc12a5.png">
<!--[if gt IE 8]><!--><link href="/static/application-1e743f93721c85f25a7fc70a1c066d74.css" media="screen" rel="stylesheet" type="text/css">
<!--<![endif]--><!--[if IE 6]><link href="/static/application-ie6-c758a400423a8ee59d92900e2479f280.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 7]><link href="/static/application-ie7-a27b006ce9a105419f73854fd59a95b0.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 8]><link href="/static/application-ie8-7ff29e0adc372b12cfc32dd660caa1eb.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><link href="/static/print-a649e955670e538fc1b2bb1dce13144c.css" media="print" rel="stylesheet" type="text/css">
<link title="Search" rel="search" type="application/opensearchdescription+xml" href="/search/opensearch.xml">
<!--[if gt IE 8]><!--><link href="/static/application-d2135e217aaca178be1834a76658ffa3.css" media="screen" rel="stylesheet" type="text/css">
<!--<![endif]--><link rel="alternate" type="application/json" href="/api/tax-disc.json">
<!--[if IE 6]><link href="/static/frontend/application-ie6-58b515f5d61809bbe990492214a000b6.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 7]><link href="/static/frontend/application-ie7-4d3330b61a8d6ddd769e76ac1cccd3db.css" media="screen" rel="stylesheet" type="text/css" /><![endif]--><!--[if IE 8]><link href="/static/frontend/application-ie8-1924592e0b2356aae3ea2f7d54de57c9.css" media="screen" rel="stylesheet" type="text/css" /><![endif]-->
<?php if(!isset($govuk) || !$govuk) :?>
<style type="text/css">
#global-header, #global-header .header-wrapper { background-color: #006c56; }
#global-header-bar .header-bar { background: #fff; }
#wrapper { border-color: #006c56; min-height: 300px; }
</style>
<?php endif; ?>
</head>
<body class="mainstream full-width">
    <script type="text/javascript">document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');</script><div id="skiplink-container">
      <div>
        <a href="#content" class="skiplink">Skip to main content</a>
      </div>
    </div>

    <header role="banner" id="global-header" class=""><div class="header-wrapper">
        <div class="header-global">
          <div class="header-logo">
            <?php if(isset($govuk) && $govuk) : ?>
            <a href="https://www.gov.uk/" title="Go to the GOV.UK homepage" id="logo" class="content">
              <img src="/static/gov.uk_logotype_crown-c09acb07e4d1d5d558f5a0bc53e9e36d.png" width="35" height="31" alt=""> GOV.UK
            </a>
            <?php else : ?>
            <a href="https://www.gov.uk/dvla" title="Go to the DVLA homepage" id="logo" class="content">DVLA</a>
            <?php endif; ?>

          </div>

        </div>

      </div>
    </header><!--end header-->




    <div id="global-header-bar">
      <div class="inner-block">
        <div class="header-bar"></div>
      </div>
    </div>
    <!--end global-header-bar-->


  <div id="wrapper" class="transaction service">
    <main id="content" role="main" class="tax-disc-start group start-page">
      <header class="page-header group start-header full-width">
        <div class="title">
          <?php if(isset($title)) : ?>
          <h1><?php echo $title; ?></h1>
      	  <h2>We are sorry, but the service is currently unavailable. Please try again later.</h2>
          <?php else : ?>
          <h1>Service unavailable</h1>
          <h2>We are sorry, but this DVLA service is currently unavailable. Please try again later.</h2>
          <?php endif; ?>
      	  <br>
        </div>
      </header>
      <div class="start-container full-width start-page">
