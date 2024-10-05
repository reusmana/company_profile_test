<div class="flex drawer active flex-col justify-between h-screen sticky top-0  bg-white shadow-2xl py-10">
 <ul class="flex flex-col gap-6 px-5">
    <li>
        <a href="{{ route('dashboard') }}" class=" cursor-pointer text-xl lg:text-2xl font-semibold text-slate-700 truncate">
            Home
        </a>
    </li>
    <li>
        <a href="{{ route('add') }}" class=" cursor-pointer text-xl lg:text-2xl font-semibold text-slate-700 truncate">
            Add Page
        </a>
    </li>
    <li>
        <a href="{{ route('visitor') }}" class=" cursor-pointer text-xl lg:text-2xl font-semibold text-slate-700 truncate">
            Visitor
        </a>
    </li>
 </ul>
 <a href="{{ route('logout') }}" class=" px-5 cursor-pointer text-xl lg:text-2xl font-semibold text-slate-700 truncate">Logout</a>
</div>