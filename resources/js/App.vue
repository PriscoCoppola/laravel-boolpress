<template>
    <div>
        <Header />

        <main>
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
import Header from "./components/Header.vue";

export default {
    name: "App",
    components: {
        Header
    }
};
</script>

<style lang="scss">
@import "../sass/_utilities";
body {
    font-family: sans-serif;
}

.active-page {
    background-color: blue;
}

.active {
    color: red;
}
</style>
