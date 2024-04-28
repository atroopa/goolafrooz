<?PHP
    $index_posts = new WP_Query(array(
        'post_type' => 'post',
        'post_per_page' => '3',
        'post_status' => 'publish'
    ));

    if($index_posts -> have_posts()){

?>

<div class="mx-auto max-w-screen-xl p-5 text-right sm:p-10 md:p-16">
    <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 md:grid-cols-3">
      <div class="shadow-2xl flex flex-col justify-between rounded-lg border-4 border-b border-gray-900 bg-gray-900 leading-normal lg:border-gray-900">
        <img src="https://golafrooz.com/wp-content/uploads/2024/04/2147483648_-210170-scaled.jpg" class="mb-3 h-full w-full rounded-lg" />
        <div class="p-4 pt-2">
          <div class="mb-8">
            <p class="flex items-center text-sm text-gray-200">
              <svg class="mr-2 h-3 w-3 fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"></path>
              </svg>
              Members only
            </p>
            <a href="#" class="mb-2 inline-block text-lg font-bold text-gray-100 hover:text-indigo-600">مراحل ساخت گلخانه </a>
            <p class="text-sm text-gray-100">شرایط لازم برای ساخت گلخانه وام ساخت گلخانه شرکت گل افروز : این شرایط شامل افرادی می شود که ...</p>
          </div>
          <div class="flex items-center">
            <a href="#"><img class="mr-4 h-10 w-10 rounded-full" src="https://golafrooz.com/wp-content/uploads/2024/04/0ae9ed80-d75a-11ee-8ad5-ff43cbdef7a2.jpg" alt="Avatar of Jonathan Reinink" /></a>
            <div class="text-sm">
              <a href="#" class="font-semibold leading-none text-gray-100 hover:text-indigo-600">وحید سهرابی</a>
              <p class="text-gray-300">Aug 18</p>
            </div>
          </div>
        </div>
      </div>
11111111
      <div class="shadow-2xl flex flex-col justify-between rounded-lg border-4 border-b border-gray-900 bg-gray-900 leading-normal lg:border-gray-900">
        <img src="https://golafrooz.com/wp-content/uploads/2024/04/2147483648_-210168.jpg" class="mb-3 h-full w-full rounded-lg" />
        <div class="p-4 pt-2">
          <div class="mb-8">
            <p class="flex items-center text-sm text-gray-200">
              <svg class="mr-2 h-3 w-3 fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"></path>
              </svg>
              Members only
            </p>
            <a href="#" class="mb-2 inline-block text-lg font-bold text-gray-100 hover:text-indigo-600">وام گلخانه </a>
            <p class="text-sm text-gray-100">انواع وام ساخت گلخانه وام گلخانه جهاد کشاورزی یکی از مهم‌ترین منابع تأمین مالی برای احداث و ساخت گلخانه، ...</p>
          </div>
          <div class="flex items-center">
            <a href="#"><img class="mr-4 h-10 w-10 rounded-full" src="https://golafrooz.com/wp-content/uploads/2024/04/asadesmaeeli_11_.jpg" alt="Avatar of Jonathan Reinink" /></a>
            <div class="text-sm">
              <a href="#" class="font-semibold leading-none text-gray-100 hover:text-indigo-600">علی رضازاده</a>
              <p class="text-gray-200">oct 8</p>
            </div>
          </div>
        </div>
      </div>

      <div class="shadow-2xl flex flex-col justify-between rounded-lg border-4 border-gray-900 bg-gray-900 leading-normal lg:border-gray-900">
        <img src="https://golafrooz.com/wp-content/uploads/2024/04/2147483648_-210164-scaled.jpg" class="mb-3 h-full w-full rounded-lg" />
        <div class="p-4 pt-2">
          <div class="mb-8">
            <p class="flex items-center text-sm text-gray-200">
              <svg class="mr-2 h-3 w-3 fill-current text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"></path>
              </svg>
              Members only
            </p>
            <a href="#" class="mb-2 inline-block text-lg font-bold text-gray-100 hover:text-indigo-600">گلخانه سازی تسهیلات اعطایی گلخانه سازی</a>
            <p class="text-sm text-gray-100">تسهیلات شرکت گل افروز جهت گلخانه سازی شرکت پالیز کامیاب گل افروز در راستای تحقق بخشیدن به اهداف ...</p>
          </div>
          <div class="flex items-center">
            <a href="#"><img class="mr-4 h-10 w-10 rounded-full" src="https://golafrooz.com/wp-content/uploads/2024/04/poster_54d22020-e136-42a8-a8f4-77940cc07ef2.jpeg" alt="Avatar of Jonathan Reinink" /></a>
            <div class="text-sm">
              <a href="#" class="font-semibold leading-none text-gray-100 hover:text-indigo-600">محمد زارع</a>
              <p class="text-gray-200">Sep 11</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?PHP
}
?>