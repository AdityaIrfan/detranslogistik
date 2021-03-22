@extends('dashboard')

@section('content')
<div style="padding-bottom: 17rem !important">
    <div class="page-container">
        <div class="container mt-5 mb-5">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form method="post"" action="{{ route('postYoutube') }}">
                            @csrf
                            <div class="form-group">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Masukkan Link Youtube</label>
                                    <input class="form-control" id="exampleFormControlInput1" placeholder="Youtube Link" name="youtube_link">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Video</button>
                        </form>
                    </div>
                </div>
            </div>

    <br><br>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow rounded">
                        <div class="card-body">
                            <table class="table table-bordered" >
                                <thead class="text-center">
                                  <tr>
                                    <th scope="col">Video</th>
                                    <th scope="col">URL</th>
                                    <th scope="col">Aksi</th>
                                  </tr>
                                </thead>
                                <tbody class="text-center">
                                  @forelse ($youtube->reverse() as $ytb)
                                    <tr>
                                        <td>
                                            <iframe
                                                width="224"
                                                height="126"
                                                src={{ $ytb->youtube_link }}
                                                title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen>
                                            </iframe>
                                        </td>
                                        <td><h5 class="card-title">{{ ($ytb->youtube_link) }}</h5></td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('youtube.delete', $ytb->id) }}" method="POST">
                                                <a href="{{ route('youtube.Getupdate', $ytb->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                  @empty
                                      <div class="alert alert-danger">
                                          Data Blog belum Tersedia.
                                      </div>
                                  @endforelse
                                </tbody>
                              </table>
                              {{-- {{ $articles->links() }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
