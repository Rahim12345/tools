<div class="scrolling-pagination">
    @foreach($posts as $post)
        <div class="main-blog">
            <div class="blog-img">
                <a href="/blog/{{ $post->slug }}">
                    <img src="{{ $post->image }}" class="img-fluid" alt="{{ $post->title }}">
                </a>
            </div>
            <div class="blog-detail">
                <a href="/blog/{{ $post->slug }}">
                    <h6 class="">{{ $post->title }}</h6>
                </a>
            </div>
        </div>
    @endforeach
    {{ $posts->links() }}
</div>

{{-- Note the <div class="scrolling-pagination"> division which is wrapping up the whole foreach loop. --}}

<script type="text/javascript">
    $('ul.pagination').hide();
    $(function() {
        $('.scrolling-pagination').jscroll({
            autoTrigger: true,
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.scrolling-pagination',
            callback: function() {
                $('ul.pagination').remove();
            }
        });
    });
</script>

{{-- origin: https://devdojo.com/bobbyiliev/how-to-add-a-simple-infinite-scroll-pagination-to-laravel --}}