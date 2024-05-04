var images=["Images/photo1.jpg",
"Images/photo3.jpg"];
  var i=0;
  function slides()
  {
    document.getElementById("slideimage").src =images[i];
    if(i<(images.length-1))
      i++;
    else
        i=0;
     
  }
  setInterval(slides,1000);
