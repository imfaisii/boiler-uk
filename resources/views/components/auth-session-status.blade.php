@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600 text-success']) }}>
        <li>{{ $status }}</li>
    </div>
    <script>
        toastr.success("{{ $status }}", "Success notification");
    </script>
@endif
