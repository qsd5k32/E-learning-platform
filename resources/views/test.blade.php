<html lang="en" class=""><head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#33b5e5">
    <link rel="manifest" href="/manifest.json">


    <title>Bootstrap drag and drop file upload - examples &amp; tutorial. Basic &amp; advanced usage - Material Design for Bootstrap</title>

    <link rel="shortcut icon" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/favicon.ico">

    <script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-W7MBMN"></script><script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
    <script type="text/javascript">var ajax_url = 'https://mdbootstrap.com/wp-load.php';</script><script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
    <script type="text/javascript">var ajax_url = 'https://mdbootstrap.com/wp-load.php';</script><script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
    <script type="text/javascript">var ajax_url = 'https://mdbootstrap.com/wp-load.php';</script>
    <!-- Google Tag Manager for WordPress by gtm4wp.com -->
    <script data-cfasync="false" type="text/javascript">//<![CDATA[
        var gtm4wp_datalayer_name = "dataLayer";
        var dataLayer = dataLayer || [];
        var gtm4wp_use_sku_instead        = 0;
        var gtm4wp_id_prefix              = '';
        var gtm4wp_remarketing            = false;
        var gtm4wp_eec                    = 1;
        var gtm4wp_classicec              = 1;
        var gtm4wp_currency               = 'EUR';
        var gtm4wp_product_per_impression = 0;
        //]]>
    </script>
    <!-- End Google Tag Manager for WordPress by gtm4wp.com -->		<script type="text/javascript">
        var ajaxurl = 'https://mdbootstrap.com/wp-admin/admin-ajax.php';
    </script>

    <!-- This site is optimized with the Yoast SEO plugin v9.5 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description" content="MD Bootstrap File Upload plugin is an extension that allows you to upload files by using drag and drop functionality. Easy to use, setup and customize.">
    <link rel="canonical" href="https://mdbootstrap.com/plugins/jquery/file-upload/">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Bootstrap drag and drop file upload - examples &amp; tutorial. Basic &amp; advanced usage">
    <meta property="og:description" content="MD Bootstrap File Upload plugin is an extension that allows you to upload files by using drag and drop functionality. Easy to use, setup and customize.">
    <meta property="og:url" content="https://mdbootstrap.com/plugins/jquery/file-upload/">
    <meta property="og:site_name" content="Material Design for Bootstrap">
    <meta property="article:publisher" content="https://www.facebook.com/mdbootstrap">
    <meta property="og:image" content="https://mdbootstrap.com/wp-content/uploads/2018/10/plugin-fileupload-jquery-1.jpg">
    <meta property="og:image:secure_url" content="https://mdbootstrap.com/wp-content/uploads/2018/10/plugin-fileupload-jquery-1.jpg">
    <meta property="og:image:width" content="700">
    <meta property="og:image:height" content="367">
    <meta property="og:image:alt" content="Bootstrap drag and drop file upload">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:description" content="MD Bootstrap File Upload plugin is an extension that allows you to upload files by using drag and drop functionality. Easy to use, setup and customize.">
    <meta name="twitter:title" content="Bootstrap drag and drop file upload - examples &amp; tutorial. Basic &amp; advanced usage">
    <meta name="twitter:site" content="@MDBootstrap">
    <meta name="twitter:image" content="https://mdbootstrap.com/wp-content/uploads/2018/10/plugin-fileupload-jquery-1.jpg">
    <meta name="twitter:creator" content="@MDBootstrap">
    <!-- / Yoast SEO plugin. -->

    <link rel="dns-prefetch" href="//chimpstatic.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/mdbootstrap.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.0.3"}};
        !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
    </script><script src="https://mdbootstrap.com/wp-includes/js/wp-emoji-release.min.js?ver=5.0.3" type="text/javascript" defer=""></script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" id="wp-block-library-css" href="https://mdbootstrap.com/wp-includes/css/dist/block-library/style.min.css?ver=5.0.3" type="text/css" media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="https://mdbootstrap.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.1.1" type="text/css" media="all">
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required { visibility: visible; }
    </style>
    <link rel="stylesheet" id="wsl-widget-css" href="https://mdbootstrap.com/wp-content/plugins/wordpress-social-login/assets/css/style.css?ver=5.0.3" type="text/css" media="all">
    <link rel="stylesheet" id="compiled.css-css" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.7.4.min.css?ver=4.7.4" type="text/css" media="all">
    <script type="text/javascript">
        /* <![CDATA[ */
        var mdw_search_object = {"ajaxurl":"https:\/\/mdbootstrap.com\/wp-admin\/admin-ajax.php","search_tree":{"83978":{"title":"bootstrap center (horizontal align)","description":"you can center any element (text, images, div, buttons) horizontally by using center utilities or flexbox. see examples.","link":"https:\/\/mdbootstrap.com?page_id=83978","wptitle":"Center (horizontal align)"},"75863":{"title":"bootstrap extended cards - examples & tutorial. basic & advanced usage","description":"cards dedicated to great range of data including weather info, promotions, retaurant and hotel bookings or even analytic metrics displayed in charts.","link":"https:\/\/mdbootstrap.com?page_id=75863","wptitle":"Extended Cards"},"82051":{"title":"bootstrap wysiwyg editor - examples & tutorial. basic & advanced usage","description":"bootstrap wysiwyg editor is a lightweight plugin that enables rich text editing on your website - text formatting, color manipulation, inserting links and images.","link":"https:\/\/mdbootstrap.com?page_id=82051","wptitle":"WYSIWYG Editor"},"81961":{"title":"bootstrap full screen scroller - examples & tutorial","description":"bootstrap full screen scroller plugin creates amazing one-page vertically and horizontally scrolling application with mouse and keyboard steering.","link":"https:\/\/mdbootstrap.com?page_id=81961","wptitle":"Full Screen Scroller"},"16534":{"title":"bootstrap image replacement - examples, tutorial & advanced usage","description":"image replacement is a utility that lets you swap text for background images by adding a single class.","link":"https:\/\/mdbootstrap.com?page_id=16534","wptitle":"Image replacement"},"16532":{"title":"bootstrap display - examples & tutorial. basic & advanced usage","description":"bootstrap display is a property which applies to many elements and specifies the type of rendering box used for an element.","link":"https:\/\/mdbootstrap.com?page_id=16532","wptitle":"Display property"},"81919":{"title":"bootstrap filter","description":"md bootstrap filter plugin is an extension perfect for introducing vistors to a number of images, which can be freely filtered depending on the category.","link":"https:\/\/mdbootstrap.com?page_id=81919","wptitle":"Filter"},"81924":{"title":"bootstrap carousel 3d","description":"md bootstrap carousel 3d plugin is a three dimensional slideshow component perfect for cycling through elements, especially images.","link":"https:\/\/mdbootstrap.com?page_id=81924","wptitle":"Carousel 3D"},"16530":{"title":"bootstrap close icon - examples & tutorial. basic & advanced usage","description":"bootstrap close icon is an element which is used for dismissing components like modals and alerts. see how easy implementation is.","link":"https:\/\/mdbootstrap.com?page_id=16530","wptitle":"Close icon"},"16540":{"title":"bootstrap embeds - examples & tutorial. basic & advanced usage","description":"bootstrap embeds is a utility which helps you insert video or slideshow in the page keeping width of the parent and scales on any device.","link":"https:\/\/mdbootstrap.com?page_id=16540","wptitle":"Embeds"},"10767":{"title":"bootstrap parallax - examples & tutorial. basic & advanced usage","description":"bootstrap parallax is a design effect visible while scrolling down - background image is moving at a different speed than the foreground content.","link":"https:\/\/mdbootstrap.com?page_id=10767","wptitle":"Parallax"},"10286":{"title":"bootstrap features sections - examples, tutorial & advanced usage","description":"bootstrap features sections are a combination of standard bootstrap components that together create a consistent design perfect for features pages.","link":"https:\/\/mdbootstrap.com?page_id=10286","wptitle":"Features sections"},"16518":{"title":"bootstrap code - examples & tutorial. basic & advanced usage","description":"bootstrap code is a set of classes class which is used for styling text as inline codes, variables, users inputs, sample outputs or blocks of code.","link":"https:\/\/mdbootstrap.com?page_id=16518","wptitle":"Code"},"43968":{"title":"bootstrap iframe - examples & tutorial. basic & advanced usage","description":"bootstrap iframe is an html document which is embedded in another html doc on a web page. iframes are used to insert content from another source.","link":"https:\/\/mdbootstrap.com?page_id=43968","wptitle":"IFrame"},"8265":{"title":"bootstrap date picker snippets - examples, tutorial & advanced usage","description":"bootstrap date picker is a plugin that adds a function of selecting time without the necessity of using custom javascript code.","link":"https:\/\/mdbootstrap.com?page_id=8265","wptitle":"Date Picker"},"8268":{"title":"bootstrap lightbox - examples, tutorial & advanced usage","description":"bootstrap lightbox is a group of images combined in one responsive gallery. elements are grouped in thumbnail grid, which can be displayed as a slideshow.","link":"https:\/\/mdbootstrap.com?page_id=8268","wptitle":"LightBox"},"8274":{"title":"bootstrap popovers - examples & tutorial. basic & advanced usage","description":"bootstrap popover is a component which displays a box with a content after a click on an element - similar to the tooltip but can contain more content.","link":"https:\/\/mdbootstrap.com?page_id=8274","wptitle":"Popovers"},"8284":{"title":"bootstrap waves effect - examples & tutorial. basic & advanced usage","description":"bootstrap waves effect is an impression of circular overlay movement, triggered by clicking the object, flowing from the center of the click.","link":"https:\/\/mdbootstrap.com?page_id=8284","wptitle":"Waves effect"},"11824":{"title":"material design for bootstrap sponsorship","description":"interested in cooperation with our team? plan your idea, set the dates and write to us! we are eager to participate in any important projects. learn more.","link":"https:\/\/mdbootstrap.com?page_id=11824","wptitle":"Material Design for Bootstrap Sponsorship"},"11820":{"title":"material design for bootstrap affiliate program","description":"material design for bootstrap affiliate program gives you an opportunity to be a part of our success and resale mdb in variety of ways.","link":"https:\/\/mdbootstrap.com?page_id=11820","wptitle":"MDB Affiliate Program"},"10273":{"title":"bootstrap select - examples & tutorial. basic & advanced usage","description":"bootstrap select is a form control which after a click displays a collapsable list of multiple values which can be used in forms, menus or surveys.","link":"https:\/\/mdbootstrap.com?page_id=10273","wptitle":"Material select"},"8260":{"title":"bootstrap tabs - examples & tutorial. basic & advanced usage","description":"bootstrap tabs are components which separate content placed in the same wrapper but in the separate pane. only one pane can be displayed at the time.","link":"https:\/\/mdbootstrap.com?page_id=8260","wptitle":"Tabs"},"8262":{"title":"bootstrap alerts guideline - examples & tutorial. basic & advanced usage","description":"bootstrap alerts are feedback messages which are displayed after specific actions preceded by the user. length of the text is not limited.","link":"https:\/\/mdbootstrap.com?page_id=8262","wptitle":"Alerts"},"1195":{"title":"material design logo generator","description":"over 600 icons with completely different and customizable styles coming in a form of user-friendly logo creator, free for both commercial and personal use.","link":"https:\/\/mdbootstrap.com?page_id=1195","wptitle":"Material Design Logo Generator"},"531":{"title":"bootstrap social buttons - examples & tutorial. basic & advanced usage","description":"bootstrap social buttons are buttons which are dedicated for social media usage. font awesome covers icons for all major platforms.","link":"https:\/\/mdbootstrap.com?page_id=531","wptitle":"Social buttons"},"10290":{"title":"bootstrap magazine sections - examples, tutorial & advanced usage","description":"bootstrap magazine sections are a combination of standard bootstrap components that together create a consistent design perfect for magazine pages.","link":"https:\/\/mdbootstrap.com?page_id=10290","wptitle":"Magazine sections"},"10282":{"title":"bootstrap contact sections - examples, tutorial & advanced usage","description":"bootstrap contact sections are a combination of standard bootstrap components that together create a consistent design perfect for contact pages.","link":"https:\/\/mdbootstrap.com?page_id=10282","wptitle":"Contact sections"},"10268":{"title":"bootstrap inputs - examples & tutorial. basic & advanced usage","description":"bootstrap input is a special field which is used in order to receive data from the user. used mostly in a variety of web-based forms.","link":"https:\/\/mdbootstrap.com?page_id=10268","wptitle":"Inputs"},"9106":{"title":"bootstrap mobile gestures - examples & tutorial. basic & advanced usage","description":"bootstrap mobile gestures are touch-based interactions with mobile devices. various of different fingers movements indicate particular components responses.","link":"https:\/\/mdbootstrap.com?page_id=9106","wptitle":"Mobile"},"45098":{"title":"bootstrap contact forms - examples & tutorial. basic & advanced usage","description":"bootstrap contact forms are components designed to collect users info in exchange for providing them information, promotions and content usually by emails.","link":"https:\/\/mdbootstrap.com?page_id=45098","wptitle":"Contact form"},"16522":{"title":"bootstrap images - examples & tutorial. basic & advanced usage","description":"bootstrap images are automatically adjusted to all screen sizes - image will never be larger than parent elements. its styles can be changed via classes.","link":"https:\/\/mdbootstrap.com?page_id=16522","wptitle":"Images"},"16550":{"title":"bootstrap vertical align - examples & tutorial. basic & advanced usage","description":"bootstrap vertical align is a utility that specifies the alignment of elements. works with inline, inline-block, inline-table, and table cell elements only.","link":"https:\/\/mdbootstrap.com?page_id=16550","wptitle":"Vertical align"},"16548":{"title":"bootstrap text utilities - examples & tutorial. basic & advanced usage","description":"bootstrap text utilities are a group of text modifiers which change text alignment, wrapping, letter capitalization, weight, and italics.","link":"https:\/\/mdbootstrap.com?page_id=16548","wptitle":"Text utilities"},"16544":{"title":"bootstrap sizing - examples & tutorial. basic & advanced usage","description":"bootstrap sizing is a utility which allows you to adjust elements width or height. there are 4 available values: 25%, 50%, 75% and 100%.","link":"https:\/\/mdbootstrap.com?page_id=16544","wptitle":"Sizing"},"16510":{"title":"bootstrap grid examples - examples & tutorial. basic & advanced usage","description":"bootstrap grid system allows you to create multiple combinations of columns and rows, changing the overall feeling of your project and its ui structure.","link":"https:\/\/mdbootstrap.com?page_id=16510","wptitle":"Grid examples"},"13708":{"title":"visual guide to bootstrap flexbox - examples, tutorial & advantage usage","description":"bootstrap flexbox is a utility for managing position of the items in a container and distributes space between them in a more efficient way.","link":"https:\/\/mdbootstrap.com?page_id=13708","wptitle":"Flexbox"},"10296":{"title":"bootstrap testimonials sections","description":"four forms of bootstrap testimonials sections, made with material design patterns, ready to be used on you own website project.","link":"https:\/\/mdbootstrap.com?page_id=10296","wptitle":"Testimonials sections"},"10292":{"title":"bootstrap projects sections - examples, tutorial & advanced usage","description":"bootstrap projects sections are a combination of standard bootstrap components that together create a consistent design perfect for projects pages.","link":"https:\/\/mdbootstrap.com?page_id=10292","wptitle":"Projects sections"},"10260":{"title":"bootstrap blog components - examples & tutorial. basic & advanced usage","description":"bootstrap blog components is a set of components which are dedicated to building a blog or any other content-oriented website.","link":"https:\/\/mdbootstrap.com?page_id=10260","wptitle":"Blog Components"},"8796":{"title":"bootstrap icons list - 1479 amazing and free font awesome icons","description":"the biggest collection of free bootstrap icons. easy to use and customize. available in different colors, shapes, and size.","link":"https:\/\/mdbootstrap.com?page_id=8796","wptitle":"Icons list"},"8842":{"title":"bootstrap time picker - examples & tutorial. basic & advanced usage","description":"bootstrap time picker is a jquery plugin which allows a user to select a time in the bootstrap form without the necessity of using custom javascript code.","link":"https:\/\/mdbootstrap.com?page_id=8842","wptitle":"Time Picker"},"8255":{"title":"bootstrap tags, labels & badges - examples, tutorial & advanced usage","description":"bootstrap tags, labels & badges categorize content with use of a text or icons, making it easier to browse throughout articles, comments or pages.","link":"https:\/\/mdbootstrap.com?page_id=8255","wptitle":"Tags, Labels & Badges"},"8257":{"title":"bootstrap progress bars \/ loaders - examples & tutorial. basic & advanced usage","description":"bootstrap progress bars \/ loader is a component which displays a progress of a process in which user is involved. their color, shape, and animation can be customized.","link":"https:\/\/mdbootstrap.com?page_id=8257","wptitle":"Progress bars \/ loaders"},"3123":{"title":"bootstrap charts guideline - examples & tutorial. basic & advanced usage","description":"bootstrap charts are graphical representations of data. charts come in different sizes and shapes: bar, line, pie, radar, polar and more.","link":"https:\/\/mdbootstrap.com?page_id=3123","wptitle":"Charts"},"43911":{"title":"bootstrap forms - examples & tutorial. basic & advanced usage","description":"bootstrap forms are input-based components which are designed to collect users data. examples of login, register, subscription, contact & more forms.","link":"https:\/\/mdbootstrap.com?page_id=43911","wptitle":"Forms"},"111":{"title":"+70 bootstrap animations - examples & tutorial. basic & advanced usage","description":"bootstrap animations are illusions of motions for web elements. +70 animations generated by css only, work properly on every browser.","link":"https:\/\/mdbootstrap.com?page_id=111","wptitle":"Animations"},"43904":{"title":"bootstrap table - examples & tutorial. basic & advanced usage","description":"bootstrap tables - basic and advanced usage. fully functional, responsive examples with search and sort options & pagination, buttons & icons elements.","link":"https:\/\/mdbootstrap.com?page_id=43904","wptitle":"Table"},"43902":{"title":"+300 bootstrap colors - examples & tutorial. basic & advanced usage","description":"bootstrap colors is a sensational palette of 300 delightful colors, which will aid you in creating inviting, consistent design.","link":"https:\/\/mdbootstrap.com?page_id=43902","wptitle":"Colors"},"43977":{"title":"bootstrap checkbox - examples & tutorial. basic & advanced usage","description":"bootstrap checkbox is a component used for allowing a user to make a multiple choice. broadly used in the forms and surveys.","link":"https:\/\/mdbootstrap.com?page_id=43977","wptitle":"Checkbox"},"43966":{"title":"bootstrap jumbotron - examples & tutorial. basic & advanced usage","description":"bootstrap jumbotron is a responsive component which the main goal is to focus visitor's attention or highlight the special piece of information.","link":"https:\/\/mdbootstrap.com?page_id=43966","wptitle":"Jumbotron"},"11850":{"title":"free bootstrap 4 templates - stunning, responsive material design themes","description":"the biggest open source collection of stunning, free templates built with bootstrap 4 and material design. admin, e-commerce, landing page, blog and many more. free for personal and commercial use. fully responsive and cross-browser compatible.","link":"https:\/\/mdbootstrap.com?page_id=11850","wptitle":"Free Bootstrap Templates &amp; Themes"},"11822":{"title":"material design for bootstrap academy","description":"are you a student or lecturer? do you feel like your university might be better with mdb? learn how to provide your school with all that our team can offer.","link":"https:\/\/mdbootstrap.com?page_id=11822","wptitle":"MDB Academy"},"10288":{"title":"bootstrap intros sections - examples, tutorial and advanced usage","description":"bootstrap intros sections are a combination of standard bootstrap components that together create a consistent design perfect for intros pages.","link":"https:\/\/mdbootstrap.com?page_id=10288","wptitle":"Intros"},"8376":{"title":"bootstrap collapse guidelines - examples, tutorial & advanced usage","description":"bootstrap collapse is a component which toggles content. useful for grouping great amount of texts and\/or graphics into expanding and collapsing items.","link":"https:\/\/mdbootstrap.com?page_id=8376","wptitle":"Collapse"},"8253":{"title":"bootstrap list groups - examples & tutorial. basic & advanced usage","description":"bootstrap list groups are a flexible component which displays not only simple list of elements but complex custom content.","link":"https:\/\/mdbootstrap.com?page_id=8253","wptitle":"List group"},"8240":{"title":"bootstrap media - examples & tutorial. basic & advanced usage","description":"bootstrap media provides you with various ways of presenting images and videos to your audience thanks to bootstrap way of handling those elements.","link":"https:\/\/mdbootstrap.com?page_id=8240","wptitle":"Media"},"8251":{"title":"bootstrap dropdown - examples & tutorial. basic & advanced usage","description":"bootstrap dropdown is a toggleable menu embedding additional links or content. it allows you to construct advanced navigation and link categorization.","link":"https:\/\/mdbootstrap.com?page_id=8251","wptitle":"Dropdowns"},"8278":{"title":"bootstrap tooltip - examples, tutorial & advanced usage","description":"bootstrap tooltips are little clouds with a brief text message, triggered by clicking on a specific element or hovering over it.","link":"https:\/\/mdbootstrap.com?page_id=8278","wptitle":"Tooltips"},"1201":{"title":"bootstrap hover effects - examples & tutorial. basic & advanced usage","description":"bootstrap hover effect appears when a user positions computer cursor over an element without activating it. hover effects make a website more interactive.","link":"https:\/\/mdbootstrap.com?page_id=1201","wptitle":"Hover effects"},"290":{"title":"bootstrap panels - examples & tutorial. basic & advanced usage","description":"bootstrap panels are bordered boxes where you can place texts, lists, tables and other content. panels are similar to cards, but they don't include media.","link":"https:\/\/mdbootstrap.com?page_id=290","wptitle":"Panels"},"43912":{"title":"bootstrap icons - examples & tutorial. basic & advanced usage","description":"bootstrap image usage is a quick tutorial which describes the proper way of using font awesome icons in bootstrap framework.","link":"https:\/\/mdbootstrap.com?page_id=43912","wptitle":"Icons usage"},"43910":{"title":"bootstrap cards - examples & tutorial. basic & advanced usage","description":"bootstrap cards are components which display content build of different elements with characteristic shadows, depth and hover effects.","link":"https:\/\/mdbootstrap.com?page_id=43910","wptitle":"Cards"},"43906":{"title":"premium bootstrap templates - responsive bootstrap 4 themes","description":"stunning and responsive templates created by the google material design guidelines with the power of the newest bootstrap 4.","link":"https:\/\/mdbootstrap.com?page_id=43906","wptitle":"Premium Bootstrap Templates &amp; Themes"},"43903":{"title":"bootstrap shadows \/ material design shadows - examples, tutorial & usage","description":"bootstrap shadow is an effect used in web elements which provides important visual cues about objects' depth and directional movement.","link":"https:\/\/mdbootstrap.com?page_id=43903","wptitle":"Shadows \/ Material Design shadows"},"16536":{"title":"bootstrap visibility utilities - examples & tutorial. basic & advanced usage","description":"bootstrap visibility class allows controlling the visibility of elements without changing the display. this utility keep content visible for screen readers.","link":"https:\/\/mdbootstrap.com?page_id=16536","wptitle":"Visibility"},"10284":{"title":"bootstrap e-commerce sections - examples, tutorial & advanced usage","description":"bootstrap e-commerce sections are a combination of standard bootstrap components that together create a consistent design perfect for e-commerce pages.","link":"https:\/\/mdbootstrap.com?page_id=10284","wptitle":"E-commerce sections"},"10279":{"title":"bootstrap blog sections - examples, tutorial & advanced usage","description":"bootstrap blog sections are a combination of standard bootstrap components that together create a consistent design perfect for blog pages.","link":"https:\/\/mdbootstrap.com?page_id=10279","wptitle":"Blog sections"},"10270":{"title":"bootstrap pagination - examples & tutorial. basic & advanced usage","description":"bootstrap pagination is a component used when content is divided into separate pages to display the page numbers and enable navigation between them.","link":"https:\/\/mdbootstrap.com?page_id=10270","wptitle":"Pagination"},"16558":{"title":"bootstrap footer - examples & tutorial. basic & advanced usage","description":"bootstrap footer is an additional navigation for the website. it can hold links, buttons, company info, copyrights, forms and many other elements.","link":"https:\/\/mdbootstrap.com?page_id=16558","wptitle":"Footer"},"16520":{"title":"bootstrap figures - examples & tutorial. basic & advanced usage","description":"bootstrap figures are commonly used elements for displaying images with the caption. a caption can be left-aligned or right-align.","link":"https:\/\/mdbootstrap.com?page_id=16520","wptitle":"Figures"},"16546":{"title":"bootstrap spacing - examples & tutorial. basic & advanced usage","description":"bootstrap spacing is a utility which assigns responsive margin or padding classes to elements to modify its display position.","link":"https:\/\/mdbootstrap.com?page_id=16546","wptitle":"Spacing"},"16542":{"title":"bootstrap screenreaders - examples & tutorial. basic & advanced usage","description":"bootstrap screenreaders is an assistive technology which hides elements on every device except screen readers with a single class.","link":"https:\/\/mdbootstrap.com?page_id=16542","wptitle":"Screenreaders"},"16538":{"title":"bootstrap position - examples & tutorial. basic & advanced usage","description":"bootstrap position utilities are helpful for quickly placing a component outside the normal document flow. see a handful of fixed position classes.","link":"https:\/\/mdbootstrap.com?page_id=16538","wptitle":"Position"},"43969":{"title":"bootstrap float - examples & tutorial. basic & advanced usage","description":"bootstrap float is a utility which specified whether an element will be placed on the right or left side of a container. floating may be also disabled.","link":"https:\/\/mdbootstrap.com?page_id=43969","wptitle":"Float"},"16528":{"title":"bootstrap clearfix - examples & tutorial. basic & advanced usage","description":"bootstrap clearfix is a utility which to automatically clear child elements, so a user doesn't have to add additional markup.","link":"https:\/\/mdbootstrap.com?page_id=16528","wptitle":"Clearfix"},"16526":{"title":"bootstrap borders - examples & tutorial. basic & advanced usage","description":"bootstrap borders are lines placed on the edges of buttons, images, and other web elements. additionally, border-radius class rounds the elements corners.","link":"https:\/\/mdbootstrap.com?page_id=16526","wptitle":"Borders"},"16514":{"title":"bootstrap utilities - examples & tutorial. basic & advanced usage","description":"bootstrap utilities for layout are a group of helpers, which is useful in showing, hiding, aligning, and spacing content.","link":"https:\/\/mdbootstrap.com?page_id=16514","wptitle":"Utilities for layout"},"16512":{"title":"bootstrap navigation \/ header - examples & tutorial. basic & advanced usage","description":"bootstrap navigation is a combination of navbar, sidenav, and footer in various forms and different functionalities like non-fixed navbar or hidden sidenav.","link":"https:\/\/mdbootstrap.com?page_id=16512","wptitle":"Navigation \/ Bootstrap header"},"22665":{"title":"bootstrap layout - examples & tutorial. basic & advanced usage","description":"bootstrap layout includes responsive breakpoints in grid system for providing mobile-first experience and z-index - a third axis to arrange content.","link":"https:\/\/mdbootstrap.com?page_id=22665","wptitle":"Layout"},"107":{"title":"bootstrap sidebar \/ sidenav - examples, tutorial & advanced usage","description":"bootstrap sidenav is a vertical navigation component which apart from traditional, text links, might embed icons, dropdowns, avatars or search forms.","link":"https:\/\/mdbootstrap.com?page_id=107","wptitle":"SideNav"},"105":{"title":"bootstrap scrollspy - examples & tutorial. basic & advanced usage","description":"bootstrap scrollspy is a plugin which shows on the navigation list current position on the page depends on the scroll position defined by the user.","link":"https:\/\/mdbootstrap.com?page_id=105","wptitle":"ScrollSpy"},"97":{"title":"bootstrap modal - examples & tutorial. basic & advanced usage","description":"bootstrap modal is lightweight, but powerful & multipurpose popup. learn how to manipulate size, styles & position. multiple examples and detailed tutorial.","link":"https:\/\/mdbootstrap.com?page_id=97","wptitle":"Modals"},"26":{"title":"bootstrap typography guideline - examples, tutorial & advanced usage","description":"bootstrap typography is the style and appearance of headings, lists, body text and basic paragraphs - 14 examples coming along with descriptions.","link":"https:\/\/mdbootstrap.com?page_id=26","wptitle":"Typography"},"15052":{"title":"bootstrap 4 beta released! read summary and tutorial.","description":"two years of development. 5,000 commits, 650+ files changed, 67,000 lines added, and 82,000 lines deleted. bootstrap 4 beta is finally here!","link":"https:\/\/mdbootstrap.com?page_id=15052","wptitle":"Bootstrap 4 beta"},"13575":{"title":"bootstrap social sections - examples, tutorial & advanced usage","description":"bootstrap social sections are a combination of standard bootstrap components that together create a consistent design perfect for social pages.","link":"https:\/\/mdbootstrap.com?page_id=13575","wptitle":"Social Sections"},"10294":{"title":"bootstrap team sections - examples, tutorial & advanced usage","description":"bootstrap team sections are a combination of standard bootstrap components that together create a consistent design perfect for team pages.","link":"https:\/\/mdbootstrap.com?page_id=10294","wptitle":"Team sections"},"10263":{"title":"bootstrap e-commerce components - examples, tutorial & advance usage","description":"bootstrap e-commerce components is a set of components which are necessary to build online stores and any other e-commerce business.","link":"https:\/\/mdbootstrap.com?page_id=10263","wptitle":"E-commerce components"},"10258":{"title":"bootstrap skins - examples & tutorial. basic & advanced usage","description":"bootstrap skins are basic color schemes which can be easily applied to any website providing ready-to-use full-page web design.","link":"https:\/\/mdbootstrap.com?page_id=10258","wptitle":"Skins"},"9123":{"title":"bootstrap stickycontent - examples & tutorial. basic & advanced usage","description":"bootstrap sticky content (affix) is a plugin which allows elements to be locked in the particular area of the page. often used in navigation menus.","link":"https:\/\/mdbootstrap.com?page_id=9123","wptitle":"StickyContent"},"8237":{"title":"visual guide to bootstrap grid - examples, tutorial & advanced usage","description":"bootstrap grid is a system of columns and rows which is used for creating a page layout. mobile-friendly, responsive and can be rearranged depends on screen","link":"https:\/\/mdbootstrap.com?page_id=8237","wptitle":"Grid"},"2336":{"title":"bootstrap masks guide - examples & tutorial. basic & advanced usage","description":"bootstrap masks alter the visibility of an element by either partially or fully hiding it. masks are used to make content more visible in the picture.","link":"https:\/\/mdbootstrap.com?page_id=2336","wptitle":"CSS Masks"},"43913":{"title":"bootstrap navbar - examples & tutorial. basic & advanced usage","description":"bootstrap navbar is a horizontal navigation component which apart from traditional, text links, might embed icons, dropdowns, avatars or search forms.","link":"https:\/\/mdbootstrap.com?page_id=43913","wptitle":"Navbar"},"43909":{"title":"bootstrap buttons - examples & tutorial. basic & advanced usage","description":"bootstrap buttons are components which are triggering a desirable user interaction. easy to customize in terms of size, shape, and color.","link":"https:\/\/mdbootstrap.com?page_id=43909","wptitle":"Buttons"},"43905":{"title":"getting started with material design for bootstrap","description":"see how easy it is to install and use free material design for bootstrap ui kit. you need only 5 minutes to start creating stunning websites with no effort.","link":"https:\/\/mdbootstrap.com?page_id=43905","wptitle":"Download"},"170":{"title":"bootstrap carousel - examples, tutorial & advanced usage","description":"bootstrap carousel is responsive and interactive slideshow which is created for presenting content, especially images and videos.","link":"https:\/\/mdbootstrap.com?page_id=170","wptitle":"Carousel"},"4644":{"title":"bootstrap scrollbar & smoothscroll - examples & tutorial. basic & advanced usage","description":"bootstrap smooth scroll is an animated movement from a trigger - button, link or any other clickable element - to another place of the same page.","link":"https:\/\/mdbootstrap.com?page_id=4644","wptitle":"Scrollbar & smooth scroll"},"43980":{"title":"bootstrap multiselect - examples & tutorial. basic & advanced usage","description":"bootstrap multiselect is a jquery based plugin that allows users to tick multiple options from a standard bootstrap select.","link":"https:\/\/mdbootstrap.com?page_id=43980","wptitle":"Multiselect"},"45832":{"title":"bootstrap radio buttons - examples & tutorial. basic & advanced usage","description":"bootstrap radio buttons are option buttons, which allows users to choose one of a predefined set of two or more options. commonly used in forms and surveys.","link":"https:\/\/mdbootstrap.com?page_id=45832","wptitle":"Radio button"},"45876":{"title":"bootstrap accordion - examples & tutorial. basic & advanced usage","description":"bootstrap accordion is a component which organizes content within collapsable items. accordion allows showing only one collapsed item at the same time.","link":"https:\/\/mdbootstrap.com?page_id=45876","wptitle":"Accordion"},"45880":{"title":"bootstrap file input - examples & tutorial. basic & advanced usage","description":"bootstrap file input is a field which user can use to upload one or more files (photos, documents or any other file type) from the local storage.","link":"https:\/\/mdbootstrap.com?page_id=45880","wptitle":"File Input"},"45878":{"title":"bootstrap breadcrumb - examples & tutorial. basic & advanced usage","description":"bootstrap breadcrumbs are navigation elements which indicate a current location on the website. breadcrumbs show a hierarchy of the current location as well","link":"https:\/\/mdbootstrap.com?page_id=45878","wptitle":"Breadcrumb"},"45885":{"title":"bootstrap gallery - examples & tutorial. basic & advanced usage","description":"bootstrap gallery is a component which compiles a number of media in one interactive collection presented in basic or more advanced lightboxes.","link":"https:\/\/mdbootstrap.com?page_id=45885","wptitle":"Gallery"},"46002":{"title":"bootstrap search - examples & tutorial. basic & advanced usage","description":"bootstrap search is a component which enables a process of finding words, sentences, and numbers in the collection of documents, web pages or other sources.","link":"https:\/\/mdbootstrap.com?page_id=46002","wptitle":"Search"},"45921":{"title":"bootstrap textarea - examples & tutorial. basic & advanced usage","description":"bootstrap textarea is an input dedicated for a large volume of text. it may be used in a variety of components like forms, comment sections, and forums.","link":"https:\/\/mdbootstrap.com?page_id=45921","wptitle":"Textarea"},"45930":{"title":"bootstrap modal form - examples & tutorial. basic & advanced usage","description":"bootstrap modal forms are displayed-on-action pop-up forms that used for gathering data from a website visitors and register or log users.","link":"https:\/\/mdbootstrap.com?page_id=45930","wptitle":"Modal Form"},"46094":{"title":"bootstrap slider - examples & tutorial. basic & advanced usage","description":"bootstrap slider is an interactive component that lets the user swiftly slide through possible values spread on the desired range.","link":"https:\/\/mdbootstrap.com?page_id=46094","wptitle":"Slider"},"46062":{"title":"bootstrap switch \/ toggle - examples & tutorial. basic & advanced usage","description":"bootstrap switch \/ toggle is a simple component used for activating one of two predefined options. commonly used as an on\/off button.","link":"https:\/\/mdbootstrap.com?page_id=46062","wptitle":"Switch \/ Bootstrap toggle"},"46047":{"title":"bootstrap google map - examples & tutorial. basic & advanced usage","description":"bootstrap google map is a component which displays a map of an area defined by a user. maps can be used in components like forms and modals.","link":"https:\/\/mdbootstrap.com?page_id=46047","wptitle":"Google Map"},"46390":{"title":"bootstrap button group - examples & tutorial. basic & advanced usage","description":"bootstrap button groups are buttons grouped together in a single line with no space between them. they can be grouped both vertically and horizontally.","link":"https:\/\/mdbootstrap.com?page_id=46390","wptitle":"Button Group"},"46216":{"title":"material design for bootstrap sitemap","description":"a clear and comprehensive group of lists with all the components and sections of the material design for bootstrap documentation.","link":"https:\/\/mdbootstrap.com?page_id=46216","wptitle":"MD Bootstrap Sitemap"},"46281":{"title":"bootstrap mega menu - examples & tutorial. basic & advanced usage","description":"bootstrap mega menu is a navigation component which enhances standard navbar features. extended dropdown contains images and categorized links.","link":"https:\/\/mdbootstrap.com?page_id=46281","wptitle":"Mega Menu"},"43970":{"title":"bootstrap steps (stepper) - examples & tutorial. basic & advanced usage","description":"bootstrap stepper is a component that displays content as a process with defined by user milestones. following steps are separated and connected by buttons.","link":"https:\/\/mdbootstrap.com?page_id=43970","wptitle":"Steps (stepper)"},"46641":{"title":"bootstrap edge header - introduction and code example","description":"bootstrap edge header is a full-width block located on the top of a page as a part of a background for a card. it is a unique material design component","link":"https:\/\/mdbootstrap.com?page_id=46641","wptitle":"Edge Header"},"46649":{"title":"bootstrap navs - examples & tutorial. basic & advanced usage","description":"bootstrap navs is a class which can transform a list of items into navigation components or tabs\/pills. navs helps to build more advanced components.","link":"https:\/\/mdbootstrap.com?page_id=46649","wptitle":"Navs"},"10739":{"title":"md bootstrap newsletter - most important news, updates & tutorials","description":"md bootstrap newsletter - easy unsubscription, no spam messages. we'll write rarely, but only the best content. specify your preferences and stay up to date","link":"https:\/\/mdbootstrap.com?page_id=10739","wptitle":"Newsletter"},"3145":{"title":"md bootstrap changelog - detailed list of changes in the newest release","description":"material design for bootstrap provides a detailed list of changes in each release. read it carefully to do not miss any important update.","link":"https:\/\/mdbootstrap.com?page_id=3145","wptitle":"ChangeLog"},"47032":{"title":"bootstrap hamburger menu - examples & tutorial. basic & advanced usage","description":"bootstrap hamburger menu is a navigation with additional hamburger looks-like icon which activates hidden menu elements in navbar or sidenav.","link":"https:\/\/mdbootstrap.com?page_id=47032","wptitle":"Hamburger Menu"},"46643":{"title":"bootstrap streak - examples & tutorial. basic & advanced usage","description":"bootstrap streak is a horizontal block containing text, uses to separate content sections or highlight some piece of information.","link":"https:\/\/mdbootstrap.com?page_id=46643","wptitle":"Streak"},"47100":{"title":"bootstrap video - examples & tutorial. basic & advanced usage","description":"bootstrap video is a component which embeds a video file in dom. it can be used in carousels, modals, pages backgrounds or iframes.","link":"https:\/\/mdbootstrap.com?page_id=47100","wptitle":"Video"},"47182":{"title":"bootstrap timelines - examples & tutorial. basic & advanced usage","description":"bootstrap timeline is a component which can be used to display content in chronological order. listed items may contain not only text but also images.","link":"https:\/\/mdbootstrap.com?page_id=47182","wptitle":"Timeline"},"47250":{"title":"bootstrap icon button - examples & tutorial. basic & advanced usage","description":"bootstrap icon button is a combination of a standard bootstrap button with font awesome icon inside it. it may contain icon only or text with an icon.","link":"https:\/\/mdbootstrap.com?page_id=47250","wptitle":"Button Icon"},"10277":{"title":"bootstrap sections - blog, e-commerce, contact & many more","description":"plenty of predefined sections dedicated for various website - blog, e-commerce, magazine, contact, testimonials, social, team and much more.","link":"https:\/\/mdbootstrap.com?page_id=10277","wptitle":"Sections"},"47063":{"title":"bootstrap pills - code examples, tutorial and use examples","description":"bootstrap pills are simple navigation components that expedite browsing through various options in the layout.","link":"https:\/\/mdbootstrap.com?page_id=47063","wptitle":"Pills"},"16":{"title":"bootstrap css - visual guide to css classes & components of bootstrap 4","description":"learn how to use bootstrap css at basic and advanced level. read our visual guide and comprehensive tutorial about the newest bootstrap 4.","link":"https:\/\/mdbootstrap.com?page_id=16","wptitle":"MD Bootstrap CSS"},"43907":{"title":"bootstrap components - visual guide to components of bootstrap 4","description":"learn how to use bootstrap components at basic and advanced level. read our visual guide and comprehensive tutorial about the newest bootstrap 4.","link":"https:\/\/mdbootstrap.com?page_id=43907","wptitle":"Components"},"43908":{"title":"bootstrap javascript - visual guide to javascript plugins of bootstrap 4","description":"learn how to use bootstrap javascript plugins at basic and advanced level. read our visual guide and comprehensive tutorial about the newest bootstrap 4.","link":"https:\/\/mdbootstrap.com?page_id=43908","wptitle":"JavaScript"},"47532":{"title":"bootstrap responsive email templates - code, examples, tutorials","description":"bootstrap email templates is a set of pre-made, ready-to-use combination of buttons, images, and text designed to be sent via an email.","link":"https:\/\/mdbootstrap.com?page_id=47532","wptitle":"Responsive email templates"},"47290":{"title":"bootstrap gradient - examples & tutorial. basic & advanced usage","description":"bootstrap gradient is a linear color progression - a transition between two colors is fluent. gradient can be used in various of components.","link":"https:\/\/mdbootstrap.com?page_id=47290","wptitle":"Gradient"},"16566":{"title":"bootstrap card animation - examples & tutorial. basic & advanced usage","description":"bootstrap card animations is a set of standard illusions of motions that can be applied to the bootstrap cards to improve the user experience.","link":"https:\/\/mdbootstrap.com?page_id=16566","wptitle":"Card animation"},"47065":{"title":"bootstrap equal height columns - examples, tutorial & advanced usage","description":"bootstrap equal height columns is a utility which helps to keep columns size the same, no matter how much content will be placed inside.","link":"https:\/\/mdbootstrap.com?page_id=47065","wptitle":"Equal Height Columns"},"16564":{"title":"bootstrap flipping cards - examples & tutorial. basic & advanced usage","description":"bootstrap flipping card is a card animation that gives an element effect of flipping to the other side upon the interaction.","link":"https:\/\/mdbootstrap.com?page_id=16564","wptitle":"Flipping cards"},"47350":{"title":"bootstrap card layout - examples, tutorial & advanced usage","description":"bootstrap card layout is a design based on standard bootstrap card combined in different forms and with different functionalities.","link":"https:\/\/mdbootstrap.com?page_id=47350","wptitle":"Card Layout"},"47263":{"title":"bootstrap modal events - examples & tutorial. basic & advanced usage","description":"bootstrap modal events is a set of js scripts that let you launch bootstrap modals based on an action performed by a website visitors.","link":"https:\/\/mdbootstrap.com?page_id=47263","wptitle":"Modal Events"},"47789":{"title":"bootstrap background image - examples, tutorial & advanced usage","description":"bootstrap background image is an illustration chosen by a user placed behind all other objects on the website. it may be full or partially visible.","link":"https:\/\/mdbootstrap.com?page_id=47789","wptitle":"Background Image"},"47639":{"title":"bootstrap text color - examples & tutorial. basic & advanced usage","description":"bootstrap text color is a set of colors which can be used to change the font's color. color may be also changed when hovering a mouse over a text area.","link":"https:\/\/mdbootstrap.com?page_id=47639","wptitle":"Text Color"},"47668":{"title":"bootstrap chat - examples & tutorial. basic & advanced usage","description":"bootstrap chat is a component dedicated for text-based communication between two or more users in real time. build with conversations list sidebar.","link":"https:\/\/mdbootstrap.com?page_id=47668","wptitle":"Chat"},"48278":{"title":"bootstrap autocomplete - examples & tutorial. basic & advanced usage","description":"bootstrap autocomplete is a component which predicts the words basing on the first few letters given by a user, while one is typing it.","link":"https:\/\/mdbootstrap.com?page_id=48278","wptitle":"Autocomplete"},"47479":{"title":"bootstrap media queries - examples & tutorial. basic & advanced usage","description":"bootstrap media queries are queries use for applying styles determined by the general type of the device, browsers characteristics or environment.","link":"https:\/\/mdbootstrap.com?page_id=47479","wptitle":"Media Queries"},"47493":{"title":"bootstrap notification - examples & tutorial. basic & advanced usage","description":"bootstrap notification is a set of components which displays a static information or one generated in response to particular user on-site behavior.","link":"https:\/\/mdbootstrap.com?page_id=47493","wptitle":"Notification"},"51243":{"title":"bootstrap 4 stable released! read summary and tutorial","description":"2,5 years of development. 6,000 commits, 650+ files changed, 67,000 lines added, and 82,000 lines deleted. bootstrap 4 stable is finally here!","link":"https:\/\/mdbootstrap.com?page_id=51243","wptitle":"Bootstrap 4 stable"},"46338":{"title":"bootstrap input group","description":"bootstrap input group is a set of fields used for collecting data entered by users. usually containing buttons, text areas or other input.","link":"https:\/\/mdbootstrap.com?page_id=46338","wptitle":"Input Group"},"52102":{"title":"bootstrap modal styles - examples & tutorial. basic & advanced usage","description":"by using our predefined modal styles you can add some emotional weight to your information, ranging from a simple warning to critical system failure or from an operation success to a neutral information.","link":"https:\/\/mdbootstrap.com?page_id=52102","wptitle":"Modal styles"},"52104":{"title":"bootstrap modal examples & templates","description":"multiple examples and advanced usage. modal cookies, coupon, discount, abandoned card, related content, poll, cart, youtube, product and many more.","link":"https:\/\/mdbootstrap.com?page_id=52104","wptitle":"Modal examples &amp; templates"},"82043":{"title":"bootstrap color picker - examples & tutorial. basic & advanced usage","description":"bootstrap color picker plugin allows you to select different colors. you can successfully use it in various product wizards, clothing sales, or other situations where you need to be able to choose a color.","link":"https:\/\/mdbootstrap.com?page_id=82043","wptitle":"JQuery - Color Picker"},"82040":{"title":"bootstrap full calendar - examples & tutorial. basic & advanced usage","description":"bootstrap full calendar plugin is an extension that allows you to create calendar functionality.","link":"https:\/\/mdbootstrap.com?page_id=82040","wptitle":"JQuery - Full Calendar"},"60545":{"title":"bootstrap table - styles & examples. basic & advanced usage","description":"extended bootstrap tables with additional elements like buttons, checkboxes, icons, panels & more.","link":"https:\/\/mdbootstrap.com?page_id=60545","wptitle":"Table styles & examples"},"60800":{"title":"fluent design for bootstrap 4 - ui kit inspired by microsoft design system","description":"fluent design for bootstrap 4 - 100+ fluent ui elements, 1400+ fluent icons, css animations, scss files and many more. free for personal and commercial use.","link":"https:\/\/mdbootstrap.com?page_id=60800","wptitle":"Fluent Design UI KIT"},"52467":{"title":"bootstrap table responsive - examples & tutorial. basic & advanced usage","description":"responsive tables allow tables to be scrolled horizontally with ease. that means they can be comfortably used both on desktops and mobile devices.","link":"https:\/\/mdbootstrap.com?page_id=52467","wptitle":"Table responsive"},"60547":{"title":"bootstrap 4 datatables - examples & tutorial. basic & advanced usage","description":"bootstrap 4 integration with the most popular plugin enhancing the possibilities of standard tables. available in material design or default bootstrap style.","link":"https:\/\/mdbootstrap.com?page_id=60547","wptitle":"Bootstrap 4 datatables"},"52479":{"title":"bootstrap table pagination - examples & tutorial. basic & advanced usage","description":"table pagination is a simple navigation which lets you split a huge amount of content within the tables into smaller parts.","link":"https:\/\/mdbootstrap.com?page_id=52479","wptitle":"Table pagination"},"52474":{"title":"bootstrap table search - examples & tutorial. basic & advanced usage","description":"bootstrap table search - super fast and easy to use searching functionality dedicated to bootstrap tables.","link":"https:\/\/mdbootstrap.com?page_id=52474","wptitle":"Table search"},"60558":{"title":"bootstrap button generator - free, online editor for bootstrap 4 buttons","description":"bootstrap button generator - a simple and fast way to create a bootstrap 4 buttons with custom text, colors, sizes, and icons.","link":"https:\/\/mdbootstrap.com?page_id=60558","wptitle":"Button generator"},"60560":{"title":"bootstrap modal generator - free, online editor for bootstrap 4 modals","description":"bootstrap modal generator - a simple and fast way to create a bootstrap 4 modals with custom styles, sizes, animations and positions.","link":"https:\/\/mdbootstrap.com?page_id=60560","wptitle":"Modal generator"},"52484":{"title":"bootstrap table editable - examples & tutorial. basic & advanced usage","description":"with editable bootstrap table, you can add and remove rows and change text and information within cells.","link":"https:\/\/mdbootstrap.com?page_id=52484","wptitle":"Table editable"},"52477":{"title":"bootstrap table scroll - examples & tutorial. basic & advanced usage","description":"bootstrap table scroll functionality works vertically (y axis) and horizontally (x axis). you can use it as an alternative for the pagination.","link":"https:\/\/mdbootstrap.com?page_id=52477","wptitle":"Table scroll"},"52470":{"title":"bootstrap table sort - examples & tutorial. basic & advanced usage","description":"bootstrap table sort functionality lets you sort the data of the tables according to any specific columns. it's easy to implement and use.","link":"https:\/\/mdbootstrap.com?page_id=52470","wptitle":"Table sort"},"61270":{"title":"bootstrap navbar generator - free, online editor for bootstrap 4 navbars","description":"bootstrap navbar generator - a simple and fast way to create a bootstrap 4 navbar with custom styles, sizes and positions.","link":"https:\/\/mdbootstrap.com?page_id=61270","wptitle":"Navbar generator"},"61273":{"title":"bootstrap flexbox generator - free, online editor for bootstrap 4 flexbox","description":"bootstrap flexbox generator - a simple and fast way to test a bootstrap 4 flexbox.","link":"https:\/\/mdbootstrap.com?page_id=61273","wptitle":"Flexbox generator"},"79412":{"title":"bootstrap color combinations. basic & advanced usage","description":"the material design color system can be used to create a color theme that reflects your brand or style.","link":"https:\/\/mdbootstrap.com?page_id=79412","wptitle":"Color combinations"},"80243":{"title":"bootstrap form builder - free, online drag and drop css form creator","description":"bootstrap form builder - a simple and fast way to create a fully coded and styled bootstrap 4 tables. available default and material design versions.","link":"https:\/\/mdbootstrap.com?page_id=80243","wptitle":"Form builder and generator - drag and drop"},"11885":{"title":"mdbootstrap - frequently asked questions","description":"here you can find all the answers to the most frequently asked questions related to mdbootstrap. write to us if you need more information.","link":"https:\/\/mdbootstrap.com?page_id=11885","wptitle":"MDBootstrap - Frequently Asked Questions"},"57424":{"title":"bootstrap variables","description":"bootstrap variables are the storage locations paired with the associated symbolic names, which contain some known quantity of information referred to as the values.","link":"https:\/\/mdbootstrap.com?page_id=57424","wptitle":"Variables"},"81542":{"title":"bootstrap javascript usage","description":"bring bootstrap to life with our optional javascript plugins built on jquery. learn about each plugin, our data and programmatic api options, and more.","link":"https:\/\/mdbootstrap.com?page_id=81542","wptitle":"JavaScript usage"},"76471":{"title":"md bootstrap plugins & addons - best extensions for the web projects","description":"multiple plugins and addons which enhance your bootstrap project. quick install, easy to use & customize. huge community and fast support.","link":"https:\/\/mdbootstrap.com?page_id=76471","wptitle":"MD Bootstrap plugins & addons"},"80392":{"title":"bootstrap sortable plugin - examples & tutorial. basic & advanced usage","description":"bootstrap sortable plugin is an extension that allows you to move, reorder, sort and organize elements on your website by using drag and drop functionality.","link":"https:\/\/mdbootstrap.com?page_id=80392","wptitle":"Sortable plugin"},"80397":{"title":"bootstrap drag and drop \/ draggable plugin - examples & tutorial. basic & advanced usage","description":"md bootstrap draggable plugin is an extension that allows you to move objects by clicking on them and dragging anywhere within the viewport.","link":"https:\/\/mdbootstrap.com?page_id=80397","wptitle":"Drag and drop \/ draggable plugin"},"80402":{"title":"bootstrap drag and drop file upload - examples & tutorial. basic & advanced usage","description":"md bootstrap file upload plugin is an extension that allows you to upload files by using drag and drop functionality. easy to use, setup and customize.","link":"https:\/\/mdbootstrap.com?page_id=80402","wptitle":"Drag and drop file upload"},"80412":{"title":"bootstrap table editable - examples & tutorial. basic & advanced usage","description":"table editor is an extension that allows you to create customized, fully editable tables. easy to use, setup and customize.","link":"https:\/\/mdbootstrap.com?page_id=80412","wptitle":"Table editable"},"59922":{"title":"bootstrap form validation - examples & tutorial. basic & advanced usage","description":"provide valuable, actionable feedback to your users with html5 form validation \u2013 available in all our supported browsers. choose from the browser default validation feedback, or implement custom messages with our built-in classes and starter javascript.","link":"https:\/\/mdbootstrap.com?page_id=59922","wptitle":"Form validation"},"80698":{"title":"%%title%% - examples & tutorial. basic & advanced usage","description":"%%excerpt%% bootstrap preloaders (also known as loaders) are simple animations that are used to keep visitors entertained while the page is still loading, which helps to increase the user experience.","link":"https:\/\/mdbootstrap.com?page_id=80698","wptitle":"Loader \/ Spinner"},"61196":{"title":"bootstrap forms styles & customization","description":"learn how to easily customize bootstrap forms. use the following examples to adjust the forms to your needs and change their appearance.","link":"https:\/\/mdbootstrap.com?page_id=61196","wptitle":"Forms styles & customization"},"82011":{"title":"bootstrap vector map - examples & tutorial. basic & advanced usage","description":"md bootstrap vector map plugin helps you to show beautiful, scalable maps of the world, continents and countries. easy to use, setup and customize. no api key needed - no hussle.","link":"https:\/\/mdbootstrap.com?page_id=82011","wptitle":"Vector map"},"81208":{"title":"bootstrap material design ui kit - world's most popular & free ui framework","description":"material design for bootstrap - trusted by over 500 000 developers and designers. easy to use & customize. 500+ material ui elements, templates & tutorials.","link":"https:\/\/mdbootstrap.com?page_id=81208","wptitle":"Material Design for Bootstrap 4"},"84316":{"title":"bootstrap overflow - examples & tutorial. basic & advanced usage","description":"bootstrap overflow are lines placed on the edges of buttons, images, and other web elements. additionally, border-radius class rounds the elements corners.","link":"https:\/\/mdbootstrap.com?page_id=84316","wptitle":"Overflow"},"84708":{"title":"bootstrap masonry - examples & tutorial. basic & advanced usage","description":"bootstrap masonry is a grid layout based on columns","link":"https:\/\/mdbootstrap.com?page_id=84708","wptitle":"Masonry"},"85430":{"title":"bootstrap responsive font size guideline - examples, tutorial & advanced usage","description":"%%excerpt%% %%excerpt%% bootstrap rfs is a font size engine which automatically calculates the appropriate font size based on the dimensions of the browser viewport.","link":"https:\/\/mdbootstrap.com?page_id=85430","wptitle":"Responsive Font Size"}}};
        /* ]]> */
    </script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var ajax_auth_object = {"ajaxurl":"https:\/\/mdbootstrap.com\/wp-admin\/admin-ajax.php","redirecturl":"https:\/\/mdbootstrap.com","loadingmessage":"Sending user info, please wait..."};
        /* ]]> */
    </script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var shareCountsData = {"oldShareCounts":""};
        /* ]]> */
    </script>
    <script type="text/javascript" src="https://mdbootstrap.com/wp-admin/load-scripts.php?c=gzip&amp;load%5B%5D=jquery-core,jquery-migrate&amp;ver=5.0.3"></script>
    <script type="text/javascript" src="https://mdbootstrap.com/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-woocommerce-classic.js?ver=1.9.2"></script>
    <script type="text/javascript" src="https://mdbootstrap.com/wp-content/plugins/duracelltomi-google-tag-manager/js/gtm4wp-woocommerce-enhanced.js?ver=1.9.2"></script>
    <script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/mdb-search.js?ver=4.7.3"></script>
    <script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/jquery.validate.js?ver=5.0.3"></script>
    <script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/ajax-auth-script.js?ver=5.0.3"></script>
    <script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/tutorial-share-counts.js?ver=4.7.4"></script>
    <link rel="https://api.w.org/" href="https://mdbootstrap.com/wp-json/">
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://mdbootstrap.com/xmlrpc.php?rsd">
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://mdbootstrap.com/wp-includes/wlwmanifest.xml">
    <meta name="generator" content="WordPress 5.0.3">
    <meta name="generator" content="WooCommerce 3.5.4">
    <link rel="shortlink" href="https://mdbootstrap.com/?p=80402">
    <link rel="alternate" type="application/json+oembed" href="https://mdbootstrap.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmdbootstrap.com%2Fplugins%2Fjquery%2Ffile-upload%2F">
    <link rel="alternate" type="text/xml+oembed" href="https://mdbootstrap.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmdbootstrap.com%2Fplugins%2Fjquery%2Ffile-upload%2F&amp;format=xml">

    <!-- Push Notifications user -->

    <script>

        var wp_ajaxurl = "https://mdbootstrap.com/wp-admin/admin-ajax.php";




        var pnu = true;




    </script>

    <!--/.Push Notifications user -->


    <!-- Google Tag Manager for WordPress by gtm4wp.com -->
    <script data-cfasync="false" type="text/javascript">//<![CDATA[
        dataLayer.push([]);//]]>
    </script>
    <script data-cfasync="false">//<![CDATA[
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.'+'js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W7MBMN');//]]>
    </script>
    <!-- End Google Tag Manager -->
    <!-- End Google Tag Manager for WordPress by gtm4wp.com --><meta name="referrer" content="always">	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
    <link rel="icon" href="https://mdbootstrap.com/wp-content/uploads/2016/11/cropped-ms-icon-310x310-32x32.png" sizes="32x32">
    <link rel="icon" href="https://mdbootstrap.com/wp-content/uploads/2016/11/cropped-ms-icon-310x310-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon-precomposed" href="https://mdbootstrap.com/wp-content/uploads/2016/11/cropped-ms-icon-310x310-180x180.png">
    <meta name="msapplication-TileImage" content="https://mdbootstrap.com/wp-content/uploads/2016/11/cropped-ms-icon-310x310-270x270.png">
    <script type="text/javascript">
        var woocs_is_mobile = 0;
        var woocs_drop_down_view = "ddslick";
        var woocs_current_currency = {"name":"EUR","rate":1,"symbol":"&euro;","position":"left_space","is_etalon":0,"hide_cents":1,"decimals":0,"description":"European Euro","flag":"https:\/\/mdbootstrap.com\/wp-content\/plugins\/woocommerce-currency-switcher\/img\/no_flag.png"};
        var woocs_default_currency = {"name":"USD","rate":1,"symbol":"&#36;","position":"left","is_etalon":1,"hide_cents":1,"decimals":0,"description":"USA dollar","flag":"https:\/\/mdbootstrap.com\/wp-content\/plugins\/woocommerce-currency-switcher\/img\/no_flag.png"};
        var woocs_array_of_get = '{}';

        woocs_array_no_cents = '["JPY","TWD"]';

        var woocs_ajaxurl = "https://mdbootstrap.com/wp-admin/admin-ajax.php";
        var woocs_lang_loading = "loading";
        var woocs_shop_is_cached =0;
    </script>
    <script> var currency = '€'; </script>
    <meta name="p:domain_verify" content="ba4bb1f26dcf05eadc4ea92722eca381">


    <!-- Ahref verification -->
    <meta name="ahrefs-site-verification" content="cd945a30a32beb9f20f22626c5f801f2063a726c6fd9af1db55ce27eafaa1e45">

    <script src="//brandflow.net/static/general/bf-core.min.js?ts=1552222182289#"></script><script src="//brandflow.net/static/containers/NLX453.js?ts=1552222182290#"></script><script src="//brandflow.net/static/general/push-init-code.js?ts=1552222182290#"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script><style id="css-ddslick" type="text/css">.dd-select{ border-radius:2px; border:solid 1px #ccc; position:relative; cursor:pointer;}.dd-desc { color:#aaa; display:block; overflow: hidden; font-weight:normal; line-height: 1.4em; }.dd-selected{ overflow:hidden; display:block; padding:10px; font-weight:bold;}.dd-pointer{ width:0; height:0; position:absolute; right:10px; top:50%; margin-top:-3px;}.dd-pointer-down{ border:solid 5px transparent; border-top:solid 5px #000; }.dd-pointer-up{border:solid 5px transparent !important; border-bottom:solid 5px #000 !important; margin-top:-8px;}.dd-options{ border:solid 1px #ccc; border-top:none; list-style:none; box-shadow:0px 1px 5px #ddd; display:none; position:absolute; z-index:2000; margin:0; padding:0;background:#fff; overflow:auto;}.dd-option{ padding:10px; display:block; border-bottom:solid 1px #ddd; overflow:hidden; text-decoration:none; color:#333; cursor:pointer;-webkit-transition: all 0.25s ease-in-out; -moz-transition: all 0.25s ease-in-out;-o-transition: all 0.25s ease-in-out;-ms-transition: all 0.25s ease-in-out; }.dd-options > li:last-child > .dd-option{ border-bottom:none;}.dd-option:hover{ background:#f3f3f3; color:#000;}.dd-selected-description-truncated { text-overflow: ellipsis; white-space:nowrap; }.dd-option-selected { background:#f6f6f6; }.dd-option-image, .dd-selected-image { vertical-align:middle; float:left; margin-right:5px; max-width:64px;}.dd-image-right { float:right; margin-right:15px; margin-left:5px;}.dd-container{ position:relative;}&#8203; .dd-selected-text { font-weight:bold}&#8203;</style></head>

<body class="fixed-sn mdb-skin-custom" data-spy="scroll" data-target="#scrollspy" data-offset="15" aria-busy="true"><div id="brandflow-modals-06485732310567396"><div data-bfmodal="gPs" class="modal fade right modal-scrolling" id="undecidedDiscountModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false" style="display: none;"><div class="modal-dialog modal-side modal-bottom-right" role="document"><div class="modal-content"><div class="modal-header white-text" style="background-color: #154771"><h4 class="modal-title">Pro users are waiting for you</h4><button type="button" class="close waves-effect white-text" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"><p class="card-text">Are you ready to finally go Pro? Let us help you accomplish that.</p><div class=""><p class="card-text"><strong>20% discount - use the following code at the checkout:</strong></p><h4 class="text-center"><strong><code>modl20undecided99</code></strong></h4></div></div><div class="modal-footer justify-content-center"><a id="undecidedDiscountModal-click" href="https://mdbootstrap.com/products/" class="btn btn-danger waves-effect" alt="Undecided: Yes">Go Pro</a><button id="undecidedDiscountModal-cancel" type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal" alt="Undecided: No">I'm not ready</button></div></div></div></div><div data-bfmodal="fPe" class="modal fade right modal-scrolling" id="newUsersDiscountModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false" style="display: none;"><div class="modal-dialog modal-side modal-bottom-right" role="document"><div class="modal-content"><div class="modal-header white-text" style="background-color: #154771"><h4 class="modal-title"><i class="fas fa-gift" aria-hidden="true"></i> Special offer: 10% off</h4><button type="button" class="close waves-effect white-text" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div><div class="modal-body"><p class="card-text"><strong>Are you interested in MDB Pro?</strong> Still having some doubts? We want to make your decision easier.</p><div><p class="card-text"><strong>Use this code at the checkout:</strong></p><h4 class="text-center"><strong><code>modl10newuser58</code></strong></h4><br><p class="card-text grey-text">(Code will be available on the MDB 4 Pro page for the next 2 days)</p></div></div><div class="modal-footer justify-content-center"><a id="newUsersDiscountModal-click" alt="New User: Yes" href="https://mdbootstrap.com/products/" class="btn btn-danger waves-effect">Get MDB Pro</a><button id="newUsersDiscountModal-cancel" alt="New User: No" type="button" class="btn btn-outline-danger waves-effect" data-dismiss="modal">I don't want discount</button></div></div></div></div><div data-bfmodal="O2U" class="modal fade right" id="modalBFTutTemp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false"><div class="modal-dialog modal-side modal-bottom-right" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title font-weight-bold" id="exampleModalLabel">Bootstrap 4 Tutorial</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="t" rue="">×</span></button></div><div class="modal-body text-center"><img src="https://mdbootstrap.com/img/Mockups/Horizontal/6-col/bootstrap.jpg" class="img-fluid z-depth-1-half mb-4" alt=""><p>Create your own, stunning website with MDBootstrap Tutorial.</p><p>The most comprehensive guide for the Bootstrap 4. <strong>Loved by over 500 000 users</strong>. Video and written versions available. </p></div><div class="modal-footer d-flex justify-content-center"><button id="modal-bf-no" alt="Bootstrap tut: No" type="button" class="btn btn-outline-primary btn-md" data-dismiss="modal">No, thanks</button><a id="modal-bf-yes" alt="Bootstrap tut: Yes" class="btn btn-primary btn-md" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start FREE course<i class="fas fa-play ml-2"></i></a></div></div></div></div><div data-bfmodal="0bE" id="previewModal" class="modal fade right" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false"><div class="modal-dialog modal-side modal-bottom-right" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title font-weight-bold">Hello!</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="t" rue="">×</span></button></div><div class="modal-body text-center"><img src="https://mdbootstrap.com/img/Mockups/Horizontal/6-col/bootstrap.jpg" class="img-fluid z-depth-1-half mb-4" alt=""><p>It seems that you've scrolled <strong> 60% </strong> of the page!</p><p>You can come back to learnign now!</p></div><div class="modal-footer d-flex justify-content-center"><button type="button" class="btn btn-outline-primary btn-md" data-dismiss="modal">No, thanks</button><a class="btn btn-primary btn-md" href="https://mdbootstrap.com/education/tech-marketing/automated-app-lesson-6/" target="_blank" role="button">Learn further<i class="fas fa-play ml-2"></i></a></div></div></div></div><div data-bfmodal="vG0" id="previewModal" class="modal fade right" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false"><div class="modal-dialog modal-side modal-bottom-right" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title font-weight-bold">Support MDB Icon request!</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="t" rue="">×</span></button></div><div class="modal-body text-center"><img src="https://mdbootstrap.com/img/Marketing/campaigns/mdb-fa-icon.jpg" class="img-fluid z-depth-1-half mb-4 rounded" alt=""><p>Help us get <strong> MDB Font Awesome Icon</strong>!</p><p>Leave your likes<i class="fas fa-thumbs-up yellow-text mx-1"></i> and loves <i class="fas fa-heart red-text mx-1"></i> on our <strong>GitHub</strong> request. Thanks!</p></div><div class="modal-footer d-flex justify-content-center"><button type="button" class="btn btn-outline-grey btn-md" data-dismiss="modal" alt="MDB FA Icon: No">No, thanks</button><a class="btn btn-elegant btn-md" href="https://github.com/FortAwesome/Font-Awesome/issues/14409" target="_blank" role="button" alt="MDB FA Icon: Yes">Support On GitHub<i class="fab fa-github ml-2"></i></a></div></div></div></div></div>



<header>

    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 mdb-sidenav fixed" style="transform: translateX(-100%);">
        <ul class="custom-scrollbar list-unstyled ps ps--theme_default ps--active-y" style="max-height:100vh; padding-bottom:90px" data-ps-id="e97840c0-18df-bd75-87d6-df39040d3a3c">
            <!-- Logo -->
            <li class="logo-sn d-block waves-effect">
                <div class="text-center">
                    <a class="pl-0" href="https://mdbootstrap.com/"><img id="MDB-logo" src="https://mdbootstrap.com/wp-content/uploads/2018/06/logo-mdb-jquery-small.png" alt="MDB Logo"></a>
                </div>
            </li>
            <!--/. Logo -->
            <!--Search Form-->
            <li>
                <form class="search-form" onkeypress="return event.keyCode != 13;" role="search" method="GET" autocomplete="off">
                    <div class="form-group md-form mt-0 d-block waves-light waves-effect waves-light">
                        <input type="text" class="form-control pb-1 mb-0" name="mdw_serach" placeholder="Search" id="mdb_main_search" style="height: 1.8rem;">
                        <label for="mdb_main_search" class="sr-only active">Search</label>
                    </div>
                    <div class="dropdown-wrapper"></div>
                </form>
            </li>
            <!--/.Search Form-->
            <!-- Side navigation links -->
            <li>
                <ul id="side-menu" class="collapsible collapsible-accordion"><li id="menu-item-44502" class="menu-item menu-item-type-post_type menu-item-object-product menu-item-44502"><a class="collapsible-header waves-effect" id="link-menu-item-44502" href="https://mdbootstrap.com/products/jquery-ui-kit/"><i class="far fa-gem"></i>MDB Pro</a></li>
                    <li id="menu-item-59439" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-59439"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-download"></i>Getting started<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body"> <ul class="sub-menu">
                                <li id="menu-item-59452" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home  menu-item-59452"><a class="collapsible-header waves-effect" id="link-menu-item-59452" href="https://mdbootstrap.com/">Home page</a></li>
                                <li id="menu-item-81400" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-81400"><a class="collapsible-header waves-effect" id="link-menu-item-81400" href="https://mdbootstrap.com/docs/jquery/">About MDB</a></li>
                                <li id="menu-item-44015" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44015"><a class="collapsible-header waves-effect" id="link-menu-item-44015" href="https://mdbootstrap.com/docs/jquery/getting-started/download/">Download</a></li>
                                <li id="menu-item-59453" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59453"><a class="collapsible-header waves-effect" id="link-menu-item-59453" href="https://mdbootstrap.com/education/bootstrap/quick-start/">Quick start</a></li>
                                <li id="menu-item-59445" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59445"><a class="collapsible-header waves-effect" id="link-menu-item-59445" href="https://mdbootstrap.com/education/bootstrap/">Full tutorial</a></li>
                                <li id="menu-item-59446" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59446"><a class="collapsible-header waves-effect" id="link-menu-item-59446" href="https://mdbootstrap.com/education/bootstrap/gulp-installation/">Gulp</a></li>
                                <li id="menu-item-83784" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-83784"><a class="collapsible-header waves-effect" id="link-menu-item-83784" href="https://mdbootstrap.com/articles/jquery/md-bootstrap-webpack-tutorial/">Webpack</a></li>
                                <li id="menu-item-81523" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-81523"><a class="collapsible-header waves-effect" id="link-menu-item-81523" href="https://mdbootstrap.com/docs/angular/">MDB Angular</a></li>
                                <li id="menu-item-81524" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-81524"><a class="collapsible-header waves-effect" id="link-menu-item-81524" href="https://mdbootstrap.com/docs/react/">MDB React</a></li>
                                <li id="menu-item-81525" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-81525"><a class="collapsible-header waves-effect" id="link-menu-item-81525" href="https://mdbootstrap.com/docs/vue/">MDB Vue</a></li>
                                <li id="menu-item-54644" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-54644"><a class="collapsible-header waves-effect" id="link-menu-item-54644" href="https://mdbootstrap.com/publications/front-end/bootstrap-news/">MDB news</a></li>
                            </ul></div>
                    </li>
                    <li id="menu-item-43620" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-43620"><a class="collapsible-header waves-effect arrow-r"><i class="fas  fa-th-large"></i>Layout<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body"> <ul class="sub-menu">
                                <li id="menu-item-44240" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44240"><a class="collapsible-header waves-effect" id="link-menu-item-44240" href="https://mdbootstrap.com/docs/jquery/layout/overview/">Layout overview</a></li>
                                <li id="menu-item-44241" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44241"><a class="collapsible-header waves-effect" id="link-menu-item-44241" href="https://mdbootstrap.com/docs/jquery/layout/grid-usage/">Grid usage</a></li>
                                <li id="menu-item-44242" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44242"><a class="collapsible-header waves-effect" id="link-menu-item-44242" href="https://mdbootstrap.com/docs/jquery/layout/grid-examples/">Grid examples</a></li>
                                <li id="menu-item-44243" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44243"><a class="collapsible-header waves-effect" id="link-menu-item-44243" href="https://mdbootstrap.com/docs/jquery/layout/media-object/">Media object</a></li>
                                <li id="menu-item-59009" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59009"><a class="collapsible-header waves-effect" id="link-menu-item-59009" href="https://mdbootstrap.com/docs/jquery/layout/media-queries/">Media queries</a></li>
                                <li id="menu-item-44245" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44245"><a class="collapsible-header waves-effect" id="link-menu-item-44245" href="https://mdbootstrap.com/docs/jquery/layout/utilities/">Utilities for layout</a></li>
                                <li id="menu-item-84711" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-84711"><a class="collapsible-header waves-effect" id="link-menu-item-84711" href="https://mdbootstrap.com/docs/jquery/layout/bootstrap-masonry/">Masonry</a></li>
                            </ul></div>
                    </li>
                    <li id="menu-item-43621" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-43621"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-object-ungroup"></i>Utilities<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body"> <ul class="sub-menu">
                                <li id="menu-item-44246" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44246"><a class="collapsible-header waves-effect" id="link-menu-item-44246" href="https://mdbootstrap.com/docs/jquery/utilities/borders/">Borders</a></li>
                                <li id="menu-item-44247" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44247"><a class="collapsible-header waves-effect" id="link-menu-item-44247" href="https://mdbootstrap.com/docs/jquery/utilities/clearfix/">Clearfix</a></li>
                                <li id="menu-item-44248" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44248"><a class="collapsible-header waves-effect" id="link-menu-item-44248" href="https://mdbootstrap.com/docs/jquery/utilities/close-icon/">Close icon</a></li>
                                <li id="menu-item-44249" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44249"><a class="collapsible-header waves-effect" id="link-menu-item-44249" href="https://mdbootstrap.com/docs/jquery/utilities/display/">Display</a></li>
                                <li id="menu-item-44250" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44250"><a class="collapsible-header waves-effect" id="link-menu-item-44250" href="https://mdbootstrap.com/docs/jquery/utilities/embeds/">Embeds</a></li>
                                <li id="menu-item-44251" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44251"><a class="collapsible-header waves-effect" id="link-menu-item-44251" href="https://mdbootstrap.com/docs/jquery/utilities/float/">Float</a></li>
                                <li id="menu-item-44252" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44252"><a class="collapsible-header waves-effect" id="link-menu-item-44252" href="https://mdbootstrap.com/docs/jquery/utilities/flexbox/">Flexbox</a></li>
                                <li id="menu-item-83980" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-83980"><a class="collapsible-header waves-effect" id="link-menu-item-83980" href="https://mdbootstrap.com/docs/jquery/utilities/horizontal-align/">Horizontal align</a></li>
                                <li id="menu-item-44253" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44253"><a class="collapsible-header waves-effect" id="link-menu-item-44253" href="https://mdbootstrap.com/docs/jquery/utilities/image-replacement/">Image replacement</a></li>
                                <li id="menu-item-84319" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-84319"><a class="collapsible-header waves-effect" id="link-menu-item-84319" href="https://mdbootstrap.com/docs/jquery/utilities/overflow/">Overflow</a></li>
                                <li id="menu-item-44254" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44254"><a class="collapsible-header waves-effect" id="link-menu-item-44254" href="https://mdbootstrap.com/docs/jquery/utilities/position/">Position</a></li>
                                <li id="menu-item-44255" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44255"><a class="collapsible-header waves-effect" id="link-menu-item-44255" href="https://mdbootstrap.com/docs/jquery/utilities/screenreaders/">Screenreaders</a></li>
                                <li id="menu-item-44256" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44256"><a class="collapsible-header waves-effect" id="link-menu-item-44256" href="https://mdbootstrap.com/docs/jquery/utilities/sizing/">Sizing</a></li>
                                <li id="menu-item-44257" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44257"><a class="collapsible-header waves-effect" id="link-menu-item-44257" href="https://mdbootstrap.com/docs/jquery/utilities/spacing/">Spacing</a></li>
                                <li id="menu-item-85526" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-85526"><a class="collapsible-header waves-effect" id="link-menu-item-85526" href="https://mdbootstrap.com/docs/jquery/utilities/stretched-link/">Stretched link</a></li>
                                <li id="menu-item-44258" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44258"><a class="collapsible-header waves-effect" id="link-menu-item-44258" href="https://mdbootstrap.com/docs/jquery/utilities/text/">Text</a></li>
                                <li id="menu-item-44259" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44259"><a class="collapsible-header waves-effect" id="link-menu-item-44259" href="https://mdbootstrap.com/docs/jquery/utilities/vertical-align/">Vertical align</a></li>
                                <li id="menu-item-44260" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44260"><a class="collapsible-header waves-effect" id="link-menu-item-44260" href="https://mdbootstrap.com/docs/jquery/utilities/visibility/">Visibility</a></li>
                            </ul></div>
                    </li>
                    <li id="menu-item-43622" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-43622"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-indent"></i>Content<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body"> <ul class="sub-menu">
                                <li id="menu-item-44262" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44262"><a class="collapsible-header waves-effect" id="link-menu-item-44262" href="https://mdbootstrap.com/docs/jquery/content/code/">Code</a></li>
                                <li id="menu-item-44265" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44265"><a class="collapsible-header waves-effect" id="link-menu-item-44265" href="https://mdbootstrap.com/docs/jquery/content/figures/">Figures</a></li>
                                <li id="menu-item-44266" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44266"><a class="collapsible-header waves-effect" id="link-menu-item-44266" href="https://mdbootstrap.com/docs/jquery/content/icons-usage/">Icons usage</a></li>
                                <li id="menu-item-44267" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44267"><a class="collapsible-header waves-effect" id="link-menu-item-44267" href="https://mdbootstrap.com/docs/jquery/content/icons-list/">Icons list</a></li>
                                <li id="menu-item-44263" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44263"><a class="collapsible-header waves-effect" id="link-menu-item-44263" href="https://mdbootstrap.com/docs/jquery/content/images/">Images</a></li>
                                <li id="menu-item-44261" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44261"><a class="collapsible-header waves-effect" id="link-menu-item-44261" href="https://mdbootstrap.com/docs/jquery/content/typography/">Typography</a></li>
                                <li id="menu-item-85577" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-85577"><a class="collapsible-header waves-effect" id="link-menu-item-85577" href="https://mdbootstrap.com/docs/jquery/content/responsive-font-size/">Responsive Font Size</a></li>
                            </ul></div>
                    </li>
                    <li id="menu-item-43623" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-43623"><a class="collapsible-header waves-effect arrow-r"><i class="fab fa-css3"></i>CSS<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body"> <ul class="sub-menu">
                                <li id="menu-item-51837" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-51837"><a class="collapsible-header waves-effect" id="link-menu-item-51837" href="https://mdbootstrap.com/docs/jquery/css/demo/">Demo</a></li>
                                <li id="menu-item-44277" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44277"><a class="collapsible-header waves-effect" id="link-menu-item-44277" href="https://mdbootstrap.com/docs/jquery/css/animations/">Animations</a></li>
                                <li id="menu-item-59019" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59019"><a class="collapsible-header waves-effect" id="link-menu-item-59019" href="https://mdbootstrap.com/docs/jquery/css/background-image/">Background Image</a></li>
                                <li id="menu-item-44271" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44271"><a class="collapsible-header waves-effect" id="link-menu-item-44271" href="https://mdbootstrap.com/docs/jquery/css/colors/">Colors</a></li>
                                <li id="menu-item-79414" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-79414"><a class="collapsible-header waves-effect" id="link-menu-item-79414" href="https://mdbootstrap.com/docs/jquery/css/color-combination/">Color combination</a></li>
                                <li id="menu-item-79437" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-79437"><a class="collapsible-header waves-effect" id="link-menu-item-79437" href="https://mdbootstrap.com/docs/jquery/css/text-color/">Text Color</a></li>
                                <li id="menu-item-59017" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59017"><a class="collapsible-header waves-effect" id="link-menu-item-59017" href="https://mdbootstrap.com/docs/jquery/css/gradients/">Gradients</a></li>
                                <li id="menu-item-44273" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44273"><a class="collapsible-header waves-effect" id="link-menu-item-44273" href="https://mdbootstrap.com/docs/jquery/css/hover-effects/">Hover effects</a></li>
                                <li id="menu-item-44272" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44272"><a class="collapsible-header waves-effect" id="link-menu-item-44272" href="https://mdbootstrap.com/docs/jquery/css/masks/">Masks</a></li>
                                <li id="menu-item-44274" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44274"><a class="collapsible-header waves-effect" id="link-menu-item-44274" href="https://mdbootstrap.com/docs/jquery/css/parallax/">Parallax</a></li>
                                <li id="menu-item-44275" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44275"><a class="collapsible-header waves-effect" id="link-menu-item-44275" href="https://mdbootstrap.com/docs/jquery/css/shadows/">Shadows</a></li>
                                <li id="menu-item-44276" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44276"><a class="collapsible-header waves-effect" id="link-menu-item-44276" href="https://mdbootstrap.com/docs/jquery/css/skins/">Skins</a></li>
                                <li id="menu-item-57464" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-57464"><a class="collapsible-header waves-effect" id="link-menu-item-57464" href="https://mdbootstrap.com/docs/jquery/css/variables/">Variables</a></li>
                            </ul></div>
                    </li>
                    <li id="menu-item-43624" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-43624"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-cubes"></i>Components<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body"> <ul class="sub-menu">
                                <li id="menu-item-51836" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-51836"><a class="collapsible-header waves-effect" id="link-menu-item-51836" href="https://mdbootstrap.com/docs/jquery/components/demo/">Demo</a></li>
                                <li id="menu-item-43990" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-43990"><a class="collapsible-header waves-effect" id="link-menu-item-43990" href="https://mdbootstrap.com/docs/jquery/components/alerts/">Alerts</a></li>
                                <li id="menu-item-44023" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44023"><a class="collapsible-header waves-effect" id="link-menu-item-44023" href="https://mdbootstrap.com/docs/jquery/components/buttons/">Buttons</a></li>
                                <li id="menu-item-59022" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59022"><a class="collapsible-header waves-effect" id="link-menu-item-59022" href="https://mdbootstrap.com/docs/jquery/components/button-group/">Buttons group</a></li>
                                <li id="menu-item-59020" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59020"><a class="collapsible-header waves-effect" id="link-menu-item-59020" href="https://mdbootstrap.com/docs/jquery/components/buttons-social/">Buttons social</a></li>
                                <li id="menu-item-44067" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44067"><a class="collapsible-header waves-effect" id="link-menu-item-44067" href="https://mdbootstrap.com/docs/jquery/components/cards/">Cards</a></li>
                                <li id="menu-item-84098" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-84098"><a class="collapsible-header waves-effect" id="link-menu-item-84098" href="https://mdbootstrap.com/plugins/jquery/extended-cards/">Cards extended</a></li>
                                <li id="menu-item-44073" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44073"><a class="collapsible-header waves-effect" id="link-menu-item-44073" href="https://mdbootstrap.com/docs/jquery/components/dropdowns/">Dropdowns</a></li>
                                <li id="menu-item-59023" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59023"><a class="collapsible-header waves-effect" id="link-menu-item-59023" href="https://mdbootstrap.com/docs/jquery/components/jumbotron/">Jumbotron</a></li>
                                <li id="menu-item-44040" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44040"><a class="collapsible-header waves-effect" id="link-menu-item-44040" href="https://mdbootstrap.com/docs/jquery/components/list-group/">List group</a></li>
                                <li id="menu-item-82022" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-82022"><a class="collapsible-header waves-effect" id="link-menu-item-82022" href="https://mdbootstrap.com/docs/jquery/components/spinners/">Loaders / Spinners</a></li>
                                <li id="menu-item-44052" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44052"><a class="collapsible-header waves-effect" id="link-menu-item-44052" href="https://mdbootstrap.com/docs/jquery/components/panels/">Panels</a></li>
                                <li id="menu-item-44043" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44043"><a class="collapsible-header waves-effect" id="link-menu-item-44043" href="https://mdbootstrap.com/docs/jquery/components/pagination/">Pagination</a></li>
                                <li id="menu-item-75903" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-75903"><a class="collapsible-header waves-effect" id="link-menu-item-75903" href="https://mdbootstrap.com/docs/jquery/components/pills/">Pills</a></li>
                                <li id="menu-item-44042" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44042"><a class="collapsible-header waves-effect" id="link-menu-item-44042" href="https://mdbootstrap.com/docs/jquery/components/progress-bar/">Progress bars</a></li>
                                <li id="menu-item-59049" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59049"><a class="collapsible-header waves-effect" id="link-menu-item-59049" href="https://mdbootstrap.com/docs/jquery/components/stepper/">Stepper</a></li>
                                <li id="menu-item-44044" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44044"><a class="collapsible-header waves-effect" id="link-menu-item-44044" href="https://mdbootstrap.com/docs/jquery/components/tabs/">Tabs</a></li>
                                <li id="menu-item-44054" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44054"><a class="collapsible-header waves-effect" id="link-menu-item-44054" href="https://mdbootstrap.com/docs/jquery/components/badges/">Tags, Labels &amp; Badges</a></li>
                            </ul></div>
                    </li>
                    <li id="menu-item-43625" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-43625"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-code"></i>JavaScript<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body"> <ul class="sub-menu">
                                <li id="menu-item-51838" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-51838"><a class="collapsible-header waves-effect" id="link-menu-item-51838" href="https://mdbootstrap.com/docs/jquery/javascript/demo/">Demo</a></li>
                                <li id="menu-item-59040" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59040"><a class="collapsible-header waves-effect" id="link-menu-item-59040" href="https://mdbootstrap.com/docs/jquery/javascript/accordion/">Accordion</a></li>
                                <li id="menu-item-43991" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-43991"><a class="collapsible-header waves-effect" id="link-menu-item-43991" href="https://mdbootstrap.com/docs/jquery/javascript/carousel/">Carousel</a></li>
                                <li id="menu-item-44000" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44000"><a class="collapsible-header waves-effect" id="link-menu-item-44000" href="https://mdbootstrap.com/docs/jquery/javascript/collapse/">Collapse</a></li>
                                <li id="menu-item-43997" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-43997"><a class="collapsible-header waves-effect" id="link-menu-item-43997" href="https://mdbootstrap.com/docs/jquery/javascript/charts/">Charts</a></li>
                                <li id="menu-item-59041" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59041"><a class="collapsible-header waves-effect" id="link-menu-item-59041" href="https://mdbootstrap.com/docs/jquery/javascript/google-maps/">Google Maps</a></li>
                                <li id="menu-item-43995" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-43995"><a class="collapsible-header waves-effect" id="link-menu-item-43995" href="https://mdbootstrap.com/docs/jquery/javascript/lightbox/">LightBox</a></li>
                                <li id="menu-item-59042" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59042"><a class="collapsible-header waves-effect" id="link-menu-item-59042" href="https://mdbootstrap.com/docs/jquery/javascript/mobile/">Mobile</a></li>
                                <li id="menu-item-80291" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-80291"><a class="collapsible-header waves-effect" id="link-menu-item-80291" href="https://mdbootstrap.com/docs/jquery/javascript/notifications/">Notifications</a></li>
                                <li id="menu-item-59039" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59039"><a class="collapsible-header waves-effect" id="link-menu-item-59039" href="https://mdbootstrap.com/docs/jquery/javascript/popovers/">Popovers</a></li>
                                <li id="menu-item-44002" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44002"><a class="collapsible-header waves-effect" id="link-menu-item-44002" href="https://mdbootstrap.com/docs/jquery/javascript/sticky/">StickyContent</a></li>
                                <li id="menu-item-44003" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44003"><a class="collapsible-header waves-effect" id="link-menu-item-44003" href="https://mdbootstrap.com/docs/jquery/javascript/scroll/">Scrollbar &amp; smooth scroll</a></li>
                                <li id="menu-item-43999" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-43999"><a class="collapsible-header waves-effect" id="link-menu-item-43999" href="https://mdbootstrap.com/docs/jquery/javascript/tooltips/">Tooltips</a></li>
                                <li id="menu-item-59043" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59043"><a class="collapsible-header waves-effect" id="link-menu-item-59043" href="https://mdbootstrap.com/docs/jquery/javascript/waves-effect/">Waves effects</a></li>
                            </ul></div>
                    </li>
                    <li id="menu-item-59008" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-59008"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-bars"></i> Navigation<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body"> <ul class="sub-menu">
                                <li id="menu-item-44244" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44244"><a class="collapsible-header waves-effect" id="link-menu-item-44244" href="https://mdbootstrap.com/docs/jquery/navigation/compositions/">Compositions</a></li>
                                <li id="menu-item-59003" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59003"><a class="collapsible-header waves-effect" id="link-menu-item-59003" href="https://mdbootstrap.com/docs/jquery/navigation/breadcrumb/">Breadcrumbs</a></li>
                                <li id="menu-item-44049" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44049"><a class="collapsible-header waves-effect" id="link-menu-item-44049" href="https://mdbootstrap.com/docs/jquery/navigation/footer/">Footer</a></li>
                                <li id="menu-item-59004" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59004"><a class="collapsible-header waves-effect" id="link-menu-item-59004" href="https://mdbootstrap.com/docs/jquery/navigation/hamburger-menu/">Hamburger Menu</a></li>
                                <li id="menu-item-59005" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59005"><a class="collapsible-header waves-effect" id="link-menu-item-59005" href="https://mdbootstrap.com/docs/jquery/navigation/mega-menu/">Mega Menu</a></li>
                                <li id="menu-item-59006" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59006"><a class="collapsible-header waves-effect" id="link-menu-item-59006" href="https://mdbootstrap.com/docs/jquery/navigation/navs/">Navs</a></li>
                                <li id="menu-item-44071" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44071"><a class="collapsible-header waves-effect" id="link-menu-item-44071" href="https://mdbootstrap.com/docs/jquery/navigation/navbar/">Navbar</a></li>
                                <li id="menu-item-44001" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44001"><a class="collapsible-header waves-effect" id="link-menu-item-44001" href="https://mdbootstrap.com/docs/jquery/navigation/scrollspy/">ScrollSpy</a></li>
                                <li id="menu-item-43996" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-43996"><a class="collapsible-header waves-effect" id="link-menu-item-43996" href="https://mdbootstrap.com/docs/jquery/navigation/sidenav/">SideNav</a></li>
                            </ul></div>
                    </li>
                    <li id="menu-item-59025" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-59025 active"><a class="collapsible-header waves-effect arrow-r active"><i class="fas  fa-edit"></i> Forms<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body" style="display: block;"> <ul class="sub-menu">
                                <li id="menu-item-44070" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44070"><a class="collapsible-header waves-effect" id="link-menu-item-44070" href="https://mdbootstrap.com/docs/jquery/forms/basic/">Basic examples</a></li>
                                <li id="menu-item-59034" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59034"><a class="collapsible-header waves-effect" id="link-menu-item-59034" href="https://mdbootstrap.com/docs/jquery/forms/autocomplete/">Autocomplete</a></li>
                                <li id="menu-item-80290" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-80290"><a class="collapsible-header waves-effect" id="link-menu-item-80290" href="https://mdbootstrap.com/docs/jquery/forms/builder/">Builder</a></li>
                                <li id="menu-item-59026" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59026"><a class="collapsible-header waves-effect" id="link-menu-item-59026" href="https://mdbootstrap.com/docs/jquery/forms/checkbox/">Checkbox</a></li>
                                <li id="menu-item-59027" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59027"><a class="collapsible-header waves-effect" id="link-menu-item-59027" href="https://mdbootstrap.com/docs/jquery/forms/contact/">Contact form</a></li>
                                <li id="menu-item-61615" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-61615"><a class="collapsible-header waves-effect" id="link-menu-item-61615" href="https://mdbootstrap.com/docs/jquery/forms/customization/">Customization</a></li>
                                <li id="menu-item-43993" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-43993"><a class="collapsible-header waves-effect" id="link-menu-item-43993" href="https://mdbootstrap.com/docs/jquery/forms/date-picker/">Date Picker</a></li>
                                <li id="menu-item-80923" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-80402 current_page_item  menu-item-80923"><a class="collapsible-header waves-effect" id="link-menu-item-80923" href="https://mdbootstrap.com/plugins/jquery/file-upload/">Drag and drop</a></li>
                                <li id="menu-item-59028" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59028"><a class="collapsible-header waves-effect" id="link-menu-item-59028" href="https://mdbootstrap.com/docs/jquery/forms/file-input/">File Input</a></li>
                                <li id="menu-item-44026" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44026"><a class="collapsible-header waves-effect" id="link-menu-item-44026" href="https://mdbootstrap.com/docs/jquery/forms/inputs/">Inputs</a></li>
                                <li id="menu-item-59029" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59029"><a class="collapsible-header waves-effect" id="link-menu-item-59029" href="https://mdbootstrap.com/docs/jquery/forms/input-group/">Inputs Group</a></li>
                                <li id="menu-item-59037" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59037"><a class="collapsible-header waves-effect" id="link-menu-item-59037" href="https://mdbootstrap.com/docs/jquery/forms/multiselect/">Multiselect</a></li>
                                <li id="menu-item-59030" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59030"><a class="collapsible-header waves-effect" id="link-menu-item-59030" href="https://mdbootstrap.com/docs/jquery/forms/radio-button/">Radio button</a></li>
                                <li id="menu-item-59031" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59031"><a class="collapsible-header waves-effect" id="link-menu-item-59031" href="https://mdbootstrap.com/docs/jquery/forms/search/">Search</a></li>
                                <li id="menu-item-59036" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59036"><a class="collapsible-header waves-effect" id="link-menu-item-59036" href="https://mdbootstrap.com/docs/jquery/forms/select/">Select</a></li>
                                <li id="menu-item-59035" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59035"><a class="collapsible-header waves-effect" id="link-menu-item-59035" href="https://mdbootstrap.com/docs/jquery/forms/slider/">Slider</a></li>
                                <li id="menu-item-59032" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59032"><a class="collapsible-header waves-effect" id="link-menu-item-59032" href="https://mdbootstrap.com/docs/jquery/forms/switch/">Switch</a></li>
                                <li id="menu-item-59033" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59033"><a class="collapsible-header waves-effect" id="link-menu-item-59033" href="https://mdbootstrap.com/docs/jquery/forms/textarea/">Textarea</a></li>
                                <li id="menu-item-43994" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-43994"><a class="collapsible-header waves-effect" id="link-menu-item-43994" href="https://mdbootstrap.com/docs/jquery/forms/time-picker/">Time Picker</a></li>
                                <li id="menu-item-59924" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59924"><a class="collapsible-header waves-effect" id="link-menu-item-59924" href="https://mdbootstrap.com/docs/jquery/forms/validation/">Validation</a></li>
                            </ul></div>
                    </li>
                    <li id="menu-item-59010" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-59010"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-table"></i> Tables<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body"> <ul class="sub-menu">
                                <li id="menu-item-44268" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44268"><a class="collapsible-header waves-effect" id="link-menu-item-44268" href="https://mdbootstrap.com/docs/jquery/tables/basic/">Basic examples</a></li>
                                <li id="menu-item-60882" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-60882"><a class="collapsible-header waves-effect" id="link-menu-item-60882" href="https://mdbootstrap.com/docs/jquery/tables/additional/">Additional examples</a></li>
                                <li id="menu-item-60883" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-60883"><a class="collapsible-header waves-effect" id="link-menu-item-60883" href="https://mdbootstrap.com/docs/jquery/tables/datatables/">Datatables</a></li>
                                <li id="menu-item-59015" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59015"><a class="collapsible-header waves-effect" id="link-menu-item-59015" href="https://mdbootstrap.com/docs/jquery/tables/editable/">Editable</a></li>
                                <li id="menu-item-80922" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-80922"><a class="collapsible-header waves-effect" id="link-menu-item-80922" href="https://mdbootstrap.com/plugins/jquery/table-editor/">Editor</a></li>
                                <li id="menu-item-60884" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-60884"><a class="collapsible-header waves-effect" id="link-menu-item-60884" href="https://mdbootstrap.com/docs/jquery/tables/generator/">Generator</a></li>
                                <li id="menu-item-59016" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59016"><a class="collapsible-header waves-effect" id="link-menu-item-59016" href="https://mdbootstrap.com/docs/jquery/tables/pagination/">Pagination</a></li>
                                <li id="menu-item-59014" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59014"><a class="collapsible-header waves-effect" id="link-menu-item-59014" href="https://mdbootstrap.com/docs/jquery/tables/responsive/">Responsive</a></li>
                                <li id="menu-item-59013" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59013"><a class="collapsible-header waves-effect" id="link-menu-item-59013" href="https://mdbootstrap.com/docs/jquery/tables/scroll/">Scroll</a></li>
                                <li id="menu-item-59012" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59012"><a class="collapsible-header waves-effect" id="link-menu-item-59012" href="https://mdbootstrap.com/docs/jquery/tables/search/">Search</a></li>
                                <li id="menu-item-59011" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59011"><a class="collapsible-header waves-effect" id="link-menu-item-59011" href="https://mdbootstrap.com/docs/jquery/tables/sort/">Sort</a></li>
                            </ul></div>
                    </li>
                    <li id="menu-item-59044" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-59044"><a class="collapsible-header waves-effect arrow-r"><i class="fas  fa-window-restore"></i>Modals<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body"> <ul class="sub-menu">
                                <li id="menu-item-44393" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44393"><a class="collapsible-header waves-effect" id="link-menu-item-44393" href="https://mdbootstrap.com/docs/jquery/modals/basic/">Basic examples</a></li>
                                <li id="menu-item-59048" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59048"><a class="collapsible-header waves-effect" id="link-menu-item-59048" href="https://mdbootstrap.com/docs/jquery/modals/additional/">Advanced examples</a></li>
                                <li id="menu-item-59047" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59047"><a class="collapsible-header waves-effect" id="link-menu-item-59047" href="https://mdbootstrap.com/docs/jquery/modals/events/">Modal events</a></li>
                                <li id="menu-item-59046" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59046"><a class="collapsible-header waves-effect" id="link-menu-item-59046" href="https://mdbootstrap.com/docs/jquery/modals/forms/">Modal forms</a></li>
                                <li id="menu-item-61230" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-61230"><a class="collapsible-header waves-effect" id="link-menu-item-61230" href="https://mdbootstrap.com/docs/jquery/modals/generator/">Generator</a></li>
                                <li id="menu-item-59045" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59045"><a class="collapsible-header waves-effect" id="link-menu-item-59045" href="https://mdbootstrap.com/docs/jquery/modals/customization/">Modal styles</a></li>
                            </ul></div>
                    </li>
                    <li id="menu-item-43626" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-43626"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-th"></i>Sections<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body"> <ul class="sub-menu">
                                <li id="menu-item-51840" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-51840"><a class="collapsible-header waves-effect" id="link-menu-item-51840" href="https://mdbootstrap.com/docs/jquery/sections/demo/">Demo</a></li>
                                <li id="menu-item-44004" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44004"><a class="collapsible-header waves-effect" id="link-menu-item-44004" href="https://mdbootstrap.com/docs/jquery/sections/intros/">Intros</a></li>
                                <li id="menu-item-44005" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44005"><a class="collapsible-header waves-effect" id="link-menu-item-44005" href="https://mdbootstrap.com/docs/jquery/sections/blog/">Blog</a></li>
                                <li id="menu-item-44012" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44012"><a class="collapsible-header waves-effect" id="link-menu-item-44012" href="https://mdbootstrap.com/docs/jquery/sections/contact/">Contact</a></li>
                                <li id="menu-item-44007" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44007"><a class="collapsible-header waves-effect" id="link-menu-item-44007" href="https://mdbootstrap.com/docs/jquery/sections/e-commerce/">E-commerce</a></li>
                                <li id="menu-item-44006" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44006"><a class="collapsible-header waves-effect" id="link-menu-item-44006" href="https://mdbootstrap.com/docs/jquery/sections/magazine/">Magazine</a></li>
                                <li id="menu-item-44008" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44008"><a class="collapsible-header waves-effect" id="link-menu-item-44008" href="https://mdbootstrap.com/docs/jquery/sections/features/">Features</a></li>
                                <li id="menu-item-44013" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44013"><a class="collapsible-header waves-effect" id="link-menu-item-44013" href="https://mdbootstrap.com/docs/jquery/sections/social/">Social</a></li>
                                <li id="menu-item-44009" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44009"><a class="collapsible-header waves-effect" id="link-menu-item-44009" href="https://mdbootstrap.com/docs/jquery/sections/projects/">Projects</a></li>
                                <li id="menu-item-44011" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44011"><a class="collapsible-header waves-effect" id="link-menu-item-44011" href="https://mdbootstrap.com/docs/jquery/sections/team/">Team</a></li>
                                <li id="menu-item-44010" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44010"><a class="collapsible-header waves-effect" id="link-menu-item-44010" href="https://mdbootstrap.com/docs/jquery/sections/testimonials/">Testimonials</a></li>
                            </ul></div>
                    </li>
                    <li id="menu-item-43629" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-43629"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-book"></i>Tutorials<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body"> <ul class="sub-menu">
                                <li id="menu-item-83951" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-83951"><a class="collapsible-header waves-effect" id="link-menu-item-83951" href="https://mdbootstrap.com/education/">Basics</a></li>
                                <li id="menu-item-59434" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-59434"><a class="collapsible-header waves-effect" id="link-menu-item-59434" href="https://mdbootstrap.com/education/bootstrap/">Bootstrap</a></li>
                                <li id="menu-item-52581" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-52581"><a class="collapsible-header waves-effect" id="link-menu-item-52581" href="https://mdbootstrap.com/education/angular/">Angular</a></li>
                                <li id="menu-item-85129" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-85129"><a class="collapsible-header waves-effect" id="link-menu-item-85129" href="https://mdbootstrap.com/education/react/">React</a></li>
                                <li id="menu-item-85130" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-85130"><a class="collapsible-header waves-effect" id="link-menu-item-85130" href="https://mdbootstrap.com/education/vue/">Vue</a></li>
                                <li id="menu-item-77182" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-77182"><a class="collapsible-header waves-effect" id="link-menu-item-77182" href="https://mdbootstrap.com/education/wordpress/">WordPress</a></li>
                                <li id="menu-item-85131" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-85131"><a class="collapsible-header waves-effect" id="link-menu-item-85131" href="https://mdbootstrap.com/articles/">Miscellaneous</a></li>
                                <li id="menu-item-85132" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-85132"><a class="collapsible-header waves-effect" id="link-menu-item-85132" href="https://mdbootstrap.com/education/coding-challenge/">Coding challenges</a></li>
                            </ul></div>
                    </li>
                    <li id="menu-item-77919" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-page-parent menu-item-77919"><a class="collapsible-header waves-effect" id="link-menu-item-77919" href="https://mdbootstrap.com/plugins/jquery/"><i class="fas fa-plus-square"></i>Plugins &amp; addons</a></li>
                    <li id="menu-item-44016" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44016"><a class="collapsible-header waves-effect" id="link-menu-item-44016" href="https://mdbootstrap.com/freebies/"><i class="fas fa-magic"></i> Free templates</a></li>
                    <li id="menu-item-44235" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44235"><a class="collapsible-header waves-effect" id="link-menu-item-44235" href="https://mdbootstrap.com/templates/"><i class="fas fa-image"></i>Premium templates</a></li>
                    <li id="menu-item-43632" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-43632"><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-puzzle-piece"></i>Tools &amp; resources<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body"> <ul class="sub-menu">
                                <li id="menu-item-85135" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-85135"><a class="collapsible-header waves-effect" id="link-menu-item-85135" href="https://mdbootstrap.com/support/">Support</a></li>
                                <li id="menu-item-80425" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-80425"><a class="collapsible-header waves-effect" id="link-menu-item-80425" href="https://mdbootstrap.com/snippets/">MDB editor &amp; snippets</a></li>
                                <li id="menu-item-83072" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-83072"><a class="collapsible-header waves-effect" id="link-menu-item-83072" href="https://mdbootstrap.com/articles/">Articles</a></li>
                                <li id="menu-item-80426" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-80426"><a class="collapsible-header waves-effect" id="link-menu-item-80426" href="https://mdbootstrap.com/publications/">Publications &amp; reports</a></li>
                                <li id="menu-item-44018" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-44018"><a class="collapsible-header waves-effect" id="link-menu-item-44018" href="https://mdbootstrap.com/material-design-logo-generator/">Logo generator</a></li>
                                <li id="menu-item-85133" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-85133"><a class="collapsible-header waves-effect" id="link-menu-item-85133" href="https://mdbootstrap.com/news/frontend/">Frontend news</a></li>
                            </ul></div>
                    </li>
                </ul>    </li>
            <!-- /. Side navigation links -->
            <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 772px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 411px;"></div></div></ul>
        <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
    <!--/.SideNav-->
    <div class="modal fade" id="navbarLogin" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">

            <!-- Modal content -->
            <div class="modal-content">
                <!-- Modal body -->
                <div class="modal-body">

                    <!-- Pills navs -->
                    <ul class="nav md-pills nav-justified pills-info">
                        <li class="nav-item">
                            <a class="nav-link active show" data-toggle="tab" href="#navbarLogin-login" role="tab" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#navbarLogin-signup" role="tab" aria-selected="false">Register</a>
                        </li>
                    </ul>

                    <!-- Pills panels -->
                    <div class="tab-content py-0">

                        <!--Panel 1-->
                        <div class="tab-pane fade in active show" id="navbarLogin-login" role="tabpanel">

                            <!-- Default form login -->
                            <form id="login" class="text-center" action="login" method="post" novalidate="novalidate">

                                <input type="hidden" id="security" name="security" value="128c68a605"><input type="hidden" name="_wp_http_referer" value="/plugins/jquery/file-upload/">
                                <p class="status"></p>

                                <!-- Social login -->
                                <div class="my-3">

                                    <!--
                                        wsl_render_auth_widget
                                        WordPress Social Login 2.3.3.
                                        http://wordpress.org/plugins/wordpress-social-login/
                                    -->

                                    <style type="text/css">
                                        .wp-social-login-connect-with{}.wp-social-login-provider-list{}.wp-social-login-provider-list a{}.wp-social-login-provider-list img{}.wsl_connect_with_provider{}</style>

                                    <div class="wp-social-login-widget">

                                        <div class="wp-social-login-connect-with">Connect with:</div>

                                        <div class="wp-social-login-provider-list">

                                            <a rel="nofollow" href="https://mdbootstrap.com/wp-login.php?action=wordpress_social_authenticate&amp;mode=login&amp;provider=Facebook&amp;redirect_to=https%3A%2F%2Fmdbootstrap.com%2Fplugins%2Fjquery%2Ffile-upload%2F" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
                                                Facebook
                                            </a>

                                            <a rel="nofollow" href="https://mdbootstrap.com/wp-login.php?action=wordpress_social_authenticate&amp;mode=login&amp;provider=Google&amp;redirect_to=https%3A%2F%2Fmdbootstrap.com%2Fplugins%2Fjquery%2Ffile-upload%2F" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google">
                                                Google
                                            </a>

                                            <a rel="nofollow" href="https://mdbootstrap.com/wp-login.php?action=wordpress_social_authenticate&amp;mode=login&amp;provider=Twitter&amp;redirect_to=https%3A%2F%2Fmdbootstrap.com%2Fplugins%2Fjquery%2Ffile-upload%2F" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter">
                                                Twitter
                                            </a>

                                        </div>

                                        <div class="wp-social-login-widget-clearing"></div>

                                    </div>

                                    <!-- wsl_render_auth_widget -->

                                </div>
                                <!-- Social login -->

                                <!-- Default input -->
                                <label class="grey-text" for="username">Your e-mail or username</label>
                                <input type="text" id="username" class="form-control" name="username">

                                <br>

                                <!-- Default input password -->
                                <label class="grey-text" for="password">Your password</label>
                                <input type="password" id="password" class="form-control" name="password">

                                <div class="mt-4">
                                    <a href="https://mdbootstrap.com/my-account/lost-password/" class="btn btn-outline-info btn-md mb-4 waves-effect waves-light" type="submit">Forgot password?</a>
                                    <button class="btn btn-info btn-md mb-4 waves-effect waves-light" type="submit" value="LOGIN">Login</button>
                                </div>

                            </form>
                            <!-- Default form login -->

                        </div>
                        <!--/.Panel 1-->

                        <!--Panel 2-->
                        <div class="tab-pane fade" id="navbarLogin-signup" role="tabpanel">

                            <!-- Default form register  -->
                            <form id="register" class="text-center" action="register" method="post" novalidate="novalidate">

                                <input type="hidden" id="signonsecurity" name="signonsecurity" value="46b0553bb5"><input type="hidden" name="_wp_http_referer" value="/plugins/jquery/file-upload/">
                                <!-- Social login -->

                                <p class="status"></p>

                                <div class="my-3">

                                    <!--
                                        wsl_render_auth_widget
                                        WordPress Social Login 2.3.3.
                                        http://wordpress.org/plugins/wordpress-social-login/
                                    -->

                                    <style type="text/css">
                                        .wp-social-login-connect-with{}.wp-social-login-provider-list{}.wp-social-login-provider-list a{}.wp-social-login-provider-list img{}.wsl_connect_with_provider{}</style>

                                    <div class="wp-social-login-widget">

                                        <div class="wp-social-login-connect-with">Connect with:</div>

                                        <div class="wp-social-login-provider-list">

                                            <a rel="nofollow" href="https://mdbootstrap.com/wp-login.php?action=wordpress_social_authenticate&amp;mode=login&amp;provider=Facebook&amp;redirect_to=https%3A%2F%2Fmdbootstrap.com%2Fplugins%2Fjquery%2Ffile-upload%2F" title="Connect with Facebook" class="wp-social-login-provider wp-social-login-provider-facebook" data-provider="Facebook">
                                                Facebook
                                            </a>

                                            <a rel="nofollow" href="https://mdbootstrap.com/wp-login.php?action=wordpress_social_authenticate&amp;mode=login&amp;provider=Google&amp;redirect_to=https%3A%2F%2Fmdbootstrap.com%2Fplugins%2Fjquery%2Ffile-upload%2F" title="Connect with Google" class="wp-social-login-provider wp-social-login-provider-google" data-provider="Google">
                                                Google
                                            </a>

                                            <a rel="nofollow" href="https://mdbootstrap.com/wp-login.php?action=wordpress_social_authenticate&amp;mode=login&amp;provider=Twitter&amp;redirect_to=https%3A%2F%2Fmdbootstrap.com%2Fplugins%2Fjquery%2Ffile-upload%2F" title="Connect with Twitter" class="wp-social-login-provider wp-social-login-provider-twitter" data-provider="Twitter">
                                                Twitter
                                            </a>

                                        </div>

                                        <div class="wp-social-login-widget-clearing"></div>

                                    </div>

                                    <!-- wsl_render_auth_widget -->

                                </div>
                                <!-- Social login -->

                                <!-- Default input name -->
                                <input type="text" id="signonname" class="form-control" name="signonname">
                                <label for="signonname">Your name</label>

                                <br>

                                <!-- Default input username -->
                                <input type="text" id="signonusername" class="form-control" name="signonusername">
                                <label for="signonusername">Your username</label>

                                <br>

                                <!-- Default input email -->
                                <input type="text" id="email" class="form-control" name="email">
                                <label for="email">Your email</label>

                                <br>
                                <!-- Default input password -->
                                <input type="password" id="signonpassword" class="form-control" name="signonpassword" aria-autocomplete="list">
                                <label for="signonpassword">Your password</label>

                                <br>

                                <!-- Default input password -->
                                <input type="password" id="password2" class="form-control" name="password2">
                                <label for="password2">Repeat password</label>

                                <div class="mt-4">
                                    <p class="small grey-text">By signing up you agree to data processing by the administrator: StartupFlow s.c. located in Kijowska 7, Warsaw. The administrator processes data following the <a target="_blank" href="https://mdbootstrap.com/privacy-policy/">Privacy Policy</a>.
                                    </p>
                                    <button class="btn btn-info btn-md mb-4 waves-effect waves-light" id="AJAXAuthRegisterBtn" type="submit" value="SIGNUP">Sign up</button>
                                </div>

                            </form>
                            <!-- Default form register  -->

                        </div>
                        <!--/.Panel 2-->

                    </div>
                    <!-- Pills panels -->

                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info btn-md waves-effect waves-light" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- Modal content -->
        </div>
    </div>


    <!-- Navbar-->
    <nav class="navbar fixed-top navbar-expand-md navbar-light white double-nav scrolling-navbar top-nav-collapse">
        <!-- SideNav slide-out button -->
        <div class="float-left">
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i><span class="sr-only" aria-hidden="true">Toggle side navigation</span></a>
        </div>
        <!-- Navbar links-->
        <div class="mr-auto pl-2">
    <span class="d-none d-md-inline-block">

    <!-- Dynamic content wrapper -->
    <span id="dynamicContentWrapper-mainNavbar" class="dynamic-content d-none d-lg-inline-block"><a alt="Dynamic: Pro (jQuery)" id="navbar-jquery-dynamic-pro" class="btn btn-danger btn-sm my-0" href="/products/jquery-ui-kit/" role="button">MDB Pro<i class="far fa-gem ml-1"></i>
</a></span>

        <!--Angular-->
              <a id="navbar-category-gettingstarted-jquery" class="btn btn-info btn-sm my-0 waves-effect waves-light" href="/docs/jquery/getting-started/download/" role="button">
          <span class="d-none d-lg-inline-block mr-1">Getting started</span>
          <i class="fas fa-download" data-toggle="tooltip" title="" data-original-title="Getting Started"></i>
        </a>
        <a id="navbar-category-tutorial-jquery" class="btn btn-info btn-sm my-0 waves-effect waves-light" href="/education/bootstrap/" role="button">
          <span class="d-none d-lg-inline-block mr-1">Tutorial</span>
          <i class="fas fa-graduation-cap" data-toggle="tooltip" title="" data-original-title="Tutorial"></i>
        </a>
        <span id="dynamicContentWrapper-mainNavbar3" class="dynamic-content"><a alt="Dynamic: Products" class="btn btn-mdb-color btn-sm my-0" href="/products/" role="button">Products<i class="far fa-gem  ml-1"></i></a></span>
        <a id="navbar-category-bundle-jquery" class="btn btn-indigo btn-sm my-0 waves-effect waves-light" href="/products/jquery-big-bundle/" role="button">
        <span class="badge red">New</span>
          <span class="d-none d-xl-inline-block mr-1">Big Bundle</span>
          <i class="fas fa-gift" data-toggle="tooltip" title="" data-original-title="Big Bundle"></i>
        </a>
          </span>
        </div>

        <!--Navigation icons-->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">


            <li class="nav-item">
                <a href="/contact" data-toggle="modal" data-target="#contactForm" class="nav-link waves-effect">
                    <i id="navbar-static-contact" alt="Contact us" class="fas fa-envelope"></i><span class="sr-only">Contact us</span>
                </a>
            </li>

            <!-- <li class="nav-item ">
              <a href="/profile/?id=0#messages" class="nav-link waves-effect headerNotifCountBadge">
                <i class="fas fa-comments"></i><span class="sr-only">Direct messages</span>
              </a>
            </li> -->


            <!-- Tools -->
            <li id="navbar-static-tools" class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbar-tools" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-wrench"></i><span class="d-none d-lg-inline-block ml-1">Tools</span></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbar-tools">
                    <a class="dropdown-item waves-effect waves-light" href="/support/">Support</a>
                    <a class="dropdown-item waves-effect waves-light" href="/snippets/">Editor &amp; Snippets</a>
                    <a class="dropdown-item waves-effect waves-light" href="/articles/">Articles</a>
                    <a class="dropdown-item waves-effect waves-light" href="/news/frontend/">News</a>
                </div>
            </li>

            <!-- Login / register -->
            <a id="navbar-static-login" class="btn btn-info btn-rounded btn-sm waves-effect waves-light" data-toggle="modal" data-target="#navbarLogin">Log In
                <i class="fas fa-sign-in-alt ml-2"></i>
            </a>
        </ul>
    </nav>
    <!-- /.Navbar-->
</header>

<!-- Angular or not Angular? -->
<div class="switch-version d-none d-md-block">
    <a id="switch-mdb-jquery" href="/docs/jquery/"><span class="switch-to mdb-jquery active" id="jQuery"></span></a>
    <a id="switch-mdb-angular" href="/docs/angular/"><span class="switch-to mdb-angular " id="Angular"></span></a>
    <a id="switch-mdb-react" href="/docs/react/"><span class="switch-to mdb-react " id="React"></span></a>
    <a id="switch-mdb-vue" href="/docs/vue/"><span class="switch-to mdb-vue " id="Vue"></span></a>

</div>

<style>
    .main-tabs-docs .nav-mtd {
        white-space: nowrap;
        overflow-x: auto;
        position: relative; }
    @media (min-width: 62rem) {
        .main-tabs-docs .nav-mtd {
            overflow-x: hidden; } }
    .main-tabs-docs .nav-mtd li a {
        display: block;
        padding: 20px 24px;
        font-size: 13px;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.8);
        text-align: center;
        -webkit-border-radius: 0;
        border-radius: 0;
        font-weight: 500;
        border-bottom: 3px solid #33b5e5; }
    .main-tabs-docs .nav-mtd li a.active {
        border-bottom: 3px solid;
        color: #fff; }
    @media (min-width: 62em) {
        .main-tabs-docs .nav-mtd li:first-child {
            margin-left: 56px; } }

    .documentation .primary-heading {
        font-size: 2.7rem;
        font-weight: 500; }

    .documentation .secondary-heading {
        font-size: 1.5rem;
        font-weight: 500;
        color: #444343;
        overflow: hidden;
        padding-bottom: .3rem;
        margin-bottom: .7rem; }

    .documentation .section-heading {
        font-size: 2rem;
        font-weight: 600;
        margin-bottom: 1.4rem; }

    .documentation .docs-pills {
        margin-top: 1.4rem; }

    .documentation .section-preview {
        border: 1px solid #e0e0e0;
        padding: 15px; }

    @media only screen and (max-width: 991px) {
        .sticky, .sticky2, .sticky3,
        .sticky-placeholder {
            display: none;
        }
    }


</style>



<main>

    <div class="container-fluid mt-2">

        <!-- Main docs tabs -->
        <div class="main-tabs-docs">

            <!-- Nav tabs -->
            <ul class="nav nav-mtd tabs-info z-depth-1" role="tablist">
                <li class="nav-item">
                    <a id="docs-tab-overview" class="nav-link waves-light waves-effect waves-light active" data-toggle="tab" href="#docsTabsOverview" role="tab" aria-selected="true"><i class="fas fa-book mr-2"></i>Overview</a>
                </li>
                <li class="nav-item">
                    <a id="docs-tab-gettingstarted" class="nav-link waves-light waves-effect waves-light" data-toggle="tab" href="#docsTabsAPI" role="tab" aria-selected="false"><i class="fas fa-download mr-2"></i>Getting started</a>
                </li>
            </ul>

            <div class="tab-content">
                <!--Overview-->
                <div class="tab-pane fade in active show" id="docsTabsOverview" role="tabpanel">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column: Content-->
                        <div class="col-lg-10 col-md-12">
                            <div class="d-flex justify-content-end">
                                <span class="mt-1 mr-2">Rate these docs</span>
                                <span class="popover-form-container" id="rateTooltip" data-page-id="80402">

                                                               <i class="fas fa-star stars py-2 px-1 popovers" data-page-template="docs" data-index="0" style="cursor: pointer" data-html="true" data-toggle="popover" data-placement="top" data-content="<div class='md-form my-0 py-0'> <textarea type='text' style='font-size: 0.78rem' class='md-textarea form-control py-0' placeholder='Write us what can we improve' id='voteDescriptionInput' rows='3'></textarea> <input id='voteSubmitButton' type='submit' class='btn btn-sm btn-primary' value='Submit!'> <button id='closePopoverButton' class='btn btn-flat btn-sm'>Close</button>  </div>" title="" data-original-title=""></i>
                                                               <i class="fas fa-star stars py-2 px-1 popovers" data-page-template="docs" data-index="1" style="cursor: pointer" data-html="true" data-toggle="popover" data-placement="top" data-content="<div class='md-form my-0 py-0'> <textarea type='text' style='font-size: 0.78rem' class='md-textarea form-control py-0' placeholder='Write us what can we improve' id='voteDescriptionInput' rows='3'></textarea> <input id='voteSubmitButton' type='submit' class='btn btn-sm btn-primary' value='Submit!'> <button id='closePopoverButton' class='btn btn-flat btn-sm'>Close</button>  </div>" title="" data-original-title=""></i>
                                                               <i class="fas fa-star stars py-2 px-1 popovers" data-page-template="docs" data-index="2" style="cursor: pointer" data-html="true" data-toggle="popover" data-placement="top" data-content="<div class='md-form my-0 py-0'> <textarea type='text' style='font-size: 0.78rem' class='md-textarea form-control py-0' placeholder='Write us what can we improve' id='voteDescriptionInput' rows='3'></textarea> <input id='voteSubmitButton' type='submit' class='btn btn-sm btn-primary' value='Submit!'> <button id='closePopoverButton' class='btn btn-flat btn-sm'>Close</button>  </div>" title="" data-original-title=""></i>
                                                               <i class="fas fa-star stars py-2 px-1 popovers" data-page-template="docs" data-index="3" style="cursor: pointer" data-html="true" data-toggle="popover" data-placement="top" data-content="<div class='md-form my-0 py-0'> <textarea type='text' style='font-size: 0.78rem' class='md-textarea form-control py-0' placeholder='Write us what can we improve' id='voteDescriptionInput' rows='3'></textarea> <input id='voteSubmitButton' type='submit' class='btn btn-sm btn-primary' value='Submit!'> <button id='closePopoverButton' class='btn btn-flat btn-sm'>Close</button>  </div>" title="" data-original-title=""></i>
                                                               <i class="fas fa-star stars py-2 px-1 popovers" data-page-template="docs" data-index="4" style="cursor: pointer" data-html="true" data-toggle="popover" data-placement="top" data-content="<div class='md-form my-0 py-0'> <textarea type='text' style='font-size: 0.78rem' class='md-textarea form-control py-0' placeholder='Write us what can we improve' id='voteDescriptionInput' rows='3'></textarea> <input id='voteSubmitButton' type='submit' class='btn btn-sm btn-primary' value='Submit!'> <button id='closePopoverButton' class='btn btn-flat btn-sm'>Close</button>  </div>" title="" data-original-title=""></i>
                                    <!-- HTML to write -->
                            </span>
                            </div>
                            <!--Section: Docs content-->
                            <section class="documentation">
                                <style>
                                    .file-upload{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;position:relative;cursor:pointer;overflow:hidden;width:100%;max-width:100%;height:200px;padding:5px 10px;font-size:1rem;text-align:center;color:#ccc}.file-upload-wrapper .card.card-body.has-error .file-upload-message .file-upload-error,.file-upload-wrapper .card.card-body.has-preview .btn.btn-sm.btn-danger{display:block}.file-upload i{font-size:3rem}.file-upload .mask.rgba-stylish-slight{opacity:0;-webkit-transition:all .15s linear;-o-transition:all .15s linear;transition:all .15s linear}.file-upload:hover .mask.rgba-stylish-slight{opacity:.8}.file-upload-wrapper .card.card-body.has-error{border-color:#f34141}.file-upload-wrapper .card.card-body.has-error:hover .file-upload-errors-container{visibility:visible;opacity:1;-webkit-transition-delay:0s;-o-transition-delay:0s;transition-delay:0s}.file-upload-wrapper .card.card-body.disabled input{cursor:not-allowed}.file-upload-wrapper .card.card-body.disabled:hover{background-image:none;-webkit-animation:none;animation:none}.file-upload-wrapper .card.card-body.disabled .file-upload-message{opacity:.5;text-decoration:line-through}.file-upload-wrapper .card.card-body.disabled .file-upload-infos-message{display:none}.file-upload-wrapper .card.card-body input{position:absolute;top:0;right:0;bottom:0;left:0;height:100%;width:100%;opacity:0;cursor:pointer;z-index:5}.file-upload-wrapper .card.card-body .file-upload-message{position:relative;top:50px;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}.file-upload-wrapper .card.card-body .file-upload-message span.file-icon{font-size:50px;color:#ccc}.file-upload-wrapper .card.card-body .file-upload-message p{margin:5px 0 0}.file-upload-wrapper .card.card-body .file-upload-message p.file-upload-error{color:#f34141;font-weight:700;display:none}.file-upload-wrapper .card.card-body .btn.btn-sm.btn-danger{display:none;position:absolute;opacity:0;z-index:7;top:10px;right:10px;-webkit-transition:all .15s linear;-o-transition:all .15s linear;transition:all .15s linear}.file-upload-wrapper .card.card-body .file-upload-preview{display:none;position:absolute;z-index:1;background-color:#fff;padding:5px;width:100%;height:100%;top:0;right:0;bottom:0;left:0;overflow:hidden;text-align:center}.file-upload-wrapper .card.card-body .file-upload-preview .file-upload-render .file-upload-preview-img{width:100%;height:100%;background-color:#fff;-webkit-transition:border-color .15s linear;-o-transition:border-color .15s linear;transition:border-color .15s linear;-o-object-fit:cover;object-fit:cover}.file-upload-wrapper .card.card-body .file-upload-preview .file-upload-render i{font-size:80px;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);position:absolute;color:#777}.file-upload-wrapper .card.card-body .file-upload-preview .file-upload-render .file-upload-extension{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);-ms-transform:translate(-50%,-50%);transform:translate(-50%,-50%);margin-top:10px;text-transform:uppercase;font-weight:900;letter-spacing:-.03em;font-size:1rem;color:#fff;width:42px;white-space:nowrap;overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis}.file-upload-wrapper .card.card-body .file-upload-preview .file-upload-infos{position:absolute;left:0;top:0;right:0;bottom:0;z-index:3;background:rgba(0,0,0,.7);opacity:0;-webkit-transition:opacity .15s linear;-o-transition:opacity .15s linear;transition:opacity .15s linear}.file-upload-wrapper .card.card-body .file-upload-preview .file-upload-infos .file-upload-infos-inner{position:absolute;top:50%;-webkit-transform:translate(0,-40%);-ms-transform:translate(0,-40%);transform:translate(0,-40%);-webkit-backface-visibility:hidden;backface-visibility:hidden;width:100%;padding:0 20px;-webkit-transition:all .2s ease;-o-transition:all .2s ease;transition:all .2s ease}.file-upload-wrapper .card.card-body .file-upload-preview .file-upload-infos .file-upload-infos-inner p{padding:0;margin:0;position:relative;width:100%;white-space:nowrap;overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis;color:#fff;text-align:center;line-height:25px;font-weight:700}.file-upload-wrapper .card.card-body .file-upload-preview .file-upload-infos .file-upload-infos-inner p.file-upload-infos-message{margin-top:15px;padding-top:15px;font-size:12px;position:relative;opacity:.5}.file-upload-wrapper .card.card-body .file-upload-preview .file-upload-infos .file-upload-infos-inner p.file-upload-infos-message::before{content:"";position:absolute;top:0;left:50%;-webkit-transform:translate(-50%,0);-ms-transform:translate(-50%,0);transform:translate(-50%,0);background:#fff;width:30px;height:2px}.file-upload-wrapper .card.card-body:hover .btn.btn-sm.btn-danger,.file-upload-wrapper .card.card-body:hover .file-upload-preview .file-upload-infos{opacity:1}.file-upload-wrapper .card.card-body:hover .file-upload-preview .file-upload-infos .file-upload-infos-inner{margin-top:-5px}.file-upload-wrapper .card.card-body.touch-fallback{height:auto!important}.file-upload-wrapper .card.card-body.touch-fallback:hover{background-image:none;-webkit-animation:none;animation:none}.file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview{position:relative;padding:0}.file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-render{display:block;position:relative}.file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-infos .file-upload-infos-inner p.file-upload-infos-message::before,.file-upload-wrapper .card.card-body.touch-fallback.has-preview .file-upload-message{display:none}.file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-render .file-upload-font-file{position:relative;-webkit-transform:translate(0,0);-ms-transform:translate(0,0);transform:translate(0,0);top:0;left:0}.file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-render .file-upload-font-file::before{margin-top:30px;margin-bottom:30px}.file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-render img{position:relative;-webkit-transform:translate(0,0);-ms-transform:translate(0,0);transform:translate(0,0)}.file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-infos{position:relative;opacity:1;background:0 0}.file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-infos .file-upload-infos-inner{position:relative;top:0;-webkit-transform:translate(0,0);-ms-transform:translate(0,0);transform:translate(0,0);padding:5px 90px 5px 0}.file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-infos .file-upload-infos-inner p{padding:0;margin:0;position:relative;width:100%;white-space:nowrap;overflow:hidden;-o-text-overflow:ellipsis;text-overflow:ellipsis;color:#777;text-align:left;line-height:25px}.file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-infos .file-upload-infos-inner p.file-upload-infos-message{margin-top:0;padding-top:0;font-size:18px;position:relative;opacity:1}.file-upload-wrapper .card.card-body.touch-fallback .file-upload-message{-webkit-transform:translate(0,0);-ms-transform:translate(0,0);transform:translate(0,0);padding:40px 0}.file-upload-wrapper .card.card-body.touch-fallback .btn.btn-sm.btn-danger{top:auto;bottom:23px;opacity:1}.file-upload-wrapper .card.card-body.touch-fallback:hover .file-upload-preview .file-upload-infos .file-upload-infos-inner{margin-top:5rem}.file-upload-wrapper .card.card-body .file-upload-loader{position:absolute;top:15px;right:15px;display:none;z-index:9}.file-upload-wrapper .card.card-body .file-upload-loader::after{display:block;position:relative;width:20px;height:20px;-webkit-animation:rotate .6s linear infinite;animation:rotate .6s linear infinite;-webkit-border-radius:100%;border-radius:100%;border-top:1px solid #ccc;border-bottom:1px solid #777;border-left:1px solid #ccc;border-right:1px solid #777;content:""}.file-upload-wrapper .card.card-body .file-upload-errors-container{position:absolute;left:0;top:0;right:0;bottom:0;z-index:3;background:rgba(243,65,65,.8);text-align:left;visibility:hidden;opacity:0;-webkit-transition:visibility 0s linear .15s,opacity .15s linear;-o-transition:visibility 0s linear .15s,opacity .15s linear;transition:visibility 0s linear .15s,opacity .15s linear}.file-upload-wrapper .card.card-body .file-upload-errors-container ul{padding:10px 20px;margin:0;position:absolute;left:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}.file-upload-wrapper .card.card-body .file-upload-errors-container ul li{margin-left:20px;color:#fff;font-weight:700}.file-upload-wrapper .card.card-body .file-upload-errors-container.visible{visibility:visible;opacity:1;-webkit-transition-delay:0s;-o-transition-delay:0s;transition-delay:0s}.file-upload-wrapper .card.card-body~.file-upload-errors-container ul{padding:0;margin:15px 0}.file-upload-wrapper .card.card-body~.file-upload-errors-container ul li{margin-left:20px;color:#f34141;font-weight:700}@-webkit-keyframes rotate{0%{-webkit-transform:rotateZ(-360deg);transform:rotateZ(-360deg)}100%{-webkit-transform:rotateZ(0);transform:rotateZ(0)}}@keyframes rotate{0%{-webkit-transform:rotateZ(-360deg);transform:rotateZ(-360deg)}100%{-webkit-transform:rotateZ(0);transform:rotateZ(0)}}
                                </style>
                                <!--Section: Intro-->
                                <section id="introduction">

                                    <!--Title-->
                                    <h2 class="primary-heading">Drag and drop file upload</h2>

                                    <h1 class="secondary-heading mb-4">Bootstrap drag and drop file upload plugin</h1>

                                    <!--Description-->
                                    <p>MD Bootstrap File Upload plugin is an extension that allows you to upload files by using drag and drop
                                        functionality. Easy to use, setup and customize.</p>

                                    <blockquote class="blockquote bq-primary">
                                        <p class="bq-title">To start working with drag and drop file upload plugin see <strong>"Getting Started"</strong>
                                            tab on this page.</p>
                                    </blockquote>

                                    <hr class="my-4">

                                    <section class="mx-1" id="basic-example">

                                        <!--Title-->
                                        <h2 class="section-heading mb-4">
                                            Basic example
                                        </h2>

                                        <blockquote class="blockquote bq-warning">
                                            <p class="bq-title">For each element with file upload plugin you have to add wrapper with class <code>file-upload-wrapper</code>.</p>

                                        </blockquote>

                                        <!--Live preview-->
                                        <section>

                                            <div class="file-upload-wrapper">
                                                <div class="card card-body view file-upload"><div class="card-text file-upload-message"><i class="fas fa-cloud-upload-alt"></i><p>Drag and drop a file here or click</p><p class="file-upload-error">Ooops, something wrong happended.</p></div><div class="mask rgba-stylish-slight" style=""></div><div class="file-upload-errors-container"><ul></ul></div><input type="file" id="input-file-now" class="file_upload"><button type="button" class="btn btn-sm btn-danger">Remove<i class="far fa-trash-alt ml-1"></i></button><div class="file-upload-preview" style="display: none;"><span class="file-upload-render"></span><div class="file-upload-infos"><div class="file-upload-infos-inner"><p class="file-upload-filename"><span class="file-upload-filename-inner">Screenshot from 2019-03-10 00-39-58.png</span></p><p class="file-upload-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                            </div>
                                            <!--Code-->
                                            <!-- mdbsnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link show active" data-toggle="tab" href="#mdb_30776fb832ac8d37a61714def669cd81" role="tab" aria-selected="true">HTML</a></li><li class="nav-item"><a class="nav-link" data-toggle="tab" href="#mdb_9b99f7ad83afaf326a0b5eda277e2443" role="tab" aria-selected="false">JS</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show" id="mdb_30776fb832ac8d37a61714def669cd81" role="tabpanel"><div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-html" data-editor="false"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>file-upload-wrapper<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>file<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>input-file-now<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>file-upload<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></pre><div class="toolbar"><div class="toolbar-item"><button class="btn-copy-code btn btn-outline-grey btn-sm px-2 waves-effect"><i class="fa fa-copy mr-1"></i> Copy code</button></div></div></div></div><div class="tab-pane fade" id="mdb_9b99f7ad83afaf326a0b5eda277e2443" role="tabpanel"><div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-javascript" data-editor="false"><code class=" language-javascript"><span class="token function">$</span><span class="token punctuation">(</span><span class="token string">'.file_upload'</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">file_upload</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span><span aria-hidden="true" class="line-numbers-rows"><span></span></span></code></pre><div class="toolbar"><div class="toolbar-item"><button class="btn-copy-code btn btn-outline-grey btn-sm px-2 waves-effect"><i class="fa fa-copy mr-1"></i> Copy code</button></div></div></div></div></div></div><!-- /.mdbsnippet -->
                                            <!--/Code-->

                                        </section>
                                        <!--/Section: Intro-->

                                    </section>

                                    <hr class="mt-4 mb-5">

                                    <section class="mx-1" id="default-value">

                                        <!--Title-->
                                        <h2 class="section-heading mb-4">
                                            Default value
                                        </h2>

                                        <p>You can add a default value</p>

                                        <!--Live preview-->

                                        <section>

                                            <div class="file-upload-wrapper">
                                                <div class="card card-body view file-upload has-preview"><div class="card-text file-upload-message"><i class="fas fa-cloud-upload-alt"></i><p>Drag and drop a file here or click</p><p class="file-upload-error">Ooops, something wrong happended.</p></div><div class="mask rgba-stylish-slight" style="display: none;"></div><div class="file-upload-errors-container"><ul></ul></div><input type="file" id="input-file-now-custom-1" class="file_upload" data-default-file="https://mdbootstrap.com/img/Photos/Others/images/89.jpg"><button type="button" class="btn btn-sm btn-danger">Remove<i class="far fa-trash-alt ml-1"></i></button><div class="file-upload-preview" style="display: block;"><span class="file-upload-render"><img class="file-upload-preview-img" src="https://mdbootstrap.com/img/Photos/Others/images/89.jpg"></span><div class="file-upload-infos"><div class="file-upload-infos-inner"><p class="file-upload-filename"><span class="file-upload-filename-inner">89.jpg</span></p><p class="file-upload-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                            </div>

                                            <!--Code-->
                                            <!-- mdbsnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#mdb_3274ae48623d5ec15b921626adbb546b" role="tab">HTML</a></li><li class="nav-item"><a class="nav-link " data-toggle="tab" href="#mdb_24c883cb7dd91f8ade124e29de238a5c" role="tab">JS</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show" id="mdb_3274ae48623d5ec15b921626adbb546b" role="tabpanel"><div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-html" data-editor="false"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>file-upload-wrapper<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>file<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>input-file-now-custom-1<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>file-upload<span class="token punctuation">"</span></span> <span class="token attr-name">data-default-file</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>https://mdbootstrap.com/img/Photos/Others/images/89.jpg<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></pre><div class="toolbar"><div class="toolbar-item"><button class="btn-copy-code btn btn-outline-grey btn-sm px-2 waves-effect"><i class="fa fa-copy mr-1"></i> Copy code</button></div></div></div></div><div class="tab-pane fade " id="mdb_24c883cb7dd91f8ade124e29de238a5c" role="tabpanel"><div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-javascript" data-editor="false"><code class=" language-javascript"><span class="token function">$</span><span class="token punctuation">(</span><span class="token string">'.file_upload'</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">file_upload</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span><span aria-hidden="true" class="line-numbers-rows"><span></span></span></code></pre><div class="toolbar"><div class="toolbar-item"><button class="btn-copy-code btn btn-outline-grey btn-sm px-2 waves-effect"><i class="fa fa-copy mr-1"></i> Copy code</button></div></div></div></div></div></div><!-- /.mdbsnippet -->
                                            <!--/Code-->

                                        </section>
                                        <!--/Section: Intro-->

                                    </section>

                                    <hr class="mt-4 mb-5">

                                    <section class="mx-1" id="height">

                                        <!--Title-->
                                        <h2 class="section-heading mb-4">
                                            Custom height
                                        </h2>

                                        <p>You can set the height</p>

                                        <!--Live preview-->
                                        <section>
                                            <div class="file-upload-wrapper">
                                                <div class="card card-body view file-upload" style="height: 510px;"><div class="card-text file-upload-message"><i class="fas fa-cloud-upload-alt"></i><p>Drag and drop a file here or click</p><p class="file-upload-error">Ooops, something wrong happended.</p></div><div class="mask rgba-stylish-slight"></div><div class="file-upload-errors-container"><ul></ul></div><input type="file" id="input-file-now-custom-2" class="file_upload" data-height="500"><button type="button" class="btn btn-sm btn-danger">Remove<i class="far fa-trash-alt ml-1"></i></button><div class="file-upload-preview"><span class="file-upload-render"></span><div class="file-upload-infos"><div class="file-upload-infos-inner"><p class="file-upload-filename"><span class="file-upload-filename-inner"></span></p><p class="file-upload-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                            </div>
                                            <!--Code-->
                                            <!-- mdbsnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#mdb_4271daa4bf64e1be191f12b2ff06c81f" role="tab">HTML</a></li><li class="nav-item"><a class="nav-link " data-toggle="tab" href="#mdb_f7158e104cda653edd96daf1b9730d95" role="tab">JS</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show" id="mdb_4271daa4bf64e1be191f12b2ff06c81f" role="tabpanel"><div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-html" data-editor="false"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>file-upload-wrapper<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>file<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>input-file-now-custom-2<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>file-upload<span class="token punctuation">"</span></span>
  <span class="token attr-name">data-height</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>500<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span><span></span></span></code></pre><div class="toolbar"><div class="toolbar-item"><button class="btn-copy-code btn btn-outline-grey btn-sm px-2 waves-effect"><i class="fa fa-copy mr-1"></i> Copy code</button></div></div></div></div><div class="tab-pane fade " id="mdb_f7158e104cda653edd96daf1b9730d95" role="tabpanel"><div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-javascript" data-editor="false"><code class=" language-javascript"><span class="token function">$</span><span class="token punctuation">(</span><span class="token string">'.file_upload'</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">file_upload</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span><span aria-hidden="true" class="line-numbers-rows"><span></span></span></code></pre><div class="toolbar"><div class="toolbar-item"><button class="btn-copy-code btn btn-outline-grey btn-sm px-2 waves-effect"><i class="fa fa-copy mr-1"></i> Copy code</button></div></div></div></div></div></div><!-- /.mdbsnippet -->
                                            <!--/Code-->

                                        </section>
                                        <!--/Section: Intro-->

                                    </section>

                                    <hr class="mt-4 mb-5">

                                    <section class="mx-1" id="disabled">

                                        <!--Title-->
                                        <h2 class="section-heading mb-4">
                                            Disable
                                        </h2>

                                        <p>You can disabled the input</p>

                                        <!--Live preview-->
                                        <section>
                                            <div class="file-upload-wrapper">
                                                <div class="card card-body view file-upload disabled"><div class="card-text file-upload-message"><i class="fas fa-cloud-upload-alt"></i><p>Drag and drop a file here or click</p><p class="file-upload-error">Ooops, something wrong happended.</p></div><div class="mask rgba-stylish-slight"></div><div class="file-upload-errors-container"><ul></ul></div><input type="file" id="input-file-now-disabled-2" class="file_upload" disabled="disabled"><div class="file-upload-preview"><span class="file-upload-render"></span><div class="file-upload-infos"><div class="file-upload-infos-inner"><p class="file-upload-filename"><span class="file-upload-filename-inner"></span></p><p class="file-upload-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                            </div>
                                            <!--Code-->
                                            <!-- mdbsnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#mdb_508f08e149571b72ef8c0f0c798e6fa2" role="tab">HTML</a></li><li class="nav-item"><a class="nav-link " data-toggle="tab" href="#mdb_b562fd468f8ab90c958a37553f19fccb" role="tab">JS</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show" id="mdb_508f08e149571b72ef8c0f0c798e6fa2" role="tabpanel"><div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-html" data-editor="false"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>file-upload-wrapper<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>file<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>input-file-now-disabled-2<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>file-upload<span class="token punctuation">"</span></span> <span class="token attr-name">disabled</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>disabled<span class="token punctuation">"</span></span> <span class="token attr-name">data-default-file</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>https://mdbootstrap.com/img/Others/documentation/1.jpg<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></pre><div class="toolbar"><div class="toolbar-item"><button class="btn-copy-code btn btn-outline-grey btn-sm px-2 waves-effect"><i class="fa fa-copy mr-1"></i> Copy code</button></div></div></div></div><div class="tab-pane fade " id="mdb_b562fd468f8ab90c958a37553f19fccb" role="tabpanel"><div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-javascript" data-editor="false"><code class=" language-javascript"><span class="token function">$</span><span class="token punctuation">(</span><span class="token string">'.file_upload'</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">file_upload</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span><span aria-hidden="true" class="line-numbers-rows"><span></span></span></code></pre><div class="toolbar"><div class="toolbar-item"><button class="btn-copy-code btn btn-outline-grey btn-sm px-2 waves-effect"><i class="fa fa-copy mr-1"></i> Copy code</button></div></div></div></div></div></div><!-- /.mdbsnippet -->
                                            <!--/Code-->

                                        </section>
                                        <!--/Section: Intro-->

                                    </section>

                                    <hr class="mt-4 mb-5">

                                    <section class="mx-1" id="max-size">

                                        <!--Title-->
                                        <h2 class="section-heading mb-4">
                                            Max size
                                        </h2>

                                        <p>You can add a max file size</p>

                                        <!--Live preview-->
                                        <section>
                                            <div class="file-upload-wrapper">
                                                <div class="card card-body view file-upload"><div class="card-text file-upload-message"><i class="fas fa-cloud-upload-alt"></i><p>Drag and drop a file here or click</p><p class="file-upload-error">Ooops, something wrong happended.</p></div><div class="mask rgba-stylish-slight"></div><div class="file-upload-errors-container"><ul></ul></div><input type="file" id="input-file-max-fs" class="file_upload" data-max-file-size="2M"><button type="button" class="btn btn-sm btn-danger">Remove<i class="far fa-trash-alt ml-1"></i></button><div class="file-upload-preview"><span class="file-upload-render"></span><div class="file-upload-infos"><div class="file-upload-infos-inner"><p class="file-upload-filename"><span class="file-upload-filename-inner"></span></p><p class="file-upload-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                            </div>
                                            <!--Code-->
                                            <!-- mdbsnippet --><div class="docs-pills">  <div class="d-flex justify-content-between">    <ul class="nav md-pills pills-grey"><li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#mdb_0d9b06b87fe9d6809470b4f0182fb306" role="tab">HTML</a></li><li class="nav-item"><a class="nav-link " data-toggle="tab" href="#mdb_f79247cfe2fa764d558643c853624655" role="tab">JS</a></li></ul></div><div class="tab-content"><div class="tab-pane fade active show" id="mdb_0d9b06b87fe9d6809470b4f0182fb306" role="tabpanel"><div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-html" data-editor="false"><code class=" language-html"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>file-upload-wrapper<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>file<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>input-file-max-fs<span class="token punctuation">"</span></span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>file-upload<span class="token punctuation">"</span></span> <span class="token attr-name">data-max-file-size</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>2M<span class="token punctuation">"</span></span> <span class="token punctuation">/&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span><span aria-hidden="true" class="line-numbers-rows"><span></span><span></span><span></span></span></code></pre><div class="toolbar"><div class="toolbar-item"><button class="btn-copy-code btn btn-outline-grey btn-sm px-2 waves-effect"><i class="fa fa-copy mr-1"></i> Copy code</button></div></div></div></div><div class="tab-pane fade " id="mdb_f79247cfe2fa764d558643c853624655" role="tabpanel"><div class="code-toolbar"><pre class="grey lighten-3 px-3 mb-0 line-numbers  language-javascript" data-editor="false"><code class=" language-javascript"><span class="token function">$</span><span class="token punctuation">(</span><span class="token string">'.file_upload'</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">file_upload</span><span class="token punctuation">(</span><span class="token punctuation">)</span><span class="token punctuation">;</span><span aria-hidden="true" class="line-numbers-rows"><span></span></span></code></pre><div class="toolbar"><div class="toolbar-item"><button class="btn-copy-code btn btn-outline-grey btn-sm px-2 waves-effect"><i class="fa fa-copy mr-1"></i> Copy code</button></div></div></div></div></div></div><!-- /.mdbsnippet -->
                                            <!--/Code-->

                                        </section>
                                        <!--/Section: Intro-->

                                    </section>
                                </section>
                                <!--Section: Docs content-->

                            </section></div>
                        <!--Grid column: Content-->


                        <!--Grid column: Scrollspy-->
                        <div class="col-md-2">

                            <!-- Sticky content -->
                            <div class="sticky" style="position: fixed; top: 90px; width: 157.125px; height: 138px; z-index: 2;">

                                <!--Scrollspy-->
                                <div id="scrollspy">

                                    <!-- Links -->
                                    <ul class="nav nav-pills default-pills smooth-scroll" data-allow-hashes="">
                                        <li class="nav-item"><a class="nav-link active" href="#introduction">Introduction</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#basic-example">Basic example</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#default-value">Default value</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#height">Custom height</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#disabled">Disable</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#max-size">Max size</a></li>
                                    </ul>
                                    <!-- Links -->

                                </div>
                                <!--Scrollspy-->

                            </div><div class="sticky-placeholder" style="width: 157.125px; height: 138px;"></div>
                            <!-- Sticky content -->

                        </div>
                        <!--Grid column: Scrollspy-->

                    </div>
                    <!--Grid row-->

                </div>
                <!--/.Overview-->
                <!--API-->
                <div class="tab-pane fade mt-4 pt-2" id="docsTabsAPI" role="tabpanel">

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column: Content-->
                        <div class="col-lg-10 col-md-12">

                            <!--Section: Docs content-->
                            <section class="documentation">
                                <!--Section: Intro-->
                                <section id="a-introduction">

                                    <!--Title-->
                                    <h2 class="section-heading">Drag and drop file upload - getting started : download &amp; setup</h2>

                                </section>
                                <!--/Section: Intro-->

                                <hr class="my-5">

                                <!--Section: -->
                                <section id="a-download">

                                    <!--Title-->
                                    <h2 class="section-heading mb-4">
                                        Download
                                    </h2>

                                    <blockquote class="blockquote bq-primary">
                                        <p class="bq-title">This plugin requires a purchase.</p>
                                        <a class="btn btn-unique waves-effect waves-light" href="https://mdbootstrap.com/products/jquery-file-upload/" role="button">Buy Drag and
                                            drop file upload plugin - $9</a>
                                    </blockquote>

                                </section>
                                <!--/Section: -->

                                <hr class="my-5">

                                <!--Section: -->
                                <section id="a-tutorial">

                                    <!--Title-->
                                    <h2 class="section-heading mb-4">
                                        Tutorial
                                    </h2>

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-6 mb-4">

                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Q1hw1bIwKfI" allowfullscreen=""></iframe>
                                            </div>

                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                </section>
                                <!--/Section: -->                            </section>
                            <!--Section: Docs content-->

                        </div>
                        <!--Grid column: Content-->

                        <!--Grid column: Scrollspy-->
                        <div class="col-md-2">

                            <!-- Sticky content -->
                            <div class="sticky2">

                                <!--Scrollspy-->
                                <div id="scrollspy">

                                    <!-- Links -->
                                    <ul class="nav nav-pills default-pills smooth-scroll" data-allow-hashes="">
                                        <li class="nav-item"><a class="nav-link" href="#a-introduction">Introduction</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#a-download">Download</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#a-mdb-pro">Tutorial</a></li>                                    </ul>
                                    <!-- Links -->

                                </div>
                                <!--Scrollspy-->

                            </div>
                            <!-- Sticky content -->

                        </div>
                        <!--Grid column: Scrollspy-->

                    </div>
                    <!--Grid row-->

                </div>
                <!--/.API-->
            </div>
            <!--/.Examples-->
        </div>

    </div>
    <!-- Main docs tabs -->



</main>


<!--Footer-->
<footer id="footer" class="page-footer unique-color-dark mt-4">
    <div class="info-color-dark text-center py-4">
        <!--Newsletter-->
        <a id="footer-link-newsletter" href="/docs/jquery/newsletter/" class="border rounded p-2 px-3 mr-4 d-none d-md-inline-block">Newsletter
            <i class="fas fa-envelope white-text ml-2"> </i>
        </a>
        <!--Newsletter-->
        <a id="footer-link-affiliate" href="/mdb-affiliate-program/" class="border rounded p-2 px-3 mr-4 d-none d-md-inline-block">Affiliate program
            <i class="fas fa-money-bill-alt white-text ml-2"> </i>
        </a>
        <!--Contact-->
        <a id="footer-link-contact" href="/contact" data-toggle="modal" data-target="#contactForm" class="border rounded p-2 px-3 mr-4 d-none d-md-inline-block">Contact
            <i class="fas fa-envelope white-text ml-2"> </i>
        </a>
        <!--GitHub-->
        <a rel="nofollow" target="_blank" id="footer-link-github" href="https://github.com/mdbootstrap/bootstrap-material-design">
            <i class="fab fa-github white-text mr-4"> </i>
        </a>
        <!--Youtube-->
        <a rel="nofollow" target="_blank" id="footer-link-youtube" href="https://www.youtube.com/watch?v=cXTThxoywNQ">
            <i class="fab fa-youtube white-text mr-4"> </i>
        </a>
        <!--Facebook-->
        <a rel="nofollow" target="_blank" id="footer-link-facebook" href="https://www.facebook.com/mdbootstrap">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
        </a>
        <!--Twitter-->
        <a rel="nofollow" target="_blank" id="footer-link-twitter" href="https://twitter.com/MDBootstrap">
            <i class="fab fa-twitter white-text"> </i>
        </a>
    </div>
    <!--Footer Links-->
    <div class="container text-center text-md-left mt-5">
        <div class="row mt-3">
            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Useful links</strong>
                </h6>
                <hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a id="footer-link-faq" href="/docs/jquery/getting-started/faq/">Frequently Asked Questions</a>
                </p>
                <p>
                    <a id="footer-link-browsers" href="/general/browsers-and-devices/">Browsers and devices</a>
                </p>
                <p>
                    <a id="footer-link-license" href="/general/license/">License</a>
                </p>
                <p>
                    <a id="footer-link-changelog" href="/docs/jquery/changelog/">ChangeLog</a>
                </p>
                <p>
                    <a id="footer-link-policy" href="/general/privacy-policy/">Privacy Policy</a>
                </p>
                <p>
                    <a id="footer-link-refund" href="/general/return-refund-policy/">Return/Refund policy</a>
                </p>
                <p>
                    <a id="footer-link-students" href="/general/mdb-academy/">Students and universities</a>
                </p>
            </div>
            <!--/.First column-->
            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Resources</strong>
                </h6>
                <hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a id="footer-link-jquery" href="/docs/jquery/">MDB jQuery</a>
                </p>
                <p>
                    <a id="footer-link-angular" href="/docs/angular/">MDB Angular</a>
                </p>
                <p>
                    <a id="footer-link-react" href="/docs/react/">MDB React</a>
                </p>
                <p>
                    <a id="footer-link-vue" href="/docs/vue/">MDB Vue</a>
                </p>
                <p>
                    <a id="footer-link-brandflow" href="/education/tech-marketing/automated-app-introduction/">MDB BrandFlow</a>
                </p>
                <p>
                    <a id="footer-link-freebies" href="/freebies/">Free templates</a>
                </p>
                <p>
                    <a id="footer-link-templates" href="/templates/">Premium templates</a>
                </p>
            </div>
            <!--/.Second column-->
            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Free tutorials</strong>
                </h6>
                <hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a id="footer-link-tutBootstrap" href="/education/bootstrap/">Bootstrap &amp; web design</a>
                </p>
                <p>
                    <a id="footer-link-tutWordpress" href="/education/wordpress/">WordPress</a>
                </p>
                <p>
                    <a id="footer-link-tutAngular" href="/education/angular/">Angular</a>
                </p>
                <p>
                    <a id="footer-link-tutAutomation" href="/education/tech-marketing/automated-app-introduction/">Automation</a>
                </p>
                <p>
                    <a id="footer-link-tutWebpush" href="/education/tech-marketing/web-push-introduction/">Web Push Notifications</a>
                </p>
                <p>
                    <a id="footer-link-tutGulp" href="/education/bootstrap/gulp-installation/">Gulp &amp; customization</a>
                </p>
                <p>
                    <a id="footer-link-tutWebpack" href="/mdbootstrap-webpack-tutorial/">Webpack</a>
                </p>
                <!-- <p>
                      <a href="#!">E-mail software</a>
                    </p>
                    <p>
                      <a href="#!">Web Hosting</a>
                    </p>
                    <p>
                      <a href="#!">Bootstrap editor</a>
                    </p> -->
            </div>
            <!--/.Third column-->
            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Company</strong>
                </h6>
                <hr class="info-color mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fas fa-envelope mr-3"></i> contact@mdbootstrap.com</p>
                <!-- <p>
                      <i class="fas fa-building mr-3"></i> Our story</p> -->
                <p>
                    <a id="footer-link-team" href="/general/our-team/">
                        <i class="fas fa-users mr-3"></i> Our team</a>
                </p>
                <p>
                    <a id="footer-link-company" href="/general/contact/">
                        <i class="fas fa-bullhorn mr-3"></i> Company data</a>
                </p>
                <p>
                    <a id="footer-link-formedia" href="/general/press-pack/">
                        <i class="fas fa-bullhorn mr-3"></i> For media</a>
                </p>
            </div>
            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->
    <!-- Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2019 Copyright:
        <a href="https://www.MDBootstrap.com">
            <strong> MDBootstrap.com</strong>
        </a>
    </div>
    <!--/.Copyright -->
</footer>
<!--/.Footer-->

<style>

    main input[type=email]:focus,
    main input[type=password]:focus,
    main input[type=text]:focus,
    main input[type=url]:focus,
    main textarea:focus {
        border: 0;
    }
</style>

<!-- Contact Form -->
<div class="modal fade" id="contactForm" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content px-3">
            <div class="modal-header border border-dark p-2 my-3 d-flex justify-content-center">
                <p class="font-weight-bold p-3 mb-0">For technical questions use our <a target="_blank" href="https://mdbootstrap.com/support/">Support Forum</a></p>
            </div>
            <div class="col-12 text-center">

                <iframe width="100%" height="100%" src="https://mdbootstrap.agilecrm.com/forms/5712893068705792" frameborder="0" hidden="" style="display: none !important;"></iframe>
                <!--<div id="mdbootstrap_5712893068705792" class="agile_crm_form_embed">
                <span style="display:none">Fill out my <a href="https://mdbootstrap.agilecrm.com/forms/5712893068705792">online form</a>
                </span>
                </div>-->
            </div>
        </div>
    </div>
</div>
<!--/. Contact Form -->

<!-- Modal: modalSnippetSettings -->
<div class="modal fade" id="modalSnippetSettings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <!-- Modal content -->
        <div class="modal-content">

            <div id="snippets-settings-preloader" class="checkout-preloader-container d-none">
                <div class="preloader-wrapper big active">
                    <div class="spinner-layer spinner-blue-only">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal header -->
            <div class="modal-header">
                <h5 class="modal-title" id="settings-modal">Snippet settings</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!--Name-->
                        <div class="select-wrapper mdb-select colorful-select dropdown-primary"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-4c0de4a1-6d34-4a31-9cd7-41fd62781ebb" value=""><ul id="select-options-4c0de4a1-6d34-4a31-9cd7-41fd62781ebb" class="dropdown-content select-dropdown w-100"><li class="disabled active"><span class="filtrable">MDB Technology</span></li></ul><select class="mdb-select colorful-select dropdown-primary initialized" id="snippet-package-technology">
                                <option value="" disabled="">MDB Technology</option>
                            </select></div>

                        <!--Name-->
                        <div class="select-wrapper mdb-select colorful-select dropdown-primary"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-7e90ab88-aa38-418c-a5bf-afbb62d7e947" value=""><ul id="select-options-7e90ab88-aa38-418c-a5bf-afbb62d7e947" class="dropdown-content select-dropdown w-100"><li class="disabled active"><span class="filtrable">MDB Version</span></li></ul><select class="mdb-select colorful-select dropdown-primary initialized" id="snippet-package-version">
                                <option value="" disabled="">MDB Version</option>
                            </select></div>

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-7 mb-4">

                                <!--Name-->
                                <div class="select-wrapper mdb-select colorful-select dropdown-primary"><span class="caret">▼</span><input type="text" class="select-dropdown" readonly="true" data-activates="select-options-d6c7bf00-4306-41c0-adb8-66770cedd580" value=""><ul id="select-options-d6c7bf00-4306-41c0-adb8-66770cedd580" class="dropdown-content select-dropdown w-100"><li class="disabled active"><span class="filtrable">Type</span></li></ul><select class="mdb-select colorful-select dropdown-primary initialized" id="snippet-package-type">
                                        <option value="" disabled="">Type</option>
                                    </select></div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-5 mb-4">

                                <a role="button" href="/product/material-design-for-bootstrap-pro/" class="btn btn-info btn-md waves-effect waves-light" target="_blank">Go Pro</a>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <div class="switch mb-2">
                            <label>
                                Public
                                <input id="snippet-status" type="checkbox">
                                <span class="lever"></span> Private
                            </label>
                        </div>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!-- Snippet title -->
                        <input type="text" class="form-control mb-3" id="snippet-title" placeholder="Snippet title">

                        <!-- Snippet description -->
                        <div class="form-group">
                            <textarea class="form-control" id="snippet-description" rows="5" placeholder="Snippet description"></textarea>
                        </div>

                        <!-- Snippet tags -->
                        <div class="chips chips-initial mb-0"></div>
                        <span id="tags-invalid-feedback" class="small red-text d-none">You can add max. 10 tags with min. length of 2 each</span>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-elegant waves-effect waves-light" data-dismiss="modal">Close</button>
                <a role="button" class="btn btn-info waves-effect waves-light" id="save-snippet-settings" data-action="" data-user-nicename="new">Save</a>
            </div>
        </div>
        <!-- Modal content -->
    </div>
</div>
<!-- Modal: modalSnippetSettings -->

<!-- Modal: modalOpenSnippet -->
<div class="modal fade" id="modalOpenSnippet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div id="open-modal-preloader" class="checkout-preloader-container d-none">
                <div class="preloader-wrapper big active">
                    <div class="spinner-layer spinner-blue-only">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Open snippet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">Your snippet is ready. Click to open</p>
            </div>
            <div class="modal-footer m-auto">
                <a type="button" class="btn btn-primary open-snippet waves-effect waves-light" target="_blank">Open</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal: modalOpenSnippet -->

<div id="dom-target-fb" style="display: none;">
</div>
<div id="dom-target-tw" style="display: none;">
</div>
<div id="dom-target-gp" style="display: none;">
</div>

<!-- Compiled JS -->

<!--BrandFlow for WordPress loading script-->

<script>

    (function(){




        var scripts = ["/static/general/bf-core.min.js", "/static/containers/NLX453.js", "/static/general/push-init-code.js"];






        for(var i = 0; i < scripts.length; i++) {

            var script   = document.createElement("script");

            script.src   = "//brandflow.net" + scripts[i] + "?ts=" + Date.now() + "#";

            script.async = false;

            document.head.appendChild(script);

        }



    })();

</script>

<!--/.BrandFlow for WordPress loading script-->

<link rel="stylesheet" id="woocommerce-currency-switcher-css" href="https://mdbootstrap.com/wp-content/plugins/woocommerce-currency-switcher/css/front.css?ver=5.0.3" type="text/css" media="all">
<script type="text/javascript">
    /* <![CDATA[ */
    var wpcf7 = {"apiSettings":{"root":"https:\/\/mdbootstrap.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
    /* ]]> */
</script>
<script type="text/javascript">
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type="text/javascript">
    /* <![CDATA[ */
    var mailchimp_public_data = {"site_url":"https:\/\/mdbootstrap.com","ajax_url":"https:\/\/mdbootstrap.com\/wp-admin\/admin-ajax.php"};
    /* ]]> */
</script>
<script type="text/javascript">
    /* <![CDATA[ */
    var example_ajax_obj = {"ajaxurl":"https:\/\/mdbootstrap.com\/wp-admin\/admin-ajax.php"};
    /* ]]> */
</script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-admin/load-scripts.php?c=gzip&amp;load%5B%5D=wp-embed,jquery-ui-core,jquery-ui-widget,jquery-ui-mouse,jquery-ui-slider&amp;ver=5.0.3"></script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/4.7.4/compiled.0.min.js?ver=4.7.4"></script><div class="hiddendiv common"></div>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/footer-functions.js?ver=4.7.4"></script><div class="drag-target" style="left: 0px;"></div>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.1"></script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70"></script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4"></script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.5.4"></script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/plugins/mailchimp-for-woocommerce/public/js/mailchimp-woocommerce-public.min.js?ver=2.1.12"></script>
<script type="text/javascript" src="https://chimpstatic.com/mcjs-connected/js/users/461480655ccce528d909d3f42/05e1abaa17c4f479182ad3147.js?ver=2.1.12"></script><script src="//www.googleadservices.com/pagead/conversion_async.js" type="text/javascript"></script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/snippets-behavior.js?ver=4.7.1-update.6"></script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/pages-rates.js?ver=4.7.4"></script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/plugins/woocommerce/assets/js/jquery-ui-touch-punch/jquery-ui-touch-punch.min.js?ver=3.5.4"></script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/plugins/woocommerce-currency-switcher/js/price-slider_33.js?ver=5.0.3"></script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/plugins/woocommerce-currency-switcher/js/jquery.ddslick.min.js?ver=5.0.3"></script>
<script type="text/javascript" src="https://mdbootstrap.com/wp-content/plugins/woocommerce-currency-switcher/js/front.js?ver=5.0.3"></script>
<script id="_agile_min_js" type="text/javascript" src="https://mdbootstrap.agilecrm.com/stats/min/agile-min.js"> </script><script> if(typeof _agile != "undefined") { _agile.set_account("rvnkji5gd7c5c74136umt99rcv","mdbootstrap");_agile.track_page_view() } </script>
<script>


</script>

<script src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/plugins/mdb-file-upload.min.js"></script>
<script>$('.file_upload').file_upload();</script>


<!-- Structured data: Breadcrumbs -->
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@id": "https://mdbootstrap.com/",
        "name": "MDBootstrap",
        "image": "https://mdbootstrap.com/img/Marketing/mdb-press-pack/mdb-main.jpg"
      }
    }, {
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@id": "https://mdbootstrap.com/plugins/",
        "name": "MD Bootstrap Plugins",
        "image": "https://mdbootstrap.com/wp-content/uploads/2018/11/mdb-jquery-free.jpg"
      }
    }, {
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@id": "https://mdbootstrap.com/plugins/jquery/",
        "name": "MD Bootstrap Plugins jQuery",
        "image": "https://mdbootstrap.com/img/Marketing/docs/social/main-addons.jpg"
      }
    }, {
      "@type": "ListItem",
      "position": 4,
      "item": {
        "@id": "https://mdbootstrap.com/plugins/jquery/file-upload/",
        "name": "MD Bootstrap File upload plugin",
        "image": "https://mdbootstrap.com/wp-content/uploads/2018/10/plugin-fileupload-jquery-1.jpg"
      }
    }]
  }

</script>


<!-- Structured data: Article -->

<script>
    $(function () {
        $(".sticky").sticky({
            topSpacing: 90
            , zIndex: 2
            , stopper: "#footer"
        });
        $('a[href="#docsTabsAPI"]').on('shown.bs.tab', function (e) {

            $(".sticky2").sticky({
                topSpacing: 90
                , zIndex: 2
                , stopper: "#footer"
            });

        });
        $('a[href="#docsTabsExamples"]').on('shown.bs.tab', function (e) {

            $(".sticky3").sticky({
                topSpacing: 90
                , zIndex: 2
                , stopper: "#footer"
            });

        });
    });
</script>
<!-- Agile CRM API
<script id="_agile_min_js" async type="text/javascript" src="https://mdbootstrap.agilecrm.com/stats/min/agile-min.js"> </script>
<script type="text/javascript" >
var Agile_API = Agile_API || {}; Agile_API.on_after_load = function(){
_agile.set_account('8tsva545o547r732truup1icmg', 'mdbootstrap', false);
_agile.track_page_view();
_agile_execute_web_rules();};
</script>
Agile CRM API-->





</body></html>