function szamol(){
    var so=document.getElementById('so').value;
    var viz=document.getElementById('viz').value;

    var ered=(so/viz)*100;
    document.getElementById('eredmeny').innerHTML= ered.toFixed(2);
}