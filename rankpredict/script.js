window.onload=function(){


    var forms=document.getElementById("form");
    var keam;
        var phy;
        var chem;
        var math;
      
    var butt=this.document.getElementById("but");
    butt.addEventListener("click",function(e){
        keam=Number(forms.kmark.value);
        phy=Number(forms.pmark.value);
        chem=Number(forms.cmark.value);
        math=Number(forms.mmark.value);
       
        var keam2=eval(keam/2);
        
        var pcm=eval(phy+chem+math);
       
        var mark=eval(keam2+pcm);
        
        if(mark>=500 && mark<=600)
        {
            var random =  Math.floor(Math.random() * 5000) + 1; 
        }
        else if(mark>=400 && mark<500)
        {
            var random =  Math.floor(Math.random() * (10001 - 5001)) + 5001 ; 
        }
        else if(mark>=300 && mark<400)
        {
            var random =  Math.floor(Math.random() * (15001 - 10002)) + 10002; 
        }
        else if(mark>=200 && mark<300)
        {
            var random =  Math.floor(Math.random() * (20001 - 15002)) + 15002; 
        }
        else if(mark>=100 && mark<200)
        {
            var random =  Math.floor(Math.random() * (25001 - 20002)) + 20002; 
        }
        else if(mark>0 && mark<100)
        {
            var random =  Math.floor(Math.random() * (30001 - 25002)) + 25002; 
        }
        
      var rank=random;
    
      var para=document.getElementById("rank");
      para.innerHTML="YOUR RANK:    ";
      para.innerHTML+=rank;

    });  






};