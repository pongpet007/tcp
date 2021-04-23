<style type="text/css">
	section {
		padding: 30px 0;
	}
	
	.navbar-light .navbar-toggler {
		background-color: #FFF;
	}

	.nav-1:after ,.nav-2:after ,.nav-3:after ,.nav-4:after ,.nav-5:after ,.nav-6:after {
		content: '';
		height: 60%;
		width: 2px;
		position:  absolute;
		right: 0;
		top: 10px;
		background-color: #808080;
	}

	.i-drop-menu {
		font-size: 15px;
	}
	.dropdown-full {
		background-color: #6c757d00;
		border-color: #6c757d00;
		font-size: 18px;
		padding: 0;
	}
	.dropdown-full:hover {
		background-color: #6c757d00;
		border-color: #6c757d00;
	}
	.dropdown-toggle::after {
		visibility: hidden;
	}
	.show>.btn-secondary.dropdown-toggle {
		color: #fff;
		background-color: #6c757d00; 
		border-color: #6c757d00; 
	}
	.dropdown-toggle::after {
		margin : 0;
	}
	.drop-lang {
		padding: 0;
		min-width: 2rem;
		background-color: #EEE;

	}
	.drop-lang a {
		font-size: 18px;
		padding: .25rem 3.5rem;
	}
	.ul-header-home {
		float: right;
	}


	/* Menu bar mobile*/
	div.screen{
		width:320px;
		height:60px;   
		overflow:hidden;
		position:fixed; 
		top: 0; 
		z-index: 9999;
		/*left:50%;
		margin-left:-160px;*/
		/*background:#31558a;*/
	}

	.list { 
		margin-top:36px;
		text-align:left;
	}


	div.burger {
		height: 40px; 
		width: 40px;
		position: absolute;
		top: 0; 
		left: 21px;
		cursor: pointer;    
	}
	div.x,
	div.y,
	div.z {
		position: absolute; margin: auto;
		top: 0px; bottom: 0px;      
		background: #ffc107;
		border-radius:2px;
		-webkit-transition: all 200ms ease-out;
		-moz-transition: all 200ms ease-out;
		-ms-transition: all 200ms ease-out;
		-o-transition: all 200ms ease-out;
		transition: all 200ms ease-out;
	}       
	div.x, div.y, div.z { 
		height: 3px; 
		width: 26px; 
	}
	div.y {top: 18px;
	}
	div.z {
		top: 37px;
	}
	div.collapse{
		top: 20px;
		/*background:#4a89dc;*/
		-webkit-transition: all 70ms ease-out;
		-moz-transition: all 70ms ease-out;
		-ms-transition: all 70ms ease-out;
		-o-transition: all 70ms ease-out;
		transition: all 70ms ease-out;
	}
	div.rotate30 {
		-ms-transform: rotate(30deg); 
		-webkit-transform: rotate(30deg); 
		transform: rotate(30deg);   
		-webkit-transition: all 50ms ease-out;
		-moz-transition: all 50ms ease-out;
		-ms-transition: all 50ms ease-out;
		-o-transition: all 50ms ease-out;
		transition: all 50ms ease-out;                  
	}
	div.rotate150{
		-ms-transform: rotate(150deg); 
		-webkit-transform: rotate(150deg); 
		transform: rotate(150deg);  
		-webkit-transition: all 50ms ease-out;
		-moz-transition: all 50ms ease-out;
		-ms-transition: all 50ms ease-out;
		-o-transition: all 50ms ease-out;
		transition: all 50ms ease-out;                  
	}

	div.rotate45{
		-ms-transform: rotate(45deg); 
		-webkit-transform: rotate(45deg); 
		transform: rotate(45deg);   
		-webkit-transition: all 100ms ease-out;
		-moz-transition: all 100ms ease-out;
		-ms-transition: all 100ms ease-out;
		-o-transition: all 100ms ease-out;
		transition: all 100ms ease-out;                 
	}
	div.rotate135{
		top: 0px;
		-ms-transform: rotate(135deg); 
		-webkit-transform: rotate(135deg); 
		transform: rotate(135deg);  
		-webkit-transition: all 100ms ease-out;
		-moz-transition: all 100ms ease-out;
		-ms-transition: all 100ms ease-out;
		-o-transition: all 100ms ease-out;
		transition: all 100ms ease-out;                 
	}

	div.navbar {
		height:73px;
		/*background:#385e97;*/
	}

	div.circle{ 
		border-radius: 50%;
		width: 0px;
		height: 0px; 
		position:absolute;
		top: 35px;
		left: 36px;
		background : #FFF;
		opacity:1;
		-webkit-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-moz-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-ms-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-o-transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		transition: all 300ms cubic-bezier(0.000, 0.995, 0.990, 1.000); 
	}
	div.circle.expand{
		width:1200px;
		height: 1250px;
		top: -560px;
		left: -565px;   
		-webkit-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-moz-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-ms-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-o-transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		transition: all 400ms cubic-bezier(0.000, 0.995, 0.990, 1.000);                 

	}
	div.menu {
		height: 568px; 
		width: 320px;
		position: fixed;
		visibility: hidden;
		top: 0px; 
		left: 0px;
		/*z-index: 99999;*/
	}
	div.menu ul li {
		list-style: none;
		position : relative;
		top:50px;;
		left:0;
		opacity:0;
		padding-left: 10px;
		/*width:320px;*/
		/*text-align:left;*/
		font-size:0px;
		-webkit-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-moz-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-ms-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-o-transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		transition: all 70ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
	}
	div.menu ul li a {
		color : #FFF;
		text-transform:uppercase;
		text-decoration:none;   
		letter-spacing:.5px;         
	}

	div.menu li.animate{
		font-size:24px;
		opacity:1;
		-webkit-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-moz-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-ms-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		-o-transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		transition: all 150ms cubic-bezier(0.000, 0.995, 0.990, 1.000);
		line-height: 45px;
	}
	div.menu ul {
		display: inline-block;
		position: relative;
		padding-left: 0;
	}
	span.span-menu-mobile {
		letter-spacing: .5px;
		color: #a8afb7;
		padding-left: 5px;
		font-size: 15px;
	}
	.lang-mobile a{
		color: #333 !important;
		font-size: 20px;
	}
	.circle-logo {
		width: 96px;
		height: 91px;
		/*background-color: #333;*/
		border-radius: 50%;
		display: inline-block;
		padding: 5px;
	}
	.menu-nav-mobile {
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 15px; 
		font-size: 18px; 
		border-bottom: 1px solid #EEE;
	}
	.flag-mobile {
		margin-top: -8px;
	}
	.icon-next-mobile {
		font-size: 15px;
	}




	/*  //////////////////////          Responsive           ////////////////////////////// */
	@media (max-width: 767px) and (min-width: 300px) {
		.item-1::before, .item-2::before, .item-3::before, .item-4::before {
			background-color: #ebebeb00;
		}
		.detail-obligation {
			padding-top: 0;
		}
		.logo-header , .contact-header {
			display: none;
		}
		.about-us {
			margin-top: 100px;
		}
		.iconvision {
			font-size: 28px;
		}
		.vision p {
			font-size: 11px;
		}
		.vision span {
			visibility: hidden;
			display: none;
		}
		.item-1 , .item-2 , .item-3, .item-4 ,.item-5 , .space-tab{
			height: 120px;
		}
		.item-1:hover , .item-2:hover , .item-3:hover , .item-4:hover ,.item-5:hover  {
			height: 160px;
		}
		.item-1::before, .item-2::before, .item-3::before, .item-4::before {
			height: 40px;
		}
		.nav-1:after, .nav-2:after, .nav-3:after, .nav-4:after, .nav-5:after, .nav-6:after {
			height: 0%;
		}
		.nav-link {
			padding: .4rem 1.3rem;
			line-height: 23px;
			background-color: #0406237d;
		}
		.navbar-expand-lg .navbar-nav .nav-link {
			display: flex;
		}
		.span-menu {
			padding-left: 10px;
		}
		.bg-white {
			background-color: #FFF;
		}
		.navbar-light .navbar-toggler {
			margin-bottom: 10px;
		}
		.board-person:hover .position-hover {
			margin-top: -10px;
		}
		.detail-vision {
			padding-top: 20px;
			line-height: 28px;
		}
		.detail-obligation {
			line-height: 28px;
		}
		.detail-history p {
			line-height: 28px;
		}
		.detail-iso p {
			line-height: 28px;
		}
		.detail-board p {
			font-size: 20px;
		}

		.contact-footer {
			padding-top: 5px;
		}
		.about-us {
			padding-bottom: 30px;
		}
		.detail-director {
			padding: 50px 10px 10px 0;
		}

	}

	@media (max-width: 1023px) and (min-width: 768px) {
		.nav-link {
			padding: .4rem 1.3rem;
			line-height: 23px;
			background-color: #0406237d;
		}
		.navbar-expand-lg .navbar-nav .nav-link {
			display: flex;
		}
		.span-menu {
			padding-left: 10px;
		}
		.nav-1:after, .nav-2:after, .nav-3:after, .nav-4:after, .nav-5:after, .nav-6:after {
			height: 0%;
		}
		
		.navbar-light .navbar-toggler {
			margin-bottom: 10px;
		}
		.scrollbar {
			overflow-y: auto;
			max-height: 255px;
		}
		#vision-p::-webkit-scrollbar {
			width: 4px;
			margin-right: -15px;
		}
		#vision-p::-webkit-scrollbar-thumb {
			background-color:  #4c5969;
		}
		#vision-p::-webkit-scrollbar-track {
			background-color: #EEE;
		}
		.detail-vision {

			line-height: 28px;
		}
		.detail-obligation {
			line-height: 28px;
		}
		.detail-history p {
			line-height: 28px;
		}
		
		#header {
			padding: 30px 0;
		}

	}

	@media (max-width: 1359px) and (min-width: 1024px) {
		.about-us {
			margin-top: 120px;
			padding-bottom: 100px;
		}
		.img-vision img {
			padding-top: 40px;
		}
		.dropdonw-lang {
			margin-left: 0;
			display: inline-flex;
		}
		.flag img {
			width: 30px;
			height: 30px;
		}
		.dropdown-full {
			font-size: 18px;
		}
		.drop-lang a {
			font-size: 15px;
		}
		.span-menu {
			font-size: 13px !important;
		}

	}







</style>