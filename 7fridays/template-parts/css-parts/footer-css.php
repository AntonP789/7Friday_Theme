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









