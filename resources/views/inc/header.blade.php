 <link rel="stylesheet" href="assets/css/header.css">


 <header id="header">
     <div class="header-top">
         <div class="container">
             <div class="row">
                 <div class="col-md-5 col-sm-12 right_info">
                
                 </div>
                 <div class="col-md-7 col-sm-12 left_info">
                     <ul>
                         <li><i class="fa fa-phone"></i><a href="tel:tel:+9779854098506">+9779851084506</a></li>
                         <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:">wattratech@gmail.com</a>
                         </li>
                     </ul>
                 </div>

             </div>
         </div>
     </div>

     <div class="header-main">
         <div class="container">
             <nav id='cssmenu'>
                 <div class="logo">
                     <a href=""><img src="{{ '/storage/' . $logo->image }}"></a>

                 </div>
                 <div id="head-mobile">{{ $logo->name }}</div>
                 <div class="button"></div>
                 <ul>
                     <li class='active'><a href='{{ route('profile') }}'>Home</a></li>

                     <li><a href='{{ route('about') }}'>About</a></li>
                     <li><a href='{{ route('right') }}'>Products</a></li>
                     <li><a href='{{ route('water') }}'>Water Treatment Products</a></li>
                     <li><a href='{{ route('contact') }}'>Contact</a></li>

                 </ul>
             </nav>
         </div>
     </div>
 </header>
