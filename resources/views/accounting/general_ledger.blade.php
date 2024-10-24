@extends('../layouts/master_accounting')

@section('title','General Ledger')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>@yield('title') List {{ $general_ledger_counts->count()}} data<i class="far fa-star"></i> </h1>
          </div>
          <div class="col-sm-6 d-none d-sm-block">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sales</a></li>
              <li class="breadcrumb-item"><a href="#">Product</a></li>
              <li class="breadcrumb-item ">@yield('title') List</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content pb-3 " style="height:1200px;">


      <div class="btn-group btn-group-toggle mt-2 mb-2" data-toggle="buttons"
          style="outline: 1px solid purple;">
          <label class="btn btn-purple">
              <input type="radio" name="options" id="btn-card-table" autocomplete="off" checked> <i
                  class="fa fa-list"></i>
          </label>
          <label class="btn btn-purple active">
              <input type="radio" name="options" id="btn-card-kanban" autocomplete="off"> <i
                  class="fa fa-columns"></i>
          </label>
      </div>
      <div class="bg-white p-2"style="overflow-x: auto; overflow-y: auto; max-height: 1100px;">


          <div class="row" hidden>
              <div class="col-lg-12">

                  <div class="d-flex ">
                      <div class="col-lg-4">
                          <ul class="">
                              <li class="dropdown"
                                  style="list-style: none;list-style-type: none !important;border: 1px solid black;border-radius: 8px;">
                                  <a id="dropdownSubMenu1" href="#" data-toggle="dropdown"
                                      aria-haspopup="true" aria-expanded="false"
                                      class="nav-link dropdown-toggle">Stock Quantity</a>
                                  <ul aria-labelledby="dropdownSubMenu1"
                                      class="dropdown-menu border-0 shadow  m-3 p-3">
                                      <label>Stock Quantity Range</label>
                                      <div class="d-flex">
                                          <input placeholder=" min 0">
                                          <input placeholder=" max 0">
                                      </div>
                                      <!-- checkbox -->
                                      <div class="form-group clearfix mt-2">
                                          <div class="icheck-primary d-inline">
                                              <input type="checkbox" id="checkboxPrimary1" checked>
                                              <label for="checkboxPrimary1">
                                                  minimum stock
                                              </label>
                                          </div>
                                      </div>

                                      <div>
                                          <a class="btn btn-sm bg-gray">Reset</a>
                                          <a class="btn btn-sm bg-purple">Process</a>
                                      </div>

                                  </ul>
                              </li>
                          </ul>
                      </div>
                      <div class="col-lg-4">
                          <div class="form-group ml-2 shadow-none"
                              style="outline: none !important;order:1px solid #ccc !important;text-align:center;padding-top: 5px; height: 20px !important;margin-bottom: 10px;">
                              <select class="form-control select2 no-outline shadow-none"
                                  style="outline: none !important;order:1px solid #ccc !important;width: 100%;padding-top: 5px;height:30px !important;">
                                  <option selected="selected" value="category-all" id="category-all"> Semua
                                      Kategori</option>
                                  <option value="food-fresh-long-lasting" id="food-fresh-long-lasting">Bahan
                                      makanan segar yang tahan lama</option>
                                  <option value="household-cleaning-product" id="household-cleaning-product">
                                      Produk kebersihan rumah tangga</option>
                                  <option value="daily-need-product" id="daily-need-product">Barang kebutuhan
                                      sehari-hari</option>
                                  <option value="soap-detergent-product" id="soap-detergent-product">Sabun dan
                                      deterjen</option>
                                  <option value="cigarette-tobacco-product" id="cigarette-tobacco-product">
                                      Rokok dan tembakau</option>
                                  <option value="candy-chocolate-product" id="candy-chocolate-product">Permen
                                      dan coklat</option>
                                  <option value="drink-product" id="">Minuman</option>
                                  <option value="dry-food-product" id="dry-food-product">Makanan kering
                                  </option>
                                  <option value="can-product" id="can-product">Makanan kaleng</option>
                              </select>
                          </div>

                      </div>
                  </div>

              </div>
          </div>


          <div class="row">
              <div class="col-lg-12 d-flex ">
                  <div class="col-lg-5 di-flex">
                      <div class="form-group">
                          <div class="input-group">
                              <input type="date" class="form-control float-right" id="reservation"
                                  value="2024-07-01"> <span class="ml-2 mr-2 mt-1 ">To</span>
                              <input type="date" class="form-control float-right" id="" value="2024-07-30">

                          </div>
                          <!-- /.input group -->
                      </div>
                      <!-- /.form group -->

                  </div>

                  <div class="col-lg-2" style="width: 100%;">
                      <a href="./product-list-create.html" class="btn btn-purple bg-purple"> <i
                              class="fa fa-plus"></i> New Chart of Account</a>
                  </div>

                  <div class="col-lg-6" style="width: 100%;">
                      <div class="form-group">
                          <div class="btn-group btn-group-toggle" data-toggle="buttons">
                              <label class="btn bg-purple active">
                                  <input type="radio" name="options" id="btn-all-tampil-menu"
                                      autocomplete="off" checked> Active
                              </label>
                              <label class="btn bg-purple">
                                  <input type="radio" name="options" id="btn-tampil-menu"
                                      autocomplete="off">Inactive
                              </label>
                          </div>
                      </div>
                  </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body" id="card-table" style="overflow-x: auto; overflow-y: auto; max-height: 1000px;">
              @foreach ($general_ledger_members as $glm)
                <h5 style="font-weight:bolder;color:purple;margin-top:20px;">{{$glm->account_name}}</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Kode Akun</th>
                            <th>Debit</th>
                            <th>Kredit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($general_ledgers as $gl)
                            @if ($gl->group_code == $glm->group_code)
                                <tr>
                                    <td>{{ $gl->date }}</td>
                                    <td>{{ $gl->account_code }}</td>
                                    <td>Rp {{ number_format($gl->debit, 2) }}</td>
                                    <td>Rp {{ number_format($gl->credit, 2) }}</td>
                                </tr>
                            @else
                                <tr hidden>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            @endif
                        @endforeach
                        <tr>
                            <td></td>
                            <td>Jumlah</td>
                            <td>
                                Rp {{ number_format($general_ledgers->where('group_code', $glm->group_code)->sum('debit'), 2) }}
                            </td>
                            <td>
                                Rp {{ number_format($general_ledgers->where('group_code', $glm->group_code)->sum('credit'), 2) }}
                            </td>
                        </tr>
                    </tbody>
                </table>

                        <tr>
                            <td></td>
                            <td>Jumlah Semua</td>
                            <td>
                                Rp {{ number_format($total_debit_all, 2) }}
                            </td>
                            <td>
                                Rp {{ number_format($total_credit_all, 2) }}
                            </td>
                        </tr>
                        
              @endforeach
              </div>
              <div class="card-body" id="card-kanban"
                  style="overflow-x: auto; overflow-y: auto; max-height: 400px;">
                  <div class="row bg-white" style="padding:3px">
                      <div class="col-12 col-sm-6 col-md-6" id="tampil-menu-kanban">
                          <div class="info-box">
                              <span class="info-box-icon bg-info elevation-1"><img
                                      src="../../../dist/img/PRODUT-MASTER/klikindomaret.com/MAKANAN/BAHAN-MASAKAN/MAKANAN-POKOK/BERAS-DAN-TEPUNG/BR-BPAPA.png"
                                      style="width:70px;height:60px;"></span>

                              <div class="info-box-content">
                                  <span class="info-box-text"> Beras Premium Sania 5kg </span>
                                  <span class="info-box-number">
                                      Rp 270.000,00-
                                  </span>
                              </div>
                              <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                      </div>
                      <!-- /.col -->
                      <div class="col-12 col-sm-6 col-md-6" id="tidak-tampil-menu-kanban">
                          <div class="info-box mb-3">
                              <span class="info-box-icon bg-danger elevation-1"><img
                                      src="../../../dist/img/PRODUT-MASTER\klikindomaret.com\KESEHATAN\ANTISEPTIK-DAN-SANITASI\TISSUE\TISSUE-KERING\TS-FTN.png"
                                      style="width:70px;height:60px;"></span>

                              <div class="info-box-content">
                                  <span class="info-box-text">Facial Tissue non parfume</span>
                                  <span class="info-box-number">Rp 37.000,00-</span>
                              </div>
                              <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                      </div>
                      <!-- /.col -->

                      <!-- fix for small devices only -->
                      <div class="clearfix hidden-md-up"></div>

                  </div>
                  <!-- /.row -->
              </div>
          </div>
          <!-- /.card -->
      </div>
    </section>

  
    
