<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
		<link rel="stylesheet" href="../styles/output.css" />
		<link
			href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
			rel="stylesheet"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
			rel="stylesheet"
		/>
		<link rel="shortcut icon" href="../assets/inr.ico" type="image/x-icon" />
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	</head>
	<body>
		<main class="flex w-full">
			<aside class="py-6 w-[240px] bg-white h-screen fixed">
				<div class="flex flex-col items-center justify-between w-full h-full">
					<div class="w-full text-center">
						<p class="text-lg font-extrabold">
							{{-- <span class="text-primary">Meow</span>Cafe --}}
                            <span class="m-4"><img class="px-12" src="{{ asset('assets/logohmjti.png') }}" alt=""></span>
                            
						</p>
						<section class="flex flex-col mt-8">
							<div class="relative px-6">
								<a
									href="/dashboard"
									class="flex items-center w-full p-3 rounded-md group bg-[#8D0000] data-active:text-white"
									data-page="active"
								>
									<div
										class="absolute top-0 left-0 hidden w-1 h-full bg-[#8D0000] rounded-e-lg group-data-active:block"
									></div>
									<i class="mr-4 text-lg ri-dashboard-line"></i>
									<span class="font-semibold">Dashboard</span>
								</a>
							</div>
						</section>
						<div class="h-[1px] bg-[#E0E0E0] w-full my-4"></div>
						<section>
							<div class="w-full px-4 mb-4">
								<span
									class="px-4 uppercase text-[#202224] font-bold text-sm w-full flex"
									>Pages</span
								>
							</div>
							<div class="relative px-6">
								<a
									href="{{ route('members.index') }}"
									class="flex items-center w-full p-3 rounded-md group data-active:bg-primary data-active:text-white"
								>
									<div
										class="absolute top-0 left-0 hidden w-1 h-full bg-primary rounded-e-lg group-data-active:block"
									></div>
									<i class="mr-4 text-lg ri-clipboard-line"></i>
									<span class="font-semibold">Pengurus</span>
								</a>
							</div>
                            <div class="relative px-6">
								<a
									href="{{ route('members.index') }}"
									class="flex items-center w-full p-3 rounded-md group data-active:bg-primary data-active:text-white"
								>
									<div
										class="absolute top-0 left-0 hidden w-1 h-full bg-primary rounded-e-lg group-data-active:block"
									></div>
									<i class="mr-4 text-lg ri-clipboard-line"></i>
									<span class="font-semibold">Berita</span>
								</a>
							</div>
                            <div class="relative px-6">
								<a
									href="{{ route('members.index') }}"
									class="flex items-center w-full p-3 rounded-md group data-active:bg-primary data-active:text-white"
								>
									<div
										class="absolute top-0 left-0 hidden w-1 h-full bg-primary rounded-e-lg group-data-active:block"
									></div>
									<i class="mr-4 text-lg ri-clipboard-line"></i>
									<span class="font-semibold">Ekonomi Kreatif</span>
								</a>
							</div>
                            <div class="relative px-6">
								<a
									href="{{ route('members.index') }}"
									class="flex items-center w-full p-3 rounded-md group data-active:bg-primary data-active:text-white"
								>
									<div
										class="absolute top-0 left-0 hidden w-1 h-full bg-primary rounded-e-lg group-data-active:block"
									></div>
									<i class="mr-4 text-lg ri-clipboard-line"></i>
									<span class="font-semibold">Admin</span>
								</a>
							</div>
						</section>
					</div>
					<div class="w-full px-6">
						<button class="flex items-center w-full p-3 rounded-md">
							<i class="mr-4 text-lg ri-logout-circle-line"></i>
							<span class="font-semibold">Logout</span>
						</button>
					</div>
				</div>
			</aside>
			<div class="ml-[240px] flex w-full relative">
				<nav
					class="h-[70px] flex py-4 px-7 justify-between items-center flex-grow fixed bg-white left-[240px] right-0"
				>
					<input
						type="text"
						name=""
						id=""
						placeholder="Search"
						class="px-4 w-96 h-full py-2 bg-[#F5F6FA] rounded-3xl border border-[#D5D5D5]"
					/>
					<div class="flex items-center h-full gap-5">
						<div
							class="object-center h-full overflow-hidden rounded-full aspect-square"
						>
							<img
								src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRj5r7mceg1cqsh7ZBtZYXjQUwXxjqTXV4qjHWC5Xf3_g&s"
								alt=""
								class="w-full"
							/>
						</div>
						<div>
							<p class="font-bold text-[#404040]">Imank</p>
							<p class="text-sm font-semibold text-[#565656]">イマン</p>
						</div>
					</div>
				</nav>
				<main class="p-7 bg-backgroundPrimary min-h-screen w-full mt-[70px]">
					<p class="text-3xl font-bold">Dashboard</p>
					<div class="grid grid-cols-4 mt-7 gap-x-7">
						<div
							class="flex flex-col justify-between flex-grow w-full h-40 p-4 bg-white rounded-xl"
						>
							<div class="inline-flex items-start justify-between">
								<div class="font-semibold">Total Drink</div>
								<div>
									<i
										class="p-4 text-3xl ri-group-fill bg-purple/20 text-purple rounded-3xl"
									></i>
								</div>
							</div>
							<div class="flex items-end justify-between">
								<div>
									<i class="text-lg ri-funds-line text-success"></i>
								</div>
								<p class="text-2xl font-bold">26</p>
							</div>
						</div>
						<div
							class="flex flex-col justify-between flex-grow w-full h-40 p-4 bg-white rounded-xl"
						>
							<div class="inline-flex items-start justify-between">
								<div class="font-semibold">Total Food</div>
								<div>
									<i
										class="p-4 text-3xl ri-line-chart-line bg-success/20 text-success rounded-3xl"
									></i>
								</div>
							</div>
							<div class="flex items-end justify-between">
								<div>
									<i class="text-lg ri-funds-line text-success"></i>
								</div>
								<p class="text-2xl font-bold">10</p>
							</div>
						</div>
						<div
							class="flex flex-col justify-between flex-grow w-full h-40 p-4 bg-white rounded-xl"
						>
							<div class="inline-flex items-start justify-between">
								<div class="font-semibold">Total Order</div>
								<div>
									<i
										class="p-4 text-3xl ri-box-3-fill bg-warning/20 text-warning rounded-3xl"
									></i>
								</div>
							</div>
							<div class="flex items-end justify-between">
								<div>
									<i class="text-lg ri-funds-line text-success"></i>
								</div>
								<p class="text-2xl font-bold">10293</p>
							</div>
						</div>
						<div
							class="flex flex-col justify-between flex-grow w-full h-40 p-4 bg-white rounded-xl"
						>
							<div class="inline-flex items-start justify-between">
								<div class="font-semibold">Total Income</div>
								<div>
									<i
										class="p-4 text-3xl ri-history-fill bg-error/20 text-error rounded-3xl"
									></i>
								</div>
							</div>
							<div class="flex items-end justify-between">
								<div>
									<i class="text-lg ri-funds-line text-success"></i>
								</div>
								<p class="text-2xl font-bold">Rp.200.040</p>
							</div>
						</div>
					</div>
				</main>
			</div>
		</main>
	</body>
</html>