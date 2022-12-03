@extends('admin.admin_master')
@section('admin')


<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Data Tables</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contract</a></li>
                            <li class="breadcrumb-item active">Upload / download Contract</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->


        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Download Contract</h4>
                        <p class="card-title-desc">Please download your contract, sign and upload the same</p>

                        <div>                           
                            <div class="d-grid mb-3">
                                <button type="button" class="btn btn-primary btn-lg waves-effect waves-light">Download Contract</button>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Upload Contract Here</h4>                       
                        <div class="row">
                            <div>
                                <form action="#" class="dropzone dz-clickable">
                                    
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted ri-upload-cloud-2-line"></i>
                                        </div>
                                        
                                        <h4>Drop files here or click to upload.</h4>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row -->

        
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Uploaded Contracts</h4>
                       
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Document Name</th>
                                <th>Document Type</th>
                                <th>Uploaded On</th>
                                <th>Action</th>                                
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>Download / Delete</td>                               
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>Download / Delete</td>                               
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>Download / Delete</td>                               
                            </tr>                         
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>Download / Delete</td>                               
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        
    </div> <!-- container-fluid -->
</div>


@endsection