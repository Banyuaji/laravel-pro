<!DOCTYPE html>
<html lang="en">

@include('template.parsial.header')
<body>
    <div class="uk-offcanvas-content">
        @include('template.parsial.navbar')
        @include('template.parsial.content')
        @include('template.parsial.footer')
    </div>
    <script src="scripts/script.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyClyjCemJi4m2q78gNeGkhlckpdH1hzTYA&amp;callback=initMap"
        async defer></script>
</body>

</html>
