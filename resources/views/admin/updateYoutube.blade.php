</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Blog - SantriKoding.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('getYoutube') }}">
                    <button class="btn btn-primary">Kembali</button>
                </a>
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form method="Post"" action="{{ route('youtube.update', $data->id) }}">
                            @csrf
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Masukkan Link Youtube</label>
                                    <input class="form-control" id="exampleFormControlInput1" placeholder="Youtube Link" name="youtube_link" value="{{ $data->youtube_link }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-warning">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>

