<?php require_once('../../../private/initialize.php'); ?>
<?php $page_title = 'Subjects';?>
<?php include(SHARED_PATH.'/staff_header.php'); ?>
<?php
  $str =  '       {"id":"001","lat":"36.81154","lng":"-119.74882","title":"Emergency Phone - P 31 Northwest","dist":-1,"description":"<div id=\"infobubble\"><h3>Emergency Phone - P 31 (Lot D)<\/h3><br \/>Lot D, Northwest<\/div>"},
  {"id":"688",
  "lat":"36.81344",
  "lng":"-119.74857",
  "title":"Silk Oak",
  "dist":-1,"description":"<div id=\"infobubble\"><div id=\"img\"><img style=\"width: 70px;height:90px;\" src=\"https:\/\/lh6.googleusercontent.com\/gfvP0HtpuTIGx2saXx09ICBWo1jsAQ8kwfE6g6XvQ4V764BSSzlFOQ=w2400\" alt=\"1_Silk Oak\"><\/div><div id=\"desc\"><h3>Silk Oak<\/h3><h4>Grevillea robusta<\/h4><h4>H50-75\', W25-30\' <\/h4><br \/><h4>Evergreen.  Native to Australia.  Conical when young; crown broadens with age.  Fernlike leaves are dark green with pale undersides.  Large clusters of deep orange flowers in May.<\/h4><\/div><\/div>"
    }
  ';
        echo ($str);
        $arr = json_decode($str);
        echo gettype($arr);
      //  print_r($arr[0]["title"]);

        ?>

    <div id="content">
      <div class="subjects listing">
        <h1>Trees Page</h1>
        <div class="actions">
        <a class="action" href="">Create New Subject</a>
        </div>
        <table class="list">
          <tr>
            <th>ID</th>
          //refer to foreach function in 2(1)
        </tr>
    </div>
<?php include(SHARED_PATH.'/staff_footer.php'); ?>
