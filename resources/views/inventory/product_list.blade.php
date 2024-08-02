@extends('../layouts/master_inventory')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Product List <i class="far fa-star"></i> </h1>
          </div>
          <div class="col-sm-6 d-none d-sm-block">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Sales</a></li>
              <li class="breadcrumb-item"><a href="#">Product</a></li>
              <li class="breadcrumb-item ">Product List</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content pb-3 ">

      
      <div class="bg-white p-2">


        <div class="row">

        <div class="btn-group btn-group-toggle mt-2 mb-2 bg-red" data-toggle="buttons" style="outline: 1px solid purple;">
        <label class="btn btn-purple">
          <input type="radio" name="options" id="btn-card-table" autocomplete="off" > <i class="fa fa-list"></i>
        </label>
        <label class="btn btn-purple active">
          <input type="radio" name="options" id="btn-card-kanban" autocomplete="off" checked> <i class="fa fa-columns"></i>
        </label>
      </div>

          <div class="col-lg-4 ml-2"  >
            <div class="form-group">
              <div class="input-group">
                <input type="date" class="form-control float-right" id="reservation" value="2024-07-01"> <span class="ml-2 mr-2 mt-1 ">To</span>
                <input type="date" class="form-control float-right" id="" value="2024-07-30">
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex "  >
              <div class="col-lg-4" >
                <div class="form-group" style="text-align:center;padding-top: 5px; height: 20px !important;margin-bottom: 10px;" >
                  <select id="category-filter" class="form-control select2" style="text-align:center;width: 100%;padding-top: 5px;height:30px !important;">
                    <option  value="0" id="" style="text-align:center;">All Categories</option>
                      @forelse($categories as $category)
                        <option  value="{{ $category->id}}" id="category-{{ $category->id}}">{{ $category->name}}</option>
                      @empty
                        <option  value="0" id="category-all"> </option>
                      @endforelse
                      
                  </select>
                </div>
              </div>
              
              <div class="col-lg-6" style="width: 100%;">
                <div class="form-group" >
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn bg-purple active">
                      <input type="radio" name="options" id="btn-all-tampil-menu" autocomplete="off" checked> Semua
                    </label>
                    <label class="btn bg-purple">
                      <input type="radio" name="options" id="btn-tampil-menu" autocomplete="off">Tampil di menu
                    </label>
                    <label class="btn bg-purple">
                      <input type="radio" name="options" id="btn-tidak-tampil-menu" autocomplete="off"> Tidak Tampil di menu
                    </label>
                  </div>
                </div>
              </div>

              <div class="col-lg-2" style="width: 100%;">
                <a href="{{ route('products.create') }}" class="btn btn-purple bg-purple"> <i class="fa fa-plus"></i> New Product</a>
              </div>
              


              </div>
              <!-- /.card-header -->
              <div class="card-body" id="card-table" style="overflow-x: auto; overflow-y: auto; max-height: 400px;">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      @forelse($products as $product)
                        <tr id="tampil-menu">
                            <td>{{ $product->name }}</td>
                            <td> 
                                <a href="javascript:void(0)" class="btn btn-warning btn-sm text-white"><i class="fa fa-edit"></i></a> 
                                <a href="javascript:void(0)" class="btn bg-purple btn-sm"><i class="fa fa-boxes"></i></a> 
                                <a href="javascript:void(0)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a> 
                            </td>
                        </tr>
                      @empty
                      <tr >
                        <td>Empty data</td>
                      </tr>
                      @endforelse
                    
                    </tbody>
                    <tfoot>
                        <tr>
                          <th>Name</th>
                          <th>Action</th>
                        </tr>
                    </tfoot>
                  </table>
              </div>
              <div class="card-body" id="card-kanban" style="overflow-x: auto; overflow-y: auto; max-height: 400px;">
                  <div class="row bg-white" style="padding:3px">
                  @forelse($products as $product)
                      <div class="col-12 col-sm-6 col-md-6" id="tampil-menu-kanban">
                          <div class="info-box">
                              <span class="info-box-icon bg-info elevation-1">
                                @if(!empty($product->image))
                                  <img src="{{ Storage::url('public/').$product->image }}" style="width:70px;height:60px;">
                                @else
                                <img src="{{ asset('no-image.jpg') }}" style="width:70px;height:60px;">
                                @endif
                              </span>
                              
                              @php
                                  $favorite = false;
                              @endphp
                              
                              @forelse($orders as $order)
                                  @if(($order->id == $product->id) && $order->prod_amount >= 100)
                                      @php
                                          $favorite = true;
                                      @endphp
                                      <div class="ribbon-wrapper">
                                          <div class="ribbon bg-danger">
                                              Favourite
                                          </div>
                                      </div>
                                  @endif
                              @empty
                                  <h5>Empty data</h5>
                              @endforelse

                              <div class="info-box-content">
                                  <span class="info-box-text"> {{$product->name}} </span>
                                  <span class="info-box-number" >
                                      Harga : Rp {{ number_format($product->price_selling_after, 2, ',', '.') }} &nbsp;&nbsp;
                                      Stock :  {{ $product->inventory_amount ?? 0 }} &nbsp;&nbsp;
                                      Order :  {{ $product->prod_amount ?? 0 }} Kali 
                                  </span>
                              </div>
                              <!-- /.info-box-content -->
                          </div>
                          <!-- /.info-box -->
                      </div>
                      <!-- /.col -->
                  @empty
                      <div class="col-12 col-sm-6 col-md-6" id="tampil-menu-kanban">
                          -
                      </div>
                      <!-- /.col -->
                  @endforelse

                  </div>
              </div>
          </div>
          <!-- /.card -->
        </div>

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

        $("#card-table").hide();
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


          $('#outletSelect').change(function () {
              var productId = $(this).val();
              var companyId = $(this).val();

              var url = "{{ route('outlets.update', ['outlet' => 'your_product_id']) }}";
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
                url: '{{ route("get.products.by.category") }}',
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