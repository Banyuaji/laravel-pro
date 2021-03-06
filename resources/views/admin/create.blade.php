<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - CRUD User</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.include.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('admin.include.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="jumbotron">
                        <h1 class="display-3">Create user</h1>
                        <p class="lead">for managing users</p>
                        <hr class="my-2">
                    </div>
                    <a href="{{ route('get') }}" class="btn btn-primary my-3">&larr; Kembali</a>
                    <div class="card">
                        <h3 class="card-header">Add data</h3>
                        <div class="card-body">
                            <form action="{{ route('store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="title">username</label>
                                    <input type="text" name="username" id="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="title">password</label>
                                    <input type="text" name="password" id="title" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="content">name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="content">id_level</label>
                                    <input type="" name="level" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"> Submit </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
@include('admin.include.footer')
