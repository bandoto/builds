<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel='stylesheet' href='/test-fullstack/wp-content/themes/twentynineteen/dist/style.css'>
</head>

<body <?php body_class(); ?>>
 <div class="wrapper">
        <main class="page">
        	<header class="header">
        		<div class="container">
        			<div class="header__top">
        				<a href="" class="header__logo">
        					<img src="/test-fullstack/wp-content/themes/twentynineteen/dist/img/logo.png" alt="">
        				</a>
        				<nav class="header__menu menu">
        				    <div class="menu__body">
        				        <ul class="menu__list" id="menu__list">
        				            <li><a href="" class="menu__link link">What we do</a></li>
        				            <li><a href="" class="menu__link link">Our work</a></li>
        				            <li><a href="" class="menu__link link">seo insights</a></li>
        				            <li><a href="" class="menu__link link">About us</a></li>
        				        </ul>
        				    </div>
        				</nav>
        				<div class="header__burger">
        				    <span></span>
        				</div>
        			</div>
        			<div class="header__body">
        				<div class="header__title">Workforce Survey</div>
        				<div class="header__subtitle">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi </div>
        				<a href="" class="header__link">Start Now</a>
        			</div>
        		</div>
        	</header>

