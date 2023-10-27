@extends('layouts.app')

@section('title', 'HRIS-SBC Departements')

@section('main')
<main id="main" class="main">

    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('index_dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item">Master Data</li>
                <li class="breadcrumb-item active">Departements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    {{-- @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    @endif --}}
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title">{{ __('Departements')}}</h5>
                            <button href="" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addDepartements"><i class="ri-add-circle-line me-2"></i>{{ __('Add
                                Departements')}}</button>
                        </div>
                        @include('back.departements.create-modal')

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Created_at</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departements as $departement)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $departement->name}}</td>
                                        <td>{{ $departement->created_at}}</td>
                                        <td>
                                            Delete | Edit    
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
@endsection