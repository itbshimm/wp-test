<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test-theme
 */

get_header();
?>
<nav class="navbar navbar-expand-lg">
	<div class="container">
		<button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="">NavBar</a>
		<div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo03">
			<ul class="navbar-nav  mb-2 mb-lg-0">
				<li class="nav-item m-2">
				<li class="nav-item m-2">
					<a href="#" role="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal1">Продукты и услуги</a>
				</li>
				<li class="nav-item m-2">
					<a href="#" role="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal2">Клиенты</a>
				</li>
				<li class="nav-item m-2">
					<a href="#" role="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal3">Контакты</a>
				</li>
				<li class="nav-item m-2">
					<a href="#" role="button" class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal4">О компании</a>
				</li>
			</ul>
		</div>
		<div class="nav-item">
			<i class="bi bi-telephone-fill"></i>: +0 000-000-00-00 <br>
			<i class="bi bi-geo-alt-fill"></i>: Верхнее тушево 1 <br>
			<i class="bi bi-envelope"></i>: bestcompany@mail.ru
		</div>
	</div>
</nav>
<div class="container text-end">
	<span class="h2">Новости</span>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-9 col-md-12">
			<p style="border: 1px solid gray; padding:20px;">
				Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem ea deserunt ducimus quis eaque consequatur odio! Maxime debitis ipsa voluptatum doloribus nostrum natus aperiam, deleniti consequuntur! Amet quisquam beatae voluptatem.
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quasi ipsum recusandae officiis voluptates accusamus aliquam natus amet sapiente corrupti tempore beatae pariatur quam, officia quaerat rerum nemo est asperiores.
				Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci numquam quibusdam odio expedita eaque sapiente corporis, alias dolor recusandae aliquid temporibus in, sint nostrum beatae. Dignissimos illo natus repellat aspernatur.
			</p>
		</div>
		<div class="col-lg-3 col-md-12">
			<div class="row justify-content-center mb-3" style="border: 1px solid gray;">
				<div class="col-12 text-light text-end" style="background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_1Z55E9pLfXGP4fFxfo3C_LXciJ-o6EeApg&usqp=CAU) no-repeat center; background-size:cover; height:150px">00.00.0000</div>
				<div class="col-12 text-center p-2">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore impedit, hic architecto cumque veniam
				</div>
				<div class="col-6 my-3" style="border-bottom: 3px solid black;">
				</div>
				<div class="col-12 text-center mb-3">
					<button type="button" class="btn btn-dark">Подробнее</button>
				</div>
			</div>
			<div class="row justify-content-center mb-3" style="border: 1px solid gray;">
				<div class="col-12 text-light text-end" style="background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_1Z55E9pLfXGP4fFxfo3C_LXciJ-o6EeApg&usqp=CAU) no-repeat center; background-size:cover; height:150px">00.00.0000</div>
				<div class="col-12 text-center p-2">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore impedit, hic architecto cumque veniam
				</div>
				<div class="col-6 my-3" style="border-bottom: 3px solid black;">
				</div>
				<div class="col-12 text-center mb-3">
					<button type="button" class="btn btn-dark">Подробнее</button>
				</div>
			</div>
			<div class="row justify-content-center mb-3" style="border: 1px solid gray;">
				<div class="col-12 text-light text-end" style="background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_1Z55E9pLfXGP4fFxfo3C_LXciJ-o6EeApg&usqp=CAU) no-repeat center; background-size:cover; height:150px">00.00.0000</div>
				<div class="col-12 text-center p-2">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore impedit, hic architecto cumque veniam
				</div>
				<div class="col-6 my-3" style="border-bottom: 3px solid black;">
				</div>
				<div class="col-12 text-center mb-3">
					<button type="button" class="btn btn-dark">Подробнее</button>
				</div>
			</div>
		</div>
	</div>

</div>
<?php
get_footer();
