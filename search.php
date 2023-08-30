<?php
    include 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>RESULT</title>
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
<br>
<br>
<h2 class="text-center">Result</h2>
<br>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
            <img class="card-img-top" src="Amazon rainforest/Amazon/Amazon_CIAT.jpg" alt="Card image">
            <div class="card-body" style="text-align: center;">
                <?php
                        if (isset($_POST['submit-search'])) 
                        {
                            $search = mysqli_real_escape_string($conn, $_POST['search']);
                            $sql = "SELECT * FROM article WHERE a_title LIKE '%$search%' OR a_text LIKE '%$search%'";
                            $result = mysqli_query($conn, $sql);
                            $queryResult = mysqli_num_rows($result);

                            if ($queryResult > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<div>
                                        <h4 class='card-title'>".$row['a_title']."</h4>            
                                        <p class='card-text'>".$row['a_text']."</p>
                                        </div>";
                                }
                            } else {
                                echo "There are not results matching your search :(";
                            }
                        }
                    ?>
                    <br>
                    <a href="amazon gallery.php" class="btn btn-primary">Gallery</a>
            </div>
            </div>
        </div>
    </div>
</div>

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