<?php

require_once "php/class/Database.php";

$conn = new Database();



if(isset($_POST['btnRegister'])){
    
      $conn->add_account($_POST);

}else if(!isset($_POST['btnLogin'])){ 
    
        $_POST = array(
            "txtFirstName" => "",
            "txtMiddleName" => "",
            "txtLastName" => "",
            "txtEmail" => "",
            "txtPassword" => "",
            "txtConfirmPassword" => ""
        );

}

if(isset($_POST['btnLogin'])){
    
    
}

echo "<pre>";
print_r($_POST);
echo "</pre>";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Pagsanjan Academy | Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css?<php echo time(); ?>">
</head>
<body>
    <div class="container">
       <?php require_once "php/page/navigation.php"; ?>
        <div class="row main-section">
            <div class="col-lg-7 register-background">
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Create Account</h2>
                    </div>
                    <div class="card-body">
                        <form method="post">
           
                              <div class="form-group">
                                 <input type="text" name="txtFirstName" placeholder="First Name" class="form-control form-control-lg" value="<?php echo $_POST['txtFirstName'] ?>">
                              </div>


                              <div class="form-group">
                                <input type="text" name="txtMiddleName" placeholder="Middle Name" class="form-control form-control-lg" value="<?php echo $_POST['txtMiddleName'] ?>">
                            </div>


                           <div class="form-group">
                                <input type="text" name="txtLastName" placeholder="Last Name" class="form-control form-control-lg" value="<?php echo $_POST['txtLastName'] ?>">
                            </div>

                         
                           
                            <div class="form-group">
                                <input type="email" name="txtEmail" placeholder="Email" class="form-control form-control-lg" value="<?php echo $_POST['txtEmail'] ?>">
                            </div>

                              
                            <div class="form-group">
                                <input type="password" name="txtPassword" placeholder="Password" class="form-control form-control-lg" value="<?php echo $_POST['txtPassword'] ?>">
                            </div>



                            <div class="form-group">
                                <input type="password" name="txtConfirmPassword" placeholder="Confirm Password" class="form-control form-control-lg" value="<?php echo $_POST['txtConfirmPassword'] ?>">
                            </div>

                            
                            <button class="btn btn-danger btn-block btn-lg" name="btnRegister">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php require_once "php/page/extra.php"; ?>
        <?php require_once "php/page/footer.php"; ?>
        
    </div>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>