<?php
include('connect.php');
$id = @$_GET['id'];
if(!$id){
    echo 'No ID';
    exit;
}

$query = mysqli_query($con,"SELECT * FROM data_movie2 WHERE id= $id");
$result = mysqli_fetch_array($query);

$query_list = mysqli_query($con,"SELECT * FROM data_list2 WHERE main_id= $id");
?>
<html>
<head>
<title><?=$result['name']?></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="style1.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body style= "background: black ">
    <!--nav-->
    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: darkorange;">
      <a class="navbar-brand" href="./">Movie trailer</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="./">หน้าแรก<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
                  <a class="nav-link" href="./index1.php">หนังภาคต่อ/การ์ตูนเดอะมูฟวี่</a>
                </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
      </div>
    </nav>
    <!---****-->





<div class="album py-5 "  style="background-color: 	#2F4F4F;">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">หน้าเเรก</a></li>
          <li class="breadcrumb-item active" aria-current="page"><?=$result['name']?></li>
        </ol>
      </nav>  
      <div class="row">
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <img src="<?=$result['img']?>" while=100% height="380" class="card-img-top"/>
              </div>
            </div>
        <div class="col-md-9">
          <div class="card mb-4 shadow-sm">
          <iframe width="100%" height="380" src="https://www.youtube.com/embed/<?=$result['vdo_ex']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
              <div class="col-md-12">
            <div class="card  shadow-sm text-center">PLAY</div>       
          <div class="card mb-4 shadow-sm">
          <div class="list-group">
              <?php
              while($result_list = mysqli_fetch_array($query_list))
              {
                echo '<a type="button" class="list-group-item list-group-item-action" href="play1.php?id='.$id.'&list='.$result_list['part'].'">'.$result_list['name'].'ตอนที่ '.$result_list['part'].'</a>';
              }
              ?>
                </div>
                </div>
              </div>
        


</body>
</html>