
function StartBtn(){
    
    var library = document.getElementById('library');
    var filebox = document.getElementById('filebox');
    var bob = document.getElementsByClassName('bob')[0];

    bob.style.display = 'none';
    library.style.display = 'block';
    filebox.style.display = 'none';
   
    
   
}


function clearForm(){
    var el = document.getElementsByClassName('notes_text');

    for(var i = 0; i <el.length;i++){
        el[i].value = '';
    }
}

function save(){
    alert('저장되었습니다');
}


window.setInterval(function(){
    var DateTime = new Date();           
    // var strYear= DateTime.getFullYear();           
    // var strMonth= DateTime.getMonth() +1;           
    // var strDay = DateTime.getDate();  
    var ampm = "AM"         
    var strHours = DateTime.getHours();           
    var strMinutes = DateTime.getMinutes();           
    // if (strMonth   < 10) {strMonth   = "0"+strMonth;}
    // if (strDay < 10) {strDay = "0"+strDay;}
    if (strHours < 10) {
        strHours   = "0"+strHours;
    } else if (strHours >11){
        ampm = "PM";
        if(strHours > 12)
        {
            strHours = strHours - 12;
        }
    }
    if (strMinutes < 10) {strMinutes = "0"+strMinutes;}          
    var time=document.getElementById("CurrentTime");           
    time.innerText = "DD/MM/YYYY  HH:MM";           
    time.innerText = ampm + "  " + strHours + ":" + strMinutes;
}, 1000);

