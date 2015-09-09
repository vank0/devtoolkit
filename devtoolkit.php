<style>
    .devtoolkit {
        display: none;
    }
    
    .devtools *:hover {
        outline: 2px dotted red;
    }
    
    .devtools * *:hover {
        outline: 2px dotted green;
    }
    
    .devtools * * *:hover {
        outline: 2px dotted orange;
    }
    
    .devtools * * * *:hover {
        outline: 2px dotted blue;
    }
    
    .devtools * * * * *:hover {
        outline: 1px solid red;
    }
    
    .devtools * * * * * *:hover {
        outline: 1px solid green;
    }
    
    .devtools * * * * * * *:hover {
        outline: 1px solid orange;
    }
    
    .devtools * * * * * * * *:hover {
        outline: 1px solid blue;
    }
    
    .spotlight {
        outline: 9999px solid rgba(0, 0, 0, 0.5) !important;
        z-index: 99999999;
    }
    
    .devtools .devtoolkit {
        display: block;
    }
    
    .loverlay {
        display: none;
    }
    
    @media (min-width: 47em) {
        .loverlay {
            display: none;
            left: 50%;
            margin-left: -1000px;
            cursor: move;
            max-width: none;
            opacity: 0.5;
            z-index: 999998;
            position: absolute;
            top: 0px;
            width: auto;
            transition: opacity 0.3s ease-in-out;
        }
    }
    
    .visualgrid {
        display: none;
    }
    
    @media (min-width: 47em) {
        .visualgrid {
            display: none;
            max-width: none;
            opacity: 0.25;
            z-index: 999997;
            pointer-events: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: opacity 0.3s ease-in-out;
        }
        .visualgrid .row {
            height: 100%;
        }
        .visualgrid .row .col {
            height: 100%;
            background: red;
        }
        .visualgrid .row .col .colcontent {
            height: 100%;
            background: blue;
        }
    }
    
    .devtoolkit ul.brakes {
        position: fixed;
        display: block;
        z-index: 999999;
        top: 5.7142857143rem;
        left: 0px;
    }
    
    .devtoolkit ul.brakes li {
        background: #df35ac;
        color: #fff;
        opacity: 0.5;
        display: none;
        cursor: pointer;
        font-size: 1.1428571429rem;
        height: 1.8571428571rem;
        line-height: 1.1428571429rem;
        padding: 5px 10px;
        position: relative;
        left: -100%;
        transition: 0.3s all ease-in-out;
    }
    
    .devtoolkit ul.brakes li.breakpoint {
        left: 0;
    }
    
    .devtoolkit ul.brakes li:hover {
        left: 0;
        opacity: 1;
    }
    
    .devtoolkit ul.brakes li:before {
        display: block;
        content: '';
        top: 0;
        right: -1.5rem;
        position: absolute;
        width: 0px;
        height: 0px;
        border-style: solid;
        border-width: 13px 0 13px 13px;
        border-color: transparent transparent transparent #df35ac;
    }
    
    .devtoolkit ul.brakes li.mainpage,
    .devtoolkit ul.brakes li.subpage,
    .devtoolkit ul.brakes li.grid,
    .devtoolkit ul.brakes li.colors {
        display: block;
    }
    
    .devtoolkit ul.brakes li.colors span {
        display: block;
        height: 1rem;
        width: 1rem;
        float: left;
        margin-left: 3px;
        border-radius: 50%;
        box-shadow: 0 0 3px black;
    }
    
    .devtoolkit ul.brakes li.colors span.primary {
        background: #df35ac;
    }
    
    .devtoolkit ul.brakes li.colors span.secondary {
        background: #98b208;
    }
    
    .devtoolkit ul.brakes li.colors span.light {
        background: #fff;
    }
    
    .devtoolkit ul.brakes li.colors span.medium {
        background: #d9d9d9;
    }
    
    .devtoolkit ul.brakes li.colors span.dark {
        background: #6a6a6a;
    }
    
    .devtoolkit ul.brakes li.colors span.alert {
        background: #fc2f38;
    }
    
    @media (min-width: 28.5em) {
        .devtoolkit ul.brakes li.tiny {
            display: block;
        }
    }
    
    @media (min-width: 40em) {
        .devtoolkit ul.brakes li.tiny {
            display: none;
        }
    }
    
    @media (min-width: 40em) {
        .devtoolkit ul.brakes li.small {
            display: block;
        }
    }
    
    @media (min-width: 47em) {
        .devtoolkit ul.brakes li.small {
            display: none;
        }
    }
    
    @media (min-width: 47em) {
        .devtoolkit ul.brakes li.medium {
            display: block;
        }
    }
    
    @media (min-width: 62em) {
        .devtoolkit ul.brakes li.medium {
            display: none;
        }
    }
    
    @media (min-width: 62em) {
        .devtoolkit ul.brakes li.large {
            display: block;
        }
    }
    
    @media (min-width: 73em) {
        .devtoolkit ul.brakes li.large {
            display: none;
        }
    }
    
    @media (min-width: 73em) {
        .devtoolkit ul.brakes li.giant {
            display: block;
        }
    }

