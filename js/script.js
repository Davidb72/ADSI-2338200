btn.onclick = function() {
    var buscar = document.getElementById("buscar").value;
    if (buscar == 'html') {
        panel.style.color='#fff'
        panel.style.textTransform = 'uppercase'
        panel.innerHTML = "Se Encuentra";
    }
    else if (buscar == 'css') {
        panel.style.color='#fff'
        panel.style.textTransform = 'uppercase'
        panel.innerHTML = "Se Encuentra";
    }
    else if (buscar == 'javascript') {
        panel.style.color='#fff'
        panel.style.textTransform = 'uppercase'
        panel.innerHTML = "Se Encuentra";
    }
    else if (buscar == '') {
        panel.style.color='#fff'
        panel.style.textTransform = 'uppercase'
        panel.innerHTML = "ERROR...";
    }
     
    else {
        panel.innerHTML = "No Existe....."
        panel.style.color='#fff'
        
    }

}

