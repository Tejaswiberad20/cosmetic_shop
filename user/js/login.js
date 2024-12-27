function validateLogin() {
    let name = document.getElementById('name').value;
    let password = document.getElementById('password').value;

    if (name === '' || password === '') {
        alert('Please fill in all fields.');
    } 
 
         let passwordPattern = /^\d{8}$/;
         if (!passwordPattern.test(password)) {
             alert("Password must be 8 digits long.");
             return false;
         }
        else{
            alert("Form Submited")
        }
     }