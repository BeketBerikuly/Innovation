<div class="signup-page">
    <div class="inner-signup-page">
        <div class="header-signup-page">
            <h1>Sign up</h1>
        </div>
        <div class="main-signup-page">
            <form action = '' method="post">
                <div class="signup-inputs">
                    <input type="hidden" name="form" value="C"><!--  invisible input  --> 
                        <div class="wrapper">
                            <input type="text" name="name" placeholder="name" required pattern = "^[A-Za-z]+" data-title="Custom Title" title="alphanumeric characters, underscore and dot">  
                            <span><i class="im im-user-male"></i></span>
                        </div>
                        <div class="wrapper">
                            <input type="text" name="email" placeholder="email" pattern="^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" data-title="Custom Title" title="example@gmail.com"  required >  
                            <span><i class="im im-mail"></i></i></span>
                        </div>
                        <div class="wrapper">
                            <input type="text" name="password" placeholder="password" data-title="Custom Title" title="8 characters, at least one letter, one number" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required>  
                            <span><i class="im im-key"></i></span>
                        </div>    
                    </div>
                    <button>Create Account</button>
            </form>
        </div>
    </div>
</div>