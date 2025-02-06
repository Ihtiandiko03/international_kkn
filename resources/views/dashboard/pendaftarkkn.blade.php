@extends('dashboard.layout.main')
@section('container')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">KKN Registrant</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="registrantTable" class="table table-striped">
                                <thead class="text-primary">
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Place of Birth</th>
                                    <th>Date of Birth</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                    <th>University</th>
                                    <th>Faculty</th>
                                    <th>Study Program</th>
                                    <th>Semester</th>
                                    <th>GPA</th>
                                    <th>English Certificate</th>
                                    <th>Reason</th>
                                    {{-- <th>Action</th> --}}
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($pendaftar as $p)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $p->nama }}</td>
                                            <td>{{ $p->email }}</td>
                                            <td>{{ $p->tempat_lahir }}</td>
                                            <td>{{ $p->tanggal_lahir }}</td>
                                            <td>{{ $p->jenis_kelamin }}</td>
                                            <td>{{ $p->no_hp }}</td>
                                            <td>{{ $p->negara_asal }}</td>
                                            <td>{{ $p->kampus_asal }}</td>
                                            <td>{{ $p->fakultas_asal }}</td>
                                            <td>{{ $p->prodi_asal }}</td>
                                            <td>{{ $p->semester }}</td>
                                            <td>{{ $p->ipk }}</td>
                                            <td>{{ $p->sertif_inggris }}</td>
                                            <td>{{ $p->alasan }}</td>
                                            {{-- <td>
                                                <form action="{{ route('pengumuman.delete', $p->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td> --}}
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