@extends('frontend.index')

@section('content')




    <div class="get_started_section">
        <div class="get_started_section_columns">



            <div class="receive_gifts">
                <h3 class="title">Receive Gifts</h3>


                <div class="collections_tabs">
                    <p class="tab elfa_tab active">Elfa - Your Personal Shopper</p>
                    <p class="tab tips_tab">Wishlists</p>
                </div>

                <div class="receive_gifts_container">

                    <div class="recommendations">
                        <div class="recommendations_header">

                            <img src="images/Elfa2.png" alt="">

                            <div class="elfa_content">
                                <div class="elfa_content_header">
                                    <h3>Elfa </h3>

                                </div>


                            </div>

                            <div class="elfa_message" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300">

                                You can manage your Wishlists from here.🙂
                            </div>

                        </div>

                        <div class="wishlists">
                            <h4>Wishlsits</h4>


                            <div class="collections active_collections active">

                            <div class="collections_section">

                            @foreach ($wishlists as $index => $wishlist)

                                <!-- ------------------- collection -------------------- -->
                                <div data-id="{{ $wishlist->id }}" class="collection @if($index === 0) active default @else '' @endif">


                                    <img src="./images/efficiency.png" class="default_icon" />


                                    <div class="thumbnail">
                                        <div class="image">
                                            <img src="./images/wishlist.png" alt="">
                                        </div>
                                    </div>



                                    <div class="title">
                                        <h2>{{ $wishlist->name }} </h2>



                                    </div>

                                    <div class="menu_icon">

                                        <svg width="4" height="14" viewBox="0 0 4 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 2.87512C1.72805 2.87512 1.46221 2.79448 1.23609 2.64339C1.00997 2.49231 0.833737 2.27756 0.729666 2.02631C0.625596 1.77506 0.598366 1.4986 0.651421 1.23187C0.704475 0.96515 0.835432 0.720148 1.02773 0.527851C1.22003 0.335554 1.46503 0.204598 1.73175 0.151543C1.99848 0.0984882 2.27494 0.125718 2.52619 0.229788C2.77744 0.333859 2.99218 0.510096 3.14327 0.736214C3.29436 0.962331 3.375 1.22817 3.375 1.50012C3.375 1.8648 3.23013 2.21453 2.97227 2.47239C2.71441 2.73026 2.36467 2.87512 2 2.87512ZM3.375 12.5001C3.375 12.2282 3.29436 11.9623 3.14327 11.7362C2.99218 11.5101 2.77744 11.3339 2.52619 11.2298C2.27494 11.1257 1.99847 11.0985 1.73175 11.1515C1.46503 11.2046 1.22003 11.3356 1.02773 11.5279C0.835431 11.7201 0.704475 11.9651 0.65142 12.2319C0.598366 12.4986 0.625595 12.7751 0.729666 13.0263C0.833736 13.2776 1.00997 13.4923 1.23609 13.6434C1.46221 13.7945 1.72805 13.8751 2 13.8751C2.36467 13.8751 2.71441 13.7303 2.97227 13.4724C3.23013 13.2145 3.375 12.8648 3.375 12.5001ZM3.375 7.00012C3.375 6.72817 3.29436 6.46233 3.14327 6.23621C2.99218 6.0101 2.77744 5.83386 2.52619 5.72979C2.27494 5.62572 1.99847 5.59849 1.73175 5.65154C1.46503 5.7046 1.22003 5.83555 1.02773 6.02785C0.835432 6.22015 0.704475 6.46515 0.651421 6.73187C0.598366 6.9986 0.625595 7.27506 0.729666 7.52631C0.833736 7.77756 1.00997 7.9923 1.23609 8.14339C1.46221 8.29448 1.72805 8.37512 2 8.37512C2.36467 8.37512 2.71441 8.23026 2.97227 7.97239C3.23013 7.71453 3.375 7.36479 3.375 7.00012Z" fill="white"></path>
                                        </svg>

                                    </div>

                                    <div class="menu_list">
                                        <div class="item edit" data-id="{{ $wishlist->id }}" data-name="{{ $wishlist->name }}">


                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"></path>
                                            </svg>
                                            <p>Edit</p>
                                        </div>
                                        <div class="item delete" data-wishlist-id="{{ $wishlist->id }}">


                                            <svg width="24" height="24" viewBox="0 0 24 24">
                                                <g>
                                                    <path data-color="color-2" d="M22,3H15.53L14.969.757A1,1,0,0,0,14,0H10a1,1,0,0,0-.97.758L8.469,3H2A1,1,0,0,0,1,4V5A1,1,0,0,0,2,6H22a1,1,0,0,0,1-1V4A1,1,0,0,0,22,3Z" fill="#FFFFFF"></path>
                                                    <path d="M20,8H4V21a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3Z" fill="#FFFFFF"></path>
                                                </g>
                                            </svg>
                                            <p>Delete</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- ------------------- collection -------------------- -->
                                @endforeach
                                </div>
                           

                                <!-- ------------------- addWihlist -------------------- -->
                                <div class="add_wishlist">
                                    <svg width="45" height="45" viewBox="0 0 45 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.5 37.5V22.5M22.5 22.5V7.5M22.5 22.5H37.5M22.5 22.5H7.5" stroke="white" stroke-width="4" stroke-linecap="round"></path>
                                    </svg>


                                    <!-- ------------------- model here -------------------- -->


                                </div>

                            </div>

                        </div>

                        <div class="new_gifts">
                            <div class="new_gifts_header">
                                <div class="menu shapes">
                                    <div class="menu_title">
                                        <p>Shops</p>
                                        <svg width="8" height="6" viewBox="0 0 8 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.145917 0.895917C0.192363 0.849354 0.247538 0.812411 0.308284 0.787204C0.369029 0.761998 0.43415 0.749023 0.499917 0.749023C0.565685 0.749023 0.630806 0.761998 0.691551 0.787204C0.752296 0.812411 0.807472 0.849354 0.853917 0.895917L3.99992 4.04292L7.14592 0.895917C7.2398 0.80203 7.36714 0.749285 7.49992 0.749285C7.63269 0.749285 7.76003 0.80203 7.85392 0.895917C7.9478 0.989804 8.00055 1.11714 8.00055 1.24992C8.00055 1.38269 7.9478 1.51003 7.85392 1.60392L4.35392 5.10392C4.30747 5.15048 4.2523 5.18742 4.19155 5.21263C4.13081 5.23784 4.06568 5.25081 3.99992 5.25081C3.93415 5.25081 3.86903 5.23784 3.80828 5.21263C3.74754 5.18742 3.69236 5.15048 3.64592 5.10392L0.145917 1.60392C0.0993539 1.55747 0.0624112 1.5023 0.0372047 1.44155C0.0119983 1.38081 -0.000976562 1.31568 -0.000976562 1.24992C-0.000976562 1.18415 0.0119983 1.11903 0.0372047 1.05828C0.0624112 0.997538 0.0993539 0.942363 0.145917 0.895917Z" fill="#1C3149"></path>
                                        </svg>
                                    </div>

                                    <div class="list">
                                        <div>
                                            <input type="checkbox" id="All" name="shape" value="All" checked="">
                                            <p>All</p>
                                            <label for="All">All</label>
                                        </div>

                                        <div>
                                            <input type="checkbox" id="Amazon" name="shape" value="Amazon">
                                            <p>Amazon</p>
                                            <label for="Amazon">Amazon</label>
                                        </div>

                                        <div>
                                            <input type="checkbox" id="Epay" name="shape" value="Epay">
                                            <p>Epay</p>
                                            <label for="Epay">Epay</label>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Target" name="shape" value="Target">
                                            <label for="Target">Target</label>
                                            <p>Target</p>
                                        </div>
                                        <div>
                                            <input type="checkbox" id="Walmart" name="shape" value="Walmart">
                                            <label for="Walmart">Walmart</label>
                                            <p>Walmart</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="prices_filters">
                                    <div class="filter">
                                        Under $50
                                    </div>

                                    <div class="filter">
                                        $50 to $100
                                    </div>

                                    <div class="filter">$100+</div>

                                </div>

                                <div class="search">
                                    <div class="input_wrapper">
                                        <svg width="24" height="24" viewBox="0 0 24 24">
                                            <g>
                                                <polygon data-color="color-2" points="14 9 11 9 11 6 9 6 9 9 6 9 6 11 9 11 9 14 11 14 11 11 14 11 14 9" fill="#FFFFFF"></polygon>
                                                <path d="M10,19a9,9,0,1,1,9-9A9.011,9.011,0,0,1,10,19ZM10,3a7,7,0,1,0,7,7A7.008,7.008,0,0,0,10,3Z" fill="#FFFFFF"></path>
                                                <path data-color="color-2" d="M22.707,21.293l-4.256-4.256a10.982,10.982,0,0,1-1.414,1.414l4.256,4.256a1,1,0,0,0,1.414-1.414Z" fill="#FFFFFF"></path>
                                            </g>
                                        </svg> <input type="text" placeholder="Search">
                                    </div>
                                    <button>Search</button>
                                </div>

                            </div>
                            <div class="new_gifts_results"></div>



                        </div>
                    </div>


                    <div class="steps">
                        <h4>Wihslists</h4>
                        <div class="step first_step notCompleted">
                            <div class="step_header">

                                <div class="step_content">
                                    <h4>Add contacts and Invite people to your page</h4>
                                </div>

                                <div class="icon arrow_up active">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                    </svg>
                                </div>
                                <div class="icon arrow_down ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                    </svg>
                                </div>
                                <div class="icon completed_icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24">
                                        <g>
                                            <polygon points="9 21 1 13 4 10 9 15 21 3 24 6 9 21" fill="#FFFFFF"></polygon>
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="step_toggle">
                                <p>Text example goes here!</p>

                            </div>


                        </div>
                        <div class="line_separate_steps notCompleted"></div>

                        <div class="step notCompleted">
                            <div class="step_header">

                                <div class="step_content">
                                    <h4>Add your Xanta page to other social media accounts/h4&gt; </h4>
                                </div>

                                <div class="icon arrow_up active">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                    </svg>
                                </div>
                                <div class="icon arrow_down ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                    </svg>
                                </div>
                                <div class="icon completed_icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24">
                                        <g>
                                            <polygon points="9 21 1 13 4 10 9 15 21 3 24 6 9 21" fill="#FFFFFF"></polygon>
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="step_toggle">
                                <p>Text example goes here!</p>

                            </div>


                        </div>
                        <div class="line_separate_steps notCompleted"></div>

                        <div class="step notCompleted">
                            <div class="step_header">

                                <div class="step_content">
                                    <h4>Link to your Xanta page in your blogs and videos</h4>
                                </div>

                                <div class="icon arrow_up active">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                    </svg>
                                </div>
                                <div class="icon arrow_down ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                    </svg>
                                </div>
                                <div class="icon completed_icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24">
                                        <g>
                                            <polygon points="9 21 1 13 4 10 9 15 21 3 24 6 9 21" fill="#FFFFFF"></polygon>
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="step_toggle">
                                <p>Text example goes here!</p>

                            </div>


                        </div>
                        <div class="line_separate_steps notCompleted"></div>

                        <div class="step completed">
                            <div class="step_header">

                                <div class="step_content">
                                    <h4>Add contacts and Invite people to your page</h4>
                                </div>

                                <div class="icon arrow_up active">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                    </svg>
                                </div>
                                <div class="icon arrow_down ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                    </svg>
                                </div>
                                <div class="icon completed_icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24">
                                        <g>
                                            <polygon points="9 21 1 13 4 10 9 15 21 3 24 6 9 21" fill="#FFFFFF"></polygon>
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="step_toggle">
                                <p>Text example goes here!</p>

                            </div>


                        </div>
                        <div class="line_separate_steps notCompleted"></div>



                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection

