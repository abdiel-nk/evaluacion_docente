// const cbxPrograma = document.getElementById('programa')
// cbxPrograma.addEventListener("change", getCiclos)

// const cbxCiclo = document.getElementById('ciclo')
// cbxCiclo.addEventListener("change", getCursos)

// const cbxCurso = document.getElementById('curso')
// cbxCurso.addEventListener("change", getDocentes)

// const cbxDocente = document.getElementById('docente')
// cbxDocente.addEventListener("change", getDocentes)

// console.log(cbxCiclo.value);
// function fetchAndSetData(url, formData, targetElement){
//         return fetch(url, {
//         method: 'POST',
//         body: formData,
//         mode: 'cors'
//     })
//         .then(response => response.json())
//         .then(data => {
//             targetElement.innerHTML = data;
//         })
//         .catch(err => console.log(err));
// }


// function getCiclos(){
//     let programa = cbxPrograma.value
//     let url = 'bd_inter/get_ciclo.php'
//     let formData =  new FormData()
//     formData.append('id_programa', programa)

//     console.log(" GetCiclo -> get id_programa ", programa);
//     fetchAndSetData(url, formData, cbxCiclo)
//     .then(()=>{
//         cbxCurso.innerHTML = ''
//         cbxCurso.innerHTML = '<option value="">Seleccionar</option>';
//         cbxDocente.innerHTML = ''
//         cbxDocente.innerHTML = '<option value="">Seleccionar</option>'
//     })
//     .catch(err => console.log(err))

// }

// function getCursos(){
//     let ciclo = cbxCiclo.value;
//     let url = 'bd_inter/get_curso.php';
//     let formData =  new FormData();
//     formData.append('id_ciclo', ciclo);

    
//     fetchAndSetData(url, formData, cbxCurso)
// }


// function getDocentes(){
//     let curso = cbxCurso.value;
//     let url = 'bd_inter/get_docente.php';
//     let formData =  new FormData();
//     formData.append('id_curso', curso);

//     fetchAndSetData(url, formData, cbxDocente)
// }
const cbxPrograma = document.getElementById('programa')
cbxPrograma.addEventListener("change", getCiclos)

const cbxCiclo = document.getElementById('ciclo')
cbxCiclo.addEventListener("change", getCursos)

const cbxCurso = document.getElementById('curso')
cbxCurso.addEventListener("change", getDocente)


const cbxDocente = document.getElementById('docente')


function fetchAndSetData(url, formData, targetElement) {
    return fetch(url, {
        method: "POST",
        body: formData,
        mode: 'cors'
    })
        .then(response => response.json())
        .then(data => {
            targetElement.innerHTML = data;
        })
        .catch(err => console.log(err));
}

function getCiclos() {
    let programa = cbxPrograma.value;
    let url = 'bd_inter/get_ciclo.php';
    let formData = new FormData();
    formData.append('id_programa', programa);

    fetchAndSetData(url, formData, cbxCiclo)
        .then(() => {
            // cbxCurso.innerHTML = ''
            // let defaultOption = document.createElement('option');
            // defaultOption.value = 0;
            // defaultOption.innerHTML = "Seleccionarrrarar";
            // cbxCurso.appendChild(defaultOption);
            
            cbxCurso.innerHTML = ''
            cbxCurso.innerHTML = '<option value="">Seleccionar</option>';
            cbxDocente.innerHTML = ''
            cbxDocente.innerHTML = '<option value="">Seleccionar</option>'
            
        })
        .catch(err => console.log(err));
}

function getCursos() {
    let ciclo = cbxCiclo.value;
    let url = 'bd_inter/get_curso.php';
    let formData = new FormData();
    formData.append('id_ciclo', ciclo);

    fetchAndSetData(url, formData, cbxCurso).catch(err => console.log(err));
}


function getDocente(){
    let curso = cbxCurso.value;
    let url = 'bd_inter/get_docente.php';
    let formData = new FormData();
    formData.append('id_curso',curso)

    fetchAndSetData(url, formData, cbxDocente)
        .catch(err => console.log(err))
}
