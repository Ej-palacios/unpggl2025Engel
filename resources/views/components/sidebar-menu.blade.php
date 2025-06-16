<div x-data="{ open: false, mobileOpen: false }" class="flex h-full">
    <!-- Mobile trigger -->
    <div class="lg:hidden fixed top-4 left-4 z-50">
        <button @click="mobileOpen = !mobileOpen" class="p-2 rounded-lg bg-gray-800 text-white focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Backdrop mobile -->
    <div x-show="mobileOpen" 
         @click="mobileOpen = false"
         class="fixed inset-0 bg-black bg-opacity-50 z-40 lg:hidden"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
    </div>

    <!-- Sidebar -->
    <aside :class="{'translate-x-0': mobileOpen, '-translate-x-full': !mobileOpen}"
           class="fixed lg:relative z-40 w-64 h-screen bg-gradient-to-b from-gray-900 to-gray-800 text-white transition-transform duration-300 ease-in-out transform lg:translate-x-0 shadow-xl">
        
        <!-- Logo -->
        <div class="p-4 border-b border-gray-700 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 rounded-lg bg-indigo-600 flex items-center justify-center">
                    <i class="bi bi-layers text-xl"></i>
                </div>
                <span class="text-xl font-semibold">AdminPro</span>
            </div>
            <button @click="mobileOpen = false" class="lg:hidden p-1 rounded-lg hover:bg-gray-700">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <!-- User Profile -->
        <div class="p-4 border-b border-gray-700 flex items-center space-x-3">
            <div class="relative">
                <img src="https://ui-avatars.com/api/?name=Admin+User&background=6366f1&color=fff" 
                     class="w-10 h-10 rounded-full" 
                     alt="User">
                <span class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-gray-800"></span>
            </div>
            <div>
                <p class="font-medium">Admin User</p>
                <p class="text-xs text-gray-400">Administrador</p>
            </div>
        </div>

        <!-- Menu Items -->
        <nav class="p-4 space-y-1">
            <template x-for="(item, index) in menuItems" :key="index">
                <div>
                    <button @click="open = (open === index ? null : index)"
                            class="w-full flex items-center justify-between p-3 rounded-lg hover:bg-gray-700 transition-colors duration-200"
                            :class="{'bg-gray-700': open === index}">
                        <div class="flex items-center space-x-3">
                            <i class="bi" :class="item.icon"></i>
                            <span x-text="item.title"></span>
                        </div>
                        <i class="bi bi-chevron-down text-xs transition-transform duration-200" 
                           :class="{'rotate-180': open === index}"></i>
                    </button>

                    <div x-show="open === index" 
                         x-collapse
                         class="ml-8 mt-1 space-y-1">
                        <template x-for="(subItem, subIndex) in item.children" :key="subIndex">
                            <a href="#"
                               class="block px-3 py-2 text-sm rounded-lg hover:bg-gray-700 transition-colors duration-200"
                               :class="{'bg-gray-700': subItem.active}">
                                <span x-text="subItem.title"></span>
                            </a>
                        </template>
                    </div>
                </div>
            </template>
        </nav>

        <!-- Bottom Menu -->
        <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-gray-700">
            <a href="#" class="flex items-center space-x-3 p-3 rounded-lg hover:bg-gray-700 transition-colors duration-200">
                <i class="bi bi-box-arrow-left"></i>
                <span>Cerrar sesión</span>
            </a>
        </div>
    </aside>
</div>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('sidebarMenu', () => ({
        open: null,
        mobileOpen: false,
        menuItems: [
            {
                title: 'Dashboard',
                icon: 'bi-speedometer2',
                children: [
                    { title: 'Resumen', active: true },
                    { title: 'Analíticas' },
                    { title: 'Reportes' }
                ]
            },
            {
                title: 'Posts',
                icon: 'bi-file-earmark-text',
                children: [
                    { title: 'Todos los posts' },
                    { title: 'Crear nuevo' },
                    { title: 'Categorías' }
                ]
            },
            {
                title: 'Usuarios',
                icon: 'bi-people',
                children: [
                    { title: 'Lista de usuarios' },
                    { title: 'Roles' },
                    { title: 'Permisos' }
                ]
            },
            {
                title: 'Configuración',
                icon: 'bi-gear',
                children: [
                    { title: 'General' },
                    { title: 'Apariencia' },
                    { title: 'Notificaciones' }
                ]
            }
        ]
    }))
})
</script>