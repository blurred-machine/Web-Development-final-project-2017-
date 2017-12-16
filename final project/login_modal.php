<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style type="text/css">
	

</style>
</head>
<body>


<!-- MODAL -->
<div class="modal fade" id="pz" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">LOG IN</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="logi.php">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <button class="btn btn-primary" type="submit" value="submit"  name="button">Login</button>

                </form>
            </div>
            <div class="modal-footer">
                <p>New User? <a href="signup.php">Sign Up</a></p>
            </div>
        </div>
        
    </div>
</div>
<!-- MODAL ENDS -->

</body>
</html>