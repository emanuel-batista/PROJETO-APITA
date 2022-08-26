
<?php include_once 'config.php'; ?>
<div class="nav">
    <?php 
        //função para verificar se o usuário está logado
        function isLoggedIn(){
            if(isset($_SESSION['username'])){
                return true;
            }else{
                return false;
            }
        }
    
    ?>
        <a href="index.php" class='logo'><img src="../static/images/apita.svg" alt="LOGO DO SITE" id='logo' class='logo-apita'></a>
        <div class="links">
            <a href="index.php" class='icon'><img src="../static/images/HOME.svg" alt="HOME" id='icon' style="fill: yellow;"></a>
            <a href="entrevista-public.php" class='icon'><img src="../static/images/ENTREVISTAS.svg" alt="ENTREVISTAS" id='icon'></a>
            <a href="vernoticia.php" class='icon'><img src="../static/images//NOTICIAS.svg" alt="NOTICIAS" id='icon'></a>
            <a href="<?php 
                //verifica se o usuário está logado
                if(isset($_SESSION['username'])){
                    echo "../public/perfil.php";
                }else{
                    echo "../public/login_public.php";
                }

            ?>" class='icon'><img src="<?php
                //verificar se possui sessão ativa
                if(isset($_SESSION['username'])){
                    $foto = $_SESSION['foto'];
                    echo ("../static/images/imagens-perfil/$foto");
                }elseif(!isLoggedIn()){
                    echo "../static/images/LOGIN.svg";
                }

            
            ?>" alt="LOGIN" id='icon' class='<?php 
            //verificar se há sessão ativa
            if(isset($_SESSION['username'])){
                echo "icon-com-foto";
            }
            else{
                echo "icon";
            }
        
        ?>'></a>
            <?php
            //verificar se há sessão ativa
            if(!isLoggedIn()){
                echo "";
            }elseif ($_SESSION['ranking'] == '3') {

                echo "<a href='../admin/noticia/noticia.php' class='icon'><img src='../static/images/admin-panel.svg' alt='LOGIN' id='icon'></a>";
            }
            
            ?>
        </div>  
        
    </div>