</style>
<div class="devtoolkit">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <ul class="brakes">
        <li class="brakepoint tiny">Tiny (456px)</li>
        <li class="brakepoint small">Small (640px)</li>
        <li class="brakepoint medium">Medium (752px)</li>
        <li class="brakepoint large">Large (992px)</li>
        <li class="brakepoint giant">Giant (1168px)</li>
        <li class="mainpage">Main layout</li>
        <li class="subpage">Subpage layout</li>
        <li class="grid">Visual grid</li>
        <li class="colors">
            <span class="color primary" title="primary"></span>
            <span class="color secondary" title="secondary"></span>
            <span class="color light" title="light"></span>
            <span class="color medium" title="medium"></span>
            <span class="color dark" title="dark"></span>
            <span class="color alert" title="alert"></span>
        </li>
    </ul>
    <img class="loverlay main-layout" src="<?php echo SITE_ROOT; ?>/layout/images/layout1.jpg" alt="Layout overlay" />
    <img class="loverlay sub-layout" src="<?php echo SITE_ROOT; ?>/layout/images/layout2.jpg" alt="Layout overlay" />
    <div class="visualgrid">
        <div class="row">
            <div class="col medium-1">
                <div class="colcontent">1</div>
            </div>
            <div class="col medium-1">
                <div class="colcontent">2</div>
            </div>
            <div class="col medium-1">
                <div class="colcontent">3</div>
            </div>
            <div class="col medium-1">
                <div class="colcontent">4</div>
            </div>
            <div class="col medium-1">
                <div class="colcontent">5</div>
            </div>
            <div class="col medium-1">
                <div class="colcontent">6</div>
            </div>
            <div class="col medium-1">
                <div class="colcontent">7</div>
            </div>
            <div class="col medium-1">
                <div class="colcontent">8</div>
            </div>
            <div class="col medium-1">
                <div class="colcontent">9</div>
            </div>
            <div class="col medium-1">
                <div class="colcontent">10</div>
            </div>
            <div class="col medium-1">
                <div class="colcontent">11</div>
            </div>
            <div class="col medium-1">
                <div class="colcontent">12</div>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $(document).keydown(function(e) {
                //CTRL + V keydown combo
                if (e.ctrlKey && e.keyCode == 123) {
                    console.log("Alt+F12: Activate Devtools");
                    $("body").toggleClass('devtools');
                }
            })
            $(".loverlay").draggable();
            $(".brakes .mainpage").click(function() {
                $(".main-layout").toggle("slow", function() {
                    // Animation complete.
                });
            });
            $(".brakes .subpage").click(function() {
                $(".sub-layout").toggle("slow", function() {
                    // Animation complete.
                });
            });
            $(".brakes .grid").click(function() {
                $(".visualgrid").toggle("slow", function() {
                    // Animation complete.
                });
            });
        });

    </script>
</div>
