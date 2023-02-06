const editLinks = document.querySelectorAll('.edit-link');
const editForm = document.getElementById('editRegistrationForm');

editLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        console.log(link.href);
        fetch(link.href)
        .then(result => result.json())
        .then(data => {

            editForm.id.value = data.patient_id;
            editForm.fname.value = data.fname;
            editForm.mname.value = data.mname;
            editForm.lname.value = data.lname;
            editForm.dateofbirth.value = data.dateofbirth;
            editForm.age.value = data.age;
            editForm.gender.value = data.gender;
            editForm.blood_type.value = data.blood_type;
            editForm.address.value = data.address;
            editForm.email.value = data.email;
            editForm.contact_no.value = data.contact_no;


            console.log(data, editForm);

        })
        .catch(e => {
            console.log("Can't find edit.")
        })
    })
})