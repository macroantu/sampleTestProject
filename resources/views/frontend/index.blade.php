</html>
<!doctype html>
<html lang="en">
@include('frontend.layouts.partials.header')
<body>
    <!-- -------------------- main-page -------------------- -->
    <div id="main-page">
        @include('frontend.layouts.partials.hamburger_menu')
        @include('frontend.layouts.partials.nav')
        <div class="content_wrapper">
            <!-- ---------------------- start profile page ---------------------- -->
            <div class="profile_page">
                <div class="profile_page_container">
                    <div class="content">
                        <!-- ------------------- addToXanta -------------------- -->
                        <div></div>
                        <!-- ------------------- start get started -------------------- -->
                        <div class="get_started_container">
                            @include('frontend.layouts.partials.sidebar')
                            <div class="line"></div>
                            <div class="content">
                                @yield('content')
                                <!-- end get started -->
                            </div>
                        </div>
                    </div>
                    <!-- --------------------- - end profile page ---------------------- -->
                    <!-- ------------------ start models ------------------- -->
                    <div class="model edit_wishlist_name_model ">
                        <div class="wrapper" style="margin-bottom:0">
                            <div class="model_header">
                                <h2><span>Edit Wishlist Collection Name</span> </h2>
                                <div class="close_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="model_content">
                                <form>
                                    <div class="input-wrapper">
                                        <div class="input-element">
                                            <input type="text" id="wishlist_collection_name_edit">
                                            <span class="label" style="transform-origin: left center; top: 50%; transform: scale(1) translateY(-50%); color: rgb(124, 124, 124);">New Collection Name</span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="buttons">
                                <button type="button" class="cancel">Cancel</button>
                                <button type="button" class="fun_btn edit_whishlist_btn active">
                                    <span>Confirm edit</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="model delete_wishlist_model ">
                        <div class="wrapper" style="margin-bottom:0">
                            <div class="model_header">
                                <h2><span>Delete a wishlist</span> </h2>
                                <div class="close_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="model_content">
                                Are you sure want to delete this wishlist?
                            </div>
                            <div class="buttons">
                                <button type="button" class="cancel">Cancel</button>
                                <button type="button" class="fun_btn delete_whishlist_btn active">
                                    <span>Done</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="model delete_wishlist_item_model ">
                        <div class="wrapper" style="margin-bottom:0">
                            <div class="model_header">
                                <h2><span>Delete a wishlist item</span> </h2>
                                <div class="close_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="model_content">
                                Are you sure want to delete this wishlist item? 
                            </div>
                            <div class="buttons">
                                <button type="button" class="cancel">Cancel</button>
                                <button type="button" class="fun_btn delete_whishlist_item_btn active">
                                    <span>Done</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="model add_wishlist_model  ">
                        <div class="wrapper" style="margin-bottom:0">
                            <div class="model_header">
                                <h2><span>Add a new wishlist</span> </h2>
                                <div class="close_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"></path>
                                    </svg>
                                </div>
                            </div>
                            <form method="post" action="{{route('wishlist.add')}}">
                                <div class="model_content">
                                    @csrf
                                    <div class="input-wrapper">
                                        <div class="input-element">
                                            <input type="text" name="name" id="wishlist_collection_name">
                                            <span class="label" style="transform-origin: left center; top: 50%; transform: scale(1) translateY(-50%); color: rgb(124, 124, 124);">Write your wishlist name</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <button type="button" class="cancel">Cancel</button>
                                    <button type="submit" class="fun_btn add_whishlist_btn active">
                                        <span>Confirm</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="model add_wishlist_model ">
                        <div class="wrapper" style="margin-bottom:0">
                            <div class="model_header">
                                <h2><span>Add a new wishlist</span> </h2>
                                <div class="close_icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                        <path d="M23.954 21.03l-9.184-9.095 9.092-9.174-2.832-2.807-9.09 9.179-9.176-9.088-2.81 2.81 9.186 9.105-9.095 9.184 2.81 2.81 9.112-9.192 9.18 9.1z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="model_content">
                                <div class="input_wrapper">
                                    <label for="wishlist_name">Wishlist name:</label>
                                    <input required="" name="" id="wishlist_name" cols="50" rows="6" placeholder="Write Your Wishlist Name">
                                </div>
                            </div>
                            <div class="buttons">
                                <button type="button" class="cancel">Cancel</button>
                                <button type="button" class="fun_btn add_whishlist_btn_NA active">
                                    <span>Add</span></button>
                            </div>
                        </div>
                    </div>
                    <!-- ------------------- end models -------------------- -->
                    @include('frontend.layouts.partials.footer')
                </div>
                <!-- --------------------- scripts --------------------- -->
                <script src="{{ asset('js/hamburger-menu.js') }}"></script>
                <script src="{{ asset('js/input-anim.js') }}"></script>
                <!-- scroll reveal scripts-->
                <script>
                    const menu2Icon = document.querySelector('.profile .menu');
                    const menu2 = document.querySelector('.menu2');
                    menu2Icon.addEventListener('click', (e) => {
                        menu2.classList.toggle('active');
                    })

                </script>
                <script src="{{ asset('js/script.js') }}"></script>
                <script src="{{ asset('js/input-anim.js') }}"></script>
                <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <script>
                    AOS.init();

                </script>
                <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
         
</body>
</html>
