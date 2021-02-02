<?php
/**
 * ============== Template Name: Home Page
 *
 * @package fregateisland
 */
get_header();?>
<?php $heroImage  = get_field('hero_image');?>
<div class="scroll-components">
    <div class="scroll-components__image">
        <div class="scroll-components__image--item parallax" style="background:url(<?php echo $heroImage['url'];?>);"></div>
        <div class="lower-grad"></div>
    </div>
    
    <div class="scroll-components__headline parallax-down">
        <div class="container">
            <h1 class="heading heading__0">Utterly Unique</h1>
            <h1 class="heading heading__0">Utterly Secluded</h1>
        </div>
    </div>
    <div class="scroll-components__map">
        <div class="container">
            <svg version="1.1" id="map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="410.7px"
             height="291.1px" viewBox="0 0 410.7 291.1" style="overflow:visible;enable-background:new 0 0 410.7 291.1;"
             xml:space="preserve">
            <style type="text/css">
            .st0{opacity:0.35;fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
            .st1{fill:#FBB90F;}
            .st2{font-family:'Lato-Regular';}
            .st3{font-size:5.7129px;}
            .st4{fill-rule:evenodd;clip-rule:evenodd;fill:#FBB90F;}
            .st5{fill-rule:evenodd;clip-rule:evenodd;fill:#FFFFFF;}
            .st6{fill:#FFFFFF;}
            .st7{font-family:'Lato-Semibold';}
            .st8{font-size:4.7607px;}
            .st9{enable-background:new    ;}
            </style>
            <defs>
            </defs>
            <rect id="outside-bounds" class="st0" width="410.7" height="291.1"/>
            <g id="fregate-small">
            <text transform="matrix(1 0 0 1 209.8009 146.9969)" class="st1 st2 st3">Fregate</text>
            <path id="path33_1_" class="st4" d="M203.1,144.5c-0.3,0.2-0.4,0.6-0.2,0.9c0.3,0.5,0.7,0.9,1.1,1.2c0.3,0.3,0.7,0.5,1.1,0.5
                c0.3,0,0.8,0,1.1,0c0.3,0,0.4-0.1,0.4-0.4c0-0.2,0-0.5,0.3-0.5s0.6-0.4,0.2-0.4c-0.4,0-0.5-0.3-0.7-0.5c-0.2-0.2-0.5-0.6-0.7-0.9
                c-0.2-0.3-0.8-0.8-1.1-0.6c-0.4,0.2-0.7,0.5-1,0.5C203.3,144.3,203.4,144.3,203.1,144.5z"/>
            </g>
            <g id="island-outlines">
            <path id="path9_1_" class="st5" d="M43.7,99c-0.3-0.2-0.6,0.1-0.4,0.5c0.2,0.2,0.2,0.6,0,0.8c-0.1,0.2-0.2,1.2,0,1.5
                c0.2,0.2,0.3,0.4,0.5,0.7c0,0-0.2,0.4,0.1,0.5c0.2,0.2,0.6,0.2,0.8,0.1c0.3-0.2,0.8-0.2,0.8-0.5c0-0.2,0.2-0.3,0.4-0.3
                c0.2,0,0.2,0,0.3-0.3c0.1-0.3,0.2-0.6-0.2-0.5s-0.4,0-0.6-0.2c-0.2-0.3-0.5-0.7-0.6-0.9c-0.1-0.1-0.1-0.3,0-0.5
                c0.1-0.2-0.2-0.5-0.4-0.6c-0.1-0.1-0.2-0.2-0.3-0.4C44.1,99.1,43.9,99.1,43.7,99z"/>
            <path id="path11_1_" class="st5" d="M36.4,119.1c-0.3,0.2-0.3,0.5-0.6,0.6c-0.3,0.1-0.3,0.6-0.5,0.7c-0.2,0.1,0,1,0.4,1.1
                s0.3,0.7,0.3,0.9c0,0.1,0,0.3,0,0.4c0,0,1.2,0.8,1.2,1.2c0,0.4,0,0.5,0.4,0.5c0.4,0,1,0.5,1.3,0.8c0.4,0.3,0.7,0.7,1,1.1
                c0,0,0.2,0.4,0,0.6s-0.2,0.5-0.1,0.8c0.1,0.3,0.2,0.6,0.4,0.6c0.2,0,0.6,0.1,0.9,0.1c0.3,0,0.6,0.1,0.9,0.2
                c0.2,0.1,0.5,0.2,0.8,0.2c0.3-0.2,0.7-0.3,1.1-0.3c0.4,0,0.9-0.2,1.2-0.5c-0.1-0.3,0-0.6,0.2-0.8c0.2-0.2,0.3-0.5,0.3-0.8
                c0-0.2-0.2-0.6,0.2-0.7c0.5-0.1,0.4-0.2,0.2-0.5c-0.2-0.2-0.2-0.5,0-0.8c0.2-0.3,0.4-0.6,0.7-0.8c0.3-0.2,0.4-0.4,0.4-0.7
                c0-0.3,0.2-0.8-0.1-0.6c-0.3,0.2-0.6,0.2-0.8,0s-0.8-1.2-0.9-1.4c-0.3-0.6-0.6-1.2-0.9-1.7c-0.4-0.3-0.8-0.7-1.3-1
                c-0.2-0.2-0.4-0.3-0.7-0.3c-0.3,0-0.7-0.1-1-0.2c-0.3-0.1-0.5-0.2-0.8-0.2c-0.3,0-0.6,0-0.9,0.1c-0.1,0.1-0.3,0.2-0.4,0.4
                c-0.1,0.2-0.2,0.4-0.4,0.2c-0.2-0.2-0.5-0.3-0.8-0.2c-0.3,0.1-0.8,0.1-0.8,0.3c-0.1,0.2-0.2,0.3-0.4,0.5
                C36.8,118.8,36.6,118.9,36.4,119.1z"/>
            <path id="path13_1_" class="st5" d="M102.9,148.7c-0.3,0.3-0.3,0.8-0.2,1.2c0.2,0.3,0.2,0.7,0,1c-0.2,0.3-0.2,1,0.3,1
                c0.5,0.1,0.4-0.3,0.6-0.6c0.2-0.3,0.2-0.5,1-0.5s1-0.1,1.4-0.6c0.2-0.3,0.3-0.7,0.2-1c0-0.3,0-0.4-0.4-0.4c-0.4,0-0.8-0.1-0.8-0.5
                c-0.1-0.3-0.4-0.6-0.7-0.5c-0.2,0.1-0.5,0.3-0.7,0.4C103.3,148.4,103.1,148.5,102.9,148.7z"/>
            <path id="path15_1_" class="st5" d="M104.1,153.1c-0.3,0-0.5,0.3-0.4,0.6c0,0,0,0.1,0,0.1c0.1,0.2,0.3,0.3,0.5,0.3
                c0.1,0,0.2-0.1,0.2-0.2C104.6,153.4,104.4,153,104.1,153.1z"/>
            <path id="path17_1_" class="st5" d="M105.6,152.6c-0.5,0-0.7,0.2-0.5,0.5c0.1,0.3,0.4,0.3,0.8,0
                C106.1,152.8,106.1,152.6,105.6,152.6z"/>
            <path id="path19_1_" class="st5" d="M104.6,154.5c-0.2,0.2-0.3,0.5,0.1,0.6c0.4,0,0.8,0,1.1,0.1c0.2,0.1,0.5-0.4,0.2-0.5
                c-0.3-0.1-0.9-0.4-0.9-0.4C104.9,154.3,104.7,154.4,104.6,154.5z"/>
            <path id="path21_1_" class="st5" d="M101.6,155.3c-0.2,0.4-0.5,0.8,0.1,1c0.5,0.2,1.1,0.4,1.2,0.7c0.1,0.2,0.2,0.5,0.3,0.7
                c0.1,0.2,0.4,0.3,0.7-0.1c0.3-0.3,0.4-0.2,0.6-0.2c0.2-0.1,0.5-0.2,0.2-0.5c-0.2-0.3-0.4-0.6-0.6-0.9c-0.1-0.2-0.3-0.4-0.6-0.4
                c-0.4,0-0.8-0.1-1.1-0.3C102.1,154.9,101.8,154.9,101.6,155.3z"/>
            <path id="path23_1_" class="st5" d="M108.6,164c0.5,0.2,0.8-1.1,0.3-1.2C108.4,162.8,108.1,163.8,108.6,164z"/>
            <path id="path25_1_" class="st5" d="M71.2,162.4c-0.3,0.4-0.1,0.7,0.2,1c0.3,0.3,1,0.3,1.5,0.3c0.5,0,1.3,0.2,1-0.2
                c-0.3-0.5-0.4-0.8-1.1-0.8s-0.7-0.2-1-0.3C71.6,162.2,71.6,162,71.2,162.4z"/>
            <path id="path27_1_" class="st5" d="M79.8,164.3c-0.5,0.2-0.2,1,0.1,1.3c0.2,0.3,0.5,0.3,1,0.8s1.3,1,1.2,0.3
                c-0.1-0.7-0.4-1.2-0.9-1.7C80.6,164.4,80.3,164.1,79.8,164.3z"/>
            <path id="path29_1_" class="st5" d="M72.8,158c-0.3,0.3-0.2,0.8,0.1,1.1c0.1,0.1,0.2,0.1,0.3,0.2c0.5,0,0.8,0,1,0.4s0.8,0.3,1,0.5
                c0.3,0.2,0.5,0.3,0.8-0.1c0.4-0.4,0.6-0.6,0.9-0.4c0.3,0.1,0.6,0.1,0.7-0.2c0.2-0.2,0.6-0.1,0.8,0.1c0.2,0.3,0.3,0.4,0.7,0.3
                c0.4-0.2,0.6,0.1,0.9,0.4c0.3,0.3,0.7,0.4,0.5,0.7c-0.2,0.3-0.2,0.3-0.6,0c-0.2-0.2-0.6-0.2-0.8,0c0,0-0.1,0.1-0.1,0.1
                c-0.2,0.3-0.1,0.7,0.5,0.7c0.4,0,0.7,0.2,0.8,0.6c0.1,0.3,0,0.6,0.4,0.6c0.4,0,0.7-0.2,0.7-0.6c0,0,0,0,0-0.1
                c0-0.5,0.6-0.5,0.9-0.5s0.4,0.4,0.5,0.7c0.4,0.3,0.7,0.6,1.2,0.9c0.4,0.3,0.7,0.7,1,1.1c0.5,0.5,1.1,0.9,1.7,1.2
                c0.3,0.1,0.6,0.3,0.9,0.6c0.2,0.3,0.5,0.3,0.8,0.2c0.3-0.2,0.7-0.2,1,0c0.3,0.2,0.4,0.1,0.6,0c0.2-0.2,0.8-0.4,1.1-0.1
                c0.3,0.4,0.3,0.4,0.8,0.4s0.8,0.3,0.6,0.5c-0.2,0.3-0.3,0.7,0.1,0.9c0.4,0.1,0.4,0.5,0.4,0.8c0,0.3-0.3,0.8,0.5,1.1
                c0.5,0.1,1,0.6,1.1,1.1c0,0.4-0.1,0.6,0.4,0.6c0.5,0,1.2,0.1,1.2,0.5c0,0.4-0.1,1,0.2,1.1c0.3,0.2,0.4,0,0.5-0.4s0.3-0.6,0.7-0.4
                c0.5,0.3,1,0.6,1.4,0.9c0.2,0.2,0.3,0.5,0.2,0.8c-0.1,0.3-0.3,0.5-0.6,0.3s-0.5-0.2-0.5,0.1c0,0.3,0.1,0.5,0.4,0.6
                c0.3,0.1,0.2,0.4,0,0.7c-0.2,0.3-0.1,0.5,0.1,0.7s1.2,1,1.2,1c0.3,0.3,0.6,0.7,0.7,1.1c0.1,0.5,0.3,0.5,0.6,0.7
                c0.3,0.2,0.3,0.6,0.1,0.9c-0.3,0.3-0.8,0.4-1.2,0.2c-0.6-0.2-1.2-0.2-1.3,0.1c-0.4,0.4-1,0.4-1.5,0.2c-0.4-0.3-1-0.4-1.2,0.2
                c-0.2,0.5-0.5,0.9-0.9,1.2c-0.2,0.2-0.2,0.5,0.3,0.8s0.2,0.7-0.1,0.9s-0.4,0.3-0.3,0.6c0.1,0.2,0.3,0.4,0.5,0.5
                c0.3,0.3,0.5,0.6,0.5,1c0,0.3,0.1,0.6,0.4,0.6c0.3,0,0.5-0.1,0.5-0.4c0-0.4-0.3-0.8,0.4-0.8c0.4,0.1,0.8-0.1,0.9-0.5
                c0.2-0.3,0.6-0.5,1-0.4c0.4,0,0.5,0.4,0.7,0.7c0.1,0.2,0.3,0.4,0.5,0.5c0.2,0.1,0.4,0.6,0,0.7s-0.6,0.1-0.6,0.4s0,0.3,0.3,0.4
                c0.3,0.1,0.5,0.4,0.5,0.7c0,0.3,0.1,0.5,0.4,0.6c0.3,0.1,0.6,0.3,0.9,0.4c0,0,0.7,0.3,0.3,0.5s-0.5,0.7,0.1,0.8s0.8,0.1,1.1,0.3
                s0.7,0.6,0.5,1c-0.1,0.4-0.1,0.8,0.1,1.1c0.1,0.4,0.4,0.6,0.7,0.7c0.6,0.1,1.1,0.1,1.2,0.5s0.3,0.4,0.6,0.5
                c0.4,0.1,0.7,0.4,0.8,0.8c0.1,0.4,0.3,0.6,0.7,0.6s0.7-0.2,0.6-0.6c-0.1-0.4,0.1-0.7,0.4-0.5c0.3,0.1,0.7,0.1,1.1,0
                c0.5-0.1,0.9,0.1,1.2,0.5c0.2,0.4,0.3,0.5,0.6,0.4c0.3-0.1,0.3-0.4,0.3-0.7c0-0.3-0.1-0.6-0.3-0.8c-0.2-0.3-0.5-0.9-0.2-1.2
                c0.3-0.2,0-1-0.3-0.8s-0.6,0.1-0.6-0.1c0-0.3-0.1-0.4-0.4-0.4c-0.4,0-0.7-0.2-1-0.4c-0.2-0.2-0.3-0.5-0.2-0.8
                c0-0.4,0.1-2.6,0.1-2.6c0-0.3-0.1-0.5-0.3-0.7c-0.2-0.2-0.3-0.5-0.2-0.8c0-0.4,0-0.6-0.4-0.7c-0.4-0.1-0.6-0.2-0.6-0.7
                c0-0.4,0.1-0.6-0.2-0.8c-0.2-0.2-0.3-0.4-0.3-0.7v-1.7c0-0.4,0.2-0.7,0.5-0.9c0.4-0.2,1.3-0.9,1.7-1.1s0.6-0.3,0.7-0.6
                s0.2-0.2-0.2-0.5s-0.8-0.3-0.8-0.7c0-0.5-0.1-0.9-0.2-1.3c-0.1-0.3-0.4-2.5-0.6-2.9c-0.1-0.4-0.1-0.9,0.1-1.3
                c0.2-0.4,1.2-2.3,1.2-2.6c0.2-0.4,0.3-0.8,0.3-1.2c0-0.4,0.1-0.8,0.4-1.1c0.3-0.3,0.6-0.6,0.9-1c0.1-0.3,0.2-0.6-0.2-0.8
                c-0.4-0.2-0.6-0.1-0.8,0.2c-0.3,0.2-0.7,0.2-0.9-0.1c-0.5-0.6-1.1-1.1-1.7-1.7c-0.5-0.3-1-0.4-1.6-0.5c-0.4,0-0.4,0.4-0.4,0.7
                c0,0.2-0.2,0.4-0.4,0.4c-0.1,0-0.1,0-0.2,0c-0.4-0.2-0.8-0.3-1.2-0.4c-0.3,0-0.9-0.7-0.9-0.7c-0.3-0.4-0.7-0.8-1.1-1.1
                c-0.4-0.2-0.8-0.5-1-0.8c-0.1-0.3-0.4-0.4-0.7-0.4c-0.4,0-0.7,0-1-0.3c-0.3-0.3-0.5-0.6-0.7-0.9c0,0-1.9-2.1-2-2.3
                c-0.4-0.5-0.8-1-1.2-1.6c0-0.2-0.2-0.7-0.6-0.7c-0.4,0-0.7-0.6-0.2-0.6c0.5,0,0.6-0.2,0.5-0.4c-0.1-0.2-0.3-0.3-0.8-0.2
                c-0.4,0-0.8-0.2-0.4-0.7c0.4-0.4,0.4-0.7,0.4-0.9c-0.1-0.5,0-1.1,0.3-1.5c0.5-0.6,0.2-1,0.1-1.4c-0.1-0.4-0.1-0.9-0.3-1.3
                c-0.1-0.4,0-0.9,0.2-1.3c0.2-0.3,0.3-0.6,0.3-0.9c0-0.3,0.1-0.6,0.3-0.9c0.2-0.2,0.2-0.5,0.2-1c0-0.5,0-0.7-0.3-0.9
                c-0.3-0.2-0.3-0.5-0.5-0.6c-0.2-0.2-0.3-0.5-0.3-0.7c0-0.4,0.1-0.8-0.4-0.8s-0.7-0.1-0.8-0.4c0-0.4-0.3-0.7-0.7-0.8
                c-0.4-0.1-0.7-0.3-1,0c-0.2,0.3-0.7,0.4-1,0.2c-0.3-0.2-0.5-0.5-1.1-0.4s-1.1,0.3-1.1,0.7c0,0.3,0,0.6-0.1,0.8
                c-0.1,0.3-0.1,0.6-0.1,0.8c0,0.3,0.1,1.9,0.1,2.1s0.1,0.5-0.2,0.8c-0.3,0.3-0.4,0.7-0.3,1.1c0.1,0.4,0.2,2.7,0.2,2.7
                s-0.4,0.8-0.4,1.1c-0.2,0.7-0.5,1.3-0.8,1.9c-0.3,0.2-0.7,0.3-1,0.3c-0.3,0-0.7,0-1,0.1c-0.8,0.3-1.5,0.5-2.3,0.6
                c-0.4,0.1-0.8,0.1-1.2,0c-0.4-0.2-0.7-0.4-1.1-0.3s-0.9,0.5-1.1,0.6c-0.2,0.1-1.2,0.4-1.2,0.4c-0.2,0.3-0.3,0.5-0.5,0.8
                c-0.2,0.2-0.5,0-0.8,0.4c-0.3,0.4-0.3,0.2-0.5,0.2c-0.3-0.1-0.6,0-0.7,0.3c-0.3,0.3-0.5,0.7-0.6,1.1c0,0.3,0,0.5,0.3,0.5
                c0.3,0,0.6,0,0.6,0.4s0.2,0.5,0.4,0.7c0.2,0.2,0.3,0.5,0.1,0.7c0,0,0,0,0,0c-0.2,0.3-0.7,0.2-0.9-0.2s-0.4-0.4-0.6-0.3
                c-0.2,0.1-0.4,0-0.6-0.1C73.6,157.6,73.2,157.5,72.8,158z"/>
            <path id="path31_1_" class="st5" d="M164.4,143.4c-0.7-0.2-1.2,1-0.6,1.2C164.4,144.7,165.1,143.6,164.4,143.4z"/>
            <path id="path35_1_" class="st5" d="M197.1,148.4c-0.7,0-1.3,1.1-0.5,1.3C197.3,149.8,197.7,148.4,197.1,148.4z"/>
            <path id="path37_1_" class="st5" d="M143.5,70.2c-0.4-0.1-0.4,0.4-0.1,0.4C143.6,70.7,143.9,70.3,143.5,70.2z"/>
            <path id="path39_1_" class="st5" d="M140.3,59.4c-0.1,0.2-0.2,0.5,0,0.7c0.2,0.1,0.5,0,0.7,0.1c0.3,0.1,0.7,0.2,1,0.2
                c0.2,0,0.8,0.1,0.9,0c0.2-0.1,0.3-0.5,0-0.6c-0.3-0.1-0.7-0.2-1-0.3c-0.2-0.1-0.4,0-0.8,0C140.8,59.5,140.5,59.2,140.3,59.4z"/>
            <path id="path41_1_" class="st5" d="M140,87c-0.3,0-0.5,0.2-0.2,0.3c0.2,0.1,0.4,0.2,0.5,0.4c0.1,0.2,0.4,0.3,0.7,0.2
                c0.3-0.1,0.8-0.2,0.8-0.5c0-0.3,0-0.6-0.1-0.8c-0.2-0.2-0.6-0.3-0.8-0.1c-0.3,0.2-0.7,0.4-0.7,0.4S140.4,87.1,140,87z"/>
            <path id="path43_1_" class="st5" d="M136.8,91c-0.1,0-0.2,0.1-0.2,0.3c0,0.1,0.1,0.2,0.2,0.2c0.3,0.2,0.6,0.2,0.7,0.5
                c0.1,0.3,0,0.3,0.4,0.4c0.4,0,0.3,0.2,0.5,0.1s0.3,0,0-0.2c-0.3-0.2-0.4-0.2-0.4-0.5c0-0.3-0.1-0.6-0.2-0.8
                c-0.2-0.2-0.3-0.2-0.5-0.1S137,91,136.8,91z"/>
            <path id="path45_1_" class="st5" d="M144.8,79c-0.3,0-0.3,0.2-0.3,0.4s-0.4,0.5,0.2,0.8c0.4,0.1,0.6,0.5,0.5,0.9
                c0,0.3,0.2,0.6,0.5,0.8c0.4,0.3,0.3,1,0.3,1s0.1,1,0.1,1.2c0,0.2,0,0.4,0.2,0.6c0.2,0.2,1,0.8,1.1,1c0.3,0.2,0.6,0.3,1,0.3
                c0.3,0,2.1-0.3,2.9-0.1c0.7,0.1,1.4,0.3,2,0.7c0.3,0.2,0.5,0.5,0.7,0.8c0.1,0.3,0.3,0.5,0.5,0.8c0.2,0.2,0,0.2-0.1,0.5
                c-0.1,0.2-0.2,0.5,0,0.7c0.1,0.2,0.2,1,0.5,1.1c0.3,0.2,0.6,0.4,0.9,0.6c0.3,0.3,0.7,0.4,1,0.5c0.4,0,0.8,0,1.1,0
                c0,0,1.1,0.3,1.3,0.4c0.7,0.4,1.4,0.8,2,1.3c0.2,0.3,0.4,0.6,0.7,0.9c0.2,0.1,0.8,0,1,0c0.2,0.1,0.8,0,0.8-0.2
                c0-0.3-0.1-0.6-0.2-0.9c0.3,0,0.5-0.1,0.8-0.1c0.3,0,0.9,0,1-0.1s0.6-0.7,0.4-0.9c-0.3-0.2-1-0.8-1-0.8s-0.8-0.1-1-0.3
                c-0.1-0.2-0.2-0.5-0.3-0.8c0,0-0.4-0.5-0.1-0.8c0.3-0.3,0.4-0.5,0.4-0.9c-0.1-0.3-0.1-0.7,0-1c0.1-0.2,0.5-0.7,0.5-0.7
                c0.4-0.2,0.7-0.4,1.1-0.5c0.4,0,0.7,0,1,0.2c0.3,0.2,0.6,0.5,0.8,0.6c0.1,0.1,0.2,0.2,0,0.5c-0.2,0.2-0.3,0.4-0.4,0.5
                c0,0.2,0.1,0.5,0.4,0.5c0.4,0.2,0.7,0.2,1.1,0.2c0.4,0,0.8-0.1,1.2-0.2c0.4-0.1,0.4-0.1,0.6-0.4c0.2-0.2,0.4-0.4,0.3-0.6
                c-0.1-0.2-0.3-0.3-0.5-0.4c-0.3,0-0.7-0.1-1-0.3c-0.4-0.3-0.7-0.7-1-1.1c0-0.1-0.2-0.3,0-0.5c0.1-0.2,0.1-0.5,0-0.6
                c-0.1-0.2-0.3-0.7-0.6-0.7c-0.5,0-0.9,0-1.4,0c-0.3-0.1-0.6-0.1-1-0.1c-0.6,0-0.8,0.1-0.8,0.2s0.3,0.4,0,0.5
                c-0.2,0-0.3,0.2-0.4,0.3c-0.1,0.2-0.3,0.3-0.5,0.3c-0.7-0.1-1.4-0.3-2-0.7c-0.5-0.4-1-0.8-1.2-1c-0.3-0.2-0.5-0.4-0.8-0.5
                c-0.3-0.2-0.3-0.4-0.3-0.7c-0.1-0.3-0.3-0.6-0.5-0.8c-0.1-0.1-0.2-0.2-0.5-0.1c-0.3,0.1-0.4,0.2-0.3,0.4c0.1,0.1,0,0.6-0.2,0.6
                c-0.2,0-0.4,0-0.7,0c-0.1,0-0.3,0.1-0.6,0.1c-0.2,0.1-0.4,0.1-0.7,0c-0.2-0.1-0.4-0.2-0.6-0.3c-0.2,0-0.4-0.1-0.6-0.2
                c-0.2-0.2-0.5-0.4-0.6-0.5c-0.2-0.3-0.3-0.6-0.5-0.9c-0.2-0.3-0.4-0.6-0.7-0.8c-0.2-0.1-0.3-0.6-0.5-0.9c-0.2-0.3-0.2-0.6-0.4-0.7
                c-0.2-0.1-0.4-0.2-0.6-0.3c-0.2,0-0.3,0-0.5-0.1c-0.1-0.1-0.5-0.2-0.5-0.1c0,0.1,0,0.3,0.1,0.4c0.1,0.1,0.3,0.1,0.1,0.4
                c-0.2,0.2-0.4,0.7-0.5,0.7c-0.2,0.1-0.4,0.1-0.6,0c-0.2-0.1-0.5-0.2-0.7-0.2c-0.1,0-0.3,0-0.4,0.1c-0.1,0.1-0.6,0.1-0.8,0
                c-0.2-0.1-0.1,0-0.2-0.1c-0.1-0.2-0.3-0.3-0.5-0.3c-0.2-0.1-0.4-0.1-0.6-0.1c-0.2,0-0.5,0.1-0.6,0.4C145.1,78.9,145.1,79,144.8,79z
                "/>
            <path id="path47_1_" class="st5" d="M163.7,89.2c-0.2,0-0.4,0.1-0.2,0.3c0.1,0.2,0.2,0.4,0.2,0.6c0,0.2,0.1,0.4,0.3,0.5
                c0.1,0.1,0.3,0.2,0.5,0c0.1-0.2,0.1-0.2,0-0.4c-0.1-0.2-0.1-0.4-0.1-0.6c0-0.1-0.1-0.3-0.2-0.3C164.1,89.1,163.9,89.1,163.7,89.2z"
                />
            <path id="path49_1_" class="st5" d="M169.8,89.3c-0.1,0-0.2,0.2-0.2,0.3c0,0,0,0.1,0,0.1c0.1,0.1,0.1,0.3,0.4,0.3
                c0.2-0.1,0.5-0.2,0.7-0.3c0.2-0.1,0.4-0.3,0.3-0.4c-0.1-0.1-0.1-0.3-0.4-0.2C170.4,89.1,169.7,89.3,169.8,89.3
                C169.7,89.3,170,89.3,169.8,89.3z"/>
            <path id="path51_1_" class="st5" d="M152.5,75.1c-0.2,0.1-0.1,0.4-0.1,0.5c0,0.1,0.1,0.3,0.2,0.5c0.1,0.2,0.3,0.3,0.4,0.4
                c0.2,0.1,0.4,0.3,0.6,0.4c0.1,0.1,0.4,0.5,0.6,0.5c0.3,0,0.7,0.1,1,0.2c0.2,0.1,0.4,0.3,0.6,0.3c0.3,0.1,0.4,0.2,0.6,0.3
                s0.3,0,0.4-0.2c0.1-0.2,0.2-0.5,0-0.5s-0.5,0-0.5-0.2c0-0.2-0.1-0.4-0.2-0.5c-0.1-0.1-0.1-0.2,0.1-0.3s0.5,0.2,0.7,0
                c0.4-0.2,0.8-0.4,1.2-0.5c0.3,0,0.5,0.1,0.7-0.1s0.2-0.4,0.5-0.6c0.3-0.2,0.5-0.4,0.3-0.4c-0.5,0.1-1,0.2-1.5,0.2
                c-0.3,0-0.5,0-0.8-0.1c-0.4-0.1-0.6,0.1-0.6,0.2s-0.2,0-0.3-0.2c-0.2-0.3-0.5-0.4-0.9-0.3c-0.2,0.1-0.4,0.2-0.7,0.3
                c-0.2,0-0.3-0.1-0.5-0.1c-0.3-0.1-0.6-0.1-0.9-0.1C153,74.9,152.7,75,152.5,75.1z"/>
            <path id="path53_1_" class="st5" d="M166.9,92.3c-0.1,0-0.2,0.3,0,0.3S167.1,92.2,166.9,92.3z"/>
            <path id="path55_1_" class="st5" d="M179.6,88.5c0,0-0.5,0.9-0.6,1.1c-0.1,0.2-0.1,0.5,0,0.8c0.1,0.2,0,0.5-0.2,0.5
                s-0.6,0.2-0.6,0.4s-0.5,2.2-0.5,2.4c0,0.3,0.1,0.6,0.3,0.9c0.2,0.2,0.3,0.9,0.3,0.9c0.1,0.3,0.2,0.6,0.4,0.8
                c0.2,0.2,0.4,0.5,0.5,0.7l0.4,0.9c0,0,0.7,0.2,0.9,0.4c0.2,0.2,0.4,0.5,0.7,0.7c0,0,0.5-0.2,0.7-0.1c0.2,0.1,0.4,0,0.4-0.5
                c0-0.4,0.1-0.9,0.2-1.3c0.3-0.4,0.6-0.7,1-1c0.2-0.1,0.2-0.1,0.6-0.1s0-0.2,0.2-0.5c0.2-0.3,0.2-0.5,0.7-0.3s0.7-0.1,0.6-0.3
                c-0.1-0.2-0.2-0.4-0.3-0.5c-0.3-0.1-0.5-0.2-0.7-0.4c-0.2-0.3-1-2.5-1.1-2.7s-0.4-0.7-0.7-0.9s-0.5-0.4-0.9-0.7s-0.8-0.7-1.2-0.9
                C180.2,88.5,179.9,88.4,179.6,88.5z"/>
            <path id="path57_1_" class="st5" d="M187.7,84.7c-0.2,0.2,0,0.6,0,0.6s0.5,0.6,0.5,0.9c0,0.4,0.2,0.7,0.5,1
                c0.3,0.2,0.2,0.5,0.8,0.5c0.6,0,0.8,0.2,0.8,0.4s-0.1,0.7,0.5,0.6c0.4,0,0.7-0.2,1-0.5c0.2-0.2,0.3-0.6,0.2-0.8s-0.5-0.2-0.5-0.7
                c0-0.4,0.1-0.5-0.2-0.7c-0.2-0.2-0.4-0.4-0.5-0.7l-0.1-0.4c0,0-0.2-0.5-0.5-0.5c-0.2,0-0.4-0.1-0.6-0.2l-0.3-0.5c0,0,0-0.2-0.3-0.2
                s-0.8,0-0.8,0s-0.3,0.2-0.3,0.4C187.7,84.3,187.9,84.5,187.7,84.7z"/>
            <path id="path59_1_" class="st5" d="M187.1,82.9c0,0.2,0.6-0.2,0.6-0.4S187.1,82.7,187.1,82.9z"/>
            <path id="path61_1_" class="st5" d="M199.9,88c0,0-0.3,0.5-0.4,0.7c-0.1,0.2-0.1,0.5,0,0.8c0.1,0.3,0.1,0.6,0.1,0.8
                c0.1,0.4,0.2,0.8,0.3,1.1c0.1,0.3,0.4,0.4,0.6,0.3c0.2-0.1,0.2-0.2,0-0.5c-0.2-0.3-0.2-0.3,0-0.7c0.2-0.3,0.3-0.5,0.4-0.8
                c0.1-0.3,0.1-0.6,0.1-1c0-0.2-0.1-0.5-0.2-0.7c-0.1-0.2-0.3-0.3-0.5-0.3C200.2,87.7,199.9,88,199.9,88z"/>
            <path id="path63_1_" class="st5" d="M184.4,76c-0.2,0.1-0.2,0.4-0.1,0.5c0,0,0.1,0.1,0.1,0.1c0.3,0.3,0.6,0.7,0.9,1
                c0.2,0.1,0.5,0.2,0.6,0.3c0.2,0.1,0.4-0.1,0.3-0.2c-0.1-0.2-0.2-0.2-0.1-0.5c0-0.2-0.1-0.4-0.3-0.4c-0.2,0-0.5-0.1-0.7-0.2
                l-0.3-0.4C184.8,76.2,184.6,75.9,184.4,76z"/>
            <path id="path65_1_" class="st5" d="M187.9,76c-0.2,0-0.4,0.1-0.4,0.4c0,0,0,0,0,0.1c0,0.2,0.1,0.9,0.1,0.9
                c0.1,0.2,0.3,0.4,0.5,0.6c0.3,0.3,0.4,0.6,0.5,1c0,0.2,0.6,0.5,0.8,0.3c0.2-0.2,0.2-0.5,0-0.7c0,0,0,0,0,0
                c-0.2-0.1-0.7-0.4-0.5-0.7c0.1-0.1,0.2-0.3,0.3-0.5c0,0-0.2-0.6-0.4-0.8c-0.1-0.2-0.2-0.5-0.5-0.6S188.1,76,187.9,76z"/>
            <path id="path67_1_" class="st5" d="M112.4,122.1c-0.2,0.1-0.3,0.3-0.1,0.5c0.1,0.1,0.3,0.1,0.5,0c-0.1-0.1-0.1-0.3,0-0.4
                C112.8,122,112.6,121.9,112.4,122.1z"/>
            </g>
            <g id="island-names">
            <text transform="matrix(1 0 0 1 74.5968 178.8934)" class="st6 st7 st3">MAHE</text>
            <text transform="matrix(1 0 0 1 107.922 149.8533)" class="st6 st2 st8">St. Anne</text>
            <text transform="matrix(1 0 0 1 107.922 157.9466)" class="st6 st2 st8">Cerf</text>
            <text transform="matrix(1 0 0 1 38.4156 163.659)" class="st6 st2 st8">Cenception</text>
            <text transform="matrix(1 0 0 1 59.8385 169.3719)" class="st6 st2 st8">Thérese</text>
            <text transform="matrix(1 0 0 1 117.9191 166.0398)" class="st6 st2 st8">Anonyme</text>
            <text transform="matrix(1 0 0 1 162.67 78.9187)" class="st6 st2 st8">Praslin</text>
            <text transform="matrix(1 0 0 1 186.9498 99.3895)" class="st6 st2 st8">La Digue</text>
            <text transform="matrix(1 0 0 1 146.0074 61.304)" class="st6 st2 st8">Aride</text>
            <text transform="matrix(1 0 0 1 153.6246 70.8255)" class="st6 st2 st8">Curieuse</text>
            <text transform="matrix(1 0 0 1 192.1866 78.9187)" class="st6 st2 st8">Grand Soeur</text>
            <text transform="matrix(1 0 0 1 184.5695 72.2537)" class="st6 st2 st8">Petite Soeur</text>
            <text transform="matrix(1 0 0 1 193.6144 87.0115)" class="st6 st2 st8">Felicite</text>
            <text transform="matrix(1 0 0 1 204.088 92.7244)" class="st6 st2 st8">Marianne</text>
            <text transform="matrix(1 0 0 1 117.4435 87.0115)" class="st6 st2 st8">Cousin</text>
            <text transform="matrix(1 0 0 1 111.2545 95.1053)" class="st6 st2 st8">Cousine</text>
            <text transform="matrix(1 0 0 1 51.2696 124.1453)" class="st6 st2 st8">Silhouette</text>
            <text transform="matrix(1 0 0 1 51.2696 102.2459)" class="st6 st2 st8">North</text>
            <text transform="matrix(1 0 0 1 146.0074 140.3318)" class="st6 st2 st8">Ile Aux Recifs</text>
            <text transform="matrix(1 0 0 1 189.3302 157.9466)" class="st6 st2 st8">L’ilot</text>
            <text transform="matrix(1 0 0 1 117.4435 123.6692)" class="st6 st2 st8">Mamelles</text>
            </g>
            </svg>
             <div class="scroll-bottom">
                 <span class="scroll-bottom__trigger at-top"></span>
             </div>
        </div>
    </div>
    <div class="scroll-components__spacer"></div>
    <div class="lower-section">
        <?php get_template_part('template-parts/detail-map');?>
    </div>
</div>
<div class="scroll-bottom__target"></div>

<?php get_footer();?>