<div>
    <canvas id="salesChart" wire:ignore></canvas>

    @push('scripts')
        <script>
            document.addEventListener('livewire:load', function () {
                var ctx = document.getElementById('salesChart').getContext('2d');

                window.salesChart = new Chart(ctx, {
                    type: 'pie',
                    data: @json($data),
                });
            });
        </script>
    @endpush
</div>
