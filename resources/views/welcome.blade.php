
<!DOCTYPE html>
{{-- @extends('layouts.master') --}} <!-- style -->

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- CSS -->
<link rel="stylesheet" href="../css/app.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/app.css">
    
!-- Styles -->
<style>
	html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
</style>

<style>
body {
font-family: 'Montserrat', sans-serif;
color: #333;
line-height: 1.6;
}
.pt-100{
padding-top:100px;
}
.pb-100{
padding-top:100px;
}
.mb-60 {
margin-bottom: 60px;
}
.section-title p {
font-size: 24px;
font-family: Oleo Script;
margin-bottom: 0px;
margin-top:50px;
}
.section-title h4 {
font-size: 40px;
text-transform: capitalize;
color: #FF5E18;
position: relative;
display: inline-block;
padding-bottom: 25px;
}
.section-title h4::before {
width: 80px;
height: 1.5px;
bottom: 0;
left: 50%;
margin-left: -40px;
}
.section-title h4::before, .section-title h4::after {
position: absolute;
content: "";
background-color: #FF5E18;
}
.single_menu_list img {
max-width: 30%;
position: absolute;
left: 0px;
top: 0;
border: 1px solid #ddd;
padding: 3px;
border-radius: 50%;
transition: .4s;
}
.menu_style1 .single_menu_list img {
position: static;
width: 100%;
display: block;
margin: 0 auto;
margin-bottom: 45px;
}
.single_menu_list h4 {
font-size: 20px;
border-bottom: 1px dashed #333;
padding-bottom: 15px;
margin-bottom: 10px;
}
.single_menu_list h4 span {
float: right;
font-weight: bold;
color: #FF5E18;
font-style: italic;
}
p {
font-weight: 300;
font-size: 14px;
}
.menu_style1 .single_menu_list {
text-align: center;
}
.single_menu_list:hover img {
border-radius: 0;
transition: .4s;
}
</style>
<style>
body {
	font-family: 'Nunito', sans-serif;
}
.hotel-cover {
background-image: url('../images/rooms/6.jpg');
}
.bg-gradient-black-transparent {
background: rgb(0,0,0);
background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 100%);
}
@media screen and (min-width: 640px) {
.bg-gradient-black-transparent {
background: rgb(0,0,0);
background: linear-gradient(0deg, rgba(0,0,0,1) 0%, rgba(0,0,0,0.1) 100%);
}
}
html {
box-sizing: border-box;
}
*, *:before, *:after {
box-sizing: inherit;
}
.column {
float: left;
width: 33.3%;
margin-bottom: 16px;
padding: 0 8px;
}
@media screen and (max-width: 650px) {
.column {
width: 100%;
display: block;
z-index: 1;
}
}
nav {
background-color: white;
}
.card {
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}
.container {
padding: 0 16px;
}
.container::after, .row::after {
content: "";
clear: both;
display: table;
}
.title {
color: grey;
}
.button {
border: none;
outline: 0;
display: inline-block;
padding: 8px;
color: white;
background-color: #000;
text-align: center;
cursor: pointer;
width: 100%;
}
.button:hover {
background-color: #555;
}
</style>







    </head>

    <body class="antialiased">

    

      <!--  Navigation bar Bootstrap-->
      @include('home.navbar')

<!--Hero section -->



<!-- Carousel section -->
@include('home.carousel')

 <!-- Hotel Offer card -->
    
 @include('home.hoteloffer')     


 <!-- Rooms -->
 @include('home.rooms')
<!--End rooms -->
<!--Contact us-->
<!-- !!!!!!!! In the future add  PHPmailer !!!!!! & Contact us form -->

{{-- @include('home.contacform') --}}

<!-- Hotel Services Promo cards -->

@include('home.servicespromo')

<hr class="my-4">
<!-- Gallery -->

@include('home.gallery')

<hr class="my-4">

<!-- Meet the team -->
@include('home.team')


<hr class="my-4">

@include('home.career')




<!-- Our Story -->
@include('home.chart')

 <!-- Chart line -->
    


 


         
<!-- Food -->
@include('home.food')
        

<!-- FAQ -->
@include('home.faq')
    
<!-- Container for  purpose -->

<!-- News -->
 @include('home.articels')
<!-- Container for  purpose -->

<!-- Container for  purpose -->


<!-- Features / WHy choose us-->
<!-- Jumbotron -->
@include('home.jumbotron')

<!-- Section: Design Block -->
 @include('home.extraoffers')

<!-- Social media-->

<!-- Container for demo purpose -->
@include('home.social')


<!-- Reviews -->

@include('home.reviews')

<!-- Footer -->

@include('home.footer')

<!-- scroll to top -->

@include('home.scrolltotop')


</body>
</html>
