<div class="title">Integração CSS</div>
<h1>
    <?php
        echo 'Olá ';
        echo '<small>';
        echo 'Mundo!';
        echo '</small>';
    ?>
</h1>

<?= "<div>Outra forma de fazer</div>"?>
<br>
<div center><button><?= "pog" ?></button></div>

<style>
    button {
        padding: 5px <?= 2 * 10 ?>px;
        background-color: #4286f4;
        color: #eee;
        font-weight: bold;
        cursor: pointer;
        border-radius: .2rem
    }

    [center] {
        text-align: center;
    }
</style>