<template>
    <div class="container">
        <h1>{{ this.post.title }}</h1>

        <div>{{ post.content }}</div>
    </div>
</template>

<script>
export default {
    name: "PostDetail",
    data() {
        return {
            post: null
        };
    },
    created() {
        this.getPostDetail();
    },
    methods: {
        getPostDetail() {
            axios
                .get(
                    `http://127.0.0.1:8000/api/posts/${this.$route.params.slug}`
                )
                .then(res => {
                    console.log(res.data);
                    this.post = res.data;
                })
                .catch(err => {
                    console.log(err);
                });
        }
    }
};
</script>

<style></style>
