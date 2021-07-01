 @extends('layouts.app')

 @section('title') Contact @endsection

 @section('content')
 <div id="main-hero" class="hero-body">
     <div class="container">
         <div class="columns is-vcentered pt-40">
             <div class="column"></div>
             <div class="column is-9">
                 <div class="help-header pb-20">
                     <img src="assets/img/logos/square-white.svg" alt="">
                     <h1 class="title is-4">Support Center</h1>
                 </div>
                 <div class="help-search-wrapper">
                     <input type="text" placeholder="search articles">
                     <i class="sl sl-icon-magnifier"></i>
                 </div>
             </div>
             <div class="column"></div>
         </div>
     </div>
 </div>
 </div>

 <!-- Help category -->
 <div class="section help-section is-relative">
     <div class="container">
         <div class="columns is-vcentered">
             <div class="column"></div>
             <div class="column is-9 help-container">
                 <!-- Breadcrumbs -->
                 <nav class="breadcrumbs">
                     <ul>
                         <li><a href="kit4-help.html">All sections</a></li>
                         <li>Welcome to our app</li>
                     </ul>
                 </nav>

                 <!-- Articles list-->
                 <div class="shadow-bg">
                     <!-- Header -->
                     <div class="category-header">
                         <div class="icon">
                             <i class="im im-icon-Claps"></i>
                         </div>
                         <div class="inner-content">
                             <h2 class="title is-3 dark-text">Welcome to our App</h2>
                             <div class="inner-text">
                                 Take the first steps before diving deeply into our application. Learn how to setup your account and to get started the right way.
                             </div>
                             <div class="card-meta">
                                 <img class="small-avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/elie.jpg">
                                 <img class="small-avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/dan.png">
                                 <div class="meta-info">
                                     <div class="articles-number">3 articles in this section</div>
                                     <div class="authors">Written by <span>Nicole Ferrier</span> and 1 other</div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <!-- List -->
                     <div class="articles-list">
                         <!-- Article -->
                         <div class="help-article">
                             <a href="kit4-help-article.html">
                                 <div class="inner-content">
                                     <h3 class="title is-5">Getting started</h3>
                                     <div class="inner-text">
                                         Take the first steps before diving deeply into our application. Learn how to setup your account and to get started the right way.
                                     </div>
                                     <div class="card-meta">
                                         <img class="small-avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/elie.jpg">
                                         <div class="meta-info">
                                             <div class="author">Written by <span>Nicole Ferrier</span></div>
                                             <div class="status">Updated about a week ago</div>
                                         </div>
                                     </div>
                                 </div>
                             </a>
                         </div>

                         <!-- Article -->
                         <div class="help-article">
                             <a href="kit4-help-article.html">
                                 <div class="inner-content">
                                     <h3 class="title is-5">Setting up your account</h3>
                                     <div class="inner-text">
                                         Take the first steps before diving deeply into our application. Learn how to setup your account and to get started the right way.
                                     </div>
                                     <div class="card-meta">
                                         <img class="small-avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/dan.png">
                                         <div class="meta-info">
                                             <div class="author">Written by <span>Dan Baxter</span></div>
                                             <div class="status">Updated about a week ago</div>
                                         </div>
                                     </div>
                                 </div>
                             </a>
                         </div>

                         <!-- Article -->
                         <div class="help-article">
                             <a href="kit4-help-article.html">
                                 <div class="inner-content">
                                     <h3 class="title is-5">Creating a Company</h3>
                                     <div class="inner-text">
                                         Take the first steps before diving deeply into our application. Learn how to setup your account and to get started the right way.
                                     </div>
                                     <div class="card-meta">
                                         <img class="small-avatar" src="https://via.placeholder.com/250x250" alt="" data-demo-src="assets/img/avatars/elie.jpg">
                                         <div class="meta-info">
                                             <div class="author">Written by <span>Nicole Ferrier</span></div>
                                             <div class="status">Updated about a week ago</div>
                                         </div>
                                     </div>
                                 </div>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="column"></div>
         </div>
     </div>
 </div>
 @endsection