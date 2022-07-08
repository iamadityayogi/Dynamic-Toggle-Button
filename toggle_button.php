<style>
    .tgl {
        display: none;
    }

    .tgl+.tgl-btn {
        outline: 0;
        display: block;
        width: calc(100% - 30px);
        height: 2em;
        position: relative;
        cursor: pointer;
        user-select: none;
        align-items: center;
        margin: 0 auto;
    }

    .tgl+.tgl-btn:after,
    .tgl+.tgl-btn:before {
        position: relative;
        display: block;
        content: "";
        width: 50%;
        height: 100%;
    }

    .tgl-flip+.tgl-btn {
        padding: 2px;
        transition: all 0.2s ease;
        font-family: sans-serif;
        perspective: 100px;
    }

    .tgl-flip+.tgl-btn:after,
    .tgl-flip+.tgl-btn:before {
        display: inline-block;
        transition: all 0.4s ease;
        width: 100%;
        text-align: center;
        position: absolute;
        line-height: 2em;
        font-weight: bold;
        color: #fff;
        position: absolute;
        top: 0;
        left: 0;
        backface-visibility: hidden;
        border-radius: 4px;
    }

    .tgl-flip+.tgl-btn:after {
        content: attr(data-tg-on);
        background: #02C66F;
        transform: rotateY(-180deg);
    }

    .tgl-flip+.tgl-btn:before {
        background: #FF3A19;
        content: attr(data-tg-off);
    }

    .tgl-flip+.tgl-btn:active:before {
        transform: rotateY(-20deg);
    }

    .tgl-flip:checked+.tgl-btn:before {
        transform: rotateY(180deg);
    }

    .tgl-flip:checked+.tgl-btn:after {
        transform: rotateY(0);
        left: 0;
        background: #7FC6A6;
    }

    .tgl-flip:checked+.tgl-btn:active:after {
        transform: rotateY(20deg);
    }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="">
        <?php
        $x=5;
        for($i=0;$i<$x;$i++){
        ?>
    <input class="tgl tgl-flip" id="cb5<?php echo $i; ?>" type="checkbox" />
    <label style="max-width: 300px;" class="tgl-btn" data-tg-off="Unpublished" data-tg-on="Published!" for="cb5<?php echo $i; ?>"></label><br>
    <?php } ?>
</div>
</body>
</html>