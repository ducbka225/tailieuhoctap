@extends('master')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-12 offset-lg-1 col-lg-10">
                <div class="featured-image">
                    <img src="images/single-post.jpg" alt="">

                    <div class="posted-date position-absolute">
                        <div class="day">23</div>
                        <div class="month">mar</div>
                    </div><!-- .posted-date -->
                </div><!-- .featured-image -->
            </div><!-- .col -->
        </div><!-- .row -->

        <div class="row">
            <div class="col-12 offset-lg-1 col-lg-1">
                <div class="post-share">
                    <h3>share</h3>

                    <ul class="flex flex-wrap align-items-center p-0 m-0">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-thumb-tack"></i></a></li>
                    </ul>
                </div><!-- .post-share -->
            </div><!-- .col -->

            <div class="col-12 col-lg-8">
                <div class="single-post-wrap">
                	<p  align="justify" > 
                		{{$post->content}}
                	</p>
                    
                </div><!-- .single-post-wrap -->

                <div class="tags-links mt-4">
                    <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                        <li><a href="#">Multipopuse</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Ideas</a></li>
                    </ul>
                </div><!-- .tags-links -->

               

                <div class="post-comments-wrap">
                    <div class="post-comments">
                        <h3 class="comments-title"><span class="comments-number">Comment</span></h3>

                        <ol class="comment-list">
                            <li class="comment">
                                <article class="comment-body">
                                    <figure class="comment-author-avatar">
                                        <img src="images/c-1.png" alt="">
                                    </figure><!-- .comment-author-avatar -->

                                    <div class="comment-wrap">
                                        <div class="comment-author">
                                            <span class="comment-meta d-block">
                                                <a href="#">27 Aug 2018</a>
                                            </span><!-- .comment-meta -->

                                            <span class="fn">
                                                <a href="#">Bk</a>
                                            </span><!-- .fn -->
                                        </div><!-- .comment-author -->

                                        <p>Hay quá</p>

                                        <div class="reply">
                                            <a href="#">like</a>
                                            <a href="#">reply</a>
                                        </div><!-- .reply -->
                                    </div><!-- .comment-wrap -->

                                    <div class="clearfix"></div>
                                </article><!-- .comment-body -->

                                <!-- -->
                            </li><!-- .comment -->

                            <li class="comment">
                                <article class="comment-body">
                                    <figure class="comment-author-avatar">
                                        <img src="images/c-3.png" alt="">
                                    </figure><!-- .comment-author-avatar -->

                                    <div class="comment-wrap">
                                        <div class="comment-author">
                                            <span class="comment-meta d-block">
                                                <a href="#">27 Aug 2018</a>
                                            </span><!-- .comment-meta -->

                                            <span class="fn">
                                                <a href="#">Đức</a>
                                            </span><!-- .comment-autho -->
                                        </div><!-- .comment-author -->

                                        <p>Rất hữu ích cảm ơn mod very nhiều </p>

                                        <div class="reply">
                                            <a href="#">like</a>
                                            <a href="#">reply</a>
                                        </div><!-- .reply -->
                                    </div><!-- .comment-wrap -->

                                    <div class="clearfix"></div>
                                </article><!-- .comment-body -->
                            </li><!-- .comment -->
                        </ol><!-- .comment-list -->
                    </div><!-- .post-comments -->

                    <div class="comments-form">
                        <div class="comment-respond">
                            <h3 class="comment-reply-title">Leave a comment</h3>

                            <form class="comment-form">
                                <input type="text" placeholder="Name">
                                <input type="email" placeholder="Email">
                                <input type="url" placeholder="Website">
                                <textarea rows="4" placeholder="Messages"></textarea>
                                <input type="submit" value="send message">
                            </form><!-- .comment-form -->
                        </div><!-- .comment-respond -->
                    </div><!-- .comments-form -->
                </div><!-- .post-comments-wrap -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .container -->

@endsection