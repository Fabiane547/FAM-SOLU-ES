<?php
	session_start();
	$email = ($_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FAM SOLUÇÕES</title>

  <!-- Favicons
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->

  <!-- Google Fonts -->
  <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">-->

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.2.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/Logo.jpeg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html"> Nome da sua Empresa</a></h1>
        
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#sobre"><i class="bx bx-home"></i> <span>Página Inicial</span></a></li>
          <li><a href="#Ex:sorvetes"><i class="bx bx-cart"></i> <span>Ex: Sorvetes</span></a></li>
          <li><a href="#Ex:milkshakes"><i class="bx bx-coffee-togo"></i> <span>Ex:Milkshakes</span></a></li>
		  <li><a href="#Ex:Tortas"><i class="bx bx-coffee-togo"></i> <span>Ex:Tortas</span></a></li>
          <li><a href="#Ex:pedido"><i class="bx bx-envelope"></i> Ex:Pedido</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <main id="main">
	<!-- ======= About Section ======= -->
    <section id="sobre" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Nome da sua Empresa</h2>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
           <img src="assets/img/Logo.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Exemplo: O melhor Sorvete da cidade.</h3>
            <div class="row">
              <div class="col-12">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong> Sorvetes variados:</strong> Diversidade de Sorvetes pra você.</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Entrega rápida:</strong> Sem longas esperas.</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Varios tipos de Sorvetes:</strong> Para toda a família.</li>
                  <li><i class="icofont-rounded-right"></i> <strong>Ingredientes:</strong> Selecionados exclusivamente para melhor lhe satisfazer.</li>
                </ul>
              </div>
		    </div>
			<div class="row">
				<div class="col-12">
					<p align="justify">
					  A seguir, use as setas para escolher a quantidade que desejas, tamanho e bebidas. A seguir, insira suas informações pessoas e clique em "pedir no whatsapp" para ser encaminhado para nosso número de pedidos.
					</p>
					<p align="justify">
					  Cada Sorvete serve:
					</p>
				</div>
			</div>
			<div class="row" style="padding-top: 10px">
              <div class="col-12">
                <ul>
                  <li><i class="icofont-rounded-right"></i> <strong>1 pote de sorvete pequeno:</strong> 1 pessoa.</li>
                  <li><i class="icofont-rounded-right"></i> <strong>1 pote de sorvete médio</strong> 2 pessoas.</li>
                  <li><i class="icofont-rounded-right"></i> <strong>1 pote de sorvete grande</strong> 4 pessoas.</li>
                  
                </ul>
              </div>
		    </div>
        </div>
		</div>
		</div>
    </section><!-- End About Section -->
    <!-- ======= sorvete Section ======= -->
    <section id="Sorvete" class="Sorvete">
      	<div class="container">

	        <div class="section-title">
	          <h2>Sabor dos Sorvetes</h2>
	        </div>

        	<div class="container col-12 margemBotton" data-aos="fade-right">
				<div class="row margemBotton margemTop">
					<label for="bolo" class="col-md-10 col-9">
						<strong>Chocolate</strong>
					</label>
					<div class="col-md-2 col-3">
						<input type="checkbox" class="form form-control" id="bolo" name="bolo">					  
					</div>
				</div>
				<div class="row boloT" style="display: none">
					<label for="boloP" class="col-12"><input type="radio" name="boloT" id="boloP" value="1"><strong> Pequeno (R$10,00)</strong></label>
					<label for="boloM" class="col-12"><input type="radio" name="boloT" id="boloM" value="2"><strong> Médio (R$22,00)</strong></label>
					<label for="boloG" class="col-12"><input type="radio" name="boloT" id="boloG" value="3"><strong> Grande (R$45,00)</strong></label>
				</div>
			  
			</div>
		 	<div class="container col-12 margemBotton" data-aos="fade-right">
				<div class="row margemBotton margemTop">
					<label for="qp" class="col-md-10 col-9">
						<strong>Morango</strong>
					</label>
					<div class="col-md-2 col-3">
						<input type="checkbox" class="form form-control" id="qp" name="qp">					  
					</div>
				</div>
				<div class="row qpT" style="display: none">
					<label for="qpP" class="col-12"><input type="radio" name="qpT" id="qpP" value="1"><strong> Pequeno (R$10,00)</strong></label>
					<label for="qpM" class="col-12"><input type="radio" name="qpT" id="qpM" value="2"><strong> Médio (R$20,00)</strong></label>
					<label for="qpG" class="col-12"><input type="radio" name="qpT" id="qpG" value="3"><strong> Grande (R$40,00)</strong></label>
				</div>
			  
			</div>
		  	<div class="container col-12 margemBotton" data-aos="fade-right">
				<div class="row margemBotton margemTop">
					<label for="fCremoso" class="col-md-10 col-9">
						<strong>Creme</strong>
					</label>
					<div class="col-md-2 col-3">
						<input type="checkbox" class="form form-control" id="fCremoso" name="fCremoso">					  
					</div>
				</div>
				<div class="row fCremosoT" style="display: none">
					<label for="fCremosoP" class="col-12"><input type="radio" name="fCremosoT" id="fCremosoP" value="1"><strong> Pequeno (R$10,00)</strong></label>
					<label for="fCremosoM" class="col-12"><input type="radio" name="fCremosoT" id="fCremosoM" value="2"><strong> Médio (R$22,00)</strong></label>
					<label for="fCremosoG" class="col-12"><input type="radio" name="fCremosoT" id="fCremosoG" value="3"><strong> Grande (R$45,00)</strong></label>
				</div>
			  
			</div>
		  	<div class="container col-12 margemBotton" data-aos="fade-right">
				<div class="row margemBotton margemTop">
					<label for="fBacon" class="col-md-10 col-9">
						<strong>Baunilha</strong>
					</label>
					<div class="col-md-2 col-3">
						<input type="checkbox" class="form form-control" id="fBacon" name="fBacom">					  
					</div>
				</div>
				<div class="row fBaconT" style="display: none">
					<label for="fBaconP" class="col-12"><input type="radio" name="fBaconT" id="fBaconP" value="1"><strong> Pequeno (R$12,00)</strong></label>
					<label for="fBaconM" class="col-12"><input type="radio" name="fBaconT" id="fBaconM" value="2"><strong> Médio (R$25,00)</strong></label>
					<label for="fBaconG" class="col-12"><input type="radio" name="fBaconT" id="fBaconG" value="3"><strong> Grande (R$45,00)</strong></label>
				</div>
			  
			</div>
		 	<div class="container col-12 margemBotton" data-aos="fade-right">
				<div class="row margemBotton margemTop">
					<label for="fCream" class="col-md-10 col-9">
						<strong>Sonho de Valsa</strong>
					</label>
					<div class="col-md-2 col-3">
						<input type="checkbox" class="form form-control" id="fCream" name="fCream">					  
					</div>
				</div>
				<div class="row fCreamT" style="display: none">
					<label for="fCreamP" class="col-12"><input type="radio" name="fCreamT" id="fCreamP" value="1"><strong> Pequeno (R$15,00)</strong></label>
					<label for="fCreamM" class="col-12"><input type="radio" name="fCreamT" id="fCreamM" value="2"><strong> Médio (R$30,00)</strong></label>
					<label for="fCreamG" class="col-12"><input type="radio" name="fCreamT" id="fCreamG" value="3"><strong> Grande (R$60,00)</strong></label>
				</div>
			  
			</div>
		  	<div class="container col-12 margemBotton" data-aos="fade-right">
				<div class="row margemBotton margemTop">
					<label for="fPalmito" class="col-md-10 col-9">
						<strong>Napolitano</strong>
					</label>
					<div class="col-md-2 col-3">
						<input type="checkbox" class="form form-control" id="fPalmito" name="fPalmito">					  
					</div>
				</div>
				<div class="row fPalmitoT" style="display: none">
					<label for="fPalmitoP" class="col-12"><input type="radio" name="fPalmitoT" id="fPalmitoP" value="1"><strong> Pequeno (R$15,00)</strong></label>
					<label for="fPalmitoM" class="col-12"><input type="radio" name="fPalmitoT" id="fPalmitoM" value="2"><strong> Médio (R$30,00)</strong></label>
					<label for="fPalmitoG" class="col-12"><input type="radio" name="fPalmitoT" id="fPalmitoG" value="3"><strong> Grande (R$60,00)</strong></label>
				</div>
			  
			</div>
		  	<div class="container col-12 margemBotton" data-aos="fade-right">
				<div class="row margemBotton margemTop">
					<label for="costela" class="col-md-10 col-9">
						<strong>Ovo Maltine</strong>
					</label>
					<div class="col-md-2 col-3">
						<input type="checkbox" class="form form-control" id="costela" name="costela">					  
					</div>
				</div>
				<div class="row costelaT" style="display: none">
					<label for="costelaP" class="col-12"><input type="radio" name="costelaT" id="costelaP" value="1"><strong> Pequeno (R$12,00)</strong></label>
					<label for="costelaM" class="col-12"><input type="radio" name="costelaT" id="costelaM" value="2"><strong> Médio (R$25,00)</strong></label>
					<label for="costelaG" class="col-12"><input type="radio" name="costelaT" id="costelaG" value="3"><strong> Grande (R$45,00)</strong></label>
				</div>
			  
			</div>
		  	<div class="container col-12 margemBotton" data-aos="fade-right">
				<div class="row margemBotton margemTop">
					<label for="costelaB" class="col-md-10 col-9">
						<strong>Torta de Limão</strong>
					</label>
					<div class="col-md-2 col-3">
						<input type="checkbox" class="form form-control" id="costelaB" name="costelaB">					  
					</div>
				</div>
				<div class="row costelaBT" style="display: none">
					<label for="costelaBP" class="col-12"><input type="radio" name="costelaBT" id="costelaBP" value="1"><strong> Pequeno (R$15,00)</strong></label>
					<label for="costelaBM" class="col-12"><input type="radio" name="costelaBT" id="costelaBM" value="2"><strong> Médio (R$30,00)</strong></label>
					<label for="costelaBG" class="col-12"><input type="radio" name="costelaBT" id="costelaBG" value="3"><strong> Grande (R$65,00)</strong></label>
				</div>
			  
			</div>
		  	<div class="container col-12 margemBotton" data-aos="fade-right">
				<div class="row margemBotton margemTop">
					<label for="camarao" class="col-md-10 col-9">
						<strong>Biscoitino</strong>
					</label>
					<div class="col-md-2 col-3">
						<input type="checkbox" class="form form-control" id="camarao" name="camarao">					  
					</div>
				</div>
				<div class="row camaraoT" style="display: none">
					<label for="camaraoP" class="col-12"><input type="radio" name="camaraoT" id="camaraoP" value="1"><strong> Pequeno (R$20,00)</strong></label>
					<label for="camaraoM" class="col-12"><input type="radio" name="camaraoT" id="camaraoM" value="2"><strong> Médio (R$40,00)</strong></label>
					<label for="camaraoG" class="col-12"><input type="radio" name="camaraoT" id="camaraoG" value="3"><strong> Grande (R$85,00)</strong></label>
				</div>
			  
			</div>
			 	<div class="container col-12 margemBotton" data-aos="fade-right">
					<div class="row margemBotton margemTop">
						<label for="vege" class="col-md-10 col-9">
							<strong>Nutella</strong>
						</label>
						<div class="col-md-2 col-3">
							<input type="checkbox" class="form form-control" id="vege" name="vege">					  
						</div>
					</div>
					<div class="row vegeT" style="display: none">
						<label for="vegeP" class="col-12"><input type="radio" name="vegeT" id="vegeP" value="1"><strong> Pequeno (R$15,00)</strong></label>
					</div>
				  
				</div>
        </div>
    </section><!-- End sorvetes Section -->

    <!-- ======= milkshake Section ======= -->
    <section id="milkshakes" class="milkshake">
      <div class="container">

	        <div class="section-title">
	          <h2>Milkshakes</h2>
	        </div>

	        <div class="container col-12 margemBotton" data-aos="fade-right">
					<div class="row margemBotton margemTop">
						<div class="col-md-8 col-6"><strong>Ovomaltine</strong></div>
						<div class="col-md-2 col-3">R$10,00</div>
						<div class="col-md-2 col-3">
						    	<div class="row">
								  <i class="bx bx-caret-left-circle bx-sm" style="color:#272829" id="menos09"></i>
								  <span id="op09" class="col-md-4 col-4 pdbtn">0</span>
								  <i class="bx bx-caret-right-circle bx-sm" style="color:#272829" id="mais09"></i>
							  </div>
						</div>
					</div>
				  	<div class="row margemBotton">
						<div class="col-md-8 col-6"><strong>Caramelo</strong></div>
					  	<div class="col-md-2 col-3">R$8,00</div>
						<div class="col-md-2 col-3">
							<div class="row">
								<i class="bx bx-caret-left-circle bx-sm" style="color:#272829" id="menos10"></i>
								<span id="op10" class="col-md-4 col-4 pdbtn">0</span>
								<i class="bx bx-caret-right-circle bx-sm" style="color:#272829" id="mais10"></i>
							</div>
						</div>
					</div>
				  	<div class="row margemBotton">
					  <div class="col-md-8 col-6"><strong>Paçoca</strong></div>
					  <div class="col-md-2 col-3">R$7,00</div>
					  <div class="col-md-2 col-3">
						  <div class="row">
							  <i class="bx bx-caret-left-circle bx-sm" style="color:#272829" id="menos11"></i>
							  <span id="op11" class="col-md-4 col-4 pdbtn">0</span>
							  <i class="bx bx-caret-right-circle bx-sm" style="color:#272829" id="mais11"></i>
						  </div>
					  </div>
					</div>
				  	<div class="row margemBotton">
					  <div class="col-md-8 col-6"><strong>Morango</strong></div>
					  <div class="col-md-2 col-3">R$9,00</div>
					  <div class="col-md-2 col-3">
						  <div class="row">
							  <i class="bx bx-caret-left-circle bx-sm" style="color:#272829" id="menos12"></i>
							  <span id="op12" class="col-md-4 col-4 pdbtn">0</span>
							  <i class="bx bx-caret-right-circle bx-sm" style="color:#272829" id="mais12"></i>
						  </div>
					  </div>
					</div>
					<div class="row margemBotton">
					  <div class="col-md-8 col-6"><strong>Chocolate</strong></div>
					  <div class="col-md-2 col-3">R$10,00</div>
					  <div class="col-md-2 col-3">
						  <div class="row">
							  <i class="bx bx-caret-left-circle bx-sm" style="color:#272829" id="menos13"></i>
							  <span id="op13" class="col-md-4 col-4 pdbtn">0</span>
							  <i class="bx bx-caret-right-circle bx-sm" style="color:#272829" id="mais13"></i>
						  </div>
					  </div>
					</div>
				</div>
	        </div>
    </section><!-- End milkshake Section -->
	
	  
	<!-- ======= tortas com sorvete Section ======= -->
    <section id="torta" class="torta">
      <div class="container">

        <div class="section-title">
          <h2>Torta com Sorvete</h2>
        </div>

          <div class="container col-12 margemBotton" data-aos="fade-right">
				<div class="row margemBotton margemTop">
				  <div class="col-md-8 col-6"><strong>Torta de sorvete de paçoca e brigadeiro (Fatia) </strong></div>
				  <div class="col-md-2 col-3">R$6,00</div>
				  <div class="col-md-2 col-3">
					  <div class="row">
						  <i class="bx bx-caret-left-circle bx-sm" style="color:#272829" id="menos14"></i>
						  <span id="op14" class="col-md-4 col-4 pdbtn">0</span>
						  <i class="bx bx-caret-right-circle bx-sm" style="color:#272829" id="mais14"></i>
					  </div>
				  </div>
				</div>
			  	<div class="row margemBotton">
					<div class="col-md-8 col-6"><strong> Torta de sorvete de prestígio com oreo (Fatia)</strong></div>
				  <div class="col-md-2 col-3">R$7,00</div>
				  <div class="col-md-2 col-3">
					  <div class="row">
						  <i class="bx bx-caret-left-circle bx-sm" style="color:#272829" id="menos15"></i>
						  <span id="op15" class="col-md-4 col-4 pdbtn">0</span>
						  <i class="bx bx-caret-right-circle bx-sm" style="color:#272829" id="mais15"></i>
					  </div>
				  </div>
				</div>
			  	<div class="row margemBotton">
				  <div class="col-md-8 col-6"><strong> Torta sorvete proteica de chocolate (Fatia)</strong></div>
				  <div class="col-md-2 col-3">R$9,00</div>
				  <div class="col-md-2 col-3">
					  <div class="row">
						  <i class="bx bx-caret-left-circle bx-sm" style="color:#272829" id="menos16"></i>
						  <span id="op16" class="col-md-4 col-4 pdbtn">0</span>
						  <i class="bx bx-caret-right-circle bx-sm" style="color:#272829" id="mais16"></i>
					  </div>
				  </div>
				</div>
			  	<div class="row margemBotton">
				  <div class="col-md-8 col-6"><strong> Torta gelada de sorvete com bombom (Fatia)</strong></div>
				  <div class="col-md-2 col-3">R$8,00</div>
				  <div class="col-md-2 col-3">
					  <div class="row">
						  <i class="bx bx-caret-left-circle bx-sm" style="color:#272829" id="menos17"></i>
						  <span id="op17" class="col-md-4 col-4 pdbtn">0</span>
						  <i class="bx bx-caret-right-circle bx-sm" style="color:#272829" id="mais17"></i>
					  </div>
				  </div>
				</div>
				<div class="row margemBotton">
				  <div class="col-md-8 col-6"><strong> Torta de sorvete de coco e calda de abacaxi (Fatia)</strong></div>
				  <div class="col-md-2 col-3">R$12,00</div>
				  <div class="col-md-2 col-3">
					  <div class="row">
						  <i class="bx bx-caret-left-circle bx-sm" style="color:#272829" id="menos18"></i>
						  <span id="op18" class="col-md-4 col-4 pdbtn">0</span>
						  <i class="bx bx-caret-right-circle bx-sm" style="color:#272829" id="mais18"></i>
					  </div>
				  </div>
				</div>
			  	<div class="row margemBotton">
				  <div class="col-md-8 col-6"><strong>Torta de sorvete de bis(Fatia)</strong></div>
				  <div class="col-md-2 col-3">R$11,00</div>
				  <div class="col-md-2 col-3">
					  <div class="row">
						  <i class="bx bx-caret-left-circle bx-sm" style="color:#272829" id="menos19"></i>
						  <span id="op19" class="col-md-4 col-4 pdbtn">0</span>
						  <i class="bx bx-caret-right-circle bx-sm" style="color:#272829" id="mais19"></i>
					  </div>
				  </div>
				</div>
			</div>
        </div>
    </section><!-- End tortas Section -->
    <!-- ======= Pedido Section ======= -->
    <section id="pedido" class="pedido">
      <div class="container">

        <div class="section-title">
          <h2>Pedido</h2>
          <p align="justify">Para finalizar seu pedido, insira as informações abaixo e clique o botão <strong>"Pedir no whatsapp"</strong>.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="nome">Seu nome:</label>
                  <input type="text" name="name" class="form-control" id="nome" placeholder="Nome e sobrenome"/>
                </div>
              </div>
              <div class="form-row">
				<div class="form-group col-md-12">
                  <label for="endereco">Endereço:</label>
                  <input type="text" name="endereco" class="form-control" id="endereco"/>
                </div>
			  </div>
              <div class="form-row">
				<div class="form-group col-5">
				  <label for="nome">Número:</label>
				  <input type="text" name="numero" class="form-control col-7" id="numero"/>
          	  	</div>
			  	<div class="form-group col-7">
				  <label for="nome">Bairro:</label>
				  <select class="form-control" name="bairro" id="bairro">
					  
					  <option value="" disabled selected>Escolha o bairro</option>
					  <option value="2-Alvorada">Alvorada</option>
					  <option value="1-Beirol">Beirol</option>
					  <option value="4-Boné Azul">Boné Azul</option>
					  <option value="4-Brasil Novo">Brasil Novo</option>
					  <option value="1-Buritizal">Buritizal</option>
					  <option value="4-Cabralzinho">Cabralzinho</option>
					  <option value="1-Centro">Centro</option>
					  <option value="2-Cidade Nova">Cidade Nova</option>
					  <option value="2-Congós">Congós</option>
					  <option value="3-Conjunto Alfaville">Conjunto Alfaville</option>
					  <option value="4-Fazendinha">Fazendinha</option>
					  <option value="4-Goiabal">Goiabal</option>
					  <option value="4-Infraero I">Infraero I</option>
					  <option value="4-Infraero II">Infraero II</option>
					  <option value="3-Jardim Equatorial">Jardim Equatorial</option>
					  <option value="4-Jardim Felicidade">Jardim Felicidade</option>
					  <option value="3-Jardim Marco Zero">Jardim Marco Zero</option>
					  <option value="2-Jesus de Nazaré">Jesus de Nazaré</option>
					  <option value="2-Julião Ramos">Julião Ramos</option>
					  <option value="2-Laguinho">Laguinho</option>
					  <option value="4-Loteamento Açaí">Loteamento Açaí</option>
					  <option value="4-Loteamento Amazonas">Loteamento Amazonas</option>
					  <option value="4-Marabaixo">Marabaixo</option>
					  <option value="3-Muca">Muca</option>
					  <option value="4-Muruci - Fazendinha">Muruci - Fazendinha</option>
					  <option value="3-Nova Esperança">Nova Esperança</option>
					  <option value="4-Novo Horizonte">Novo Horizonte</option>
					  <option value="2-Pacoval">Pacoval</option>
					  <option value="2-Pedrinhas">Pedrinhas</option>
					  <option value="2-Perpétuo Socorro">Perpétuo Socorro</option>
					  <option value="4-Renascer">Renascer</option>
					  <option value="1-Santa Inês">Santa Inês</option>
					  <option value="1-Santa Rita">Santa Rita</option>
					  <option value="2-São Lázaro">São Lázaro</option>
					  <option value="1-Trem">Trem</option>
					  <option value="3-Universidade">Universidade</option>
					  <option value="4-Zerão">Zerão</option>
				  </select>
				</div>
			  </div>
			  <div class="form-row">
				<div class="form-group col-md-12">
                  <label for="complemento">Complemento:</label>
                  <input type="text" name="complemento" class="form-control" id="complemento"/>
                </div>
			  </div>
			  <div class="form-row">
				<div class="col-12">Opções de pagamento:</div>
			  </div>
			  <div class="form-row">
				  <div class="form-group col-6">
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="pagamento" id="dinheiro" value="dinheiro">
					  <label class="form-check-label" for="dinheiro">Dinheiro</label>
					</div>
				  </div>
				  <div class="form-group col-6">
					<div class="form-check form-check-inline">
					  <input class="form-check-input" type="radio" name="pagamento" id="cartao" value="cartão">
					  <label class="form-check-label" for="cartao">Cartão</label>
					</div>
				  </div>
			  </div>
			  <div class="form-row">
			  <div class="form-group col-md-12">
			    <label for="endereco">Cupom de desconto:</label>
			    <input type="text" name="endereco" class="form-control text-uppercase" id="desconto"/>
			  </div>
			  </div>
			  <div class="form-row">
				<div class="form-group col-12">
                	<label for="observacoes">Observações:</label>
			  		<textarea class="form-control" id="observacoes" name="observacoes" rows="5" placeholder="Observações sobre seu pedido e/ou endereço."></textarea>
                </div>
			  </div>
              <div class="form-row">
				<div class="form-group col-12">
					<button type="button" class="form-control btn btn-dark" id="enviar"><span>Pedir no whatsapp</span></button>
					<div class="form-group col-12 botao bg-danger text-white text-center" style="display: none">Pedidos de 19hs a 23hs.</div>
					<div class="validate"></div>
			    </div>
			  </div>
            </form>
          </div>
			
			

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
      	<a href="#"><i class="bx bx-user"></i></a> <?=$email;?><br>

        &copy; Copyright <strong><span>Fam Soluções</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="https://www.instagram.com/accounts/login/?next=/explore/%3Fgclid%3DCjwKCAiAqIKNBhAIEiwAu_ZLDpc0EnM1vwtXjbONCd_2ly_K5w3__OeRuV_Aa-BtsJM26DDrexg9ChoCg5UQAvD_BwE" target="_blank">Shneider</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
	<script src="assets/js/cardapio.js"></script>
	  <script src="assets/js/boxicons.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>