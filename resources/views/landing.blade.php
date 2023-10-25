<x-front-layout>
  <!-- Hero -->
  <section class="container relative pb-[100px] pt-[30px]">
    <div class="flex flex-col items-center justify-center gap-[30px]">
      <!-- Preview Image -->
      <div class="relative">
        <div class="absolute z-0 hidden lg:block">
          <div class="text-[220px] font-extrabold leading-[101%] tracking-[-0.06em] text-darkGrey">
            <div data-aos="fade-right" data-aos-delay="300">
              NEW
            </div>
            <div data-aos="fade-left" data-aos-delay="600">
              PORSCHE
            </div>
          </div>
        </div>
        <img src="/images/porsche.webp" class="relative z-10 w-full max-w-[963px]" alt="" data-aos="zoom-in" data-aos-delay="950">
      </div>

      <div class="flex flex-col items-center justify-around gap-7 lg:flex-row lg:gap-[60px]">
        <!-- Car Details -->
        <div class="flex items-center gap-y-12">
          <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left" data-aos-delay="1400">
            <h6 class="text-center text-xl font-bold text-dark md:text-[26px]">
              380
            </h6>
            <p class="text-center text-sm font-normal text-secondary md:text-base">
              Horse Power
            </p>
          </div>
          <span class="vr" data-aos="fade-left" data-aos-delay="1600"></span>
          <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left" data-aos-delay="1900">
            <h6 class="text-center text-xl font-bold text-dark md:text-[26px]">
              12S
            </h6>
            <p class="text-center text-sm font-normal text-secondary md:text-base">
              Speed AT
            </p>
          </div>
          <span class="vr" data-aos="fade-left" data-aos-delay="2100"></span>
          <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left" data-aos-delay="2400">
            <h6 class="text-center text-xl font-bold text-dark md:text-[26px]">
              AWD
            </h6>
            <p class="text-center text-sm font-normal text-secondary md:text-base">
              Drive
            </p>
          </div>
          <span class="vr" data-aos="fade-left" data-aos-delay="2600"></span>
          <div class="flex flex-col items-center gap-[2px] px-3 md:px-10" data-aos="fade-left" data-aos-delay="2900">
            <h6 class="text-center text-xl font-bold text-dark md:text-[26px]">
              A.I
            </h6>
            <p class="text-center text-sm font-normal text-secondary md:text-base">
              Tracking
            </p>
          </div>
        </div>
        <!-- Button Primary -->
        <div class="group rounded-full bg-primary p-1" data-aos="zoom-in" data-aos-delay="3400">
        <a href="http://127.0.0.1:8000/detail/porsche-911-jg6qi" class="btn-primary">
          <p>
            Rent Now
          </p>
          <img src="/svgs/ic-arrow-right.svg" alt="">
        </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Popular Cars -->
  <section class="bg-darkGrey">
    <div class="container relative py-[100px]">
      <header class="mb-[30px]">
        <h2 class="mb-1 text-[26px] font-bold text-dark">
          Catalog
        </h2>
        <p class="text-base text-secondary">Start your big day</p>
      </header>

      <!-- Cars -->
      <div class="grid gap-[29px] md:grid-cols-2 lg:grid-cols-4">
        @foreach ($items as $item)
          <!-- Card -->
          <div class="card-popular">
            <div>
              <h5 class="mb-[2px] text-lg font-bold text-dark">
                {{ $item->name }}
              </h5>
              <p class="text-sm font-normal text-secondary">
                {{ $item->type ? $item->type->name : '-' }}
              </p>
              <a href="{{ route('front.detail', $item->slug) }}" class="absolute inset-0"></a>
            </div>
            <img src="{{ $item->thumbnail }}" class="h-[150px] w-full min-w-[216px] rounded-[18px]" alt="">
            <div class="flex items-center justify-between gap-1">
              <!-- Price -->
              <p class="text-sm font-normal text-secondary">
                <span class="text-base font-bold text-primary">Rp{{ number_format($item->price) }}</span>/day
              </p>
              <!-- Rating -->
              <p class="flex items-center gap-[2px] text-xs font-semibold text-dark">
                ({{ $item->star }}/5)
                <img src="/svgs/ic-star.svg" alt="">
              </p>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  
  <!--Button Brnefits-->

<div id="benefits-section" class="flex items-center gap-4">
  <!-- Extra Benefits -->
  <section class="container relative pt-[100px]">
    <div class="flex flex-col flex-wrap items-center justify-center gap-8 md:flex-row lg:gap-[120px]">
      <img src="/images/illustration-01.webp" class="w-full lg:max-w-[536px]" alt="">
      <div class="w-full max-w-[268px]">
        <div class="flex flex-col gap-[30px]">
          <header>
            <h2 class="mb-1 text-[26px] font-bold text-dark" data-aos="fade-right" data-aos-delay="300">
              Extra Benefits11
            </h2>
            <p class="text-base text-secondary" data-aos="fade-right" data-aos-delay="300">You drive safety and famous</p>
          </header>
          <!-- Benefits Item -->
          <div class="flex items-center gap-4">
            <div class="rounded-[26px] bg-dark p-[19px]">
              <img src="/svgs/ic-car.svg" alt="">
            </div>
            <div>
              <h5 class="mb-[2px] text-lg font-bold text-dark">
                Delivery
              </h5>
              <p class="text-sm font-normal text-secondary">Just sit tight and wait</p>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="rounded-[26px] bg-dark p-[19px]">
              <img src="/svgs/ic-card.svg" alt="">
            </div>
            <div>
              <h5 class="mb-[2px] text-lg font-bold text-dark">
                Pricing
              </h5>
              <p class="text-sm font-normal text-secondary">12x Pay Installment</p>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="rounded-[26px] bg-dark p-[19px]">
              <img src="/svgs/ic-securityuser.svg" alt="">
            </div>
            <div>
              <h5 class="mb-[2px] text-lg font-bold text-dark">
                Secure
              </h5>
              <p class="text-sm font-normal text-secondary">Use your plate number</p>
            </div>
          </div>
          <div class="flex items-center gap-4">
            <div class="rounded-[26px] bg-dark p-[19px]">
              <img src="/svgs/ic-convert3dcube.svg" alt="">
            </div>
            <div>
              <h5 class="mb-[2px] text-lg font-bold text-dark">
                Fast Trade
              </h5>
              <p class="text-sm font-normal text-secondary">Change car faster</p>
            </div>
          </div>
        </div>
