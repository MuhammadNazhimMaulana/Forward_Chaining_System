<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <a class="navbar-brand" href="/user/home"> <i class="fas fa-house-damage"></i>	Home || </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        @auth
        <li class="nav-item active text-light">
         Administrator
        </li>
        @endauth
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <a href="#tentang" data-toggle="modal" class="btn btn-outline-light my-2 my-sm-0"><i class="fas fa-user-cog"></i> Tentang</a> &nbsp
        
        {{-- If Login --}}
        @auth
        <a href="#mod-logout" data-toggle="modal" class="btn bg-danger text-light my-2 my-sm-0">Keluar</a>
        @endauth

      </form>
    </div>
  </nav>