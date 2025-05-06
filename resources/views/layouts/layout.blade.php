<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>
<body>
  <div class="d-flex flex-column flex-md-row align-items-center mb-4 border-bottom">
     <span class="fs-4">Test PHP</span>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/home">Home</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/test">test</a>
      </nav>
      <a class="py-2 me-md-5 btn btn-outline-primary" href="/records">records</a>
  </div>

  @yield('content')
</body>
</html>