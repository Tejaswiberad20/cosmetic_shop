function validateLogin() {
    let name = document.getElementById('name').value;
    let password = document.getElementById('password').value;
    let email= document.getElementById('email').value;
    let mobno = document.getElementById('mobno').value;
    let address = document.getElementById('address').value;
    let pincode= document.getElementById('pincode').value;

    if (name === '' || password === ''|| email === ''|| address === ''|| mobno === ''|| pincode === '') {
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