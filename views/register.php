<?php
/**
 * Created by PhpStorm.
 * User: juanm
 * Date: 15/01/2017
 * Time: 19:25
 */?>
<?php
/**
 * Created by PhpStorm.
 * User: juanm
 * Date: 15/01/2017
 * Time: 17:51
 */?>
<!Doctype html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <h1>Login</h1>

            <hr/>

            <form id="registerform" name="registerform" class="form-horizontal" action="/register" method="post">
                <div class="form-group">
                    <label for="firstname" class="col-sm-2 control-label">First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control required" id="firstname" name="firstname" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">Last Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control required" id="lastname" name="lastname" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control required email" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="emailconfirm" class="col-sm-2 control-label">Email Confirmation</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control required email" id="emailconfirm" name="emailconfirm" placeholder="Email Confirmation">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control required" id="password" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="passwordconfirm" class="col-sm-2 control-label">Password Confirmation</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control required" id="passwordconfirm" name="passwordconfirm" placeholder="Password Confirmation">
                    </div>
                </div>
                <hr/>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.js"></script>
<script>
   $(document).ready(function(){
      $("#registerform").validate({
          rules:{
              "emailconfirm":{
                  required:true,
                  email:true,
                  equalTo:"#email"
              },
              "passwordconfirm":{
                  required:true,
                  equalTo:"#password"
              }
          }
      });
   });
</script>
</html>
