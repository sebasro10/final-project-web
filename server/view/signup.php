<script>
    document.title = "Sign Up";
</script>

<div class="center">
    <div class="container">
        <div class="closebtn">
            <a href="../index.php">
                <i class="fa fa-times" aria-hidden="true"></i>
            </a>
        </div>

        <div class="text"> Sign up Form</div>
        <form method="post">
            <div class="data">
                <label for="lastName">LastName</label>
                <input type="text" name="lastName" required>
            </div>
            <div class="data">
                <label for="Name">Name</label>
                <input type="text" name="name" required>
            </div>
            <div class="data">
                <label for="emailAddress">Email Address</label>
                <input type="text" name="email" required>
            </div>
            <div class="data">
                <label for="Confirm_email">Confirm email</label>
                <input type="text" name="emailConfirm" required>
            </div>

            <div class="data">
                <select name="type_depense">
                    <option>---Type---</option>
                    <?php foreach ($records as $record) : ?>
                        <option value=<?= $record['id_service'] ?>> <?= $record['name'] ?> </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="data">
                <label for="phoneNumber">Phone number</label>
                <input type="text" name="phoneNumber" required>
            </div>

            <div class="data">
                <label for="services">Services</label>
                <input type="text" name="service" value="to modify-> spinner">
            </div>
            <div class="data">
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="data">
                <label for="cPassword">Confirm Password</label>
                <input type="password" name="Cpassword" required>
            </div>

            <div class="btn">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
</div>