<ul class="c-header-nav ml-auto mr-4">
   <li class="c-header-nav-item dropdown">
      <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
         <div class="c-avatar">                
            @if(Auth::user()->image)
            <img class="c-avatar-img" 
               src="{{asset('/storage/images/profile/'.Auth::user()->image)}}" 
               title="{{Auth::user()->name}}"
               alt="profile_image">                    
            @endif
         </div>
      </a>
      <div class="dropdown-menu dropdown-menu-right pt-0">
         <div class="dropdown-header bg-light py-2">
            <strong>Settings</strong>
         </div>
         <a class="dropdown-item" href="#">
            <svg class="c-icon mr-2">
               <use xlink:href="assets/icons/svg/free.svg#cil-user"></use>
            </svg>
            Profile
         </a>
         <a class="dropdown-item" href="#">
            <svg class="c-icon mr-2">
               <use xlink:href="assets/icons/svg/free.svg#cil-settings"></use>
            </svg>
            Settings
         </a>
         <a class="dropdown-item" href="#">
            <svg class="c-icon mr-2">
               <use xlink:href="assets/icons/svg/free.svg#cil-credit-card"></use>
            </svg>
            Payments<span class="badge badge-secondary ml-auto">42</span>
         </a>
         <a class="dropdown-item" href="#">
            <svg class="c-icon mr-2">
               <use xlink:href="assets/icons/svg/free.svg#cil-file"></use>
            </svg>
            Projects<span class="badge badge-primary ml-auto">42</span>
         </a>
         <div class="dropdown-divider"></div>
         <a class="dropdown-item" href="#">
            <svg class="c-icon mr-2">
               <use xlink:href="assets/icons/svg/free.svg#cil-lock-locked"></use>
            </svg>
            Lock Account
         </a>
         <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            <svg class="c-icon mr-2">
               <use xlink:href="assets/icons/svg/free.svg#cil-account-logout"></use>
            </svg>
            Logout

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
         </a>
      </div>
   </li>
</ul>