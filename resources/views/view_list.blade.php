@include('pages.header')



<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <meta content="text/html; charset=UTF-8; X-Content-Type-Options=nosniff" http-equiv="Content-Type" />
    <meta http-equiv="X-Frame-Options" content="DENY">
    <? header('X-Frame-Options:SAMEORIGIN');?>
    <meta content="text/html; charset=UTF-8; X-Content-Type-Options=nosniff" http-equiv="Content-Type" />
    <? header("X-Content-Type-Options: nosniff"); ?>
    <? header('Content-type: text/html; charset=UTF-8'); ?> 
    <? header('X-XSS-Protection: 1; mode=block'); ?> 

    <? header('X-Frame-Options:SAMEORIGIN');?>
    <meta content="text/html; charset=UTF-8; X-Content-Type-Options=nosniff" http-equiv="Content-Type" />
    <? header("X-Content-Type-Options: nosniff"); ?>
    <? header('Content-type: text/html; charset=UTF-8'); ?> 
    <? header('X-XSS-Protection: 1; mode=block'); ?>
    <? @ini_set("session.cookie_secure", 0); ?>

    <!-- Title Page-->
    <title>My Project</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link href="css/style.css" rel="stylesheet" media="all">

   <script src="js/validate.js"></script>

</head>










<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">.
            <div class="card card-1">
               
     <form id="frm_submit" name="frm_submit" method="POST" action="view_list.php">            

                <div class="card-body">
                 
                     <h2 class="title">View Main List</h2>
                      
                    
                    <table>
                         <tr>
                            <th><b>CD</b></th>
                            <th><b>Name</b></th>
                            
                            <th><b>Email</b></th>
                 
                            <th><b>Mobile</b></th>
                           
                            <th><b>Action</b></th>

                        </tr>
                    @foreach($registration as $m )
                        <tr>
                        <th>{{$m['id']}}</th>
                            <th>{{$m['name_english']}}</th>
                            
                            <th>{{$m['email']}}</th>
                          
                            <th>{{$m['mobile_no']}}</th>

                           
                            
                            <th>

                            <a href={{"edit/".$m['id']}}> EDIT</a>

                          
                            <a href={{"delete/".$m['id']}}>
                                DEL </a></th>
                            
                        </tr>
                        @endforeach
                     
                    </table>

                 

                </div>






</form>





            </div>
        </div>
    </div>


    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script>    
function deletedata(id)
    {       
        var x = confirm("Are you sure you want to delete?");    
        var url = 'http://einvitationuk.co/deletedata.php?id='+id;
        if (x)
        {    
            $.ajax({
               url: url,
               type: "POST",
               success: function (response) { 
                if(response==1)
                {   
                    alert("Data Deleted Successfully");
                    location.href="http://einvitationuk.co/view_list.php";
                }
                else
                {
                    alert("Data Not Deleted");
                }
              
               }
            });
        }
        else
        {
            alert("Data Not Deleted");
        }
    }
</script>


