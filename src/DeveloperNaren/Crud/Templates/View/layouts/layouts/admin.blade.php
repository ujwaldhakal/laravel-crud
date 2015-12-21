<html>
<head>
    <title>
            Crud
    </title>
    <link rel="stylesheet" href="<?php echo asset('assets/css/bootstrap.min.css');?>"/>
    <link rel="stylesheet" href="<?php echo asset('assets/css/jquery.dataTables.css');?>"/>
    <link rel="stylesheet" href="<?php echo asset('assets/css/style.css');?>"/>
</head>
<body>
<div class="container-fluid">
@section('content')
    @show
    </div>
<footer>
    <script type="text/javascript" src="<?php echo asset('assets/js/jquery-1.11.3.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo asset('assets/js/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo asset('assets/js/jquery.dataTables.js');?>"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#dataTable').DataTable( {

            } );
        } );

    </script>
</footer>
</body>
</html>
