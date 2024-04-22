
    <?php get_header() ;?>
<!-- component -->


<script>
document.addEventListener("DOMContentLoaded", function() {
  const slider = document.querySelector('.slider');
  let slideIndex = 0;

  function showSlides() {
    const slides = slider.querySelectorAll('img');
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }

    slides[slideIndex - 1].style.display = "block";
  }

  setInterval(showSlides, 2000);
});

</script>

<section class="w-full">
    <div class="slider-wrapper">
      <div class="slider">
        <img id="slide-1" src="https://golafrooz.com/wp-content/uploads/2024/04/1.jpeg" alt="golafrooz">
        <img id="slide-2" src="https://golafrooz.com/wp-content/uploads/2024/04/2.jpg" alt="golafrooz">
        <img id="slide-3" src="https://golafrooz.com/wp-content/uploads/2024/04/3-scaled.jpeg" alt="golafrooz">
        <img id="slide-4" src="https://golafrooz.com/wp-content/uploads/2024/04/4.jpg" alt="golafrooz">
        <img id="slide-5" src="https://golafrooz.com/wp-content/uploads/2024/04/5-scaled.jpg" alt="golafrooz">
        <img id="slide-6" src="https://golafrooz.com/wp-content/uploads/2024/04/6-scaled.jpg" alt="golafrooz">
        <img id="slide-7" src="https://golafrooz.com/wp-content/uploads/2024/04/7.jpeg" alt="golafrooz">
        <img id="slide-8" src="https://golafrooz.com/wp-content/uploads/2024/04/8-scaled.jpeg" alt="golafrooz">
      </div>
      <div class="slider-nav">
      <a href="#slide-1"></a>
        <a href="#slide-2"></a>
        <a href="#slide-3"></a>
        <a href="#slide-4"></a>
        <a href="#slide-5"></a>
      </div>
    </div>
  </section>
<!-- <div>--------------------------------------------</div> -->

<!-- <div>--------------------------------------------</div> -->
<section id="features" class=" px-2 space-y-6 py-8 md:py-12 lg:py-24 max-w-5xl mx-auto">
    <div class="mx-auto flex max-w-[58rem] flex-col items-center space-y-4 text-center">
        <h2 class="font-heading text-green-800 text-3xl leading-[1.1] sm:text-3xl md:text-6xl pb-8 font-bold">...شرکت گلخانه سازی گل افروز</h2>
        <p class="pb-8 max-w-[85%] leading-normal text-muted-foreground sm:text-lg sm:leading-7">
        شرکت گل افروز پس از سالها فعالیت در زمینه ساخت گلخانه های مدرن و صنعتی در سال ۱۳۹۸ به شماره: ۴۴۶۲۳ در تهران بزرگ به ثبت رسید. ما در این شرکت توانسته ایم با بیش از یک دهه فعالیت، سالانه مساحتی بالغ بر ۱۵۰هکتار از اراضی میهن عزیزمان را به گلخانه های صنعتی و مدرن تبدیل کنیم و همزمان با تولید تجهیزات و سازه های گلخانه ای، از مرحله طراحی تا عرضه ی این محصولات با بالاترین کیفیت ممکن، در بازارهای داخلی و خارجی فعالیت موثر و موفق داشته باشیم.
    </div>
    <div class="mx-auto grid justify-center gap-4 sm:grid-cols-2 md:max-w-[64rem] md:grid-cols-3">
        <div class=" relative overflow-hidden rounded-lg border border-gray-900 bg-gray-100/50 p-2">
            <div class="items-end text-right bg-blue-200 flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                    width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="">
                    <polygon points="12 2 19 21 12 17 5 21 12 2"></polygon>
                </svg>
                <div class="space-y-2">
                    <h3 class="font-bold">مشاوره رایگان</h3>
                    <p class="text-sm text-muted-foreground">قبل از هرکاری با متخصصان ما مشاوره بگیرید
                    </p>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden rounded-lg border bg-gray-100/50 p-2 border-gray-900">
            <div class="items-end text-right bg-blue-200 flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                    width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="12" y1="8" x2="12" y2="16"></line>
                    <line x1="12" y1="16" x2="16" y2="12"></line>
                    <line x1="12" y1="16" x2="8" y2="12"></line>
                </svg>
                <div class="space-y-2">
                    <h3 class="font-bold">خدمات</h3>
                    <p class="text-sm text-muted-foreground">گل افروز با سال ها تجربه در کنار شماست
                        tools.</p>
                </div>
            </div>
        </div>
        <div class="relative overflow-hidden rounded-lg border border-gray-900 bg-gray-100/50 p-2">
            <div class="items-end text-right bg-blue-200 flex h-[180px] flex-col justify-between rounded-md p-6"><svg xmlns="http://www.w3.org/2000/svg"
                    width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="3" y1="15" x2="21" y2="15"></line>
                    <line x1="9" y1="3" x2="9" y2="21"></line>
                    <line x1="15" y1="3" x2="15" y2="21"></line>
                </svg>
                <div class="space-y-2">
                    <h3 class="font-bold">محصولات</h3>
                    <p class="text-sm text-muted-foreground">بالاترین کیفیت نازلترین قیمت.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div>--------------------------------------------</div>

