<?php
use App\Dictionary\Dictionary;
?>
</head>
<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>KABUM</b>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg"><?= Dictionary::dictionary('label')['loginTitle']; ?></p>
                <div class="input-group mb-3">
                    <input type="email" id="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" id="senha" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="buttom" class="btn btn-primary btn-block" onclick="logar()"><?= Dictionary::dictionary('label')['loginButton'] ?></button>
                    </div>
                <!-- /.col -->
                </div>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
</body>