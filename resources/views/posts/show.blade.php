<x-layouts.main>
    <!-- Page Header Start -->
    <x-page-header>
        Post - {{ $post->id }}
    </x-page-header>
    <!-- Page Header End -->

    <section id="contant" class="contant">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-12 col-xs-12">
                    <div class="news-post-holder">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="news-post-widget">
                                <img class="img-responsive" src="/images/img-01_002.jpg" alt="">
                                <div class="news-post-detail">
                                    <span class="date">{{ $post->created_ad }}</span>
                                    <h2><a href="blog-detail.html">{{ $post->title }}</a></h2>
                                    <p>{{ $post->short_content }}</p>
                                </div>
                            </div>
                            <div class="mb-5">
                                <h3 class="mb-4 section-title">{{ $post->comments()->count() }} Izohlar</h3>
                                @foreach ($post->comments as $comment)
                                    <div class="media mb-4">
                                        <img src="/img/user.jpg" alt="Image"
                                            class="/img-fluid rounded-circle mr-3 mt-1" style="width: 45px;">
                                        <div class="media-body">
                                            {{-- <h6> {{ $comment->user->name }} <small><i>{{ $comment->created_ad }}</i></small> --}}
                                            </h6>
                                            <p>{{ $comment->body }}</p>
                                            <button class="btn btn-sm btn-light">Reply</button>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="bg-light rounded p-5">
                                    <h3 class="mb-4 section-title">Laravelga izoh qoldirish</h3>
                                    <form action="{{ route('comments.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="message">Habar </label>
                                            <textarea name="body" cols="30" rows="5" class="form-control"></textarea>
                                        </div>
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <div class="form-group mb-0">
                                            <input type="submit" value="izoh" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="content-widget top-story" style="background: url(images/top-story-bg.jpg);">
                        <div class="top-stroy-header">
                            <h2>Top Soccer Headlines Story <a href="#" class="fa fa-fa fa-angle-right"></a></h2>
                            <span class="date">July 05, 2017</span>
                            <h2>Other Headlines</h2>
                        </div>
                        <ul class="other-stroies">
                            <li><a href="#">Wenger Vardy won't start</a></li>
                            <li><a href="#">Evans: Vardy just</a></li>
                            <li><a href="#">Pires and Murray </a></li>
                            <li><a href="#">Okazaki backing</a></li>
                            <li><a href="#">Wolfsburg's Rodriguez</a></li>
                            <li><a href="#">Jamie Vardy compared</a></li>
                            <li><a href="#">Arsenal target Mkhitaryan</a></li>
                            <li><a href="#">Messi wins libel case.</a></li>
                        </ul>
                    </div>
                    <aside id="sidebar" class="right-bar">
                        <div class="banner">
                            <img class="/img-responsive" src="/images/adds-3.jpg" alt="#">
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>


</x-layouts.main>