<div class="p-1 flex flex-wrap items-center justify-center">

    <div class="flex-shrink-0 m-6 relative overflow-hidden bg-orange-500 rounded-lg max-w-xs shadow-lg">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
            style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
            </div>
            <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
            
            <span class="block opacity-75 mb-1 text-right">راهنمای</span>
            <div class="flex justify-between">
            <span class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">بیشتر</span>
                <span class="block font-semibold text-l ">گلخانه اسپانیایی</span>
                
            </div>
        </div>
    </div>
    <div class="flex-shrink-0 m-6 relative overflow-hidden bg-teal-500 rounded-lg max-w-xs shadow-lg">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
            style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
            </div>
            <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069998-305de300-cc9a-11e9-8ae7-5a0fe00299f2.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
        <span class="block opacity-75 mb-1 text-right">راهنمای</span>
            <div class="flex justify-between">
            <span class="block bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center">بیشتر</span>
                <span class="block font-semibold text-l ">گلخانه هلندی</span>
                
            </div>
        </div>
    </div>
    <div class="flex-shrink-0 m-6 relative overflow-hidden bg-purple-500 rounded-lg max-w-xs shadow-lg">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
            style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
            </div>
            <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
        <span class="block opacity-75 mb-1 text-right">راهنمای</span>
            <div class="flex justify-between">
            <span class="block bg-white rounded-full text-purple-500 text-xs font-bold px-3 py-2 leading-none flex items-center">بیشتر</span>
                <span class="block font-semibold text-l ">گلخانه سیرکولار</span>
                
            </div>
        </div>
    </div>

    <div class="flex-shrink-0 m-6 relative overflow-hidden bg-amber-500 rounded-lg max-w-xs shadow-lg">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
            style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
            </div>
            <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
        <span class="block opacity-75 mb-1 text-right">راهنمای</span>
            <div class="flex justify-between">
            <span class="block bg-white rounded-full text-amber-500 text-xs font-bold px-3 py-2 leading-none flex items-center">بیشتر</span>
                <span class="block font-semibold text-l ">گلخانه هیدروپونیک</span>
                
            </div>
        </div>
    </div>

    <div class="flex-shrink-0 m-6 relative overflow-hidden bg-pink-500 rounded-lg max-w-xs shadow-lg">
        <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
            style="transform: scale(1.5); opacity: 0.1;">
            <rect x="159.52" y="175" width="152" height="152" rx="8" transform="rotate(-45 159.52 175)" fill="white" />
            <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)" fill="white" />
        </svg>
        <div class="relative pt-10 px-10 flex items-center justify-center">
            <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
            </div>
            <img class="relative w-40" src="https://user-images.githubusercontent.com/2805249/64069899-8bdaa180-cc97-11e9-9b19-1a9e1a254c18.png" alt="">
        </div>
        <div class="relative text-white px-6 pb-6 mt-6">
        <span class="block opacity-75 mb-1 text-right">راهنمای</span>
            <div class="flex justify-between">
            <span class="block bg-white rounded-full text-pink-500 text-xs font-bold px-3 py-2 leading-none flex items-center">بیشتر</span>
                <span class="block font-semibold text-l ">گلخانه ایرانی</span>
                
            </div>
        </div>
    </div>
    

  <div>-----------------------------------</div>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<main class="grid min-h-screen w-full bg-gray-900">

<div class="relative overflow-hidden bg-whit ">
    <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
      <div class="relative mx-auto max-w-7xl px-4 sm:static sm:px-6 lg:px-8">
        <div class="sm:max-w-lg">
          <h1 class="text-right font text-4xl font-bold tracking-tight text-gray-100 sm:text-6xl mb-8">افتخارات شرکت گلخانه سازی گل افروز</h1>
          <p class="text-right mt-4 text-xl text-gray-100">درباره شرکت پالیز کامیاب گل افروز
