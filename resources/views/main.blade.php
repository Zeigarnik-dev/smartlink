<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>SmartLink</title>
</head>

<body
    class="bg-gradient-to-br from-slate-100 via-blue-50 to-indigo-100 text-gray-900 min-h-dvh antialiased flex flex-col">

    <header class="w-full bg-gray-900 text-gray-50 shadow-sm">
        <div class="w-full max-w-4xl mx-auto px-4 md:px-8 py-4 md:py-5 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <h1 class="text-2xl md:text-3xl font-bold tracking-tight">SmartLink</h1>
                <span class="text-xs text-gray-400 bg-gray-800 px-2.5 py-1 rounded-md">v1.0</span>
            </div>
            <span class="text-xs md:text-sm text-gray-400 hidden sm:inline">Быстрый сокращатель ссылок</span>
        </div>
    </header>

    <main class="flex-1 w-full max-w-4xl mx-auto px-4 md:px-8 py-6 md:py-12 flex flex-col gap-6 md:gap-10">

        <section class="bg-white rounded-2xl p-6 md:p-10 shadow-sm border border-gray-100 md:text-center">
            <h2 class="text-xl md:text-3xl font-bold text-gray-900 mb-2 md:mb-3">
                Короткие ссылки за секунду
            </h2>
            <p class="text-sm md:text-base text-gray-600 leading-relaxed max-w-2xl md:mx-auto">
                Вставьте длинный URL ниже, чтобы получить компактную ссылку и отслеживать статистику переходов в
                реальном времени без регистрации.
            </p>
        </section>

        <section
            class="bg-white/70 backdrop-blur-md border border-white/60 shadow-xl shadow-blue-900/5 rounded-2xl p-3 md:p-5">
            <form class="flex items-center gap-2 md:gap-3">
                <input type="url" placeholder="https://example.com/very-long-url..." required
                    class="flex-1 min-w-0 bg-white/90 px-3.5 md:px-5 py-2.5 md:py-3.5 text-sm md:text-base rounded-xl border border-gray-200/80 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:bg-white transition">
                <button type="submit"
                    class="shrink-0 bg-blue-600 hover:bg-blue-700 active:scale-95 text-white text-sm md:text-base font-medium px-4 md:px-8 py-2.5 md:py-3.5 rounded-xl shadow-sm transition cursor-pointer">
                    Сократить
                </button>
            </form>
        </section>

        <section class="flex flex-col gap-4">
            <div class="flex items-center justify-between px-1">
                <h3 class="text-xs md:text-sm font-semibold uppercase tracking-wider text-gray-500">
                    Ваши ссылки
                </h3>
                <span class="text-xs text-gray-400">2 активные</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-4">

                <div
                    class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 hover:border-blue-200 transition flex items-center justify-between gap-3">
                    <div class="min-w-0 flex-1">
                        <p class="text-xs text-gray-400 truncate"
                            title="https://example.com/articles/how-to-learn-tailwind-css-in-2026">
                            https://example.com/articles/how-to-learn-tailwind-css-in-2026
                        </p>
                        <a href="#"
                            class="text-sm md:text-base font-semibold text-blue-600 hover:underline block mt-0.5 truncate">
                            smart.link/x9aK2
                        </a>
                    </div>

                    <div class="shrink-0 flex items-center gap-2">
                        <div class="flex flex-col items-end bg-gray-50 px-2.5 py-1.5 rounded-lg border border-gray-100">
                            <span class="text-sm font-bold text-gray-800 leading-none">142</span>
                            <span class="text-[10px] text-gray-400 mt-0.5">переходов</span>
                        </div>

                        <button type="button" title="Скопировать ссылку"
                            class="p-2.5 text-gray-500 hover:text-blue-600 bg-gray-50 hover:bg-blue-50 active:scale-95 rounded-lg border border-gray-100 hover:border-blue-200 transition cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.8" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                            </svg>
                        </button>

                        <button type="button" title="Удалить ссылку"
                            class="p-2 sm:p-2.5 text-gray-400 hover:text-red-600 bg-gray-50 hover:bg-red-50 active:scale-95 rounded-lg border border-gray-100 hover:border-red-200 transition cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.8" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div
                    class="bg-white rounded-xl p-4 shadow-sm border border-gray-100 hover:border-blue-200 transition flex items-center justify-between gap-3">
                    <div class="min-w-0 flex-1">
                        <p class="text-xs text-gray-400 truncate"
                            title="https://github.com/laravel/framework/releases/tag/v13.0.0">
                            https://github.com/laravel/framework/releases/tag/v13.0.0
                        </p>
                        <a href="#"
                            class="text-sm md:text-base font-semibold text-blue-600 hover:underline block mt-0.5 truncate">
                            smart.link/lr13
                        </a>
                    </div>

                    <div class="shrink-0 flex items-center gap-2">
                        <div class="flex flex-col items-end bg-gray-50 px-2.5 py-1.5 rounded-lg border border-gray-100">
                            <span class="text-sm font-bold text-gray-800 leading-none">8</span>
                            <span class="text-[10px] text-gray-400 mt-0.5">переходов</span>
                        </div>

                        <button type="button" title="Скопировать ссылку"
                            class="p-2.5 text-gray-500 hover:text-blue-600 bg-gray-50 hover:bg-blue-50 active:scale-95 rounded-lg border border-gray-100 hover:border-blue-200 transition cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.8" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                            </svg>
                        </button>

                        <button type="button" title="Удалить ссылку"
                            class="p-2 sm:p-2.5 text-gray-400 hover:text-red-600 bg-gray-50 hover:bg-red-50 active:scale-95 rounded-lg border border-gray-100 hover:border-red-200 transition cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.8" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <footer class="w-full bg-gray-900 text-gray-400 text-xs md:text-sm">
        <div class="w-full max-w-4xl mx-auto px-4 md:px-8 py-5 text-center">
            <p>&copy; 2026 SmartLink. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
