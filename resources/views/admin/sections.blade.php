<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li>
            <a href="{{route('admin.dashboard')}}">
                <i class="fas fa-users"></i>
                <span> لوحة التحكم </span>
            </a>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-users"></i>
                <span> المدرسين </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('admin.instructors.index')}}">عرض الكل</a></li>
                <li><a href="{{route('admin.instructors.create')}}">اضافة مدرس جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>الطلاب  </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('admin.students.index')}}">عرض الكل</a></li>
                <li><a href="{{route('admin.students.create')}}">اضافة طالب جديد</a></li>
            </ul>
        </li>
        
        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-school"></i>
                <span> المواد الدراسية  </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{route('admin.subjects.index')}}">عرض الكل</a></li>
                <li><a href="{{route('admin.subjects.create')}}">اضافة مادة جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-database"></i>
                <span> نتائج و متابعة  </span>
            </a>
        </li>
        
    </ul>

</div>
<!-- Sidebar -->
