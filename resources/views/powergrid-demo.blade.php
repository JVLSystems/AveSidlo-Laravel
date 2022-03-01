<!DOCTYPE html>
 <!--
    |****************************************************************************************************************
    |                               ⚡ PowerGrid Demo Table ⚡
    |****************************************************************************************************************
    | Table: App/Http/Livewire/PowerGridDemoTable.php
    | USAGE:
    | ➤ You must include Route::view('/powergrid', 'powergrid-demo'); in routes/web.php file.
    | ➤ Visit http://your-app/powergrid. Enjoy it!
    |****************************************************************************************************************
-->

<html lang="en">
    <head>
        <meta charset="UTF-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <title>⚡ PowerGrid Demo Table ⚡</title>

        <!-- Fonts -->
        {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        @livewireStyles
        @powerGridStyles
    </head>
    <body class="antialiased px-10 py-8 bg-gray-50">
        <div class="p-6 bg-gray-100 mb-3 rounded-md shadow-md text-gray-700 border border-gray-400">
        Welcome to ⚡ PowerGrid ⚡,
        <br>
        <br>
        This is a demo table. You can click around and see how things behave.
        <br>
        Data is generated on the fly and changes will NOT be saved in your database.
        <br>
        Some features may require you to create a full PowerGrid component.
        <br><br>
        <p class="leading-loose">
        📚 Check our <a href="https://livewire-powergrid.com/" rel="nofollow" target="_blank" class="bg-gradient-to-r from-yellow-200 to-yellow-200 bg-growing-underline">Documentation</a> for more information.
        <br/>
        ⭐ Enjoying? Star our <a href="https://github.com/Power-Components/livewire-powergrid" rel="nofollow" target="_blank" class="bg-gradient-to-r from-yellow-200 to-yellow-200 bg-growing-underline">Repository</a>!
        </p>
        <br/>
        Thank you for downloading!
        </div>

        <div class="bg-white p-4 border border-gray-200 rounded">
            <livewire:power-grid-demo-table/>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Scripts -->
        @livewireScripts
        @powerGridScripts
        <script src="//unpkg.com/alpinejs" defer></script>
        <script>
            window.addEventListener('showAlert', event => {
                alert(event.detail.message);
            })
        </script>
    </body>
</html>