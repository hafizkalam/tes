@extends('layout.admin')

@section('menu')
<div class="container">
    <div class="row mt-4">
        {{-- <a href="{{ url()->previous() }}" class="btn btn-danger ml-1 mb-2">Back</a> --}}
        <a href="{{ url('layout.create') }}" class="btn btn-primary ml-1 mb-2">Create</a>
    </div>
    <div class="row mt-4">
        {{-- <form class="form-inline" action="{{ route('store') }}" method="POST">
            @csrf

          </form> --}}
        <br>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Harga</th>
                <th scope="col">Jenis</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody>
{{--
             @foreach ($meja as $data)
             <tr>
                <td>{{ $data->no_meja }}</td>
                <td>
                    <a href="{{ route('generate',$data->id) }}" class="btn btn-primary">Generate</a>
                </td>
              </tr>
             @endforeach --}}
            </tbody>
          </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
@endsection
