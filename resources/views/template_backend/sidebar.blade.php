<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="index.html">Stisla</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="dropdown">
          <a href="{{ route('home')}}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Starter</li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i> <span>Posts</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('posts.index')}}">List Posts</a></li>
            <li><a class="nav-link" href="{{ route('posts.tampil_hapus')}}">List Posts Sampah</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-clipboard"></i> <span>Kategori</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('category.index')}}">List Kategori</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-bookmark"></i> <span>Tag</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('tag.index')}}">List Tags</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-user"></i> <span>Users</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('users.index')}}">List Users</a></li>
          </ul>
        </li>
              </aside>
  </div>