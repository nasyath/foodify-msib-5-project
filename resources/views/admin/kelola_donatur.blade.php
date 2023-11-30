@extends('themes.template')
@section('content')
@php
$ar_judul = ['No','Nama','Alamat','Nomor HP','Deskripsi','Aksi'];
$no = 1;
@endphp


                <!-- End Page-content -->
                <div class="page-content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="position-relative">
                                            <div class="modal-button mt-2">
                                                <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light mb-2 me-2" data-bs-toggle="modal" data-bs-target=".add-new-order"><i class="mdi mdi-plus me-1"></i> Tambah Data Donatur </button>
                                            </div>
                                        </div><br><br><br>
                                        <div class="table-responsive">
                                            <table class="table align-middle table-nowrap">
                                                <thead>
                                                    <tr>
                                                    @foreach($ar_judul as $jdl)
                                                        <th>{{ $jdl }}</th>
                                                    @endforeach
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $no++ }}</td>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded-circle me-2" />
                                                                <a href="#" class="text-body">PT KIKO</a>
                                                            </div>
                                                        </td>
                                                        <td>Jakarta</td>
                                                        <td>082251716828</td>
                                                        <td>
                                                        KIKO ENAK TAU!
                                                        </td>
                                                        <td>
                                                            <div class="d-flex gap-3 justify-content-center">
                                                                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-placement="top" title="View"  data-bs-target=".orderdetailsModal" class="text-primary">
                                                                <i class="mdi mdi-eye font-size-18"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" class="text-secondary">
                                                                    <i class="mdi mdi-pencil font-size-18"></i>
                                                                </a>
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" class="text-danger">
                                                                    <i class="mdi mdi-delete font-size-18"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!--  Extra Large modal example //pop up add new order -->
                <div class="modal fade add-new-order" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myExtraLargeModalLabel">Tambah Data Donatur</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                               <div class="row">
                                <!-- <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label" for="AddOrder-Product">Choose Product</label>
                                        <select class="form-select" id="AddOrder-Product">
                                            <option  selected> Select Product </option>
                                            <option>Adidas Running Shoes</option>
                                            <option>Puma P103 Shoes</option>
                                            <option>Adidas AB23 Shoes</option>
                                        </select>
                                    </div>
                                </div> -->
                                   <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="AddOrder-Billing-Name">Nama Donatur</label>
                                            <input type="text" class="form-control" placeholder="Nama" id="AddOrder-Billing-Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="AddOrder-Billing-Name">Alamat</label>
                                            <input type="text" class="form-control" placeholder="Alamat Lengkap" id="AddOrder-Billing-Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="AddOrder-Billing-Name">Nomor HP</label>
                                            <input type="text" class="form-control" placeholder="Nomor HP" id="AddOrder-Billing-Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="AddOrder-Billing-Name">Deskripsi</label>
                                            <input type="text" class="form-control" placeholder="Isi deskripsi mu" id="AddOrder-Billing-Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="AddOrder-Billing-Name">Foto</label>
                                            <input type="text" class="form-control" placeholder="Upload foto" id="AddOrder-Billing-Name">
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Date</label>
                                            <input type="text" class="form-control" placeholder="Select Date" id="order-date">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="AddOrder-Total">Total</label>
                                            <input type="text" class="form-control" placeholder="$565" id="AddOrder-Total">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="AddOrder-Payment-Status">Payment Status</label>
                                            <select class="form-select" id="AddOrder-Payment-Status">
                                                <option  selected> Select Card Type </option>
                                                <option>Paid</option>
                                                <option>Chargeback</option>
                                                <option>Refund</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label" for="AddOrder-Payment-Method">Payment Method</label>
                                            <select class="form-select" id="AddOrder-Payment-Method">
                                                <option  selected> Select Payment Method </option>
                                                <option> Mastercard</option>
                                                <option>Visa</option>
                                                <option>Paypal</option>
                                                <option>COD</option>
                                            </select>
                                        </div>
                                    </div> -->
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


                <!--  successfully modal  //pop up order berhasil-->
                <div id="success-btn" class="modal fade" tabindex="-1" aria-hidden="true" data-bs-scroll="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body">
                               <div class="text-center">
                                   <i class="bx bx-check-circle display-1 text-success"></i>
                                   <h3 class="mt-3">Order Completed Successfully</h3>
                               </div>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Modal pop up detail ordernya-->
                <div class="modal fade orderdetailsModal" tabindex="-1" role="dialog" aria-labelledby="orderdetailsModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="orderdetailsModalLabel">Details Donatur</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div align="center">
                                <b>COMING SOON!!</b>
                            </div>
                            <!-- <div class="modal-body">
                                <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                                <p class="mb-4">Nama Donatur: <span class="text-primary">Neal Matthews</span></p>

                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap">
                                        <thead>
                                            <tr>
                                            <th scope="col">Product</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div>
                                                        <img src="assets/images/product/img-1.jpg" alt="" class="rounded avatar-md">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14">Waterproof Mobile Phone</h5>
                                                        <p class="text-muted mb-0">$ 225 x 1</p>
                                                    </div>
                                                </td>
                                                <td>$ 255</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div>
                                                        <img src="assets/images/product/img-2.jpg" alt="" class="rounded avatar-md">
                                                    </div>
                                                </th>
                                                <td>
                                                    <div>
                                                        <h5 class="text-truncate font-size-14">Smartphone Dual Camera</h5>
                                                        <p class="text-muted mb-0">$ 145 x 1</p>
                                                    </div>
                                                </td>
                                                <td>$ 145</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Sub Total:</h6>
                                                </td>
                                                <td>
                                                    $ 400
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Shipping:</h6>
                                                </td>
                                                <td>
                                                    Free
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <h6 class="m-0 text-right">Total:</h6>
                                                </td>
                                                <td>
                                                    $ 400
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div> -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->
            


            
 @endsection
