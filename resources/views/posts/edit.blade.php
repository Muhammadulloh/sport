<x-layouts.main>
    <div class="inner-page-banner">
        <div class="container">
        </div>
    </div>
    <x-page-header>
        Contact
    </x-page-header>
    </section>
    <section id="contant" class="contant main-heading team">
        <div class="row">
            <div class="container">
                <div class="contact">
                    <div class="col-md-6">
                        <div class="contact-us">
                            <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="mb-4 control-group">
                                    <input type="text" class="form-control" name="title" value="{{ $post->title }}"
                                        placeholder="Your Name" />
                                    @error('title')
                                        <p class="help-block text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4 control-group">
                                    <input type="text" class="form-control" name="short_content" value="{{ $post->short_content }}"
                                        placeholder="Sarlavha" />
                                    @error('short_content')
                                        <p class="help-block text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-4 control-group">
                                    <textarea class="form-control" name="content" placeholder="Maqola">{{ $post->content }}</textarea>
                                    @error('content')
                                        <p class="help-block text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="flex">
                                    <button class="btn btn-custom" type="submit" id="sendMessageButton">Saqlash</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main>
