<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Công Ty Ô Tô Bảo Ngọc</title>
     <link rel="icon" href="image/ico/logo.ico" type="image/x-icon" />
    <base href="{{asset('')}}">

    <link href="style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="style/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

 
    <link href="style/dist/css/sb-admin-2.css" rel="stylesheet">


    <link href="style/vendor/morrisjs/morris.css" rel="stylesheet">

    <link href="style/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
           
            
          

           @include('admin.layoutadmin.menuad')


           @yield('noidung')
            <!-- /.navbar-static-side -->
        </nav>

       
       

    </div>
   
    <script src="style/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="style/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="style/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="style/vendor/raphael/raphael.min.js"></script>
    <script src="style/vendor/morrisjs/morris.min.js"></script>
    <script src="style/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="style/dist/js/sb-admin-2.js"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script> CKEDITOR.replace('editor1'); </script>

</body>

</html>



