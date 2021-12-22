<!DOCTYPE html>
    <?php
        session_start();
        if(isset($_SESSION['mensagem']))
        {
            $titulo = $_SESSION['mensagem']; 
            unset ($_SESSION['mensagem']);
        }else $titulo = "Entrar";
    ?>

<html lang="pt-br">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#33b5e5">

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
    <link rel="stylesheet" href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/mdb5/3.10.1/compiled.min.css">
    
    <link rel="stylesheet" href="https://mdbootstrap.com/api/snippets/static/download/MDB5-Pro-Advanced_3.3.0/plugins/css/all.min.css">
    <link rel='stylesheet' id='roboto-subset.css-css'  href='https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/css/mdb5/fonts/roboto-subset.css?ver=3.9.0-update.5' type='text/css' media='all' />

    
    <meta charset="utf-8">
    <title>Login de Acesso ao Sistema</title>
    
    <meta name="description" content="Responsive Login form built with Bootstrap 5. Lot of templates of signup forms and predefined form
     pages. Various design, styles and functionalities. ">
    <meta name="image" content="">
    
    <meta itemprop="name" content="Bootstrap Login form - examples &amp; tutorial">
    <meta itemprop="description" content="Responsive Login form built with Bootstrap 5. Lot of templates of signup forms and predefined 
    form pages. Various design, styles and functionalities. ">
    <meta itemprop="image" content="">
    
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="Bootstrap Login form - examples &amp; tutorial">
    <meta property="twitter:description" content="Responsive Login form built with Bootstrap 5. Lot of templates of signup forms and 
    predefined form pages. Various design, styles and functionalities. ">
    <meta property="twitter:site" content="@MDBootstrap">
    <meta property="twitter:creator" content="@MDBootstrap">
    <meta property="twitter:image:src" content="">
    <meta property="twitter:player" content="">
    
    <meta property="og:title" content="Bootstrap Login form - examples &amp; tutorial">
    <meta property="og:description" content="Responsive Login form built with Bootstrap 5. Lot of templates of signup forms and predefined 
    form pages. Various design, styles and functionalities. ">
    <meta property="og:image" content="">
    <meta property="og:url" content="https://mdbootstrap.com/docs/standard/extended/login/">
    <meta property="og:site_name" content="MDB - Material Design for Bootstrap">
    <meta property="og:locale" content="en_US">
    <meta property="og:video" content="">
    <meta property="fb:admins" content="443467622524287">
    <meta property="og:type" content="website">

    <link rel="shortcut icon" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/favicon.ico" />

    <style>
        #navbarNotification::after {
            content: none !important;
        }

         
        #main-navbar .badge {
            position: absolute;
            font-size: .6rem;
            margin-top: -.1rem;
            margin-left: -.5rem;
            padding: .2em .45em;
        }

         
        #main-navbar .nav-link {
            color: rgba(0, 0, 0, .55) !important;
            font-size: 1rem !important;
            font-weight: 400;
        }

        #main-navbar .nav-link :hover {
            color: rgb(76, 76, 76);
        }


         
        [aria-labelledby=new-mdb-technologies-dropdown] li {
            background-color: rgb(255, 255, 255) !important;
        }

        [aria-labelledby=new-mdb-technologies-dropdown] li :hover {
            background-color: #EEEEEE !important;
            box-shadow: none !important;
        }

        [aria-labelledby=userDropdown] a {
            background-color: rgb(255, 255, 255) !important;
            box-shadow: none !important;
        }

        [aria-labelledby=userDropdown] a:hover {
            background-color: #EEEEEE !important;
        }

        #navbarNotificationContent a {
            background-color: rgb(255, 255, 255) !important;
            box-shadow: none !important;
        }

        #navbarNotificationContent a:hover {
            background-color: #EEEEEE !important;
        }

        .docs-pills {
            border-radius: 0.5rem;
        }
    
        .docs-pills pre[class*="language-"] {
            border-bottom-right-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }
    
        .docs-pills .btn-copy-code,
        .docs-tab-content .export-to-snippet {
            position: absolute;
            top: 16px;
            right: 16px;
            box-shadow: none !important;
            color: #616161 !important;
            background-color: transparent !important;
            padding: 6px 15px !important;
        }

   
    </style>
</head>
<body class="mdb-skin-custom " data-mdb-spy="scroll" data-mdb-target="#scrollspy" data-mdb-offset="250">
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-80">
    <div class="row d-flex justify-content-center align-items-center h-80">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-3 text-center">

            <h3 class="mb-3"><?=$titulo;?></h3>
            <form class="form" name="form_entrar" method="post" action="verifica.php">
                <div class="form-outline mb-2">
                  <label class="" for="email" id="email">Email</label>
                  <input name="email" type="email" id="email" class="form-control form-control-lg border" placeholder="E-mail"/>
                </div>

                <div class="form-outline mb-2">
                  <label class="" for="password">Password</label>
                  <input name="password" type="password" id="password" class="form-control form-control-lg border" placeholder="Senha" />
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-start mb-2">
                  <input class="form-check-input"  type="checkbox"  value="texto"  id="chkCadastro" class="termos"/>
                  <label class="form-check-label" for="form1Example3"> Cadastramento de Novo Usuário </label>
                </div>
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Entrar" name="btn_logar" id="btn_logar">
                <input type="submit" class="btn btn-warning btn-lg btn-block" value="Cadastro" name="btn_cadastrar" id="btn_cadastrar">
         

            </form>
            <hr class="my-4">

            <button id="btn_google" class="btn btn-lg btn-block btn-primary" style="background-color: #dd4b39;" type="submit">
                <i class="fab fa-google me-2"></i> Sign in with google
            </button>
            <button id="btn_face" class="btn btn-lg btn-block btn-primary mb-2" style="background-color: #3b5998;" type="submit">
                <i class="fab fa-facebook-f me-2"></i>Sign in with facebook
            </button>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


</body>

   <script src="js/jquery-2.2.3.js"></script>
   <script type="text/javascript">
        $(document).ready(function () {
            $('#chkCadastro').removeAttr('checked');
            $('#btn_cadastrar').hide();
            $('#chkCadastro').change(function () {
                if (this.checked) {
                    $('#btn_cadastrar').show();
                    $('#btn_logar').hide();
                }
                else {
                    $('#btn_logar').show();
                    $('#btn_cadastrar').hide();
                }
            });
        });


        document.getElementById('btn_google').onclick = function() {
           alert("API Google em Desenvolvimento..");
        };
        document.getElementById('btn_face').onclick = function() {
           alert("API Facebook em Desenvolvimento..");

        };
        document.getElementById('email').onblue = function() {
           document.getElementById('email').style.display = 'none';
        };


</script>
</html>

