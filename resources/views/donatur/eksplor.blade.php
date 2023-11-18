@extends('themes.template')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <h5 class="card-title">List Penerima<span class="text-muted fw-normal ms-2">(834)</span></h5>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                            </div>
                            <div class="flex-1 ms-3">
                                <h5 class="font-size-16 mb-1"><a href="#" class="text-body">Phyllis Gatlin</a></h5>
                                <span class="badge bg-success-subtle text-success mb-0">Menerima Donasi</span>
                            </div>
                        </div>
                        <div class="mt-3 pt-1">
                            <p class="text-muted mb-0"><i class="mdi mdi-phone font-size-15 align-middle pe-2 text-primary"></i>
                                070 2860 5375</p>
                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-email font-size-15 align-middle pe-2 text-primary"></i>
                                PhyllisGatlin@spy.com</p>
                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                52 Ilchester MYBSTER 9WX</p>
                        </div>

                        <div class="d-flex gap-2 pt-4">
                            <a href="{{ route('detail_penerima') }}" type="button" class="btn btn-soft-primary btn-sm w-50"><i class="bx bx-user me-1"></i> Profile</a>
                            <button type="button" class="btn btn-primary btn-sm w-50"><i class="bx bx-check-square me-1"></i> Terima</button>
                        </div>


                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->


        </div>
        <!-- end row -->

        <div class="row g-0 align-items-center pb-4">
            <div class="col-sm-6">
                <div>
                    <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="float-sm-end">
                    <ul class="pagination mb-sm-0">
                        <li class="page-item disabled">
                            <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">3</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">4</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link">5</a>
                        </li>
                        <li class="page-item">
                            <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<!--  successfully modal  -->
<div id="success-btn" class="modal fade" tabindex="-1" aria-hidden="true" data-bs-scroll="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <i class="bx bx-check-circle display-1 text-success"></i>
                    <h3 class="mt-3">User Added Successfully</h3>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--  Extra Large modal example -->
<div class="modal fade add-new" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myExtraLargeModalLabel">Add New</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="AddNew-Username">Username</label>
                            <input type="text" class="form-control" placeholder="Enter Username" id="AddNew-Username">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Position</label>
                            <select class="form-select">
                                <option selected>Select Position</option>
                                <option>Full Stack Developer</option>
                                <option>Frontend Developer</option>
                                <option>UI/UX Designer</option>
                                <option>Backend Developer</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="AddNew-Email">Email</label>
                            <input type="text" class="form-control" placeholder="Enter Email" id="AddNew-Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label" for="AddNew-Phone">Phone</label>
                            <input type="text" class="form-control" placeholder="Enter Phone" id="AddNew-Phone">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 text-end">
                        <button type="button" class="btn btn-danger me-1" data-bs-dismiss="modal"><i class="bx bx-x me-1"></i> Cancel</button>
                        <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#success-btn" id="btn-save-event"><i class="bx bx-check me-1"></i> Confirm</button>
                    </div>
                </div>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection