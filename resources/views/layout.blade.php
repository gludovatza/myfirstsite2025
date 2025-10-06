<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('cim') - Az első webalkalmazásom</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom"> <a href="/"
            class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"> <svg
                class="bi me-2" width="40" height="32" aria-hidden="true">
                <use xlink:href="#bootstrap"></use>
            </svg> <span class="fs-4">Simple header</span> </a>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="/udvozles" class="nav-link">Üdvözlés</a></li>
            <li class="nav-item"><a href="/contact" class="nav-link">Kapcsolat</a></li>
            <li class="nav-item"><a href="/bevasarlolista" class="nav-link">Bevásárlólista</a></li>
            <li class="nav-item"><a href="/felhasznaloiadat?felhasznalonev=gattila&vezeteknev=Gludovátz&keresztnev=Attila" class="nav-link">Rólam</a></li>
        </ul>
    </header>
    <div>
        @yield('tartalom')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>
