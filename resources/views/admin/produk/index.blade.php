<div class="row p-2">
  <div class="col-md-12">
    <div class="card">

      <div class="card-title p-2">

      </div>
      <div class="card-body">

        <h5><b>{{ $title }}</b></h5>

        <a href="/admin/produk/create" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah</a>

        <table class="table">
          <tr>
            <th >NO</th>
            <th>Name</th>
            <th>gambar produk</th>
            <th>stok produk</th>
            <th>harga produk</th>
            <th>Action</th>
          </tr>

          @foreach($produk as $item)

          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>
              <img src="{{ asset($item->gambar) }}" alt="" style="max-width: 100px; max-height: 100px;">
            </td>
            <td>{{ $item->stok }}</td> <!-- Tampilkan nilai stok -->
            <td>{{ $item->harga }}</td> <!-- Tampilkan nilai harga -->
            <td>
              <div class="d-flex">
                <a href="/admin/produk/{{ $item->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                <!-- <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> -->
                <form action="/admin/produk/{{ $item->id }}" method="POST">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn btn-danger btn-sm ml-1"><i class="fas fa-trash"></i></button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach

        </table>

        {{ $produk->links() }}
      </div>
    </div>
  </div>
</div>

     