<?php 
include('FeedParser.php'); 
$Parser 	= new FeedParser();

$Parser->parse('http://www.sitepoint.com/rss.php');

$channels  	= $Parser->getChannels();     
$items     	= $Parser->getItems();        
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Testing the PHP Universal Feed Parser</title>
	<style type="text/css">
	body{
		padding: 0px;
		margin: 50px 150px;
		border: 1px solid #ddd;
		font-family: verdana, arial;
	}
	
	h1#title {
		background-color: #eee;
		border-bottom : 1px solid #ddd;
		margin: 0px 0px 15px;
		padding:10px;
		text-align: center;
	}
	h1#title a{
		font-size: 18px;
	}
	
	p, a{
		padding: 5px;
		margin: 5px;
		font-size: 12px;
	}
	p#description{
		font-size: 13px;
		font-weight: bold;
	}
	
	p.feed-description{
		border-bottom : 1px solid #ddd;
	}
	
	p#info{
		background-color:#EDF001;
		color: 1px solid #f6afab;
		padding: 5px;
		text-align: center;
		color: #444;
	}
	</style>
</head>
<body>
	<h1 id="title"><a href="<?php echo $channels['LINK']; ?>"><?php echo $channels['TITLE']; ?></a></h1>
	<p id="description"><?php echo $channels['DESCRIPTION']; ?> </p>
	
	<?php foreach($items as $item): ?>
		<a class="feed-title" href="<?php echo $item['LINK']; ?>"><?php echo $item['TITLE']; ?></a>
		<p class="feed-description"><?php echo $item['DESCRIPTION']; ?></p>
	<?php endforeach;?>
	
	<p id='info'>
		This page is an example of using 
		<a href="http://www.ajaxray.com/blog/2008/05/02/php-universal-feed-parser-lightweight-php-class-for-parsing-rss-and-atom-feeds/">
			PHP Universal Feed Parser
		</a>.
	</p>
</body>
</html>
