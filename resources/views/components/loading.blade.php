<div wire:loading>
    <div style='display: flex; justify-content: center; align-items:center; 
              background-color: black; position: fixed; top: 0px; z-index:9999; width:100%; height:100%;
              opacity: .75'>
      <div class="la-ball-running-dots la-2x">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
</div>

@push('styles')
<style>
    /*!
  * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
  * Copyright 2015 Daniel Cardoso <@DanielCardoso>
  * Licensed under MIT
  */
 .la-ball-running-dots,
 .la-ball-running-dots > div {
     position: relative;
     -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
             box-sizing: border-box;
 }
 .la-ball-running-dots {
     display: block;
     font-size: 0;
     color: #fff;
 }
 .la-ball-running-dots.la-dark {
     color: #333;
 }
 .la-ball-running-dots > div {
     display: inline-block;
     float: none;
     background-color: currentColor;
     border: 0 solid currentColor;
 }
 .la-ball-running-dots {
     width: 10px;
     height: 10px;
 }
 .la-ball-running-dots > div {
     position: absolute;
     width: 10px;
     height: 10px;
     margin-left: -25px;
     border-radius: 100%;
     -webkit-animation: ball-running-dots-animate 2s linear infinite;
        -moz-animation: ball-running-dots-animate 2s linear infinite;
          -o-animation: ball-running-dots-animate 2s linear infinite;
             animation: ball-running-dots-animate 2s linear infinite;
 }
 .la-ball-running-dots > div:nth-child(1) {
     -webkit-animation-delay: 0s;
        -moz-animation-delay: 0s;
          -o-animation-delay: 0s;
             animation-delay: 0s;
 }
 .la-ball-running-dots > div:nth-child(2) {
     -webkit-animation-delay: -.4s;
        -moz-animation-delay: -.4s;
          -o-animation-delay: -.4s;
             animation-delay: -.4s;
 }
 .la-ball-running-dots > div:nth-child(3) {
     -webkit-animation-delay: -.8s;
        -moz-animation-delay: -.8s;
          -o-animation-delay: -.8s;
             animation-delay: -.8s;
 }
 .la-ball-running-dots > div:nth-child(4) {
     -webkit-animation-delay: -1.2s;
        -moz-animation-delay: -1.2s;
          -o-animation-delay: -1.2s;
             animation-delay: -1.2s;
 }
 .la-ball-running-dots > div:nth-child(5) {
     -webkit-animation-delay: -1.6s;
        -moz-animation-delay: -1.6s;
          -o-animation-delay: -1.6s;
             animation-delay: -1.6s;
 }
 .la-ball-running-dots > div:nth-child(6) {
     -webkit-animation-delay: -2s;
        -moz-animation-delay: -2s;
          -o-animation-delay: -2s;
             animation-delay: -2s;
 }
 .la-ball-running-dots > div:nth-child(7) {
     -webkit-animation-delay: -2.4s;
        -moz-animation-delay: -2.4s;
          -o-animation-delay: -2.4s;
             animation-delay: -2.4s;
 }
 .la-ball-running-dots > div:nth-child(8) {
     -webkit-animation-delay: -2.8s;
        -moz-animation-delay: -2.8s;
          -o-animation-delay: -2.8s;
             animation-delay: -2.8s;
 }
 .la-ball-running-dots > div:nth-child(9) {
     -webkit-animation-delay: -3.2s;
        -moz-animation-delay: -3.2s;
          -o-animation-delay: -3.2s;
             animation-delay: -3.2s;
 }
 .la-ball-running-dots > div:nth-child(10) {
     -webkit-animation-delay: -3.6s;
        -moz-animation-delay: -3.6s;
          -o-animation-delay: -3.6s;
             animation-delay: -3.6s;
 }
 .la-ball-running-dots.la-sm {
     width: 4px;
     height: 4px;
 }
 .la-ball-running-dots.la-sm > div {
     width: 4px;
     height: 4px;
     margin-left: -12px;
 }
 .la-ball-running-dots.la-2x {
     width: 20px;
     height: 20px;
 }
 .la-ball-running-dots.la-2x > div {
     width: 20px;
     height: 20px;
     margin-left: -50px;
 }
 .la-ball-running-dots.la-3x {
     width: 30px;
     height: 30px;
 }
 .la-ball-running-dots.la-3x > div {
     width: 30px;
     height: 30px;
     margin-left: -75px;
 }
 /*
  * Animation
  */
 @-webkit-keyframes ball-running-dots-animate {
     0%,
     100% {
         width: 100%;
         height: 100%;
         -webkit-transform: translateY(0) translateX(500%);
                 transform: translateY(0) translateX(500%);
     }
     80% {
         -webkit-transform: translateY(0) translateX(0);
                 transform: translateY(0) translateX(0);
     }
     85% {
         width: 100%;
         height: 100%;
         -webkit-transform: translateY(-125%) translateX(0);
                 transform: translateY(-125%) translateX(0);
     }
     90% {
         width: 200%;
         height: 75%;
     }
     95% {
         width: 100%;
         height: 100%;
         -webkit-transform: translateY(-100%) translateX(500%);
                 transform: translateY(-100%) translateX(500%);
     }
 }
 @-moz-keyframes ball-running-dots-animate {
     0%,
     100% {
         width: 100%;
         height: 100%;
         -moz-transform: translateY(0) translateX(500%);
              transform: translateY(0) translateX(500%);
     }
     80% {
         -moz-transform: translateY(0) translateX(0);
              transform: translateY(0) translateX(0);
     }
     85% {
         width: 100%;
         height: 100%;
         -moz-transform: translateY(-125%) translateX(0);
              transform: translateY(-125%) translateX(0);
     }
     90% {
         width: 200%;
         height: 75%;
     }
     95% {
         width: 100%;
         height: 100%;
         -moz-transform: translateY(-100%) translateX(500%);
              transform: translateY(-100%) translateX(500%);
     }
 }
 @-o-keyframes ball-running-dots-animate {
     0%,
     100% {
         width: 100%;
         height: 100%;
         -o-transform: translateY(0) translateX(500%);
            transform: translateY(0) translateX(500%);
     }
     80% {
         -o-transform: translateY(0) translateX(0);
            transform: translateY(0) translateX(0);
     }
     85% {
         width: 100%;
         height: 100%;
         -o-transform: translateY(-125%) translateX(0);
            transform: translateY(-125%) translateX(0);
     }
     90% {
         width: 200%;
         height: 75%;
     }
     95% {
         width: 100%;
         height: 100%;
         -o-transform: translateY(-100%) translateX(500%);
            transform: translateY(-100%) translateX(500%);
     }
 }
 @keyframes ball-running-dots-animate {
     0%,
     100% {
         width: 100%;
         height: 100%;
         -webkit-transform: translateY(0) translateX(500%);
            -moz-transform: translateY(0) translateX(500%);
              -o-transform: translateY(0) translateX(500%);
                 transform: translateY(0) translateX(500%);
     }
     80% {
         -webkit-transform: translateY(0) translateX(0);
            -moz-transform: translateY(0) translateX(0);
              -o-transform: translateY(0) translateX(0);
                 transform: translateY(0) translateX(0);
     }
     85% {
         width: 100%;
         height: 100%;
         -webkit-transform: translateY(-125%) translateX(0);
            -moz-transform: translateY(-125%) translateX(0);
              -o-transform: translateY(-125%) translateX(0);
                 transform: translateY(-125%) translateX(0);
     }
     90% {
         width: 200%;
         height: 75%;
     }
     95% {
         width: 100%;
         height: 100%;
         -webkit-transform: translateY(-100%) translateX(500%);
            -moz-transform: translateY(-100%) translateX(500%);
              -o-transform: translateY(-100%) translateX(500%);
                 transform: translateY(-100%) translateX(500%);
     }
 }
 </style> 
@endpush