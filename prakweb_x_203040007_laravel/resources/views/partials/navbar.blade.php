<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
<<<<<<< HEAD
      <a class="navbar-brand" href="/">Falz</a>
=======
      <a class="navbar-brand" href="/">Falz Blog</a>
>>>>>>> main
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
<<<<<<< HEAD
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Posts") ? 'active' : '' }}" href="/blog">Blog</a>
=======
            <a class="nav-link  {{ ($active === "home") ? 'active' : '' }}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
>>>>>>> main
            <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Categories</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
