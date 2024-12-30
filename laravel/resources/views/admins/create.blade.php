<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main class="font-poppins bg-[url('/src/image/background-gedung.png')] bg-no-repeat bg-left-bottom">
        <aside
            class="flex flex-col items-center gap-8 fixed py-5 px-8 h-screen w-[293px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] bg-white z-10">
            <img src="{{ asset('images/logo-himpunan-white.png') }}" alt="logo-himpunan" class="h-[81px]" />
            <div class="flex flex-col w-full gap-7">
                <div class="flex items-center gap-1">
                    <a href="/dashboard"
                        class="flex items-center {{ request()->is('dashboard*') ? 'bg-[#8D0000]' : 'bg-white' }} w-full py-1.5 px-3 text-xs font-medium {{ request()->is('dashboard*') ? 'text-white' : 'text-[#8D0000]' }} {{ request()->is('dashboard*') ? '' : 'shadow-[0_3px_10px_rgb(0,0,0,0.2)]' }} rounded-lg text-center">
                        <i
                            class="text-2xl bx bxs-dashboard {{ request()->is('dashboard*') ? 'text-white' : 'text-[#8D0000]' }}"></i>
                        Dashboard
                    </a>
                    <div class="w-1 h-1/2 bg-[#8D0000] {{ request()->is('dashboard*') ? '' : 'invisible' }}"></div>
                </div>
                <div class="flex items-center gap-1">
                    <a href="{{ route('members.index') }}"
                        class="flex items-center {{ request()->is('members*') ? 'bg-[#8D0000]' : 'bg-white' }} w-full py-1.5 px-3 text-xs font-medium {{ request()->is('members*') ? 'text-white' : 'text-[#8D0000]' }} {{ request()->is('members*') ? '' : 'shadow-[0_3px_10px_rgb(0,0,0,0.2)]' }} rounded-lg text-center">
                        <i
                            class="bx bx-group text-2xl {{ request()->is('members*') ? 'text-white' : 'text-[#8D0000]' }}"></i>
                        Pengurus
                    </a>
                    <div class="w-1 h-1/2 bg-[#8D0000] {{ request()->is('members*') ? '' : 'invisible' }}"></div>
                </div>
                <div class="flex items-center gap-1">
                    <a href="{{ route('news.index') }}"
                        class="flex items-center {{ request()->is('news*') ? 'bg-[#8D0000]' : 'bg-white' }} w-full py-1.5 px-3 text-xs font-medium {{ request()->is('news*') ? 'text-white' : 'text-[#8D0000]' }} {{ request()->is('news*') ? '' : 'shadow-[0_3px_10px_rgb(0,0,0,0.2)]' }} rounded-lg text-center">
                        <i
                            class="bx bxs-book text-2xl {{ request()->is('news*') ? 'text-white' : 'text-[#8D0000]' }}"></i>
                        Berita
                    </a>
                    <div class="w-1 h-1/2 bg-[#8D0000] {{ request()->is('news*') ? '' : 'invisible' }}"></div>
                </div>
                <div class="flex items-center gap-1">
                    <a href="{{ route('products.index') }}"
                        class="flex items-center {{ request()->is('products*') ? 'bg-[#8D0000]' : 'bg-white' }} w-full py-1.5 px-3 text-xs font-medium {{ request()->is('products*') ? 'text-white' : 'text-[#8D0000]' }} {{ request()->is('products*') ? '' : 'shadow-[0_3px_10px_rgb(0,0,0,0.2)]' }} rounded-lg text-center">
                        <i
                            class="bx bx-bar-chart-square text-2xl {{ request()->is('products*') ? 'text-white' : 'text-[#8D0000]' }}"></i>
                        Ekonomi Kreatif
                    </a>
                    <div class="w-1 h-1/2 bg-[#8D0000] {{ request()->is('products*') ? '' : 'invisible' }}"></div>
                </div>
                <div class="flex items-center gap-1">
                    <a href="{{ route('admins.index') }}"
                        class="flex items-center {{ request()->is('admins*') ? 'bg-[#8D0000]' : 'bg-white' }} w-full py-1.5 px-3 text-xs font-medium {{ request()->is('admins*') ? 'text-white' : 'text-[#8D0000]' }} {{ request()->is('admins*') ? '' : 'shadow-[0_3px_10px_rgb(0,0,0,0.2)]' }} rounded-lg text-center">
                        <i
                            class="bx bx-user text-2xl {{ request()->is('admins*') ? 'text-white' : 'text-[#8D0000]' }}"></i>
                        Admin
                    </a>
                    <div class="w-1 h-1/2 bg-[#8D0000] {{ request()->is('admins*') ? '' : 'invisible' }}"></div>
                </div>
                <p class="text-[#8D0000] font-bold text-[10px] text-center">
                    <i class="font-semibold">Crated by</i> HMJTI FST UINAM
                </p>
            </div>
        </aside>
        <main class="h-screen ml-[293px]">
            <nav
                class="flex items-center justify-between bg-gradient-to-r from-[#E35353] to-[#530000] py-6 pr-10 pl-[72px]">
                <p class="text-white underline text-normal underline-offset-8">
                    Hello, <span class="font-bold">{{ auth()->user()->name }}</span>
                </p>
                <div class="flex items-center gap-10">
                    <div class="flex items-center gap-4 px-4 py-2 outline outline-1 outline-white rounded-xl">
                        <label for="search"><i class="inline-block text-white bx bx-search"></i></label>
                        <input type="text" id="search" placeholder="Search"
                            class="text-white bg-transparent focus:outline-none focus:text-white placeholder:font-extralight placeholder:text-base placeholder:text-white" />
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="bx bxs-user text-2xl text-white bg-[#B5B5B5] rounded-full px-1.5 py-0.5"></i>
                        <p class="text-base font-medium text-white">{{ auth()->user()->username }}</p>
                        <button class="text-white">
                            <i class="bx bx-chevron-down"></i>
                        </button>
                    </div>
                    <a href="{{ url('/logout') }}"
                        class="bg-white text-[#280808] font-medium text-base py-1.5 px-6 rounded-[14px]">
                        Logout
                    </a>
                </div>
            </nav>
            <main class="w-full min-h-screen p-7 bg-backgroundPrimary">
                <div class="flex items-center justify-between">
                    <p class="text-3xl font-bold">Tambah Admin</p>
                    <div class="flex gap-2">
                        <button type="submit" form="form"
                            class="inline-flex justify-center h-full py-3 text-base font-bold text-white rounded-md bg-[#009805] w-36">
                            <p class="-mb-[2px]">Save</p>
                        </button>
                        <a href=""
                            class="inline-flex justify-center h-full py-3 text-base font-bold text-white bg-red-500 rounded-md w-36">
                            <p class="-mb-[2px]">Delete</p>
                        </a>
                    </div>
                </div>

                <form id="form" method="post" action="{{ route('admins.store') }}" enctype="multipart/form-data"
                    class="grid grid-cols-5 font-semibold mt-7 gap-x-8 text-md">
                    @csrf
                    <div
                        class="flex flex-col col-span-3 gap-6 px-8 py-6 bg-white border rounded-lg border-borderPrimary">
                        <div class="flex flex-col gap-3">
                            <label for="name">Nama</label>
                            <input type="text" required id="name" value="{{ old('name') }}" name="name"
                                placeholder="Masukkan nama"
                                class="px-5 py-2 border rounded-md border-borderPrimary bg-backgroundPrimary" />
                            @error('name')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="username">Username</label>
                            <input type="text" required value="{{ old('username') }}" id="username" name="username"
                                placeholder="Masukkan username"
                                class="px-5 py-2 border rounded-md border-borderPrimary bg-backgroundPrimary" />
                            @error('username')
                                <span class="text-sm text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="flex flex-col gap-[11px] w-full">
                            <label for="password">Password</label>
                            <div class="relative">
                                <input type="password" name="password" id="password"
                                    placeholder="Masukkan Password"
                                    class="w-full px-5 py-2 border rounded-md border-borderPrimary bg-backgroundPrimary" />
                                <button type="button" id="togglePassword" class="absolute right-3 top-1/4">
                                    <i class="text-xl bx bx-hide " id="passwordIcon"></i>
                                </button>
                                @error('password')
                                    <span class="text-sm text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </form>
            </main>
        </main>
    </main>

    <script>
        ClassicEditor.create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script src="{{ asset('js/imageUploader.js') }}"></script>
    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const passwordIcon = document.getElementById('passwordIcon');

        togglePassword.addEventListener('click', () => {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;

            if (type === 'text') {
                passwordIcon.classList.remove('bx-hide');
                passwordIcon.classList.add('bx-show');
            } else {
                passwordIcon.classList.remove('bx-show');
                passwordIcon.classList.add('bx-hide');
            }
        });
    </script>
</body>

</html>
