<nav class="w-full flex flex-wrap items-center justify-between bg-gray-600 text-gray-400 shadow-lg navbar" >
    <div class="container mx-auto py-3">
      <ul class="navbar-nav flex list-style-none mr-auto">
        <li class="nav-item pr-2">
          <a class="nav-link {{ ($title === "Home Page") ? 'active text-white' : '' }} hover:text-gray-200" href="/">Home</a>
        </li>
        <li class="nav-item pr-2">
          <a class="nav-link {{ ($title === "Add Data") ? 'active text-white' : '' }} hover:text-gray-200" href="/add">Add</a>
        </li>
        {{-- <li class="nav-item pr-2">
          <a class="nav-link {{ ($title === "Posts") ? 'active text-white' : '' }}" href="/posts">Posts</a>
        </li> --}}
      </ul>
    </div>
  </nav>