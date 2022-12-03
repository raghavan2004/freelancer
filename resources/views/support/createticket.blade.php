@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Form Editor</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Form Editor</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

       
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Tinymce wysihtml5</h4>
                        <p class="card-title-desc">Bootstrap-wysihtml5 is a javascript
                            plugin that makes it easy to create simple, beautiful wysiwyg editors
                            with the help of wysihtml5 and Twitter Bootstrap.</p>

                            <form method="post">
                                <textarea id="elm1" name="area"></textarea>
                            </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>

<!-- End Page-content -->
@endsection
