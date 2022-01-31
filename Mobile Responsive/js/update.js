function viewCtc(){
    var x=document.getElementById("ctc_grades");
    var y=document.getElementById("showCTC");
    
    if(x.style.display == "none")
    {
        document.getElementById("showCTC").value="CTC GRADES-";
        x.style.display="block";
    }
    else
    {
        document.getElementById("showCTC").value="CTC GRADES+";
        
        x.style.display="none";
    }
}
function viewOrthodox(){
    var x=document.getElementById("orthodox");
    var y=document.getElementById("showOrthodox");
    
    if(x.style.display == "none")
    {
        document.getElementById("showOrthodox").value="ORTHODOX GRADES-";
        x.style.display="block";
    }
    else
    {
        document.getElementById("showOrthodox").value="ORTHODOX GRADES+";
        
        x.style.display="none";
    }
}

function view_Ortho_Dust()
{
    var x=document.getElementById("ortho_dust_grades");
    var y=document.getElementById("show_Ortho_Dust");
    
    if(x.style.display == "none")
    {
        document.getElementById("show_Ortho_Dust").value="DUST GRADES-";
        x.style.display="block";
    }
    else
    {
        document.getElementById("show_Ortho_Dust").value="DUST GRADES+";
        
        x.style.display="none";
    }
}

function viewDust()
{
    var x=document.getElementById("dust_grades");
    var y=document.getElementById("showDust");
    
    
    if(x.style.display == "none")
    {
        
        document.getElementById("showDust").value="DUST GRADES-";
        x.style.display="block";
    }
    else
    {
        
        document.getElementById("showDust").value="DUST GRADES+";
        
        x.style.display="none";
    }
}

function viewFannings()
{
    var x=document.getElementById("fannings_leaf_grades");
    var y=document.getElementById("showFannings");
    
    if(x.style.display == "none")
    {
        document.getElementById("showFannings").value="FANNINGS GRADES-";
        x.style.display="block";
    }
    else
    {
        document.getElementById("showFannings").value="FANNINGS GRADES+";
        
        x.style.display="none";
    }
}

function view_ortho_Fannings()
{
    var x=document.getElementById("ortho_fannings_leaf_grades");
    var y=document.getElementById("show_ortho_Fannings");
    
    if(x.style.display == "none")
    {
        document.getElementById("show_ortho_Fannings").value="FANNINGS GRADES-";
        x.style.display="block";
    }
    else
    {
        document.getElementById("show_ortho_Fannings").value="FANNINGS GRADES+";
        
        x.style.display="none";
    }
}
function viewBroken(){
    var x=document.getElementById("broken_leaf_grades");
    var y=document.getElementById("showBroken");
    
    if(x.style.display == "none")
    {
        document.getElementById("showBroken").value="BROKEN LEAF GRADES-";
        x.style.display="block";
    }
    else
    {
        document.getElementById("showBroken").value="BROKEN LEAF GRADES+";
        
        x.style.display="none";
    }
}

function view_ortho_Broken(){
    var x=document.getElementById("ortho_broken_leaf_grades");
    var y=document.getElementById("show_ortho_Broken");
    
    if(x.style.display == "none")
    {
        document.getElementById("show_ortho_Broken").value="BROKEN LEAF GRADES-";
        x.style.display="block";
    }
    else
    {
        document.getElementById("show_ortho_Broken").value="BROKEN LEAF GRADES+";
        
        x.style.display="none";
    }
}


function view_ortho_Whole(){
    var x=document.getElementById("ortho_whole_leaf_grades");
    var y=document.getElementById("show_ortho_whole");
    
    if(x.style.display == "none")
    {
        document.getElementById("show_ortho_whole").value="WHOLE LEAF GRADES-";
        x.style.display="block";
    }
    else
    {
        document.getElementById("show_ortho_whole").value="WHOLE LEAF GRADES+";
        
        x.style.display="none";
    }
}