شرکت پالیز کامیاب گل افروز پس از سال ها فعالیت در زمینه ساخت گلخانه های مدرن و صنعتی در سال ۱۳۹۸ به شماره : ۴۴۶۲۳ در تهران بزرگ به ثبت رسید .
ما در این شرکت توانسته ایم با بیش از یک دهه فعالیت، سالانه مساحتی بالغ بر ۱۵۰ هکتار از اراضی میهن عزیزمان را به گلخانه های صنعتی و مدرن تبدیل کنیم و همزمان با تولید تجهیزات و سازه های گلخانه ای، از مرحله طراحی تا عرضه ی این محصولات با بالاترین کیفیت ممکن، در بازارهای داخلی و خارجی فعالیت موثر و موفق داشته باشیم..</p>
        </div>
        <div>
          <div class="mt-10">
            <!-- Decorative image grid -->
            <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:mx-auto lg:w-full lg:max-w-7xl">
              <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
                <div class="flex items-center space-x-6 lg:space-x-8">
                  <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class="h-64 w-44 overflow-hidden rounded-lg sm:opacity-0 lg:opacity-100">
                      <img src="https://golafrooz.com/wp-content/uploads/2023/12/IMG_20231202_114145_272-1536x783.jpg" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="https://golafrooz.com/wp-content/uploads/2024/01/SAVE_20240128_141240-1536x1536.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                  </div>
                  <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="https://golafrooz.com/wp-content/uploads/2024/01/SAVE_20240128_141234.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="https://golafrooz.com/wp-content/uploads/2023/12/IMG_20231202_145945_978-1-1536x287.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="https://golafrooz.com/wp-content/uploads/2020/09/%DA%A9%D8%A7%D9%88%D8%B1-%D8%B4%D8%B1%DA%A9%D8%AA-%D9%84%D9%88%DA%AF%D9%88-%D8%B3%D9%85%D8%AA-%D8%B1%D8%A7%D8%B3%D8%AA.png" alt="" class="h-full w-full object-cover object-center">
                    </div>
                  </div>
                  <div class="grid flex-shrink-0 grid-cols-1 gap-y-6 lg:gap-y-8">
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="https://www.recordonline.com/gcdn/authoring/2018/05/12/NTHR/ghows-TH-6c0a1946-bf05-3f48-e053-0100007fd6c6-efa587bf.jpeg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="h-64 w-44 overflow-hidden rounded-lg">
                      <img src="https://www.ku.ac.ae/wp-content/uploads/2018/09/8b4135a36931c7b37fdbe3d893413823_L.jpg" alt="" class="h-full w-full object-cover object-center">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <a href="#" class="inline-block rounded-md border border-transparent bg-indigo-600 py-3 px-8 text-center font-medium text-white hover:bg-indigo-700">بیشتر بخوانید</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<div>-----------------------------------</div>
<p class="justify-center items-center text-4xl font-bold p-10">محصولات</p>
<div>-----------------------------------</div>
<script src="https://cdn.jsdelivr.net/npm/tailwindcss-cdn@3.4.1/tailwindcss.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<div x-data="swipeCards()" x-init="
			let isDown = false;
			let startX;
			let scrollLeft;
			$el.addEventListener('mousedown', (e) => {
			isDown = true;
			startX = e.pageX - $el.offsetLeft;
			scrollLeft = $el.scrollLeft;
			});
			$el.addEventListener('mouseleave', () => {
			isDown = false;
			});
			$el.addEventListener('mouseup', () => {
			isDown = false;
			});
			$el.addEventListener('mousemove', (e) => {
			if (!isDown) return;
			e.preventDefault();
			const x = e.pageX - $el.offsetLeft;
			const walk = (x - startX) * 1;
			$el.scrollLeft = scrollLeft - walk;
			});
			" class="overflow-x-scroll scrollbar-hide mb-4 relative px-0.5" style="overflow-y: hidden;">
	<div class="flex snap-x snap-mandatory gap-4" style="width: max-content;">
		<template x-for="card in cards" :key="card.id">
			<div class="flex-none w-64 snap-center">
				<div class="bg-white border-1 border border-gray-200 rounded-lg overflow-hidden mb-4">
					<img :src="card.image" alt="" class="w-full h-60 object-cover">
					<div class="p-4">
						<h3 class="text-lg leading-6 font-bold text-gray-900" x-text="card.title"></h3>
						<p class="text-gray-600 mt-2 text-sm" x-text="card.description"></p>
						<div class="flex justify-between items-center mt-4">
							<span class="text-2xl font-extrabold text-gray-900" x-text="'$' + card.price.toFixed(2)"></span>
							<a :href="card.link"
								class="text-white bg-gray-900 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 width="28px" height="22px" viewBox="0 0 414.287 414.287"
	 xml:space="preserve" >
