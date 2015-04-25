<html>
<head>
    @include("layout.header")
    @yield("headerAdditional")
</head>
<body>
<div class="content-wrapper" style="font-family: 'Open Sans', sans-serif; font-weight: 300;">
    @yield("contentSect")
</div>
<footer>
    @include("layout.footer")
    @yield("footerAdditional")
</footer>
</body>
</html>