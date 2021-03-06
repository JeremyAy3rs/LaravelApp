<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Easy Lodging</title>
        <!-- 1. Load libraries -->
 
 <script src="es6-shim/es6-shim.min.js"></script>
 <script src="/systemjs/dist/system-polyfills.js"></script>
 
  <script src="angular2/bundles/angular2-polyfills.js"></script>
  <script src="systemjs/dist/system.src.js"></script>
  <script src="rxjs/bundles/Rx.js"></script>
  <script src="angular2/bundles/angular2.dev.js"></script>
 
  <!-- 2. Configure SystemJS -->
  <script>
    System.config({
      "defaultJSExtensions": true,
      packages: {
        app: {
          format: 'register',
          defaultExtension: 'js'
        }
      }
    });
 
 
    System.import('app/boot')
          .then(null, console.error.bind(console));
  </script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 60px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Welcome to Easy Lodging</div>
                <p>Where everyone has a place to stay... </p>
                <my-app>Loading...</my-app>
            </div>
        </div>
    </body>
</html>
