@extends('../layouts/master_accounting')

@section('title','Kategory')

@section('content')

    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>@yield('title') List <i class="far fa-star"></i> </h1>
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

    <section class="content pb-3 ">

      
      <div class="bg-white p-2">


        <div class="row">

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


          $('#companySelect').change(function () {
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