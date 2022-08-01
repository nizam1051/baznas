@extends('layouts/master')
@section('content')
<!--Hero Section-->
<header class="masthead">
    <div class="container-fluid hero-section" style="width: 100%;height: 350px;">
        <div class="heading">
            KABAR ZAKAT
            <hr id="hr-hero">
        </div>
    </div>
</header>
<!--Content-->
<section style="padding-top: 10%; padding-bottom:5%;">
    <div class="container">
        <div class="row">
            @foreach ($kabar_zakat as $b)
            @if ($b->status == 'ACTIVE')
            <div class="mb-4 col-sm-12 col-lg-4 col-md-4">
                <div class="card" style="max-height: 400px;">
                    <img src="{{ asset($b->gambar) }}" class="card-img-top" alt="" style="background-color: #FF9900; min-height: 250px; max-height: 300px;">
                    <div class="card-body" style="background-color: #FF9900;">
                        <h5 class="card-title">{{ $b->judul }}</h5>
                        <p class="card-text">
                            {{ $b->deskripsi }}</p>
                        <a href="#" class="btn btn-primary2 text-secondary" style="float:right; border-radius: 30px; font-size:clamp(10px, 1vw, 18px);">Selengkapnya</a>
                    </div>
                </div>
            </div>  
            @endif        
            @endforeach
        </div>
        <nav aria-label="..." style="margin-top: 15%;">
            <ul class="pagination justify-content-center">
                <li class="{{ ($kabar_zakat->currentPage() == 1) ? 'page-item disabled' : 'page-item' }}">
                    <a class="page-link text-white" href="{{ $kabar_zakat->url($kabar_zakat->currentPage()-1) }}" tabindex="-1" aria-disabled="true" style="background-color: #01502D;">Previous</a>
                </li>
                @for ($i = 1; $i <= $kabar_zakat->lastPage(); $i++)
                <li class="{{ ($kabar_zakat->currentPage() == $i) ? 'page-item active' : 'page-item' }}"><a class="page-link" href="{{ $kabar_zakat->url($i) }}">{{ $i }}</a></li>
                @endfor
                <li class="{{ ($kabar_zakat->currentPage() == $kabar_zakat->lastPage()) ? 'page-item disabled' : 'page-item' }}">
                    <a class="page-link" href="{{ $kabar_zakat->url($kabar_zakat->currentPage()+1) }}">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section>