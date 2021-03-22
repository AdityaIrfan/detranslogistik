@extends('admin.index')

@section('content')
<style type="text/css">
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }
    .close-icon{
        border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
</style>
</head>
<script type="text/javascript">
$(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
</script>

<body style="background: lightgray">
    <div class="page-container" style="padding-bottom: 17rem !important">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <div class="container">
                            <form action="{{ route('image.create') }}" method="POST" enctype="multipart/form-data">
                                {!! csrf_field() !!}
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>{{ $message }}</strong>
                                        </div>
                                    @endif

                                <!-- <div class="column"> -->
                                    <div class="col-md-5">
                                        <strong>Image:</strong>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="col-md-5">
                                        <strong>Image:</strong>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <br/>
                                        <button type="submit" class="btn btn-success">Upload</button>
                                    </div>
                                <!-- </div> -->
                            </form>
                                <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                                <table class="table table-bordered" >
                                    <thead class="text-center">
                                      <tr>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Aksi</th>
                                      </tr>
                                    </thead>
                                    <tbody class="text-center">
                                      @foreach ($images as $image)

                                        <tr>
                                            <td>
                                                <a class="thumbnail fancybox" rel="ligthbox" href="/uploads/{{ $image->image }}">
                                                    <img class="img-responsive" alt="{{ $image->title }}" style="width:224px;" src="/uploads/{{ $image->image }}" >
                                                </a>
                                            </td>
                                            <td><p style="padding-top: 10px">{{ $image->title }}</p></td>
                                            <td class="text-center">
                                                <form method="Post" action="{{ route('deleteImage', $image->id) }}">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                      {{-- @empty
                                          <div class="alert alert-danger">
                                              Data Blog belum Tersedia.
                                          </div> --}}
                                      @endforeach
                                    </tbody>
                                  </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection


