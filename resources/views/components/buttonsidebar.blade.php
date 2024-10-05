<button class="w-10 h-10 rotate-180 fixed top-10 block sm:hidden open-drawer  text-white font-extrabold bg-blue-700 rounded-full p-2 lg:-ml-5">
    <x-heroicon-o-arrow-small-right />
</button>

<script>
    const openDrawer = document.querySelector('.open-drawer');
    const drawer = document.querySelector('.drawer');

    openDrawer.addEventListener('click', () => {
        drawer.classList.toggle('active')
    })
</script>