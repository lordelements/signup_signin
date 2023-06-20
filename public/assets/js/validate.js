// function validateForm() {
//    let fname = document.forms["myForm"]["firstname"].value;
//    let mname = document.forms["myForm"]["middletname"].value;
//    let lname = document.forms["myForm"]["lastname"].value;
//    let pass = document.forms["myForm"]["password"].value;
//    let cpass = document.forms["myForm"]["cpassword"].value;
//    let email = document.forms["myForm"]["email"].value;
   
//    if (fname == "") {
//        window.alert("First Name must be filled out");
//        return false;
//    }
//    if (mname == "") {
//       window.alert("Middle Initial must be filled out");
//        return false;
//    }
//    if (lname == "") {
//       window.alert("Last Name must be filled out");
//        return false;
//    }
//    if (pass == "") {
//       window.alert("Password must be filled out");
//        return false;
//    }
//    if (cpass == "") {
//       window.alert("Confirmed Password must be filled out");
//        return false;
//    }
//    if (email == "") {
//       window.alert("Email must be filled out");
//        return false;
//    }
}

// const firstname = document.getElementById('firstname'),
//       middlename = document.getElementById('middlename'),
//       lastname = document.getElementById('lastname'),
//       password = document.getElementById('password'),
//       cpassword = document.getElementById('cpassword'),
//       email = document.getElementById('email'),
//       btn = document.getElementById('btn');

//       btn.getElementById('form').addEventListener('submit', (event) => {
//         event.preventDefault()
//         valid = true

//         const firstname_value = firstname.value
//         const middlename_value = middlename.value
//         const lastname_value = lastname.value
//         const password_value = password.value
//         const cpassword_value = cpassword.value

//         if(firstname_value == null || middlename_value == null || lastname_value == null ||
//              password_value == null || cpassword_value == null) {
//                 alert("The form has not submited");
//                 valid = false
//              }
//         if(firstname_value.empty == " " || middlename_value.empty == " " || lastname_value.empty == " " ||
//              password_value.empty == " " || cpassword_value.empty == " ") {
//                 alert("All filled is required");
//                 valid = false
//              }
//         // if (valid) {
//         //     alert("The form has not submited");
//         // }
//       });