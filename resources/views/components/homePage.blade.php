<style>
     section {
display: flex;
height: 100vh;
justify-content: center;
align-items: center;

}

.main {
    display: flex;
    justify-content: space-around;
    gap: 4vw;
}
.pictures {
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
}
.top{
    display: flex;
    gap: 0.5rem;
    
}
.information {

    display: flex;
    flex-direction: column;
    gap: 1rem;
    padding-top: 10%;
    width: 40%

}
.information h1 {
 
    font-weight: bold;
    color: #F1592A;
}
.information p{
   color: black;
    font-weight: 500;
  
}
section:before{
    content: "";
    position: absolute;
    width: 100%;
    height: 100vh;
    background : linear-gradient(#F1592A,white);
    opacity: 1;
    clip-path: circle(48vw at right);
   
    z-index: -1;
}



    @media only screen and (max-width: 1023px){
        section:before {
            clip-path: circle(55vw at bottom);
        }
        section {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 3vw;
        }
        .main {
            padding-top: 8vw;
            display: flex;
            flex-direction: column;
            gap: 3.5rem;
            align-items: center;
        }
        
    }
    @media (min-width : 600px) and (max-width: 1023px) {
        section:before {
            clip-path: circle(55vw at bottom);
        }
       
    }
  
    @media (min-width : 50px) and (max-width: 600px) {
        section:before {
            clip-path: circle(55vw at bottom);
        }
        .information h1 {
            font-size: 2.5rem;
        }
        .information p {
            font-size: 0.3rem;
        }
    }
  
    
    
    
</style>
    <section>
      <div class="main">
      <div class="information text-center">
      <h1>Build Different</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing     elit. Nihil dolore corporis ipsam  
        velit explicabo facilis  pariatur  dolor. Nisi nam facere   exercitationem nesciunt vitae! 
         Deserunt facere animi corrupti libero minima dolor.</p>
      </div>
      <div class="pictures">
        <div class="top">
         <img src="{{asset('pictures/gallery/sapt')}}"  style="max-width:100%; width:300px; height:205px; border-radius :10px; " />
         <div class="sous-top">
          <img src="{{asset('pictures/gallery/avocats')}}" alt=""  style="max-width:100%; width:300px;  height:99px ; border-radius : 10px"/> <br />
          <img src="{{asset('pictures/gallery/omni')}}" alt=""  style="max-width:100%; width:300px;  height:99px ; border-radius : 10px"/>
         </div>
        </div>
        <div class="bottom">
          <img src="{{asset('pictures/gallery/alliance')}}" style="max-width:100%; width:600px;  height:300px; border-radius : 10px"/>
        </div>
      </div>
    
     
