<!DOCTYPE html>
<html lang="ja">
<head>
    <title>@yield('title')</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" itemprop="description" content="@yield('description')">
    <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('pageCss')
</head>
<body>
    <div id="app"></div>
    <script type="application/javascript">
        const vars = @json($scriptVars);
        Object.freeze(vars)
        window.VARS = vars
    </script>
    <script src="@yield('scriptPath')"></script>
</body>
</html>
