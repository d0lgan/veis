<?php

use App\Document;
use \Illuminate\Support\Facades\Lang;

Breadcrumbs::register( 'home', function ($breadcrumbs ) {
	$breadcrumbs->push( Document::get('page', 'title', 2, Lang::getLocale()), route( 'home' ) );
} );

Breadcrumbs::register( 'about', function ( $breadcrumbs ) {
	$breadcrumbs->parent( 'home' );
	$breadcrumbs->push( 'About', route( 'about' ) );
} );

Breadcrumbs::register( 'sitemaps', function ( $breadcrumbs ) {
	$breadcrumbs->parent( 'home' );
	$breadcrumbs->push( 'Sitemaps', route( 'sitemaps' ) );
} );

Breadcrumbs::register( 'favorites', function ( $breadcrumbs ) {
	$breadcrumbs->parent( 'home' );
	$breadcrumbs->push( 'Favorites', route( 'favorites' ) );
} );


Breadcrumbs::register( 'tag', function ( $breadcrumbs, $tag ) {
	$breadcrumbs->parent( 'home' );
	$breadcrumbs->push( $tag->title, route( 'tag', $tag->slug ) );
} );

Breadcrumbs::register( 'manufacturer', function ( $breadcrumbs, $manufacturer ) {
	$breadcrumbs->parent( 'home' );
	$breadcrumbs->push( $manufacturer->title, route( 'manufacturer', $manufacturer->slug ) );
} );


Breadcrumbs::register( 'shopping-cart', function ( $breadcrumbs ) {
	$breadcrumbs->parent( 'home' );
	$breadcrumbs->push( 'Cart', route( 'shopping-cart' ) );
} );

Breadcrumbs::register( 'order', function ( $breadcrumbs ) {
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( Document::get('page', 'title', 7, Lang::getLocale()), route( 'order-index' ) );
} );

Breadcrumbs::register( 'search', function ( $breadcrumbs ) {
	$breadcrumbs->parent( 'home' );
	$breadcrumbs->push( 'Search', route( 'search' ) );
} );

Breadcrumbs::register( 'checkout', function ( $breadcrumbs ) {
	$breadcrumbs->parent( 'home' );
	$breadcrumbs->push( 'Checkout', route( 'checkout' ) );
} );

Breadcrumbs::register( 'contact', function ( $breadcrumbs ) {
	$breadcrumbs->parent( 'home' );
	$breadcrumbs->push( 'Contact', route( 'contact' ) );
} );

Breadcrumbs::register( 'service', function ( $breadcrumbs ) {
	$breadcrumbs->parent( 'home' );
	$breadcrumbs->push( 'Service', route( 'service' ) );
} );

Breadcrumbs::register( 'category', function ( $breadcrumbs, $category ) {
	$breadcrumbs->parent( 'home' );
	$breadcrumbs->push( $category->title, route( 'category', $category->slug ) );
} );

Breadcrumbs::register( 'blog-category', function ( $breadcrumbs, $category ) {
    $breadcrumbs->parent( 'home' );
    $breadcrumbs->push( Document::get('blog_category', 'title', $category->id, Lang::getLocale()), route( 'blog-category', $category->id ) );
} );

Breadcrumbs::register( 'blog', function ( $breadcrumbs, $article ) {
    $breadcrumbs->parent( 'blog-category', $article->blog_categories );
    $breadcrumbs->push( $article->title, route( 'blog-index', $article->id ) );
} );

Breadcrumbs::register( 'product', function ( $breadcrumbs, $product ) {
	$breadcrumbs->parent( 'category', $product->category );
	$breadcrumbs->push( $product->title, route( 'product', $product->slug ) );
} );