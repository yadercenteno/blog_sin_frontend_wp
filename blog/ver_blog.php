<?php
session_start();
ob_start();

define('WP_USE_THEMES', false);

// Suponiendo que la carpeta de WordPress 4.4 se llama "blogbase"
require('../blogbase/wp-blog-header.php');
?>
<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="../favicon.png">

    <link rel="stylesheet" href="../css/bootstrap-min.css">
    
    <link rel="stylesheet" href="../css/animate-min.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/slick.css">
    <link rel="stylesheet" href="../js/rs-plugin/css/settings-min.css">

    <link rel="stylesheet" href="../css/estilos1-min.css">

    <script type="text/javascript" src="../js/modernizr.custom.32033-min.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
    .comment-meta {
      background: none !important;
      padding: 0px 0px;
      text-align: left;
    }
    
    a img {
        border: 0;
    }

    img {
        -ms-interpolation-mode: bicubic;
        border: 0;
        height: auto;
        max-width: 100%;
        vertical-align: middle;
    }

    blockquote.alignleft,
    .wp-caption.alignleft,
    img.alignleft {
        margin: 0.4em 1.6em 1.6em 0;
    }

    blockquote.alignright,
    .wp-caption.alignright,
    img.alignright {
        margin: 0.4em 0 1.6em 1.6em;
    }

    blockquote.aligncenter,
    .wp-caption.aligncenter,
    img.aligncenter {
        clear: both;
        margin-top: 0.4em;
        margin-bottom: 1.6em;
    }

    .widget blockquote.alignleft,
    .widget .wp-caption.alignleft,
    .widget img.alignleft {
        margin: 0.5em 1.5em 1.5em 0;
    }

    .widget blockquote.alignright,
    .widget .wp-caption.alignright,
    .widget img.alignright {
        margin: 0.5em 0 1.5em 1.5em;
    }

    .widget blockquote.aligncenter,
    .widget .wp-caption.aligncenter,
    .widget img.aligncenter {
        margin-top: 0.5em;
        margin-bottom: 1.5em;
    }


    .page-content img.wp-smiley,
    .entry-content img.wp-smiley,
    .comment-content img.wp-smiley {
        border: none;
        margin-top: 0;
        margin-bottom: 0;
        padding: 0;
    }

    .wp-caption img[class*="wp-image-"] {
        display: block;
        margin: 0;
    }

    .gallery-icon img {
        margin: 0 auto;
    }

    p > embed,
    p > iframe,
    p > object,
    p > video {
        margin-bottom: 0;
    }

    p,
    address,
    pre,
    hr,
    ul,
    ol,
    dl,
    dd,
    table {
        margin-bottom: 1.6471em;
    }

    blockquote p {
        margin-bottom: 1.75em;
    }

    .widecolumn p {
        margin: 1.6471em 0;
    }

    .widecolumn p + h2 {
        margin-top: 1.6em;
    }

    .hentry {
        background-color: #fff;
        padding-top: 7.6923%;
        position: relative;
    }

    .hentry.has-post-thumbnail {
        padding-top: 0;
    }

    .hentry.sticky:not(.has-post-thumbnail) {
        padding-top: -webkit-calc(7.6923% + 24px);
        padding-top: calc(7.6923% + 24px);
    }

    .hentry + .hentry {
        border-top: 1px solid rgba(51, 51, 51, 0.1);
    }

    .post-thumbnail {
        border: 0;
        display: block;
        margin-bottom: 2.4em;
    }
    .post-thumbnail img {
        display: block;
        margin: 0 auto;
    }

    a.post-thumbnail:hover,
    a.post-thumbnail:focus {
        opacity: 0.85;
    }

    .entry-header {
        padding: 0 7.6923%;
    }

    .entry-title {
        font-size: 26px;
        font-size: 2.6rem;
        line-height: 1.1538;
        margin-bottom: 0.9231em;
    }

    .entry-content,
    .entry-summary {
        padding: 0 7.6923% 7.6923%;
    }

    .entry-content > :last-child,
    .entry-summary > :last-child {
        margin-bottom: 0;
    }

    .entry-content,
    .entry-summary,
    .page-content,
    .comment-content {
        -webkit-hyphens: auto;
        -moz-hyphens: auto;
        -ms-hyphens: auto;
        hyphens: auto;
        word-wrap: break-word;
    }

    .entry-content h1,
    .entry-summary h1,
    .page-content h1,
    .comment-content h1 {
        font-size: 26px;
        font-size: 2.6rem;
        line-height: 1.1538;
        margin-top: 1.8462em;
        margin-bottom: 0.9231em;
    }

    .entry-content h2,
    .entry-summary h2,
    .page-content h2,
    .comment-content h2 {
        font-size: 22px;
        font-size: 2.2rem;
        line-height: 1.3636;
        margin-top: 2.1818em;
        margin-bottom: 1.0909em;
    }

    .entry-content h3,
    .entry-summary h3,
    .page-content h3,
    .comment-content h3 {
        font-size: 18px;
        font-size: 1.8rem;
        line-height: 1.3333;
        margin-top: 2.6667em;
        margin-bottom: 1.3333em;
    }

    .entry-content h4,
    .entry-content h5,
    .entry-content h6,
    .entry-summary h4,
    .entry-summary h5,
    .entry-summary h6,
    .page-content h4,
    .page-content h5,
    .page-content h6,
    .comment-content h4,
    .comment-content h5,
    .comment-content h6 {
        font-size: 15px;
        font-size: 1.5rem;
        line-height: 1.2;
        margin-top: 3.2em;
        margin-bottom: 1.6em;
    }

    .entry-content h5,
    .entry-content h6,
    .entry-summary h5,
    .entry-summary h6,
    .page-content h5,
    .page-content h6,
    .comment-content h5,
    .comment-content h6 {
        letter-spacing: 0.1em;
        text-transform: uppercase;
    }

    .entry-content > h1:first-child,
    .entry-content > h2:first-child,
    .entry-content > h3:first-child,
    .entry-content > h4:first-child,
    .entry-content > h5:first-child,
    .entry-content > h6:first-child,
    .entry-summary > h1:first-child,
    .entry-summary > h2:first-child,
    .entry-summary > h3:first-child,
    .entry-summary > h4:first-child,
    .entry-summary > h5:first-child,
    .entry-summary > h6:first-child,
    .page-content > h1:first-child,
    .page-content > h2:first-child,
    .page-content > h3:first-child,
    .page-content > h4:first-child,
    .page-content > h5:first-child,
    .page-content > h6:first-child,
    .comment-content > h1:first-child,
    .comment-content > h2:first-child,
    .comment-content > h3:first-child,
    .comment-content > h4:first-child,
    .comment-content > h5:first-child,
    .comment-content > h6:first-child {
        margin-top: 0;
    }

    .entry-content a,
    .entry-summary a,
    .page-content a,
    .comment-content a,
    .pingback .comment-body > a {
        border-bottom: 1px solid #333;
    }

    .entry-content a:hover,
    .entry-content a:focus,
    .entry-summary a:hover,
    .entry-summary a:focus,
    .page-content a:hover,
    .page-content a:focus,
    .comment-content a:hover,
    .comment-content a:focus,
    .pingback .comment-body > a:hover,
    .pingback .comment-body > a:focus {
        border-bottom: 0;
    }

    .entry-content a img,
    .entry-summary a img,
    .page-content a img,
    .comment-content a img {
        display: block;
    }

    .entry-content .more-link,
    .entry-summary .more-link:after {
        white-space: nowrap;
    }

    .entry-content .more-link:after,
    .entry-summary .more-link:after {
        content: "\f429";
        font-size: 16px;
        position: relative;
        top: 5px;
    }

    .author-info {
        border-top: 1px solid #eaeaea;
        border-top: 1px solid rgba(51, 51, 51, 0.1);
        margin: 0 7.6923%;
        padding: 7.6923% 0;
    }

    .author-info .avatar {
        float: left;
        height: 36px;
        margin: 0 1.6em 1.6em 0;
        width: 36px;
    }

    .author-heading {
        color: #707070;
        color: rgba(51, 51, 51, 0.7);
        font-family: "Noto Sans", sans-serif;
        font-size: 12px;
        font-size: 1.2rem;
        letter-spacing: 0.04em;
        margin-bottom: 1.5em;
        text-transform: uppercase;
    }

    .author-title {
        clear: none;
    }

    .author-bio {
        font-size: 12px;
        font-size: 1.2rem;
        line-height: 1.5;
        overflow: hidden;
        padding-bottom: 1px;
    }

    .author-description {
        -webkit-hyphens: auto;
        -moz-hyphens: auto;
        -ms-hyphens: auto;
        hyphens: auto;
        word-wrap: break-word;
    }

    .author-description a {
        border-bottom: 1px solid #333;
    }

    .author-description a:hover,
    .author-description a:focus {
        border-bottom: 0;
    }

    .author-description > :last-child {
        margin-bottom: 0;
    }

    .author-link {
        white-space: nowrap;
    }

    .author-link:after {
        content: "\f429";
        position: relative;
        top: 1px;
    }

    .entry-footer {
        background-color: #f7f7f7;
        color: #707070;
        color: rgba(51, 51, 51, 0.7);
        font-family: "Noto Sans", sans-serif;
        font-size: 12px;
        font-size: 1.2rem;
        line-height: 1.5;
        padding: 3.8461% 7.6923%;
    }

    .entry-footer a {
        border-bottom: 1px solid transparent;
        color: #707070;
        color: rgba(51, 51, 51, 0.7);
    }

    .entry-footer a:hover {
        border-bottom: 1px solid #333;
    }

    .entry-footer a:hover,
    .entry-footer a:focus {
        color: #333;
    }

    .sticky-post {
        background-color: #333;
        color: #fff;
        font-weight: 700;
        letter-spacing: 0.04em;
        padding: 0.25em 0.5em;
        position: absolute;
        top: 0;
        text-transform: uppercase;
    }

    .updated:not(.published) {
        display: none;
    }

    .sticky .posted-on {
        display: none;
    }

    .posted-on:before,
    .byline:before,
    .cat-links:before,
    .tags-links:before,
    .comments-link:before,
    .entry-format:before,
    .edit-link:before,
    .full-size-link:before {
        margin-right: 2px;
        position: relative;
    }

    .posted-on,
    .byline,
    .cat-links,
    .tags-links,
    .comments-link,
    .entry-format,
    .full-size-link {
        margin-right: 1em;
    }

    .format-aside .entry-format:before {
        content: "\f101";
    }

    .format-image .entry-format:before {
        content: "\f473";
    }

    .format-gallery .entry-format:before {
        content: "\f103";
    }

    .format-video .entry-format:before {
        content: "\f104";
    }

    .format-status .entry-format:before {
        content: "\f105";
    }

    .format-quote .entry-format:before {
        content: "\f106";
    }

    .format-link .entry-format:before {
        content: "\f107";
    }

    .format-chat .entry-format:before {
        content: "\f108";
    }

    .format-audio .entry-format:before {
        content: "\f109";
    }

    .posted-on:before {
        content: "\f307";
    }

    .byline:before {
        content: "\f304";
    }

    .cat-links:before {
        content: "\f301";
    }

    .tags-links:before {
        content: "\f302";
    }

    .comments-link:before {
        content: "\f300";
    }

    .full-size-link:before {
        content: "\f402";
    }

    .edit-link:before {
        content: "\f411";
    }

    .comments-link,
    .edit-link {
        white-space: nowrap;
    }

    .page-header {
        background-color: #fff;
        border-bottom: 1px solid rgba(51, 51, 51, 0.1);
        padding: 7.6923%;
    }

    .page-title {
        font-family: "Noto Serif", serif;
        font-size: 18px;
        font-size: 1.8rem;
        line-height: 1.3333;
    }

    .taxonomy-description {
        color: #707070;
        color: rgba(51, 51, 51, 0.7);
        padding-top: 0.4em;
    }

    .taxonomy-description a {
        border-bottom: 1px solid #333;
    }

    .taxonomy-description a:hover,
    .taxonomy-description a:focus {
        border-bottom: 0;
    }

    .taxonomy-description > :last-child {
        margin-bottom: 0;
    }

    .page-content {
        background-color: #fff;
        padding: 7.6923%;
    }

    .page-content > :last-child {
        margin-bottom: 0;
    }

    .page-links {
        clear: both;
        font-family: "Noto Sans", sans-serif;
        margin-bottom: 1.3333em;
    }

    .page-links a,
    .page-links > span {
        border: 1px solid #eaeaea;
        border: 1px solid rgba(51, 51, 51, 0.1);
        display: inline-block;
        font-size: 12px;
        font-size: 1.2rem;
        height: 2em;
        line-height: 2;
        margin: 0 0.3333em 0.3333em 0;
        text-align: center;
        width: 2em;
    }

    .page-links a {
        -webkit-tap-highlight-color: rgba(255, 255, 255, 0.3);
        background-color: #333;
        border-color: #333;
        color: #fff;
    }

    .page-links a:hover,
    .page-links a:focus {
        background-color: #707070;
        background-color: rgba(51, 51, 51, 0.7);
        border-color: transparent;
        color: #fff;
    }

    .page-links > .page-links-title {
        border: 0;
        color: #707070;
        color: rgba(51, 51, 51, 0.7);
        height: auto;
        margin: 0;
        padding-right: 0.5em;
        width: auto;
    }

    .entry-attachment {
        margin-bottom: 1.6em;
    }

    .type-attachment .entry-title {
        -webkit-hyphens: auto;
        -moz-hyphens: auto;
        -ms-hyphens: auto;
        hyphens: auto;
        word-wrap: break-word;
    }

    .entry-caption {
        color: #707070;
        color: rgba(51, 51, 51, 0.7);
        font-family: "Noto Sans", sans-serif;
        font-size: 12px;
        font-size: 1.2rem;
        -webkit-hyphens: auto;
        -moz-hyphens: auto;
        -ms-hyphens: auto;
        hyphens: auto;
        line-height: 1.5;
        padding-top: 0.5em;
        word-wrap: break-word;
    }

    .entry-caption > :last-child {
        margin-bottom: 0;
    }


    /**
     * 12.2 Post Formats
     */

    .format-aside .entry-title,
    .format-image .entry-title,
    .format-video .entry-title,
    .format-quote .entry-title,
    .format-gallery .entry-title,
    .format-status .entry-title,
    .format-link .entry-title,
    .format-audio .entry-title,
    .format-chat .entry-title {
        font-size: 18px;
        font-size: 1.8rem;
        line-height: 1.3333;
        margin-bottom: 1.3333em;
    }

    .format-link .entry-title a:after {
        content: "\f442";
        font-size: 24px;
        height: 24px;
        position: relative;
        top: 0;
        width: 24px;
    }

    .blog .format-status .entry-title,
    .archive .format-status .entry-title {
        display: none;
    }


    /**
     * 12.3 Comments
     */

    .comments-area {
        background-color: #fff;
        border-top: 1px solid #eaeaea;
        border-top: 1px solid rgba(51, 51, 51, 0.1);
        padding: 7.6923%;
    }

    .comments-area > :last-child {
        margin-bottom: 0;
    }

    .comment-list + .comment-respond {
        border-top: 1px solid #eaeaea;
        border-top: 1px solid rgba(51, 51, 51, 0.1);
    }

    .comment-list + .comment-respond,
    .comment-navigation + .comment-respond {
        padding-top: 1.6em;
    }

    .comments-title,
    .comment-reply-title {
        font-family: "Noto Serif", serif;
        font-size: 18px;
        font-size: 1.8rem;
        line-height: 1.3333;
    }

    .comments-title {
        margin-bottom: 1.3333em;
    }

    .comment-list {
        list-style: none;
        margin: 0;
    }

    .comment-list article,
    .comment-list .pingback,
    .comment-list .trackback {
        border-top: 1px solid #eaeaea;
        border-top: 1px solid rgba(51, 51, 51, 0.1);
        padding: 1.6em 0;
    }

    .comment-list .children {
        list-style: none;
        margin: 0;
    }

    .comment-list .children > li {
        padding-left: 0.8em;
    }

    .comment-author {
        color: #707070;
        color: rgba(51, 51, 51, 0.7);
        margin-bottom: 0.4em;
    }

    .comment-author a:hover {
        border-bottom: 1px solid #707070;
        border-bottom: 1px solid rgba(51, 51, 51, 0.7);
    }

    .comment-author .avatar {
        float: left;
        height: 24px;
        margin-right: 0.8em;
        width: 24px;
    }

    .bypostauthor > article .fn:after {
        content: "\f304";
        position: relative;
        top: 5px;
        left: 3px;
    }

    .comment-metadata,
    .pingback .edit-link {
        color: #707070;
        color: rgba(51, 51, 51, 0.7);
        font-family: "Noto Sans", sans-serif;
        font-size: 12px;
        font-size: 1.2rem;
        line-height: 1.5;
    }

    .comment-metadata a,
    .pingback .edit-link a {
        color: #707070;
        color: rgba(51, 51, 51, 0.7);
    }

    .comment-metadata a:hover,
    .pingback .edit-link a:hover {
        border-bottom: 1px solid #333;
    }

    .comment-metadata a:hover,
    .comment-metadata a:focus,
    .pingback .edit-link a:hover,
    .pingback .edit-link a:focus {
        color: #333;
    }

    .comment-metadata {
        margin-bottom: 1.6em;
    }

    .comment-metadata .edit-link {
        margin-left: 1em;
    }

    .pingback .edit-link {
        margin-left: 1em;
    }

    .pingback .edit-link:before {
        top: 5px;
    }

    .comment-content ul,
    .comment-content ol {
        margin: 0 0 1.6em 1.3333em;
    }

    .comment-content li > ul,
    .comment-content li > ol {
        margin-bottom: 0;
    }

    .comment-content > :last-child {
        margin-bottom: 0;
    }

    .comment-list .reply {
        font-size: 12px;
        font-size: 1.2rem;
    }

    .comment-list .reply a {
        border: 1px solid #eaeaea;
        border: 1px solid rgba(51, 51, 51, 0.1);
        color: #707070;
        color: rgba(51, 51, 51, 0.7);
        display: inline-block;
        font-family: "Noto Sans", sans-serif;
        font-weight: 700;
        line-height: 1;
        margin-top: 2em;
        padding: 0.4167em 0.8333em;
        text-transform: uppercase;
    }

    .comment-list .reply a:hover,
    .comment-list .reply a:focus {
        border-color: #333;
        color: #333;
        outline: 0;
    }

    .comment-form {
        padding-top: 1.6em;
    }

    .comment-form label {
        color: #707070;
        color: rgba(51, 51, 51, 0.7);
        font-family: "Noto Sans", sans-serif;
        font-size: 12px;
        font-size: 1.2rem;
        font-weight: 700;
        display: block;
        letter-spacing: 0.04em;
        line-height: 1.5;
        text-transform: uppercase;
    }

    .comment-form input[type="text"],
    .comment-form input[type="email"],
    .comment-form input[type="url"],
    .comment-form input[type="submit"] {
        width: 100%;
    }

    .comment-notes,
    .comment-awaiting-moderation,
    .logged-in-as,
    .form-allowed-tags {
        color: #707070;
        color: rgba(51, 51, 51, 0.7);
        font-family: "Noto Sans", sans-serif;
        font-size: 12px;
        font-size: 1.2rem;
        line-height: 1.5;
        margin-bottom: 2em;
    }

    .logged-in-as a:hover {
        border-bottom: 1px solid #333;
    }

    .no-comments {
        border-top: 1px solid #eaeaea;
        border-top: 1px solid rgba(51, 51, 51, 0.1);
        color: #707070;
        color: rgba(51, 51, 51, 0.7);
        font-family: "Noto Sans", sans-serif;
        font-weight: 700;
        padding-top: 1.6em;
    }

    .comment-navigation + .no-comments {
        border-top: 0;
    }

    .form-allowed-tags code {
        font-family: Inconsolata, monospace;
    }

    .form-submit {
        margin-bottom: 0;
    }

    .required {
        color: #c0392b;
    }

    .comment-reply-title small {
        font-size: 100%;
    }

    .comment-reply-title small a {
        border: 0;
        float: right;
        height: 32px;
        overflow: hidden;
        width: 26px;
    }

    .comment-reply-title small a:before {
        content: "\f405";
        font-size: 32px;
        position: relative;
        top: -3px;
    }
    </style>
    
