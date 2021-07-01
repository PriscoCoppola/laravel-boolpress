<template>
    <div>
        Boolpress

        <ul>
            <li>
                <router-link :to="{ name: 'home' }">Home</router-link>
            </li>
            <li>
                <router-link :to="{ name: 'about' }">About</router-link>
            </li>
            <li>
                <router-link :to="{ name: 'blog' }">Blog</router-link>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "Header"
};
</script>

<style lang="scss" scoped></style>
