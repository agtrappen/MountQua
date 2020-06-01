
function changeImage()
{
element=document.getElementById('example')
if (element.src.match("out"))
  {
  element.src="https://i.ibb.co/th3HZtB/Naamloos-2.png";
  }
else
  {
  element.src="https://images.unsplash.com/photo-1520637102912-2df6bb2aec6d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1949&q=80.png";
  }
}