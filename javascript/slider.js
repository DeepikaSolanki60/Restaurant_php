var images=["Images/photo1.jpg",
"Images/photo2.webp",
"Images/photo3.jpg",
"Images/photo4.jpeg",
"Images/photo5.jpg"];
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
