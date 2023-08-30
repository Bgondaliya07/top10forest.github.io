<!DOCTYPE html>
<html lang="en">
<head>
    <title>CONTACTS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">  
<link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>  

<?php include 'menu.php'; ?>

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center">Contact Us :)</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Mobile No.</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control" name="comments"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>
<div class="text-center">
<button onclick="history.back()" class="btn btn-success">Go Back</button>
</div>
<br>
<br>
<br>

<?php include 'footer.php'; ?>


    <script src="https://cdn.jsdelivr.net/npm/jquery@4.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>