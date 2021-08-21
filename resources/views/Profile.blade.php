<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Bimasha</title>
        <base href="/public">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+sans:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-300 text-gray-900 text-sm">
       </div>
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div id="content" class="content content-full-width">
                     
                    @include('partials.ProfileHeader')
                    
                     <div class="profile-content">
                        <!-- begin tab-content -->
                        <div class="tab-content p-0">
                           <!-- begin #profile-post tab -->
                           <div class="tab-pane fade active show" id="profile-post">
                              <!-- begin timeline -->
                              <ul class="timeline">
                                <li>
                                   <div class="timeline-body cursor-pointer hover:shadow-md border-gray-100">
                                      <div class="timeline-header">
                                         <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                         <span class="username"><a href="javascript:;">Sean Ngu</a> <small></small></span>
                                      </div>
                                      <div class="timeline-content text-gray-800 mt-3 shadow-xl ">
                                        <div class="w-2/3 relative">
                                            <input type="text" placeholder="What's in your mind?" class="rounded-xl border-none px-4 py-2 pl-8 bg-white w-full">
                                            <div class="absolute top-0 flex items-center h-full ml-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                                  </svg>
                                            </div>
                                        </div>
                                      </div>
                                   </div>
                                   <!-- end timeline-body -->
                             </ul>
                              <ul class="timeline">
                                 <li>
                                    <div class="timeline-body cursor-pointer hover:shadow-md border-gray-100 shadow-xl">
                                       <div class="timeline-header">
                                          <span class="userimage"><img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt=""></span>
                                          <span class="username"><a href="javascript:;">Sean Ngu</a> <small></small></span>
                                          <span class="pull-right text-muted">18 Views</span>
                                       </div>
                                       <div class="timeline-content text-gray-800 mt-3 ">
                                             Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus turpis quis tincidunt luctus.
                                             Nam sagittis dui in nunc consequat, in imperdiet nunc sagittis.
                                       </div>
                                       <div class="timeline-likes">
                                          <div class="stats-right">
                                             <span class="stats-text">259 Shares</span>
                                             <span class="stats-text">21 Comments</span>
                                          </div>
                                          <div class="stats">
                                             <span class="fa-stack fa-fw stats-icon">
                                             <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                             <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                                             </span>
                                             <span class="fa-stack fa-fw stats-icon">
                                             <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                             <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                                             </span>
                                             <span class="stats-total">4.3k</span>
                                          </div>
                                       </div>
                                       <div class="timeline-footer">
                                          <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                          <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                                          <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                                       </div>
                                       <div class="timeline-comment-box">
                                          <div class="user"><img src="https://bootdey.com/img/Content/avatar/avatar3.png"></div>
                                          <div class="input">
                                             <form action="">
                                                <div class="input-group">
                                                   <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                                                   <span class="input-group-btn p-l-10">
                                                   <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comment</button>
                                                   </span>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- end timeline-body -->
                              </ul>
                              <!-- end timeline -->
                           </div>
                           <!-- end #profile-post tab -->
                        </div>
                        <!-- end tab-content -->
                     </div>
                     <!-- end profile-content -->
                  </div>
               </div>
            </div>
         </div>
     </body>
</html>
