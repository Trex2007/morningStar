<div class="profile flex">
    <?php if ($_SESSION["user"]->userPerm === "own") : ?>
        <div class="reservations">
            <div class="flex space">
                <h1>Utilisateurs</h1>
                <form action="" method="POST">
                    <button class="BtnOrange BtnLogout ADMINMODEBUTTON" id="decoo" value="decoo" name="decoo">
                        <div class="sign">
                            <svg viewBox="0 0 512 512">
                                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                            </svg>
                        </div>
                        <div class="text">Logout</div>
                    </button>
                </form>
            </div>
            <div class="userCote flex">
                <?php foreach ($users as $user) : ?>
                    <div class="userCase">
                        <p>PRENOM : <?= $user->userNom ?></p>
                        <p>NOM : <?= $user->userSurnom ?></p>
                        <p>EMAIL : <?= $user->userEmail ?></p>
                        <p>MDP : <?= $user->userMdp ?></p>
                        <p>TEL : <?= $user->userTel ?></p>
                        <p>ROLE : <?= $user->userPerm ?></p>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    <?php else : ?>
        <div class="editProfile">
            <form action="" method="POST">
                <div class="editOne">
                    <h1>Bonjour <?= $_SESSION['user']->userNom ?>, voici votre profil.</h1>
                    <div class="flex inputsEdit">
                        <label for="Prenom" class="Prenom label">Prenom :</label>
                        <input type="text" placeholder="Prénom" value="<?= $_SESSION['user']->userNom ?>" id="Prenom" name="userNom" class="editProfInput" required>
                    </div>
                    <div class="flex inputsEdit">
                        <label for="Nom" class="Nom label">Nom :</label>
                        <input type="text" placeholder="Nom de famille" value="<?= $_SESSION['user']->userSurnom ?>" id="Nom" name="userSurnom" class="editProfInput" required>
                    </div>
                    <div class="flex inputsEdit">
                        <label for="mdp" class="mdp label">MDP :</label>
                        <input type="text" placeholder="Password" value="<?= $_SESSION['user']->userMdp ?>" id="mdp" name="userMdp" class="editProfInput" required>
                    </div>
                    <div class="flex inputsEdit">
                        <label for="GSM" class="GSM label">Tel :</label>
                        <input type="text" placeholder="numéro de GSM" value="<?= $_SESSION['user']->userTel ?>" id="GSM" name="userTel" class="editProfInput" required>
                    </div>
                </div>
                <div class="flex BUTPUB">
                    <div class="decoSupBut flex">
                        <button class="BtnVert BtnLogout" id="edit-button" value="Valider" name="edit-button">
                            <div class="sign">
                                <svg viewBox="0 0 512 512">
                                    <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                </svg>
                            </div>
                            <div class="text">Edit</div>
                        </button>
                        <button class="BtnOrange BtnLogout" id="decoo" value="decoo" name="decoo">
                            <div class="sign">
                                <svg viewBox="0 0 512 512">
                                    <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path>
                                </svg>
                            </div>
                            <div class="text">Logout</div>
                        </button>
                        <button class="BtnRouge BtnLogout" id="suprr" value="suprr" name="suprr">
                            <div class="sign">
                                <svg viewBox="0 0 512 512">
                                    <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                </svg>
                            </div>
                            <div class="text">Delete</div>
                        </button>
                    </div>
                    <div class="decoSupPub">
                        <img src="assets/images/PubSecuRoutier.png" alt="publicité sécurité routière">
                    </div>
                </div>
            </div>
        </form>
    <?php endif ?>


    <?php if ($_SESSION["user"]->userPerm === "own") : ?>
        <div class="reservations">
            <h1>Reservations</h1>
            <div class="reservationCote flex">
                <?php foreach ($reservationsAll as $reservationAll) : ?>
                    <div class="reservationCase">
                        <h2>Reservation</h2>
                        <img src="assets/images/chambre.png" alt="photo de la  chambre">
                        <div class="flex">
                            <div class="listeCoche">
                                <p>Num Reserv</p>
                                <p>Date Debut</p>
                                <p>Date Fin</p>
                            </div>
                            <div class="listeDoubeCoche">
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                            </div>
                            <div class="listeCoche">
                                <p><?= $reservationAll->resID ?></p>
                                <p><?= date_format(date_create($reservationAll->resDateDeb), 'd/m/Y'); ?></p>
                                <p><?= date_format(date_create($reservationAll->resDateFin), 'd/m/Y'); ?></p>
                            </div>
                        </div>
                        <a href="voirReservation?resID=<?= $reservationAll->resID ?>" class="btn btn-page">
                            <button class="BtnOrange BtnLogout" id="edit-button" value="Valider" name="edit-button">
                                <div class="sign">
                                    <svg viewBox="0 0 512 512">
                                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                    </svg>
                                </div>
                                <div class="text">Edit</div>
                            </button>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    <?php else : ?>
        <div class="reservationsUsers">
            <h1>Reservations</h1>
            <div class="reservationCoteUsers flex">
                <?php foreach ($reservations as $reservation) : ?>
                    <div class="reservationCaseUsers">
                        <h2>Reservation</h2>
                        <img src="assets/images/chambre.png" alt="photo de la  chambre">
                        <div class="flex">
                            <div class="listeCoche">
                                <p>Num Reserv</p>
                                <p>Date Debut</p>
                                <p>Date Fin</p>
                            </div>
                            <div class="listeDoubeCoche">
                                <p>:</p>
                                <p>:</p>
                                <p>:</p>
                            </div>
                            <div class="listeCoche">
                                <p><?= $reservation->resID ?></p>
                                <p><?= date_format(date_create($reservation->resDateDeb), 'd/m/Y'); ?></p>
                                <p><?= date_format(date_create($reservation->resDateFin), 'd/m/Y'); ?></p>
                            </div>
                        </div>
                        <a href="voirReservation?resID=<?= $reservation->resID ?>" class="btn btn-page">
                            <button class="BtnOrange BtnLogout" id="edit-button" value="Valider" name="edit-button">
                                <div class="sign">
                                    <svg viewBox="0 0 512 512">
                                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                    </svg>
                                </div>
                                <div class="text">Edit</div>
                            </button>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    <?php endif ?>
</div>