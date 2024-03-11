<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i></span>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-title">Home Page</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Manage Home Hero</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('mange.home.hero') }}">Home Hero</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>About MultiImage</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('multiimage.create') }}">Add Multi Image</a></li>
                        <li><a href="{{ route('multiimage.index') }}">All Multi Image</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>About Informations</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('home.about.edit') }}">Manage About</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Services Captions</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('services.caoption.edit') }}">Manage Services</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span> Manage Services</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('services.create') }}">Add Services</a></li>
                        <li><a href="{{ route('services.index') }}">All Services</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span> Working Process</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('work.processs.caoption.edit') }}">Working Caption</a></li>
                        <li><a href="{{ route('working.create') }}">Add Process</a></li>
                        <li><a href="{{ route('working.index') }}">All Process</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span> Portfolio Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('portfoliocategory.create') }}">Add Portfolio Category</a></li>
                        <li><a href="{{ route('portfoliocategory.index') }}">All Portfolio Category</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span> Portfolio</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('creative.work.caoption.edit') }}">Portfolio Caption</a></li>
                        <li><a href="{{ route('portfolio.create') }}">Add Portfolio</a></li>
                        <li><a href="{{ route('portfolio.index') }}">All Portfolio</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span> Partners</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('edit.partner.ifnormation') }}">Partners Informations</a></li>
                        <li><a href="{{ route('partners-multiimage.create') }}">Add Partners Multiimage</a></li>
                        <li><a href="{{ route('partners-multiimage.index') }}">All Partners Multiimage</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span> Client Feedback</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('client.feedback.caoption.edit') }}">Client-Feedback Captions</a></li>
                        <hr class="m-0">
                        <li><a href="{{ route('feedback.create') }}">Add Client-Feedback </a></li>
                        <li><a href="{{ route('feedback.index') }}">All Client-Feedback </a></li>
                        <hr class="m-0">
                        <li><a href="{{ route('client-multiimage.create') }}">Add Client-MultiImage </a></li>
                        <li><a href="{{ route('client-multiimage.index') }}">All Client-MultiImage </a></li>
                    </ul>
                </li>

                <li class="menu-title">Blog</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span> Blog Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('blog-category.create') }}">Create Blog Category</a></li>
                        <li><a href="{{ route('blog-category.index') }}">Manage Blog Category</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span> Blog</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('blog.create') }}">Add New Blog</a></li>
                        <li><a href="{{ route('blog.index') }}">All Blog List</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span> Manage Footer</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('edit.footer') }}">Edit Footer</a></li>
                    </ul>
                </li>

                <li class="menu-title">About Page</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span> About Tab Group</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('tab-group.create') }}">Add Tab Group</a></li>
                        <li><a href="{{ route('tab-group.index') }}">All Tab Group</a></li>
                    </ul>
                </li>
                <li class="menu-title">Contact Page</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span> Contact Us</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('edit.location') }}">Change Location</a></li>
                        {{-- <li><a href="{{ route('tab-group.index') }}">All Tab Group</a></li> --}}
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>
