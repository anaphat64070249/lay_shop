
function validateForm() {
    let uname = document.forms["myForm"]["username"].value;
    let pass = document.forms["myForm"]["password"].value;
    let conpass = document.forms["myForm"]["con_pass"].value;
    let fname = document.forms["myForm"]["fname"].value;
    let lname = document.forms["myForm"]["lname"].value;
    let email = document.forms["myForm"]["email"].value;
    let tel = document.forms["myForm"]["tel"].value;
    let addr = document.forms["myForm"]["address"].value;
    let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if (uname.length < 5) {
        Swal.fire({
            icon: 'error',
            title: 'Username must have at \n\r least 5 characters.',
            confirmButtonColor: '#3085d6',
        })
        return false;
    }
    if (pass.length < 8) {
        Swal.fire({
            icon: 'error',
            title: 'Password must have at \n\r least 8 characters.',
            confirmButtonColor: '#3085d6',
        })

        return false;
    }
    if (conpass != pass) {
        Swal.fire({
            icon: 'error',
            title: 'Password doesn\'t match.',
            confirmButtonColor: '#3085d6',
        })

        return false;
    }
    
    if (fname == "") {
        Swal.fire({
            icon: 'error',
            title: 'Firstname must be filled out.',
            confirmButtonColor: '#3085d6',
        })

        return false;
    }
    if (lname == "") {
        Swal.fire({
            icon: 'error',
            title: 'Lastname must be filled out.',
            confirmButtonColor: ' #3085d6',
        })
        return false;
    }
    if (tel[0] != 0 || tel.length < 9 || tel.length > 10) {
        Swal.fire({
            icon: 'error',
            title: 'Invalid Phone number.',
            confirmButtonColor: '#3085d6',
        })

        return false;
    }

    if (email.match(mailformat)) {
        return true;
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Invalid Email.',
            confirmButtonColor: '#3085d6',
        })
        return false;
    }
    
    
}