<div class="flex profile">
    <div class="editProfile">
        <form action="/updateProfil" method="POST">
            <h2>Bonjour <?=$_SESSION['user']->userNom?>, voici votre profil.</h2>

            <div class="flex inputsEdit">
                <label for="Prenom" class="Prenom label">Prenom :</label>
                <input type="text" placeholder="<?=$_SESSION['user']->userNom?>" id="Prenom" name="userNom" required="required">
            </div>
            <div class="flex inputsEdit">
                <label for="Nom" class="Nom label">Nom :</label>
                <input type="text" placeholder="<?=$_SESSION['user']->userSurnom?>" id="Nom" name="userSurnom" required="required">
            </div>
            <div class="flex inputsEdit">
                <label for="mdp" class="mdp label">MDP :</label>
                <input type="text" placeholder="@" id="mdp" name="userMdp" required="required">
            </div>
            <div class="flex inputsEdit">
                <label for="GSM" class="GSM label">Tel :</label>
                <input type="text" placeholder="<?=$_SESSION['user']->userTel?>" id="GSM" name="userTel" required="required">
            </div>
            

            <div class="buttonsDecoEdit flex">
                <a href="/deconnexion">
                    <button class="BtnLogout">
                        <div class="sign">
                            <svg viewBox="0 0 512 512">
                            <path
                                d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"
                            ></path>
                            </svg>
                        </div>

                        <div class="text">Logout</div>
                    </button>
                </a>
                <button class="edit-button">
                    <svg class="edit-svgIcon" viewBox="0 0 512 512">
                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                    </svg>
                </button>
            </div>
        </form>   
    </div>
    <div class="reservations">

    </div>
</div>
