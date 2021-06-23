 //start function A
 var sliderA = document.getElementById("sliderA");
 var selectorA = document.getElementById("selectorA");
 var selectValueA = document.getElementById("selectValueA");
 var BarA = document.getElementById("BarA");

 selectValueA.innerHTML = sliderA.value; //هذا السطر اظهرت الارقام في المربع

 sliderA.oninput=function(){
    selectValueA.innerHTML = this.value; // هذا السطر ازود القيمة
    selectorA.style.left = this.value/2 + "%";
    BarA.style.width = this.value/2 + "%";
 }

 //end function A

 //start function B
 var sliderB = document.getElementById("sliderB");
 var selectorB = document.getElementById("selectorB");
 var selectValueB = document.getElementById("selectValueB");
 var BarB = document.getElementById("BarB");
 

 selectValueB.innerHTML = sliderB.value;

 sliderB.oninput=function(){
     selectValueB.innerHTML = this.value;
     selectorB.style.left = this.value/2 + "%";
     BarB.style.width = this.value/2 + "%";
 }
 //end function B

//start function C
 var sliderC = document.getElementById("sliderC");
 var selectorC = document.getElementById("selectorC");
 var selectValueC = document.getElementById("selectValueC");
 var BarC = document.getElementById("BarC");
 

 selectValueC.innerHTML = sliderC.value;

 sliderC.oninput=function(){
     selectValueC.innerHTML = this.value;
     selectorC.style.left = this.value/2 + "%";
     BarC.style.width = this.value/2 + "%";
 }
//end function C

//start function D
var sliderD = document.getElementById("sliderD");
var selectorD = document.getElementById("selectorD");
var selectValueD = document.getElementById("selectValueD");
var BarD = document.getElementById("BarD");


selectValueD.innerHTML = sliderC.value;

sliderD.oninput=function(){
    selectValueD.innerHTML = this.value;
    selectorD.style.left = this.value/2 + "%";
    BarD.style.width = this.value/2 + "%";
}
//end function D

//start function E
var sliderE = document.getElementById("sliderE");
var selectorE = document.getElementById("selectorE");
var selectValueE = document.getElementById("selectValueE");
var BarE = document.getElementById("BarE");


selectValueE.innerHTML = sliderC.value;

sliderE.oninput=function(){
    selectValueE.innerHTML = this.value;
    selectorE.style.left = this.value/2 + "%";
    BarE.style.width = this.value/2 + "%";
    
}
//end function E

//start function F
var sliderF = document.getElementById("sliderF");
var selectorF = document.getElementById("selectorF");
var selectValueF = document.getElementById("selectValueF");
var BarF = document.getElementById("BarF");


selectValueF.innerHTML = sliderC.value;

sliderF.oninput=function(){
    selectValueF.innerHTML = this.value;
    selectorF.style.left = this.value/2 + "%";
    BarF.style.width = this.value/2 + "%";
    
}
//end function F