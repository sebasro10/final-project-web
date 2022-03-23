<script>
    document.title = "Sign Up";
</script>




<div class="signup">
    <div class="center">
        <div class="container">
            <!-- <div class="closebtn">
            <a href="../index.php">
                <i class="fa fa-times" aria-hidden="false"></i>
            </a>
        </div> -->
            <div class="text"> Sign up </div>
            <p id="demo"></p>
            <form method="post">

                <div class="data">
                    <label for="lastName" title="More than 2 letters and no numbers or special characters">Last Name</label>
                    <input type=" text" name="lastName" id="lastName">
                </div>
                <div class="data">
                    <label for="Name" title="More than 2 letters and no numbers or special characters">Name</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div class="data">
                    <label for="emailAddress">Email Address</label>
                    <input type="text" name="email" id="email" required>
                </div>
                <div class="data">
                    <label for="Confirm_email">Confirm email</label>
                    <input type="text" name="emailConfirm" id="emailConfirm" required>
                </div>
                <div class="data">
                    <label for="phoneNumber" title="Only numbers">Phone number</label>
                    <input type="text" name="phoneNumber" id="phoneNumber" required>
                </div>

                <!-- <div class="data">
                <label for="services">Services</label>
                <input type="text" name="service" value="to modify-> spinner">
            </div> -->

                <div class="data">
                    <label for="service">Service</label>
                    <select name="service" required>
                        <?php foreach ($records as $record) : ?>
                            <option value=<?= $record['id_service'] ?>> <?= $record['name'] ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>


                <div class="data">
                    <label for="password" title="Must contain at least 8 characters, one uppercase, one lowercase and one special character. ">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="data">
                    <label for="cPassword">Confirm Password</label>
                    <input type="password" name="Cpassword" id="Cpassword" required>
                </div>
                <div class="btn">
                    <button type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const button = document.querySelector('button');

    let lastname = document.getElementById('lastName');
    let name = document.getElementById('name');
    let email = document.getElementById('email');
    let cEmail = document.getElementById('emailConfirm');
    let phone = document.getElementById('phoneNumber');
    let password = document.getElementById('password');
    let cPassword = document.getElementById('Cpassword');
    let v1 = 0,
        v2 = 0,
        v3 = 0,
        v4 = 0,
        v5 = 0;
    v6 = 0;

    lastname.addEventListener('input', validateLastName);
    name.addEventListener('input', validateName);
    cEmail.addEventListener('input', validateCEmail);
    phone.addEventListener('input', validatePhone);
    password.addEventListener('input', validatePassword);
    cPassword.addEventListener('input', validateCPassword);

    disEnableButton();

    function validateLastName() {
        if (lastname.value.length < 2) {
            lastname.style.color = 'red';
        } else {
            if (/^[a-zA-Z\s.,]+$/.test(lastname.value)) {
                lastname.style.color = 'green';
                v1 = 1;
            } else {
                lastname.style.color = 'red';
                v1 = 0;
            }
        }
        validateAll();
    }

    function validateName() {
        if (name.value.length < 2) {
            name.style.color = 'red';
        } else {
            if (/^[a-zA-Z\s.,]+$/.test(name.value)) {
                name.style.color = 'green';
                v2 = 1;
            } else {
                name.style.color = 'red';
                v2 = 0;
            }
        }
        validateAll();
    }

    function validateCEmail() {
        if (email.value != cEmail.value) {
            cEmail.style.color = 'red';
            v3 = 0;
        } else {
            cEmail.style.color = 'green';
            v3 = 1;
        }
        validateAll();
    }

    function validatePhone() {
        if (phone.value.length != 10) {
            phone.style.color = 'red';
        } else {
            if (/^\d+$/.test(phone.value)) {
                phone.style.color = 'green';
                v4 = 1;
            } else {
                phone.style.color = 'red';
                v4 = 0;
            }
        }
        validateAll();
    }

    function validatePassword() {
        if (password.value.length < 8) {
            password.style.color = 'red';
        } else {
            if (/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W)/.test(password.value)) {
                password.style.color = 'green';
                v5 = 1;
            } else {
                password.style.color = 'red';
                v5 = 0;
            }
        }
        validateAll();
    }

    function validateCPassword() {
        if (password.value != cPassword.value) {
            cPassword.style.color = 'red';
            v6 = 0;
        } else {
            cPassword.style.color = 'green';
            v6 = 1;
        }
        validateAll();
    }

    function disEnableButton() {
        button.disabled = true;
        button.style.color = 'white';
        button.style.background = 'gray';
    }

    function enableButton() {
        button.disabled = false;
        button.style.color = 'white';
        button.style.background = '#43bce1';
    }

    function validateAll() {
        if (v1 && v2 && v3 && v4 && v5 && v6) {
            enableButton();
        } else {
            disEnableButton();
        }

        // document.getElementById('demo').innerHTML = 
    }
</script>