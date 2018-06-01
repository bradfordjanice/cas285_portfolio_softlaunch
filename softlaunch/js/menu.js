/*
File Name: menu.js
Date: 04/18/18
Programmer: Janice Bradford
Project: JSB Animation Studios Portfolio

Code was modified from https://www.w3schools.com/howto/howto_js_topnav_responsive.asp 
*/

/* HAMBURGER MENU */

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}