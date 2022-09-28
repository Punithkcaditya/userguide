<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assets/css/style.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('application/assets/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js'></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('application/assets/js/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="https://codepen.io/NathanPJF/pen/BHwqK.js"></script>
<script type="text/javascript" src="<?php echo base_url('application/assets/js/bootstrap.min.js'); ?>"></script>
<!-- <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script> -->
<!-- <script src="https://cdn.ckeditor.com/4.9.2/full-all/ckeditor.js"></script> -->
<!-- <script src="https://cdn.ckeditor.com/4.19.0/full-all/ckeditor.js"></script> -->
<script type="text/javascript" src="<?php echo base_url('application/ckeditor/ckeditor.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('application/assets/ckfinder/ckfinder.js'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js" integrity="sha512-zWbEj9dP1Qn4dGPeqQhAW3cja9ozUfS6wp6P7WR6xoOvb6ebF9r8fZdWZm04nBpzYC3+BKhT7Te13LTUZiCPvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style>
	*,
html {
scroll-behavior: smooth;
}

*,
*:after,
*:before {
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}

:root {
scrollbar-color: rgb(210, 210, 210) rgb(46, 54, 69) !important;
scrollbar-width: thin !important;
--white: #fff;
--black: #000;
--dark: #2a2a2e;
--yellow: #3DB1F9;
--darkyellow: #f79300;
--red: #fe3e30;
--darkred: #f72729;
--blue: #2588cf;
--darkblue: #026dbe;
--defaultfont: "Poppins", sans-serif;
--titlefont: "Roboto", sans-serif;
}

::-webkit-scrollbar {
height: 12px;
width: 6px;
background: var(--dark);
}

::-webkit-scrollbar-thumb {
background: var(--dark);
-webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.75);
}

::-webkit-scrollbar-corner {
background: var(--dark);
}

/********************************
DEFAULT
*********************************/
body {
margin: 0;
overflow-x: hidden !important;
font-family: var(--defaultfont);
}

a {
text-decoration: none;
color: inherit;
}

a,
button,
input,
select,
p {
outline: none !important;
transition: 0.5s;
}

em {
font-style: normal;
color: var(--primary);
}

p {
line-height: 1.6em;
font-size: 14px;
color: rgba(1, 1, 1, 0.7);
}

img {
max-width: 100%;
}

figure {
margin: 0;
padding: 0;
}

fieldset {
width: 100%;
border: 0;
padding: 0;
margin: 0;
}

.title {
font-family: var(--titlefont);
}

.btn1,
.btn2 {
padding: 1rem 2rem;
border-radius: 10px;
text-align: center;
border: 0;
}

.btn1 {
background-color: var(--yellow);
color: var(--white);
}

.btn1:hover {
background-color: var(--darkyellow);
}

.btn2 {
background-color: var(--red);
color: var(--white);
}

.btn2:hover {
background-color: var(--darkred);
}

/********************************
HEADER
*********************************/
header {
width: 100%;
display: flex;
align-items: center;
justify-content: center;
background-size: cover;
background-repeat: no-repeat;
}

header section {
width: auto;
padding: 8rem 1rem;
position: relative;
color: var(--white);
}

header section:after {
content: "";
position: absolute;
background-color: var(--yellow);
height: 4px;
width: 100px;
left: 50%;
top:60%;
transform: translate(-50%, 0);
}

header section .title {
font-size: 3em;
line-height: 0;
}

header section span {
position: absolute;
bottom: 0;
left: 50%;
transform: translate(-50%, 0);
background-color: var(--yellow);
padding: 10px 20px;
border-radius: 10px 10px 0 0;
white-space: nowrap;
}

header a:hover {
color: var(--dark);
}

header .active {
color: var(--dark);
pointer-events: none;
}

@media (max-width: 1000px) {
header section .title {
font-size: 1.5em;
line-height: 0.8;
}
}

/********************************
BLOG CONTAINER
*********************************/
.blog_container {
width: 100%;
display: flex;
align-items: top;
background-color: #f1f1f1;
}

/*BLOG LEFT CONTENT*/
.blog_content {
padding: 2rem;
width: 100%;
}

.blog_content .load-btn {
display: block;
width: 150px;
margin: 5vh auto;
}

.left_content {
display: flex;
align-items: top;
justify-content: space-between;
flex-wrap: wrap;
column-count: 2;
gap: 20px 10px;
flex: 0 0 70%;
}

.right_content {
flex: 0 0 30%;
}

.blog_card {
width: 100%;
flex: 0 0 48.5%;
overflow: hidden;
background-color: var(--white);
}

.blog_card:nth-child(1) {
flex: 0 0 100%;
}

.blog_card .figure {
display: block;
width: 100%;
height: 200px;
position: relative;
overflow: hidden;
}

.blog_card:nth-child(1) .figure {
height: 400px;
}

.blog_card .figure img {
width: 100%;
height: 100%;
object-fit: cover;
transition: 0.5s;
}

.blog_card .tag {
padding: 5px 10px;
background-color: var(--yellow);
color: var(--white);
position: absolute;
right: 1%;
top: 3%;
font-size: 12px;
}

.blog_card section {
padding: 1rem;
position: relative;
background-color: var(--white);
}

.blog_card section .title {
font-weight: 600;
font-size: 18px;
color: var(--dark);
width: auto;
}

.blog_card section a:hover {
color: var(--yellow);
}

.blog_card:hover > .figure img {
transform: scale(1.1);
}

.share_icon {
position: absolute;
bottom: -30px;
left: 10px;
background-color: var(--red);
color: var(--white);
display: flex;
align-items: center;
padding-right: 5px;
font-size: 13px;
cursor: pointer;
transition: 0.5s;
}

.share_icon .fa {
padding: 5px;
background-color: var(--darkred);
margin-right: 10px;
}

.blog_card section img {
width: 30%;
margin-right: 20px;
object-fit: cover;
border: 5px solid rgba(1, 1, 1, 0.1);
}

.blog_card section img:nth-child(even) {
float: left;
}

.blog_card section img:nth-child(odd) {
float: right;
}

/*BLOG RIGHT CONTENT*/
.columns {
display: block;
margin-bottom: 4vh;
background-color: var(--white);
}

.columns section {
padding: 1rem;
}

.columns .title {
background-color: var(--yellow);
color: var(--white);
padding: 1rem;
text-align: left;
width: 100%;
display: block;
transition: 0.2s;
border-left: 0px solid var(--dark);
}

.columns:hover > .title {
border-left: 5px solid var(--dark);
}

.columns .title a {
float: right;
}

.columns .title a:hover {
color: var(--dark);
}

.search form {
width: 100%;
display: flex;
align-items: center;
}

.search fieldset:nth-child(2) {
width: 10%;
}

.search form input {
border: 1px solid rgba(1, 1, 1, 0.1);
padding: 1rem;
width: 100%;
font-weight: 600;
color: rgba(1, 1, 1, 0.5);
}

.search .btn1 {
border: 1px solid var(--yellow);
border-radius: 0;
}

/*BOOKS*/
.books .cards {
position: relative;
width: 100%;
height: 46vh;
overflow: hidden;
border-radius: 5px;
background-color: #f1f1f1;
}

.books .cards::after {
content: "";
position: absolute;
left: 0;
top: 0;
z-index: 900;
display: block;
width: 100%;
height: 100%;
}

.books .card_part {
position: absolute;
top: 0;
left: 0;
z-index: 7;
display: flex;
align-items: center;
width: 100%;
height: 100%;
background-size: 100% 100%;
background-position: center;
transform: translateX(700px);
background-repeat: no-repeat;
animation: opaqTransition 28s cubic-bezier(0, 0, 0, 0.97) infinite;
background-color: #f1f1f1;
}

.books .card_part.card_part-two {
z-index: 6;
animation-delay: 7s;
background-repeat: no-repeat;
}

.books .card_part.card_part-three {
z-index: 5;
animation-delay: 14s;
background-repeat: no-repeat;
}

.books .card_part.card_part-four {
z-index: 4;
animation-delay: 21s;
background-repeat: no-repeat;
}

@keyframes opaqTransition {
3% {
transform: translateX(0);
}
25% {
transform: translateX(0);
}
28% {
transform: translateX(-700px);
}
100% {
transform: translateX(-700px);
}
}

/*CATEGORIES*/
.categories a {
display: inline-block;
padding: 0.2rem 1rem;
border-radius: 40px;
background-color: rgba(1, 1, 1, 0.3);
margin: 5px 3px;
font-size: 12px;
white-space: nowrap;
color: var(--white);
}

.categories a:hover {
background-color: var(--dark);
}

/*POSTS*/
.posts a {
display: flex;
align-items: center;
margin: 0.4rem 0;
}

.posts a img {
width: 100px;
margin-right: 10px;
}

.posts a:hover > p {
color: var(--black);
}

/*COMMENTS*/
.comments {
position: relative;
overflow: hidden;
max-height: 60vh;
}

.marquee2 {
position: relative;
overflow: hidden;
line-height: 1.6em;
}

.marquee2 p {
border-bottom: 1px solid rgba(1, 1, 1, 0.1);
position: relative;
padding: 0.4rem 0;
}

.marquee2 p:before {
content: "\f10d";
font-family: "FontAwesome";
margin-right: 5px;
position: relative;
top: -5px;
}

@keyframes marquee1 {
0% {
top: 10%;
}
100% {
top: -100%;
}
}

/*SOCIAL MEDIA*/
.social_icons {
display: flex;
align-items: center;
justify-content: center;
column-gap: 15px;
background-color: transparent;
}

.social_icons .fa {
padding: 7px 13px;
background-color: #f1f1f1;
color: var(--white);
transition: 0.2s;
}

.social_icons a:hover > .fa {
transform: scale(1.1);
}

.social_icons .fa-facebook {
background-color: #3b5998;
}

.social_icons .fa-instagram {
background-color: #fb3958;
}

.social_icons .fa-youtube {
background-color: #c4302b;
}

.social_icons .fa-whatsapp {
background-color: #25d366;
}

.social_icons .fa-telegram {
background-color: #3399ff;
}

@media (max-width: 1000px) {
.blog_container {
flex-wrap: wrap;
}
.blog_content {
padding: 0;
order: 2;
}
.left_content {
flex: 0 0 100%;
order: 2;
padding: 1rem;
}
.right_content {
flex: 0 0 100%;
order: 1;
padding: 1rem;
}
.books,
.posts,
.comments,
.categories {
display: inline-block;
width: 47%;
margin: 1.3%;
margin-bottom: 0;
vertical-align: top;
height: 63vh;
}
.posts {
overflow-y: auto;
}
.right_content {
flex: 0 0 100%;
}
}

@media (max-width: 740px) {
.blog_card {
flex: 0 0 100%;
}
.posts,
.comments,
.books,
.categories {
width: 100%;
margin: 0;
height: auto;
margin-bottom: 4vh;
}
}

/*REMOVE THIS*/
.credits {
position: fixed;
right: 0;
bottom: 2%;
background-color: #1e1e1e;
padding: 0.5rem;
font-size: 12px;
z-index: 999;
color: rgba(255, 255, 255, 0.7);
}

.credits a {
color: rgba(255, 255, 255, 0.7);
}

.credits a:hover {
color: white;
}

.credits .btn0 {
background-color: white;
color: #000;
padding: 5px;
border-radius: 5px;
border: 0;
display: block;
margin: 1vh auto;
width: 100px;
text-align: Center;
}

.credits .btn0:hover {
color: black;
background-color: #b8bca7;
}

.member.tables{
-moz-box-shadow: 0px 10px 7px -7px #276873;
-webkit-box-shadow: 0px 10px 7px -7px #276873;
box-shadow: 0px 10px 7px -7px #276873;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0.05, #599bb3), color-stop(1, #408c99));
background: -moz-linear-gradient(top, #41b5ff 5%, #1887be 100%);
background: -webkit-linear-gradient(top, #41b5ff 5%, #1887be 100%);
background: -o-linear-gradient(top, #41b5ff 5%, #1887be 100%);
background: -ms-linear-gradient(top, #41b5ff 5%, #1887be 100%);
background: linear-gradient(to bottom, #41b5ff 5%, #1887be 100%);
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#599bb3', endColorstr='#408c99',GradientType=0);
background-color: #599bb3;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
cursor: pointer;
color: #ffffff;
font-weight: bold;
padding: 7px 32px;
border: none;

}

/* css styles  for comment start*/


.comment {
display: block;
transition: all 1s;
}
.commentClicked {
min-height: 0px;
border: 1px solid #eee;
border-radius: 5px;
padding: 5px 10px
}


.container textarea {
width: 100%;
border: none;
background: #E8E8E8;
padding: 5px 10px;
height: 50%;
border-radius: 5px 5px 0px 0px;
border-bottom: 2px solid #016BA8;
transition: all 0.5s;
margin-top: 15px;
}


button.primaryContained {
background: #016ba8;
color: #fff;
padding: 10px 10px;
border: none;
margin-top: 6px;
cursor: pointer;
text-transform: uppercase;
letter-spacing: 4px;
box-shadow: 0px 2px 6px 0px rgba(0, 0, 0, 0.25);
transition: 1s all;
font-size: 10px;
border-radius: 5px;
}

button.primaryContained:hover {
background: #9201A8;
}


body {
background-color: #f7f6f6
}

.card {

border: none;
box-shadow: 5px 6px 6px 2px #e9ecef;
border-radius: 4px;
}


.dots{

height: 4px;
width: 4px;
margin-bottom: 2px;
background-color: #bbb;
border-radius: 50%;
display: inline-block;
}

.badge{

padding: 7px;
padding-right: 9px;
padding-left: 16px;
box-shadow: 5px 6px 6px 2px #e9ecef;
}

.user-img{

margin-top: 4px;
}

.check-icon{

font-size: 17px;
color: #c3bfbf;
top: 1px;
position: relative;
margin-left: 3px;
}

.form-check-input{
margin-top: 6px;
margin-left: -24px !important;
cursor: pointer;
}


.form-check-input:focus{
box-shadow: none;
}


.icons i{

margin-left: 8px;
}
.reply{

margin-left: 12px;
}

.reply small{

color: #b7b4b4;

}


.reply small:hover{

color: green;
cursor: pointer;

}

ul.tree li{
	list-style-type: none;
	border: 1px solid #858cd0c4;
    padding: 30px;
}

ul.childtree li{
	list-style-type: none;
	border: 1px solid #f7f6f6;
    padding: 0px;
}
/* new style start */

:root {
  --lightGrey-gs-neumorphic-login-signup: #c8d0e7;
  --lightGrey2-gs-neumorphic-login-signup: #e4ebf5;
  --header-colors-gs-neumorphic-login-signup: #6d78fa;
  --header-font-size-gs-neumorphic-login-signup: 25px;
  --header-scale-open-gs-neumorphic-login-signup: 1.5;
  --card-open-close-tansition-time-gs-neumorphic-login-signup: 1s;
  --form-input-border-radius-gs-neumorphic-login-signup: 5px;
  --form-input-padding-gs-neumorphic-login-signup: 10px;
  --form-input-font-size-gs-neumorphic-login-signup: 15px;
  --form-input-font-color--gs-neumorphic-login-signup: #9baacf;
  --form-input-margin-gs-neumorphic-login-signup: 15px;
  --form-input-max-width-gs-neumorphic-login-signup: 300px;
}

* {
  margin: 0;
  /* background-color: #e4ebf5 !important; */
}

.gs-neumorphic-main-card-outer-container {
  height: 100vh;
  /* background-color: #e4ebf5; */
}

.gs-neumorphic-main-card-container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 80%;
}

.gs-neumorphic-main-card-container .gs-neumorphic-main-card {
  width: 100%;
  height: 80%;
  position: relative;
  overflow: hidden;
  box-shadow: 0.8rem 0.8rem 1.4rem var(--lightGrey-gs-neumorphic-login-signup),
    -0.2rem -0.2rem 1.8rem #ffffff;
  border-radius: 1rem;
  font-weight: bold;
  background-color: var(--lightGrey2-gs-neumorphic-login-signup);
}

@media only screen and (min-width: 320px) {
  .gs-neumorphic-main-card-container .gs-neumorphic-main-card {
    width: 90%;
  }
}
@media only screen and (min-width: 540px) {
  .gs-neumorphic-main-card-container .gs-neumorphic-main-card {
    width: 70%;
  }
}
@media only screen and (min-width: 800px) {
  .gs-neumorphic-main-card-container .gs-neumorphic-main-card {
    width: 60%;
  }
}
@media only screen and (min-width: 900px) {
  .gs-neumorphic-main-card-container .gs-neumorphic-main-card {
    width: 30%;
  }
}
@media only screen and (min-width: 1900px) {
  .gs-neumorphic-main-card-container .gs-neumorphic-main-card {
    width: 30%;
  }
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-signup {
  height: 85%;
  width: 100%;
  text-align: center;
  background-color: var(--lightGrey2-gs-neumorphic-login-signup);
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-login {
  height: 90%;
  width: 100%;
  text-align: center;
  transition: var(--card-open-close-tansition-time-gs-neumorphic-login-signup)
    ease-in-out;
  border-radius: 60% / 10%;
  box-shadow: 0rem 0rem 1rem var(--lightGrey-gs-neumorphic-login-signup),
    0rem 0rem 1rem #ffffff;
  background-color: var(--lightGrey2-gs-neumorphic-login-signup);
  z-index: 3;
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-login.gs-open {
  transform: translateY(-80%);
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-signup-login-header {
  text-transform: uppercase;
  color: var(--header-colors-gs-neumorphic-login-signup);
  cursor: pointer;
  font-size: var(--header-closed-size-gs-neumorphic-login-signup);
  font-weight: bold;
  transition: var(--card-open-close-tansition-time-gs-neumorphic-login-signup)
    ease-in-out;
  padding: 10px;
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-signup-login-header.gs-open {
  transform: scale(var(--header-scale-open-gs-neumorphic-login-signup));
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-form-container {
  width: 100%;
  visibility: hidden;
  opacity: 0;
  transition: var(--card-open-close-tansition-time-gs-neumorphic-login-signup)
    ease-in-out;
  height: 80%;
  overflow: auto;
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-form-open
  .gs-neumorphic-form-container {
  visibility: visible;
  opacity: 1;
  padding-bottom: 20px;
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-form-container
  .gs-neumorphic-input {
  width: calc(100% - 50px);
  border: none;
  border-radius: var(--form-input-border-radius-gs-neumorphic-login-signup);
  padding: var(--form-input-padding-gs-neumorphic-login-signup);
  box-shadow: inset 0.1rem 0.1rem 0.3rem
      var(--lightGrey-gs-neumorphic-login-signup),
    inset -0.1rem -0.1rem 0.3rem white;
  background: #fff;
  /* color: var(--form-input-font-color--gs-neumorphic-login-signup); */
  margin: var(--form-input-margin-gs-neumorphic-login-signup) auto;
  font-size: var(--form-input-font-size-gs-neumorphic-login-signup);
  max-width: var(--form-input-max-width-gs-neumorphic-login-signup);
  display: block;
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-form-container
  .gs-neumorphic-input::placeholder {
  color: var(--form-input-font-color--gs-neumorphic-login-signup);
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-form-container
  .gs-neumorphic-input:focus {
  outline: none;
  box-shadow: 0.3rem 0.3rem 0.6rem var(--lightGrey-gs-neumorphic-login-signup),
    -0.2rem -0.2rem 0.5rem white;
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-form-container::-webkit-scrollbar {
  width: 5px;
  -webkit-appearance: none;
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-form-container::-webkit-scrollbar-track {
  background: transparent;
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-form-container::-webkit-scrollbar-thumb {
  background-color: rgba(108, 121, 119, 0.44);
  border: 1px solid #fff;
  border-radius: 1rem;
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-form-container
  .gs-neumorphic-button {
  width: max-content;
  padding: var(--form-input-padding-gs-neumorphic-login-signup)
    calc(var(--form-input-padding-gs-neumorphic-login-signup) * 2.5);
  margin-top: var(--form-input-margin-gs-neumorphic-login-signup);
  margin-bottom: var(--form-input-margin-gs-neumorphic-login-signup);
  border: none;
  border-radius: var(--form-input-border-radius-gs-neumorphic-login-signup);
  box-shadow: 0.3rem 0.3rem 0.6rem var(--lightGrey-gs-neumorphic-login-signup),
    -0.2rem -0.2rem 0.5rem white;
  cursor: pointer;
  transition: var(--card-open-close-tansition-time-gs-neumorphic-login-signup)
    ease;
  color: #fffffff7;
  background-color: #6c69ff;
  font-size: var(--form-input-font-size-gs-neumorphic-login-signup);
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-form-container
  .gs-neumorphic-button:hover {
  color: var(--header-colors-gs-neumorphic-login-signup);
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-form-container
  .gs-neumorphic-button:active {
  box-shadow: inset 0.2rem 0.2rem 0.5rem
      var(--lightGrey-gs-neumorphic-login-signup),
    inset -0.2rem -0.2rem 0.5rem white;
}

.gs-neumorphic-main-card-container
  .gs-neumorphic-main-card
  .gs-neumorphic-form-container
  .gs-neumorphic-button:focus {
  outline: none;
  color: var(--header-colors-gs-neumorphic-login-signup);
}
/* new style end */
/* for image */
.holder {
  display: grid;
  padding: 2rem;
  grid-template-columns: 300px 1fr;
  gap: 1rem;
  align-items: center;
  max-width: 800px;
  margin: 0 auto;
  font: 500 100%/1.5 system-ui;
}
.holder img {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
}
.usercomments {

margin-bottom: 50px;
}
.usercomments .comment{
	margin-top: 55px;
	background: #ffffff96;
	width: 500px;  
	padding: 17px;
}

.usercomments .replies .comment{
	width: 480px;
}
.usercomments .comment .user{
color: black;
display: flex;
font-size: 12px;
justify-content: space-between;
}

.usercomments  .usercomment{
color: black;
}

.usercomments  .reply{
position: relative;
}

.usercomments  .reply a{
background: #016ba8;
padding: 7px;
float: right;
font-size: 10px;
position: absolute;
right: -14px;
top: 25px;
}
</style>
</head>

<body>
<header style="background: linear-gradient(rgb(23 0 222 / 25%), rgb(65 213 109 / 0%)), url(../images/#);">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #3db1f9">
<a class="navbar-brand" href="<?php echo base_url(); ?>">Blog Posting</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarColor03">
<ul class="navbar-nav mr-auto">
<li class="nav-item">
<a class="nav-link" href="<?php echo site_url('categories'); ?>">Categories</a>
</li>
<?php if ($this->session->userdata('logged_in')) { ?>
<li class="nav-item">
<a class="nav-link" href="<?php echo site_url('blogs/save'); ?>">Add Blogs</a>
</li>
<?php } ?>
</ul>
<div class="form-inline">
<?php if ($this->uri->segment(1) != 'login'): ?>
<div class="form-group">
<?php echo form_open('home/search'); ?>
<input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" value="<?php echo $this->session->userdata('search_query') ?>">
<?php $categories = $this->categories_model->get_published_cat(); ?>
<select class="custom-select"  name="category" title="Search by Category">
<option value="AllCategory">Search by Category</option>
<?php 
$search_cat = $this->session->userdata('search_cat');
foreach ($categories as $category) {
$selected = ($category['id'] == $search_cat) ? 'selected="selected"' : '';
echo '<option '.$selected.' value="'.$category['id'].'">'.$category['title'].'</option>';
} ?>
</select>
<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>

<?php echo form_close(); ?>
</div>
<?php endif; ?>
<?php if(!$this->session->userdata('logged_in')): ?>
<div class="">
<a href="<?php echo site_url('signup'); ?>"><button type="button" class="btn btn-danger">Sign-Up</button></a>
<a href="<?php echo site_url('login'); ?>"><button type="button" class="btn btn-success">Login</button></a>
<?php else: ?>
<a href="<?php echo site_url('logout'); ?>"><button type="button" class="btn btn-success">LogOut</button></a>
</div>
<?php endif; ?>
</div>
</div>
</nav>
