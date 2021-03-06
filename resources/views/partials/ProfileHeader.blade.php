

                    <div class="profile">
                        <div class="profile-header">
                           <!-- BEGIN profile-header-cover -->
                           <div class="profile-header-cover"></div>
                           <!-- END profile-header-cover -->
                           <!-- BEGIN profile-header-content -->
                           <div class="profile-header-content">
                              <!-- BEGIN profile-header-img -->
                              <div class="profile-header-img">
                                 <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                              </div>
                              <!-- END profile-header-img -->
                              <!-- BEGIN profile-header-info -->
                              <div class="profile-header-info">
                                 <h4 class="m-t-10 m-b-5 pb-4 pt-4 text-bold">{{ Auth::user()->username }}</h4>
                                 <p class="m-b-10">
                                  @if(Auth::user()->bio){
                                      {{ Auth::user()->bio }}
                                  }

                                  @else
                                      <a href="" class="btn btn-sm btn-info mb-2">Add Info</a>
                                  @endif
                                 </p>
                                 <a href="#" class="btn btn-sm btn-info mb-2">Edit Profile</a>
                              </div>
                              <!-- END profile-header-info -->
                           </div>
                           <!-- END profile-header-content -->
                           <!-- BEGIN profile-header-tab -->
                           <ul class="profile-header-tab nav nav-tabs">
                              <li class="nav-item"><a href="#profile-post" class="nav-link active show" data-toggle="tab">POSTS</a></li>
                              <li class="nav-item"><a href="#profile-about" class="nav-link" data-toggle="tab">ABOUT</a></li>
                              <li class="nav-item"><a href="#profile-photos" class="nav-link" data-toggle="tab">PHOTOS</a></li>
                              <li class="nav-item"><a href="#profile-videos" class="nav-link" data-toggle="tab">VIDEOS</a></li>
                              <li class="nav-item"><a href="#profile-friends" class="nav-link" data-toggle="tab">FRIENDS</a></li>
                           </ul>
                           <!-- END profile-header-tab -->
                        </div>
                     </div>
