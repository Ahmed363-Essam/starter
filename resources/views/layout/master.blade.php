<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>template js</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Normaliz.css">
    <link rel="stylesheet" href="{{URL('css/style.css')}}">

</head>
<body>
    <!-- start setting box -->
    <div class="setting-box">
        <div class="toggle-setting">
            <i class="fa fa-cog" aria-hidden="true"></i>
        </div>
        <div class="setting-container">
            <div class="option-box">
                <h3>colors</h3>
                <ul class="color-list">
                    <li class="active" data-color="#8BC34A"></li>
                    <li data-color="#1DA1F2"></li>
                    <li data-color="#ffeb3b"></li>
                    <li data-color="#009688"></li>
                    <li data-color="#9c27b0"></li>
                </ul>
            </div>
            
            <div class="option-box">
                <h4>Random Background</h4>
                <div class="Random Background">
                <span class="yes  active" data-background="yes">yes</span> 
                <span class="no" data-background="no">No</span> 
            </div>
            </div>

        </div>
    </div>
    <!-- start nav bullets -->

    @yield('content');



    <script src="{{URL::asset('index.js')}}"></script>
</body>
</html>