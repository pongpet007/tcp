<style type="text/css">
	section {
		padding: 30px 0;
	}
	.space-tab {
		height: 200px;
	}
	.item-1::before, .item-2::before , .item-3::before   , .item-4::before {
		background-color: #ebebeb;
		content: "";
		height: 90px;
		position: absolute;
		right: 0px;
		width: 3px;
		margin-top: 30px;
	}
	.space-tab-select {
		max-width: 20%;
		position: relative;
		display: inline-block;
		flex: 0 0 20%;
		padding-left: -5px;
	}
	.row-vision .col-md-12 {
		padding: 0;
	}
	.vision-detail {
		margin-top: 50px;
	}
	.item-1 {
		text-align: center;
		width: 234;
		height: 200px;
		transition: all 0.3s;
		padding-top: 30px;
		border-top-left-radius : 15px;
		border-bottom-left-radius : 15px;
		background-color: #FFF;
	}
	.item-1:hover {
		background-color: #0078ff;
		width: 234px;
		height: 240px;
		margin-top: -20px;
		transition: all 0.3s;
		border-radius: 15px;
	}
	.item-1:hover::before {
		width: 0;
	}
	.item-2:hover::before {
		width: 0;
	}
	.item-3:hover::before {
		width: 0;
	}
	.item-4:hover::before {
		width: 0;
	}
	.item-1:hover p , .item-1:hover .iconvision  , .item-1:hover  span{
		color: #fff;
	}
	.item-2:hover p , .item-2:hover .iconvision  , .item-2:hover  span{
		color: #fff;
	}
	.item-3:hover p , .item-3:hover .iconvision  , .item-3:hover  span{
		color: #fff;
	}
	.item-4:hover p , .item-4:hover .iconvision  , .item-4:hover  span{
		color: #fff;
	}
	.item-5:hover p , .item-5:hover .iconvision  , .item-5:hover  span{
		color: #fff;
	}
	.item-2 {
		text-align: center;
		width: 234;
		height: 200px;
		transition: all 0.3s;
		padding-top: 30px;
		background-color: #FFF;
	}
	.item-2:hover {
		background-color: #0078ff;
		width: 234px;
		height: 240px;
		margin-top: -20px;
		transition: all 0.3s;
		border-radius: 15px;
	}
	.item-3 {
		text-align: center;
		width: 234;
		height: 200px;
		transition: all 0.3s;
		padding-top: 30px;
		background-color: #FFF;
		background-color: #FFF;
	}
	.item-3:hover {
		background-color: #0078ff;
		width: 234px;
		height: 240px;
		margin-top: -20px;
		transition: all 0.3s;
		border-radius: 15px;
	}
	.item-4 {
		text-align: center;
		width: 234;
		height: 200px;
		transition: all 0.3s;
		padding-top: 30px;
		background-color: #FFF;
		background-color: #FFF;
	}
	.item-4:hover {
		background-color: #0078ff;
		width: 234px;
		height: 240px;
		margin-top: -20px;
		transition: all 0.3s;
		border-radius: 15px;
	}
	.item-5 {
		text-align: center;
		width: 234;
		height: 200px;
		transition: all 0.3s;
		padding-top: 30px;
		background-color: #FFF;
		border-top-right-radius : 15px;
		border-bottom-right-radius : 15px;
		background-color: #FFF;
	}
	.item-5:hover {
		background-color: #0078ff;
		width: 234px;
		height: 240px;
		margin-top: -20px;
		transition: all 0.3s;
		border-radius: 15px;
	}

	.vision p {
		color: #1c51a1;
		font-size: 30px;
		padding: 0;
		
		margin-bottom: -1rem;
		letter-spacing: 1px;
	}
	.vision span {
		padding: 0;
		color: #828282;
		font-size: 25px;
		top: -30px;
	}
	.iconvision {
		font-size: 50px;
		color: #333;
	}
	.about-us {
		font-size: 28px;
		color: #FFF;
		text-align: center;
		margin-top: 240px;
		padding-bottom: 150px;
	}
	.about-us h1 {
		font-weight: 500;
	}
	.detail-vision h1 , .detail-obligation h1 , .detail-history h1 , .detail-iso h1{
		color: #0147a6;
		letter-spacing: 1px;
	}
	.detail-vision p , .detail-obligation p , .detail-history p , .detail-iso p{
		font-size: 24px;
	}
	.detail-board {
		text-align: center;
		color: #FFF;
		letter-spacing: 1px;
	}
	.detail-board h1 {
		color: #0146a5;
	}
	
	.detail-board p {
		font-size: 28px;
		color: #666666;
	}
	.detail-history {
		text-align: center;
	}
	.space-tab {
		-webkit-box-shadow: -1px 29px 73px -36px rgba(0,0,0,0.79);
		-moz-box-shadow: -1px 29px 73px -36px rgba(0,0,0,0.79);
		box-shadow: 1px 25px 50px -50px rgba(0,0,0,0.79);
	}
	.container-header , .container-about , .container-obligation , .container-history , .container-board , .container-iso{
		max-width: 1140px;
	}
	.detail-contact {
		padding-right: 50px;
		display: -webkit-inline-box;
	}
	.name-board {
		font-size: 25px;
		text-align: center;
		margin-top: 20px;
		color: #FFF;
		letter-spacing: 1px;
	}
	.board-person {
		position: relative;
		
	}
	.position-hover {
		visibility: hidden;
		/* Position the tooltip */
		/*position: absolute;
		z-index: 1;
		top: 100%;
		left: 50%;
		margin-left: -60px;*/
	}
	.position-hover h3  {
		font-size: 22px;
		
		color: #0a2045;
		padding-top: 20px;

	}
	.position-hover p {
		color: #333333;
		font-size: 20px;
		
	}
	.img-span-board {
		padding-top: -30px;
	}
	.board-person:hover .position-hover {
		visibility: visible;
		text-align: center;
	}

	.position-hover {
		position: relative;
		background: #FFF;
		border: 4px solid #5691c9;
		margin-top: -50px;
	}
	.position-hover:after, .position-hover:before {
		bottom: 100%;
		left: 50%;
		border: solid transparent;
		content: "";
		height: 0;
		width: 0;
		position: absolute;
		pointer-events: none;
	}
	.position-hover:after {
		border-color: rgba(136, 183, 213, 0);
		border-bottom-color: #FFF;
		border-width: 30px;
		margin-left: -30px;
	}
	.position-hover:before {
		border-color: rgba(255, 225, 245, 0);
		border-bottom-color: #5691c9;
		border-width: 36px;
		margin-left: -36px;
	}



	.board-person:hover .name-board {
		visibility: hidden;
	}
	.board-person:hover .img-board-person {
		opacity: 0.5;
	}
	.navbar-light .navbar-toggler {
		background-color: #FFF;
	}

	.nav-1:after ,.nav-2:after ,.nav-3:after ,.nav-4:after ,.nav-5:after ,.nav-6:after {
		content: '';
		height: 60%;
		width: 2px;
		position: absolute;
		right: 0;
		top: 10px;
		background-color: #6b6d82;
	}
	.history {
		background : url(<?= base_url()?>/image_new/bg/bg-2.jpg) no-repeat center center ;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	.board {
		/*background : url(<?= base_url()?>/image_new/bg/) no-repeat center center ;*/
		background-color: #FFF;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	.iso {
		background : url(<?= base_url()?>/image_new/bg/bg-4.jpg) no-repeat center center ;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}



	/*  //////////////////////          Responsive           ////////////////////////////// */
	@media (max-width: 500px) and (min-width: 300px) {
		.logo-header , .contact-header {
			display: none;
		}
		.about-us {
			margin-top: 80px;
		}
		.iconvision {
			font-size: 28px;
		}
		.vision p {
			font-size: 18px;
		}
		.vision span {
			visibility: hidden;
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
			font-size: 25px;
		}
		
		.contact-footer {
			padding-top: 5px;
		}
		.about-us {
			padding-bottom: 30px;
		}

	}

	@media (max-width: 768px) and (min-width: 501px) {
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
		.vision span {
			line-height: 45px;
			font-size: 20px;
		}
		.about-us {
			margin-top: 100px;
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
		.detail-iso p {
			line-height: 28px;
		}
		.about-us {
			padding-bottom: 60px;
		}

	}

	@media (max-width: 1024px) and (min-width: 769px) {
		.about-us {
			margin-top: 120px;
			padding-bottom: 100px;
		}
		.vision-detail {
			margin-top: 70px;
		}
		.img-vision img {
			padding-top: 40px;
		}
	}







</style>