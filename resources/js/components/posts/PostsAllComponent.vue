<template> 
	<div class="container col-md-12">
    	<div class="row justify-content-center" v-for="post in posts">
            <div class="col-md-8">
               <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">{{post.title}}</h5>
                        <h6 class="card-subtitle">{{post.slug}}</h6>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{post.body}}</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text">{{post.user.name}}</p>
                    </div>
                </div> 
            </div>
    	</div>
	</div>
</template>
<script>
export default{

    data: function(){
        return{
            posts: [],
        };
    },

    mounted(){
        this.getPosts();
    },

    methods: {
        getPosts: function(){
            axios.get('/api/posts')
            .then(response => { 
                this.posts = response.data;
            })
            .catch(errors => {
                console.log(errors);
            });
        },
    }
}
</script>