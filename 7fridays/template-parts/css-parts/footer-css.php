<style>
/*templates-parts/css-parts/footer-css.php*/
/*Moduls*/
/* image for wysiwyg */    
.alignleft {
	float: left;
	margin: 7px 28px 28px 0;
    height: auto!important;
}
.alignright {
	float: right;
	margin: 7px 0 28px 28px;
    height: auto!important;
}
.aligncenter {
	clear: both;
	display: block;
	margin: 7px auto;
    height: auto!important;
}
/* end image for wysiwyg */    
/*on a hover image*/
.onAhover{
    position: relative;
    cursor: pointer;
}
.onAhover img{
    transition: opacity 0.3s;
}
.onAhover img:nth-child(2){
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
}
.onAhover:hover img:nth-child(2){
    opacity: 1;
}
.onAhover:hover img:first-child{
    opacity: 0;
}
/*positioned*/
.positioned{
    position: absolute;
    width: 100%;
    left: 0;
}
.positioned.centered{
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);    
}

/*General slick slider full-width version*//*General slick slider full-width version*/
.slick-slider{
    position: relative;
    display: block;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}
.slick-list{
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0!important;
}
.slick-slide, .slick-slide *{ outline: none !important; }
.slick-current{
    position: relative;
    z-index: 2;
}
.slick-list.dragging{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list{
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    height: 100%;
}

.slick-track{
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slick-track:before,
.slick-track:after{
    display: table;
    content: '';
}
.slick-track:after{
    clear: both;
}
.slick-loading .slick-track{
    visibility: hidden;
}

.slick-slide{
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
    position: relative;
}
[dir='rtl'] .slick-slide{
    float: right;
}
.slick-slide img{
    display: block;
    max-width: none;
    width: 100%;
}
.slick-slide.slick-loading img{
    display: none;
}
.slick-slide.dragging img{
    pointer-events: none;
}
.slick-initialized .slick-slide{
    display: block;
}
.slick-loading .slick-slide{
    visibility: hidden;
}
.slick-vertical .slick-slide{
    display: block;
    height: auto;
    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}
.slick-slide {
    margin: 0px;
}
.slick-prev,
.slick-next {
    width: 64px;
    height: 130px;
    display: block;
    border: none!important;
    background: none;
    position: absolute;
    top: calc(50% - 20px);
    z-index: 10;
}
.slick-arrow img{
    opacity: 0.45;
    transition: all 0.4s;
}
.slick-arrow:hover img{
    opacity: 1;
}
.slick-next{
    right: 10px;
}
.slick-prev{
    left: 10px;
}
.slick-list, .slick-track, .slick-slide{
    height: 100%;
}
.slick-dots{
    padding: 0;
    text-align: center;
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
}
.slick-dots li{
    display: inline-block;
    width: 10px!important;
    height: 10px!important;
    border-radius: 100%;
    overflow: hidden;
    background: #fff;
}
.slick-dots li:hover, .slick-dots li.slick-active{
    background: var(--main_color);
}
.slick-dots li button{
    height: 100%;
    width: 100%;
    display: block!important;
    -moz-appearance: none;
    -webkit-appearance: none;
    padding: 0!important;
    box-shadow: none;
    border-radius: 0;
    background: none;
    border: none!important;
}
.slick-dots li:not(:last-child){
    margin-right: 5px;
}
/*End General slick slider*//*End General slick slider*/
.imaged{
    overflow: hidden;
}
.imaged img{
    height: 100%;
    width: 100%;
    object-fit: cover;
}
/*Footer Customization*/
</style>









