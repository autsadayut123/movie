
<?php
session_start();
if(isset($_SESSION['userlogig'])){
    header("location: index.php");
}

include('connect.php');
$num_rows = mysqli_num_rows(mysqli_query($con, "SELECT * FROM data_movie"));
$limit_page = 8;
if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}

$num_page = $num_rows/$limit_page;
if(!($num_page ==(int)$num_page))
  $num_page = (int)$num_page + 1;
  if($page > $num_page)
    $page = $num_page;
$limit_start = ($page*$limit_page)-$limit_page
?>
<html>
<head>
<title>Movie</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="style0.css">
<link rel="stylesheet" href= "node_modules\bootstrap\dist\css\bootstrap.min.css">
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
        <form class="form-inline my-2 my-lg-0">
          <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="login1.php">เข้าสู่ระบบ</a>

        </form>
      </div>
    </nav>
    <!----------------------------------------->
  




    <div class="album py-5 " style="background-color: 	#2F4F4F;">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style= "background-color:lightgreen">
          <li class="breadcrumb-item"><a href="./">หน้าเเรก</a></li>
          <li class="breadcrumb-item active" aria-current="page">ล่าสุด</li>
        </ol>
      </nav>  
      <div class="row" > 
      <?php    
      $query = mysqli_query($con,"SELECT * FROM data_movie ORDER BY id DESC LIMIT $limit_start,$limit_page");
      while($result = mysqli_fetch_array($query)){
      ?>
      <!--เชคหนังหรือซีรี่-->
        <div class="col-md-3" >
          <div class="card mb-4 shadow-sm" style= "background-color:lightgreen">
          <a href="<?php if($result['status_list'] == 'YES'){?>list<?php }else{?>play<?php }?>.php?id=<?=$result['id']?>">
            <img src="<?=$result['img']?>" while=100% height="380" class="card-img-top">
            <div class="card-body">
            <p class="card-text text-center" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis;"><?=$result['name']?></p>
                </div>
                </a>
              </div>
            </div>
            
      <?php } ?>

          </div>
          <nav aria-label="..." >
  <ul class="pagination justify-content-center" >

  <!------------------------------------------------------------------------------->                

  <?php
          if($page <=1){
          ?>
            <li class="page-item disabled" >
              <span class="page-link">ก่อนหน้า</span>
            </li>
          <?php
          }else{
          ?>
              <li class="page-item " >
              <a class="page-link" href="?page=<?=$page-1?>">ก่อนหน้า</a>
            </li>
          <?php
          }
          ?>


<!------------------------------------------------------------------------------->         

          <?php
          if($page >5){
          ?>
          <li class="page-item " >
          <a class="page-link" href="?=$page-1>">1</a>
          </li>
          <li class="page-item disabled " >
          <a class="page-link">...</a>
          </li>
          <?php
          }
          ?>


<!------------------------------------------------------------------------------->   

<?php

if($num_page >=9){
if($page <= 5){
  $num_start = 1;
  $num_stop = 9;
}elseif($page > $num_page-4){
  $num_start = $num_page-8;
  $num_stop = $num_page;
}else{
  $num_start = $page-4;
  $num_stop = $page+4;
}
}else{
  $num_start =1;
  $num_stop = $num_page;
}
for($i=$num_start;$i<=$num_stop;$i++){
  if($page == $i)
  {
?>
                <li class="page-item active" aria-current="page">
                <span class="page-link"><?=$i?><span class="sr-only">(current)</span></span>
                </li>
            <?php
            }else{
            ?>
                <li class="page-item"><a class="page-link" href="?page=<?=$i?>"><?=$i?></a></li>
            <?php
            }
            }
            ?>


<!------------------------------------------------------------------------------->   

            <?php
            if($page < $num_page-4){
              ?>
              <li class="page-item disabled ">
              <a class="page-link">..</a>
              </li>
              <li class="page-item ">
              <a class="page-link" href="?page=<?=$num_page?>>"><?=$num_page?></a>  
            <?php
            }
            ?>

<!------------------------------------------------------------------------------->

          <?php
          if($page >=$num_page){
          ?>
            <li class="page-item disabled" >
            <span class="page-link">ถัดไป</span>
            </li>
          <?php
          }else{
          ?>
              <li class="page-item " >
              <a class="page-link" href="?page=<?=$page+1?>">ถัดไป</a>
              </li>
          <?php
          }
          ?>
    
  <!---->
  </ul>

</div>
</div>
</div>
</nav>
</body>
</html>