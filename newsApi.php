<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href ="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@@,400;1,500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
.container{
  margin-top:0px;
  width:75%;
}
.title{
  margin-top:0px;
  margin-bottom: 20px;
  color: white;
}
.single-news{
  background-color:white;
  padding:30px;
  margin-bottom:20px;
  margin-top:20px;
  border-radius: 20px;
}

body {
    background: black
}

.news {
    width: 160px
}

.news-scroll a {
    text-decoration: none
}

.dot {
    height: 6px;
    width: 6px;
    margin-left: 3px;
    margin-right: 3px;
    margin-top: 2px !important;
    background-color: rgb(207, 23, 23);
    border-radius: 50%;
    display: inline-block
}

</style>
		<div class="container mt-2">
		<div class="row">
		<div class="col-md-12">
		<div class="d-flex justify-content-between align-items-center breaking-news bg-white">
		<div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news"><span class="d-flex align-items-center">&nbsp;BREAKING</span></div>
		<marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
    <?php
      if(file_exists('news.json')){
        $api_urlBreak = 'news.json';
        $newslistBreak = json_decode(file_get_contents($api_urlBreak));
      }else{
        $api_urlBreak = 'https://www.bharian.com.my/api/articles?page_size=10';
        $newslistBreak = file_get_contents($api_urlBreak);
        file_put_contents('news.json', $newslistBreak);
        $newslistBreak = json_decode($newslistBreak);
      }
		
		$count = 0;
        $end = 1;
		
      foreach($newslistBreak as $newsBreak)
	  {?>
			<?php $count++; echo $newsBreak->title; ?>
	  
    <?php }	 
	?></marquee>
		</div>
		</div>
		</div>
		</div>
		

<div class="container">
  <h1 class="title text-center"><i>SHAN News</i></h1>
  <hr>
  <div class="list-wrapper">
    <?php
      if(file_exists('news.json')){
        $api_url = 'news.json';
        $newslist = json_decode(file_get_contents($api_url));
      }else{
        $api_url = 'https://www.bharian.com.my/api/articles?page_size=10';
        $newslist = file_get_contents($api_url);
        file_put_contents('news.json', $newslist);
        $newslist = json_decode($newslist);
      }
      foreach($newslist as $news){?>
      <div class="row single-news">
        <div class="col-4">
          <img style="width:100%;" src="<?php echo $news->field_image_listing_featured_v2;?>">
        </div>
        <div class="col-8">
          <h2><?php echo $news->title;?></h2>
          <p><?php echo $news->field_article_lead;?></p>
          <a href="<?php echo $news->url;?>" class="btn btn-sm btn-primary" style="float:right;" target="_blank">Read More >></a>
        </div>
      </div>
    <?php } ?>
  </div>
</div>