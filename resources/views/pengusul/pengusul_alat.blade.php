@extends('main.main_pengusul')
@section('mainpengusul')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h2 class="h3 mb-0 text-gray-800">Pengajuan Alat</h2>
    </div>
    <div class="card-body">
        <p class="mb-4">Data Alat</p>
        <table id="table1" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Nama Alat</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Alat 1</td>
                    <td>10</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm text-white" data-bs-toggle="modal" data-bs-target="#formPengajuanModal">
                            Borrow
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Alat 2</td>
                    <td>10</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm text-white" data-bs-toggle="modal" data-bs-target="#formPengajuanModal">
                            Borrow
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Alat 3</td>
                    <td>10</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm text-white" data-bs-toggle="modal" data-bs-target="#formPengajuanModal">
                            Borrow
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Alat 4</td>
                    <td>10</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm text-white" data-bs-toggle="modal" data-bs-target="#formPengajuanModal">
                            Borrow
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Alat 5</td>
                    <td>10</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm text-white" data-bs-toggle="modal" data-bs-target="#formPengajuanModal">
                            Borrow
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Alat 6</td>
                    <td>10</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm text-white" data-bs-toggle="modal" data-bs-target="#formPengajuanModal">
                            Borrow
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Alat 7</td>
                    <td>10</td>
                    <td>
                        <button type="button" class="btn btn-success btn-sm text-white" data-bs-toggle="modal" data-bs-target="#formPengajuanModal">
                            Borrow
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="formPengajuanModal" tabindex="-1" aria-labelledby="formPengajuanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formPengajuanModalLabel">Pengajuan Peminjaman Alat</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="namaPengusul" class="form-label">Nama Pengusul</label>
              <input type="text" class="form-control" id="namaPengusul">
            </div>
            <div class="mb-3">
                <label for="namaRuangan" class="form-label">Nama Alat</label>
                <select class="form-select" id="namaRuangan">
                    <option value="" selected>Pilih Nama Alat</option>
                    <option value="R1">Alat 1</option>
                    <option value="R2">Alat 2</option>
                    <option value="R3">Alat 3</option>
                </select>
            </div>
            <div class="row">
                <div class="mb-3">
                    <label for="datetimeMulai" class="form-label">Tanggal dan Waktu Mulai</label>
                    <input type="datetime-local" class="form-control" id="datetimeMulai" name="datetimeMulai" required>
                  </div>
                  <div class="mb-3">
                    <label for="datetimeBerakhir" class="form-label">Tanggal dan Waktu Berakhir</label>
                    <input type="datetime-local" class="form-control" id="datetimeBerakhir" name="datetimeBerakhir" required>
                  </div>
            </div>
            <div class="mb-3">
              <label for="keterangan" class="form-label">Keterangan</label>
              <textarea class="form-control" id="keterangan" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="penanggungJawab" class="form-label">Penanggung Jawab</label>
                <select class="form-select" id="penanggungJawab">
                    <option value="" selected>Pilih Penanggung Jawab</option>
                    <option value="PJ1">Penanggung Jawab 1</option>
                    <option value="PJ2">Penanggung Jawab 2</option>
                    <option value="PJ3">Penanggung Jawab 3</option>
                </select>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>




@endsection