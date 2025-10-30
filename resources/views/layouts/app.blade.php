<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IAP Document System</title>

    <!-- Bootstrap CSS (Optional: you can switch to Tailwind if required) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/dashboard">IAP System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">

        <li class="nav-item">
          <a class="nav-link" href="/documents">Documents</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/documents/approvals">Approvals</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/documents/versions">Version Control</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/documents/collab">Collaboration</a>
        </li>

      </ul>

      <form method="POST" action="/logout">
          @csrf
          <button class="btn btn-danger btn-sm">Logout</button>
      </form>
    </div>
  </div>
</nav>

<div class="container py-4">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
