@extends('layouts.app')

@section('content')

    <div id="main" class="s-content__main large-8 column">

        <article class="entry">

            <header class="entry__header">

                <h2 class="entry__title h1">
                    <a href="{{ route('post.show', ['post' => $post->id]) }}" title="">{{ $post->title }}</a>
                </h2>

                <div class="entry__meta">
                    <ul>
                        <li>{{ $post->created_at->isoformat('LL') }}</li>
                        <li><a href="#" title="" rel="category tag">Ghost</a></li>
                        <li>{{ $post->user->name }}</li>
                    </ul>
                </div>

            </header> <!-- entry__header -->

            <div class="entry__content-media">
                <img src="{{ asset('images/wheel-500.jpg') }}"
                        srcset="{{ asset('images/wheel-1000.jpg') }} 1000w,
                                {{ asset('images/wheel-500.jpg') }} 500w"
                        sizes="(max-width: 1000px) 100vw, 1000px" alt="">
            </div>

            <div class="entry__content">
                <p class="lead">{!! nl2br(e($post->lead)) !!}</p>
                {!! nl2br(e($post->content)) !!}

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

        <div class="comments-wrap">

            <div id="comments">

                <h3>5 Comments</h3>

                <!-- START commentlist -->
                <ol class="commentlist">

                    <li class="depth-1 comment">

                        <div class="comment__avatar">
                            <img class="avatar" src="{{ asset('images/avatars/user-01.jpg') }}" alt="" width="50" height="50">
                        </div>

                        <div class="comment__content">

                            <div class="comment__info">
                                <div class="comment__author">Itachi Uchiha</div>

                                <div class="comment__meta">
                                    <div class="comment__time">July 12, 2019</div>
                                    <div class="comment__reply">
                                        <a class="comment-reply-link" href="#0">Reply</a>
                                    </div>
                                </div>
                            </div>

                            <div class="comment__text">
                            <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
                            facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
                            </div>

                        </div>

                    </li> <!-- end comment level 1 -->

                    <li class="thread-alt depth-1 comment">

                        <div class="comment__avatar">
                            <img class="avatar" src="{{ asset('images/avatars/user-04.jpg') }}" alt="" width="50" height="50">
                        </div>

                        <div class="comment__content">

                            <div class="comment__info">
                                <div class="comment__author">John Doe</div>

                                <div class="comment__meta">
                                    <div class="comment__time">July 12, 2019</div>
                                    <div class="comment__reply">
                                        <a class="comment-reply-link" href="#0">Reply</a>
                                    </div>
                                </div>
                            </div>

                            <div class="comment__text">
                            <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
                            urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
                            tantas semper delicatissimi.</p>
                            </div>

                        </div>

                        <ul class="children">

                            <li class="depth-2 comment">

                                <div class="comment__avatar">
                                    <img class="avatar" src="{{ asset('images/avatars/user-03.jpg') }}" alt="" width="50" height="50">
                                </div>

                                <div class="comment__content">

                                    <div class="comment__info">
                                        <div class="comment__author">Kakashi Hatake</div>

                                        <div class="comment__meta">
                                            <div class="comment__time">July 12, 2019</div>
                                            <div class="comment__reply">
                                                <a class="comment-reply-link" href="#0">Reply</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="comment__text">
                                        <p>Duis sed odio sit amet nibh vulputate
                                        cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
                                        cursus a sit amet mauris</p>
                                    </div>

                                </div>

                                <ul class="children">

                                    <li class="depth-3 comment">

                                        <div class="comment__avatar">
                                            <img class="avatar" src="{{ asset('images/avatars/user-04.jpg') }}" alt="" width="50" height="50">
                                        </div>

                                        <div class="comment__content">

                                            <div class="comment__info">
                                                <div class="comment__author">John Doe</div>

                                                <div class="comment__meta">
                                                    <div class="comment__time">july 11, 2019</div>
                                                    <div class="comment__reply">
                                                        <a class="comment-reply-link" href="#0">Reply</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="comment__text">
                                            <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                                            etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                            </div>

                                        </div>

                                    </li>

                                </ul>

                            </li>

                        </ul>

                    </li> <!-- end comment level 1 -->

                    <li class="depth-1 comment">

                        <div class="comment__avatar">
                            <img class="avatar" src="{{ asset('images/avatars/no-avatar.png') }}" alt="" width="50" height="50">
                        </div>

                        <div class="comment__content">

                            <div class="comment__info">
                                <div class="comment__author">Shikamaru Nara</div>

                                <div class="comment__meta">
                                    <div class="comment__time">July 11, 2019</div>
                                    <div class="comment__reply">
                                        <a class="comment-reply-link" href="#0">Reply</a>
                                    </div>
                                </div>
                            </div>

                            <div class="comment__text">
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                            </div>

                        </div>

                    </li>  <!-- end comment level 1 -->

                </ol>
                <!-- END commentlist -->

            </div> <!-- end comments -->

            <div class="comment-respond">

                <!-- START respond -->
                <div id="respond">

                    <h3>Add Comment <span>Your email address will not be published</span></h3>

                    <form name="contactForm" id="contactForm" method="post" action="" autocomplete="off">
                        <fieldset>

                            <div class="form-field">
                                <input name="cName" id="cName" class="h-full-width" placeholder="Your Name" value="" type="text">
                            </div>

                            <div class="form-field">
                                <input name="cEmail" id="cEmail" class="h-full-width" placeholder="Your Email" value="" type="text">
                            </div>

                            <div class="form-field">
                                <input name="cWebsite" id="cWebsite" class="h-full-width" placeholder="Website" value="" type="text">
                            </div>

                            <div class="message form-field">
                                <textarea name="cMessage" id="cMessage" class="h-full-width" placeholder="Your Message"></textarea>
                            </div>

                            <input name="submit" id="submit" class="btn btn--primary btn-wide btn--large h-full-width" value="Add Comment" type="submit">

                        </fieldset>
                    </form> <!-- end form -->

                </div>
                <!-- END respond-->

            </div> <!-- end comment-respond -->

        </div> <!-- end comments-wrap -->

    </div> <!-- end main -->

@endsection
