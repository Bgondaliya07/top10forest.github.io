<?php
    include 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ABOUT</title>
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


<?php
    $title = mysqli_real_escape_string($conn, $_GET['title']);
    $text = mysqli_real_escape_string($conn, $_GET['text']);
    $sql = "SELECT * FROM article WHERE a_title='$title' AND a_text='$text'";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if ($queryResults > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "  <div class='container-fluid'>
                        <div class='row'>
                        <div class='col-lg-4 col-md-4 col-12'>
                        <div class='img-fluid pb-4'>
                    <h3>".$row['a_title']."</h3>
                    <p>".$row['a_text']."</p>
                        </div>
                        </div>
                        </div>
                    </div>";
                    }
                }
?>

<br>
<br>
<br>
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


