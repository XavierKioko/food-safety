<!DOCTYPE html>
<html>
<head>
	<title>KFAMILY</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	 <form method="post"  id="quickForm">


<?php  

      
    session_start();
    $con = mysqli_connect("localhost","root","","submit");


    if(isset($_POST['submit'])){
        
        $title = $_POST['title'];
        
        $name = $_POST['name'];
        
        $email = $_POST['email'];
        
        $phone = $_POST['phone'];

        $institution = $_POST['institution'];
        
        
          
         $get_users = "SELECT * FROM submissions WHERE email ='".$_POST['email']."'";
        
                    $run_users = mysqli_query($con,$get_users);
                    $count_users = mysqli_num_rows($run_users);
                    if(mysqli_num_rows($run_users)>0)
    {
        echo '<div class="alert alert-danger role="alert" style="text-align: center" col-12">This email is already registered</div>';
    }
    else {
        
         $insert_user = "insert into submissions (title,name,email,phone,institution) values ('$title','$name','$email','$phone','$institution')";
        
        $run_user = mysqli_query($con,$insert_user);
        
         echo '<div class="alert alert-success" role="alert" style="text-align: center" col-12">Registration successful
</div>';
        
    }

          
    }

?>

	<div class="card card-success" >
              <div class="card-header col-12" style="text-align: center;">
                <h4 class="card-title">KFAMILY</h4>
                  <p>Registration form</p>
              </div>
          
	<div class="row " style="margin: 30px">
		
            
             
              <div class="col-md-6">
                   <div class="form-group col-md-12">
                        <p>Title *</p>
                        <select class="form-control select2bs4" name="title" required="">
                        <option value=""></option>
                         <option value="Male"> Mr </option>
                        <option value="Female">Mrs</option>
                        <option value="Female">Miss</option>
                        </select>
                     
                 
                </div>
                 <div class="form-group">
                      <p>Name *</p>
                    <input class="form-control select2bs4" name="name" required>
                 
                </div>
                <!-- /.form-group -->
              
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
              
                  <div class="form-group">
                 
                  <p>Email *</p>
                    <input class="form-control select2bs4" type="email" name="email" required>
                 
                </div>  
                  <div class="form-group">
                  <p>Phone Number *</p>
                    <input class="form-control select2bs4" name="phone" required>
                 
                </div>
                
              </div>
                 <div class="form-group col-md-12">
                  <p>Institution </p>
                    <input class="form-control select2bs4"name="institution">
                 
                </div>
             
                <div style="margin-top: 10px">
              	<button type="submit" name="submit" class="btn btn-success">Submit</button>
              	
              </div>
                
              </div>  
              </div>  
              

               </form>
	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>