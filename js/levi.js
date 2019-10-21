
function changeImage()
{
element=document.getElementById('example')
if (element.src.match("out"))
  {
  element.src="http://www.webtalkto-version-9dot2.webtalkto.com/wp-content/uploads/2013/11/image-in.png";
  }
else
  {
  element.src="http://www.webtalkto-version-9dot2.webtalkto.com/wp-content/uploads/2013/11/image-out.png";
  }
}