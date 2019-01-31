<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li> Men's</li>
							<li> Women's</li>
							<li> Bags</li>
							<li> Footwear</li>
						</ul>
					<div class="resp-tabs-container">


					<!-- Men Products -->
					<!--/tab_one-->
						<div class="tab1">
							@foreach($men_products as $men_product)
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="{{asset( 'storage/' .  $men_product->cover_image ) }}" alt="" class="pro-image-front">
										<img src="{{asset( 'storage/' .  $men_product->cover_image ) }}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ route('product.details' , $men_product->id) }}" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{ $men_product->name }}</a></h4>
										<div class="info-product-price">
											<span class="item_price">BDT {{ $men_product->sell_price }}</span>
										</div>
											<a href="{{ route('product.addcart' , $men_product->id) }}" class="btn btn-block hvr-outline-out" >Add to Cart</a>									
									</div>
								</div>
							</div>
							@endforeach
							
						</div>

					
						<!--//tab_one-->


						<!-- Women Products -->
						<!--/tab_two-->
						<div class="tab2">
						@foreach($women_products as $women_product)
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="{{asset( 'storage/' .  $women_product->cover_image ) }}" alt="" class="pro-image-front">
										<img src="{{asset( 'storage/' .  $women_product->cover_image ) }}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ route('product.details' , $women_product->id) }}" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{ $women_product->name }}</a></h4>
										<div class="info-product-price">
											<span class="item_price">BDT {{ $women_product->sell_price }}</span>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Formal Blue Shirt" />
													<input type="hidden" name="amount" value="30.99" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>										
									</div>
								</div>
							</div>
							@endforeach
						</div>
					 <!--//tab_two-->


					 <!-- Bags Products -->
						<div class="tab3">
								
						@foreach($bag_products as $bag_product)
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="{{asset( 'storage/' .  $bag_product->cover_image ) }}" alt="" class="pro-image-front">
										<img src="{{asset( 'storage/' .  $bag_product->cover_image ) }}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ route('product.details' , $bag_product->id) }}" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{ $bag_product->name }}</a></h4>
										<div class="info-product-price">
											<span class="item_price">BDT {{ $bag_product->sell_price }}</span>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Formal Blue Shirt" />
													<input type="hidden" name="amount" value="30.99" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>										
									</div>
								</div>
							</div>
							@endforeach
						</div>

						<!-- Footwear Products -->
						<div class="tab4">
							
						@foreach($footwear_products as $footwear_product)
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="{{asset( 'storage/' .  $footwear_product->cover_image ) }}" alt="" class="pro-image-front">
										<img src="{{asset( 'storage/' .  $footwear_product->cover_image ) }}" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{ route('product.details' , $footwear_product->id) }}" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
											<span class="product-new-top">New</span>
											
									</div>
									<div class="item-info-product ">
										<h4><a href="single.html">{{ $footwear_product->name }}</a></h4>
										<div class="info-product-price">
											<span class="item_price">BDT {{ $footwear_product->sell_price }}</span>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Formal Blue Shirt" />
													<input type="hidden" name="amount" value="30.99" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>										
									</div>
								</div>
							</div>
							
						</div>
						@endforeach
					</div>
				</div>	
			</div>
		</div>