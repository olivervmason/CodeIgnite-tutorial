<html>
    <head>
        <title>Blog header</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/pulse/bootstrap.css" >
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css" >
        <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    </head>

    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <div class= "navbar-header">
                <h1><a class="navbar-brand" href="/codeigniter"> CodeIgniter Blog</a></h1>
                <div id="navbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>"> Home</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>about">About</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>posts">All Posts</a></li>
                        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>categories">Posts by Category</a></li>
                    </ul>
                </div>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <li>
                    <a class="btn btn-secondary my-2 my-sm-0" href="<?php echo base_url('/categories/'); ?>create">Create Category</a>
                </li>
                <li>
                    <a class="btn btn-secondary my-2 my-sm-0" href="<?php echo base_url('/posts/'); ?>create">Create Post</a>
                </li>
            </form>
        </div>
    </nav>

    <div class="container">
