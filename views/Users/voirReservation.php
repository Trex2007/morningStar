<div class="resPreview">
    <form action="" method="POST">
        <h1>Voici votre reservation</h1>
        <div class="flex">
            <div class="resPreviewMore">
                <h2>Informations generales</h1>
                    <h3>Voici l'id de votre reservations :</h3>
                    <p class="resIDClass"><?= $reservation->resID ?></p>

                    <h3>Voici la date de dEpart de votre reservation :</h3>
                    <input type="date" value="<?= $reservation->resDateDeb ?>" placeholder="deb" id="resDateDeb" name="resDateDeb" class="editProfInput chbrres" required>
                    <h3>Voici la date de fin de votre reservation :</h3>
                    <input type="date" value="<?= $reservation->resDateFin ?>" placeholder="deb" id="resDateDeb" name="resDateFin" class="editProfInput chbrres" required>

            </div>
            <div class="resPreviewMore">
                <h2>Informations complementaire</h2>
                <h3>Options de la reservations :</h3>
                <select name="options[]" id="options-select" class="reservationSelect reservationSelectEdit chbrres" multiple>
                    <?php foreach ($options as $option) : ?>
                        <option value="<?= $option->optID ?>" <?php if (isset($optionsActiveReservation)) : ?><?php foreach ($optionsActiveReservation as $optionReservation) : ?> <?php if ($option->optID === $optionReservation->optID) : ?>selected<?php endif ?> <?php endforeach ?><?php endif ?>><?= $option->optDesc ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="flex">
            <button class="BtnVert BtnLogout reservCote" id="edit-button-Res" value="Valider" name="edit-button-Res">
                <div class="sign">
                    <svg viewBox="0 0 512 512">
                        <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                    </svg>
                </div>
                <div class="text">Edit</div>
            </button>

            <button class="BtnRouge BtnLogout reservCote" id="suprr-Res" value="suprr" name="suprr-Res">
                <div class="sign">
                    <svg viewBox="0 0 512 512">
                        <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                    </svg>
                </div>
                <div class="text">Delete</div>
            </button>
        </div>
    </form>
</div>