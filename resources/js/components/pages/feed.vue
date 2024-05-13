<template>
<div>
    <Header />
            <!-- start body -->
            <div class="container-fluid my-5">
                <div class="row">
                   
                    <div class="col-lg-6 mb-4 mb-lg-0 mx-auto" v-if="posts.length > 0">
                       
                        <div class="card mt-4 mb-4 p-2" v-for="post in posts">
                            <div class="card-header">
                                <a href="#">
                                    <img :src="url+'assets/images/feed_1.jpg'" alt="" class="feed_img rounded-circle">
                                </a>
                                <span class=" fs-5 ms-3">Ciaz Exchange</span>
                                <a href="#" class="float-end">
                                    <i class="ri-more-2-line fs-5 "></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title mb-0">{{ post.title }}</h3>
                                <p class="card-text">{{ post.description }}.</p>
                                <div class="text-center"><a href="#"><img :src="url+'posts/'+post.image" alt=""
                                            class="w-100"></a></div>
                            </div>
                            
                        </div>
                        
                    </div>
                    <!-- <div class="col-lg-3 mb-4 mb-lg-0">
                        <div class=" rounded-2 mb-4 p-3 shadow">
                            <h4>Suggested Creators</h4>
                            <div class="d-flex align-items-center mt-4 mb-3 justify-content-between">
                                <a href="#"><img src="assets/images/feed_1.jpg" alt=""
                                        class="feed_img rounded-circle"></a>
                                <a href="#">
                                    <p class="mb-0" style="font-size: 13px;">DigitalJoseph <br> Blockchain Enthusiast...
                                    </p>
                                </a>
                                <button class="btn btn-warning">Follow</button>
                            </div>
                            <div class="d-flex align-items-center mb-3 justify-content-between">
                                <a href="#"><img src="assets/images/feed_1.jpg" alt=""
                                        class="feed_img rounded-circle"></a>
                                <a href="#">
                                    <p class="mb-0" style="font-size: 13px;">DigitalJoseph <br> Blockchain Enthusiast...
                                    </p>
                                </a>
                                <button class="btn btn-warning">Follow</button>
                            </div>
                            <div class="d-flex align-items-center mb-3 justify-content-between">
                                <a href="#"><img src="assets/images/feed_1.jpg" alt=""
                                        class="feed_img rounded-circle"></a>
                                <a href="#">
                                    <p class="mb-0" style="font-size: 13px;">DigitalJoseph <br> Blockchain Enthusiast...
                                    </p>
                                </a>
                                <button class="btn btn-warning">Follow</button>
                            </div>
                            <div class="d-flex align-items-center mb-3 justify-content-between">
                                <a href="#"><img src="assets/images/feed_1.jpg" alt=""
                                        class="feed_img rounded-circle"></a>
                                <a href="#">
                                    <p class="mb-0" style="font-size: 13px;">DigitalJoseph <br> Blockchain Enthusiast...
                                    </p>
                                </a>
                                <button class="btn btn-warning">Follow</button>
                            </div>
                            <div class="d-flex align-items-center mb-3 justify-content-between">
                                <a href="#"><img src="assets/images/feed_1.jpg" alt=""
                                        class="feed_img rounded-circle"></a>
                                <a href="#">
                                    <p class="mb-0" style="font-size: 13px;">DigitalJoseph <br> Blockchain Enthusiast...
                                    </p>
                                </a>
                                <button class="btn btn-warning">Follow</button>
                            </div>
                        </div>
                        <div class=" rounded-2 p-3 shadow">
                            <h4>Suggested Creators</h4>
                            <div class="d-flex align-items-center mt-4 mb-3 justify-content-between">
                                <a href="#"><img src="assets/images/feed_1.jpg" alt=""
                                        class="feed_img rounded-circle"></a>
                                <a href="#">
                                    <p class="mb-0" style="font-size: 13px;">DigitalJoseph <br> Blockchain Enthusiast...
                                    </p>
                                </a>
                                <button class="btn btn-warning">Follow</button>
                            </div>
                            <div class="d-flex align-items-center mb-3 justify-content-between">
                                <a href="#"><img src="assets/images/feed_1.jpg" alt=""
                                        class="feed_img rounded-circle"></a>
                                <a href="#">
                                    <p class="mb-0" style="font-size: 13px;">DigitalJoseph <br> Blockchain Enthusiast...
                                    </p>
                                </a>
                                <button class="btn btn-warning">Follow</button>
                            </div>
                            <div class="d-flex align-items-center mb-3 justify-content-between">
                                <a href="#"><img src="assets/images/feed_1.jpg" alt=""
                                        class="feed_img rounded-circle"></a>
                                <a href="#">
                                    <p class="mb-0" style="font-size: 13px;">DigitalJoseph <br> Blockchain Enthusiast...
                                    </p>
                                </a>
                                <button class="btn btn-warning">Follow</button>
                            </div>
                            <div class="d-flex align-items-center mb-3 justify-content-between">
                                <a href="#"><img src="assets/images/feed_1.jpg" alt=""
                                        class="feed_img rounded-circle"></a>
                                <a href="#">
                                    <p class="mb-0" style="font-size: 13px;">DigitalJoseph <br> Blockchain Enthusiast...
                                    </p>
                                </a>
                                <button class="btn btn-warning">Follow</button>
                            </div>
                            <div class="d-flex align-items-center mb-3 justify-content-between">
                                <a href="#"><img src="assets/images/feed_1.jpg" alt=""
                                        class="feed_img rounded-circle"></a>
                                <a href="#">
                                    <p class="mb-0" style="font-size: 13px;">DigitalJoseph <br> Blockchain Enthusiast...
                                    </p>
                                </a>
                                <button class="btn btn-warning">Follow</button>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- end body -->
      </div>
</template>

<script>


export default {
   name: "posts",
   data() {
       return {
           url: process.env.mix_api_url,
           posts:[],
           
       };
   },
   created() {
       this.getPosts();
   },

   methods: {
       moment(date) {
           return moment(date);
       },
       getPosts(){
           axios.get(this.url+"api/posts").then(res=>{
            console.log(res);
               this.posts = res.data.posts;
           }).catch(err=>{
               console.log(err);
           });
       }
   },
};
</script>

<style scoped>
 .nav_link_2 {
        font-size: 14px !important;
    }
    .nav-item mx-1 {
        list-style-type: none !important;
    }

    .nav-link {
        font-size: 18px;
    }

    .nav-link:hover {
        color: #e9a30e !important;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #fff;
        z-index: 1;
    }

    .dropdown-menu a:hover {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .grid_nav {
        width: 800px !important;
        padding: 10px 20px !important;
    }

    .nav_hover:hover {
        background-color: #d8d5d5ea;
        border-radius: 10px;
    }

    .right_arrow_nav {
        display: none !important;
    }

    .nav_hover:hover .right_arrow_nav {
        display: block !important;
    }

    .feed_img {
        width: 50px;
    }

    @media screen and (max-width: 992px) {
        .grid_nav {
            width: 100% !important;
        }
        .grid_nav_transform {
            width: 100% !important;
            transform: translate(0px, 0px) !important;
        }
    }
</style>