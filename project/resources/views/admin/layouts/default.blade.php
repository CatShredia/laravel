<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    @vite([
        "resources/css/admin/adminlte.css",
        "resources/js/admin/adminlte.js",
    ])
    <script>
        window.onload = function () {
            setTimeout(() => {
                if (window.$) {
                    console.log("jQuery (через $ ) существует!");
                } else {
                    console.error("С jQuery что-то не так!");
                }
            }, 500); // Задержка 500 мс (настройте при необходимости)
        };
    </script>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- ./wrapper -->
    @yield('content');

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
</body>

</html>
