
<?php
//include './config/config.php';
session_start();

if (!isset($_SESSION['access_token'])) {
    header('Location:index.php');
}
?>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/profile.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="css/profile.css" rel="stylesheet">
<!--<script src="js/profile.js">-->
<div class="container">
    <div class="row">
        <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
            <br>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >


            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Sheena Shrestha</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="<?php echo $_SESSION['picture']; ?>" class="img-circle img-responsive"> </div>

                        <div class=" col-md-9 col-lg-9 "> 
                            <table class="table table-user-information">
                                <tbody>
                                    <tr>
                                        <td>Email:</td>
                                        <td><?php echo $_SESSION['email']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>gender:</td>
                                        <td><?php echo $_SESSION['gender']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>SurName:</td>
                                        <td><?php echo $_SESSION['familyName']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td>Name:</td>
                                        <td><?php echo $_SESSION['givenName']; ?> </td>
                                    </tr>
                                </tbody>
                            </table>

                            <a href="#" class="btn btn-primary">My Sales Performance</a>
                            <a href="#" class="btn btn-primary">Team Sales Performance</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>