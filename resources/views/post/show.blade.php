@extends('layouts.app')

@section('content')

    <article class="entry">

        <header class="entry__header">

            <h2 class="entry__title h1">
                <a href="{{ route('post.show', ['post' => $post->id]) }}" title="">{{ $post->title }}</a>
                @if ($post->is_premium)
                    <img src="{{ asset('images/premium.png') }}">
                @endif
            </h2>

            <div class="entry__meta">
                <ul>
                    <li>{{ $post->created_at->isoformat('LL') }}</li>
                    <li>
                        @foreach($post->categories as $key => $category)
                        <a href="{{ route('home.index', ['categoryId' => $category->id]) }}" title="" rel="category tag">
                            {{ $category->name . (!$loop->last ? ', ' : '') }}
                        </a>
                        @endforeach
                    </li>
                    <li>{{ $post->user->name }}</li>
                </ul>
            </div>

        </header> <!-- entry__header -->

        <div class="entry__content-media">
            @if ($post->image !== null)
                <img src="{{ asset('storage/' . $post->image) }}" alt="">
            @endif
        </div>

        <div class="entry__content">
            <p class="lead @cannot('view', $post) premium-fade @endcannot">
                {!! nl2br(e($post->lead)) !!}
            </p>

            @can('view', $post)
                {!! nl2br(e($post->content)) !!}
            @else
                Neem een premium abonnement als je de rest van het artikel wilt lezen!
            @endcan


        </div> <!-- entry__content -->

        <p class="entry__tags">
            <span>Tagged in </span>:
            <a href="#0">orci</a>, <a href="#0">lectus</a>, <a href="#0">varius</a>, <a href="#0">turpis</a>
        </p>

        <ul class="entry__post-nav h-group">
            <li class="prev"><a rel="prev" href="#0"><strong class="h6">Previous Article</strong> Duis Sed Odio Sit Amet Nibh Vulputate</a></li>
            <li class="next"><a rel="next" href="#0"><strong class="h6">Next Article</strong> Morbi Elit Consequat Ipsum</a></li>
        </ul>

    </article> <!-- end entry -->

    @can('view', $post)
        <div class="comments-wrap">

            <div id="comments">

                <h3>{{ $post->comments->count() }} Comments</h3>

                <!-- START commentlist -->
                <ol class="commentlist">
                    @forelse ($post->comments as $comment)
                        <li class="depth-1 comment">

                            <div class="comment__avatar">
                                <img class="avatar" src="{{ asset('images/avatars/no-avatar.png') }}" alt="" width="50" height="50">
                            </div>
                            <div class="comment__content">

                                <div class="comment__info">
                                    <div class="comment__author">{{ $comment->name }}</div>

                                    <div class="comment__meta">
                                        <div class="comment__time">{{ $comment->created_at->isoformat('LL') }}</div>
                                        <div class="comment__reply">
                                            <a class="comment-reply-link" href="#0">Reply</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment__text">
                                    <p>{!! nl2br(e($comment->message)) !!}</p>
                                </div>

                            </div>

                        </li> <!-- end comment level 1 -->

                    @empty
                        <p>No comments yet.</p>
                    @endforelse
                </ol>
                <!-- END commentlist -->

            </div> <!-- end comments -->

            <div class="comment-respond">

                <!-- START respond -->
                <div id="respond">

                    <h3>Add Comment <span>Your email address will not be published</span></h3>

                    <form name="contactForm" id="contactForm" method="POST" action="{{ route('comment.store', ['post' => $post->id]) }}#respond" autocomplete="off">
                        <fieldset>
                            @csrf

                            @error('name')
                                <div class="warning">{{ $message }}</div>
                            @enderror
                            <div class="form-field">
                                <input name="name" id="name" class="h-full-width" placeholder="Your Name" value="{{ old('name') }}" type="text">
                            </div>

                            @error('email')
                                <div class="warning">{{ $message }}</div>
                            @enderror
                            <div class="form-field">
                                <input name="email" id="email" class="h-full-width" placeholder="Your Email" value="{{ old('email') }}" type="text">
                            </div>

                            @error('website')
                                <div class="warning">{{ $message }}</div>
                            @enderror
                            <div class="form-field">
                                <input name="website" id="website" class="h-full-width" placeholder="Website" value="{{ old('website') }}" type="text">
                            </div>

                            @error('message')
                                <div class="warning">{{ $message }}</div>
                            @enderror
                            <div class="message form-field">
                                <textarea name="message" id="message" class="h-full-width" placeholder="Your Message">{{ old('message') }}</textarea>
                            </div>

                            <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large h-full-width" value="Add Comment" type="submit">

                        </fieldset>
                    </form> <!-- end form -->

                </div>
                <!-- END respond-->

            </div> <!-- end comment-respond -->

        </div> <!-- end comments-wrap -->
    @endcan

@endsection