<g>
	<path d="M412.398,202.993L288.535,95.289c-1.502-1.305-3.591-1.699-5.463-1.027c-1.873,0.67-3.237,2.3-3.568,4.261l-8.938,52.887
		H40.554c-2.684,0-4.976,1.938-5.423,4.583l-3.054,18.067c-0.27,1.597,0.177,3.23,1.223,4.467c1.045,1.237,2.581,1.95,4.2,1.95
		h103.982l-2.208,15H8.134c-2.684,0-4.976,1.938-5.423,4.583l-2.634,15.584c-0.27,1.597,0.177,3.229,1.223,4.467
		c1.045,1.236,2.581,1.949,4.2,1.949h159.196l-2.206,15H63.505c-2.684,0-4.976,1.938-5.423,4.583l-2.505,14.817
		c-0.271,1.597,0.177,3.229,1.222,4.467c1.046,1.237,2.582,1.95,4.201,1.95h190.721l-8.628,51.053
		c-0.366,2.168,0.593,4.346,2.439,5.538c0.908,0.586,1.945,0.879,2.982,0.879c1.07,0,2.141-0.312,3.067-0.935l160.272-107.704
		c1.421-0.955,2.316-2.518,2.422-4.225C414.385,205.776,413.689,204.116,412.398,202.993z"/>
</g>
</svg></a>
						</div>
					</div>
				</div>
			</div>
		</template>
	</div>
</div>
<script>
	function swipeCards() {
			  return {
			    cards: [
			      {
			        id: 1,
			        image: `https://golafrooz.com/wp-content/uploads/2023/11/%D9%BE%D8%B1%D9%88%D9%81%DB%8C%D9%84-%D9%82%D9%88%D8%B7%DB%8C-%DA%AF%D8%A7%D9%84%D9%88%D8%A7%D9%86%DB%8C%D8%B2%D9%87-10.jpg`,
			        title: 'پروفیل قوطی ۱۰*۱۰',
			        description: 'توضیحات مختصر و مفید درباره و تمام متعلقات مربوط به آن با دقت و وضوح',
			        
			        link: 'https://lqrs.com'
			      },
			      {
			        id: 2,
			        image: `https://golafrooz.com/wp-content/uploads/2023/11/%D8%AF%D8%B3%D8%AA%DA%AF%D8%A7%D9%87-%D9%81%D9%88%DA%AF%D8%B1.png`,
			        title: 'فوگر',
			        description: 'توضیحات مختصر و مفید درباره و تمام متعلقات مربوط به آن با دقت و وضوح',
			        
			        link: 'https://lqrs.com'
			      },
			      {
			        id: 3,
			        image: `https://golafrooz.com/wp-content/uploads/2023/11/%D8%A8%D8%B3%D8%AA-%D8%AF%D9%88%D9%BE%D9%88%D8%B4.jpg`,
			        title: 'بست دوپوش',
			        description: 'توضیحات مختصر و مفید درباره و تمام متعلقات مربوط به آن با دقت و وضوح',
			        
			        link: 'https://lqrs.com'
			      },
			      {
			        id: 4,
			        image: `https://golafrooz.com/wp-content/uploads/2023/11/%D8%B1%D8%A7%DA%A9-%D9%88-%D9%BE%DB%8C%D9%86%DB%8C%D9%88%D9%86-%D8%A7%DB%8C%D8%B1%D8%A7%D9%86%DB%8C.jpg`,
			        title: 'راک و پینیون ایرانی',
			        description: 'توضیحات مختصر و مفید درباره راک پینتون',
			        
			        link: 'https://lqrs.com'
			      },
			      {
			        id: 5,
			        image: `https://golafrooz.com/wp-content/uploads/2023/11/%D8%A8%D8%B3%D8%AA-%D8%AF%D9%88%D9%BE%D9%88%D8%B4.jpg`,
			        title: 'بست دوپوش',
			        description: ' توضیحات مختصر و مفید درباره بست دوش و تمامی متعلقات آن',
			        
			        link: 'https://lqrs.com'
			      },
			      {
			        id: 6,
			        image: `https://golafrooz.com/wp-content/uploads/2023/11/%D8%AF%D8%B3%D8%AA%DA%AF%D8%A7%D9%87-%D9%81%D9%88%DA%AF%D8%B1.png`,
			        title: 'فوگر',
			        description: 'توضیحات مختصر و مفید درباره و تمام متعلقات مربوط به آن با دقت و وضوح',
			        
			        link: 'https://lqrs.com'
			      },
			      {
			        id: 7,
			        image: `https://golafrooz.com/wp-content/uploads/2023/11/%D8%A8%D8%B3%D8%AA-%D8%AF%D9%88%D9%BE%D9%88%D8%B4.jpg`,
			        title: 'Bubble Tea',
			        description: 'توضیحات مختصر و مفید درباره و تمام متعلقات مربوط به آن با دقت و وضوح.',
			        
			        link: 'https://lqrs.com'
			      }
			    ],
			    addToCart(product) {
			      // Implement your add to cart logic here
			      console.log('Adding to cart:', product);
			    }
			  };
			}
