<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ $title ?? config('app.name') }}</title>

  @vite('resources/assets/css/theme.min.css')

  @livewireStyles
</head>

<body>
  <!-- container -->
  <main class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-4 col-xxl-4 py-8 py-xl-0">
        <a href="#" class="form-check form-switch theme-switch btn btn-light btn-icon rounded-circle d-none ">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
          <label class="form-check-label" for="flexSwitchCheckDefault"></label>

        </a>
        <!-- Card -->
        <div class="card smooth-shadow-md">
          <!-- Card body -->
          <div class="card-body p-6">

            <div class="mb-4">
              <a href="/"><img src="https://dashui.codescandy.com/dashuipro/assets/images/brand/logo/logo-2.svg"
                  class="mb-2 text-inverse" alt="Image"></a>
              <p class="mb-6">Please enter your user information.</p>
            </div>
            <!-- Form -->
            {{ $slot }}
          </div>
        </div>
      </div>
    </div>
  </main>


  @livewireScripts
</body>

</html>