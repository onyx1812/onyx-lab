<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns:og="http://ogp.me/ns#">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="keywords" content="<?php bloginfo('keywords'); ?>"/>
		<meta name="description" content="<?php bloginfo('description'); ?>"/>
		<meta name="copyright" content="<?php bloginfo('copyright'); ?>">

		<meta name="theme-color" content="#c9e0e04d">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">

		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/main.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

		<meta name="format-detection" content="telephone=no">
		<meta name="robots" content="nofollow" />

		<?php wp_head(); ?>
	</head>
		<body <?php body_class(); ?>>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125459388-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-125459388-1');


    </script><!-- Google Tag Manager -->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-PFKNQHM');
    </script><!-- End Google Tag Manager -->
    <!-- google--><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFKNQHM" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- amplify-->

    <script data-obct type="text/javascript">
      /** DO NOT MODIFY THIS CODE**/
      !function(_window, _document) {
        var OB_ADV_ID='008800d5494aecff4a7d0fcf514a110239';
        if (_window.obApi) {var toArray = function(object) {return Object.prototype.toString.call(object) === '[object Array]' ? object : [object];};_window.obApi.marketerId = toArray(_window.obApi.marketerId).concat(toArray(OB_ADV_ID));return;}
        var api = window.obApi = function() {api.dispatch ? api.dispatch.apply(api, arguments) : api.queue.push(arguments);};api.version = '1.1';api.loaded = true;api.marketerId = OB_ADV_ID;api.queue = [];var tag = document.createElement('script');tag.async = true;tag.src = '//amplify.outbrain.com/cp/obtp.js';tag.type = 'text/javascript';var script = _document.getElementsByTagName('script')[0];script.parentNode.insertBefore(tag, script);}(window, document);
    obApi('track', 'View Content');
    </script>



    <!-- facebook-->
    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1073962692805700');
      fbq('track', 'ViewContent');
    </script><noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1073962692805700&ev=PageView&noscript=1" /></noscript>
    <!-- taboola-->
    <!-- Taboola Pixel Code -->
    <script>
      window._tfa = window._tfa || [];
      window._tfa.push({notify: 'event', name: 'page_view', id: 1165403});
      !function (t, f, a, x) {
             if (!document.getElementById(x)) {
                t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
             }
      }(document.createElement('script'),
      document.getElementsByTagName('script')[0],
      '//cdn.taboola.com/libtrc/unip/1165403/tfa.js',
      'tb_tfa_script');
    </script><noscript> <img src='//trc.taboola.com/1165403/log/3/unip?en=page_view' width='0' height='0' style='display:none'/> </noscript>

<!-- End of Taboola Pixel Code -->


    <div class="wrapper">
      <header class="main-header">
        <div class="container"><a class="main-header__logo" href="<?php echo home_url(); ?>"><svg width="100%" viewBox="0 0 107 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0)">
