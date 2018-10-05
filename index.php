<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Live Add Edit Delete Datatables Records using PHP Ajax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <style>
    body{
        margin:0;
        padding:0;
        background-color:#f1f1f1;
    }
    .box {
        width:1270px;
        padding:20px;
        background-color:#fff;
        border:1px solid #ccc;
        margin-top:25px;
        box-sizing:border-box;
    }
    </style>
    <div class="container box">
        <h1 align="center">Live add Edit Delete Datatable Records using PHP and Ajax</h1>
        <br>
        <div class="table-responsive">
        <div align="right"></div>
        <br>
        <table id="user_data" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th></th>
                </tr>
            </thead>
        </table>
        </div>
    </div>
    <script type="text/javascript" language="javascript">
    
    $(document).ready(function(){
        fetch_data();
        function fetch_data() {
            var dataTable = $('#user_data').DataTable({
                "processing" : true,
                "serverSide" : true,
                "order"  : [],
                "ajax" : {
                    url : "fetch.php",
                    type: "POST"
                }
            })
        }
    });
    
    </script>
</body>
</html>