</script>
<div>-----------------------------------</div>
<p class="justify-center items-center text-4xl font-bold p-10">وبلاگ</p>
<div>-----------------------------------</div>
<div class=" grid-cols-1 sm:grid md:grid-cols-3 text-right ">
  <div
    class=" mx-3 mt-6 flex flex-col rounded-lg bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
    <a href="#!">
      <img
        class="rounded-t-lg"
        src="https://images.squarespace-cdn.com/content/v1/624c46bc9a2d596197360925/ded2b25a-2957-4818-b81e-897011d30608/greenhouse-tomato-768x513.jpg"
        alt="Skyscrapers" />
    </a>
    <div class="p-6 bg-gray-900 rounded-b-lg">
      <h5 class="mb-2 text-xl font-bold leading-tight"> گلخانه سازی تسهیلات اعطایی گلخانه سازی  </h5>
      <p class="mb-4 text-base">
      تسهیلات شرکت گل افروز  جهت گلخانه سازی شرکت پالیز کامیاب گل افروز در راستای تحقق بخشیدن به اهداف ...
      </p>
    </div>
    <div
      class="bg-gray-900 mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
      <small>مطالعه بیشتر</small>
    </div>
  </div>

    <div
      class="mx-3 mt-6 flex flex-col rounded-lg bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
      <a href="#!">
        <img
          class="rounded-t-lg"
          src="https://cdn.theculturetrip.com/images/56-3939607-14411063429c4afa28086440c1b4ebf5950f592984.jpg"
          alt="Los Angeles Skyscrapers" />
      </a>
      <div class="p-6 bg-gray-900 rounded-b-lg">
        <h5 class="mb-2 text-xl font-bold leading-tight">وام گلخانه وام گلخانه</h5>
        <p class="mb-4 text-base">
        انواع وام  ساخت گلخانه وام گلخانه جهاد کشاورزی یکی از مهم‌ترین منابع تأمین مالی برای احداث و ساخت گلخانه، ...
        </p>
      </div>
      <div
        class="bg-gray-900 mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
        <small>مطالعه بیشتر </small>
      </div>
    </div>

    <div
      class="mx-3 mt-6 flex flex-col rounded-lg bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
      <a href="#!">
        <img
          class="rounded-t-lg"
          src="https://images.nightcafe.studio/jobs/aplComKFWFx8cftOJapL/aplComKFWFx8cftOJapL_2x.jpg"
          alt="Palm Springs Road" />
      </a>
      <div class="p-6 bg-gray-900 rounded-b-lg">
        <h5 class="mb-2 text-xl font-bold leading-tight">مراحل ساخت گلخانه</h5>
        <p class="mb-4 text-base">
        شرایط لازم برای ساخت گلخانه وام ساخت گلخانه شرکت گل افروز : این شرایط شامل افرادی می شود که ...
        </p>
      </div>
      <div
        class="bg-gray-900 mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
        <small>مطالعه بیشتر</small>
      </div>
      <div class=""></div>
    </div>
  </div>
<div>-----------------------------------------------</div>
<p class="justify-center items-center text-4xl font-bold p-10">کاتالوگ</p>
<div>-----------------------------------------------</div>
<section class="container p-10 mx-auto text-right">
      <div class="container mx-auto bg-card p-10 rounded-large">
          <h2 class="px-4 text-6xl pt-16 pb-4 mb-2 text-black font-bold font-roboto">ریتم</h2>
          <p class="px-4 text-2xl text-black pb-16 md:pr-10 font-roboto">برای موفقیت در کار گلخانه باید ریتم طبیعت را درک کرد و با آن همسو شد </p>
        </div>
      </div>
    </section>

<section class="container p-10 mx-auto text-right">
      <div class="bg-gray-100 bg-card-b p-6 rounded-large">
          <h2 class="px-4 text-6xl font-medium pt-16 pb-6 mb-2 font-roboto text-white">گسترش گلخانه</h2>
          <p class="px-4 text-2xl text-white pb-16 font-roboto"> قوانین موفقیت در همه ی کار ها اثرگذار است و در کار گلخانه بیشتر از هر کار دیگری جلوه می کند</p>
        </div>
      </div>
    </section>



<div class="flex flex-row items-center justify-center">
  <div>-----------------------------------------------</div>
    <p class="justify-center items-center text-4xl font-bold p-10">گالری</p>
  <div>-----------------------------------------------</div>
