var images=["Images/photo1.jpeg",
"Images/photo2.jpep",
"Images/photo3.jpeg",
"Images/photo4.jpeg",
"Images/photo5.jpeg"];
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