function view()
{
    var x=document.getElementById("cd");
    var y=document.getElementById("show").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show").value=rep;
        
        x.style.display="none";
    }
}
function view1()
{
    var x=document.getElementById("cd1");
    var y=document.getElementById("show1").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
         rep = rep.replace('+','-');
        document.getElementById("show1").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show1").value=rep;
        
        x.style.display="none";
    }
}
// d dunction
function view2()
{
    var x=document.getElementById("d");
    var y=document.getElementById("show2").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
         rep = rep.replace('+','-');
        document.getElementById("show2").value=rep;
        x.style.display="block";
    }
    else
    {
          rep = rep.replace('-','+');
        document.getElementById("show2").value=rep;
        
        x.style.display="none";
    }
}
function view3()
{
    var x=document.getElementById("d1");
    var y=document.getElementById("show3").value;
    var rep = y;
    if(x.style.display == "none")
    {
         rep = rep.replace('+','-');
        document.getElementById("show3").value=rep;
        x.style.display="block";
    }
    else
    {
          rep = rep.replace('-','+');
        document.getElementById("show3").value=rep;
        
        x.style.display="none";
    }
}
// Pd function 
function view4(){
    var x = document.getElementById("pd");
    var y=document.getElementById("show4").value;
    var rep = y;
    
    if(x.style.display == "none"){
        rep = rep.replace('+','-');
        document.getElementById("show4").value=rep;
        x.style.display = "block";
    }
    else{
  rep = rep.replace('-','+');
        document.getElementById("show4").value=rep;
        x.style.display="none";
    }
}

// function pd1
function view5(){
    var x = document.getElementById("pd1");
    var y = document.getElementById("show5").value;
    var rep = y;
    if(x.style.display == "none"){
                rep = rep.replace('+','-');

        document.getElementById("show5").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show5").value=rep;
        x.style.display="none";
    }
}

function view6(){
    var x = document.getElementById("other");
    var y =document.getElementById("show6").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show6").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show6").value=rep;
        x.style.display="none";
    }
}
// GD
function view7(){
    var x = document.getElementById("gd");
    var y =document.getElementById("show7").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show7").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show7").value=rep;
        x.style.display="none";
    }
}
//SRD
function view8(){
    var x = document.getElementById("srd");
    var y =document.getElementById("show8").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show8").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show8").value=rep;
        x.style.display="none";
    }
}
//FD
function view9(){
    var x = document.getElementById("fd");
    var y =document.getElementById("show9").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show9").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show9").value=rep;
        x.style.display="none";
    }
}
//SFD
function view10(){
    var x = document.getElementById("sfd");
    var y =document.getElementById("show10").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show10").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show10").value=rep;
        x.style.display="none";
    }
}
//OF1
function view11(){
    var x = document.getElementById("of");
    var y =document.getElementById("show11").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show11").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show11").value=rep;
        x.style.display="none";
    }
}
// OF1
function view12(){
    var x = document.getElementById("of1");
    var y =document.getElementById("show12").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show12").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show12").value=rep;
        x.style.display="none";
    }
}
// PF
function view13(){
    var x = document.getElementById("pf");
    var y =document.getElementById("show13").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show13").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show13").value=rep;
        x.style.display="none";
    }
}
// pf1
function view14(){
    var x = document.getElementById("pf1");
    var y =document.getElementById("show14").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show14").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show14").value=rep;
        x.style.display="none";
    }
}
// BOPF
function view15(){
    var x = document.getElementById("bopf");
    var y =document.getElementById("show15").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show15").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show15").value=rep;
        x.style.display="none";
    }
}
// bopf1
function view16(){
    var x = document.getElementById("bopf1");
    var y =document.getElementById("show16").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show16").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show16").value=rep;
        x.style.display="none";
    }
}
// fp
function view17(){
    var x = document.getElementById("fp");
    var y =document.getElementById("show17").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show17").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show17").value=rep;
        x.style.display="none";
    }
}
//BPS
function view18(){
    var x = document.getElementById("bps");
    var y =document.getElementById("show18").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show18").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show18").value=rep;
        x.style.display="none";
    }
}
// PEKOE
function view19(){
    var x = document.getElementById("pekoe");
    var y =document.getElementById("show19").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show19").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show19").value=rep;
        x.style.display="none";
    }
}
// BOPL
function view20(){
    var x = document.getElementById("bopl");
    var y =document.getElementById("show20").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show20").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show20").value=rep;
        x.style.display="none";
    }
}
//BOP
function view21(){
    var x = document.getElementById("bop");
    var y =document.getElementById("show21").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show21").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show21").value=rep;
        x.style.display="none";
    }
}
// BOP1
function view22(){
    var x = document.getElementById("bop1");
    var y =document.getElementById("show22").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show22").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show22").value=rep;
        x.style.display="none";
    }
}
// BOPSM
function view23(){
    var x = document.getElementById("bopsm");
    var y =document.getElementById("show23").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show23").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show23").value=rep;
        x.style.display="none";
    }
}
// BOPSM1
function view24(){
    var x = document.getElementById("bopsm1");
    var y =document.getElementById("show24").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show24").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show24").value=rep;
        x.style.display="none";
    }
}
// BPSM
function view25(){
    var x = document.getElementById("bpsm");
    var y =document.getElementById("show25").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show25").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show25").value=rep;
        x.style.display="none";
    }
}

