<video autoplay loop class="fondvid">
    <source src="../../assets/video/Morning.mp4" type=video/mp4>
</video>

<div class="logReg">
    <div class="case">
        <h1>Se Connecter</h1>
        <form action="" method="POST">
            <fieldset>
                <div class="form__group field">
                    <input type="text" class="form__field" placeholder="Prenom" name="userNom" required="">
                    <label for="name" class="form__label">Prenom</label>
                </div>
                <div class="form__group field">
                    <input type="email" class="form__field" placeholder="email" name="userEmail" required="">
                    <label for="email" class="form__label">Email</label>
                </div>
                <div class="form__group field">
                    <input type="password" class="form__field" placeholder="mdp" name="userMdp" required="">
                    <label for="mdp" class="form__label">mots de passe</label>
                </div>
                <div class="buttonCentrer">
                    <label for="envoie">
                        <button class="envoyer">
                            <div class="svg-wrapper-1">
                                <div class="svg-wrapper">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    width="24"
                                    height="24"
                                >
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path
                                    fill="currentColor"
                                    d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                                    ></path>
                                </svg>
                                </div>
                            </div>
                            <span>Envoyer</span>
                        </button>
                    </label>
                    <input type="submit" id="envoie" name="envoie" class="inviEnv">
                </div>
            </fieldset>
        </form> 
        <div class="redgisterBut">
            <a href="/register">
                <button class="cta">
                <span class="hover-underline-animation"> S'enregistrer </span>
                <svg
                    id="arrow-horizontal"
                    xmlns="http://www.w3.org/2000/svg"
                    width="30"
                    height="10"
                    viewBox="0 0 46 16"
                >
                    <path
                    id="Path_10"
                    data-name="Path 10"
                    d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                    transform="translate(30)"
                    ></path>
                </svg>
                </button>
            </a>
        </div>
    </div>
</div>