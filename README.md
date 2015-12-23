#PHP Universal Feed Parser – lightweight PHP class for parsing RSS and ATOM feeds.

After the PHP Universal Feed Generator, I’ve written the PHP Universal Feed Parser for Orchid Framework. It’s a RSS and ATOM parser written in PHP5. Though there are many feed parsers over Internet, none of those was serving the basic focuses of Orchid: pure object orientation, being lightweight etc. So, I had to write a new one.

UPDATE(15th May, 2008) : cURL support added. Where url fopen() is disabled, the class will use cURL to load the RSS/ATOM content.

##Features:

Parses all channels and feed item tags and sub tags.
Serve the parsed data as associative array.
Enough documented and easy to understand code.
Many ways to get parsed information.
Parsing includes attributes too.
No regular expression used.
Parsed by XML Parser extension of PHP.
Pure PHP5 objected oriented.
Enable to parse all commonly used feed versions.
Supported versions: I tried to include all stable and commonly used feed versions. Currently it’s being used to parse the following versions:

RSS 1.0
RSS 2.0
ATOM 1.0

##Download: 

[Click Here](http://www.ajaxray.com/blog/downloads/feedparser) to get the class file with example.

##How to use:

It’s dead simple to use this class. Just follow this 3 steps:

1- Include the file

    include(‘FeedParser.php’);

2- Create an object of FeedParser class

    $Parser = new FeedParser();

3- Parse the URL you want to featch

    $Parser->parse(‘http://www.sitepoint.com/rss.php’);

Done.

Now you can use this functions to get various information of parsed feed:

$Parser->getChannels() – To get all channel elements as array
$Parser->getItems() – To get all feed elements as array
$Parser->getChannel($name) – To get a channel element by name
$Parser->getItem($index) – To get a feed element as array by it’s index
$Parser->getTotalItems() – To get the number of total feed elements
$Parser->getFeedVersion() – To get the detected version of parsed feed
$Parser->getParsedUrl() – To get the parsed feed URL

## A simple example:

Here is a simple example of using this Feed Parser class. Click here to see is the output of this example.

    <span style="color: #0000ff;">&lt;?</span><span style="color: #800000;">php</span>
    <span style="color: #ff0000;">include</span>(<span style="color: #0000ff;">'FeedParser.php'</span>);
    $<span style="color: #ff0000;">Parser</span>     = <span style="color: #ff0000;">new</span> <span style="color: #ff0000;">FeedParser</span>();
    $<span style="color: #ff0000;">Parser-</span><span style="color: #0000ff;">&gt;</span>parse('http://www.sitepoint.com/rss.php');
     
    $channels   = $Parser-<span style="color: #0000ff;">&gt;</span>getChannels();
    $items      = $Parser-<span style="color: #0000ff;">&gt;</span>getItems();
    ?<span style="color: #0000ff;">&gt;</span>
    <span style="color: #0000ff;">&lt;</span><span style="color: #800000;">h1</span> <span style="color: #ff0000;">id</span><span style="color: #0000ff;">="title"</span><span style="color: #0000ff;">&gt;&lt;</span><span style="color: #800000;">a</span> <span style="color: #ff0000;">href</span>="&lt;?<span style="color: #ff0000;">php</span> <span style="color: #ff0000;">echo</span> $<span style="color: #ff0000;">channels</span>[<span style="color: #0000ff;">'LINK'</span>]; ?<span style="color: #0000ff;">&gt;</span>"<span style="color: #0000ff;">&gt;&lt;?</span><span style="color: #800000;">php</span> <span style="color: #ff0000;">echo</span> $<span style="color: #ff0000;">channels</span>[<span style="color: #0000ff;">'TITLE'</span>]; ?<span style="color: #0000ff;">&gt;&lt;/</span><span style="color: #800000;">a</span><span style="color: #0000ff;">&gt;&lt;/</span><span style="color: #800000;">h1</span><span style="color: #0000ff;">&gt;</span>
    <span style="color: #0000ff;">&lt;</span><span style="color: #800000;">p</span> <span style="color: #ff0000;">id</span><span style="color: #0000ff;">="description"</span><span style="color: #0000ff;">&gt;&lt;?</span><span style="color: #800000;">php</span> <span style="color: #ff0000;">echo</span> $<span style="color: #ff0000;">channels</span>[<span style="color: #0000ff;">'DESCRIPTION'</span>]; ?<span style="color: #0000ff;">&gt;</span> <span style="color: #0000ff;">&lt;/</span><span style="color: #800000;">p</span><span style="color: #0000ff;">&gt;</span>
     
    <?php foreach($items as $item): ?>

    <span style="color: #0000ff;">&lt;</span><span style="color: #800000;">a</span> <span style="color: #ff0000;">class</span><span style="color: #0000ff;">="feed-title"</span> <span style="color: #ff0000;">href</span>="&lt;?<span style="color: #ff0000;">php</span> <span style="color: #ff0000;">echo</span> $<span style="color: #ff0000;">item</span>[<span style="color: #0000ff;">'LINK'</span>]; ?<span style="color: #0000ff;">&gt;</span>"<span style="color: #0000ff;">&gt;&lt;?</span><span style="color: #800000;">php</span> <span style="color: #ff0000;">echo</span> $<span style="color: #ff0000;">item</span>[<span style="color: #0000ff;">'TITLE'</span>]; ?<span style="color: #0000ff;">&gt;&lt;/</span><span style="color: #800000;">a</span><span style="color: #0000ff;">&gt;</span>
    <span style="color: #0000ff;">&lt;</span><span style="color: #800000;">p</span> <span style="color: #ff0000;">class</span><span style="color: #0000ff;">="feed-description"</span><span style="color: #0000ff;">&gt;&lt;?</span><span style="color: #800000;">php</span> <span style="color: #ff0000;">echo</span> $<span style="color: #ff0000;">item</span>[<span style="color: #0000ff;">'DESCRIPTION'</span>]; ?<span style="color: #0000ff;">&gt;&lt;/</span><span style="color: #800000;">p</span><span style="color: #0000ff;">&gt;</span>
            <span style="color: #0000ff;">&lt;?</span><span style="color: #800000;">php</span> <span style="color: #ff0000;">endforeach</span>;?<span style="color: #0000ff;">&gt;</span>

I hope, this class is so easy that, anyone who have general knowledge about PHP5 can use it. Whatever it is, Feel free to ask me anything, anytime
