function clearNewPatient(){
    document.getElementById('np_form_first_name').value = null
    document.getElementById('np_form_last_name').value = null
    document.getElementById('np_form_birth_date').value = null
    document.getElementById('np_form_process_number').value = null
    document.getElementById('np_form_niss').value = null
    document.getElementById('np_form_postal_code').value = null
    document.getElementById('np_form_parish').value = null
    document.getElementById('np_form_address').value = null
    document.getElementById('np_form_district').value = null
    document.getElementById('np_form_municipality').value = null
    document.getElementById('np_form_email_contact').value = null 
    document.getElementById('np_form_phone_contact').value = null
    document.getElementById('np_form_photo').value = null

}

function accountCancel(){
    window.location.replace("index.php?p=dashboard")
}

function accountEdit(){
    document.getElementById('account_btn_save').removeAttribute('hidden')
    document.getElementById('form_User_Password').removeAttribute('readonly')
    document.getElementById('form_User_first_name').removeAttribute('readonly')
    document.getElementById('form_User_last_name').removeAttribute('readonly')
    document.getElementById('form_User_postal_code').removeAttribute('readonly')
    document.getElementById('form_User_parish').removeAttribute('readonly')
    document.getElementById('form_User_address').removeAttribute('readonly')
    document.getElementById('form_User_district').removeAttribute('readonly')
    document.getElementById('form_User_municipality').removeAttribute('readonly')
    document.getElementById('form_User_phone_contact').removeAttribute('readonly')
    document.getElementById('form_User_Password').focus()
    document.getElementById('account_btn_edit').style.display = "none"
}

$(document).ready(function(){			
    setTimeout(function() {
	$(".alert").fadeOut("slow", function(){
		$(this).alert('close');
	});				
    }, 3000);			
});