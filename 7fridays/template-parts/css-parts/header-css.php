<style>
/*Start Settings*/
:root {
    --main_color: #fff;
    --second_color: #1C1C22;
    --hover_color: #000;
    --second_hover_color: #fff;
    --title_color: #424242;
    --text_color: #aaa;
    --font: 'Open Sans';
}
body{
    font: 400 14px/1.8 var(--font);
    color: var(--text_color);
    margin: 0;
}
.container{
    width: 100%;
    padding: 0 15px;
    margin: 0 auto;
    max-width: 1200px;
}
h1 {
    font: 600 72px var(--font);
    color: var(--title_color);
}
h2 {
    font: 400 50px var(--font);
    color: var(--title_color);
}
h3 {
    font: 400 38px var(--font);
    color: var(--title_color);
}
h4 {
    font: 400 28px var(--font);
    color: var(--title_color);
    font-weight: 700;
}
h5 {
    font: 400 24px var(--font);
    color: var(--title_color);
}
h6 {
    font: 400 18px var(--font);
    color: var(--title_color);
}
.button_basic{
    display: inline-block;
    padding: 10px 18px;
    font: 16px sans-serif;
    background-color: var(--main_color);
    color: #fff;
    border-radius: 60px;
}
input.form-control::-moz-placeholder, 
textarea::-moz-placeholder{
    color: #7D7D7D;
    opacity: 1!important;
}
input.form-control::-webkit-input-placeholder, 
textarea::-webkit-input-placeholder{
    color: #7D7D7D;
}
a, 
a:hover, 
a:focus{
    text-decoration: none;
}
ul, 
ol{
    list-style-position: inside;
}
header ul,
header ol,
footer ul, 
footer ol{
    padding: 0;
    margin: 0;
}
header ul,
footer ul{
    list-style: none;
}
/*End Start Settings*/

/*Standart Settings*/
*, 
:after, 
:before{
    box-sizing: border-box;
}
body > .content{
    min-height: 650px;
    width: 100%;
    clear: both;
}
.customClear:before, 
.customClear:after{
    content:"";
    display:block;
    height:0;
    overflow:hidden;    
    clear:both;
}
a, 
button, 
input[type="submit"], 
a img{
    transition:all 0.3s linear;
}
input:not([type="checkbox"]), 
select{
    -moz-appearance: none;
    -webkit-appearance: none;    
}
iframe, 
img{
    max-width: 100%;
}
img{
    vertical-align: middle;
}
a img{
    border: none;
}
input, 
textarea, 
select{
    border-radius: 0;
    border: none;
    box-shadow: none;
}
.caret {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 2px;
    vertical-align: middle;
    border-top: 4px solid;
    border-right: 4px solid transparent;
    border-left: 4px solid transparent;
}
.logo:hover img{
    opacity: 0.7;
}
/*End Standart Settings*/

/* Header Styles */
header{
    position: relative;
    width: 100%;
    z-index: 999;
    background: #fff;
}
header .container{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 20px;
    padding-bottom: 20px;
}
header nav li{
    position: relative;
}
header nav li a{
    white-space: nowrap;
    padding: 10px 15px;
    color: #333;
    display: block;
    text-decoration: none!important;
    font-size: 16px;
    position: relative;  
}
header nav li a:hover{
    color: #7383BF;
}
header nav .menu-header-menu-container > ul > li{
    display: inline-block;
}
header nav .menu-header-menu-container > ul > li > a{
    text-transform: uppercase;
}
header nav .menu-item-has-children .sub-menu{
    position: absolute;
    top: 100%;
    display: none;
    min-width: 100%;
    left: 0;
    padding-top: 0px;
}
header nav .menu-item-has-children .sub-menu li{
    width: auto;
    min-width: 100%;
}
header nav .menu-item-has-children .sub-menu li a{
    padding: 10px 15px;
    display: block;
    text-align: left;
    background: #556080;
    color: #C2CEEA;
    margin-top: 0;
}
header nav .menu-item-has-children .sub-menu li a:hover{
    color: #fff;
}
header nav .menu-item-has-children .sub-menu .sub-menu{
    top: 0;
    left: 100%;
}
header nav .menu-item-has-children .sub-menu .caret{
    margin-left: 4px;
}
.openMenu{
    display: block!important;
}
/*sticky header*/
.fixing{
    top: -70px;
    transition: top 0.3s
}
.fixing.activated{
    position: fixed;
    width: 100%;
    left: 0;
    background: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,.16)
}
.fixing.activated .container{
    padding-top: 10px;
    padding-bottom: 10px;
}
/*end sticky header*/
/*mobile menu*/
.mobileMenu{
    display: none;
    cursor: pointer;
    height: 38px;
    padding: 10px 12px;
    margin-left: 15px;
    width: 50px;
}
.iconAnime{
    position: relative;
    height: 100%;
    width: 100%;
}
.iconAnime span{
    height: 3px;
    width: 100%;
    border-radius: 3px;
    background: #7383BF;
    position: absolute;
    left: 0;
}
.iconAnime span:first-child{
    top: 0;
    transition: all 0.25s;
}
.iconAnime span:nth-child(2){
    top: calc(50% - 2px);
    transition: all 0.25s;
}
.iconAnime span:last-child{
    bottom: 0;
    transition: all 0.25s;
}
.mobileMenuOpen .iconAnime span:first-child{
    top: calc(50% - 2px);
    transform: rotate(225deg);
}
.mobileMenuOpen .iconAnime span:nth-child(2){
    top: calc(50% - 2px);
    display:none;
}
.mobileMenuOpen .iconAnime span:last-child{
    top: 7px;
    transform: rotate(135deg);
}
.menu-item-has-children .thereCaret.active img{
    transform: rotate(90deg);
}
.menu-item-has-children .thereCaret{
    padding: 0px 10px;
    position: absolute;
    top: 10px;
    right: 20px;
    cursor: pointer;
    display: block;
    z-index: 2;
}
.thereCaret img{
    height: 25px;
    transition: 0.3s;
    display: block;
}
/*end mobile menu*/
/*End Header Styles*/

/*Responsivness*//*Responsivness*//*Responsivness*/
@media(min-width:1025px){
    .menu-item-has-children ul li a:hover{
        background: #7383BF!important;
        color: #fff!important;
    }
}

@media(max-width:1024px){  
    header nav {
        padding: 0;
        margin-top: 0;
        background: #7383BF;        
        overflow: auto;
    }
    header nav li{
        display: block!important;
        text-align: left;
    }
    header nav li a {
        padding: 10px 15px;
        margin-top: 0;
        color: #fff!important;
        background: none!important;
        display: block;
    }
    header nav li a:after {
        display: none;
    }
    .mobileMenu{
        display: block;
    }
    .fixing nav{
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
    }  
    .menu-item-has-children ul li a{
        padding: 5px 15px;
    }
    .header-nav .menu-header-menu-container > ul > li{
        margin-right: 0!important;
    }
    .header-nav .menu-header-menu-container > ul > li > a{
        text-transform: uppercase;
        padding: 10px 15px!important;
    }
    .sub-menu{
        padding-left: 20px!important;
        text-transform: uppercase;
    }
    .sub-menu, 
    .sub-menu .sub-menu{
        position: static!important;
    }    
}

@media(max-width:600px){
    .fixing.activated{
        top:0!important;
    }
}
</style>
