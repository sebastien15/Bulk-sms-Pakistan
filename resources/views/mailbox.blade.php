<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Mailbox</title>
        @include('partials/headerAttachmnents')    

    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        
        @include('partials/index/header')

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            
            @include('partials/index/leftSide')

            <!-- Right side column. Contains the navbar and content of the page -->
            
            @include('partials/mailbox/rightSide')
        </div><!-- ./wrapper -->

        <!-- COMPOSE MESSAGE MODAL -->
        
        @include('partials/mailbox/messageCompose')

        <!-- jQuery 2.0.2 -->
        @include('partials/attachments')
        

    </body>
</html>