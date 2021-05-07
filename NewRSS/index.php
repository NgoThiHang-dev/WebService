<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Reader</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="wp-content">
        <?php
            include ('layout/header.php');           
        ?>
        <div id="content">
            <form method="post" action="">
                <input type="text" name="feedurl" placeholder="Nhập URL của RSS">&nbsp;
                <input type="submit" value="Lấy tin" name="submit">
            </form>
            <?php
        $url = "https://vnexpress.net/rss/tin-moi-nhat.rss";
        //nếu form được gửi thì đọc giá trị texbox nếu nó k trống và gán trong $url
        if(isset($_POST['submit'])){
          if($_POST['feedurl'] != ''){
            $url = $_POST['feedurl'];
          }
        }
       //gán $url thông qua phương thức @simplexml_load_file
        $invalidurl = false;
        //nếu xml đọc thành công bằng cách sử dụng phương thức simplexml_load_file thì gán giá trị trả về trong $feed
        if(@simplexml_load_file($url)){
         $feeds = simplexml_load_file($url);
         //nếu k thì gán true cho $invalidurl
        }else{
         $invalidurl = true;
         echo "<h2>Invalid RSS feed URL.</h2>";
        }

        //hiển thị các giá trị đối tượng phần tử XML đơn giản nếu URL hợp lệ
        // echo "<pre>";
        // print_r($feeds);
        // die;

        //đọc giá trị từ $feeds nếu nó không trống
        $i=0;
        
        if(!empty($feeds)){

        $site = $feeds->channel->title;
        $sitelink = $feeds->channel->link;

        echo "<h1>".$site."</h1>";
        $item=0;
        $stt=1;
      foreach ($feeds->channel->item as $item) {
        $title = $item->title;
        $link = $item->link;
        $description = $item->description;
      if($i>=5) break;
      
    
      ?>
            <div class="post">
                <div class="post-head">
                    <h2>
                        <a class="feed_title" href="<?php echo $link; ?>"><?php echo $stt." - ".$title; ?>
                        </a>
                    </h2>
                </div>
                <!-- <div class="post-content">
                    <?php
                        // $array=explode(' ', $description);
                        // $array[0] .= 'target="_blank"';
                        // $array[1] .= 'class="item-img"';
                        // $description=implode(" ", $array);
                        // echo $description;
                    ?>
                </div> -->

            </div>
              
            <?php
            
       $i++;
       $stt++;
      }
      
    }else{
      if(!$invalidurl){
        echo "<h2>No item found</h2>";
      }
     
    }
    
      ?>
        </div>
    </div>


</body>

</html>