@endsection

  @push('scripts')
    <!-- daterangepicker -->
    <script src="{{ asset('adminlte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Page specific script -->
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>

<script>
  // Example condition, replace this with your actual logic
  var inventoryModuleActive = true;
  var inventoryDashboardActive = false;
  var inventoryProductActive = true;
  var inventorySupplierActive = false;
  var inventoryPurchaseActive = false;
  var inventoryIngredientRecipeActive = false;
  var inventoryMenuBookActive = false;
  var inventoryCategoryActive = false;
  var inventoryServiceProductActive = false;
  var inventoryExtraProductActive = false;
  var inventoryProductBundlingActive = false;
  var inventoryDepositActive = false;
  var inventoryOnlineVehicleActive = false;
  var inventoryPrintBarcodeActive = false;


  function setActive(id, isActive) {
      var element = document.getElementById(id);
      if (element) {
          if (isActive) {
              element.classList.add('active');
          } else {
              element.classList.remove('active');
          }
      }
  }

  // Apply the active class based on the boolean variables
  setActive('module-inventory', inventoryModuleActive || inventoryProductListActive || inventoryProductComboActive || inventoryProductPriceActive);
  setActive('inventory-product-list', inventoryProductActive);
  setActive('inventory-product-combo', inventoryProductComboActive);
  setActive('inventory-product-price', inventoryProductPriceActive);
  setActive('inventory-supplier', inventorySupplierActive);
  setActive('inventory-purchase', inventoryPurchaseActive);
  setActive('inventory-ingredient-recipe', inventoryIngredientRecipeActive);
  setActive('inventory-menu-book', inventoryMenuBookActive);
  setActive('inventory-category', inventoryCategoryActive);
  setActive('inventory-service-product', inventoryServiceProductActive);
  setActive('inventory-extra-product', inventoryExtraProductActive);
  setActive('inventory-product-bundling', inventoryProductBundlingActive);
  setActive('inventory-deposit', inventoryDepositActive);
  setActive('inventory-online-vehicle', inventoryOnlineVehicleActive);
  setActive('inventory-print-barcode', inventoryPrintBarcodeActive);

