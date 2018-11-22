<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>


<!-- Navigation -->

<?php  include "includes/navigation.php"; ?>



<!-- Page Content -->

<!--
    <br>
<br> <div class="container">
<div class="row">
    <div class="col-sm-6">
        <form action="" method="post">
            <div class="form-group">
                <label for="username">username</label>
                
            </div>            
            <div class="form-group">
                <label for="user_password">user_password</label>
                <input type="text" name="user_password" class="form-control">
            </div>            
            <div class="form-group">
                <label for="user_firstname">user_firstname</label>
                <input type="text" name="user_firstname" class="form-control">
            </div>             
            <div class="form-group">
                <label for="user_lastname">user_lastname</label>
                <input type="text" name="user_lastname" class="form-control">
            </div>            
            <div class="form-group">
                <label for="user_email">user_email</label>
                <input type="text" name="user_email" class="form-control">
            </div>            
            <div class="form-group">
                <label for="user_image">user_image</label>
                <input type="text" name="user_image" class="form-control">
            </div>            
            <div class="form-group">
                <label for="user_role">user_role</label>
                <input type="text" name="user_role" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="insert" class="btn btn-primary" value="Зарегистрироваться">
            </div>
        </form>
        <hr>
    </div>
</div>
-->

<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                    <h1>Register</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">


                        <div class="form-group">
                            <label for="username">username</label>
                            <input type="text" name="username" class="form-control" placeholder="username">
                        </div>
                        <div class="form-group">
                            <label for="user_password">user_password</label>
                            <input type="text" name="user_password" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group">
                            <label for="user_firstname">user_firstname</label>
                            <input type="text" name="user_firstname" class="form-control" placeholder="firstname">
                        </div>
                        <div class="form-group">
                            <label for="user_lastname">user_lastname</label>
                            <input type="text" name="user_lastname" class="form-control" placeholder="lastname">
                        </div>
                        <div class="form-group">
                            <label for="user_email">user_email</label>
                            <input type="text" name="user_email" class="form-control" placeholder="test@mail.ru">
                        </div>
                        <!--                        <div class="form-group">
                             <label for="user_image">user_image</label>
                             <input type="text" name="user_image" class="form-control" placeholder=".img">
                        </div>-->
                        <div class="form-group">
                            <label for="">avatar</label>
                            <input type="file" name="user_image" class="form-control">
                        </div>
                        <input type="submit" name="insert" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Зарегистрироваться">
                    </form>

                </div>
            </div>
            <!-- /.col-xs-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>


<hr>

<?php

if(isset($_POST['insert'])){

    $username =$_POST['username'];
    $user_password =$_POST['user_password'];
    $user_firstname =$_POST['user_firstname'];
    $user_lastname =$_POST['user_lastname'];
    $user_email =$_POST['user_email'];
    $uimage_name = $_FILES['user_image']['name']; // для записи в БД
    $uimage_tmp = $_FILES['user_image']['tmp_name']; // для записи на диск
    $file = $_FILES['user_image'];
        $dir_u = '/uploads/';
        if(!file_exists($dir_u)){    
            mkdir($dir_u, 0777);
        }
        $file_uname = $dir_u.'/'.$file['name'];
        move_uploaded_file($file['tmp_name'], $file_uname);

/*    $sql = "INSERT INTO users(username,user_password,user_firstname,user_lastname,user_email,user_image,user_role) VALUES ('$username', '$user_password', '$user_firstname', '$user_lastname' '$user_email', '1', '1')"; */   
    $sql = "INSERT INTO users(username,user_password, user_firstname,user_lastname,user_email,user_image,user_role,randSalt) VALUES ('$username', '$user_password', '$user_firstname', '$user_lastname','$user_email','$uimage_name','1','$2y$10')";
    
    $result = mysqli_query($connection, $sql);
    if(!$result) {
        die('Ошибка' . mysqli_error());
    
    }
}


?>

    <?php include "includes/footer.php";?>