<path d="M98.846 11.0425C98.846 11.1274 98.846 11.6371 98.7628 12.7413H82.6213C82.8709 14.1004 83.6198 15.1197 84.7014 15.8842C85.783 16.6486 87.1143 17.0733 88.6952 17.0733C89.7768 17.0733 90.7753 16.9035 91.6073 16.5637C92.4393 16.2239 93.2714 15.7143 94.0202 15.0347L97.2652 18.6023C95.2683 20.8957 92.3561 22.0849 88.5288 22.0849C86.1159 22.0849 84.0358 21.5753 82.2053 20.6409C80.3748 19.7066 78.9603 18.4324 77.9619 16.7336C76.9635 15.0347 76.4642 13.166 76.4642 11.0425C76.4642 8.91891 76.9635 7.05018 77.9619 5.43628C78.9603 3.73744 80.2916 2.46331 82.0389 1.52895C83.7862 0.594583 85.6998 0.0849304 87.8631 0.0849304C89.9432 0.0849304 91.8569 0.509641 93.521 1.444C95.1851 2.37837 96.5163 3.6525 97.5148 5.2664C98.3468 6.8803 98.846 8.83397 98.846 11.0425ZM87.7799 4.6718C86.3655 4.6718 85.2006 5.09651 84.2854 5.86099C83.3701 6.62547 82.7877 7.72972 82.5381 9.08879H93.0218C92.7722 7.72972 92.1897 6.62547 91.2745 5.86099C90.3592 5.09651 89.1944 4.6718 87.7799 4.6718Z" fill="#161619"/>
<path d="M38.6897 11.0425C38.6897 11.1274 38.6897 11.6371 38.6065 12.7413H22.5482C22.7978 14.1004 23.5467 15.1197 24.6283 15.8842C25.71 16.6486 27.0412 17.0734 28.6221 17.0734C29.7037 17.0734 30.7022 16.9035 31.5342 16.5637C32.3663 16.2239 33.1983 15.7143 33.9471 15.0347L37.1921 18.6023C35.1952 20.8958 32.2831 22.0849 28.4557 22.0849C26.0428 22.0849 23.9627 21.5753 22.1322 20.6409C20.3017 19.7066 18.8873 18.4324 17.8888 16.7336C16.8904 15.0347 16.3911 13.166 16.3911 11.0425C16.3911 8.91892 16.8904 7.05019 17.8888 5.43629C18.8873 3.82239 20.2185 2.46332 21.9658 1.52896C23.7131 0.594593 25.6268 0.0849406 27.7901 0.0849406C29.7037 -1.45286e-06 31.6174 0.509651 33.2815 1.35907C34.9456 2.29343 36.2768 3.56757 37.2753 5.18147C38.2737 6.88031 38.6897 8.83397 38.6897 11.0425ZM27.7068 4.67181C26.2924 4.67181 25.1275 5.09652 24.2123 5.861C23.2971 6.62548 22.7146 7.72973 22.465 9.0888H32.9487C32.6991 7.72973 32.1998 6.62548 31.2014 5.861C30.203 5.09652 29.0381 4.67181 27.7068 4.67181Z" fill="#161619"/>
<path d="M68.0606 22C66.3134 22 64.5661 21.7452 62.902 21.3205C61.2379 20.8958 59.9067 20.3012 58.9082 19.7066L60.9883 15.2896C61.9036 15.8842 63.0684 16.3938 64.3997 16.8185C65.7309 17.2433 67.0622 17.4131 68.3103 17.4131C70.8896 17.4131 72.2208 16.7336 72.2208 15.4595C72.2208 14.8649 71.888 14.4402 71.1392 14.1853C70.3903 13.9305 69.3087 13.6757 67.8942 13.5058C66.147 13.251 64.7325 12.9112 63.5676 12.5714C62.4028 12.2317 61.4875 11.6371 60.6555 10.7877C59.8235 9.93823 59.4075 8.6641 59.4075 7.0502C59.4075 5.69113 59.8235 4.50194 60.5723 3.48263C61.3211 2.46333 62.486 1.61391 63.9837 1.01931C65.4813 0.424718 67.2286 0.169891 69.2255 0.169891C70.7232 0.169891 72.2208 0.339776 73.7185 0.679544C75.2162 0.849428 76.381 1.27414 77.3795 1.86873L75.2994 6.28572C73.4689 5.26642 71.3888 4.67182 69.1423 4.67182C67.811 4.67182 66.8126 4.84171 66.147 5.26642C65.4813 5.60619 65.1485 6.11584 65.1485 6.71043C65.1485 7.38997 65.4813 7.81468 66.2302 8.06951C66.979 8.32433 68.0606 8.57916 69.6415 8.83399C71.3888 9.08881 72.8033 9.42858 73.8849 9.76835C74.9666 10.1081 75.965 10.7027 76.797 11.5521C77.6291 12.4016 78.0451 13.6757 78.0451 15.2046C78.0451 16.5637 77.6291 17.668 76.8802 18.7722C76.1314 19.7915 74.9665 20.6409 73.3857 21.1506C71.8048 21.6602 70.1407 22 68.0606 22Z" fill="#161619"/>
<path d="M51.1703 0.0849304C53.8328 0.0849304 55.9129 0.679525 57.577 2.29342C59.1578 3.90732 59.9899 6.2857 59.9899 9.5135V21.915H53.8328V10.3629C53.8328 8.66408 53.5 7.38995 52.7512 6.54053C52.0023 5.69111 50.9207 5.2664 49.5894 5.2664C48.0085 5.2664 46.7605 5.77605 45.8453 6.71041C44.93 7.72972 44.4308 9.17373 44.4308 11.1274V21.8301H38.2737V0.169873H44.098V2.71814C45.9285 0.679525 48.5078 0.0849304 51.1703 0.0849304Z" fill="#161619"/>
<path d="M19.3033 16.9884V21.8301H0V18.0077L11.2325 5.01159H0.0832037V0.169891H19.1369V3.90734L7.90435 16.9884H19.3033Z" fill="#161619"/>
<path d="M102.923 21.9151C105.129 21.9151 106.917 20.0896 106.917 17.8378C106.917 15.5861 105.129 13.7606 102.923 13.7606C100.717 13.7606 98.9293 15.5861 98.9293 17.8378C98.9293 20.0896 100.717 21.9151 102.923 21.9151Z" fill="#DA2745"/>
</g>
<defs>
<clipPath id="clip0">
<rect width="107" height="22" fill="white"/>
</clipPath>
</defs>
</svg></a></div>
      </header>
      <main class="main">