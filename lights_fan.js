function changeImage() 
{
    var image = document.getElementById('myImage');
    if (image.src.match("images/bulb_on")) 
	{
        image.src = "images/bulb_off_1.jpg";
    } else 
	{
        image.src = "images/bulb_on.jpg";
	}
}	
function changeImage_1() 
    {
    var image = document.getElementById('myImage_1');
    if (image.src.match("images/bulb_on")) 
	{
        image.src = "images/bulb_off.jpg";
    } else 
	{
        image.src = "images/bulb_on.jpg";
    }
}
function changeImage_2() 
    {
    var image = document.getElementById('fan');
    if (image.src.match("images/fan_on")) 
	{
        image.src = "images/fan.jpg";
    } else 
	{
        image.src = "images/fan_on.gif";
    }
}
