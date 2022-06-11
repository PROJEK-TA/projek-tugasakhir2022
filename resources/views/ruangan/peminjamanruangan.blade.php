@extends('layouts.index')
@section('title','Data Peminjaman Ruangan')

@section('content')
<div class="col-sm-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="header-title">
                <h4 class="card-title">Daftar Peminjaman Ruangan</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatable" class="table table-striped" data-toggle="data-table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>KODE PINJAM</th>
                            <th>NAMA RUANGAN</th>
                            <th>GEDUNG</th>
                            <th>DESKRIPSI</th>
                            <th>NAMA PEMINJAM</th>
                            <th>TANGGAL PINJAM</th>
                            <th>TANGGAL SELESAI</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>PM0000001</td>
                            <td>Ruang Meeting</td>
                            <td>Gedung A</td>
                            <td>Meeting bersama mahasiswa POLINEMA</td>
                            <td>Ricky Wijaya</td>
                            <td>20/11/2021/13:11</td>
                            <td>25/11/2021/15:11</td>
                            <td>
                                <div class="flex align-items-center list-user-action">
                                    <a class="btn btn-sm btn-icon btn-success" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit" href="#">
                                        <span class="btn-inner">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M8.43994 12.0002L10.8139 14.3732L15.5599 9.6272"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Delete" href="#">
                                        <span class="btn-inner">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.3955 9.59497L9.60352 14.387" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M14.3971 14.3898L9.60107 9.59277" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>PM0000002</td>
                            <td>Ruang Laboraturium</td>
                            <td>Gedung B</td>
                            <td>Praktik pengolahan tembakau</td>
                            <td>Ignatius Lintang</td>
                            <td>21/11/2021/15:40</td>
                            <td>24/11/2021/07:40</td>
                            <td>
                                <div class="flex align-items-center list-user-action">
                                    <a class="btn btn-sm btn-icon btn-success" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit" href="#">
                                        <span class="btn-inner">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M8.43994 12.0002L10.8139 14.3732L15.5599 9.6272"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Delete" href="#">
                                        <span class="btn-inner">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.3955 9.59497L9.60352 14.387" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M14.3971 14.3898L9.60107 9.59277" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>PM0000003</td>
                            <td>Ruang Produksi</td>
                            <td>Gedung C</td>
                            <td>Praktik produksi tembakau</td>
                            <td>Elizabeth Teresa</td>
                            <td>24/10/2020/17:25</td>
                            <td>29/10/2020/17:25</td>
                            <td>
                                <div class="flex align-items-center list-user-action">
                                    <a class="btn btn-sm btn-icon btn-success" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit" href="#">
                                        <span class="btn-inner">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M8.43994 12.0002L10.8139 14.3732L15.5599 9.6272"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Delete" href="#">
                                        <span class="btn-inner">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.3955 9.59497L9.60352 14.387" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M14.3971 14.3898L9.60107 9.59277" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>PM0000004</td>
                            <td>Gudang</td>
                            <td>Gedung D</td>
                            <td>Penyimpanan Barang</td>
                            <td>Famboyan Dwi Cahyo</td>
                            <td>24/10/2020/17:25</td>
                            <td>01/11/2020/10:25</td>
                            <td>
                                <div class="flex align-items-center list-user-action">
                                    <a class="btn btn-sm btn-icon btn-success" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit" href="#">
                                        <span class="btn-inner">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M8.43994 12.0002L10.8139 14.3732L15.5599 9.6272"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Delete" href="#">
                                        <span class="btn-inner">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.3955 9.59497L9.60352 14.387" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M14.3971 14.3898L9.60107 9.59277" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>PM0000005</td>
                            <td>Ruang Tamu</td>
                            <td>Gedung E</td>
                            <td>Pertemuan dengan mahasiswa POLINEMA</td>
                            <td>Ahmad Benaya</td>
                            <td>24/10/2020/17:25</td>
                            <td>30/10/2020/12:25</td>
                            <td>
                                <div class="flex align-items-center list-user-action">
                                    <a class="btn btn-sm btn-icon btn-success" data-toggle="tooltip"
                                        data-placement="top" title="" data-original-title="Edit" href="#">
                                        <span class="btn-inner">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M8.43994 12.0002L10.8139 14.3732L15.5599 9.6272"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip" data-placement="top"
                                        title="" data-original-title="Delete" href="#">
                                        <span class="btn-inner">
                                            <svg width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14.3955 9.59497L9.60352 14.387" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path d="M14.3971 14.3898L9.60107 9.59277" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                </path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M16.3345 2.75024H7.66549C4.64449 2.75024 2.75049 4.88924 2.75049 7.91624V16.0842C2.75049 19.1112 4.63549 21.2502 7.66549 21.2502H16.3335C19.3645 21.2502 21.2505 19.1112 21.2505 16.0842V7.91624C21.2505 4.88924 19.3645 2.75024 16.3345 2.75024Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                </table>
            </div><br>
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Riwayat Peminjaman</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped" data-toggle="data-table">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>KODE PINJAM</th>
                                <th>NAMA RUANGAN</th>
                                <th>GEDUNG</th>
                                <th>DESKRIPSI</th>
                                <th>NAMA PEMINJAM</th>
                                <th>TANGGAL PINJAM</th>
                                <th>TANGGAL SELESAI</th>
                                <th>STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>PM0000001</td>
                                <td>Ruang Meeting</td>
                                <td>Gedung A</td>
                                <td>Meeting bersama mahasiswa POLINEMA</td>
                                <td>Ricky Wijaya</td>
                                <td>20/11/2021/13:11</td>
                                <td>25/11/2021/15:11</td>
                                <td>
                                    <div class="text-info">Dipinjam</div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>PM0000002</td>
                                <td>Ruang Laboraturium</td>
                                <td>Gedung B</td>
                                <td>Praktik pengolahan tembakau</td>
                                <td>Ignatius Lintang</td>
                                <td>21/11/2021/15:40</td>
                                <td>24/11/2021/07:40</td>
                                <td>
                                    <div class="text-info">Dipinjam</div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>PM0000003</td>
                                <td>Ruang Produksi</td>
                                <td>Gedung C</td>
                                <td>Praktik produksi tembakau</td>
                                <td>Elizabeth Teresa</td>
                                <td>24/10/2020/17:25</td>
                                <td>29/10/2020/17:25</td>
                                <td>
                                    <div class="text-info">Dipinjam</div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>PM0000004</td>
                                <td>Gudang</td>
                                <td>Gedung D</td>
                                <td>Penyimpanan Barang</td>
                                <td>Famboyan Dwi Cahyo</td>
                                <td>24/10/2020/17:25</td>
                                <td>01/11/2020/10:25</td>
                                <td>
                                    <div class="text-success">Selesai</div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>PM0000005</td>
                                <td>Ruang Tamu</td>
                                <td>Gedung E</td>
                                <td>Pertemuan dengan mahasiswa POLINEMA</td>
                                <td>Ahmad Benaya</td>
                                <td>24/10/2020/17:25</td>
                                <td>30/10/2020/12:25</td>
                                <td>
                                    <div class="text-success">Selesai</div>
                                </td>
                            </tr>
                    </table><br>
                    <button type="button" class="btn btn-primary">Print</button>
                </div>
            </div>
        </div>
    </div>
    @endsection