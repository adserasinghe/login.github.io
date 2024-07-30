<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    
    <main>
        <section class="form">
            <h1 class="form__title">Log in to your Account</h1>
            <p class="form__description">Welcome back! Please, enter your information</p>

            <form method="post" action="auth.php">
                <label class="form-control__label">Username/Email</label>
                <input type="email" name="username" class="form-control">
        
                <label class="form-control__label">Password</label>
                <div class="password-field">
                    <input type="password" name="password" class="form-control" minlength="4" id="password">
                </div>
                <div class="password__settings">
                    <label class="password__settings__remember">
                        <input type="checkbox">
                        <span class="custom__checkbox">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                            </svg>                              
                        </span>
                        Remember me
                    </label>
        
                    <a href="#">Forgot Password?</a>
                </div>
        
                <button type="submit" class="form__submit" id="submit">Log In</button>
            </form>
        
            <p class="form__footer">
                Don't have an account?<br> <a href=" https://adserasinghe.github.io/register.github.io/">Create an account</a>
            </p>
        </section>
    </body>
    </html>