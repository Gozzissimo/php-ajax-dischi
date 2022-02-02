<?php
    include __DIR__ . '/../server/db.php';
?>

<template>
    <li class="card flex">
        <div class="card-img">
            <img :src="image" :alt="imageAlt">
        </div>
        <div class="card-txt text-center">
            <h2 class="album">{{ heading2 }}</h2>
            <h3 class="artist">{{ heading3 }}</h3>
            <h4 class="year">{{ heading4 }}</h4>
        </div>
    </li>
</template>