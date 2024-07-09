<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
/* @media screen and (max-width: 1110px) {
 .bigBlock{
    display: block;
    align-items: center;
    justify-content: center;
    margin-top: 700%;
    margin-bottom: -4%;
 }
  
} */
.blue, .or{
  color: white;
  border-radius: 15px;
  margin: auto 3px

}
.blue:hover{
    background:#6286fd;
  box-shadow: #698cfdce 2px 5px 20px;
  border: solid white 1px;

}

.or:hover{
  
    background: #ff6a38;
  border: solid #afbff2b6 1px;
  box-shadow: 3px 3px 15px #ffd6d6c4;
}

@media screen and (min-width: 1110px) {
    .bigBlock{
        position: relative;
        left: -6%;
        
    }
 .bigBlock{
    position: absolute;
    display: flex;
    left: 0;
    align-items:flex-start;
    justify-content: center;
    margin-top: -74vh; margin-bottom: 4%; z-index: 99px;
    flex-direction: column;
 }

  
}

    </style>
</head>
<body>
    <div class="container gg">
     <div class="row mb-5 bigBlock">
             <div class="p-4  mt-2  text-center pt-3 blue col "><strong @style('font-size: 30px')>+25 </strong><br>ans d'expérience</div>
             <div class="p-4  mt-2  text-center pt-3 or col "><strong @style('font-size: 30px; ')>+100 </strong><br>projets réalisés</div>
             <div class="p-4  mt-2  text-center pt-3 blue col "><strong @style('font-size: 30px')>+500 </strong><br> collaborateurs</div>
             <div class="p-4  mt-2  text-center pt-3 or col "><strong @style('font-size: 30px')>+80 </strong><br>Engine<br> </div></div>
    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var items = document.querySelectorAll(".flex-column div");
        var delay = 1000; // Adjust this delay as needed
        
        items.forEach(function(item, index) {
            setTimeout(function() {
                item.style.animation = "fadeIn 1s ease forwards"; // Apply animation
            }, delay * index); // Apply delay for each item
        });
    });
</script> 

</html>