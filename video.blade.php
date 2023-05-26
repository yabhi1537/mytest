/*
@File: Grin Template Styles

* This file contains the styling for the actual template, this
is the file you need to edit to change the look of the
template.

This files table contents are outlined below>>>>>

*******************************************
*******************************************

** - Default CSS
** - Default btn CSS
** - Section Title CSS
** - Preloader Area CSS
** - Top Header Area CSS
** - Middle Header Area CSS
** - Navbar Area CSS
** - Search Modal Style CSS
** - Main Slides Area CSS
** - Main Banner Area CSS
** - Features Area CSS
** - Services Area CSS
** - Overview Area CSS
** - Appointment Overview Area CSS
** - About Area CSS
** - Core Features Area CSS
** - Doctor Area CSS
** - Review Area CSS
** - Blog Area CSS
** - Gallery Area CSS
** - Appointment Area CSS
** - Page Banner CSS
** - Fun Facts Area CSS
** - Pricing Area CSS
** - Pagination Area CSS
** - Login Area CSS
** - Register Area CSS
** - FAQ Area CSS
** - 404 Error Area CSS
** - Terms of Service Area CSS
** - Privacy Policy Area CSS
** - Coming Soon Area CSS
** - Contact Area CSS
** - Services Details Area CSS
** - Widget Sidebar CSS
** - Blog Details Area CSS
** - Dentist Details Area CSS
** - Footer Area CSS
** - Copy Right Area CSS
** - Go Top CSS

*/
/*================================================
Default CSS
=================================================*/
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap");
@import url("https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;display=swap");
@import url("https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap");
@import url("https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap");
body {
  padding: 0;
  margin: 0;
  font-family: "Poppins", sans-serif;
  font-size: 16px;
}

a {
  text-decoration: none;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  color: #222222;
  display: inline-block;
}

a:hover, a:focus {
  color: #06a3da;
  text-decoration: none;
}

button {
  outline: 0 !important;
}

p {
  margin-bottom: 15px;
  line-height: 1.8;
  color: #6a6c72;
  font-weight: 400;
  font-family: "Poppins", sans-serif;
  font-size: 14px;
  text-align: justify;
}

p:last-child {
  margin-bottom: 0;
}

i {
  line-height: normal;
}

.d-table {
  width: 100%;
  height: 100%;
}

.d-table-cell {
  vertical-align: middle;
}
.hospital-about-content {
    margin-left: 70px;
}

img {
  max-width: 100%;
  height: auto;
  display: inline-block;
}
.about-image img {
    border-radius: 35px;
}
.ptb-100 {
  padding-top: 100px;
  padding-bottom: 100px;
}

.pt-100 {
  padding-top: 100px;
}

.pt-200{
    padding-top:230px;
}
.pb-100 {
  padding-bottom: 100px;
}
.pb-230 {
  padding-bottom: 230px;
}

.pb-70 {
  padding-bottom: 70px;
}

.pb-75 {
  padding-bottom: 75px;
}
.pt-50 {
  padding-top: 50px;
}

.ptb-50 {
  padding-top: 50px;
  padding-bottom:50px;
}

@font-face {
    font-family: 'Liberal';
    src: url('Liberal-.woff2') format('woff2'),
        url('Liberal-.woff') format('woff');
    font-weight: bold;
    font-style: normal;
    font-display: swap;
}



.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
  color: #222222;
  font-family: 'Liberal';
  font-weight: bold;
}

.h1:last-child, .h2:last-child, .h3:last-child, .h4:last-child, .h5:last-child, .h6:last-child, h1:last-child, h2:last-child, h3:last-child, h4:last-child, h5:last-child, h6:last-child {
  margin-bottom: 0;
}

.mapp {
    margin: -150px 0;
}
.mapp iframe {
    border-radius: 10px !important;
}
/*================================================
Default btn CSS
=================================================*/
.default-btn {
  display: inline-block;
  background-color: #124390;
  color: #ffffff;
  padding: 18px 35px;
  font-size: 15px;
  font-weight: 500;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 5px;
}

.default-btn:hover {
  background-color: #124390;
  color: #ffffff;
}

/*================================================
Section Title CSS
=================================================*/
.section-title-warp {
  margin-bottom: 45px;
}

.section-title-warp .sub-title {
  display: inline-block;
  color: #6a6c72;
  font-size: 15px;
  font-weight: 500;
  background-color: #ffffff;
  -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
  padding: 10px 20px;
  border-radius: 50px;
}

.section-title-warp .sub-title i {
  color: #14e49a;
  margin-right: 5px;
  font-size: 14px;
}

.section-title-warp h2 {
  font-size: 38px;
  margin-top: 22px;
  margin-bottom: 0;
  line-height: 1.4;
}

.section-warp-btn {
  text-align: right;
}

.section-warp-btn .default-btn {
  padding: 20px 45px;
  font-size: 16px;
}

.section-title {
  text-align: center;
  max-width: 750px;
  margin: 20px auto 30px;
}

.section-title .sub-title {
  display: inline-block;
  color: #6a6c72;
  font-size: 15px;
  font-weight: 500;
  background-color: #ffffff;
  -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
  padding: 10px 20px;
  border-radius: 50px;
}

.section-title .sub-title i {
  color: #14e49a;
  margin-right: 5px;
  font-size: 14px;
}

.section-title h2 {
  font-size: 38px;
  margin-top: 22px;
  margin-bottom: 15px;
  line-height: 1.4;
}

/*================================================
Preloader Area CSS
=================================================*/
.preloader {
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 99999;
  background-color: #ffffff;
}

.preloader .loader {
  left: 50%;
  top: 45%;
  -webkit-transform: translateX(-50%) translateY(-45%);
          transform: translateX(-50%) translateY(-45%);
  position: absolute;
}

.preloader .loader .sbl-half-circle-spin {
  height: 50px;
  width: 50px;
  color: #06a3da;
  display: inline-block;
  position: relative;
  border: 1px solid;
  border-radius: 50%;
  -webkit-animation: rotate3d 2s linear infinite;
          animation: rotate3d 2s linear infinite;
}

@-webkit-keyframes rotate3d {
  0% {
    -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
  }
  100% {
    -webkit-transform: rotateY(360deg);
            transform: rotateY(360deg);
  }
}

@keyframes rotate3d {
  0% {
    -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
  }
  100% {
    -webkit-transform: rotateY(360deg);
            transform: rotateY(360deg);
  }
}

.buy-now-btn {
  right: 20px;
  z-index: 99;
  top: 50%;
  position: fixed;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  border-radius: 30px;
  display: inline-block;
  color: #ffffff;
  background-color: #82b440;
  padding: 10px 20px 10px 42px;
  -webkit-box-shadow: 0 1px 20px 1px #82b440;
          box-shadow: 0 1px 20px 1px #82b440;
  font-size: 13px;
  font-weight: 600;
}

.buy-now-btn img {
  top: 50%;
  left: 20px;
  width: 15px;
  position: absolute;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.buy-now-btn:hover {
  background-color: #06a3da;
  color: #ffffff;
}

/*================================================
Top Header Area CSS
=================================================*/
.top-header-area {
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: #f7f7f7;
}

.top-header-information {
  padding-left: 0;
  margin-bottom: 0;
}

.top-header-information li {
  font-size: 15px;
  color: #222222;
  font-weight: 500;
  list-style-type: none;
  display: inline-block;
  position: relative;
  margin-right: 15px;
  padding-left: 22px;
}

.top-header-information li:last-child {
  margin-right: 0;
}

.top-header-information li i {
  position: absolute;
  left: 0;
  top: 2px;
  color: #06a3da;
  font-size: 16px;
}

.top-header-information li a {
  color: #222222;
}

.top-header-information li a:hover {
  color: #06a3da;
}

.top-header-optional {
  padding-left: 0;
  margin-bottom: 0;
  text-align: right;
}

.top-header-optional li {
  list-style-type: none;
  display: inline-block;
  margin-right: 10px;
}

.top-header-optional li:last-child {
  margin-right: 0;
}

.top-header-optional li a {
  margin: 0 2px;
}

.top-header-optional li a i {
  display: inline-block;
  height: 30px;
  width: 30px;
  line-height: 30px;
  background-color: #ffffff;
  color: #06a3da;
  -webkit-box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
          box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
  text-align: center;
  font-size: 16px;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.top-header-optional li a i:hover {
  background-color: #06a3da;
  color: #ffffff;
  -webkit-transform: translateY(-2px);
          transform: translateY(-2px);
}

.top-header-optional .languages-list .nice-select {
  background-color: transparent;
  border-radius: 0;
  border: none;
  font-size: 15px;
  font-weight: 500;
  height: auto;
  line-height: initial;
  color: #222222;
  padding-left: 0;
  padding-right: 20px;
  position: relative;
  top: -2px;
}

.top-header-optional .languages-list .nice-select::after {
  border-color: #06a3da;
  height: 8px;
  width: 8px;
  right: 5px;
  margin-top: -5px;
}

.top-header-optional .languages-list .nice-select .list {
  background-color: #ffffff;
  -webkit-box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
          box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
  border-radius: 0;
  height: 200px;
  overflow-y: scroll;
  margin-top: 10px;
  margin-bottom: 0;
}

.top-header-optional .languages-list .nice-select .list .option {
  line-height: 40px;
  min-height: 40px;
  color: #6a6c72;
  padding-left: 15px;
  padding-top: 5px;
  padding-right: 15px;
  display: inherit;
  margin-right: 0;
}

.top-header-optional .languages-list .nice-select .list .option.selected {
  background-color: #06a3da !important;
  color: #ffffff;
  font-weight: normal;
}

.top-header-optional .languages-list .nice-select .list::-webkit-scrollbar {
  display: none;
}

/*================================================
Middle Header Area CSS
=================================================*/
.middle-header-area {
  padding-top: 15px;
  padding-bottom: 15px;
}

.middle-header h1 {
  font-size: 45px;
  margin-bottom: 0;
}

.middle-header h1 a {
  color: #222222;
}

.middle-header-content {
  text-align: right;
  padding-left: 0;
  list-style-type: none;
  margin-bottom: 0;
}

.middle-header-content li {
  display: inline-block;
  position: relative;
  text-align: left;
  padding-left: 55px;
  font-size: 14px;
  font-weight: 400;
  color: #6a6c72;
  margin-right: 30px;
}

.middle-header-content li i {
  position: absolute;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  color: #06a3da;
  font-size: 38px;
}

.middle-header-content li span {
  display: block;
  font-size: 18px;
  font-weight: 500;
  color: #222222;
  margin-top: 5px;
}

.middle-header-content li:last-child {
  margin-right: 0;
}

/*================================================
Navbar Area CSS
=================================================*/
.main-responsive-nav {
  display: none;
}

.main-responsive-nav .logo .white-logo {
  display: none;
}

.main-navbar {
  padding: 10px 0;
  background-color: #f7f7f7;
}

.main-navbar .navbar {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  padding: 0;
}

.main-navbar .navbar .navbar-brand {
  padding: 0;
}

.main-navbar .navbar ul {
  padding-left: 0;
  list-style-type: none;
  margin-bottom: 0;
}

.main-navbar .navbar .navbar-nav {
  margin-right: auto;
}

.main-navbar .navbar .navbar-nav .nav-item {
  position: relative;
  margin-left: 9px;
  margin-right: 9px;
}

.main-navbar .navbar .navbar-nav .nav-item a {
  color: #222222;
  font-size: 14px;
  font-weight: 600;
  padding-left: 0;
  padding-right: 0;
  padding-top: 18px;
  padding-bottom: 18px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  position: relative;
}

.main-navbar .navbar .navbar-nav .nav-item a::before {
  content: "";
  position: absolute;
  bottom: 2px;
  right: 0;
  width: 0;
  height: 2px;
  background-color: #06a3da;
  -webkit-transition: all ease 0.5s;
  transition: all ease 0.5s;
}

.main-navbar .navbar .navbar-nav .nav-item a i {
  font-size: 18px;
  position: relative;
  top: 3px;
  display: inline-block;
  margin-left: -5px;
  margin-right: -5px;
}

.main-navbar .navbar .navbar-nav .nav-item a:hover, .main-navbar .navbar .navbar-nav .nav-item a:focus, .main-navbar .navbar .navbar-nav .nav-item a.active {
  color: #06a3da;
}

.main-navbar .navbar .navbar-nav .nav-item a:hover::before, .main-navbar .navbar .navbar-nav .nav-item a:focus::before, .main-navbar .navbar .navbar-nav .nav-item a.active::before {
  width: 100%;
  right: auto;
  left: 0;
}

.main-navbar .navbar .navbar-nav .nav-item:last-child {
  margin-right: 0;
}

.main-navbar .navbar .navbar-nav .nav-item:first-child {
  margin-left: 0;
}

.main-navbar .navbar .navbar-nav .nav-item:hover a, .main-navbar .navbar .navbar-nav .nav-item.active a {
  color: #06a3da;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu{
  border: none;
  top: 60px;
  left: 0;
  z-index: 99;
  opacity: 0;
  width: 230px;
  display: block;
  border-radius: 0;
  padding: 10px 0;
  position: absolute;
  visibility: hidden;
  opacity: 0;
  margin-top: 10px;
  background: #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  -webkit-box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li{
  margin: 0;
}
ul.dropdown-menu {
    height: 300px;
    overflow-y: scroll;
}
.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a{
  padding: 5px 20px;
  position: relative;
  display: block;
  color: #222222;
  font-size: 15px;
  font-weight: 500;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a i{
  margin: 0;
  position: absolute;
  top: 50%;
  font-size: 20px;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  right: 15px;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a:hover, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a:focus, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a.active {
  color: #06a3da;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a:hover::before, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a:focus::before, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a.active::before {
  display: none;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu{
  top: 0;
  opacity: 0;
  right: -230px;
  left: auto;
  visibility: hidden;
  -webkit-transform: translateY(5px);
          transform: translateY(5px);
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a {
  color: #222222;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:hover, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:focus, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a.active {
  color: #06a3da;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu {
  top: 0;
  opacity: 0;
  left: 230px;
  visibility: hidden;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a {
  color: #222222;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active {
  color: #06a3da;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu {
  top: 0;
  opacity: 0;
  left: -230px;
  visibility: hidden;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a {
  color: #222222;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active {
  color: #06a3da;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu {
  top: 0;
  opacity: 0;
  left: 230px;
  visibility: hidden;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a {
  color: #222222;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active {
  color: #06a3da;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu {
  top: 0;
  opacity: 0;
  left: -230px;
  visibility: hidden;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a {
  color: #222222;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active {
  color: #06a3da;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu {
  top: 0;
  opacity: 0;
  left: 230px;
  visibility: hidden;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a {
  color: #222222;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus, .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active {
  color: #06a3da;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a {
  color: #06a3da;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li:hover .dropdown-menu {
  opacity: 1;
  visibility: visible;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a {
  color: #06a3da;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li:hover .dropdown-menu {
  opacity: 1;
  visibility: visible;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a {
  color: #06a3da;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li:hover .dropdown-menu {
  opacity: 1;
  visibility: visible;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a {
  color: #06a3da;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li:hover .dropdown-menu {
  opacity: 1;
  visibility: visible;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li.active a {
  color: #06a3da;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li:hover .dropdown-menu {
  opacity: 1;
  visibility: visible;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li.active a {
  color: #06a3da;
}

.main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li:hover .dropdown-menu {
  opacity: 1;
  visibility: visible;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}

.main-navbar .navbar .navbar-nav .nav-item:hover .dropdown-menu {
  opacity: 1;
  visibility: visible;
  margin-top: 0;
}

.main-navbar .navbar .others-options .option-item {
  margin-right: 25px;
}

.main-navbar .navbar .others-options .option-item:last-child {
  margin-right: 0;
}

.main-navbar .navbar .others-options .option-item .search-btn a i {
  font-size: 22px;
  color: #222222;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.main-navbar .navbar .others-options .option-item .search-btn a i:hover {
  color: #06a3da;
}

.main-navbar .navbar .others-options .option-item .navbar-btn .default-btn {
  display: inline-block;
  background-color: #06a3da;
  color: #ffffff;
  padding: 15px 25px;
  font-size: 15px;
  font-weight: 500;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 5px;
}

.main-navbar .navbar .others-options .option-item .navbar-btn .default-btn:hover {
  background-color: #124390;
}

.navbar-area.is-sticky {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 999;
  background: #ffffff !important;
  -webkit-animation: 500ms ease-in-out 0s normal none 1 running fadeInDown;
          animation: 500ms ease-in-out 0s normal none 1 running fadeInDown;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.others-option-for-responsive {
  display: none;
}

.others-option-for-responsive .dot-menu {
  padding: 0 10px;
  height: 30px;
  cursor: pointer;
  z-index: 9991;
  position: absolute;
  right: 60px;
  top: -28px;
}

.others-option-for-responsive .dot-menu .inner {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  height: 30px;
}

.others-option-for-responsive .dot-menu .inner .circle {
  height: 5px;
  width: 5px;
  border-radius: 100%;
  margin: 0 2px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  background-color: #222222;
}

.others-option-for-responsive .dot-menu:hover .inner .circle {
  background-color: #06a3da;
}

.others-option-for-responsive .container {
  position: relative;
}

.others-option-for-responsive .container .container {
  position: absolute;
  right: 0;
  top: 10px;
  max-width: 260px;
  background-color: #ffffff;
  -webkit-box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
  margin-left: auto;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  z-index: 2;
  padding-left: 15px;
  padding-right: 15px;
}

.others-option-for-responsive .container .container.active {
  opacity: 1;
  visibility: visible;
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
}

.others-option-for-responsive .option-inner .others-options .option-item {
  margin-right: 25px;
}

.others-option-for-responsive .option-inner .others-options .option-item:last-child {
  margin-right: 0;
}

.others-option-for-responsive .option-inner .others-options .option-item .search-btn a i {
  font-size: 22px;
  color: #222222;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.others-option-for-responsive .option-inner .others-options .option-item .search-btn a i:hover {
  color: #06a3da;
}

.others-option-for-responsive .option-inner .others-options .option-item .navbar-btn .default-btn {
  display: inline-block;
  background-color: #06a3da;
  color: #ffffff;
  padding: 20px 35px;
  font-size: 16px;
  font-weight: 500;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 5px;
}

.others-option-for-responsive .option-inner .others-options .option-item .navbar-btn .default-btn:hover {
  background-color: #124390;
}

/*================================================
Search Modal Style CSS
=================================================*/
.searchmodal .modal-dialog {
  width: 100%;
  height: 100%;
  max-width: 100%;
  margin: 0;
  display: table;
}

.searchmodal .modal-content {
  height: 100%;
  border-radius: 0;
  border: none;
  display: table-cell;
  vertical-align: middle;
  background-color: #222222;
  opacity: .77;
}

.searchmodal .modal-body {
  max-width: 700px;
  margin: auto;
  padding: 0;
}

.searchmodal .modal-header {
  border: none;
}

.searchmodal .modal-header button {
  position: relative;
}

.searchmodal .modal-header button.close {
  position: absolute;
  right: 25px;
  top: 25px;
  display: inline-block;
  height: 50px;
  width: 50px;
  line-height: 55px;
  background-color: #eeeeee;
  border-radius: 50px;
  color: #06a3da;
  border: none;
  font-size: 35px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.searchmodal .modal-header button.close:hover, .searchmodal .modal-header button.close:focus {
  background-color: #06a3da;
  color: #ffffff;
}

.modal-search-form {
  position: relative;
}

.modal-search-form .search-field {
  background-color: transparent;
  height: 60px;
  padding: 8px 15px;
  border: 1px solid #eeeeee;
  width: 100%;
  display: block;
  outline: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 10px;
  color: #ffffff;
}

.modal-search-form .search-field::-webkit-input-placeholder {
  color: #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.modal-search-form .search-field:-ms-input-placeholder {
  color: #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.modal-search-form .search-field::-ms-input-placeholder {
  color: #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.modal-search-form .search-field::placeholder {
  color: #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.modal-search-form .search-field:focus {
  border-color: #06a3da;
}

.modal-search-form .search-field:focus::-webkit-input-placeholder {
  color: transparent;
}

.modal-search-form .search-field:focus:-ms-input-placeholder {
  color: transparent;
}

.modal-search-form .search-field:focus::-ms-input-placeholder {
  color: transparent;
}

.modal-search-form .search-field:focus::placeholder {
  color: transparent;
}

.modal-search-form button {
  border: none;
  background-color: #eeeeee;
  color: #06a3da;
  height: 40px;
  width: 40px;
  position: absolute;
  right: 10px;
  padding: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  font-size: 20px;
  border-radius: 5px;
  cursor: pointer;
}

.modal-search-form button i {
  position: absolute;
  left: 0;
  right: 0;
  top: 52%;
  -webkit-transform: translateY(-52%);
          transform: translateY(-52%);
}

.modal-search-form button:hover, .modal-search-form button:focus {
  background-color: #06a3da;
  color: #ffffff;
}

@media only screen and (max-width: 991px) {
  .main-responsive-nav {
    display: block;
  }
  .main-responsive-nav .main-responsive-menu {
    position: relative;
  }
  .main-responsive-nav .main-responsive-menu.mean-container .mean-nav ul {
    font-size: 15px;
  }
  .main-responsive-nav .main-responsive-menu.mean-container .mean-nav ul li a.active {
    color: #06a3da;
  }
  .main-responsive-nav .main-responsive-menu.mean-container .mean-nav ul li a i {
    display: none;
  }
  .main-responsive-nav .main-responsive-menu.mean-container .mean-nav ul li li a {
    font-size: 14px;
  }
  .main-responsive-nav .main-responsive-menu.mean-container .others-options {
    display: none !important;
  }
  .main-responsive-nav .main-responsive-menu.mean-container .navbar-nav {
    overflow-y: scroll;
    height: 300px;
    -webkit-box-shadow: 0 7px 13px 0 rgba(0, 0, 0, 0.1);
            box-shadow: 0 7px 13px 0 rgba(0, 0, 0, 0.1);
  }
  .main-responsive-nav .mean-container a.meanmenu-reveal {
    color: #222222;
  }
  .main-responsive-nav .mean-container a.meanmenu-reveal span {
    background: #222222;
    position: relative;
  }
  .main-responsive-nav .logo {
    position: relative;
  }
  .main-responsive-nav .logo img {
    max-width: 100px !important;
  }
  .navbar-area {
    background-color: #ffffff;
    padding-top: 15px;
    padding-bottom: 15px;
  }
  .main-navbar {
    display: none;
  }
  .others-option-for-responsive {
    display: block;
  }
}

/*================================================
Main Slides Area CSS
=================================================*/
.main-slides-item {
  background-image: url(../images/main-slides/slides-bg1.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  position: relative;
  z-index: 1;
  height:550px;
}

.main-slides-item.item-bg2 {
  background-image: url(../images/main-slides/slides-bg2.jpg);
}

.main-slides-item.item-bg3 {
  background-image: url(../images/main-slides/slides-bg3.jpg);
}

.main-slides-item.item-bg4 {
  background-image: url(../images/main-slides/slides-bg4.jpg);
}

.main-slides-item.item-bg4 .main-slides-content {
  max-width: 675px;
  padding-top:70px !important;
}

.main-slides-item.item-bg5 {
  background-image: url(../images/main-slides/slides-bg5.jpg);
}

.main-slides-item.item-bg5 .main-slides-content {
  max-width: 675px;
}

.main-slides-item.item-bg6 {
  background-image: url(../images/main-slides/slides-bg6.jpg);
}

.main-slides-item.item-bg6 .main-slides-content {
  max-width: 675px;
}

.main-slides-content {
  max-width: 630px;
}

.main-slides-content .sub-title {
  display: inline-block;
  color: #6a6c72;
  font-size: 15px;
  font-weight: 500;
  background-color: #ffffff;
  padding: 10px 20px;
  border-radius: 50px;
  -webkit-animation-delay: 2.2s;
          animation-delay: 2.2s;
}

.main-slides-content .sub-title i {
  color: #14e49a;
  margin-right: 5px;
  font-size: 14px;
}

.main-slides-content h1 {
  font-size: 75px;
  margin-top: 25px;
  margin-bottom: 15px;
  -webkit-animation-delay: 0.5s;
          animation-delay: 0.5s;
}

.main-slides-content h1 span {
  color: #06a3da;
}

.main-slides-content p {
  color: #222222;
  -webkit-animation-delay: 1.8s;
          animation-delay: 1.8s;
}

.main-slides-content .slides-btn {
  margin-top: 30px;
}

.main-slides-content .slides-btn .default-btn {
  -webkit-animation-delay: 2s;
          animation-delay: 2s;
}

.main-slides-content .slides-btn .checkup-content {
  display: inline-block;
  position: relative;
  margin-left: 20px;
  -webkit-animation-delay: 2.5s;
          animation-delay: 2.5s;
}

.main-slides-content .slides-btn .checkup-content .icon {
  position: absolute;
  top: -20px;
  left: 0;
}

.main-slides-content .slides-btn .checkup-content .icon i {
  display: inline-block;
  height: 65px;
  width: 65px;
  line-height: 65px;
  background-color: #06a3da;
  color: #ffffff;
  font-size: 40px;
  text-align: center;
  border-radius: 50%;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.main-slides-content .slides-btn .checkup-content .icon i:hover {
  background-color: #124390;
}

.main-slides-content .slides-btn .checkup-content span {
  padding-left: 75px;
}

.main-slides-content .slides-btn .checkup-content span a {
  color: #222222;
}

.main-slides-content .slides-btn .checkup-content span a:hover {
  color: #06a3da;
}

.main-slides-content .slides-btn .optional-btn {
  display: inline-block;
  background-color: #222222;
  color: #ffffff;
  padding: 18px 35px;
  font-size: 15px;
  font-weight: 500;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 5px;
  margin-left: 20px;
  -webkit-animation-delay: 2.5s;
          animation-delay: 2.5s;
}

.main-slides-content .slides-btn .optional-btn:hover {
  background-color: #06a3da;
  color: #ffffff;
}

.home-slides.owl-theme .owl-nav {
  margin-top: 0;
  -webkit-transition: 1s;
  transition: 1s;
  opacity: 0;
  visibility: hidden;
  line-height: .01;
}

.home-slides.owl-theme .owl-nav [class*=owl-] {
  color: #222222;
  margin: 0;
  position: absolute;
  left: 20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  padding: 0;
  background: #ffffff;
  border-radius: 20px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  width: 55px;
  height: 55px;
  line-height: 56px;
  text-align: center;
  font-size: 22px;
}

.home-slides.owl-theme .owl-nav [class*=owl-].owl-next {
  left: auto;
  right: 20px;
}

.home-slides.owl-theme .owl-nav [class*=owl-]:hover {
  color: #ffffff;
  background-color: #06a3da;
}

.home-slides.owl-theme:hover .owl-nav {
  opacity: 1;
  visibility: visible;
}

/*================================================
Main Banner Area CSS
=================================================*/
.main-banner-item {
  background-color: #eaffff;
}

.main-banner-item .container-fluid {
  padding-right: 0;
  overflow: hidden;
}

.main-banner-content {
  max-width: 620px;
  margin-left: auto;
}

.main-banner-content .sub-title {
  display: inline-block;
  color: #6a6c72;
  font-size: 15px;
  font-weight: 500;
  background-color: #ffffff;
  padding: 10px 20px;
  border-radius: 50px;
}

.main-banner-content .sub-title i {
  color: #14e49a;
  margin-right: 5px;
  font-size: 14px;
}

.main-banner-content h1 {
  font-size: 70px;
  margin-top: 25px;
  margin-bottom: 15px;
}

.main-banner-content h1 span {
  color: #06a3da;
}

.main-banner-content p {
  color: #222222;
}

.main-banner-content .banner-btn {
  margin-top: 30px;
}

.main-banner-content .banner-btn .optional-btn {
  display: inline-block;
  background-color: #222222;
  color: #ffffff;
  padding: 18px 35px;
  font-size: 15px;
  font-weight: 500;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 5px;
  margin-left: 20px;
}

.main-banner-content .banner-btn .optional-btn:hover {
  background-color: #06a3da;
  color: #ffffff;
}

.main-banner-image img {
  border-radius: 0 0 0 100px;
}

/*================================================
Features Area CSS
=================================================*/
.features-area {
  position: relative;
  z-index: 1;
  margin-top: -65px;
}

.features-area.bg-ffffff {
  margin-top: 0;
}

.single-features {
  background-color: #06a3da;
  padding: 45px 30px;
  border-radius: 10px;
  margin-bottom: 30px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-features.bg-f57e57 {
  background-color: #f57e57;
}

.single-features.bg-4a6577 {
  background-color: #4a6577;
}

.single-features .content {
  position: relative;
  padding-left: 90px;
}

.single-features .content .icon {
  position: absolute;
  left: 0;
  top: -8px;
}

.single-features .content .icon i {
  font-size: 75px;
  color: #ffffff;
}

.single-features .content h3 {
  font-size: 25px;
  margin-bottom: 14px;
  font-weight: 600;
}

.single-features .content h3 a {
  color: #ffffff;
}

.single-features .content p {
  color: #ffffff;
}

.single-features:hover {
  -webkit-transform: translateY(-10px);
          transform: translateY(-10px);
}

.single-features-box {
  background-color: #ffffff;
  -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
  padding: 30px;
  border-radius: 10px;
  border-bottom: 1px solid #06a3da;
  margin-bottom: 30px;
  text-align: center;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-features-box .icon {
  margin-bottom: 20px;
}

.single-features-box .icon i {
  display: inline-block;
  height: 85px;
  width: 85px;
  line-height: 85px;
  background-color: #ffffff;
  color: #06a3da;
  font-size: 45px;
  text-align: center;
  border-radius: 50%;
  border: 1px dashed #06a3da;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-features-box h3 {
  font-size: 22px;
  margin-bottom: 0;
  font-weight: 500;
}

.single-features-box h3 a {
  color: #222222;
}

.single-features-box:hover {
  -webkit-transform: translateY(-10px);
          transform: translateY(-10px);
}

.single-features-box:hover .icon i {
  background-color: #06a3da;
  color: #ffffff;
}

/*================================================
Services Area CSS
=================================================*/
.services-area.bg-eef9ff {
  background-color: #eef9ff;
}

.single-services {
  margin-bottom: 30px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-services .services-image {
  position: relative;
  overflow: hidden;
}

.single-services .services-image img {
  border-radius: 10px 10px 0 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-services .services-image .icon {
  position: absolute;
  bottom: 20px;
  right: 20px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-services .services-image .icon a i {
  display: inline-block;
  height: 75px;
  width: 75px;
  line-height: 75px;
  background-color: #ffffff;
  -webkit-box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
  color: #06a3da;
  font-size: 45px;
  text-align: center;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-services .services-content {
  background-color: #ffffff;
  -webkit-box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
          box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
  padding: 35px 30px;
  border-bottom: 1px solid #06a3da;
  border-radius: 0 0 10px 10px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-services .services-content h3 {
  font-size: 25px;
  margin-bottom: 12px;
  font-weight: 500;
}

.single-services .services-content h3 a {
  color: #222222;
}

.single-services .services-content p {
  font-size: 15px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-services:hover {
  -webkit-transform: translateY(-10px);
          transform: translateY(-10px);
}

.single-services:hover .services-image img {
  -webkit-transform: rotate(2deg) scale(1.2);
          transform: rotate(2deg) scale(1.2);
}

.single-services:hover .services-image .icon i {
  background-color: #06a3da;
  color: #ffffff;
}

.single-services:hover .services-content {
  background-color: #06a3da;
}

.single-services:hover .services-content h3 a {
  color: #ffffff;
}

.single-services:hover .services-content p {
  color: #ffffff;
}

.single-services-box {
  text-align: center;
  margin-bottom: 30px;
  background-color: #ffffff;
  -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
  padding: 30px;
  border-radius: 10px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-services-box .icon {
  margin-bottom: 25px;
}

.single-services-box .icon i {
  display: inline-block;
  height: 80px;
  width: 80px;
  line-height: 80px;
  font-size: 45px;
  background-color: #06a3da;
  color: #ffffff;
  text-align: center;
  border-radius: 15px;
}

.single-services-box h3 {
  font-size: 25px;
  font-weight: 500;
  margin-bottom: 15px;
}

.single-services-box h3 a {
  color: #222222;
}

.single-services-box h3 a:hover {
  color: #06a3da;
}

.single-services-box p {
  font-size: 15px;
  margin-bottom: 20px;
}

.single-services-box .services-btn {
  display: inline-block;
  background-color: transparent;
  border: 1px solid #06a3da;
  color: #06a3da;
  padding: 15px 35px;
  font-size: 15px;
  font-weight: 500;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 5px;
}

.single-services-box .services-btn:hover {
  background-color: #06a3da;
  color: #ffffff;
}

.single-services-box:hover {
  -webkit-transform: translateY(-10px);
          transform: translateY(-10px);
}

.single-services-box:hover .icon i {
  -webkit-animation: bounce 1s;
          animation: bounce 1s;
}

.single-services-item {
  margin-bottom: 30px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  background-color: #ffffff;
  -webkit-box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
          box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
  padding: 10px;
  padding-bottom: 0;
  border-radius: 10px;
}

.single-services-item .services-image {
  position: relative;
  overflow: hidden;
}

.single-services-item .services-image img {
  border-radius: 10px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-services-item .services-image .icon {
  position: absolute;
  bottom: 20px;
  right: 20px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-services-item .services-image .icon a i {
  display: inline-block;
  height: 75px;
  width: 75px;
  line-height: 75px;
  background-color: #ffffff;
  -webkit-box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
          box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
  color: #06a3da;
  font-size: 45px;
  text-align: center;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-services-item .services-content {
  padding: 35px 20px;
  text-align: center;
}

.single-services-item .services-content h3 {
  font-size: 25px;
  margin-bottom: 12px;
  font-weight: 500;
}

.single-services-item .services-content h3 a {
  color: #222222;
}

.single-services-item .services-content p {
  font-size: 15px;
  margin-bottom: 20px;
}

.single-services-item .services-content .default-btn {
  width: 100%;
  border-radius: 50px;
}

.single-services-item:hover {
  -webkit-transform: translateY(-10px);
          transform: translateY(-10px);
}

.single-services-item:hover .services-image img {
  -webkit-transform: rotate(2deg) scale(1.2);
          transform: rotate(2deg) scale(1.2);
}

.single-services-item:hover .services-image .icon i {
  background-color: #06a3da;
  color: #ffffff;
}

/*================================================
Overview Area CSS
=================================================*/
.overview-area {
  background-color: #f5f5f5;
  padding-top: 30px;
}

.overview-content {
  margin-top: -170px;
}

.overview-content .sub-title {
  display: inline-block;
  color: #6a6c72;
  font-size: 15px;
  font-weight: 500;
  background-color: #ffffff;
  -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
  padding: 10px 20px;
  border-radius: 50px;
}

.overview-content .sub-title i {
  color: #14e49a;
  margin-right: 5px;
  font-size: 14px;
}

.overview-content h3 {
  font-size: 45px;
  margin-top: 22px;
  margin-bottom: 15px;
  line-height: 1.4;
}

.overview-content p {
  font-size: 25px;
  font-weight: 500;
  color: #222222;
}

.overview-content p a {
  color: #06a3da;
}

/*================================================
Appointment Overview Area CSS
=================================================*/
.appointment-overview-area {
  position: relative;
  z-index: 1;
  margin-top: -150px;
}

.appointment-overview-contact {
  position: relative;
}

.appointment-overview-contact::before {
  position: absolute;
  content: '';
  background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0)), to(black));
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0), black);
  width: 100%;
  height: 90%;
  left: 0;
  bottom: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  z-index: 1;
  border-radius: 5px;
}

.appointment-overview-contact img {
  border-radius: 5px;
}

.appointment-overview-contact .appointment-info {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 30px;
  z-index: 1;
}

.appointment-overview-contact .appointment-info .call-info {
  padding-left: 0;
  list-style-type: none;
  margin-bottom: 15px;
}

.appointment-overview-contact .appointment-info .call-info li {
  display: inline-block;
  position: relative;
  text-align: left;
  padding-left: 55px;
  font-size: 16px;
  font-weight: 400;
  color: #ffffff;
  margin-right: 30px;
}

.appointment-overview-contact .appointment-info .call-info li i {
  position: absolute;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  color: #06a3da;
  font-size: 45px;
  color: #ffffff;
}

.appointment-overview-contact .appointment-info .call-info li span {
  display: block;
  font-size: 22px;
  font-weight: 500;
  color: #ffffff;
  margin-top: 5px;
}

.appointment-overview-contact .appointment-info .call-info li span a {
  color: #ffffff;
}

.appointment-overview-contact .appointment-info .call-info li span a:hover {
  color: #06a3da;
}

.appointment-overview-contact .appointment-info .call-info li:last-child {
  margin-right: 0;
}

.appointment-overview-contact .appointment-info p {
  color: #ffffff;
}

.appointment-overview-box {
  background-color: #ffffff;
  -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
  padding: 38px 30px;
  border-radius: 5px;
  border-bottom: 1px solid #06a3da;
}

.appointment-overview-box .content h4 {
  font-size: 25px;
  margin-bottom: 26px;
  font-weight: 500;
  line-height: 1.4;
}

.appointment-overview-box .content .box-image {
  position: relative;
}

.appointment-overview-box .content .box-image img {
  border-radius: 5px;
}

.appointment-overview-box .content .box-image .video-btn {
  display: inline-block;
  width: 60px;
  height: 60px;
  line-height: 60px;
  background-color: #06a3da;
  border-radius: 50%;
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.appointment-overview-box .content .box-image .video-btn i {
  font-size: 50px;
  position: relative;
  top: 4px;
  left: 8px;
  color: #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.appointment-overview-box .content .box-image .video-btn::before {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  border-radius: 50%;
  border: 2px solid #06a3da;
  -webkit-animation: ripple 1s linear infinite;
          animation: ripple 1s linear infinite;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.appointment-overview-box .content .box-image .video-btn:hover {
  background-color: #124390;
}

.appointment-overview-box .content .box-image .video-btn:hover i {
  color: #ffffff;
}

.appointment-overview-box .make-appointment-content h4 {
  font-size: 25px;
  margin-bottom: 25px;
  font-weight: 500;
  line-height: 1.4;
}

.appointment-overview-box .make-appointment-content h4 i {
  margin-right: 5px;
  color: #06a3da;
}

.appointment-overview-box .make-appointment-content form {
  text-align: center;
}

.appointment-overview-box .make-appointment-content form .form-group {
  margin-bottom: 15px;
}

.appointment-overview-box .make-appointment-content form .form-group .form-control {
  display: block;
  width: 100%;
  height: 50px;
  outline: 0;
  background-color: #ffffff;
  border: 1px solid #eeeeee;
  border-radius: 5px;
  padding: 15px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  font-size: 14px;
}

.appointment-overview-box .make-appointment-content form .form-group .form-control::-webkit-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.appointment-overview-box .make-appointment-content form .form-group .form-control:-ms-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.appointment-overview-box .make-appointment-content form .form-group .form-control::-ms-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.appointment-overview-box .make-appointment-content form .form-group .form-control::placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.appointment-overview-box .make-appointment-content form .form-group .form-control:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
  border: 1px solid #06a3da;
}

.appointment-overview-box .make-appointment-content form .form-group .form-control:focus::-webkit-input-placeholder {
  color: transparent;
}

.appointment-overview-box .make-appointment-content form .form-group .form-control:focus:-ms-input-placeholder {
  color: transparent;
}

.appointment-overview-box .make-appointment-content form .form-group .form-control:focus::-ms-input-placeholder {
  color: transparent;
}

.appointment-overview-box .make-appointment-content form .form-group .form-control:focus::placeholder {
  color: transparent;
}

.appointment-overview-box .make-appointment-content form .default-btn {
  border: none;
  padding: 12px 30px;
  font-size: 15px;
}

@-webkit-keyframes ripple {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  75% {
    -webkit-transform: scale(1.75);
            transform: scale(1.75);
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(2);
            transform: scale(2);
    opacity: 0;
  }
}

@keyframes ripple {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  75% {
    -webkit-transform: scale(1.75);
            transform: scale(1.75);
    opacity: 1;
  }
  100% {
    -webkit-transform: scale(2);
            transform: scale(2);
    opacity: 0;
  }
}

/*================================================
About Area CSS
=================================================*/
.about-content .sub-title {
  display: inline-block;
  color: #6a6c72;
  font-size: 15px;
  font-weight: 500;
  background-color: #ffffff;
  -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
  padding: 10px 20px;
  border-radius: 50px;
}

.about-content .sub-title i {
  color: #14e49a;
  margin-right: 5px;
  font-size: 14px;
}

.about-content h3 {
  font-size: 36px;
  margin-top: 22px;
  margin-bottom: 15px;
  line-height: 1.4;
}

.about-content h3 span {
  color: #06a3da;
}

.about-content .about-list {
  padding-left: 0;
  margin-bottom: 0;
  margin-top: 10px;
}

.about-content .about-list li {
  list-style-type: none;
  position: relative;
  padding-left: 35px;
  margin-bottom: 18px;
}

.about-content .about-list li:last-child {
  margin-bottom: 0;
}

.about-content .about-list li i {
  position: absolute;
  left: 0;
  top: 0;
  display: inline-block;
  height: 25px;
  width: 25px;
  line-height: 30px;
  text-align: center;
  background-color: #06a3da;
  color: #ffffff;
  border-radius: 50px;
  font-size: 14px;
}

.about-content .about-info {
  position: relative;
  margin-top: 35px;
  padding-left: 100px;
  padding-top: 10px;
}

.about-content .about-info i {
  display: inline-block;
  height: 80px;
  width: 80px;
  line-height: 80px;
  background-color: #ffffff;
  -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
  color: #06a3da;
  font-size: 45px;
  text-align: center;
  border-radius: 50%;
  position: absolute;
  left: 0;
  top: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.about-content .about-info h4 {
  font-size: 25px;
  font-weight: 500;
  margin-bottom: 10px;
}

.about-content .about-info span {
  font-size: 16px;
  font-weight: 500;
  color: #6a6c72;
}

.about-content .about-info:hover i {
  background-color: #06a3da;
  color: #ffffff;
}

.about-image {
  text-align: right;
  position: relative;
}

.about-image .about-inner-box {
  background-color: #06a3da;
  padding: 35px 30px;
  border-radius: 10px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  text-align: left;
  position: absolute;
  bottom: 10px;
  right: 10px;
  max-width: 390px;
}

.about-image .about-inner-box .content {
  position: relative;
  padding-left: 75px;
}

.about-image .about-inner-box .content .icon {
  position: absolute;
  left: 0;
  top: 0;
}

.about-image .about-inner-box .content .icon i {
  font-size: 60px;
  color: #ffffff;
}

.about-image .about-inner-box .content h3 {
  font-size: 22px;
  margin-bottom: 12px;
  font-weight: 500;
}

.about-image .about-inner-box .content h3 a {
  color: #ffffff;
}

.about-image .about-inner-box .content p {
  color: #ffffff;
  font-size: 15px;
}

.about-image .about-inner-box:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

/*================================================
Core Features Area CSS
=================================================*/
.core-features-area {
  background-color: #eef9ff;
  position: relative;
  z-index: 1;
}

.core-features-area::before {
  position: absolute;
  content: "";
  width: 100%;
  height: 30%;
  background-color: #ffffff;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: -1;
}

.single-core-features {
  background-color: #ffffff;
  padding: 25px;
  margin-bottom: 30px;
  border-radius: 5px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-bottom: 1px solid #06a3da;
  -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
}

.single-core-features .icon {
  margin-bottom: 22px;
}

.single-core-features .icon i {
  display: inline-block;
  height: 80px;
  width: 80px;
  line-height: 80px;
  background-color: #ffffff;
  -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
  color: #06a3da;
  font-size: 45px;
  text-align: center;
  border-radius: 50%;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-core-features h3 {
  font-size: 25px;
  margin-bottom: 15px;
  font-weight: 500;
}

.single-core-features h3 a {
  color: #222222;
}

.single-core-features h3 a:hover {
  color: #06a3da;
}

.single-core-features:hover {
  -webkit-transform: translateY(-10px);
          transform: translateY(-10px);
}

.single-core-features:hover .icon i {
  background-color: #06a3da;
  color: #ffffff;
}

/*================================================
Doctor Area CSS
=================================================*/
.single-doctor {
  margin-bottom: 30px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-doctor img {
  border-radius: 10px 10px 0 0;
}

.single-doctor .doctor-content {
  text-align: center;
  background-color: #ffffff;
  -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
  padding: 30px;
  border-radius: 0 0 10px 10px;
  border-bottom: 2px solid #06a3da;
}

.single-doctor .doctor-content h3 {
  font-size: 25px;
  font-weight: 500;
  margin-bottom: 10px;
}

.single-doctor .doctor-content span {
  font-size: 16px;
  color: #6a6c72;
  font-weight: 400;
}

.single-doctor .doctor-content .share-link {
  margin-top: 15px;
}

.single-doctor .doctor-content .share-link a {
  margin: 0 2px;
}

.single-doctor .doctor-content .share-link a i {
  display: inline-block;
  height: 35px;
  width: 35px;
  line-height: 35px;
  border-radius: 50px;
  font-size: 16px;
  background-color: #06a3da;
  color: #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-doctor .doctor-content .share-link a i:hover {
  background-color: #124390;
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

.single-doctor:hover {
  -webkit-transform: translateY(-10px);
          transform: translateY(-10px);
}

/*================================================
Review Area CSS
=================================================*/
.review-area {
  background-color: #eef9ff;
}

.single-review-item {
  background-color: #ffffff;
  padding: 55px 30px 35px;
  border-radius: 10px;
  position: relative;
  margin-top: 35px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-review-item .icon {
  position: absolute;
  top: -35px;
  left: 30px;
  z-index: 1;
}

.single-review-item .icon i {
  display: inline-block;
  height: 70px;
  width: 70px;
  line-height: 70px;
  background-color: #ffffff;
  -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
  color: #06a3da;
  text-align: center;
  font-size: 30px;
  border-radius: 50%;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-review-item p {
  font-size: 17px;
  margin-bottom: 0;
  font-style: italic;
}

.single-review-item .review-info {
  position: relative;
  margin-top: 30px;
  padding-left: 75px;
}

.single-review-item .review-info img {
  display: inline-block;
  height: 58px;
  width: 58px;
  border-radius: 50%;
  position: absolute;
  left: 0;
  top: 0;
}

.single-review-item .review-info h3 {
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 10px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-review-item .review-info span {
  font-size: 15px;
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-review-item:hover {
  background-color: #06a3da;
}

.single-review-item:hover .icon i {
  background-color: #06a3da;
  color: #ffffff;
}

.single-review-item:hover p {
  color: #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-review-item:hover .review-info h3 {
  color: #ffffff;
}

.single-review-item:hover .review-info span {
  color: #ffffff;
}

.single-review-item.mb-30 {
  margin-bottom: 30px;
}

.review-slides.owl-theme .owl-dots .owl-dot span {
  width: 20px;
  height: 20px;
  margin: 0 5px;
  background: #06a3da;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 50%;
  position: relative;
}

.review-slides.owl-theme .owl-dots .owl-dot span::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  background-color: #ffffff;
  border-radius: 50%;
  margin: 5px;
  opacity: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  visibility: hidden;
}

.review-slides.owl-theme .owl-dots .owl-dot:hover span, .review-slides.owl-theme .owl-dots .owl-dot.active span {
  border-color: #06a3da;
}

.review-slides.owl-theme .owl-dots .owl-dot:hover span::before, .review-slides.owl-theme .owl-dots .owl-dot.active span::before {
  opacity: 1;
  visibility: visible;
}

.review-slides.owl-theme .owl-nav.disabled + .owl-dots {
  margin-top: 30px;
}

/*================================================
Blog Area CSS
=================================================*/
.single-blog {
  margin-bottom: 30px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-blog .blog-image {
  position: relative;
}

.single-blog .blog-image img {
  border-radius: 10px 10px 0 0;
  object-fit: contain!important;
    height: 300px !important;
}

.single-blog .blog-image .tag {
  position: absolute;
  top: 20px;
  right: 20px;
  display: inline-block;
  height: 60px;
  width: 60px;
  line-height: 60px;
  background-color: #ffffff;
  color: #06a3da;
  text-align: center;
  font-size: 15px;
  border-radius: 50%;
}

.single-blog .blog-image .tag-two {
  position: absolute;
  bottom: 20px;
  left: 20px;
  display: inline-block;
  background-color: #06a3da;
  padding: 5px 20px;
  border-radius: 50px;
}

.single-blog .blog-image .tag-two a {
  color: #ffffff;
}

.single-blog .blog-content {
  background-color: #ffffff;
  -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
  padding: 25px;
  border-radius: 0 0 10px 10px;
  border-bottom: 2px solid #06a3da;
}

.single-blog .blog-content h3 {
  font-size: 25px;
  font-weight: 500;
  margin-bottom: 12px;
  line-height: 1.4;
}

.single-blog .blog-content h3 a {
  color: #222222;
}

.single-blog .blog-content h3 a:hover {
  color: #06a3da;
}

.single-blog .blog-content .blog-btn {
  font-size: 15px;
  color: #222222;
  font-weight: 500;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-blog .blog-content .blog-btn:hover {
  color: #06a3da;
}

.single-blog .blog-content .entry-meta {
  padding-left: 0;
  margin-bottom: 0;
  margin-top: 22px;
  padding-top: 22px;
  position: relative;
}

.single-blog .blog-content .entry-meta::before {
  position: absolute;
  content: "";
  height: 1px;
  width: 100%;
  background-color: #eeeeee;
  left: 0;
  right: 0;
  top: 0;
}

.single-blog .blog-content .entry-meta li {
  font-size: 15px;
  font-weight: 500;
  list-style-type: none;
  display: inline-block;
  margin-right: 20px;
  position: relative;
  padding-left: 22px;
}

.single-blog .blog-content .entry-meta li:last-child {
  margin-right: 0;
}

.single-blog .blog-content .entry-meta li i {
  position: absolute;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  font-size: 16px;
  color: #06a3da;
}

.single-blog .blog-content .entry-meta li span {
  font-size: 15px;
  color: #222222;
  font-weight: 500;
}

.single-blog .blog-content .entry-meta li span a {
  color: #06a3da;
}

.single-blog:hover {
  -webkit-transform: translateY(-10px);
          transform: translateY(-10px);
}

/*================================================
Gallery Area CSS
=================================================*/
.gallery-area.bg-091e3e {
  background-color: #091e3e;
  padding-bottom: 150px;
}

.gallery-area.bg-091e3e .section-title h2 {
  color: #ffffff;
}

.gallery-area.bg-091e3e .section-title p {
  color: #ffffff;
}

.single-gallery {
  position: relative;
  margin-bottom: 30px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-gallery img {
  border-radius: 10px;
}

.single-gallery::before {
  content: '';
  background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0)), to(black));
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0), black);
  width: 100%;
  height: 95%;
  left: 0;
  bottom: 0;
  position: absolute;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  z-index: 1;
  border-radius: 10px;
}

.single-gallery .content {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
  padding: 30px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  z-index: 5;
}

.single-gallery .content h3 {
  font-size: 25px;
  font-weight: 500;
  margin-bottom: 12px;
}

.single-gallery .content h3 a {
  color: #ffffff;
}

.single-gallery .content span {
  color: #ffffff;
  font-size: 15px;
}

.single-gallery .content .icon {
  margin-top: 15px;
}

.single-gallery .content .icon a i {
  display: inline-block;
  height: 40px;
  width: 40px;
  line-height: 40px;
  background-color: #ffffff;
  color: #06a3da;
  text-align: center;
  font-size: 25px;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.single-gallery .content .icon a i:hover {
  background-color: #06a3da;
  color: #ffffff;
}

.single-gallery:hover {
  -webkit-transform: translateY(-10px);
          transform: translateY(-10px);
}

.single-gallery:hover .content {
  bottom: 5px;
}

/*================================================
Appointment Area CSS
=================================================*/
.appointment-area.bg-image {
  background-image: url(../images/appointment/appointment-bg-2.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
}

.appointment-inner-box {
  background-image: url(../images/appointment/appointment-bg-1.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  padding: 100px 50px;
  position: relative;
  z-index: 1;
  margin-top: -80px;
}

.appointment-inner-box .appointment-form {
  background-color: #ffffff;
  padding: 30px;
  border-radius: 10px;
  border-bottom: 1px solid #06a3da;
  max-width: 500px;
  margin-left: auto;
}

.appointment-inner-box .appointment-form h4 {
  font-size: 25px;
  margin-bottom: 25px;
  font-weight: 500;
  line-height: 1.4;
}

.appointment-inner-box .appointment-form h4 i {
  margin-right: 5px;
  color: #06a3da;
}

.appointment-inner-box .appointment-form form .form-group {
  margin-bottom: 15px;
}

.appointment-inner-box .appointment-form form .form-group .form-control {
  display: block;
  width: 100%;
  height: 60px;
  outline: 0;
  background-color: #ffffff;
  border: 1px solid #eeeeee;
  border-radius: 5px;
  padding: 15px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  font-size: 14px;
}

.appointment-inner-box .appointment-form form .form-group .form-control::-webkit-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.appointment-inner-box .appointment-form form .form-group .form-control:-ms-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.appointment-inner-box .appointment-form form .form-group .form-control::-ms-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.appointment-inner-box .appointment-form form .form-group .form-control::placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.appointment-inner-box .appointment-form form .form-group .form-control:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
  border: 1px solid #06a3da;
}

.appointment-inner-box .appointment-form form .form-group .form-control:focus::-webkit-input-placeholder {
  color: transparent;
}

.appointment-inner-box .appointment-form form .form-group .form-control:focus:-ms-input-placeholder {
  color: transparent;
}

.appointment-inner-box .appointment-form form .form-group .form-control:focus::-ms-input-placeholder {
  color: transparent;
}

.appointment-inner-box .appointment-form form .form-group .form-control:focus::placeholder {
  color: transparent;
}

.appointment-inner-box .appointment-form form .default-btn {
  border: none;
}

.appointment-form {
  background-color: #ffffff;
  padding: 30px;
  border-radius: 10px;
  border-bottom: 1px solid #06a3da;
  max-width: 500px;
}

.appointment-form h4 {
  font-size: 25px;
  margin-bottom: 25px;
  font-weight: 500;
  line-height: 1.4;
}

.appointment-form h4 i {
  margin-right: 5px;
  color: #06a3da;
}

.appointment-form form .form-group {
  margin-bottom: 15px;
}

.appointment-form form .form-group .form-control {
  display: block;
  width: 100%;
  height: 60px;
  outline: 0;
  background-color: #ffffff;
  border: 1px solid #eeeeee;
  border-radius: 5px;
  padding: 15px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  font-size: 14px;
}

.appointment-form form .form-group .form-control::-webkit-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.appointment-form form .form-group .form-control:-ms-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.appointment-form form .form-group .form-control::-ms-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.appointment-form form .form-group .form-control::placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.appointment-form form .form-group .form-control:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
  border: 1px solid #06a3da;
}

.appointment-form form .form-group .form-control:focus::-webkit-input-placeholder {
  color: transparent;
}

.appointment-form form .form-group .form-control:focus:-ms-input-placeholder {
  color: transparent;
}

.appointment-form form .form-group .form-control:focus::-ms-input-placeholder {
  color: transparent;
}

.appointment-form form .form-group .form-control:focus::placeholder {
  color: transparent;
}

.appointment-form form .default-btn {
  border: none;
}

/*================================================
Page Banner CSS
=================================================*/
.page-banner-area {
  padding-top: 125px;
  padding-bottom: 130px;
  background-color: #124390;
}

.page-banner-content {
  text-align: center;
}

.page-banner-content h2 {
  color: #ffffff;
  margin-bottom: 20px;
  font-size: 38px;
  font-weight: 600;
}

.page-banner-content .pages-list {
  text-align: center;
  padding-left: 0;
  margin-bottom: 0;
}

.page-banner-content .pages-list li {
  display: inline-block;
  list-style-type: none;
  margin-left: 30px;
  font-weight: 500;
  color: #ffffff;
  font-size: 16px;
  position: relative;
}

.page-banner-content .pages-list li::before {
  position: absolute;
  content: '>';
  top: -2px;
  left: -20px;
  color: #ffffff;
  font-size: 20px;
}

.page-banner-content .pages-list li span {
  color: #06a3da;
}

.page-banner-content .pages-list li:first-child {
  margin-left: 0;
}

.page-banner-content .pages-list li:first-child::before {
  display: none;
}

.page-banner-content .pages-list li a {
  display: block;
  color: #ffffff;
}

.page-banner-content .pages-list li a:hover {
  color: #06a3da;
}

/*================================================
Fun Facts Area CSS
=================================================*/
.fun-facts-area {
  background-color: #06a3da;
}

.single-fun-fact {
  margin-bottom: 30px;
  text-align: center;
}

.single-fun-fact h3 {
  line-height: 1;
  font-size: 75px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  color: #ffffff;
  margin-bottom: 5px;
  font-weight: 500;
}

.single-fun-fact p {
  font-weight: 500;
  color: #ffffff;
}

/*================================================
Pricing Area CSS
=================================================*/
.pricing-area {
  background-color: #fafafa;
}

.tab .tabs_item {
  display: none;
}

.tab .tabs_item:first-child {
  display: block;
}

.pricing-list-tab .tabs {
  text-align: center;
  padding-left: 0;
  list-style-type: none;
  margin-bottom: 40px;
}

.pricing-list-tab .tabs li {
  display: inline-block;
}

.pricing-list-tab .tabs li a {
  display: block;
  background-color: #f2f2f2;
  color: #222222;
  padding: 10px 30px 10px 35px;
  position: relative;
  border-radius: 5px;
  margin-left: -5px;
  margin-right: -5px;
  font-size: 16px;
  font-weight: 400;
}

.pricing-list-tab .tabs li.current a {
  color: #ffffff;
  background-color: #06a3da;
}

.pricing-list-tab .tabs li:nth-child(1) a {
  border-radius: 30px 0 0 30px;
}

.pricing-list-tab .tabs li:nth-child(2) a {
  border-radius: 0 30px 30px 0;
}

.single-pricing-table {
  margin-bottom: 30px;
  text-align: center;
  background-color: #f2f2f2;
  border: 1px solid #f2f2f2;
  padding: 35px 25px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 10px;
}

.single-pricing-table .pricing-header h3 {
  font-size: 25px;
  font-weight: 600;
  margin-bottom: 0;
}

.single-pricing-table .price {
  font-size: 50px;
  color: #06a3da;
  margin-top: 20px;
  margin-bottom: 25px;
  line-height: 1;
}

.single-pricing-table .pricing-features {
  padding-left: 0;
  margin-bottom: 0;
}

.single-pricing-table .pricing-features li {
  list-style-type: none;
  margin-bottom: 15px;
  font-size: 16px;
  font-weight: 400;
}

.single-pricing-table .pricing-features li:last-child {
  margin-bottom: 0;
}

.single-pricing-table .pricing-features li i {
  color: #06a3da;
  margin-right: 5px;
  font-size: 15px;
}

.single-pricing-table .pricing-features li.color-gray {
  color: #b4b4b4;
}

.single-pricing-table .pricing-btn {
  margin-top: 25px;
}

.single-pricing-table .pricing-btn .default-btn {
  padding: 12px 35px;
  border-radius: 5px;
  font-size: 15px;
}

.single-pricing-table:hover {
  border: 1px solid #06a3da;
}

/*================================================
Pagination Area CSS
=================================================*/
.pagination-area {
  margin-top: 10px;
  text-align: center;
}

.pagination-area .page-numbers {
  width: 50px;
  height: 50px;
  line-height: 50px;
  margin: 0 5px;
  display: inline-block;
  background-color: #ffffff;
  -webkit-box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 15px 35px rgba(0, 0, 0, 0.1);
  color: #222222;
  font-size: 18px;
  font-weight: bold;
  border-radius: 5px;
  text-align: center;
}

.pagination-area .page-numbers.current, .pagination-area .page-numbers:hover, .pagination-area .page-numbers:focus {
  background: #06a3da;
  color: #ffffff;
}

.pagination-area .page-numbers i {
  position: relative;
  top: 1px;
}

/*================================================
Login Area CSS
=================================================*/
.login-form {
  padding: 35px;
  border-radius: 10px;
  background-color: #ffffff;
  -webkit-box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
          box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
  max-width: 650px;
  margin: auto;
}

.login-form h2 {
  margin-bottom: 30px;
  font-size: 25px;
  font-weight: 600;
}

.login-form form .form-group {
  margin-bottom: 25px;
}

.login-form form .form-group label {
  margin-bottom: 5px;
  color: #6a6c72;
  font-weight: 400;
  font-size: 16px;
}

.login-form form .form-group .form-control {
  height: 60px;
  padding: 0 0 0 15px;
  line-height: initial;
  color: #222222;
  background-color: transparent;
  border: 1px solid #eeeeee;
  border-radius: 5px;
  -webkit-box-shadow: unset;
          box-shadow: unset;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  font-size: 14px;
  font-weight: 400;
}

.login-form form .form-group .form-control:focus {
  border: 1px solid #06a3da;
  background-color: transparent;
}

.login-form form .form-group .form-control:focus::-webkit-input-placeholder {
  color: transparent;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.login-form form .form-group .form-control:focus:-ms-input-placeholder {
  color: transparent;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.login-form form .form-group .form-control:focus::-ms-input-placeholder {
  color: transparent;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.login-form form .form-group .form-control:focus::placeholder {
  color: transparent;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.login-form form .lost-your-password {
  text-align: right;
}

.login-form form .lost-your-password a {
  display: inline-block;
  position: relative;
  font-weight: 400;
  font-size: 15px;
  color: #6a6c72;
}

.login-form form .lost-your-password a::before {
  width: 100%;
  height: 1px;
  position: absolute;
  left: 0;
  bottom: 0;
  content: '';
  -webkit-transition: 0.6s;
  transition: 0.6s;
  background-color: #eeeeee;
}

.login-form form .lost-your-password a::after {
  width: 0;
  height: 1px;
  position: absolute;
  left: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  bottom: 0;
  content: '';
  background-color: #06a3da;
}

.login-form form .lost-your-password a:hover::before {
  width: 0;
}

.login-form form .lost-your-password a:hover::after {
  width: 100%;
}

.login-form form button {
  border: none;
  margin-top: 25px;
  padding: 15px 30px;
  width: 100%;
  border-radius: 5px;
  cursor: pointer;
  background-color: #06a3da;
  color: #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.login-form form button:hover {
  background-color: #222222;
}

/*================================================
Register Area CSS
=================================================*/
.register-form {
  padding: 35px;
  border-radius: 10px;
  background-color: #ffffff;
  -webkit-box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
          box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
  max-width: 650px;
  margin: auto;
}

.register-form h2 {
  margin-bottom: 30px;
  font-size: 25px;
  font-weight: 600;
}

.register-form form .form-group {
  margin-bottom: 25px;
}

.register-form form .form-group label {
  margin-bottom: 5px;
  color: #6a6c72;
  font-weight: 400;
  font-size: 16px;
}

.register-form form .form-group .form-control {
  height: 60px;
  padding: 0 0 0 15px;
  line-height: initial;
  color: #222222;
  background-color: transparent;
  border: 1px solid #eeeeee;
  border-radius: 5px;
  -webkit-box-shadow: unset;
          box-shadow: unset;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  font-size: 14px;
  font-weight: 400;
}

.register-form form .form-group .form-control:focus {
  border: 1px solid #06a3da;
  background-color: transparent;
}

.register-form form .form-group .form-control:focus::-webkit-input-placeholder {
  color: transparent;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.register-form form .form-group .form-control:focus:-ms-input-placeholder {
  color: transparent;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.register-form form .form-group .form-control:focus::-ms-input-placeholder {
  color: transparent;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.register-form form .form-group .form-control:focus::placeholder {
  color: transparent;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.register-form form .description {
  font-style: italic;
  font-size: 13.5px;
  margin-top: -10px;
  margin-bottom: 15px;
}

.register-form form button {
  border: none;
  padding: 15px 30px;
  width: 100%;
  border-radius: 5px;
  cursor: pointer;
  background-color: #06a3da;
  color: #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.register-form form button:hover {
  background-color: #222222;
}

/*================================================
FAQ Area CSS
=================================================*/
.faq-accordion {
  max-width: 930px;
  margin: auto;
}

.faq-accordion .accordion .accordion-item {
  display: block;
  margin-bottom: 30px;
  border: none;
}

.faq-accordion .accordion .accordion-item:last-child {
  margin-bottom: 0;
}

.faq-accordion .accordion .accordion-title {
  padding: 25px 40px 25px 25px;
  color: #222222;
  position: relative;
  display: block;
  text-transform: capitalize;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
  background: #f6f7f9;
}

.faq-accordion .accordion .accordion-title i {
  position: absolute;
  right: 25px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  color: #06a3da;
  font-size: 20px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.faq-accordion .accordion .accordion-title.active i::before {
  content: "\eaed";
  color: #06a3da;
}

.faq-accordion .accordion .accordion-content {
  display: none;
  padding: 20px 0 20px 0;
}

.faq-accordion .accordion .accordion-content p {
  color: #6a6c72;
  font-weight: 400;
}

.faq-accordion .accordion .accordion-content:last-child {
  padding-bottom: 0;
}

.faq-accordion .accordion .accordion-content.show {
  display: block;
}

/*================================================
404 Error Area CSS
=================================================*/
.error-content {
  text-align: center;
  margin: 0 auto;
  max-width: 750px;
}

.error-content h3 {
  font-size: 35px;
  margin-top: 35px;
  margin-bottom: 18px;
}

.error-content p {
  max-width: 520px;
  margin: 0 auto 20px;
}

/*================================================
Terms of Service Area CSS
=================================================*/
.single-terms-of-service h3 {
  font-size: 25px;
  margin: 0 0 12px 0;
}

.single-terms-of-service p {
  font-size: 15px;
}

/*================================================
Privacy Policy Area CSS
=================================================*/
.single-privacy-policy h3 {
  font-size: 25px;
  margin: 0 0 12px 0;
}

.single-privacy-policy p {
  font-size: 15px;
}

/*================================================
Coming Soon Area CSS
=================================================*/
.coming-soon-area {
  height: 100vh;
  background-image: url(../images/coming-soon-bg.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}

.coming-soon-content {
  max-width: 750px;
  background: #ffffff;
  border-radius: 10px;
  overflow: hidden;
  text-align: center;
  padding: 45px 30px;
  -webkit-box-shadow: 1px 5px 24px 0 rgba(68, 102, 242, 0.05);
          box-shadow: 1px 5px 24px 0 rgba(68, 102, 242, 0.05);
  margin: auto;
}

.coming-soon-content h1 {
  font-size: 45px;
  margin-bottom: 15px;
}

.coming-soon-content h1 a {
  color: #222222;
}

.coming-soon-content h2 {
  font-size: 30px;
  margin-bottom: 0;
}

.coming-soon-content #timer {
  margin-top: 35px;
}

.coming-soon-content #timer div {
  background-color: #06a3da;
  color: #ffffff;
  width: 130px;
  height: 130px;
  border-radius: 50%;
  font-size: 40px;
  font-weight: bold;
  margin-left: 5px;
  margin-right: 5px;
}

.coming-soon-content #timer div span {
  display: block;
  margin-top: -2px;
  font-size: 15px;
  font-weight: 500;
}

.coming-soon-content .newsletter-form {
  margin-top: 45px;
  background-color: #ffffff;
  -webkit-box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
          box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
  padding: 30px;
}

.coming-soon-content .newsletter-form .form-group {
  margin-bottom: 15px;
  width: 100%;
}

.coming-soon-content .newsletter-form .form-group .input-newsletter {
  border-radius: 0;
  border: none;
  border: 1px solid #eeeeee;
  background-color: #eeeeee;
  padding: 15px;
  color: #222222;
  height: 60px;
  display: block;
  width: 100%;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  font-size: 15px;
  font-weight: 400;
  border-radius: 5px;
}

.coming-soon-content .newsletter-form .form-group .input-newsletter::-webkit-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.coming-soon-content .newsletter-form .form-group .input-newsletter:-ms-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.coming-soon-content .newsletter-form .form-group .input-newsletter::-ms-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.coming-soon-content .newsletter-form .form-group .input-newsletter::placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.coming-soon-content .newsletter-form .form-group .input-newsletter:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
  outline: 0;
}

.coming-soon-content .newsletter-form .form-group .input-newsletter:focus::-webkit-input-placeholder {
  color: transparent;
}

.coming-soon-content .newsletter-form .form-group .input-newsletter:focus:-ms-input-placeholder {
  color: transparent;
}

.coming-soon-content .newsletter-form .form-group .input-newsletter:focus::-ms-input-placeholder {
  color: transparent;
}

.coming-soon-content .newsletter-form .form-group .input-newsletter:focus::placeholder {
  color: transparent;
}

.coming-soon-content .newsletter-form .default-btn {
  width: 100%;
  border-radius: 5px;
  border: none;
}

.coming-soon-content .newsletter-form .validation-danger {
  margin-top: 15px;
  color: red;
}

/*================================================
Contact Area CSS
=================================================*/
.contact-form {
  /*max-width: 800px;*/
  margin: auto;
  text-align: center;
}

.contact-form form .form-group {
  margin-bottom: 20px;
}

.contact-form form .form-group .form-control {
  background-color: #ffffff;
  -webkit-box-shadow: 0px 5px 28.5px 1.5px rgba(149, 152, 200, 0.2);
          box-shadow: 0px 5px 28.5px 1.5px rgba(149, 152, 200, 0.2);
  border: 1px solid #ffffff;
  height: 60px;
  padding: 20px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  font-size: 15px;
}

.contact-form form .form-group .form-control::-webkit-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.contact-form form .form-group .form-control:-ms-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.contact-form form .form-group .form-control::-ms-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.contact-form form .form-group .form-control::placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.contact-form form .form-group .form-control:focus {
  -webkit-box-shadow: unset;
          box-shadow: unset;
  border: 1px solid #06a3da;
}

.contact-form form .form-group .form-control:focus::-webkit-input-placeholder {
  color: transparent;
}

.contact-form form .form-group .form-control:focus:-ms-input-placeholder {
  color: transparent;
}

.contact-form form .form-group .form-control:focus::-ms-input-placeholder {
  color: transparent;
}

.contact-form form .form-group .form-control:focus::placeholder {
  color: transparent;
}

.contact-form form .form-group textarea.form-control {
  height: auto;
  padding-top: 15px;
}

.contact-form form .default-btn {
  border: none;
}

.contact-form form .help-block ul {
  padding-left: 0;
  list-style-type: none;
  margin-top: 10px;
  font-size: 14px;
  margin-bottom: 0;
}

.contact-form form .help-block ul li {
  color: red;
}

.contact-form form #msgSubmit {
  margin-bottom: 0;
}

.contact-form form #msgSubmit.text-danger, .contact-form form #msgSubmit.text-success {
  margin-top: 15px;
  font-size: 20px;
  font-weight: 500;
}

.contact-info {
  text-align: center;
  margin-top: 60px;
}

.contact-info .contact-info-content h3 {
  margin-bottom: 25px;
  font-size: 25px;
  font-weight: 500;
}

.contact-info .contact-info-content h2 {
  margin-bottom: 0;
  font-size: 20px;
  font-weight: 500;
}

.contact-info .contact-info-content h2 a {
  display: inline-block;
  color: #06a3da;
}

.contact-info .contact-info-content h2 a:hover {
  color: #124390;
}

.contact-info .contact-info-content h2 a:not(:first-child) {
  color: #124390;
}

.contact-info .contact-info-content h2 a:not(:first-child):hover {
  color: #06a3da;
}

.contact-info .contact-info-content h2 span {
  display: block;
  color: #6a6c72;
  margin-top: 15px;
  margin-bottom: 15px;
  font-size: 16px;
  font-weight: 500;
}

.contact-info .contact-info-content .social {
  padding-left: 0;
  list-style-type: none;
  margin-top: 30px;
  margin-bottom: 0;
}

.contact-info .contact-info-content .social li {
  display: inline-block;
  margin: 0 2px;
}

.contact-info .contact-info-content .social li a {
  width: 35px;
  height: 35px;
  line-height: 35px;
  border: 1px solid #dadada;
  border-radius: 50%;
  color: #aba5a5;
}

.contact-info .contact-info-content .social li a i {
  font-size: 14px;
}

.contact-info .contact-info-content .social li a:hover {
  color: #ffffff;
  border-color: #06a3da;
  background-color: #06a3da;
}

/*================================================
Services Details Area CSS
=================================================*/
.services-details-image img {
  border-radius: 30px;
}

.services-details-content {
  margin-top: 30px;
}

.services-details-content h3 {
  font-size: 25px;
  font-weight: 600;
  margin-bottom: 15px;
}

.services-details-list {
  padding-left: 0;
  margin-bottom: 30px;
  margin-top: 30px;
}

.services-details-list li {
  list-style-type: none;
  position: relative;
  padding-left: 45px;
  margin-bottom: 30px;
}

.services-details-list li:last-child {
  margin-bottom: 0;
}

.services-details-list li i {
  display: inline-block;
  position: absolute;
  top: -8px;
  left: 0;
  height: 35px;
  width: 35px;
  line-height: 38px;
  background-color: #06a3da;
  color: #ffffff;
  font-size: 16px;
  text-align: center;
  border-radius: 50px;
}

.services-details-overview {
  margin-top: 30px;
}

.services-details-overview-content p span {
  font-size: 22px;
  font-weight: 500;
  color: #222222;
  margin-right: 5px;
}

/*================================================
Widget Sidebar CSS
=================================================*/
.widget-area .widget {
  margin-bottom: 30px;
}

.widget-area .widget:last-child {
  margin-bottom: 0;
}

.widget-area .widget .widget-title {
  margin-bottom: 20px;
  position: relative;
  font-size: 22px;
}

.widget-area .widget_search form {
  position: relative;
}

.widget-area .widget_search form .search-field {
  background-color: #ffffff;
  height: 50px;
  padding: 8px 15px;
  border: 1px solid #eeeeee;
  width: 100%;
  display: block;
  outline: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 5px;
}

.widget-area .widget_search form .search-field:focus {
  border-color: #06a3da;
}

.widget-area .widget_search form button {
  border: none;
  background-color: #eeeeee;
  color: #06a3da;
  height: 40px;
  width: 40px;
  position: absolute;
  right: 5px;
  padding: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  top: 5px;
  font-size: 20px;
  border-radius: 5px;
  cursor: pointer;
}

.widget-area .widget_search form button i {
  position: absolute;
  left: 0;
  right: 0;
  top: 52%;
  -webkit-transform: translateY(-52%);
          transform: translateY(-52%);
}

.widget-area .widget_search form button:hover, .widget-area .widget_search form button:focus {
  background-color: #06a3da;
  color: #ffffff;
}

.widget-area .widget_info .content {
  text-align: center;
  background: #f9f9f9;
  padding: 25px;
  border-radius: 0 0 5px 5px;
}

.widget-area .widget_info .content h3 {
  font-size: 22px;
  margin-bottom: 12px;
}

.widget-area .widget_info .content p {
  margin-bottom: 0;
}

.widget-area .widget_info .content .share-link {
  margin-top: 15px;
}

.widget-area .widget_info .content .share-link a {
  margin: 0 2px;
  text-align: center;
}

.widget-area .widget_info .content .share-link a i {
  display: inline-block;
  height: 35px;
  width: 35px;
  line-height: 35px;
  border-radius: 50px;
  font-size: 16px;
  background-color: #06a3da;
  color: #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.widget-area .widget_info .content .share-link a i:hover {
  background-color: #124390;
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

.widget-area .widget_info .image img {
  width: 100%;
  border-radius: 5px 5px 0 0;
}

.widget-area .tagcloud a {
  display: inline-block;
  background: #06a3da;
  color: #ffffff;
  padding: 10px 25px;
  border: none;
  border-radius: 10px;
  font-weight: 500;
  font-size: 15px;
  margin-top: 8px;
  margin-right: 5px;
}

.widget-area .tagcloud a:hover, .widget-area .tagcloud a:focus {
  color: #ffffff;
  background-color: #124390;
}

.widget-area .widget_categories ul {
  padding-left: 0;
  margin-bottom: 0;
  list-style-type: none;
}

.widget-area .widget_categories ul li {
  position: relative;
  margin-bottom: 12px;
  overflow: hidden;
  color: #222222;
  padding-left: 20px;
  font-size: 16px;
  font-weight: 400;
}

.widget-area .widget_categories ul li:last-child {
  margin-bottom: 0;
}

.widget-area .widget_categories ul li::before {
  background: #06a3da;
  height: 10px;
  width: 10px;
  content: '';
  left: 0;
  top: 7px;
  position: absolute;
}

.widget-area .widget_categories ul li a {
  color: #222222;
  display: inline-block;
}

.widget-area .widget_categories ul li a:hover {
  color: #06a3da;
}

.widget-area .widget_grin_posts_thumb {
  position: relative;
  overflow: hidden;
}

.widget-area .widget_grin_posts_thumb .item {
  overflow: hidden;
  margin-bottom: 15px;
}

.widget-area .widget_grin_posts_thumb .item:last-child {
  margin-bottom: 0;
}

.widget-area .widget_grin_posts_thumb .item .thumb {
  float: left;
  height: 80px;
  overflow: hidden;
  display: block;
  position: relative;
  width: 80px;
  margin-right: 15px;
  z-index: 1;
}

.widget-area .widget_grin_posts_thumb .item .thumb .fullimage {
  width: 80px;
  height: 80px;
  display: inline-block;
  border-radius: 5px;
  background-size: cover !important;
  background-repeat: no-repeat;
  background-position: center center;
}

.widget-area .widget_grin_posts_thumb .item .thumb .fullimage.bg1 {
  background-image: url(../images/blog/blog-1.jpg);
}

.widget-area .widget_grin_posts_thumb .item .thumb .fullimage.bg2 {
  background-image: url(../images/blog/blog-2.jpg);
}

.widget-area .widget_grin_posts_thumb .item .thumb .fullimage.bg3 {
  background-image: url(../images/blog/blog-3.jpg);
}

.widget-area .widget_grin_posts_thumb .item .info {
  overflow: hidden;
  margin-top: 5px;
}

.widget-area .widget_grin_posts_thumb .item .info span {
  display: block;
  color: #929ba4;
  margin-top: -2px;
  margin-bottom: 5px;
  font-size: 14px;
}

.widget-area .widget_grin_posts_thumb .item .info .title {
  margin-bottom: 0;
  line-height: 1.4;
  font-size: 13px;
  font-weight: 500;
  
}

.widget-area .widget_grin_posts_thumb .item .info .title a {
  display: inline-block;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.widget-area .widget_grin_posts_thumb .item .info .title a:hover {
  color: #06a3da;
}

.widget-area .widget_instagram ul {
  padding-left: 0;
  list-style-type: none;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  margin-bottom: 0;
  margin-left: -5px;
  margin-right: -5px;
  margin-top: 0px;
}

.widget-area .widget_instagram ul li {
  -webkit-box-flex: 0;
      -ms-flex: 0 0 33.333333%;
          flex: 0 0 33.333333%;
  max-width: 33.333333%;
  text-align: center;
  padding-left: 5px;
  padding-right: 5px;
  padding-top: 10px;
}

.widget-area .widget_instagram ul li .box {
  position: relative;
  z-index: 1;
  overflow: hidden;
}

.widget-area .widget_instagram ul li .box .link-btn {
  display: block;
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: 3;
}

.widget-area .widget_instagram ul li .box i {
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  font-size: 30px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  opacity: 0;
  visibility: hidden;
  color: #ffffff;
  z-index: 2;
}

.widget-area .widget_instagram ul li .box img {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 10px;
  height:75px;
  width:100%;
  border: 1px solid #027ac1;
}

.widget-area .widget_instagram ul li .box::before {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: 1;
  background-color: #06a3da;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  opacity: 0;
  visibility: hidden;
}

.widget-area .widget_instagram ul li .box:hover::before {
  opacity: 0.5;
  visibility: visible;
}

.widget-area .widget_instagram ul li .box:hover img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
  border-radius: 10px;
}

.widget-area .widget_instagram ul li .box:hover i {
  opacity: 1;
  visibility: visible;
}

/*================================================
Blog Details Area CSS
=================================================*/
.blog-details-desc .article-image {
  position: relative;
}

.blog-details-desc .article-image img {
  border-radius: 30px;
}

.blog-details-desc .article-image .tag {
  position: absolute;
  bottom: 20px;
  right: 20px;
  display: inline-block;
  height: 60px;
  width: 60px;
  line-height: 60px;
  background-color: #ffffff;
  color: #06a3da;
  text-align: center;
  font-size: 15px;
  border-radius: 50%;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.blog-details-desc .article-image .tag-two {
  position: absolute;
  bottom: 20px;
  left: 20px;
  display: inline-block;
  background-color: #06a3da;
  padding: 5px 20px;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.blog-details-desc .article-image .tag-two a {
  color: #ffffff;
}

.blog-details-desc .article-image:hover .tag {
  background-color: #06a3da;
  color: #ffffff;
}

.blog-details-desc .article-image:hover .tag-two {
  background-color: #124390;
  color: #ffffff;
}

.blog-details-desc .article-content {
  margin-top: 30px;
}

.blog-details-desc .article-content .entry-meta {
  margin-bottom: -8px;
}

.blog-details-desc .article-content .entry-meta ul {
  padding-left: 0;
  margin-bottom: 0;
  list-style-type: none;
}

.blog-details-desc .article-content .entry-meta ul li {
  position: relative;
  display: inline-block;
  color: #222222;
  margin-right: 20px;
}

.blog-details-desc .article-content .entry-meta ul li span {
  display: inline-block;
  color: #222222;
  font-weight: 500;
}

.blog-details-desc .article-content .entry-meta ul li a {
  display: inline-block;
  color: #6a6c72;
}

.blog-details-desc .article-content .entry-meta ul li a:hover {
  color: #06a3da;
}

.blog-details-desc .article-content .entry-meta ul li i {
  color: #06a3da;
  margin-right: 2px;
}

.blog-details-desc .article-content .entry-meta ul li::before {
  content: '';
  position: absolute;
  top: 12px;
  right: -15px;
  width: 6px;
  height: 1px;
  background: #06a3da;
}

.blog-details-desc .article-content .entry-meta ul li:last-child {
  margin-right: 0;
}

.blog-details-desc .article-content .entry-meta ul li:last-child::before {
  display: none;
}

.blog-details-desc .article-content h3 {
  margin-bottom: 15px;
  margin-top: 25px;
  font-size: 25px;
}

.blog-details-desc .article-content .article-tag {
  text-align: center;
  margin-top: 25px;
  margin-bottom: 25px;
  border-top: 1px solid #eeeeee;
  border-bottom: 1px solid #eeeeee;
  padding-top: 30px;
  padding-bottom: 30px;
}

.blog-details-desc .article-content .article-tag span {
  font-size: 16px;
  font-weight: 600;
}

.blog-details-desc .article-content .article-tag a i {
  display: inline-block;
  height: 35px;
  width: 35px;
  line-height: 35px;
  background-color: #06a3da;
  color: #ffffff;
  font-size: 16px;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.blog-details-desc .article-content .article-tag a i:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
  background-color: #124390;
}

blockquote, .blockquote {
  background-color: #fafafa;
  padding: 30px !important;
  margin-top: 20px;
  margin-bottom: 20px;
  border-left: 3px solid #06a3da;
  border-radius: 5px;
}

blockquote p, .blockquote p {
  margin-bottom: 0;
  font-size: 18px !important;
  font-weight: 500;
  font-style: italic;
}

.comments-area {
  margin-top: 30px;
}

.comments-area .comments-title {
  margin-bottom: 30px;
  font-size: 24px;
}

.comments-area ol, .comments-area ul {
  padding: 0;
  margin: 0;
  list-style-type: none;
}

.comments-area .comment-list {
  padding: 0;
  margin: 0;
  list-style-type: none;
}

.comments-area .children {
  margin-left: 20px;
}

.comments-area .comment-body {
  border-bottom: 1px dashed #eeeeee;
  padding-left: 70px;
  color: #222222;
  margin-bottom: 20px;
  padding-bottom: 20px;
}

.comments-area .comment-body .reply {
  margin-top: 15px;
}

.comments-area .comment-body .reply a {
  border: 1px dashed #ded9d9;
  color: #222222;
  display: inline-block;
  padding: 5px 25px 5px;
  border-radius: 30px;
  text-transform: capitalize;
  font-size: 14px;
  font-weight: 500;
}

.comments-area .comment-body .reply a:hover {
  color: #ffffff;
  background-color: #06a3da;
  border-color: #06a3da;
}

.comments-area .comment-author {
  font-size: 16px;
  margin-bottom: 8px;
  position: relative;
  z-index: 2;
}

.comments-area .comment-author .avatar {
  height: 50px;
  left: -65px;
  position: absolute;
  width: 50px;
}

.comments-area .comment-author .fn {
  font-weight: 600;
}

.comments-area .comment-metadata {
  color: #6a6c72;
  margin-bottom: 10px;
  font-size: 14px;
}

.comments-area .comment-metadata a {
  display: inline-block;
  color: #6a6c72;
}

.comments-area .comment-metadata a:hover {
  color: #06a3da;
}

.comments-area .comment-respond {
  margin-top: 30px;
}

.comments-area .comment-respond .comment-reply-title {
  margin-bottom: 0;
  font-size: 24px;
}

.comments-area .comment-respond .comment-reply-title #cancel-comment-reply-link {
  display: inline-block;
}

.comments-area .comment-respond .comment-form {
  overflow: hidden;
}

.comments-area .comment-respond .comment-notes {
  margin-top: 10px;
  margin-bottom: 20px;
}

.comments-area .comment-respond .comment-notes .required {
  color: red;
}

.comments-area .comment-respond .comment-form-comment {
  float: left;
  width: 100%;
}

.comments-area .comment-respond label {
  display: none;
}

.comments-area .comment-respond input[type="date"], .comments-area .comment-respond input[type="time"], .comments-area .comment-respond input[type="datetime-local"], .comments-area .comment-respond input[type="week"], .comments-area .comment-respond input[type="month"], .comments-area .comment-respond input[type="text"], .comments-area .comment-respond input[type="email"], .comments-area .comment-respond input[type="url"], .comments-area .comment-respond input[type="password"], .comments-area .comment-respond input[type="search"], .comments-area .comment-respond input[type="tel"], .comments-area .comment-respond input[type="number"], .comments-area .comment-respond textarea {
  display: block;
  width: 100%;
  background-color: #eeeeee;
  border: 1px solid #eeeeee;
  padding: 1px 0 0 15px;
  height: 60px;
  outline: 0;
  border-radius: 5px;
  color: #222222;
  font-size: 14px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.comments-area .comment-respond input[type="date"]::-webkit-input-placeholder, .comments-area .comment-respond input[type="time"]::-webkit-input-placeholder, .comments-area .comment-respond input[type="datetime-local"]::-webkit-input-placeholder, .comments-area .comment-respond input[type="week"]::-webkit-input-placeholder, .comments-area .comment-respond input[type="month"]::-webkit-input-placeholder, .comments-area .comment-respond input[type="text"]::-webkit-input-placeholder, .comments-area .comment-respond input[type="email"]::-webkit-input-placeholder, .comments-area .comment-respond input[type="url"]::-webkit-input-placeholder, .comments-area .comment-respond input[type="password"]::-webkit-input-placeholder, .comments-area .comment-respond input[type="search"]::-webkit-input-placeholder, .comments-area .comment-respond input[type="tel"]::-webkit-input-placeholder, .comments-area .comment-respond input[type="number"]::-webkit-input-placeholder, .comments-area .comment-respond textarea::-webkit-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.comments-area .comment-respond input[type="date"]:-ms-input-placeholder, .comments-area .comment-respond input[type="time"]:-ms-input-placeholder, .comments-area .comment-respond input[type="datetime-local"]:-ms-input-placeholder, .comments-area .comment-respond input[type="week"]:-ms-input-placeholder, .comments-area .comment-respond input[type="month"]:-ms-input-placeholder, .comments-area .comment-respond input[type="text"]:-ms-input-placeholder, .comments-area .comment-respond input[type="email"]:-ms-input-placeholder, .comments-area .comment-respond input[type="url"]:-ms-input-placeholder, .comments-area .comment-respond input[type="password"]:-ms-input-placeholder, .comments-area .comment-respond input[type="search"]:-ms-input-placeholder, .comments-area .comment-respond input[type="tel"]:-ms-input-placeholder, .comments-area .comment-respond input[type="number"]:-ms-input-placeholder, .comments-area .comment-respond textarea:-ms-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.comments-area .comment-respond input[type="date"]::-ms-input-placeholder, .comments-area .comment-respond input[type="time"]::-ms-input-placeholder, .comments-area .comment-respond input[type="datetime-local"]::-ms-input-placeholder, .comments-area .comment-respond input[type="week"]::-ms-input-placeholder, .comments-area .comment-respond input[type="month"]::-ms-input-placeholder, .comments-area .comment-respond input[type="text"]::-ms-input-placeholder, .comments-area .comment-respond input[type="email"]::-ms-input-placeholder, .comments-area .comment-respond input[type="url"]::-ms-input-placeholder, .comments-area .comment-respond input[type="password"]::-ms-input-placeholder, .comments-area .comment-respond input[type="search"]::-ms-input-placeholder, .comments-area .comment-respond input[type="tel"]::-ms-input-placeholder, .comments-area .comment-respond input[type="number"]::-ms-input-placeholder, .comments-area .comment-respond textarea::-ms-input-placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.comments-area .comment-respond input[type="date"]::placeholder, .comments-area .comment-respond input[type="time"]::placeholder, .comments-area .comment-respond input[type="datetime-local"]::placeholder, .comments-area .comment-respond input[type="week"]::placeholder, .comments-area .comment-respond input[type="month"]::placeholder, .comments-area .comment-respond input[type="text"]::placeholder, .comments-area .comment-respond input[type="email"]::placeholder, .comments-area .comment-respond input[type="url"]::placeholder, .comments-area .comment-respond input[type="password"]::placeholder, .comments-area .comment-respond input[type="search"]::placeholder, .comments-area .comment-respond input[type="tel"]::placeholder, .comments-area .comment-respond input[type="number"]::placeholder, .comments-area .comment-respond textarea::placeholder {
  color: #6a6c72;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.comments-area .comment-respond input[type="date"]:focus, .comments-area .comment-respond input[type="time"]:focus, .comments-area .comment-respond input[type="datetime-local"]:focus, .comments-area .comment-respond input[type="week"]:focus, .comments-area .comment-respond input[type="month"]:focus, .comments-area .comment-respond input[type="text"]:focus, .comments-area .comment-respond input[type="email"]:focus, .comments-area .comment-respond input[type="url"]:focus, .comments-area .comment-respond input[type="password"]:focus, .comments-area .comment-respond input[type="search"]:focus, .comments-area .comment-respond input[type="tel"]:focus, .comments-area .comment-respond input[type="number"]:focus, .comments-area .comment-respond textarea:focus {
  background-color: transparent;
  border: 1px solid #06a3da;
}

.comments-area .comment-respond input[type="date"]:focus::-webkit-input-placeholder, .comments-area .comment-respond input[type="time"]:focus::-webkit-input-placeholder, .comments-area .comment-respond input[type="datetime-local"]:focus::-webkit-input-placeholder, .comments-area .comment-respond input[type="week"]:focus::-webkit-input-placeholder, .comments-area .comment-respond input[type="month"]:focus::-webkit-input-placeholder, .comments-area .comment-respond input[type="text"]:focus::-webkit-input-placeholder, .comments-area .comment-respond input[type="email"]:focus::-webkit-input-placeholder, .comments-area .comment-respond input[type="url"]:focus::-webkit-input-placeholder, .comments-area .comment-respond input[type="password"]:focus::-webkit-input-placeholder, .comments-area .comment-respond input[type="search"]:focus::-webkit-input-placeholder, .comments-area .comment-respond input[type="tel"]:focus::-webkit-input-placeholder, .comments-area .comment-respond input[type="number"]:focus::-webkit-input-placeholder, .comments-area .comment-respond textarea:focus::-webkit-input-placeholder {
  color: transparent;
}

.comments-area .comment-respond input[type="date"]:focus:-ms-input-placeholder, .comments-area .comment-respond input[type="time"]:focus:-ms-input-placeholder, .comments-area .comment-respond input[type="datetime-local"]:focus:-ms-input-placeholder, .comments-area .comment-respond input[type="week"]:focus:-ms-input-placeholder, .comments-area .comment-respond input[type="month"]:focus:-ms-input-placeholder, .comments-area .comment-respond input[type="text"]:focus:-ms-input-placeholder, .comments-area .comment-respond input[type="email"]:focus:-ms-input-placeholder, .comments-area .comment-respond input[type="url"]:focus:-ms-input-placeholder, .comments-area .comment-respond input[type="password"]:focus:-ms-input-placeholder, .comments-area .comment-respond input[type="search"]:focus:-ms-input-placeholder, .comments-area .comment-respond input[type="tel"]:focus:-ms-input-placeholder, .comments-area .comment-respond input[type="number"]:focus:-ms-input-placeholder, .comments-area .comment-respond textarea:focus:-ms-input-placeholder {
  color: transparent;
}

.comments-area .comment-respond input[type="date"]:focus::-ms-input-placeholder, .comments-area .comment-respond input[type="time"]:focus::-ms-input-placeholder, .comments-area .comment-respond input[type="datetime-local"]:focus::-ms-input-placeholder, .comments-area .comment-respond input[type="week"]:focus::-ms-input-placeholder, .comments-area .comment-respond input[type="month"]:focus::-ms-input-placeholder, .comments-area .comment-respond input[type="text"]:focus::-ms-input-placeholder, .comments-area .comment-respond input[type="email"]:focus::-ms-input-placeholder, .comments-area .comment-respond input[type="url"]:focus::-ms-input-placeholder, .comments-area .comment-respond input[type="password"]:focus::-ms-input-placeholder, .comments-area .comment-respond input[type="search"]:focus::-ms-input-placeholder, .comments-area .comment-respond input[type="tel"]:focus::-ms-input-placeholder, .comments-area .comment-respond input[type="number"]:focus::-ms-input-placeholder, .comments-area .comment-respond textarea:focus::-ms-input-placeholder {
  color: transparent;
}

.comments-area .comment-respond input[type="date"]:focus::placeholder, .comments-area .comment-respond input[type="time"]:focus::placeholder, .comments-area .comment-respond input[type="datetime-local"]:focus::placeholder, .comments-area .comment-respond input[type="week"]:focus::placeholder, .comments-area .comment-respond input[type="month"]:focus::placeholder, .comments-area .comment-respond input[type="text"]:focus::placeholder, .comments-area .comment-respond input[type="email"]:focus::placeholder, .comments-area .comment-respond input[type="url"]:focus::placeholder, .comments-area .comment-respond input[type="password"]:focus::placeholder, .comments-area .comment-respond input[type="search"]:focus::placeholder, .comments-area .comment-respond input[type="tel"]:focus::placeholder, .comments-area .comment-respond input[type="number"]:focus::placeholder, .comments-area .comment-respond textarea:focus::placeholder {
  color: transparent;
}

.comments-area .comment-respond textarea {
  height: auto !important;
  padding-top: 15px;
}

.comments-area .comment-respond .comment-form-author {
  float: left;
  width: 50%;
  padding-right: 10px;
  margin-bottom: 20px;
}

.comments-area .comment-respond .comment-form-email {
  float: left;
  width: 50%;
  padding-left: 12px;
  margin-bottom: 20px;
}

.comments-area .comment-respond .comment-form-url {
  float: left;
  width: 100%;
  margin-bottom: 20px;
}

.comments-area .comment-respond .comment-form-cookies-consent {
  width: 100%;
  float: left;
  position: relative;
  padding-left: 20px;
  margin-top: 15px;
  margin-bottom: 20px;
}

.comments-area .comment-respond .comment-form-cookies-consent input {
  position: absolute;
  left: 0;
  top: 7.5px;
}

.comments-area .comment-respond .comment-form-cookies-consent label {
  display: inline-block;
  margin: 0;
  color: #6a6c72;
}

.comments-area .comment-respond .form-submit {
  float: left;
  width: 100%;
}

.comments-area .comment-respond .form-submit input {
  background: #06a3da;
  border: none;
  color: #ffffff;
  padding: 10px 30px 10px;
  display: inline-block;
  cursor: pointer;
  text-transform: capitalize;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 0;
  font-weight: 600;
  border-radius: 5px;
}

/*================================================
Dentist Details Area CSS
=================================================*/
.dentist-details-image img {
  border-radius: 10px;
}

.dentist-details-content h3 {
  font-size: 30px;
  font-weight: 500;
  margin-bottom: 15px;
}

.dentist-details-content span {
  font-size: 16px;
  color: #6a6c72;
  font-weight: 400;
}

.dentist-details-content .share-link {
  margin-top: 18px;
}

.dentist-details-content .share-link a {
  margin: 0 2px;
  text-align: center;
}

.dentist-details-content .share-link a i {
  display: inline-block;
  height: 35px;
  width: 35px;
  line-height: 35px;
  border-radius: 50px;
  font-size: 16px;
  background-color: #06a3da;
  color: #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.dentist-details-content .share-link a i:hover {
  background-color: #124390;
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

.dentist-details-content .content-overview {
  margin-top: 25px;
}

.dentist-details-content .content-overview p {
  margin-bottom: 10px;
  font-size: 15px;
}

.dentist-details-content .content-overview p span {
  font-size: 20px;
  font-weight: 500;
  margin-right: 5px;
  color: #222222;
}

.dentist-details-content .content-overview p:last-child {
  margin-bottom: 0;
}

.dentist-details-overview-content {
  margin-top: 30px;
}

.dentist-details-overview-content .details-overview-image {
  margin-top: 15px;
  margin-bottom: 25px;
}

.dentist-details-overview-content .details-overview-image img {
  border-radius: 10px;
}

.dentist-details-overview-content .overview-text p {
  margin-bottom: 10px;
  font-size: 15px;
}

.dentist-details-overview-content .overview-text p span {
  font-size: 20px;
  font-weight: 500;
  margin-right: 5px;
  color: #222222;
}

.dentist-details-overview-content .overview-text p:last-child {
  margin-bottom: 0;
}

/*================================================
Footer Area CSS
=================================================*/
.footer-area {
  background-color: #091e3e;
}

.single-footer-widget {
  margin-bottom: 30px;
}

.single-footer-widget h2 {
  font-size: 45px;
  margin-bottom: 20px;
  font-weight: 600;
}

.single-footer-widget h2 a {
  color: #ffffff;
}

.single-footer-widget p {
  color: #ffffff;
  margin-bottom: 0;
}

.single-footer-widget .signature {
  margin-top: 25px;
}

.single-footer-widget .footer-info {
  position: relative;
  margin-top: 35px;
  padding-left: 75px;
}

.single-footer-widget .footer-info img {
  display: inline-block;
  height: 55px;
  width: 55px;
  border-radius: 15px;
  position: absolute;
  left: 0;
  top: 0;
}

.single-footer-widget .footer-info h4 {
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 10px;
  color: #ffffff;
}

.single-footer-widget .footer-info span {
  font-size: 15px;
  color: #ffffff;
}

.single-footer-widget h3 {
  font-size: 25px;
  color: #ffffff;
  margin-bottom: 30px;
  font-weight: 500;
}

.single-footer-widget .quick-links {
  padding-left: 0;
  margin-bottom: 0;
  list-style-type: none;
}

.single-footer-widget .quick-links li {
  margin-bottom: 12px;
  font-size: 15px;
}

.single-footer-widget .quick-links li a {
  display: inline-block;
  color: #ffffff;
  font-weight: 400;
  position: relative;
}

.single-footer-widget .quick-links li a:hover {
  color: #06a3da;
}

.single-footer-widget .quick-links li a:hover::before {
  width: 100%;
}

.single-footer-widget .quick-links li a::before {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 0;
  height: 1px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  background-color: #06a3da;
}

.single-footer-widget .quick-links li:last-child {
  margin-bottom: 0;
}

.single-footer-widget .footer-widget-blog {
  position: relative;
  overflow: hidden;
}

.single-footer-widget .footer-widget-blog .item {
  overflow: hidden;
  margin-bottom: 25px;
}

.single-footer-widget .footer-widget-blog .item:last-child {
  margin-bottom: 0;
}

.single-footer-widget .footer-widget-blog .item .thumb {
  float: left;
  height: 80px;
  overflow: hidden;
  display: block;
  position: relative;
  width: 80px;
  margin-right: 15px;
  z-index: 1;
}

.single-footer-widget .footer-widget-blog .item .thumb .fullimage {
  width: 80px;
  height: 80px;
  display: inline-block;
  border-radius: 5px;
  background-size: cover !important;
  background-repeat: no-repeat;
  background-position: center center;
}

.single-footer-widget .footer-widget-blog .item .thumb .fullimage.bg1 {
  background-image: url(../images/footer/footer-2.jpg);
}

.single-footer-widget .footer-widget-blog .item .thumb .fullimage.bg2 {
  background-image: url(../images/footer/footer-3.jpg);
}

.single-footer-widget .footer-widget-blog .item .thumb .fullimage.bg3 {
  background-image: url(../images/footer/footer-4.jpg);
}

.single-footer-widget .footer-widget-blog .item .info {
  overflow: hidden;
  margin-top: 5px;
}

.single-footer-widget .footer-widget-blog .item .info span {
  display: block;
  color: #ffffff;
  margin-top: -5px;
  margin-bottom: 8px;
  font-size: 14px;
}

.single-footer-widget .footer-widget-blog .item .info span a {
  color: #06a3da;
}

.single-footer-widget .footer-widget-blog .item .info h4 {
  margin-bottom: 0;
  line-height: 1.4;
  font-size: 18px;
  font-weight: 500;
}

.single-footer-widget .footer-widget-blog .item .info h4 a {
  display: inline-block;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  color: #ffffff;
}

.single-footer-widget .footer-widget-blog .item .info h4 a:hover {
  color: #06a3da;
}

.single-footer-widget .footer-information {
  padding-left: 0;
  list-style-type: none;
  margin-bottom: 0;
}

.single-footer-widget .footer-information li {
  display: inline-block;
  position: relative;
  text-align: left;
  padding-left: 55px;
  font-size: 12px;
  font-weight: 400;
  color: #ffffff;
  margin-bottom: 20px;
}

.single-footer-widget .footer-information li:last-child {
  margin-bottom: 0;
}

.single-footer-widget .footer-information li i {
  position: absolute;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  color: #06a3da;
  font-size: 38px;
}

.single-footer-widget .footer-information li span {
  display: block;
  font-size: 18px;
  font-weight: 400;
  color: #ffffff;
  margin-top: 8px;
}

.single-footer-widget .footer-information li span a {
  color: #ffffff;
}

.single-footer-widget .footer-information li span a:hover {
  color: #06a3da;
}

/*================================================
Copy Right Area CSS
=================================================*/
.copyright-area {
  padding-bottom: 30px;
  background-color: #091e3e;
}

.copyright-area-content {
  text-align: center;
  border-top: 1px solid #2e405b;
  padding-top: 30px;
}

.copyright-area-content p {
  color: #ffffff;
  font-size: 15px;
}

.copyright-area-content p a {
  display: inline-block;
  font-weight: 600;
  color: #06a3da;
}

.copyright-area-content p a:hover {
  color: #ffffff;
}

/*================================================
Go Top CSS
=================================================*/
.go-top {
  position: fixed;
  cursor: pointer;
  bottom: -100px;
  right: 20px;
  color: #ffffff;
  background-color: #222222;
  z-index: 4;
  width: 45px;
  text-align: center;
  height: 45px;
  opacity: 0;
  visibility: hidden;
  border-radius: 50%;
  font-size: 22px;
  -webkit-transition: .9s;
  transition: .9s;
  overflow: hidden;
  -webkit-box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
}

.go-top i {
  position: absolute;
  right: 0;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  text-align: center;
  font-size: 25px;
  margin: auto;
}

.go-top.active {
  opacity: 1;
  visibility: visible;
  bottom: 20px;
}

.go-top:hover {
  background-color: #06a3da;
  color: #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  -webkit-box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
          box-shadow: 0 4px 6px rgba(50, 50, 93, 0.11), 0 1px 3px rgba(0, 0, 0, 0.08);
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

/*================================================
Header Area CSS
=================================================*/
.grin-care-header {
  position: absolute;
  top: 0;
  z-index: 9;
  width: 100%;
}

/*================================================
Top Area CSS
=================================================*/
.dental-tourism-top-area {
  background-color: #222222;
  padding-top: 12px;
  padding-bottom: 12px;
}

.dental-tourism-top-area .container-fluid {
  padding-left: 30px;
  padding-right: 30px;
}

.top-dental-tourism-information {
  padding: 0;
  margin-bottom: 0;
}

.top-dental-tourism-information.with-left {
  margin-left: 290px;
}

.top-dental-tourism-information li {
  display: inline-block;
  list-style-type: none;
  margin-right: 15px;
  color: #ffffff;
  font-size: 15px;
  font-weight: 400;
  font-family: "Nunito Sans", sans-serif;
  position: relative;
  padding-left: 22px;
}

.top-dental-tourism-information li:last-child {
  margin-right: 0;
}

.top-dental-tourism-information li i {
  color: #1DBFCC;
  position: absolute;
  left: 0;
  top: 3.2px;
}

.top-dental-tourism-information li a {
  color: #ffffff;
}

.top-dental-tourism-information li a:hover {
  color: #1DBFCC;
}

.top-dental-tourism-optional {
  text-align: end;
  padding: 0;
  margin-bottom: 0;
}

.top-dental-tourism-optional li {
  display: inline-block;
  margin-right: 5px;
}

.top-dental-tourism-optional li:last-child {
  margin-right: 0;
}

.top-dental-tourism-optional li a i {
  color: #ffffff;
  font-size: 15px;
  position: relative;
  top: 1px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  display: inline-block;
  height: 25px;
  width: 25px;
  line-height: 22px;
  border: 2px solid #ffffff;
  text-align: center;
  border-radius: 5px;
}

.top-dental-tourism-optional li a i:hover {
  color: #1DBFCC;
  border: 2px solid #1DBFCC;
  -webkit-transform: translateY(-2px);
          transform: translateY(-2px);
}

.top-area {
  padding-top: 12px;
  padding-bottom: 12px;
}

.top-area .container-fluid {
  padding-left: 30px;
  padding-right: 30px;
}

.top-information-wrap {
  padding: 0;
  margin-bottom: 0;
}

.top-information-wrap li {
  display: inline-block;
  list-style-type: none;
  margin-right: 15px;
  color: #002345;
  font-size: 15px;
  font-weight: 400;
  font-family: "Nunito Sans", sans-serif;
  position: relative;
  padding-left: 22px;
}

.top-information-wrap li:last-child {
  margin-right: 0;
}

.top-information-wrap li i {
  color: #1DBFCC;
  position: absolute;
  left: 0;
  top: 3.2px;
}

.top-information-wrap li a {
  color: #002345;
}

.top-information-wrap li a:hover {
  color: #1DBFCC;
}

.top-optional-wrap {
  text-align: end;
  padding: 0;
  margin-bottom: 0;
}

.top-optional-wrap li {
  display: inline-block;
  margin-right: 5px;
}

.top-optional-wrap li:last-child {
  margin-right: 0;
}

.top-optional-wrap li a i {
  color: #002345;
  font-size: 15px;
  position: relative;
  top: 1px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  display: inline-block;
  height: 25px;
  width: 25px;
  line-height: 22px;
  border: 2px solid #002345;
  text-align: center;
  border-radius: 5px;
}

.top-optional-wrap li a i:hover {
  color: #1DBFCC;
  border: 2px solid #1DBFCC;
  -webkit-transform: translateY(-2px);
          transform: translateY(-2px);
}

/*================================================
Navbar Area CSS
=================================================*/
.dental-tourism-navbar .main-navbar {
  background-color: #ffffff;
  -webkit-box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
          box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1);
}

.dental-tourism-navbar .main-navbar .container-fluid {
  padding-left: 30px;
  padding-right: 30px;
}

.dental-tourism-navbar .main-navbar .navbar ul {
  margin-left: 225px;
}

.dental-tourism-navbar .main-navbar .navbar .navbar-brand {
  padding: 0;
  position: relative;
  z-index: 1;
  text-transform: capitalize;
  font-size: 35px;
  font-weight: bold;
  font-family: "Heebo", sans-serif;
}

.dental-tourism-navbar .main-navbar .navbar .navbar-brand::before {
  content: "";
  position: absolute;
  top: -92px;
  left: -100px;
  width: 350px;
  height: 150px;
  background-image: url(../images/dental-tourism/logo-bg.png);
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  z-index: -1;
}
ul.dropdown-menu.abt_scrl {
    height: auto;
    overflow: hidden;
}
.dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item a {
  color: #002345;
  font-family: "Heebo", sans-serif;
}

.dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item a::before {
  background-color: #1DBFCC;
}

.dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item a:hover, .dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item a:focus, .dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item a.active {
  color: #1DBFCC;
}

.dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item a:hover::before, .dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item a:focus::before, .dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item a.active::before {
  width: 100%;
  right: auto;
  left: 0;
}

.dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item:last-child {
  margin-right: 0;
}

.dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item:first-child {
  margin-left: 0;
}

.dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item:hover a, .dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item.active a {
  color: #1DBFCC;
}

.dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu {
  margin-left: 0;
}

.dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li
a {
  color: #002345;
}

.dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li
a:hover, .dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li
a:focus, .dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li
a.active {
  color: #1DBFCC;
}

.dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li
a:hover::before, .dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li
a:focus::before, .dental-tourism-navbar .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li
a.active::before {
  display: none;
}

.dental-tourism-navbar .main-navbar .others-options .option-item {
  margin-right: 25px;
}

.dental-tourism-navbar .main-navbar .others-options .option-item:last-child {
  margin-right: 0;
}

.dental-tourism-navbar .main-navbar .others-options .option-item .search-btn a i {
  color: #002345;
}

.dental-tourism-navbar .main-navbar .others-options .option-item .search-btn a i:hover {
  color: #1DBFCC;
}

.dental-tourism-navbar .main-navbar .others-options .option-item .navbar-btn .default-btn {
  background-color: #1DBFCC;
}

.dental-tourism-navbar .main-navbar .others-options .option-item .navbar-btn .default-btn:hover {
  background-color: #06a3da;
}

.grin-care-navbar .main-navbar {
  background-color: transparent;
  padding-top: 0;
  padding-bottom: 0;
}

.grin-care-navbar .main-navbar .container-fluid {
  padding-left: 30px;
  padding-right: 30px;
}

.grin-care-navbar .main-navbar .navbar {
  background-color: #ffffff;
  padding: 15px 25px;
}

.grin-care-navbar .main-navbar .navbar .navbar-brand {
  padding: 0;
  text-transform: capitalize;
  font-size: 35px;
  font-weight: bold;
  font-family: "Heebo", sans-serif;
  color: #1DBFCC;
}

.grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item a {
  color: #002345;
  font-family: "Heebo", sans-serif;
}

.grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item a::before {
  background-color: #1DBFCC;
}

.grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item a:hover, .grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item a:focus, .grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item a.active {
  color: #1DBFCC;
}

.grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item a:hover::before, .grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item a:focus::before, .grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item a.active::before {
  width: 100%;
  right: auto;
  left: 0;
}

.grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item:last-child {
  margin-right: 0;
}

.grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item:first-child {
  margin-left: 0;
}

.grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item:hover a, .grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item.active a {
  color: #1DBFCC;
}

.grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li
a {
  color: #002345;
}

.grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li
a:hover, .grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li
a:focus, .grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li
a.active {
  color: #1DBFCC;
}

.grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li
a:hover::before, .grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li
a:focus::before, .grin-care-navbar .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li
a.active::before {
  display: none;
}

.grin-care-navbar .main-navbar .others-options .option-item {
  margin-right: 25px;
  position: relative;
}

.grin-care-navbar .main-navbar .others-options .option-item::before {
  content: "";
  position: absolute;
  top: 0;
  right: -15px;
  width: 1px;
  height: 35px;
  background-color: #DDDDDD;
}

.grin-care-navbar .main-navbar .others-options .option-item:nth-child(2)::before {
  display: none;
}

.grin-care-navbar .main-navbar .others-options .option-item:last-child {
  margin-right: 0;
}

.grin-care-navbar .main-navbar .others-options .option-item:last-child::before {
  display: none;
}

.grin-care-navbar .main-navbar .others-options .option-item .search-btn a i {
  color: #002345;
}

.grin-care-navbar .main-navbar .others-options .option-item .search-btn a i:hover {
  color: #1DBFCC;
}

.grin-care-navbar .main-navbar .others-options .option-item .cart-btn {
  position: relative;
  top: 3.5px;
}

.grin-care-navbar .main-navbar .others-options .option-item .cart-btn i {
  font-size: 28px;
  color: #002345;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.grin-care-navbar .main-navbar .others-options .option-item .cart-btn i:hover {
  color: #1DBFCC;
}

.grin-care-navbar .main-navbar .others-options .option-item .cart-btn span {
  position: absolute;
  top: -5px;
  right: -5px;
  display: inline-block;
  height: 18px;
  width: 18px;
  line-height: 18px;
  background-color: #1DBFCC;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  border-radius: 50px;
}

.grin-care-navbar .main-navbar .others-options .option-item .navbar-btn .default-btn {
  background-color: #1DBFCC;
}

.grin-care-navbar .main-navbar .others-options .option-item .navbar-btn .default-btn:hover {
  background-color: #06a3da;
}

.others-option-for-responsive .option-inner .others-options .option-item .cart-btn {
  position: relative;
  top: 3.5px;
}

.others-option-for-responsive .option-inner .others-options .option-item .cart-btn i {
  font-size: 28px;
  color: #002345;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.others-option-for-responsive .option-inner .others-options .option-item .cart-btn i:hover {
  color: #1DBFCC;
}

.others-option-for-responsive .option-inner .others-options .option-item .cart-btn span {
  position: absolute;
  top: -5px;
  right: -5px;
  display: inline-block;
  height: 18px;
  width: 18px;
  line-height: 18px;
  background-color: #1DBFCC;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  border-radius: 50px;
}

/*================================================
Dental Tourism Banner Area CSS
=================================================*/
.dental-tourism-banner-area {
  background-image: url(../images/dental-tourism/banner/banner-bg.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  padding-top: 120px;
  padding-bottom: 120px;
}

.dental-tourism-banner-area .container-fluid {
  padding-left: 30px;
  padding-right: 30px;
}

.dental-tourism-banner-content {
  max-width: 810px;
}

.dental-tourism-banner-content .sub-title {
  color: #1DBFCC;
  font-weight: 600;
  font-size: 16px;
  font-family: "Nunito Sans", sans-serif;
  display: block;
  margin-bottom: 18px;
}

.dental-tourism-banner-content h1 {
  font-size: 80px;
  font-family: "Heebo", sans-serif;
  color: #002345;
  margin-bottom: 12px;
}

.dental-tourism-banner-content p {
  color: #486683;
  margin-bottom: 0;
}

.dental-tourism-banner-content .banner-btn {
  margin-top: 30px;
}

.dental-tourism-banner-content .banner-btn .default-btn {
  background-color: #1DBFCC;
}

.dental-tourism-banner-content .banner-btn .default-btn:hover {
  background-color: #06a3da;
}

/*================================================
Dental Tourism Features Area CSS
=================================================*/
.single-dental-tourism-features {
  margin-bottom: 25px;
}

.single-dental-tourism-features .content {
  position: relative;
  padding-left: 125px;
}

.single-dental-tourism-features .content .icon-image {
  display: inline-block;
  height: 100px;
  width: 100px;
  line-height: 100px;
  text-align: center;
  border: 1px solid #1DBFCC;
  border-radius: 50%;
  position: absolute;
  left: 0;
  top: 0;
}

.single-dental-tourism-features .content .icon-image .number {
  display: inline-block;
  height: 25px;
  width: 25px;
  line-height: 25px;
  background-color: #1DBFCC;
  text-align: center;
  font-size: 14px;
  color: #ffffff;
  border-radius: 50px;
  position: absolute;
  left: 0;
  right: 0;
  bottom: -12px;
  margin: auto;
}

.single-dental-tourism-features .content h3 {
  font-size: 24px;
  font-family: "Heebo", sans-serif;
  margin-bottom: 15px;
  font-weight: 500;
}

.single-dental-tourism-features .content h3 a {
  color: #002345;
}

.single-dental-tourism-features .content h3 a:hover {
  color: #1DBFCC;
}

.single-dental-tourism-features .content p {
  margin-bottom: 0;
  color: #486683;
}

/*================================================
Dental Tourism About Area CSS
=================================================*/
.dental-tourism-about-image {
  position: relative;
}

.dental-tourism-about-image .certified {
  position: absolute;
  bottom: 30px;
  right: 30px;
}

.dental-tourism-about-content {
  padding-left: 50px;
}

.dental-tourism-about-content span {
  display: inline-block;
  padding: 8px 18px;
  background-color: #1DBFCC;
  font-size: 16px;
  color: #ffffff;
  border-radius: 30px;
  margin-bottom: 25px;
}

.dental-tourism-about-content h3 {
  font-size: 40px;
  margin-bottom: 15px;
  font-family: "Heebo", sans-serif;
  line-height: 1.4;
}

.dental-tourism-about-content p {
  margin-bottom: 0;
  color: #486683;
}

.dental-tourism-about-content .list {
  padding: 0;
  margin-top: 20px;
  margin-bottom: 0;
}

.dental-tourism-about-content .list li {
  list-style-type: none;
  color: #002345;
  margin-bottom: 15px;
  position: relative;
  padding-left: 22px;
}

.dental-tourism-about-content .list li:last-child {
  margin-bottom: 0;
}

.dental-tourism-about-content .list li i {
  color: #1DBFCC;
  position: absolute;
  left: 0;
  top: 4px;
}

.dental-tourism-about-content .about-btn {
  margin-top: 25px;
  
}

.dental-tourism-about-content .about-btn .default-btn {
  background-color: #1DBFCC;
}

.dental-tourism-about-content .about-btn .default-btn:hover {
  background-color: #06a3da;
}

/*================================================
Dental Tourism Services Area CSS
=================================================*/
.dental-tourism-services-area {
  background-color: #002345;
  overflow: hidden;
}

.dental-tourism-services-area .section-title-warp .sub-title {
  background-color: #1DBFCC;
  color: #ffffff;
}

.dental-tourism-services-area .section-title-warp h2 {
  color: #ffffff;
}

.dental-tourism-services-area .section-warp-btn .default-btn {
  background-color: #1DBFCC;
}

.dental-tourism-services-area .section-warp-btn .default-btn:hover {
  background-color: #06a3da;
}

.dental-tourism-services-area .container-fluid {
  overflow: hidden;
  left: calc((100% - 1320px)/2);
  position: relative;
}

.dental-tourism-services-card .services-image {
  position: relative;
}

.dental-tourism-services-card .services-image .icon {
  position: absolute;
  left: 25px;
  bottom: 25px;
}

.dental-tourism-services-card .services-image .icon i {
  display: inline-block;
  height: 75px;
  width: 75px;
  line-height: 75px;
  background-color: #1DBFCC;
  text-align: center;
  font-size: 40px;
  color: #ffffff;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.dental-tourism-services-card .services-content {
  margin-top: 25px;
}

.dental-tourism-services-card .services-content h3 {
  font-size: 24px;
  font-family: "Heebo", sans-serif;
  font-weight: 500;
}

.dental-tourism-services-card .services-content h3 a {
  color: #ffffff;
}

.dental-tourism-services-card:hover .services-image .icon i {
  background-color: #ffffff;
  color: #06a3da;
}

.dental-tourism-services-card:hover .services-content h3 a {
  color: #1DBFCC;
}

/*================================================
Dental Tourism Choose Area CSS
=================================================*/
.dental-tourism-choose-content span {
  display: inline-block;
  padding: 8px 18px;
  background-color: #1DBFCC;
  font-size: 16px;
  color: #ffffff;
  border-radius: 30px;
  margin-bottom: 25px;
}

.dental-tourism-choose-content h3 {
  font-size: 40px;
  margin-bottom: 15px;
  font-family: "Heebo", sans-serif;
}

.dental-tourism-choose-content p {
  margin-bottom: 0;
  color: #486683;
}

.dental-tourism-choose-content .choose-inner-content {
  margin-top: 25px;
  position: relative;
  padding-left: 35px;
}

.dental-tourism-choose-content .choose-inner-content i {
  font-size: 20px;
  color: #1DBFCC;
  position: absolute;
  left: 0;
  top: 2px;
}

.dental-tourism-choose-content .choose-inner-content h4 {
  font-size: 24px;
  font-weight: 500;
  margin-bottom: 12px;
}

.dental-tourism-choose-content .choose-inner-content p {
  margin-bottom: 0;
  color: #486683;
}

.dental-tourism-choose-image {
  position: relative;
  text-align: center;
}

.dental-tourism-choose-image .video-btn {
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.dental-tourism-choose-image .video-btn i {
  display: inline-block;
  height: 80px;
  width: 80px;
  line-height: 80px;
  background-color: #1DBFCC;
  color: #ffffff;
  border-radius: 50px;
  font-size: 65px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.dental-tourism-choose-image .video-btn i:hover {
  background-color: #06a3da;
}

/*================================================
Dental Tourism Appointment Area CSS
=================================================*/
.dental-tourism-appointment-area {
  background-image: url(../images/dental-tourism/appointment/appointment-bg.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}

.dental-tourism-appointment-form {
  max-width: 600px;
  margin-left: auto;
}

.dental-tourism-appointment-form h4 {
  font-size: 40px;
  margin-bottom: 30px;
}

.dental-tourism-appointment-form h4 i {
  margin-right: 5px;
  color: #1DBFCC;
}

.dental-tourism-appointment-form form .form-group {
  margin-bottom: 25px;
}

.dental-tourism-appointment-form form .form-group .form-control {
  display: block;
  width: 100%;
  height: 60px;
  outline: 0;
  background-color: #ffffff;
  border: 1px solid #eeeeee;
  border-radius: 0;
  padding: 15px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  font-size: 14px;
}

.dental-tourism-appointment-form form .form-group .form-control::-webkit-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.dental-tourism-appointment-form form .form-group .form-control:-ms-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.dental-tourism-appointment-form form .form-group .form-control::-ms-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.dental-tourism-appointment-form form .form-group .form-control::placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.dental-tourism-appointment-form form .form-group .form-control:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
  border: 1px solid #06a3da;
}

.dental-tourism-appointment-form form .form-group .form-control:focus::-webkit-input-placeholder {
  color: transparent;
}

.dental-tourism-appointment-form form .form-group .form-control:focus:-ms-input-placeholder {
  color: transparent;
}

.dental-tourism-appointment-form form .form-group .form-control:focus::-ms-input-placeholder {
  color: transparent;
}

.dental-tourism-appointment-form form .form-group .form-control:focus::placeholder {
  color: transparent;
}

.dental-tourism-appointment-form form .form-group textarea.form-control {
  min-height: 120px;
}

.dental-tourism-appointment-form form .form-group .nice-select {
  background-color: #ffffff;
  border: 1px solid #eeeeee;
  border-radius: 0;
  font-size: 14px;
  height: 60px;
  line-height: 60px;
  color: #486683;
  padding-left: 15px;
  padding-right: 20px;
}

.dental-tourism-appointment-form form .form-group .nice-select::after {
  border-color: #486683;
  height: 8px;
  width: 8px;
  right: 15px;
  margin-top: -5px;
}

.dental-tourism-appointment-form form .form-group .nice-select .list {
  background-color: #ffffff;
  -webkit-box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
          box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
  border-radius: 0;
  height: 200px;
  overflow-y: scroll;
  margin-top: 0;
  margin-bottom: 0;
}

.dental-tourism-appointment-form form .form-group .nice-select .list .option {
  line-height: 40px;
  min-height: 40px;
  color: #6a6c72;
  padding-left: 15px;
  padding-top: 5px;
  padding-right: 15px;
  display: inherit;
  margin-right: 0;
}

.dental-tourism-appointment-form form .form-group .nice-select .list .option.selected {
  background-color: #06a3da !important;
  color: #ffffff;
  font-weight: normal;
}

.dental-tourism-appointment-form form .default-btn {
  background-color: #1DBFCC;
  border: none;
}

.dental-tourism-appointment-form form .default-btn:hover {
  background-color: #06a3da;
}

/*================================================
Dental Tourism Dentist Area CSS
=================================================*/
.dental-tourism-dentist-area .section-title-warp .sub-title {
  background-color: #1DBFCC;
  color: #ffffff;
}

.dental-tourism-dentist-area .section-warp-btn .default-btn {
  background-color: #1DBFCC;
}

.dental-tourism-dentist-area .section-warp-btn .default-btn:hover {
  background-color: #06a3da;
}

.dental-tourism-dentist-card .dentist-image {
  position: relative;
  text-align: center;
}

.dental-tourism-dentist-card .dentist-image a img {
  display: inline-block;
}

.dental-tourism-dentist-card .dentist-image .share-link {
  padding: 0;
  bottom: 0;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ffffff;
  border-radius: 10px;
  padding: 10px 25px;
  max-width: 200px;
  margin: auto;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.dental-tourism-dentist-card .dentist-image .share-link li {
  list-style-type: none;
  display: inline-block;
  margin-right: 8px;
}

.dental-tourism-dentist-card .dentist-image .share-link li:last-child {
  margin-right: 0;
}

.dental-tourism-dentist-card .dentist-image .share-link li a i {
  color: #002345;
  font-size: 15px;
  position: relative;
  top: 1px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  display: inline-block;
  height: 25px;
  width: 25px;
  line-height: 22px;
  border: 2px solid #002345;
  text-align: center;
  border-radius: 5px;
}

.dental-tourism-dentist-card .dentist-image .share-link li a i:hover {
  color: #1DBFCC;
  border: 2px solid #1DBFCC;
  -webkit-transform: translateY(-2px);
          transform: translateY(-2px);
}

.dental-tourism-dentist-card .dentist-content {
  margin-top: 25px;
  text-align: center;
}

.dental-tourism-dentist-card .dentist-content h3 {
  font-size: 24px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
}

.dental-tourism-dentist-card .dentist-content h3 a {
  color: #002345;
}

.dental-tourism-dentist-card .dentist-content h3 a:hover {
  color: #1DBFCC;
}

.dental-tourism-dentist-card .dentist-content span {
  font-size: 15px;
  color: #486683;
}

.dental-tourism-dentist-card:hover .dentist-image .share-link {
  bottom: 35px;
  opacity: 1;
  visibility: visible;
}

.dental-tourism-dentist-slides.owl-theme .owl-dots .owl-dot span {
  width: 10px;
  height: 10px;
  background-color: #1DBFCC;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 50%;
  position: relative;
  margin-top: 0;
  margin-bottom: 0;
  margin: 0 10px;
}

.dental-tourism-dentist-slides.owl-theme .owl-dots .owl-dot:hover span, .dental-tourism-dentist-slides.owl-theme .owl-dots .owl-dot.active span {
  background: #1DBFCC;
  -webkit-transform: scale(1.5);
          transform: scale(1.5);
}

.dental-tourism-dentist-slides.owl-theme .owl-nav.disabled + .owl-dots {
  margin-top: 30px;
}

/*================================================
Dental Tourism Tourists Area CSS
=================================================*/
.dental-tourism-tourists-content h3 {
  font-size: 40px;
  margin-bottom: 15px;
  font-family: "Heebo", sans-serif;
  line-height: 1.4;
}

.dental-tourism-tourists-content p {
  margin-bottom: 0;
  color: #486683;
}

.dental-tourism-tourists-content .list {
  padding: 0;
  margin-top: 20px;
  margin-bottom: 0;
}

.dental-tourism-tourists-content .list li {
  list-style-type: none;
  color: #002345;
  margin-bottom: 15px;
  position: relative;
  padding-left: 22px;
}

.dental-tourism-tourists-content .list li:last-child {
  margin-bottom: 0;
}

.dental-tourism-tourists-content .list li i {
  color: #1DBFCC;
  position: absolute;
  left: 0;
  top: 4px;
}

.dental-tourism-tourists-image .tourists-image {
  position: relative;
  text-align: center;
  margin-bottom: 25px;
}

.dental-tourism-tourists-image .tourists-image .content {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  padding: 15px;
}

.dental-tourism-tourists-image .tourists-image .content h3 {
  font-size: 24px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
  color: #ffffff;
}

.dental-tourism-tourists-image .tourists-image::before {
  position: absolute;
  content: "";
  background: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0)), to(rgba(0, 0, 0, 0.6)));
  background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.6) 100%);
  width: 100%;
  height: 100%;
  left: 0;
  bottom: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

/*================================================
Dental Tourism Review Area CSS
=================================================*/
.dental-tourism-review-area {
  background-color: #EFF8FB;
}

.dental-tourism-review-area .section-title-warp .sub-title {
  background-color: #1DBFCC;
  color: #ffffff;
}

.dental-tourism-review-area .section-warp-btn .default-btn {
  background-color: #1DBFCC;
}

.dental-tourism-review-area .section-warp-btn .default-btn:hover {
  background-color: #06a3da;
}

.dental-tourism-review-card {
  background-color: #ffffff;
  padding: 50px 65px;
}

.dental-tourism-review-card .review-info {
  position: relative;
  padding-left: 85px;
  margin-bottom: 25px;
}

.dental-tourism-review-card .review-info img {
  position: absolute;
  left: 0;
  top: 0;
  width: auto;
  display: inline-block;
  max-width: 65px;
}

.dental-tourism-review-card .review-info h3 {
  font-size: 24px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
  margin-bottom: 0;
}

.dental-tourism-review-card .review-info span {
  font-size: 15px;
  color: #1DBFCC;
  display: inline-block;
  margin-top: 12px;
}

.dental-tourism-review-card p {
  color: #486683;
  margin-bottom: 0;
}

.dental-tourism-review-card .rating {
  padding: 0;
  margin-top: 20px;
  margin-bottom: 0;
}

.dental-tourism-review-card .rating li {
  list-style-type: none;
  margin-right: 2px;
  display: inline-block;
}

.dental-tourism-review-card .rating li:last-child {
  margin-right: 0;
}

.dental-tourism-review-card .rating li i {
  color: #FFC806;
}

.dental-tourism-review-card .icon-quote {
  position: absolute;
  right: 45px;
  bottom: 30px;
}

.dental-tourism-review-card .icon-quote i {
  font-size: 50px;
  color: #1DBFCC;
}

.dental-tourism-review-slides.owl-theme .owl-dots .owl-dot span {
  width: 10px;
  height: 10px;
  background-color: #1DBFCC;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 50%;
  position: relative;
  margin-top: 0;
  margin-bottom: 0;
  margin: 0 10px;
}

.dental-tourism-review-slides.owl-theme .owl-dots .owl-dot:hover span, .dental-tourism-review-slides.owl-theme .owl-dots .owl-dot.active span {
  background: #1DBFCC;
  -webkit-transform: scale(1.5);
          transform: scale(1.5);
}

.dental-tourism-review-slides.owl-theme .owl-nav.disabled + .owl-dots {
  margin-top: 30px;
}

/*================================================
Dental Tourism Blog Area CSS
=================================================*/
.dental-tourism-blog-area .section-title-warp .sub-title {
  background-color: #1DBFCC;
  color: #ffffff;
}

.dental-tourism-blog-area .section-warp-btn .default-btn {
  background-color: #1DBFCC;
}

.dental-tourism-blog-area .section-warp-btn .default-btn:hover {
  background-color: #06a3da;
}

.dental-tourism-blog-card {
  margin-bottom: 25px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.dental-tourism-blog-card .blog-image {
  position: relative;
}

.dental-tourism-blog-card .blog-image a img {
  display: inline-block;
}

.dental-tourism-blog-card .blog-image .tag {
  position: absolute;
  left: 25px;
  top: 25px;
}

.dental-tourism-blog-card .blog-image .tag a {
  display: inline-block;
  background-color: #1DBFCC;
  color: #ffffff;
  padding: 10px 15px;
  border-radius: 30px;
}

.dental-tourism-blog-card .blog-content {
  padding-top: 20px;
  padding-left: 20px;
}

.dental-tourism-blog-card .blog-content .entry-meta {
  padding: 0;
  margin-bottom: 15px;
}

.dental-tourism-blog-card .blog-content .entry-meta li {
  display: inline-block;
  list-style-type: none;
  font-size: 14px;
  color: #486683;
  margin-right: 10px;
  position: relative;
  padding-left: 22px;
}

.dental-tourism-blog-card .blog-content .entry-meta li:last-child {
  margin-right: 0;
}

.dental-tourism-blog-card .blog-content .entry-meta li a {
  color: #486683;
}

.dental-tourism-blog-card .blog-content .entry-meta li a:hover {
  color: #1DBFCC;
}

.dental-tourism-blog-card .blog-content .entry-meta li i {
  color: #1DBFCC;
  position: absolute;
  left: 0;
  top: 2.8px;
}

.dental-tourism-blog-card .blog-content h3 {
  font-size: 24px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
  line-height: 1.5;
}

.dental-tourism-blog-card .blog-content h3 a {
  color: #002345;
}

.dental-tourism-blog-card .blog-content h3 a:hover {
  color: #1DBFCC;
}

.dental-tourism-blog-card:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

/*================================================
Dental Tourism Footer Area CSS
=================================================*/
.dental-tourism-footer-area {
  background-image: url(../images/dental-tourism/footer/footer-bg.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  position: relative;
  z-index: 1;
}

.dental-tourism-footer-area::before {
  position: absolute;
  content: "";
  background-color: #002345;
  height: 100%;
  width: 100%;
  left: 0;
  right: 0;
  top: 0;
  opacity: 0.9;
  z-index: -1;
}

.dental-tourism-footer-widget {
  margin-bottom: 25px;
}

.dental-tourism-footer-widget h2 {
  font-size: 35px;
  margin-bottom: 25px;
}

.dental-tourism-footer-widget h2 a {
  color: #ffffff;
}

.dental-tourism-footer-widget h3 {
  font-size: 24px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
  margin-bottom: 25px;
  color: #ffffff;
}

.dental-tourism-footer-widget .info-list {
  padding: 0;
  margin-bottom: 0;
}

.dental-tourism-footer-widget .info-list li {
  list-style-type: none;
  margin-bottom: 18px;
  color: #ffffff;
  font-family: "Nunito Sans", sans-serif;
}

.dental-tourism-footer-widget .info-list li:last-child {
  margin-bottom: 0;
}

.dental-tourism-footer-widget .info-list li span {
  color: #1DBFCC;
}

.dental-tourism-footer-widget .info-list li a {
  color: #ffffff;
}

.dental-tourism-footer-widget .info-list li a:hover {
  letter-spacing: 1px;
}

.dental-tourism-footer-widget .share-link {
  padding: 0;
  margin-top: 20px;
  margin-bottom: 0;
}

.dental-tourism-footer-widget .share-link li {
  display: inline-block;
  margin-right: 10px;
}

.dental-tourism-footer-widget .share-link li:last-child {
  margin-right: 0;
}

.dental-tourism-footer-widget .share-link li span {
  font-size: 20px;
  color: #ffffff;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
}

.dental-tourism-footer-widget .share-link li a i {
  color: #ffffff;
  font-size: 15px;
  position: relative;
  top: 1px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  display: inline-block;
  height: 25px;
  width: 25px;
  line-height: 22px;
  border: 2px solid #ffffff;
  text-align: center;
  border-radius: 5px;
}

.dental-tourism-footer-widget .share-link li a i:hover {
  color: #1DBFCC;
  border: 2px solid #1DBFCC;
  -webkit-transform: translateY(-2px);
          transform: translateY(-2px);
}

.dental-tourism-footer-widget .quick-links {
  padding: 0;
  margin-bottom: 0;
}

.dental-tourism-footer-widget .quick-links li {
  list-style-type: none;
  margin-bottom: 15px;
  position: relative;
  font-family: "Nunito Sans", sans-serif;
  padding-left: 22px;
}

.dental-tourism-footer-widget .quick-links li:last-child {
  margin-bottom: 0;
}

.dental-tourism-footer-widget .quick-links li a {
  color: #ffffff;
}

.dental-tourism-footer-widget .quick-links li a:hover {
  letter-spacing: 1px;
}

.dental-tourism-footer-widget .quick-links li i {
  color: #1DBFCC;
  position: absolute;
  left: 0;
  top: 4.5px;
}

.dental-tourism-footer-widget .newsletter-form p {
  color: #ffffff;
  font-family: "Nunito Sans", sans-serif;
  margin-bottom: 0;
}

.dental-tourism-footer-widget .newsletter-form .form-group {
  margin-top: 30px;
  position: relative;
}

.dental-tourism-footer-widget .newsletter-form .form-group .input-newsletter {
  background-color: transparent;
  border: none;
  border-bottom: 1px solid #C4C4C4;
  outline: 0;
  color: #ffffff;
  padding: 0 0 20px;
  width: 100%;
  font-size: 14px;
  font-weight: 400;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.dental-tourism-footer-widget .newsletter-form .form-group .input-newsletter::-webkit-input-placeholder {
  color: #ffffff;
}

.dental-tourism-footer-widget .newsletter-form .form-group .input-newsletter:-ms-input-placeholder {
  color: #ffffff;
}

.dental-tourism-footer-widget .newsletter-form .form-group .input-newsletter::-ms-input-placeholder {
  color: #ffffff;
}

.dental-tourism-footer-widget .newsletter-form .form-group .input-newsletter::placeholder {
  color: #ffffff;
}

.dental-tourism-footer-widget .newsletter-form .form-group .input-newsletter:focus {
  border-bottom: 1px solid #1DBFCC;
}

.dental-tourism-footer-widget .newsletter-form .form-group button {
  padding: 0;
  border: none;
  background-color: transparent;
  font-size: 20px;
  color: #1DBFCC;
  position: absolute;
  right: 0;
  bottom: 15px;
}

.dental-tourism-footer-widget .newsletter-form .validation-danger {
  color: red;
  font-size: 14px;
  margin-top: 15px;
}

.dental-tourism-copyright-area {
  margin-top: 75px;
}

.dental-tourism-copyright-area .copyright-area-content {
  text-align: center;
  border-top: 1px solid #2D4A65;
  padding-top: 30px;
  padding-bottom: 30px;
}

.dental-tourism-copyright-area .copyright-area-content p {
  color: #ffffff;
  font-size: 15px;
  font-family: "Nunito Sans", sans-serif;
}

.dental-tourism-copyright-area .copyright-area-content p a {
  display: inline-block;
  font-weight: 600;
  color: #1DBFCC;
}

.dental-tourism-copyright-area .copyright-area-content p a:hover {
  color: #ffffff;
}

/*================================================
Skin Care Banner Area CSS
=================================================*/
.skin-care-banner-area {
  background-color: #EFF8FB;
  overflow: hidden;
  padding-top: 100px;
  position: relative;
  z-index: 1;
}

.skin-care-banner-area .container-fluid {
  padding-left: 30px;
  padding-right: 0;
}

.skin-care-banner-content {
  padding-right: 10px;
}

.skin-care-banner-content .sub-title {
  color: #1DBFCC;
  font-weight: 600;
  font-size: 16px;
  font-family: "Nunito Sans", sans-serif;
  display: block;
  margin-bottom: 18px;
}

.skin-care-banner-content h1 {
  font-size: 75px;
  font-family: "Heebo", sans-serif;
  color: #002345;
  margin-bottom: 12px;
}

.skin-care-banner-content p {
  color: #486683;
  margin-bottom: 0;
}

.skin-care-banner-content .banner-btn {
  margin-top: 30px;
}

.skin-care-banner-content .banner-btn .default-btn {
  background-color: #1DBFCC;
}

.skin-care-banner-content .banner-btn .default-btn:hover {
  background-color: #06a3da;
}

.skin-care-banner-shape {
  position: absolute;
  left: 20px;
  top: 100px;
  z-index: -1;
}

/*================================================
Skin Care Features Area CSS
=================================================*/
.skin-care-features-card {
  background-color: #EFF8FB;
  padding: 35px 25px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  margin-bottom: 25px;
}

.skin-care-features-card .features-title {
  position: relative;
  padding-left: 100px;
  padding-top: 28px;
  margin-bottom: 45px;
}

.skin-care-features-card .features-title .icon-image {
  display: inline-block;
  height: 80px;
  width: 80px;
  line-height: 80px;
  text-align: center;
  background-color: #ffffff;
  border-radius: 50%;
  position: absolute;
  left: 0;
  top: 0;
}

.skin-care-features-card .features-title .icon-image img {
  max-width: 50px;
}

.skin-care-features-card .features-title h3 {
  font-size: 24px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
}

.skin-care-features-card .features-title h3 a {
  color: #002345;
}

.skin-care-features-card p {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.skin-care-features-card:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
  background-color: #1DBFCC;
}

.skin-care-features-card:hover .features-title h3 a {
  color: #ffffff;
}

.skin-care-features-card:hover p {
  color: #ffffff;
}

/*================================================
Skin Care About Area CSS
=================================================*/
.skin-care-about-image {
  position: relative;
}

.skin-care-about-image .skin-care-fun-fact {
  position: absolute;
  left: 50px;
  right: 50px;
  bottom: 50px;
  background: rgba(29, 191, 204, 0.9);
  padding: 50px;
}

.skin-care-about-image .skin-care-fun-fact .fun-fact h3 {
  font-size: 40px;
  margin-bottom: 8px;
  color: #ffffff;
}

.skin-care-about-image .skin-care-fun-fact .fun-fact h3 .odometer {
  font-family: #1DBFCC;
}

.skin-care-about-image .skin-care-fun-fact .fun-fact h3 .small-text {
  position: relative;
  top: 2px;
  left: -2px;
}

.skin-care-about-image .skin-care-fun-fact .fun-fact p {
  color: #ffffff;
}

.skin-care-about-content {
  padding-left: 45px;
}

.skin-care-about-content span {
  color: #1DBFCC;
  display: inline-block;
  margin-bottom: 15px;
}

.skin-care-about-content h3 {
  font-size: 40px;
  margin-bottom: 15px;
  font-family: "Heebo", sans-serif;
  line-height: 1.4;
}

.skin-care-about-content p {
  margin-bottom: 0;
  color: #486683;
}

.skin-care-about-content .about-btn-with-info {
  padding: 0;
  margin-top: 25px;
  margin-bottom: 0;
}

.skin-care-about-content .about-btn-with-info li {
  display: inline-block;
  list-style-type: none;
  margin-right: 20px;
  position: relative;
  padding-left: 50px;
}

.skin-care-about-content .about-btn-with-info li:first-child {
  padding-left: 0;
}

.skin-care-about-content .about-btn-with-info li:last-child {
  margin-right: 0;
}

.skin-care-about-content .about-btn-with-info li .default-btn {
  background-color: #1DBFCC;
  color: #ffffff;
}

.skin-care-about-content .about-btn-with-info li .default-btn:hover {
  background-color: #06a3da;
}

.skin-care-about-content .about-btn-with-info li i {
  display: inline-block;
  height: 35px;
  width: 35px;
  line-height: 35px;
  background-color: #F1F7F8;
  border: 1px solid #1DBFCC;
  font-size: 18px;
  text-align: center;
  color: #1DBFCC;
  border-radius: 50px;
  position: absolute;
  left: 0;
  top: -5px;
}

.skin-care-about-content .about-btn-with-info li a {
  font-size: 18px;
  color: #002345;
  font-family: "Heebo", sans-serif;
  font-weight: 500;
}

/*================================================
Skin Care Services Area CSS
=================================================*/
.skin-care-services-area {
  background-color: #EFF8FB;
}

.skin-care-services-area .section-title span {
  color: #1DBFCC;
}

.skin-care-services-card {
  margin-bottom: 25px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.skin-care-services-card .services-image {
  position: relative;
}

.skin-care-services-card .services-image a img {
  display: inline-block;
}

.skin-care-services-card .services-image .icon {
  position: absolute;
  bottom: -30px;
  left: 25px;
}

.skin-care-services-card .services-image .icon i {
  display: inline-block;
  height: 100px;
  width: 100px;
  line-height: 100px;
  font-size: 50px;
  background-color: #1DBFCC;
  color: #ffffff;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  text-align: center;
}

.skin-care-services-card .services-content {
  padding: 60px 25px 30px;
  background-color: #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.skin-care-services-card .services-content h3 {
  font-size: 24px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
  margin-bottom: 18px;
}

.skin-care-services-card .services-content h3 a {
  color: #002345;
}

.skin-care-services-card .services-content p {
  margin-bottom: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  color: #486683;
}

.skin-care-services-card:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

.skin-care-services-card:hover .services-image .icon i {
  background-color: #ffffff;
  color: #1DBFCC;
}

.skin-care-services-card:hover .services-content {
  background-color: #1DBFCC;
}

.skin-care-services-card:hover .services-content h3 a {
  color: #ffffff;
}

.skin-care-services-card:hover .services-content p {
  color: #ffffff;
}

/*================================================
Skin Care Dry Area CSS
=================================================*/
.skin-care-dry-content span {
  color: #1DBFCC;
  display: inline-block;
  margin-bottom: 15px;
}

.skin-care-dry-content h3 {
  font-size: 40px;
  margin-bottom: 15px;
  font-family: "Heebo", sans-serif;
  line-height: 1.4;
}

.skin-care-dry-content p {
  margin-bottom: 0;
  color: #486683;
}

.skin-care-dry-content .list {
  padding: 0;
  margin-top: 30px;
  margin-bottom: 0;
}

.skin-care-dry-content .list li {
  list-style-type: none;
  color: #486683;
  margin-bottom: 20px;
  position: relative;
  padding-left: 32px;
}

.skin-care-dry-content .list li:last-child {
  margin-bottom: 0;
}

.skin-care-dry-content .list li i {
  position: absolute;
  left: 0;
  top: 0;
  color: #1DBFCC;
  display: inline-block;
  height: 22px;
  width: 22px;
  line-height: 22px;
  background-color: #1DBFCC;
  color: #ffffff;
  text-align: center;
  border-radius: 30px;
}

.skin-care-dry-content .dry-list {
  padding: 0;
  margin-top: 30px;
  margin-bottom: 0;
}

.skin-care-dry-content .dry-list li {
  list-style-type: none;
  display: inline-block;
  margin-right: -20px;
}

.skin-care-dry-content .dry-list li img {
  max-width: 50px;
  border: 4px solid #1DBFCC;
  border-radius: 50px;
}

.skin-care-dry-content .dry-list li.title {
  margin-left: 30px;
  margin-right: 0;
  font-size: 16px;
  font-weight: 500;
  vertical-align: middle;
  color: #002345;
}

/*================================================
Skin Care Appointment Area CSS
=================================================*/
.skin-care-appointment-area {
  overflow: hidden;
}

.skin-care-appointment-area .container-fluid {
  padding-left: 0;
  padding-right: 0;
}

.skin-care-appointment-area .row {
  background-color: #002345;
}

.skin-care-appointment-image {
  background-image: url(../images/skin-care/appointment/appointment.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  height: 100%;
  width: 100%;
}

.skin-care-appointment-form {
  padding: 100px;
}

.skin-care-appointment-form h4 {
  font-size: 40px;
  margin-bottom: 30px;
  color: #ffffff;
}

.skin-care-appointment-form h4 i {
  margin-right: 5px;
  color: #1DBFCC;
}

.skin-care-appointment-form form .form-group {
  margin-bottom: 25px;
}

.skin-care-appointment-form form .form-group .form-control {
  display: block;
  width: 100%;
  height: 60px;
  outline: 0;
  background-color: #ffffff;
  border: 1px solid #eeeeee;
  border-radius: 0;
  padding: 15px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  font-size: 14px;
}

.skin-care-appointment-form form .form-group .form-control::-webkit-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.skin-care-appointment-form form .form-group .form-control:-ms-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.skin-care-appointment-form form .form-group .form-control::-ms-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.skin-care-appointment-form form .form-group .form-control::placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.skin-care-appointment-form form .form-group .form-control:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
  border: 1px solid #06a3da;
}

.skin-care-appointment-form form .form-group .form-control:focus::-webkit-input-placeholder {
  color: transparent;
}

.skin-care-appointment-form form .form-group .form-control:focus:-ms-input-placeholder {
  color: transparent;
}

.skin-care-appointment-form form .form-group .form-control:focus::-ms-input-placeholder {
  color: transparent;
}

.skin-care-appointment-form form .form-group .form-control:focus::placeholder {
  color: transparent;
}

.skin-care-appointment-form form .form-group textarea.form-control {
  min-height: 120px;
}

.skin-care-appointment-form form .form-group .nice-select {
  background-color: #ffffff;
  border: 1px solid #eeeeee;
  border-radius: 0;
  font-size: 14px;
  height: 60px;
  line-height: 60px;
  color: #486683;
  padding-left: 15px;
  padding-right: 20px;
}

.skin-care-appointment-form form .form-group .nice-select::after {
  border-color: #486683;
  height: 8px;
  width: 8px;
  right: 15px;
  margin-top: -5px;
}

.skin-care-appointment-form form .form-group .nice-select .list {
  background-color: #ffffff;
  -webkit-box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
          box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
  border-radius: 0;
  height: 200px;
  overflow-y: scroll;
  margin-top: 0;
  margin-bottom: 0;
}

.skin-care-appointment-form form .form-group .nice-select .list .option {
  line-height: 40px;
  min-height: 40px;
  color: #6a6c72;
  padding-left: 15px;
  padding-top: 5px;
  padding-right: 15px;
  display: inherit;
  margin-right: 0;
}

.skin-care-appointment-form form .form-group .nice-select .list .option.selected {
  background-color: #06a3da !important;
  color: #ffffff;
  font-weight: normal;
}

.skin-care-appointment-form form .default-btn {
  background-color: #1DBFCC;
  border: none;
}

.skin-care-appointment-form form .default-btn:hover {
  background-color: #06a3da;
}

/*================================================
Skin Care Review Area CSS
=================================================*/
.skin-care-review-area .section-title-warp .sub-title {
  background-color: #1DBFCC;
  color: #ffffff;
}

.skin-care-review-area .section-warp-btn .default-btn {
  background-color: #1DBFCC;
}

.skin-care-review-area .section-warp-btn .default-btn:hover {
  background-color: #06a3da;
}

.skin-care-review-card {
  background-color: #EFF8FB;
  padding: 35px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.skin-care-review-card .review-info {
  position: relative;
  padding-left: 85px;
  margin-bottom: 25px;
}

.skin-care-review-card .review-info img {
  position: absolute;
  left: 0;
  top: 0;
  width: auto;
  display: inline-block;
  max-width: 65px;
}

.skin-care-review-card .review-info h3 {
  font-size: 24px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
  margin-bottom: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.skin-care-review-card .review-info span {
  font-size: 15px;
  color: #1DBFCC;
  display: inline-block;
  margin-top: 12px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.skin-care-review-card p {
  color: #486683;
  margin-bottom: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.skin-care-review-card .rating {
  padding: 0;
  margin-top: 20px;
  margin-bottom: 0;
}

.skin-care-review-card .rating li {
  list-style-type: none;
  margin-right: 2px;
  display: inline-block;
}

.skin-care-review-card .rating li:last-child {
  margin-right: 0;
}

.skin-care-review-card .rating li i {
  color: #FFC806;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.skin-care-review-card .icon-quote {
  position: absolute;
  right: 45px;
  bottom: 30px;
}

.skin-care-review-card .icon-quote i {
  font-size: 50px;
  color: #1DBFCC;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.skin-care-review-card:hover {
  background-color: #1DBFCC;
}

.skin-care-review-card:hover .review-info h3 {
  color: #ffffff;
}

.skin-care-review-card:hover .review-info span {
  color: #ffffff;
}

.skin-care-review-card:hover p {
  color: #ffffff;
}

.skin-care-review-card:hover .rating li i {
  color: #ffffff;
}

.skin-care-review-card:hover .icon-quote i {
  color: #ffffff;
}

.skin-care-review-slides.owl-theme .owl-dots .owl-dot span {
  width: 10px;
  height: 10px;
  background-color: #1DBFCC;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 50%;
  position: relative;
  margin-top: 0;
  margin-bottom: 0;
  margin: 0 10px;
}

.skin-care-review-slides.owl-theme .owl-dots .owl-dot:hover span, .skin-care-review-slides.owl-theme .owl-dots .owl-dot.active span {
  background: #1DBFCC;
  -webkit-transform: scale(1.5);
          transform: scale(1.5);
}

.skin-care-review-slides.owl-theme .owl-nav.disabled + .owl-dots {
  margin-top: 30px;
}

/*================================================
Skin Care Before and After Area CSS
=================================================*/
.skin-care-before-after-area {
  background-color: #EFF8FB;
  overflow: hidden;
}

.skin-care-before-after-area .section-title span {
  color: #1DBFCC;
}

.skin-care-before-after-area .container-fluid {
  padding-left: 0;
  padding-right: 0;
}

.skin-care-before-after-card {
  -webkit-transform: scale(0.8);
          transform: scale(0.8);
}

.skin-care-before-after-slides.owl-theme .owl-nav {
  margin-top: 30px;
}

.skin-care-before-after-slides.owl-theme .owl-nav [class*=owl-] {
  color: #002345;
  margin: 0 10px;
  padding: 0;
  background: transparent;
  border-radius: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  font-size: 22px;
}

.skin-care-before-after-slides.owl-theme .owl-nav [class*=owl-]:hover {
  color: #1DBFCC;
}

.skin-care-before-after-slides .owl-item.active .skin-care-before-after-card {
  -webkit-transform: scale(1);
          transform: scale(1);
}

/*================================================
Skin Care Blog Area CSS
=================================================*/
.skin-care-blog-area .section-title-warp .sub-title {
  background-color: #1DBFCC;
  color: #ffffff;
}

.skin-care-blog-area .section-warp-btn .default-btn {
  background-color: #1DBFCC;
}

.skin-care-blog-area .section-warp-btn .default-btn:hover {
  background-color: #06a3da;
}

.skin-care-blog-card {
  margin-bottom: 25px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.skin-care-blog-card .blog-image {
  position: relative;
}

.skin-care-blog-card .blog-image a img {
  display: inline-block;
}

.skin-care-blog-card .blog-image .tag {
  position: absolute;
  left: 20px;
  bottom: -20px;
}

.skin-care-blog-card .blog-image .tag a {
  display: inline-block;
  background-color: #1DBFCC;
  color: #ffffff;
  padding: 10px 15px;
  border-radius: 30px;
}

.skin-care-blog-card .blog-content {
  padding-top: 45px;
  padding-left: 20px;
}

.skin-care-blog-card .blog-content .entry-meta {
  padding: 0;
  margin-bottom: 15px;
}

.skin-care-blog-card .blog-content .entry-meta li {
  display: inline-block;
  list-style-type: none;
  font-size: 14px;
  color: #486683;
  margin-right: 10px;
  position: relative;
  padding-left: 22px;
}

.skin-care-blog-card .blog-content .entry-meta li:last-child {
  margin-right: 0;
}

.skin-care-blog-card .blog-content .entry-meta li a {
  color: #486683;
}

.skin-care-blog-card .blog-content .entry-meta li a:hover {
  color: #1DBFCC;
}

.skin-care-blog-card .blog-content .entry-meta li i {
  color: #1DBFCC;
  position: absolute;
  left: 0;
  top: 2.8px;
}

.skin-care-blog-card .blog-content h3 {
  font-size: 24px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
  line-height: 1.5;
}

.skin-care-blog-card .blog-content h3 a {
  color: #002345;
}

.skin-care-blog-card .blog-content h3 a:hover {
  color: #1DBFCC;
}

.skin-care-blog-card:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

/*================================================
Skin Care Partner Area CSS
=================================================*/
.skin-care-partner-inner-box {
  background-color: #002345;
  padding: 100px 50px;
  position: relative;
  z-index: 1;
  overflow: hidden;
  margin-bottom: -120px;
}

.skin-care-partner-card {
  text-align: center;
}

.skin-care-partner-card a img {
  display: inline-block;
  margin: auto;
}

/*================================================
Skin Care Footer Area CSS
=================================================*/
.skin-care-footer-area {
  background-color: #EFF8FB;
  padding-top: 220px;
}

.skin-care-footer-widget {
  margin-bottom: 25px;
}

.skin-care-footer-widget h2 {
  font-size: 35px;
  margin-bottom: 25px;
}

.skin-care-footer-widget h2 a {
  color: #1DBFCC;
}

.skin-care-footer-widget h3 {
  font-size: 24px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
  margin-bottom: 25px;
  color: #002345;
}

.skin-care-footer-widget .info-list {
  padding: 0;
  margin-bottom: 0;
}

.skin-care-footer-widget .info-list li {
  list-style-type: none;
  margin-bottom: 18px;
  color: #486683;
  font-family: "Nunito Sans", sans-serif;
}

.skin-care-footer-widget .info-list li:last-child {
  margin-bottom: 0;
}

.skin-care-footer-widget .info-list li span {
  color: #1DBFCC;
}

.skin-care-footer-widget .info-list li a {
  color: #486683;
}

.skin-care-footer-widget .info-list li a:hover {
  letter-spacing: 1px;
}

.skin-care-footer-widget .share-link {
  padding: 0;
  margin-top: 20px;
  margin-bottom: 0;
}

.skin-care-footer-widget .share-link li {
  display: inline-block;
  margin-right: 10px;
}

.skin-care-footer-widget .share-link li:last-child {
  margin-right: 0;
}

.skin-care-footer-widget .share-link li span {
  font-size: 20px;
  color: #486683;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
}

.skin-care-footer-widget .share-link li a i {
  color: #486683;
  font-size: 15px;
  position: relative;
  top: 1px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  display: inline-block;
  height: 25px;
  width: 25px;
  line-height: 22px;
  border: 2px solid #486683;
  text-align: center;
  border-radius: 5px;
}

.skin-care-footer-widget .share-link li a i:hover {
  color: #1DBFCC;
  border: 2px solid #1DBFCC;
  -webkit-transform: translateY(-2px);
          transform: translateY(-2px);
}

.skin-care-footer-widget .quick-links {
  padding: 0;
  margin-bottom: 0;
}

.skin-care-footer-widget .quick-links li {
  list-style-type: none;
  margin-bottom: 15px;
  position: relative;
  font-family: "Nunito Sans", sans-serif;
  padding-left: 22px;
}

.skin-care-footer-widget .quick-links li:last-child {
  margin-bottom: 0;
}

.skin-care-footer-widget .quick-links li a {
  color: #486683;
}

.skin-care-footer-widget .quick-links li a:hover {
  letter-spacing: 1px;
}

.skin-care-footer-widget .quick-links li i {
  color: #1DBFCC;
  position: absolute;
  left: 0;
  top: 4.5px;
}

.skin-care-footer-widget .newsletter-form p {
  color: #486683;
  font-family: "Nunito Sans", sans-serif;
  margin-bottom: 0;
}

.skin-care-footer-widget .newsletter-form .form-group {
  margin-top: 30px;
  position: relative;
}

.skin-care-footer-widget .newsletter-form .form-group .input-newsletter {
  background-color: transparent;
  border: none;
  border-bottom: 1px solid #C4C4C4;
  outline: 0;
  color: #486683;
  padding: 0 0 20px;
  width: 100%;
  font-size: 14px;
  font-weight: 400;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.skin-care-footer-widget .newsletter-form .form-group .input-newsletter::-webkit-input-placeholder {
  color: #486683;
}

.skin-care-footer-widget .newsletter-form .form-group .input-newsletter:-ms-input-placeholder {
  color: #486683;
}

.skin-care-footer-widget .newsletter-form .form-group .input-newsletter::-ms-input-placeholder {
  color: #486683;
}

.skin-care-footer-widget .newsletter-form .form-group .input-newsletter::placeholder {
  color: #486683;
}

.skin-care-footer-widget .newsletter-form .form-group .input-newsletter:focus {
  border-bottom: 1px solid #1DBFCC;
}

.skin-care-footer-widget .newsletter-form .form-group button {
  padding: 0;
  border: none;
  background-color: transparent;
  font-size: 20px;
  color: #1DBFCC;
  position: absolute;
  right: 0;
  bottom: 15px;
}

.skin-care-footer-widget .newsletter-form .validation-danger {
  color: red;
  font-size: 14px;
  margin-top: 15px;
}

.skin-care-copyright-area {
  margin-top: 75px;
}

.skin-care-copyright-area .copyright-area-content {
  text-align: center;
  border-top: 1px solid #CEDBE3;
  padding-top: 30px;
  padding-bottom: 30px;
}

.skin-care-copyright-area .copyright-area-content p {
  color: #486683;
  font-size: 15px;
  font-family: "Nunito Sans", sans-serif;
}

.skin-care-copyright-area .copyright-area-content p a {
  display: inline-block;
  font-weight: 600;
  color: #1DBFCC;
}

.skin-care-copyright-area .copyright-area-content p a:hover {
  color: #1DBFCC;
}

/*================================================
Eye Care Banner Area CSS
=================================================*/
.eye-care-banner-area {
  overflow: hidden;
  background: -webkit-gradient(linear, left top, left bottom, from(#EFEFFB), to(#FAFAFE));
  background: linear-gradient(180deg, #EFEFFB 0%, #FAFAFE 100%);
  padding-top: 140px;
}

.eye-care-banner-area .container-fluid {
  padding-left: 30px;
  padding-right: 0;
}

.eye-care-banner-content {
  background: rgba(0, 35, 69, 0.9);
  padding: 50px;
  position: relative;
  margin-right: -145px;
}

.eye-care-banner-content .sub-title {
  color: #1DBFCC;
  font-weight: 600;
  font-size: 16px;
  font-family: "Nunito Sans", sans-serif;
  display: block;
  margin-bottom: 18px;
}

.eye-care-banner-content h1 {
  font-size: 70px;
  font-family: "Heebo", sans-serif;
  color: #ffffff;
  margin-bottom: 20px;
}

.eye-care-banner-content p {
  color: #ffffff;
  margin-bottom: 0;
}

.eye-care-banner-content .banner-btn-with-info {
  padding: 0;
  margin-top: 30px;
  margin-bottom: 0;
}

.eye-care-banner-content .banner-btn-with-info li {
  list-style-type: none;
  display: inline-block;
  margin-right: -20px;
}

.eye-care-banner-content .banner-btn-with-info li img {
  max-width: 50px;
  border: 4px solid #1DBFCC;
  border-radius: 50px;
}

.eye-care-banner-content .banner-btn-with-info li.banner-btn {
  margin-right: 10px;
}

.eye-care-banner-content .banner-btn-with-info li.banner-btn .default-btn {
  background-color: #1DBFCC;
}

.eye-care-banner-content .banner-btn-with-info li.banner-btn .default-btn:hover {
  background-color: #06a3da;
}

.eye-care-banner-content .banner-btn-with-info li.title {
  margin-left: 30px;
  margin-right: 0;
  font-size: 16px;
  font-weight: 500;
  vertical-align: middle;
  color: #ffffff;
}

/*================================================
Eye Care Features Area CSS
=================================================*/
.col-lg-4:last-child .eye-care-features-card::before {
  display: none;
}

.eye-care-features-card {
  text-align: center;
  margin-bottom: 25px;
  position: relative;
}

.eye-care-features-card::before {
  content: "";
  position: absolute;
  top: 0;
  right: -20px;
  width: 1px;
  height: 100%;
  background-color: #D7E2F9;
}

.eye-care-features-card .features-image {
  margin-bottom: 25px;
}

.eye-care-features-card .features-content h3 {
  margin-bottom: 15px;
  font-size: 24px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
}

.eye-care-features-card .features-content h3 a {
  color: #002345;
}

.eye-care-features-card .features-content p {
  margin-bottom: 0;
  color: #486683;
}

/*================================================
Eye Care About Area CSS
=================================================*/
.eye-care-about-content {
  padding-left: 45px;
}

.eye-care-about-content span {
  color: #1DBFCC;
  display: inline-block;
  margin-bottom: 15px;
}

.eye-care-about-content h3 {
  font-size: 40px;
  margin-bottom: 15px;
  font-family: "Heebo", sans-serif;
  line-height: 1.4;
}

.eye-care-about-content p {
  margin-bottom: 0;
  color: #486683;
  position: relative;
  padding-left: 10px;
}

.eye-care-about-content p::before {
  position: absolute;
  content: "";
  left: 0;
  top: 0;
  height: 100%;
  width: 2px;
  background-color: #1DBFCC;
}

.eye-care-about-content .list {
  padding: 0;
  margin-top: 30px;
  margin-bottom: 0;
}

.eye-care-about-content .list li {
  list-style-type: none;
  color: #486683;
  margin-bottom: 20px;
  position: relative;
  padding-left: 32px;
}

.eye-care-about-content .list li:last-child {
  margin-bottom: 0;
}

.eye-care-about-content .list li i {
  position: absolute;
  left: 0;
  top: 0;
  color: #1DBFCC;
  display: inline-block;
  height: 22px;
  width: 22px;
  line-height: 22px;
  background-color: #1DBFCC;
  color: #ffffff;
  text-align: center;
  border-radius: 30px;
}

.eye-care-about-content .about-btn {
  margin-top: 30px;
}

.eye-care-about-content .about-btn .default-btn {
  background-color: #1DBFCC;
}

.eye-care-about-content .about-btn .default-btn:hover {
  background-color: #06a3da;
}

/*================================================
Eye Care Services Area CSS
=================================================*/
.eye-care-services-area {
  background-image: url(../images/eye-care/services/services-bg.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  position: relative;
  z-index: 1;
}

.eye-care-services-area::before {
  position: absolute;
  content: "";
  left: 0;
  right: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background-color: #1DBFCC;
  z-index: -1;
  opacity: 95%;
}

.eye-care-services-area .section-title span {
  color: #ffffff;
}

.eye-care-services-area .section-title h2 {
  color: #ffffff;
}

.eye-care-services-card {
  background-color: #F7F7FD;
  padding: 35px;
  margin-bottom: 25px;
  position: relative;
}

.eye-care-services-card .icon {
  margin-bottom: 25px;
}

.eye-care-services-card .icon i {
  display: inline-block;
  height: 100px;
  width: 100px;
  line-height: 100px;
  background-color: #ffffff;
  text-align: center;
  font-size: 65px;
  color: #1DBFCC;
  border-radius: 50px;
}

.eye-care-services-card h3 {
  font-size: 24px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
  margin-bottom: 15px;
}

.eye-care-services-card h3 a {
  color: #002345;
}

.eye-care-services-card h3 a:hover {
  color: #1DBFCC;
}

.eye-care-services-card p {
  color: #486683;
  margin-bottom: 20px;
}

.eye-care-services-card .default-btn {
  background-color: #1DBFCC;
}

.eye-care-services-card .default-btn:hover {
  background-color: #06a3da;
}

.eye-care-services-card .number {
  font-size: 80px;
  color: #002345;
  font-weight: bold;
  font-family: "Heebo", sans-serif;
  opacity: 10%;
  position: absolute;
  right: 20px;
  top: 5px;
}

.eye-care-services-slides.owl-theme .owl-nav {
  margin-top: 0;
  -webkit-transition: 1s;
  transition: 1s;
  opacity: 0;
  visibility: hidden;
  line-height: .01;
}

.eye-care-services-slides.owl-theme .owl-nav [class*=owl-] {
  color: #222222;
  margin: 0;
  position: absolute;
  left: -70px;
  top: 45%;
  -webkit-transform: translateY(-45%);
          transform: translateY(-45%);
  padding: 0;
  background: #ffffff;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  width: 55px;
  height: 55px;
  line-height: 60px;
  text-align: center;
  font-size: 28px;
}

.eye-care-services-slides.owl-theme .owl-nav [class*=owl-].owl-next {
  left: auto;
  right: -70px;
}

.eye-care-services-slides.owl-theme .owl-nav [class*=owl-]:hover {
  color: #ffffff;
  background-color: #06a3da;
}

.eye-care-services-slides.owl-theme:hover .owl-nav {
  opacity: 1;
  visibility: visible;
}

.eye-care-all-services-link {
  text-align: center;
}

.eye-care-all-services-link a {
  color: #ffffff;
  border-bottom: 1px solid #ffffff;
}

/*================================================
Eye Care Solutions Area CSS
=================================================*/
.eye-care-solutions-area .section-title span {
  color: #1DBFCC;
}

.eye-care-solutions-content h3 {
  font-size: 24px;
  color: #002345;
  font-family: "Heebo", sans-serif;
  font-weight: 500;
  margin-bottom: 15px;
}

.eye-care-solutions-content p {
  color: #486683;
  margin-bottom: 0;
}

.eye-care-solutions-content .solutions-inner-content {
  margin-top: 25px;
}

.eye-care-solutions-content .solutions-inner-content h4 {
  font-size: 20px;
  color: #002345;
  font-family: "Heebo", sans-serif;
  font-weight: 500;
  margin-bottom: 15px;
}

.eye-care-solutions-content .solutions-inner-content p {
  color: #486683;
  margin-bottom: 0;
}

.eye-care-solutions-content .solutions-inner-content.bg-F7F7FD {
  background-color: #F7F7FD;
  padding: 25px;
  border-left: 2px solid #1DBFCC;
}

.eye-care-solutions-image {
  padding-left: 25px;
}

/*================================================
Eye Care Team Area CSS
=================================================*/
.eye-care-team-area {
  background-color: #F7F7FD;
}

.eye-care-team-area .section-title-warp .sub-title {
  background-color: #1DBFCC;
  color: #ffffff;
}

.eye-care-team-area .section-warp-btn .default-btn {
  background-color: #1DBFCC;
}

.eye-care-team-area .section-warp-btn .default-btn:hover {
  background-color: #06a3da;
}

.eye-care-team-card .team-image {
  position: relative;
  text-align: center;
}

.eye-care-team-card .team-image a img {
  display: inline-block;
}

.eye-care-team-card .team-image .share-link {
  padding: 0;
  bottom: 0;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ffffff;
  border-radius: 10px;
  padding: 10px 25px;
  max-width: 200px;
  margin: auto;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.eye-care-team-card .team-image .share-link li {
  list-style-type: none;
  display: inline-block;
  margin-right: 8px;
}

.eye-care-team-card .team-image .share-link li:last-child {
  margin-right: 0;
}

.eye-care-team-card .team-image .share-link li a i {
  color: #002345;
  font-size: 15px;
  position: relative;
  top: 1px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  display: inline-block;
  height: 25px;
  width: 25px;
  line-height: 22px;
  border: 2px solid #002345;
  text-align: center;
  border-radius: 5px;
}

.eye-care-team-card .team-image .share-link li a i:hover {
  color: #1DBFCC;
  border: 2px solid #1DBFCC;
  -webkit-transform: translateY(-2px);
          transform: translateY(-2px);
}

.eye-care-team-card .team-content {
  margin-top: 25px;
  text-align: center;
}

.eye-care-team-card .team-content h3 {
  font-size: 24px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
}

.eye-care-team-card .team-content h3 a {
  color: #002345;
}

.eye-care-team-card .team-content h3 a:hover {
  color: #1DBFCC;
}

.eye-care-team-card .team-content span {
  font-size: 15px;
  color: #486683;
}

.eye-care-team-card:hover .team-image .share-link {
  bottom: 35px;
  opacity: 1;
  visibility: visible;
}

.eye-care-team-slides.owl-theme .owl-dots .owl-dot span {
  width: 10px;
  height: 10px;
  background-color: #1DBFCC;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 50%;
  position: relative;
  margin-top: 0;
  margin-bottom: 0;
  margin: 0 10px;
}

.eye-care-team-slides.owl-theme .owl-dots .owl-dot:hover span, .eye-care-team-slides.owl-theme .owl-dots .owl-dot.active span {
  background: #1DBFCC;
  -webkit-transform: scale(1.5);
          transform: scale(1.5);
}

.eye-care-team-slides.owl-theme .owl-nav.disabled + .owl-dots {
  margin-top: 30px;
}

/*================================================
Eye Care Testimonials Area CSS
=================================================*/
.eye-care-testimonials-area {
  overflow: hidden;
}

.eye-care-testimonials-area .container-fluid {
  padding-left: 0;
  padding-right: 0;
}

.eye-care-testimonials-area .row {
  background-color: #1DBFCC;
}

.eye-care-testimonials-image {
  background-image: url(../images/eye-care/testimonials/testimonials.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  height: 100%;
  width: 100%;
}

.eye-care-testimonials-content-box {
  padding-top: 100px;
  padding-bottom: 100px;
}

.eye-care-testimonials-content-box .content {
  margin-left: 15px;
}

.eye-care-testimonials-content-box .content span {
  color: #ffffff;
  font-family: "Heebo", sans-serif;
  display: inline-block;
  margin-bottom: 15px;
}

.eye-care-testimonials-content-box .content h3 {
  font-size: 40px;
  margin-bottom: 0;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
  color: #ffffff;
}

.eye-care-review-card {
  background-color: #ffffff;
  padding: 50px 65px;
}

.eye-care-review-card .review-info {
  position: relative;
  padding-left: 85px;
  margin-bottom: 20px;
}

.eye-care-review-card .review-info img {
  position: absolute;
  left: 0;
  top: 0;
  width: auto;
  display: inline-block;
  max-width: 65px;
}

.eye-care-review-card .review-info h3 {
  font-size: 24px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
  margin-bottom: 0;
  color: #002345;
}

.eye-care-review-card .review-info span {
  font-size: 15px;
  color: #1DBFCC;
  display: inline-block;
  margin-top: 12px;
}

.eye-care-review-card p {
  color: #486683;
  margin-bottom: 0;
}

.eye-care-review-card .rating {
  padding: 0;
  margin-top: 20px;
  margin-bottom: 0;
}

.eye-care-review-card .rating li {
  list-style-type: none;
  margin-right: 2px;
  display: inline-block;
}

.eye-care-review-card .rating li:last-child {
  margin-right: 0;
}

.eye-care-review-card .rating li i {
  color: #FFC806;
}

.eye-care-review-card .icon-quote {
  position: absolute;
  right: 50px;
  top: 50px;
}

.eye-care-review-card .icon-quote i {
  font-size: 50px;
  color: #1DBFCC;
}

.eye-care-review-slides {
  position: relative;
  margin-top: 30px;
  margin-left: -100px;
}

.eye-care-review-slides.owl-theme .owl-dots .owl-dot span {
  width: 10px;
  height: 10px;
  background-color: #1DBFCC;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 50%;
  position: relative;
  margin-top: 0;
  margin-bottom: 0;
  margin: 0 10px;
}

.eye-care-review-slides.owl-theme .owl-dots .owl-dot:hover span, .eye-care-review-slides.owl-theme .owl-dots .owl-dot.active span {
  background: #1DBFCC;
  -webkit-transform: scale(1.5);
          transform: scale(1.5);
}

.eye-care-review-slides.owl-theme .owl-nav.disabled + .owl-dots {
  margin-top: 0;
  position: absolute;
  right: 45px;
  bottom: 45px;
}

/*================================================
Eye Care Testimonials Area CSS
=================================================*/
.eye-care-treatment-content {
  padding-left: 25px;
}

.eye-care-treatment-content span {
  color: #1DBFCC;
  display: inline-block;
  margin-bottom: 15px;
}

.eye-care-treatment-content h3 {
  font-size: 40px;
  margin-bottom: 15px;
  font-family: "Heebo", sans-serif;
  line-height: 1.4;
}

.eye-care-treatment-content p {
  color: #486683;
  margin-bottom: 0;
}

.eye-care-treatment-content .treatment-inner-content {
  background-color: #F7F7FD;
  padding: 25px 25px 25px 82px;
  position: relative;
  margin-top: 25px;
}

.eye-care-treatment-content .treatment-inner-content .number {
  display: inline-block;
  height: 45px;
  width: 45px;
  line-height: 45px;
  background-color: #1DBFCC;
  color: #ffffff;
  font-size: 20px;
  text-align: center;
  font-weight: bold;
  font-family: "Heebo", sans-serif;
  border-radius: 50px;
  position: absolute;
  left: 25px;
  top: 30px;
}

.eye-care-treatment-content .treatment-inner-content p {
  color: #486683;
  font-size: 15px;
}

/*================================================
Eye Care Blog Area CSS
=================================================*/
.eye-care-blog-area .section-title-warp .sub-title {
  background-color: #1DBFCC;
  color: #ffffff;
}

.eye-care-blog-area .section-warp-btn .default-btn {
  background-color: #1DBFCC;
}

.eye-care-blog-area .section-warp-btn .default-btn:hover {
  background-color: #06a3da;
}

.eye-care-blog-card {
  margin-bottom: 25px;
  border: 1px solid #DDDDDD;
  padding: 25px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.eye-care-blog-card .blog-content .tag {
  margin-bottom: 20px;
}

.eye-care-blog-card .blog-content .tag a {
  display: inline-block;
  background-color: #1DBFCC;
  color: #ffffff;
  padding: 10px 15px;
  border-radius: 30px;
}

.eye-care-blog-card .blog-content .entry-meta {
  padding: 0;
  margin-bottom: 15px;
}

.eye-care-blog-card .blog-content .entry-meta li {
  display: inline-block;
  list-style-type: none;
  font-size: 14px;
  color: #486683;
  margin-right: 10px;
  position: relative;
  padding-left: 22px;
}

.eye-care-blog-card .blog-content .entry-meta li:last-child {
  margin-right: 0;
}

.eye-care-blog-card .blog-content .entry-meta li a {
  color: #486683;
}

.eye-care-blog-card .blog-content .entry-meta li a:hover {
  color: #1DBFCC;
}

.eye-care-blog-card .blog-content .entry-meta li i {
  color: #1DBFCC;
  position: absolute;
  left: 0;
  top: 2.8px;
}

.eye-care-blog-card .blog-content h3 {
  font-size: 22px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
  line-height: 1.5;
}

.eye-care-blog-card .blog-content h3 a {
  color: #002345;
}

.eye-care-blog-card .blog-content h3 a:hover {
  color: #1DBFCC;
}

.eye-care-blog-card .blog-content p {
  color: #486683;
}

.eye-care-blog-card:hover {
  background-color: #F7F7FD;
  border: 1px solid #F7F7FD;
}

/*================================================
Newsletter Area CSS
=================================================*/
.newsletter-inner-box {
  background-color: #1DBFCC;
  padding: 50px;
  margin-bottom: -90px;
  position: relative;
}

.newsletter-inner-box .newsletter-content {
  max-width: 450px;
}

.newsletter-inner-box .newsletter-content h3 {
  font-size: 24px;
  color: #ffffff;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
  margin-bottom: 15px;
}

.newsletter-inner-box .newsletter-content p {
  color: #ffffff;
}

.newsletter-inner-box .newsletter-form {
  position: relative;
}

.newsletter-inner-box .newsletter-form .input-newsletter {
  display: block;
  width: 100%;
  background-color: #ffffff;
  border: 1px solid #ffffff;
  height: 60px;
  padding: 20px;
  border-radius: 0;
  outline: 0;
  color: #486683;
  font-size: 15px;
  font-weight: 400;
}

.newsletter-inner-box .newsletter-form .input-newsletter::-webkit-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.newsletter-inner-box .newsletter-form .input-newsletter:-ms-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.newsletter-inner-box .newsletter-form .input-newsletter::-ms-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.newsletter-inner-box .newsletter-form .input-newsletter::placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.newsletter-inner-box .newsletter-form .input-newsletter:focus::-webkit-input-placeholder {
  color: transparent;
}

.newsletter-inner-box .newsletter-form .input-newsletter:focus:-ms-input-placeholder {
  color: transparent;
}

.newsletter-inner-box .newsletter-form .input-newsletter:focus::-ms-input-placeholder {
  color: transparent;
}

.newsletter-inner-box .newsletter-form .input-newsletter:focus::placeholder {
  color: transparent;
}

.newsletter-inner-box .newsletter-form button {
  position: absolute;
  right: 4px;
  top: 4px;
  background-color: #1DBFCC;
  color: #ffffff;
  border: none;
  height: 52px;
  width: 52px;
  line-height: 52px;
  border-radius: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  text-transform: capitalize;
  cursor: pointer;
  font-size: 22px;
  font-weight: 500;
}

.newsletter-inner-box .newsletter-form button:hover {
  background-color: #06a3da;
  color: #ffffff;
}

.newsletter-inner-box .newsletter-form #validator-newsletter {
  color: red;
  position: relative;
  top: 8px;
  font-size: 14px;
  font-weight: 500;
}

/*================================================
Eye Care Footer Area CSS
=================================================*/
.eye-care-footer-area {
  background: -webkit-gradient(linear, left top, left bottom, from(#EFEFFB), to(#FAFAFE));
  background: linear-gradient(180deg, #EFEFFB 0%, #FAFAFE 100%);
  padding-top: 180px;
}

.eye-care-footer-widget {
  margin-bottom: 25px;
}

.eye-care-footer-widget h2 {
  font-size: 35px;
  margin-bottom: 25px;
}

.eye-care-footer-widget h2 a {
  color: #1DBFCC;
}

.eye-care-footer-widget h3 {
  font-size: 24px;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
  margin-bottom: 25px;
  color: #002345;
}

.eye-care-footer-widget .info-list {
  padding: 0;
  margin-bottom: 0;
}

.eye-care-footer-widget .info-list li {
  list-style-type: none;
  margin-bottom: 18px;
  color: #486683;
  font-family: "Nunito Sans", sans-serif;
}

.eye-care-footer-widget .info-list li:last-child {
  margin-bottom: 0;
}

.eye-care-footer-widget .info-list li span {
  color: #1DBFCC;
}

.eye-care-footer-widget .info-list li a {
  color: #486683;
}

.eye-care-footer-widget .info-list li a:hover {
  letter-spacing: 1px;
}

.eye-care-footer-widget .share-link {
  padding: 0;
  margin-top: 20px;
  margin-bottom: 0;
}

.eye-care-footer-widget .share-link li {
  display: inline-block;
  margin-right: 10px;
}

.eye-care-footer-widget .share-link li:last-child {
  margin-right: 0;
}

.eye-care-footer-widget .share-link li span {
  font-size: 20px;
  color: #486683;
  font-weight: 500;
  font-family: "Heebo", sans-serif;
}

.eye-care-footer-widget .share-link li a i {
  color: #486683;
  font-size: 15px;
  position: relative;
  top: 1px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  display: inline-block;
  height: 25px;
  width: 25px;
  line-height: 22px;
  border: 2px solid #486683;
  text-align: center;
  border-radius: 5px;
}

.eye-care-footer-widget .share-link li a i:hover {
  color: #1DBFCC;
  border: 2px solid #1DBFCC;
  -webkit-transform: translateY(-2px);
          transform: translateY(-2px);
}

.eye-care-footer-widget .quick-links {
  padding: 0;
  margin-bottom: 0;
}

.eye-care-footer-widget .quick-links li {
  list-style-type: none;
  margin-bottom: 15px;
  position: relative;
  font-family: "Nunito Sans", sans-serif;
  padding-left: 22px;
}

.eye-care-footer-widget .quick-links li:last-child {
  margin-bottom: 0;
}

.eye-care-footer-widget .quick-links li a {
  color: #486683;
}

.eye-care-footer-widget .quick-links li a:hover {
  letter-spacing: 1px;
}

.eye-care-footer-widget .quick-links li i {
  color: #1DBFCC;
  position: absolute;
  left: 0;
  top: 4.5px;
}

.eye-care-footer-widget .hours-list {
  padding: 0;
  margin-bottom: 0;
}

.eye-care-footer-widget .hours-list li {
  list-style-type: none;
  margin-bottom: 15px;
}

.eye-care-footer-widget .hours-list li:last-child {
  margin-bottom: 0;
}

.eye-care-footer-widget .hours-list li span {
  color: #486683;
}

.eye-care-copyright-area {
  margin-top: 75px;
}

.eye-care-copyright-area .copyright-area-content {
  text-align: center;
  border-top: 1px solid #CEDBE3;
  padding-top: 30px;
  padding-bottom: 30px;
}

.eye-care-copyright-area .copyright-area-content p {
  color: #486683;
  font-size: 15px;
  font-family: "Nunito Sans", sans-serif;
}

.eye-care-copyright-area .copyright-area-content p a {
  display: inline-block;
  font-weight: 600;
  color: #1DBFCC;
}

.eye-care-copyright-area .copyright-area-content p a:hover {
  color: #1DBFCC;
}

/* Start "Covid 19 Vaccination Center Demo CSS" */
.section-title.with-covid-color span {
  color: #0CB8B6;
}

.section-title.with-covid-color h2 {
  color: #0D0246;
  font-family: "Heebo", sans-serif;
  font-weight: 900;
  margin-bottom: 0;
  margin-top: 15px;
}

.covid-header {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  z-index: 9;
}

.covid-pagination .page-numbers {
  background-color: #F1F5FE;
  color: #486683;
  border-radius: 50px;
  -webkit-box-shadow: unset;
          box-shadow: unset;
  font-weight: 400;
}

.covid-pagination .page-numbers.current, .covid-pagination .page-numbers:hover, .covid-pagination .page-numbers:focus {
  background: #0CB8B6;
  color: #ffffff;
}

/*================================================
Covid Bar Area CSS
=================================================*/
.covid-top-area {
  background-color: #0D0246;
}

.covid-top-area .top-optional-wrap {
  text-align: start;
}

.covid-top-area .top-optional-wrap li a i {
  color: #ffffff;
  font-size: 15px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  display: inline-block;
  height: 30px;
  width: 30px;
  line-height: 30px;
  background: rgba(255, 255, 255, 0.2);
  text-align: center;
  border-radius: 50px;
  border: none;
}

.covid-top-area .top-optional-wrap li a i:hover {
  background-color: #0CB8B6;
}

.covid-top-area .top-information-wrap {
  text-align: end;
}

.covid-top-area .top-information-wrap li {
  color: #CCCCCC;
  font-family: "Nunito Sans", sans-serif;
  font-weight: 600;
}

.covid-top-area .top-information-wrap li a {
  color: #CCCCCC;
}

.covid-top-area .top-information-wrap li a:hover {
  color: #0CB8B6;
}

.covid-top-area .top-information-wrap li i {
  color: #ffffff;
}

/*================================================
Covid Navbar Area CSS
=================================================*/
.covid-navbar-area .main-navbar {
  background-color: transparent;
}

.covid-navbar-area .main-navbar .container-fluid {
  padding-left: 30px;
  padding-right: 30px;
}

.covid-navbar-area .main-navbar .navbar .navbar-brand {
  color: #0CB8B6;
  font-size: 35px;
  text-transform: capitalize;
  font-weight: bold;
  font-family: "Heebo", sans-serif;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item a {
  color: #0D0246;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item a::before {
  display: none;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item a:hover, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item a:focus, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item a.active {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item:hover a, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item.active a {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a {
  color: #0D0246;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a:hover, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a:focus, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a.active {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a:hover::before, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a:focus::before, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a.active::before {
  display: none;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a {
  color: #0D0246;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:hover, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:focus, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a.active {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a {
  color: #0D0246;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a {
  color: #0D0246;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a {
  color: #0D0246;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a {
  color: #0D0246;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a {
  color: #0D0246;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus, .covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li.active a {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li.active a {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .others-options .option-item .search-btn a i {
  color: #0D0246;
}

.covid-navbar-area .main-navbar .navbar .others-options .option-item .search-btn a i:hover {
  color: #0CB8B6;
}

.covid-navbar-area .main-navbar .navbar .others-options .option-item .navbar-btn .default-btn {
  background: -webkit-gradient(linear, left top, right top, from(rgba(12, 184, 182, 0.71)), to(#0CB8B6));
  background: linear-gradient(90deg, rgba(12, 184, 182, 0.71) 0%, #0CB8B6 100%);
  color: #ffffff;
}

.covid-navbar-area .main-navbar .navbar .others-options .option-item .navbar-btn .default-btn i {
  margin-left: 5px;
}

.covid-navbar-area .others-option-for-responsive .option-inner .others-options .option-item .search-btn a i {
  color: #0D0246;
}

.covid-navbar-area .others-option-for-responsive .option-inner .others-options .option-item .search-btn a i:hover {
  color: #0CB8B6;
}

.covid-navbar-area .others-option-for-responsive .option-inner .others-options .option-item .navbar-btn .default-btn {
  background: -webkit-gradient(linear, left top, right top, from(rgba(12, 184, 182, 0.71)), to(#0CB8B6));
  background: linear-gradient(90deg, rgba(12, 184, 182, 0.71) 0%, #0CB8B6 100%);
  color: #ffffff;
}

.covid-navbar-area .others-option-for-responsive .option-inner .others-options .option-item .navbar-btn .default-btn i {
  margin-left: 5px;
}

/*================================================
Covid Searchmodal Area CSS
=================================================*/
.covid-searchmodal .modal-header button.close {
  background-color: #0CB8B6;
  color: #ffffff;
}

/*================================================
Covid Banner Area CSS
=================================================*/
.covid-banner-area {
  background-color: #F1F5FE;
  padding-top: 220px;
  padding-bottom: 100px;
}

.covid-banner-area .container-fluid {
  padding-left: 30px;
  padding-right: 30px;
}

.covid-banner-content {
  position: relative;
  top: -20px;
}

.covid-banner-content h1 {
  font-size: 62px;
  font-family: "Heebo", sans-serif;
  font-weight: 900;
  margin-bottom: 12px;
  color: #0D0246;
  line-height: 1.3;
}

.covid-banner-content p {
  margin-bottom: 0;
  color: #486683;
  max-width: 650px;
}

.covid-banner-content .banner-btn {
  padding: 0;
  margin-top: 25px;
  margin-bottom: 0;
}

.covid-banner-content .banner-btn li {
  list-style-type: none;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-right: 25px;
}

.covid-banner-content .banner-btn li:last-child {
  margin-right: 0;
}

.covid-banner-content .banner-btn li .default-btn {
  background: -webkit-gradient(linear, left top, right top, from(rgba(12, 184, 182, 0.71)), to(#0CB8B6));
  background: linear-gradient(90deg, rgba(12, 184, 182, 0.71) 0%, #0CB8B6 100%);
  color: #ffffff !important;
}

.covid-banner-content .banner-btn li .default-btn i {
  margin-left: 5px;
}

.covid-banner-content .banner-btn li .video-btn i {
  display: inline-block;
  height: 55px;
  width: 55px;
  line-height: 55px;
  text-align: center;
  background-color: #ffffff;
  color: #0CB8B6;
  text-align: center;
  border-radius: 50px;
  font-size: 20px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-banner-content .banner-btn li .video-btn i:hover {
  background-color: #0CB8B6;
  color: #ffffff;
}

.covid-banner-content .banner-btn li .video-btn span {
  color: #0CB8B6;
  margin-left: 10px;
  position: relative;
  padding-right: 30px;
}

.covid-banner-content .banner-btn li .video-btn span::before {
  position: absolute;
  content: "\f114";
  right: 0;
  top: -2px;
  font-family: "Flaticon";
}

.covid-banner-content .banner-btn-with-info {
  padding: 0;
  margin-top: 30px;
  margin-bottom: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.covid-banner-content .banner-btn-with-info li {
  list-style-type: none;
  display: inline-block;
  margin-right: -20px;
}

.covid-banner-content .banner-btn-with-info li img {
  max-width: 50px;
  border: 4px solid #ffffff;
  border-radius: 50px;
}

.covid-banner-content .banner-btn-with-info li i {
  display: inline-block;
  height: 50px;
  width: 50px;
  line-height: 45px;
  background-color: #0CB8B6;
  border: 4px solid #ffffff;
  color: #ffffff;
  text-align: center;
  font-size: 20px;
  border-radius: 50px;
}

.covid-banner-content .banner-btn-with-info li.title {
  margin-left: 30px;
  margin-right: 0;
  font-size: 16px;
  font-weight: 500;
  vertical-align: middle;
  color: #486683;
}

.covid-banner-content .banner-btn-with-info li.title span {
  color: #0D0246;
  font-weight: bold;
}

/*================================================
Covid Check Form Area CSS
=================================================*/
.covid-check-form-area {
  position: relative;
  z-index: 1;
}

.covid-check-form-area::before {
  position: absolute;
  content: "";
  left: 0;
  right: 0;
  top: 0;
  background-color: #F1F5FE;
  width: 100%;
  height: 145px;
  z-index: -1;
}

.covid-check-form-inner {
  background-image: url(../images/covid/check-bg.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  padding-left: 100px;
  padding-right: 100px;
  border-radius: 5px;
}

.covid-check-title {
  margin-bottom: 30px;
}

.covid-check-title h3 {
  font-size: 30px;
  color: #ffffff;
  margin-bottom: 0;
  font-family: "Heebo", sans-serif;
  font-weight: bold;
}

.covid-check-title a {
  color: #ffffff;
  position: relative;
  padding-right: 30px;
}

.covid-check-title a::before {
  position: absolute;
  content: "\f114";
  right: 0;
  top: -2px;
  font-family: "Flaticon";
}

.covid-check-title a:hover {
  color: #0CB8B6;
}

.covid-check-form .form-group {
  margin-bottom: 25px;
}

.covid-check-form .form-group .form-control {
  background-color: #ffffff;
  border: 1px solid #ffffff;
  display: inline-block;
  height: 55px;
  padding: 15px 20px;
  outline: 0;
  -webkit-box-shadow: unset;
          box-shadow: unset;
  border-radius: 8px;
  font-size: 14px;
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-check-form .form-group .form-control::-webkit-input-placeholder {
  color: #486683;
}

.covid-check-form .form-group .form-control:-ms-input-placeholder {
  color: #486683;
}

.covid-check-form .form-group .form-control::-ms-input-placeholder {
  color: #486683;
}

.covid-check-form .form-group .form-control::placeholder {
  color: #486683;
}

.covid-check-form .form-group .form-control:focus {
  border: 1px solid #0CB8B6;
}

.covid-check-form .form-group .form-control:focus::-webkit-input-placeholder {
  color: transparent;
}

.covid-check-form .form-group .form-control:focus:-ms-input-placeholder {
  color: transparent;
}

.covid-check-form .form-group .form-control:focus::-ms-input-placeholder {
  color: transparent;
}

.covid-check-form .form-group .form-control:focus::placeholder {
  color: transparent;
}

.covid-check-form .form-group .checkbox-check {
  background-color: #ffffff;
  border: 1px solid #ffffff;
  display: inline-block;
  height: 55px;
  padding: 15px 20px;
  outline: 0;
  -webkit-box-shadow: unset;
          box-shadow: unset;
  border-radius: 8px;
  font-size: 14px;
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  width: 100%;
}

.covid-check-form .form-group .checkbox-check::-webkit-input-placeholder {
  color: #486683;
}

.covid-check-form .form-group .checkbox-check:-ms-input-placeholder {
  color: #486683;
}

.covid-check-form .form-group .checkbox-check::-ms-input-placeholder {
  color: #486683;
}

.covid-check-form .form-group .checkbox-check::placeholder {
  color: #486683;
}

.covid-check-form .form-group .checkbox-check:focus {
  border: 1px solid #0CB8B6;
}

.covid-check-form .form-group .checkbox-check:focus::-webkit-input-placeholder {
  color: transparent;
}

.covid-check-form .form-group .checkbox-check:focus:-ms-input-placeholder {
  color: transparent;
}

.covid-check-form .form-group .checkbox-check:focus::-ms-input-placeholder {
  color: transparent;
}

.covid-check-form .form-group .checkbox-check:focus::placeholder {
  color: transparent;
}

.covid-check-form .form-group .checkbox-check .form-check-input {
  -webkit-box-shadow: unset;
          box-shadow: unset;
}

.covid-check-form .form-group .checkbox-check .form-check-label {
  position: relative;
  top: 1px;
  left: 5px;
}

.covid-check-form button {
  display: block;
  border: none;
  background: -webkit-gradient(linear, left top, right top, from(rgba(12, 184, 182, 0.71)), to(#0CB8B6));
  background: linear-gradient(90deg, rgba(12, 184, 182, 0.71) 0%, #0CB8B6 100%);
  color: #ffffff !important;
  height: 55px;
  width: 100%;
  line-height: 55px;
  padding: 0 30px;
}

.covid-check-form button i {
  margin-left: 5px;
  position: relative;
  top: 1px;
}

/*================================================
Covid Vaccine Area CSS
=================================================*/
.covid-vaccine-card {
  margin-bottom: 25px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  text-align: center;
}

.covid-vaccine-card .vaccine-image {
  margin-bottom: 30px;
}

.covid-vaccine-card .vaccine-image img {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  height: 150px;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin: auto;
}

.covid-vaccine-card .vaccine-content h3 {
  font-size: 22px;
  margin-bottom: 15px;
  color: #0D0246;
  font-family: "Heebo", sans-serif;
  font-weight: 900;
}

.covid-vaccine-card .vaccine-content p {
  margin-bottom: 0;
}

.covid-vaccine-card:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

/*================================================
Covid About Area CSS
=================================================*/
.covid-about-area {
  background-color: #F1F5FE;
}

.covid-about-content {
  padding-left: 35px;
}

.covid-about-content span {
  color: #0CB8B6;
  display: inline-block;
  margin-bottom: 15px;
}

.covid-about-content h3 {
  font-size: 48px;
  color: #0D0246;
  margin-bottom: 15px;
  font-family: "Heebo", sans-serif;
  font-weight: 900;
}

.covid-about-content p {
  margin-bottom: 0;
}

.covid-about-content .list {
  padding: 0;
  margin-top: 18px;
  margin-bottom: 0;
}

.covid-about-content .list li {
  list-style-type: none;
  position: relative;
  font-size: 18px;
  color: #0D0246;
  font-weight: 500;
  margin-bottom: 22px;
  padding-left: 40px;
}

.covid-about-content .list li:last-child {
  margin-bottom: 0;
}

.covid-about-content .list li i {
  display: inline-block;
  height: 25px;
  width: 25px;
  line-height: 25px;
  background: rgba(12, 184, 182, 0.3);
  color: #0CB8B6;
  text-align: center;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  position: absolute;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.covid-about-content .list li:hover i {
  background-color: #0CB8B6;
  color: #ffffff;
}

.covid-about-content .about-btn {
  margin-top: 30px;
}

.covid-about-content .about-btn .default-btn {
  background: -webkit-gradient(linear, left top, right top, from(rgba(12, 184, 182, 0.71)), to(#0CB8B6));
  background: linear-gradient(90deg, rgba(12, 184, 182, 0.71) 0%, #0CB8B6 100%);
  color: #ffffff !important;
}

.covid-about-content .about-btn .default-btn i {
  margin-left: 5px;
  position: relative;
  top: 1px;
}

/*================================================
Covid Registration Area CSS
=================================================*/
.covid-registration-area {
  position: relative;
  z-index: 1;
  overflow: hidden;
}

.covid-registration-area.bg-F1F5FE {
  background-color: #F1F5FE;
}

.covid-registration-area.bg-F1F5FE .covid-registration-form .form-control {
  background-color: #ffffff;
  border: 1px solid #ffffff;
}

.covid-registration-area.bg-F1F5FE .covid-registration-form .form-control:focus {
  border: 1px solid #0CB8B6;
}

.covid-registration-area.bg-F1F5FE .covid-registration-form .country-select input {
  background-color: #ffffff;
  border: 1px solid #ffffff;
}

.covid-registration-area.bg-F1F5FE .covid-registration-form .country-select input:focus {
  border: 1px solid #0CB8B6;
}

.covid-registration-area.bg-F1F5FE .covid-registration-form .nice-select {
  background-color: #ffffff;
  border: 1px solid #ffffff;
}

.covid-registration-area.bg-F1F5FE .covid-registration-form .nice-select:focus {
  border: 1px solid #0CB8B6;
}

.covid-registration-form .form-group {
  margin-bottom: 20px;
}

.covid-registration-form label {
  color: #6a6c72;
  display: inline-block;
  margin-bottom: 10px;
}

.covid-registration-form .form-control {
  background-color: #F1F5FE;
  border: 1px solid #F1F5FE;
  display: inline-block;
  height: 55px;
  padding: 15px 20px;
  outline: 0;
  -webkit-box-shadow: unset;
          box-shadow: unset;
  border-radius: 8px;
  font-size: 14px;
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-registration-form .form-control::-webkit-input-placeholder {
  color: #486683;
}

.covid-registration-form .form-control:-ms-input-placeholder {
  color: #486683;
}

.covid-registration-form .form-control::-ms-input-placeholder {
  color: #486683;
}

.covid-registration-form .form-control::placeholder {
  color: #486683;
}

.covid-registration-form .form-control:focus {
  border: 1px solid #0CB8B6;
}

.covid-registration-form .form-control:focus::-webkit-input-placeholder {
  color: transparent;
}

.covid-registration-form .form-control:focus:-ms-input-placeholder {
  color: transparent;
}

.covid-registration-form .form-control:focus::-ms-input-placeholder {
  color: transparent;
}

.covid-registration-form .form-control:focus::placeholder {
  color: transparent;
}

.covid-registration-form .country-select {
  display: block;
  width: 100%;
}

.covid-registration-form .country-select input {
  width: 100%;
  height: 55px;
  display: block;
  border-radius: 5px;
  background-color: #F1F5FE;
  border: 1px solid #F1F5FE;
  -webkit-box-shadow: unset !important;
          box-shadow: unset !important;
  font-size: var(--fontSize);
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  padding: 15px 20px;
  outline: 0;
}

.covid-registration-form .country-select input:focus {
  border: 1px solid #0CB8B6;
}

.covid-registration-form .country-select .selected-flag {
  padding: 0 50px 0 20px;
  border-right: 1px solid #CCCCCC;
}

.covid-registration-form .country-select .selected-flag .arrow {
  right: 12px;
}

.covid-registration-form .country-select.inside input, .covid-registration-form .country-select .country-select.inside input[type=text] {
  padding-right: 15px;
  padding-left: 90px;
  margin-left: 0;
}

.covid-registration-form .country-select .country-list {
  background-color: #ffffff;
  border: 1px solid #ffffff;
  -webkit-box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
          box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
}

.covid-registration-form .country-select .country-list .country {
  padding: 10px 20px;
}

.covid-registration-form .country-select .country-list .divider {
  display: none;
}

.covid-registration-form .nice-select {
  border-radius: 5px;
  background-color: #F1F5FE;
  border: 1px solid #F1F5FE;
  font-size: 14px;
  color: #486683;
  height: 55px;
  line-height: 55px;
  padding-left: 20px;
  padding-right: 35px;
}

.covid-registration-form .nice-select::after {
  border-color: #486683;
  height: 8px;
  width: 8px;
  right: 18px;
  margin-top: -5px;
}

.covid-registration-form .nice-select .list {
  background-color: #ffffff;
  -webkit-box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
          box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
  border-radius: 0;
  height: 200px;
  width: 100%;
  overflow-y: scroll;
  margin-top: 0;
  margin-bottom: 0;
}

.covid-registration-form .nice-select .list .option {
  line-height: 40px;
  min-height: 40px;
  color: #6a6c72;
  padding-left: 15px;
  padding-top: 5px;
  padding-right: 15px;
  display: inherit;
  margin-right: 0;
}

.covid-registration-form .nice-select .list .option.selected {
  background-color: #0CB8B6 !important;
  color: #ffffff;
  font-weight: normal;
}

.covid-registration-form .nice-select:focus {
  border: 1px solid #0CB8B6;
}

.covid-registration-form .default-btn {
  border: none;
  background: -webkit-gradient(linear, left top, right top, from(rgba(12, 184, 182, 0.71)), to(#0CB8B6));
  background: linear-gradient(90deg, rgba(12, 184, 182, 0.71) 0%, #0CB8B6 100%);
  color: #ffffff !important;
  padding: 15px 30px;
  width: 100%;
  margin-top: 10px;
}

.covid-registration-form .default-btn i {
  margin-left: 5px;
  position: relative;
  top: 1px;
}

.covid-registration-form .bottom-title {
  margin-top: 15px;
  text-align: center;
}

.covid-registration-form .bottom-title span {
  color: #486683;
}

.covid-registration-form .bottom-title span a {
  color: #0CB8B6;
}

.covid-registration-form .bottom-title span a:hover {
  color: #0D0246;
}

.covid-registration-image {
  padding-left: 30px;
}

.covid-registration-image .content {
  margin-bottom: 35px;
}

.covid-registration-image .content span {
  color: #0CB8B6;
  display: inline-block;
  margin-bottom: 15px;
}

.covid-registration-image .content h3 {
  font-size: 48px;
  color: #0D0246;
  margin-bottom: 15px;
  font-family: "Heebo", sans-serif;
  font-weight: 900;
}

.covid-registration-shape {
  position: absolute;
  left: 0;
  top: 0;
  z-index: -1;
}

/*================================================
Covid Process Area CSS
=================================================*/
.covid-process-area {
  background-color: #F1F5FE;
}

.covid-process-card {
  margin-bottom: 25px;
}

.covid-process-card .process-image {
  margin-bottom: 25px;
}

.covid-process-card h3 {
  font-size: 22px;
  margin-bottom: 15px;
  color: #0D0246;
  font-family: "Heebo", sans-serif;
  font-weight: 900;
}

.covid-process-card p {
  margin-bottom: 0;
}

/*================================================
Covid Tracker Area CSS
=================================================*/
.covid-tracker-area {
  background-image: url(../images/covid/tracker/map.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}

.covid-tracker-card {
  background-color: #ffffff;
  -webkit-box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
          box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
  border-radius: 5px;
  padding: 30px 35px;
  border: 1px solid #f5f5f5;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-tracker-card .tracker-image {
  text-align: center;
}

.covid-tracker-card .tracker-image img {
  width: auto;
  display: inline-block;
}

.covid-tracker-card .tracker-content {
  margin-top: 25px;
}

.covid-tracker-card .tracker-content .sub {
  color: #0CB8B6;
  display: inline-block;
  margin-bottom: 12px;
}

.covid-tracker-card .tracker-content h3 {
  font-size: 22px;
  color: #0D0246;
  margin-bottom: 15px;
  font-family: "Heebo", sans-serif;
  font-weight: 900;
}

.covid-tracker-card .tracker-content p {
  font-size: 14px;
}

.covid-tracker-card .tracker-content p .one b {
  color: #0D0246;
  font-weight: 500;
}

.covid-tracker-card .tracker-content p .two {
  color: #0D0246;
  font-weight: 500;
}

.covid-tracker-card:hover {
  border: 1px solid #0CB8B6;
}

.covid-tracker-slides.owl-theme .owl-nav {
  margin-top: 0;
  -webkit-transition: 1s;
  transition: 1s;
  line-height: .01;
}

.covid-tracker-slides.owl-theme .owl-nav [class*=owl-] {
  color: #0D0246;
  margin: 0;
  position: absolute;
  left: -55px;
  top: 45%;
  -webkit-transform: translateY(-45%);
          transform: translateY(-45%);
  padding: 0;
  background: #F1F5FE;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  font-size: 22px;
}

.covid-tracker-slides.owl-theme .owl-nav [class*=owl-].owl-next {
  left: auto;
  right: -55px;
}

.covid-tracker-slides.owl-theme .owl-nav [class*=owl-] i {
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.covid-tracker-slides.owl-theme .owl-nav [class*=owl-]:hover {
  background-color: #0CB8B6;
  color: #ffffff;
}

.covid-tracker-slides.owl-theme .owl-dots {
  margin-top: 30px;
}

.covid-tracker-slides.owl-theme .owl-dots .owl-dot span {
  width: 10px;
  height: 10px;
  background-color: #CCCCCC;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 50%;
  position: relative;
  margin-top: 0;
  margin-bottom: 0;
  margin: 0 12px;
}

.covid-tracker-slides.owl-theme .owl-dots .owl-dot:hover span, .covid-tracker-slides.owl-theme .owl-dots .owl-dot.active span {
  background: #0CB8B6;
  -webkit-transform: scale(1.5);
          transform: scale(1.5);
}

/*================================================
Covid Protection Area CSS
=================================================*/
.covid-protection-area {
  background-color: #F1F5FE;
  position: relative;
  z-index: 1;
  overflow: hidden;
}

.covid-protection-area::before {
  position: absolute;
  content: "";
  left: 0;
  right: 0;
  background-color: #F1F5FE;
  width: 100%;
  height: 195px;
  bottom: 0;
}

.covid-protection-area.background-white {
  background-color: #ffffff;
}

.covid-protection-area.background-white::before {
  background-color: #ffffff;
}

.covid-protection-content .content span {
  color: #0CB8B6;
  display: inline-block;
  margin-bottom: 15px;
}

.covid-protection-content .content h3 {
  font-size: 48px;
  color: #0D0246 !important;
  margin-bottom: 0;
  font-family: "Heebo", sans-serif;
  font-weight: 900;
}

.covid-protection-content .protection-faq-accordion {
  margin-top: 30px;
}

.covid-protection-content .protection-faq-accordion .accordion .accordion-item {
  display: block;
  margin-bottom: 10px;
  background-color: transparent;
  border: 1px solid #E2E5EA;
  border-radius: 8px;
}

.covid-protection-content .protection-faq-accordion .accordion .accordion-item:last-child {
  margin-bottom: 0;
}

.covid-protection-content .protection-faq-accordion .accordion .accordion-title {
  padding: 15px 55px 15px 70px;
  color: #0D0246;
  position: relative;
  display: block;
  text-transform: capitalize;
  font-size: 18px;
  font-weight: 500;
  cursor: pointer;
  border-radius: 8px 8px 0 0;
}

.covid-protection-content .protection-faq-accordion .accordion .accordion-title i {
  position: absolute;
  right: 20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  color: #0D0246;
  font-size: 20px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-protection-content .protection-faq-accordion .accordion .accordion-title.active {
  background-color: #ffffff;
}

.covid-protection-content .protection-faq-accordion .accordion .accordion-title.active i::before {
  content: "\ea32";
  color: #0CB8B6;
}

.covid-protection-content .protection-faq-accordion .accordion .accordion-title .number {
  display: inline-block;
  height: 30px;
  width: 30px;
  line-height: 30px;
  background: rgba(12, 184, 182, 0.2);
  border-radius: 5px;
  text-align: center;
  color: #0CB8B6;
  font-size: 15px;
  position: absolute;
  left: 20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.covid-protection-content .protection-faq-accordion .accordion .accordion-content {
  display: none;
  padding: 0 20px 20px 70px;
  background-color: #ffffff;
  border-radius: 0 0 8px 8px;
}

.covid-protection-content .protection-faq-accordion .accordion .accordion-content p {
  color: #6a6c72;
  font-weight: 400;
}

.covid-protection-content .protection-faq-accordion .accordion .accordion-content.show {
  display: block;
  background-color: #ffffff;
  border-radius: 0 0 8px 8px;
}

.covid-protection-image {
  background-image: url(../images/covid/protection.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  height: 100%;
  width: 100%;
  margin-left: 50px;
  border-radius: 10px;
  border: 5px solid #ffffff;
}

.covid-protection-fun-fact {
  background-image: url(../images/covid/fun-fact-bg.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  position: relative;
  z-index: 1;
  border-radius: 5px;
  padding-top: 50px;
  padding-bottom: 25px;
  padding-left: 50px;
  padding-right: 50px;
  margin-top: 55px;
  margin-right: -230px;
}

.covid-protection-fun-fact .fun-fact {
  margin-bottom: 25px;
}

.covid-protection-fun-fact .fun-fact h3 {
  font-size: 40px;
  color: #ffffff;
  margin-bottom: 5px;
}

.covid-protection-fun-fact .fun-fact h3 .small-text {
  color: #ffffff;
}

.covid-protection-fun-fact .fun-fact h3 .odometer-formatting-mark {
  display: none;
}

.covid-protection-fun-fact .fun-fact p {
  color: #0D0246;
  margin-bottom: 0;
}

/*================================================
Covid Testimonials Area CSS
=================================================*/
.covid-testimonials-inner {
  background-color: #ffffff;
  -webkit-box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
          box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
  border-radius: 5px;
  padding: 45px;
  border-radius: 5px;
  position: relative;
  z-index: 1;
}

.covid-testimonials-card {
  text-align: center;
  max-width: 565px;
  margin: auto;
}

.covid-testimonials-card img {
  width: auto !important;
  display: inline-block;
  margin: auto;
}

.covid-testimonials-card h3 {
  font-size: 22px;
  margin-top: 25px;
  margin-bottom: 15px;
  font-family: "Heebo", sans-serif;
  font-weight: 900;
}

.covid-testimonials-card p {
  margin-bottom: 0;
}

.covid-testimonials-card .rating {
  padding: 0;
  margin-top: 20px;
  margin-bottom: 0;
}

.covid-testimonials-card .rating li {
  display: inline-block;
  list-style-type: none;
  margin-right: 5px;
}

.covid-testimonials-card .rating li:last-child {
  margin-right: 0;
}

.covid-testimonials-card .rating li i {
  color: #FFE600;
  font-size: 18px;
}

.covid-testimonials-slides.owl-theme .owl-dots .owl-dot span {
  width: 10px;
  height: 10px;
  background-color: #CCCCCC;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 50%;
  position: relative;
  margin-top: 0;
  margin-bottom: 0;
  margin: 0 12px;
}

.covid-testimonials-slides.owl-theme .owl-dots .owl-dot:hover span, .covid-testimonials-slides.owl-theme .owl-dots .owl-dot.active span {
  background: #0CB8B6;
  -webkit-transform: scale(1.5);
          transform: scale(1.5);
}

.covid-testimonials-slides.owl-theme .owl-nav.disabled + .owl-dots {
  margin-top: 30px;
}

.covid-testimonials-small-image1 {
  position: absolute;
  left: 75px;
  top: -20px;
  z-index: -1;
  max-width: 100px;
}

.covid-testimonials-small-image2 {
  position: absolute;
  left: -20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: -1;
  max-width: 100px;
}

.covid-testimonials-small-image3 {
  position: absolute;
  left: 75px;
  bottom: -20px;
  z-index: -1;
  max-width: 100px;
}

.covid-testimonials-small-image4 {
  position: absolute;
  right: 75px;
  top: -20px;
  z-index: -1;
  max-width: 100px;
}

.covid-testimonials-small-image5 {
  position: absolute;
  right: -20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: -1;
  max-width: 100px;
}

.covid-testimonials-small-image6 {
  position: absolute;
  right: 75px;
  bottom: -20px;
  z-index: -1;
  max-width: 100px;
}

.covid-testimonials-wrap-card {
  background-color: #F1F5FE;
  padding: 30px;
  margin-bottom: 25px;
  border-radius: 5px;
}

.covid-testimonials-wrap-card p {
  margin-bottom: 0;
}

.covid-testimonials-wrap-card .info {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-top: 25px;
}

.covid-testimonials-wrap-card .info img {
  max-width: 70px;
}

.covid-testimonials-wrap-card .info .title {
  margin-left: 20px;
}

.covid-testimonials-wrap-card .info .title h3 {
  font-size: 20px;
  margin-bottom: 12px;
}

.covid-testimonials-wrap-card .info .title span {
  color: #486683;
  font-size: 14px;
}

.covid-testimonials-wrap-slides.owl-theme .owl-dots .owl-dot span {
  width: 10px;
  height: 10px;
  background-color: #CCCCCC;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 50%;
  position: relative;
  margin-top: 0;
  margin-bottom: 0;
  margin: 0 12px;
}

.covid-testimonials-wrap-slides.owl-theme .owl-dots .owl-dot:hover span, .covid-testimonials-wrap-slides.owl-theme .owl-dots .owl-dot.active span {
  background: #0CB8B6;
  -webkit-transform: scale(1.5);
          transform: scale(1.5);
}

.covid-testimonials-wrap-slides.owl-theme .owl-nav.disabled + .owl-dots {
  margin-top: 30px;
}

/*================================================
Covid Blog Area CSS
=================================================*/
.covid-blog-area {
  background-color: #F1F5FE;
}

.covid-blog-card {
  margin-bottom: 25px;
}

.covid-blog-card .blog-image {
  border-radius: 8px 8px 0 0;
  overflow: hidden;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}

.covid-blog-card .blog-image a {
  display: inline-block;
}

.covid-blog-card .blog-image a img {
  border-radius: 8px 8px 0 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-blog-card .blog-content {
  background-color: #ffffff;
  -webkit-box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
          box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
  padding: 30px;
  border-radius: 0px 0px 5px 5px;
}

.covid-blog-card .blog-content span {
  font-size: 14px;
  color: #486683;
  font-weight: 400;
  letter-spacing: 1px;
  display: inline-block;
  margin-bottom: 15px;
  position: relative;
  padding-left: 25px;
}

.covid-blog-card .blog-content span::before {
  position: absolute;
  content: "\ea16";
  left: 0;
  top: -3.5px;
  font-family: boxicons;
  color: #0CB8B6;
  font-size: 18px;
  font-weight: bold;
}

.covid-blog-card .blog-content h3 {
  font-size: 22px;
  margin-bottom: 15px;
  line-height: 1.4;
  font-family: "Heebo", sans-serif;
  font-weight: 900;
}

.covid-blog-card .blog-content h3 a {
  color: #0D0246;
}

.covid-blog-card .blog-content h3 a:hover {
  color: #0CB8B6;
}

.covid-blog-card .blog-content .news-btn {
  color: #0CB8B6;
  position: relative;
  padding-right: 30px;
}

.covid-blog-card .blog-content .news-btn::before {
  position: absolute;
  content: "\f114";
  right: 0;
  top: -2px;
  font-family: "Flaticon";
}

.covid-blog-card .blog-content .news-btn:hover {
  color: #0D0246;
}

.covid-blog-card:hover .blog-image a img {
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}

.covid-blog-slides.owl-theme .owl-nav {
  margin-top: 0;
  -webkit-transition: 1s;
  transition: 1s;
  line-height: .01;
}

.covid-blog-slides.owl-theme .owl-nav [class*=owl-] {
  color: #0D0246;
  margin: 0;
  position: absolute;
  left: -55px;
  top: 45%;
  -webkit-transform: translateY(-45%);
          transform: translateY(-45%);
  padding: 0;
  background: #ffffff;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  font-size: 22px;
}

.covid-blog-slides.owl-theme .owl-nav [class*=owl-].owl-next {
  left: auto;
  right: -55px;
}

.covid-blog-slides.owl-theme .owl-nav [class*=owl-] i {
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.covid-blog-slides.owl-theme .owl-nav [class*=owl-]:hover {
  background-color: #0CB8B6;
  color: #ffffff;
}

.covid-blog-slides.owl-theme .owl-dots {
  margin-top: 30px;
}

.covid-blog-slides.owl-theme .owl-dots .owl-dot span {
  width: 10px;
  height: 10px;
  background-color: #CCCCCC;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 50%;
  position: relative;
  margin-top: 0;
  margin-bottom: 0;
  margin: 0 12px;
}

.covid-blog-slides.owl-theme .owl-dots .owl-dot:hover span, .covid-blog-slides.owl-theme .owl-dots .owl-dot.active span {
  background: #0CB8B6;
  -webkit-transform: scale(1.5);
          transform: scale(1.5);
}

/*================================================
Covid Page Banner Area CSS
=================================================*/
.covid-page-banner-area {
  background-color: #F1F5FE;
  padding-top: 170px;
}

.covid-page-banner-content {
  position: relative;
  top: -30px;
}

.covid-page-banner-content h3 {
  font-size: 48px;
  color: #0D0246;
  margin-bottom: 15px;
}

.covid-page-banner-content .list {
  padding: 0;
  margin-bottom: 0;
  color: #486683;
}

.covid-page-banner-content .list li {
  list-style-type: none;
  display: inline-block;
  position: relative;
  margin-left: 25px;
}

.covid-page-banner-content .list li::before {
  content: '';
  position: absolute;
  left: -15px;
  top: 6px;
  height: 15px;
  width: 1px;
  background: #486683;
  -webkit-transform: rotate(20deg);
          transform: rotate(20deg);
}

.covid-page-banner-content .list li:first-child {
  margin-left: 0;
}

.covid-page-banner-content .list li:first-child::before {
  display: none;
}

.covid-page-banner-content .list li a {
  color: #486683;
}

.covid-page-banner-content .list li a:hover {
  color: #0CB8B6;
}

.covid-page-banner-image {
  text-align: center;
}

/*================================================
Covid Information Area CSS
=================================================*/
.covid-information-card {
  margin-bottom: 25px;
  padding: 25px;
  border-radius: 5px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border: 1px solid #f5f5f5;
}

.covid-information-card .title {
  position: relative;
  padding: 0 0 0 70px;
}

.covid-information-card .title img {
  position: absolute;
  left: 0;
  top: 0;
}

.covid-information-card .title h3 {
  font-size: 20px;
  color: #0D0246;
  margin-bottom: 0;
  line-height: 1.4;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-information-card p {
  color: #486683;
  margin-top: 15px;
  margin-bottom: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-information-card:hover {
  background-color: #0CB8B6;
  border: 1px solid #0CB8B6;
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

.covid-information-card:hover .title h3 {
  color: #ffffff;
}

.covid-information-card:hover p {
  color: #ffffff;
}

/*================================================
Covid Doctors Area CSS
=================================================*/
.covid-doctors-card {
  margin-bottom: 25px;
}

.covid-doctors-card .doctors-image {
  overflow: hidden;
  border-radius: 5px;
}

.covid-doctors-card .doctors-image img {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 5px;
}

.covid-doctors-card .doctors-content {
  background-color: #ffffff;
  -webkit-box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
          box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
  border-radius: 5px;
  max-width: 350px;
  margin: -115px auto 0;
  position: relative;
  text-align: center;
  padding: 30px;
  overflow: hidden;
}

.covid-doctors-card .doctors-content h3 {
  font-size: 22px;
  color: #0D0246;
  margin-bottom: 15px;
}

.covid-doctors-card .doctors-content span {
  color: #0CB8B6;
  font-size: 14px;
}

.covid-doctors-card .doctors-content .social-wrap {
  padding: 25px 0 0 0;
  margin-top: 25px;
  margin-bottom: 0;
  position: relative;
}

.covid-doctors-card .doctors-content .social-wrap li {
  list-style-type: none;
  display: inline-block;
  margin-right: 5px;
}

.covid-doctors-card .doctors-content .social-wrap li:last-child {
  margin-right: 0;
}

.covid-doctors-card .doctors-content .social-wrap li a i {
  display: inline-block;
  height: 35px;
  width: 35px;
  line-height: 35px;
  background: rgba(28, 188, 187, 0.15);
  color: #0CB8B6;
  text-align: center;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-doctors-card .doctors-content .social-wrap li a i:hover {
  background-color: #0CB8B6;
  color: #ffffff;
}

.covid-doctors-card .doctors-content .social-wrap::before {
  position: absolute;
  content: "";
  width: 1050px;
  height: 1px;
  left: -55px;
  right: 0;
  top: 0;
  background-color: #EEEEEE;
}

.covid-doctors-card:hover .doctors-image img {
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}

.covid-doctors-slides.owl-theme .owl-nav {
  margin-top: 0;
  -webkit-transition: 1s;
  transition: 1s;
  line-height: .01;
}

.covid-doctors-slides.owl-theme .owl-nav [class*=owl-] {
  color: #0D0246;
  margin: 0;
  position: absolute;
  left: -55px;
  top: 45%;
  -webkit-transform: translateY(-45%);
          transform: translateY(-45%);
  padding: 0;
  background: #F1F5FE;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  font-size: 22px;
}

.covid-doctors-slides.owl-theme .owl-nav [class*=owl-].owl-next {
  left: auto;
  right: -55px;
}

.covid-doctors-slides.owl-theme .owl-nav [class*=owl-] i {
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.covid-doctors-slides.owl-theme .owl-nav [class*=owl-]:hover {
  background-color: #0CB8B6;
  color: #ffffff;
}

.covid-doctors-slides.owl-theme .owl-dots {
  margin-top: 30px;
}

.covid-doctors-slides.owl-theme .owl-dots .owl-dot span {
  width: 10px;
  height: 10px;
  background-color: #CCCCCC;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 50%;
  position: relative;
  margin-top: 0;
  margin-bottom: 0;
  margin: 0 12px;
}

.covid-doctors-slides.owl-theme .owl-dots .owl-dot:hover span, .covid-doctors-slides.owl-theme .owl-dots .owl-dot.active span {
  background: #0CB8B6;
  -webkit-transform: scale(1.5);
          transform: scale(1.5);
}

/*================================================
How Vaccines Work Area CSS
=================================================*/
.how-vaccines-work-desc .content h3 {
  font-size: 30px;
  color: #0D0246;
  margin-bottom: 15px;
}

.how-vaccines-work-desc .content h4 {
  font-size: 30px;
  color: #0D0246;
  margin-top: 20px;
  margin-bottom: 15px;
}

.how-vaccines-work-desc .content p {
  color: #486683;
}

.how-vaccines-work-desc .how-vaccines-work-image {
  margin-top: 25px;
  margin-bottom: 30px;
  position: relative;
}

.how-vaccines-work-desc .how-vaccines-work-image img {
  border-radius: 5px;
}

.how-vaccines-work-desc .how-vaccines-work-image .video-btn {
  display: inline-block;
  width: 70px;
  height: 70px;
  line-height: 70px;
  background-color: #ffffff;
  border-radius: 50%;
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.how-vaccines-work-desc .how-vaccines-work-image .video-btn i {
  font-size: 50px;
  color: #0CB8B6;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  position: absolute;
  left: 5px;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  text-align: center;
}

.how-vaccines-work-desc .how-vaccines-work-image .video-btn::before {
  content: '';
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  border-radius: 50%;
  border: 2px solid #ffffff;
  -webkit-animation: ripple 2s linear infinite;
          animation: ripple 2s linear infinite;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.how-vaccines-work-desc .how-vaccines-work-image .video-btn:hover {
  background-color: #0D0246;
}

.how-vaccines-work-desc .how-vaccines-work-image .video-btn:hover i {
  color: #ffffff;
}

.how-vaccines-work-desc .bottom-content {
  text-align: center;
  margin-top: 25px;
}

.how-vaccines-work-desc .bottom-content span {
  display: inline-block;
  padding: 25px 35px;
  background-color: #0CB8B6;
  width: 100%;
  color: #ffffff;
  border-radius: 5px;
}

.how-vaccines-work-sidebar {
  margin-left: 20px;
}

.how-vaccines-work-sidebar .sidebar-box {
  background-color: #F1F5FE;
  padding: 25px;
  border-radius: 5px;
  margin-bottom: 25px;
}

.how-vaccines-work-sidebar .sidebar-box:last-child {
  margin-bottom: 0;
}

.how-vaccines-work-sidebar .sidebar-box h3 {
  font-size: 22px;
  color: #0D0246;
  margin-bottom: 20px;
}

.how-vaccines-work-sidebar .sidebar-box .list {
  padding: 0;
  margin-bottom: 0;
}

.how-vaccines-work-sidebar .sidebar-box .list li {
  list-style-type: none;
  margin-bottom: 15px;
  padding-bottom: 15px;
  border-bottom: 1px solid #ffffff;
}

.how-vaccines-work-sidebar .sidebar-box .list li:last-child {
  margin-bottom: 0;
  padding-bottom: 0;
  border-bottom: none;
}

.how-vaccines-work-sidebar .sidebar-box .list li a {
  color: #486683;
  position: relative;
  width: 100%;
  padding-right: 25px;
}

.how-vaccines-work-sidebar .sidebar-box .list li a:hover {
  color: #0CB8B6;
}

.how-vaccines-work-sidebar .sidebar-box .list li a::before {
  position: absolute;
  content: "\ea50";
  right: 0;
  top: -2.5px;
  font-family: boxicons;
  color: #486683;
  font-size: 18px;
  font-weight: bold;
}

/*================================================
Covid FAQ Area CSS
=================================================*/
.covid-faq-accordion .accordion .accordion-item {
  display: block;
  margin-bottom: 10px;
  background-color: transparent;
  border: 1px solid #E2E5EA;
  border-radius: 8px;
}

.covid-faq-accordion .accordion .accordion-item:last-child {
  margin-bottom: 0;
}

.covid-faq-accordion .accordion .accordion-title {
  padding: 15px 55px 15px 70px;
  color: #0D0246;
  position: relative;
  display: block;
  text-transform: capitalize;
  font-size: 18px;
  font-weight: 500;
  cursor: pointer;
  border-radius: 8px 8px 0 0;
}

.covid-faq-accordion .accordion .accordion-title i {
  position: absolute;
  right: 20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  color: #0D0246;
  font-size: 20px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-faq-accordion .accordion .accordion-title.active {
  -webkit-box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
          box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
}

.covid-faq-accordion .accordion .accordion-title.active i::before {
  content: "\ea32";
  color: #0CB8B6;
}

.covid-faq-accordion .accordion .accordion-title .number {
  display: inline-block;
  height: 30px;
  width: 30px;
  line-height: 30px;
  background: rgba(12, 184, 182, 0.2);
  border-radius: 5px;
  text-align: center;
  color: #0CB8B6;
  font-size: 15px;
  position: absolute;
  left: 20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.covid-faq-accordion .accordion .accordion-content {
  display: none;
  padding: 0 20px 20px 70px;
  -webkit-box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
          box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.07);
  border-radius: 0 0 8px 8px;
}

.covid-faq-accordion .accordion .accordion-content p {
  color: #6a6c72;
  font-weight: 400;
}

.covid-faq-accordion .accordion .accordion-content.show {
  display: block;
  border-radius: 0 0 8px 8px;
}

/*================================================
Covid Appointment Area CSS
=================================================*/
.covid-appointment-form {
  max-width: 750px;
  margin: auto;
}

.covid-appointment-form .form-group {
  margin-bottom: 20px;
}

.covid-appointment-form label {
  color: #6a6c72;
  display: inline-block;
  margin-bottom: 10px;
}

.covid-appointment-form .form-control {
  background-color: #F1F5FE;
  border: 1px solid #F1F5FE;
  display: inline-block;
  height: 55px;
  padding: 15px 20px;
  outline: 0;
  -webkit-box-shadow: unset;
          box-shadow: unset;
  border-radius: 8px;
  font-size: 14px;
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-appointment-form .form-control::-webkit-input-placeholder {
  color: #486683;
}

.covid-appointment-form .form-control:-ms-input-placeholder {
  color: #486683;
}

.covid-appointment-form .form-control::-ms-input-placeholder {
  color: #486683;
}

.covid-appointment-form .form-control::placeholder {
  color: #486683;
}

.covid-appointment-form .form-control:focus {
  border: 1px solid #0CB8B6;
}

.covid-appointment-form .form-control:focus::-webkit-input-placeholder {
  color: transparent;
}

.covid-appointment-form .form-control:focus:-ms-input-placeholder {
  color: transparent;
}

.covid-appointment-form .form-control:focus::-ms-input-placeholder {
  color: transparent;
}

.covid-appointment-form .form-control:focus::placeholder {
  color: transparent;
}

.covid-appointment-form textarea.form-control {
  min-height: 150px;
}

.covid-appointment-form .nice-select {
  border-radius: 5px;
  background-color: #F1F5FE;
  border: 1px solid #F1F5FE;
  font-size: 14px;
  color: #486683;
  height: 55px;
  line-height: 55px;
  padding-left: 20px;
  padding-right: 35px;
}

.covid-appointment-form .nice-select::after {
  border-color: #486683;
  height: 8px;
  width: 8px;
  right: 18px;
  margin-top: -5px;
}

.covid-appointment-form .nice-select .list {
  background-color: #ffffff;
  -webkit-box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
          box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
  border-radius: 0;
  height: 200px;
  width: 100%;
  overflow-y: scroll;
  margin-top: 0;
  margin-bottom: 0;
}

.covid-appointment-form .nice-select .list .option {
  line-height: 40px;
  min-height: 40px;
  color: #6a6c72;
  padding-left: 15px;
  padding-top: 5px;
  padding-right: 15px;
  display: inherit;
  margin-right: 0;
}

.covid-appointment-form .nice-select .list .option.selected {
  background-color: #0CB8B6 !important;
  color: #ffffff;
  font-weight: normal;
}

.covid-appointment-form .nice-select:focus {
  border: 1px solid #0CB8B6;
}

.covid-appointment-form .default-btn {
  border: none;
  background: -webkit-gradient(linear, left top, right top, from(rgba(12, 184, 182, 0.7)), to(#0CB8B6));
  background: linear-gradient(90deg, rgba(12, 184, 182, 0.7) 0%, #0CB8B6 100%);
  color: #ffffff;
  padding: 15px 30px;
  width: 100%;
}

.covid-appointment-form .default-btn i {
  margin-left: 5px;
  position: relative;
  top: 1px;
}

/*================================================
Covid Information Area CSS
=================================================*/
.covid-info-card {
  background-color: #F1F5FE;
  border-radius: 5px;
  margin-bottom: 25px;
  padding: 25px;
  text-align: center;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-info-card .icon {
  margin-bottom: 20px;
}

.covid-info-card .icon i {
  display: inline-block;
  height: 65px;
  width: 65px;
  line-height: 65px;
  background-color: #ffffff;
  color: #0CB8B6;
  text-align: center;
  border-radius: 50px;
  font-size: 35px;
}

.covid-info-card h3 {
  font-size: 20px;
  color: #0D0246;
  margin-bottom: 0;
}

.covid-info-card span {
  color: #486683;
  display: inline-block;
  margin-top: 12px;
  line-height: 1.8;
}

.covid-info-card span a {
  color: #486683;
}

.covid-info-card span a:hover {
  color: #0CB8B6;
}

.covid-info-card:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

/*================================================
Covid Contact Area CSS
=================================================*/
.covid-contact-area .section-title.with-covid-color h2 {
  margin-top: 0;
  position: relative;
  top: -5px;
}

.covid-contact-form {
  max-width: 750px;
  margin: auto;
}

.covid-contact-form .form-group {
  margin-bottom: 20px;
}

.covid-contact-form label {
  color: #6a6c72;
  display: inline-block;
  margin-bottom: 10px;
}

.covid-contact-form .form-control {
  background-color: #F1F5FE;
  border: 1px solid #F1F5FE;
  display: inline-block;
  height: 55px;
  padding: 15px 20px;
  outline: 0;
  -webkit-box-shadow: unset;
          box-shadow: unset;
  border-radius: 8px;
  font-size: 14px;
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-contact-form .form-control::-webkit-input-placeholder {
  color: #486683;
}

.covid-contact-form .form-control:-ms-input-placeholder {
  color: #486683;
}

.covid-contact-form .form-control::-ms-input-placeholder {
  color: #486683;
}

.covid-contact-form .form-control::placeholder {
  color: #486683;
}

.covid-contact-form .form-control:focus {
  border: 1px solid #0CB8B6;
}

.covid-contact-form .form-control:focus::-webkit-input-placeholder {
  color: transparent;
}

.covid-contact-form .form-control:focus:-ms-input-placeholder {
  color: transparent;
}

.covid-contact-form .form-control:focus::-ms-input-placeholder {
  color: transparent;
}

.covid-contact-form .form-control:focus::placeholder {
  color: transparent;
}

.covid-contact-form textarea.form-control {
  min-height: 150px;
}

.covid-contact-form .default-btn {
  border: none;
  background: -webkit-gradient(linear, left top, right top, from(rgba(12, 184, 182, 0.7)), to(#0CB8B6));
  background: linear-gradient(90deg, rgba(12, 184, 182, 0.7) 0%, #0CB8B6 100%);
  color: #ffffff;
  padding: 15px 30px;
  width: 100%;
}

.covid-contact-form .default-btn i {
  margin-left: 5px;
  position: relative;
  top: 1px;
}

.covid-contact-form .list-unstyled {
  margin-top: 10px;
}

.covid-contact-form .list-unstyled li {
  color: red;
  font-size: 14px;
}

.covid-contact-form .text-danger {
  font-size: 18px;
  margin-top: 10px;
  margin-bottom: 0;
}

/*================================================
Covid Blog Details Area CSS
=================================================*/
.covid-blog-details-desc {
  padding-right: 35px;
}

.covid-blog-details-desc .content {
  margin-bottom: 35px;
}

.covid-blog-details-desc .content h3 {
  font-size: 40px;
  color: #0D0246;
  margin-bottom: 0;
}

.covid-blog-details-desc .content span {
  font-size: 14px;
  color: #486683;
  font-weight: 400;
  letter-spacing: 1px;
  display: inline-block;
  margin-top: 15px;
  position: relative;
  padding-left: 25px;
}

.covid-blog-details-desc .content span::before {
  position: absolute;
  content: "\ea16";
  left: 0;
  top: -3.5px;
  font-family: boxicons;
  color: #0CB8B6;
  font-size: 18px;
  font-weight: bold;
}

.covid-blog-details-desc .image {
  overflow: hidden;
  margin-bottom: 30px;
  border-radius: 5px;
}

.covid-blog-details-desc .image img {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 5px;
}

.covid-blog-details-desc .image:hover img {
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}

.covid-blog-details-desc .block-images {
  margin-bottom: 35px;
}

.covid-blog-details-desc .block-images .block {
  overflow: hidden;
  border-radius: 5px;
  margin-top: 15px;
}

.covid-blog-details-desc .block-images .block img {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 5px;
}

.covid-blog-details-desc .block-images .block:hover img {
  -webkit-transform: scale(1.2);
          transform: scale(1.2);
}

.covid-blog-details-desc h4 {
  font-size: 25px;
  margin-bottom: 15px;
}

.covid-blog-details-desc .article-tag {
  padding: 0;
  margin-top: 20px;
  margin-bottom: 0;
}

.covid-blog-details-desc .article-tag span {
  font-size: 16px;
  font-weight: 600;
  color: #0D0246;
  margin-right: 5px;
}

.covid-blog-details-desc .article-tag a i {
  display: inline-block;
  height: 35px;
  width: 35px;
  line-height: 35px;
  background: rgba(12, 184, 182, 0.1);
  color: #0CB8B6;
  font-size: 16px;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  text-align: center;
}

.covid-blog-details-desc .article-tag a i:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
  background-color: #0CB8B6;
  color: #ffffff;
}

.covid-blog-details-desc .comments-area {
  background-color: #F1F5FE;
  padding: 35px;
}

.covid-blog-details-desc .comments-area .children {
  margin-left: 0;
}

.covid-blog-details-desc .comments-area .comments-title {
  color: #0D0246;
}

.covid-blog-details-desc .comments-area .comment-author {
  font-size: 18px;
  color: #0D0246;
}

.covid-blog-details-desc .comments-area .comment-body {
  position: relative;
}

.covid-blog-details-desc .comments-area .comment-body .reply {
  margin-top: 0;
  position: absolute;
  top: 0;
  right: 0;
}

.covid-blog-details-desc .comments-area .comment-body .reply a {
  border: 1px dashed #0CB8B6;
  color: #ffffff;
  padding: 5px 12px 5px;
  border-radius: 5px;
  background-color: #0CB8B6;
}

.covid-blog-details-desc .comments-area .comment-body .reply a:hover {
  background-color: #0D0246;
}

.covid-blog-details-desc .comments-area .comment-body .comment-meta {
  padding-right: 110px;
}

.covid-blog-details-desc .comments-area .comment-body .comment-metadata {
  color: #486683;
}

.covid-blog-details-desc .comments-area .comment-body .comment-content p {
  color: #486683;
  font-size: 15px;
}

.covid-blog-details-desc .comments-area .comment-respond .comment-reply-title {
  color: #0D0246;
}

.covid-blog-details-desc .comments-area .comment-respond input[type="date"], .covid-blog-details-desc .comments-area .comment-respond input[type="time"], .covid-blog-details-desc .comments-area .comment-respond input[type="datetime-local"], .covid-blog-details-desc .comments-area .comment-respond input[type="week"], .covid-blog-details-desc .comments-area .comment-respond input[type="month"], .covid-blog-details-desc .comments-area .comment-respond input[type="text"], .covid-blog-details-desc .comments-area .comment-respond input[type="email"], .covid-blog-details-desc .comments-area .comment-respond input[type="url"], .covid-blog-details-desc .comments-area .comment-respond input[type="password"], .covid-blog-details-desc .comments-area .comment-respond input[type="search"], .covid-blog-details-desc .comments-area .comment-respond input[type="tel"], .covid-blog-details-desc .comments-area .comment-respond input[type="number"], .covid-blog-details-desc .comments-area .comment-respond textarea {
  background-color: #ffffff;
  border: 1px solid #ffffff;
  color: #486683;
}

.covid-blog-details-desc .comments-area .comment-respond input[type="date"]::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="time"]::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="week"]::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="month"]::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="text"]::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="email"]::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="url"]::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="password"]::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="search"]::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="tel"]::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="number"]::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond textarea::-webkit-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-blog-details-desc .comments-area .comment-respond input[type="date"]:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="time"]:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="week"]:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="month"]:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="text"]:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="email"]:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="url"]:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="password"]:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="search"]:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="tel"]:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="number"]:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond textarea:-ms-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-blog-details-desc .comments-area .comment-respond input[type="date"]::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="time"]::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="week"]::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="month"]::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="text"]::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="email"]::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="url"]::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="password"]::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="search"]::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="tel"]::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="number"]::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond textarea::-ms-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-blog-details-desc .comments-area .comment-respond input[type="date"]::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="time"]::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="week"]::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="month"]::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="text"]::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="email"]::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="url"]::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="password"]::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="search"]::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="tel"]::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="number"]::placeholder, .covid-blog-details-desc .comments-area .comment-respond textarea::placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-blog-details-desc .comments-area .comment-respond input[type="date"]:focus, .covid-blog-details-desc .comments-area .comment-respond input[type="time"]:focus, .covid-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]:focus, .covid-blog-details-desc .comments-area .comment-respond input[type="week"]:focus, .covid-blog-details-desc .comments-area .comment-respond input[type="month"]:focus, .covid-blog-details-desc .comments-area .comment-respond input[type="text"]:focus, .covid-blog-details-desc .comments-area .comment-respond input[type="email"]:focus, .covid-blog-details-desc .comments-area .comment-respond input[type="url"]:focus, .covid-blog-details-desc .comments-area .comment-respond input[type="password"]:focus, .covid-blog-details-desc .comments-area .comment-respond input[type="search"]:focus, .covid-blog-details-desc .comments-area .comment-respond input[type="tel"]:focus, .covid-blog-details-desc .comments-area .comment-respond input[type="number"]:focus, .covid-blog-details-desc .comments-area .comment-respond textarea:focus {
  background-color: transparent;
  border: 1px solid #0CB8B6;
}

.covid-blog-details-desc .comments-area .comment-respond input[type="date"]:focus::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="time"]:focus::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]:focus::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="week"]:focus::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="month"]:focus::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="text"]:focus::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="email"]:focus::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="url"]:focus::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="password"]:focus::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="search"]:focus::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="tel"]:focus::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="number"]:focus::-webkit-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond textarea:focus::-webkit-input-placeholder {
  color: transparent;
}

.covid-blog-details-desc .comments-area .comment-respond input[type="date"]:focus:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="time"]:focus:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]:focus:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="week"]:focus:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="month"]:focus:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="text"]:focus:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="email"]:focus:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="url"]:focus:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="password"]:focus:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="search"]:focus:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="tel"]:focus:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="number"]:focus:-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond textarea:focus:-ms-input-placeholder {
  color: transparent;
}

.covid-blog-details-desc .comments-area .comment-respond input[type="date"]:focus::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="time"]:focus::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]:focus::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="week"]:focus::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="month"]:focus::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="text"]:focus::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="email"]:focus::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="url"]:focus::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="password"]:focus::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="search"]:focus::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="tel"]:focus::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="number"]:focus::-ms-input-placeholder, .covid-blog-details-desc .comments-area .comment-respond textarea:focus::-ms-input-placeholder {
  color: transparent;
}

.covid-blog-details-desc .comments-area .comment-respond input[type="date"]:focus::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="time"]:focus::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]:focus::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="week"]:focus::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="month"]:focus::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="text"]:focus::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="email"]:focus::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="url"]:focus::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="password"]:focus::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="search"]:focus::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="tel"]:focus::placeholder, .covid-blog-details-desc .comments-area .comment-respond input[type="number"]:focus::placeholder, .covid-blog-details-desc .comments-area .comment-respond textarea:focus::placeholder {
  color: transparent;
}

.covid-blog-details-desc .comments-area .comment-respond .comment-form-cookies-consent {
  margin-top: 8px;
}

.covid-blog-details-desc .comments-area .comment-respond .comment-form-cookies-consent input {
  top: 6.5px;
}

.covid-blog-details-desc .comments-area .comment-respond .form-submit input {
  background: #0CB8B6;
  color: #ffffff;
}

.covid-blog-details-desc .comments-area .comment-respond .form-submit input:hover {
  background-color: #0D0246;
}

.covid-widget-area .widget .widget-title {
  color: #0D0246;
}

.covid-widget-area .widget_search form .search-field {
  background-color: #F1F5FE;
  border: 1px solid #F1F5FE;
  color: #486683;
  padding: 15px 20px;
  border-radius: 5px;
}

.covid-widget-area .widget_search form .search-field::-webkit-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-widget-area .widget_search form .search-field:-ms-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-widget-area .widget_search form .search-field::-ms-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-widget-area .widget_search form .search-field::placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.covid-widget-area .widget_search form .search-field:focus {
  background-color: transparent;
  border: 1px solid #0CB8B6;
}

.covid-widget-area .widget_search form .search-field:focus::-webkit-input-placeholder {
  color: transparent;
}

.covid-widget-area .widget_search form .search-field:focus:-ms-input-placeholder {
  color: transparent;
}

.covid-widget-area .widget_search form .search-field:focus::-ms-input-placeholder {
  color: transparent;
}

.covid-widget-area .widget_search form .search-field:focus::placeholder {
  color: transparent;
}

.covid-widget-area .widget_search form button {
  background-color: #0CB8B6;
  color: #ffffff;
}

.covid-widget-area .widget_search form button:hover {
  background-color: #0D0246;
}

.covid-widget-area .widget_grin_posts_thumb {
  background: #F1F5FE;
  border-radius: 5px;
  padding: 30px;
}

.covid-widget-area .widget_grin_posts_thumb .item .thumb .fullimage.bg1 {
  background-image: url(../images/covid/blog/blog1.jpg);
}

.covid-widget-area .widget_grin_posts_thumb .item .thumb .fullimage.bg2 {
  background-image: url(../images/covid/blog/blog2.jpg);
}

.covid-widget-area .widget_grin_posts_thumb .item .thumb .fullimage.bg3 {
  background-image: url(../images/covid/blog/blog3.jpg);
}

.covid-widget-area .widget_grin_posts_thumb .item .info {
  margin-top: 0;
}

.covid-widget-area .widget_grin_posts_thumb .item .info .title {
  font-weight: 600;
}

.covid-widget-area .widget_grin_posts_thumb .item .info .title a {
  color: #0D0246;
}

.covid-widget-area .widget_grin_posts_thumb .item .info .title a:hover {
  color: #0CB8B6;
}

.covid-widget-area .widget_grin_posts_thumb .item .info span {
  color: #0CB8B6;
  display: inline-block;
  margin-top: 10px;
  font-size: 14px;
}

.covid-widget-area .widget_categories {
  background: #F1F5FE;
  border-radius: 5px;
  padding: 30px;
}

.covid-widget-area .widget_categories ul li {
  padding-left: 0;
  margin-bottom: 18px;
}

.covid-widget-area .widget_categories ul li::before {
  display: none;
}

.covid-widget-area .widget_categories ul li a {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  color: #486683;
  position: relative;
  padding-left: 28px;
}

.covid-widget-area .widget_categories ul li a::before {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  position: absolute;
  content: "\f114";
  left: 0;
  top: -4px;
  font-family: "Flaticon";
  color: #486683;
  font-size: 18px;
}

.covid-widget-area .widget_categories ul li a:hover {
  color: #0CB8B6;
}

.covid-widget-area .widget_categories ul li a:hover::before {
  color: #0CB8B6;
}

.covid-widget-area .widget_categories ul li:last-child {
  margin-bottom: 0;
}

.covid-widget-area .widget_tag_cloud {
  background: #F1F5FE;
  border-radius: 5px;
  padding: 30px;
}

.covid-widget-area .tagcloud a {
  background: #ffffff;
  color: #486683;
  border-radius: 5px;
}

.covid-widget-area .tagcloud a:hover, .covid-widget-area .tagcloud a:focus {
  color: #ffffff;
  background-color: #0CB8B6;
}

/*================================================
Covid Footer Area CSS
=================================================*/
.covid-footer-area {
  background-color: #0D0246;
  position: relative;
  z-index: 1;
  overflow: hidden;
}

.covid-footer-widget {
  margin-bottom: 25px;
}

.covid-footer-widget h2 {
  font-size: 35px;
  color: #ffffff;
  margin-bottom: 20px;
}

.covid-footer-widget h2 a {
  color: #ffffff;
}

.covid-footer-widget p {
  color: #ffffff;
  margin-bottom: 0;
}

.covid-footer-widget .share-link {
  padding: 0;
  margin-top: 20px;
  margin-bottom: 0;
}

.covid-footer-widget .share-link li {
  list-style-type: none;
  display: inline-block;
  margin-right: 5px;
}

.covid-footer-widget .share-link li:last-child {
  margin-right: 0;
}

.covid-footer-widget .share-link li a i {
  color: #ffffff;
  font-size: 15px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  display: inline-block;
  height: 30px;
  width: 30px;
  line-height: 30px;
  background: rgba(255, 255, 255, 0.2);
  text-align: center;
  border-radius: 50px;
  border: none;
}

.covid-footer-widget .share-link li a i:hover {
  background-color: #0CB8B6;
}

.covid-footer-widget h3 {
  font-size: 20px;
  color: #ffffff;
  margin-bottom: 20px;
}

.covid-footer-widget .quick-links {
  padding: 0;
  margin-bottom: 0;
}

.covid-footer-widget .quick-links li {
  list-style-type: none;
  margin-bottom: 15px;
}

.covid-footer-widget .quick-links li:last-child {
  margin-bottom: 0;
}

.covid-footer-widget .quick-links li a {
  color: #ffffff;
  position: relative;
  padding-left: 30px;
}

.covid-footer-widget .quick-links li a::before {
  position: absolute;
  content: "\f114";
  left: 0;
  top: -2px;
  font-family: "Flaticon";
  color: #0CB8B6;
}

.covid-footer-widget .quick-links li a:hover {
  color: #0CB8B6;
}

.covid-footer-widget .info {
  padding: 0;
  margin-bottom: 0;
}

.covid-footer-widget .info li {
  list-style-type: none;
  margin-bottom: 20px;
  color: #CCCCCC;
}

.covid-footer-widget .info li:last-child {
  margin-bottom: 0;
}

.covid-footer-widget .info li span {
  color: #ffffff;
  font-weight: 500;
}

.covid-footer-widget .info li a {
  color: #CCCCCC;
}

.covid-footer-widget .info li a:hover {
  color: #0CB8B6;
}

.covid-footer-widget .hours-list {
  padding: 0;
  margin-bottom: 0;
}

.covid-footer-widget .hours-list li {
  list-style-type: none;
  margin-bottom: 15px;
}

.covid-footer-widget .hours-list li:last-child {
  margin-bottom: 0;
}

.covid-footer-widget .hours-list li span {
  color: #ffffff;
}

.covid-copyright-area {
  background-color: #0B0235;
  padding-top: 30px;
  padding-bottom: 30px;
  margin-top: 75px;
}

.covid-copyright-area .copyright-area-content {
  border-top: none;
  padding-top: 0;
}

.covid-copyright-area .copyright-area-content a {
  color: #0CB8B6;
}

.covid-copyright-area .copyright-area-content a:hover {
  color: #ffffff;
}

.covid-footer-shape {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  text-align: center;
  z-index: -1;
  bottom: 0;
}

/* End "Covid 19 Vaccination Center Demo CSS" */
/* Start "Hospital Website Demo CSS" */
.section-title.with-hospital-color span {
  color: #DF474A;
  font-family: "Jost", sans-serif;
}

.section-title.with-hospital-color h2 {
  color: #0A335B;
  margin-bottom: 0;
  margin-top: 15px;
}

.hospital-pagination .page-numbers {
  background-color: transparent;
  border: 1px solid rgba(19, 168, 180, 0.24);
  color: #0A335B;
  border-radius: 50px;
  -webkit-box-shadow: unset;
          box-shadow: unset;
  font-weight: 500;
  font-family: "Jost", sans-serif;
}

.hospital-pagination .page-numbers.current, .hospital-pagination .page-numbers:hover, .hospital-pagination .page-numbers:focus {
  background: #13A8B4;
  color: #ffffff;
  border: 1px solid #13A8B4;
}

/*================================================
Hospital Bar Area CSS
=================================================*/
.hospital-top-area {
  background-color: #0A335B;
}

.hospital-top-area .top-optional-wrap {
  text-align: start;
}

.hospital-top-area .top-optional-wrap li {
  margin-right: 10px;
  border-right: 1px solid #355370;
  padding-right: 12px;
  line-height: 1;
}

.hospital-top-area .top-optional-wrap li:last-child {
  margin-right: 0;
  border-right: none;
  padding-right: 0;
}

.hospital-top-area .top-optional-wrap li a i {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  height: unset;
  width: unset;
  line-height: unset;
  background: transparent;
  border: none;
  font-size: 16.5px;
  color: #ffffff;
}

.hospital-top-area .top-optional-wrap li a i:hover {
  color: #13A8B4;
  -webkit-transform: unset;
          transform: unset;
}

.hospital-top-area .top-information-wrap {
  text-align: end;
}

.hospital-top-area .top-information-wrap li {
  color: #CCCCCC;
  font-family: "Nunito Sans", sans-serif;
  font-weight: 600;
  border-right: 1px solid #355370;
  padding-right: 15px;
  font-family: "Jost", sans-serif;
}

.hospital-top-area .top-information-wrap li:last-child {
  border-right: none;
  padding-right: 0;
}

.hospital-top-area .top-information-wrap li a {
  color: #CCCCCC;
}

.hospital-top-area .top-information-wrap li a:hover {
  color: #13A8B4;
}

.hospital-top-area .top-information-wrap li i {
  color: #ffffff;
}

/*================================================
Hospital Navbar Area CSS
=================================================*/
.hospital-navbar-area .main-navbar {
  background-color: transparent;
}

.hospital-navbar-area .main-navbar .container-fluid {
  padding-left: 30px;
  padding-right: 30px;
}

.hospital-navbar-area .main-navbar .navbar .navbar-brand {
  color: #0A335B;
  font-size: 35px;
  text-transform: capitalize;
  font-weight: bold;
  font-family: "Jost", sans-serif;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav {
  margin-left: auto !important;
  margin-right: 0 !important;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item a {
  color: #0A335B;
  font-family: "Jost", sans-serif;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item a::before {
  display: none;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item a:hover, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item a:focus, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item a.active {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item a i {
  font-size: 15px;
  margin-left: -4px;
  margin-right: -4px;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item:hover a, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item.active a {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a {
  color: #0A335B;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a:hover, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a:focus, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a.active {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a:hover::before, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a:focus::before, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li a.active::before {
  display: none;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:hover, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a:focus, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li a.active {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a {
  color: #0A335B;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a {
  color: #0A335B;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:hover, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a:focus, .hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li a.active {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li .dropdown-menu li.active a {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li .dropdown-menu li.active a {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .navbar-nav .nav-item .dropdown-menu li.active a {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .others-options {
  margin-left: 30px;
}

.hospital-navbar-area .main-navbar .navbar .others-options .option-item .search-btn a i {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .others-options .option-item .search-btn a i:hover {
  color: #077EC2;
}

.hospital-navbar-area .main-navbar .navbar .others-options .option-item .navbar-btn .default-btn {
  background-color: #DF474A;
  color: #ffffff;
  font-family: "Jost", sans-serif;
}

.hospital-navbar-area .main-navbar .navbar .others-options .option-item .navbar-btn .default-btn:hover {
  background-color: #174FA0;
}

.hospital-navbar-area .others-option-for-responsive .option-inner .others-options {
  margin-left: 0;
}

.hospital-navbar-area .others-option-for-responsive .option-inner .others-options .option-item .search-btn a i {
  color: #0A335B;
}

.hospital-navbar-area .others-option-for-responsive .option-inner .others-options .option-item .search-btn a i:hover {
  color: #13A8B4;
}

.hospital-navbar-area .others-option-for-responsive .option-inner .others-options .option-item .navbar-btn .default-btn {
  background-color: #077EC2;
  color: #ffffff;
  font-family: "Jost", sans-serif;
}

.hospital-navbar-area .others-option-for-responsive .option-inner .others-options .option-item .navbar-btn .default-btn:hover {
  background-color: #077EC2;
}

/*================================================
Hospital Banner Area CSS
=================================================*/
.hospital-banner-area {
  background-image: url(../images/hospital/banner/banner-bg.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  padding-top: 50px;
  overflow: hidden;
}

.hospital-banner-area .container-fluid {
  padding-left: 30px;
  padding-right: 30px;
}

.hospital-banner-content {
  position: relative;
  top: -25px;
}

.hospital-banner-content span {
  background: rgba(255, 255, 255, 0.21);
  border: 1px solid rgba(255, 255, 255, 0.46);
  border-radius: 5px;
  display: inline-block;
  padding: 8px 18px;
  font-size: 15px;
  color: #ffffff;
  margin-bottom: 20px;
  font-family: "Jost", sans-serif;
  font-weight: 500;
}

.hospital-banner-content h1 {
  font-size: 75px;
  color: #ffffff;
  margin-bottom: 15px;
  font-family: "Jost", sans-serif;
  font-weight: 900;
}

.hospital-banner-content p {
  color: #ffffff;
  font-family: "Jost", sans-serif;
  max-width: 750px;
  margin-bottom: 0;
}

.hospital-banner-content .banner-btn {
  margin-top: 25px;
}

.hospital-banner-content .banner-btn .default-btn {
  background-color: #DF474A;
  border: 1px solid #DF474A;
  padding: 15px 30px;
  font-family: "Jost", sans-serif;
}

.hospital-banner-content .banner-btn .default-btn:hover {
  background-color: transparent;
}

.hospital-banner-image {
  position: relative;
  z-index: 1;
}

.hospital-banner-image .circle {
  position: absolute;
  content: "";
  height: 625px;
  width: 625px;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(180.73deg, rgba(255, 255, 255, 0.6) -0.9%, rgba(255, 255, 255, 0) 101.47%, rgba(255, 255, 255, 0.287425) 101.48%, #FFFFFF 101.5%);
  z-index: -1;
  margin: auto;
  border-radius: 50%;
}

/*================================================
Hospital Specialist Area CSS
=================================================*/
.hospital-specialist-card {
  background-color: #ffffff;
  -webkit-box-shadow: 0px 0px 25px rgba(85, 85, 85, 0.1);
          box-shadow: 0px 0px 25px rgba(85, 85, 85, 0.1);
  border-radius: 10px;
  padding: 18px;
  margin-bottom: 25px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-specialist-card .specialist-content {
  position: relative;
  padding: 25px 0 25px 90px;
}

.hospital-specialist-card .specialist-content img {
  position: absolute;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.hospital-specialist-card .specialist-content h3 {
  font-size: 22px;
  margin-bottom: 0;
  font-family: "Jost", sans-serif;
  color: #0A335B;
  font-weight: 800;
}

.hospital-specialist-card:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

.view-all-specialist-btn {
  text-align: center;
  margin-top: 15px;
}

.view-all-specialist-btn .default-btn {
  background-color: #DF474A;
  padding: 15px 30px;
  font-family: "Jost", sans-serif;
}

.view-all-specialist-btn .default-btn:hover {
  background-color: #174B9F;
}

/*================================================
Hospital About Area CSS
=================================================*/
.hospital-about-area {
  background-color: #F8F8F8;
  position: relative;
  z-index: 1;
  overflow: hidden;
}

.hospital-about-content span {
  color: #DF474A;
  display: inline-block;
  margin-bottom: 15px;
  font-weight: 500;
  font-family: "Jost", sans-serif;
}

.hospital-about-content h3 {
  font-size: 40px;
  margin-bottom: 5px;
  color: #0A335B;
}

.hospital-about-content p {
  font-family: "Jost", sans-serif;
  margin-bottom: 5px;
  text-align:left;
}

.hospital-about-content h4 {
  font-size: 20px;
  font-family: "Jost", sans-serif;
  color: #0A335B;
}

.hospital-about-content .list {
  padding: 0;
  margin-top: 8px;
  margin-bottom: 0;
}

.hospital-about-content .list li {
  color: #0A335B;
  font-size: 14.5px;
  font-family: "Jost", sans-serif;
  list-style-type: none;
  margin-bottom: 8px;
  font-weight: 500;
  position: relative;

}

.hospital-about-content .list li:last-child {
  margin-bottom: 0;
}

.hospital-about-content .list li::before {
  position: absolute;
  
  font-family: boxicons;
  left: 0;
  top: 0;
  font-size: 18px;
  color: #13A8B4;
}

.hospital-about-content .about-btn {
  margin-top: 25px;
  display: flex;
}

.hospital-about-content .about-btn .default-btn {
  background-color: #DF474A;
  padding: 15px 30px;
  font-family: "Jost", sans-serif;
}

.hospital-about-content .about-btn .default-btn:hover {
  background-color: #174B9F;
}

.hospital-about-shape {
  position: absolute;
  bottom: -20px;
  right: 5%;
  -webkit-transform: translateX(-5%);
          transform: translateX(-5%);
  z-index: -1;
}
.srvc-btn {
    display: flex;
    justify-content: center;
    padding: 50px 0px;
}

/*================================================
Hospital Appointment Area CSS
=================================================*/
.hospital-appointment-area {
  background-image:url("https://besthomeopathydoctorind.com/assets/images/fun-facts-bg (1).png");
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}

.hospital-appointment-area .section-title.with-hospital-color span {
  color: #ffffff;
}

.hospital-appointment-area .section-title.with-hospital-color h2 {
  color: #ffffff;
}

.hospital-appointment-form .form-group {
  margin-bottom: 25px;
}

.hospital-appointment-form label {
  color: #6a6c72;
  display: inline-block;
  margin-bottom: 10px;
}

.hospital-appointment-form .form-control {
  background: rgba(255, 255, 255, 0.24);
  border: none;
  display: inline-block;
  height: 55px;
  padding: 15px 20px;
  outline: 0;
  -webkit-box-shadow: unset;
          box-shadow: unset;
  border-radius: 8px;
  font-size: 15px;
  color: #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  font-family: "Jost", sans-serif;
}

.hospital-appointment-form .form-control::-webkit-input-placeholder {
  color: #ffffff;
}

.hospital-appointment-form .form-control:-ms-input-placeholder {
  color: #ffffff;
}

.hospital-appointment-form .form-control::-ms-input-placeholder {
  color: #ffffff;
}

.hospital-appointment-form .form-control::placeholder {
  color: #ffffff;
}

.hospital-appointment-form .form-control:focus::-webkit-input-placeholder {
  color: transparent;
}

.hospital-appointment-form .form-control:focus:-ms-input-placeholder {
  color: transparent;
}

.hospital-appointment-form .form-control:focus::-ms-input-placeholder {
  color: transparent;
}

.hospital-appointment-form .form-control:focus::placeholder {
  color: transparent;
}

.hospital-appointment-form textarea.form-control {
  min-height: 150px;
}

.hospital-appointment-form .nice-select {
  border-radius: 5px;
  background: rgba(255, 255, 255, 0.24);
  border: none;
  font-size: 15px;
  color: #ffffff;
  height: 55px;
  line-height: 55px;
  font-family: "Jost", sans-serif;
  padding-left: 20px;
  padding-right: 35px;
}

.hospital-appointment-form .nice-select::after {
  border-bottom: 2px solid #ffffff;
  border-right: 2px solid #ffffff;
  height: 8px;
  width: 8px;
  right: 18px;
  margin-top: -5px;
}

.hospital-appointment-form .nice-select .list {
  background-color: #ffffff;
  -webkit-box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
          box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.09);
  border-radius: 0;
  height: 200px;
  width: 100%;
  overflow-y: scroll;
  margin-top: 0;
  margin-bottom: 0;
}

.hospital-appointment-form .nice-select .list .option {
  line-height: 40px;
  min-height: 40px;
  color: #6a6c72;
  padding-left: 15px;
  padding-top: 5px;
  padding-right: 15px;
  display: inherit;
  margin-right: 0;
}

.hospital-appointment-form .nice-select .list .option.selected {
  background-color: #13A8B4 !important;
  color: #ffffff;
  font-weight: normal;
}

.hospital-appointment-form .default-btn {
  border: none;
  background-color: #DF474A;
  margin-left: 145px;
  width: 50%;
  color: #FFF;
  font-family: "Jost", sans-serif;
}

.hospital-appointment-form .default-btn:hover {
  background-color: #DF474A;
  color: #ffffff;
}

.hospital-appointment-area-with-color {
  background-color: #F8F8F8;
}

.hospital-appointment-area-with-color .hospital-appointment-form {
  position: relative;
  top: -55px;
}

.hospital-appointment-area-with-color .hospital-appointment-form .content {
  margin-bottom: 30px;
}

.hospital-appointment-area-with-color .hospital-appointment-form .content span {
  color: #13A8B4;
  display: inline-block;
  margin-bottom: 15px;
  font-weight: 500;
  font-family: "Jost", sans-serif;
}

.hospital-appointment-area-with-color .hospital-appointment-form .content h3 {
  font-size: 40px;
  margin-bottom: 15px;
  font-family: "Jost", sans-serif;
  color: #0A335B;
  font-weight: 900;
}

.hospital-appointment-area-with-color .hospital-appointment-form .form-control {
  background: #ffffff;
  color: #486683;
}

.hospital-appointment-area-with-color .hospital-appointment-form .form-control::-webkit-input-placeholder {
  color: #486683;
}

.hospital-appointment-area-with-color .hospital-appointment-form .form-control:-ms-input-placeholder {
  color: #486683;
}

.hospital-appointment-area-with-color .hospital-appointment-form .form-control::-ms-input-placeholder {
  color: #486683;
}

.hospital-appointment-area-with-color .hospital-appointment-form .form-control::placeholder {
  color: #486683;
}

.hospital-appointment-area-with-color .hospital-appointment-form .form-control:focus::-webkit-input-placeholder {
  color: transparent;
}

.hospital-appointment-area-with-color .hospital-appointment-form .form-control:focus:-ms-input-placeholder {
  color: transparent;
}

.hospital-appointment-area-with-color .hospital-appointment-form .form-control:focus::-ms-input-placeholder {
  color: transparent;
}

.hospital-appointment-area-with-color .hospital-appointment-form .form-control:focus::placeholder {
  color: transparent;
}

.hospital-appointment-area-with-color .hospital-appointment-form .nice-select {
  background: #ffffff;
  color: #486683;
  color: #486683;
}

.hospital-appointment-area-with-color .hospital-appointment-form .nice-select::after {
  border-bottom: 2px solid #486683;
  border-right: 2px solid #486683;
}

.hospital-appointment-area-with-color .hospital-appointment-form .default-btn {
  background-color: #13A8B4;
  color: #ffffff;
}

.hospital-appointment-area-with-color .hospital-appointment-form .default-btn:hover {
  background-color: #0A335B;
  color: #ffffff;
}

/*================================================
Hospital Services Area CSS
=================================================*/
.hospital-services-area .section-title.with-hospital-color {
  max-width: 100%;
}

.hospital-services-area .section-title.with-hospital-color .default-btn {
  background-color: #DF474A;
  padding: 15px 30px;
  font-family: "Jost", sans-serif;
}

.hospital-services-area .section-title.with-hospital-color .default-btn:hover {
  background-color: #174B9F;
}

.hospital-services-area.bg-F8F8F8 {
  background-color: #F8F8F8;
}

.hospital-services-card {
ckground-color: #ffffff; */
ckground-color: #ffffff; */
   background-color: #124390;
  padding: 25px;
  border-top: 5px solid #F3F3F3;
  border-bottom: 5px solid #F3F3F3;
  border-left: 2px solid #F3F3F3;
  border-right: 2px solid #F3F3F3;
  border-radius: 20px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  margin-bottom: 25px;
}

.hospital-services-card .title {
  position: relative;
  margin-bottom: 10px;
}



.hospital-services-card .title h3 {
  font-size: 22px;
  margin-bottom: 0;
  margin-top:10px;
   font-family: 'Liberal';
  color: #0A335B;
  font-weight: 800;
}

.hospital-services-card p {
  font-family: "Jost", sans-serif;
  color: #fff;
}

.hospital-services-card .services-btn {
  color: #047DC0;
  font-weight: 500;
  font-family: "Jost", sans-serif;
}
.hospital-services-card{
    text-align:center;
    background: #0a2d81;
    
}
.hospital-services-card:hover {
  border-top: 5px solid #047DC0;
  border-bottom: 5px solid #047DC0;
  border-left: 2px solid #047DC0;
  border-right: 2px solid #047DC0;
}

.hospital-services-slides.owl-theme .owl-nav {
  margin-top: 0;
  -webkit-transition: 1s;
  transition: 1s;
  line-height: .01;
}

.hospital-services-slides.owl-theme .owl-nav [class*=owl-] {
  color: #0A335B;
  margin: 0;
  position: absolute;
  left: -55px;
  top: 45%;
  -webkit-transform: translateY(-45%);
          transform: translateY(-45%);
  padding: 0;
  background: rgba(10, 51, 91, 0.1);
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  font-size: 22px;
}

.hospital-services-slides.owl-theme .owl-nav [class*=owl-].owl-next {
  left: auto;
  right: -55px;
}

.hospital-services-slides.owl-theme .owl-nav [class*=owl-]:hover {
  color: #ffffff;
  background-color: #0A335B;
}

.hospital-services-slides.owl-theme .owl-nav [class*=owl-] i {
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

/*================================================
Hospital Skills Area CSS
=================================================*/
.hospital-skills-area {
  background: #F8F8F8;
}

.hospital-skills-content .sub-title {
  color: #13A8B4;
  display: inline-block;
  margin-bottom: 15px;
  font-weight: 500;
  font-family: "Jost", sans-serif;
}

.hospital-skills-content h3 {
  font-size: 40px;
  margin-bottom: 15px;
  color: #0A335B;
}

.hospital-skills-content p {
  font-family: "Jost", sans-serif;
  margin-bottom: 0;
}

.hospital-skills-content .skills {
  position: relative;
}

.hospital-skills-content .skills .skill-item {
  position: relative;
  margin-top: 25px;
}

.hospital-skills-content .skills .skill-item .skill-header {
  position: relative;
  margin-bottom: 15px;
}

.hospital-skills-content .skills .skill-item .skill-header .skill-title {
  font-size: 15.5px;
  margin-bottom: 0;
  font-family: "Jost", sans-serif;
  color: #0A335B;
  font-weight: 600;
}

.hospital-skills-content .skills .skill-item .skill-header .skill-percentage {
  position: absolute;
  right: 0;
  top: 0;
  font-family: "Jost", sans-serif;
  font-size: 15px;
  font-weight: 500;
  font-color: #0A335B;
}

.hospital-skills-content .skills .skill-item:last-child {
  margin-bottom: 0;
}

.hospital-skills-content .skills .skill-item .skill-bar {
  position: relative;
  width: 100%;
}

.hospital-skills-content .skills .skill-item .skill-bar .bar-inner {
  position: relative;
  width: 100%;
  background-color: #ffffff;
  padding: 10px;
  border-radius: 30px;
}

.hospital-skills-content .skills .skill-item .skill-bar .bar-inner .bar {
  position: absolute;
  left: 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  width: 0px;
  height: 3.5px;
  background: #13A8B4;
  -webkit-transition: all 2000ms ease;
  transition: all 2000ms ease;
  border-radius: 10px;
}

.hospital-skills-content .skills .skill-item .skill-bar .bar-inner .bar::before {
  position: absolute;
  content: '';
  height: 10px;
  width: 10px;
  border-radius: 100%;
  top: -3.5px;
  right: -1px;
  background-color: #13A8B4;
}

.hospital-skills-image {
  padding-left: 50px;
}

/*================================================
Hospital Fun Facts Area CSS
=================================================*/
.hospital-fun-facts-area {
  /*background-image: url(../images/fun-facts-bg (1).png);*/
  background-image:url("https://besthomeopathydoctorind.com/assets/images/fun-facts-bg (1).png");
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}

.hospital-fun-fact {
  margin-bottom: 25px;
  text-align: center;
  position: relative;
}

.hospital-fun-fact h3 {
  font-size: 70px;
  color: #ffffff;
  font-family: "Jost", sans-serif;
  margin-bottom: 5px;
  font-weight: 900;
}

.hospital-fun-fact h3 .plus {
  position: relative;
  font-size: 65px;
  left: -10px;
}

.hospital-fun-fact .odometer-formatting-mark {
  display: none;
}

.hospital-fun-fact p {
  font-size: 18px;
  color: #ffffff;
  font-family: "Jost", sans-serif;
  font-weight: 500;
  text-align: center;
}

.hospital-fun-fact .shape {
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  z-index: 1;
  text-align: center;
}

/*================================================
Hospital Team Area CSS
=================================================*/
.hospital-team-card {
  margin-bottom: 25px;
  background-color: #ffffff;
  -webkit-box-shadow: 0px 0px 30px rgba(102, 102, 102, 0.1);
          box-shadow: 0px 0px 30px rgba(102, 102, 102, 0.1);
  border-radius: 25px;
  text-align: center;
}

.hospital-team-card .team-image {
  position: relative;
}

.hospital-team-card .team-image img {
  border-radius: 25px 25px 110px 110px;
}

.hospital-team-card .team-image .share-link {
  position: absolute;
  left: 0;
  right: 0;
  text-align: center;
  bottom: 0;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  opacity: 0;
  visibility: hidden;
}

.hospital-team-card .team-image .share-link a {
  margin-right: 5px;
}

.hospital-team-card .team-image .share-link a:last-child {
  margin-right: 0;
}

.hospital-team-card .team-image .share-link a i {
  display: inline-block;
  height: 35px;
  width: 35px;
  line-height: 35px;
  background-color: #13A8B4;
  color: #ffffff;
  border-radius: 50px;
  border: 2px solid #ffffff;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-team-card .team-image .share-link a i:hover {
  background-color: #0A335B;
  border: 2px solid #0A335B;
}

.hospital-team-card .team-content {
  padding: 30px 25px 25px 25px;
}

.hospital-team-card .team-content h3 {
  font-size: 22px;
  color: #0A335B;
  margin-bottom: 0;
  font-family: "Jost", sans-serif;
  font-weight: bold;
}

.hospital-team-card .team-content span {
  font-family: "Jost", sans-serif;
  color: #486683;
  display: inline-block;
  margin-top: 12px;
}

.hospital-team-card:hover .team-image {
  position: relative;
}

.hospital-team-card:hover .team-image img {
  border-radius: 25px 25px 110px 110px;
}

.hospital-team-card:hover .team-image .share-link {
  opacity: 1;
  visibility: visible;
  bottom: -15px;
}

.hospital-team-slides.owl-theme .owl-nav {
  margin-top: 0;
  -webkit-transition: 1s;
  transition: 1s;
  line-height: .01;
}

.hospital-team-slides.owl-theme .owl-nav [class*=owl-] {
  color: #0A335B;
  margin: 0;
  position: absolute;
  left: -55px;
  top: 45%;
  -webkit-transform: translateY(-45%);
          transform: translateY(-45%);
  padding: 0;
  background: rgba(10, 51, 91, 0.1);
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  font-size: 22px;
}

.hospital-team-slides.owl-theme .owl-nav [class*=owl-].owl-next {
  left: auto;
  right: -55px;
}

.hospital-team-slides.owl-theme .owl-nav [class*=owl-]:hover {
  color: #ffffff;
  background-color: #0A335B;
}

.hospital-team-slides.owl-theme .owl-nav [class*=owl-] i {
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

/*================================================
Hospital App Area CSS
=================================================*/
.hospital-app-area {
  background: #F8F8F8;
  overflow: hidden;
}

.hospital-app-image {
  position: relative;
  z-index: 1;
  text-align: center;
}

.hospital-app-image .circle {
  position: absolute;
  content: "";
  height: 625px;
  width: 625px;
  left: 0;
  right: 0;
  bottom: 0;
  background: -webkit-gradient(linear, left top, left bottom, from(rgba(19, 168, 180, 0.35)), to(rgba(196, 196, 196, 0)));
  background: linear-gradient(180deg, rgba(19, 168, 180, 0.35) 0%, rgba(196, 196, 196, 0) 100%);
  z-index: -1;
  margin: auto;
  border-radius: 50%;
}

.hospital-app-content {
  padding-left: 30px;
  position: relative;
  top: -45px;
}

.hospital-app-content span {
  color: #13A8B4;
  display: inline-block;
  margin-bottom: 15px;
  font-weight: 500;
  font-family: "Jost", sans-serif;
}

.hospital-app-content h3 {
  font-size: 40px;
  margin-bottom: 15px;
  font-family: "Jost", sans-serif;
  color: #0A335B;
  font-weight: 900;
}

.hospital-app-content p {
  font-family: "Jost", sans-serif;
  margin-bottom: 0;
}

.hospital-app-content .list {
  padding: 0;
  margin-top: 20px;
  margin-bottom: 0;
}

.hospital-app-content .list li {
  background-color: #ffffff;
  list-style-type: none;
  margin-bottom: 25px;
  border-radius: 10px;
  position: relative;
  padding: 25px 20px 25px 75px;
}

.hospital-app-content .list li:last-child {
  margin-bottom: 0;
}

.hospital-app-content .list li img {
  position: absolute;
  left: 20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.hospital-app-content .list li h4 {
  font-size: 18px;
  font-family: "Jost", sans-serif;
  color: #0A335B;
  margin-bottom: 0;
}

.hospital-app-content .app-btn-list {
  padding: 0;
  margin-top: 30px;
  margin-bottom: 0;
}

.hospital-app-content .app-btn-list li {
  list-style-type: none;
  display: inline-block;
  margin-right: 20px;
}

.hospital-app-content .app-btn-list li:last-child {
  margin-right: 0;
}

.hospital-app-content .app-btn-list li a img {
  border-radius: 10px;
}

/*================================================
Hospital Call To Action Area CSS
=================================================*/
.hospital-call-to-action-area {
  background-image: url(../images/hospital/call-to-action.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}

.hospital-call-to-action-content {
  text-align: center;
}

.hospital-call-to-action-content span {
  font-size: 18px;
  color: #ffffff;
  font-weight: 500;
  font-family: "Jost", sans-serif;
  display: inline-block;
  margin-bottom: 15px;
}

.hospital-call-to-action-content h3 {
  font-size: 48px;
  font-family: "Jost", sans-serif;
  color: #ffffff;
  margin-bottom: 15px;
  font-weight: 900;
}

.hospital-call-to-action-content p {
  font-size: 20px;
  color: #ffffff;
  font-weight: 500;
  font-family: "Jost", sans-serif;
  margin-bottom: 0;
}

.hospital-call-to-action-content p a {
  color: #ffffff;
}

.hospital-call-to-action-content .action-btn-list {
  padding: 0;
  margin-top: 25px;
  margin-bottom: 0;
}

.hospital-call-to-action-content .action-btn-list li {
  list-style-type: none;
  display: inline-block;
  margin-right: 20px;
}

.hospital-call-to-action-content .action-btn-list li:last-child {
  margin-right: 0;
}

.hospital-call-to-action-content .action-btn-list li .appointment-btn {
  display: inline-block;
  background: rgba(255, 255, 255, 0.26);
  color: #ffffff;
  border-radius: 5px;
  padding: 15px 30px;
  font-family: "Jost", sans-serif;
  font-weight: 500;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-call-to-action-content .action-btn-list li .appointment-btn:hover {
  background-color: #0A335B;
}

.hospital-call-to-action-content .action-btn-list li .see-btn {
  display: inline-block;
  background-color: #0A335B;
  color: #ffffff;
  border-radius: 5px;
  padding: 15px 30px;
  font-family: "Jost", sans-serif;
  font-weight: 500;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-call-to-action-content .action-btn-list li .see-btn:hover {
  background: rgba(255, 255, 255, 0.26);
}

/*================================================
Hospital Testimonials Area CSS
=================================================*/
.hospital-testimonials-area .section-title.with-hospital-color {
  max-width: 100%;
}

.hospital-testimonials-card p {
  background-color: #ffffff;
  padding: 25px;
  border-top: 14px solid #F8F8F8;
  border-bottom: 14px solid #F8F8F8;
  border-left: 5px solid #F8F8F8;
  border-right: 5px solid #F8F8F8;
  border-radius: 20px;
  font-family: "Jost", sans-serif;
  font-size: 16.5px;
  position: relative;
  min-height: 251px;
}

.hospital-testimonials-card p::before {
  width: 20px;
  height: 20px;
  left: 25px;
  bottom: -23.5px;
  position: absolute;
  background: #F8F8F8;
  content: '';
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-testimonials-card p::after {
  position: absolute;
  content: "";
  right: 20px;
  bottom: 15px;
  background-image: url(../images/hospital/testimonials/icon.png);
  background-position: center center;
  background-size: contain;
  background-repeat: no-repeat;
  width: 40px;
  height: 30px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-testimonials-card .info-content {
  margin-top: 35px;
}

.hospital-testimonials-card .info-content .info img {
  width: auto;
  max-width: 70px;
}

.hospital-testimonials-card .info-content .info .title {
  margin-left: 15px;
}

.hospital-testimonials-card .info-content .info .title h3 {
  font-size: 22px;
  color: #0A335B;
  font-weight: bold;
  margin-bottom: 0;
  font-family: "Jost", sans-serif;
}

.hospital-testimonials-card .info-content .info .title span {
  color: #486683;
  font-family: "Jost", sans-serif;
  display: inline-block;
  margin-top: 12px;
}

.hospital-testimonials-card .info-content .rating {
  padding: 0;
  margin-bottom: 0;
}

.hospital-testimonials-card .info-content .rating li {
  list-style-type: none;
  display: inline-block;
  margin-right: 5px;
}

.hospital-testimonials-card .info-content .rating li:last-child {
  margin-right: 0;
}

.hospital-testimonials-card .info-content .rating li i {
  color: #F0CA45;
}

.hospital-testimonials-card:hover p::after {
  background-image: url(../images/hospital/testimonials/hover-icon.png);
}

.hospital-testimonials-slides.owl-theme .owl-nav {
  margin-top: 0;
  -webkit-transition: 1s;
  transition: 1s;
  line-height: .01;
  position: absolute;
  right: 0;
  top: -90px;
}

.hospital-testimonials-slides.owl-theme .owl-nav [class*=owl-] {
  color: #0A335B;
  margin: 0 5px;
  padding: 0;
  background: rgba(10, 51, 91, 0.1);
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  font-size: 22px;
  position: relative;
}

.hospital-testimonials-slides.owl-theme .owl-nav [class*=owl-]:hover {
  color: #ffffff;
  background-color: #0A335B;
}

.hospital-testimonials-slides.owl-theme .owl-nav [class*=owl-] i {
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.hospital-testimonials-wrap-slides.owl-theme .owl-nav {
  margin-top: 0;
  -webkit-transition: 1s;
  transition: 1s;
  line-height: .01;
}

.hospital-testimonials-wrap-slides.owl-theme .owl-nav [class*=owl-] {
  color: #0A335B;
  margin: 0;
  position: absolute;
  left: -55px;
  top: 45%;
  -webkit-transform: translateY(-45%);
          transform: translateY(-45%);
  padding: 0;
  background: rgba(10, 51, 91, 0.1);
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  font-size: 22px;
}

.hospital-testimonials-wrap-slides.owl-theme .owl-nav [class*=owl-].owl-next {
  left: auto;
  right: -55px;
}

.hospital-testimonials-wrap-slides.owl-theme .owl-nav [class*=owl-]:hover {
  color: #ffffff;
  background-color: #0A335B;
}

.hospital-testimonials-wrap-slides.owl-theme .owl-nav [class*=owl-] i {
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

/*================================================
Hospital Blog Area CSS
=================================================*/
.hospital-blog-area {
  /* background: #F8F8F8; */
  background: #fb0102;
  position: relative;
  z-index: 1;
}

.hospital-blog-area::before {
  /* position: absolute; */
  content: "";
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  height: 390px;
  background-color: #ffffff;
  z-index: -1;
}

.hospital-blog-card {
  margin-bottom: 25px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-blog-card .blog-image {
  border-radius: 10px 10px 0 0;
  overflow: hidden;
  position: relative;
}

.hospital-blog-card .blog-image a img {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  border-radius: 10px 10px 0 0;
}

.hospital-blog-card .blog-image .date {
  position: absolute;
  top: 40%;
  -webkit-transform: translateY(-40%);
          transform: translateY(-40%);
  right: -176px;
  font-family: "Jost", sans-serif;
  font-size: 18px;
  color: #ffffff;
  background-color: #0A335B;
  display: inline-block;
  padding: 20px 10px;
  width: 100%;
  text-align: center;
  -webkit-transform: rotate(-90deg);
          transform: rotate(-90deg);
}

.hospital-blog-card .blog-content {
  background-color: #ffffff;
  -webkit-box-shadow: 0px 0px 30px rgba(85, 85, 85, 0.1);
          box-shadow: 0px 0px 30px rgba(85, 85, 85, 0.1);
  padding: 25px;
  border-radius: 0 0 10px 10px;
}

.hospital-blog-card .blog-content .meta {
  padding: 0;
  margin-bottom: 0;
}

.hospital-blog-card .blog-content .meta li {
  list-style-type: none;
  font-family: "Jost", sans-serif;
  color: #486683;
  display: inline-block;
  position: relative;
  margin-right: 15px;
  padding-left: 22px;
}

.hospital-blog-card .blog-content .meta li:last-child {
  margin-right: 0;
}

.hospital-blog-card .blog-content .meta li a {
  color: #486683;
}

.hospital-blog-card .blog-content .meta li a:hover {
  color: #047DC0;
}

.hospital-blog-card .blog-content .meta li i {
  color: #DF474A;
  position: absolute;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.hospital-blog-card .blog-content h3 {
  font-size: 24px;
  font-family: "Jost", sans-serif;
  font-weight: bold;
  line-height: 1.4;
  margin-top: 15px;
  margin-bottom: 20px;
}

.hospital-blog-card .blog-content h3 a {
  color: #0A335B;
}

.hospital-blog-card .blog-content h3 a:hover {
  color: #13A8B4;
}

.hospital-blog-card .blog-content .blog-btn {
  background: rgba(19, 168, 180, 0.1);
  border-radius: 5px;
  display: inline-block;
  padding: 15px 25px;
  color: #047DC0;
  font-family: "Jost", sans-serif;
  font-weight: 500;
}

.hospital-blog-card:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

.hospital-blog-card:hover .blog-image a img {
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}

.hospital-blog-card:hover .blog-content .blog-btn {
  background: #047DC0;
  color: #ffffff;
}

/*================================================
Hospital Information Area CSS
=================================================*/
.hospital-information-area {
  background-image:url("https://besthomeopathydoctorind.com/assets/images/appointment-bg.jpeg");
  background-repeat: no-repeat;
  background-size: 100%;
}

.hospital-information-card {
  background: #FFFDFD;
  border-radius: 10px;
  padding: 30px 25px;
  margin-bottom: 25px;
  position: relative;
  z-index: 1;
  overflow: hidden;
}

.hospital-information-card .content {
  position: relative;
  padding-left: 105px;
}

.hospital-information-card .content .icon {
  position: absolute;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.hospital-information-card .content .icon i {
  display: inline-block;
  height: 85px;
  width: 85px;
  line-height: 85px;
  background-color: #047DC0;
  text-align: center;
  font-size: 50px;
  color: #ffffff;
  border-radius: 50px;
}

.hospital-information-card .content h3 {
  font-size: 20px;
  font-weight: bold;
  font-family: "Jost", sans-serif;
  margin-bottom: 0;
}

.hospital-information-card .content p {
  font-family: "Jost", sans-serif;
  color: #486683;
  display: inline-block;
  margin-top: 10px;
}

.hospital-information-card .content p a {
  color: #486683;
}

.hospital-information-card .content p a:hover {
  color: #13A8B4;
}

.hospital-information-card .shape {
  position: absolute;
  right: 0;
  top: 0;
  z-index: -1;
}

.hospital-information-area-without-color .hospital-information-card {
  -webkit-box-shadow: 0px 0px 30px rgba(85, 85, 85, 0.1);
          box-shadow: 0px 0px 30px rgba(85, 85, 85, 0.1);
}

/*================================================
Hospital Page Banner Area CSS
=================================================*/
.hospital-page-banner-area {
  background-image: url(../images/hospital/page-banner/bg-1.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  padding-top: 120px;
  padding-bottom: 120px;
}

.hospital-page-banner-area.bg-2 {
  background-image: url(../images/hospital/page-banner/bg-2.jpg);
}

.hospital-page-banner-area.bg-3 {
  background-image: url(../images/hospital/page-banner/bg-3.jpg);
}

.hospital-page-banner-area.bg-4 {
  background-image: url(../images/hospital/page-banner/bg-4.jpg);
}

.hospital-page-banner-content h3 {
  font-size: 48px;
  color: #0A335B;
  margin-bottom: 15px;
  font-weight: 900;
  font-family: "Jost", sans-serif;
}

.hospital-page-banner-content .list {
  padding: 0;
  margin-bottom: 0;
  color: #0A335B;
}

.hospital-page-banner-content .list li {
  font-family: "Jost", sans-serif;
  list-style-type: none;
  display: inline-block;
  position: relative;
  font-weight: 500;
  margin-left: 25px;
}

.hospital-page-banner-content .list li::before {
  content: '';
  position: absolute;
  left: -15px;
  top: 6px;
  height: 15px;
  width: 1px;
  background: #0A335B;
}

.hospital-page-banner-content .list li:first-child {
  margin-left: 0;
}

.hospital-page-banner-content .list li:first-child::before {
  display: none;
}

.hospital-page-banner-content .list li a {
  color: #13A8B4;
}

.hospital-page-banner-content .list li a:hover {
  color: #0A335B;
}

/*================================================
Hospital Choice Area CSS
=================================================*/
.hospital-choice-content span {
  color: #13A8B4;
  display: inline-block;
  margin-bottom: 15px;
  font-weight: 500;
  font-family: "Jost", sans-serif;
}

.hospital-choice-content h3 {
  font-size: 40px;
  margin-bottom: 15px;
  font-family: "Jost", sans-serif;
  color: #0A335B;
  font-weight: 900;
}

.hospital-choice-content p {
  font-family: "Jost", sans-serif;
  margin-bottom: 0;
}

.hospital-choice-content .list {
  padding: 0;
  margin-top: 20px;
  margin-bottom: 0;
}

.hospital-choice-content .list li {
  list-style-type: none;
  margin-bottom: 15px;
  font-family: "Jost", sans-serif;
  color: #6a6c72;
  position: relative;
  padding-left: 25px;
}

.hospital-choice-content .list li:last-child {
  margin-bottom: 0;
}

.hospital-choice-content .list li i {
  color: #13A8B4;
  font-size: 20px;
  position: absolute;
  left: 0;
  top: 0;
}

/*================================================
Hospital Choice Area CSS
=================================================*/
.hospital-services-details-desc {
  padding-left: 25px;
}

.hospital-services-details-desc img {
  border-radius: 20px;
}

.hospital-services-details-desc .content h3 {
  font-size: 35px;
  color: #0A335B;
  font-weight: 900;
  font-family: "Jost", sans-serif;
  margin-top: 30px;
  margin-bottom: 18px;
}

.hospital-services-details-desc .content p {
  font-family: "Jost", sans-serif;
}

.hospital-services-details-desc .content h4 {
  font-size: 28px;
  color: #0A335B;
  font-weight: 900;
  font-family: "Jost", sans-serif;
  margin-top: 30px;
  margin-bottom: 18px;
}

.hospital-services-details-desc .services-details-card {
  position: relative;
  margin-top: 25px;
  padding-left: 65px;
}

.hospital-services-details-desc .services-details-card .number {
  display: inline-block;
  height: 50px;
  width: 50px;
  line-height: 50px;
  text-align: center;
  border-radius: 50px;
  background-color: #13A8B4;
  color: #ffffff;
  font-family: "Jost", sans-serif;
  font-size: 20px;
  font-weight: 500;
  position: absolute;
  left: 0;
  top: 2px;
}

.hospital-services-details-desc .services-details-card h4 {
  font-size: 20px;
  font-family: "Jost", sans-serif;
  margin-bottom: 10px;
  color: #0A335B;
}

.hospital-services-details-desc .services-details-card p {
  font-family: "Jost", sans-serif;
  margin-bottom: 0;
}

.hospital-services-details-desc .services-details-inner-content {
  margin-top: 40px;
}

.hospital-services-details-desc .services-details-inner-content h4 {
  font-size: 28px;
  font-family: "Jost", sans-serif;
  font-weight: 900;
  margin-bottom: 12px;
  color: #0A335B;
}

.hospital-services-details-desc .services-details-inner-content p {
  font-family: "Jost", sans-serif;
  margin-bottom: 0;
}

.hospital-services-details-desc .services-details-inner-content .list {
  padding: 0;
  margin-top: 15px;
  margin-bottom: 0;
}

.hospital-services-details-desc .services-details-inner-content .list li {
  list-style-type: none;
  margin-bottom: 15px;
  font-family: "Jost", sans-serif;
  color: #6a6c72;
  position: relative;
  padding-left: 25px;
}

.hospital-services-details-desc .services-details-inner-content .list li:last-child {
  margin-bottom: 0;
}

.hospital-services-details-desc .services-details-inner-content .list li i {
  color: #13A8B4;
  font-size: 20px;
  position: absolute;
  left: 0;
  top: 1px;
}

.hospital-services-details-desc .services-details-inner-image {
  margin-top: 40px;
}

.hospital-services-details-desc .hospital-faq-accordion {
  margin-top: 30px;
}

.hospital-services-details-desc .hospital-faq-accordion .accordion .accordion-item {
  display: block;
  margin-bottom: 15px;
  background-color: transparent;
  border: 1px solid #F8F8F8;
  border-radius: 8px;
}

.hospital-services-details-desc .hospital-faq-accordion .accordion .accordion-item:last-child {
  margin-bottom: 0;
}

.hospital-services-details-desc .hospital-faq-accordion .accordion .accordion-title {
  padding: 20px 55px 20px 20px;
  background-color: #F8F8F8;
  color: #0A335B;
  position: relative;
  display: block;
  text-transform: capitalize;
  font-size: 18px;
  font-weight: 600;
  cursor: pointer;
  border-radius: 8px;
  font-family: "Jost", sans-serif;
}

.hospital-services-details-desc .hospital-faq-accordion .accordion .accordion-title i {
  position: absolute;
  right: 20px;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  color: #0A335B;
  font-size: 20px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-services-details-desc .hospital-faq-accordion .accordion .accordion-title.active i::before {
  content: "\eb8b";
  color: #13A8B4;
}

.hospital-services-details-desc .hospital-faq-accordion .accordion .accordion-content {
  display: none;
  padding: 20px;
  border-radius: 8px;
  font-family: "Jost", sans-serif;
}

.hospital-services-details-desc .hospital-faq-accordion .accordion .accordion-content p {
  color: #486683;
  font-weight: 400;
  font-family: "Jost", sans-serif;
}

.hospital-services-details-desc .hospital-faq-accordion .accordion .accordion-content.show {
  display: block;
  border-radius: 8px;
}

/*================================================
Hospital Portfolio Area CSS
=================================================*/
.hospital-portfolio-card {
  margin-bottom: 25px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-portfolio-card .portfolio-image {
  border-radius: 10px 10px 0px 0px;
  overflow: hidden;
  position: relative;
}

.hospital-portfolio-card .portfolio-image::before {
  position: absolute;
  content: "";
  left: 0;
  right: 0;
  top: 0;
  height: 100%;
  width: 100%;
  background: rgba(10, 51, 91, 0.31);
  border-radius: 10px 10px 0px 0px;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-portfolio-card .portfolio-image a img {
  border-radius: 10px 10px 0px 0px;
}

.hospital-portfolio-card .portfolio-image .icon {
  position: absolute;
  left: 0;
  right: 0;
  text-align: center;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  -webkit-transition: 0.6s;
  transition: 0.6s;
  opacity: 0;
  visibility: hidden;
}

.hospital-portfolio-card .portfolio-image .icon a i {
  display: inline-block;
  height: 45px;
  width: 45px;
  line-height: 45px;
  background-color: #ffffff;
  color: #13A8B4;
  border-radius: 50px;
  font-size: 25px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-portfolio-card .portfolio-image .icon a i:hover {
  background-color: #13A8B4;
  color: #ffffff;
}

.hospital-portfolio-card .portfolio-content {
  background: rgba(255, 255, 255, 0.79);
  -webkit-box-shadow: 0px 0px 25px rgba(85, 85, 85, 0.1);
          box-shadow: 0px 0px 25px rgba(85, 85, 85, 0.1);
  border-radius: 0px 0px 10px 10px;
  padding: 25px;
  text-align: center;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-portfolio-card .portfolio-content h3 {
  font-size: 24px;
  margin-bottom: 0;
  font-weight: bold;
  font-family: "Jost", sans-serif;
}

.hospital-portfolio-card .portfolio-content h3 a {
  color: #0A335B;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-portfolio-card .portfolio-content span {
  font-size: 15.5px;
  font-family: "Jost", sans-serif;
  color: #486683;
  display: inline-block;
  margin-top: 12px;
  font-weight: 500;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-portfolio-card:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
}

.hospital-portfolio-card:hover .portfolio-image::before {
  opacity: 1;
  visibility: visible;
}

.hospital-portfolio-card:hover .portfolio-image .icon {
  opacity: 1;
  visibility: visible;
}

.hospital-portfolio-card:hover .portfolio-content {
  background-color: #0A335B;
}

.hospital-portfolio-card:hover .portfolio-content h3 a {
  color: #ffffff;
}

.hospital-portfolio-card:hover .portfolio-content span {
  color: #ffffff;
}

/*================================================
Hospital Portfolio Details Area CSS
=================================================*/
.hospital-portfolio-details-desc img {
  border-radius: 10px;
}

.hospital-portfolio-details-desc .content h3 {
  font-size: 35px;
  color: #0A335B;
  font-weight: 900;
  font-family: "Jost", sans-serif;
  margin-top: 30px;
  margin-bottom: 18px;
}

.hospital-portfolio-details-desc .content p {
  font-family: "Jost", sans-serif;
}

.hospital-portfolio-details-desc .content h4 {
  font-size: 28px;
  color: #0A335B;
  font-weight: 900;
  font-family: "Jost", sans-serif;
  margin-top: 30px;
  margin-bottom: 18px;
}

.hospital-portfolio-details-desc .content .block {
  margin-top: 15px;
}

.hospital-portfolio-details-info {
  background: #F8F8F8;
  border-radius: 10px;
  padding: 30px;
}

.hospital-portfolio-details-info h3 {
  color: #0A335B;
  font-size: 20px;
  font-weight: bold;
  font-family: "Jost", sans-serif;
  border-bottom: 1px solid rgba(197, 197, 197, 0.42);
  margin-bottom: 20px;
  padding-bottom: 20px;
}

.hospital-portfolio-details-info .list {
  padding: 0;
  margin-bottom: 0;
}

.hospital-portfolio-details-info .list li {
  list-style-type: none;
  margin-bottom: 20px;
  color: #486683;
  font-family: "Jost", sans-serif;
  position: relative;
  padding-left: 20px;
}

.hospital-portfolio-details-info .list li:last-child {
  margin-bottom: 0;
}

.hospital-portfolio-details-info .list li span {
  color: #0A335B;
  font-family: "Jost", sans-serif;
  font-weight: 600;
}

.hospital-portfolio-details-info .list li::before {
  position: absolute;
  content: "";
  height: 10px;
  width: 10px;
  background-color: #13A8B4;
  left: 0;
  top: 6.5px;
  border-radius: 50px;
}

.recent-project-title {
  font-size: 28px;
  color: #0A335B;
  font-weight: 900;
  font-family: "Jost", sans-serif;
  margin-bottom: 30px;
}

/*================================================
Hospital Blog Details Area CSS
=================================================*/
.hospital-blog-details-desc {
  padding-left: 25px;
}

.hospital-blog-details-desc .article-content .meta {
  padding: 0;
  margin-bottom: 0;
}

.hospital-blog-details-desc .article-content .meta li {
  list-style-type: none;
  font-family: "Jost", sans-serif;
  color: #486683;
  display: inline-block;
  position: relative;
  margin-right: 15px;
  padding-left: 22px;
}

.hospital-blog-details-desc .article-content .meta li:last-child {
  margin-right: 0;
}

.hospital-blog-details-desc .article-content .meta li a {
  color: #486683;
}

.hospital-blog-details-desc .article-content .meta li a:hover {
  color: #13A8B4;
}

.hospital-blog-details-desc .article-content .meta li i {
  color: #13A8B4;
  position: absolute;
  left: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.hospital-blog-details-desc .article-content h3 {
  font-size: 32px;
  color: #0A335B;
  font-weight: 900;
  font-family: "Jost", sans-serif;
  margin-top: 20px;
  margin-bottom: 30px;
}

.hospital-blog-details-desc .article-image {
  border-radius: 10px;
  overflow: hidden;
  position: relative;
  margin-bottom: 30px;
}

.hospital-blog-details-desc .article-image a img {
  border-radius: 10px;
}

.hospital-blog-details-desc .article-image .date {
  position: absolute;
  top: 40%;
  -webkit-transform: translateY(-40%);
          transform: translateY(-40%);
  right: -385px;
  font-family: "Jost", sans-serif;
  font-size: 18px;
  color: #ffffff;
  background-color: #0A335B;
  display: inline-block;
  padding: 20px 10px;
  width: 100%;
  text-align: center;
  -webkit-transform: rotate(-90deg);
          transform: rotate(-90deg);
}

.hospital-blog-details-desc p {
  color: #486683;
  font-family: "Jost", sans-serif;
}

.hospital-blog-details-desc .article-quote {
  background: #ffffff;
  border-top: 5px solid #F8F8F8;
  border-bottom: 5px solid #F8F8F8;
  border-left: 10px solid #F8F8F8;
  border-right: 10px solid #F8F8F8;
  border-radius: 10px;
  padding: 30px 90px 30px 30px;
  margin-top: 20px;
  margin-bottom: 25px;
}

.hospital-blog-details-desc .article-quote p {
  font-size: 18px;
  color: #0A335B;
  font-family: "Jost", sans-serif;
  position: relative;
  z-index: 1;
}

.hospital-blog-details-desc .article-quote p::before {
  position: absolute;
  content: "";
  background-image: url(../images/hospital/blog-details/double-quote.svg);
  background-position: center center;
  background-size: contain;
  background-repeat: no-repeat;
  top: 5px;
  right: -50px;
  z-index: -1;
  height: 100px;
  width: 100px;
  opacity: 70%;
}

.hospital-blog-details-desc h4 {
  font-size: 25px;
  color: #0A335B;
  font-weight: 900;
  font-family: "Jost", sans-serif;
  margin-top: 25px;
  margin-bottom: 15px;
}

.hospital-blog-details-desc .list {
  padding: 0;
  margin-bottom: 0;
}

.hospital-blog-details-desc .list li {
  list-style-type: none;
  margin-bottom: 15px;
  font-family: "Jost", sans-serif;
  color: #0A335B;
  position: relative;
  padding-left: 25px;
}

.hospital-blog-details-desc .list li:last-child {
  margin-bottom: 0;
}

.hospital-blog-details-desc .list li i {
  color: #13A8B4;
  font-size: 20px;
  position: absolute;
  left: 0;
  top: 1px;
}

.hospital-blog-details-desc .blog-details-inner-image {
  margin-top: 30px;
}

.hospital-blog-details-desc .blog-details-inner-image img {
  border-radius: 10px;
}

.hospital-blog-details-desc .blog-details-inner-content {
  padding-left: 20px;
  margin-top: 25px;
}

.hospital-blog-details-desc .blog-details-inner-content p {
  color: #486683;
  font-family: "Jost", sans-serif;
}

.hospital-blog-details-desc .article-tag {
  border-top: 1px solid rgba(217, 216, 216, 0.54);
  padding-top: 30px;
  margin-top: 30px;
}

.hospital-blog-details-desc .article-tag .tag-list span {
  font-size: 16px;
  font-weight: 600;
  color: #0A335B;
  margin-right: 5px;
  font-family: "Jost", sans-serif;
}

.hospital-blog-details-desc .article-tag .tag-list a {
  font-family: "Jost", sans-serif;
  color: #486683;
}

.hospital-blog-details-desc .article-tag .tag-list a:hover {
  color: #13A8B4;
}

.hospital-blog-details-desc .article-tag .share-list span {
  font-size: 16px;
  font-weight: 600;
  color: #0A335B;
  margin-right: 5px;
  font-family: "Jost", sans-serif;
}

.hospital-blog-details-desc .article-tag .share-list a i {
  display: inline-block;
  height: 35px;
  width: 35px;
  line-height: 35px;
  background: rgba(12, 184, 182, 0.1);
  color: #13A8B4;
  font-size: 16px;
  border-radius: 50px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  text-align: center;
}

.hospital-blog-details-desc .article-tag .share-list a i:hover {
  -webkit-transform: translateY(-5px);
          transform: translateY(-5px);
  background-color: #13A8B4;
  color: #ffffff;
}

.hospital-blog-details-desc .comments-area .comment-respond .comment-reply-title {
  color: #0A335B;
  font-weight: 900;
  font-family: "Jost", sans-serif;
  margin-bottom: 25px;
}

.hospital-blog-details-desc .comments-area .comment-respond .form-group {
  margin-bottom: 25px;
}

.hospital-blog-details-desc .comments-area .comment-respond input[type="date"], .hospital-blog-details-desc .comments-area .comment-respond input[type="time"], .hospital-blog-details-desc .comments-area .comment-respond input[type="datetime-local"], .hospital-blog-details-desc .comments-area .comment-respond input[type="week"], .hospital-blog-details-desc .comments-area .comment-respond input[type="month"], .hospital-blog-details-desc .comments-area .comment-respond input[type="text"], .hospital-blog-details-desc .comments-area .comment-respond input[type="email"], .hospital-blog-details-desc .comments-area .comment-respond input[type="url"], .hospital-blog-details-desc .comments-area .comment-respond input[type="password"], .hospital-blog-details-desc .comments-area .comment-respond input[type="search"], .hospital-blog-details-desc .comments-area .comment-respond input[type="tel"], .hospital-blog-details-desc .comments-area .comment-respond input[type="number"], .hospital-blog-details-desc .comments-area .comment-respond textarea {
  background: #F8F8F8;
  border: 1px solid #F8F8F8;
  color: #486683;
  outline: 0;
  border-radius: 5px;
  padding: 15px 20px;
  width: 100%;
  font-size: 15.5px;
}

.hospital-blog-details-desc .comments-area .comment-respond input[type="date"]::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="time"]::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="week"]::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="month"]::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="text"]::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="email"]::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="url"]::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="password"]::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="search"]::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="tel"]::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="number"]::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond textarea::-webkit-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-blog-details-desc .comments-area .comment-respond input[type="date"]:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="time"]:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="week"]:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="month"]:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="text"]:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="email"]:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="url"]:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="password"]:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="search"]:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="tel"]:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="number"]:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond textarea:-ms-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-blog-details-desc .comments-area .comment-respond input[type="date"]::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="time"]::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="week"]::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="month"]::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="text"]::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="email"]::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="url"]::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="password"]::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="search"]::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="tel"]::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="number"]::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond textarea::-ms-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-blog-details-desc .comments-area .comment-respond input[type="date"]::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="time"]::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="week"]::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="month"]::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="text"]::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="email"]::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="url"]::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="password"]::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="search"]::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="tel"]::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="number"]::placeholder, .hospital-blog-details-desc .comments-area .comment-respond textarea::placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-blog-details-desc .comments-area .comment-respond input[type="date"]:focus, .hospital-blog-details-desc .comments-area .comment-respond input[type="time"]:focus, .hospital-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]:focus, .hospital-blog-details-desc .comments-area .comment-respond input[type="week"]:focus, .hospital-blog-details-desc .comments-area .comment-respond input[type="month"]:focus, .hospital-blog-details-desc .comments-area .comment-respond input[type="text"]:focus, .hospital-blog-details-desc .comments-area .comment-respond input[type="email"]:focus, .hospital-blog-details-desc .comments-area .comment-respond input[type="url"]:focus, .hospital-blog-details-desc .comments-area .comment-respond input[type="password"]:focus, .hospital-blog-details-desc .comments-area .comment-respond input[type="search"]:focus, .hospital-blog-details-desc .comments-area .comment-respond input[type="tel"]:focus, .hospital-blog-details-desc .comments-area .comment-respond input[type="number"]:focus, .hospital-blog-details-desc .comments-area .comment-respond textarea:focus {
  background-color: transparent;
  border: 1px solid #13A8B4;
}

.hospital-blog-details-desc .comments-area .comment-respond input[type="date"]:focus::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="time"]:focus::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]:focus::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="week"]:focus::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="month"]:focus::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="text"]:focus::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="email"]:focus::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="url"]:focus::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="password"]:focus::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="search"]:focus::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="tel"]:focus::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="number"]:focus::-webkit-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond textarea:focus::-webkit-input-placeholder {
  color: transparent;
}

.hospital-blog-details-desc .comments-area .comment-respond input[type="date"]:focus:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="time"]:focus:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]:focus:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="week"]:focus:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="month"]:focus:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="text"]:focus:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="email"]:focus:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="url"]:focus:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="password"]:focus:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="search"]:focus:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="tel"]:focus:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="number"]:focus:-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond textarea:focus:-ms-input-placeholder {
  color: transparent;
}

.hospital-blog-details-desc .comments-area .comment-respond input[type="date"]:focus::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="time"]:focus::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]:focus::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="week"]:focus::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="month"]:focus::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="text"]:focus::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="email"]:focus::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="url"]:focus::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="password"]:focus::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="search"]:focus::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="tel"]:focus::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="number"]:focus::-ms-input-placeholder, .hospital-blog-details-desc .comments-area .comment-respond textarea:focus::-ms-input-placeholder {
  color: transparent;
}

.hospital-blog-details-desc .comments-area .comment-respond input[type="date"]:focus::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="time"]:focus::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="datetime-local"]:focus::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="week"]:focus::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="month"]:focus::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="text"]:focus::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="email"]:focus::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="url"]:focus::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="password"]:focus::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="search"]:focus::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="tel"]:focus::placeholder, .hospital-blog-details-desc .comments-area .comment-respond input[type="number"]:focus::placeholder, .hospital-blog-details-desc .comments-area .comment-respond textarea:focus::placeholder {
  color: transparent;
}

.hospital-blog-details-desc .comments-area .comment-respond .comment-form-cookies-consent {
  margin-top: 0;
}

.hospital-blog-details-desc .comments-area .comment-respond .comment-form-cookies-consent input {
  top: 6.5px;
}

.hospital-blog-details-desc .comments-area .comment-respond .form-submit input {
  background: #13A8B4;
  color: #ffffff;
}

.hospital-blog-details-desc .comments-area .comment-respond .form-submit input:hover {
  background-color: #0A335B;
}

/*================================================
Hospital Contact Area CSS
=================================================*/
.hospital-contact-form {
  background: #F8F8F8;
  border-radius: 10px;
  padding: 70px;
}

.hospital-contact-form .section-title.with-hospital-color {
  max-width: 650px;
}

.hospital-contact-form .form-group {
  margin-bottom: 25px;
}

.hospital-contact-form .form-group .form-control {
  background-color: #ffffff;
  border: 1px solid #ffffff;
  padding: 15px 20px;
  color: #486683;
  font-size: 15.5px;
  font-weight: 400;
  font-family: "Jost", sans-serif;
  outline: 0;
  -webkit-box-shadow: unset;
          box-shadow: unset;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-contact-form .form-group .form-control::-webkit-input-placeholder {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  color: #486683;
}

.hospital-contact-form .form-group .form-control:-ms-input-placeholder {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  color: #486683;
}

.hospital-contact-form .form-group .form-control::-ms-input-placeholder {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  color: #486683;
}

.hospital-contact-form .form-group .form-control::placeholder {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  color: #486683;
}

.hospital-contact-form .form-group .form-control:focus {
  background-color: transparent;
  border: 1px solid #13A8B4;
}

.hospital-contact-form .form-group .form-control:focus::-webkit-input-placeholder {
  color: transparent;
}

.hospital-contact-form .form-group .form-control:focus:-ms-input-placeholder {
  color: transparent;
}

.hospital-contact-form .form-group .form-control:focus::-ms-input-placeholder {
  color: transparent;
}

.hospital-contact-form .form-group .form-control:focus::placeholder {
  color: transparent;
}

.hospital-contact-form .default-btn {
  padding: 14px 25px;
  border: none;
  width: 100%;
  background-color: #13A8B4;
  font-family: "Jost", sans-serif;
}

.hospital-contact-form .default-btn:hover {
  background-color: #0A335B;
}

.hospital-contact-form .list-unstyled li {
  font-family: "Jost", sans-serif;
  color: red;
  margin-top: 10px;
}

.hospital-contact-form .text-danger {
  margin-top: 15px;
  font-size: 20px;
  font-family: "Jost", sans-serif;
  margin-bottom: 0;
}

/*================================================
Hospital Contact Information Area CSS
=================================================*/
.hospital-contact-information-area {
  background-image: url(../images/hospital/information/information-bg.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}

.hospital-contact-information-content {
  position: relative;
  top: -50px;
  padding-right: 20px;
}

.hospital-contact-information-content .info {
  margin-bottom: 25px;
  position: relative;
  padding-left: 100px;
}

.hospital-contact-information-content .info .icon {
  position: absolute;
  left: 0;
  top: 0;
}

.hospital-contact-information-content .info .icon i {
  display: inline-block;
  height: 80px;
  width: 80px;
  line-height: 80px;
  background-color: #ffffff;
  color: #13A8B4;
  text-align: center;
  border-radius: 50px;
  font-size: 40px;
}

.hospital-contact-information-content .info span {
  font-size: 22px;
  font-weight: 500;
  font-family: "Jost", sans-serif;
  display: inline-block;
  color: #ffffff;
  margin-bottom: 12px;
}

.hospital-contact-information-content .info h3 {
  font-size: 35px;
  font-weight: bold;
  font-family: "Jost", sans-serif;
  color: #ffffff;
}

.hospital-contact-information-content .info h3 a {
  color: #ffffff;
}

.hospital-contact-information-content p {
  font-family: "Jost", sans-serif;
  color: #ffffff;
}

/*================================================
Hospital Widget Area CSS
=================================================*/
.hospital-widget-area .widget .widget-title {
  color: #0A335B;
  font-family: "Jost", sans-serif;
  border-bottom: 1px solid rgba(197, 197, 197, 0.42);
  padding-bottom: 20px;
  margin-bottom: 20px;
}

.hospital-widget-area .widget_search form .search-field {
  background-color: #ffffff;
  border: 1px solid rgba(207, 204, 204, 0.34);
  color: #486683;
  padding: 15px 20px;
  border-radius: 5px;
  font-family: "Jost", sans-serif;
}

.hospital-widget-area .widget_search form .search-field::-webkit-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-widget-area .widget_search form .search-field:-ms-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-widget-area .widget_search form .search-field::-ms-input-placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-widget-area .widget_search form .search-field::placeholder {
  color: #486683;
  -webkit-transition: 0.6s;
  transition: 0.6s;
}

.hospital-widget-area .widget_search form .search-field:focus {
  background-color: transparent;
  border: 1px solid #13A8B4;
}

.hospital-widget-area .widget_search form .search-field:focus::-webkit-input-placeholder {
  color: transparent;
}

.hospital-widget-area .widget_search form .search-field:focus:-ms-input-placeholder {
  color: transparent;
}

.hospital-widget-area .widget_search form .search-field:focus::-ms-input-placeholder {
  color: transparent;
}

.hospital-widget-area .widget_search form .search-field:focus::placeholder {
  color: transparent;
}

.hospital-widget-area .widget_search form button {
  background-color: #13A8B4;
  color: #ffffff;
}

.hospital-widget-area .widget_search form button:hover {
  background-color: #0A335B;
}

.hospital-widget-area .widget_categories {
  background: #F8F8F8;
  border-radius: 10px;
  padding: 30px;
}

.hospital-widget-area .widget_categories ul li {
  padding-left: 20px;
  margin-bottom: 18px;
  font-family: "Jost", sans-serif;
}

.hospital-widget-area .widget_categories ul li::before {
  background-color: #13A8B4;
  border-radius: 50px;
  top: 6.8px;
}

.hospital-widget-area .widget_categories ul li a {
  -webkit-transition: 0.6s;
  transition: 0.6s;
  color: #486683;
}

.hospital-widget-area .widget_categories ul li a:hover {
  color: #13A8B4;
}

.hospital-widget-area .widget_categories ul li:last-child {
  margin-bottom: 0;
}

.hospital-widget-area .widget_download_file {
  background: #F8F8F8;
  border-radius: 10px;
  padding: 30px;
}

.hospital-widget-area .widget_download_file .download-file-list {
  padding: 0;
  margin-bottom: 0;
}

.hospital-widget-area .widget_download_file .download-file-list li {
  list-style-type: none;
  margin-bottom: 30px;
  position: relative;
  padding-left: 50px;
}

.hospital-widget-area .widget_download_file .download-file-list li:last-child {
  margin-bottom: 0;
}

.hospital-widget-area .widget_download_file .download-file-list li img {
  position: absolute;
  left: 0;
  top: 2px;
}

.hospital-widget-area .widget_download_file .download-file-list li .title h4 {
  font-size: 18px;
  color: #0A335B;
  margin-bottom: 0;
  font-family: "Jost", sans-serif;
}

.hospital-widget-area .widget_download_file .download-file-list li .title span {
  font-size: 14px;
  color: #486683;
  font-family: "Jost", sans-serif;
  display: inline-block;
  margin-top: 12px;
}

.hospital-widget-area .widget_services_info {
  background-image: url(../images/hospital/services-info.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
  height: 100%;
  width: 100%;
  padding: 30px;
  border-radius: 10px;
}

.hospital-widget-area .widget_services_info .info {
  position: relative;
  padding-left: 62px;
}

.hospital-widget-area .widget_services_info .info i {
  font-size: 50px;
  color: #13A8B4;
  position: absolute;
  left: 0;
  top: 0;
}

.hospital-widget-area .widget_services_info .info h4 {
  font-size: 20px;
  color: #ffffff;
  font-family: "Jost", sans-serif;
  font-weight: bold;
  margin-bottom: 12px;
}

.hospital-widget-area .widget_services_info .info a {
  color: #ffffff;
  font-family: "Jost", sans-serif;
}

.hospital-widget-area .widget_services_info .info a:hover {
  color: #13A8B4;
}

.hospital-widget-area .widget_services_info p {
  font-family: "Jost", sans-serif;
  color: #DCDCDC;
  margin-top: 20px;
  margin-bottom: 20px;
}

.hospital-widget-area .widget_services_info .default-btn {
  background-color: #13A8B4;
  font-family: "Jost", sans-serif;
  padding: 12px 30px;
  width: 100%;
  text-align: center;
  font-size: 16.5px;
}

.hospital-widget-area .widget_grin_posts_thumb {
  background: #F8F8F8;
  border-radius: 5px;
  padding: 30px;
}

.hospital-widget-area .widget_grin_posts_thumb .item .thumb .fullimage.bg1 {
  background-image: url(../images/hospital/blog/blog1.jpg);
}

.hospital-widget-area .widget_grin_posts_thumb .item .thumb .fullimage.bg2 {
  background-image: url(../images/hospital/blog/blog2.jpg);
}

.hospital-widget-area .widget_grin_posts_thumb .item .thumb .fullimage.bg3 {
  background-image: url(../images/hospital/blog/blog3.jpg);
}

.hospital-widget-area .widget_grin_posts_thumb .item .info {
  margin-top: 0;
}

.hospital-widget-area .widget_grin_posts_thumb .item .info span {
  color: #13A8B4;
  display: inline-block;
  margin-bottom: 10px;
  font-size: 14px;
  font-family: "Jost", sans-serif;
}

.hospital-widget-area .widget_grin_posts_thumb .item .info .title {
  font-weight: bold;
  font-family: "Jost", sans-serif;
  font-size: 16px;
}

.hospital-widget-area .widget_grin_posts_thumb .item .info .title a {
  color: #0A335B;
}

.hospital-widget-area .widget_grin_posts_thumb .item .info .title a:hover {
  color: #13A8B4;
}

.hospital-widget-area .widget_tag_cloud {
  background: #F8F8F8;
  border-radius: 5px;
  padding: 30px;
}

.hospital-widget-area .tagcloud a {
  background: #ffffff;
  color: #486683;
  border-radius: 5px;
}

.hospital-widget-area .tagcloud a:hover, .hospital-widget-area .tagcloud a:focus {
  color: #ffffff;
  background-color: #0CB8B6;
}

/*================================================
Covid Footer Area CSS
=================================================*/
.hospital-footer-area {
  background-image: url(../images/hospital/footer-bg.jpg);
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}

.hospital-footer-widget {
  margin-bottom: 25px;
}

.hospital-footer-widget h2 {
  font-size: 35px;
  color: #ffffff;
  margin-bottom: 20px;
  font-family: "Jost", sans-serif;
}

.hospital-footer-widget h2 a {
  color: #ffffff;
}

.hospital-footer-widget p {
  color: #ffffff;
  margin-bottom: 0;
  font-family: "Jost", sans-serif;
}

.hospital-footer-widget .share-link {
  padding: 0;
  margin-top: 20px;
  margin-bottom: 0;
}

.hospital-footer-widget .share-link li {
  list-style-type: none;
  display: inline-block;
  margin-right: 5px;
}

.hospital-footer-widget .share-link li:last-child {
  margin-right: 0;
}

.hospital-footer-widget .share-link li a {
  position: relative;
  color: #ffffff;
  font-size: 18px;
  -webkit-transition: 0.6s;
  transition: 0.6s;
  display: inline-block;
  height: 50px;
  width: 50px;
  line-height: 45px;
  background: #DF474A;
  text-align: center;
  border-radius: 50px;
  border: 5px solid #2C5072;
}

.hospital-footer-widget .share-link li a:hover {
  background-color: #047DC0;
}

.hospital-footer-widget h3 {
  font-size: 22px;
  color: #ffffff;
  margin-bottom: 20px;
  font-family: "Jost", sans-serif;
}

.hospital-footer-widget .quick-links {
  padding: 0;
  margin-bottom: 0;
}

.hospital-footer-widget .quick-links li {
  list-style-type: none;
  margin-bottom: 15px;
  font-family: "Jost", sans-serif;
}

.hospital-footer-widget .quick-links li:last-child {
  margin-bottom: 0;
}

.hospital-footer-widget .quick-links li a {
  color: #ffffff;
  position: relative;
  padding-left: 30px;
}

.hospital-footer-widget .quick-links li a::before {
  position: absolute;
  content: "\f114";
  left: 0;
  top: -2px;
  font-family: "Flaticon";
  color: #DF474A;
}

.hospital-footer-widget .quick-links li a:hover {
  color: #DF474A;
}

.hospital-footer-widget .hours-list {
  padding: 0;
  margin-bottom: 0;
}

.hospital-footer-widget .hours-list li {
  list-style-type: none;
  margin-bottom: 15px;
  font-family: "Jost", sans-serif;
}

.hospital-footer-widget .hours-list li:last-child {
  margin-bottom: 0;
}

.hospital-footer-widget .hours-list li span {
  color: #ffffff;
}

.hospital-copyright-area {
  border-top: 1.5px solid rgba(255, 255, 255, 0.13);
  padding-top: 25px;
  padding-bottom: 25px;
  margin-top: 75px;
}

.hospital-copyright-area .copyright-area-content {
  border-top: none;
  padding-top: 0;
}

.hospital-copyright-area .copyright-area-content p {
  font-family: "Jost", sans-serif;
}

.hospital-copyright-area .copyright-area-content p a {
  color: #0CB8B6;
  font-family: "Jost", sans-serif;
}

.hospital-copyright-area .copyright-area-content p a:hover {
  color: #ffffff;
}

.hospital-services-card .title h3 a{
color: #ffffff;
 }

/* End "Hospital Website Demo CSS" */
/*# sourceMappingURL=style.css.map */


.hospital-information-card {
    min-height: 156px;
}

@media screen and ( max-width: 400px ){

    li.page-item {

        display: none;
    }

    .page-item:first-child,
    .page-item:nth-child( 2 ),
    .page-item:nth-child( 3 ),
    .page-item:nth-child( 4 ),
    .page-item:nth-child( 5 ),
    .page-item:nth-last-child( 2 ),
    .page-item:last-child,
    .page-item.active,
    .page-item.disabled {

        display: block;
    }
}
a.services-btn.default-btn {
    background: #df474a !important;
    color: #fff !important;
    padding: 12px 35px !important;
}

.blog-content .default-btn {
  background: #df474a !important;
    color: #fff !important;
    padding: 12px 35px !important;  
}
@media only screen and (min-width: 360px) and (max-width: 768px) {
	.hospital-about-content{
	   margin-left: 0px !important;
	}
	.hospital-appointment-form .default-btn{
	    margin-left:0;
	}
	
	.main-slides-content p {
	    text-align:center;
	}
	ul.social-share {
    padding-left: 0;
}
}