let p1Points = document.getElementById("p1-points");
let p1Btn = document.getElementById("p1-btn");
let p2Points = document.getElementById("p2-points");
let p2Btn = document.getElementById("p2-btn");
let p1Score = 0;
let p2Score=0;
let gameOver = 5;


p1Btn.addEventListener("click",function(event){
    if(p2Score >0){
        p1Score++;
        p2Score--;
        p1Points.textContent=p1Score;
        p2Points.textContent=p2Score;

    }else{
        p1Score++;
        p1Points.textContent=p1Score;
    }
    
    
   // addPlayer(1);
   if (p1Score== gameOver){
    gameEnd();
   }
});


p2Btn.addEventListener("click",function(event){
    if(p1Score >0){
        p2Score++;
        p1Score--;
        p2Points.textContent=p2Score; 
        p1Points.textContent=p1Score;  
    }else{
        p2Score++;
        p2Points.textContent=p2Score;
    }
    
    // addPlayer(2);
    if (p2Score== gameOver){
        gameEnd();
       }
});

document.getElementById("rest").addEventListener("click",function(){
    p1Points.textContent=0;
    p2Points.textContent=0;
    p1Btn.disabled = false;
    p2Btn.disabled = false;
    document.getElementById("winner").style.display="none";
    document.getElementsByTagName("body")[0].style.backgroundColor="white";


})


/*function addPlayer (player){
    if (player==1){
        p1Score++;
    p1Points.textContent=p1Score;
    }else {
        p2Score++;
        p2Points.textContent=p2Score;
    }
}*/

function gameEnd(){
    let playerName ;
    if (p1Score > p2Score){
       playerName = document.getElementById("p1-name").textContent;
    }else {
        playerName = document.getElementById("p2-name").textContent;
    }
    document.getElementById("winner").style.display="block";
    document.getElementById("winner-name").textContent=playerName;
    document.getElementsByTagName("body")[0].style.backgroundColor="blue";
    p1Btn.disabled = true;
    p2Btn.disabled = true;
}