<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    height: 100vh;
    background: #C6F2E0;
}

/* MAIN CARD */
.login-card {
    width: 1200px;
    height: 650px;
    display: flex;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

/* LEFT IMAGE */
.left-side {
    flex: 0.9;
    background: url('/assets/img/background1.png') center/cover no-repeat;
}

/* RIGHT SIDE */
.right-side {
    flex: 1.25;
    background: #fff;
    padding: 50px;

    display: flex;
    justify-content: center;
    align-items: center;
}

/* CONTENT WRAPPER */
.login-content {
    width: 100%;
    max-width: 460px;
}

/* TITLE */
.title {
    font-size: 38px;
    font-weight: 700;
    color: #064134;
    text-align: center;
}

.subtitle {
    font-size: 17px;
    color: gray;
    text-align: center;
}

/* ROLE SWITCH */
.role-switch {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-top: 25px;
    font-weight: 600;
}

.role {
    cursor: pointer;
    padding-bottom: 5px;
    color: gray;
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 16px;
}

.role.active {
    color: #28a745;
    border-bottom: 2px solid #28a745;
}

/* INPUT */
.input-group-text {
    background: #f1f1f1;
    padding: 0 14px;
}

.form-control {
    height: 52px;
    font-size: 16px;
}

/* BUTTON */
.btn-success {
    background: #187342;
    border: none;
    height: 52px;
    font-size: 17px;
    font-weight: 600;
}

.btn-success:hover {
    background: #145c33;
}
</style>
</head>

<body>

<div class="d-flex justify-content-center align-items-center h-100">

<div class="login-card">

    <!-- LEFT IMAGE -->
    <div class="left-side"></div>

    <!-- RIGHT SIDE -->
    <div class="right-side">

        <div class="login-content">

            <!-- TITLE -->
            <div class="title">Welcome Back</div>
            <div class="subtitle">Login to continue to your account</div>

            <!-- ROLE SWITCH -->
            <div class="role-switch">
                <div class="role active">
                    <img src="{{ asset('assets/icons/user.png') }}" width="18">
                    User Login
                </div>

                <div class="role">
                    <img src="{{ asset('assets/icons/admin.png') }}" width="22">
                    Admin Login
                </div>
            </div>

            <!-- EMAIL -->
            <div class="mt-4">
                <label>Email</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <img src="{{ asset('assets/icons/mail.png') }}" width="18">
                    </span>
                    <input type="email" class="form-control" placeholder="Enter email">
                </div>
            </div>

            <!-- PASSWORD -->
            <div>
                <label>Password</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <img src="{{ asset('assets/icons/password.png') }}" width="18">
                    </span>
                    <input type="password" class="form-control" placeholder="Enter password">
                </div>
            </div>

            <!-- REMEMBER + FORGOT -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <input type="checkbox"> Remember me
                </div>
                <a href="#" class="text-success">Forgot Password?</a>
            </div>

            <!-- LOGIN BUTTON -->
            <button class="btn btn-success w-100">Login</button>

            <!-- REGISTER -->
            <div class="text-center mt-3">
                Don't have an account?
                <a href="#" class="text-success fw-bold">Register</a>
            </div>

        </div>

    </div>

</div>

</div>

</body>
</html>