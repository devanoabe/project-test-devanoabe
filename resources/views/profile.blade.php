@extends('app')

@section('content')
    <!-- Content  -->
    <section class="content">
            <div style="height: 600px;" class="container d-flex justify-content-center align-items-center">
                <div class="text-center">
                @foreach($profile as $pro)
                    <h2 style="color: white; font-weight: bold; font-size: 65px;">{{$pro->nim}}</h2>
                    <h2 style="color: white; font-weight: bold; font-size: 65px;">{{$pro->nama}}</h2>
                    <h2 style="color: white; font-weight: bold; font-size: 65px;">{{$pro->jurusan}} / {{$pro->kelas}} / {{$pro->absen}}</h2>  
                    <h2 style="color: white; font-weight: bold; font-size: 65px;"></h2>   
                    @endforeach
                </div>

            </div><!-- /.container-fluid -->
        </section>
    <!-- /.content -->
@endsection

