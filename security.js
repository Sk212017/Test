function changeImage_3() 
    {
    var image = document.getElementById('door');
    if (image.src.match("images/door_open")) 
	{   	;
        image.src = "images/door_close.jpg	";
    } else 
	{ alert("Intruder ! Click Ok if person is known");
        image.src = "images/door_open.gif";
    }
}