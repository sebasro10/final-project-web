<script> document.title = "Login"; </script>
<div class="login">
    <div class="center">
        <div class="container">
            <div class="closebtn">
                <a href="../index.php">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </a>

            </div>

            <div class="text"> Login Form</div>
            <form action="" method="post">
                <div class="data">
                    <label for="Email">Email</label>
                    <input name="email" type="text" required>
                </div>
                <div class="data">
                    <label for="Password">Password</label>
                    <input name="password" type="password" required>
                </div>
                <div class="forgot-pass"> <a href="?action=TODO"> Forgot Password?</a> </div>
                <div class="btn">
                    <div class="inner"> </div>
                    <button type="submit">login</button>
                </div>
                <div class="signin"><a href="?action=signUp">Sign up</a></div>
            </form>
        </div>
    </div>
</div>