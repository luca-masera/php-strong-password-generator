<?php
$symbols = '!?&%$<>^+-*/()[]{}@#_=';
$letters = 'qwertyuiopasdfghjklzxcvbnm';
$upLetters = strtoupper($letters);
$numbers = '0123456789';


if (isset($_GET['passwordLength'])) {
    $passwordLength = $_GET['passwordLength'];
    $newPassword = '';
    while (strlen($newPassword) < $passwordLength) {
        $valori = $symbols . $letters . $upLetters . $numbers;
        $randomCharacter = $valori[rand(0, strlen($valori) - 1)];

        if (!strpos($newPassword, $randomCharacter)) {
            $newPassword = $valori;
        }

    }
    return $newPassword;
}

?>


<main class="container pt-5 ">
    <div>
        <?php
        echo $newPassword;

        ?>
    </div>
    <div>
        <form action="main.php" methods="GET">
            <div class="bg-white ps-5 py-5">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Lunghezza password:</label>
                    </div>
                    <div class="col-auto">
                        <input type="password" id="inputPassword6" class="form-control"
                            aria-describedby="passwordHelpInline" min='5' max='15' name="passwordLength">

                    </div>
                </div>
                <div class="row g-3 align-items-center ">
                    <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Consenti ripetizioni di uno o più
                            caratteri:</label>
                    </div>
                    <div class="pt-5 col-auto ">
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Si
                            </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                No
                            </label>
                        </div>

                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Lettere
                            </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Numeri
                            </label>
                        </div>
                        <div class="form-check ">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Simboli
                            </label>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary">Invia</button>
                <button type="button" class="btn btn-secondary">Annulla</button>
            </div>

        </form>
    </div>

</main>