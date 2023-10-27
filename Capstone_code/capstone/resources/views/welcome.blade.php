<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rent It</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


       

    </head>
        <!-- Styles -->
        <style>

/* Font */
@import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

/* Design */
*,
*::before,
*::after {
  box-sizing: border-box;
}

html {
  background-color: #ecf9ff;
}

body {
  color: #272727;
  font-family: 'Quicksand', serif;
  font-style: normal;
  font-weight: 400;
  letter-spacing: 0;
  padding: 1rem;
}

.main{
  max-width: 1200px;
  margin: 0 auto;
}

h1 {
    font-size: 150px;
    font-weight: 400;
    text-align: center;
}

img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

.btn {
  color: #ffffff;
  padding: 0.8rem;
  font-size: 14px;
  text-transform: uppercase;
  border-radius: 4px;
  font-weight: 400;
  display: block;
  width: 100%;
  cursor: pointer;
  border: 1px solid rgba(255, 255, 255, 0.2);
  background: transparent;
}

.btn:hover {
  background-color: rgba(255, 255, 255, 0.12);
}

.cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
  background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%);
}

.card_title {
  color: #ffffff;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}

.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
}
.made_by{
  font-weight: 400;
  font-size: 13px;
  margin-top: 35px;
  text-align: center;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: sans-serif;
}

a {
  text-decoration: none;
}

body {
  height: 100%;
  width: 100%;
  background-color: #eceef9;
}

footer {
  color: #333;
  background-color: #e6f0ff;
  position: fixed;
  bottom: 0;
}

.row {
  display: flex;
  padding: 1rem;
}

.column {
  width: calc(100% / 3);
  padding: 0 0.9375rem;
}

h4 {
  margin-bottom: 0.9375rem;
  font-size: 1.5rem;
}

p {
  font-size: 1rem;
  line-height: 1.3rem;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

ul li {
  margin-bottom: 0.625rem;
}

ul li a {
  color: #333;
  font-size: 1rem;
}

ul li i {
  color: #6faaff;
}

ul li a:hover {
  color: #6faaff;
}

ul.social-icons {
  display: flex;
  column-gap: 0.625rem;
}

.social-icons i {
  color: white;
}

ul.social-icons li {
  margin-bottom: 0rem;
}

ul.social-icons li a {
  display: grid;
  place-content: center;
  width: 2.5rem;
  height: 2.5rem;
  border-radius: 100%;
  background-color: #6faaff;
}

ul.social-icons li:hover a {
  background-color: #6fdeff;
}

.copyright {
  text-align: center;
  color: #fff;
  background-color: #6faaff;
  padding: 0.6rem 0;
}

/* Responsive adjustments */

@media screen and (max-width: 768px) {
  .column {
    margin: 0.4rem 0;
    width: 100%;
    padding: 0;
  }

  .row {
    display: flex;
    flex-wrap: wrap;
  }

  h4 {
    font-size: 1.3125rem;
  }

  p {
    font-size: 0.9375rem;
  }

  ul li a {
    font-size: 0.9375rem;
  }

  ul.social-icons li a {
    width: 1.875rem;
    height: 1.875rem;
  }
}

        </style>
        
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ Auth::user()->last_name }}Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="main">
                <h1>Rent IT</h1>
                <ul class="cards">
                  <li class="cards_item">
                    <div class="card">
                      <div class="card_image"><img src="https://picsum.photos/500/300/?image=10"></div>
                      <div class="card_content">
                        <h2 class="card_title">Card Grid Layout</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <button class="btn card_btn">Read More</button>
                      </div>
                    </div>
                  </li>
                  <li class="cards_item">
                    <div class="card">
                      <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>
                      <div class="card_content">
                        <h2 class="card_title">Card Grid Layout</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <button class="btn card_btn">Read More</button>
                      </div>
                    </div>
                  </li>
                  <li class="cards_item">
                    <div class="card">
                      <div class="card_image"><img src="https://picsum.photos/500/300/?image=11"></div>
                      <div class="card_content">
                        <h2 class="card_title">Card Grid Layout</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <button class="btn card_btn">Read More</button>
                      </div>
                    </div>
                  </li>
                  <li class="cards_item">
                    <div class="card">
                      <div class="card_image"><img src="https://picsum.photos/500/300/?image=14"></div>
                      <div class="card_content">
                        <h2 class="card_title">Card Grid Layout</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <button class="btn card_btn">Read More</button>
                      </div>
                    </div>
                  </li>
                  <li class="cards_item">
                    <div class="card">
                      <div class="card_image"><img src="https://picsum.photos/500/300/?image=17"></div>
                      <div class="card_content">
                        <h2 class="card_title">Card Grid Layout</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <button class="btn card_btn">Read More</button>
                      </div>
                    </div>
                  </li>
                  <li class="cards_item">
                    <div class="card">
                      <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
                      <div class="card_content">
                        <h2 class="card_title">Card Grid Layout</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <button class="btn card_btn">Read More</button>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>

            <footer>
                

                <div class="row">
            
                  <div class="column">
            
                    <h4>About Us</h4>
            
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in metus euismod, faucibus metus ut, semper nibh. Aenean euismod justo eu enim dapibus suscipit.</p>
            
                  </div>
            
                  <div class="column">
            
                    <h4>Quick Links</h4>
            
                    <ul>
            
                      <li><a href="#"><i class="fa fa-angle-right"></i> Subscription</a></li>
            
                      <li><a href="#"><i class="fa fa-angle-right"></i> Contact us</a></li>
            
                      <li><a href="#"><i class="fa fa-angle-right"></i> Bug report</a></li>
            
                    </ul>
            
                  </div>
            
                  <div class="column">
            
                    <h4>Connect with Us</h4>
            
                    <ul class="social-icons">
            
                      <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
            
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                      
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
            
                    </ul>
            
                  </div>
            
                </div>
            
                <p class="copyright">© 2023 All Rights Reserved</p>
            
              </footer>
            </body>

              

</html>