</div>
<div class="flex flex-col min-h-screen items-center justify-center bg-gray-900">
  <ul class="flex flex-col md:grid grid-cols-3 gap-5 text-redis-neutral-800 max-w-2xl mx-auto p-10 mt-10">
    <li
        class="w-full text-sm font-semibold text-slate-900 p-6 bg-white border border-slate-900/10 bg-clip-padding shadow-md shadow-slate-900/5 rounded-lg flex flex-col justify-center">
        <span class="mb-1 text-teal-400 font-display text-5xl">45K+</span>
        مشتریان
    </li>
    <li
        class="w-full text-sm font-semibold text-slate-900 p-6 bg-white border border-slate-900/10 bg-clip-padding shadow-md shadow-slate-900/5 rounded-lg flex flex-col justify-center">
        <span class="mb-1 text-teal-400 font-display text-5xl">78K+</span>
        بازدیدکنندگان
    </li>
    <li
        class="w-full text-sm font-semibold text-slate-900 p-6 bg-white border border-slate-900/10 bg-clip-padding shadow-md shadow-slate-900/5 rounded-lg flex flex-col justify-center">
        <span class="mb-1 text-teal-400 font-display text-5xl">50+</span>
        پروژه ها
    </li>
</ul>
    <span class="absolute mx-auto py-4 flex border w-fit bg-gradient-to-r blur-xl from-blue-500 via-teal-500 to-pink-500 bg-clip-text text-6xl box-content font-extrabold text-transparent text-center select-none">
    گالری تصاویر مجموعه گا افروز
  </span>
    <h1
        class="relative top-0 w-fit h-auto py-4 justify-center flex bg-gradient-to-r items-center from-blue-500 via-teal-500 to-pink-500 bg-clip-text text-6xl font-extrabold text-transparent text-center select-auto">
            گالری تصاویر مجموعه گا افروز

    </h1>
  <div class="mx-auto max-w-6xl px-6 p-8">
    <div class="flex">
      
      <div class="group relative h-96 w-24 hover:w-[30rem] cursor-pointer overflow-hidden transition-all duration-200">
        <img class="h-full object-cover group-hover:rotate-12 group-hover:scale-125 transition-all" src="https://savoura.com/wp-content/uploads/2019/07/gPmdKSvK.jpg" alt="green house" />
        <div class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
          <div class="absolute bottom-6 left-8">
            <div class="flex gap-3 text-white">
              <svg width="48" height="48" viewBox="0 0 32 32">
                <path d="M11 2H2v9h2V4h7V2z" fill="currentColor" />
                <path d="M2 21v9h9v-2H4v-7H2z" fill="currentColor" />
                <path d="M30 11V2h-9v2h7v7h2z" fill="currentColor" />
                <path d="M21 30h9v-9h-2v7h-7v2z" fill="currentColor" />
                <path d="M25.49 10.131-9-5a1 1 0 0 0-1 01-9 5A 1 0 0 0 6 11v10a1 1 0 0 0 .51.8719 5a1 1 0 0 0 .51.8719 5a1 1 0 0 0 1 0919-5A1 1 0 0 0" fill="currentColor" />
              </svg>
              <div>
                <p class="font-semibold text-xl text-gray-100">متن</p>
                <p class="text-gray-300">Better Design</p>
              </div1>
            </div>
          </div>

        </div>
      </div>
    </div>
          <div class="group relative h-96 w-24 hover:w-[30rem] cursor-pointer overflow-hidden transition-all duration-200">
        <img class="h-full object-cover group-hover:rotate-12 group-hover:scale-125 transition-all" src="https://atavita.com/wp-content/uploads/2023/12/WhatsApp-Image-2023-07-22-at-3.54.00-PM-1.jpeg" alt="green house" />
        <div class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
          <div class="absolute bottom-6 left-8 ">
            <div class="flex gap-3 text-white">
              <svg width="48" height="48" viewBox="0 0 32 32">
                <path d="M11 2H2v9h2V4h7V2z" fill="currentColor" />
                <path d="M2 21v9h9v-2H4v-7H2z" fill="currentColor" />
                <path d="M30 11V2h-9v2h7v7h2z" fill="currentColor" />
                <path d="M21 30h9v-9h-2v7h-7v2z" fill="currentColor" />
                <path d="M25.49 10.131-9-5a1 1 0 0 0-1 01-9 5A 1 0 0 0 6 11v10a1 1 0 0 0 .51.8719 5a1 1 0 0 0 .51.8719 5a1 1 0 0 0 1 0919-5A1 1 0 0 0" fill="currentColor" />
              </svg>
              <div>
                <p class="font-semibold text-xl text-gray-100">متن آزمایشی</p>
                <p class="text-gray-300">Better Design</p>
              </div1>
            </div>
          </div>
          <div class="flex justify-end gap-3 text-gray-200">
            svg place
          </div>
        </div>
      </div>
    </div>
    
          <div class="group relative h-96 w-24 hover:w-[30rem] cursor-pointer overflow-hidden transition-all duration-200">
        <img class="h-full object-cover group-hover:rotate-12 group-hover:scale-125 transition-all" src="https://savoura.com/wp-content/uploads/2019/07/2jRsf2Om.jpg" alt="green house" />
        <div class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
          <div class="absolute bottom-6 left-8">
            <div class="flex gap-3 text-white content-end items-end">
              <svg width="48" height="48" viewBox="0 0 32 32">
                <path d="M11 2H2v9h2V4h7V2z" fill="currentColor" />
                <path d="M2 21v9h9v-2H4v-7H2z" fill="currentColor" />
                <path d="M30 11V2h-9v2h7v7h2z" fill="currentColor" />
                <path d="M21 30h9v-9h-2v7h-7v2z" fill="currentColor" />
                <path d="M25.49 10.131-9-5a1 1 0 0 0-1 01-9 5A 1 0 0 0 6 11v10a1 1 0 0 0 .51.8719 5a1 1 0 0 0 .51.8719 5a1 1 0 0 0 1 0919-5A1 1 0 0 0" fill="currentColor" />
              </svg>
              <div>
                <p class="font-semibold text-xl text-gray-100">متن</p>
                <p class="text-gray-300">Better Design</p>
              </div1>
            </div>
          </div>
        </div>
      </div>
    </div>
          <div class="group relative h-96 w-24 hover:w-[30rem] cursor-pointer overflow-hidden transition-all duration-200">
        <img class="h-full object-cover group-hover:rotate-12 group-hover:scale-125 transition-all" src="https://savoura.com/wp-content/uploads/2019/08/DJI_Saguenay_01_VR.jpg" alt="green house" />
        <div class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
          <div class="absolute bottom-6 left-8">
            <div class="flex gap-3 text-white">
              <svg width="48" height="48" viewBox="0 0 32 32">
                <path d="M11 2H2v9h2V4h7V2z" fill="currentColor" />
                <path d="M2 21v9h9v-2H4v-7H2z" fill="currentColor" />
                <path d="M30 11V2h-9v2h7v7h2z" fill="currentColor" />
                <path d="M21 30h9v-9h-2v7h-7v2z" fill="currentColor" />
                <path d="M25.49 10.131-9-5a1 1 0 0 0-1 01-9 5A 1 0 0 0 6 11v10a1 1 0 0 0 .51.8719 5a1 1 0 0 0 .51.8719 5a1 1 0 0 0 1 0919-5A1 1 0 0 0" fill="currentColor" />
              </svg>
              <div>
                <p class="font-semibold text-xl text-gray-100">متن</p>
                <p class="text-gray-300">Better Design</p>
              </div1>
            </div>
          </div>

        </div>
      </div>
    </div>
          <div class="group relative h-96 w-24 hover:w-[30rem] cursor-pointer overflow-hidden transition-all duration-200">
        <img class="h-full object-cover group-hover:rotate-12 group-hover:scale-125 transition-all" src="https://savoura.com/wp-content/uploads/2019/08/DJI_Ste_Marthe_01_VR.jpg" alt="green house" />
        <div class="invisible absolute inset-0 bg-gradient-to-b from-green-500/20 to-black group-hover:visible">
          <div class="absolute bottom-6 left-8">
            <div class="flex gap-3 text-white">
              <svg width="48" height="48" viewBox="0 0 32 32">
                <path d="M11 2H2v9h2V4h7V2z" fill="currentColor" />
                <path d="M2 21v9h9v-2H4v-7H2z" fill="currentColor" />
                <path d="M30 11V2h-9v2h7v7h2z" fill="currentColor" />
                <path d="M21 30h9v-9h-2v7h-7v2z" fill="currentColor" />
                <path d="M25.49 10.131-9-5a1 1 0 0 0-1 01-9 5A 1 0 0 0 6 11v10a1 1 0 0 0 .51.8719 5a1 1 0 0 0 .51.8719 5a1 1 0 0 0 1 0919-5A1 1 0 0 0" fill="currentColor" />
              </svg>
              <div>
                <p class="font-semibold text-xl text-gray-100">متن</p>
                <p class="text-gray-300">Better all Design</p>
              </div1>
            </div>
          </div>
 
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="flex flex-row items-center justify-center">

