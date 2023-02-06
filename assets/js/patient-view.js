const viewLinks = document.querySelectorAll('.view-link');
const viewForm = document.getElementById('viewRegistrationForm');

viewLinks.forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        console.log(link.href);
        fetch(link.href)
        .then(result => result.json())
        .then(data => {

            viewForm.viewid.value = data.patient_id;
            viewForm.fname.value = data.fname;
            viewForm.mname.value = data.mname;
            viewForm.lname.value = data.lname;
            viewForm.dateofbirth.value = data.dateofbirth;
            viewForm.age.value = data.age;
            viewForm.gender.value = data.gender;
            viewForm.blood_type.value = data.blood_type;
            viewForm.address.value = data.address;
            viewForm.email.value = data.email;
            viewForm.contact_no.value = data.contact_no;


            console.log(data, viewForm);

        })
        .catch(e => {
            console.log("Can't find edit.")
        })
    })
})