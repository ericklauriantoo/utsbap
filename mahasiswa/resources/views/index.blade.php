{{-- ERICK LAURIANTO | 03081200002 --}}

<?php
use App\Models\Mahasiswa;
use App\Models\view_detail_mahasiswa;
?>

@extends('layouts.main')

@section('title')
    UPH | Dashboard Mahasiswa | Erick Laurianto | 03081200002
@endsection

@section('breadcrumb_item1')
    Dashboard
@endsection 

{{-- Content --}}
@section('content')
    <section class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">
                    <b>Nama:</b> {{ $Nama }}
                    <br><br>
                    <b>Student ID: </b> {{ $StudentID }}
                    <br><br>
                    <b>Term:</b> {{ $Term }}
                    <br><br>
                    <b>IP:</b> 4.00
                    <br><br><br><br>
                    Mata kuliah yang diambil:

                </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Mata Kuliah</th>
                            <th>Nama Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Nilai Huruf</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $mahasiswas = view_detail_mahasiswa::get();
                        $no=1;

                        foreach ($mahasiswas as $view_detail_mahasiswa) {
                            echo "<tr>";
                            echo "<td>".$no."</td>";
                            echo "<td>".$view_detail_mahasiswa->KodeMataKuliah."</td>";
                            echo "<td>".$view_detail_mahasiswa->NamaMataKuliah."</td>";
                            echo "<td>".$view_detail_mahasiswa->SKS."</td>";
                            echo "<td>".$view_detail_mahasiswa->NilaiHuruf."</td>";
                            echo "</tr>";
                            $no+=1;
                            }
                        ?>
                    </tfoot>
                </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection