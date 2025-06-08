 <title>TemplateMela Store</title>
 <link rel="dns-prefetch preconnect" href="https://cdn11.bigcommerce.com/s-24232" crossorigin>
 <link rel="dns-prefetch preconnect" href="https://fonts.googleapis.com/" crossorigin>
 <link rel="dns-prefetch preconnect" href="https://fonts.gstatic.com/" crossorigin>
 <meta name="description" content="admin@gmail.com">
 <link rel='canonical' href='index.html' />
 <meta name='platform' content='bigcommerce.stencil' />



 <link href="{{ asset('assets/user/img/s-24232/product_images/default_favicon.ico') }}" rel="shortcut icon">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 <script>
     document.documentElement.className = document.documentElement.className.replace('no-js', 'js');
 </script>

 <script>
     function browserSupportsAllFeatures() {
         return window.Promise &&
             window.fetch &&
             window.URL &&
             window.URLSearchParams &&
             window.WeakMap
             // object-fit support
             &&
             ('objectFit' in document.documentElement.style);
     }

     function loadScript(src) {
         var js = document.createElement('script');
         js.src = src;
         js.onerror = function() {
             console.error('Failed to load polyfill script ' + src);
         };
         document.head.appendChild(js);
     }

     if (!browserSupportsAllFeatures()) {
         loadScript('{{ asset("assets/user/js/theme-bundle.polyfills.js") }}');
     }
 </script>

 <script>
     window.lazySizesConfig = window.lazySizesConfig || {};
     window.lazySizesConfig.loadMode = 1;
 </script>
 <script async src="{{ asset('assets/user/js/theme-bundle.head_async.js') }}"></script>

 <link href="https://fonts.googleapis.com/css?family=Montserrat:400,300%7CKarla:400%7CPoppins:400&amp;display=swap"
     rel="stylesheet">
 <link data-stencil-stylesheet href="{{ asset('assets/user/css/theme.css') }}" rel="stylesheet">

 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800,900" rel="stylesheet" async>
 <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" rel="stylesheet" async>
 <link href="{{ asset('assets/user/css/font-awesome.min.css') }}" rel="stylesheet">
 <link href="{{ asset('assets/user/css/custom.css') }}" rel="stylesheet">

 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

 <script type="text/javascript">
     var BCData = {};
 </script>