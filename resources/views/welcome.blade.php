<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/js/app.js', 'resources/css/app.css')
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Dark Theme -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2.0.0/out/dark.min.css" /> --}}
</head>

<body>
    <div class="container mt-5">
        <form method="get" class="d-flex justify-content-center align-items-center py-5 border border-light">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email"
                    placeholder="Enter Your Email" />
                <button type="submit" class="btn btn-dark border my-3">
                    Login
                </button>
                <small>don't have an account? <a>register now</a></small>
            </div>
        </form>
    </div>
</body>

</html>
