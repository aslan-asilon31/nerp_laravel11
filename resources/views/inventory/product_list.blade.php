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
      <div class="btn-group btn-group-toggle mt-2 mb-2" data-toggle="buttons" style="outline: 1px solid purple;">
        <label class="btn btn-purple">
          <input type="radio" name="options" id="btn-card-table" autocomplete="off" > <i class="fa fa-list"></i>
        </label>
        <label class="btn btn-purple active">
          <input type="radio" name="options" id="btn-card-kanban" autocomplete="off" checked> <i class="fa fa-columns"></i>
        </label>
      </div>
      <div class="bg-white p-2">

        <div class="row">
          <div class="col-lg-12 d-flex "  >
              <div class="col-lg-4" >
                <div class="form-group" style="text-align:center;padding-top: 5px; height: 20px !important;margin-bottom: 10px;" >
                  <select class="form-control select2" style="width: 100%;padding-top: 5px;height:30px !important;">
                      @forelse($categories as $category)
                        <option  value="0" id="">All Categories</option>
                        <option  value="{{ $category->id}}" id="">{{ $category->name}}</option>
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
                      @forelse($workspaces as $product)
                        <tr id="tampil-menu">
                            <td>{{ $product->product_name }}</td>
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
                  {{ $workspaces->links() }}
              </div>
              <div class="card-body" id="card-kanban" style="overflow-x: auto; overflow-y: auto; max-height: 400px;">
                  <div class="row bg-white" style="padding:3px">
                    @forelse($workspaces as $workspace)
                      <div class="col-12 col-sm-6 col-md-6" id="tampil-menu-kanban">
                          <div class="info-box">
                          <span class="info-box-icon bg-info elevation-1"><img src="{{ Storage::url('public/').$workspace->product_image }}" style="width:70px;height:60px;"></span>
          
                          <div class="info-box-content">
                              <span class="info-box-text"> {{$workspace->product_name}} </span>
                              <span class="info-box-number">
                              Rp 270.000,00-
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

    @push('scripts')
          
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

        // Find the inventoryActive link element by its ID
        var inventoryActiveLink = document.getElementById('module-product');
        var productListActiveLink = document.getElementById('product-list');

        // Check if productListActiveActive is true, then add the active class
        if (inventoryActiveLink) {
          inventoryActiveLink.classList.add('active');
          productListActiveLink.classList.add('active');
        }
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
                var workspaceId = $(this).val();
                var companyId = $(this).val();

                var url = "{{ route('outlets.update', ['outlet' => 'your_workspace_id']) }}";
                url = url.replace('your_workspace_id', workspaceId);

                $.ajax({
                    url: url,
                    method: 'PUT', // Ganti POST menjadi PUT
                    data: {
                        workspace_id: workspaceId,
                        company_id: companyId,
                        _token: '{{ csrf_token() }}',
                        _method: 'PUT' // Gunakan _method: 'PUT' untuk metode spoofing
                    },
                    success: function (response) {
                        if (response.success) {
                            console.log(response.message);
                            alert('berhasil');
                            window.location.reload();
                        } else {
                            console.error(response.message);
                            alert('gagal');
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error(error);
                    }
                });
            });



        });
      </script>
    @endpush

@endsection