// BPSM1
function view26(){
    var x = document.getElementById("bpsm1");
    var y =document.getElementById("show26").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show26").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show26").value=rep;
        x.style.display="none";
    }
}


// OPD
function view27(){
    var x = document.getElementById("opd");
    var y =document.getElementById("show27").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show27").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show27").value=rep;
        x.style.display="none";
    }
}


// OcD
function view28(){
    var x = document.getElementById("ocd");
    var y =document.getElementById("show28").value;
    var rep = y;
    if(x.style.display== "none"){
                rep = rep.replace('+','-');

        document.getElementById("show28").value=rep;
        x.style.display = "block";
    }
    else{
          rep = rep.replace('-','+');
        document.getElementById("show28").value=rep;
        x.style.display="none";
    }
}


// BOPD
function view29(){
    var x = document.getElementById("bopd");
    var y =document.getElementById("show29").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show29").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show29").value=rep;
        
        x.style.display="none";
    }
}


// BOPFD
function view30(){
    var x = document.getElementById("bopfd");
    var y =document.getElementById("show30").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show30").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show30").value=rep;
        
        x.style.display="none";
    }
}


// DA
function view31(){
    var x = document.getElementById("da");
    var y =document.getElementById("show31").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show31").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show31").value=rep;
        
        x.style.display="none";
    }
}


// SPL DUSTs
function view32(){
    var x = document.getElementById("spl_dust");
     var y =document.getElementById("show32").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show32").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show32").value=rep;
        
        x.style.display="none";
    }
}


// FD
function view33(){
    var x = document.getElementById("orth_fd");
     var y =document.getElementById("show33").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show33").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show33").value=rep;
        
        x.style.display="none";
    }
}



// G DUST
function view34(){
    var x = document.getElementById("g_dust");
     var y =document.getElementById("show34").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show34").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show34").value=rep;
        
        x.style.display="none";
    }
}


// OD
function view35(){
    var x = document.getElementById("od");
     var y =document.getElementById("show35").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show35").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show35").value=rep;
        
        x.style.display="none";
    }
}

// GOF
function view36(){
    var x = document.getElementById("gof");
     var y =document.getElementById("show36").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show36").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show36").value=rep;
        
        x.style.display="none";
    }
}


// FOF
function view37(){
    var x = document.getElementById("fof");
     var y =document.getElementById("show37").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show37").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show37").value=rep;
        
        x.style.display="none";
    }
}

// BOPF
function view38(){
    var x = document.getElementById("ortho_bopf");
     var y =document.getElementById("show38").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show38").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show38").value=rep;
        
        x.style.display="none";
    }
}



// BOP1
function view39(){
    var x = document.getElementById("ortho_bop1");
     var y =document.getElementById("show39").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show39").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show39").value=rep;
        
        x.style.display="none";
    }
}


// GFBOP
function view40(){
    var x = document.getElementById("gfbop");
     var y =document.getElementById("show40").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show40").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show40").value=rep;
        
        x.style.display="none";
    }
}


// BPS
function view41(){
    var x = document.getElementById("ortho_bps");
     var y =document.getElementById("show41").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show41").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show41").value=rep;
        
        x.style.display="none";
    }
}


// GBOP
function view42(){
    var x = document.getElementById("gbop");
    var y =document.getElementById("show42").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show42").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show42").value=rep;
        
        x.style.display="none";
    }
}

// fBOP
function view43(){
    var x = document.getElementById("fbop");
     var y =document.getElementById("show43").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show43").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show43").value=rep;
        
        x.style.display="none";
    }
}


// BOP
function view44(){
    var x = document.getElementById("ortho_bop");
     var y =document.getElementById("show44").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show44").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show44").value=rep;
        
        x.style.display="none";
    }
}


// FP
function view45(){
    var x = document.getElementById("ortho_fp");
     var y =document.getElementById("show45").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show45").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show45").value=rep;
        
        x.style.display="none";
    }
}


// FTGFOP
function view46(){
    var x = document.getElementById("ftgfop");
     var y =document.getElementById("show46").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show46").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show46").value=rep;
        
        x.style.display="none";
    }
}

// FTGFOP1
function view47(){
    var x = document.getElementById("ftgfop1");
    var y =document.getElementById("show47").value;
    var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show47").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show47").value=rep;
        
        x.style.display="none";
    }
}


