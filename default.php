<style>

    @import "compass/css3";

    $spriteWidth: 132px;
    $spriteHeight: 132px;
    $wellBackground: #f3f3f3;
    $textColor: #595959;

    .container {
    padding-bottom: 40px; 
    }


    /* Code that would be generated by using Compass Sprite generators, but for this pen - since we don't have local image access, here is the output.. */
    .medium-sprite, 
    .browsers .browser .browser-logo {
    background: url('https://alademann.github.io/assets/img/browser-icons-medium.png') no-repeat;
    } 

    .browsers {
    margin-top: 50px;

    /* Global browser logo styles */
    .browser {
        position: relative;
        display: block !important;
        height: 200px;
        padding: 0; /* so the <a> hitarea is full width */
        
        @include transition(opacity .2s ease 0s);
        
        > a {
        display: block;
        width: 100%;
        height: 100%;
        color: $textColor;
        @include border-radius(5px);
        
        &:hover,
        &:focus {
            &, .supported-version {
            @include transition(all .2s ease 0s);
            color: darken($textColor, 20%);
            }
            outline: 0 !important;
            @include box-shadow(none !important);
            background-color: darken(#f3f3f3, 5%);
        }
        }
        
        span { display: block; }
        
        .browser-logo, 
        .browser-meta {
        position: absolute;
        width: $spriteWidth;
        left: 50%;
        margin-left: -($spriteWidth / 2);
        }

        .browser-logo { height: $spriteHeight; }
    } 

    /* Individual browser logo positions */  
    .chrome  .browser-logo { background-position: -5px -394px; }
    .firefox .browser-logo { background-position: -5px 0; }
    .safari  .browser-logo { background-position: -2px -132px; }
    .msie    .browser-logo { background-position: 0 -264px; }


    h2 { 
        margin: 0 0 10px 0; 
        padding: 0; 
        cursor: default;
    }
    ul, 
    li { margin: 0; }
    
    /* Browser Groups */
    .well {
        
        padding-top: 10px;
        @include border-radius(0);
        &:first-child { @include border-left-radius(5px); }
        &:last-child { @include border-right-radius(5px); }
        
        &.browsers-good {
            $bestBg: darken(#f3f3f3, 2%);
            background-color: $bestBg;
            
            .browser {
            &:hover,
            &:focus {
                background-color: darken($bestBg, 5%);
                }
            }
        }
        &.browsers-best {
            $goodBg: lighten(#f3f3f3, 2%);
            background-color: $goodBg;
            
            .browser {
            &:hover,
            &:focus {
                background-color: darken($goodBg, 5%);
                }
            }
        }
    }
    
    .browser-meta { bottom: 10px; }
    
    .browser-name {  
        font-weight: bold;
        font-size: 16px;
        line-height: 26px;
    }
    
    .supported-version {
        color: lighten($textColor, 5%);
        font-weight: bold;
        font-size: 15px;
        em {
        font-weight: normal;
        font-style: normal;
        }
    }
    
    /* special group hover effects */
    &.hovered {
        
        .well { 
        opacity: .5; 
        &.hovered { opacity: 1; }
        }
    
    }
    
    } /* END .browsers */

    hr { margin: 40px 0; }
    h1 { margin-top: 60px; }



</style>


<div class="container text-center">
    <h1> Unsupported Browser!</h1>
    <p class="lead">You are using a browser that we do not support. <br />Please use one of these supported browsers:</p>
    <ul class="browsers row list-unstyled">
        <li class="col-xs-3 browsers-best well">
            <h2>Safari</h2>
            <span class="row list-unstyled">
            <span class="col-xs-12 browser chrome">
            <a href="https://www.apple.com/safari/" target="_blank">
            <span class="browser-logo">&nbsp;</span>
            <span class="browser-meta">
            <span class="browser-name">Safari</span> 
            <span class="supported-version"><em>version</em> 5+</span>
            </span>
            </a>
            </span>
            </span>
        </li>
        <li class="col-xs-6 browsers-better well">
            <h2>Firefox</h2>
            <span class="row">
            <span class="col-xs-6 browser firefox">
            <a href="https://www.mozilla.org/firefox" target="_blank">
            <span class="browser-logo">&nbsp;</span>
            <span class="browser-meta">
            <span class="browser-name">Firefox</span> 
            <span class="supported-version"><em>version</em> 4+</span>
            </span>
            </a>
            </span>
            
            </a>
            </span>
            </span>
        </li>
        <li class="col-xs-3 browsers-good well">
            <h2>Edge</h2>
            <span class="row list-unstyled">
            <span class="col-xs-12 browser msie">
            <a href="https://windows.microsoft.com/en-us/internet-explorer/download-ie" target="_blank">
            <span class="browser-logo">&nbsp;</span>
            <span class="browser-meta">
            <span class="browser-name">Microsoft Edge</span>
            <span class="supported-version"><em>version</em> 9+</span>
            </span>
            </a>
            </span>
            </span>
        </li>
    </ul>

    
    <?=$_SERVER['HTTP_USER_AGENT']?>
    
</div>