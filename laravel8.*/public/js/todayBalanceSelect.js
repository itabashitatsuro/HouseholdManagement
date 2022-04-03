function viewChange(){
    if(document.getElementById('select')){
        id = document.getElementById('select').value;
        if(id == 'expense'){
            document.getElementById('selectBox1').style.display = "none";
            document.getElementById('selectBox2').style.display = "";
        }else if(id == 'income'){
            document.getElementById('selectBox1').style.display = "";
            document.getElementById('selectBox2').style.display = "none";
        }
        else {
            document.getElementById('selectBox1').style.display = "none";
            document.getElementById('selectBox2').style.display = "none";
        }
    }

window.onload = viewChange;
}
