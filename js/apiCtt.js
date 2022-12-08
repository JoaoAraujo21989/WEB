const getPostalCode = async () => {
    var postal_code = document.getElementById('np_form_postal_code').value
    const url = `https://geoapi.pt/cp/${postal_code}?json=1`;
    const options = {
        method: 'GET',
        headers: {
            'Accept': 'application/json'
        }
    };
    
    fetch(url, options)
    .then(response => response.json())
    .then(response => {
        document.getElementById('np_form_parish').value = response.partes[0].Local
        document.getElementById('np_form_address').value = response.partes[0].Artéria
        document.getElementById('np_form_district').value = response.Distrito
        document.getElementById('np_form_municipality').value = response.Concelho
        //console.log(response)
    })
    .catch(err => console.log(err));
}

const getPostalCodeUser = async () => {
    var postal_code = document.getElementById('form_User_postal_code').value
    const url = `https://geoapi.pt/cp/${postal_code}?json=1`;
    const options = {
        method: 'GET',
        headers: {
            'Accept': 'application/json'
        }
    };
    
    fetch(url, options)
    .then(response => response.json())
    .then(response => {
        document.getElementById('form_User_parish').value = response.partes[0].Local
        document.getElementById('form_User_address').value = response.partes[0].Artéria
        document.getElementById('form_User_district').value = response.Distrito
        document.getElementById('form_User_municipality').value = response.Concelho
        //console.log(response)
    })
    .catch(err => console.log(err));
}