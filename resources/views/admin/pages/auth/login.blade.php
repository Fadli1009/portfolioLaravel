<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="{{ asset('adm/auth/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adm/auth/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adm/auth/assets/css/style.css') }}" rel="stylesheet">
    <title>Portfolio Admin Fadli</title>
</head>

<body>
    <section class="form-01-main">
        <div class="form-cover">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-sub-main">
                            <form action="{{ route('login.action') }}" method="post">
                                @csrf
                                <div class="_main_head_as">
                                    <a href="#">
                                        <img
                                            src="data:image/jpeg;base64,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">
                                    </a>
                                </div>
                                <div class="form-group">
                                    <input id="email" name="email" class="form-control _ge_de_ol" type="text"
                                        placeholder="Enter Email" required="" aria-required="true"
                                        value="{{ old('email') }}">
                                </div>

                                <div class="form-group">
                                    <input id="password" type="password" class="form-control" name="password"
                                        placeholder="********" required="required">
                                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Masuk</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

</html>