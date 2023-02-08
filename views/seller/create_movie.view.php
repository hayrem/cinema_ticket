<?php
require "../partials/head.php";
?>
<div class="app-container">
    <div class="sidebar">
        <div class="sidebar-header">
            <div class="app-icon">

            </div>
        </div>
        <ul class="sidebar-list">
            <li class="sidebar-list-item ">
                <a href="home.view.seller.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                    <span>Movie list</span>
                </a>
            </li>
            <li class="sidebar-list-item ">
                <a href="setting_movie.view.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                        <line x1="3" y1="6" x2="21" y2="6" />
                        <path d="M16 10a4 4 0 0 1-8 0" />
                    </svg>
                    <span>Theater sitting</span>
                </a>
            </li>
            <li class="sidebar-list-item active">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                        <line x1="3" y1="6" x2="21" y2="6" />
                        <path d="M16 10a4 4 0 0 1-8 0" />
                    </svg>
                    <span>Add new movie</span>
                </a>
            </li>
        </ul>
    </div>


    <div class="app-content">
        <div class="app-content-actions">
            <input class="search-bar" placeholder="Search..." type="text">
        </div>
        <div class="products-area-wrapper tableView">
            <div class="products-header">
                <h3>Add new movie</h3>
            </div>
        </div>

        <!--  -->
        <div class="form-createmovie p-4">
            <form class="bg-white  p-4 shadow-lg " style="width: 90%;border-radius:10px;" method="post">
                <div class="content" style="display: flex; justify-content:space-between">
                    <div class="" style="width: 46%;">    
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Title of movie</label>
                            <input type="text"  name='title' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label" >Genre</label>
                            <input type="text" name="genre" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Country</label>
                            <input type="text" name="country" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Duration</label>
                            <input type="text" name="duration" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Language</label>
                            <input type="text" name="language" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Upload poster</label>
                            <input type="file" name="image" class="form-control form-control-lg"  id="formFileLg" >
                        </div>
                    </div>

                    <div class="" style="width: 46%;">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Release Date</label>
                            <input type="year" name="released" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Date show</label>
                            <input type="text" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Time start</label>
                            <input type="text" name="time_start" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div> 
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Time end</label>
                            <input type="text" name="time_end" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div> 
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="5" col="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Upload trailer</label>
                            <input type="file" name="trailer" class="form-control form-control-lg" id="formFileLg" >
                        </div>
                    </div>
                </div> 
                <div class="btn" style="display: flex; justify-content:center; gap:20px">
                    <button type="submit" name="submit" class="btn btn-primary w-100">Create</button>
                </div>
            </form>
        </div>

        </body>

        </html>