</div>
  <section class="text-gray-900 dark:text-neutral-300">
  <div class="mx-auto text-center md:max-w-xl lg:max-w-3xl">
    <h3 class="mb-6 text-3xl font-bold text-gray-900">نظر مشتریان</h3>
    <p class="mb-6 pb-2 md:mb-12 md:pb-0 text-gray-900">نظری مشتریان درباره شکرت گلخانه سازی گل افروز </p>
  </div>

  <div class="grid gap-6 text-center md:grid-cols-3 p-10">
    <div>
      <div class="block rounded-lg bg-white shadow-lg dark:bg-gray-800 dark:shadow-black/30">
        <div class="h-28 overflow-hidden rounded-t-lg bg-gradient-to-r from-blue-500 via-teal-500 to-pink-500 "></div>
        <div class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
          <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" />
        </div>
        <div class="p-6">
          <h4 class="mb-4 text-2xl font-semibold">مریم سعادتی</h4>
          <hr />
          <p class="mt-4">
            <span class="inline-block pe-2 [&>svg]:w-5"
              ><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
              </svg>
            </span>
            خدماتشون بی نظیر بود همیشه به موقع و با حوصله پاسخ دادند وکیفیت محصولاتشون درجه یک است
          </p>
        </div>
      </div>
    </div>
    <div>
      <div class="block rounded-lg bg-white shadow-lg dark:bg-gray-800 dark:shadow-black/30">
        <div class="h-28 overflow-hidden rounded-t-lg bg-gradient-to-r from-pink-500 via-teal-500 to-blue-500"></div>
        <div class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
          <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" />
        </div>
        <div class="p-6">
          <h4 class="mb-4 text-2xl font-semibold">ندا آرزومند</h4>
          <hr />
          <p class="mt-4">
            <span class="inline-block pe-2 [&>svg]:w-5"
              ><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
              </svg>
            </span>
            در کمترین زمان ممکن یه گلخونه بزرگ رو احداث کردند  سرعت عملشون بی نظیره 
          </p>
        </div>
      </div>
    </div>
    <div>
      <div class="block rounded-lg bg-white shadow-lg dark:bg-gray-800 dark:shadow-black/30">
        <div class="h-28 overflow-hidden rounded-t-lg bg-gradient-to-r from-sky-500 via-teal-500 to-purple-500"></div>
        <div class="mx-auto -mt-12 w-24 overflow-hidden rounded-full border-2 border-white bg-white dark:border-neutral-800 dark:bg-neutral-800">
          <img src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" />
        </div>
        <div class="p-6">
          <h4 class="mb-4 text-2xl font-semibold">حسین شکری</h4>
          <hr />
          <p class="mt-4">
            <span class="inline-block pe-2 [&>svg]:w-5"
              ><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 448 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M0 216C0 149.7 53.7 96 120 96h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V320 288 216zm256 0c0-66.3 53.7-120 120-120h8c17.7 0 32 14.3 32 32s-14.3 32-32 32h-8c-30.9 0-56 25.1-56 56v8h64c35.3 0 64 28.7 64 64v64c0 35.3-28.7 64-64 64H320c-35.3 0-64-28.7-64-64V320 288 216z" />
              </svg>
            </span>
            اینو از زبون بزرگ ترین گلخانه دار ایران می شنوید این مجموعه بی نظیره 
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


