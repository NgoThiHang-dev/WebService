<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RSS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
      <img src="bn.png" alt="image">
    </div>
    <div class="content">
        <form method="post" action="">
            <input type="text" name="feedurl" placeholder="Nhập URL của RSS">&nbsp;
            <input type="submit" value="Lấy tin" name="submit">
        </form>
        <?php
        $url = "https://vnexpress.net/rss/du-lich.rss";
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
      foreach ($feeds->channel->item as $item) {
        $title = $item->title;
        $link = $item->link;
        $description = $item->description;
        $postDate = $item->pubDate;
        $pubDate = date('D, d M Y',strtotime($postDate));
      if($i>=5) break;
      ?>
        <div class="post">
            <div class="post-head">
                <h2>
                    <a class="feed_title" href="<?php echo $link; ?>"><?php echo $title; ?>
                    </a>
                </h2>
                <span><?php echo $pubDate; ?></span>
            </div>
            <div class="post-content">
                <?php echo implode(' ', array_slice(explode(' ', $description), 0, 20)) . "..."; ?> <a
                    href="<?php echo $link; ?>">Read more</a>
            </div>
            <!-- <?php
                $array=explode(' ', $description);
                $array[0] .= 'target="_blank"';
                $array[1] .= 'class="item-img"';
                $description=implode(" ", $array);
                echo $description;
            ?> -->
        </div>

        <?php
       $i++;
      }
    }else{
      if(!$invalidurl){
        echo "<h2>No item found</h2>";
      }
    }
      ?>
    </div>
</body>

</html>