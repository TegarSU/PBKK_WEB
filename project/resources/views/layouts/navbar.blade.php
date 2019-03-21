{{-- @extends('layouts.app') --}}
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Akademik</a>
    </div>
    <ul class="nav navbar-nav">
      {{-- <li class="active"><a href="#">Home</a></li> --}}
      <li><a href="{{ asset('mahasiswa') }}">Mahasiswa</a></li>
      <li><a href="{{ asset('dosen') }}">Dosen</a></li>
      <li><a href="{{ asset('mata_kuliah') }}">Mata Kuliah</a></li>
    </ul>
  </div>
</nav>
  
{{-- <div class="container">
  <h3>Basic Navbar Example</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
</div> --}}
