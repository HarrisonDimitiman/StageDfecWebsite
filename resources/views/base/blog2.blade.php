@extends('layouts.homepage2')
@section('content')
<section class="section bg-light pt-0 bottom-slant-gray">
    <div class="container">
        <div class="container-fluid mb-5">
            <div class="row" data-aos="fade">
               <div class="col-md-12 text-center heading-wrap">
                  <h2>BLOG POST</h2>
               </div>
            </div>
         </div>
        <div class="row">
            @foreach ($blog as $blog)
                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog d-block">
                        <a class="bg-image d-block" href="#" style="background-image: url('{{ asset('storage/'.$blog->image) }}');"></a>
                        <div class="text">
                            <h3>
                                <a href="#">{{ $blog->title }}</a>
                            </h3>
                            <p class="sched-time">
                                <span><span class="fa fa-user"></span> {{ $blog->name }}</span> <br>
                                <span><span class="fa fa-calendar"></span> {{ \Carbon\Carbon::parse($blog->created_at)->format('M j, Y') }}</span> <br>
                            </p>
                            <p>
                                @php
                                    $maxLength = 100;
                                    $truncatedText = strlen($blog->content) > $maxLength ? substr($blog->content, 0, $maxLength - 3) . ' .....' : $blog->content;
                                @endphp
                                {{ $truncatedText }}
                            </p>
                            {{-- <p>
                                <a href="#" class="btn btn-primary btn-sm">Read More</a>
                            </p> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-5" data-aos="fade-up">
            <div class="col-12 text-center">
                @for($pageNumber = 1; $pageNumber <= $blogLastPage; $pageNumber++)
                    <a href="{{ route('blog', ['page' => $pageNumber]) }}" class="p-3">{{ $pageNumber }}</a>
                @endfor
            </div>
        </div>
    </div>
</section>

@endsection