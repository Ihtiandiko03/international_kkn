@extends('dashboard.layout.main')
@section('container')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> Sponsorship </h3>
              </div>
              <div class="card-body">
                <a href="{{ route('sponsor.create') }}" class="btn btn-secondary mb-3">Create Sponsor</a>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>No</th>
                      <th>Name of Sponsor</th>
                      <th>Logo</th>
                      <th>Website</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                        @php
                          $i = 1;   
                        @endphp
                        @foreach ($sponsor as $s)
                          <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $s->nama_sponsor }}</td>
                            <td><img src="{{ asset('storage/' . $s->image) }}" width="100px"></td>
                            <td>{{ $s->link_website }}</td>
                            <td>
                              <a href="{{ route('sponsor.edit', $s->id) }}" class="btn btn-warning">Edit</a>
                              <form action="{{ route('sponsor.delete', $s->id) }}" method="POST" style="display:inline;">
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
      