</script>
    <script type="text/javascript">
          $(window).on('load', function() {
              $('#modal-lg').modal('hidden');
          });
    </script>

    <script>
      $(document).ready(function() {

        $('.select2').select2()

        $("#card-table").show();
        $("#card-kanban").show();

        $("#btn-card-table").click(function() {
            $("#card-kanban").hide();
            $("#card-table").show();
        });

        $("#btn-card-kanban").click(function() {
            $("#card-table").hide();
            $("#card-kanban").show();
        });

        // $("#btn-all-tampil-menu").click(function() {
        //     $("#tidak-tampil-menu").show();
        //     $("#tidak-tampil-menu-kanban").show();
        //     $("#tampil-menu").show();
        //     $("#tampil-menu-kanban").show();
        // });

        // $("#btn-tampil-menu").click(function() {
        //     $("#tidak-tampil-menu").hide();
        //     $("#tidak-tampil-menu-kanban").hide();
        //     $("#tampil-menu").show();
        //     $("#tampil-menu-kanban").show();
        // });

        // $("#btn-tidak-tampil-menu").click(function() {
        //     $("#tidak-tampil-menu").show();
        //     $("#tidak-tampil-menu-kanban").show();
        //     $("#tampil-menu").hide();
        //     $("#tampil-menu-kanban").hide();
        // });


          $('#companySelect').change(function () {
              var productId = $(this).val();
              var companyId = $(this).val();

              var url = "";
              url = url.replace('your_product_id', productId);

              $.ajax({
                  url: url,
                  method: 'PUT', // Ganti POST menjadi PUT
                  data: {
                      product_id: productId,
                      company_id: companyId,
                      _token: '{{ csrf_token() }}',
                      _method: 'PUT' // Gunakan _method: 'PUT' untuk metode spoofing
                  },
                  success: function (response) {
                      if (response.success) {
                          console.log(response.message);
                          window.location.reload();
                      } else {
                          console.error(response.message);
                      }
                  },
                  error: function (xhr, status, error) {
                      console.error(error);
                  }
              });
          });




                  // Event listener untuk perubahan pada select kategori
            $('#category-filter').change(function() {
            var categoryId = $(this).val(); // Ambil nilai dari select 


            // Lakukan AJAX request untuk memperbarui daftar produk berdasarkan kategori yang dipilih
            $.ajax({
                url: '',
                type: 'GET',
                dataType: 'json',
                data: { category_id: categoryId },
                success: function(response) {

                 
                  
                    // Handle jika tidak ada produk yang ditemukan
                    if (response.length == 0 || response.length == null) {
                        $('#product-list').append('<tr><td colspan="2">No products found</td></tr>');
                        $('#kanban-container').append('<tr><td colspan="2">No products found</td></tr>');
                    }

                    // Kosongkan tbody dari tabel produk
                    $('#product-list').empty();

                    
                    // Kosongkan kartu kanban
                    $('#kanban-container').empty();

                    
                    // Tambahkan baris-baris baru berdasarkan data produk yang diterima
                    $.each(response, function(index, product) {
                        $('#product-list').append('<tr>' +
                            '<td>' + product.product_name + '</td>' +
                            '<td>' +
                                '<a href="javascript:void(0)" class="btn btn-warning btn-sm text-white"><i class="fa fa-edit"></i></a> ' +
                                '<a href="javascript:void(0)" class="btn bg-purple btn-sm"><i class="fa fa-boxes"></i></a> ' +
                                '<a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> ' +
                            '</td>' +
                            '</tr>');
                    });




                        // Tambahkan kartu kanban baru berdasarkan data produk yang diterima
                    $.each(response, function(index, product) {
                        var favoriteHtml = '';
                        if (product.is_favorite) {
                            favoriteHtml = '<div class="ribbon-wrapper"><div class="ribbon bg-danger">Favorite</div></div>';
                        }
                        
                        var html = '<div class="col-12 col-sm-6 col-md-6">' +
                            '<div class="info-box">' +
                            '<span class="info-box-icon bg-info elevation-1">' +
                            '<img src="{{ Storage::url('public/') }}' + product.product_image + '" style="width:70px;height:60px;">' +
                            '</span>' +
                            favoriteHtml +
                            '<div class="info-box-content">' +
                            '<span class="info-box-text">' + product.product_name + '</span>' +
                            '<span class="info-box-number">' +
                            'Harga : Rp ' + formatNumber(product.price_selling_after) + '&nbsp;&nbsp;' +
                            'Stock : ' + (product.inventory_amount ?? 0) + '&nbsp;&nbsp;' +
                            'Order : ' + (product.prod_amount ?? 0) + ' Kali' +
                            '</span>' +
                            '</div>' +
                            '</div>' +
                            '</div>';
                        
                        $('#kanban-container').append(html);
                    });
                    

                },
                error: function(xhr, status, error) {

                  
                    // Kosongkan tbody dari tabel produk
                    $('#product-list').empty();

                    
                    // Kosongkan kartu kanban
                    $('#kanban-container').empty();


                    console.error(xhr.responseText);
                    // Handle error jika terjadi
                }
            });
        });




      });
    </script>
  @endpush