<?php include('server2.php') ?>
<?php
$username=$_SESSION['username'];
$query2 = "SELECT * FROM buyer WHERE username='$username'";
     $result2=$db->query($query2);
    if($result2->num_rows>0){
    
    while($row=$result2->fetch_assoc())
    {  
       $email=$row['email'];
       $image=$row['image'];
    }
 }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./css/index.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<style>
body {
    background-color: tomato;
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background-color: tomato;
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background-color: black;
}

.profile-button:focus {
    background: black;
    box-shadow: none;
}

.profile-button:active {
    background: black;
    box-shadow: none
}

.back:hover {
    color: black;
    cursor: pointer
}

.labels {
    font-size: 16px;
}

.container{
    background-color: mistyrose;
    box-shadow: 30px 30px 35px black;
}
.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>
</head>
<body>
<div class="container rounded mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" height="150px" src="<?php echo $image; ?>"><span class="font-weight-bold"><?php echo $_SESSION['username']; ?></span><span class="text-black-50"><?php echo $email; ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right"><b>Profile Settings</b></h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels"><b>Name</b></label>
                    <p><?php echo $username; ?></p></div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels"><b>Email</b></label>
                        <p><?php echo $email; ?></p></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><button class="btn btn-primary profile-button" type="button" onclick="myfunc()" ><b>Edit Profile</b></button></div>
                    <div class="col-md-6"><button class="btn btn-primary profile-button" type="button" onclick="goBack()"><b>Go Home</b></button></div>
                </div>     
                
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>


 <script>
function goBack() {
  window.location.href ="buyer_logged-in.php";
}
</script>

<script>
    function myfunc() {
      window.location.href ="buyer_edit_profile.php";
    }
</script> 