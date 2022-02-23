@if ( session('status') )
    <script>
        Swal.fire({
            title: 'Úspech!',
            text: '{{ session('status') }}',
            icon: 'info',
            timer: 2000
        });
    </script>
@endif
