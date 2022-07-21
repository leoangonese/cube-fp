<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<head>
    <title>Cube - Login</title>
</head>


<body class='bg-dark'>
    <div>
        <h3 class="text-center text-success pt-5">Cube Login</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form " action="" method="post">

                            <div class="form-group">
                                <label for="username" class="text-success">Username:</label><br>
                                <input type="text" name="login" id="name" class="form-control text-dark">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-success">Password:</label><br>
                                <input type="text" name="senha" id="password" class="form-control text-dark">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="acao" class="btn btn-outline-success btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>