</head>

<body>

    <div class="pre-loader">
        <div class="load-con">
            <img src="../img/logo.png" class="animated fadeInDown" alt="">
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <header>

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="fa fa-bars fa-lg"></span>
                </button>
                <a id="logotipo" class="navbar-brand" href="../index.html">
                    <img src="../img/logo.png" alt="" class="logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.html#somos">Quienes somos</a>
                    </li>
                    <li><a href="../index.html#hacemos">Que hacemos</a>
                    </li>
                    <li><a href="../index.html#estamos">Donde estamos</a>
                    </li>
                    <li><a href="../index.html#empleos">Empleos</a>
                    </li>
                    <li><a href="../index.html#videos">Testimonios</a>
                    </li>
                    <li><a href="../index.html#contactanos">Contactanos</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-->
	</nav>

    </header>

	<div class="wrapper">
		<section id="formulario">
	        <div class="container">
	            <div class="section-heading scrollpoint sp-effect3">
	                <h1>Blog</h1>
	                <div class="divider"></div>
	                <p>Seguí nuestras historias y testimonios</p>
	            </div>                
                <div class="col-md-12 col-sm-12 scrollpoint sp-effect1">
                    <?php
                    $id=filter_var($_GET["id"], FILTER_VALIDATE_INT);
                    
                    $posts = get_posts('p='.$id);

                    foreach ($posts as $post) : setup_postdata( $post ); ?>                         
                    <div class="post">
                        <h2 id="post-<?php the_ID(); ?>">						
						<?php the_title(); ?></h2>
						<small><?php the_time('d-m-Y H:i A') ?> por <strong><?php the_author() ?></strong></small>        				
                        <div>                
                            &nbsp;
                            <br>             
                        </div>
                        <div class="entry" style='font-size: 120%;'>
                        <?php
                        $content = get_the_content();

                        echo $content;
                        ?>    
                        </div>                                                            
                    </div>                 
                    <?php
                    endforeach;
                    ?>
                <div class="col-md-12 col-sm-12 scrollpoint sp-effect1">                
                    &nbsp;             
                </div>
                <div class="col-md-12 col-sm-12 scrollpoint sp-effect1">                
                    <a href="index.php"><img src="../css/regresar.png" height="32" width="32"></img>Volver atrás</a>                
                </div>
                <div class="col-md-12 col-sm-12 scrollpoint sp-effect1">                
                    &nbsp;             
                </div>
                <div class="col-md-12 col-sm-12 scrollpoint sp-effect1">
                    <big><strong><u>Envianos tu comentario</u></strong></big>
                </div>
                <form role="form" id="multiform" name="multiform" method="GET">                
                <div class="col-md-12 col-sm-12">
                    <div class="col-md-4 col-sm-4 scrollpoint sp-effect1">
                        <input type="hidden" id="post_id" name="post_id" value="<?php echo $id; ?>"/>
                        <div class="form-group">
                            <label for="nombre">Nombre: </label>
                            <input id="nombre" name="nombre" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="col-md-4 col-sm-4 scrollpoint sp-effect1">
                        <div class="form-group">
                            <label for="correo_electronico">E-mail:</label>
                            <input id="correo_electronico" name="correo_electronico" class="form-control" type="email">
                        </div>
                    </div>
                </div> 
                <div class="col-md-12 col-sm-12">   
                    <div class="col-md-4 col-sm-4 scrollpoint sp-effect1">                            
                        <div class="form-group">
                            <label for="comentario">Comentario: </label>
                            <textarea id="comentario" name="comentario" cols="50" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                </div> 
                <div class="col-md-12 col-sm-12">
                    <br>
                    <button id="enviar" type="submit" class="btn btn-default btn-lg"> Enviar comentario </button>                        
                </div>
                </form>                 
                <div class="col-md-12 col-sm-12 scrollpoint sp-effect1">                
                    &nbsp;   
                    <br>          
                </div>
                <?php comments_number( 'Sin comentarios »', '1 Comentario »', '% Comentarios »' ); ?>
                <div class="col-md-12 col-sm-12 scrollpoint sp-effect1">                
                    &nbsp;   
                    <br>          
                </div>
                <?php
                    $args_comentarios = array(
                       'post_id' => $id,
                       'status' => 'approve',
                       'type' => 'comment',
                    );

                    $comentarios = get_comments($args_comentarios);

                    foreach($comentarios as $commentario) :
                        $fecha_hora_coment = new DateTime($commentario->comment_date);
                        $fecha_comentario = date_format($fecha_hora_coment, "d-m-Y");
                        $hora_comentario = date_format($fecha_hora_coment, "G:i A");
                    
                        echo "<div class='col-md-12 col-sm-12 scrollpoint sp-effect1'>";                        
                        echo "<strong><a href='".$commentario->comment_author_url."' target='_blank'>".$commentario->comment_author."</strong></a> dice:<br>";
                        echo "<i>".$fecha_comentario." a las ".$hora_comentario."</i><br>";                        
                        echo $commentario->comment_content;
                        echo "</div>";
                        echo "<div class='col-md-12 col-sm-12 scrollpoint sp-effect1'>";                
                        echo "&nbsp; <br>";   
                        echo "</div>";                                      
                    endforeach;
                ?>                                      
            </div>    
	    </section>
	</div>  

    <div class="modal fade in" id="form-ver-resultados" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div align="center" class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <div id="titulo-ventana"></div>
                </div>
                <div class="modal-body">
                    <div id="noloading" align="center" style="display:none; font-size: 18px;">Todavía hay algunos campos del comentario que NO se han llenado.<br><br>Por favor, revise haber llenado todos los campos del comentario...</div>                                              
                    <div id="loading" align="center" style="display:none; height: 3em; font-size: 25px; color: #6A5ACD;" ><img src="../aplica/images/loading.gif" alt="">&nbsp;&nbsp;Por favor, espere un momento...</div>
                    <div id="cuerpo-ver-resultados"></div>
                </div>
                <div class="modal-footer">
                    <button id="boton_cerrar" href="#" class="btn btn-success" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                </div>
            </div>
        </div>
    </div>  
	
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/placeholdem.min.js"></script>
    <script src="../js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="../js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/scripts.js"></script>

    <script src="../js/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function() {
            appMaster.preLoader();

            $("#multiform").validate({
                rules: {
                    nombre: {
                        required: false
                    }                    
                },
                invalidHandler: function(event, validator) {
                    $('#noloading').css('display','block');                                 
                    $('#noloading').show();

                    $("#cuerpo-ver-resultados").html('');

                    $('#titulo-ventana').html('<h3><strong>El formulario de comentarios NO está completo</strong></h3>');
                    $('#form-ver-resultados').modal('show');
                },
                //Envia el formulario por AJAX
                submitHandler: function(form) {
                    $("#cuerpo-ver-resultados").html('');

                    $('#noloading').css('display','none'); 
                    $('#noloading').hide();                     

                    $('#loading').css('display','block');               
                    $('#loading').css('font-size','35px');
                    $('#loading').css('color','#6A5ACD');
                    $('#loading').css('height','3em');              
                    $('#loading').show();   

                    $('#titulo-ventana').html('<h3><strong>Enviando sus comentarios</strong></h3>');     
                
                    $('#form-ver-resultados').modal('show');
                                        
                    var nombre = document.getElementById('nombre').value;
                    var correo_electronico = document.getElementById('correo_electronico').value;
                    var comentario = document.getElementById('comentario').value;
                    var post_id = document.getElementById('post_id').value;

                    // OJO tenés que cambiar le URL de formURL y 
                    // poner la dirección web de tu servidor
                    var formURL = 'http://tuservidor.com.ni/blogbase/';
                    var datos_a_enviar = 'json=respond.submit_comment&post_id='+post_id+'&name='+nombre+'&email='+correo_electronico+'&content='+comentario;

                    if (nombre != "" && correo_electronico != "" && comentario != "") {                                            
                        $.ajax({
                            type: 'GET',                        
                            url: formURL,
                            data: datos_a_enviar,
                            success: function(data, textStatus, jqXHR) {
                                $("#cuerpo-ver-resultados").html('');

                                $('#loading').css('display','none'); 
                                $('#loading').hide();

                                var tipo_respuesta = "";
                                $(data).each(function(i,val){
                                    $.each(val,function(k,v){
                                        if (k=="status") {
                                            if (v=="ok" || v=="pending") {
                                                tipo_respuesta = "ok";    
                                            }
                                            else {
                                                tipo_respuesta = "error";
                                            }                                                                                    
                                        }                                        
                                    });
                                });
                                
                                if (tipo_respuesta=="ok") {                                
                                    $('#titulo-ventana').html('<h3><strong>Envío Exitoso</strong></h3>');

                                    document.getElementById('nombre').value = "";
                                    document.getElementById('correo_electronico').value = "";
                                    document.getElementById('comentario').value = "";                    

                                    $("#cuerpo-ver-resultados").html('<big>Su comentario fue enviado exitosamente, pero está pendiente de aprobación por el redactor del blog</big>');
                                    return false;
                                }
                                else {
                                    $('#titulo-ventana').html('<h3><strong>Error</strong></h3>');
                                    
                                    if (tipo_respuesta == "error") {
                                        $("#cuerpo-ver-resultados").html('<big><p>Tu comentario NO ha sido enviado!  Por favor, revisa tu conexión a Internet!</p></big>');
                                    }
                                    else {
                                        $("#cuerpo-ver-resultados").html('<big><p>Algo ha sucedido y tu comentario NO ha sido enviado!</p></big>'); 
                                    }
                                    
                                    return false;   
                                }                                                   
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                $("#cuerpo-ver-resultados").html('');
                                $('#loading').css('display','none'); 
                                $('#loading').hide();                                               
                            }           
                        });
                    }
                    else {
                        $("#cuerpo-ver-resultados").html('');

                        $('#noloading').css('display','block');                                 
                        $('#noloading').show();

                        $('#loading').css('display','none'); 
                        $('#loading').hide();
                        
                        $('#titulo-ventana').html('<h3><strong>El formulario de comentarios NO está completo</strong></h3>');
                        $('#form-ver-resultados').modal('show');
                    }

                    return false;                                       
                }
            });
     	});

        // Esto hace que el menu compacto se cierre después del click
        $('.navbar-collapse a').click(function() {
            $('.navbar-collapse').collapse('hide');
        });		               
    </script>
    
</body>
</html>