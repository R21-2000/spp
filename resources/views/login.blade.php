<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Login | MyApp</title>

    <link href="template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="template/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-dark">
    <div class="container">
        
        <div class="row-justify-content-center mt-5">
            
            <div class="col-xl-5 col-lg-12 col-md-9">
                
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900mb-4">Welcome Back!!</h1>
                                    </div>
                                <form class="user"action="{{url('login/proses')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" aria-describedby="emailHelp" placeholder="Username" name="username" autofocus required value="{{old('username')}}">
                                        </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password" reqiured>
                                                </div>
                                                    <input type="submit" name="login" value="login" class="btn btn-primary btn-user btn-block">
                                                    <hr>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="template/vendor/jquery/jquery.min.js"></script>
                <script src="template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>

                    <script src="template/js/sb-admin-2.min.js"></script>
                    <script src="template/js/sweetalert2@11.js"></script>
                    <script>
                        @error('gagal')
                    const Toast = $wal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                            toast.addEventListener('mouseenter', $wal.stopTimer)
                            toast.addEventListener('mouseleave', $wal.resumeTimer)
                        }
                    })
                                @enderror
                    </script>
            </body>
</html>