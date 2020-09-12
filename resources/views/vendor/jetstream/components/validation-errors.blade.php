@if ($errors->any())
    <div {{ $attributes }}>
        <div class="bg-red-200 rounded py-3 px-6">
            <div class="font-medium text-red-600">Ooh snap! Something went wrong.</div>

            <ul class="mt-1 list-disc list-inside text-sm text-red-600">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
