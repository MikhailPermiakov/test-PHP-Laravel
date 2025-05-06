@extend('../layouts/layout')

@section('header')

<div class="d-flex flex-column flex-md-row align-items-center mb-4 border-bottom">
     <span class="fs-4">Test PHP</span>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/home">Home</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/test">test</a>
      </nav>
      <a class="py-2 me-md-5 btn btn-outline-primary" href="/">button</a>
  </div>

@endsection