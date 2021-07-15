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
               
                <div class="card-body">
                    <h2 class="title">USER Details</h2>
                    <form method="POST"  action="registered">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="USER NAME" name="name_english" required="required">
                        </div>
					
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="FIRST NAME" name="firstname" required="required">
                        </div>


                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Last Name" name="lastname" required="required">
                        </div>

                        
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="DOB" name="dob" required="required">
                        </div>

                        
                      
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Mobile No." name="mobile_no" maxlength="10" >
                        </div>	

						
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Email" name="email" >
                        </div>

                        
						
						<div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="address">
                        </div>
						
						

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Password" name="password" required="required">
                        </div>
						
                        
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Pincode" name="pincode" required="required">
                        </div>

                        
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Status" name="status" required="required">
                        </div>
						
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="Submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
	</body>
	

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>