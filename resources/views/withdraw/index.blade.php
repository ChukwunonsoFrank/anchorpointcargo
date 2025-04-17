<x-app-layout>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4 w-96">
        @if (session('error'))
            <p>{{ session('error') }}</p>
        @endif

        @if (session('message'))
            <p>{{ session('message') }}</p>
        @endif
        <p>Withdrawal</p>
        <br>
        <p><b>Wallet Balance</b>: ${{ $balance }}</p>
        <form action="/withdraw/initiate" method="post">
            @csrf
            <input type="number" name="amount" required="">
            <select name="payment_method" required="">
                <option value="Bitcoin">Bitcoin</option>
                <option value="Ethereum">Ethereum</option>
            </select>

            <input type="submit" value="Submit">
        </form>
    </div>
</x-app-layout>