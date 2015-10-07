<!DOCTYPE html>
<html>
    <head>
        @yield('head')

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
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                @yield('content')
                <nav class="nav-container group" id="nav-footer">
                    <div class="nav-wrap">
                        <ul class="nav container group">
                            <li class="menu-item">
                                <a href="/" rel="nofollow" target="_blank">Welcom To Lin Blog</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </body>
</html>
