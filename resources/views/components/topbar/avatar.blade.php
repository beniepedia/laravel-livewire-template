<li class="dropdown ms-2">
  <a class="rounded-circle" href="#!" role="button" id="dropdownUser" data-bs-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false">
    <div class="avatar avatar-md avatar-indicators avatar-online">
      <img alt="avatar" src="https://codescandy.com/dashui/assets/images/avatar/avatar-1.jpg" class="rounded-circle">
    </div>
  </a>
  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
    <div class="px-4 pb-0 pt-2">


      <div class="lh-1 ">
        <h5 class="mb-1"> {{ auth()->user()->name }}</h5>
        <a href="#!" class="text-inherit fs-6">View my profile</a>
      </div>
      <div class=" dropdown-divider mt-3 mb-2"></div>
    </div>

    <ul class="list-unstyled">


      <li>
        <form action="{{ route('logout') }}" method="post">
          @csrf
          <button class="dropdown-item d-flex" type="submit">
            {{ __('Sign Out') }}
          </button>
        </form>
        {{-- <a class="dropdown-item" href="../index.html">
          <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>Sign
          Out
        </a> --}}
      </li>
    </ul>

  </div>
</li>