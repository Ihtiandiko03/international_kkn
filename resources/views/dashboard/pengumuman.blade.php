@extends('dashboard.layout.main')
@section('container')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Announcement </h3>
              </div>
              <div class="card-body">
                <a href="{{ route('pengumuman.create') }}" class="btn btn-primary mb-3">Create Announcement</a>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>No</th>
                      <th>Title</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                        @php
                          $i = 1;   
                        @endphp
                        @foreach ($pengumuman as $p)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $p->title }}</td>
                            <td>
                              {{-- <a href="{{ route('pengumuman.show', $p->id) }}" class="btn btn-info">Show</a> --}}
                              <a href="{{ route('pengumuman.edit', $p->id) }}" class="btn btn-warning">Edit</a>
                              <form action="{{ route('pengumuman.delete', $p->id) }}" method="POST" style="display:inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                          </td>
                          </tr>
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
      