<?php
include('connect.php');
$id = @$_GET['id'];
if(!$id){
    echo 'No ID';
    exit;
}
$list = @$_GET['list'];
if(!$list){
    $query = mysqli_query($con,"SELECT * FROM data_movie2 WHERE id= $id");
    $result = mysqli_fetch_array($query);
}else{
    $query = mysqli_query($con,"SELECT * FROM data_list2 WHERE main_id= $id and part = $list");
    $result = mysqli_fetch_array($query);
    $num_list = mysqli_num_rows(mysqli_query($con,"SELECT * FROM data_list2 WHERE main_id= $id "));
   
}


?>

<html>
<head>
<title><?=$result['name']?></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="style0.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
</head>
<body>
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
      </div>
    </nav>
        <!--<form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="ค้นหา" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหา</button>
        </form>-->
      </div>
    </nav>
    <!---****-->





<div class="album py-5 bg-info" style="background-image: url('<?=$result['img']?>');background-size:100%;">
    <div class="container">
<?php
if(!$list){
?>
         <!--------movie---------->
      <nav aria-label="breadcrumb " >
        <ol class="breadcrumb" style="background-color:darkorange;">
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
              <div class="card shadow-sm text-center " style="background-color:darkorange;"><h3>Player</h3></div>        
          <div class="card mb-4 shadow-sm">
          <iframe width="100%" height="600" src="https://feurl.com/v/<?=$result['vdo_main']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
        </div>
        <!-------movie end----------->
<?php 
}else{
?>
 <!--------movie list---------->
 <nav aria-label="breadcrumb" >
        <ol class="breadcrumb" style = "background-color: #FFA500">
          <li class="breadcrumb-item"><a href="./">หน้าเเรก</a></li>
          <li class="breadcrumb-item"><a href="./list1.php?id=<?=$id?>">ดูตอนถัดไป<?=$result['name']?></a></li>
          <li class="breadcrumb-item active" aria-current="page"><?=$result['name']?></li>
        </ol>
      </nav>  

      <div class="row">
              <div class="col-md-12">
            <div class="card mb-4 shadow-sm text-center" style = "background-color: #FF3333	">ตอนที่<?=$result['part']?></div>       
          <div class="card mb-4 shadow-sm">
          <iframe width="100%" height="600" src="https://feurl.com/v/<?=$result['vdo']?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
              </div>
        </div>

        <div class="row">


            <div class="col-md-4">
            <a class="btn mb-4 shadow-sm text-center <?php if($list <= 1){echo "disabled"; } ?>"style ="background-color: #FF3333; padding:5px; width:100%;" href="play1.php?id=<?=$id?>&list=<?=$list-1?>"><h5 style="margin: 0">ตอนก่อนหน้า</h5></a>       
            </div>
            <div class="col-md-4">
            <a class="btn mb-4 shadow-sm text-center"style ="background-color: #FF3333; padding:5px; width:100%;" href="./list1.php?id=<?=$id?>"><h5 style="margin: 0">ดูตอนอื่นๆ</h5></a>       
            </div>
            <div class="col-md-4">
            <a class="btn mb-4 shadow-sm text-center <?php if($list >= $num_list){echo "disabled"; } ?>"style ="background-color: #FF3333; padding:5px; width:100%;" href="play1.php?id=<?=$id?>&list=<?=$list+1?>"><h5 style="margin: 0">ตอนถัดไป</h5></a>       
            </div>
        </div>
     
        

        
        <!-------movie list end----------->
<?php }?>                 
</div>
</div>
</body>
</html>