@extends('../layouts/master_inventory')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Product Create</h1>
          </div>
          <div class="col-sm-6 d-none d-sm-block">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sales</a></li>
              <li class="breadcrumb-item"><a href="#">Product</a></li>
              <li class="breadcrumb-item"><a href="#">Product List</a></li>
              <li class="breadcrumb-item active">Product Create</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card card-default">
              <div class="card-header">
                <a href="./product-list.html" class="btn bg-purple">Back</a>
              </div>
              <div class="card-body p-0">
                <div class="bs-stepper">
                  <div class="bs-stepper-header" role="tablist">
                    <div class="step" data-target="#product-information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="product-information-part" id="product-information-part-trigger">
                        <span class="bs-stepper-circle" hidden>1</span>
                        <span class="bs-stepper-label">Product Information</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#product-variant-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="product-variant-part" id="product-variant-part-trigger">
                        <span class="bs-stepper-circle" hidden>2</span>
                        <span class="bs-stepper-label">Variant</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#product-extra-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="product-extra-part" id="product-extra-part-trigger">
                        <span class="bs-stepper-circle" hidden>3</span>
                        <span class="bs-stepper-label">Extra</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#product-recipe-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="product-recipe-part" id="product-recipe-part-trigger">
                        <span class="bs-stepper-circle" hidden>4</span>
                        <span class="bs-stepper-label">Recipe</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#product-online-store-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="product-online-store-part" id="product-online-store-part-trigger">
                        <span class="bs-stepper-circle" hidden>5</span>
                        <span class="bs-stepper-label">Online Store</span>
                      </button>
                    </div>
                  </div>
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="product-information-part" class="content" role="tabpanel" aria-labelledby="product-information-part-trigger">
                      <div class="form-group">
                        <label>Outlet List <span class="text-red">*</span> </label>
                        <select class="select2 bg-purple" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                          <option class="bg-purple" selected data-select2-id="20">Toko Aslan</option>
                          <option>Toko AlfaMaret</option>
                          <option>Warung Makan Gahari Baru</option>
                          <option>Swalayan Sehari-hari</option>
                        </select>

                        <span class="selection bg-purple"><span class="select2-selection select2-selection--multiple bg-purple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered bg-purple"></ul></span></span><span class="dropdown-wrapper bg-purple" aria-hidden="true"></span>
                        
                      </div>
                      
                      <div class="form-group">
                        <label for="InputProductName">Product Name <span class="" style="color: red;">*</span> </label>
                        <input type="text" class="form-control" name="productName" id="InputProductName" placeholder="Enter Product Name">
                      </div>
                      <div class="form-group">
                        <label>Product Description <span class="" style="color: red;">*</span></label>
                        <textarea id="summernote" name="productDescription">
                          Place <em>product</em> <u>description</u> <strong>here</strong>
                        </textarea>
                      </div>
                      <div class="card card-default">
                        <div class="card-header">
                          <h3 class="card-title">Product Image <small>Use 1:1 aspect ratio with min. size 10Kb and max 1Mb. Image format .jpg .jpeg .png and the min size is 100px x 100px (For optimal images use a min size of 1000px x 1000px). Max 5 photos.</small></h3>
                        </div>
                        <div class="card-body">
                          <div id="actions" class="row">
                            <div class="col-lg-6">
                              <div class="btn-group w-100">
                                <span class="btn btn-success col fileinput-button">
                                  <i class="fas fa-plus"></i>
                                  <span>Add files</span>
                                </span>
                                <button type="submit" class="btn btn-primary col start">
                                  <i class="fas fa-upload"></i>
                                  <span>Start upload</span>
                                </button>
                                <button type="reset" class="btn btn-warning col cancel">
                                  <i class="fas fa-times-circle"></i>
                                  <span>Cancel upload</span>
                                </button>
                              </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center">
                              <div class="fileupload-process w-100">
                                <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                  <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="table table-striped files" id="previews">
                            <div id="template" class="row mt-2">
                              <div class="col-auto">
                                  <span class="preview"><img src="data:," alt="" data-dz-thumbnail /></span>
                              </div>
                              <div class="col d-flex align-items-center">
                                  <p class="mb-0">
                                    <span class="lead" data-dz-name></span>
                                    (<span data-dz-size></span>)
                                  </p>
                                  <strong class="error text-danger" data-dz-errormessage></strong>
                              </div>
                              <div class="col-4 d-flex align-items-center">
                                  <div class="progress progress-striped active w-100" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                    <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
                                  </div>
                              </div>
                              <div class="col-auto d-flex align-items-center">
                                <div class="btn-group">
                                  <button class="btn btn-primary start">
                                    <i class="fas fa-upload"></i>
                                    <span>Start</span>
                                  </button>
                                  <button data-dz-remove class="btn btn-warning cancel">
                                    <i class="fas fa-times-circle"></i>
                                    <span>Cancel</span>
                                  </button>
                                  <button data-dz-remove class="btn btn-danger delete">
                                    <i class="fas fa-trash"></i>
                                    <span>Delete</span>
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card -->
                      <div class="form-group">
                        <label>Product Category <span class="" style="color: red;">*</span></label>
                        <select class="form-control select2" style="width: 100%;">
                          <option selected="selected">-</option>
                          <option  value="food-fresh-long-lasting" id="food-fresh-long-lasting">Bahan makanan segar yang tahan lama</option>
                          <option  value="household-cleaning-product" id="household-cleaning-product">Produk kebersihan rumah tangga</option>
                          <option  value="daily-need-product" id="daily-need-product">Barang kebutuhan sehari-hari</option>
                          <option  value="soap-detergent-product" id="soap-detergent-product">Sabun dan deterjen</option>
                          <option  value="cigarette-tobacco-product" id="cigarette-tobacco-product">Rokok dan tembakau</option>
                          <option  value="candy-chocolate-product" id="candy-chocolate-product">Permen dan coklat</option>
                          <option  value="drink-product" id="">Minuman</option>
                          <option  value="dry-food-product" id="dry-food-product">Makanan kering</option>
                          <option  value="can-product" id="can-product">Makanan kaleng</option>
                        </select>
                        <div class="d-flex">
                          <p>Category not available ?</p> &nbsp; <p class="text-purple">Create New Category</p>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail">Next option <span class="" style="color: red;">*</span></label>
                        <!-- checkbox -->
                        <div class="form-group clearfix">
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" id="checkboxPrimary1" checked>
                            <label for="checkboxPrimary1">Favorite Product</label>
                          </div>
                          <div class="icheck-primary d-inline">
                            <input type="checkbox" id="checkboxPrimary2">
                            <label for="checkboxPrimary2">Shown in Menu</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail">Pemantauan inventaris. <span class="" style="color: red;">*</span></label>
                        <div class="card card-secondary">
                          <div class="card-body">
                            <div class="d-flex">
                              <div class="form-group">
                                <input type="checkbox" id="inventory-monitor-switch" name="my-checkbox" checked data-bootstrap-switch>
                              </div>
                              <p>Aktifkan pemantauan inventaris.</p>
                            </div>
                            <div class="form-group">
                              <label for="InputProductName">Product Minimum Stock <img src="../../../../../dist/img/info.png" title="Aktifkan pemberitahuan peringatan stok melalui menu Pengaturan Notifikasi" class="w-2 h-2" > </label>
                              <input type="text" class="form-control" placeholder="0" name="productName" id="stockproduct" placeholder="Enter Product Name">
                            </div>
                          </div>
                        </div>
                        <!-- /.card -->
                      </div>

                      <div class="form-group ">
                        <div class="d-flex">
                          <div>
                            <label for="">Serial Number <img src="../../../../../dist/img/info.png" title="Aktifkan pemantauan inventaris untuk mengaktifkan nomor seri/serial number" class="w-2 h-2" > </label>
                          </div>
                          <div>
                            <p>Kasir harus memasukkan nomor seri secara manual selama transaksi.</p> 
                          </div>
                        </div>
                        <input type="text" class="form-control" name="productSerialNumber" id="productSerialNumber" placeholder="Enter Serial Number">
                      </div>

                      <div class="form-group ">
                        <label for="">Batch Number <img src="../../../../../dist/img/info.png" title="Aktifkan pemantauan inventaris untuk mengaktifkan nomor batch" class="w-2 h-2" > </label>
                        <input type="text" class="form-control" name="productBatchNumber" id="productBatchNumber" placeholder="Enter Batch Number">
                      </div>
                      
                      <div class="form-group">
                        <label>Group</label>
                        <select class="select2" multiple="multiple" data-placeholder="Select Group" style="width: 100%;">
                          <option>-</option>
                        </select>
                        <p> <input type="checkbox"> Set as parent </p>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail">Memungkinkan untuk menandai produk sebagai tidak dapat dijual.</label>
                        <div class="card card-secondary">
                          <div class="card-body">
                            <div class="d-flex">
                              <div class="form-group">
                                <input type="checkbox" id="inventory-monitor-switch" name="my-checkbox" checked data-bootstrap-switch>
                              </div>
                              <p>Memungkinkan kasir untuk menandai produk sebagai tidak tersedia/tidak dapat dijual di POS/toko online.</p>
                            </div>
                          </div>
                        </div>
                        <!-- /.card -->
                      </div>
                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    <div id="product-variant-part" class="content" role="tabpanel" aria-labelledby="product-variant-part-trigger">
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    <div id="product-extra-part" class="content" role="tabpanel" aria-labelledby="product-extra-part-trigger">
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    <div id="product-recipe-part" class="content" role="tabpanel" aria-labelledby="product-recipe-part-trigger">
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>
                    <div id="product-online-store-part" class="content" role="tabpanel" aria-labelledby="product-online-store-part-trigger">
                      <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection