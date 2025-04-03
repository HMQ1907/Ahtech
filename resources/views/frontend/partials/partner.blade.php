<section class="py-16 md:py-24 bg-gray-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">Our Partners</h2>
            <div class="w-24 h-1 bg-primary-600 mx-auto mb-6"></div>
            <p class="max-w-2xl mx-auto text-gray-600 text-lg">
                We collaborate with industry-leading technology providers to deliver the best solutions for our clients.
            </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-8 items-center justify-items-center"
            data-aos="fade-up">
            <!-- Partner Logos - Row 1 -->
            @foreach ($partners as $item)
                <div
                    class="p-6 bg-white rounded-lg shadow-md hover:shadow-lg transition-all duration-300 flex items-center justify-center h-32 w-full">
                    <img src="{{ asset($item->logo) }} " alt="{{ $item->name }}" class="max-h-16 max-w-full">
                </div>
            @endforeach
        </div>
    </div>
</section>
