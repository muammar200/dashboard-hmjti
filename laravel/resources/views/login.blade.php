<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
    <main class="font-poppins bg-[url('/public/images/background-gedung.png')] bg-no-repeat bg-left-bottom">
        <div class="flex flex-col items-center justify-center h-screen gap-10 my-auto">
            <div class="aspect-square">
                <img src="{{ asset('images/logo-himpunan.png') }}" alt="" class="w-full" />
            </div>

            <form id="form" action="/login" method="post">
                @csrf
                <div
                    class="flex flex-col gap-[22px] justify-center items-center shadow-[rgba(0,_0,_0,_0.2)_0px_20px_40px_-7px] p-[30px] bg-white rounded-3xl bg-transparent">
                    <h1 class="font-semibold text-2xl text-[#6F0000]">Silahkan Login</h1>
                    <p class="font-normal text-base text-[#6F0000]">
                        Silahkan masukkan username dan password untuk melanjutkan
                    </p>
                    <div class="flex flex-col gap-[11px] w-full">
                        <label for="username" class="text-left font-medium text-base text-[#8D0000]">*Username</label>
                        <input type="text" name="username" id="username" placeholder="Masukkan Username"
                            class="py-2 ps-5 outline outline-2 outline-[#8D0000] placeholder:text-[#8D0000] placeholder:text-base placeholder:font-extralight rounded-[10px]" />
                    </div>
                    <div class="flex flex-col gap-[11px] w-full">
                        <label for="password" class="text-left font-medium text-base text-[#8D0000]">*Password</label>
                        <div class="relative">
                            <input type="password" name="password" id="password" placeholder="Masukkan Password"
                                class="py-2 ps-5 outline outline-2 outline-[#8D0000] placeholder:text-[#8D0000] placeholder:text-base placeholder:font-extralight rounded-[10px] w-full" />
                            <button type="button" id="togglePassword" class="absolute right-3 top-1/4">
                                <i class="bx bx-hide text-xl text-[#8D0000]" id="passwordIcon"></i>
                            </button>
                        </div>
                    </div>
                    <div>
                        @error('error')
                            <span class="text-red-600">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="bg-[#8D0000] w-full rounded-[20px] py-3 text-white font-semibold text-lg">
                        Login
                    </button>
                </div>
            </form>


            <p class="text-[#690000] font-semibold text-[14px]">
                <i class="font-light">Created by</i> HMJTI FST UINAM
            </p>
        </div>
    </main>

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
