function calculate(){
    let quant=document.getElementById('produs').value;
    let gaz=document.getElementById('tip1');
    let lemn=document.getElementById('tip2');
    let carbune=document.getElementById('tip3');
    var final;
    if(!(gaz.checked||lemn.checked||carbune.checked)){
        alert('Selectati tipul materialului')
    }
    if(lemn.checked){
        final=quant*1000/5;
        document.getElementById('brichete').value=final;
    }
    else if(carbune.checked){
        final=quant*1000/800;
        document.getElementById('brichete').value=final;

    }
    else if(gaz.checked){
        final=quant*1000/460;
        document.getElementById('brichete').value=final;

    }



}