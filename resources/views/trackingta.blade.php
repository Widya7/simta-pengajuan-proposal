@section('sidebar')
    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="new-heading">Bimbingan TA</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/mengajukanproposal">
          <i class="bi bi-menu-button-wide"></i>
          <span>Mengajukan Proposal</span>
        </a>
      </li><!-- End pengajuan Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="/uploadrevisi">
          <i class="bi bi-menu-button-wide"></i>
          <span>Upload Revisi TA</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/jadwalsidang">
          <i class="bi bi-menu-button-wide"></i>
          <span>Jadwal Sidang</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/penilaian">
          <i class="bi bi-menu-button-wide"></i>
          <span>Penilaian</span>
        </a>
      </li>

      <li class="new-heading">Tracking TA</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/trackingta">
          <i class="bi bi-menu-button-wide"></i>
          <span>Tracking TA</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="new-heading">Upload Berkas</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/bebaslab">
          <i class="bi bi-menu-button-wide"></i>
          <span>Upload Berkas Bebas Lab</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="/lembarpengesahan">
          <i class="bi bi-menu-button-wide"></i>
          <span>Upload Lembar Pengesahan</span>
        </a>
      </li>

     
    </ul>
@endsection