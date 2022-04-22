<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <li class="nav-item nav-category">Menu</li>
        <li class="nav-item">
            <a href="/admin/users" class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-account ">Users</i>


            </a>

        </li>
        <li class="nav-item">
            <a href="<?php echo e(route('admin.category.index')); ?>" class="nav-link"  aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-format-list-bulleted-type"></i>
                <span class="menu-title">Category</span>

            </a>

        </li>
        <li class="nav-item">
            <a href="<?php echo e(route('admin.treatment.index')); ?>" class="nav-link"  aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-seat-flat-angled"></i>
                <span class="menu-title">Treatments</span>
                <i class=></i>
            </a>

        </li>
        <li class="nav-item">
            <a  class="nav-link"   aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-message-plus"></i>
                <span class="menu-title">Contact Message</span>
                <i class=></i>
            </a>

        </li>
        <li class="nav-item">
            <a href="<?php echo e(route('admin.category.index')); ?>" class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">

                <i class="mdi mdi-settings-box ">Settings</i>


            </a>

        </li>
        <li class="nav-item">
            <a href="/admin/faq" class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i>
                <span class="menu-title"> Faq</span>
                <i class=></i>
            </a>

        </li>
        <li class="nav-item">
            <a href="/admin/reviews" class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-clipboard-outline"></i> <span class="menu-title">Reviews</span>
                <i class=></i>
            </a>

        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="mdi mdi-heart-box"></i>
                <span class="menu-title">Randevus</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a href="/admin/users" class="nav-link" href="pages/ui-features/buttons.html">Accepted appointment</a></li>
                    <li class="nav-item"> <a href="/admin/users" class="nav-link" href="pages/ui-features/dropdowns.html">Cenceled appointment</a></li>
                    <li class="nav-item"> <a href="/admin/users" class="nav-link" href="pages/ui-features/typography.html">Completed appointment</a></li>
                </ul>
            </div>
        </li>

    </ul>
</nav>
<?php /**PATH /Applications/MAMP/htdocs/laravel9-dental/resources/views/admin/_sidebar.blade.php ENDPATH**/ ?>