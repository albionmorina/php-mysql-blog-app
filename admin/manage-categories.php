<?php 
    include 'partials/header.php'
?>

    <section class="dashboard">
        <div class="container dashboard__container">
            <button id="show__sidebar-btn" class="sidebar__toggle">
                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="30px" height="30px" viewBox="0 0 101 101" id="right">
                    <path d="M50.5 16.4c-18.8 0-34.1 15.3-34.1 34.1s15.3 34.1 34.1 34.1 34.1-15.3 34.1-34.1-15.3-34.1-34.1-34.1zm0 63.4c-16.1 0-29.3-13.1-29.3-29.3s13.1-29.3 29.3-29.3 29.3 13.1 29.3 29.3-13.2 29.3-29.3 29.3z"></path>
                    <path d="M46 33.1c-.9-.9-2.5-.9-3.4 0s-.9 2.5 0 3.4l13.8 13.8-13.7 13.8c-.9.9-.9 2.5 0 3.4.5.5 1.1.7 1.7.7.6 0 1.2-.2 1.7-.7L61.5 52c.5-.5.7-1.1.7-1.7s-.3-1.2-.7-1.7L46 33.1z"></path>
                  </svg>
            </button>
            <button id="hide__sidebar-btn" class="sidebar__toggle">
                <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="30px" height="30px" viewBox="0 0 101 101" id="left">
                    <path d="M50.5 16.4c-18.8 0-34.1 15.3-34.1 34.1s15.3 34.1 34.1 34.1 34.1-15.3 34.1-34.1-15.3-34.1-34.1-34.1zm0 63.4c-16.1 0-29.3-13.1-29.3-29.3s13.1-29.3 29.3-29.3 29.3 13.1 29.3 29.3-13.2 29.3-29.3 29.3z"></path>
                    <path d="M57.1 33.1c-.9-.9-2.5-.9-3.4 0L38.2 48.6c-.5.5-.7 1.1-.7 1.7s.3 1.2.7 1.7l15.5 15.5c.5.5 1.1.7 1.7.7s1.2-.2 1.7-.7c.9-.9.9-2.5 0-3.4L43.3 50.3l13.8-13.8c1-.9 1-2.4 0-3.4z"></path>
                </svg>
            </button>
            <aside>
                <ul>
                    <li>
                        <a href="add-post.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 64 64"
                                id="pencil">
                                <path fill="#222"
                                    d="M8.69 59.53a4.21 4.21 0 0 1-4.17-4.88l1.77-11.18a4.14 4.14 0 0 1 1.18-2.32l34.8-34.8a6.45 6.45 0 0 1 9.1 0l6.28 6.28a6.45 6.45 0 0 1 0 9.1l-34.8 34.8a4.14 4.14 0 0 1-2.32 1.18L9.35 59.48a4.89 4.89 0 0 1-.66.05Zm11.52-3.79ZM46.82 8.47a2.44 2.44 0 0 0-1.73.71L10.3 44a.17.17 0 0 0-.06.12L8.47 55.28a.22.22 0 0 0 .25.25l11.18-1.77a.17.17 0 0 0 .1-.06l34.8-34.79a2.44 2.44 0 0 0 0-3.45l-6.26-6.28a2.41 2.41 0 0 0-1.72-.71Z">
                                </path>
                                <path fill="#222"
                                    d="M53.88 24.67a2 2 0 0 1-1.42-.58L39.91 11.54a2 2 0 0 1 2.83-2.83l12.55 12.55a2 2 0 0 1 0 2.83 2 2 0 0 1-1.41.58zM21.71 56.84a2 2 0 0 1-1.41-.58L7.74 43.7a2 2 0 0 1 2.83-2.82l12.56 12.55a2 2 0 0 1-1.42 3.41z">
                                </path>
                                <path fill="#222"
                                    d="M15.43 50.57A2 2 0 0 1 14 47.15L46.19 15A2 2 0 1 1 49 17.81L16.85 50a2 2 0 0 1-1.42.57Z">
                                </path>
                            </svg>
                            <h5>Add Post</h5>
                        </a>
                    </li>
                    <li>
                        <a href="index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 25 25"
                                id="mail">
                                <g>
                                    <path d="M23,20H2V5H23ZM3,19H22V6H3Z"></path>
                                    <polygon
                                        points="12.5 13.11 2.21 5.91 2.79 5.09 12.5 11.89 22.21 5.09 22.79 5.91 12.5 13.11">
                                    </polygon>
                                    <path d="M11,18H5V14h6ZM6,17h4V15H6Z"></path>
                                </g>
                            </svg>
                            <h5>Manage Post</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-user.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24"
                                id="add-user">
                                <g>
                                    <path
                                        d="M21 6h-1V5a1 1 0 0 0-2 0v1h-1a1 1 0 0 0 0 2h1v1a1 1 0 0 0 2 0V8h1a1 1 0 0 0 0-2zm-11 5a4 4 0 1 0-4-4 4 4 0 0 0 4 4zm0-6a2 2 0 1 1-2 2 2 2 0 0 1 2-2zm0 8a7 7 0 0 0-7 7 1 1 0 0 0 2 0 5 5 0 0 1 10 0 1 1 0 0 0 2 0 7 7 0 0 0-7-7z">
                                    </path>
                                </g>
                            </svg>
                            <h5>Add User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-users.php" class="active">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px"
                                enable-background="new 0 0 64 64" viewBox="0 0 64 64" id="approved-user">
                                <path fill="#1c94f9"
                                    d="M48.6 37.8c-.9-.4-1.5-1.1-2-1.8h-2.5H44h-2.1c-1.5 3.1-3.6 5.7-6.1 7h1c.5.8 1.2 1.5 2.2 2 3.2 1.6 10.9 2.6 13.8 8H62v-3.6C62 40.5 52.2 39.6 48.6 37.8zM44.1 36c5.5 0 9.9-7.4 9.9-14.1 0-5-3.8-9.2-8.6-9.8-.1 0-.1 0-.2 0-.1 0-.2 0-.3 0-.2 0-.5 0-.7 0 0 0-.1 0-.1 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0-.1 0-.1 0-.2 0-.5 0-.7 0-.1 0-.2 0-.3 0-.1 0-.1 0-.2 0-2.6.4-4.9 1.7-6.5 3.7C40.7 17.5 44 21.9 44 27c0 2.9-.7 6-2 8.7C42.7 35.9 43.3 36 44.1 36 44 36 44 36 44.1 36 44 36 44.1 36 44.1 36z">
                                </path>
                                <circle cx="17" cy="17" r="15" fill="#1c94f9"></circle>
                                <g>
                                    <linearGradient id="a" x2="64" y1="32" y2="32" gradientUnits="userSpaceOnUse">
                                        <stop offset=".002" stop-color="#034a7a"></stop>
                                        <stop offset="1" stop-color="#002f49"></stop>
                                    </linearGradient>
                                    <path fill="url(#a)"
                                        d="M52.7,36.3c-1-0.3-1.9-0.6-2.5-0.9c0,0,0,0,0,0c3.4-2.7,5.8-7.2,5.8-13.3C56,15.4,50.5,10,43.7,10
                                      c-3.2,0-6.2,1.2-8.6,3.4c-0.5-0.1-1.1-0.2-1.6-0.3C31.8,5.6,25,0,17,0C7.6,0,0,7.6,0,17s7.6,17,17,17c0.7,0,1.4-0.1,2.2-0.2
                                      c1.1,3.4,3,6.7,5.5,9c-0.2,0.1-0.3,0.2-0.6,0.3c-0.7,0.3-1.8,0.7-3,1.1C16.2,45.9,8,48.6,8,58v4c0,1.1,0.9,2,2,2h44
                                      c1.1,0,2-0.9,2-2v-4c0-0.8-0.1-1.6-0.2-2.3H62c1.1,0,2-0.9,2-2v-5.4C64,40.1,56.9,37.7,52.7,36.3z M43.7,14c4.6,0,8.3,3.6,8.3,8.1
                                      c0,5-2.6,10.4-7,11.6c0.6-2.1,1-4.3,1-6.7c0-5-2.6-9.4-6.6-11.8C40.7,14.4,42.2,14,43.7,14z M4,17C4,9.8,9.8,4,17,4s13,5.8,13,13
                                      s-5.8,13-13,13S4,24.2,4,17z M23,32.9c6.3-2.4,10.9-8.5,10.9-15.7c4.6,0.9,8,5,8,9.8c0,7.4-5,15-10,15C28,42,24.6,37.6,23,32.9z
                                       M60,51.7h-5.6c-2.6-4.4-7.6-6.1-10.7-7.1c-1.1-0.4-2.2,0.2-2.5,1.3c-0.3,1,0.2,2.2,1.3,2.5c5.1,1.7,9.6,3.7,9.6,9.6v2H12v-2
                                      c0-6,4.5-8,10.4-9.9c1.4-0.4,2.5-0.8,3.4-1.3c0.9-0.4,1.7-1,2.3-1.7c1.2,0.5,2.5,0.8,3.9,0.8c4.1,0,8.4-3.1,11.2-8
                                      c1.1,0,2.2-0.2,3.3-0.6c0.6,0.7,1.3,1.2,2.1,1.6c0.8,0.4,1.8,0.7,2.9,1.1c4.8,1.6,8.6,3.3,8.6,8.2V51.7z">
                                    </path>
                                    <linearGradient id="b" x1="8" x2="26" y1="18" y2="18"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset=".002" stop-color="#034a7a"></stop>
                                        <stop offset="1" stop-color="#002f49"></stop>
                                    </linearGradient>
                                    <path fill="url(#b)" d="M22.7,12.5l-7.6,6.7l-3.7-3.7c-0.8-0.8-2-0.8-2.8,0c-0.8,0.8-0.8,2,0,2.8l5,5C14,23.8,14.5,24,15,24
                                      c0.5,0,0.9-0.2,1.3-0.5l9-8c0.8-0.7,0.9-2,0.2-2.8C24.8,11.8,23.5,11.8,22.7,12.5z">
                                    </path>
                                </g>
                            </svg>
                            <h5>Manage User</h5>
                        </a>
                    </li>
                    <li>
                        <a href="add-category.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 32 32"
                                id="write">
                                <path
                                    d="M25,21h2v5a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V6A3,3,0,0,1,5,3H24a3,3,0,0,1,3,3V7.15H25V6a1,1,0,0,0-1-1H5A1,1,0,0,0,4,6V26a1,1,0,0,0,1,1H24a1,1,0,0,0,1-1Zm5.34-8.84a3,3,0,0,1-.88,2.13l-1.59,1.58L20.3,23.45a1,1,0,0,1-.57.28l-3.3.48h-.15a1,1,0,0,1-.7-.3,1,1,0,0,1-.29-.85l.48-3.3a1,1,0,0,1,.28-.57l7.58-7.57L25.21,10a3.09,3.09,0,0,1,4.25,0A3,3,0,0,1,30.34,12.16Zm-4.59,3-1.41-1.41L17.7,20.38,17.46,22l1.66-.24Zm2.59-3a1,1,0,0,0-.3-.7,1,1,0,0,0-1.41,0l-.88.88,1.41,1.41.88-.88A1,1,0,0,0,28.34,12.16ZM14,24V22H7v2Z">
                                </path>
                            </svg>
                            <h5>Add Category</h5>
                        </a>
                    </li>
                    <li>
                        <a href="manage-categories.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" id="list">
                                <path
                                    d="M6 26h4v-4H6v4zm0 8h4v-4H6v4zm0-16h4v-4H6v4zm8 8h28v-4H14v4zm0 8h28v-4H14v4zm0-20v4h28v-4H14z">
                                </path>
                                <path fill="none" d="M0 0h48v48H0z"></path>
                            </svg>
                            <h5>Manage Categories</h5>
                        </a>
                    </li>
                </ul>
            </aside>
            <main>
                <h2>Manage Categories</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Travel</td>
                            <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Wild Life</td>
                            <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Music</td>
                            <td><a href="edit-category.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-category.php" class="btn sm danger">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </main>
        </div>
    </section>
<?php 
    include '../partials/footer.php'
?>