<!DOCTYPE html>
<html data-bs-theme="dark" lang="{{ str_replace("_", "-", app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1" name="viewport">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net" rel="preconnect">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="{{ asset("css/app.css") }}" rel="stylesheet">
        <link href="{{ asset("css/normalize.css") }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <body class="antialiased">
        <div
            class="bg-dots-darker dark:bg-dots-darker relative min-h-screen bg-gray-100 bg-center selection:bg-red-500 selection:text-white dark:bg-gray-900 sm:flex sm:items-center sm:justify-center">
            <div class="table-responsive">
                <table class="table-dark table-bordered table">
                    <thead>
                        <tr>
                            @php
                                $firstCustomer = $customers->first()->getAttributes();
                            @endphp

                            @foreach ($firstCustomer as $attribute => $value)
                                <td>{{ $attribute }}</td>
                            @endforeach

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            <tr>
                                <td>
                                    {{ $customer->id }}
                                </td>
                                <td>
                                    {{ $customer->username }}
                                </td>
                                <td>
                                    {{ $customer->password }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </body>

</html>
