// Votre script JS

// declaration du variable    
var x=0 ;
 // incrimentation 
function increase() { 
x++; 
document.getElementById('value').innerHTML = x;
if (x<0) {  
    document.getElementById("value").style = "color:red; ";   
    } 
    if (x>0) {
        document.getElementById("value").style = "color:blue; "; 
    }
    if (x==0) {
        document.getElementById("value").style = "color:black; ";
    }
} 
document.getElementById("increase").addEventListener("click", increase);

// decrimentation
function decrease() { 
x--; 
document.getElementById('value').innerHTML = x;
if (x<0) {  
    document.getElementById("value").style = "color:red; ";   
    } 
    if (x>0) {
        document.getElementById("value").style = "color:blue; "; 
    }
    if (x==0) {
        document.getElementById("value").style = "color:black; ";
    }
} 
document.getElementById("decrease").addEventListener("click", decrease);

//remise a 0
function reset() { 
 x = 0;
document.getElementById('value').innerHTML = x; 
document.getElementById("value").style = "color:black; ";
} 
document.getElementById("reset").addEventListener("click", reset);


// if (x<0) {  
//     document.getElementById("value").style = "color:red; ";   
//     } 
//     if (x>0) {
//         document.getElementById("value").style = "color:blue; "; 
//     }
//     if (x==0) {
//         document.getElementById("value").style = "color:black; ";
//     }