// GFOP
function view48(){
    var x = document.getElementById("gfop");
    var y =document.getElementById("show48").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show48").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show48").value=rep;
        
        x.style.display="none";
    }
}


// FOp
function view49(){
    var x = document.getElementById("fop");
    var y =document.getElementById("show49").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show49").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show49").value=rep;
        
        x.style.display="none";
    }
}


// Op
function view50(){
    var x = document.getElementById("op");
    var y =document.getElementById("show50").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show50").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show50").value=rep;
        
        x.style.display="none";
    }
}

// SRD1
function view51(){
    var x = document.getElementById("srd1");
    var y =document.getElementById("show51").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show51").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show51").value=rep;
        
        x.style.display="none";
    }
}


// BOPL1
function view52(){
    var x = document.getElementById("bopl1");
    var y =document.getElementById("show52").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show52").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show52").value=rep;
        
        x.style.display="none";
    }
}


// BP
function view53(){
    var x = document.getElementById("bp");
    var y =document.getElementById("show53").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show53").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show53").value=rep;
        
        x.style.display="none";
    }
}

// BP
function view54(){
    var x = document.getElementById("bp1");
    var y =document.getElementById("show54").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show54").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show54").value=rep;
        
        x.style.display="none";
    }
}

// GOF1
function view55(){
    var x = document.getElementById("gof1");
    var y =document.getElementById("show55").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show55").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show55").value=rep;
        
        x.style.display="none";
    }
}


// FOF1
function view56(){
    var x = document.getElementById("fof1");
    var y =document.getElementById("show56").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show56").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show56").value=rep;
        
        x.style.display="none";
    }
}


//BOPF1
function view57(){
    var x = document.getElementById("ortho_bopf1");
    var y =document.getElementById("show57").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show57").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show57").value=rep;
        
        x.style.display="none";
    }
}


//GFBOP1
function view58(){
    var x = document.getElementById("gfbop1");
    var y =document.getElementById("show58").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show58").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show58").value=rep;
        
        x.style.display="none";
    }
}


//bps1
function view59(){
    var x = document.getElementById("ortho_bps1");
    var y =document.getElementById("show59").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show59").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show59").value=rep;
        
        x.style.display="none";
    }
}


//bps1
function view60(){
    var x = document.getElementById("gbop1");
    var y =document.getElementById("show60").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show60").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show60").value=rep;
        
        x.style.display="none";
    }
}


//fbop1
function view61(){
    var x = document.getElementById("fbop1");
    var y =document.getElementById("show61").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show61").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show61").value=rep;
        
        x.style.display="none";
    }
}


//tgfop
function view62(){
    var x = document.getElementById("tgfop");
    var y =document.getElementById("show62").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show62").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show62").value=rep;
        
        x.style.display="none";
    }
}


//gfop1
function view63(){
    var x = document.getElementById("gfop1");
    var y =document.getElementById("show63").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show63").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show63").value=rep;
        
        x.style.display="none";
    }
}


//fop1
function view64(){
    var x = document.getElementById("fop1");
    var y =document.getElementById("show64").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show64").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show64").value=rep;
        
        x.style.display="none";
    }
}


//op1
function view65(){
    var x = document.getElementById("op1");
    var y =document.getElementById("show65").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show65").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show65").value=rep;
        
        x.style.display="none";
    }
}


//opd1
function view66(){
    var x = document.getElementById("opd1");
    var y =document.getElementById("show66").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show66").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show66").value=rep;
        
        x.style.display="none";
    }
}


//ocd1
function view67(){
    var x = document.getElementById("ocd1");
    var y =document.getElementById("show67").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show67").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show67").value=rep;
        
        x.style.display="none";
    }
}



//bopd1
function view68(){
    var x = document.getElementById("bopd1");
    var y =document.getElementById("show68").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show68").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show68").value=rep;
        
        x.style.display="none";
    }
}


//bopfd1
function view69(){
    var x = document.getElementById("bopfd1");
    var y =document.getElementById("show69").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show69").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show69").value=rep;
        
        x.style.display="none";
    }
}



//fd1
function view70(){
    var x = document.getElementById("ortho_fd1");
    var y =document.getElementById("show70").value;
     var rep = y;
    
    if(x.style.display == "none")
    {
        rep = rep.replace('+','-');
        document.getElementById("show70").value=rep;
        x.style.display="block";
    }
    else
    {
        rep = rep.replace('-','+');
        document.getElementById("show70").value=rep;
        
        x.style.display="none";
    }
}