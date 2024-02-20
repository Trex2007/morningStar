<div class="menu">
    <img src="../../assets/images/H_Logo.png"/>
    <div class="butMen1">
        <a href="index"><button>Accueil</button></a>
    </div>
    <div class="butMen2">
        <a href="Epopee"><button>Epopee</button></a>
    </div>
    <div class="butMen3">
        <a href="#"><button>Chambres</button></a>
    </div>
    <div class="butMen4">
        <a href="#"><button>Accueil</button></a>
    </div>
    <div class="butMen5">
        <a href="#"><button>Accueil</button></a>
    </div>
    <?php if(!isset($_SESSION["user"])) : ?>
    <div class="butMen6">
        <a href="login"><button>Se connecter</button></a>
    </div>
    <?php else : ?>
    <div class="butMen7">
        <a href="profil"><button>Profil</button></a>
    </div>
    <?php endif ?>
</div>
    <div class="headLeft">
        <input type="checkbox" id="checkboxmenu">
        <label for="checkboxmenu" class="toggle">
            <div class="bars" id="bar1"></div>
            <div class="bars" id="bar2"></div>
            <div class="bars" id="bar3"></div>
        </label>
    </div>
    <div class="headCenter">
        <h1>Morning Stars</h1>
    </div>
    <div class="headRight">
        <label class="switchlight">
        <input type="checkbox">
        <span class="slider"></span>
    </label>
</div>