
<?php include ('header.php')?>
<?php
// Store the previous page URL in a session variable if it is not the login page
if (!isset($_SESSION['previous_page']) && basename($_SERVER['PHP_SELF']) !== 'login.php') {
    $_SESSION['previous_page'] = $_SERVER['PHP_SELF'];
}
// Check if the user has submitted the login form
if (isset($_POST['login']) && $_POST['login'] == 1) {
    // Perform your authentication logic here
    $username = $_POST['username']; // Assuming the username is submitted via a form field
    // Validate the username and password, and perform any necessary checks
    
    // If the authentication is successful, store the username in a session variable
    $_SESSION['username'] = $username;
    
    // Redirect the user to the previous page if available
    if (isset($_SESSION['previous_page'])) {
        $previousPage = $_SESSION['previous_page'];
        header("Location: $previousPage");
    } else {
        // Redirect the user to a default page if the previous page is not available
        header("Location: index.php");
    }
    exit;
}
?>
<section class="py-4 py-xl-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Log in</h2>
                <p>Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-xl-4">
                <div class="card mb-5">
                    <div class="card-body d-flex flex-column align-items-center">
                        <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                            </svg></div>
                        <form class="text-center" method="post">
                            <input type="hidden" name="login" value="1"> <!-- Add this hidden input field -->
                            <div class="mb-3"><input class="form-control" type="text" name="username" placeholder="Username"></div>
                            <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit">Login</button></div>
                            <p class="text-muted">This is a static page<br>You can put any username you want</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php')?>
