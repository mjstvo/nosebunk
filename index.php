<?php
/**********************
 * Created by PhpStorm.
 * User: mattstevenson
 * Date: 14/02/2017
 * Time: 8:42 PM
 * Latest Version: 0.0
 * Bug Listings: txt.
 *********************/

include('html/header.html');

?>

<!-- As a link -->
<nav class="navbar navbar-light bg-faded">
    <a class="navbar-brand" href="#">
        <img src="img/mexicana.png" id="mexicana"/>
    </a>
</nav>

<div class="container-fluid" id="section1">
        <div class="col-xs-12">
            <h1>mexicanajones.com</h1>
            <div class="col-xs-12">
            <p>coming soon...</p>
            </div>
            <ul class="list-inline">
                <li>
                    <a href="http://twitter.com/mexicanajones" id="twitter">
                        <span class="icon fa fa-twitter" aria-hidden="true">
                        </span>
                    </a>
                </li>
            </ul>
            </div>
        </div>
    </div>
</div>



<style>

    h1 {
        font-family: 'Helvetica Neue', cursive;
        font-size: 3em;
        line-height: 1;
        margin: 20px;
    }

    a {
        color: #1a1a1a;
    @include transition(all 0.3s ease-in-out);
        text-decoration: none;
        position: relative;
        text-shadow: -2px 3px 0 #ff00ff, 4px 1px 0 #00ffff, -4px -3px 0 #ffff00;


    &:hover {
     @include animation(link-hover 1s infinite);
     }
    }

    section {
        position: absolute;
        top: 50%;
        left: 50%;
    @include transform(translate(-50%, -50%));

    &:hover {
     @include animation(pulse 0.3s infinite);
     }
    }

    h1 {
        text-shadow: -2px 3px 0 #ff00ff, 4px 1px 0 #00ffff, -4px -3px 0 #ffff00;
    }
</style>