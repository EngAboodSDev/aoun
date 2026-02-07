/*
 * Copyright © 2026 Aoun - Hajj & Umrah Helper
 * All rights reserved.
 * Developed by Abdulrahman Fadhl Ameer Saif
 * @EngAboodSDev (abdulrahmanfadhl@gmail.com)
*/

/**
 * script.js - Login/Signup form UI handlers
 * Handles form switching and Choices.js initialization for the registration page
 */

/**
 * Toggles between Login and Signup forms when user clicks the form tab buttons.
 * Slides the active form into view and updates tab styling.
 */
$(function () {
  $(".btn").click(function (e) {
    e.preventDefault();
    $(".form-signin").toggleClass("form-signin-left");
    $(".form-signup").toggleClass("form-signup-left");
    $(".frame").toggleClass("frame-long");
    $(".signup-inactive").toggleClass("signup-active");
    $(".signin-active").toggleClass("signin-inactive");
    $(".forgot").toggleClass("forgot-left");
    $(this).removeClass("idle").addClass("active");
  });
});



/**
 * Handles Signup form submission animation.
 * Collapses the nav and form, shows success state, and shortens the frame.
 */
$(function () {
  $(".btn-signup").click(function () {
    $(".nav").toggleClass("nav-up");
    $(".form-signup-left").toggleClass("form-signup-down");
    $(".success").toggleClass("success-left");
    $(".frame").toggleClass("frame-short");
  });
});

/**
 * Handles Login form submission animation and initializes Choices.js.
 * Animates welcome screen elements and sets up multi-select for language picker.
 */
$(function () {
  $(".btn-signin").click(function () {
    $(".btn-animate").toggleClass("btn-animate-grow");
    $(".welcome").toggleClass("welcome-left");
    $(".cover-photo").toggleClass("cover-photo-down");
    $(".frame").toggleClass("frame-short");
    $(".profile-photo").toggleClass("profile-photo-down");
    $(".btn-goback").toggleClass("btn-goback-up");
    $(".forgot").toggleClass("forgot-fade");
  });
  /** Choices.js: Multi-select dropdown for volunteer language selection */
  var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
    removeItemButton: true,
    searchResultLimit: 5,

  });


});

/*
 * Copyright © 2026 Aoun - Hajj & Umrah Helper
 * All rights reserved.
 * Developed by Abdulrahman Fadhl Ameer Saif
 * @EngAboodSDev (abdulrahmanfadhl@gmail.com)
*/

