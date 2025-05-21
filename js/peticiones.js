const cbxPrograma = document.getElementById('programa')
cbxPrograma.addEventListener('change', getCiclos)

const cbxCiclo = document.getElementById('ciclo')

function fetchAndSetData(url, formData, targetElement){
    return fetch(url,{
        method:"POST",
        body: formData,
        mode: 'cors'
    })
    .then(response => response.json())
    .then(data => {
        targetElement.innerHTML = data
    })
    .catch(error =>console.log(error))
}


function getCiclos(){
    let programa = cbxPrograma.value
    let url = 'bd_inter/get_ciclo.php'
    let formData =  new FormData()
    formData.append('id_programa', programa)


    fetchAndSetData(url, formData, cbxCiclo)
}
