@extends('layouts.app')

@section('content')

<div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-8 text-center text-shadow">
              <h1 class="display-2 mb-2"><b>Jua</b>hali</h1>
            <a href="https://themes.getbootstrap.com/product/go-multipurpose-landing-page-template/" class="btn btn-white btn-rounded btn-outline-black">View disasters</a>
              <a data-scroll="" href="#preview" class="btn btn-rounded btn-outline-black ml-md-1">Previews</a>
            </div>
</div>
<section id="preview" class="bg-white separator-top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 text-center">
            <h2 class="display-3">Recents</h2>
          </div>
        </div>
        <div class="row demo-preview">
          <div class="col">
            <div class="tab-content" id="demo-1">

              <!-- landing pages -->
              <div class="tab-pane show active" id="tab-1-1" role="tabpanel" aria-labelledby="tab-1-1">
                <div class="row gutter-1 gutter-md-3">
                  <div class="col-6 col-lg-4">
                    <article class="card card-minimal">
                      <a href="html/landing/app.html" class="card-img-container">
                        <img class="card-img" src="images/floods.jpg" alt="floods">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title text-center"><a href="html/landing/app.html">Floods in South C</a></h5>
                      </div>
                    </article>
                  </div>
                  <div class="col-6 col-lg-4">
                    <article class="card card-minimal">
                      <a href="html/landing/service.html" class="card-img-container">
                        <img class="card-img" src="images/bridge.jpg" alt="Collapse 1">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title text-center"><a href="html/landing/service.html">Bridge collapses in</a></h5>
                      </div>
                    </article>
                  </div>
                  <div class="col-6 col-lg-4">
                    <article class="card card-minimal">
                      <a href="html/landing/coworking.html" class="card-img-container">
                        <img class="card-img" src="images/bridge2.jpg" alt="Collapse 2">
                      </a>
                      <div class="card-body">
                        <h5 class="card-title text-center"><a href="html/landing/coworking.html">Bridge collapses in...</a></h5>
                      </div>
                    </article>
                  </div>
                  
                </div>
              </div>
              <!-- / landing pages -->

           
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection