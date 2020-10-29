<div class="login-page">
    <div class="header-login-page">
        <h1>Sign in</h1>
    </div>
    <div class="inner-login-page">  
        <div class="user-icon">
            <i class="im im-user-circle"></i>
        </div>
        <!--login-form------------------------------------>
        <form action = '' method="post">
            <div class="login-input">
                <div class="wrapper">
                <input type="hidden" name="form" value="A"><!--  invisible input  -->                            
                    <input name="email" placeholder="example@gmail.com" pattern="^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" data-title="Custom Title" title="example@gmail.com"  required >  
                    <span><i class="im im-mail"></i></i></span>
                </div>
                <div class="wrapper">
                    <input type="password" name="password" placeholder="password"  data-title="Custom Title" title="8 characters, at least one letter, one number" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required>  
                    <span><i class="im im-key"></i></span>
                </div>
            </div>
            <button type="submit">Login</button>
        </form>
        <!--login-form------------------------------------>
    </div>
</div>


