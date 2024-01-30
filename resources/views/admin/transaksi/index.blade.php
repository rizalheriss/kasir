<div class="row p-2">
  <div class="col-md-12">
    <div class="card">

       <div class="card-title p-2">

        </div>
        <div class="card-body">

          <h5><b>{{ $title }}</b></h5>

           <a href="/admin/transaksi/create" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah</a>

           <table class="table">
            <tr>
                <th>NO</th>
                <th>Name</th>
                <th>Action</th>
            </tr>

              @foreach($transaksi as $item)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>
                <div class="d-flex">
                  <a href="/admin/transaksi/{{ $item->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                  <!-- <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> -->
                  <form action="/admin/transaksi/{{ $item->id }}" method="POST">
                        @method('delete')
                         @csrf
                    <button type="submit" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash"></i></button>
                  </form> 
                </div>  
              </td>
            </tr> 
            @endforeach

           </table>

           {{ $transaksi->links() }}
           </div>
        </div>
    </div> 
  </div>