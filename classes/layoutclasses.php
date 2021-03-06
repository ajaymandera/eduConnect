<?php
class HtmlHeads
{
  var $title,$header;
  function __construct($title="eduConnect")
  {
    $this->title=$title;
  }
  function putHead()
  {
    echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
    echo '<html xmlns="http://www.w3.org/1999/xhtml">';
    echo "<head>";
    echo "<title>".$this->title."</title>";
    echo "<link rel=\"stylesheet\" href=\"resource/main.css\" />";
    echo "</head>";
  }
  function setTitle($title)
  {
    $this->title=$title;
  }
  function addToHeader($header)
  {
    $this->header=($this->header).($header);
  }
  function putFooter()
  {
    
    echo "<div id=\"footer\">";
    echo "<h3 style=\"color: #CCCCCC;text-align:center;\">&copy; eduConnect Team</span>";
    echo "</div>";
    echo "</body>";
  }
}
class LayoutStruct
{
  var $content,$widget,$count;
  function __construct($content)
  {
    $this->content=$content;
    $this->count=0;
  }
  function putFrame()
  {
    echo "<body>";
    echo "<div id=\"head-nav-container\">";
    echo "<div id=\"head-nav\">";
    echo "<a href=\"".ABS_PATH."/index.php\">Home</a>";
    echo " | <a href=\"".ABS_PATH."/pms.php\">PMs</a>";
    echo " | <a href=\"".ABS_PATH."/forum.php\">Forums</a>";
    echo " | <a href=\"".ABS_PATH."/chats.php\">Chats</a>";
    echo "<div style=\"text-align:right;\"><a href=\"".ABS_PATH."/logout.php\">Logout</a></div>";
    echo "</div>";
    echo "</div>";
    echo "<div id=\"content-area\">";
    echo "<div id=\"content-left\">";
    echo $this->putContent();
    echo "</div>";
    echo "<div id=\"content-right\">";
    echo $this->putWidgets();
    echo "</div>";
    echo "</div>";
  }
  function addWidget($code)
  {
    $this->widget[$this->count]="<div class=\"widget\" id=\"wid-".($this->count)."\">";
    $this->widget[$this->count].=$code;
    $this->widget[$this->count].="</div>";
    $this->count++;
  }
  function putWidgets()
  {
    for($i=0;$i<$this->count;$i++)
      echo $this->widget[$i];
  }
  function putContent()
  {
    echo $this->content;
  }
}
?>