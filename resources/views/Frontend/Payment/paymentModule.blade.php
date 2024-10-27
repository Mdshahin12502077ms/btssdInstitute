<div class="modal fade" id="payment-modal" tabindex="-1" role="dialog"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">

            @php
                $backend_setting=App\Models\BackendSettings::first();
            @endphp
            <img src="{{asset($backend_setting->logo)}}" alt="Logo">
            <h2>{{ Auth::user()->name }}</h2>
            <button type="button" class="footer-btn bg-dark-low"
            data-dismiss="modal" style="background-color: white">X</button>
        </div>

        <!-- Navigation tabs -->
        <hr class="" style="background-color: #08889e;height:2vh">
        </hr>

        <div class="modal-body">

            <div class="payment-methods">
                <form action="{{ route('bkash-create-payment') }}" method="get">
                    <input type="hidden" name="amount" id="pay_amount" >
                    <input type="hidden" name="amountId" id="pay_id" >
                    <button type="submit" class="btn btn-outline-secondary pbutton">
                     <img src="{{asset('Backend/image/logo/bkash.png')}}" alt="bkash">
                     {{-- <h4 class="mt-2">BKASH</h4> --}}
                    </button>
                </form>

                <form action="{{ route('bkash-create-payment') }}" method="get">
                    <input type="hidden" name="amount" id="pay_amount" >
                    <input type="hidden" name="amountId" id="pay_id" >
                    <button type="submit" class="btn btn-outline-secondary pbutton">
                     <img src="{{asset('Backend/image/logo/Nagad-Logo.wine.png')}}" alt="nagad">
                     {{-- <h4 class="mt-2">BKASH</h4> --}}
                    </button>
                </form>

                <form action="{{ route('bkash-create-payment') }}" method="get">
                    <input type="hidden" name="amount" id="pay_amount" >
                    <input type="hidden" name="amountId" id="pay_id" >
                    <button type="submit" class="btn btn-outline-secondary pbutton">
                     <img src="{{asset('Backend/image/logo/rocket.png')}}" alt="rocket">
                     {{-- <h4 class="mt-2">BKASH</h4> --}}
                    </button>
                </form>
                <img src="https://via.placeholder.com/80x40?text=Upay" alt="Upay">
                <img src="https://via.placeholder.com/80x40?text=Cellfin" alt="Cellfin">
            </div>

            <hr class="" style="background-color: #08889e;height:2px"></hr>
                <div class="modal-footer">
                    <input class="pay-btn text-center" type="text" readonly name="amount" id="pay_amount1">
                </div>
            </form>
        </div>

    </div>
</div>
</div>






