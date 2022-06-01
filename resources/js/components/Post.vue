<template>
    <div class="w-50 d-flex align-items-center flex-column pt-5 pb-2 border-bottom border-secondary">
        <h2 class="mb-3">{{ post.user.name }}</h2>
        <!-- <a href="{{ route('guest-post', $post) }}"> -->
            <img class="mb-4" :src="post.image_source" alt="post image">
        <!-- </a> -->
        <div class="my-content-wrapper clearfix">
            <h3>{{ post.title }}</h3>
            <p>{{ post.content }}</p>
            <ul class="float-right">
                <!-- @foreach ($post->categories as $category)
                    <li class="d-inline ml-3 " style="color:{{$category->color}}">{{ $category->name }}</li>                            
                @endforeach -->
            </ul>
        </div>
    </div>
</template>


<script>
export default {
    name : "Post",
    props:['post'],
}
</script>
<style>

</style>