<?php include("html.php"); ?>
<!DOCTYPE html>

<!-- 
//////////////////////////////////////////////////////

HauHet plc.
hauhet.co

We are HauHet

Headquarters
HauHet plc. – Xolo Go OU
Private Limited Company

Kalasadama 4
10415 – Tallinn
Estonia

//////////////////////////////////////////////////////
-->

<html lang='en'>

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T9Z73XKQ');</script>
<!-- End Google Tag Manager -->

    <title>Interactive Weather AI :: V. 1.1</title>
    
      <!-- Meta description, aim for about 150 characters-->
  <meta http-equiv='content-language' content='en-gb'>
  <meta http-equiv="cleartype" content="on" />
  <meta name="MobileOptimized" content="width" />
  <meta name="HandheldFriendly" content="true" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="author" content="HauHet®"/>
  <meta name="generator" content="hauhet.co">
  <meta name="generator" content="hauhet.co">
  
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="expires" content="0">
  
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png?v=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png?v=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png?v=1.0">
    <link rel="manifest" href="favicon/site.webmanifest?v=1.0">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg?v=1.0" color="#5bbad5">
    <link rel="shortcut icon" href="favicon/favicon.ico?v=1.0">
    <meta name="apple-mobile-web-app-title" content="HauHet">
    <meta name="application-name" content="HauHet">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="favicon/mstile-144x144.png?v=1.0">
    <meta name="theme-color" content="#ffffff">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="weather, world, Openstreetmap, forecast, Openweather, current">
    <meta name="description" content="Explore OpenWeather&#039;s interactive weather map focused on temperature, wind, presssure percipitation and
clouds overlays, featuring detailed city information. Customize your view with various layers and zoom levels.">
    <meta property="title" content="Interactive weather maps">
    
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js" integrity="sha512-0nVWK03Ud0k6o8wDkri8jxX9zQIn00ZHVud3iqBTwd2bGFwJDQShGVb3+vX1adCRxQckKQrIQMFmIA3tfWe+Mg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=Array.from,Array.assign,fetch&flags=always,gated"></script>
    <link href='themes/css/bundle_owm_styles.css' rel="stylesheet">
    <link href='themes/css/logo.css' rel="stylesheet">
    <!-- Resources -->
    <link href='themes/vendor/mosaic/fonts/font-awesome/css/font-awesome.min.css' rel="stylesheet"-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500,400italic,500italic' rel="stylesheet">
    <link href='themes/css/new_owm_styles.css' rel="stylesheet">
    <link href='themes/css/maps_layout_styles.css' rel="stylesheet">

    <!-- Resources -->


<script type="application/ld+json">
	{
	  "@context": "https://schema.org",
	  "@graph": [
		{
		  "@type": "Organization",
		  "name": "HauHet plc.",
		  "sameAs": [
			"https://github.com/HauHetCo",
			"https://www.linkedin.com/company/hauhet-plc/"
		  ],
		  "url": "https://hauhet.co/",
		  "logo": {
			"@type": "ImageObject",
			"url": "https://hauhet.co/HauHetCo.png",
			"caption": "HauHet plc"
		  },
			"description": "Interactive Weather AI "
		}
	  ]
	}
</script>


</head>


<body class="body-orange">
   
    <div class="nav-styles"></div>
    <main class="wrapper">
        <link href='themes/vendor/owm/css/weathermap.css' rel="stylesheet">



   <div id="logo">
     <a href="https://hauhet.co/"><img src="themes/img/logo.png"></a>
   </div>



            <div class='global-map' id='map'></div>
            

        <script src='themes/vendor/owm/js/weathermap.js'></script>
    </main>


    <script src="https://cdn.ravenjs.com/3.6.1/raven.min.js"></script>
    <script src='themes/js/bundle_owm_postload.js'></script>
    
    
</body>

</html>