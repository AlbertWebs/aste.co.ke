@extends('front.master-product')
@section('content')

@foreach ($SiteSettings as $Settings)


	<!-- Page Content -->
    <main class="page-main">
        <div class="block fullheight empty-category">
            <div class="container">
                <div class="image-empty-category">
                    <img src="{{asset('theme/images/empty-category.png')}}" alt="">
                    <div class="text-empty-category-1">SORRY. THIS CATEGORY IS EMPTY</div>
                    <div class="text-empty-category-2">You have no items in this category.</div>
                </div>
                <div><a href="{{url('/')}}/latest-news" class="btn">return back</a></div>
            </div>
        </div>
    </main>


@endforeach

@endsection