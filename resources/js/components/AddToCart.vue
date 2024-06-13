<template>
    <div class="card-text">
        <button v-on:click.prevent="addToCart" class="btn btn-primary text-white" type="submit">
            Ajouter au panier
        </button>
    </div>
</template>

<script setup>
    const addToCart = () => {
        console.log("added");
    }
</script>