</div>
<div class="min-h-screen w-full  py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div
            class="absolute inset-0 bg-gradient-to-r from-indigo-700 to-purple-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
        </div>
        <div class="text-white relative px-4 py-10 bg-indigo-400 shadow-lg sm:rounded-3xl sm:p-20">

            <div class="text-center pb-6">
                <h1 class="text-3xl">ارتباط با ما</h1>

                <p class="text-gray-300">
                    پیام خود را برای ما بگذارید تا در اولین فرصت با شما تماس گرفته شود 
                </p>
            </div>

       <form action="https://fabform.io/f/{form-id}" method="post">

                <input
                        class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Name" name="name">

                <input
                        class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="email" placeholder="Email" name="email">

                <input
                        class="shadow mb-4 appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Subject" name="_subject">

                <textarea
                        class="shadow mb-4 min-h-0 appearance-none border rounded h-64 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" placeholder="Type your message here..." name="message" style="height: 121px;"></textarea>

                <div class="flex justify-between">
                    <input
                        class="shadow bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit" value="Send ➤">
                    <input
                        class="shadow bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="reset">
                </div>
<a href="https://veilmail.io/e/FkKh7o" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Or click here to reveal our protected email address</a>
    
            </form>
        </div>
        
    </div>
</div>
  <div>-----------------------------------</div>

  <?php get_footer() ; ?>

