

<section class="featured-posts">
	<div class="card-columns listfeaturedtag">

		@foreach ($cultivoplagaproductos as $item)
		<!-- cuadros de quimico -->
			<div class="card">
				<div class="row">
					<div class="col-md-5 wrapthumbnail">
						<a href="#">
							<div class="thumbnail">
						<img src="{{ asset('img/logo-laravel.png') }}" class="center" width="300px" height="300px">
							</div>
						</a>
					</div>
					<div class="col-md-7">
						<div class="card-block">
							<h3><a style="text-decoration: none;" href="views/quimicos.php">{{$item->productostecnicos->name}}</a></h3>
							<h4 class="card-text">{{$item->cultivos->name}}</h4>
							<h5 class="card-text">{{$item->plagas->name}}</h4>
							<div class="metafooter">
								<div class="wrapfooter">
									<span class="meta-footer-thumb">
									</span>
									<span class="author-meta">
									<span class="post-date">
									</span>
									<span class="dot"> <br></span><span class="post-read">
									</span>
									</span>
									<span class="post-read-more"><a href="post.html" title="Read Story"><svg class="svgIcon-use" width="25" height="25" viewbox="0 0 25 25"><path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path></svg></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- end post -->
		@endforeach

		{{$cultivoplagaproductos->appends(["buscar"=>$buscar])->links()}}

	</div>
</section>