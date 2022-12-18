@extends ('admin.ds')

@section ('pagetitle')

  <div class="pagetitle">
        <h1>Form Pengajuan Proposal</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Form Pengajuan Proposal</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
@endsection

@section('sidebar')
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed " href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="new-heading">Bimbingan TA</li>
      <li class="nav-item">
        <a class="nav-link" href="/mengajukanproposal">
          <i class="bi bi-journal-text"></i>
          <span>Mengajukan Proposal</span>
        </a>
      </li><!-- End pengajuan Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/uploadrevisi">
          <i class="bi bi-layer-forward"></i>
          <span>Revisi Proposal TA</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="/uploadrevisi">
          <i class="bi bi-layer-forward"></i>
          <span>Upload Revisi TA</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/jadwalsidang">
          <i class="bi bi-calendar-week"></i>
          <span>Jadwal Sidang</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/penilaian">
          <i class="bi bi-brush"></i>
          <span>Nilai TA</span>
        </a>
      </li>

      <li class="new-heading">Tracking TA</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/trackingta">
          <i class="bi bi-signpost-split-fill"></i>
          <span>Tracking TA</span>
        </a>
      </li><!-- End tracking Page Nav -->
      <li class="new-heading">Upload Berkas</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/bebaslab">
          <i class="bi bi-file-earmark-text"></i>
          <span>Upload Berkas Bebas Lab</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/lembarpengesahan">
          <i class="bi bi-file-earmark-check"></i>
          <span>Upload Lembar Pengesahan</span>
        </a>
      </li>
     
    </ul>
@endsection


@section ('main')

        <div class="col-lg-15">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Mengajukan Proposal </h5>
              <!-- Mengajukan Proposal Mahasiswa -->
              <form method="post" action="{{route('simpan')}}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNrp" class="col-sm-2 col-form-label">NRP</label>
                  <div class="col-sm-10">
                    <input type="text" name="nrp" class="form-control">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputJudul" class="col-sm-2 col-form-label">Judul Proposal</label>
                  <div class="col-sm-10">
                    <input type="text" name="judul" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputAbstrak" class="col-sm-2 col-form-label">Latar Belakang</label>
                  <div class="col-sm-10">
                  <textarea class="form-control" name="lb" style="height: 100px"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Upload Proposal (ekstensi file: pdf)</label>
                  <div class="col-sm-10 ">
                    <input class="form-control" name="file" type="file" id="formFile">
                  </div>
                </div>

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">Submit Proposal</button>
                    <div class="modal fade" id="basicModal" tabindex="-1">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title">Upload Proposal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Apakah anda yakin untuk melakukan Upload Proposal?
                                <br><br>
                                Silahkan tinjau kembali sebelum anda mengupload
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                <button type="submit" class="btn btn-primary">Iya</button>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                </div>
            
              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>

      
@endsection