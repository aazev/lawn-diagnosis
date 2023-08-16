@php
    $randomQuote = Quote::getRandom();
@endphp
<footer class="bg-white shadow dark:bg-gray-800">
    <div class="mx-auto w-full max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <p class="text-sm font-medium">
            <span class="quote">{{ $randomQuote->quote }}</span> - {{ $randomQuote->author }}
        </p>
        <span class="whitespace-nowrap text-xs text-gray-500 dark:text-gray-400 sm:text-center">
            © 2023 <a href="{{ route('home') }}" class="hover:underline">LawnDiag™</a>. All Rights Reserved.
        </span>
    </div>
</footer>
