<template>
    <header class="v-page-header">
        <div class="v-page-meta">
            <h1 class="v-page-title">{{ title }}</h1>
            <p class="v-page-description">{{ description }}</p>
        </div>
        <div class="v-action-button">
            <slot />
        </div>
    </header>
</template>

<script>
export default {
    name: "VHeader",
    props: [ 'title', 'description' ]
}
</script>

