@extends('themes.template')
@section('content')
            <!-- ============================================================== -->

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xxl-4">
                                <div class="user-sidebar">
                                    <div class="card">
                                        <div class="card-body p-0">
                                            <div class="user-profile-img">
                                                <img src="{{('backend/assets/images/pattern-bg.jpg')}}"
                                                    class="profile-img profile-foreground-img rounded-top" style="height: 120px;"
                                                    alt="">
                                                <div class="overlay-content rounded-top">
                                                    <div>
                                                        <div class="user-nav p-3">
                                                            <div class="d-flex justify-content-end">
                                                                <div class="dropdown">
                                                                    <a class="dropdown-toggle" href="#" role="button"
                                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                                        <i data-eva="more-horizontal-outline" data-eva-width="20" data-eva-height="20"
                                                                            class="fill-white"></i>
                                                                    </a>
            
                                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                                        <li><a class="dropdown-item" href="#">Another action</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item" href="#">Something else
                                                                                here</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end user-profile-img -->
            
                                            <div class="mt-n5 position-relative">
                                                <div class="text-center">
                                                    <img src="{{('backend/assets/images/users/avatar-1.jpg')}}" alt=""
                                                        class="avatar-xl rounded-circle img-thumbnail">
            
                                                    <div class="mt-3">
                                                        <h5 class="mb-1">Jennifer Bennett</h5>
                                                        <div>
                                                            <a href="#" class="badge bg-success-subtle text-success m-1"></a>
                                                            

                                                            <a href="#" class="badge bg-success-subtle text-success m-1"></a>
                                                            <a href="#" class="badge bg-success-subtle text-success m-1"></a>
                                                        </div>

                                                        <div class="mt-4">
                                                            <a href="#" class="btn btn-primary waves-effect waves-light btn-sm"><i class="bx bx-send me-1 align-middle"></i> Send Message</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
            
                                            <div class="p-3 mt-3">
                                                <div class="row text-center">
                                                    <div class="col-6 border-end">
                                                        <div class="p-1">
                                                            <h5 class="mb-1">1,269</h5>
                                                            <p class="text-muted mb-0">Products</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="p-1">
                                                            <h5 class="mb-1">5.2k</h5>
                                                            <p class="text-muted mb-0">Followers</p>
                                                        </div>
                                                    </div>
                                                </div>
            
                                               
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->

                                    <!-- end card -->
                                </div>
                            </div>
                            <div class="col-xxl-8">
                            <div class="card">
                                        <div class="card-header">
                                            <h4 class="card-title">Personal Information</h4>
                                        </div>
                                        <div class="card-body">

                                            <p class="font-size-15 mb-1">Hi my name is Jennifer Bennett.</p>
                                            <p class="font-size-15">I'm the Co-founder and Head of Design at Company agency.</p>

                                            <p class="text-muted">Been the industry's standard dummy text To an English person. Our team collaborators and clients to achieve growth.</p>


                                                <h5 class="font-size-15">Experience :</h5>
                                            <ul class="list-unstyled mb-0 pt-1">
                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae libero venenatis faucibus</li>
                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                                            </ul>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->

                            </div>
                        </div>
                        
                    </div> <!-- container-fluid -->
                </div>
@endsection