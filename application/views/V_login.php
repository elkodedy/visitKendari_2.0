
<style>
    .nav-hide{
        display: none !important;
    }
</style>

<section>
    <div class="container">
        <div class="navbar-logo pt-3">
            <a href="<?php echo base_url('home'); ?>" class="nav-link col-2">
                <img class="img-navbar" src="<?php echo base_url('assets/images/logo.png')?>" alt="" width="90px" height="80px">
            </a>
        </div>
        <div class="row justify-content-center p-3">
            <div class="border p-5">
                <form action="<?php echo base_url('admin/home'); ?>" method="post">
                    <div class="text-center">
                        <h1>Login</h1>
                    </div>  
                    <!-- Form -->
                    <div class="form-group">
                        <label for="exampleInputUsername">Username:</label>
                        <input name="username" type="text" class="form-control form-in" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Username" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password:</label>
                        <input name="password" type="password" class="form-control form-in" id="exampleInputPassword1" placeholder="Password" reqired>
                    </div>
                    <div class="form-group">
                        <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                        <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your privacy with anyone else.</small> -->
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success btn-in">Login</button>
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <small id="" class="form-text text-muted">Atau Masuk Dengan </small>
                        <span class="icon-google mr-3" style="width: 50px; font-size: 25px; cursor: pointer"></span>
                        <span class="icon-facebook" style="width: 50px; font-size: 25px; cursor: pointer"></span>
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <small id="" class="form-text text-muted">Belum Punya Akun Irent? klik <u style="cursor: pointer;"><b><a href="<?php echo site_url('/home/daftar')?>">Daftar</a></b></u> sekarang!</small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>