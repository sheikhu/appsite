<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Admin')</title>
    {{ HTML::style('freelancer/css/bootstrap.css') }}
    {{ HTML::style('admin/bootswatch.css') }}
    {{ HTML::style('admin/datepicker.css') }}
    
</head>
<body>

    <div class="container">
        @yield('content')
    </div>
    
    {{ HTML::script('freelancer/js/jquery-1.10.2.js') }}
    {{ HTML::script('freelancer/js/bootstrap.min.js') }}
    {{ HTML::script('admin/datepicker.js') }}

    <script type="text/javascript">
    $(function(){
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
        });
    });
    </script>
</body>
</html>