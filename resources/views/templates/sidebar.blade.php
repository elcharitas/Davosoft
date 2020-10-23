@push('sidebar')
@include('templates.widget', ['title' => 'Top Downloads'])
@endpush

@section('copyright')
<div class="text-muted"> &copy; {{ date('Y') }} {{ config('app.name') }} Created By <a class="text-primary" href="" title="Visit My Homepage"> Irhodia David (Shimidah)</a>.</div>
@endsection