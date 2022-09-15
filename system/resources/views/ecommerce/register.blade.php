<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AnekaBibit_Register</title>

    <link rel="stylesheet" href="{{ url('public/superadmin/register') }}/css/style.css">
</head>

<body>
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <form action="{{url('register')}}" method="POST" class="register-form">
                        @csrf
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="nama"  placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="username"><i class="zmdi zmdi-username"></i></label>
                            <input type="text" name="username" placeholder="Your Username"/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <label for="nomor_hp"><i class="zmdi zmdi-nomor_hp"></i></label>
                            <input type="nomor_hp" name="nomor_hp" placeholder="Your Nomor Hp"/>
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" placeholder="Password"/>
                        </div>
                        
                        <div class="form-group">
                            <button class="form-submit p-3 px-5" >Register</button> 
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="{{url('public/superadmin/register/images/signup-image.jpg')}}" alt="sing up image"></figure>
                    <a href="#" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