</div>        
        <!-- CTA Button -->
          <div class="mt-[50px]">
            <!-- Button Primary -->
            <div class="group rounded-full bg-primary p-1">
              <a href="https://wa.me/08977484636" class="btn-primary">
                <p>
                  Contact Admin
                </p>
                <img src="/svgs/ic-arrow-right.svg" alt="">
              </a>
            </div>
          </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="container relative py-[100px]">
    <header class="mb-[50px] text-center">
      <h2 class="mb-1 text-[26px] font-bold text-dark">
        Pertanyaan yang Sering Diajukan
      </h2>
      <p class="text-base text-secondary">Pelajari Lebih Lanjut Mengenai Vrom</p>
    </header>

    <!-- Questions -->
    <div class="mx-auto grid w-full max-w-[910px] gap-x-[50px] gap-y-6 md:grid-cols-2">
      <a href="#!" class="accordion h-min max-w-[430px] rounded-[24px] border border-grey px-6 py-4" id="faq1">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            Bagaimana apabila mobil menabrak?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden max-w-[335px] pt-4" id="faq1-content">
          <p class="text-base leading-[26px] text-dark">
            Maka harus mengganti rugi sesuai biaya perbaikan.
          </p>
        </div>
      </a>
      <a href="#!" class="accordion h-min max-w-[430px] rounded-[24px] border border-grey px-6 py-4" id="faq2">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            Pembayaran apakah dihitung per 24 jam?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden max-w-[335px] pt-4" id="faq2-content">
          <p class="text-base leading-[26px] text-dark">
            Iya benar, Vrom mempermudah penyewa dengan menawarkan harga mobil per 24 jam.
          </p>
        </div>
      </a>
      <a href="#!" class="accordion h-min max-w-[430px] rounded-[24px] border border-grey px-6 py-4" id="faq3">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            Apakah ada peraturan tersendiri mengenai dana bensin?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden max-w-[335px] pt-4" id="faq3-content">
          <p class="text-base leading-[26px] text-dark">
            Bensin harus kembali minimal sama dengan bensin saat disewa.
          </p>
        </div>
      </a>
      <a href="#!" class="accordion h-min max-w-[430px] rounded-[24px] border border-grey px-6 py-4" id="faq4">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            Denda telat pengembalian dihitung per berapa jam?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden max-w-[335px] pt-4" id="faq4-content">
          <p class="text-base leading-[26px] text-dark">
            Akan didenda per hari pengembalian seharusnya, maka bila terlambat melebihi jam seharusnya maka akan denda 1 hari peminjaman lagi.
          </p>
        </div>
      </a>
      <a href="#!" class="accordion h-min max-w-[430px] rounded-[24px] border border-grey px-6 py-4" id="faq5">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            Rental Vrom ada di mana saja?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden max-w-[335px] pt-4" id="faq5-content">
          <p class="text-base leading-[26px] text-dark">
            Kini Vrom tidak hanya ada di Indonesia, melainkan ada juga di Korea,India, serta Arab Saudi.
          </p>
        </div>
      </a>
      <a href="#!" class="accordion h-min max-w-[430px] rounded-[24px] border border-grey px-6 py-4" id="faq6">
        <div class="flex items-center justify-between gap-1">
          <p class="text-base font-semibold text-dark">
            Vrom melayani mulai dari jam berapa hingga berapa?
          </p>
          <img src="/svgs/ic-chevron-down-rounded.svg" class="transition-all" alt="">
        </div>
        <div class="hidden max-w-[335px] pt-4" id="faq6-content">
          <p class="text-base leading-[26px] text-dark">
            Vrom memiliki jam kerja 24 jam, jadi anda jangan khawatir apabila tidak menemukan tempat untuk rental disaat membutuhkan.
          </p>
        </div>
      </a>
    </div>
  </section>

  <!--Button Maps-->

<!-- Maps Section -->
<section class="relative bg-[#060523]">
<div id="maps-section" class="flex items-center gap-4">
  <div class="container py-20">
    <div class="flex flex-col">
      <header class="mb-[50px] w-full max-w-[360px]">
        <h2 class="mb-4 text-[26px] font-bold text-white">
          Our Location
        </h2>
        <p class="text-base text-subtlePars">Discover our rental location and get directions.</p>
      </header>
      <!-- Map Iframe -->
      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12345.67890!2d112.7705043!3d-7.2689206!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0:0x0!2zM8KwMTEnMjAuMCJF!5e0!3m2!1sen!2sid!4v1234567890123"
          frameborder="0"
          style="border:0;"
          allowfullscreen=""
          aria-hidden="false"
          tabindex="0"
          width="100%"
          height="100%"
        ></iframe>
      </div>
    </div>
  </div>
</div>
</section>



  <footer class="container py-10 md:pt-[100px] md:pb-[70px]">
    <p class="text-center text-base text-secondary">
      Copyright BuildWith DivaFirnandaazz Airlangga 2023.
    </p>
  </footer>
</x-front-layout>
