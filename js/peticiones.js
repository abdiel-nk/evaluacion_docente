const cbxPrograma = document.getElementById('programa')
cbxPrograma.addEventListener("change", getCiclos)

const cbxCiclo = document.getElementById('ciclo')
cbxCiclo.addEventListener("change", getCursos)

const cbxCurso = document.getElementById('curso')
cbxCurso.addEventListener("change", getDocentes)

const cbxDocente = document.getElementById('docente')
cbxDocente.addEventListener("change", getIdDocente)

function fetchAndSetData(url, formData, targetElement){
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


function getCiclos(){
    let programa = cbxPrograma.value
    let url = 'bd_inter/get_ciclo.php'
    let formData =  new FormData()
    formData.append('id_programa', programa)

    console.log("programa ", programa);
    fetchAndSetData(url, formData, cbxCiclo)
    // .then(()=>{
        
    //     cbxDocente.innerHTML = ''
    //     cbxDocente.innerHTML = '<option value="">Seleccionar</option>'
    // })
    // .catch(err => console.log(err))

}

function getCursos(){
    let ciclo = cbxPrograma.value
    let url = 'bd_inter/get_curso.php'
    let formData =  new FormData()
    formData.append('id_ciclo', ciclo)

    console.log("Ciclo"+ ciclo)
    fetchAndSetData(url, formData, cbxCurso)
}


function getDocentes(){
    let curso = cbxCurso.value
    let url = 'bd_inter/get_docente.php'
    let formData =  new FormData()
    formData.append('id_curso', curso)

    console.log("curso"+curso)
    
    fetchAndSetData(url, formData, cbxDocente)

}

function getIdDocente(){
    let docente = cbxDocente.value
    let url = 'bd_inter/get_docente.php'
    let formData =  new FormData()
    formData.append('id_docente', docente)
    
    console.log("docente", docente)
    fetchAndSetData(url, formData, cbxDocente)


}

