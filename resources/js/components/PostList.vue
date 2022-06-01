<template>
<div>
    <div class="my-post-container d-flex align-items-center flex-column">

        <Post v-for="(post, index) in posts" :key="index + 'post'" :post="post" />
        <nav >
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
</template>

<script>

import Post from "./Post.vue"

export default {
    name: "PostList",
    components: {
        Post,
    },
    data: function() {
        return {
            posts : [],
            pagination : {},
        }
    },
    methods: {
        getPosts() {
            axios.get("http://localhost:8000/api/posts")
                .then((result)=>{
                    this.posts = result.data.data;
                    const {current_page , last_page } = result.data;
                    this.pagination = { currentPage : current_page, lastPage : last_page};
                    console.log(this.posts);
                }).catch((error)=>{
                    console.warn(error);
                });
        },
    },
    created() {
        this.getPosts();
    }
}
</script>

<style>

</style>