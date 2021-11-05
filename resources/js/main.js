//var btntest = document.querySelector('#btn_test');

//const { Modal } = require("bootstrap");

btn_test.addEventListener('click', (e) => {
    e.preventDefault();
    alert('diste click');
    
    listarCargos();
     
});
btn_cancelar.addEventListener('click', (e) => {
    e.preventDefault();
    alert('click en cancelar');
    modal.classList.remove('modal-mostrar');
    
     
});

btn_agregar.addEventListener('click', (e) => {
    e.preventDefault();
    capturaFilaSeleccionada();
});




function listarCargos(){
    $.ajax({
        url:'/intranet/cargos-json',
        type: 'GET',
        dataType: 'json',
        success: function(datos){
            console.log(datos.data);         
            modal.classList.add('modal-mostrar');
            construirFilas(datos.data);
        },
        error: function(xhr, status){
            console.log('error xhr:', xhr);
            console.log('error status:', status);
        },
        complete: function(xhr, status){
            console.log('Petición acabada');
        }
    });
}

function construirFilas(json){

      for(let dato of json){
        let tr = document.createElement('TR');
        let td1 = document.createElement('TD');
        td1.className = "text-center";
        let td2 = document.createElement('TD');
        let td3 = document.createElement('TD');
        let td4 = document.createElement('TD')

        let input = document.createElement('input');
        input.type = 'radio';
        input.name="id_car";
        input.value = dato.id;


        let txt2 = document.createTextNode(dato.id);
        let txt3 = document.createTextNode(dato.cargo);
        let txt4 = document.createTextNode(dato.descripcion);

        td1.appendChild(input);
        td2.appendChild(txt2);
        td3.appendChild(txt3);
        td4.appendChild(txt4);

        tr.appendChild(td1);
        tr.appendChild(td2);
        tr.appendChild(td3);
        tr.appendChild(td4);
      
        tabla_modal_cargo.appendChild(tr);
    }
}

function capturaFilaSeleccionada(){
    let tr = document.querySelectorAll('TBODY TR');
    let td;
    let input;
    for(let i = 0; i < tr.length; i++){
        td = tr[i].querySelector('TD');
 
        input = td.querySelector('INPUT');

        if(input.checked){
            alert("Está en la fila: " + i);
        }
    }

}

